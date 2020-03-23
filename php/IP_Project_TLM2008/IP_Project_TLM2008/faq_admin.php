<html lang="en">
    <?php include 'header2.inc'?>'
    <head>
        <!-- Vendor CSS Files -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
        <style>
            .faqHeader {
                font-size: 27px;
                margin: 5px;
                }

            .panel-heading [data-toggle="collapse"]:after {
                font-family: 'Glyphicons Halflings';
                content: "\e072"; /* "play" icon */
                float: right;
                color: #F58723;
                font-size: 18px;
                line-height: 22px;
                padding: 0 18px;
                transition: 0.4s ease-in-out;
                /* rotate "play" icon from > (right arrow) to down arrow */
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                }

            .panel-heading [data-toggle="collapse"].collapsed:after {
            /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                color: #454444;
                }
        </style>
    </head>   
    
    <body>
        <main id="main">
        <!-- ======= Sub-Header Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>FAQ</h2>
          <ol>
            <li><a href="welcome.php">Home</a></li>
            <li>Contact Us</li>
            <li>FAQ</li>
          </ol>
        </div>

      </div> 
   </section><!-- End Sub-Header Section -->
   
  
   <!-- Bootstrap FAQ - START -->
   <div class="container">
   <br/>
   
   <div class="panel-group" id="accordion">
        <div class="faqHeader">General questions</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is account registration required?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse ">
                <div class="panel-body">
                    Account registration at <strong>TRINDS</strong> is only required if you are an employee for TRINDS. 
                    Public can access this service platform for free.
                </div>
            </div>
            <br>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">How do I get updated traffic news from TRINDS?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    Traffic information are submitted by the public. Users can view updated traffic news from <strong>Home>>Map</strong> or submit an entry via <strong>Home>>Submit Entry</strong>.    
                </div>
            </div>
        </div>
            <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">I have a piece of latest traffic news.How do I submit to TRINDS?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    Users can submit an entry via <strong>Home>>Submit Entry</strong> when they have news about the latest vehicle breakdowns,accidents,road works or heavy traffic.
                </div>
            </div>
        </div>
   
	<br>
	<br>
	<br>
     </main>    
    <!-- Bootstrap FAQ - END -->
    <?php include 'footer.inc'?>
    </body>    
</html>  

