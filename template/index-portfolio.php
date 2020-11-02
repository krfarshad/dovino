<?php 
$args = array(  
    'post_type' => 'portfolio',
    'posts_per_page'=>'6',
    'order' =>'ASC'
);
$query= new WP_Query( $args );
    if($query->have_posts()):
?>
<div class="portfolio">
        <div class="container">
            <div class="title-nav">
                <div class="title-nav-inner">
                    <i class="icon-picture-outline"></i>
                    <h6>نمونه کارها</h6>
                    <div class="archive"><a href="<?php echo site_url() ?>/نمونه-کارها">نمونه کارها</a></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
        <?php while($query->have_posts()):
            $query->the_post(); ?>
                <div class="col-lg-4 col-md-12 col-sm-12 portfolio-wrapper">
                    <div class="portfolio-item" >
                        <div class="front">
                            <div class="img"><img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php echo get_the_title() ?>"></div>
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
            <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>