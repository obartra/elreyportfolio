define(['angular', 'js/app'], function(ng, app){

	'use strict';
	var setHistory = function(index){
			if (window.history && window.history.replaceState){
				if (index > -1){
					window.history.replaceState('', 'Elrey Belmonti - Gallery', '/gallery/' + index);
				}else{
					window.history.replaceState('', 'Elrey Belmonti - Portfolio', '/');
				}
			}
		},
		getFromUrl = function(){
			var found = window.location.href.match(/(?:\/gallery\/([0-9]+))$/i);
			if (found && found.length > 0){
				var index = parseInt(found[1],10);
				return index;
			}else{
				return -1;
			}
		};

	app.directive('fullPageViewer', ['$rootScope', 'DATA', function($rootScope, DATA){
		return {
			restrict : 'AE',
			controller: ['$scope', function($scope){
				$scope.visible = false;
				$scope.photos = DATA;

				var maxIndex = DATA.length,
					checkIndex = function(index){
						if (index < 0){
							index = 0;
						}
						if (index === 0){
							$scope.canGoBack = false;
						}else{
							$scope.canGoBack = true;
						}

						if (index >= maxIndex){
							index = maxIndex -1;
						}
						if (index === maxIndex -1){
							$scope.canGoForward = false;
						}else{
							$scope.canGoForward = true;
						}
						return index;
					},
					initialIndex = getFromUrl();

				$scope.move = function(change){
					$scope.index = checkIndex($scope.index + (change || 0));
					setHistory($scope.index);
				}
				$scope.close = function(){
					$scope.visible = false;
					setHistory(-1);
				}

				$rootScope.$on('show.photo', function(e, index){
					$scope.index = checkIndex(index);
					setHistory($scope.index);
					$scope.visible = true;
				});
				if (initialIndex > -1){
					$rootScope.$emit('show.photo', initialIndex);
				}
			}]
		}
	}]);
});
