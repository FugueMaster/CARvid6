<!DOCTYPE html>
<html lang="en">
 <?php include 'header.inc'?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TRINDS</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  
  <style>
table, th, td {
  border: 1px solid black;
}

  /* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #000;    }
    49%{    color: #000; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #000;    }
}
  
marquee{
      font-size: 30px;
      font-weight: 800;
      color: #FF0000;
      font-family: sans-serif;
      }
</style>

  <style>
body {
  background-color: coral;
}

table, tr, th {
  border: 1px solid black;
}
</style>
  
  <main id="main">
  
  
  <!-- ======= Stats Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Statistics</h2>
          <ol>
            <li><a href="webpage.html">Home</a></li>
			<li>Statistics</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->
	
	
	
	<!-- ======= Stats Section ======= -->
    <section class="stats" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
	<div class="container">
	  <marquee bgcolor="#d9d9ff">Always be responsible for the safety of yourself and others.</marquee>
  <span class="blinking"><h1><u>Vehicle Breakdown</u></h1></span>
  <table>
    <div class="row">
	<div class="column">
		<img src="assets/img/vehiclebreakdown.jpg" class="img-fluid" alt="Breakdown" width="300" height="250">
	</div>	
	<div class="column">
		<img src="assets/img/breakdown2.jpg" class="img-fluid" alt="Breakdown2" width="300" height="250" >
	</div>
   </div>
   
   <br>
   <br>
  
  <tr bgcolor="#FF0000">
    <th>Traffic Update</th>
   
    <th>Date</th>
    <th>Time</th>
	
  </tr>
  <tr bgcolor="yellow">
    <td>Vehicle breakdown on PIE (towards Changi Airport) after Jalan Eunos.</td>
    <td>10/03</td>
    <td>18:09</td>
  </tr>

  <tr bgcolor="yellow">
    <td>Vehicle breakdown on PIE (towards Tuas) after Eng Neo Ave. Avoid lane 6.</td>
    <td>10/03</td>
    <td>17:57</td>
  </tr>
<tr bgcolor="yellow">
    <td>Vehicle breakdown on KJE (towards PIE) after Woodlands Rd Exit.</td>
    <td>10/03</td>
    <td>16:12</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Vehicle breakdown on ECP (towards Changi Airport) after Marine Vista Rd.</td>
    <td>10/03</td>
    <td>17:30</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Vehicle breakdown on PIE (towards Changi Airport) after Lornie Rd. Avoid Lane 4.</td>
    <td>10/03 </td>
    <td>17:12</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Vehicle breakdown on SLE (towards BKE) before Mandai Rd Exit..</td>
    <td>10/03 </td>
    <td>17:00</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Vehicle breakdown on PIE (towards Tuas) at Adam Rd Entrance</td>
    <td>04/03</td>
    <td> 16:27</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Vehicle breakdown on BKE (towards Woodlands) after Mandai Rd Entrance. Avoid lane 2.</td>
    <td>04/03</td>
    <td>16:53</td>
  </tr>
 
</table>
</section>
  </main><!-- End #main -->
  
  <?php include 'footer.inc'?>
</body>

</html>	
