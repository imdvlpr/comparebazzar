<?php
session_start ();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <?php
        include("header.php");
        ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    </head>
    <body class="homepage">
        <div class="nav">  <?php
        include("navbar.php");
        ?>
        </div>
<div class="content_wrapper" >
<form method = "post" action="login.php" enctype="multipart/form-data">
      
	 
       
  <table class="table table-hover"  width="300px">
	  <tbody align="center">
	  <tr align="center"><td colspan="2"><h2> Login to account </h2></td></tr>
	   
       <tr>
	   <td align="right"><label for="title"><h4>Email :</h4></label></td>
	   <td>
	   <input type="text" name="user_email" class="form-control" >
 
	   </td>
	   </tr>
	   <tr>
	   <td align="right"><label for="title"><h4>Password :</h4></label></td>
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
<center><font color="#000000" size="5"> Not registered yet ?</font><a href="registration.php"> Sign up here</a>
</div>

<div class="foot">  <?php
        include("footer.php");
        ?>

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
