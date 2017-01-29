<?php /* Template Name: Links Data */ ?>

{
    <?php if(have_rows('links')): ?>

    "links": [

        <?php
            while ( have_rows('links') ) :
                the_row();
                $delimiter = (++$count == count(get_field('links'))) ? '' : ',';
                $link = get_sub_field('link');
                ?>
                {
                    "id": "<?php the_ID(); ?>",
                    "text": "<?php echo $link['text'] ?>",
                    "destination": "<?php echo $link['destination'] ?>",
                    "type": "<?php echo $link['type'] ?>"
                }<?php echo $delimiter; ?>
                <?php
            endwhile;
        ?>
    ]
    <?php endif; ?>
}