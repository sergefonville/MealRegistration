<?php
	require_once('../Includes/mealregistration.include.php');
	$meal = json_decode($data);
	$mealRegistration->addMeal($meal);
?>