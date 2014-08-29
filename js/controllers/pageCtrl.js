define(['angular', 'js/app'], function(ng, app){

	'use strict';

	app.controller('pageCtrl', ['$scope', function($scope){
		$scope.pageNames = {
			bio : 'Biography',
			photos : 'Performances'
		};
		$scope.page = $scope.pageNames.photos;
		$scope.$watch('page', function(newPage){
			if (newPage === $scope.pageNames.bio){
				$scope.singular = true;
			}else{
				$scope.singular = false;
			}
		});
	}]);
});
