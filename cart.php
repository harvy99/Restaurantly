<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/DataTables/datatables.min.css"/>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<!-- font awesome -->
<link href="assets/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
  <!-- =======================================================
  * Template Name: Restaurantly - v3.3.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 
<?php include('sub-pages/header.php'); ?>
  <main id="main">
 
 
 

    <!-- ======= Specials Section ======= -->
    <section id="account" class="myAccount" style=" background: #fff; color: #000;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>My Cart</h2>
          <p>Steps: Finalize Cart</p>
        </div>

        <ul class="progressbar">
            <li class=""><i class="fas fa-shopping-cart fa-lg"></i>Finalize Cart</li>
            <li class=""><i class="fas fa-user-edit fa-lg"></i>Customer Info</li>
            <li class=""><i class="fas fa-credit-card fa-lg"></i>Payment</li>
        </ul>
 
      </div>
      
    <div class="row" data-aos="fade-up" data-aos-delay="100" style="margin-top: 60px" >
          <div class="col-lg-10" style="margin:auto">
            <?php include('sub-pages/cart-table.php')?> 

         <?php include('sub-pages/customer-info.php')?> 
         </div>
         
    </div>

    </section><!-- End Specials Section -->
  

  </main><!-- End #main -->

  <?php include('sub-pages/footer.php') ?>  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 
  
  <script type="text/javascript" src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>

  <script type="text/javascript" src="assets/vendor/DataTables/datatables.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script>  


</script>
 

</body>

</html>