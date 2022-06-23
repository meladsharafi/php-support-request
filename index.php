<!DOCTYPE html>
<html lang="fa-IR" dir='rtl'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.rtl.css">
    <title>درخواست پشتیبانی</title>
</head>

<body>

    <!-- Container
    ======================================= -->
    <div class="container">
        <div class="card text-dark bg-light mb-3 mt-5 col-lg-6 m-auto">
            <div class="card-header">فرم ثبت درخواست پشتیبانی</div>
            <div class="card-body">
                <form action="handel.php" method="post">
                    <div class="row mb-3">
                        <label for="input_name" class="col-sm-2 col-form-label">نام کامل</label>
                        <div class="col-sm-10">
                            <input type="text" name="input_name" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input_mobile" class="col-sm-2 col-form-label">شماره موبایل</label>
                        <div class="col-sm-10">
                            <input type="text" name="input_mobile" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">متن درخواست</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="input_content" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="btn_submit" class="btn btn-primary w-25 ">ثبت درخواست</button>
                </form><!-- form end -->
            </div><!-- .card-body end -->
        </div><!-- .card end -->
        <div class="card text-dark bg-light mb-3 mt-5 col-lg-6 m-auto">
            <div class="card-header">عملیات</div>
            <div class="card-body">
                <a href="request.php" class="btn btn-outline-primary w-25 ">لیست درخواست ها</a>
                <a href="check.php" class="btn btn-outline-primary w-25 ">پیگیری درخواست</a>
            </div><!-- .card-body end -->
        </div><!-- .card end -->
    </div><!-- .container end -->

    <!-- <i class="fab fa-telegram"></i> -->
    <script src="all.js"></script>
</body>

</html>