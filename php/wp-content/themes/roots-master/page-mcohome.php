<?php
/*
Template Name: Page MCOhome Template
 */
?>

<div class="container">

  <div class="row-fluid">
      <div class="span8">
        <a href="http://www.themco.ca/concert/james-ehnes/"><img src="http://www.themco.ca/wp-content/uploads/2016/06/head13sep16.jpg" alt="MCO / James Ehnes "></a>
        <h4>JViolinist James Ehnes<br>&mdash;&thinsp;this time with the Orchestra!</h4>
        <p>A musician whose virtuosity knows no bounds, Ehnes&rsquo;s playing might simply be described as the best. The <i>Globe and Mail</i> calls him &ldquo;the Jascha Heifetz of our day.&rdquo; For this concert Ehnes will play-conduct three big ones from the common practice era. See details <a href="http://www.themco.ca/concert/james-ehnes/"><b>here</b></a> or, if you&rsquo;re just after a quick ticket or two, click the links below.<br><img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png" alt="QuikTicket"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=4f68d403a48e46ec899b29fbc741fccd"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40"></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=c6c79e09f31d4a018bdc361a415e5546"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=56b94bf425394be284569bdbe857768c"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a></p>
      </div>
    </div><!-- /row -->

  <div class="row-fluid">
      <div class="span8">
        <div class="well-white">
          <div class="media"><a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-square" src="http://www.themco.ca/wp-content/uploads/2016/07/simple_turntable_colour_web.png" width="120px" height="95px"></a>
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
