<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>

    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-3  right">
                    <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo ot_get_option('logo_img');?>" alt="dovino"></a><span> دووینو  </span></div>
                    <?php  $typings=ot_get_option('typing_title');  
                    if(  $typings):?>
                    <div class="typed-effect">
                        <div id="typed-strings">
                            <?php 
                                foreach($typings as $typing){ ?>
                                   <p class="welcome"><?php echo $typing['title_text']; ?></p>
                                <?php };
                            ?>
                        </div>
                        <span id="typed" style="white-space:pre;"></span>

                    </div>
                     <?php endif; ?>
                </div>
                <div class="col-md-6 col-sm-6 col-9 left">
                    <div class="block-botton"><a href=""><i class="icon-lock-open"></i> <span>ورود به ناحیه ی
                                کاربری</span></a></div>
                   <?php /* if(!is_user_logged_in()){*/ 
                        ?>
                        <div class="block-botton"><a href=""><i class="icon-user-add-outline"></i> <span>ثبت نام</span></a>
                        <?php
                    /*}*/?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-4 col-2 menu-wrapper">
                    <div class="open-menu" id="menu-icon">
                        <div class="line first"></div>
                        <div class="line"></div>
                        <div class="line third"></div>
                        <div class="line"></div>
                    </div>
            
                    <div class="menu">
                        <div class="close-menu" id="menu-icon">
                            <div class="line first"></div>
                            <div class="line second"></div>
    
                        </div>
                        <?php wp_nav_menu(array(
                            'theme_location'=>'header_menu',
                            'container' =>"",
                        )); ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-8 col-10 form-wrapper">
                        <?php  get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>