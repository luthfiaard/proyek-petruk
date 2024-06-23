<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PETRUK - Pengaduan Infrastruktur</title>
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <link rel="shortcut icon" href="../../img/logoTab.jpg">


  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet" />
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="../css/stylel.css" rel="stylesheet" />
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center py-lg-4">
      <div class="col-lg-6 py-lg-5">
        <div class="card-body-signin px-lg-4 py-4 bg-light">
          <!-- <div class="row"> -->
          <div class="col-lg">

            <div class="header">
              <h5 class="text-center pt-lg-5">Create An Account</h5>
              <div class="pb-lg-5 d-flex justify-content-center">
                <img class="logo" src="../img/logoBlack.png" alt="">
              </div>
            </div>
            <form class="user" action="../controller/signup-check.php" method="post">
              <?php if (isset($_GET['error'])) { ?>
                <p class="gagal"><?php echo $_GET['error']; ?></p>
              <?php } ?>

              <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
              <?php } ?>


              <div class="form-group">
                <label for="username">Name :</label>
                <?php if (isset($_GET['name'])) { ?>
                  <input type="text" class="form-control form-control-user" name="name" id="username" placeholder="Enter Your Name..." value="<?php echo $_GET['name']; ?>"><br>
                <?php } else { ?>
                  <input type="text" name="name" placeholder="Name"><br>
                <?php } ?>

              </div>
              <div class="form-group">
                <label for="email">Username :</label>
                <?php if (isset($_GET['uname'])) { ?>
                  <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Email Address..." value="<?php echo $_GET['uname']; ?>"><br>
                <?php } else { ?>
                  <input type="text" name="uname" placeholder="User Name"><br>
                <?php } ?>

              </div>
              <div class="form-group row">
                <label for="password">Password :</label>
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                </div>
                <div class="col-sm-6">
                  <input type="Password" class="form-control form-control-user" name="re_password" placeholder="Repeat Password" required>
                </div>
              </div>

              <div class="d-flex justify-content-center">
                <button type="submit">Regist</button>
                </a>
              </div>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Already Account?</a>
              </div>
            </form>


          </div>
          <!-- </div> -->
        </div>
      </div>

    </div>
  </div>


  <!-- Footer Start -->
  <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-2">
      <div class="row">
        <div class="col-lg-8 col-md-6 wow fadeInUp">
          <img class="pb-sm-3" src="../img/logoWhite.png" alt="Logo Pelan" width="150px">
          <p>
            FINAL PROJECT WEB PROGRAMMING
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-square btn-outline-primary me-1" href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="btn btn-square btn-outline-primary me-1" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btn btn-square btn-outline-primary me-1" href="">
              <i class="fab fa-youtube"></i>
            </a>
            <a class="btn btn-square btn-outline-primary me-0" href="">
              <i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="col-lg-0 col-md-4 wow fadeInUp">
          <p>Supported By:</p>
          <h4 class="text-light">UNIVERSITAS AMIKOM YOGYAKARTA</h4>
          <a href="timCreative.html"> CREATIVE TIM </a>
        </div>
      </div>
    </div>

    <div class="container-fluid copyright">
      <div class="container justify-content-center">
        <div class="row">
          <div class="col-md-6 text-center mb-3 mb-md-0">
            <a>copyright </a> &copy; <a href="#">PETRUK - Pengaduan Infrastruktur</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Back to Top -->
  <a href="index.html" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>
</body>

</html>