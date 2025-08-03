
<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
$id=$_REQUEST['id'];
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Commute Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="text/javascript">
    function showPosition(){
	var rer;
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(function(position){
                var Latitude= position.coords.latitude; 
				var Longitude=  position.coords.longitude;
                 document.getElementById("l1").value=Latitude;
				 document.getElementById("l2").value =Longitude;
				 //rer=Latitude+","+Longitude;
				  //document.write(rer);
 
 
				 //document.getElementById("lat").value=rer;
				//document.write(Latitude+",");
				//document.write(Longitude);
				//return rer;
           			});
        } 
		//return rer;
    }
 
</script>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body onLoad="showPosition();">

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="#">Tourism</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-lg-3 ml-auto">
				<li class=""><a href="admin_home.php">Home</a></li>
								<li class=""><a href="admin_add_guid.php">Add Guide</a></li>

				<li class=""><a href="admin_add_place.php">Add Place</a></li>
				<li class=""><a href="admin_user.php">User</a></li>
				<li class="active"><a href="admin_feedback.php">Feedback</a></li>
				<li class=""><a href="index.php">Logout</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="inner-banner" id="home">
	<div class="inner-banner-overlay">
		<div class="container">
			
		</div>
	</div>
</div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			 
		 
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- about --><!-- //about -->

<!-- discount --><!-- //discount -->

<!-- team -->
<section class="team py-5" id="team">
	<div class="container py-md-4">
		<div class="title-desc text-center">
			<h3 class="heading text-capitalize mb-md-5 mb-4">USER FEEDBACK</h3>
		</div>
		 <form action="" method="post" enctype="multipart/form-data" name="form1">
		   <table width="720" height="180" align="center">
             <tr>
               <td width="35">ID</td>
               <td width="93">User</td>
               <td width="153" height="29">Comments</td>
               <td width="77">Date</td>
             </tr>
             <?php
	 $qrys1="select * from  feedback where did='$id'";
		$result = $conn->query($qrys1);
 
	 
		
	 	while($row = $result->fetch_assoc())
		  {
	 ?>
             <tr>
               <td><?php echo $row['id'];?></td>
               <td><?php echo $row['report'];?></td>
               <td><?php echo $row['data'];?></td>
               <td><?php echo $row['cdate'];?></td>
             </tr>
             <?php
	 }
	 ?>
           </table>
		 </form>
	</div>
</section>
<!-- //team -->



<!-- newsletter --><!-- //newsletter-->


<!-- footer -->
 
<!-- //footer -->

<!-- copyright -->
<div class="copy-right text-center">
	<p>All rights reserved | Design by
		<a href="#"> Admin.</a>
	</p>
</div>
<!-- //copyright -->

<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon -->
	
</body>
</html>