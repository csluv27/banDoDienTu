<div class="container">
  <div class="card">
    <div class="card-header">
      Danh sách sản phẩm
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col" style="width: 50px;">STT</th>
            <th scope="col" style="width: 250px;">Tên sản phẩm</th>
            <th scope="col" style="width: 200px;">Mô tả</th> <!-- Thiết lập width cho phần mô tả -->
            <th scope="col" style="width: 100px;">Slug</th>
            <th scope="col" style="width: 100px;">Giá</th>
            <th scope="col" style="width: 100px;">Số lượng</th>
            <th scope="col" style="width: 120px; text-align: center;">Hình ảnh</th>
            <th scope="col" style="width: 150px;">Danh mục loại</th>
            <th scope="col" style="width: 150px;">Thương hiệu</th>
            <th scope="col" style="width: 90px;">Trạng thái</th>
            <th scope="col" style="width: 150px;">Quản lý</th> <!-- Thiết lập width cho phần quản lý -->
          </tr>
        </thead>
        <tbody>
          <?php
          $start_index = ($page - 1) * 10;
          foreach ($allproductAdmin_pagination as $key => $prod) {
            ?>
            <tr>
              <th scope="row" style="width: 50px;"><?php echo $start_index + $key + 1; ?></th>
              <td style="width: 150px;">
                <span class="product-title" onclick="toggleTitle(this)">
                  <?php echo htmlspecialchars($prod->title); ?>
                </span>
              </td>
              <td style="width: 200px; word-wrap: break-word;"><?php echo $prod->description ?></td>
              <!-- Thiết lập word-wrap cho phần mô tả -->
              <td style="width: 100px;"><?php echo $prod->slug ?></td>
              <td style="width: 100px;"><?php echo number_format($prod->price, 0, ',', '.') ?>vnd</td>
              <td style="width: 100px;"><?php echo $prod->quantity ?></td>
              <td style="width: 120px; text-align: center;">
                <img src="<?php echo base_url('uploads/product/') . $prod->image ?>"
                  style="width: 80%; height: 80%; object-fit: contain;">
              </td>
              <td style="width: 150px;"><?php echo $prod->tendanhmuc ?></td>
              <td style="width: 150px;"><?php echo $prod->tenthuonghieu ?></td>
              <td class="status-column" style="width: 90px;">
                <?php echo $prod->status == 1 ? 'Active' : 'Inactive'; ?>
              </td>
              <td style="width: 150px;"> <!-- Tăng max-width của phần quản lý -->
                <div class="btn-group">
                  <a onclick="return confirm('Xác nhận xóa');"
                    href="<?php echo base_url('product/delete/' . $prod->id) ?>" class="btn btn-danger">Xóa</a>
                  <a href="<?php echo base_url('product/edit/' . $prod->id) ?>" class="btn btn-info">Sửa</a>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="pagination-container"> <?php echo $links; ?> </div>
    </div>
  </div>
</div>



<style>
  .btn-group {
    display: flex;
    gap: 5px;
    /* Khoảng cách giữa các nút */
  }

  .status-column {
    text-align: center;
  }

  .card-header {
    font-size: 30px;
    /* Tăng cỡ chữ */
    font-weight: bold;
    /* Làm đậm chữ */
    text-align: center;
  }

  .container {
    max-width: 1650px;
    width: 100%;
  }

  .table th,
  .table td {
    vertical-align: top;
    word-wrap: break-word;
    white-space: normal;
    /* Cho phép chữ xuống dòng nếu quá dài */
  }

  .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .pagination li {
    list-style: none;
    margin: 0 5px;
  }

  .pagination li a {
    padding: 8px 16px;
    text-decoration: none;
    color: #007bff;
    border: 1px solid #dee2e6;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .pagination li a:hover {
    background-color: #f1f1f1;
  }

  .pagination li.active a {
    background-color: #007bff;
    color: white;
    border: 1px solid #007bff;
  }

  .product-title {
    max-width: 150px;
    /* Giữ nguyên width */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    cursor: pointer;
    display: inline-block;
    vertical-align: middle;
  }

  .product-title.expanded {
    white-space: normal;
    overflow: visible;
    text-overflow: unset;
    display: block;
  }
</style>
</div>
</div>
</div>