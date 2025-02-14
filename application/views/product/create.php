<div class="container">
  <div class="card">
    <div class="card-header">
      Thêm sản phẩm 
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
      <form action="<?php echo base_url('product/store') ?> " method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Tên sản phẩm</label>
          <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Nhập tên sản phẩm">
          <?php echo '<span class="text-danger">'.form_error('title').'</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả</label>
          <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả">
          <?php echo '<span class="text-danger">'.form_error('description').'</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Slug</label>
          <input type="text" name="slug" class="form-control" id="exampleInputPassword1" placeholder="Nhập slug">
          <?php echo '<span class="text-danger">'.form_error('slug').'</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Giá</label>
          <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Nhập giá">
          <?php echo '<span class="text-danger">'.form_error('price').'</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Số lượng</label>
          <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Nhập số lượng">
          <?php echo '<span class="text-danger">'.form_error('quantity').'</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Hình ảnh sản phẩm </label>
          <input type="file" name="image" class="form-control-file">
          <small><?php if(isset($error)){echo $error;} ?></small>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Danh mục loại</label>
          <select class="form-control" name="category_id" id="exampleFormControlSelect1">
            <?php foreach($category as $key => $cate){ ?>
              <option value="<?php echo $cate->id ?>"><?php echo $cate->title ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Thương hiệu</label>
          <select class="form-control" name="brand_id" id="exampleFormControlSelect1">
            <?php foreach($brand as $key => $b){ ?>
              <option value="<?php echo $b->id ?>"><?php echo $b->title ?></option>
            <?php } ?>
          </select>
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
