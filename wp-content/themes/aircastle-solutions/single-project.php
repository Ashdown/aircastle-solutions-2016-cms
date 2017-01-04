{
    "id": "<?php the_ID(); ?>",
    "name": "<?php echo get_the_title(); ?>",
    <?php $picture = get_field('picture'); ?>
    "picture": {
    "url": "<?php echo $picture['url'] ?>",
    "alt": "<?php echo $picture['alt'] ?>",
    "height": "<?php echo $picture['sizes']['full-height'] ?>",
    "width": "<?php echo $picture['sizes']['full-width'] ?>",
    },
    "description": "<?php echo get_field('description'); ?>",
    <?php if(have_rows('links')): ?>
        "links":[
        <?php while(have_rows('links')) : the_row(); ?>
            {
            "text": "<?php the_sub_field('text'); ?>",
            "url":  "<?php the_sub_field('url'); ?>"
            },
        <?php endwhile; ?>
        ],
    <?php endif; ?>
    <?php if(have_rows('keywords')): ?>
        "keywords": [
        <?php while(have_rows('keywords')) : the_row(); ?>
            "<?php the_sub_field('keyword'); ?>",
        <?php endwhile; ?>
        ],
    <?php endif; ?>
    <?php
        //04/01/2017
        $startDate = DateTime::createFromFormat('d/m/Y', get_field('start_date'));
        $endDate = DateTime::createFromFormat('d/m/Y', get_field('end_date'));
    ?>
    "startDate": "<?php echo $startDate->format('M, Y'); ?>",
    "endDate": "<?php echo $endDate->format('M, Y'); ?>",
    "test" : <?php echo get_field('start_date'); ?>
}

