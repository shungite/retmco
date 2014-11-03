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
          <iframe width="80%" height="360" src="//www.youtube.com/embed/JgVEUqK4ips?list=UUIz_vC8l_-WAnv-AnPzJqUQ" frameborder="0" allowfullscreen></iframe>
          <p><a href="https://www.youtube.com/playlist?list=PLrh6cFljbZhEXjcvsfi69-KIfk3r1JkCA" target="_blank"><small>Go to playlist</small></a></p>
          
          <p><strong>Classic 107 playlist<br>from the Official MCO YouTube Channel</strong></p>
          <iframe width="80%" height="360" src="//www.youtube.com/embed/5uGtV6LMADA?list=PLrh6cFljbZhH87SF1DNn1l94aLtUHAqM-" frameborder="0" allowfullscreen></iframe>
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
        <div class="well">
          <p><strong>CKUW / Musicnet Radio Winnipeg<br>29 October 2014 broadcast</strong></p>
          <?php echo do_shortcode('[wp-stream-player url="http://station.ckuw.ca/64/20141029.14.00-16.00.mp3" type="mp3" autoplay="no" ]'); ?>
          <p><strong>CKUW / Musicnet Radio Winnipeg<br>22 October 2014 broadcast</strong></p>
          <?php echo do_shortcode('[wp-stream-player url="http://station.ckuw.ca/64/20141022.14.00-16.00.mp3" type="mp3" autoplay="no" ]'); ?>
          <p><strong>CKUW / Musicnet Radio Winnipeg<br>15 October 2014 broadcast</strong></p>
          <?php echo do_shortcode('[wp-stream-player url="http://station.ckuw.ca/64/20141015.14.00-16.00.mp3" type="mp3" autoplay="no" ]'); ?>
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
