<div class="container">
  <div class="card">
    <div class="card-header">
      Sửa thông tin review
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
      <form action="<?php echo base_url('review/update/' . $review->id) ?> " method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Tên khách hàng</label>
          <input type="text" name="name" value="<?php echo $review->name ?>" readonly class="form-control" id="title" aria-describedby="emailHelp" placeholder="Nhập tên">
          <?php echo '<span class="text-danger">' . form_error('name') . '</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" name="email" value="<?php echo $review->email ?>" readonly class="form-control" id="exampleInputPassword1" placeholder="Nhập đánh giá">
          <?php echo '<span class="text-danger">' . form_error('email') . '</span>' ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Review</label>
          <input type="text" name="review" value="<?php echo $review->review ?>" readonly class="form-control" id="exampleInputPassword1" placeholder="Nhập review">
          <?php echo '<span class="text-danger">' . form_error('review') . '</span>' ?>
        </div>
      
        <div class="form-group">
          <label for="exampleFormControlSelect1">Trạng thái</label>
          <select class="form-control" name="status" id="exampleFormControlSelect1">
            <?php if ($review->status == 1) { ?>
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
