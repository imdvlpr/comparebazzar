<?php
session_start ();
if (!$_SESSION['user_email']){
header ("location:login.php");
}
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>upload product</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php
        include("header.php");
        ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>



</head>

<body>
 <?php
        include("navbar.php");
        ?>
<div class="main_wrapper">

 
        
	
   <a href="logout.php" style="float:right"> <button type="submit" class="btn btn-info">LOGOUT</button></a>
 <font color="#000000" size="3" style="float:right;"> welcome
(<?php echo $_SESSION['user_email'];?>)
</font>

   
 
 
      </div>  
	  
	  
	  <!--content wrapper--> 
 <div class="content_wrapper">
 <form method = "post" action="insert_products.php" enctype="multipart/form-data">
      
	
	 
       
  <table class="table table-hover">
	  <tbody>
	  <tr align="center"><td colspan="2"><h2> UPLOAD YOUR PRODUCT </h2></td></tr>
	   <tr>
	   <td align="right"><label for="title"><h4>Product Name :</h4></label></td>
	   <td>
	   <input type="text" name="product_title" class="form-control" >
 
	   </td>
	   </tr>
	     
	   <tr>
	   <td align="right"> <label for="sel1"><h4>user name:</h4></label></td>
	   <td>
	   <input type="text" name="user_name" class="form-control"/>
	   </td>
	   </tr>
<!--cities and state-->	   
	   
	   <tr>
	    <td align="right"> <label for="sel1"><h4>Select cities :</h4></label></td>
	   <td>
	     <select class="selectpicker"   data-live-search="true" name="city_name" >
		<option>state and city  </option>
		
		<?php
		
    $get_cities = "select * from cities";
	$run_cities = mysqli_query($con,$get_cities);
   
	while ($row_city=mysqli_fetch_array($run_cities)){
     
	
	    
     $city_name =$row_city['city_name']; 
	 
	 
	echo"<option value='$city_name'>$city_name</option> ";
  }
   ?>           
		</select>
	   </td>
	   </tr>
	   
	   
	   <tr>
	   <td align="right"> <label for="sel1"><h4>mobile number  :</h4></label></td>
	   <td>
	  <input type="number" class="form-control" name="user_num">
	   </td>
	   </tr>
	   <!-- categories start-->
	   <tr>
	   <td align="right"> <label for="sel1"><h4>Product Categories :</h4></label></td>
	   <td>
	    
	   <div class="form-group">
  
  <select class="form-control" name="product_cat">
	   <option> select from categories</option>
	    <?php
    $get_cats = "select * from categories";
	$run_cats = mysqli_query($con,$get_cats);
   
	while ($row_cats=mysqli_fetch_array($run_cats)){
     
	 $cat_id = $row_cats['cat_id'];
	    
     $cat_title=$row_cats['cat_title']; 
	 
	 echo"<option value='$cat_id'>$cat_title</option> ";
  }
   ?>             
	   </select>
	   </div>
	   </td>
	   </tr>
	   
	  
	   
	    <!--brand start-->
	   <tr>
	   <td align="right"> <label for="sel1"><h4>Product Brands:</h4></label></td>
	   <td>
	   
	    <select class="selectpicker"  data-live-search="true" name="product_brand">
	   
		<option> select from brands</option>
		<?php
    $get_brands = "select * from brands";
	$run_brands = mysqli_query($con,$get_brands);
   
	while ($row_brands=mysqli_fetch_array($run_brands)){
     
	 $brand_id = $row_brands['brand_id'];
	    
     $brand_title=$row_brands['brand_title']; 
	 
	echo"<option value='$brand_id'>$brand_title</option> ";
  }
   ?>           
		</select>
		
	   </td>
	   </tr>
	   
