$(document).ready(() => {
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
  /* #######Fetch Data */
  $.getJSON({
    url: "lawyerApi/lawyerApi.php",
    type: "GET",
    // data: data,
    success: function (data) {
      // console.log("GET", data);
      var posts = data.posts;
      var user = data.lawyersData;
      var lawyers = data.lawyers;
      /* Show All Data */
      console.log("data posts", posts);
      console.log("data user", user);
      console.log("data lawyers", lawyers);

      $(".lawyerName").text(user.userName + " " + user.lastName + ".");
      $(".lawyerCatagory").text(user.type + ".");
      /* Lawyer Search */
      $(lawyers).each((val, ele) => {
        var lawyerSearch = `<a  href="./profileLawyerFriend.php/${ele.id}">
          <div class="res_lawyer">
            <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" />
            <div class="detail">
              <span>${ele.userName + " " + ele.lastName + "."}</span>
              <span>${ele.type + "."}</span>
            </div>
          </div>
        </a>`;
        $("#result_search").append(lawyerSearch);
      });
    },
  });
});
