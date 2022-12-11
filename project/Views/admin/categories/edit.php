<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="./assets/admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            require_once './layout/menu.php'
        ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php
                    require_once './layout/sidebar.php'
                ?>
            </div>
            <div id="layoutSidenav_content">
                <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <h3 align="center">Chỉnh sửa danh mục</h3>
                        <hr>
                        <a href="index.php?mod=category&act=index" class="btn btn-primary">Back To Categories</a>
                        <form action="index.php?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="hidden" name="id" value="<?=$category['id']?>">
                                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$category['category_name']?>">
                            <!-- </div>
                            <div class="form-group"> -->
                                <label for="">Slug</label>
                                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?=$category['category_slug']?>">
                                <label for="">Description</label>
                                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$category['category_description']?>">
                            </div>
                            <button type="submit" class="btn btn-primary update">Update</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="./assets/js/datatables-simple-demo.js"></script>
    </body>
</html>
