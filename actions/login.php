<?php
include '../classes/User.php';

//Create an object
$user = new User;

//call
$user->login($_POST);
?>