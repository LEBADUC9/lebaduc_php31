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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Người dùng</h1>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Người dùng
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Avatar</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </thead>
                                    <?php foreach($users as $user){ ?>
                                    <tr>
                                        
                                        <td><?= $user['id'] ?></td>
                                        <td><?= $user['name'] ?></td>
                                        <td>
                                            <img src="<?=$user['avatar']?>" width="100px" height="100px" style="object-fit: cover;">
                                        </td>
                                        <td class="slug"><?= $user['password'] ?></td>
                                        <td class="description"><?= $user['email'] ?></td>
                                        <td class="action">
                                            <a href="index.php?mod=categories&act=show&id=<?=$cate['id']?>" class="btn btn-primary">Detail</a>
                                            <a href="index.php?mod=categories&act=edit&id=<?=$cate['id']?>" class="btn btn-success">Edit</a>
                                            <a href="index.php?mod=categories&act=delete&id=<?=$cate['id']?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
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
