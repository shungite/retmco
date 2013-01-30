<?php
/*
Template Name: Page Concert Template
*/
?>

<?php get_template_part('templates/content', 'concert'); ?>

<script type="text/javascript">
  $(document).ready(function () {
    $("[rel=tooltip]").tooltip();
  });
</script>

<script>  
  $(function () {
    $("#preconcert").popover();
  });
</script> 

<script>  
  $(function () {
    $("#pizza").popover();
  });
</script>

<script>  
  $(function () {
    $("#mcnally").popover();
  });
</script>
