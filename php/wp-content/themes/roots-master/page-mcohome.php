<?php
/*
Template Name: Page MCOhome Template
*/
?>

<div class="container">

	<div class="row-fluid">
		<div class="span8">
	   	<a href="http://www.themco.ca/concert/asier-polo/"><img src="http://www.themco.ca/wp-content/uploads/2014/03/head09apr14c.jpg" alt="MCO concert / 12 March 2014"></a>
			<h4>SORRY, THIS EVENT HAS SOLD OUT!</h4>
			<p><b>Anne Manson</b> discovered the Bilbao-born <b>Asier Polo</b> when she was working there several years ago, which led to the cellist&rsquo;s first MCO concert. &ldquo;He is extraordinary and I thought we have got to get him to the MCO! He&rsquo;s the best cellist in Spain,&rdquo; says Manson. We&rsquo;ve got him again! See program details <a href="http://www.themco.ca/concert/asier-polo/"><b>here</b></a>, or if you're just after a quick ticket or two, click the links below.<br><img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png" alt="QuikTicket"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=fc1aaae01884472d92fa4b5007280cd6"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40"></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=70482a401940419cac88ae92b8881a5e"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=40720b25df8241ba8fbde1378c0ef9a0"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a></p>
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
					</a>
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
					<a class="pull-left" href="#extras" data-toggle="tab">
					<img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/01/Parlo1.png" width="96px" height="96px">
					</a>
					<div class="media-body">
						<p><strong><a href="#">Get in the groove<br>&mdash; next Vinyl Vault sale: Saturday, March 29th</strong></a><br />Browse one of the city&rsquo;s largest and most varied vinyl collections. You&rsquo;ll find thousands of titles in the jazz, pop, classical, rock, country and folk categories, and then some. MCO&rsquo;s Vinyl Vault is located in the basement of the Power Building at 428 Portage Avenue (near The Bay).</p> 
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
				<?php gravity_form(5, false, false, false, '', true, false); ?>
			</div>
		</div>
		<div class="span2">
			<h6><i class="icon-warning-sign"></i><br />Warning!</h6>
			<p class="fineprint">Please be patient as we rebuild our web site. We promise to reward you with better content and interactive features. In the meantime, we&rsquo;d love to hear from you!</p>
			<a class="btn btn-mini" href="mailto:info@themco.ca?subject=Feedback ...">Feedback »</a>
			<p>&nbsp;</p>
		</div><!-- /span2 -->
	</div><!-- /row -->

<?php get_template_part('templates/content', 'mcohome'); ?>

</div><!-- /container -->

<script type="text/javascript">
  $(document).ready(function () {
    $("[rel=tooltip]").tooltip();
  });
</script>

