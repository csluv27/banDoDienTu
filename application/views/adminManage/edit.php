<div class="container">
  <div class="card">
    <div class="card-header">
      Sửa thông tin admin
    </div>
    <div class="card-body">
      <?php
      if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
      } elseif ($this->session->flashdata('error')) {
        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
      }
      ?>

      <form action="<?php echo base_url('adminManage/update/' . $admins->id) ?> " method="POST"
        enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Tên admin</label>
          <input type="text" name="username" value="<?php echo $admins->username ?>" class="form-control" id="title"
            aria-describedby="emailHelp" placeholder="Nhập tên admin">
          <?php echo '<span class="text-danger">' . form_error('username') . '</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" name="email" value="<?php echo $admins->email ?>" class="form-control"
            id="exampleInputPassword1" placeholder="Nhập email" readonly>
          <?php echo '<span class="text-danger">' . form_error('email') . '</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="text" name="password" value="<?php echo $admins->password ?>" class="form-control"
            id="exampleInputPassword1" placeholder="Nhập mật khẩu">
          <?php echo '<span class="text-danger">' . form_error('password') . '</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Trạng thái</label>
          <select class="form-control" name="status" id="exampleFormControlSelect1">
            <?php if ($admins->status == 1) { ?>
              <option selected value="1">Active</option>
              <option value="0">Inactive</option>
            <?php } else { ?>
              <option value="1">Active</option>
              <option selected value="0">Inactive</option>
            <?php } ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
      </form>
    </div>
  </div>
</div>

<style>
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

  .alert {
    margin-top: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-control {
    width: 100%;
  }

  .form-control-file {
    width: 100%;
  }

  .form-control-select {
    width: 100%;
  }

  .btn-primary {
    display: block;
    width: 100%;
    margin-top: 20px;
  }

  img {
    display: block;
    margin-top: 10px;
  }

  small {
    display: block;
    margin-top: 10px;
    color: red;
  }
</style>