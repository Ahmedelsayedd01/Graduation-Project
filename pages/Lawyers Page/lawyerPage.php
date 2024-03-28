<?php

session_start();
// print_r( $_SESSION['user']);
$_SESSION['token'] = md5(uniqid(mt_rand(), true));

if (!isset($_SESSION['user'])) {
  header("Location:../Login-Sign page/registration.php");
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="./asstesLawyer/logo.svg" />
  <link rel="stylesheet" href="./Style Pages/lawyerPage.css" />

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

  <title>Lawyer Page</title>
</head>

<body>
  <div class="containerr">
      <!-- Header Page (Navbar) -->
      <header>
        <div class="header-wrapper">
          <!-- right section (logo) -->
          <div class="logo">
            <a href="lawyerPage.php">
              <img src="asstesLawyer/logo.svg" alt="lawyer Case"
            /></a>
          </div>
          <!-- center section (search bar about lawyer) -->
          <div class="search-bar">
            <input
              type="search"
              id="search_lawyer"
              placeholder="بحث عن محامى"
            />
            <button type="button">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <div class="result_search d-none" id="result_search">
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>احمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد احمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>ذياد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العامة </span>
                  </div>
                </div>
              </a>

              <!-- <span class="d-none" id="noFound">لا يوجد نتائج</span> -->
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
              <a href="profileLawyerFriend.html">
                <div class="res_lawyer">
                  <img src="./asstesLawyer/lawyer3.jpg" alt="lawyer" />
                  <div class="detail">
                    <span>محمد محمد</span>
                    <span>القضاية العسكرية </span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- left section (profile user)-->
          <div class="profile">
            <a href="profileLawyer.html">
              <img src="asstesLawyer/lawyer3.jpg" alt="lawyer"
            /></a>
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
              <span>القواضى </span>
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
                    <img src="asstesLawyer/user.jpg" alt="user" />
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <!-- <span>محامى تجاري و شركات .</span> -->
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
                  <span>الانسحاب من القضية</span>
                </div>
              </div>
              <!-- Request -->
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <img src="asstesLawyer/user.jpg" alt="user" />
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <!-- <span>محامى تجاري و شركات .</span> -->
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
                  <span>الانسحاب من القضية</span>
                </div>
              </div>
              <!-- Request -->
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <img src="asstesLawyer/user.jpg" alt="user" />
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <!-- <span>محامى تجاري و شركات .</span> -->
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
                  <span>الانسحاب من القضية</span>
                </div>
              </div>
              <!-- Request -->
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <img src="asstesLawyer/user.jpg" alt="user" />
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <!-- <span>محامى تجاري و شركات .</span> -->
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
                  <span>الانسحاب من القضية</span>
                </div>
              </div>
              <!-- Request -->
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <img src="asstesLawyer/user.jpg" alt="user" />
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <!-- <span>محامى تجاري و شركات .</span> -->
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
                  <span>الانسحاب من القضية</span>
                </div>
              </div>
              <!-- Request -->
              <div class="request">
                <!-- Header Request -->
                <div class="header-request">
                  <!-- Photo lawyer Request -->
                  <div class="profile">
                    <img src="asstesLawyer/user.jpg" alt="user" />
                  </div>
                  <!-- Details lawyer Request -->
                  <div class="details-lawyer">
                    <span>احمد محمد احمد ششششششششششششششششش</span>
                    <!-- <span>محامى تجاري و شركات .</span> -->
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
                  <span>الانسحاب من القضية</span>
                </div>
              </div>


            </div>
          </div>
        </div>
        <!-- Postes Section  -->
        <div class="content-page-user">
          <!-- <div class="add-post-section">
            <div class="profile">
              <a href="profileUser.html">
                <img src="asstesLawyer/user.jpg" alt="user" /></a>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
              نشر قضية جديدة ؟
            </button>

            <div class="add-post">
              <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
                نشر
              </button>
            </div>
          </div> -->
          <!-- My Postes -->
          <div class="postes">
            <div class="postes-wrapper">
              <!-- Post -->
              <div class="post">
                <div class="header-post">
                  <div class="profile">
                    <img src="asstesLawyer/user.jpg" alt="user" />
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
                  <span>طلب القضية</span>
                </div>
              </div>
              <!-- Post -->
              <div class="post">
                <div class="header-post">
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesLawyer/user.jpg" alt="user" /></a>
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
                  <span>طلب القضية</span>
                </div>
              </div>
              <!-- Post -->
              <div class="post">
                <div class="header-post">
                  <div class="profile">
                    <a href="profileUser.html">
                      <img src="asstesLawyer/user.jpg" alt="user" /></a>
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
                  <span>طلب القضية</span>
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
                    <a href="profileLawyerFriend.html">
                      <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" /></a>
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
                    <a href="profileLawyerFriend.html">
                      <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" /></a>
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
                    <a href="profileLawyerFriend.html">
                      <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" /></a>
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
                    <a href="profileLawyerFriend.html">
                      <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" /></a>
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
                    <a href="profileLawyerFriend.html">
                      <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" /></a>
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
                    <a href="profileLawyerFriend.html">
                      <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" /></a>
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
            <a href="lawyerPage.php">
              <i class="fa-solid fa-house"></i>
              <span>الرئيسية</span>
            </a>
          </li>
          <li class="request-tap">
            <a href="casesPage.html">
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
            <a href="profileLawyer.html">
              <i class="fa-solid fa-user"></i>
              <span>الحساب</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <script src="./Scripts/lawyerPage.js"></script>

  <script>
    $(document).ready(function() {

      $.getJSON({
        url: 'userApi/userApi.php',
        type: "GET",
        // data: data,
        success: function(data) {
          console.log("data", data.posts);
          console.log("data", data.userData);
          // console.log("GET", data);
        }
      })

      var desName = $("#description-case");
      var btnS = $("#send");
      var chosen = $("#send");
      var uploadimage = $("#image-new");


      function upload() {
        uploadimage.click()
      }

      $(chosen).click(upload)

      $(uploadimage).change(function() {
        var file = $(this)[0].files[0];
        console.log(file)

        if ($(desName).val() == "") {
          $(desName).val(file.name)
        }
        $(chosen).text(`you good${file.name} picture`)
      })



      $("#form_post").submit((event) => {
        event.preventDefault();

        // var myForm = $("#form_post");

        // var inputImg = $("#image-case");
        // var inputFile = $("#fill-case");

        // var formData = new FormData();
        // formData.append("files", inputFile[0].files[0]);

        var token_post = $("#user_token").val();
        var type_case = $("#type-case").val();
        var num_case = $("#num-case").val();
        var location_case = $("#location-case").val();
        var date_case = $("#date-case").val();
        var hour_case = $("#hour-case").val();
        var description_case = $("#description-case").val();
        var fill_case = $("#fill-case")[0].files[0];
        var image_case = $("#image-case")[0].files[0];

        var data_obj = {
          case_Token: token_post,
          case_Type: type_case,
          case_Num: JSON.parse(num_case),
          case_Location: location_case,
          case_Date: date_case,
          case_Hour: hour_case,
          case_Description: description_case,
          case_Fill: fill_case.name,
          case_Image: image_case,
          // case_Fill: formData,
          // case_Image: image_case,
        };
        console.log(data_obj)

        $.ajaxSetup({
          headers: {
            'CSRF-TOKEN': $('#user_token').val(),
            // "Content-Type": "multipart/form-data",
          }
        });
        $.ajax({
          type: "POST",
          url: '../Login-Sign page/includes/functions/postsValidation.php',
          data: {
            data: JSON.stringify(data_obj),
            // case_Fill: formData,
            // case_Image: image_case,
          }, // now data come in this function
          // processData: false,
          // contentType: false,
          // crossDomain: true,
          dataType: "json",
          success: function(data, status, jqXHR) {

            alert("success");
          },

          error: function(data, jqXHR, status) {
            // error handler
            alert('fail' + status.code);
          }
        });


        // console.log(data)


      });
    })
  </script>
</body>

</html>