<?php
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
       
    </head>
    <body class="homepage">
        <?php
      include("navbar.php");
        ?>
        
        
        <div class="content_wrapper">
		
		<div class="col-md-3 col-sm-8"id="left_sidebar" style="background:snow;">
	        
                    <div id="sidebar_title"style="font-size: 22px;font-family:Verdana, Arial, Helvetica, sans-serif;" > categories </div>
	      <ul id="cats" style=" color:#FFFFFF; font-size:16px;margin:5px">
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
		   
	
	 
		
		
    
	 
        
        
        
        
        
        <div class="foot"><?php include("footer.php") ?>
        
    </body>
</html>
