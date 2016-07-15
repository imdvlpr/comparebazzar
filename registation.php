<?php

include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "http://comparebazzar.com/mregistration.php";
  }
  //-->
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Create your Account</title>
<link rel="stylesheet" href="style/user.css" media="all" />
</head>

<body>
<div class="main_wrapper">
<div id="navbar">
	    <ul class="nav nav-tabs">
    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> H o m e</a></li>
     <li class=""><a href="all_products.php"><span class="glyphicon glyphicon-product"></span> All products</a></li>
   
 <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">C A T E G O R I E S <span class="caret"></span></a>
     
        <ul class="dropdown-menu">
         <?php getCat(); ?>                       
      
	  </ul>
    </li>
   
  <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">B R A N D S <span class="caret"></span></a>
     
        <ul class="dropdown-menu">
         <?php  getBrands(); ?>                                             
      </ul>
    </li>
	<li class="active" style="float:right"><a href="regitration.php"><span class="glyphicon glyphicon-user"></span>Create An Account</a></li>
	<li class="active" style="float:right"><a href="login.php"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
   </ul>
   
 
      </div>
 <div class="header_wrapper">
	  <img src="images/heder3.jpg" height="100px"width="200px" style="float:left" />
	 
	 <form class="navbar-form navbar-right" role="search">
  <div class="form-group">
   
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	 </div> 


<div class="content_wrapper" >

<form method = "post" action="registation.php" enctype="multipart/form-data">
      
	 
	 
       
  <table class="table table-hover"  width="300px">
	  <tbody align="center">
	  <tr align="center"><td colspan="2"><h3> create an account </h3></td></tr>
	   <tr>
	   <td align="right"><label for="title"><h4>user Name :</h4></label></td>
	   <td>
	   <input type="text" name="user_name" class="form-control" >
 
	   </td>
	   </tr>
       <tr>
	   <td align="right"><label for="title"><h4>user password :</h4></label></td>
	   <td>
	   <input type="password" name="user_pass" class="form-control" >
 
	   </td>
	   </tr>
	   <tr>
	   <td align="right"><label for="title"><h4>user Email :</h4></label></td>
	   <td>
	   <input type="text" name="user_email" class="form-control" class="col-sm-3">
 
	   </td>
	   </tr>
	   <tr align="center">
	   <td colspan="2">
	  <input type="submit" class="btn btn-info" name="submit" value="submit" />
	  
	   </td>
	   </tr>

  </tbody>
  </table>
  
  </form>


<center><b style="text-align:center;">Already Register</b>
<br /><a href="login.php">login</a>
</div>
<div class="footer"></div>
</div>
</body>
</html>
<?php
include("includes/db.php");

if(isset($_POST['submit'])){
$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];
$user_email = $_POST['user_email'];

if($user_name==''){
echo"<script>alert('please enter your name')</script>";
exit();

} 
if($user_pass==''){
echo"<script>alert('please enter your password')</script>";
exit();

} 
if($user_email==''){
echo"<script>alert('please enter your name')</script>";
exit();

} 

$check_email ="select * from users where user_email='$user_email'";

$run = mysqli_query($con,$check_email);
if(mysqli_num_rows($run)>0){

echo"<script>alert('Email $user_email is already exits in our database!')</script>";
exit();
} 

 $submit="insert into users(user_name,user_pass,user_email) values('$user_name','$user_pass','$user_email')";

$run_product = mysqli_query($con, $submit);

if ($run_product){

echo"<script>window.open('insert_products.php','_self')</script>";


}


}



?>