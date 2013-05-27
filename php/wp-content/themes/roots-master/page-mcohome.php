<?php
/*
Template Name: Page MCOhome Template
*/
?>
<div class="container">

<div class="row-fluid">
	
	<div class="span8">
   	<a href="http://www.themco.ca/concert/carr/"><img src="http://www.themco.ca/wp-content/uploads/2013/01/head05jun13.jpg" alt="Colin Carr"></a>
		<h4>40th anniversary season<br> wraps with Brit cellist Colin Carr</h4>
		<p>Colin Carr has performed with the Manitoba Chamber Orchestra before, but not as part of an MCO season. Carr and the MCO were guests of 2011&rsquo;s inaugural International Cello Festival of Canada, and that concert became the talk of the town! Read lots more about the concert <a href="http://www.themco.ca/concert/carr/"><strong>here</strong></a>; if you&rsquo;re just here for a ticket, click below.<br>
		<img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=0718bdddf4764a2c9b9266ee450eb5af"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40" /></a>
 	  <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=65cf18fe94b34a2aa24d7f7e56e7dd71"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a>
	  <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=374bffd27d964cf382b3d3cf17768550"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a>
		</p>
  </div>

</div><!-- /row -->

<div class="row-fluid">
	<small>&nbsp;</small>
</div>


<div class="row-fluid">

	<div class="span8">
		<div class="well-white">
		<div class="media">
			<a class="pull-left" href="#extras" data-toggle="tab">
			<img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/01/Parlo1.png" width="96px" height="96px">
			</a>
		<div class="media-body">
			<p><strong><a href="#">Final Vinyl Vault sale of the season:<br>Saturday, 29 May 2013, 10 am to 3 pm</strong></a><br />Rummage around in one of the city&rsquo;s largest used record collection! Find rare jazz titles, pop, classical, rock, country, folk, easy listening and much more &mdash; collectibles a speciality! Located in the basement of the Power Building, 428 Portage Avenue (near The Bay).</p> 
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
		<p class="fineprint">Please be patient as we rebuild our web site. We promise to reward you with better content and interactive features. In the meantime, feel free to send us some feedback...</p>
		<a class="btn btn-mini" href="mailto:info@themco.ca?subject=Feedback ...">Complain »</a>
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

