<div class="container">
  <div class="card">
    <div class="card-header">
      Danh sách đánh giá
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col" style="width: 50px;">STT</th>
            <th scope="col" style="width: 150px;">Họ tên khách hàng</th>
            <th scope="col" style="width: 100px;">Email</th>
            <th scope="col" style="width: 80px;">Product ID</th>
            <th scope="col" style="width: 390px;">Nội dung đánh giá</th>
            <th scope="col" style="width: 80px;">Trạng thái</th>
            <th scope="col" style="width: 100px;">Quản lý</th>
          </tr>
        </thead>
        <tbody>
          <?php  
          foreach($review_list_pagination as $key => $review){
          ?>
          <tr>
            <th scope="row" style="width: 50px;"><?php echo $key + 1 ?></th>
            <td style="width: 150px;"><?php echo $review->name ?></td>
            <td style="width: 200px;"><?php echo $review->email ?></td>
            <td style="width: 100px;"><?php echo $review->product_id ?></td>
            <td style="width: 200px; word-wrap: break-word;"><?php echo $review->review ?></td>
            <td style="width: 100px;"><?php echo $review->status ?></td>
            <td style="width: 150px;">
              <div class="btn-group">
              
                <a  href="<?php echo base_url('review/edit/'.$review->id) ?>" class="btn btn-info">Sửa</a>
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
