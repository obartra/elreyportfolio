define(['angular', 'js/app'], function(ng, app){

	'use strict';

	app.controller('pageCtrl', ['$scope', function($scope){
		$scope.pageNames = {
			bio : 'Biography',
			photos : 'Performances'
		};
		$scope.page = $scope.pageNames.photos;
	}]);
});
