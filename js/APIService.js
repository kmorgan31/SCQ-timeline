angular.module("Angular_Timeline").factory("APIService", ["$http", "$q", function($http, $q){

	return{
		getMatchesForYear:function(year){
			var deferred = $q.defer();
			$http.get('http://localhost:8080/angular-timeline/getmatchesinyear.php?year='+year)
				.success(function(data){
					deferred.resolve(data);
				})
				.error(function(err){
					deferred.reject(err);
				});

			return deferred.promise;
		},

		getYears:function(){
			var deferred = $q.defer();
			$http.get('http://localhost:8080/angular-timeline/getyears.php')
				.success(function(data){
					deferred.resolve(data);
				})
				.error(function(err){
					deferred.reject(err);
				});

			return deferred.promise;
		}


	}

}]);