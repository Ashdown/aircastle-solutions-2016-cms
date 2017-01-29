<?php /* Template Name: Links Data */ ?>

{
    <?php if(have_rows('links')): ?>

    "links": [

        <?php
            while ( have_rows('links') ) :
                the_row();
                $delimiter = (++$count == count(get_field('links'))) ? '' : ',';
                ?>
                {
                    "id": "<?php the_ID(); ?>",
                    "text": "<?php the_sub_field('text'); ?>",
                    "destination": "<?php the_sub_field('destination'); ?>",
                    "type": "<?php the_sub_field('type'); ?>"
                }<?php echo $delimiter; ?>
                <?php
            endwhile;
        ?>
    ]
    <?php endif; ?>
}