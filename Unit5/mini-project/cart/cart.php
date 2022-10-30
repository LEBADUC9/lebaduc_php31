<?php
    session_start();
    $productInCart = array();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="cart.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sách sản phẩm trong kho</h2>
  <a href="index.php" class="btn btn-primary">Xem sản phẩm</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Ảnh sản phẩm</th>
        <th>Thành tiền</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
            foreach ($productInCart as $key => $product) { ?>
        <tr>
          <td><?= $product['product_code'] ?></td>
          <td><?= $product['product_name'] ?></td>
          <td><a href="" class="btn-amount">-</a><?= $product['product_amount'] ?><a href="plus.php" class="btn-amount">+</a></td>
          <td><?= number_format($product['product_price']) ?></td>
          <td><img src="<?= $product['product_images'] ?>" style="width: 100px" alt=""></td>
          <td><?=number_format($product['product_amount']*$product['product_price'])?></td>
          <td><a href="del_product.php?id=<?=$key?>" class="btn btn-warning">Xóa sản phâm</a></td>
        </tr>
        <?php }?>
    </tbody>
  </table>
</div>

</body>
</html>