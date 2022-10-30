<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="infor_add_process.php" method="POST" role="form">
          <br>
            <h1>zent group - php - thực hành về gửi dữ liệu sử dụng post</h1>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" placeholder="Nhập họ tên" name="name">
            </div>
            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="radio" name="sex" value="Nam"> Nam
                <input type="radio" name="sex" value="Nữ"> Nữ
                <input type="radio" name="sex" value="Không xác định"> Không xác định
            </div>
            <div class="form-group">
                <label for="">Ngày sinh</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-group">
                <label for="">Quê quán</label>
                <input type="text" class="form-control" name="country">
            </div>
            <div class="form-group">
                <label for="">Ngoại ngữ</label>
                <input type="checkbox" name="lag" value="Tiếng Anh"> Tiếng Anh
                <input type="checkbox" name="lag" value="Tiếng Nhật"> Tiếng Nhật
                <input type="checkbox" name="lag" value="Tiếng Pháp"> Tiếng Pháp
            </div>
            <div class="form-group">
                <label for="">Thông tin thêm</label>
                <textarea class="form-control" name="moreInfor"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Xác nhận</button>
        </form>
    </div>
</body>
</html>