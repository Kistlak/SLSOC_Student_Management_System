<html>
<head>
<title>User Registration System</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>


<?php

error_reporting(E_ALL ^ E_DEPRECATED);

// 1. Create Database Connection
$connection = mysql_connect("mysql8.000webhost.com","a3697763_root","123456mail");
if(!$connection){
	die("Error Connection: ".mysql_error());

}

// 2. Select Database
mysql_select_db("a3697763_comment",$connection);

// 3. Perform database query
$sql = "INSERT INTO regform (fname,lname,adone,adtwo,city,country,num,email,gender,year,month,date) VALUES 
('$_POST[fname]','$_POST[lname]','$_POST[adone]','$_POST[adtwo]','$_POST[city]','$_POST[country]','$_POST[num]','$_POST[email]','$_POST[gender]','$_POST[year]','$_POST[month]','$_POST[date]')";

// 4.Use Returned Data
if(!mysql_query($sql,$connection)){
	die("Error Query: ".mysql_error());
}
echo " ".$_POST["fname"]." ".$_POST["lname"]." , You Have Successfully Registed !! :D <br><br>
Still Your Profile Is Creating , Plz Refreash After Got Your Confimation Message From Admin. <br><br>
Thank You !! :D <br><br>";

if($_POST["username"]=="kisalka" && $_POST["password"]=="123456")
	echo "* First Name - ".$_POST["fname"]." <br><br>
          * Last Name ".$_POST["lname"]." <br><br>
          * Address Line 1 - ".$_POST["lname"]." <br><br>
          * Address Line 2 - ".$_POST["lname"]." <br><br>
          * City - ".$_POST["lname"]." <br><br>
          * Country - ".$_POST["lname"]." <br><br>
          * Mobile Number - ".$_POST["lname"]." <br><br>
          * Email - ".$_POST["lname"]." <br><br>		
          * Your Username ".$_POST["username"]." <br><br>
          * Your Password ".$_POST["password"]." ";

// 5. Close Connection
mysql_close($connection);


?>

</body>
</html>