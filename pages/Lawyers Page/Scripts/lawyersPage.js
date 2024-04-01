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
  /* ######Fetch Data */
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

      $(posts).each((val, el) => {
        var NewPost = `<div class="post">
            <div class="header-post">
              <div class="profile">
                  <img src="asstesLawyer/user.jpg" alt="user" />
              </div>
              <div class="name-user">
                <h1>اسم المواطن</h1>
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
                  ${el.description}
                </p>
              </div>
            </div>
            <div class="footer-post">
              <a>طلب القضية</a>
            </div>
          </div>`;

        $(".postes-wrapper").append(NewPost);
      });
      /* Fetch All Lawyers */
      $(lawyers).each((val, ele) => {
        /* Lawyer */
        var lawyer = `<div class="bestLawyer">
          <!-- Header Request -->
          <div class="header-bestLawyer">
            <!-- Photo lawyer Request -->
            <div class="profile">
              <a href="./profileLawyerFriend.php/${ele.id}">
                <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" /></a>
            </div>
            <!-- Details lawyer Request -->
            <div class="details-lawyer">
              <span>${ele.userName + " " + ele.lastName + "."}</span>
              <span class="title-lawyer">${ele.type + "."}</span>
              <div class="stars">
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
              </div>
              <div class="loca-lawyer">
                <i class="fa-solid fa-location-dot"></i><span>الاسكندرية</span>
              </div>
            </div>
          </div>
          <!-- Content Requestttt-->
        </div>`;
        $(".content-bestLawyers").append(lawyer);

        /* Lawyer Search */
        var lawyerSearch = `<a href="./profileLawyerFriend.php/${ele.id}">
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
