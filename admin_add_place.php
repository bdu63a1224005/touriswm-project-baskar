
<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
if(isset($Submit))
{
$place_name=$_REQUEST['place_name'];
$distance=$_REQUEST['distance'];
$hotel=$_REQUEST['hotel'];
$type=$_REQUEST['select2'];
$lodge=$_REQUEST['lodge'];
$train_timing=$_REQUEST['train_timing'];
$bus_timing=$_REQUEST['bus_timing'];
 
$bus_route=$_REQUEST['bus_route'];
$l1=$_REQUEST['l1'];
$l2=$_REQUEST['l2'];

$guid=$_REQUEST['select'];
$amount=$_REQUEST['amount'];
 

 $fname1=$_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];  
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$fname1);


 $fname2=$_FILES["file2"]["name"];
$tempname2 = $_FILES["file2"]["tmp_name"];  
move_uploaded_file($_FILES["file2"]["tmp_name"],"upload/".$fname2);

 $fname3=$_FILES["file3"]["name"];
$tempname3 = $_FILES["file3"]["tmp_name"];  
move_uploaded_file($_FILES["file3"]["tmp_name"],"upload/".$fname3);

 $fname4=$_FILES["file4"]["name"];
$tempname4 = $_FILES["file4"]["tmp_name"];  
move_uploaded_file($_FILES["file4"]["tmp_name"],"upload/".$fname4);

 $fname5=$_FILES["file5"]["name"];
$tempname5 = $_FILES["file5"]["tmp_name"];  
move_uploaded_file($_FILES["file5"]["tmp_name"],"upload/".$fname5);



 $sql = "SELECT id FROM place_details order by id ASC";

 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
    date_default_timezone_set('Asia/Kolkata');
$cdate=date('d-m-Y H:i');
   $qrys1="insert into place_details values($sid,'$place_name','$distance','$hotel','$lodge','$train_timing','$bus_timing','$bus_route','$l1','$l2','$fname1','$fname2','$fname3','$fname4','$fname5','$cdate','0','$type','$guid','$amount')";
  if ($conn->query($qrys1) === TRUE) {
  ?>
<script language="javascript" type="text/javascript">
alert("Upload Success");
window.location.href="admin_home.php";
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

				<li class="active"><a href="admin_add_place.php">Add Place</a></li>
				<li class=""><a href="admin_user.php">User</a></li>
				<li class=""><a href="admin_feedback.php">Feedback</a></li>
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
			<h3 class="heading text-capitalize mb-md-5 mb-4">ADD PLACE</h3>
		</div>
		 <form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="487" height="127" align="center">
    <tr>
      <td>Place Name </td>
      <td> 
        <input type="text" name="place_name" required="">
    </td>
    </tr>
    <tr>
      <td>Type</td>
      <td>
        <select name="select2">
          <option value="Historical Landmarks">Historical Landmarks</option>
          <option value="Natural wonders">Natural wonders</option>
          <option value="Cultural Experiences">Cultural Experiences</option>
          <option value="Cuisine">Cuisine</option>
        </select>
    </td>
    </tr>
    <tr>
      <td>District</td>
      <td><input name="distance" type="text" id="distance" required=""></td>
    </tr>
    <tr>
      <td>Hotel</td>
      <td><input name="hotel" type="text" id="hotel" required=""></td>
    </tr>
    <tr>
      <td>Lodge</td>
      <td><input name="lodge" type="text" id="lodge" required=""></td>
    </tr>
    <tr>
      <td>Train Timing </td>
      <td><input name="train_timing" type="text" id="train_timing" required=""></td>
    </tr>
    <tr>
      <td>Bus Timing </td>
      <td><input name="bus_timing" type="text" id="bus_timing" required=""></td>
    </tr>
    <tr>
      <td>Bus Route </td>
      <td><input name="bus_route" type="text" id="bus_route" required=""></td>
    </tr>
    <tr>
      <td>Photo 1 </td>
      <td> 
        <input type="file" name="file" required="">       </td>
    </tr>
    <tr>
      <td>Photo 2 </td>
      <td><input type="file" name="file2"></td>
    </tr>
    <tr>
      <td>Photo 3 </td>
      <td><input type="file" name="file3"></td>
    </tr>
    <tr>
      <td>Photo 4 </td>
      <td><input type="file" name="file4"></td>
    </tr>
    <tr>
      <td>Photo 5 </td>
      <td><input type="file" name="file5"></td>
    </tr>
    <tr>
      <td>Latitude</td>
      <td><input name="l1" type="text" id="l1" required=""></td>
    </tr>
    <tr>
      <td>Longitude</td>
      <td><input name="l2" type="text" id="l2" required=""></td>
    </tr>
    <tr>
      <td>Guide</td>
      <td> 
        <select name="select">
		<?php
		$qrys1="select * from  guid_details";
		$result = $conn->query($qrys1);
 
	 
		
	 	while($row = $result->fetch_assoc())
		  {
		
		?>
          <option value="<?php echo $row['username'];?>"><?php echo $row['name'];?></option>
		   <?php
	 }
	 ?>
        </select>     </td>
    </tr>
    <tr>
      <td>Booking Amount </td>
      <td><input name="amount" type="number" id="amount" required=""></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> 
        <input type="submit" name="Submit" value="Submit">      </td>
    </tr>
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