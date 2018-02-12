app.controller('mealRegistrationController', ['$scope', '$http', function($scope, $http) {
	$scope.foodItems = [];
	$scope.addFoodItem = function() {
		$scope.foodItems.push({});
	};
}]);