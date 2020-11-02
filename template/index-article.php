<?php if(have_posts()): ?>
<div class="article">
        <div class="container">
            <div class="title-nav">
                <div class="title-nav-inner">
                    <i class="icon-pen"></i>
                    <h6>مقالات</h6>
                    <div class="archive"><a href="<?php echo site_url() ?>/مقالات">آرشیو مقالات</a></div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'posts_per_page'=>4,
                        'order'       =>'ASC'
                    );
                    $query=new WP_Query($args);
                    while($query->have_posts()):
                        $query->the_post();
                ?>
                <div class="col-md-3 col-sm-6 col-6 article-wrapper">
                    <div class="article-item">
                        <div class="img">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php echo  get_the_title(); ?>"></a>
                        </div>
                        <div class="title-article"><a href="<?php the_permalink(); ?>" ><?php echo  get_the_title(); ?></a></div>
                        <a href="<?php the_permalink(); ?>" class="more"><i class="icon-left-small"></i><span>ادامه ی مطلب</span></a>
                    </div>
                </div>
                <?php endwhile;wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>