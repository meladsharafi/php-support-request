<?php
require "function.php";
$requests = getData();
?>

<!DOCTYPE html>
<html lang="efa-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.rtl.css">
    <title>لیست درخواست ها</title>
</head>

<body>
    <div class="container">
        <div class="card text-dark bg-light mt-5  m-auto">
            <div class="card-header">لیست درخواست های پشتیبانی کاربران</div>
            <div class="card-body overflow-auto">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>شماره موبایل</th>
                            <th>متن</th>
                            <th>تاریخ</th>
                            <th>کد پیگیری</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <?php while ($record = $requests->fetch(PDO::FETCH_ASSOC)) : ?>
                        <tr class="<?php echo empty($record['reply']) ? 'table-info' : ''; ?>">
                            <td><?php echo $record['id'] ?></td>
                            <td><?php echo $record['name'] ?></td>
                            <td><?php echo $record['mobile'] ?></td>
                            <td><?php echo $record['content'] ?></td>
                            <td><?php echo $record['created_at'] ?></td>
                            <td><?php echo $record['code'] ?></td>
                            <td><a class="btn btn-primary btn-sm" href="reply.php?id=<?php echo  $record['id']; ?>"> ثبت پاسخ</a></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
                <a href="index.php" class="mt-3 btn btn-outline-primary w-25 ">بازگشت</a>
            </div><!-- .card-body end -->
        </div><!-- .card end -->
    </div><!-- .container end -->

</body>

</html>