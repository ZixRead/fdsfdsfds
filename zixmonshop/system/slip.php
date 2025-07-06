<?php
error_reporting(1);

require_once './a_func.php';
$config_bank = dd_q("SELECT * FROM bank")->fetch(PDO::FETCH_ASSOC);

function slip_check($qrcode)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://suba.rdcw.th/v1/inquiry',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
          "payload": "' . $qrcode . '"
      }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Basic APIKEYRDCW'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response);
}

function dd_return($status, $message)
{
    $response = [
        'status' => $status ? 'success' : 'fail',
        'message' => $message,
    ];

    http_response_code($status ? 200 : 500);
    die(json_encode($response));
}

function processTopup($codeqr, $plr)
{
    global $config_bank;
    $sc = slip_check($codeqr);

    if ($sc->valid == true) {
        $info = $sc->data;
        $amount = $info->amount;
        $recv_name = explode(" ", $info->receiver->displayName);

        if ($config_bank['fname']) {
            $ref =  $info->transRef;

            $q1 = dd_q("SELECT * FROM kbank_trans WHERE ref = ?", [$ref]);
            $q2 = dd_q("SELECT * FROM kbank_trans WHERE qr = ?", [$codeqr]);

            if ($q1->rowCount() < 1 || $q2->rowCount() < 1) {
                $senderName = $info->sender->displayName;

                $ha = dd_q(
                    "INSERT INTO `topup_his` (`id`, `link`, `amount`, `date`, `uid`, `uname`) VALUES (NULL, ? ,  ? , NOW() , ? , ? )",
                    [
                        "สลิปบัญชีชื่อ : " . $senderName,
                        $amount,
                        $_SESSION['id'],
                        $plr['username']
                    ]
                );
                $insert_ref = dd_q("INSERT INTO `kbank_trans`(`qr`, `ref`, `sender`) VALUES(?, ?, ?)", [$codeqr, $ref, $senderName]);
                $update_user = dd_q("UPDATE users SET point = point + ? WHERE id = ?", [$amount, $_SESSION['id']]);

                if ($ha && $insert_ref && $update_user) {
                    dd_return(true, "คุณเติมเงินสำเร็จจำนวน " . $amount . " บาท");
                } else {
                    dd_return(false, "SQL ผิดพลาด");
                }
            } else {
                dd_return(false, "สลิปนี้ใช้แล้ว");
            }
        } else {
            dd_return(false, "หมายเลขบัญชีหรือธนาคารไม่ตรงกลับทางร้าน");
        }
    } else {
        dd_return(false, "Qr code ไม่ถูกต้อง : " . $sc->message);
    }
}

header('Content-Type: application/json; charset=utf-8;');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['id'])) {
        $plr = dd_q("SELECT * FROM users WHERE id = ?", [$_SESSION['id']])->fetch(PDO::FETCH_ASSOC);
        if ($_POST['qrcode'] != '') {
            $codeqr = $_POST['qrcode'];

            processTopup($codeqr, $plr);
        } else {
            dd_return(false, "กรุณาส่งข้อมูลให้ครบ");
        }
    } else {
        dd_return(false, "เข้าสู่ระบบก่อนดำเนินการ");
    }
} else {
    dd_return(false, "Method '{$_SERVER['REQUEST_METHOD']}' not allowed!");
}