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
<span class="blinking"><h1><u>Roadworks</u></h1></span>
  <table>
  <div class="row">
	<div class="column">
		<img src="assets/img/roadwork.jpg" class="img-fluid" alt="Roadwork" width="300" height="200">
	</div>	
	<div class="column">
		<img src="assets/img/workerworking.jpg" class="img-fluid" alt="Worker" width="300" height="200" >
	</div>
   </div>
   <br>
   <br>
   

  <tr bgcolor="#FF0000">
    <th>Roadwork</th>
   
    <th>Date</th>
    <th>Time</th>
	
  </tr>
  
 <tr bgcolor="yellow">
    <td>Sin Ming Avenue (towards Marymount Road) after Sin Ming Drive. Avoid right lane.</td>
    <td>10/03 </td>
    <td>18:30</td>
  </tr>
  <tr bgcolor="yellow">
    <td>PIE (towards Tuas) after Simei Rd exit. Avoid lane 3.</td>
    <td>10/03 </td>
    <td>17:26</td>
  </tr>
  <tr bgcolor="yellow">
    <td>PIE (towards Tuas) after KJE. Avoid lane 1.</td>
    <td>10/03</td>
    <td>17:10</td>
  </tr>
 <tr bgcolor="yellow">
    <td>Telok Blangah Road (towards Tuas) after Kampong Bahru Road. Avoid left lane.</td>
    <td>10/03</td>
    <td> 17:04</td>
  </tr>
 <tr bgcolor="yellow">
    <td> Ang Mo Kio Avenue 3 (towards Serangoon North Avenue 5) after Serangoon North Avenue 1. Avoid right lane.</td>
    <td>10/03 </td>
    <td>17:00</td>
  </tr>
  <tr bgcolor="yellow">
    <td> Upper Thomson Road (towards Newton) after Yio Chu Kang Road. Avoid right lane.</td>
    <td>10/03</td>
    <td>16:46</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Bishan Road (towards Bishan Lane) after Bishan Street 11. Avoid right lane.</td>
    <td>10/03</td>
    <td>16:45</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Upper East Coast Road (towards Changi) after Lucky Heights. Avoid left lane.</td>
    <td>10/03</td> 
    <td>16:37</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Jurong Town Hall Road (towards Jurong East Street 11) after Jurong East Street 12. Avoid left lane..</td>
    <td>10/03</td>
    <td>16:30</td>
  </tr>
  <tr bgcolor="yellow">
    <td>Jalan Buroh (towards City) after Jurong Pier Road. Avoid right lane.</td>
    <td>10/03 </td>
    <td>16:25</td>
  </tr>
  <tr bgcolor="yellow">
    <td> Ang Mo Kio Avenue 6 (towards Ang Mo Kio Street 12) after Ang Mo Kio Central 1. Avoid left lane.</td>
    <td>10/03</td>
    <td>12:15</td>
  </tr>
 <tr bgcolor="yellow">
    <td>Scotts Road (towards Newton Circus) after Cairnhill Road. Avoid right lane.</td>
    <td>10/03</td>
    <td>11:30</td>
  </tr>	
<tr bgcolor="yellow">
    <td>Marine Parade Road (towards Marine Vista) after Siglap Road. Avoid right lane.</td>
    <td>10/03 </td>
    <td>08:30</td>
  </tr>
 
 
</table>

  </main><!-- End #main -->
  
  
 <?php include 'footer.inc'?>
</body>

</html>	
