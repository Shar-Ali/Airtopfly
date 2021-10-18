            <!-- Beginning footer section
            ============================== -->
            <footer class="main-footer-section pty-medium">
                <div class="common-wrap clear footer-inner">
                    <div class="footer-widget">
                       <a href="index.html" class="footer-logo"> <img src="<?php the_field('footer_logo','options');?>" alt=""></a>
                    </div>
                    <div class="footer-widget">
                       <h6><?php the_field('widget_title_1','options');?></h6>
                       <?php wp_nav_menu(array('theme_location' => 'Footer-Menu')); ?>
                    </div>
                    <div class="footer-widget">
                       <h6><?php the_field('widget_title_2','options');?></h6>
                       <span><?php the_field('widget_sub_title','options');?></span>
                       <div class="action-info float-wide">
                           <dfn><img src="<?php the_field('tel_icon','options');?>" alt=""></dfn>
                           <em><?php the_field('phone_number','options');?></em>
                       </div>
                       <div class="action-info float-wide">
                           <dfn><img src="<?php the_field('mail_icon','options');?>" alt=""></dfn>
                           <a href="mailto:info@gmail.com"><?php the_field('mail_text','options');?></a>
                       </div>
                       <div class="action-info float-wide">
                           <dfn><img src="<?php the_field('address_icon','options');?>" alt=""></dfn>
                            <address>
                            <?php the_field('address_info','options');?>
                            </address>
                       </div>
                    </div>
                    <div class="footer-widget">
                        <h6><?php the_field('widget_title_3','options');?></h6>
                        <div class="form-wrap float-wide">
                            <form action="#" method="post">
                              <?php echo do_shortcode('[contact-form-7 id="168" title="Newsletter Form"]');?>  
                            </form>
                        </div>
                        <div class="social-wrap float-wide">
                            <a href="#"><img src="<?php the_field('facebook_icon', 'options');?>" alt=""></a>
                            <a href="#"><img src="<?php the_field('twitter_icon', 'options');?>" alt=""></a>
                            <a href="#"><img src="<?php the_field('youtube_icon', 'options');?>" alt=""></a>
                            <a href="#"><img src="<?php the_field('instagram_icon', 'options');?>" alt=""></a>
                        </div>
                    </div>
                    <p class="copyright">&copy; 2018 – <?php echo date('Y'); ?> airtopfly.com All Right Reserved</p>
                    
                </div>
            </footer>
            <!-- //End main footer section -->
        </div>

        
        <?php wp_footer(); ?>


    </body>
</html>