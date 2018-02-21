<?php
if($_SERVER['REQUEST_METHOD'] !== 'PUT')
    die("Invalid Request");
  require_once('../Classes/mealRegistration.class.php');
  $mealRegistration = new MealRegistration();
    $data = file_get_contents('php://input');
?>