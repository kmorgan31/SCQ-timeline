app.directive("loaded",function(){
	return{
		scope:false,
		restrict: "A",
		link: function(scope,elements,arguments){
			if (scope.$last){
				// angular.element(elements).jquery.timelinr-0.9.6(scope.$eval(arguments.loaded));
				scope.$emit('content-changed');
				console.log('Page Ready');
			}
		}
	}
});