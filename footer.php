<footer class="content-info">

  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>


    <?php if( have_rows('sponsors', 'option') ): ?>

        <ul id="sponsors">

        <?php while( have_rows('sponsors', 'option') ): the_row(); ?>

        <?php 
        	$image = get_sub_field('logo');
    		if( $image ) {
    			echo ( '<li>' . wp_get_attachment_image( $image, 'thumbnail' ) . '</li>');
    		} ?>

        <?php endwhile; ?>

        </ul>

    <?php endif; ?>

  </div>

 <div class="container-fluid strip">
    <div class="container">

  Content © <?php bloginfo('name'); ?>. Website by <a href="http://safetycat.co.uk/" title="Safetycat">Safetycat</a>

<?php get_search_form(); ?>

 </div> </div>


</footer>
