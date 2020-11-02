<?php $sliders=get_post_meta($post->ID, 'home_slider', true);
if($sliders):
?>
<div class="home-slider">
        <div class="container">
            <div class="row">
                <div class="swiper-container full-slider">
                    <div class="swiper-wrapper">
                        <?php foreach($sliders as $slider): ?>
                        <div class="swiper-slide"><a href="<?php  echo esc_url( $slider['slider_link'] ) ; ?>"><img src="<?php echo $slider['img_slider']; ?>" alt="<?php echo $slider['slider_link']; ?>"></a></div>
                        <?php endforeach;?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-slider-pagintaion"></div>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>