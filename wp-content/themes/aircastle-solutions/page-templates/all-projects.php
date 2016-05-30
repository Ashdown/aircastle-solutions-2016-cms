<?php /* Template Name: All Projects Template */ ?>

<?php
$results = array(
    'one' => array(
        'title' => 'First Title',
        'description' => 'Lorem ipsum dolar sit amet'
    ),
    'two' => array(
        'title' => 'Second Title',
        'description' => 'Lorem ipsum dolar sit amet'
    )
);

echo json_encode($results);
?>