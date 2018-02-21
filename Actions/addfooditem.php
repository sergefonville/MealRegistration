<?php
  require_once('../Includes/mealregistration.include.php');
  $foodItem = json_decode($data);
  $mealRegistration->addMeal($foodItem);
?>