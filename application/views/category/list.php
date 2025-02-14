<div class="container">
  <div class="card">
    <div class="card-header">
      Danh sách danh mục
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col" style="max-width: 500px;">Mô tả</th> <!-- Tăng max-width của phần mô tả -->
            <th scope="col" style="max-width: 200px;">Slug</th>
            <th scope="col" style="max-width: 120px; text-align: center;">Logo</th>
            <th scope="col" style="max-width: 90px;">Trạng thái</th>
            <th scope="col" style="max-width: 90px;">Quản lý</th> <!-- Giảm max-width của phần quản lý -->
          </tr>
        </thead>
        <tbody>
          <?php  
          foreach($category as $key => $cate){
          ?>
          <tr>
            <th scope="row"><?php echo $key + 1?></th>
            <td><?php echo $cate->title ?></td>
            <td style="max-width: 500px;"><?php echo $cate->description ?></td> <!-- Tăng max-width của phần mô tả -->
            <td><?php echo $cate->slug ?></td>
            <td style="max-width: 100px; text-align: center;">
              <img src="<?php echo base_url('uploads/category/').$cate->image ?>" style="width: 80%; height: 80%; object-fit: contain;" >
            </td>
            <td class="status-column">
              <?php
                if($cate->status == 1){
                  echo 'Active';
                }else{
                  echo 'Inactive';
                }
              ?>
            </td>
            <td style="max-width: 90px;">
              <div class="btn-group">
                <a onclick="return confirm('Xác nhận xóa');" href="<?php echo base_url('category/delete/'.$cate->id) ?>" class="btn btn-danger">Xóa</a>
                <a href="<?php echo base_url('category/edit/'.$cate->id) ?>" class="btn btn-info">Sửa</a>
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


</style>