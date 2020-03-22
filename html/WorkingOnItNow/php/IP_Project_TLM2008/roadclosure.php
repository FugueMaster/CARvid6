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
  
</</style>
 
  <main id="main">
  
  
  <!-- ======= Stats Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Statistics</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
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
	<marquee bgcolor="#d9d9ff">Remember to always exercise patience and graciousness.</marquee>
   <span class="blinking"><h1><u>Road Closure</u></h1></span> 
  <table>
    <div class="row">
	<div class="column">
		<img src="assets/img/closure.jpg" class="img-fluid" alt="closure" width="300" height="250">
	</div>	
	<div class="column">
		<img src="assets/img/closure2.jpg" class="img-fluid" alt="closure2" width="300" height="250" >
	</div>
   </div>
  
 <tr bgcolor="#FF0000">

  <br>
  <br>
    <th>Road Closure</th> 
    <th>Date</th>
    <th>Time</th>
	
  </tr>
 
<tr bgcolor="yellow">
    <td>KPE (towards TPE) at Nicholl Highway Entrance.</td>
    <td>04/03/2020 </td>
    <td>15:23</td>
  </tr>
<tr bgcolor="yellow">
    <td>ECP (towards Changi Airport) at KPE(TPE) Exit.</td>
    <td>04/03/2020 </td>
    <td>14:32</td>
  </tr>

<tr bgcolor="yellow">
    <td>Birch Road (towards Farrer Park Station Road) after Serangoon Road.</td>
    <td>04/03/2020 </td>
     <td>16:30</td>
  </tr>

</table>

  </main><!-- End #main -->


 <?php include 'footer.inc'?>
</body>

</html>	
