<?php
/*
Template Name: Page MCOhome Template
*/
?>

<div class="container">

  <div class="row-fluid">
    <div class="span8">
      <a href="http://www.themco.ca/quick-links-1516-subscriptions/"><img src="http://www.themco.ca/wp-content/uploads/2015/06/SubscribeNow.jpg" alt="MCO / Subscribe now!"></a>
      <p><b>Subscribe now to MCO&rsquo;s 2015/16 season &mdash; enjoy six or nine concerts in Westminster Church!</b> Only subscribers enjoy every benefit the MCO has to offer, like a free CD, Musicnet Subscriber Reward Card, ticket exchange privileges, discounts on extra tickets and more. Make this the season you subscribe to Canada&rsquo;s &ldquo;tiny, perfect, orchestra!&rdquo;</p>
    </div>
  </div><!-- /row -->

  <!-- <div class="row-fluid">
    <small>&nbsp;</small>
  </div> -->

  <!-- <div class="row-fluid">
    <div class="span8">
      <div class="well-white">
        <div class="media"><a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/07/DonorCello.jpg" width="96px" height="96px"></a>
          <div class="media-body">
            <p><strong><a href="http://www.themco.ca/quick-links-1516-subscriptions/">Subscribe now to MCO&rsquo;s 2015/16 season<br>&mdash; enjoy six or nine concerts in Westminster Church!</strong></a><br />Only subscribers enjoy every benefit the MCO has to offer, like a free CD, Musicnet Subscriber Reward Card, ticket exchange privileges, discounts on extra tickets and more. Make this the season you subscribe to Canada&rsquo;s &ldquo;tiny, perfect, orchestra!&rdquo;</p> 
          </div>
        </div>
      </div>
    </div>
  </div> -->

<div class="row-fluid">
    <div class="span8">
      <div class="well">
        <div class="media"><a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/01/Parlo1.png" width="96px" height="96px"></a>
          <div class="media-body">
            <p><strong><a href="#">Next MCO Vinyl Vault sale:<br>Saturday, 27 June 2015</strong></a><br />From 10:00 am to 3:00 pm on the last Saturday of each month, browse away in the city&rsquo;s finest used LP/CD collections. You&rsquo;ll find 1000s of titles in the jazz, pop, classical, rock, country and folk categories, and more! MCO&rsquo;s Vinyl Vault is located in the basement of the Power Building at 428 Portage Avenue (near The Bay).</p> 
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

