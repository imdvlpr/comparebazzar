<?php
session_start ();
if (!$_SESSION['user_email']){
header ("location: login.php");
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<font color="#FF0000" size="5">
<?php echo $_SESSION['user_email'];?>
</font>
<a href="logout.php"> logout</a> 
<body>
</body>
</html>
