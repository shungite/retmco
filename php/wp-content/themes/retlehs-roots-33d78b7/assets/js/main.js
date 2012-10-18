/* Author:

*/

$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

$('#mcoCarousel').carousel({
    interval: 12
});