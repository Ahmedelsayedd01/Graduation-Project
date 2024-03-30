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
  /* ######## */
  /* Fetch Data About User */
  $.getJSON({
    url: "userApi/userApi.php",
    type: "GET",
    // data: data,
    success: function (data) {
      console.log("data Posts", data.posts);
      console.log("data About User", data.userData);
      // console.log("GET", data);
      var post = data.posts;
      var user = data.userData;
      console.log("post", post);
      $(".user_name").text(user.userName + " " + user.lastName);

      $(post).each((val, el) => {
        //   console.log("val", val)
        //   console.log("el", el)
        var NewPost = `<div class="post">
              <div class="header-post">
                <div class="profile">
                  <a href="profileUser.html">
                    <img src="asstesUser/user.jpg" alt="user" /></a>
                </div>
                <div class="name-user">
                  <h1>${user.userName + " " + user.lastName}</h1>
                </div>
              </div>
              <hr style="
                    margin: 0.5rem !important;
                    border: 1px solid #d5d5d5 !important;
                    width: 100%;
                  " />
              <div class="content-post">
                <div class="content-header">
                  <!-- type case -->
                  <div class="post-type-case">
                    <h3>نوع القضية:</h3>
                    <span>${el.typeCase} .</span>
                  </div>
                  <div class="post-location-case">
                    <h3>مكان القضية:</h3>
                    <span>${el.location} .</span>
                  </div>
                </div>
                <div class="post-date-case">
                  <div class="date-dm">
                    <h3>تاريخ القضية:</h3>
                    <span>${el.Date}</span>
                  </div>
                  <span><strong>-</strong></span>
                  <div class="date-houre">
                    <h3>الميعاد:</h3>
                    <span>${el.houerCase.slice(0, 5)}</span>
                  </div>
                </div>
                <hr style="
                      margin: 0.5rem !important;
                      border: 1px solid #d5d5d5 !important;
                      width: 100%;
                    " />
                <div class="post-description-case">
                  <p>
                    ${el.description}.
                  </p>
                </div>
              </div>
              <div class="footer-post">
                <a href="#content?id=<?php echo $_SESSION['user']['id'] ?>" target="_blank">الغاء القضية</a>
              </div>
            </div>`;

        $(".postes-wrapper").append(NewPost);
      });
    },
  });
  /* ////Fetch Data About User */
});
