<?php 
if(!isset($_SESSION)){
	session_start();	
}
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($con, "habit");
mysqli_query($con,"SET CHARACTER SET UTF8");

?>
<!doctype html>
<html>
<head>
<!-- Disse tre ting skal være øverst på siden, JQuery Mobile biblioteket skal ligge nederst-->
       	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Habit Rabbit</title>
</head>