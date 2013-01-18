<?php
/*
Template Name: Page MCOhome Template
*/
?>
<div class="container">

<div class="row-fluid">
	<p class="muted">CELEBRATING FORTY YEARS</p>
</div>

<div class="row-fluid">
	
	<div class="span8">
   	<a href="http://www.themco.ca/concert/winnipeg-singers/"><img src="http://www.themco.ca/wp-content/uploads/2013/01/cover06feb131.png"></a>
		<h4>A double celebration:<br />The Winnipeg Singers and the MCO</h4>
		<p>The Winnipeg Singers and the MCO celebrate 40 years this season, and this concert is the birthday party! Yuri Klaz will conduct a varied program of choral works by Vivaldi, Tallis, Mendelssohn, Arvo P&auml;rt, Imant Ramish and Glenn Buhr. Read lots more about the concert <a href="http://www.themco.ca/concert/winnipeg-singers/"><strong>here</strong></a>; if you&rsquo;re just here for a ticket, click below.<br>
		<img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=89e3b17ba5474af284f562865c4b70e1"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40" /></a>
 	  <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=696960f1b3b241bab82da74d814a3c13"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a>
	  <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=49f2aef74f6c4dabb1248afb38f3358d"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a>

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
			<a class="pull-left" href="http://www.themco.ca/janina/">
			<img class="media-object img-rounded" src="http://www.themco.ca/wp-content/uploads/2012/11/janina_small.jpg" width="96px" height="96px">
			</a>
		<div class="media-body">
			<p><strong><a href="http://www.themco.ca/janina/">MCO 40th anniversary fund-raiser:<br>A Candlelight evening with Janina Fialkowska!</strong></a><br />Celebrate four decades of the MCO together with world-renowned pianist Janina Fialkowska in The Fort Garry's opulent Provencher Room. &ldquo;If you have a chance to hear her, cancel all other appointments&rdquo; &mdash; Barry Millington, Evening Standard, London.</p>
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
			<p><strong><a href="#">Upcoming sale at MCO&rsquo;s Vinyl Vault:<br>Saturday, 26 January 2013, 10 am to 3 pm.</strong></a><br />Rummage around in one of the city's largest used record collection! Find rare jazz titles, pop, classical, rock, country, folk, easy listening and much more &mdash; collectibles a speciality! Located in the basement of the Power Buiulding, 428 Portage Avenue (near The Bay).</p> 
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
