{
    "projects":[

    <?php
    $args = array( 'post_type' => 'project', 'posts_per_page' => -1 );
    $query = new WP_Query( $args );
    while ( $query->have_posts() ) : $query->the_post();

        $deliminator = ( ($query->current_post + 1) == ($query->post_count)) ? '' : ',';

        ?>
        {
            "title": "<?php the_title(); ?>",
            "url": "/projects/<?php echo basename(get_permalink()); ?>"
        }<?php echo $deliminator; ?>
        <?php
    endwhile;
    ?>
    ]
}