<?php $services=get_post_meta($post->ID, 'home_services', true);
    if($services):
?>
<div class="services">
    <div class="container">
        <div class="row">
        <?php foreach($services as $service): ?>
            <div class="col-md-3 col-sm-6 col-6 service-wrapper">
                <div class="service-item">
                    <div class="icon"><img src="<?php echo $service['icon_service']; ?>"></div>
                    <div class="title">
                        <h6><?php echo $service['service_title']; ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>
