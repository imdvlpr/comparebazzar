<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>comparebazzar</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style/style.css" media="all" />
	<!-- the CSS for Smooth Div Scroll -->
	<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
	
	<!-- Styles for my specific scrolling content -->
	<style type="text/css">

		#makeMeScrollable
		{
			width:100%;
			height: 350px;
			position: relative;
			background-color:#000000;
		}
		
		/* Replace the last selector for the type of element you have in
		   your scroller. If you have div's use #makeMeScrollable div.scrollableArea div,
		   if you have links use #makeMeScrollable div.scrollableArea a and so on. */
		#makeMeScrollable div.scrollableArea img
		{
			position: relative;
			float: left;
			margin: 0;
			padding: 0;
			/* If you don't want the images in the scroller to be selectable, try the following
			   block of code. It's just a nice feature that prevent the images from
			   accidentally becoming selected/inverted when the user interacts with the scroller. */
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
		}
	</style>

</head>

<body>

<div class="main_wrapper">  
  <div class="header_wrapper">
	  <img src="images/heder3.jpg" height="100px"width="200px" style="float:left" />
	 
	
  <div class="form-group">
     <form method="get" class="navbar-form navbar-right" action="result.php" enctype="multipart/form-data">
    <input type="text"  name="user_query"class="form-control" placeholder="Search">
     <input type="submit" class="btn btn-default" name="search" value="search">
 
  </form>
   </div>

	 
	  </div>
	  
	  <!--nav bar-->
	  
	   <div id="navbar">
	    <ul class="nav nav-tabs">
    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> H o m e</a></li>
   
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
	
	<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">C I T Y <span class="caret"></span></a>
     
        <ul class="dropdown-menu">
         <?php  getCity(); ?>                                             
      </ul>
    </li>
   </ul>
 
      </div>

   <?php
	if(isset($_GET['pro_id'])){
	$product_id= $_GET['pro_id'];
	  $get_product = "select * from products where product_id ='$product_id'";
	   $run_product = mysqli_query ($db,$get_product);
   
	while ($row_product= mysqli_fetch_array($run_product)){
     
	 $pro_id = $row_product['product_id'];
	    
     $pro_title=$row_product['product_title']; 
	 $pro_name=$row_product['user_name'];
	 $pro_num=$row_product['user_num'];
	 $pro_cat=$row_product['cat_id']; 
	 
	 $pro_brand=$row_product['brand_id'];
	 
	 $pro_city=$row_product['city_name'];
	 
	 $pro_desc=$row_product['product_desc'];
	 
	 $pro_price=$row_product['product_price']; 
	 
	 $pro_image1=$row_product['product_img1']; 
	 $pro_image2=$row_product['product_img2']; 
	 $pro_image3=$row_product['product_img3']; 
	 
	 echo"
	    
	    
		 
		<h2 style='text-align:center;'>$pro_title</h2>
		
		 <br>

		 <div id='makeMeScrollable'>
		 <img src='product_images/$pro_image1' height='350px' width='550px'alt='Demo image' id='field'>
		 <img src='product_images/$pro_image2' height='350px' width='550px'alt='Demo image' id='field' >
		 <img src='product_images/$pro_image3' height='350px' width='550px'alt='Demo image' id='field' >
		 </div>
		 
		 <div class='discription'>
		   <h2> product Discrition :- </h2>

		   <h3 style='text-align:center;'>$pro_desc</h3>
		 
		 
		 </div>
	    <div class='details'> 
		 <button type='button' class='btn btn-primary'><h3> RS $pro_price/-</h3></button>

         <h3 style=''><span class='glyphicon glyphicon-map-marker'></span>$pro_city</h3>
		  <h3 style=''><span class='glyphicon glyphicon-user'></span>$pro_name</h3>
		  <h3 style=''><span class='glyphicon glyphicon-phone-alt'></span> $pro_num</h3>
		 </div>
		 
		
		 
		 
		  
	 
	 
	 ";                  
   }
	 }
	 ?>   
	

	<!-- LOAD JAVASCRIPT LATE - JUST BEFORE THE BODY TAG 
	     That way the browser will have loaded the images
		 and will know the width of the images. No need to
		 specify the width in the CSS or inline. -->

	<!-- jQuery library - Please load it from Google API's -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

	<!-- jQuery UI (Custom Download containing only Widget and Effects Core)
	     You can make your own at: http://jqueryui.com/download -->
	<script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	
	<!-- Latest version (3.1.4) of jQuery Mouse Wheel by Brandon Aaron
	     You will find it here: https://github.com/brandonaaron/jquery-mousewheel -->
	<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>

	<!-- jQuery Kinectic (1.8.2) used for touch scrolling -->
	<!-- https://github.com/davetayls/jquery.kinetic/ -->
	<script src="js/jquery.kinetic.min.js" type="text/javascript"></script>

	<!-- Smooth Div Scroll 1.3 minified-->
	<script src="js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>

	<!-- If you want to look at the uncompressed version you find it at
	     js/jquery.smoothDivScroll-1.3.js -->

	<!-- Plugin initialization -->
	<script type="text/javascript">
		// Initialize the plugin with no custom options
		$(document).ready(function () {
			// None of the options are set
			$("div#makeMeScrollable").smoothDivScroll({
				autoScrollingMode: "onStart"
			});
		});
	</script>
	<div class="footer"></div>
</div>
</body>
</html>
