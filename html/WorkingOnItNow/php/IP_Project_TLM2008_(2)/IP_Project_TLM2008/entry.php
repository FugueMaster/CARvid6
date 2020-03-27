<!DOCTYPE html>

<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:login_user.php');
		exit;
  }
?>

<html>
    <?php include 'header.inc'?>
<head>
    <title>Selection of issue</title>
</head>
<body>
    
 <!-- ======= Contact Section ======= -->    
    <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Submit Entry</h2>
          <ol>
            <li><a href="welcome_user.php">Home</a></li>
			<li>Contact Us</li>
            <li>Submit Entry</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->
    </main>
        
    <main id="main">
  <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>10 Dover Dr, Singapore 138683</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>Registrar@SingaporeTech.edu.sg</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>Tel: +65 6592 1189<br>Fax: +65 6592 1190</p>
                </div>
              </div>
            </div>

          </div>
	  
	  <div class="col-lg-6">
              <label>Please select the issue to report:</label><br>
              <li><a href="entry_A.php">Accident</a></li>
              <li><a href="entry_H.php">Heavy traffic</a></li>
              <li><a href="entry_B.php">Breakdown</a></li>
              <li><a href="entry_C.php">Road closure</a></li>
              <li><a href="entry_W.php">Road works</a></li>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
	

  </main><!-- End #main -->


</body>
<?php include'footer.inc' ?>

</html>