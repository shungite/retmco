<?php
/*
Template Name: Page MCOhome Template
 */
?>

<div class="container">

  <div class="row-fluid">
    <div class="span8">
      <a href="http://www.themco.ca/concert/manson-ceysson/"><img src="http://www.themco.ca/wp-content/uploads/2015/07/head23feb16.png" alt="MCO / Manson, Ceysson"></a>
      <h4>&ldquo;A poet of sounds, the richness of whose musical palate<br>leaves us speechless&rdquo;&thinsp;&mdash;&thinsp;<i>A Nous Paris</i></h4>
      <p>Naturally, the French have a more elegant term for &lsquo;bad-boy&rsquo; : enfant terrible, words used to describe famous young French harpist <b>Emmanuel Ceysson</b>. Though he cheerfully sweeps away all the clich&eacute;s associated with his instrument, his powerful virtuosity and boundless energy reveal the harp in all its sparkling splendor. See program notes, bios and more at <a href="http://www.themco.ca/concert/alain-trudel-et-al/"><b>here</b></a> or, if you&rsquo;re just after a quick ticket or two, click the links below.<br><img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png" alt="QuikTicket"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=cecedfb6953f44d5b88e72d651e24c6c"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2015/11/AdultTx.png" alt="" width="62" height="40"></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=6b635b8f98ee48ad93f96c5f5aa13e18"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2015/11/SeniorTx.png" alt="" width="62" height="40" /></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=252a0eedcdbc4799bcba14c205d66a20"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2015/11/StudentTx.png" alt="" width="62" height="40" /></a></p>
    </div>
  </div><!-- /row -->

  <div class="row-fluid">
    <small>&nbsp;</small>
  </div>

  <div class="row-fluid">
    <div class="span8">
      <div class="well">
        <div class="media"><a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/07/DonorCello.jpg" width="96px" height="96px"></a>
          <div class="media-body">
            <p><strong><a href="http://www.themco.ca/quick-links-1516-subscriptions/">Subscribe now to MCO&rsquo;s 2015/16 season<br>&mdash; enjoy six or nine concerts in Westminster Church!</strong></a><br />Only subscribers enjoy every benefit the MCO has to offer, like a free CD, Musicnet Subscriber Reward Card, ticket exchange privileges, discounts on extra tickets and more. Make this the season you subscribe to Canada&rsquo;s &ldquo;tiny, perfect, orchestra!&rdquo;</p>
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
            <p><strong><a href="#">Next MCO Vinyl Vault &amp; CD Cellar sale:<br />10 am to 3 pm, Saturday, 30 January 2016</strong></a><br />There&rsquo;s no sale in December, so remember to head on down to the Vinyl Vault in the new year! It's Winnipeg&rsquo;s bigest used LP/CD sale, and by then there will be plenty of new donations&thinsp;&mdash;&thinsp; 1000s of titles priced to quickly spin out the door! MCO&rsquo;s Vinyl Vault is located in the basement of the Power Building at 428 Portage Avenue (near The Bay).</p>
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
