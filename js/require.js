document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("login-form");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const emailError = document.getElementById("email-error");
  const passwordError = document.getElementById("password-error");

  form.addEventListener("submit", function (e) {
    let valid = true;
    emailError.textContent = "";
    passwordError.textContent = "";

    if (!emailInput.value) {
      emailError.textContent = "กรุณากรอกอีเมลของคุณ";
      valid = false;
    }

    if (!passwordInput.value) {
      passwordError.textContent = "กรุณากรอกรหัสผ่าน";
      valid = false;
    }

    if (!valid) {
      e.preventDefault();
    }
  });
});
