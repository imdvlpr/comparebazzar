<?php
include("includes/db.php");
include("functions/mobile.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="js/jquery.mobile.js" type="text/javascript"></script>
<link rel="stylesheet" href="style/mobile.css" type="text/css" media="all" />

</head>
<body>

<div data-role="page">
  <div data-role="header" style="height:auto; background-color:#33CCFF; background-color:">
  <img src="images/heder3.jpg" height="100px" width="75px" >
  <form method="get"style="float:right;"action="m-result.php" enctype="multipart/form-data">
     
        
        <input type="text" name="user_query" id="search" placeholder="write city name and product name...">
      
     <input type="submit" style="float:right; class="btn btn-default" name="search" value="search">
    </form> 
	<div data-role="navbar">
      <ul>
        <li><a href="m-home.php" ata-ajax="false"target="_blank" data-icon="home">Home</a></li>
        <li><a href="m-all-products.php" ata-ajax="false" data-icon="shop">All product</a></li>
        <li><a href="mlogin.php" ata-ajax="false"target="_blank"data-icon="user">login</a></li>
      </ul>
    </div>
  </div>

<a href="insert_products.php"data-icon=" shop" class="ui-btn" >Submit free ad</a>
 
  <div data-role="main" class="ui-content" style="background-color:;">
   
   
    <?php
		
		getCatPro();
		getBrandPro();
		getCityPro();
		getRbrand();
		getRkeyword();
		getRcity();
		
           ?>

            
   
 
	   
</div>
  
  
  <div data-role="footer" style="background-color:#33CCFF; height:150px;">
  <!-- START SOCIAL MEDIA WIDGET --><ul id="socialbar"><li id="facebook"><a target="_blank" href="http://www.facebook.com/comparebazzar"><IMG src="http://www.topproducerwebsite.com/images/site_defaults/generic/facebook.png"></a></li></ul><style>#socialbar img {border:0px;}#socialbar li img {width:48px; height:48px;}#socialbar li a:hover {position:relative;top:2px;}#socialbar{padding:0px;list-style: none outside none; margin:0px; position: static;}#socialbar li {display:inline;padding-right:2px;}#socialbar{width:180px;float:left;}</style><!-- END SOCIAL MEDIA WIDGET -->  
 
 <!-- START SOCIAL MEDIA WIDGET -->
 <ul id="socialbar"><li id="linkedin"><a target="_blank" href="https://in.linkedin.com/pub/compare-bazzar/106/53/104"><IMG src="http://www.topproducerwebsite.com/images/site_defaults/generic/linkedin.png"></a></li></ul><style>#socialbar img {border:0px;}#socialbar li img {width:48px; height:48px;}#socialbar li a:hover {position:relative;top:2px;}#socialbar{padding:0px;list-style: none outside none; margin:0px; position: static;}#socialbar li {display:inline;padding-right:2px;}#socialbar{width:180px;float:left;}</style><!-- END SOCIAL MEDIA WIDGET -->
  
 
 <h1>&copy;comparebazzar.com</h1>
  </div>
  
</div>

</body>
</html>
