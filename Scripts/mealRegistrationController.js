app.controller('mealRegistrationController', ['$scope', '$http', function($scope, $http) {
	$scope.foodItems = [];
	$scope.units = [];
	$scope.units.push('Grams');
	$scope.units.push('Kcal');
	$scope.addFoodItem = function() {
		var foodItem = {
			name: '',
			unit: units[0],
			amount: '',
			kcal: '',
			carbs:
		}
		$scope.foodItems.push(foodItem);
	};
	$scope.removeFoodItem = function(foodItem) {
		var foodItemIndex =  $scope.foodItems.indexOf(foodItem);
		$scope.foodItems.splice(foodItemIndex, 1);
	}
}]);