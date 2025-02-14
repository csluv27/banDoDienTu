<div class="container">
  <div class="card">
    <div class="card-header">
      Danh sách đơn đặt hàng
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col" style="width: 50px;">STT</th>
            <th scope="col" style="width: 150px;">Mã đơn đặt</th>
            <th scope="col" style="width: 150px;">Tên người đặt</th>
            <th scope="col" style="width: 200px;">Địa chỉ</th>
            <th scope="col" style="width: 150px;">Điện thoại</th>
            <th scope="col" style="width: 150px;">Trạng thái</th>
            <th scope="col" style="width: 150px;">Quản lý</th>
          </tr>
        </thead>
        <tbody>
          <?php  
          foreach($allOrderAdmin_pagination as $key => $od){
          ?>
          <tr>
            <th scope="row" style="width: 50px;"><?php echo $key + 1?></th>
            <td style="width: 150px;"><?php echo $od->order_code ?></td>
            <td style="width: 150px;"><?php echo $od->name ?></td>
            <td style="width: 200px; word-wrap: break-word;"><?php echo $od->location ?></td> <!-- Thiết lập word-wrap cho phần địa chỉ -->
            <td style="width: 150px;"><?php echo $od->phone ?></td>
            <td style="width: 150px;">
              <?php
                if($od->status == 1){
                  echo '<span class="text text-primary">Đang xử lý</span>';
                }elseif($od->status == 2){
                  echo '<span class="text text-success">Đã giao hàng</span>';
                }else{
                  echo '<span class="text text-danger">Đã hủy</span>';
                }
              ?>
            </td>
            <td style="width: 150px;">
              <div class="btn-group">
                <a onclick="return confirm('Xác nhận xóa');" href="<?php echo base_url('order/delete/'.$od->order_code) ?>" class="btn btn-danger">Xóa</a>
                <a href="<?php echo base_url('order/view/'.$od->order_code) ?>" class="btn btn-info">Xem</a>
              </div>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
      <div class="pagination-container"> <?php echo $links; ?> </div>
    </div>
  </div>
</div>

<style>
 .btn-group {
  display: flex;
  gap: 5px; /* Khoảng cách giữa các nút */
}

.status-column {
  text-align: center;
}

.card-header {
  font-size: 30px; /* Tăng cỡ chữ */
  font-weight: bold; /* Làm đậm chữ */
  text-align: center;
}

.container {
  max-width: 1650px;
  width: 100%;
}

.table th, .table td {
  vertical-align: top;
  word-wrap: break-word;
  white-space: normal; /* Cho phép chữ xuống dòng nếu quá dài */
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

</style>