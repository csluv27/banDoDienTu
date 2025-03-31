<section>
  <div class="custom-container container">
    <div class="row">

      <div class="col-sm-12 padding-right">
      <div class="features_items">
       <div class="title-container">
          <h2 class="title">Sản phẩm nổi bật</h2>
            <div class="controls">
              <a class="left recommended-item-control" href="#featured-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right recommended-item-control" href="#featured-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
        </div>
        <div id="featured-item-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <?php $chunks = array_chunk($allproduct_pagination, 10); ?>
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
                                            <a href="<?php echo base_url('san-pham/' . $pro->id) ?>">
                                                <img src="<?php echo base_url('uploads/product/' . $pro->image) ?>" alt="<?php echo $pro->title ?>" />
                                            </a>
                                            <div style="display:flex; flex-direction: column; gap:8px">
                                                <span><?php echo $pro->title ?></span>
                                                <h2><?php echo number_format($pro->price, 0, ',', '.') ?>₫</h2>
                                            </div>
                                            <div style="display:flex; flex-direction: column;">
                                                <a href="<?php echo base_url('san-pham/' . $pro->id) ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Thông tin</a>
                                                <button type="submit" class="btn btn-fefault cart" <?php echo ($pro->quantity == 0) ? 'disabled' : ''; ?>>
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Thêm vào giỏ hàng
                                                </button>
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

    <div style="flex:1;flex-grow:1;background-color:white;padding:20px;width:100%;margin-top:25px;margin-bottom:30px;border-radius:10px"></div>
    
 
    <div class="features_items">
       <div class="title-container">
          <h2 class="title">PC MINI</h2>
         
        </div>
        <div id="featured-item-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <?php $chunks = array_chunk($allproductpcMINI_pagination, 10); ?>
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
                                            <a href="<?php echo base_url('san-pham/' . $pro->id) ?>">
                                                <img src="<?php echo base_url('uploads/product/' . $pro->image) ?>" alt="<?php echo $pro->title ?>" />
                                            </a>
                                            <div style="display:flex; flex-direction: column; gap:8px">
                                                <span><?php echo $pro->title ?></span>
                                                <h2><?php echo number_format($pro->price, 0, ',', '.') ?>₫</h2>
                                            </div>
                                            <div style="display:flex; flex-direction: column;">
                                                <a href="<?php echo base_url('san-pham/' . $pro->id) ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Thông tin</a>
                                                <button type="submit" class="btn btn-fefault cart" <?php echo ($pro->quantity == 0) ? 'disabled' : ''; ?>>
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Thêm vào giỏ hàng
                                                </button>
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
<div class="features_items">
       <div class="title-container">
          <h2 class="title">MÁY CONSOLE PS5</h2>
         
        </div>
        <div id="featured-item-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <?php $chunks = array_chunk($allproductConsole_pagination, 10); ?>
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
                                            <a href="<?php echo base_url('san-pham/' . $pro->id) ?>">
                                                <img src="<?php echo base_url('uploads/product/' . $pro->image) ?>" alt="<?php echo $pro->title ?>" />
                                            </a>
                                            <div style="display:flex; flex-direction: column; gap:8px">
                                                <span><?php echo $pro->title ?></span>
                                                <h2><?php echo number_format($pro->price, 0, ',', '.') ?>₫</h2>
                                            </div>
                                            <div style="display:flex; flex-direction: column;">
                                                <a href="<?php echo base_url('san-pham/' . $pro->id) ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Thông tin</a>
                                                <button type="submit" class="btn btn-fefault cart" <?php echo ($pro->quantity == 0) ? 'disabled' : ''; ?>>
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Thêm vào giỏ hàng
                                                </button>
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
<div style="flex:1;flex-grow:1;background-color:white;padding:20px;width:100%;margin-top:25px;border-radius:10px"></div>
<div class="top-selling-products">
  <div>

    <h2 class="title text-center" style="margin-top:0;">Top sản phẩm bán chạy nhất</h2>
  </div>
  <div>

    <?php if (isset($top_selling_products) && !empty($top_selling_products)): ?>
      <?php foreach ($top_selling_products as $key => $product): ?>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
              <div class="single-products <?php echo ($product->quantity == 0) ? 'out-of-stock' : ''; ?>">
                <div class="productinfo text-center">
                  <input type="hidden" value="<?php echo $product->id ?>" name="product_id">
                  <input type="hidden" value="1" name="quantity">
                  <a href="<?php echo base_url('san-pham/' . $product->id) ?>">
                    <img src="<?php echo base_url('uploads/product/' . $product->image) ?>"
                      alt="<?php echo $product->title ?>"/>
                  </a>
                  <div style="display:flex; flex-direction: column; gap:8px">

                    <div style="display:flex; flex-direction: column;gap:8px">
                      <span><?php echo $product->title ?></span>
                      <h2><?php echo number_format($product->price, 0, ',', '.') ?> ₫</h2>
                    </div>
         
                    <div style="display:flex; flex-direction: column;">

                      <a href="<?php echo base_url('san-pham/' . $product->id) ?>"
                        class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Thông tin</a>
                      <button type="submit" class="btn btn-fefault cart" <?php echo ($product->quantity == 0) ? 'disabled' : ''; ?>>
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
      <?php endforeach; ?>
    <?php else: ?>
      <p>Không có sản phẩm bán chạy nhất.</p>
    <?php endif; ?>
  </div>
        </div>


      </div>

      <style>
        .custom-container {
          display: flex;
          flex-wrap: wrap;
          flex-direction: column;
          justify-content: space-between;
        }

        .product-image-wrapper {
          max-width: 250px;
          width: 100%;
          box-sizing: border-box;
          overflow: hidden;
          background: rgba(255, 255, 255, 0.8);
          /* Nền mờ trắng */
          border-radius: 10px;
          /* Bo góc nhẹ */
          padding: 15px;
          box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
          /* Đổ bóng để tạo hiệu ứng hộp */
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

        .productinfo img {
          max-width: 100%;
          max-height: 147px;
          /* Increased maximum height for images */
          object-fit: contain;
        }

        .productinfo {
          text-align: center;
          display: flex;
          flex-direction: column;
          gap: 8px;
          height: 100%;

        }

        .productinfo .add-to-cart,
        .productinfo .cart {
          margin: 10px auto;
        }

        .pagination {
          display: flex;
          justify-content: center;
          list-style: none;
          padding: 0;
        }

        .pagination li {
          margin: 0 5px;
        }

        .top-selling-products {
          margin-top: 55px;
          display: flex;
          flex-direction: column;
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

        .out-of-stock .out-of-stock-message {
          color: red;
          font-weight: bold;
          text-align: center;
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
          .title-container {
           overflow: hidden; /* Giúp float hoạt động đúng */

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
          .fa-angle-left :hover{
            background-color: #CE3C2D;
          }
     
          .item {
            padding: 0;
          }
          .top-selling-products .col-sm-4 {
            flex: 1 1 25%;
            max-width: 25%;
          }
          
    </style>
    </div>
  </div>
</section>