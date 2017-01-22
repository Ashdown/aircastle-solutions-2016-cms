{
    "projects":[

    <?php
    $args = array( 'post_type' => 'project', 'posts_per_page' => -1 );
    $query = new WP_Query( $args );
    while ( $query->have_posts() ) : $query->the_post();

        $deliminator = ( ($query->current_post + 1) == ($query->post_count)) ? '' : ',';

        ?>
        {
            "id": <?php the_ID(); ?>,
            "title": "<?php the_title(); ?>",
            "type": "<?php the_sub_field('type'); ?>",
            "picture": {
                "url": "<?php echo $picture['url'] ?>",
                "alt": "<?php echo $picture['alt'] ?>",
                "height": "<?php echo $picture['sizes']['large-height'] ?>",
                "width": "<?php echo $picture['sizes']['large-width'] ?>",
            },
            "description": "<?php echo get_field('description'); ?>",
            <?php if(have_rows('links')): ?>
                "links":[
                <?php
                while(have_rows('links')) :
                    the_row();
                    $delimiter = (++$count == count(get_field('links'))) ? '' : ',';
                    ?>
                    {
                    "text": "<?php the_sub_field('text'); ?>",
                    "url":  "<?php the_sub_field('url'); ?>"
                    }<?php echo $delimiter; ?>
                <?php
                endwhile;
                $count = 0;
                ?>
                ],
            <?php endif; ?>
            <?php if(have_rows('keywords')): ?>
                "keywords": [
                <?php
                $total = (count(get_field('keywords')));
                while(have_rows('keywords')) :
                    the_row();
                    $delimiter = (++$count == $total) ? '' : ',';
                    ?>
                    "<?php the_sub_field('keyword'); ?>"<?php echo $delimiter; ?>
                <?php
                endwhile;
                $count = 0;
                ?>
                ],
            <?php endif; ?>
            <?php
            $startDate = DateTime::createFromFormat('d/m/Y', get_field('start_date'));
            $endDate = DateTime::createFromFormat('d/m/Y', get_field('end_date'));
            ?>
            "startDate": "<?php echo $startDate->format('F, Y'); ?>",
            "endDate": "<?php echo $endDate->format('F, Y'); ?>",
            "url": "/projects/<?php echo basename(get_permalink()); ?>"
        }<?php echo $deliminator; ?>
        <?php
    endwhile;
    ?>
    ]
}