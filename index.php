<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
     
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="google-site-verification" content="UvppbWoZV0Mlwa5SqyyO3yJDO5TYDcrf3r97snOWi7U" />
<link rel="icon" href="images/heder3.jpg"  alt="comparebazzar-logo"type="image/gif" sizes="16x16">
<title>Buy and sell free classified ads  |comparebazzar</title>
<meta name="description" content="comparebazzar offers free  classified ads in India.comparebazzar provides a simple solution to the complications involved in selling, buying, trading,organizing, and meeting people near you." />


<meta charset="utf-8">
<link rel="stylesheet" href="style/style.css" media="all" />

	<!-- the CSS for Smooth Div Scroll -->
	<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  
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

        
        <script type="text/javascript">

alert("Hi.. welcome you at comparebazzar. Right now we are only woking for location jabalpur");



</script>
    
        
        
</head>


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
	  
	   
	   
	    <ul class="nav nav-tabs">
    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> H o m e</a></li>
     <li class=""><a href="all_products.php"><span class="glyphicon glyphicon-product"></span>P R O D U C T S</a></li>
   
 <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">C A T E G O R I E S <span class="caret"></span></a>
     
        <ul class="dropdown-menu">
         <?php getCat(); ?>                       
      
	  </ul>
    </li>
   
 
	<li class="active" style="float:right"><a href="registation.php" title="post free ads"><span class="glyphicon glyphicon-user"></span>Create An Account</a></li>
	<li class="active" style="float:right"><a href="login.php"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
   </ul>
   
  
	

  <div class="content_wrapper"> 
   
   <div id="makeMeScrollable">
       <img src="images/how-get-customers2.png" height="350px" width="600px"alt="Demo image" id="field">
		  <img src="images/comparebazzar3.jpg" height="350px" width="600px"alt="Demo image" id="field">
		    <img src="images/comparebazzar2.jpg" height="350px" width="600px"alt="Demo image" id="field">
			<img src="images/comparebazzar4.jpg" height="350px" width="600px"alt="Demo image" id="field">
			<img src="images/customer.jpg" height="350px" width="600px"alt="Demo image" id="field">
		 </div> 
		
		
		 <a href="insert_products.php">
	<button type="button" class="btn btn-primary btn-lg" style="float:right;margin-top:2px;"><span class="glyphicon glyphicon-shopping-cart"></span> submit a free ad</button></a>
	

		 
		 <div class="row-fluid" style="text-align:center" >
		
		 <label for="sel1"><h4><span class="glyphicon glyphicon-map-marker"></span>Select cities :</h4></label>
           <select class="selectpicker"  action="result.php" name="user_query" data-live-search="true" onChange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
	  
        <option>select your city</option>
        
		<?php  getCity(); ?>     
       
      </select>
         
	    
	   
	   </div>
	    <table width="400px" border="1 px"  border="solid black">
  <tr>
        <td> <a href="result.php?cat=1"><img src="images/mobile_logo.jpg" alt="Buy and sell mobile" ="90px" width="90px" /> 
       <h4>MOBILES</h4></a></td>
   <td><a href="result.php?cat=2"> <img src="images/Tablet-logo.png" alt="Buy and sell tablet"height="90px" width="90px" />
       <h4>&nbsp;TABLET</h4></a></td>;


      <td><a href="result.php?cat=3"><img src="images/camera-logo.png" alt="Buy and sell camera"height="90px" width="90px" />
      &nbsp; <h4>CAMERA</h4></a></td>
    <td><a href="result.php?cat=4"><img src="images/laptop-logo.png" alt="Buy and sell laptop" height="90px" width="90px" />
      <h4>LAPTOP</h4></a></td>
  </tr>
  <tr>
    <td> <a href="result.php?cat=5"><img src="images/videogame-logo.png" alt="free classified videogame"height="90px" width="90px" />
      <h4> GAMES</h4></a></td>
    <td> <a href="result.php?cat=6"><img src="images/car-logo.png" alt="free classified car"height="90px" width="90px" />
      <h4>&nbsp;&nbsp;&nbsp; &nbsp;  CARS</h4></a></td>
    <td> <a href="result.php?cat=7"><img src="images/motor-logo.jpg" alt="free classified motor"height="90px" width="90px" />
      <h4>&nbsp; &nbsp; BIKES</h4></a></td>
    <td> <a href="result.php?cat=8"><img src="images/bycycle-logo.png" alt="free classified bycycle"height="90px" width="90px" />
      <h4>&nbsp;BICYCLE</h4></a></td>
  </tr>
  <tr>
    <td> <a href="result.php?cat=9"><img src="images/scooter-logo.png" alt="Buy and sell scooter"height="90px" width="90px" />
      <h4>SCOOTER</h4></a></td>
    <td> <a href="result.php?cat=10"><img src="images/fridge-logo.jpg" alt="Buy and sell fridge"height="90px" width="90px" />
      <h4>FRIDGES</h4></a></td>
    <td> <a href="result.php?cat=11"><img src="images/home-logo.jpg" alt="Buy and sell homeapplinces" height="90px" width="90px" />
      <h4>APPLIENCE</h4></a></td>
    <td> <a href="result.php?cat=12"><img src="images/animal-logo.png" alt="Buy and sell animals"height="90px" width="90px" />
      <h4>ANIMALS</h4></a></td>
  </tr>
  <tr>
     <td> <a href="result.php?cat=13"><img src="images/books-logo.png" alt="books"height="90px" width="90px" />
      <h4>Book & Magazine</h4></a></td>
    
  </tr>
</table>
 
	</div>	 
		 
<table class="table table-hover"  width="300px">
    <div class="section-head text-center">
						<h3><span class="frist"> </span>GET IN TOUCH<span class="second"> </span></h3>
						<p> send us your valuable feedback. what should we have more to do to improve our services . or send us mail </p>
					</div>
	  <tbody align="center">
	  <form>
	   <td align="right"><label for="title"><h4>subject:</h4></label></td>
	   <td>
               <input type="text" name="sub" class="form-control" placeholder="write your subject here"  required>
 
	   </td>
	   </tr>
           
           
	   <tr>
	   <td align="right"><label for="title"><h4>Email :</h4></label></td>
	   <td>
               <input type="text" name="email" class="form-control" placeholder="write your email address" required="" >
 
	   </td>
	   </tr>
         
           <tr>
               <td align="right"><label for="title"><h4>Message</h4></label></td>
	   
                   
          <td>
              <textarea placeholder="Message here" rows="8"class="form-control"name="message" required /> </textarea><br>
          </td>
              
          </tr>
	   <tr align="center">
	   <td colspan="2">
	  <input type="submit" class="btn btn-info" name="mail" value="Send Message" />
	  
	   </td>
	   </tr>
     </form>
  </tbody>
  </table>		  

						<?php  
                                                
                                                if(isset($_GET['mail'])){
                                                    
                                                    $email =$_GET['email'];
                                                   
   ini_set("sendmail_from", "$email");  
   $to = "support@getrikshaw.com";//change receiver address  
   $subject = $_GET['sub'];   
   $message = $_GET['message']; 
   $header = "From:$email \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "<script> alert('message send')</script>";  
   }else{  
     echo "<script> alert(' sorry message not send')</script>";  
   } 
   
                                                }
?>      
					</div>	 
	 
	 
	

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
	
	<div class="footer">
            
            
            
            
        </div>
</div>

  

</body>
</html>
