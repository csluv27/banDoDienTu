<div class="container">
  <div class="card">
    <div class="card-header">
      Danh sách slider
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">STT</th>
            <th scope="col" style="max-width: 90px;">Tên slider</th>
            <th scope="col" style="max-width: 500px;">Mô tả</th>
            <th scope="col" style="max-width: 120px; text-align: center;">Hình ảnh</th>
            <th scope="col" style="max-width: 90px;">Trạng thái</th>
            <th scope="col" style="max-width: 90px;">Quản lý</th>
          </tr>
        </thead>
        <tbody>
          <?php  
          foreach($slider as $key => $sli){
          ?>
          <tr>
            <th scope="row"><?php echo $key + 1?></th>
            <td><?php echo $sli->title ?></td>
            <td style="max-width: 500px;"><?php echo $sli->description ?></td>
            <td style="max-width: 100px; text-align: center;">
              <img src="<?php echo base_url('uploads/slider/').$sli->image ?>" style="width: 80%; height: 80%; object-fit: contain;" >
            </td>
            <td>
              <?php
                if($sli->status == 1){
                  echo 'Active';
                }else{
                  echo 'Inactive';
                }
              ?>
            </td>
            <td style="max-width: 90px;">
              <div class="btn-group">
                <a onclick="return confirm('Xác nhận xóa');" href="<?php echo base_url('slider/delete/'.$sli->id) ?>" class="btn btn-danger">Xóa</a>
                <a href="<?php echo base_url('slider/edit/'.$sli->id) ?>" class="btn btn-info">Sửa</a>
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