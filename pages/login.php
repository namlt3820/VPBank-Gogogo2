<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap.min.css">

    <!-- Other -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="../css/regular.css">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <!-- Brand -->
    <div class="site__brand container text-center">
      <img src="../assets/co_ban_logo.png" alt="brand">
    </div>
    <!-- end Brand -->

    <!-- Login -->
    <div class="site__login container">
      <div class="row justify-content-center">

        <!-- Login Box -->
        <div class="login__box col-lg-4">
          <h5>Đăng nhập</h5>
          <hr>
          <form action="" method="post" id="login__form">
            <input id="username" name="username" placeholder="username">
            <input id="password" name="password" placeholder="password">
            <div class="d-flex align-items-center justify-content-end">
              <!-- <div class="remember-me d-flex align-items-center">
                <input type="checkbox" id="remember_me" name="remember_me">
                <span class="custom-checkbox"></span>
                <label for="remember_me">Remember me</label>
              </div> -->
              <div class="submit__container">
                <input type="submit" value="">
                <div class="submit__icon d-flex align-items-center justify-content-center">
                  <svg width="2rem" height="1.7rem" viewBox="0 0 100 86" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="#ffffff" fill-rule="evenodd">
                        <g id="noun_Arrow_2094735" fill="#ffffff" fill-rule="nonzero">
                            <path d="M60.64,2 C59.9100404,1.27947275 58.9149778,0.892302908 57.89,0.93 C56.881367,0.901419753 55.9052443,1.28825357 55.19,2 C54.4617551,2.70470526 54.0534721,3.67663555 54.06,4.69 L54.06,27.69 L0,27.69 L0,58.31 L54.06,58.31 L54.06,81.31 C54.0816583,83.4106912 55.7793088,85.1083417 57.88,85.13 C58.9512786,85.0898665 59.9728452,84.6677608 60.76,83.94 L98.92,45.63 C99.6306605,44.9420656 100.022099,43.9888395 100,43 C100.036264,41.9733422 99.6452108,40.9776061 98.92,40.25 L60.64,2 Z" id="Shape"></path>
                        </g>
                    </g>
                  </svg>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- end Login Box -->

        <!-- Notice -->
        <div class="login__notice col-lg-7">
          <h5>Chú ý:</h5>
          <p>Từ ngày 07/07/2018, các CBBH sẽ login với thông tin như sau:</p>
          <p><strong>Username:</strong> Tài khoản email không chứa đuôi @ (ví dụ: longtt10, hoant20...)</p>
          <p><strong>Password:</strong> Mã DAO/salecode (Nếu đây là lần đầu tiên đăng nhập và vẫn báo sai thông tin tài khoản, hãy thử để trống ô password và ấn "đăng nhập")</p>
          <p>Nếu không đăng nhập được xin vui lòng liên hệ tới địa chỉ mail <strong>longtt10@vpbank.com.vn</strong> hoặc <strong>ngocdn3@vpbank.email</strong> kèm mã DAO/salecode của mình để được hỗ trợ!</p>
          <p>Các anh/chị quản lý từ cấp trưởng phòng trở lên nếu không đăng nhập được xin vui lòng liên hệ <strong>longtt10@vpbank.com.vn</strong> để được hỗ trợ!</p>
        </div>
        <!-- end Notice -->
      </div>
    </div>
    <!-- end Login -->

    <!-- Footer -->
    <footer>
      Powered by BMT
    </footer>
    <!-- end Footer -->
    <!-- JavaScript Files -->
    <script src="../assets/jquery-3.2.1.min.js"></script>
    <script src="../assets/jquery-ui.min.js"></script>
    <script src="../assets/popper.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <!-- end JavaScript Files -->

    <script type="text/javascript">
      $(document).ready(function() {
        $('.submit__icon').click(function() {
          $('.submit__container input').click();
        });
        $('.custom-checkbox').click(function() {
          $('#remember_me').click();
        });
      });
    </script>
  </body>
</html>