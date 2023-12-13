// Varibel to registration form container && registration Button;
const btn_log = document.getElementById("login-btn");
const btn_sig = document.getElementById("signup-btn");
const sig_form = document.getElementById("signup-form");
const log_form = document.getElementById("login-form");

//Event to set||remove class in element at sign form;
btn_sig.addEventListener("click", function () {
  this.classList.add("active");
  btn_log.classList.remove("active");
  sig_form.style.display = "block";
  log_form.style.display = "none";
});
//Event to set||remove class in element at sign form;
btn_log.addEventListener("click", function () {
  this.classList.add("active");
  btn_sig.classList.remove("active");
  sig_form.style.display = "none";
  log_form.style.display = "flex";
});

//Varibel to select user kind;
const user_kind = document.getElementById("user-kind");
const lawyer_kind = document.getElementById("lawyer-kind");

//Varibel to select lawyer categry;
const lawyer_categry_sel = document.getElementById("lawyer-categry-sel");

//Event to set||remove class in element at sign form;
lawyer_kind.addEventListener("click", function () {
  user_kind.classList.remove("active-kind");
  this.classList.add("active-kind");
  this.setAttribute("name", "lawyer");
  user_kind.removeAttribute("name");
  lawyer_categry_sel.style.display = "block";
});

//Event to set||remove class in element at sign form;
user_kind.addEventListener("click", function () {
  lawyer_kind.classList.remove("active-kind");
  this.classList.add("active-kind");
  this.setAttribute("name", "user");
  lawyer_kind.removeAttribute("name");
  lawyer_categry_sel.style.display = "none";
});

//Varibel to select button to change form content;
const spa_login = document.getElementById("spa-login");
const spa_sign = document.getElementById("spa-sign");

//Event to set||remove class in element at login form;
spa_login.addEventListener("click", function () {
  btn_log.classList.add("active");
  btn_sig.classList.remove("active");
  sig_form.style.display = "none";
  log_form.style.display = "flex";
});

//Event to set||remove class in element at sign form;
spa_sign.addEventListener("click", function () {
  btn_sig.classList.add("active");
  btn_log.classList.remove("active");
  sig_form.style.display = "block";
  log_form.style.display = "none";
});

//Varibel to select password input to show || hide value in sign form;
const show_pass_btn = document.getElementById("show_pass_sign");
const hide_pass_btn = document.getElementById("hide_pass_sign");
const pass_btn = document.getElementById("password_sign");

//Event to show value in password button at sign form;
show_pass_btn.addEventListener("click", function () {
  pass_btn.removeAttribute("type");
  pass_btn.setAttribute("type", "text");
  this.style.display = "none";
  hide_pass_btn.style.display = "block";
});

//Event to hide value in password button at sign form;
hide_pass_btn.addEventListener("click", function () {
  pass_btn.removeAttribute("type");
  pass_btn.setAttribute("type", "password");
  this.style.display = "none";
  show_pass_btn.style.display = "block";
});
pass_btn.addEventListener("focusin", function () {
  show_pass_btn.style.display = "block";
});
pass_btn.addEventListener("focusout", function () {
  if (this.value == "") {
    show_pass_btn.style.display = "none";
  }
});

//Varibel to select password input to show || hide value in loign form;
const show_pass_loginBtn = document.getElementById("show_pass_login");
const hide_pass_loginBtn = document.getElementById("hide_pass_login");
const pass_loginBtn = document.getElementById("password_login");

//Event to show value in password button at login form; 
show_pass_loginBtn.addEventListener("click", function () {
  pass_loginBtn.removeAttribute("type");
  pass_loginBtn.setAttribute("type", "text");
  this.style.display = "none";
  hide_pass_loginBtn.style.display = "block";
});

//Event to hide value in password button at login form;
hide_pass_loginBtn.addEventListener("click", function () {
  pass_loginBtn.removeAttribute("type");
  pass_loginBtn.setAttribute("type", "password");
  this.style.display = "none";
  show_pass_loginBtn.style.display = "block";
});
pass_loginBtn.addEventListener("focusin", function () {
  show_pass_loginBtn.style.display = "block";
});
pass_loginBtn.addEventListener("focusout", function () {
  if (this.value == "") {
    show_pass_loginBtn.style.display = "none";
  }
});

