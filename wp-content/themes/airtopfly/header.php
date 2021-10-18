
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

      
    <?php wp_head();?>
    </head>

    <body <?php body_class(); ?>>
        
        <div class="main-wrap">
            <!--  Beginning header section 
            ===============================  -->
            <header class="main-header-section">
                <div class="common-wrap clear">
                    <div class="logo-wrap">
                        <a href="<?php echo site_url();?>" class="main-logo"><img src="http://airtopfly.test/wp-content/uploads/2021/09/main-logo.png" alt="" class="static-logo"></a>
                        <div class="phone-nav" id="phone-nav">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="nav-wrap">
                        <nav class="main-nav">
                           <?php  wp_nav_menu( array( 'theme_location' => 'header-menu' ));?>
                           
                        </nav>
                        
                    </div>
                </div>
            </header>
            
            <!-- //End header section -->

