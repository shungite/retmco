<?php
/*
Template Name: Page MCOhome Template
 */
?>
<div class="container">
	<div class="row-fluid">
  <div class="span8">
    <div class="covercontainer">
      <a href="http://www.themco.ca/concert/morash-chuchman/"><img src="http://www.themco.ca/wp-content/uploads/2016/11/head07dec16cover.jpg" alt="MCO / Morash, Chuchman"></a>
      <div class="playbutton">
        <?php echo do_shortcode('[video_lightbox_youtube video_id="fDGtDhIDZAQ" width="640" height="480" anchor="http://www.themco.ca/wp-content/uploads/2016/11/YouTube-social-circle_red_96px.png"]'); ?>
      </div>
    </div>
  </div>
</div>
	<div class="row-fluid">
		<div class="span8">
			<h4>
				﻿<span style="color: #FF7F50">PLEASE NOTE:<br>THIS CONCERT HAS SOLD OUT!</span>
			</h4>
			<p>
				A decade ago, Winnipegger <strong>Andriana Chuchman</strong> was a star voice student at the UofM. Now, she stars alongside the likes of Placido Domingo on the world&rsquo;s top opera stages. ﻿Chuchman will perform Mozart&rsquo;s <em>Exsultate Jubilate</em> and other seasonally-themed works—including an audience sing-along of <em>The Twelve Days of Christmas</em>! <strong>Mark Morash</strong>, Director of Musical Studies for the San Francisco Opera Center, joins us for the first time as a guest conductor. See details <a href="http://www.themco.ca/concert/morash-chuchman/"><b>here</b></a> or, if you&rsquo;re just after a quick ticket or two, <strike>click the links below</strike>.<br><img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png" alt="QuikTicket"><a href="#"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40"></a> <a href="#"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a> <a href="#"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a> 
			</p>
		</div>
	</div>
<!-- /row -->
	<div class="row-fluid">
		<div class="span8">
			<div class="well">
				<div class="media">
					<a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/07/DonorCello.jpg" width="96px" height="96px"></a> 
					<div class="media-body">
						<p>
							<strong><a href="http://www.themco.ca/quick-links-to-1617-subscriptions/">Subscribe now to MCO&rsquo;s 2016/17 season<br>&mdash;&thinsp;enjoy six or nine concerts in Westminster Church!</strong></a><br />
							Only subscribers enjoy every benefit the MCO has to offer, like a free CD, Musicnet Subscriber Reward Card, ticket exchange privileges, discounts on extra tickets and more. This season, subscribe to Canada&rsquo;s &ldquo;tiny, perfect, orchestra!&rdquo;
							<?php echo do_shortcode('[video_lightbox_youtube video_id="2ruCxwyal5U" width="640" height="480" anchor="<strong>Video: the season-at-a-glance!</strong>"]'); ?>
							
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
			<div class="well-white">
				<div class="media">
					<a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/01/Parlo1.png" width="96px" height="96px"></a> 
					<div class="media-body">
						<p>
							<strong><a href="#">Next MCO Vinyl Vault sale: Saturday, 26 November 2016</strong></a><br />
							From 10:00 am to 3:00 pm on the last Saturday of each month, browse away in the city&rsquo;s finest used LP/CD collections. You&rsquo;ll find 1000s of titles in the jazz, pop, classical, rock, country and folk categories, and more! <b>Records are three bucks a pop, CDs even cheaper.</b> MCO&rsquo;s Vinyl Vault is located in the basement of the Power Building at 428 Portage Ave. (near The Bay). 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- /row -->
	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<p>
					<strong><a href="#">Sign up here for MCO&rsquo;s<br><em>Noteworthy</em> email newsletter!</strong></a> 
				</p>
				<p>
					Our just-about-monthly missive is filled with information on upcoming concerts and special events. Unsubscribe at any time. 
				</p>
<?php echo do_shortcode('[contact-form-7 id="1045" title="Noteworthy"]'); ?>
			</div>
		</div>
		<div class="span3">
			<p>
				<a href="http://www.themco.ca/venue-faq/"><img src="http://www.themco.ca/wp-content/uploads/2014/11/VenueFAQ.png"></a> 
			</p>
			<hr style="border-top: dotted 2px; color: #ddd;" />
			<p>
				<a href="http://www.themco.ca/troubadour-the-nightingale/"><img src="http://www.themco.ca/wp-content/uploads/2013/10/TroubadourPreOrder.jpg"></a> 
			</p>
			<p>
				<a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&amp;pid=94ce7b6e08cf4bb79c932d28f04ae510"><button class="btn btn-small btn-success" type="button">Add to cart</button></a> 
			</p>
		</div>
<!-- /span2 -->
	</div>
<!-- /row-fluid -->
<?php get_template_part('templates/content', 'mcohome'); ?>
</div>
<!-- /container -->
<script type="text/javascript">

$(document).ready(function () {
  $("[rel=tooltip]").tooltip();
});
</script>
