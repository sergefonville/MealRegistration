var app = angular.module('mealRegistration', ['ngRoute']);

app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
	$routeProvider
		.when('/', {
			templateUrl: 'Templates/main.template.html'
		})
		.when('/add', {
			templateUrl: 'Templates/add.template.html'
		})
		.when('/show', {
			templateUrl: 'Templates/show.template.html'
		})
		.when('/list', {
			templateUrl: 'Templates/list.template.html'
		})
		.when('/edit', {
			templateUrl: 'Templates/edit.template.html'
		});
	// This needs to be done as a function, as a parameter to html5Mode does not work.
	$locationProvider.hashPrefix('');
}]);