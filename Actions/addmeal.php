<?php
  require_once('../Includes/mealregistration.include.php');
  $meal = to_meal($data);
  $mealRegistration->addMeal($meal);
?>