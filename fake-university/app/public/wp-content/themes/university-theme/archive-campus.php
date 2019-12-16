<?php 

  get_header(); 
  pageBanner(array(
    'title' => 'Our campuses',
    'subtitle' => 'Check out all our campuses across the city.'
  ));
  ?>
  

  <div class="container container--narrow page-section">

  <ul class="link-list min-list">
  <?php
      while(have_posts()) {
        the_post();?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); 
        $mapLocation = get_field('map_location');
        $mapLocation['lng']; ?></a></li>
     <?php }
     
  ?>
</ul>

  </div>

 <?php get_footer();

?>