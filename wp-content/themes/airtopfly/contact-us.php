<?php 


/*
    Template Name: Contact

*/


get_header();?>

            <!-- Beginning main content section 
            ==================================== -->
            <section class="main-content-wrap contact-content nor-home">
               <section class="content-details-section">
                   <div class="common-wrap clear contact-inner">
                     <div class="title-wrap">
                         <h4><?php the_field('contact_title');?></h4>
                     </div>
                      
                       <div class="contact-wrap float-wide">
                           <div class="contact-info">
                               <strong><?php the_field('highlight_title');?></strong>
                             <div class="contact-inner-wrap float-wide">
                                  <div class="contact-item-info float-wide"><h6><?php the_field('telephone_title');?></h6>
                                   <p><?php the_field('telephone_number');?></p></div>
                                  <div class="contact-item-info float-wide"><h6><?php the_field('email_title');?></h6>
                                   <p><?php the_field('email');?></p></div>
                                  <div class="contact-item-info float-wide"><h6><?php the_field('whatsap_title');?></h6>
                                   <p><?php the_field('whatsap_number');?></p></div>
                                  <div class="contact-item-info float-wide"><h6><?php the_field('address_title');?></h6>
                                   <address>
                                        <?php the_field('address');?>
                                   </address></div>
                               </div>
                           </div>
                           <div class="contact-form">
                               <form action="#" method="post">
                               <?php echo do_shortcode('[contact-form-7 id="209" title="Contact Form"]');?>
                               </form>
                           </div>
                       </div>
                   </div>
               </section>
                
              
            </section>
            <!-- //End main content section -->
<?php get_footer();?>