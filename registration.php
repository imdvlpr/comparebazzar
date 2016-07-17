<?php

include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>register here</title>
        
        <?php
        include("header.php");
        ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    </head>
    <body>
        <div class="nav">  <?php
        include("navbar.php");
        ?>
        </div>
        
        
        <div class="content_wrapper" >

<form method = "post" action="registration.php" enctype="multipart/form-data">
      
	 
	 
       
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
        
        <div class="foot">  <?php
        include("footer.php");
        ?>

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