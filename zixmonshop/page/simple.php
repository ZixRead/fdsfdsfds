<style>
    .shops {
        padding: 20px;
        border-radius: 1vh;
    }

    .shops-body {
        position: relative;
        color: #fff;
        font-weight: 600;
        height: 100%;
    }

    .shops-body>.shops-img {
        width: 100%;
        height: 100%;
        border-radius: 1vh;
        transition: all .5s ease;
    }

    .shops-body>.shops-img:hover {
        transform: scale(1.035);
    }

    .shops-body>.shops-text-center {
        position: absolute;
        top: 80%;
        left: 20%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: all .5s ease;
    }

    .shops-body:hover>.shops-text-center {
        left: 50%;
        opacity: 1;
        font-size: 30px;
        padding: 0 20px;
        border-radius: 2vh;
        background-color: var(--main);
    }
</style>
<style>
   .img-anim {
        position: relative;
        text-align: center;
        overflow: hidden;
        border-radius: 1vh;
    }

    .img-anim img {
        width: 100%;
        height: auto;
        margin-left: auto;
    }

    .img-anim>img {
        background-size: cover;
        background-position: center;
        transition: all 0.3s ease;
    }

    .img-anim>div.bg {
        position: absolute;
        z-index: 2;
        opacity: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(1, 1, 1, 0.3);
        transition: all 0.3s ease;
    }

    .img-anim>div.text {
        position: absolute;
        z-index: 3;
        top: 120%;
        left: 50%;
        opacity: 0;
        color: #fff;
        font-size: 20px;
        border-bottom: 3px solid transparent;
        border-image: linear-gradient(to right, var(--main), var(--main));
        border-image-slice: 1;
        transform: translate(-50%, -50%);
        transition: all 0.3s ease;
    }

    .img-anim:hover>img {
        transform: scale(1.1);
    }

    .img-anim:hover>div {
        opacity: 1;
    }

    .img-anim:hover>div.text {
        top: 80%;
        opacity: 1;
    }

    .content {
        height: auto;
        border: 3px solid rgba(0, 0, 0, .3);
        transition: all .5s ease;
    }

    .content:hover {
        border: 3.5px solid var(--main);
    }
    .font-bold {
        font-weight: 700;
    }
    .font-semibold {
        font-weight: 600;
    }  
    .border-hov {
        border: 1px solid #ccc;
        transition: 0.3s ease-in-out;
    }
</style>

<div class="container-fluid  mt-4 p-0 ">
        <div class="container p-4 pt-0 pb-0 m-cent">
            <div id="carouselExampleControls" class="carousel slide border-spe" data-bs-ride="carousel" style="border-radius: 1vh;">
                <div class="carousel-inner" style="border-radius: 1vh;">
                    <?php
                    $active = false;
                    $find = dd_q("SELECT * FROM carousel");
                    while ($row = $find->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <div class="carousel-item <?php if (!$active) {
                                                        echo "active";
                                                        $active = true;
                                                    } ?>">
                            <img src="<?php echo $row['link'] ?>" class="d-block w-100" alt="..." style="border-radius: 1vh;">
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="container-sm m-auto p-4 pb-0">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="container-fluid p-0 bg-white rounded shadow-sm border  mb-4">
                        <a href="?page=shop" style="text-decoration: none;" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="align-self-center pt-3 pb-1 ">
                                <center>
                                    <img src="assets/icon/shopping-cart.png" style="height: 3rem;">
                                    <h4 class="text-dark mt-2">&nbsp;เลือกซื้อสินค้า</h4>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="container-fluid p-0 bg-white rounded shadow-sm border  mb-4">
                        <a href="?page=topup" style="text-decoration: none;" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="align-self-center pt-3 pb-1 ">
                                <center>
                                    <img src="assets/icon/credit.png" style="height: 3rem;">
                                    <h4 class="text-dark mt-2">&nbsp;เติมเงิน</h4>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="container-fluid p-0 bg-white rounded shadow-sm border  mb-4">
                        <a href="?page=redeem" style="text-decoration: none;" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="align-self-center pt-3 pb-1 ">
                                <center>
                                    <img src="assets/icon/promo.png" style="height: 3rem;">
                                    <h4 class="text-dark mt-2">&nbsp;แลกโค้ด</h4>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="container-fluid p-0 bg-white rounded shadow-sm border  mb-4">
                        <a href="?page=premiumapp" style="text-decoration: none;" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="align-self-center pt-3 pb-1 ">
                                <center>
                                    <img src="assets/icon/tracking-app.png" style="height: 3rem;">
                                    <h4 class="text-dark mt-2">&nbsp;แอพพรีเมี่ยม</h4>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container" style="margin-top:px50;margin-bottom:px50;">
    <div class="container  border border-1-5 mb-3"  style="background: white;border-radius: 10px;padding: 20px;"  data-aos="flip-down" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1500">
        <br>
        <span class="card-title"><b><i class="fa fa-shopping-bag" aria-hidden="true"></i> รายการสั่งซื้อ </b> <span style="color:#999;font-size: 75%; ">(ล่าสุด)</h6></span>
        <hr>
        <marquee direction="left">
            <div class=" d-flex flex-row ">
                <?php
                    $curl = curl_init();
                        curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api_app_premium.byshop.me/api/history',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 1,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        //ดึกรายการซื้อสินค้า API ใส่ keyapi เพื่อแสดงรายการขาย
                        CURLOPT_POSTFIELDS => array('keyapi' => 'ใส่คีย์ของท่าน'),
                        CURLOPT_HTTPHEADER => array(
                            'Cookie: PHPSESSID=u8df3d96ij8re36ld76cl64t3p'
                        ),
                    ));

                    $response = curl_exec($curl);
                    $listbuy = json_decode($response);
                    $product_list_buy = '';
					//กำหนดรายการขายล่าสุด 10 รายการ
                    for ($i=0; $i < 10 ; $i++) { 
                        $product_list_buy .= '

                        <div style="background-color: #ffffff;font-size: 60%" class=" d-flex mr-5 mt-3"> <br>  
                        <img class="img-fluid rounded" style="margin:0 auto;  height: 50px;" src="https://img_app.byshop.me/buy/img/img_app/'. substr ($listbuy[$i]->name ,0,2).'.png">
                        <span><b>&nbsp;&nbsp;&nbsp;'. $listbuy[$i]->name .'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                        <br>&nbsp;&nbsp;&nbsp;'. $listbuy[$i]->time .'<br>
                        <b><p style="font-size: 13px">&nbsp;&nbsp;<span class="rounded-pill badge bg-success">&nbsp;&nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i> ขายแล้ว !! &nbsp;&nbsp;</span></b></p>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
						';
                    }
					
					
					// แสดงรายการขาย
                    echo $product_list_buy;
                    curl_close($curl);
                ?>
        </marquee>        
    </div>
