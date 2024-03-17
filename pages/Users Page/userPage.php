<?php

session_start();
// print_r( $_SESSION['user']);


if (!isset($_SESSION['user'])) {
  header("Location:../Login-Sign page/registration.php");
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
          <a href="userPage.html">
            <!-- Logout  -->
            <a href="../../loguot.php">loguot</a>
            <!-- Logout  -->
            <img src="asstesUser/logo.svg" alt="lawyer Case" /></a>
        </div>
        <!-- center section (search bar about lawyer) -->
        <div class="search-bar">
          <input type="search" id="search_lawyer" placeholder="بحث عن محامى" />
          <button type="button">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>

          <div class="result_search d-none" id="result_search">
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>احمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد احمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>ذياد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العامة </span>
                </div>
              </div>
            </a>

            <!-- <span class="d-none" id="noFound">لا يوجد نتائج</span> -->
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
            <a href="profileLawyer.html">
              <div class="res_lawyer">
                <img src="asstesUser/lawyer3.jpg" alt="lawyer" />
                <div class="detail">
                  <span>محمد محمد</span>
                  <span>القضاية العسكرية </span>
                </div>
              </div>
            </a>
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
                <!-- <form action="../Login-Sign page/includes/functions/postsValidation.php" method="post" enctype="multipart/form-data"> -->
                <form action="" method="" enctype="multipart/form-data">
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
                      <select class="sel-type-case" name="type-case" id="type-case" required>
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
                    <div class="num-case">
                      <label for="num-case">رقم القضية:</label>
                      <input type="number" class="sel-num-case" name="num-case" id="num-case" placeholder="ادخل رقم القضية" required />
                    </div>
                    <hr style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        " />
                    <!-- Location Case -->
                    <div class="location-case">
                      <label for="location-case">مكان القضية:</label>
                      <select class="sel-location-case" name="location-case" style="width: 78% !important" id="location-case" required>
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
                        <input type="date" class="sel-date-case" name="date-case" id="date-case" required />
                      </div>
                      <div class="date-case-mh">
                        <label for="date-case">الساعة:</label>
                        <input type="time" class="sel-date-case" name="date-case-time" id="hour-case" required />
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
                      <textarea name="description-case" id="description-case" class="description-case" cols="15" rows="4"></textarea>
                    </div>
                    <hr style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        " />
                    <!-- Fill Case -->
                    <div class="fill-case">
                      <label for="fill-case">ارفاق ملف للقضية:</label>
                      <input type="file" class="sel-fill-case" style="width: 70% !important; direction: ltr" name="fill-case" id="fill-case" accept="application/pdf, application/vnd.ms-excel" required />
                    </div>
                    <!-- <hr
                      style="border: 1px solid #d5d5d5 !important; width: 100%"
                    /> -->
                    <!-- Image Case -->
                    <div class="image-case mt-3">
                      <label for="image-case">ارفاق صور للقضية:</label>
                      <input type="file" class="sel-image-case" style="width: 70% !important; direction: ltr" name="image-case" id="image-case" accept="image/gif, image/jpeg" required />
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
          <a href="profileUser.html">
            <img src="asstesUser/lawyer3.jpg" alt="user" /></a>
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
                    <a href="profileUser.html">
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
                  <span>قبول</span>
                  <span>رفض</span>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
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
                  <span>قبول</span>
                  <span>رفض</span>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
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
                  <span>قبول</span>
                  <span>رفض</span>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
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
                  <span>قبول</span>
                  <span>رفض</span>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
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
                  <span>قبول</span>
                  <span>رفض</span>
                </div>
              </div>
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
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
                  <span>قبول</span>
                  <span>رفض</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Postes Section  -->
        <div class="content-page-user">
          <div class="add-post-section">
            <div class="profile">
              <a href="profileUser.html">
                <img src="asstesUser/lawyer3.jpg" alt="user" /></a>
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
          <!-- My Postes -->
          <div class="postes">
            <div class="postes-wrapper">
              <div class="post">
                <div class="header-post">
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesUser/lawyer3.jpg" alt="user" /></a>
                  </div>
                  <div class="name-user">
                    <h1>احمد احمد احمد</h1>
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
                      <span>تجاري و شركات .</span>
                    </div>
                    <!-- location case -->
                    <div class="post-location-case">
                      <h3>مكان القضية:</h3>
                      <span>الاسكندرية .</span>
                    </div>
                  </div>
                  <!-- date case -->
                  <div class="post-date-case">
                    <div class="date-dm">
                      <h3>تاريخ القضية:</h3>
                      <span>01/12/2024</span>
                    </div>
                    <span><strong>-</strong></span>
                    <div class="date-houre">
                      <h3>الميعاد:</h3>
                      <span>3:30</span>
                    </div>
                  </div>
                  <hr style="
                        margin: 0.5rem !important;
                        border: 1px solid #d5d5d5 !important;
                        width: 100%;
                      " />
                  <!-- description case -->
                  <div class="post-description-case">
                    <p>
                      تقوم جريمة السرقة فى حق مرتكبيها بتوافر القصد الجنائي فى
                      الفعل المؤثم؛بعلمه وقت ارتكاب الفعل بأنه يختلس منقولًا
                      مملوكًا للغير من غير رضاه بنية تملكه. وتختلف جريمة
                      السرقة العادية عن جريمة السرقة بالإكراه، إذ أن جريمة
                      السرقة تكون عن طريق الغفلة، أما جريمة السرقة بالإكراه
                      يُستخدم فيها إحدى أدوات الإكراه لسرقة المجني عليه.
                    </p>
                  </div>
                </div>
                <div class="footer-post">
                  <span>الغاء القضية</span>
                </div>
              </div>
              <div class="post">
                <div class="header-post">
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesUser/lawyer3.jpg" alt="user" /></a>
                  </div>
                  <div class="name-user">
                    <h1>احمد احمد احمد</h1>
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
                      <span>تجاري و شركات .</span>
                    </div>
                    <!-- location case -->
                    <div class="post-location-case">
                      <h3>مكان القضية:</h3>
                      <span>الاسكندرية .</span>
                    </div>
                  </div>
                  <!-- date case -->
                  <div class="post-date-case">
                    <div class="date-dm">
                      <h3>تاريخ القضية:</h3>
                      <span>01/12/2024</span>
                    </div>
                    <span><strong>-</strong></span>
                    <div class="date-houre">
                      <h3>الميعاد:</h3>
                      <span>3:30</span>
                    </div>
                  </div>
                  <hr style="
                        margin: 0.5rem !important;
                        border: 1px solid #d5d5d5 !important;
                        width: 100%;
                      " />
                  <!-- description case -->
                  <div class="post-description-case">
                    <p>
                      تقوم جريمة السرقة فى حق مرتكبيها بتوافر القصد الجنائي فى
                      الفعل المؤثم؛بعلمه وقت ارتكاب الفعل بأنه يختلس منقولًا
                      مملوكًا للغير من غير رضاه بنية تملكه. وتختلف جريمة
                      السرقة العادية عن جريمة السرقة بالإكراه، إذ أن جريمة
                      السرقة تكون عن طريق الغفلة، أما جريمة السرقة بالإكراه
                      يُستخدم فيها إحدى أدوات الإكراه لسرقة المجني عليه.
                    </p>
                  </div>
                </div>
                <div class="footer-post">
                  <span>الغاء القضية</span>
                </div>
              </div>
              <div class="post">
                <div class="header-post">
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesUser/lawyer3.jpg" alt="user" /></a>
                  </div>
                  <div class="name-user">
                    <h1>احمد احمد احمد</h1>
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
                      <span>تجاري و شركات .</span>
                    </div>
                    <!-- location case -->
                    <div class="post-location-case">
                      <h3>مكان القضية:</h3>
                      <span>الاسكندرية .</span>
                    </div>
                  </div>
                  <!-- date case -->
                  <div class="post-date-case">
                    <div class="date-dm">
                      <h3>تاريخ القضية:</h3>
                      <span>01/12/2024</span>
                    </div>
                    <span><strong>-</strong></span>
                    <div class="date-houre">
                      <h3>الميعاد:</h3>
                      <span>3:30</span>
                    </div>
                  </div>
                  <hr style="
                        margin: 0.5rem !important;
                        border: 1px solid #d5d5d5 !important;
                        width: 100%;
                      " />
                  <!-- description case -->
                  <div class="post-description-case">
                    <p>
                      تقوم جريمة السرقة فى حق مرتكبيها بتوافر القصد الجنائي فى
                      الفعل المؤثم؛بعلمه وقت ارتكاب الفعل بأنه يختلس منقولًا
                      مملوكًا للغير من غير رضاه بنية تملكه. وتختلف جريمة
                      السرقة العادية عن جريمة السرقة بالإكراه، إذ أن جريمة
                      السرقة تكون عن طريق الغفلة، أما جريمة السرقة بالإكراه
                      يُستخدم فيها إحدى أدوات الإكراه لسرقة المجني عليه.
                    </p>
                  </div>
                </div>
                <div class="footer-post">
                  <span>الغاء القضية</span>
                </div>
              </div>
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
              <!-- Lawyer -->
              <div class="bestLawyer">
                <!-- Header Request -->
                <div class="header-bestLawyer">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span class="title-lawyer">محامى تجاري و شركات .</span>
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
              </div>
              <!-- Lawyer -->
              <div class="bestLawyer">
                <!-- Header Request -->
                <div class="header-bestLawyer">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span class="title-lawyer">محامى تجاري و شركات .</span>
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
              </div>
              <!-- Lawyer -->
              <div class="bestLawyer">
                <!-- Header Request -->
                <div class="header-bestLawyer">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span class="title-lawyer">محامى تجاري و شركات .</span>
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
              </div>
              <!-- Lawyer -->
              <div class="bestLawyer">
                <!-- Header Request -->
                <div class="header-bestLawyer">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesUser/lawyer3.jpg" alt="lawyer" /></a>
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <span class="title-lawyer">محامى تجاري و شركات .</span>
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
              </div>
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
            <a href="userPage.html">
              <i class="fa-solid fa-house"></i>
              <span>الرئيسية</span>
            </a>
          </li>
          <li class="request-tap">
            <a href="requstPage.html">
              <i style="transform: rotate(90deg)" class="fa-solid fa-arrow-right-arrow-left"></i>
              <span>الطلبات</span>
              <span class="count-request">10</span>
            </a>
          </li>
          <li>
            <a href="lawyersPage.html">
              <i class="fa-solid fa-users"></i>
              <span>المحامين</span>
            </a>
          </li>
          <li>
            <a href="profileUser.html">
              <i class="fa-solid fa-user"></i>
              <span>الحساب</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <script src="../Users Page/Scripts/userPage.js"></script>
  <!--  Test Data Api User If User Login  -->
  <script>
    // let myRequest = new XMLHttpRequest();
    // myRequest.onreadystatechange = function() {
    //   if (this.readyState === 4 && this.status === 200) {
    // console.log(this.responseText);
    // console.log(this.readyState);
    // console.log(this.status);
    // let data = JSON.parse(this.responseText);
    //console.log(data);
    // div = document.getElementById('data');
    //     console.log(this.responseText);

    //   }
    // };
    // myRequest.open('Get', 'userApi/userApi.php', 'true');
    // myRequest.send();

    $.getJSON({
      url: 'userApi/userApi.php', //get All thing Postes and data year 
      type: "GET",
      // data: data,
      success: function(data) {
        console.log("data", data.posts);
        console.log("data", data.userData);
        console.log("GET", data);
      }
    })



    $(".btn-add-case").click(() => {
      var type_case = $("#type-case").val();
      var num_case = $("#num-case").val();
      var location_case = $("#location-case").val();
      var date_case = $("#date-case").val();
      var hour_case = $("#hour-case").val();
      var description_case = $("#description-case").val();
      var fill_case = $("#fill-case").val();
      var image_case = $("#image-case").val();

      var data_obj = {
        case_Type: type_case,
        case_Num: JSON.parse(num_case),
        case_Location: location_case,
        case_Date: (date_case),
        case_Hour: hour_case,
        description_case: description_case,
        fill_case: fill_case,
        image_case: image_case,
      };

      // $.ajax({
      //   // headers: {"Authorization": localStorage.getItem('token')},
      //   url: '../Login-Sign page/includes/functions/postsValidation.php',
      //   type: "POST",
      //   data: JSON.stringify(data_obj),
      //   contentType: "application/json; charset=utf-8",
      //   crossDomain: true,
      //   dataType: "json",
      //   success: function(data) {
      //     console.log(data);
      //     alert("gooood")
      //   }
      // })
      $.ajax({
        type: "POST",
        url: '../Login-Sign page/includes/functions/postsValidation.php',
        data: JSON.stringify(data_obj), // now data come in this function
        // contentType: "application/json; charset=utf-8",
        // crossDomain: true,
        dataType: "json",
        success: function(data, status, jqXHR) {

          alert("success"); // write success in " "
        },

        error: function(jqXHR, status) {
          // error handler
          console.log(jqXHR);
          alert('fail' + status);
          alert('fail' + status.code);
        }
      });


      // console.log(data)


    });
  </script>
</body>

</html>