//Varibel to select submit button in sign && login form;
const sub_sign = document.getElementById("sub-signBtn");
const sub_login = document.getElementById("sub-loginBtn");

//Varibel to select * elemant validation from button at sign form;
const fn_valid = document.getElementById("fn-valid");
const ln_valid = document.getElementById("ln-valid");
const email_valid = document.getElementById("email-valid");
const num_valid = document.getElementById("num-valid");
const idintity_valid = document.getElementById("idintity-valid");
const pass_valid = document.getElementById("pass-valid");

//Varibel to select * elemant validation from button at login form;
const email_login_valid = document.getElementById("email_login_valid");
const pass_login_valid = document.getElementById("pass_login_valid");
const email_login = document.getElementById("email_login_btn");

//Varibel to select * value from button at sign form;
const fn_btn = document.getElementById("fn-btn");
const ln_btn = document.getElementById("ln-btn");
const email_btn = document.getElementById("email-btn");
const num_btn = document.getElementById("num-btn");
const idintity_btn = document.getElementById("idintity-btn");
const pass_sign_btn = document.getElementById("password_sign");

//Event Condition in first name button if he have a value || not at sign form;
fn_btn.addEventListener("keyup", function () {
  if (fn_btn.value !== "") {
    fn_valid.style.display = "none";
  }
});

//Event Condition in last name button if he have a value || not at sign form;
ln_btn.addEventListener("keyup", function () {
  if (ln_btn.value !== "") {
    ln_valid.style.display = "none";
  }
});

//Event Condition in email button if he have a value || not at sign form;
email_btn.addEventListener("keyup", function () {
  if (email_btn.value !== "") {
    email_valid.style.display = "none";
  }
});

//Event Condition in phone number button if he have a value || not at sign form;
num_btn.addEventListener("keyup", function () {
  if (num_btn.value !== "") {
    num_valid.style.display = "none";
  }
});

//Event Condition in idintity button if he have a value || not at sign form;
idintity_btn.addEventListener("keyup", function () {
  if (idintity_btn.value !== "") {
    idintity_valid.style.display = "none";
  }
});

//Event Condition in password button if he have a value || not at sign form;
pass_sign_btn.addEventListener("keyup", function () {
  if (pass_sign_btn.value !== "") {
    pass_valid.style.display = "none";
  }
});

//Event Condition to make my validation on element at sign form;
sub_sign.addEventListener("click", function () {
  if (fn_btn.value == "") {
    fn_valid.style.display = "block";
  }

  if (ln_btn.value == "") {
    ln_valid.style.display = "block";
  }

  if (email_btn.value == "") {
    email_valid.style.display = "block";
  }

  if (email_btn.value.includes("@")) {
    email_valid.style.display = "none";
  } else {
    email_valid.style.display = "block";
  }

  if (num_btn.value == "") {
    num_valid.style.display = "block";
  }

  if (idintity_btn.value == "") {
    idintity_valid.style.display = "block";
  }

  if (pass_sign_btn.value == "") {
    pass_valid.style.display = "block";
  }
});

//Event Condition in email button at login form;
email_login.addEventListener("keyup", function () {
  if (email_login.value !== "") {
    email_login_valid.style.display = "none";
  }
});

//Event Condition in password button at login form;
pass_loginBtn.addEventListener("keyup", function () {
  if (this.value !== "") {
    pass_login_valid.style.display = "none";
  }
  if (pass_loginBtn.value.length > 8) {
    pass_login_valid.style.display = "none";
  } else {
    pass_login_valid.style.display = "block";
  }
});

//Event Condition to make my validation on element at login form;
sub_login.addEventListener("click", function () {
  if (email_login.value == "") {
    email_login_valid.style.display = "block";
  }
  if (email_login.value.includes("@")) {
    email_login_valid.style.display = "none";
  } else {
    email_login_valid.style.display = "block";
  }
  if (pass_loginBtn.value == "") {
    pass_login_valid.style.display = "block";
  }
});
