define([
	'angular',
	'angular-animate'
], function(ng){

	'use strict';

	return ng.module('app', ['ngAnimate'])
			.value('DATA', window.PORTFOLIO_PHOTO_DATA)
			.config(['$sceProvider', function($sceProvider) {
				$sceProvider.enabled(false);
			}]);
});
