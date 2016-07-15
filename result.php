<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>comparebazzar</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style/style.css" media="all" />

</head>

    <!--main container-->
 <div class="main_wrapper">  
   <!--heder-->	  
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
	
	
   </ul>
 
      </div>
	  
	   <!-- content -->     
	  
	  
	   <div class="content_wrapper">
		
		<div id="left_sidebar">
	        
	  <div id="sidebar_title"> categories </div>
	      <ul id="cats">
	           <?php 
			   getCat();
			    ?>  
	           
	     </ul>
	  </div>
	        </div>
	
   
        <?php
		
		getCatPro();
		getBrandPro();
		getCityPro();
		getRbrand();
		getRkeyword();
		getRcity();
		
           ?>
		   
		   
		   
	
	 
		
		</div>
    
	 
	
	  
	 
	   <div class="footer">
            
       
						<div class="col-md-3 footer-grid about-info">
							<a href="#"><img src="images/heder3.jpg" title="Auto wala" /></a>
                                                       
						</div>
		<div class="col-md-8 footer-grid about-info">
							
                    <p style="float: right;">Address: C-9 near proffesssor<br>
                                                            colony rdvv pachpedi jabalpur<br>
                                                           contact: 918989738466 ,8109824477. <br>
                                                           Email: pathakprashant840@gmail.com
                                                        </p>
						</div>	
	 
</div>




<body>
</body>
</html>
