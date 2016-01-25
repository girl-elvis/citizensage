<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title notranslate"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <?php  
    $attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image') );

    if ( $attachments ) {
        echo do_shortcode ('[gallery royalslider="2"]'); 
     // do conditional stuff here 

    } 
    ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
