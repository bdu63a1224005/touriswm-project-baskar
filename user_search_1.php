
<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();

$id=$_REQUEST['id'];
$uname=$_SESSION['un'];
  $qry="select * from  place_details where id='$id'";
  $result = $conn->query($qry);
 while($row = $result->fetch_assoc())
		  {
		  $id=$row['id'];
		  $place_name=$row['place_name'];
		  $distance=$row['distance'];
		  $hotel=$row['hotel'];
		  $lodge=$row['lodge'];
		  $train_timing=$row['train_timing'];
		  $bus_timing=$row['bus_timing'];
		  $bus_route=$row['bus_route'];
		  $l1=$row['l1'];
		  $l2=$row['l2'];
		  $fname1=$row['fname1'];
		  $fname2=$row['fname2'];
		  $fname3=$row['fname3'];
		  $fname4=$row['fname4'];
		  $fname5=$row['fname5'];
		  $guid=$row['guid'];
		  $amount=$row['amount'];
		  }
		  
		  if(isset($btn))
{
 
 
 
 $sql = "SELECT id FROM booking_details order by id ASC";

 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
    
   $qrys1="insert into booking_details values($sid,'$uname','$guid','$amount','$place_name','$id','0','0')";
  if ($conn->query($qrys1) === TRUE) {
  ?>
<script language="javascript" type="text/javascript">
alert("Booking Successfully");
window.location.href="user_home.php";
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
<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
</style>
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
			<h3 class="heading text-capitalize mb-md-5 mb-4">SEARCH</h3>
		</div>
		 <form name="form1" method="post" action="">
		   <table width="449" height="365" align="center">
    <tr>
      <td width="221">Place Name </td>
      <td width="216"><?php echo $place_name;?></td>
    </tr>
    <tr>
      <td>Distance from Cuddalore </td>
      <td><?php echo $distance;?></td>
    </tr>
    <tr>
      <td>Hotel</td>
      <td><?php echo $hotel;?></td>
    </tr>
    <tr>
      <td>Lodge</td>
      <td><?php echo $lodge;?></td>
    </tr>
    <tr>
      <td>Train Timing </td>
      <td><?php echo $train_timing;?></td>
    </tr>
    <tr>
      <td>Bus Timing </td>
      <td><?php echo $bus_timing;?></td>
    </tr>
    <tr>
      <td>Bus Route </td>
      <td><?php echo $bus_route;?></td>
    </tr>
    <tr>
      <td>Latitude</td>
      <td><?php echo $l1;?></td>
    </tr>
    <tr>
      <td> Longitude</td>
      <td><?php echo $l2;?></td>
    </tr>
    <tr>
      <td><a href="map.php?l1=<?php echo $l1;?>&l2=<?php echo $l2;?>">View Map </a></td>
      <td><a href="user_feedback.php?id=<?php echo $id;?>">Feedback</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><h1 align="center"><strong>GUIDE BOOKING </strong></h1></td>
      </tr>
    <tr>
      <td>Guide</td>
      <td><?php echo $guid;?></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><?php echo $amount;?></td>
    </tr>
    <tr>
      <td>Card Number </td>
      <td> 
        <input name="card_number" type="text" id="card_number" required="">      </td>
    </tr>
    <tr>
      <td>Holder Name </td>
      <td><input name="card_number2" type="text" id="card_number2" required=""></td>
    </tr>
    <tr>
      <td>CVV</td>
      <td><input name="card_number3" type="text" id="card_number3" required=""></td>
    </tr>
    <tr>
      <td>Ex-Date</td>
      <td><input name="card_number4" type="text" id="card_number4" required=""></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="btn" type="submit" id="btn" value="Submit">
      </label></td>
    </tr>
  </table>
           <p><div class="slideshow-container">
  <div class="mySlides1">
    <img src="upload/<?php echo $fname1;?>" height="500" style="width:100%">
  </div>

   <div class="mySlides1">
    <img src="upload/<?php echo $fname2;?>"  height="500" style="width:100%">
  </div>

   <div class="mySlides1">
    <img src="upload/<?php echo $fname3;?>"  height="500" style="width:100%">
  </div>
  <div class="mySlides1">
    <img src="upload/<?php echo $fname4;?>"  height="500" style="width:100%">
  </div>
 
  <a class="prev" onClick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onClick="plusSlides(1, 0)">&#10095;</a>
</div>&nbsp;</p>
           <p>&nbsp;</p>
           
           <p>&nbsp;</p>
		 </form>
	</div>
</section>
<!-- //team -->



<!-- newsletter --><!-- //newsletter-->
<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

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