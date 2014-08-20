requirejs.config({
	paths : {
		'angular' : ['//ajax.googleapis.com/ajax/libs/angularjs/1.2.21/angular.min', 'js/vendor/angular/angular.min'],
		'angular-animate' : 'js/vendor/angular-animate/angular-animate.min',
		'font-loader': 'js/vendor/components-webfontloader/webfont'
	},
	shim: {
		'angular': {
			exports: 'angular'
		},
		'angular-animate': {
			deps: ['angular'],
			exports : 'angular'
		},
		'font-loader' : {
			deps : [],
			exports: 'WebFont'
		}
	},
	baseUrl : '/',
	enforceDefine: true,
	wrapShim : true,
	waitSeconds : 0
});

require([
	'angular',
	'font-loader',
	'angular-animate',
	'js/app',
	'js/controllers/photoListCtrl',
	'js/components/fullpageviewer',
	'js/components/isloaded'
], function(ng){
	'use strict';

	window.WebFont.load({
		google: {
			families: ['Roboto:100,300']
		}
	});
	ng.bootstrap(document, ['app']);
});
