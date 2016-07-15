<?php
$db = mysqli_connect("localhost","root","","comparebazzar");

function getPro(){
                   global $db;
		   if(!isset($_GET['cat'])){
		
		if(!isset($_GET['brand'])){
				   
       $get_product = "select * from products order by rand() LIMIT 0,6";
	   $run_product = mysqli_query ($db,$get_product);
   
	while ($row_product= mysqli_fetch_array($run_product)){
     
	 $pro_id = $row_product['product_id'];
	    
         $pro_title=$row_product['product_title']; 
	
	 $pro_cat=$row_product['cat_id']; 
	 
	 $pro_brand=$row_product['brand_id'];
	 
	 $pro_city=$row_product['city_name'];
	 
	 $pro_desc=$row_product['product_desc'];
	 
	 $pro_price=$row_product['product_price']; 
	 
	 $pro_image=$row_product['product_img1']; 
	 
	 echo"
	    <div id='single_product'>
		 
		<a href='details_1.php?pro_id=$pro_id'><h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3></a>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details_1.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";                  
   }

       }
  }

}


function getCatPro(){
                   global $db;
		   if(isset($_GET['cat'])){
		
		 $cat_id= $_GET['cat'];
				   
       $get_cat_pro = "select * from products where cat_id='$cat_id'";
	   $run_cat_pro = mysqli_query ($db,$get_cat_pro);
	   
	   $count = mysqli_num_rows($run_cat_pro);
	   if($count==0){
	   echo"<h2> No product found in this category </h2>";
	   
	   }
   
	while ($row_cat_pro= mysqli_fetch_array($run_cat_pro)){
     
	 $pro_id = $row_cat_pro['product_id'];
	    
     $pro_title=$row_cat_pro['product_title']; 
	
	 $pro_cat=$row_cat_pro['cat_id']; 
	 
	 $pro_brand=$row_cat_pro['brand_id'];
	 
	 $pro_city=$row_cat_pro['city_name'];
	 
	 $pro_desc=$row_cat_pro['product_desc'];
	 
	 $pro_price=$row_cat_pro['product_price']; 
	 
	 $pro_image=$row_cat_pro['product_img1']; 
	 
	 echo"
	    
	     <div id='single_product'>
		 
		<a href='details_1.php?pro_id=$pro_id'><h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3></a>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details_1.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";                 
   }

       }
  

}
	
function getBrandPro(){
                   global $db;
		   if(isset($_GET['brand'])){
		
		 $brand_id= $_GET['brand'];
		 		   
       $get_brand_pro = "select * from products where brand_id='$brand_id'";
	   $run_brand_pro = mysqli_query ($db,$get_brand_pro);
	   
	  
	while ($row_brand_pro= mysqli_fetch_array($run_brand_pro)){
     
	 $pro_id = $row_brand_pro['product_id'];
	    
     $pro_title=$row_brand_pro['product_title']; 
	
	 $pro_cat=$row_brand_pro['cat_id']; 
	 
	 $pro_brand=$row_brand_pro['brand_id'];
	 
	 $pro_city=$row_brand_pro['city_name'];
	 
	 $pro_desc=$row_brand_pro['product_desc'];
	 
	 $pro_price=$row_brand_pro['product_price']; 
	 
	 $pro_image=$row_brand_pro['product_img1']; 
	 
	 echo"
	    
	     <div id='single_product'>
		 
		<a href='details_1.php?pro_id=$pro_id'><h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3></a>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details_1.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";                   
   }

       }
  

}	
	
	
function getCityPro(){
                   global $db;
		   if(isset($_GET['city'])){
		
		 $city_id= $_GET['city'];
				   
       $get_city_pro = "select * from products where city_id='$city_id'";
	   $run_city_pro = mysqli_query ($db,$get_city_pro);
	   
	   $count = mysqli_num_rows($run_city_pro);
	   if($count==0){
	   echo"<h2> No product found in this category </h2>";
	   
	   }
   
	while ($row_city_pro= mysqli_fetch_array($run_city_pro)){
     
	 $pro_id = $row_city_pro['product_id'];
	    
     $pro_title=$row_city_pro['product_title']; 
	
	 $pro_cat=$row_city_pro['cat_id']; 
	 
	 $pro_brand=$row_city_pro['brand_id'];
	 
	 $pro_city=$row_city_pro['city_name'];
	 
	 $pro_desc=$row_city_pro['product_desc'];
	 
	 $pro_price=$row_city_pro['product_price']; 
	 
	 $pro_image=$row_city_pro['product_img1']; 
	 
	 echo"
	    
	    <div id='single_product'>
		 
		<a href='details_1.php?pro_id=$pro_id'><h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3></a>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details_1.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";                 
   }

       }
  

}
	
