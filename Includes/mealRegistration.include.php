<?php
  if($_SERVER['REQUEST_METHOD'] !== 'PUT')
    die("Invalid Request");

  function to_meal($json) {
    $object = json_decode($json);
    $meal = new Meal();
    $meal->Timestamp = "";
    $meal->FoodItems = array();
  }

  function to_fooditem($json) {

  }
  require_once('../Classes/MealRegistration.class.php');
  $mealRegistration = new MealRegistration();
  $data = file_get_contents('php://input');

?>
