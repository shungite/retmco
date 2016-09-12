<?php
/*
Template Name: Page MCOhome Template
 */
?>

<div class="container">

  <div class="row-fluid">
      <div class="span8">
        <a href="http://www.themco.ca/concert/james-ehnes/"><img src="http://www.themco.ca/wp-content/uploads/2016/06/head13sep16.jpg" alt="MCO / James Ehnes "></a>
        <h4><span style="color: #F7931D">PLEASE NOTE:<br>THIS CONCERT HAS SOLD OUT!</span></h4>
        <p><b>Please note: this concert has sold out!</b> A musician whose virtuosity knows no bounds, Ehnes&rsquo;s playing might simply be described as the best. The <i>Globe and Mail</i> calls him &ldquo;the Jascha Heifetz of our day.&rdquo; For this concert Ehnes will play-conduct three big ones from the common practice era. See details <a href="http://www.themco.ca/concert/james-ehnes/"><b>here</b></a> or, if you&rsquo;re just after a quick ticket or two, click the links below.<br><img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png" alt="QuikTicket"><a href=""><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40"></a> <a href=""><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a> <a href=""><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a></p>
      </div>
    </div><!-- /row -->

    <div class="row-fluid">
      <div class="span8">
        <div class="well">
          <div class="media"><a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/07/DonorCello.jpg" width="96px" height="96px"></a>
            <div class="media-body">
              <p><strong><a href="http://www.themco.ca/quick-links-to-1617-subscriptions/">Subscribe now to MCO&rsquo;s 2016/17 season<br>&mdash; enjoy six or nine concerts in Westminster Church!</strong></a><br />Only subscribers enjoy every benefit the MCO has to offer, like a free CD, Musicnet Subscriber Reward Card, ticket exchange privileges, discounts on extra tickets and more. This season, subscribe to Canada&rsquo;s &ldquo;tiny, perfect, orchestra!&rdquo;</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="row-fluid">
      <div class="span8">
        <div class="well-white">
          <div class="media"><a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/01/Parlo1.png" width="96px" height="96px"></a>
            <div class="media-body">
              <p><strong><a href="#">Next MCO Vinyl Vault sale: Saturday, 24 September 2016</strong></a><br />From 10:00 am to 3:00 pm on the last Saturday of each month, browse away in the city&rsquo;s finest used LP/CD collections. You&rsquo;ll find 1000s of titles in the jazz, pop, classical, rock, country and folk categories, and more! <b>Records are three bucks a pop, CDs even cheaper.</b> MCO&rsquo;s Vinyl Vault is located in the basement of the Power Building at 428 Portage Ave. (near The Bay).</p>
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

  </div><!-- /row-fluid -->

<?php get_template_part('templates/content', 'mcohome'); ?>

</div><!-- /container -->

<script type="text/javascript">
$(document).ready(function () {
  $("[rel=tooltip]").tooltip();
});
</script>
