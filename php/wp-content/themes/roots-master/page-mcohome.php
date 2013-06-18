<?php
/*
Template Name: Page MCOhome Template
*/
?>
<div class="container">

<div class="row-fluid">
	
	<div class="span8">
   	<a href="http://www.themco.ca/quick-links-to-1314-subscriptions/"><img src="http://www.themco.ca/wp-content/uploads/2013/06/head1314c.png" alt="MCO 13/14"></a>
		<h4>Subscribe before July 31st<br>&mdash; beat the price increase!</h4>
		<p>Don’t miss a single MCO concert next season! Our subscribers enjoy many benefits, and early subscribers save more money, but nothing tops six or nine wonderful concerts in acoustically superb Westminster Church. Hear for yourself! Call the MCO Ticketline at 204-783-7377 today, or check out the details and download an order form <a href="http://www.themco.ca/quick-links-to-1314-subscriptions/"><strong>here</strong></a>.
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
			<p><strong><a href="#">Hot stuff! Special four-day Vinyl Vault summer sale:<br>Wednesday, June 19th, to Saturday, June 22nd; 10 am to 2 pm daily</strong></a><br />This month, we&rsquo;re holding a special 4-day sale in place of the usual last-Saturday-of-the-month event! Find rare jazz titles, pop, classical, rock, country, folk and more &mdash; collectibles a speciality. Located in the basement of the Power Building, 428 Portage Avenue (near The Bay).</p> 
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

