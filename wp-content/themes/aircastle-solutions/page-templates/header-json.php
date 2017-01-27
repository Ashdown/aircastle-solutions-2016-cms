<?php /* Template Name: Header Data */ ?>

<?php
$callback = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['callback']);
?>

<?php echo $callback; ?>({
"introduction": "<?php the_field('introduction'); ?>"
});