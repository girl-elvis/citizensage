<?php 
    if (is_front_page() ){ 
        echo do_shortcode ('[new_royalslider id="1"]');
    ?>

    <div class="sectors">

    <?php if( have_rows('sector') ): ?>
     
        <ul>
     
        <?php while( have_rows('sector') ): the_row(); 
        		$image = wp_get_attachment_image_src(get_sub_field('image'), 'home');
        ?>
     
            <li> <a href=<?php the_sub_field('link'); ?> >
            	<div class="bgimg" style="background-image:url(<?php echo $image[0]; ?>);"><div class='desc'>
    	        	<h2 class="notranslate"><?php the_sub_field('title'); ?> </h2>
    	         	<span class="notranslate"><?php the_sub_field('text'); ?></span>
    		     </div> </div>
    		 </a>
         </li>
            

            
        <?php endwhile; ?>
     
        </ul>
     
    <?php endif; ?>



    </div>

<?php } else {
    $attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image') );

    if ( $attachments ) {
        echo do_shortcode ('[gallery royalslider="2"]'); 
     // do conditional stuff here 

    }
      
} ?>


<?php the_content(); ?>


<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
