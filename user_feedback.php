
<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
$id=$_REQUEST['id'];
$un= $_SESSION['un'];
 if(isset($btn))
{
 $data=$_REQUEST['data'];
  $sql = "SELECT id FROM feedback order by id ASC";

 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
     date_default_timezone_set('Asia/Kolkata');
$cdate=date('d-m-Y H:i');
   $qrys1="insert into feedback values($sid,'$id','$data','$cdate','0','$un')";
  if ($conn->query($qrys1) === TRUE) {
  ?>
<script language="javascript" type="text/javascript">
alert("Upload Successfully");
window.location.href="user_search.php";
</script>
<?php   
 }
 else
{
    
?>
<script language="javascript" type="text/javascript">
alert("Failed");
 
</script>
<?php 
}
$conn->close();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Commute Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

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
<body>

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
				<li class=""><a href="user_home.php">Home</a></li>
				<li class="active"><a href="user_search.php">Search Place</a></li>
				 
								<li class=""><a href="user_booking.php">Booking Place</a></li>

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
			<h3 class="heading text-capitalize mb-md-5 mb-4">FEEDBACK</h3>
		</div>
		 <form name="form1" method="post" action="">
		   <table width="378" height="66" align="center">
    <tr>
      <td height="29">Feedback</td>
      <td> <label>
        <input name="data" type="text" id="data" required="">
      </label></td>
    </tr>
    <tr>
      <td height="29">&nbsp;</td>
      <td><label>
        <input name="btn" type="submit" id="btn" value="Submit">
      </label></td>
    </tr>
  </table>
           <p>&nbsp;</p>
           <table width="720" height="180" align="center">
             <tr>
               <td width="35">ID</td>
               <td width="93">User</td>
               <td width="153" height="29">Commends</td>
               <td width="77">Date</td>
             </tr>
			    <?php
				$id=$_REQUEST['id'];
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
           <p>&nbsp;</p>
           <p>&nbsp;</p>
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