<!--cities and state-->	   
	   
	   <tr>
	    <td align="right"> <label for="sel1"><h4>Select cities :</h4></label></td>
	   <td>
	    <select class="selectpicker"   data-live-search="true" name="product_city">
		<option>state and city  </option>
		
		<?php
		
    $get_cities = "select * from cities";
	$run_cities = mysqli_query($con,$get_cities);
   
	while ($row_city=mysqli_fetch_array($run_cities)){
     
	 $city_id = $row_city['city_id'];
	    
     $city_name=$row_city['city_name']; 
	
	 
	echo"<option value='$city_id'>$city_name</option> ";
  }
   ?>           
		</select>
	   </td>
	   </tr>
	   
	   
	   <tr>
	  <td align="right"> <label for="sel1"><h4>upload image1 :</h4></label></td>
	   <td>
	   <input type="file" name="product_img1" />
	   </td>
	   </tr>
	   
	   <tr>
	   <td align="right"> <label for="sel1"><h4>upload image2 :</h4></label></td>
	   <td>
	   <input type="file" name="product_img2" />
	   </td>
	   </tr>
	   
	   <tr>
	   <td align="right"> <label for="sel1"><h4>upload image3 :</h4></label></td>
	   <td>
	   <input type="file" name="product_img3" />
	   </td>
	   </tr>
	   
	   <tr>
	   <td align="right"> <label for="sel1"><h4>Product price :</h4></label></td>
	   <td>
	   <input type="int" name="product_price" />
	   </td>
	   </tr>
	   
	   
	   <tr>
	   <td align="right"> <label for="sel1"><h4>Product Discription :</h4> </label></td>
	   <td>
	   <textarea name="product_desc" cols="40" rows="10"></textarea>
	   </td>
	   </tr>
	   
	   <tr>
	   <td align="right"> <label for="sel1"><h4>Product keyword :</h4></label></td>
	   <td>
	  <input type="text" class="form-control" name="product_keyword" placeholder="product name and city">
	   </td>
	   </tr>
	   <tr align="center">
	   <td colspan="2">
	  <a href="info.php" ><input type="submit" class="btn btn-info" name="insert_product" value="insert product"></a>
	  
	   </td>
	   </tr>
	   
	   </tbody>
  </table>
</div>
	   </form>
	   </div>
	
	   
	<div class="foot" >
        <?php 
        
        include("footer.php");?>    
            
        </div>
	  
 </body>
 </html>
<?php
 
 //for text
 if(isset($_POST['insert_product']))
 {
  $product_title = $_POST['product_title'];
  $user_name = $_POST['user_name'];
$city_name = $_POST['city_name'];
$user_num = $_POST['user_num'];
  $product_cat = $_POST['product_cat'];
  $product_brand = $_POST['product_brand'];
  $product_city = $_POST['product_city'];
  $product_price = $_POST['product_price'];
  $product_desc = $_POST['product_desc'];
  $status =  'on' ;
  $product_keyword = $_POST['product_keyword'];
 
 //for image
 $product_img1 = $_FILES['product_img1']['name'];
 $product_img2 = $_FILES['product_img2']['name'];
 $product_img3 = $_FILES['product_img3']['name'];
 
 //for temp
 $temp_name1 = $_FILES['product_img1']['tmp_name'];
 $temp_name2 = $_FILES['product_img2']['tmp_name'];
 $temp_name3 = $_FILES['product_img3']['tmp_name'];
 if($user_name==''){
echo"<script>alert('please enter your name')</script>";
exit();

} 
if($city_name==''){
echo"<script>alert('please enter your city')</script>";
exit();

} 

if($user_num==''){
echo"<script>alert('please enter your number')</script>";
exit();

} 
 
  if ($product_title =='' OR $product_cat== '' OR $product_brand =='' OR $product_city=='' OR $product_img1=='' OR $product_price=='' OR $product_desc=='' OR $product_keyword ==''){
   echo"<script>alert('please fill all the fields')</script>";
   exit ();
 }
 
 
 else{
 
  move_uploaded_file($temp_name1,"product_images/$product_img1");
  move_uploaded_file($temp_name2,"product_images/$product_img2");
  move_uploaded_file($temp_name3,"product_images/$product_img3");
 
  
  $insert_product = "insert into products (user_name,city_name,user_num,cat_id,brand_id,city_id,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keyword,status) values (
  '$user_name','$city_name','$user_num','$product_cat','$product_brand','$product_city','$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keyword','$status')";
 
 $run_product = mysqli_query($con, $insert_product);

 if ($run_product){
 echo"<script>window.open('all-products.php','_self')</script>";
 }
 
 }
 
 }
 
 ?>
