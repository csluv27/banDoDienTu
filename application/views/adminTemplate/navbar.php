<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url('/dashboard') ?>">Trang Admin</a>
  <a class="nav-link" href="<?php echo base_url('/') ?>">Về trang chủ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" color="white">
          <?php echo $this->session->userdata('LoggedIn')['username']; ?> </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item"
            href="<?php echo base_url('logout') ?>">Đăng xuất</a>
          <?php if (isset($this->session->userdata('LoggedIn')['is_owner']) && $this->session->userdata('LoggedIn')['is_owner']) { ?>
            <a class="dropdown-item" href="<?php echo base_url('adminManage/list') ?>">Quản lý tài khoản admin khác</a>
            <!-- Thêm liên kết đến trang đăng ký tài khoản mới --> <a class="dropdown-item"
              href="<?php echo base_url('register-admin') ?>">Đăng ký tài khoản mới</a> <?php } ?> </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Thương hiệu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('brand/list') ?>">Danh sách thương hiệu</a>
          <a class="dropdown-item" href="<?php echo base_url('brand/create') ?>">Thêm thương hiệu</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Danh mục sản phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('category/list') ?>">Danh sách loại sản phẩm</a>
          <a class="dropdown-item" href="<?php echo base_url('category/create') ?>">Thêm danh mục sản phẩm</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Sản phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('product/list') ?>">Danh sách sản phẩm</a>
          <a class="dropdown-item" href="<?php echo base_url('product/create') ?>">Thêm sản phẩm</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Slider
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('slider/list') ?>">Danh sách slider</a>
          <a class="dropdown-item" href="<?php echo base_url('slider/create') ?>">Thêm slider</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Order
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('order/list') ?>">Danh sách sản phẩm</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Đánh giá sản phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('review/list') ?>">Danh sách đánh giá SP</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Bình luận về web
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('comment-contact/list') ?>">Danh sách bình luận</a>
        </div>
      </li>


    </ul>

  </div>
</nav>