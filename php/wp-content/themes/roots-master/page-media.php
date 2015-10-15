<?php
/*
Template Name: Page Media Template
*/
?>
<div class="container">

<div class="row">

  <div class="span8">
    <p>&nbsp;</p>
    <blockquote>
      <p>To create and perform chamber orchestra repertoire at the highest artistic level possible for Manitobans, for Canadians, and for international audiences.</p>
      <small>the Manitoba Chamber Orchestra&rsquo;s artistic mission statement</small>
    </blockquote>

    <p>&nbsp;</p>

    <ul class="nav nav-pills">
      <li class="active"><a href="#video" data-toggle="tab"><strong>Video</strong></a></li>
      <li><a href="#audio" data-toggle="tab"><strong>Audio</strong></a></li>
      <li><a href="#photo" data-toggle="tab"><strong>Photo</strong></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade in active" id="video">
        <div class="well">

          <p><strong>Upcoming concerts video playlist<br>from the Official MCO YouTube Channel</strong></p>
          <iframe width="80%" height="360" src="//www.youtube.com/embed/8TqjFYYY2H0" frameborder="0" allowfullscreen></iframe>
          <p><a href="https://www.youtube.com/playlist?list=PLrh6cFljbZhEXjcvsfi69-KIfk3r1JkCA" target="_blank"><small>Go to playlist</small></a></p>

          <p><strong>Classic 107 playlist<br>from the Official MCO YouTube Channel</strong></p>
          <iframe width="80%" height="360" src="//www.youtube.com/embed/yc0lxSy0vzk?list=PLrh6cFljbZhH87SF1DNn1l94aLtUHAqM-" frameborder="0" allowfullscreen></iframe>
          <p><a href="https://www.youtube.com/playlist?list=PLrh6cFljbZhH87SF1DNn1l94aLtUHAqM-" target="_blank"><small>Go to playlist</small></a></p>

          <p><strong>Education + outreach playlist<br>from the Official MCO YouTube Channel</strong></p>
          <iframe width="80%" height="360" src="//www.youtube.com/embed/Vwr58yd0dww?list=PLrh6cFljbZhG3TzWqRMzEzaLNe2xE965K" frameborder="0" allowfullscreen></iframe>
          <p><a href="https://www.youtube.com/playlist?list=PLrh6cFljbZhG3TzWqRMzEzaLNe2xE965K" target="_blank"><small>Go to playlist</small></a></p>

          <p><strong>Other videos playlist<br>from the Official MCO YouTube Channel</strong></p>
          <iframe width="80%" height="360" src="//www.youtube.com/embed/J0899Jovfe8?list=PLrh6cFljbZhExham6y4DC7Tj_NtJWVq7P" frameborder="0" allowfullscreen></iframe>
          <p><a href="https://www.youtube.com/playlist?list=PLrh6cFljbZhExham6y4DC7Tj_NtJWVq7P" target="_blank"><small>Go to playlist</small></a></p>

        </div><!-- /well -->
      </div>
      <div class="tab-pane fade" id="audio">

        <div class="well-white">
          <p><a href="https://ckuw.ca/"><img src="http://www.themco.ca/wp-content/uploads/2014/12/CKUW-round-logo-2014-150.png"></a>
          <p><a href="http://www.donanderson.ca/"><b>Don Anderson</b></a> is your host for <a href="https://ckuw.ca/programs/detail/classical-kaleidoscope"><b>Musicnet Radio Winnipeg</b></a> on <a href="http://ckuw.ca"><b>CKUW 95.9 FM</b></a>, a weekly program suported by the member groups of Winnipeg&rsquo;s <a href="http://musicnet.mb.ca"><b>Musicnet</b></a> consortium. Don backs up the music with plenty of information and anecdotes, with a focus on Winnipeg’s rich array of live concerts. <b>Tune in for ticket giveaways, visits from special guests &amp; much more! Wednesdays from 2:00 to 4:00 pm.</b> Listen to these recent broadcasts...</p>

          <p><?php echo do_shortcode('[sc_embed_player fileurl="http://station.ckuw.ca/128/20141210.14.00-16.00.mp3"]'); ?>&nbsp;&nbsp;10 December 2014 show</p>
          <p><?php echo do_shortcode('[sc_embed_player fileurl="http://station.ckuw.ca/128/20141203.14.00-16.00.mp3"]'); ?>&nbsp;&nbsp;3 December 2014 show</p>
          <p><?php echo do_shortcode('[sc_embed_player fileurl="http://station.ckuw.ca/128/20141126.14.00-16.00.mp3"]'); ?>&nbsp;&nbsp;26 November 2014</p>
          <p><?php echo do_shortcode('[sc_embed_player fileurl="http://station.ckuw.ca/128/20141119.14.00-16.00.mp3"]'); ?>&nbsp;&nbsp;19 November 2014</p>
          <p><?php echo do_shortcode('[sc_embed_player fileurl="http://station.ckuw.ca/128/20141112.14.00-16.00.mp3"]'); ?>&nbsp;&nbsp;12 November 2014</p>
          <p><?php echo do_shortcode('[sc_embed_player fileurl="http://station.ckuw.ca/128/20141105.14.00-16.00.mp3"]'); ?>&nbsp;&nbsp;5 November 2014</p>

          <p><small><i>Please note: programs may take a few moments to begin playing.<br>These links stream the show at 128 kbps.</i></small></p>

        </div>

        <div class="well-white">
          <p><?php echo do_shortcode('[soundcloud url="https://api.soundcloud.com/tracks/119047011" params="auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=false" width="100%" height="120" iframe="true" /]'); ?>
          </p>
        </div>
        <div class="well-white">
          <p><?php echo do_shortcode('[soundcloud url="https://api.soundcloud.com/tracks/119047551" params="auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=false" width="100%" height="120" iframe="true" /]'); ?>
          </p>
        </div>

      </div>
      <div class="tab-pane fade" id="photo">
        <div class="well">
          <p><strong>Stay tuned for slideshows!</strong></p>
        </div>
      </div>
    </div>
  </div>
</div><!-- /row -->

<?php get_template_part('templates/content', 'media'); ?>

</div><!-- /container -->

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
