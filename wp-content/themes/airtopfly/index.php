<?php

/*
    Template Name : Blog

*/

get_header();?>

            <!-- Beginning main content section 
            ==================================== -->
            <section class="main-content-wrap blog-content nor-home">
               <section class="content-details-section">
                   <div class="common-wrap clear">
                       <div class="content-wrap">
                            <div class="title-wrap float-wide"><h6>Latest Posts</h6></div>
                            <div class="content-info-wrap float-wide">


                            <?php 
                            
                                if ( have_posts() ) :
                                
                                while ( have_posts() ) : the_post(); 
                                
                            ?>

                                <div class="content-row float-wide">        
                                    <a href="<?php the_permalink();?>" class="content-figure bg-property" style="background-image: url(<?php the_post_thumbnail_url();?>)"></a>
                                    <div class="content-figure-info">
                                        <a href="<?php the_permalink();?>" class="figure-title"><?php the_title();?></a>
                                        <?php echo get_excerpt(130); ?>
                                        <div class="meta-box float-wide">
                                            <span class="category"><?php the_category(', '); ?></span>
                                        </div>
                                    </div>
                                </div>
            
                        <?php 

                        endwhile; 

                        else : 

                            _e( 'Sorry, no posts matched your criteria.', 'airtopfly' ); 

                        endif; 
                         
                        wp_reset_postdata(); 

                        ?>
                       
                        </div>

                           <div class="pagination float-wide">

                               <?php 

                                $pages = paginate_links( array( 'type' => 'array' ) );
                                    if( $pages ) {
                                    echo '<ul class="page-numbers">';
                                    foreach ( $pages as $page ) {
                                        echo "<li>$page</li>";
                                    }
                                    echo '</ul>';
                                }
                               
                               ;?>

                               
                           </div>
                       </div>
                       <aside class="sidebar">
                          <?php 
                                dynamic_sidebar('Searchbar');
                            
                          
                          ?>
                           
                       </aside>
                   </div>
               </section>
                
              
            </section>
            <!-- //End main content section -->

 <?php get_footer();?>