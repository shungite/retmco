<footer id="content-info" class="container" role="contentinfo">
  <?php dynamic_sidebar('sidebar-footer'); ?>
  <p class="muted"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-73919387-1', 'auto');
      ga('send', 'pageview');
</script>

<!--Old script
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
-->
<?php endif; ?>

<?php wp_footer(); ?>

<!-- Le javascript *** to fix mobile dropdown problem
================================================== -->
<!-- Placed at the end of the document so the pages load faster
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script> -->

    <script>
      !function ($) {
        $(function(){
          // Fix for dropdowns on mobile devices
          $('body').on('touchstart.dropdown', '.dropdown-menu', function (e) {
              e.stopPropagation();
          });
          $(document).on('click','.dropdown-menu a',function(){
              document.location = $(this).attr('href');
          });
        })
      }(window.jQuery)
    </script>
