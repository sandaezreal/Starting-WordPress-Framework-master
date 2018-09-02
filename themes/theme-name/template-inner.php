<?php
/*
Template Name: Inner
 */
?>

<!-- Begin Header -->
<?php get_header(); ?>
<!-- End Header -->

<!-- Begin WP Page Loop -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- Begin Page Content -->
<?php the_content(); ?>
<!-- End Page Content -->

<?php endwhile; else : ?>

<!-- Begin No Content Found Messazge -->
<h1>No Content Found</h1>
<!-- End No Content Found Messazge -->

<?php endif; ?>

<!-- Begin Footer -->
<?php get_footer(); ?>
<!-- End Footer -->