<section class="full-page-viewer" ng-cloak ng-show="visible">
	<header>
		<h3>{{photos[index].company ? photos[index].company : photos[index].description}}</h3>
		<h4>{{photos[index].company ? photos[index].description : ''}}</h4>
	</header>
	<div class="top-buttons">
		<button class="top-button icon-close" ng-click="close();"></button>
		<button class="top-button icon-info" ng-click="showInfo=!showInfo"></button>
	</div>
	<button class="icon-left move" ng-show="canGoForward" ng-click="move(+1);"></button>
	<button class="icon-right move" ng-show="canGoBack" ng-click="move(-1);"></button>
	<!--[if lte IE 9]>
		<img class="spinner" src="/img/spinner.gif" alt="Loading..."/>
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
			ng-show="loaded && photos[index].type === 'photo'"
			ng-src="{{photos[index].fullsrc}}"
			alt="{{photos[index].description  + (photos[index].choreographer ? ', choreographed by ' + photos[index].choreographer :'') + (photos[index].photographer ? '. Photography by ' + photos[index].photographer : '')}}"
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
	<div id="info-popup" ng-show="showInfo">
		<button class="icon-close" ng-click="showInfo=false"></button>
		<div class="column">
			<div ng-show="photos[index].company" class="info">
				<span class="label">Company:</span>
				<span class="data">{{photos[index].company}}</span>
			</div>
			<div ng-show="photos[index].description" class="info">
				<span class="label">Performance:</span>
				<span class="data">{{photos[index].description}}</span>
			</div>
		</div>
		<div class="column">
			<div ng-show="photos[index].choreographer" class="info">
				<span class="label">Choreography by:</span>
				<span class="data">{{photos[index].choreographer}}</span>
			</div>
			<div ng-show="photos[index].photographer" class="info">
				<span class="label">Photography by:</span>
				<span class="data">{{photos[index].photographer}}</span>
			</div>
		</div>
	</div>
</section>
