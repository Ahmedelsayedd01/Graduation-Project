$(document).ready(() => {
  /* Fetch Data About User */
  $.getJSON({
    url: "userApi/userApi.php",
    type: "GET",
    // data: data,
    success: function (data) {
      console.log("data", data.posts);
      console.log("data", data.userData);

      $(".user_name").text(
        data.userData.userName + " " + data.userData.lastName
      );

      // console.log("GET", data);
    },
  });
  /* ////Fetch Data About User */

  /* To Search About Lawyer From All Lawyers */
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
  /* //////To Search About Lawyer From All Lawyers */
});
