<section>
  <div class="container">
    <div class="row">
      <?php $this->load->view('pages/template/sidebar'); ?>

      <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
          <h2 class="title text-center">Kết quả tìm kiếm cho từ khóa <?php echo $title ?></h2>
          <?php
          foreach ($allproductByKeyword_pagination as $key => $pro) {
            ?>
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <input type="hidden" value="<?php echo $pro->id ?>" name="product_id">
                      <input type="hidden" value="1" name="quantity">
                      <a href="<?php echo base_url('san-pham/'.$pro->id) ?>"><img src="<?php echo base_url('uploads/product/' . $pro->image) ?>" alt="<?php echo $pro->title ?>" /></a>
                      <h2><?php echo number_format($pro->price, 0, ',', '.') ?>₫</h2>
                      <p><?php echo $pro->title ?></p>
                      <a href="<?php echo base_url('san-pham/' . $pro->id) ?>" class="btn btn-default add-to-cart"><i
                          class="fa fa-eye"></i>Thông tin</a>
                      <button type="submit" class="btn btn-fefault cart">
                        <i class="fa fa-shopping-cart"></i>
                        Thêm vào giỏ hàng
                      </button>
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


        </div><!--features_items-->
        <?php echo $links; ?>
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
        }

        .single-products {
          width: 100%;
          height: 480px;
          max-height: 480px; /* Ensure all products have the same height */
          display: flex;
          flex-direction: column;
          justify-content: space-between;
        }

        .productinfo img {
          max-width: 100%;
          max-height: 260px; /* Increased maximum height for images */
          object-fit: contain;
        }

        .productinfo {
          text-align: center;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
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
      </style>

      </div>
    </div>
  </div>
</section>