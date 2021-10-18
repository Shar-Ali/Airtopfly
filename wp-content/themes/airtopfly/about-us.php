<?php

/*
    Template Name: About

*/


get_header();?>
            

            <!-- Beginning main content section 
            ==================================== -->
            <section class="main-content-wrap about-us-content nor-home">
               <section class="content-details-section">
                   <div class="common-wrap clear about-inner">
                       <h2><?php the_title();?></h2>
                       <div class="content-article-wrap">
                           <?php the_content();?>
                       </div>
                   </div>
               </section>
                
              
            </section>
            <!-- //End main content section -->

    <?php get_footer();?>