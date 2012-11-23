<footer id="content-info" class="container" role="contentinfo">
  <?php dynamic_sidebar('sidebar-footer'); ?>
  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
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
