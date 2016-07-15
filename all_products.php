//import files here
<?php
 include_once ('includes/paginationdb.php'); 
    //get the function
    include_once ('function.php');
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 3;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`products`";
?>
<?php
include("includes/db.php");
include("functions/functions.php");
//connect to the database
   

    	
		?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="images/heder3.jpg" type="image/gif" sizes="16x16">
<title>all products,mobile phones,cars,motorcycle,computer</title>
<meta name="keywords" content="all products,mobile phones,cars,motorcycle,computer"><b></b>
<meta name="description" content="comparebazzar prodides you products like mobiles,motorcycle,coputers,video games, all home and kitchin appliences from people near you ." />
<meta name="robots" content="index, follow">

<meta property="og:title" content="all products,mobile phones,cars,motorcycle,computer"/>
					<meta property="og:description" content="comparebazzar prodides you products like mobiles,motorcycle,coputers,video games, all home and kitchin appliences from people near you."/>
					<meta property="fb:app_id" content="1536102286646296"/>
					<meta property="og:image" content="http:comparebazzar.com/images/heder3.jpg"/>
					<meta property="og:type" content="website"/>
					<meta property="og:url" content="http://comparebazzar.com"/>
					<meta property="og:site_name" content="comparebazzar.com"/>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style/style.css" media="all" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/pagination.css" rel="stylesheet" type="text/javascript" />
	<link href="css/red.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .records {
            width: 510px;
            margin: 5px;
            padding:2px 5px;
            border:1px solid #B6B6B6;
        }
        
        .record {
            color: #474747;
            margin: 5px 0;
            padding: 3px 5px;
        	background:#E6E6E6;  
            border: 1px solid #B6B6B6;
            cursor: pointer;
            letter-spacing: 2px;
        }
        .record:hover {
            background:#D3D2D2;
        }
        
        
        .round {
        	-moz-border-radius:8px;
        	-khtml-border-radius: 8px;
        	-webkit-border-radius: 8px;
        	border-radius:8px;    
        }    
        
        p.createdBy{
            padding:5px;
            width: 510px;
        	font-size:15px;
        	text-align:center;
        }
        p.createdBy a {color: #666666;text-decoration: none;}        
    </style>    
</head>

    <!--main container-->
 <div class="main_wrapper">  
   <!--heder-->	  
   <div class="header_wrapper">
	  <img src="images/heder3.jpg" alt="comparebazzar" height="100px"width="200px" style="float:left" />
	 
	
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
    <li class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span> H o m e</a></li>
    <li class="active"><a href="all_products.php"><span class="glyphicon glyphicon-home"></span> All products</a></li>
 <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">C A T E G O R I E S <span class="caret"></span></a>
     
        <ul class="dropdown-menu">
         <?php getCat(); ?>                       
      
	  </ul>
    </li>
   
 
	
	
 
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
            //show records
             $get_product = mysql_query("SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");
            
        	while ($row_product= mysql_fetch_array($get_product)) {
			 $pro_id = $row_product['product_id'];
	    
     $pro_title=$row_product['product_title']; 
	
	 $pro_cat=$row_product['cat_id']; 
	 
	 $pro_brand=$row_product['brand_id'];
	 
	 $pro_city=$row_product['city_name'];
	 
	 $pro_desc=$row_product['product_desc'];
	 
	 $pro_price=$row_product['product_price']; 
	 
	 $pro_image=$row_product['product_img1']; 
        ?>
            
			<?php echo"
	    
	     <div id='single_product'>
		 
		<a href='details_1.php?pro_id=$pro_id'><h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3></a>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details_1.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";   ?>
        <?php    
            }
        ?>
   

<?php
	echo pagination($statement,$limit,$page);
?>
	
	 
		
		</div>
    
	 
	
	<!--footer here-->  
	 
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
	
              <!--footer here-->  
</div>




<body>
</body>
</html>
