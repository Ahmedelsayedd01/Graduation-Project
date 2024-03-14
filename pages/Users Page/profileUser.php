<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./Style Pages/profileUser.css" />

    <!-- Icons Liberary -->
    <script
      src="https://kit.fontawesome.com/bbda8ae88d.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap Liberary -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- Jquery Liberary -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

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
              <img src="asstesUser/logo.svg" alt="lawyer Case"
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
            <button
              type="button"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            >
              نشر قضيتى
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModalCenter"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalCenterTitle"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <form action="post">
                    <!-- Header modal -->
                    <div class="modal-header">
                      <span class="modal-title-case" id="exampleModalLongTitle">
                        قضيتى
                      </span>
                      <button
                        type="button"
                        class="close close-header"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Content Modal -->
                    <div class="content-case">
                      <!-- Type Case -->
                      <div class="type-case">
                        <label for="type-case">نوع القضية:</label>
                        <select
                          class="sel-type-case"
                          name="type-case"
                          id="type-case"
                          required
                        >
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
                      <hr
                        style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        "
                      />
                      <!-- Number Case -->
                      <div class="num-case">
                        <label for="num-case">رقم القضية:</label>
                        <input
                          type="number"
                          class="sel-num-case"
                          name="num-case"
                          id="num-case"
                          placeholder="ادخل رقم القضية"
                          required
                        />
                      </div>
                      <hr
                        style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        "
                      />
                      <!-- Location Case -->
                      <div class="location-case">
                        <label for="location-case">مكان القضية:</label>
                        <select
                          class="sel-location-case"
                          name="location-case"
                          style="width: 78% !important"
                          id="location-case"
                          required
                        >
                          <option value="0" selected>اختر مكان القضية</option>
                          <option value="الاسكندرية">الاسكندرية</option>
                          <option value="القاهرة">القاهرة</option>
                        </select>
                      </div>
                      <hr
                        style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        "
                      />
                      <!-- Date Case -->
                      <div class="date-case">
                        <div class="date-case-dmy">
                          <label for="date-case">ميعاد القضية:</label>
                          <input
                            type="date"
                            class="sel-date-case"
                            name="date-case"
                            id="date-case"
                            required
                          />
                        </div>
                        <div class="date-case-hm">
                          <label for="date-case">الساعة:</label>
                          <input
                            type="time"
                            class="sel-date-case"
                            name="date-case"
                            id="date-case"
                            required
                          />
                        </div>
                      </div>
                      <hr
                        style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        "
                      />

                      <!-- Description Case -->
                      <div
                        class="description-case"
                        style="
                          flex-direction: column !important;
                          row-gap: 10px !important;
                        "
                      >
                        <label for="description-case">الموضوع</label>
                        <textarea
                          name="description-case"
                          id="description-case"
                          class="description-case"
                          cols="15"
                          rows="4"
                        ></textarea>
                      </div>
                      <hr
                        style="
                          border: 1px solid #d5d5d5 !important;
                          width: 100%;
                          margin: 0.7rem 0;
                        "
                      />
                      <!-- Fill Case -->
                      <div class="fill-case">
                        <label for="fill-case">ارفاق ملف للقضية:</label>
                        <input
                          type="file"
                          class="sel-fill-case"
                          style="width: 70% !important; direction: ltr"
                          name="fill-case"
                          id="fill-case"
                          accept="application/pdf, application/vnd.ms-excel"
                          required
                        />
                      </div>
                      <!-- <hr
                      style="border: 1px solid #d5d5d5 !important; width: 100%"
                    /> -->
                      <!-- Image Case -->
                      <div class="image-case mt-3">
                        <label for="image-case">ارفاق صور للقضية:</label>
                        <input
                          type="file"
                          class="sel-image-case"
                          style="width: 70% !important; direction: ltr"
                          name="image-case"
                          id="image-case"
                          accept="image/gif, image/jpeg"
                          required
                        />
                      </div>
                    </div>
                    <!-- Footer Modal -->
                    <div class="add-modal-footer">
                      <button type="submit" class="btn-add-case">نشر</button>
                      <button
                        type="button"
                        class="btn-remove-case"
                        data-dismiss="modal"
                      >
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
              <img src="asstesUser/lawyer3.jpg" alt="user"
            /></a>
          </div>
        </div>
      </header>
      <!-- Content Page -->
      <main><h3>profile user</h3></main>
      <!-- menu-bottom -->
      <div class="menu-bottom">
        <div class="menu-bottom-wrapper">
          <ul>
            <li>
              <a href="userPage.html">
                <i class="fa-solid fa-house"></i>
                <span>الرئيسية</span>
              </a>
            </li>
            <li class="request-tap">
              <a href="requstPage.html">
                <i
                  style="transform: rotate(90deg)"
                  class="fa-solid fa-arrow-right-arrow-left"
                ></i>
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
            <li class="active-tap">
              <a href="profileLawyer.html">
                <i class="fa-solid fa-user"></i>
                <span>الحساب</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <script src="./Scripts/userPage.js"></script>
    <!-- <script>
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
    </script> -->
  </body>
</html>
