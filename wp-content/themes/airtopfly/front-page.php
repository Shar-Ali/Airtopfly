<?php 

/*
    Template Name : Home


*/

get_header();?>

            <!-- Beginning main content section 
            ==================================== -->
            <section class="main-content-wrap home-content">
                <section class="hero-section bg-property" style="background-image: url(images/slide-4.jpg)">
                    <div class="slider-wrap" id="HeroSlide">
                       
                       <?php 
                            $args = array(
                                'post_type' => 'sliders',
                            );
                        
                            $query = new WP_Query($args);
                            while($query -> have_posts()) : $query -> the_post();
                        
                           ?> 
                            <div class="item slide-item bg-property" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                        <?php 
                        
                        endwhile;
                        wp_reset_postdata();

                    ?>
                    </div>
                    <div class="tab-content-section pty-high float-wide">
                        <div class="common-wrap clear">
                            <div class="tab-wrap float-wide">
                               <div class="tab-holder float-wide">
                                    <ul class="tabed">
                                        <li class="active">
                                            <span>Air Ticket</span>
                                        </li>
                                        <li>
                                            <span>Holly Hajj</span>
                                        </li>
                                        <li>
                                            <span>Holly Umrah</span>
                                        </li>
                                        <li>
                                            <span>Manpower Recruitment</span>
                                        </li>
                                        <li>
                                            <span>Manpower Clearence</span>
                                        </li>
                                        <li>
                                            <span>visa service</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content-wrap float-wide">
                                   <form action="#" method="post">
                                        <div class="tab-content-inner float-wide">
                                            <div class="tab-content float-wide">
                                                <div class="tab-item">
                                                    <label for="one">From</label>
                                                    <div class="form-group float-wide" style="position:relative;">
                                                        <div class="easy-autocomplete">
                                                            <input id="from" type="text" placeholder="Type Airport Name">
                                                            <div class="easy-autocomplete-container" id="eac-container-">
                                                                <ul style="display: none;"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <label for="one">To</label>
                                                    <div class="form-group float-wide" style="position:relative;">
                                                        <div class="easy-autocomplete">
                                                            <input id="To-0" type="text" placeholder="Type Airport Name">
                                                            <div class="easy-autocomplete-container" id="eac-container-">
                                                                <ul style="display: none;"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <label for="From-date">Departure Date</label>
                                                    <div class="select-wrap float-wide">
                                                         <input type="text" placeholder="dd-mm-yyyy" name="From-date" class="datepicker" id="From-date">
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <label for="To-date">Return Date</label>
                                                    <div class="select-wrap float-wide">
                                                         <input type="text" name="To-date" placeholder="dd-mm-yyyy" class="datepicker" id="To-date">
                                                    </div>
                                                </div>
                                                 <div class="tab-item">
                                                    <label for="six">Adult</label>
                                                    <div class="select-wrap">
                                                       <div class="select-icon"></div>
                                                        <select class="select" id="six">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <label for="five">Child <em>2 - 12 YRS</em> </label>
                                                    <div class="select-wrap">
                                                       <div class="select-icon"></div>
                                                        <select class="select" id="five">
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <label for="four">Infant <em>Below 2 YRS</em></label>
                                                    <div class="select-wrap">
                                                       <div class="select-icon"></div>
                                                        <select class="select" id="four">
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="input-wrap">
                                                        <button type="submit">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content float-wide">
                                                <a href="hajj-package-single.html" class="btn orange-btn-bg btn-skew">Hajj Registration</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">VIP 5 star Splendid</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">VIP 5 star Royal</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">5-star Signature</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">VIP 5 star Comfort</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">VIP 5 star Comfort</a>
                                            </div>
                                            <div class="tab-content float-wide">
                                                <a href="umrah-package-single.html" class="btn orange-btn-bg btn-skew">3star Executive Umrah Package</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">VIP 5star Premium Umrah package 2021</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">3star Classic Umrah Package</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">VIP 5star Umrah Hajj package 2021</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">VIP 5star Super Umrah package 2021</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Umrah Package with DUBAI tour</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Umrah Package with EGYPT tour</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Umrah Package with TURKEY tour</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">4 Star Deluxe Umrah Package from Dhaka</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">RAMADAN Umrah 15 days package 2022</a>
                                            </div>
                                            <div class="tab-content float-wide">
                                               <a href="manpower-recruitment-single.html" class="btn orange-btn-bg btn-skew">Rumania Work Permit </a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Saudi Work Permit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Malaysia Work Permit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Dubai Work Permit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Oman Work Permit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Qatar Work Permit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Iraq Work Permit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Bahrain Work Permit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Kuwait Work Permit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Croatia Work Permit</a>
                                                
                                            </div>
                                            <div class="tab-content float-wide">
                                                <a href="#" class="btn orange-btn-bg btn-skew">Saudi Muassasa/Company</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Saudi Amel Monjil</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Saudi House Driver</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Saudi Family Visit</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Oman Work Visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Qatar Work Visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Dubai Work Visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Singapore Work Visa</a>
                                            </div>
                                            <div class="tab-content float-wide">
                                                <a href="#" class="btn orange-btn-bg btn-skew">Dubai Visit Visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Malaysia visit visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">China visit visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Thailand Visit Visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Mishor/Egypt Visit Visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Turky Visit Visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Srilanka Visit Visa</a>
                                                <a href="#" class="btn orange-btn-bg btn-skew">Qatar Visit Visa</a>
                                            </div>
                                        </div>
                                       </form>
                                </div>
                            </div>
                        </div>
                    </div>  
                </section>
                
                <section class="our-services-section pty-high">
                    <div class="common-wrap clear">
                       <div class="title-text">
                           <h3><?php the_field('title');?></h3>
                           <h6><?php the_field('sub_title');?></h6>
                       </div>
                        <div class="services-wrap float-wide d-flex">
                           <?php 

                                $serviceNew = array(
                                    'post_type' => 'service',
                                    'posts_per_page' => 6
                                );
                            
                            $query = new WP_Query($serviceNew);
                            while($query -> have_posts()) : $query -> the_post();
                            
                            ?>
                            <div class="services-item">
                                <div class="services-figure float-wide bg-property" style="background-image: url(<?php the_post_thumbnail_url();?>)">
                                    <span><?php the_title();?></span>
                                    <a href="<?php the_permalink();?>" class="figure-link"></a>
                                </div>
                                <div class="services-info float-wide">
                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                    <?php the_content();?>
                                </div>
                            </div>
                            
                           <?php
                            
                            endwhile;
                            
                            wp_reset_postdata();
                            
                            ?>
                            
                            
                        </div>
                    </div>
                </section>
                <section class="testimonial-section pty-medium">
                    <div class="common-wrap clear">
                      <div class="testimonial-item-wrap">
                           <div class="title-text float-wide">
                               <h5><?php the_field('team_title');?></h5>
                           </div>
                            <div class="testimonial-wrap" id="TestiMonial">
                               <?php 
                                    $TeamNew = array(
                                        'post_type' => 'team'
                                    );
                                
                                $Teamquery = new WP_Query($TeamNew);
                                while($Teamquery -> have_posts()) : $Teamquery -> the_post();?>
                                
                                <div class="slides-item float-wide">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                    <?php the_content();?>
                                    <h6><?php the_title();?></h6>
                                    <span><?php the_field('name');?></span>
                                </div>
                                
                                <?php
                                
                                endwhile;
                                wp_reset_postdata();
                                
                                ?>
                            </div>
                        </div>
                      <div class="testimonial-item-wrap">
                           <div class="title-text float-wide">
                               <h5><?php the_field('client_title');?></h5>
                           </div>
                            <div class="testimonial-wrap" id="ClientSlide">
                                <?php 
                                    $ClientNew = array(
                                        'post_type' => 'client'
                                    );
                                
                                $query = new WP_Query($ClientNew);
                                while($query -> have_posts()) : $query -> the_post();
                                
                                
                                ?>
                                
                                <div class="slides-item float-wide">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                    <?php the_content();?>
                                    <h6><?php the_title();?></h6>
                                    <span><?php the_field('client_name');?></span>
                                </div>
                                
                                <?php
                                
                                endwhile;
                                
                                wp_reset_postdata();
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="recent-article-section pty-medium">
                    <div class="common-wrap clear">
                       <h3>Recent News</h3>
                        <div class="article-wrap float-wide d-flex">
                            <?php 

                                $blogshow = array(
                                       'post_type' => 'post',
                                       'posts_per_page' => 3 

                                );

                                $blogshowQuery = new WP_Query($blogshow);

                                while($blogshowQuery -> have_posts()) : $blogshowQuery -> the_post();

                                ?>

                                <div class="article-item">
                                    <a href="<?php the_permalink();?>" class="figure">
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt=""> 
                                </a>
                                    <a href="<?php the_permalink();?>" class="link-title"><?php the_title();?></a>
                                    <?php the_excerpt();?>
                                </div>

                                <?php 
                                
                                endwhile;

                                wp_reset_postdata();
                                
                                ;?>

                        </div>
                    </div>
                </section>
            </section>
            <!-- //End main content section -->

<?php get_footer();?>
