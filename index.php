<?php 
include_once 'tutorialClass.php';

// the main tutorial instance
$tutorial = new Tutorial();

// check if add user form submitted
if (isset($_POST['name']) && isset($_POST['last'])) {
    $tutorial->addUser($_POST);
} 

// load all widgets
$tutorial->loadWidgets();
?>