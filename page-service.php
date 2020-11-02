<?php /*Template Name:Service */ ?>
<?php get_header(); ?>

    <div class="service-page">
        <div class="container">
            <div class="row top-service">
                <div class="col-md-6 col-12 img">
                    <img src="<?php the_post_thumbnail_url('full') ?>" alt="طراحی و بهینه سازی وب سایت">
                </div>
                <div class="col-md-6 col-12">
                    <div class="desc">
                        <h2><?php echo get_the_title(); ?></h2>
                        <p><?php echo get_the_content(); ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-archive -->
    <div class="service-archive">
        <div class="container">
            <div class="title-nav">
                <div class="title-nav-inner">
                    <i class="icon-ok-outline"></i>
                    <h6>خدمات دووینو</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <?php $services=get_post_meta($post->ID, 'service_item', true);
                    foreach($services as $service):
                ?>
                <div class="col-md-3 col-sm-6 col-12 service-archive-wrapper">
                    <div class="service-archive-item">
                        <div class="img"><img src="<?php echo $service['img_service'];?>" alt="<?php echo $service['service_title'];?>"></div>
                         <h5><?php echo $service['service_title'];?> </h5>
                            <p><?php echo $service['service_desc'];?></p>
                    </div>
                </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- sample-works -->
    <div class="sample-works">
        <img src="images/nemonekarha.png" alt="">
    </div>

    <?php get_footer(); ?>
