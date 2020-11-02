<?php /*Template Name:Article */ ?>
<?php get_header(); ?>
    <div class="page">
        <div class="container">
            <div class="title-nav">
                <div class="title-nav-inner">
                    <i class="icon-pen"></i>
                    <h6>مقالات</h6>
                    <div class="archive"><a href="" class="sort icon-left-open-outline">مرتب سازی <i ></i></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <?php 
                    $args=['post_type'=>'post'];
                    $query= new WP_Query( $args );
                while($query->have_posts()):
                $query->the_post(); ?>
                <div class="col-md-12 article-archive-wrapper">
                    <div class="article-archive-item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3  col-12 img">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url('thumbnail' ) ?>" alt="<?php echo get_the_title(); ?>">
                                </a>
                            </div>
                            <div class="col-md-9 col-sm-9 col-12 content">
                                <div class="title">
                                    <h6><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h6>
                                </div>
                                <div class="excerpt">
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <div class="more"><a href="">ادامه ی مطلب</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endwhile;wp_reset_postdata();  ?>
            </div>
        </div>
        </div>
<?php get_footer(); ?>
