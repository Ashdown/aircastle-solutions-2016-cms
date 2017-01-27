<?php /* Template Name: About Data */ ?>

<?php
$callback = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['callback']);
$picture = get_field('picture');
$url = str_replace('shielded-scrubland-59117.herokuapp.com', 'cms.rorydevane.com', $picture['url']);
?>

<?php echo $callback; ?>({
"picture": {
    "url": "<?php echo $url ?>",
    "alt": "<?php echo $picture['alt'] ?>",
    "height": "<?php echo $picture['sizes']['large-height'] ?>",
    "width": "<?php echo $picture['sizes']['large-width'] ?>"
},
"description": "<?php the_field('description') ?>"
});