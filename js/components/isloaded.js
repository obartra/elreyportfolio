define(['angular', 'js/app'], function(ng, app){

	'use strict';
	var isCached = function(url){
		if (url){
			var test = document.createElement("img");
			test.src = url;
			return !!(test.complete || test.readyState === 4);
		}
	};

	app.directive('isLoaded', [function(){
			return {
				restrict : 'AE',
				scope: true,
				controller: ['$scope', '$element', '$attrs', 'safeApply', function($scope, $element, $attrs, safeApply){

					$element.on('load', function(){
						$scope.loaded = true;
						safeApply($scope);
					});
					if (isCached($attrs.src)){
						$scope.loaded = true;
						safeApply($scope);
					}
					$scope.$watch('$attrs.src', function(newVal){
						$scope.loaded = false;
					});
					$scope.$attrs = $attrs;
				}]
			}
		}])
		.factory( 'safeApply', function() {
			return function($scope, fn) {
				var phase = $scope.$root.$$phase;
				if(phase == '$apply' || phase == '$digest') {
					if(fn && (typeof(fn) === 'function')) {
						fn();
					}
				} else {
					$scope.$apply(fn);
				}
			}
		});
});
