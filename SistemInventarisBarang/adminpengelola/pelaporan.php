<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SISTEM INVENTARIS BARANG</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
            <!--logo start-->
            <a href="index.html" class="logo"><b>DATA INVENTARIS BARANG</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/SistemInventarisBarang/index.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">ADMIN PENGELOLA</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>HOME</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="pelaporan.php" >
                          <i class="fa fa-book"></i>
                          <span>Pelaporan</span>
                      </a>

                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Input Data</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="databarang.php">Data Barang</a></li>
						  <li><a  href="datatanah.php">Data Tanah</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Inventaris</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="invenbarang.php">Inventaris Barang</a></li>
                          <li><a  href="inventanah.php">Inventaris Tanah</a></li>
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="/SistemInventarisBarang/index.html">Log Out</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
	  
      <!--sidebar end-->
      
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  	
     <section id="main-content">
          <section class="wrapper">
	 
				<h3>DATA INVENTARIS BARANG</h3>
				<div class="row">
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4>DATA BARANG</h4>
	                  	  	  <hr>
									<table class="table">
		                          <thead>
		                          <tr>
		                              <th>NO ID</th>
		                              <th>NAMA BARANG</th>
		                              <th>STATUS BARANG</th>
									  <th>TANGGAL MASUK</th>
		                          </tr>
		                          </thead>
								   <?php
								   
										
										$con=mysqli_connect("localhost","root","","barang_oop");
										// Check connection
										if (mysqli_connect_errno())
										{
											echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}

										$result = mysqli_query($con,"SELECT * FROM invenbarang");
										?>
		                          <tbody>
								  <?php while($row = mysqli_fetch_array($result)) {
		                          ?>
								  <tr>
									  <td><?php echo $row['id'];?></td>
		                              <td><?php echo $row['nama_barang'];?></td>
									  <td><?php echo $row['status_barang'];?></td>    									  
									  <td><?php echo $row['tgl_masuk'];?></td>
								  </tr>
								  <?php }?>
								  
		                          </tbody>
		                      </table>

		</section>
	</section>

	
	<section id="main-content">
          <section class="wrapper">
	 
				<h3>DATA INVENTARIS TANAH</h3>
				<div class="row">
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4>DATA TANAH</h4>
	                  	  	  <hr>
									<table class="table">
		                          <thead>
		                          <tr>
		                              <th>NO ID</th>
		                              <th>LOKASI TANAH</th>
		                              <th>LUAS BARANG</th>
		                          </tr>
		                          </thead>
								   <?php
								   
										
										$con=mysqli_connect("localhost","root","","tanah_oop");
										// Check connection
										if (mysqli_connect_errno())
										{
											echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}

										$result = mysqli_query($con,"SELECT * FROM inventanah");
										?>
		                          <tbody>
								  <?php while($row = mysqli_fetch_array($result)) {
		                          ?>
								  <tr>
									  <td><?php echo $row['id'];?></td>
		                              <td><?php echo $row['lokasi_tanah'];?></td>
									  <td><?php echo $row['luas_tanah'];?></td>    									  
		                          </tr>
								  <?php }?>
								  
		                          </tbody>
		                      </table>

		</section>
	</section>

      <!--main content end-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
