<?php
require "function.php";
// Show Content request in readonly textarea
$reply_id = $_GET['id'];
$requests = getData($reply_id);
$record = $requests->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['btn_submit'])) {
    $reply_content = $_POST['input_reply'];
    if (!empty($reply_content)) {
        setReply($reply_id, $reply_content);
        header("Location: request.php");
    }
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
    <title>ثبت پاسخ</title>
</head>

<body>
    <!-- Container
    ======================================= -->
    <div class="container">
        <div class="card text-dark bg-light mb-3 mt-5 col-lg-6 m-auto">
            <div class="card-header">فرم ثبت پاسخ پشتیبان</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">متن درخواست کاربر</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="input_content" rows="5" readonly><?php echo $record['content'] ?></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">متن پاسخ پشتیبان</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="input_reply" rows="5"><?php echo $record['reply'] ?></textarea>
                        </div>
                    </div>
                    <button type="submit" name="btn_submit" class="btn btn-primary w-25 ">ثبت پاسخ</button>
                </form><!-- form end -->

                <a href="index.php" class="mt-3 btn btn-outline-primary w-25 ">بازگشت</a>
            </div><!-- .card-body end -->
        </div><!-- .card end -->
    </div><!-- .container end -->

</body>

</html>