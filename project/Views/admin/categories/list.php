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
                <main>
                <div class="container">
                    <h3 class="text-center">--- CATEGORIES ---</h3>
                    <a href="index.php?mod=categories&act=create" class="btn btn-primary">Add New Category</a>
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Thumbnail</th>
                            <th>Description</th>
                            <th>Action</th>
                        </thead>
                        <?php foreach($categories as $cate){ ?>
                        <tr>
                            
                            <td><?= $cate['id'] ?></td>
                            <td><?= $cate['name'] ?></td>
                            <td>
                                <img src="<?=$cate['thumbnail']?>" width="100px" height="100px" style="object-fit: cover;">
                            </td>
                            <td><?= $cate['description'] ?></td>
                            <td>
                                <a href="index.php?mod=categories&act=show&id=<?=$cate['id']?>" class="btn btn-primary">Detail</a>
                                <a href="index.php?mod=categories&act=edit&id=<?=$cate['id']?>" class="btn btn-success">Edit</a>
                                <a href="index.php?mod=categories&act=delete&id=<?=$cate['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="./assets/js/datatables-simple-demo.js"></script>
    </body>
</html>
