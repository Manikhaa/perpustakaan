  <?php
include('konek.php');
  ?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ubah Admin - Elibrary</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v2.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#">Ubah Data User</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



    </div>
  </header><!-- End Header -->



 
          </form>




  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      
  

  <main id="main">

    
<div class="container text-center">
            <?php 
              $id_user2 = $_GET['id_user2'];

              $sql = mysqli_query($konek,"SELECT * FROM user2 WHERE id_user2 = '$id_user2'");

              $data = mysqli_fetch_array($sql);
             ?>

             
            <form class="" method="POST" action="" enctype="multipart/form-data">

         <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
            <input class="form-control"  type="text-centert" name="nama"  placeholder="Nama" value="<?php echo $data['nama']; ?>" required="required">
            </div> 

        <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
            
            <input  class ="form-control" type="text" name="username"  placeholder="username" value="<?php echo $data['username']; ?>" required="required"> 
         </div>
          <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
            <input class="form-control"  type="text-centert" name="email"  placeholder="email" value="<?php echo $data['email']; ?>" required="required">
            </div> 
          <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
            <input class="form-control"  type="text-centert" name="pass"  placeholder="Password" value="<?php echo $data['pass']; ?>" required="required">
            </div> 

             <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
            <input class="form-control"  type="text" name="level" placeholder="level" value="<?php echo $data['level']; ?>" required="required"></div>
          </div>
          </div>
        


          
<br><br>


  <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" name="submit" value="kirim" >Send</button>
            </div>

</section>





   
      <div class="credits">
      
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



<?php 

if (isset($_POST['submit'])) 
{
  
  $nama      =$_POST['nama'];
  $username  = $_POST['username'];
  $email      =$_POST['email'];
  $pass = $_POST['pass'];
  $level = $_POST['level'];
 


  $sql = mysqli_query($konek,"UPDATE user2 SET nama='$nama', username = '$username', email='$email', pass = '$pass',level = '$level' WHERE id_user2 = '$id_user2'"); ?>

   <script language="JavaScript">alert('Data User Berhasil Diubah!!!');
         document.location='index-admin.php'</script>
<?php }
 ?>