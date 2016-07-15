<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>mobile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid" style="height:100px; background-image:url(../images/footer2.gif)">
    <div class="navbar-header">
     <a class="navbar-brand" href="#">
                 <img src="img/heder3.jpg" height="80px" >
            </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
</nav>
  
  <form method = "post" action="m_insert_product.php" enctype="multipart/form-data">
      
	 <div class="container" style="background-color:#CCCCCC">
	 
       
  <table class="table table-hover">
  <h2> UPLOAD YOUR PRODUCT </h2>
	  <tbody>
	  
	  <label for="title"><h4>Product Name :</h4></label>
	   <input type="text" name="product_title" class="form-control" >
        
		 <label for="sel1"><h4>user name:</h4></label>
	   <input type="text" name="user_name" class="form-control"/>
	  
<!--cities and state-->	   
	   
	   <label for="sel1"><h4>Select cities :</h4></label>
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
	<br>

	    <label for="sel1"><h4>mobile number  :</h4></label></td>
	   
	  <input type="number" class="form-control" name="user_num">
	  
	   
	   <!-- categories start-->
	    <label for="sel1"><h4>Product Categories :</h4></label>
	  
	    
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
	  
	   
	  
	   
	    <!--brand start-->
	   <label for="sel1"><h4>Product Brands :</h4></label>
	   
	   
	    <select class="selectpicker" data-live-search="true" name="product_brand">
	   
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
		
	  
	   
<!--cities and state-->	   
	   
	   <label for="sel1"><h4>Select cities :</h4></label>
	    <select class="selectpicker"  data-live-search="true" name="product_city">
		<option> state and city</option>
		<?php
    $get_cities = "select * from cities";
	$run_cities = mysqli_query($con,$get_cities);
   
	while ($row_city=mysqli_fetch_array($run_cities)){
     
	
	  $city_id =$row_city['city_id'];    
     $city_name =$row_city['city_name']; 
	 
	 
	echo"<option value='$city_id'>$city_name</option> ";
  }
   ?>           
		</select>
	   
	   <br>

	    <label for="sel1"><h4>upload image1 :</h4></label></td>
	   
	   <input type="file" name="product_img1" />
	  
	   
	    <label for="sel1"><h4>upload image2 :</h4></label>
	   <input type="file" name="product_img2" />
	   
	   
	    <label for="sel1"><h4>upload image3 :</h4></label>
	   <input type="file" name="product_img3" />
	   
	   
	    <label for="sel1"><h4>Product price :</h4></label>
	   <input type="number" name="product_price" class="form-control" >
	 
	   
	   
	   <label for="sel1"><h4>Product Discription :</h4> </label>
	   <textarea class="form-control custom-control" rows="6" name="product_desc" style="resize:none"></textarea> 
	    
		
		<label for="sel1"><h4>Product keyword :</h4></label>
	  <input type="text" name="product_keyword" class="form-control" >
	   
	  
	   
	   <input type="submit" class="btn btn-info" name="insert_product" value="insert product">
	  
	   
	   </tbody>
  </table>
</div>
	   </form>
	   </div>
	   
	   
	    <nav class="navbar navbar-inverse">
  <div class="container-fluid" style=" height:100px; background-image:url(../images/footer2.gif)">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
</nav>
</head>
<body>
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
 
  
  $insert_product = "insert into products (user_name,city_name,user_num,cat_id,brand_id,city_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keyword,status) values (
  '$user_name','$city_name','$user_num','$product_cat','$product_brand','$product_city',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keyword','$status')";
 
 $run_product = mysqli_query($con, $insert_product);

 if ($run_product){
 echo"<script>window.open('all_products.php','_self')</script>";
 }
 
 }
 
 }
 
 ?>