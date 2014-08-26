requirejs.config({
	paths : {
		'angular' : ['//ajax.googleapis.com/ajax/libs/angularjs/1.2.21/angular.min', 'js/vendor/angular/angular.min'],
		'angular-animate' : 'js/vendor/angular-animate/angular-animate.min'
	},
	shim: {
		'angular': {
			exports: 'angular'
		},
		'angular-animate': {
			deps: ['angular'],
			exports : 'angular'
		}
	},
	baseUrl : '/',
	enforceDefine: true,
	wrapShim : true,
	waitSeconds : 0
});

require([
	'angular',
	'angular-animate',
	'js/app',
	'js/controllers/photoListCtrl',
	'js/controllers/pageCtrl',
	'js/components/fullpageviewer',
	'js/components/isloaded'
], function(ng){
	'use strict';

	ng.bootstrap(document, ['app']);
});
