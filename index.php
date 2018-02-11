<!DOCTYPE html>
<html ng-app="mealRegistration">
	<head>
		<title>Meal Registration</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
		<script src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
			crossorigin="anonymous"
		>
		<script src="Scripts/mealRegistrationController.js"></script>
	</head>
	<body>
		<a href="#/">Main</a>
		<a href="#/add">Add</a>
		<a href="#/show">Show</a>
		<a href="#/list">List</a>
		<a href="#/edit">Edit</a>
		<div ng-view></div>
	</body>
</html>