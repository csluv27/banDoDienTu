<section>
  <div class="container">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/') ?>">Home</a></li>

        <li class="active"> Chi tiết sản phẩm</li>
        <li style="font-weight:200;color: #ccc;">/</li>
        <li class="active">
          <?php echo isset($product_details[0]->title) ? $product_details[0]->title : ''; ?>
        </li>

      </ol>
    </div>
    <div class="row">
      <div class="col-sm-12 padding-right">
        <?php foreach ($product_details as $key => $pro) { ?>
          <div class="product-details">
            <div class="col-sm-4">
              <div class="view-product">
                <img src="<?php echo base_url('uploads/product/' . $pro->image) ?>" alt="<?php echo $pro->title ?>" />
              </div>
            </div>
            <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
              <d class="col-sm-8">
                <div class="product-information">

                  <div class="titleSP">
                    <img src="frontend/images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2><?php echo $pro->title ?></h2>
                    <p><b style="margin-right:3px">Số lượng:</b><?php echo $pro->quantity ?></p>
                  </div>

                  <input type="hidden" value="<?php echo $pro->id ?>" name="product_id">
                  <div style="display:flex;flex-direction:row;justify-content: space-between; gap:30px">
                    <div style="flex: 1;display: flex;flex-direction: column;">
                      <span
                        style="background-color: rgb(250,250,250);display:flex;justify-item:flex-start;margin-bottom:23px;  padding: 10px;">
                        <b style="display:flex;margin-right:10px;color:black; align-items:center;">Giá:</b>
                        <span
                          style="display:flex;align-items:center;"><?php echo number_format($pro->price, 0, ',', '.') ?>₫</span><br>
                      </span>
                      <div style="display:flex;flex-direction:row;margin-bottom:10px">

                        <div class="quantity-selector">
                          <button type="button" class="qty-btn minus">-</button>
                          <input type="number" class="qty-input" name="quantity" value="1" min="1">
                          <button type="button" class="qty-btn plus">+</button>
                        </div>
                        <button type="submit" class="btn btn-fefault cart">
                          <i class="fa fa-shopping-cart"></i>
                          Thêm vào giỏ hàng
                        </button>
                      </div>
                      <p style="color:black"><b style="margin-right:3px;color:black;">Tình trạng:</b>Factory New</p>
                      <p style="color:black"><b style="margin-right:3px;color:black;">Thương hiệu:</b>
                        <?php echo $pro->tenthuonghieu ?></p>
                      <p style="color:black"><b style="margin-right:3px;color:black;">Danh mục
                          loại:</b><?php echo $pro->tendanhmuc ?></p>
                    </div>
                    <div class="policy-info-container">
                      <div class="chinhSachInfo">
                        <p>Chính sách bán hàng</p>
                        <span><i class="fa-solid fa-box"></i> Cam kết hàng 100% chính hãng</span>
                        <span><i class="fa-solid fa-phone-volume"></i> Hỗ trợ 24/7</span>
                      </div>
                      <div class="chinhSachInfo">
                        <p>Thông tin thêm</p>
                        <span><i class="fa-solid fa-check"></i> Hoàn tiền 127% nếu phát hiện hàng giả</span>
                        <span><i class="fa-regular fa-thumbs-up"></i> Mở hộp kiểm tra nhận hàng</span>
                        <span><i class="fa-regular fa-circle-left"></i> Đổi trả trong vòng 7 ngày</span>
                      </div>
                    </div>
                  </div>
                </div>

          </div>
          </form>
        </div>
      <?php } ?>

      <div class="category-tab shop-details-tab">
        <div class="col-sm-12">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá của khách hàng</a></li>
          </ul>
        </div>
        <div class="tab-pane fade active in" id="reviews">
          <div class="col-sm-12">
            <?php foreach ($list_review as $key => $listR) { ?>
              <ul>
                <li><a><i class="fa fa-user"></i><?php echo $listR->name ?></a></li>
                <li><a><i class="fa fa-envelope-o"></i><?php echo $listR->email ?></a></li>
              </ul>
              <p><?php echo $listR->review ?></p>
            <?php } ?>
            <p><b>Đánh giá sản phẩm</b></p>
            <form action="#">
              <span>
                <input type="hidden" class="product_id_review" value="<?php echo $pro->id ?>" />
                <input type="text" class="name_reviewer" required placeholder="Tên của bạn" />
                <input type="email" class="email_reviewer" required placeholder="Email" />
              </span>
              <textarea name="" class="review_reviewer" required placeholder="Nội dung đánh giá"></textarea>
              <button type="button" class="btn btn-default pull-right write-comment" style="margin-right:8px;">Đánh
                giá</button>
            </form>
          </div>
        </div>
      </div>

      <div class="recommended_items">
        <div class="title-container">
          <h2 class="title">Sản phẩm liên quan</h2>
          <div class="controls">
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
        <div class="related-products-container">
          <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php $chunks = array_chunk($product_related, 5); ?>
              <?php foreach ($chunks as $key => $chunk) { ?>
                <div class="item <?php echo $key == 0 ? 'active' : '' ?>">
                  <?php foreach ($chunk as $pro) { ?>
                    <div class="col-sm-3 col-sm-6">
                      <div class="product-image-wrapper">
                        <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
                          <div class="single-products <?php echo ($pro->quantity == 0) ? 'out-of-stock' : ''; ?>">
                            <div class="productinfo text-center">
                              <input type="hidden" value="<?php echo $pro->id ?>" name="product_id">
                              <input type="hidden" value="1" name="quantity">
                              <a href="<?php echo base_url('san-pham/' . $pro->id) ?>"><img
                                  src="<?php echo base_url('uploads/product/' . $pro->image) ?>"
                                  alt="<?php echo $pro->title ?>" /></a>
                              <div style="display:flex; flex-direction: column; gap:8px">

                                <div style="display:flex; flex-direction: column; gap:8px">

                                  <span><?php echo $pro->title ?></span>
                                  <h2><?php echo number_format($pro->price, 0, ',', '.') ?>₫</h2>
                                </div>
                                <div style="display:flex; flex-direction: column;">
                                  <a href="<?php echo base_url('san-pham/' . $pro->id) ?>"
                                    class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Thông tin</a>
                                  <button type="submit" class="btn btn-fefault cart" <?php echo ($pro->quantity == 0) ? 'disabled' : ''; ?>>
                                    <i class="fa fa-shopping-cart"></i>
                                    Thêm vào giỏ hàng
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <style>
        .view-product img {
          max-width: 100%;
          height: auto;
          max-height: auto;
          object-fit: cover;
        }
        .productinfo .add-to-cart {
          margin-bottom: 10px;
          margin-top: 10px;
        }

        .recommended_items {
          width: 100vw;
          /* Chiếm toàn bộ chiều rộng của màn hình */
          max-width: 100%;
          padding: 0;
          margin: 0 auto;
        }

        .related-products-container {
          width: 100%;
          overflow: hidden;
          padding: 15px;
        }

        .carousel-inner {
          display: flex;
          flex-wrap: nowrap;
          justify-content: space-between;
          width: 100%;
        }

        .item {
          display: flex;
          justify-content: space-between;
          width: 100%;
        }

        .item .col-sm-6 {
          width: 20%;
          /* Đảm bảo đúng 3 sản phẩm trên 1 hàng */
          max-width: 20%;
          flex: 0 0 0 0 20%;
        }

        .product-image-wrapper {
          width: 100%;
          box-sizing: border-box;
        }

        .productinfo {
          text-align: center;
          display: flex;
          flex-direction: column;
          gap: 8px;
          height: 100%;
        }

        .product-image-wrapper {
          max-width: 250px;
          width: 100%;
          box-sizing: border-box;
          overflow: hidden;
          background: rgba(255, 255, 255, 0.8);
          border-radius: 10px;
          padding: 15px;
          box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .productinfo .add-to-cart,
        .productinfo .cart {
          margin: 0 auto;
          display: block;
          width: fit-content;
        }

        .productinfo span {
          display: -webkit-box;
          -webkit-line-clamp: 2;
          /* Giới hạn số dòng tối đa */
          -webkit-box-orient: vertical;
          overflow: hidden;
          text-overflow: ellipsis;
          white-space: normal;
          word-break: break-word;
          max-width: 100%;
        }

        .single-products {
          width: 100%;
          height: 400px;
          max-height: 400px;
          /* Ensure all products have the same height */
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          position: relative;
        }

        .productinfo .btn {
          height: 30px;
          line-height: 18px;
          margin-top: 18px;
        }



        .breadcrumbs .breadcrumb {
          margin-bottom: 30px;
        }

        .recommended-item-carousel {
          display: flex;
          flex-direction: row;

        }

        .out-of-stock:before {
          content: "Hết hàng";
          position: absolute;
          top: 10px;
          right: 10px;
          padding: 5px 10px;
          background-color: red;
          color: white;
          font-size: 12px;
          font-weight: bold;
          z-index: 1;
        }

        .out-of-stock .productinfo img {
          opacity: 0.5;
        }

        .productinfo img {
          max-width: 100%;
          max-height: 180px;
          object-fit: contain;
        }

        .out-of-stock .out-of-stock-message {
          color: red;
          font-weight: bold;
          text-align: center;
        }

        .quantity-selector {
          display: flex;
          align-items: center;
          border: 1px solid #ddd;
          width: fit-content;
          border-radius: 5px;
          overflow: hidden;
        }

        .qty-btn {
          background: rgb(247, 247, 247);
          border: none;
          padding: 7px 13px;
          cursor: pointer;
          font-size: 18px;
        }

        .qty-btn:hover {
          background: #ddd;
        }

        .qty-input {
          width: 40px;
          text-align: center;
          border: none;
          outline: none;
          font-size: 16px;
          text-align: center;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          margin: 0;
        }

        .titleSP {
          max-width: 100%;
          word-wrap: break-word;
          white-space: normal;
        }

        .titleSP h2 {
          font-size: 24px;
          word-break: break-word;
          font-weight: 600;
          color: black;
        }

        .policy-info-container {
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          background-color: rgb(251, 251, 251);
          padding: 15px;
          border-radius: 8px;
          width: 280px;

          flex-shrink: 0;

        }

        .policy-info-container p {
          font-weight: bold;
          margin-bottom: 10px;
        }

        .policy-info-container span {
          display: flex;
          align-items: center;
          margin-bottom: 8px;
          font-size: 14px;
          color: #333;
        }

        .policy-info-container i {
          margin-right: 8px;
          color: #007bff;
        }

        .chinhSachInfo p {
          margin: 0;
        }

        .chinhSachInfo i {
          font-size: 20px;
          margin-right: 16px;
        }

        .category-tab {
          background-color: white;
        }

        .title-container {
          overflow: hidden;

        }

        .title {
          float: left;
          font-size: 24px;
          font-weight: bold;
        }

        .controls {
          float: right;
          display: flex;
          gap: 10px;
          margin-top: 10px;

        }

        .controls a {
          background-color: #CE3C2D;
          color: white;
          padding: 5px 10px;
          border-radius: 5px;
          text-decoration: none;
        }

        .item {
          padding: 0;
        }
      </style>
    </div>
  </div>
  </div>
</section>