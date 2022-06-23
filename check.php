<?php
require "function.php";

if (isset($_POST['btn_submit']) && !empty($_POST['input_code'])) {
    $code = $_POST['input_code'];
    $requests = findReply($code);
    $record = $requests->fetch(PDO::FETCH_ASSOC);
}

?>


<!DOCTYPE html>
<html lang="fa-IR" dir='rtl'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.rtl.css">
    <title>پیگیری درخواست</title>
</head>

<body>

    <!-- Container
    ======================================= -->
    <div class="container">
        <div class="card text-dark bg-light mb-3 mt-5 col-lg-6 m-auto">
            <div class="card-header">فرم پیگیری درخواست پشتیبانی</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <label for="input_code" class="col-sm-2 col-form-label">شماره پیگیری</label>
                        <div class="col-sm-10">
                            <input type="text" name="input_code" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="btn_submit" class="btn btn-primary w-25 ">نمایش درخواست</button>
                </form><!-- form end -->
                <?php if (isset($record['reply'])) : ?>
                    <p class="mt-5">متن درخواست :</p>
                    <h6 class="alert alert-secondary"><?php echo $record['content']; ?></h3>
                        <p class="mt-5">پاسخ پشتیبان :</p>
                        <h6 class="alert alert-info"><?php echo $record['reply']; ?></h3>
                        <?php elseif (isset($_POST['btn_submit'])) : ?>
                            <h6 class="mt-3 alert alert-warning">فعلا پاسخی برای این کد پیگیری ثبت نشده است!</h3>
                            <?php endif ?>

                            <a href="index.php" class="mt-3 btn btn-outline-primary w-25 ">بازگشت</a>
            </div><!-- .card-body end -->
        </div><!-- .card end -->
    </div><!-- .container end -->

    <!-- <i class="fab fa-telegram"></i> -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="all.js"></script>
</body>
</html>