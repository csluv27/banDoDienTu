<div class="col-sm-3">
  <div class="left-sidebar">

    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
      <h2>Danh mục sản phẩm</h2>
      <?php
      foreach ($category as $key => $cate) {
        ?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a
                href="<?php echo base_url('danh-muc/' . $cate->id) ?>"><?php echo $cate->title ?></a></h4>
          </div>
        </div>
        <?php
      }
      ?>
    </div>



    <div class="brands_products"><!--brands_products-->
      <h2>Thương hiệu</h2>
      <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
          <?php
          foreach ($brand as $key => $b) {
            ?>
            <li><a href="<?php echo base_url('thuong-hieu/' . $b->id) ?>"><?php echo $b->title ?></a></li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div><!--/brands_products-->


    <div class="shipping text-center"><!--shipping-->
      <img src="/frontend/images/home/13.png" alt="" />
    </div><!--/shipping-->
    <style>
      .shipping img {
        width: 100%;
        height: auto;
        display: block;

      }

      .shipping {
        padding: 0;
        margin-bottom: 100px;
      }
    </style>


  </div>
</div>