// short cat brand	 
function getBrands(){
       
               global $db;
   $get_brands = "select * from brands";
	$run_brands = mysqli_query($db,$get_brands);
   
	while ($row_brands=mysqli_fetch_array($run_brands)){
     
	 $brand_id = $row_brands['brand_id'];
	    
     $brand_title=$row_brands['brand_title']; 
	 
	 echo"<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
  }

}


function getCat() { 
                  global $db;

$get_cats = "select * from categories";
	$run_cats = mysqli_query($db,$get_cats);
   
	while ($row_cats=mysqli_fetch_array($run_cats)){
     
	 $cat_id = $row_cats['cat_id'];
	    
     $cat_title=$row_cats['cat_title']; 
	 
	 echo"<li><a href='result.php?cat=$cat_id'>$cat_title</a></li>";
  }




}

function getCity() {
                     global $db;
        $get_cities = "select * from cities";
	$run_cities = mysqli_query($db,$get_cities);
   
	while ($row_city=mysqli_fetch_array($run_cities)){
     
	 $city_id = $row_city['city_id'];
	    
     $city_name=$row_city['city_name']; 
	 $city_state=$row_city['city_state'];
	 
	echo"<option value='result.php?city=$city_id'>$city_name </option> ";
	 
	
  }





}
function getmCity() {
                     global $db;
        $get_cities = "select * from cities";
	$run_cities = mysqli_query($db,$get_cities);
   
	while ($row_city=mysqli_fetch_array($run_cities)){
     
	 $city_id = $row_city['city_id'];
	    
     $city_name=$row_city['city_name']; 
	 $city_state=$row_city['city_state'];
	 
	echo"<option value='m-result.php?city=$city_id'>$city_name </option> ";
	 
	
  }





}


//result

function getRbrand() {
       global $db;
  if (isset($_GET['search'])){
	  
	    $user_brand = $_GET['user_query'];
	  $get_product = "select * from products where brand_id like '%$user_brand%'";
	   $run_product = mysqli_query ($db,$get_product);
   
	while ($row_product= mysqli_fetch_array($run_product)){
     
	 $pro_id = $row_product['product_id'];
	    
     $pro_title=$row_product['product_title']; 
	
	 $pro_cat=$row_product['cat_id']; 
	 
	 $pro_brand=$row_product['brand_id'];
	 
	 $pro_city=$row_product['city_name'];
	 
	 $pro_desc=$row_product['product_desc'];
	 
	 $pro_price=$row_product['product_price']; 
	 
	 $pro_image=$row_product['product_img1']; 
	 
	 echo"
	    
	    <div id='single_product'>
		 
		<a href='details_1.php?pro_id=$pro_id'><h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3></a>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details_1.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";                   
   }
    
	
	  }



}



function getRkeyword() {
       global $db;
  if (isset($_GET['search'])){
	  
	   $user_keyword = $_GET['user_query'];
	  
	  $get_product = "select * from products where product_keyword like '%$user_keyword%'";
	  
	   $run_product = mysqli_query ($db,$get_product);
   
	while ($row_product= mysqli_fetch_array($run_product)){
     
	 $pro_id = $row_product['product_id'];
	    
     $pro_title=$row_product['product_title']; 
	
	 $pro_cat=$row_product['cat_id']; 
	 
	 $pro_brand=$row_product['brand_id'];
	 
	 $pro_city=$row_product['city_name'];
	 
	 $pro_desc=$row_product['product_desc'];
	 
	 $pro_price=$row_product['product_price']; 
	 
	 $pro_image=$row_product['product_img1']; 
	 
	 echo"
	    
	     <div id='single_product'>
		 
		<a href='details_1.php?pro_id=$pro_id'><h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3></a>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details_1.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";                  
   }
    
	
	  }



}

function getRcity() {
       global $db;
  if (isset($_GET['search'])){
	  
	   $city_name = $_GET['user_query'];
	  
	  $get_product = "select * from products where city_name like '%$city_name%'";
	  
	   $run_product = mysqli_query ($db,$get_product);
   
	while ($row_product= mysqli_fetch_array($run_product)){
     
	 $pro_id = $row_product['product_id'];
	    
     $pro_title=$row_product['product_title']; 
	
	 $pro_cat=$row_product['cat_id']; 
	 
	 $pro_brand=$row_product['brand_id'];
	 
	 $pro_city=$row_product['city_name'];
	 
	 $pro_desc=$row_product['product_desc'];
	 
	 $pro_price=$row_product['product_price']; 
	 
	 $pro_image=$row_product['product_img1']; 
	 
	 echo"
	    
	    <div id='single_product'>
		 
		<a href='details_1.php?pro_id=$pro_id'><h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3></a>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details_1.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";               
   }
    
	
	  }



}







	
?>