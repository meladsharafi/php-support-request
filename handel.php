<?php
require "function.php";
$code = null;
$errorMessages = [];
$hasError = false;

$name = $_POST['input_name'];
$mobile = $_POST['input_mobile'];
$content = $_POST['input_content'];

if (empty($name)) {
    $hasError = true;
    $errorMessages[] = "لطفا نام کامل خود را وارد کنید.";
}
if (!ctype_digit($mobile)) {
    $hasError = true;
    $errorMessages[] = "شماره موبایل حتما باید عددی باشد.";
}
if (strlen($mobile) <> 11) {
    $hasError = true;
    $errorMessages[] = "لطفا تعداد رقم های شماره موبایل را بررسی کنید.";
}
if (strlen($content) < 20) {
    $hasError = true;
    $errorMessages[] = "متن درخواست کوتاه است.";
}

if (!$hasError) {
    $code = insertData($name, $mobile, $content);
}

?>

<!DOCTYPE html>
<html lang="efa-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.rtl.css">
    <title>نتیجه ثبت درخواست</title>
</head>

<body>
    <div class="container">
        <div class="card text-dark bg-light mt-5 col-lg-6 m-auto">
            <div class="card-header">نتیجه ثبت درخواست پشتیبانی</div>
            <div class="card-body">

                <?php if (!empty($code)) : ?>
                    <h6 class="text-center alert alert-success">درخواست شما با موفقیت ثبت شد. برای پیگیری این کد را ذخیره کنید: </h3>
                        <h5 class="alert alert-primary text-center">شماره پیگیری: <?php echo $code; ?></h5>
                    <?php else : ?>
                        <h6 class="text-center alert alert-warning">ورود ناقص اطلاعات، درخواستی برای شما در سیستم ثبت نشد!</h3>
                        <?php endif ?>

                        <!-- Input Check
                            ======================================= -->
                        <?php if (count($errorMessages) > 0) : ?>
                            <?php foreach ($errorMessages as $errorMessage) : ?>
                                <h6 class="text-center alert alert-info"><?php echo $errorMessage; ?></h3>
                                <?php endforeach ?>
                            <?php endif ?>

                            <a href="index.php" class="mt-3 btn btn-outline-primary w-25 ">بازگشت</a>
            </div><!-- .card-body end -->
        </div><!-- .card end -->
    </div><!-- .container end -->

</body>

</html>