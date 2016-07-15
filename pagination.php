<?php
/**
 * @link: http://www.Awcore.com/dev
 */
    //connect to the database
    include_once ('db.php'); 
    //get the function
    include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 2;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`products`";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Pagination</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/pagination.css" rel="stylesheet" type="text/javascript" />
	<link href="css/grey.css" rel="stylesheet" type="text/css" />
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

<body>

    <div class="records round">
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
            <div class="record round">
			<?php echo"
	    
	     <div id='single_product'>
		 
		<h3 style='text-align:center;'>$pro_title
         city:$pro_city</h3>
		<h4 style='text-align:right;'> RS $pro_price</h4>
		 <img src='admin_area/product_images/$pro_image' height='100' width='180' ><br />
	 <a href='details.php?pro_id=$pro_id'><h4 style='text-align:right;'>details</h4></a>
		 
	 
	 </div>
	 ";   ?></div>
        <?php    
            }
        ?>
    </div>

<?php
	echo pagination($statement,$limit,$page);
?>

</body>
</html>