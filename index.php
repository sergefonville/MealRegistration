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
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"
		>
		</script>
		<script src="Scripts/mealRegistration.js"></script>
		<script src="Scripts/mealRegistrationController.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-light navbar-light">
			<ul class="nav navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#/add">Add</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#/edit">Edit</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#/list">List</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#/show">Show</a>
				</li>
			</ul>
		</nav>
		<div ng-view></div>
	</body>
</html>