<?php
/*
Template Name: Page MCOhome Template
*/
?>

<div class="container">

	<div class="row-fluid">
		<div class="span8">
	   	<a href="http://www.themco.ca/concert/lisiecki/"><img src="http://www.themco.ca/wp-content/uploads/2013/07/head11sep13.jpg" alt="MCO 13/14"></a>
			<h4>Season-opening concert<br>&mdash; just around the corner!</h4>
			<p>Don&rsquo;t miss the excitement when Canadian piano sensation <b>Jan Lisiecki</b> kicks off our 2013/14 season! Jan will perform an arrangement by <b>Michaael Oesterle</b> of Edvard Grieg&rsquo;s Piano Concerto in A Minor, Op. 16. See the rest of the program <a href="http://www.themco.ca/concert/lisiecki/"><b>here</b></a>, or if you're just after a quick ticket, click the links below.<br><img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png" alt="QuikTicket"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=d7dfbd6319484a97ba3dfaff64bc8c69"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40"></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=693ac01b9d03456ba0b095c648519c78"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=f09d9f29c4b7406e82b339a4b419060b"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a></p>
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
						<p><strong><a href="http://www.themco.ca/quick-links-to-1314-subscriptions/">Subscribe now to MCO&rsquo;s 2013/14 season<br>&mdash; enjoy six or nine concerts in Westminster Church!</strong></a><br />Only subscribers enjoy every benefit the MCO has to offer, like a free CD, Musicnet Subscriber Reward Card, ticket exchange privileges, discounts on extra tickets and more. Make this the season you subscribe to Canada&rsquo;s &ldquo;tiny, perfect, orchestra!&rdquo;</p> 
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
						<p><strong><a href="#">The vault is sealed for the summer!<br>Next Vinyl Vault sale: Saturday, September 28th</strong></a><br />There will be no sales for the months of July and August, but we&rsquo;ll be back in the fall with the usual collection of jazz, pop, classical, rock, country and folk LPs. MCO&rsquo;s Vinyl Vault is located in the basement of the Power Building at 428 Portage Avenue (near The Bay).</p> 
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

