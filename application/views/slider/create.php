<div class="container">
  <div class="card">
    <div class="card-header">
      Thêm slider
    </div>
    <div class="card-body">
      <?php
      if ($this->session->set_flashdata('success')) {
        ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
        <?php
      } elseif ($this->session->flashdata('error')) {
        ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>
        <?php
      }
      ?>
      <form action="<?php echo base_url('slider/store') ?> " method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Tên thương hiệu</label>
          <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Nhập tên slider">
          <?php echo '<span class="text-danger">'.form_error('title').'</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả</label>
          <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả">
          <?php echo '<span class="text-danger">'.form_error('description').'</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Hình ảnh slider</label>
          <input type="file" name="image" class="form-control-file">
          <small><?php if(isset($error)){echo $error;} ?></small>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Trạng thái</label>
          <select class="form-control" name="status" id="exampleFormControlSelect1">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
      </form>
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
