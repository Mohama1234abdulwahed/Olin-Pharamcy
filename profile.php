<?php 
session_start();
include('Admin-erea/includes/connect.php');
include('Admin-erea/common_function.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$user_username = $_SESSION['username'];

// Using prepared statements to prevent SQL injection
$stmt = $con->prepare("SELECT user_image FROM user_table WHERE user_name = ?");
$stmt->bind_param("s", $user_username);
$stmt->execute();
$result_images = $stmt->get_result();
$row_image = $result_images->fetch_assoc();
$user_image_path = $row_image['user_image'];
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Poppins" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="<?php echo './Admin-erea/user-erea/user_images/' . htmlspecialchars($user_image_path); ?>" class="img-fluid rounded-circle" alt="User Image"/>
        <h1 class="text-light"><a href="index.php">Mohamad Pharmacy</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/login" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.skype.com/en/" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com/login" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
      
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="profile.php?edit_account" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Edit</span></a></li>
          <li><a href="profile.php?my_orders" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>My Orders</span></a></li>
        </ul>
        
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Pharmacy</h1>
      <p>Welcome <span class="typed" data-typed-items=" to Mohamed Pharmacy"></span></p>
      
      <?php 
        get_user_order();
        if(isset($_GET['edit_account'])){
          include('edit_account.php');
        }
        if(isset($_GET['my_orders'])){
          include('my_orders.php');
        }
        if(isset($_GET['delete'])){
          include('Delete_Account.php');
        }
        
      ?>
    </div>
    
  </section>
 
  <!-- End Hero -->

  <main id="main">
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        
      </div>
      <div class="credits">
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
