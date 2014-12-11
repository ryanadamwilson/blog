<?php
/*
Template Name: Blog
*/

get_header(); ?>

  <?php 
  if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
     <div class="post">
     <h2 id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
     <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
     <div class="the-excerpt"><?php the_excerpt(); ?><span class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></span>
     </div>
      </div>
    <?php endwhile; ?>
<div class="navigation">
<div class="alignleft">
<?php posts_nav_link('','','&laquo; Previous Entries') ?>
</div>
<div class="alignright">
<?php posts_nav_link('','Next Entries &raquo;','') ?>
</div>
  </div>
<?php else : ?>
  <h2 class="center">Not Found</h2>
 <p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>