define([
	'angular',
	'angular-animate'
], function(ng){

	'use strict';

	return ng.module('app', ['ngAnimate'])
			.value('DATA', window.ElreyDancePortfolio.PHOTOS)
			.config(['$sceProvider', function($sceProvider) {
				$sceProvider.enabled(false);
			}]);
});
