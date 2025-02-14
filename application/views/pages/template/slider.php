<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php foreach ($slider as $key => $sli) { ?>
                            <li data-target="#slider-carousel" data-slide-to="<?php echo $key; ?>" class="<?php echo $key == 0 ? 'active' : '' ?>"></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php foreach ($slider as $key => $sli) { ?>
                            <div class="item <?php echo $key == 0 ? 'active' : '' ?>">
                                <div class="col-sm-11">
                                    <img src="<?php echo base_url('uploads/slider/' . $sli->image); ?>" class="img-responsive" alt="<?php echo $sli->title; ?>" />
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
