<?php /*Template Name:Portfolio */ ?>
<?php get_header(); ?>
<?php $taxomomies = get_terms( 'cats', array( 'parent' => $hydro->term_id,'order'=>'DESC' ) );
    foreach ($taxomomies as $tax):
        ?>
   <div class="portfolio portfolio-slider graphic">
        <div class="container">
            <div class="title-nav">
                <div class="title-nav-inner">
                    <i class="icon-ok-outline"></i>
                    <h6><?php echo $tax->name; ?></h6>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="carousel">
                    <div class="swiper-container">
                       <div class="swiper-wrapper">
            <?php
               $cat=$tax->name;
              $args=array(
                   'post_type'=>'portfolio',
                   'posts_per_page'=>'9',
                   'cats'=>$cat,
                   'order'=>'ASC'
               );
               $query=new WP_Query($args);
               $f=0;
               while($query->have_posts()):
               $query->the_post();
           ?>
                <div class="swiper-slide portfolio-wrapper">
                    <div class="portfolio-item" >
                        <div class="front">
                            <div class="img"><img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="<?php echo get_the_title() ?>"></div>
                            <a href="<?php the_permalink() ?>" class="portfolio-title"><?php echo get_the_title() ?></a>
                        </div>
                        <div class="overlay">
                            <a href="<?php esc_url(the_permalink()); ?>"><h6><?php echo get_the_title() ?></h6></a>
                            <ul class="details">
                            <?php $portfolios=get_post_meta($post->ID, 'portfolio_equ', true);
                             foreach($portfolios as $portfolio): ?>
                                <li><?php echo $portfolio['portfolio_path'] ?></li>
                            <?php endforeach; ?>
                            </ul>
                            <div class="link">
                                <i class="icon-tag"></i>
                                <a href="<?php  echo esc_url(get_post_meta($post->ID, 'portfolio_link', true)) ?>" class="site"><?php echo get_post_meta($post->ID, 'portfolio_link', true) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="buttons">
                <div class="swiper-button-next" id="f<?php echo 2*$f+1 ?>"></div>
                <div class="swiper-button-prev" id="f<?php echo  2*$f+2 ?>"></div>
            </div>
        </div>
     </div>
  </div>
</div>
<?php
$f++;
    endforeach;
?>
<?php get_footer(); ?>