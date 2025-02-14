<div class="container">
  <div class="card">
    <div class="card-header">
      Danh sách thương hiệu
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">STT</th>
            <th scope="col" style="max-width: 90px;">Tên thương hiệu</th>
            <th scope="col" style="max-width: 500px;">Mô tả</th>
            <th scope="col" style="max-width: 120px; text-align: center;">Logo</th>
            <th scope="col" style="max-width: 90px;">Trạng thái</th>
            <th scope="col" style="max-width: 90px;">Quản lý</th>
          </tr>
        </thead>
        <tbody>
          <?php  
          foreach($brand as $key => $b){
          ?>
          <tr>
            <th scope="row"><?php echo $key + 1?></th>
            <td><?php echo $b->title ?></td>
            <td style="max-width: 500px;"><?php echo $b->description ?></td>
            <td style="max-width: 100px; text-align: center;">
              <img src="<?php echo base_url('uploads/brand/').$b->image ?>" style="width: 80%; height: 80%; object-fit: contain;" >
            </td>
            <td>
              <?php
                if($b->status == 1){
                  echo 'Active';
                }else{
                  echo 'Inactive';
                }
              ?>
            </td>
            <td style="max-width: 90px;">
              <div class="btn-group">
                <a onclick="return confirm('Xác nhận xóa');" href="<?php echo base_url('brand/delete/'.$b->id) ?>" class="btn btn-danger">Xóa</a>
                <a href="<?php echo base_url('brand/edit/'.$b->id) ?>" class="btn btn-info">Sửa</a>
              </div>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<style>
  .card-header {
  font-size: 30px; /* Tăng cỡ chữ */
  font-weight: bold; /* Làm đậm chữ */
  text-align: center;
}
.container {
  max-width: 1650px;
  width: 100%;
}
.btn-group {
  display: flex;
  gap: 5px; /* Khoảng cách giữa các nút */
}


</style>