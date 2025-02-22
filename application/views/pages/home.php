<section>
  <div class="custom-container container">
    <div class="row">
      <?php $this->load->view('pages/template/sidebar'); ?>
      <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
          <h2 class="title text-center">Sản phẩm nổi bật</h2>
          <?php
          foreach ($allproduct_pagination as $key => $pro) {
            ?>
            <div class="col-sm-4">
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
                        <div style="flex-grow: 1;"></div>
                        <div style="display:flex; flex-direction: column;">

                          <a href="<?php echo base_url('san-pham/' . $pro->id) ?>" class="btn btn-default add-to-cart"><i
                              class="fa fa-eye"></i>Thông tin</a>
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
            <?php
          }
          ?>
        </div><!--features_items-->
        <?php echo $links; ?>

        <div class="top-selling-products">
          <h2 class="title text-center">Top 3 sản phẩm bán chạy nhất</h2>
          <?php if (isset($top_selling_products) && !empty($top_selling_products)): ?>
            <?php foreach ($top_selling_products as $key => $product): ?>
              <div class="col-sm-4">
                <div class="product-image-wrapper">
                  <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
                    <div class="single-products <?php echo ($product->quantity == 0) ? 'out-of-stock' : ''; ?>">
                      <div class="productinfo text-center">
                        <input type="hidden" value="<?php echo $product->id ?>" name="product_id">
                        <input type="hidden" value="1" name="quantity">
                        <a href="<?php echo base_url('san-pham/' . $product->id) ?>">
                          <img src="<?php echo base_url('uploads/product/' . $product->image) ?>"
                            alt="<?php echo $product->title ?>" />
                        </a>
                        <div style="display:flex; flex-direction: column; gap:8px">

                          <div style="display:flex; flex-direction: column; gap:8px">
                            <span><?php echo $product->title ?></span>
                            <h2><?php echo number_format($product->price, 0, ',', '.') ?> ₫</h2>
                          </div>
                          <div style="flex-grow: 1;"></div>
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

      <style>
        .custom-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }

        .product-image-wrapper {
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
          height: 480px;
          max-height: 480px;
          /* Ensure all products have the same height */
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          position: relative;
        }

        .productinfo img {
          max-width: 100%;
          max-height: 260px;
          /* Increased maximum height for images */
          object-fit: contain;
        }

        .productinfo {
          text-align: center;
          display: flex;
          flex-direction: column;
          gap: 26px;
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
      </style>
    </div>
  </div>
</section>