<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="installer/assets/css/bootstrap.min.css"/>
    <title>نصب فروشگاه ساز</title>
</head>
<body style="direction:rtl">

<div class="border rounded shadow-sm" style="width:900px; margin:50px auto">
    <div class="bg-light py-4 text-center rounded-top">
        <h4>نصب فروشگاه ساز</h4>
        <?php echo !isset($_POST['install']) ? '<h6 class="pt-1">خوش آمدید!</h6>' : '';?>
    </div>

    <form id="form-installer" action="" method="POST" enctype="multipart/form-data" novalidate>

        <?php include isset($_POST['install']) ? "install-result.php" : "install-form.php"; ?>

        <?php
        if(isset($install_result)){
            if($install_result){
                echo '<div class="py-2 text-center bg-success fw-bold border-top text-white">نصب فروشگاه با موفقیت انجام شد.</div>';
            }else{
                echo '<div class="py-2 text-center bg-danger fw-bold border-top text-white">مشکلی در انتقال فایل های فروشگاه به وجود آمده است.</div>';
            }
        }
        ?>

        <div class="bg-light p-3 rounded-bottom" style="direction: ltr">
            <?php
                if(!isset($_POST['install'])){
                    echo '<button type="submit" name="install" class="btn btn-success px-4">شروع نصب</button>';
                }
                if(isset($install_result)){
                    if($install_result){
                        echo '<a class="btn btn-info px-4 text-white mx-auto" href="'.dirname($_SERVER['PHP_SELF']).'">رفتن به صفحه فروشگاه</a>';
                    }else{
                        echo '<a class="btn btn-warning px-4 mx-auto" href="'.dirname($_SERVER['PHP_SELF']).'">بازگشت</a>';
                    }
                }
            ?>
        </div>

    </form>

</div>

<script type="application/javascript" src="installer/assets/js/bootstrap.bundle.min.js"></script>
<script type="application/javascript" src="installer/assets/js/installer.js"></script>
</body>
</html>
