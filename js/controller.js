angular.module("Angular_Timeline").controller("Ctrl", ['$scope', 'APIService', function($scope, APIService) {

	APIService.getYears().then(function(data){
		$scope.years = data;
		console.log($scope.years);
	})
		
}]);