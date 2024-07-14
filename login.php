<?php
if (!empty($_SESSION['username_simsditp'])) {
  header('location:home');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/login.css" />
  <title>Sign in & Sign up Form</title>
</head>

<!-- Login -->

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="proses/proses_login.php" method="POST" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="username" type="email" placeholder="Email"
              value="<?php echo isset($_COOKIE['username_simsditp']) ? $_COOKIE['username_simsditp'] : ''; ?>"
              required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password"
              value="<?php echo isset($_COOKIE['password_simsditp']) ? $_COOKIE['password_simsditp'] : ''; ?>"
              required />
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
          </div>
          <input type="submit" name="submit_validate" value="Log in" class="btn solid" />
        </form>

        <!-- Register -->
        <form action="#" class="sign-up-form" onsubmit="return validateForm()">
          <h2 class="title">Tentang Aplikasi</h2>
          <p style="text-align:justify">Sistem Informasi Manajemen Sekolah Dasar Islam Pulogadung (SIMSDITP) adalah
            sebuah platform digital yang
            dirancang khusus untuk mengoptimalkan manajemen dan administrasi di Sekolah Dasar Islam Pulogadung. Aplikasi
            ini hadir untuk menjawab kebutuhan sekolah dalam mengelola berbagai aspek operasional dengan lebih efisien,
            transparan, dan terintegrasi.</p>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>SIMSDITP</h3>
          <p>
            Sistem Informasi Manajemen Sekolah Dasar Islam Pulogadung (SIMSDITP)
          </p>
          <button class="btn transparent" id="sign-up-btn">
            About App
          </button>
        </div>
        <img src="assets/img/web.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Sudah Memiliki Akun ?</h3>
          <p>
            
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="assets/img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="assets/js/app.js"></script>
</body>

</html>