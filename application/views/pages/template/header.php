<?php
defined('BASEPATH') or exit('No direct script access allowed');
$currentURL = current_url();  // URL hiện tại
$baseURL = base_url(); // URL gốc
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= $this->config->config['pageTitle'] ?></title>
  <link href="<?php echo base_url('frontend/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('frontend/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('frontend/css/prettyPhoto.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('frontend/css/price-range.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('frontend/css/animate.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('frontend/css/main.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('frontend/css/responsive.css') ?>" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="<?php echo base_url('frontend/images/ico/favicon.ico') ?>">
  <link rel="apple-touch-icon-precomposed" sizes="144x144"
    href="<?php echo base_url('frontend/images/ico/apple-touch-icon-144-precomposed.png') ?>">
  <link rel="apple-touch-icon-precomposed" sizes="114x114"
    href="<?php echo base_url('frontend/images/ico/apple-touch-icon-114-precomposed.png') ?>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72"
    href="<?php echo base_url('frontend/images/ico/apple-touch-icon-72-precomposed.png') ?>">
  <link rel="apple-touch-icon-precomposed"
    href="<?php echo base_url('frontend/images/ico/apple-touch-icon-57-precomposed.png') ?>">
</head>

<body>
  <header id="header">
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-phone"></i> 0888888888</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> npcshop123@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                <li><a href="https://www.facebook.com/profile.php?id=100016773610729"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="https://www.facebook.com/huy5615612"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/quang.vu.454889"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.facebook.com/nguyen.tien.luc.581896"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="https://steamcommunity.com/id/cornspringluv/"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="<?php echo base_url('/') ?>"><img src="<?php echo base_url('frontend/images/home/logo1.png'); ?>"
                  alt="Logo" /></a>
            </div>
            <div class="btn-group pull-right">
            </div>
          </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <?php if ($this->session->userdata('LoggedInCustomer')) { ?>
                  <li><a href="<?php echo base_url('user/orders'); ?>"><i class="fa fa-user"></i>
                      <?php echo $this->session->userdata('LoggedInCustomer')['name'] ?></a></li>
                  <li><a href="<?php echo base_url('dang-xuat') ?>"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                <?php } else { ?>
                  <li><a href="<?php echo base_url('dang-nhap/') ?>"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                <?php } ?>
                <li><a href="<?php echo base_url('gio-hang') ?>"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
              </ul>
            </div>
          </div>



        </div>
      </div>
    </div>
    <div class=" header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li class="<?= ($currentURL == $baseURL || $currentURL == $baseURL . '/') ? 'active' : '' ?>">
                  <a href="<?php echo $baseURL ?>">Trang chủ</a>
                </li>
                <li class="dropdown <?= (strpos($currentURL, 'danh-muc') !== false) ? 'active' : '' ?>">
                  <a href="#">Khám phá<i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="sub-menu">
                    <?php if (!empty($category)) {
                      foreach ($category as $key => $cate) { ?>
                        <li><a href="<?php echo base_url('danh-muc/' . $cate->id) ?>"><?php echo $cate->title ?></a>
                        </li>
                      <?php }
                    } ?>
                  </ul>
                </li>
                <li class="<?= ($currentURL == $baseURL . 'information') ? 'active' : '' ?>">
                  <a href="<?php echo base_url('/information') ?>">Về NPC Shop</a>
                </li>
                <li class="<?= ($currentURL == $baseURL . 'contact') ? 'active' : '' ?>">
                  <a href="<?php echo base_url('/contact') ?>">Liên hệ</a>
                </li>
                <li class="<?= ($currentURL == $baseURL . 'huong-dan') ? 'active' : '' ?>">
                  <a href="<?php echo base_url('/huong-dan') ?>">Hướng dẫn</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="search_box pull-right">
              <form autocomplete="off" action="<?php echo base_url('tim-kiem') ?>" method="GET">
                <div style="position: relative;">
                  <input name="keyword" type="text" placeholder="Nhập từ khóa cần tìm sản phẩm"
                    style="padding-right: 30px;" />
                  <button type="submit"
                    style="position: absolute; right: 0; top: 0; height: 100%; border: none; background: none; padding: 0 12px;">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <style>
    .logo img {
      max-width: 100px;
      height: auto;
    }
  </style>
</body>

</html>