<div class="container p-0 mb-">
    <div class="container-sm ps-4 pe-4 ">
        <div class="w-150 bg-white shadow-sw border border-2 ps-3 pe-4 align-contant-center" style="border-radius: 1vh;">
            <div class="row">
                <div class="col-12 ps-5 pe-5 ps-lg-0 pe-lg-0 col-lg-2 p-2 text-white">
                    <div class="p-2" style="background-color: var(--main); border-radius: 1vh; font-weight: 600; font-size: 20px;">
                        <p class="text-center m-0"><img src="https://cdn-icons-png.flaticon.com/512/8306/8306906.png" width="25"> &nbsp;ประกาศ</p>
                    </div>
                </div>
                <div class="col p-2 mt-lg-2">
                    <marquee><?= $config['ann'] ?></marquee>
                </div>
            </div>
        </div>
    </div>
    <div class="container-sm ps-4 pe-4 mt-3">
        <div class="w-100">
            <div class="row ">
                <?php
                $check = dd_q("SELECT * FROM crecom WHERE recom_1 != 0 AND recom_2 != 0");
                if ($check->rowCount() == 1) {
                    $data = $check->fetch(PDO::FETCH_ASSOC);
                    for ($i = 1; $i <= 2; $i++) {
                        $recom = "recom_" . $i;
                        $find = dd_q("SELECT * FROM category WHERE c_id = ? ", [$data[$recom]]);
                        $row = $find->fetch(PDO::FETCH_ASSOC);
                ?>
                <div class="col-12 col-lg-6 mb-3">
                    <a href="?page=shop&category=<?= htmlspecialchars($row['c_name']) ?>">
                        <div class="img-anim content w-100">
                            <img class="bg" src="<?= htmlspecialchars($row['img']) ?>">
                            <div class="text font-bold">
                                <?= htmlspecialchars($row['des']) ?>
                            </div>
                        </div>
                    </a>
                </div>
                    <?php
                    }
                } else {
                    ?>
                    <?php
                    $find = dd_q("SELECT * FROM category ORDER BY RAND() LIMIT 2");
                    while ($row = $find->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div class="col-12 col-lg-6  mb-3">
                        <a href="?page=shop&category=<?= htmlspecialchars($row['c_name']) ?>">
                            <div class="img-anim content w-100">
                                <img class="bg" src="<?= htmlspecialchars($row['img']) ?>">
                                <div class="text font-bold">
                                    <?= htmlspecialchars($row['des']) ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <div class="container-sm p-3">
        <div class="container-fluid" style="border-radius: 1vh;">
            <div class="d-flex justify-content-between">
                <span class="h4 text-secondary "> <img src="assets/icon/shopping-cart.png" class="m-0 mb-2" style="height: 2.5rem;">&nbsp;<b>สินค้าแนะนำจากทางเรา</b></span>
                <a href="?page=shop" class="btn mb-2 bg-main-gra align-self-center ps-4 pe-4 pt-2 pb-2 d-none d-lg-block" style="text-decoration: none;">
                    <h4 class="text-white m-0">เลือกซื้อเพิ่มเติม</h4>
                </a>
            </div>
            <hr class="mt-1">
            <style>
                .cc {
                    width: 100%;
                    max-width: 250px;
                }

                @media only screen and (max-width: 1000px) {
                    .cc {
                        width: 100%;
                        max-width: 100vh;
                    }
                }
            </style>
            <div class="row justify-content-center justify-content-lg-start">
                <?php
                $check = dd_q("SELECT * FROM recom WHERE recom_1 != 0 AND recom_2 != 0 AND recom_3 != 0 AND recom_4 != 0 AND recom_5 != 0 AND recom_6 != 0 AND recom_7 != 0 AND recom_8 != 0 AND recom_9 != 0 AND recom_10 != 0");
                if ($check->rowCount() == 1) {
                    $data = $check->fetch(PDO::FETCH_ASSOC);
                    for ($i = 1; $i <= 10; $i++) {
                        $recom = "recom_" . $i;
                        $find = dd_q("SELECT * FROM box_product WHERE id = ? ", [$data[$recom]]);
                        $row = $find->fetch(PDO::FETCH_ASSOC);
                        $stock = dd_q("SELECT * FROM box_stock WHERE p_id = ? ", [$row["id"]]);
                        $count = $stock->rowCount();
                        if ($count  == NULL) {
                            $count = 0;
                        }
                ?>
                        <div class="col-12 col-lg-3 mb-4" data-aos="zoom-in">
                            <div class="card-body bg-white border border-2 shadow-sm p-0 text-white" style="border-radius: 1vh; overflow: hidden; height: fit-content;">
                                <div class="p-1">
                                    <div class="view overlay">
                                        <center>
                                            <img class="img-fluid " src="<?php echo htmlspecialchars($row["img"]); ?>" style="border-radius: 1vh; width: 100%; max-width: 100vh;">
                                        </center>
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body p-3 pt-3 pb-1">
                                        <center>
                                            <h5 class="text-dark text-strongest mb-1" style="word-wrap: break-word;"><?php echo htmlspecialchars($row["name"]); ?></h5>
                                        </center>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-main  align-self-center m-0 "><strong>เหลือ <?php echo $count; ?> ชิ้น</strong></p>
                                            <p class="text-white main-badge bg-main align-self-center m-0"><strong><?php echo number_format($row['price']); ?> บาท</strong></p>
                                        </div>
                                        <center><button class="btn bg-main w-100 text-white mt-3 mb-2" style="border-radius: 10px;" onclick="tobuy(<?php echo $row['id'] ?>, '<?php echo htmlspecialchars($row['name']); ?>', '<?= $count ?>')"><i class="fa-regular fa-shopping-basket"></i>&nbsp;สั่งซื้อตอนนี้เลย </button></center>
                                        <center class="mb-2"><a href="#" style="text-decoration: none;"><span class="w-100 text-secondary mt-4 mb-4" onclick="detail(<?php echo $row['id']; ?>)"><i class="fa-regular fa-info-circle"></i>&nbsp;รายละเอียดสินค้า</span></a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <?php
                    $find = dd_q("SELECT * FROM box_product ORDER BY id DESC LIMIT 10");
                    while ($row = $find->fetch(PDO::FETCH_ASSOC)) {
                        $stock = dd_q("SELECT * FROM box_stock WHERE p_id = ? ", [$row["id"]]);
                        $count = $stock->rowCount();
                        if ($count  == NULL) {
                            $count = 0;
                        }
                    ?>
                        <div class="col-12 col-lg-3 mb-4" data-aos="zoom-in">
                            <div class="card-body bg-white border border-2 shadow-sm p-0 text-white" style="border-radius: 1vh; overflow: hidden; height: fit-content;">
                                <div class="p-1">
                                    <div class="view overlay">
                                        <center>
                                            <img class="img-fluid " src="<?php echo htmlspecialchars($row["img"]); ?>" style="border-radius: 1vh; width: 100%; max-width: 100vh;">
                                        </center>
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body p-3 pt-3 pb-1">
                                        <center>
                                            <h5 class="text-dark text-strongest mb-1" style="word-wrap: break-word;"><?php echo htmlspecialchars($row["name"]); ?></h5>
                                        </center>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-main  align-self-center m-0 "><strong>เหลือ <?php echo $count; ?> ชิ้น</strong></p>
                                            <p class="text-white main-badge bg-main align-self-center m-0"><strong><?php echo number_format($row['price']); ?> บาท</strong></p>
                                        </div>
                                        <center><button class="btn bg-main w-100 text-white mt-3 mb-2" style="border-radius: 10px;" onclick="tobuy(<?php echo $row['id'] ?>, '<?php echo htmlspecialchars($row['name']); ?>', '<?= $count ?>')"><i class="fa-regular fa-shopping-basket"></i>&nbsp;สั่งซื้อตอนนี้เลย </button></center>
                                        <center class="mb-2"><a href="#" style="text-decoration: none;"><span class="w-100 text-secondary mt-4 mb-4" onclick="detail(<?php echo $row['id']; ?>)"><i class="fa-regular fa-info-circle"></i>&nbsp;รายละเอียดสินค้า</span></a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php
                }
                ?>
            </div>
            <a href="?page=shop" class="btn mb-2 bg-main-gra align-self-center ps-4 pe-4 pt-2 pb-2 d-block d-lg-none" style="text-decoration: none;">
                <h4 class="text-white m-0">เลือกซื้อเพิ่มเติม</h4>
            </a>
        </div>
    </div>
    <!-- </div>
</div> -->
    <div class="container m-cent  p-4 pt-2 pb-2 " style="border-radius: 1vh;">

        <?php
        $boxlog = dd_q("SELECT * FROM boxlog");
        $b_count = $boxlog->rowCount() + $static['b_count'];
        $boxlog = dd_q("SELECT * FROM box_stock");
        $s_count = $boxlog->rowCount() + $static['s_count'];
        $boxlog = dd_q("SELECT * FROM users");
        $m_count = $boxlog->rowCount() + $static['m_count'];
        ?>
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="container-sm mb-4 mb-lg-0 p-3 ps-0 pe-0  bg-white border border-2" style="border-radius: 1vh;">
                    <center>
                        <img src="assets/icon/in-stock.png" alt="" style="height: 68px;"> <br>
                        <span class="text-main" id="count" style="font-size: 36px;" data-target="<?php echo $s_count; ?>"></span>
                        <span style="font-size: 36px;" class="text-main">&nbsp;ชิ้น</span>
                        <h5 class="text-secondary">พร้อมจำหน่าย</h5>
                    </center>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container-sm mb-4 mb-lg-0   p-3 ps-0 pe-0    bg-white border border-2" style="border-radius: 1vh;">
                    <center>
                        <img src="assets/icon/out-of-stock.png" alt="" style="height: 68px;"><br>
                        <span class="text-main" id="count" style="font-size: 36px;" data-target="<?php echo $b_count; ?>"></span>
                        <span style="font-size: 36px;" class="text-main">&nbsp;ครั้ง</span>
                        <h5 class="text-secondary">จำหน่ายไปแล้ว</h5>
                    </center>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container-sm mb-4 mb-lg-0   p-3 ps-0 pe-0    bg-white border border-2" style="border-radius: 1vh;">
                    <center>
                        <img src="assets/icon/user.png" alt="" style="height: 68px;"><br>
                        <span class="text-main" id="count" style="font-size: 36px;" data-target="<?php echo $m_count; ?>"></span>
                        <span style="font-size: 36px;" class="text-main">&nbsp;คน</span>
                        <h5 class="text-secondary">มีสมาชิกทั้งหมด</h5>
                    </center>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="product_detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa-duotone fa-shopping-basket"></i>&nbsp;&nbsp;รายละเอียดสินค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-9 m-cent">
                        <img src="assets/img/mysbox.png" class="img-fluid" id="p_img">
                        <center class="mt-4">
                            <h4 id="p_name" style="word-wrap: break-word;">N/A</h4>
                        </center>

                    </div>
                    <div class="container-fluid ps-3 pe-3">
                        <p class="text-dark m-0"><i class="fa-regular fa-info-circle"></i> รายละเอียดสินค้า </p>
                        <hr class=" mt-1 mb-1">
                        <p class="text-secondary" style="word-wrap: break-word; white-space:pre-wrap;" id="p_des">N/A
                            <hr class=" mt-1 mb-1">
                            <b>
                                ⚠ คำเตือน :
                                ระบบมีโอกาสเกิดข้อผิดพลาดได้ทุกเมื่อ <br>
                                โปรดอัดคลิปวีดิโอก่อนทำการซื้อสินค้าเพื่อเป็นหลักฐาน <br>
                                หากไม่มีหลักฐานในการยืนยันทางร้าน ขอสงวนสิทธิ์รับผิดชอบ <br>
                                ต่อความเสียหายที่เกิดขึ้น ❌</b>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="system/js/countup.js"></script>
</div>
</div>
</div>
</div>