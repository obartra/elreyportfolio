<full-page-viewer ng-cloak ng-show="visible">
	<div class="top-buttons">
		<button class="top-button icon-close" ng-click="close();"></button>
		<div class="top-button button icon-info" ng-show="photos[index].choreographer || photos[index].photographer">
			<div ng-show="photos[index].choreographer" class="info">
				<span class="what">Choreography by:</span>
				<span class="who">{{photos[index].choreographer}}</span>
			</div>
			<div ng-show="photos[index].photographer" class="info">
				<span class="what">Photography by:</span>
				<span class="who">{{photos[index].photographer}}</span>
			</div>
		</div>
	</div>
	<button class="icon-left move" ng-show="canGoForward" ng-click="move(+1);"></button>
	<button class="icon-right move" ng-show="canGoBack" ng-click="move(-1);"></button>
	<div class="title">
		<h3>{{photos[index].company ? photos[index].company : photos[index].description}}</h3>
		<h4>{{photos[index].company ? photos[index].description : ''}}</h4>
	</div>
	<!--[if lte IE 9]>
		<img class="spinner" src="/img/spinner.gif"/>
	<![endif]-->
	<![if !IE]>
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	<![endif]>
	<div class="fit">
		<img
			is-loaded
			ng-show="loaded && photos[index].type==='photo'"
			ng-src="{{photos[index].fullsrc}}"
		/>
		<iframe
			ng-if="photos[index].type === 'video'"
			ng-src="{{visible ? photos[index].fullsrc : 'about:blank'}}"
			title="{{photos[index].description}}"
			frameborder="0"
			allowfullscreen
			width="420"
			height="315"
		></iframe>
	</div>
</full-page-viewer>
