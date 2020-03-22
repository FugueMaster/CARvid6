<?php
	session_start();
	if (!isset($_SESSION['MM_Username']))
	{
	header("Location:login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'header.inc'?>
  <main id="main">
  
  
  <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Submit Entry</h2>
          <ol>
            <li><a href="webpage.html">Home</a></li>
			<li>Contact Us</li>
            <li>Submit Entry</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->
	
	
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
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
			  
              <div class="form-group">
			    <label for="c-form-type">
					<span class="label-text">Type</span> 
					<span class="contact-error"></span>
				</label>
				<select name="subject" class="c-form-type form-control" id="c-form-type" data-rule="required" data-msg="Please enter a valid type" >
					<option value="Type">Type...</option>
					<option value="accident">Accident</option>
					<option value="heavy traffic">Heavy Traffic</option>
					<option value="breakdown">Breakdown</option>
					<option value="road closure">Road closure</option>
					<option value="road works">Road works</option>
				</select>
				<div class="validate"></div>
			  </div>
               
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
	

  </main><!-- End #main -->
    <?php include 'footer.inc'?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

