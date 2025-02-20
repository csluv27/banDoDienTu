<section>
    <div class="container">
        <div class="row">
            <?php $this->load->view('pages/template/sidebar'); ?>

            <div class="col-sm-9 padding-right">
                <?php foreach ($product_details as $key => $pro) { ?>
                    <div class="product-details">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo base_url('uploads/product/' . $pro->image) ?>"
                                    alt="<?php echo $pro->title ?>" />
                            </div>
                        </div>
                        <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
                            <div class="col-sm-7">
                                <div class="product-information">
                                    <img src="frontend/images/product-details/new.jpg" class="newarrival" alt="" />
                                    <h2><?php echo $pro->title ?></h2>
                                    <input type="hidden" value="<?php echo $pro->id ?>" name="product_id">
                                    <img src="frontend/images/product-details/rating.png" alt="" />
                                    <span>
                                        <span><?php echo number_format($pro->price, 0, ',', '.') ?>vnd</span><br>
                                        <input type="number" min="1" value="1" name="quantity" />
                                        <button type="submit" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Thêm vào giỏ hàng
                                        </button>
                                    </span>
                                    <p><b style="margin-right:3px">Số lượng:</b><?php echo $pro->quantity ?></p>
                                    <p><b style="margin-right:3px">Tình trạng:</b>Factory New</p>
                                    <p><b style="margin-right:3px">Thương hiệu:</b> <?php echo $pro->tenthuonghieu ?></p>
                                    <p><b style="margin-right:3px">Danh mục loại:</b><?php echo $pro->tendanhmuc ?></p>
                                    <?php if ($this->session->flashdata('error_message')): ?>
                                        <div class="alert alert-danger">
                                            <?php echo $this->session->flashdata('error_message'); ?> </div>
                                    <?php endif; ?>
                                    <a href=""><img src="images/product-details/share.png" class="share img-responsive"
                                            alt="" /></a>
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
                                <textarea name="" class="review_reviewer" required
                                    placeholder="Nội dung đánh giá"></textarea>
                                <button type="button" class="btn btn-default pull-right write-comment">Đánh giá</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="recommended_items">
                    <h2 class="title text-center">Sản phẩm liên quan</h2>
                    <div class="related-products-container">
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php $chunks = array_chunk($product_related, 2); ?>
                                <?php foreach ($chunks as $key => $chunk) { ?>
                                    <div class="item <?php echo $key == 0 ? 'active' : '' ?>">
                                        <?php foreach ($chunk as $pro) { ?>
                                            <div class="col-sm-6">
                                                <div class="product-image-wrapper">
                                                    <form action="<?php echo base_url('add-to-cart') ?>" method="POST">
                                                        <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                <input type="hidden" value="<?php echo $pro->id ?>"
                                                                    name="product_id">
                                                                <input type="hidden" value="1" name="quantity">
                                                                <a href="<?php echo base_url('san-pham/' . $pro->id) ?>"><img
                                                                        src="<?php echo base_url('uploads/product/' . $pro->image) ?>"
                                                                        alt="<?php echo $pro->title ?>" /></a>
                                                                <h2><?php echo number_format($pro->price, 0, ',', '.') ?>vnd
                                                                </h2>
                                                                <p><?php echo $pro->title ?></p>
                                                                <a href="<?php echo base_url('san-pham/' . $pro->id) ?>"
                                                                    class="btn btn-default add-to-cart"><i
                                                                        class="fa fa-eye"></i>Thông tin</a>
                                                                <button type="submit" class="btn btn-fefault cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    Thêm vào giỏ hàng
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel"
                                data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel"
                                data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
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
                  
                  
                    .product-image-wrapper img {
                        width: auto;
                        height: 120px;
                        object-fit: contain;
                        padding-bottom: 20px;
                        
                    }

                    .productinfo .add-to-cart {
                        margin-bottom: 10px;
                        margin-top: 10px;
                    }

                    .productinfo {
                        height: 330px;
                        background: rgba(255, 255, 255, 0.8);
                        /* Nền mờ trắng */
                        border-radius: 10px;
                        /* Bo góc nhẹ */
                        padding: 15px;
                        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                        /* Đổ bóng để tạo hiệu ứng hộp */
                    }
               
                    .productinfo .add-to-cart,
                    .productinfo .cart {
                        margin: 0 auto;
                        display: block;
                        width: fit-content;
                    }

                    .productinfo .btn {
                        height: 30px;
                        line-height: 18px;
                        margin-top: 18px;
                    }

                    .recommended_items .related-products-container {
                        margin: 0 auto;
                        width: 100%;
                        max-width: 800px;

                    }
                </style>
            </div>
        </div>
    </div>
</section>