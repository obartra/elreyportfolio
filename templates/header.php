<div class="inner"  itemscope itemtype="http://schema.org/Person">
	<meta itemprop="image" content="/img/elrey.jpg"></meta>
	<div id="elrey"></div>
	<h3 itemprop="name">Elrey Belmonti</h3>
	<h4 itemprop="jobTitle">DANCER/CHOREOGRAPHER</h4>
	<h1>Hello</h1>
	<h2>
		<span class="thisismsg" ng-show="!showPopup && !singular">these are my</span>
		<span class="thisismsg" ng-cloak ng-show="!showPopup && singular">this is my</span>
		<nav
			class="dropdown"
			ng-class="{active: showPopup}"
			ng-click="showPopup=!showPopup;"
			ng-mouseenter="showPopup=true;"
			ng-mouseleave="showPopup=false;"
		>
			<ul>
				<li
					ng-click="page = pageNames.photos; singular = false;"
					ng-show="page === pageNames.photos || showPopup"
				>Performances</li>
				<li
					ng-cloak
					ng-click="page = pageNames.bio; singular = true;"
					ng-show= "page === pageNames.bio || showPopup"
				>Biography</li>
				<li
					ng-cloak
					ng-show="showPopup"
				>
					<a href="/resume" target="_blank">Resume</a>
				</li>
			</ul>
		</nav>
	</h2>
</div>
