<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Báo cáo thống kê</title>
  <style>
    .card-header {
      font-size: 30px;
      font-weight: bold;
      text-align: center;
    }

    .container {
      max-width: 1650px;
      width: 100%;
    }

    .top-selling-products {
      display: flex;
      justify-content: space-around;
      flex-wrap: nowrap;
      /* Để các hình ảnh xếp theo chiều ngang */
      margin-bottom: 20px;
      overflow-x: auto;
      /* Thêm scrollbar nếu cần */
    }

    .product {
      flex: 0 0 auto;
      /* Giữ kích thước cố định cho sản phẩm */
      text-align: center;
      margin: 10px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      position: relative;
      width: 400px;
      /* Đặt kích thước chiều rộng mặc định cho sản phẩm */
    }

    .badge {
      background-color: #ff4757;
      color: white;
      font-size: 18px;
      font-weight: bold;
      padding: 5px 10px;
      border-radius: 5px;
      position: absolute;
      top: -10px;
      transform: translateX(-50%);
      left: 50%;
    }

    .product img {
      width: 250px;
      /* Tăng kích thước chiều rộng hình ảnh */
      height: auto;
      /* Giữ tỉ lệ hình ảnh */
      margin: 0 auto 10px;
    }

    .total-revenue {
      text-align: center;
      margin-top: 20px;
    }

    .product {
      width: 600px;
      /* Đặt kích thước chiều rộng lớn hơn cho sản phẩm */
    }

    .product img {
      width: 400px;
      /* Tăng kích thước chiều rộng hình ảnh */
      height: auto;
      margin: 0 auto 10px;
    }

    body {
      background: url('productPic/background.jpg');
      color: black;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">Báo cáo thống kê</div>
      <div class="card-body">
        <!-- Top 3 sản phẩm bán chạy nhất -->
        <div class="top-selling-products">
          <?php if (isset($top_selling_products)): ?>
            <?php foreach ($top_selling_products as $key => $product): ?>
              <div class="product top-<?= $key + 1 ?>">
                <div class="badge">Top <?= $key + 1 ?></div>
                <img src="<?php echo base_url('uploads/product/' . $product->image) ?>" alt="<?php echo $product->title ?>"
                  style="width:150px; height: auto; margin-bottom: 10px;">
                <p>Tên: <?= $product->name ?> (Product ID: <?= $product->product_id ?>)</p>
                <p>Giá thành: <?= number_format($product->price, 0, ',', '.') ?> VND</p>
                <p>Số lượng bán: <?= $product->quantity ?></p>
                <p>Tổng tiền bán được: <?= number_format($product->quantity * $product->price, 0, ',', '.') ?> VND</p>

              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>Không có dữ liệu sản phẩm bán chạy nhất.</p>
          <?php endif; ?>
        </div>

        <!-- Tổng doanh thu -->
        <div class="total-revenue">
          <?php if (isset($total_revenue)): ?>
            <h3>Tổng doanh thu: <?= number_format($total_revenue, 0, ',', '.') ?> VND</h3>
          <?php else: ?>
            <p>Không có dữ liệu tổng doanh thu.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>