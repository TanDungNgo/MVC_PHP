<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>MVC_EXAMPLE</title>
    <style>
        a {
            width: 200px;
        }
    </style>
</head>

<body>
    <div style="margin: 20px 50px;">
        <h1 align="center">MVC EXAMPLE</h1>

        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="Controller/C_Student.php" class="btn btn-outline-primary btn-lg">Xem sinh viên</a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="Controller/C_Student.php?mod1" class="btn btn-outline-success btn-lg">Thêm sinh viên</a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="Controller/C_Student.php?mod2" class="btn btn-outline-secondary btn-lg">Cập nhật sinh viên</a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="Controller/C_Student.php?mod3" class="btn btn-outline-danger btn-lg">Xóa sinh viên</a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="Controller/C_Student.php?mod4" class="btn btn-outline-dark btn-lg">Tìm kiếm sinh viên</a>
            </div>
        </div>
    </div>
</body>

</html>