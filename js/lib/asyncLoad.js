/*global require, window, document, XMLHttpRequest*/
require([], function(){
	'use strict';
	var getJSON = function(url, callback) {
			var xhr = new XMLHttpRequest();
			xhr.open('get', url, true);
			xhr.responseType = 'json';
			xhr.onload = function() {
				if (xhr.status == 200) {
					callback(true, xhr.response);
				} else {
					callback(false, xhr.status);
				}
			};
			xhr.send();
		},
		appendCss = function (styles) {
			var css = document.createElement('style');
			if (css.styleSheet){
				css.styleSheet.cssText = styles;
			}else{
				css.appendChild(document.createTextNode(styles));
			}
			document.getElementsByTagName("head")[0].appendChild(css);
		},
		appendJs = function (scriptTxt) {
			var script = document.createElement('script'),
				propName = (typeof script.innerText === 'undefined') ? 'textContent' : 'innerText';
			script[propName] = scriptTxt;
			document.getElementsByTagName("head")[0].appendChild(script);
		},
		appendHtml = function (html){
			var div = document.createElement('div');
			div.innerHTML = html;
			document.getElementsByTagName("body")[0].appendChild(div.firstChild);
		},
		appendPhotosJson = function(photos){
			window.ElreyDancePortfolio.PHOTOS = JSON.parse(photos || '[]');
		},

		process = function(data, method){
			var str = '';
			for (var i = 0; i < data.length; i++){
				str += data[i];
			}
			method(str);
		};

	getJSON(window.ElreyDancePortfolio.asyncLoadUrl, function(success, resp){
		if (success && resp){
			process(resp.css, appendCss);
			process(resp.js, appendJs);
			process(resp.html, appendHtml);
			appendPhotosJson(resp.photos);
		}
	});
});
