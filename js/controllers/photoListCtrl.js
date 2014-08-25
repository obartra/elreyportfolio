define(['angular', 'js/app'], function(ng, app){

	'use strict';

	app.controller('photoListCtrl', ['$rootScope', '$scope', 'DATA', function($rootScope, $scope, DATA){
		$scope.performances = DATA;
		$scope.show = function(index){
			$rootScope.$emit('show.photo', index);
		};

	}]);
});
