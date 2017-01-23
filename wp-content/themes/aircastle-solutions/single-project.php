<?php
echo $_GET['callback'] . '(';
$count = 0;
?>
{
    "id": "<?php the_ID(); ?>",
    "name": "<?php echo get_the_title(); ?>",
    "type": "<?php the_field('type'); ?>",
    <?php if(have_rows('pictures')): ?>
        "pictures" : [
        <?php
            while(have_rows('pictures')) :
                the_row();
                $delimiter = (++$count == count(get_field('pictures'))) ? '' : ',';
                $picture = get_sub_field('picture');
                $url = str_replace('shielded-scrubland-59117.herokuapp.com', 'cms.rorydevane.com', $picture['url']);
                ?>
                {
                    "url": "<?php echo $url ?>",
                    "alt": "<?php echo $picture['alt'] ?>",
                    "height": "<?php echo $picture['sizes']['large-height'] ?>",
                    "width": "<?php echo $picture['sizes']['large-width'] ?>"
                }<?php echo $delimiter; ?>
                <?php
            endwhile;
            $count = 0;
        ?>
        ],
    <?php endif; ?>
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
    "endDate": "<?php echo $endDate->format('F, Y'); ?>"
}
<?php echo ')' ?>

