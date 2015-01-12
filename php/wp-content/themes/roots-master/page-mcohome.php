<?php
/*
Template Name: Page MCOhome Template
*/
?>

<div class="container">

	<div class="row-fluid">
		<div class="span8">
	   	<a href="http://www.themco.ca/concert/stafford-lussier/"><img src="http://www.themco.ca/wp-content/uploads/2014/06/head13jan15.jpg" alt="MCO concert / 13 January 2015"></a>
	   	<h4>Ballet and baroque music<br>mix at next MCO concert</h4>
			<p>Two Winnipeg music icons meet on the MCO stage in January! Guest conductor Earl Stafford will present the music from the ballet, <i>Apollo</i>, by Igor Stravinsky, Nino Rota&rsquo;s <i>Concerto for Strings</i> and Gustav Holst&rsquo;s <i>St. Paul&rsquo;s Suite</i>; Eric Lussier leads from the harpsichord in JS Bach&rsquo;s Harspichord Concerto in A Major. Out-of-this-world musical magic! See notes, bios and two-minute talks by Haley Rempel <a href="http://www.themco.ca/concert/stafford-lussier/"><b>here</b></a> or, if you&rsquo;re just after a quick ticket or two, click the links below.<br><img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png" alt="QuikTicket"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=e75d1462cab64b039d37166e677f42bc"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40"></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=ee9869a990d4479e858c1205457f8582"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=5dd350c7867e49839f1faea73863bb40"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a></p>
		</div>
	</div><!-- /row -->


	<!-- <div class="row-fluid">
		<small>&nbsp;</small>
	</div> -->

	<div class="row-fluid">
		<div class="span8">
			<div class="well">
				<div class="media">
					<a class="pull-left" href="#extras" data-toggle="tab">
					<img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/07/DonorCello.jpg" width="96px" height="96px">
					<div class="media-body">
						<p><strong><a href="http://www.themco.ca/quick-links-to-1415-subscriptions/">Subscribe now to MCO&rsquo;s 2014/15 season<br>&mdash; enjoy six or nine concerts in Westminster Church!</strong></a><br />Only subscribers enjoy every benefit the MCO has to offer, like a free CD, Musicnet Subscriber Reward Card, ticket exchange privileges, discounts on extra tickets and more. Make this the season you subscribe to Canada&rsquo;s &ldquo;tiny, perfect, orchestra!&rdquo;</p> 
					</div>
				</div>
			</div>
		</div>
	</div><!-- /row -->

	<div class="row-fluid">
		<div class="span8">
			<div class="well-white">
				<div class="media">
					<a class="pull-left" href="#extras" 	data-toggle="tab">
					<img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/01/Parlo1.png" width="96px" height="96px">
					</a>
					<div class="media-body">
						<p><strong><a href="#">Come in for a spin at the Vinyl Vault / CD Cellar!<br> Next sale: Saturday, January 31st, 10 am to 3 pm</strong></a><br />Browse one of the city&rsquo;s largest and most varied vinyl collections. You&rsquo;ll find thousands of titles in the jazz, pop, classical, rock, country and folk categories, and more! MCO&rsquo;s Vinyl Vault is located in the basement of the Power Building at 428 Portage Avenue (near The Bay).</p> 
					</div>
				</div>
			</div>
		</div>
	</div><!-- /row -->

	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<p><strong><a href="#">Sign up here for MCO&rsquo;s<br><em>Noteworthy</em> email newsletter!</strong></a></p>
				<p>Our just-about-monthly missive is filled with information on upcoming concerts and special events. Unsubscribe at any time.</p>
				<?php echo do_shortcode('[contact-form-7 id="1045" title="Noteworthy"]'); ?>
			</div>
		</div>
		<div class="span3">
			<p><a href="http://www.themco.ca/venue-faq/"><img src="http://www.themco.ca/wp-content/uploads/2014/11/VenueFAQ.png"></a></p>
			<hr style="border-top: dotted 2px; color: #ddd;" />
			<p><a href="http://www.themco.ca/troubadour-the-nightingale/"><img src="http://www.themco.ca/wp-content/uploads/2013/10/TroubadourPreOrder.jpg"></a></p>
			<p><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=94ce7b6e08cf4bb79c932d28f04ae510"><button class="btn btn-small btn-success" type="button">Add to cart</button></a></p>

		</div><!-- /span2 -->
	</div><!-- /row -->

<?php get_template_part('templates/content', 'mcohome'); ?>

</div><!-- /container -->

<script type="text/javascript">
  $(document).ready(function () {
    $("[rel=tooltip]").tooltip();
  });
</script>

