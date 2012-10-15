<?php
/*
Template Name: Page Home Template
*/
?>

<img class="alignnone size-full wp-image-9" title="logosm" src="http://retmco-shungite.rhcloud.com/wp-content/uploads/2012/09/logosm.png" alt="" width="150" height="78" />

<div class="row">
	<div class="span3">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="active item">
					<img src="http://localhost:8080/wp-content/uploads/2012/10/tickets.png">
				</div>
				<div class="item">
					<img src="http://localhost:8080/wp-content/uploads/2012/10/donate.png">
				</div>
				<div class="item">
					<img src="http://localhost:8080/wp-content/uploads/2012/10/contact.png">
				</div>
			</div>
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	<div class="span2 offset5">
		<div class="well well-small">
			<h5>Top side</h5>
			<p class="fineprint">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="span8">
		<h3>Next concert</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat, orci ac laoreet cursus, dolor sem Donec fermentum accumsan libero sit amet iaculis.
			<span class="badge badge-success">2</span>
		</p>
	</div>
</div>

<div class="row">
	<div class="span4">
		<h4>One</h4>
		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
		<a class="btn" href="http://retmco-shungite.rhcloud.com/fullness/">View details »</a>
	</div>
	<div class="span3">
		<h4>Two</h4>
		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
		<a class="btn" href="#">View details »</a>
	</div>
	<div class="span2 offset1">
		<h5>Third<br />choice</h5>
		<p class="fineprint">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="fineprint">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="fineprint">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<a class="btn btn-mini" href="#">View details »</a>
	</div>
</div>

<?php get_template_part('templates/content', 'home'); ?>
