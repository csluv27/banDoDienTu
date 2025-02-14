<div class="container">
  <div class="card">
    <div class="card-header">
      Sửa thông tin thương hiệu
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
      <form action="<?php echo base_url('brand/update/' . $brand->id) ?> " method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Tên thương hiệu</label>
          <input type="text" name="title" value="<?php echo $brand->title ?>" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Nhập tên thương hiệu">
          <?php echo '<span class="text-danger">' . form_error('title') . '</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả</label>
          <input type="text" name="description" value="<?php echo $brand->description ?>" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả">
          <?php echo '<span class="text-danger">' . form_error('description') . '</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Slug</label>
          <input type="text" name="slug" value="<?php echo $brand->slug ?>" class="form-control" id="exampleInputPassword1" placeholder="Nhập slug">
          <?php echo '<span class="text-danger">' . form_error('slug') . '</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Hình ảnh thương hiệu</label>
          <input type="file" name="image" class="form-control-file">
          <img src="<?php echo base_url('uploads/brand/') . $brand->image ?>" width="100" height="100">
          <small><?php if (isset($error)) { echo $error; } ?></small>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Trạng thái</label>
          <select class="form-control" name="status" id="exampleFormControlSelect1">
            <?php if ($brand->status == 1) { ?>
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
