$(document).ready(function() {

  $('#search').on('keydown', () => {
    $(".fa-search").hide();
  });

  $('#search').on('focusout', () => {
    $(".fa-search").show();
  });

});
