<?php

session_start();
// print_r( $_SESSION['user']);
$_SESSION['token'] = md5(uniqid(mt_rand(), true));

if (!isset($_SESSION['user'])) {
  header("Location:../Login-Sign page/registration.php");
}
if (isset($_GET['content'])) {
  if ($_GET['content'] == "delete") {
    include "../Login-Sign page/includes/functions/functions.php";
    $post_id = $_GET['id'];
    $deletePost = deleteRecord('posts', 'id', $post_id);
    if ($deletePost) {
      header('Location:userPage.php');
    }
    echo $_GET['id'];
  } else {
    echo "error 404";
  }
}
//  This End DELETE POSTS
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="./asstesUser/logo.svg" />
  <link rel="stylesheet" href="./Style Pages/userPage.css" />

  <!-- Icons Liberary -->
  <script src="https://kit.fontawesome.com/bbda8ae88d.js" crossorigin="anonymous"></script>
  <!-- Bootstrap Liberary -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <!-- Jquery Liberary -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>User Page</title>
</head>

<body>

  <div class="containerr">

    <!-- Header Page (Navbar) -->
    <header>
      <div class="header-wrapper">
        <!-- right section (logo) -->
        <div class="logo">
          <a href="userPage.php">
            <img src="asstesUser/logo.svg" alt="lawyer Case" /></a>
        </div>
        <!-- center section (search bar about lawyer) -->
        <div class="search-bar">
          <input type="search" id="search_lawyer" placeholder="بحث عن محامى" />
          <button type="button">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>

          <div class="result_search d-none" id="result_search">
            <!-- lawyer Fetch Here -->
          </div>
        </div>
        <!-- center section in mobile and left start from taplate to post case -->
        <div class="add-post">
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
            نشر قضيتى
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <form action="../Login-Sign page/includes/functions/postsValidation.php" method="post" enctype="multipart/form-data">
                  <!-- <form action="" method="" enctype="multipart/form-data"> -->
                  <!-- Header modal -->
                  <div class="modal-header">
                    <span class="modal-title-case" id="exampleModalLongTitle">
                      قضيتى
                    </span>
                    <button type="button" class="close close-header" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- Content Modal -->
                  <div class="content-case">
                    <!-- Type Case -->
                    <div class="type-case">
                      <label for="type-case">نوع القضية:</label>
                      <select class="sel-type-case" name="case_Type" id="type-case" required>
                        <option value="0" selected>اختر نوع القضية</option>
                        <option value="جنائى">جنائى</option>
                        <option value="مدنى">مدنى</option>
                        <option value="مجلس الدولة">مجلس الدولة</option>
                        <option value="عمال">عمال</option>
                        <option value="اسرة">اسرة</option>
                        <option value="تجاري و شركات">تجاري و شركات</option>
                        <option value="جرائم ألكترونية">
                          جرائم ألكترونية
                        </option>
                        <option value="قضاء عسكري">قضاء عسكري</option>
                      </select>
                    </div>
                    <hr style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        " />
                    <!-- Number Case -->
                    <input type="hidden" id="user_token" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
                    <div class="num-case">
                      <label for="num-case">رقم القضية:</label>
                      <input type="number" class="sel-num-case" name="case_Num" id="num-case" placeholder="ادخل رقم القضية" required />
                    </div>
                    <hr style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        " />
                    <!-- Location Case -->
                    <div class="location-case">
                      <label for="location-case">مكان القضية:</label>
                      <select class="sel-location-case" name="case_Location" style="width: 78% !important" id="location-case" required>
                        <option value="0" selected>اختر مكان القضية</option>
                        <option value="الاسكندرية">الاسكندرية</option>
                        <option value="القاهرة">القاهرة</option>
                      </select>
                    </div>
                    <hr style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        " />
                    <!-- Date Case -->
                    <div class="date-case">
                      <div class="date-case-ymd">
                        <label for="date-case">ميعاد القضية:</label>
                        <input type="date" class="sel-date-case" name="case_Date" id="date-case" required />
                      </div>
                      <div class="date-case-mh">
                        <label for="date-case">الساعة:</label>
                        <input type="time" class="sel-date-case" name="case_Hour" id="hour-case" required />
                      </div>
                    </div>
                    <hr style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        " />

                    <!-- Description Case -->
                    <div class="description-case" style="
                          flex-direction: column !important;
                          row-gap: 10px !important;
                        ">
                      <label for="description-case">الموضوع</label>
                      <textarea name="case_Description" id="description-case" class="description-case" cols="15" rows="4"></textarea>
                    </div>
                    <hr style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        " />
                    <!-- Fill Case -->
                    <div class="fill-case">
                      <label for="fill-case">ارفاق ملف للقضية:</label>
                      <input type="file" class="sel-fill-case" style="width: 70% !important; direction: ltr" name="case_Fill" id="fill-case" accept="application/pdf, application/vnd.ms-excel" required />
                    </div>
                    <!-- <hr
                      style="border: 1px solid #d5d5d5 !important; width: 100%"
                    /> -->
                    <!-- Image Case -->
                    <div class="image-case mt-3">
                      <label for="image-case">ارفاق صور للقضية:</label>
                      <input type="file" class="sel-image-case" style="width: 70% !important; direction: ltr" name="case_Image" id="image-case" accept="image/gif, image/jpeg" required />
                    </div>
                  </div>
                  <!-- Footer Modal -->
                  <div class="add-modal-footer">
                    <button type="submit" class="btn-add-case">نشر</button>
                    <button type="button" class="btn-remove-case" data-dismiss="modal">
                      الغاء
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- left section (profile user)-->
        <div class="profile">
          <a href="profileUser.php">
            <img src="asstesUser/user.jpg" alt="user" /></a>
        </div>
      </div>
    </header>
    <!-- Content Page -->
    <main>
      <div class="main-wrapper">
        <!-- Request Side -->
        <div class="right-side">
          <div class="right-side-wrapper">
            <div class="header-requests">
              <span>طلبات القضية</span>
              <span class="count-lawyer">6</span>
            </div>
            <!-- Content Requestssss -->
            <div class="content-requests">
              <!-- Request -->
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileLawyer.php">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span>محامى تجاري و شركات .</span>
                  </div>
                </div>
                <hr style="
                      margin: 0.5rem 0 !important;
                      border: 1px solid #d5d5d5 !important;
                      width: 100%;
                    " />
                <!-- Content Requestttt-->
                <div class="content-request">
                  <!-- Details Case Request -->
                  <div class="details-case">
                    <div class="details-type">
                      <span><strong>نوع القضية:</strong></span>
                      <span>تجاري و شركات .</span>
                    </div>
                    <div class="details-number">
                      <span><strong>رقم:</strong></span>
                      <span>123456</span>
                    </div>
                  </div>
                </div>
                <!-- Footer Request -->
                <div class="footer-request">
                  <a>قبول</a>
                  <a>رفض</a>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileLawyer.php">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span>محامى تجاري و شركات .</span>
                  </div>
                </div>
                <hr style="
                      margin: 0.5rem 0 !important;
                      border: 1px solid #d5d5d5 !important;
                      width: 100%;
                    " />
                <!-- Content Requestttt-->
                <div class="content-request">
                  <!-- Details Case Request -->
                  <div class="details-case">
                    <div class="details-type">
                      <span><strong>نوع القضية:</strong></span>
                      <span>تجاري و شركات .</span>
                    </div>
                    <div class="details-number">
                      <span><strong>رقم:</strong></span>
                      <span>123456</span>
                    </div>
                  </div>
                </div>
                <!-- Footer Request -->
                <div class="footer-request">
                  <a>قبول</a>
                  <a>رفض</a>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileLawyer.php">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span>محامى تجاري و شركات .</span>
                  </div>
                </div>
                <hr style="
                      margin: 0.5rem 0 !important;
                      border: 1px solid #d5d5d5 !important;
                      width: 100%;
                    " />
                <!-- Content Requestttt-->
                <div class="content-request">
                  <!-- Details Case Request -->
                  <div class="details-case">
                    <div class="details-type">
                      <span><strong>نوع القضية:</strong></span>
                      <span>تجاري و شركات .</span>
                    </div>
                    <div class="details-number">
                      <span><strong>رقم:</strong></span>
                      <span>123456</span>
                    </div>
                  </div>
                </div>
                <!-- Footer Request -->
                <div class="footer-request">
                  <a>قبول</a>
                  <a>رفض</a>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileLawyer.php">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span>محامى تجاري و شركات .</span>
                  </div>
                </div>
                <hr style="
                      margin: 0.5rem 0 !important;
                      border: 1px solid #d5d5d5 !important;
                      width: 100%;
                    " />
                <!-- Content Requestttt-->
                <div class="content-request">
                  <!-- Details Case Request -->
                  <div class="details-case">
                    <div class="details-type">
                      <span><strong>نوع القضية:</strong></span>
                      <span>تجاري و شركات .</span>
                    </div>
                    <div class="details-number">
                      <span><strong>رقم:</strong></span>
                      <span>123456</span>
                    </div>
                  </div>
                </div>
                <!-- Footer Request -->
                <div class="footer-request">
                  <a>قبول</a>
                  <a>رفض</a>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileLawyer.php">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span>محامى تجاري و شركات .</span>
                  </div>
                </div>
                <hr style="
                      margin: 0.5rem 0 !important;
                      border: 1px solid #d5d5d5 !important;
                      width: 100%;
                    " />
                <!-- Content Requestttt-->
                <div class="content-request">
                  <!-- Details Case Request -->
                  <div class="details-case">
                    <div class="details-type">
                      <span><strong>نوع القضية:</strong></span>
                      <span>تجاري و شركات .</span>
                    </div>
                    <div class="details-number">
                      <span><strong>رقم:</strong></span>
                      <span>123456</span>
                    </div>
                  </div>
                </div>

                <!-- Footer Request -->
                <div class="footer-request">
                  <a>قبول</a>
                  <a>رفض</a>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileLawyer.php">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span>محامى تجاري و شركات .</span>
                  </div>
                </div>
                <hr style="
                      margin: 0.5rem 0 !important;
                      border: 1px solid #d5d5d5 !important;
                      width: 100%;
                    " />
                <!-- Content Requestttt-->
                <div class="content-request">
                  <!-- Details Case Request -->
                  <div class="details-case">
                    <div class="details-type">
                      <span><strong>نوع القضية:</strong></span>
                      <span>تجاري و شركات .</span>
                    </div>
                    <div class="details-number">
                      <span><strong>رقم:</strong></span>
                      <span>123456</span>
                    </div>
                  </div>
                </div>
                <!-- Footer Request -->
                <div class="footer-request">
                  <a>قبول</a>
                  <a>رفض</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Postes Section  -->
        <div class="content-page-user">
          <div class="add-post-section">
            <div class="profile">
              <a href="profileLawyer.php">
                <img src="asstesUser/user.jpg" alt="user" /></a>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
              نشر قضية جديدة ؟
            </button>

            <div class="add-post">
              <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
                نشر
              </button>
            </div>
          </div>
          <!-- start Incluse Message Successfully -->
          <?php
          include '../Login-Sign page/includes/functions/success.php';
          ?>
          <!-- start Incluse Message Successfully -->
          <!-- My Postes -->
          <div class="postes">
            <div class="postes-wrapper">
              <!-- All Postes  -->
            </div>
          </div>
        </div>
        <!-- Best lawyer Side  -->
        <div class="left-side">
          <div class="left-side-wrapper">
            <div class="header-bestLawyers">
              <span>أفضل المحامين</span>
            </div>
            <!-- Content Best Lawyers -->
            <div class="content-bestLawyers">
              <!-- lawyer Fetch Here -->
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- menu-bottom -->
    <div class="menu-bottom">
      <div class="menu-bottom-wrapper">
        <ul>
          <li class="active-tap">
            <a href="userPage.php">
              <i class="fa-solid fa-house"></i>
              <span>الرئيسية</span>
            </a>
          </li>
          <li class="request-tap">
            <a href="requstPage.php">
              <i style="transform: rotate(90deg)" class="fa-solid fa-arrow-right-arrow-left"></i>
              <span>الطلبات</span>
              <span class="count-request">10</span>
            </a>
          </li>
          <li>
            <a href="lawyersPage.php">
              <i class="fa-solid fa-users"></i>
              <span>المحامين</span>
            </a>
          </li>
          <li>
            <a href="profileUser.php">
              <i class="fa-solid fa-user"></i>
              <span>الحساب</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <script src="./Scripts/userPage.js"></script>

  <script>
    $(document).ready(function() {

      $.getJSON({
        url: 'userApi/userApi.php',
        type: "GET",
        // data: data,
        success: function(data) {
          // console.log("GET", data);
          var posts = data.posts;
          var user = data.userData;
          var lawyers = data.lawyers;
          /* Show All Data */
          console.log("data posts", posts);
          console.log("data user", user);
          console.log("data lawyers", lawyers)

          /* Fetch All Posts */
          $(posts).each((val, el) => {
            /* post */
            var Post = `<div class="post">
                <div class="header-post">
                  <div class="profile">
                    <a href="profileUser.php">
                      <img src="asstesUser/user.jpg" alt="user" /></a>
                  </div>
                  <div class="name-user">
                    <h1>${user.userName +" "+ user.lastName}</h1>
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
                      <span>${el.houerCase.slice(0,5)}</span>
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
                  <a href='userPage.php?content=delete&id=${el.id}'>الغاء القضية</a>
                </div>
              </div>`;

            $(".postes-wrapper").append(Post);
          })
          /* Fetch All Lawyers */
          $(lawyers).each((val, ele) => {

            /* Lawyer */
            var lawyer = `<div class="bestLawyer">
                <!-- Header Request -->
                <div class="header-bestLawyer">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileLawyer.php">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>${ele.userName +" "+ ele.lastName + "."}</span>
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
            var lawyerSearch = `<a href="profileLawyer.php">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>${ele.userName +" "+ ele.lastName + "."}</span>
                  <span>${ele.type + "."}</span>
                </div>
              </div>
            </a>`;
            $("#result_search").append(lawyerSearch);
          })


        }
      })
    })
  </script>
</body>

</html>