<section>
  <div class="container">
  <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/') ?>">Home</a></li>
        
        <li class="active"> Tìm kiếm sản phẩm</li>
        
      </ol>
    </div>

    <div class="row">
  <?php $this->load->view('pages/template/sidebar'); ?>
  <div class="padding-right">
    <div class="features_items">
      <h2 class="title text-center">Kết quả tìm kiếm cho từ khóa <?php echo $title ?></h2>
      <div id="search-results-carousel" class="carousel slide product-grid" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <?php $chunks = array_chunk($allproductByKeyword_pagination, 12); ?>
          <?php foreach ($chunks as $key => $chunk) { ?>
            <div class="item <?php echo $key == 0 ? 'active' : '' ?>">
              <div class="row">
                <?php foreach ($chunk as $index => $pro) { ?>
                  <div class="col-sm-3 col-md-3 col-lg-3 product-item">
                    <div class="product-image-wrapper">
                      <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
                        <div class="single-products <?php echo ($pro->quantity == 0) ? 'out-of-stock' : ''; ?>">
                          <div class="productinfo text-center">
                            <input type="hidden" value="<?php echo $pro->id ?>" name="product_id">
                            <input type="hidden" value="1" name="quantity">
                            <a href="<?php echo base_url('san-pham/'.$pro->id) ?>">
                              <img src="<?php echo base_url('uploads/product/' . $pro->image) ?>" alt="<?php echo $pro->title ?>" />
                            </a>
                            <div class="product-details">
                              <span><?php echo $pro->title ?></span>
                              <h2><?php echo number_format($pro->price, 0, ',', '.') ?>₫</h2>
                            </div>
                            <div class="product-buttons">
                              <a href="<?php echo base_url('san-pham/' . $pro->id) ?>" class="btn btn-default add-to-cart">
                                <i class="fa fa-eye"></i>Thông tin
                              </a>
                              <button type="submit" class="btn btn-fefault cart" <?php echo ($pro->quantity == 0) ? 'disabled' : ''; ?>>
                                <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <?php if (($index + 1) % 4 == 0) { ?>
                  </div>
                  <div class="row">
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <?php echo $links; ?>
    </div>
  </div>
</div>
  </div>
</section>
<style>
        .product-grid {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }

        .product-item {
          display: flex;
          flex-direction: column;
          align-items: center;
        }

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
          border-radius: 10px;
          padding: 15px;
          box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);

        }

        .single-products {
          width: 100%;
          height: 360px;
          max-height:360px;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          position: relative;
        }

        .productinfo img {
          max-width: 100%;
          max-height: 147px;

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
          margin: 5px auto;
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
        .item {
          padding: 0;
        }

        .shipping img {
          width: 100%;
          min-height: auto;
          display: block;
        }
        .productinfo h2{
          margin-bottom: 15px;
        }
        .divTo{
          margin-bottom: 30px;
        }
   
      </style>