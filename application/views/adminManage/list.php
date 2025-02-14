<div class="container">
  <div class="card">
    <div class="card-header">
      Danh sách tài khoản admin
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Quản lý</th>
          </tr>
        </thead>
        <tbody> <?php foreach ($admins as $key => $admin) { ?>
            <tr>
              <th scope="row"><?php echo $key + 1 ?></th>
              <td><?php echo $admin->username; ?></td>
              <td><?php echo $admin->email; ?></td>
              <td> <?php if ($admin->status == 1) {
                echo 'Active';
              } else {
                echo 'Inactive';
              } ?> </td>
              <td>
                <div class="btn-group"> <a onclick="return confirm('Xác nhận xóa');" href="<?php echo base_url('loginController/delete_admin/' . $admin->id) ?>" class="btn btn-danger">Xóa</a>
                 <a href="<?php echo base_url('adminManage/edit/' . $admin->id) ?>" class="btn btn-info">Sửa</a> </div>
              </td>
            </tr> <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

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

  .btn-group {
    display: flex;
    gap: 5px;
  }
</style>