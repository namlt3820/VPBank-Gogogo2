<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap.min.css">

    <!-- Other -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/regular.css">
    <link rel="stylesheet" href="../css/congrat.css">
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="site__box">
        <p>Chúc mừng bạn <br> đã hoàn thành <br> thử thách</p>
        <a href="">Trở về trang chủ</a>
      </div>
    </div>

    <!-- JavaScript Files -->
    <script src="../assets/jquery-3.2.1.min.js"></script>
    <script src="../assets/jquery-ui.min.js"></script>
    <script src="../assets/popper.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <script src="../assets/regular.js"></script>
    <!-- End JavaScript Files -->

    <script type="text/javascript">
      $(document).ready(function() {
        var oldURL = document.referrer
        $('.site__box a').attr('href', oldURL)
      })
    </script>
  </body>
</html>