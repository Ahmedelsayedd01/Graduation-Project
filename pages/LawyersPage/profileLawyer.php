<?php
session_start();
if (isset($_SESSION['lawyer'])) {
  $dataJson =  json_encode(['data', $_SESSION['lawyer']]);
} else { // This Else IF Any One Don't Login Redirect Login
  header("Location:../Login-SignPage/registration.php");
}


?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" type="image/png" href="../../asstes/Imges/logo.svg" />
  <link rel="stylesheet" href="./StylePages/profileLawyer.css" />

  <!-- Icons Liberary -->
  <script src="https://kit.fontawesome.com/bbda8ae88d.js" crossorigin="anonymous"></script>
  <!-- Bootstrap Liberary -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            <img src="asstesLawyer/logo.svg" alt="lawyer Case" /></a>
        </div>
        <!-- center section (search bar about lawyer) -->
        <div class="search-bar">
          <input type="search" id="search_lawyer" placeholder="بحث عن محامى" />
          <button type="button">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>

          <div class="result_search d-none" id="result_search">
            <!-- Fetch All Lawyers -->
          </div>
        </div>
        <!-- left section (profile user)-->
        <div class="profile">
          <a href="profileLawyer.php">
            <img src="asstesLawyer/lawyer3.jpg" alt="lawyer" /></a>
        </div>
      </div>
    </header>
    <!-- Content Page -->
    <main>
      <section class="header_profile">
        <div class="profilelawyer_content">
          <div class="profile">
            <a href="profileLawyer.php">
              <img src="asstesLawyer/lawyer3.jpg" alt="profilelawyer" /></a>
          </div>

          <div class="profilelawyer_info">
            <div class="profilelawyer_name">
              <strong>الاسم:</strong><span class="lawyerName"> محمد احمد .</span>
            </div>
            <div class="profilelawyer_location">
              <strong>العنوان:</strong><span class="lawyerLocation"> الاسكندرية .</span>
            </div>
            <div class="profilelawyer_catugory">
              <strong>التخصص:</strong><span class="lawyerCatagory"> تجارى و شريكات .</span>
            </div>
            <div class="profilelawyer_desc">
              <strong>نبذة عنك:</strong>
              <p class="lawyerDescraption">
                تأسس المكتب عام 2002 و يعمل بالعديد من التخصصات وكافة افرع
                القانون ونجحنا في بناء قاعدة عريضة من العملاء افراد و مؤسسات
                وشركات ويرجع هذا لانه لدينا افضل الخبرات والمهارات والكفاءات
                الفردية ضمن فريق عمل متميز يعمل بإيقاع متناسق وبصورة احترافية
                لتقديم كم متنوع من الخدمات القانونية المتوافقة مع الشريعة
                الإسلامية والقوانين العامة والخاصة للعميل وعلي الأخص رجال
                الأعمال بلغات متعددة في معظم دول العالم عامة والمنطقة العربية
                خاصة.
              </p>
            </div>

            <div class="profilelawyer_countCase">
              <strong>عدد القواضى التى قمت بها:</strong><span class="lawyerCountCase"> 456 قضية .</span>
            </div>

            <div class="profilelawyer_rate">
              <strong>التقيم:</strong>
              <div class="stars">
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star" aria-hidden="true"></i>
              </div>
            </div>
            <div class="user_logout">
              <!-- Logout  -->
              <a href="../../loguot.php">تسجبل خروج</a>
              <!-- Logout  -->
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- menu-bottom -->
    <div class="menu-bottom">
      <div class="menu-bottom-wrapper">
        <ul>
          <li>
            <a href="lawyerPage.php">
              <i class="fa-solid fa-house"></i>
              <span>الرئيسية</span>
            </a>
          </li>
          <li class="request-tap">
            <a href="casesPage.php">
              <i style="transform: rotate(90deg)" class="fa-solid fa-arrow-right-arrow-left"></i>
              <span>القواضى</span>
              <span class="count-request">10</span>
            </a>
          </li>
          <li>
            <a href="lawyersPage.php">
              <i class="fa-solid fa-users"></i>
              <span>المحامين</span>
            </a>
          </li>
          <li class="active-tap">
            <a href="profileLawyer.php">
              <i class="fa-solid fa-user"></i>
              <span>الحساب</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script src="./Scripts/profileLawyer.js"></script>
</body>

</html>