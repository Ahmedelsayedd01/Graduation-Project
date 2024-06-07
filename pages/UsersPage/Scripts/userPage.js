/* To Search About Lawyer From All Lawyers */
$(document).ready(() => {
  $("#search_lawyer").mousedown(() => {
    $(".result_search").removeClass("d-none");
  });

  $("#search_lawyer").on("keyup", function () {
    var value = $(this).val().toLowerCase();

    $("#result_search a").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });

  $("#search_lawyer").blur(() => {
    setTimeout(() => {
      $(".result_search").addClass("d-none");
    }, 200);
  });
});
/* //////To Search About Lawyer From All Lawyers */
