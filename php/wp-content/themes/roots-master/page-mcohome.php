<?php
/*
Template Name: Page MCOhome Template
*/
?>
<div class="container">

<div class="row-fluid">
	
	<div class="span8">
   	<a href="http://www.themco.ca/concert/goodman-dahl/"><img src="http://www.themco.ca/wp-content/uploads/2013/01/head02apr13.jpg" alt="Goodman, Dahl, Broms-Jacobs"></a>
		<h4>Time machine: hear the first<br>MCO concert ever, and then some...</h4>
		<p>At its next concert, the Manitoba Chamber Orchestra remembers how it all began 40 years ago. Former MCO Music Director Roy Goodman, soprano Tracy Dahl (above) and oboist Caitlin Broms-Jacobs perform the program that started it all, with a twist. Read lots more about the concert <a href="http://www.themco.ca/concert/goodman-dahl/"><strong>here</strong></a>; if you&rsquo;re just here for a ticket, click below.<br>
		<img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=98a53d33021f46ffb6ceca8382c830cd"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40" /></a>
 	  <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=572a100f29294416b420bdcaf1bd918a"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a>
	  <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=3a96d1afe5434b8cb4787766f9dbb1dc"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a>
		</p>
  </div>

</div><!-- /row -->

<div class="row-fluid">
	<small>&nbsp;</small>
</div>

<div class="row-fluid">

	<div class="span8">
		<div class="well">
		<div class="media">
			<a class="pull-left" href="http://www.themco.ca/heartstrings/">
			<img class="media-object img-rounded" src="http://www.themco.ca/wp-content/uploads/2013/02/thumbhs.jpg" width="96px" height="96px">
			</a>
		<div class="media-body">
			<p><strong><a href="http://www.themco.ca/heartstrings/">MCO&rsquo;s Heartstrings 2013:<br>a return to formal elegance...</strong></a><br />Heartstrings returns to The Fort Garry's Crystal Ballroom and moves to a new month this year! Celebrate 40 years of the Manitoba Chamber Orchestra in May at its main event &mdash; with fine food, fine wine, plus live, silent &amp; rainbow auctions. And, of course, music!</p>
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
			<p><strong><a href="#">Next regular sale at MCO&rsquo;s Vinyl Vault:<br>Saturday, 30 March 2013, 10 am to 3 pm.</strong></a><br />Rummage around in one of the city's largest used record collection! Find rare jazz titles, pop, classical, rock, country, folk, easy listening and much more &mdash; collectibles a speciality! Located in the basement of the Power Building, 428 Portage Avenue (near The Bay).</p> 
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

