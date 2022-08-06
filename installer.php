<?php
ob_start();
require_once 'installer/helpers/helper_functions.php';

$ENV = getLaravelEnv();

if (isset($_POST['install'])) {

    if (isset (

            $_POST['db']['host'],
            $_POST['db']['name'],
            $_POST['db']['user'],
            $_POST['db']['pass'],

            $_POST['mail']['host'],
            $_POST['mail']['port'],
            $_POST['mail']['user'],
            $_POST['mail']['pass'],
            $_POST['mail']['email'],

            $_POST['site']['name']

        ) &&
        !empty($_POST['db']['host']) &&
        !empty($_POST['db']['name']) &&
        !empty($_POST['db']['user']) &&
        !empty($_POST['site']['name'])
    ) {

        foreach($ENV as $key => $item){
            if(is_array($item)){
                if($item[0] == 'APP_NAME'){
                    $ENV[$key][1] = $_POST['site']['name'];
                }
                elseif($item[0] == 'DB_HOST'){
                    $ENV[$key][1] = $_POST['db']['host'];
                }
                elseif($item[0] == 'DB_DATABASE'){
                    $ENV[$key][1] = $_POST['db']['name'];
                }
                elseif($item[0] == 'DB_USERNAME'){
                    $ENV[$key][1] = $_POST['db']['user'];
                }
                elseif($item[0] == 'DB_PASSWORD'){
                    $ENV[$key][1] = $_POST['db']['pass'];
                }
                elseif($item[0] == 'MAIL_HOST'){
                    $ENV[$key][1] = $_POST['mail']['host'];
                }
                elseif($item[0] == 'MAIL_PORT'){
                    $ENV[$key][1] = $_POST['mail']['port'];
                }
                elseif($item[0] == 'MAIL_USERNAME'){
                    $ENV[$key][1] = $_POST['mail']['user'];
                }
                elseif($item[0] == 'MAIL_PASSWORD'){
                    $ENV[$key][1] = $_POST['mail']['pass'];
                }
                elseif($item[0] == 'MAIL_FROM_ADDRESS'){
                    $ENV[$key][1] = $_POST['mail']['email'];
                }
            }
        }

        $upload = true;
        if(!empty($_FILES['logo']['name'])){
            $upload = uploadFile($_FILES['logo'], 'logo');
        }
        if(!empty($_FILES['favicon']['name'])){
            $upload = uploadFile($_FILES['favicon'], 'favicon');
        }

        if(!$upload){
            $error = 'مشکلی در آپلود تصاویر به وجود آمده است.';
        }else{
            $run_installer = true;
        }

    }else{
        $error = 'اطلاعات به درستی وارد نشده اند.';
    }

}

require_once "installer/view/install-box.php";

ob_end_flush();
