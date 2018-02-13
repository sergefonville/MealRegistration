app.controller('mealRegistrationController', ['$scope', '$http', function($scope, $http) {
	$scope.foodItems = [];
	$scope.units = [];
	$scope.units.push('Grams');
	$scope.units.push('Kcal');
	$scope.addFoodItem = function() {
		$scope.foodItems.push({});
	};
}]);