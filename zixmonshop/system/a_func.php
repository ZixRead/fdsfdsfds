
        <?php
            session_start();
            $host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db =  "catullusshop";
            //connect to database
            $conn = new PDO("mysql:host=$host;dbname=$db",$db_user,$db_pass);
            $conn->exec("set names utf8mb4");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //end connect to database
            //function query
            function dd_q($str, $arr = []) {
                global $conn;
                try {
                    $exec = $conn->prepare($str);
                    $exec->execute($arr);
                } catch (PDOException $e) {
                    return false;
                }
                return $exec;
            }
            //end function query

            //function check login
            function check_login(){
                if(!isset($_SESSION['id'])){
                    return false;
                }else{
                    return true;
                }
            }
            function checknull($var = []){
                foreach ($var as $key => $value) {
                    if($value == "" || empty($value) || !isset($value)){
                        return false;
                    }
                }
                return true;
            }
            $conf['sitekey'] = "6LdmDFkkAAAAAEKni0zQPY4MEtv2nxLodGLEQvVO";
            $conf['secretkey'] = "6LdmDFkkAAAAAAFYBGr37VPuRl-L1hfwraFwO5pW";
            function base_url(){
                return "";
            }
            $get_setting = dd_q("SELECT * FROM setting");
            $config = $get_setting->fetch(PDO::FETCH_ASSOC);
       
            $byshop = dd_q("SELECT * FROM byshop")->fetch(PDO::FETCH_ASSOC);
            $byshop_status = $byshop["status"];
            $byshop_key = $byshop["apikey"];
            $byshop_cost = $byshop["cost"];


            if (isset($_SESSION['id'])) {
                $q1 = dd_q("SELECT * FROM users WHERE id = ? LIMIT 1", [$_SESSION['id']]);
                $user = $q1->fetch(PDO::FETCH_ASSOC);
            }
                    