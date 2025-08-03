
<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
if(isset($btn1))
{
 $name=$_REQUEST['email'];
 
$password=$_REQUEST['password'];
 $_SESSION['un']=$name;
 $qry="select * from user_details where email='$name' && password='$password'";
$result = mysqli_query($conn, $qry);
 if (mysqli_num_rows($result)) 
  {
  ?>
<script language="javascript" type="text/javascript">
alert("Login Successfully");
window.location.href="user_home.php";
</script>
<?php   
 }
 else
{
    
?>
<script language="javascript" type="text/javascript">
alert("Username /  Password Incorrect");
 
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
				<li class="active"><a href="index.php">Home</a></li>
			
			
 				<li class=""><a href="view.php?report=Historical Landmarks">Historical</a></li>
				<li class=""><a href="view.php?report=Natural Wonders">Natural Wonders</a></li>
				<li class=""><a href="view.php?report=Cultural Experience">Cultural Experience</a></li>
				<li class=""><a href="view.php?report=Cuisine">Cuisine</a></li>
					<li class=""><a href="user.php">User</a></li>
					<li class=""><a href="admin.php">Admin</a></li>

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
			<h3 class="heading text-capitalize mb-md-5 mb-4">USER LOGIN</h3>
		</div>
		 <form name="form1" method="post" action="">
		   <table height="127" align="center">
             <tr>
               <td>Email Id </td>
               <td><input type="email" name="email" placeholder="E-mail" required=""></td>
             </tr>
             <tr>
               <td>Password</td>
               <td><input type="password" name="password" placeholder="Password" required=""></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td><span class="tp">
                 <input name="btn1" type="submit" id="btn1" value="Login">
               </span></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td><p><a href="user_register.php"> Don't have an account?</a></p>
                  </td>
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