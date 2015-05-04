<?php
/*
Template Name: Page MCOhome Template
*/
?>

<div class="container">

  <div class="row-fluid">
    <div class="span8">
      <a href="http://www.themco.ca/concert/miller-isbin/"><img src="http://www.themco.ca/wp-content/uploads/2014/06/head19may15.jpg" alt="MCO concert / 19 May 2015"></a>
      <h4>&ldquo;The pre-eminent guitarist of our time&rdquo;<br>&mdash; <i>Boston Magazine</i></h4>
      <p>Two special guests will travel to Winnipeg for our next concert! Conductor <b>Tania Miller</b> of the Victoria Symphony will lead the MCO and classical guitarist <b>Sharon Isbin</b>, who has also been described as &rdquo;stupendous, faultless, finer even than Segovia&ldquo; (<i>American Record Guide</i>). See notes, bios and two-minute talks by Haley Rempel <a href="http://www.themco.ca/concert/miller-isbin/"><b>here</b></a> or, if you&rsquo;re just after a quick ticket or two, click the links below.<br><img src="http://www.themco.ca/wp-content/uploads/2013/01/QuikTicket.png" alt="QuikTicket"><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=9c4b6236a41c44b8ad6ac50fff7850d3"><img rel="tooltip" title="Click to add adult ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/AdultC.png" alt="" width="62" height="40"></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=f33bb5caad4f4add8fc66402aaaf803a"><img rel="tooltip" title="Click to add senior ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/SeniorC.png" alt="" width="62" height="40" /></a> <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=292CFDD8-2004-4B27-8455-B26B8A4D841F&pid=c3d532bb3f9a47a9aad8ebf3e0f05dd4"><img rel="tooltip" title="Click to add student ticket to cart" data-placement="top" src="http://www.themco.ca/wp-content/uploads/2013/01/StudentC.png" alt="" width="62" height="40" /></a></p>
    </div>
  </div><!-- /row -->

  <!-- <div class="row-fluid">
    <small>&nbsp;</small>
  </div> -->

  <div class="row-fluid">
    <div class="span8">
      <div class="well">
        <div class="media"><a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2015/04/hs.png" width="96px" height="96px">
          <div class="media-body">
            <p><strong><a href="http://www.themco.ca/heartstrings/">Coming May 8th: Heartrings,<br>the MCO&rsquo;s sumptuous gala dinner!</strong></a><br>Winnipeg&rsquo;s heavenly fundraiser takes place in the opulent 7th-floor ballrooms at The Fort Garry Hotel, and this year, we go Argentine! Special guests include Jaime Vargas and Vanessa Lawson. Sponsored by <a href="http://advisors.nbfwm.ca/en/teams/christianson-wealth-advisors"><b>Christianson Wealth Advisors, National Bank Financial</b></a>.</p> 
          </div>
        </div>
      </div>
    </div>
  </div><!-- /row -->

  <div class="row-fluid">
    <div class="span8">
      <div class="well-white">
        <div class="media"><a class="pull-left" href="#extras" data-toggle="tab"><img class="media-object img-circle" src="http://www.themco.ca/wp-content/uploads/2013/07/DonorCello.jpg" width="96px" height="96px"></a>
          <div class="media-body">
            <p><strong><a href="http://www.themco.ca/quick-links-1516-subscriptions/">Subscribe now to MCO&rsquo;s 2015/16 season<br>&mdash; enjoy six or nine concerts in Westminster Church!</strong></a><br />Only subscribers enjoy every benefit the MCO has to offer, like a free CD, Musicnet Subscriber Reward Card, ticket exchange privileges, discounts on extra tickets and more. Make this the season you subscribe to Canada&rsquo;s &ldquo;tiny, perfect, orchestra!&rdquo;</p> 
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

