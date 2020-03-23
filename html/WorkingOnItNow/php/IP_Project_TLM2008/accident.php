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
	<marquee bgcolor="#d9d9ff">Always be responsible for the safety of yourself and others.</marquee>
   <span class="blinking"><h1><u>Accident</u></h1></span> 
  <table>
    <div class="row">
	<div class="column">
		<img src="assets/img/accident.jpg" class="img-fluid" alt="accident" width="300" height="250">
	</div>	
	<div class="column">
		<img src="assets/img/accident2.jpg" class="img-fluid" alt="accident2" width="300" height="250" >
	</div>
   </div>
  
 <tr bgcolor="#FF0000">

  <br>
  <br>
    <th>Traffic Update</th>
   
    <th>Date</th>
    <th>Time</th>
	
  </tr>
 
<tr bgcolor="yellow">
    <td> Accident on Toh Guan Road (towards Toh Guan Road East).</td>
    <td>04/03 </td>
    <td>17:00</td>
  </tr>
<tr bgcolor="yellow">
    <td>Accident on PIE (towards Tuas) at Thomson Rd Exit.</td>
    <td>04/03</td>
    <td>16:45</td>
  </tr>
<tr bgcolor="yellow">
    <td>Accident on Sengkang West Avenue near Fernvale Lane/Sengkang West Avenue Junction.</td>
    <td>04/03</td>
    <td>16:37</td>
  </tr>
<tr bgcolor="yellow">
    <td>Accident on Ang Mo Kio Avenue 5 (towawrds CTE) after Ang Mo Kio Industrial Park 2.</td>
    <td>04/03 </td>
    <td>16:30</td>
  </tr>
<tr bgcolor="yellow">
    <td>Accident on Macritchie Viaduct (towards Queensway) after MacRitchie viaduct with congestion till Bishan Road.</td>
    <td>04/03 </td>
    <td>16:25</td>
  </tr>
</table>

  </main><!-- End #main -->
  
  
 <?php include 'footer.inc'?>
</body>

</html>	
