let login = $("#login");
let register = $("#register");
let loginTab = $("#login-tab");
let registerTab = $("#register-tab");

if (sessionStorage.getItem("tab") === null) {
  sessionStorage.setItem("tab", "login");
}

if (sessionStorage.getItem("tab") === "login") {
  toggleLogin();
} else if (sessionStorage.getItem("tab") === "register") {
  toggleRegister();
}

loginTab.on("click", () => {
  toggleLogin();
});

registerTab.on("click", () => {
  toggleRegister();
});

function toggleRegister() {
  sessionStorage.setItem("tab", "register");
  $("#login").css("display", "none");
  $("#register").css("display", "block");
  loginTab.removeClass("active");
  registerTab.addClass("active");
}

function toggleLogin() {
  sessionStorage.setItem("tab", "login");
  $("#login").css("display", "block");
  $("#register").css("display", "none");
  loginTab.addClass("active");
  registerTab.removeClass("active");
}
