<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
        <form action="upload_file.php" enctype="multipart/form-data" method="POST" role="form">
          <br>
          <?php if(isset($_SESSION['uploadStatus']) && $_SESSION['uploadStatus'] == false){ ?>
            <div class="alert alert-danger" role="alert">
                <?php
                    foreach($_SESSION['uploadStatus'][1] as $error){
                        echo "$error";
                    }
                    unset($_SESSION['uploadStatus']);
                ?>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['uploadStatus']) && $_SESSION['uploadStatus'] == true){ ?>
                <div class="alert alert-danger" role="alert">
                    Đường dẫn sau khi upload: <?= $_SESSION['uploadStatus'][1]; ?>
                </div>
            <?php
                unset($_SESSION['uploadStatus']);
                }
            ?>
            <legend>Upload Document</legend>
            <div class="form-group">
                <label for="">Tên tài liệu</label>
                <input type="text" class="form-control" name="document_name">
            </div>
            <div class="form-group">
                <label for="">Images</label>
                <input type="file" class="form-control" name="avatar">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
</html>