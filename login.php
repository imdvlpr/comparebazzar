<?php
session_start ();
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
    window.location = "http://comparebazzar.com/mlogin.php";
  }
  //-->
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>login here</title>
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
	<li class="active" style="float:right"><a href="users/regitration.php"><span class="glyphicon glyphicon-user"></span>Create An Account</a></li>
	<li class="active" style="float:right"><a href="users/regitration.php"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
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
	 
	 <a href="insert_products.php">
	<button type="button" class="btn btn-primary btn-lg" style="float:right;margin-top:2px;"><span class="glyphicon glyphicon-shopping-cart"></span> submit a free ad</button></a>
	
	
<a href="registation.php"><button type="button" class="btn btn-warning btn-lg " style="float:right"><span class="glyphicon glyphicon-user"></span>Create An Account</button></a>

<div class="content_wrapper" >
<form method = "post" action="login.php" enctype="multipart/form-data">
      
	 
       
  <table class="table table-hover"  width="300px">
	  <tbody align="center">
	  <tr align="center"><td colspan="2"><h2> Login to account </h2></td></tr>
	   
       <tr>
	   <td align="right"><label for="title"><h4>user Email :</h4></label></td>
	   <td>
	   <input type="text" name="user_email" class="form-control" >
 
	   </td>
	   </tr>
	   <tr>
	   <td align="right"><label for="title"><h4>user Password :</h4></label></td>
	   <td>
	   <input type="password" name="user_pass" class="form-control" >
 
	   </td>
	   </tr>
	   <tr align="center">
	   <td colspan="2">
	  <input type="submit" class="btn btn-info" name="login" value="login" />
	  
	   </td>
	   </tr>

  </tbody>
  </table>
  
  </form>
<center><font color="#000000" size="5"> Not registered yet ?</font><a href="registation.php"> Sign up here</a>
</div>
<div class="footer"></div>
</div>
</body>
</html>
<?php
include("includes/db.php");

if(isset($_POST['login'])){

$user_pass = $_POST['user_pass'];
$user_email = $_POST['user_email'];

$check_user = "select * from users where user_pass='$user_pass' AND user_email='$user_email'";

$run = mysqli_query($con,$check_user);

if(mysqli_num_rows($run)>0){
$_SESSION['user_email']=$user_email;

echo"<script>window.open('insert_products.php','_self')</script>";

}

else{

echo"<script>alert('your password or email is incorrect')</script>";

}


}





?>