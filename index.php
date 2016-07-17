<?php

include("functions/functions.php");
?>
<html lang="en">
<head>
     
    <?php include("header.php") ?>
    <script src="js/jquery.js"></script>
	 <!-- the CSS for Smooth Div Scroll -->
	<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
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
</head><!--/head-->


<body class="homepage">

   <?php include("navbar.php") ?>
    
    
    <div id="makeMeScrollable">
       <img src="images/how-get-customers2.png" height="350px" width="600px"alt="Demo image" id="field">
		  <img src="images/comparebazzar3.jpg" height="350px" width="600px"alt="Demo image" id="field">
		    <img src="images/comparebazzar2.jpg" height="350px" width="600px"alt="Demo image" id="field">
			<img src="images/comparebazzar4.jpg" height="350px" width="600px"alt="Demo image" id="field">
			<img src="images/customer.jpg" height="350px" width="600px"alt="Demo image" id="field">
		 </div> 
    
    <section id="main-slider" class="no-margin">
        
    </section><!--/#main-slider-->
    
    <div>
        
       
<a href="insert_products.php">
	<button type="button" class="btn btn-primary btn-lg" ><span class="glyphicon glyphicon-shopping-cart"></span> submit ad</button>
</a>
    

        <a href="login.php">
	<button type="button" class="btn btn-primary btn-lg" ><span class="glyphicon glyphicon-user"></span> login</button>
</a>  
     
        <a href="registration.php">
	<button type="button" class="btn btn-primary btn-lg" ><span class="glyphicon glyphicon-user"></span>Register</button>
</a> 
       
     <form method="get" class="navbar-form navbar-right" action="result.php" enctype="multipart/form-data">
     <input type="text"  name="user_query"class="form-control" placeholder="Search">
     <input type="submit" class="btn btn-default" name="search" value="search">
 
     </form>


        
    </div>
    

    <section id="services" >
	   <div class="container">
           

            <div class="row">

                <div class="col-sm-6 col-md-4">
                   <a href="result.php?cat=1"> <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Mobiles</h3>
                            
                        </div>
                    </div>
                   </a>
                </div>

                <div class="col-sm-6 col-md-4">
                  <a href="result.php?cat=2">  <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive"src="images/services/services2.png" height="90px" width="90px" >
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Tablets</h3>
                            
                        </div>
                    </div>
                  </a>
                </div>

                <div class="col-sm-6 col-md-4">
                   <a href="result.php?cat=3">  <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png"height="90px" width="90px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">camera</h3>
                          
                        </div>
                    </div>
                   </a>
                </div>  

                <div class="col-sm-6 col-md-4">
                   <a href="result.php?cat=4">  <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png"height="90px" width="90px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Laptops</h3>
                            
                        </div>
                    </div>
                   </a>
                </div>

                <div class="col-sm-6 col-md-4">
                   <a href="result.php?cat=5">  <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png"height="90px" width="90px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Games</h3>
                           
                        </div>
                    </div>
                   </a>
                </div>

                <div class="col-sm-6 col-md-4">
                  <a href="result.php?cat=6">   <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services6.png"height="90px" width="90px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Cars</h3>
                           
                        </div>
                    </div>
                  </a>
                </div> 
                
              <div class="col-sm-6 col-md-4">
                  <a href="result.php?cat=7">   <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services7.jpg"height="90px" width="90px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Bikes</h3>
                           
                        </div>
                    </div>
                  </a>
                </div>   
                
            <div class="col-sm-6 col-md-4">
                  <a href="result.php?cat=8">   <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services8.png"height="90px" width="90px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Bicycle</h3>
                           
                        </div>
                    </div>
                  </a>
                </div> 
             <div class="col-sm-6 col-md-4">
                  <a href="result.php?cat=9">   <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services9.png"height="90px" width="90px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">scooter</h3>
                           
                        </div>
                    </div>
                  </a>
                </div>
                
                
                
               
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

   
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
                      

                          

    

    
    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>if you have further any problem about the web site you are free to call us +91 8989738466</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

      <?php include("footer.php") ?>
    <!--/#footer-->
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
    

   
  
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script> 
    
</body>
</html>