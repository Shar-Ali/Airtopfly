<?php get_header();?>

            <!-- Beginning main content section 
            ==================================== -->
            <section class="main-content-wrap blog-single-content nor-home">
               <section class="content-details-section">
                   <div class="common-wrap clear">
                       <div class="content-wrap">
                           <div class="title-wrap float-wide"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Back to Blog</a></div>
                           <div class="article-expanded float-wide">
                                <div class="article-figure float-wide bg-property" style="background-image: url(<?php the_post_thumbnail_url();?>)"></div>
                                <h5><?php the_title();?></h5>
                                <?php the_content();?>
                            </div>
                       </div>
                       <aside class="sidebar">
                           <div class="search-wrap float-wide">
                                <div class="title-wrap float-wide"><h6>Quick Search</h6></div>
                                <div class="search-inner float-wide">
                                    <form action="#" method="post">
                                        <div class="search-info float-wide">
                                           <div class="input-wrap float-wide">
                                               <input type="search" placeholder="Search What?">
                                           </div>
                                           <div class="input-wrap float-wide">
                                               <button type="submit" value="search">Search</button>
                                           </div>
                                            
                                        </div>
                                    </form>
                                </div>
                           </div>
                           <div class="sidebar-item float-wide">
                               <div class="title-wrap float-wide"><h6>Categories and Posts</h6></div>
                               <div class="sidebar-info float-wide">
                                    <a href="#" class="show-item float-wide">
                                        <span>Adventure</span>
                                        <dfn>1</dfn>
                                    </a>
                                    <a href="#" class="show-item float-wide">
                                        <span>Adventure</span>
                                        <dfn>1</dfn>
                                    </a>
                                    <a href="#" class="show-item float-wide">
                                        <span>Adventure</span>
                                        <dfn>1</dfn>
                                    </a>
                                    <a href="#" class="show-item float-wide">
                                        <span>Adventure</span>
                                        <dfn>1</dfn>
                                    </a>
                                    <a href="#" class="show-item float-wide">
                                        <span>Adventure</span>
                                        <dfn>1</dfn>
                                    </a>
                               </div>
                           </div>
                           <div class="sidebar-item float-wide">
                               <div class="title-wrap float-wide"><h6>Popular Posts</h6></div>
                               <div class="sidebar-info float-wide">
                                    <div class="content-row float-wide">
                                       <a href="#" class="content-figure">
                                           <img src="images/services-item6.jpg" alt="">
                                       </a>
                                       <div class="content-figure-info">
                                           <a href="#" class="figure-title">উমরাহ প্যাকেজ নিন</a>
                                       </div>
                                   </div>
                                    <div class="content-row float-wide">
                                       <a href="#" class="content-figure">
                                           <img src="images/services-item6.jpg" alt="">
                                       </a>
                                       <div class="content-figure-info">
                                           <a href="#" class="figure-title">উমরাহ প্যাকেজ নিন</a>
                                       </div>
                                   </div>
                                    <div class="content-row float-wide">
                                       <a href="#" class="content-figure">
                                           <img src="images/services-item6.jpg" alt="">
                                       </a>
                                       <div class="content-figure-info">
                                           <a href="#" class="figure-title">উমরাহ প্যাকেজ নিন</a>
                                       </div>
                                   </div>
                                    <div class="content-row float-wide">
                                       <a href="#" class="content-figure">
                                           <img src="images/services-item6.jpg" alt="">
                                       </a>
                                       <div class="content-figure-info">
                                           <a href="#" class="figure-title">উমরাহ প্যাকেজ নিন</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           
                       </aside>
                   </div>
               </section>
                
              
            </section>
            <!-- //End main content section -->

<?php get_footer();?>