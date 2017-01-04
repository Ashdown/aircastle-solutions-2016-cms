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
    <?php endif; ?>
    "startDate": "sample",
    "endDate": "sample"
}

