<?php /* Template Name: Projects */ ?>

{
    "projects":[

<?php
$args = array( 'post_type' => 'project', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    {
        "title": "<?php the_title(); ?>",
        "url": "/projects/<?php echo basename(get_permalink()); ?>
    },
    <?php
endwhile;
?>
    ]
}


