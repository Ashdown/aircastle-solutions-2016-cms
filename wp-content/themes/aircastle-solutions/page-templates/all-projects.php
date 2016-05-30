<?php /* Template Name: All Projects Template */ ?>

<?php
$results = array({
    'one' => {
        'title' => 'First Title'
        'description' => 'Lorem ipsum dolar sit amet'
    },
    'two' => {
        'title' => 'Second Title',
        'description' => 'Lorem ipsum dolar sit amet'
    }
});

echo json_encode($results);
?>