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
                        <h1 class="mt-4">Trang chủ</h1>
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Bài viết nổi bật
                                    </div>
                                    <div class="card-body">
                                        <!-- <canvas id="myAreaChart" width="100%" height="40"></canvas> -->
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th class="outstanding">ID</th>
                                                    <th class="outstanding">Title</th>
                                                    <th class="outstanding">Thumbnail</th>
                                                    <th class="outstanding">Slug</th>
                                                    <th class="outstanding">View</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php foreach($outstanding as $posts){ ?>
                                                <tr>
                                                    <td class="outstanding"><?= $posts['id'] ?></td>
                                                    <td class="outstanding"><?= $posts['title'] ?></td>
                                                    <td class="outstanding">
                                                        <img src="<?=$posts['thumbnail']?>" width="100px" height="100px" style="object-fit: cover;">
                                                    </td>
                                                    <td class="outstanding"><?= $posts['slug'] ?></td>
                                                    <td class="outstanding"><?= $posts['view_count'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Danh mục nổi bật
                                    </div>
                                    <div class="card-body">
                                        <!-- <canvas id="myBarChart" width="100%" height="40"></canvas> -->
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th class="outstanding">ID</th>
                                                    <th class="outstanding">Name</th>
                                                    <th class="outstanding">Thumbnail</th>
                                                    <th class="outstanding">Slug</th>
                                                    <th class="outstanding">Desription</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($outstandingCate as $cate){ ?>
                                                <tr>
                                                <td class="outstanding"><?= $cate['id'] ?></td>
                                                    <td class="outstanding"><?= $cate['category_name'] ?></td>
                                                    <td class="outstanding">
                                                        <img src="<?=$cate['category_thumbnail']?>" width="100px" height="100px" style="object-fit: cover;">
                                                    </td>
                                                    <td class="outstanding"><?= $cate['category_slug'] ?></td>
                                                    <td class="outstanding"><?= $cate['category_description'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh mục
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Thumbnail</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </thead>
                                    <?php foreach($categories as $cate){ ?>
                                    <tr>
                                        
                                        <td><?= $cate['id'] ?></td>
                                        <td><?= $cate['category_name'] ?></td>
                                        <td>
                                            <img src="<?=$cate['category_thumbnail']?>" width="100px" height="100px" style="object-fit: cover;">
                                        </td>
                                        <td><?= $cate['category_slug'] ?></td>
                                        <td><?= $cate['category_description'] ?></td>
                                        <td>
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
