<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DekLearn</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/login.css" />
</head>
<body>
 
<button onclick="rotateAndGo()" class="logo-btn">
  <div class="circle-icon" id="logo-icon">
    <img src="../image/Logo.png" alt="Logo" />
  </div>
</button>

<div class="navbar">
  <div class="navbar-left">
    <button onclick="window.location.href='login.html'" class="login-btn">เข้าสู่ระบบ</button>
    <a href="register.html" class="create-account">สร้างบัญชี</a>
  </div>
  <div class="navbar-right">
    <a href="main.html" class="menu">หน้าหลัก</a>
    <div class="separator">|</div>
    <a href="topup.html" class="menu">เติมเงิน</a>
    <div class="separator">|</div>
    <a href="contact.html" class="menu">ติดต่อเรา</a>
    <div class="separator">|</div>
    <a href="about.html" class="menu">เกี่ยวกับเรา</a>
  </div>
</div>

<div class="center-circle-container">
  <button class="half-circle left-btn">
    <span class="btn-text">สรุปซิท</span>
  </button>
  <button class="half-circle right-btn">
    <span class="btn-text">ติวเตอร์</span>
  </button>
</div>

<div class="login-container">
  <h2>เข้าสู่ระบบ</h2>
  <form class="login-form" action="../php/login.php" method="POST" autocomplete="off">
    <label for="email">อีเมล</label>
    <input type="email" id="email" name="email" placeholder="กรอกอีเมลของคุณ" required />
    <span id="email-error" class="error-msg"></span>

    <label for="password">รหัสผ่าน</label>
    <input type="password" id="password" name="password" placeholder="กรอกรหัสผ่าน" required />
    <span id="password-error" class="error-msg"></span>

    <div class="form-options">
      <label class="remember-me">
        <input type="checkbox" name="remember" />
        บันทึกรหัสผ่าน
      </label>
      <a href="#" class="forgot-password">ลืมรหัสผ่าน?</a>
    </div>

    <button type="submit" class="submit-btn">เข้าสู่ระบบ</button>

    <p class="register-link">ยังไม่มีบัญชี? <a href="register.html">สร้างบัญชี</a></p>
  </form>
</div>

<script src="../js/script.js"></script>

</body>
</html>
