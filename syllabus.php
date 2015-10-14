<?php require './header.php';?>

<div data-role="page" data-title="课表">

    <div class="ui-content" role="main">

			<ul data-role="listview" data-split-icon="gear" data-split-theme="a" data-inset="false">
				<li><a href="#">
					<img src="/img/album-bb.jpg">
				<h2>Broken Bells</h2>
				<p>Broken Bells</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="/img/album-hc.jpg">
				<h2>Warning</h2>
				<p>Hot Chip</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="/img/album-p.jpg">
				<h2>Wolfgang Amadeus Phoenix</h2>
				<p>Phoenix</p></a>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</li>
				<li><a href="#">
					<img src="/img/album-ok.jpg">
					<h3>Of The Blue Colour Of The Sky</h3>
				<p>Ok Go</p>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</a></li>
				<li><a href="#">
					<img src="/img/album-ws.jpg">
					<h3>Elephant</h3>
				<p>The White Stripes</p>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</a></li>
				<li><a href="#">
					<img src="/img/album-rh.jpg">
					<h3>Kid A</h3>
				<p>Radiohead</p>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</a></li>
				<li><a href="#">
					<img src="/img/album-xx.jpg">
					<h3>XX</h3>
				<p>XX</p>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</a></li>
				<li><a href="#">
					<img src="/img/album-mg.jpg">
					<h3>Congratulations</h3>
				<p>MGMT</p>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</a></li>
				<li><a href="#">
					<img src="/img/album-ag.jpg">
					<h3>Ashes Grammar</h3>
				<p>A Sunny Day in Glasgow</p>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</a></li>

				<li><a href="index.html">
					<img src="/img/album-k.jpg">
					<h3>Hot Fuss</h3>
				<p>Killers</p>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</a></li>
				<li><a href="#">
					<img src="/img/album-af.jpg">
					<h3>The Suburbs</h3>
				<p>Arcade Fire</p>
					<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
				</a></li>
			</ul>

			<div data-role="popup" id="purchase" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
				<h3>Purchase Album?</h3>
				<p>Your download will begin immediately on your mobile device when you purchase.</p>
				<a href="#" class="ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-shadow ui-btn-icon-left ui-icon-check" data-rel="back">Buy: $10.99</a>
				<a href="#" class="ui-btn ui-btn-inline ui-mini ui-corner-all ui-shadow" data-rel="back">Cancel</a>
			</div>

		</div><!-- /content -->

	</div><!-- /page -->

	<?php require './footer.php';?>
