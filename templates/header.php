<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <?php //echo do_shortcode('[google-translator]'); ?>
 
     <div class="container">
    <div class="navbar-header ">

      <div class="row">

        <div class="logowrap col-sm-1"> 
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="
        <?php echo get_template_directory_uri() . "/dist/images/logo.png" ; ?>" >
        </a>
          </div>
<div class="col-sm-11">
          <a class="brand" href="<?= esc_url(home_url('/')); ?>"><h1 class="site-name"><?php echo get_bloginfo('name'); ?></h1></a>
         <h2 class="sitedesc"><?php  echo html_entity_decode(get_bloginfo('description')); ?></h2>
        </div>


        
      </div>
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        Menu
      </button>

 </div> <!-- .navbar-header -->
  </div>



     <nav class="collapse navbar-collapse" role="navigation"> 
      <div class="container">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </div>
    </nav>


</header>
