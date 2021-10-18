
    <?php

// Check rows exists.
if( have_rows('welcome_slider') ):

    // Loop through rows.
    while( have_rows('welcome_slider') ) : the_row();
;?>
       
        <div class="slider-item bg-property" style="background-image: url(<?php echo the_sub_field('image');?>)"></div>
<?php 
    // End loop.
    endwhile;

    // Do something...
endif;
;?>



        
        
    