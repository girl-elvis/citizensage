<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <?php //echo do_shortcode('[google-translator]'); ?>
   <div class="container">
    
    <div class="navbar-header ">

      <div class="row">
     

        <div class="col-xs-8 col-sm-6 logowrap"> 
          <a class="brand" href="<?= esc_url(home_url('/')); ?>"><h1 class="site-name"><?php echo get_bloginfo('name'); ?></h1></a>
         <h2 class="sitedesc"><?php echo get_bloginfo('description') ?></h2>
        </div>

        <div class="col-xs-4 col-sm-6">
           <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="
        <?php echo get_template_directory_uri() . "/dist/images/logo.png" ; ?>" >
        </a></div>


        
      </div>
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        Menu
      </button>

 </div> <!-- .navbar-header -->

     <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
