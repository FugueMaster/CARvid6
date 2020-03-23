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
	
	<style>
body {
  background-color: coral;
}

   table, tr, th {
  border: 1px solid black;
}
</style>
	
	<!-- ======= Stats Section ======= -->
    <section class="stats" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
	 <marquee bgcolor="#d9d9ff">Always be responsible for the safety of yourself and others.</marquee>
    <span class="blinking"><h1><u>Heavy Traffic</u></h1></span>
  <table>

   <table>
    <div class="row">
	<div class="column">
		<img src="assets/img/heavytraffic.jpg" class="img-fluid" alt="Heavytraffic" width="300" height="250">
	</div>	
	<div class="column">
		<img src="assets/img/heavytraffic2.jpg" class="img-fluid" alt="Breakdown2" width="300" height="250" >
	</div>
   </div>
  <br>
  <br>
  <tr bgcolor="#FF0000">
    <th>Heavy Traffic</th>
   
    <th>Date</th>
    <th>Time</th>
	
  </tr>
  
  
  <tr bgcolor="yellow">
    <td>Heavy Traffic on TPE (towards PIE) at Upper Changi Rd North Exit.</td>
    <td>10/03</td>
    <td>18:27</td>
  </tr>
   <tr bgcolor="yellow">
    <td>Heavy Traffic on BKE (towards Woodlands) at SLE Exit.</td>
    <td>10/03</td>
    <td>18:09</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Heavy Traffic on Braddell Road (towards Bartley) between PIE and Bishan Road.</td>
    <td>10/03 </td>
    <td>17:58</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Heavy Traffic on Jalan Boon Lay (towards Enterprise Road) after International Road.</td>
    <td>10/03 </td>
    <td>17:57</td>
  </tr>
   <tr bgcolor="yellow">
    <td>Heavy Traffic on PIE (towards Changi) after Eng Neo Ave Exit.</td>
    <td>10/03</td>
    <td>16:12</td>
  </tr>
 <tr bgcolor="yellow">
    <td>Heavy Traffic on AYE (towards Tuas) after Clementi Ave 6 Exit.</td>
    <td>10/03</td>
     <td>17:30</td>
  </tr>
 <tr bgcolor="yellow">
    <td>Heavy Traffic on TPE (towards PIE) after Punggol Road Exit.</td>
    <td>10/03 </td>
    <td>17:12</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Heavy Traffic on PIE (towards Tuas)after Jalan Bahar Exit.</td>
    <td>10/03</td>
    <td>17:00</td>
  </tr>
 <tr bgcolor="yellow">
    <td>Heavy Traffic on KJE (towards BKE) between Choa Chu Kang Drive Exit and Woodlands Road Exit.</td>
    <td>10/03 </td>
    <td>16:12</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Heavy Traffic on CTE (towards SLE) between Braddell Rd Exit and AMK Ave 3 Exit.</td>
    <td>10/03</td>
    <td>16:00</td>
  </tr>
 <tr bgcolor="yellow">
    <td>Heavy Traffic on PIE (towards Changi Airport) after BKE.</td>
    <td>04/03 </td>
    <td>16:27</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Heavy Traffic on SLE (towards BKE) at Woodlands Ave 12 Exit.</td>
    <td>04/03</td>
    <td>16:53</td>
  </tr>
</table>

  </main><!-- End #main -->
  
  
 <?php include 'footer.inc'?>
</body>

</html>	
