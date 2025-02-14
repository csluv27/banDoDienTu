<section id="form"><!--form-->
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
          <h2>Đăng nhập tài khoản hội viên</h2>
          <form action="<?php echo base_url('login-customer') ?>" method="POST">
            <?php
            if ($message = $this->session->flashdata('message')) {
              echo '<div class="alert alert-success">' . $message . '</div>';
            } elseif ($error = $this->session->flashdata('error')) {
              echo '<div class="alert alert-danger">' . $error . '</div>';
            } 
            ?>
            
            <input type="email" name="email" placeholder="Nhập email" />
            <?php echo form_error('email'); ?>
            <input type="password" name="password" placeholder="Nhập mật khẩu" />
            <?php echo form_error('password'); ?>

            <button type="submit" class="btn btn-default">Đăng nhập</button>
          </form>
        </div><!--/login form-->
      </div>
      <div class="col-sm-1">
        <h2 class="or">Hoặc</h2>
      </div>
      <div class="col-sm-4">
        <div class="signup-form"><!--sign up form-->
          <h2>Đăng ký hội viên mới</h2>
          <form action="<?php echo base_url('dang-ky') ?>" method="POST">
            <input type="text" name="name" placeholder="Nhập tên hội viên" />
            <input type="email" name="email" placeholder="Nhập email" />
            <input type="password" name="password" placeholder="Nhập mật khẩu" />
            <input type="text" name="location" placeholder="Nhập địa chỉ" />
            <input type="tel" placeholder="Nhập số điện thoại" name="phone">
            <button type="submit" class="btn btn-default">Đăng ký</button>
          </form>
        </div><!--/sign up form-->
      </div>
    </div>
  </div>
</section><!--/form-->