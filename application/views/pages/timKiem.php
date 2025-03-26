<section>
  <div class="container">
    <div class="row">
      <?php $this->load->view('pages/template/sidebar'); ?>

      <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
          <h2 class="title text-center">Kết quả tìm kiếm cho từ khóa <?php echo $title ?></h2>
          <div class="product-grid">
          <?php
          foreach ($allproductByKeyword_pagination as $key => $pro) {
            ?>
            <div class="product-container">
              <div class="product-image-wrapper">
              <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <input type="hidden" value="<?php echo $pro->id ?>" name="product_id">
                        <input type="hidden" value="1" name="quantity">
                        <a href="<?php echo base_url('san-pham/'.$pro->id) ?>">
                          <img src="<?php echo base_url('uploads/product/' . $pro->image) ?>" alt="<?php echo $pro->title ?>" />
                        </a>
                        <div style="display:flex; flex-direction: column; gap:8px">

                          <span><?php echo $pro->title ?></span>
                          <h2><?php echo number_format($pro->price, 0, ',', '.') ?>₫</h2>
                        </div>
                        <div style="display:flex; flex-direction: column; gap:8px">
                          <a href="<?php echo base_url('san-pham/' . $pro->id) ?>" class="btn btn-default add-to-cart">
                            <i class="fa fa-eye"></i>Thông tin
                          </a>
                          <button type="submit" class="btn btn-fefault cart">
                            <i class="fa fa-shopping-cart"></i>
                            Thêm vào giỏ hàng
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                <!-- <div class="choose">
                  <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào sẽ mua</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Thêm để đánh giá</a></li>
                  </ul>
                </div> -->
              </div>
            </div>
            <?php
          }
          ?>
        </div>

<?php echo $links; ?>
</div><!--features_items-->
<style>
          .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
          }

          .product-container {
            display: flex;
            flex-direction: column;
            align-items: center;
          }

          .product-image-wrapper {
            width: 100%;
            box-sizing: border-box;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
          }

          .single-products {
            width: 100%;
            height: 400px;
            max-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
          }

          .productinfo img {
            max-width: 100%;
            max-height: 153px;
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
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            word-break: break-word;
            max-width: 100%;
          }

          .title-container {
            overflow: hidden;
          }
        </style>

      </div>
    </div>
  </div>
</section>