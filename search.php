<?php get_header(); ?>
    <div class="page">
        <div class="container">
            <div class="row">
                <?php if(have_posts()){ ?>
                <?php 
                  
                while(have_posts()){
                   the_post(); ?>
                <div class="col-md-12 article-archive-wrapper">
                    <div class="article-archive-item">
                        <div class="row">
                            <div class="col-md-4 col-sm-3  col-12 img">
                                <a href="">
                                    <img src="<?php the_post_thumbnail_url('thumbnail' ) ?>" alt="<?php echo get_the_title(); ?>">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-9 col-12 content">
                                <div class="title">
                                    <h6><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h6>
                                </div>
                                <div class="excerpt">
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <div class="more"><a href="<?php the_permalink(); ?>">ادامه ی مطلب</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php };wp_reset_postdata();  ?>
                <?php } else{
                   ?>
                   <div style="height:40vh;width: 100%;">
                   <h5 style="color:#0009;text-align:center;">متاسفانه پستی یافت نشد </h5>
                   </div>
                   <?php }
                ?>
            </div>
        </div>
        </div>
<?php get_footer(); ?>