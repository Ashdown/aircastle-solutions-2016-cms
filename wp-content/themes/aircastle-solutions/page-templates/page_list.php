<?php /* Template Name: List Template */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>

<?php endwhile; ?>

<ul>
    <?php wp_list_pages('exclude=10&title_li='); ?>
</ul>

<?php get_sidebar(); ?>
<?php get_footer(); ?>