<?php
include("includes/db.php");
include("functions/mobile.php");
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" href="images/heder3.jpg"  alt="comparebazzar-logo"type="image/gif" sizes="16x16">
<title>Buy and sell free classified ads  |comparebazzar</title>
<meta name="description" content="comparebazzar offers free  classified ads in India.comparebazzar provides a simple solution to the complications involved in selling, buying, trading,organizing, and meeting people near you." />
<!-- facebook share -->

<meta property="fb:admins" content="100000840939374" />
<meta property="og:title" content="Buy and sell free classified ads  |comparebazzar"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http:comparebazzar.com/images/heder3.jpg"/>
<meta property="og:url" content="http://comparebazzar.com"/>
<meta property="og:description" content="comparebazzar offers free  classified ads in India.comparebazzar provides a simple solution to the complications involved in selling, buying, trading,organizing, and meeting people near you."/>

<!-- twitter-->
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="http://comparebazzar.com/index.php">
<meta name="twitter:description" content="comparebazzar offers free  classified ads in India.comparebazzar provides a simple solution to the complications involved in selling, buying, trading,organizing, and meeting people near you">
<meta name="twitter:image" content="http:comparebazzar.com/images/heder3.jpg">

<!-- jquery -->
<meta name="google-site-verification" content="UvppbWoZV0Mlwa5SqyyO3yJDO5TYDcrf3r97snOWi7U" />
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style/style.css" media="all" />
<link rel="stylesheet" href="docsupport/style.css">
  <link rel="stylesheet" href="docsupport/prism.css">
  <link rel="stylesheet" href="style/chosen.css">
 <link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
  <style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
  </style>
  
 
	
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


 <!--main container-->
<div class="main_wrapper">  
   <!--heder-->	  
   <div class="header_wrapper">
	  <h1><img src="images/heder3.jpg" alt="COMPAREBAZZAR-LOGO"height="100px"width="200px" style="float:left" /></h1>
	 
	
  <div class="form-group">
    <form method="get" class="navbar-form navbar-right" action="result.php" enctype="multipart/form-data">
    <input type="text"  name="user_query"class="form-control" placeholder="write city name and product name">
     <input type="submit" class="btn btn-default" name="search" value="search">
 
  </form>
   </div>

	 
	  </div>
  <!--nav bar-->
	  
	   
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
   
 
	<li class="active" style="float:right"><a href="registation.php" title="post free ads"><span class="glyphicon glyphicon-user"></span>Create An Account</a></li>
	<li class="active" style="float:right"><a href="login.php"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
   </ul>
   
 
      </div>	  
   
   <div class="content_wrapper"> 
   
   <div id="makeMeScrollable">
		 <img src="images/bg3.jpg" height="350px" width="550px"alt="Demo image" id="field">
		  <img src="images/bg3.jpg" height="350px" width="550px"alt="Demo image" id="field">
		    <img src="images/bg3.jpg" height="350px" width="550px"alt="Demo image" id="field">
		 </div> 
   
  
   
     <a href="insert_products.php">
	<button type="button" class="btn btn-primary btn-lg" style="float:right;margin-top:2px;"><span class="glyphicon glyphicon-shopping-cart"></span> submit a free ad</button></a>
	

		 
		 <div class="row-fluid" style="text-align:center" >
		
		 <label for="sel1"><h4><span class="glyphicon glyphicon-map-marker"></span>Select cities :</h4></label>
           
          <select data-placeholder="Choose a Country..." class="chosen-select" style="width:400px; height:80px;" tabindex="4">
            <option value=""> SELECT YOUR CITY</option>
           <?php getmcity(); ?>
          </select>
       
	    
	   
	   </div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   

       <div data-role="footer"></div>

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
  
</div> 

     
	 

   <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
  <script src="chosen.proto.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
  document.observe('dom:loaded', function(evt) {
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text: "Oops, nothing found!"},
      '.chosen-select-width'     : {width: "95%"}
    }
    var results = [];
    for (var selector in config) {
      var elements = $$(selector);
      for (var i = 0; i < elements.length; i++) {
        results.push(new Chosen(elements[i],config[selector]));
      }
    }
    return results;
  });
  </script>

	
  


</body>
</html>
