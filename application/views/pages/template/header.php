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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Saira:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

<body class="<?php echo ($this->uri->segment(1) == '') ? 'homepage' : ''; ?>">
  <header id="header">
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a style="font-weight:600; "><i style="font-size: 12px;" class="fa fa-phone"></i> 0888888888</a>
                </li>
                <li><a style="font-weight:600; "><i style="font-size: 12px;" class="fa fa-envelope"></i>
                    npcshop123@gmail.com</a></li>
                <li><a style="font-weight:600; "><i style="font-size: 12px;" class="fa fa-location-arrow"></i> 241 Điện
                    Biên, Lộc Hoà,
                    Nam Định, Việt Nam</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                <li><a href="/"><i class="fa-brands fa-facebook"></i></i></a>
                </li>
                <li><a href="/"><i class="fa-brands fa-google"></i></a></li>
                <li><a href="/"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="/"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="logo pull-left">
              <a href="<?php echo base_url('/') ?>"><img src="<?php echo base_url('logo/logo22.png'); ?>"
                  alt="Logo" /></a>
            </div>
            <div class="btn-group pull-right">
            </div>
          </div>
          <div class="col-sm-5">
            <div class="search_box pull-right">
              <form autocomplete="off" action="<?php echo base_url('tim-kiem') ?>" method="GET">
                <input name="keyword" type="text" placeholder="Tìm kiếm sản phẩm..." />
                <button type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </form>
            </div>
          </div>


          <div class="col-sm-4">
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
          <div class="col-sm-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu d-flex">
              <!-- Phần danh mục sản phẩm luôn hiển thị -->
              <?php
              $isHomePage = ($_SERVER['REQUEST_URI'] == '/trang-chu' || $_SERVER['REQUEST_URI'] == '/');
              ?>
              <div class="categories" data-home="<?php echo $isHomePage ? 'true' : 'false'; ?>">
                <div class="categoriesSection" id="categoryBtn" <?php echo $isHomePage ? 'style="pointer-events: none; opacity: 0.6;"' : ''; ?>>
                  <h4>
                    <i class="fa-solid fa-bars" style="font-size: 15px; margin-right:4px"></i>
                    Danh mục sản phẩm
                  </h4>
                </div>
                <ul class="category-list" style="<?php echo $isHomePage ? 'display: block;' : 'display: none;'; ?>">
                  <?php if (!empty($category)) {
                    foreach ($category as $cate) { ?>
                      <li>
                        <a href="<?php echo base_url('danh-muc/' . $cate->id) ?>">
                          <?php echo htmlspecialchars($cate->title, ENT_QUOTES, 'UTF-8') ?>
                        </a>
                      </li>
                    <?php }
                  } ?>
                </ul>
              </div>
              

              <!-- Overlay chỉ hiện khi không phải trang chủ -->
              <div id="overlay" class="hidden" onclick="toggleCategoryMenu()" <?php echo $isHomePage ? 'style="display: none;"' : ''; ?>></div>


              <!-- Phần menu phụ (Về NPC Shop, Liên hệ, Hướng dẫn) -->
              <div class="boxPilocy">
                <div class="policy-item">
                  <h4><i style="font-size: 14px;" class="fa-solid fa-medal"></i> Đảm bảo chất lượng</h4>
                </div>
                <div class="policy-item">
                  <h4><i style="font-size: 14px;" class="fa-solid fa-shield-alt"></i> Bảo hành chính hãng</h4>
                </div>
                <div class="policy-item">
                  <h4><i style="font-size: 14px;" class="fa-solid fa-truck"></i> Vận chuyển siêu tốc</h4>
                </div>
              </div>
              <?php if ($_SERVER['REQUEST_URI'] == '/trang-chu' || $_SERVER['REQUEST_URI'] == '/') { ?>
                <!-- Banner chính -->
                <div class="banner">
                  <div class="bigBanner">
                    <img src="<?php echo base_url('logo/anh/slide_1_img.png'); ?>" alt="Banner" />
                  </div>
                  <div class="rightBanner">
                  <div class="img-container">
                  <img src="<?php echo base_url('logo/anh/banner_top_1_img_large.png'); ?>" alt="Banner" />
                </div>
                  <div class="img-container">
                  <img src="<?php echo base_url('logo/anh/banner_top_2_img_large.png'); ?>" alt="Banner" />
                </div>
                  <div class="img-container">
                  <img src="<?php echo base_url('logo/anh/categorybanner_2_img.png'); ?>" alt="Banner" />
                </div>
                   
                  
             

                  </div>
                </div>
              </div>
              <div class="underBanner">
                <div class="img-container">
                  <img src="<?php echo base_url('logo/anh/categorybanner_1_img.jpg'); ?>" alt="Banner" />
                </div>
                <div class="img-container">
                  <img src="<?php echo base_url('logo/anh/categorybanner_3_img.png'); ?>" alt="Banner" />
                </div>
                <div class="img-container">
                  <img src="<?php echo base_url('logo/anh/categorybanner_4_img.png'); ?>" alt="Banner" />
                </div>
                <div class="img-container">
                  <img src="<?php echo base_url('logo/anh/categorybanner_4_img.png'); ?>" alt="Banner" />
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    <?php } ?>
  </header>
  <style>
    .logo img {
      max-width: 100px;
      height: auto;
    }
  </style>
</body>

</html>