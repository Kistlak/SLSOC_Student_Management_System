<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "new";

$id = "";
$fname = "";
$lname = "";
$nic = "";
$slsocid = "";
$adone = "";
$adtwo = "";
$city = "";
$country = "";
$num = "";
$email = "";
$username = "";
$pw = "";
$gender = "";
$year = "";
$month = "";
$date = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
	$posts[3] = $_POST['nic'];
	$posts[4] = $_POST['slsocid'];
	$posts[5] = $_POST['adone'];
	$posts[6] = $_POST['adtwo'];
	$posts[7] = $_POST['city'];
	$posts[8] = $_POST['country'];
	$posts[9] = $_POST['num'];
    $posts[10] = $_POST['email'];
	$posts[11] = $_POST['username'];
	$posts[12] = $_POST['pw'];
	$posts[13] = $_POST['gender'];
	$posts[14] = $_POST['year'];
	$posts[15] = $_POST['month'];
	$posts[16] = $_POST['date'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM stureg WHERE id = $data[0]";

    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
				$nic = $row['nic'];
				$slsocid = $row['slsocid'];
				$adone = $row['adone'];
				$adtwo = $row['adtwo'];
				$city = $row['city'];
				$country = $row['country'];
				$num = $row['num'];
                $email = $row['email'];
				$username = $row['username'];
				$pw = $row['pw'];
				$gender = $row['gender'];
				$year = $row['year'];
				$month = $row['month'];
				$date = $row['date'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `stureg`(`fname`, `lname`, `nic`,`slsocid`,`adone`,`adtwo`,`city`,`country`,`num`,`email`,`username`,`pw`,`gender`,`year`,`month`,`date`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);

        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted !!';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `stureg` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `stureg` SET `fname`='$data[1]',`lname`='$data[2]',`nic`='$data[3]',`slsocid`='$data[4]',`adone`='$data[5]',`adtwo`='$data[6]',`city`='$data[7]',`country`='$data[8]',`num`='$data[9]',`email`='$data[10]',`username`='$data[11]',`pw`='$data[12]',`gender`='$data[13]',`year`='$data[14]',`month`='$data[15]',`date`=$data[15] WHERE `id` = $data[0]";
    try{
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated !!';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}

?>


<!DOCTYPE Html>
<html>
<title>Sri Lanka School Of Computing</title>
<head>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="icon" href="SLSOC.jpg" type="image/gif" sizes="16x16">
<link rel="stylesheet" type="text/css" href="homecss.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body  {
    background-color: #e3e7f0;
	height:auto;
	width:1200px;
	margin-left:75px;
}

.content
{
	height:auto;
	margin-left:0px;
	margin-bottom:0px;
	width:1200px;
	background-color: #FFFFFF;
}

.about{
	margin-left:50px;
	margin-right:50px;
	font-family: Times New Roman;
	line-height: 180%;
	font-size:135%;
	text-align: left;
	color:#353c47;
}

p span {
   color: white;
   line-height: 300%;
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.5);
   padding: 8px;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=username], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=id], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 250px;
    background-color: #002147;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size: 15px;
	font-weight: bold;
}

input[type=submit]:hover {
    background-color: #8B008B;
}

.form{
	text-align:left;
	margin-left:50px;
	margin-right:50px;
}

.req{
	color:red;
}

</style>

<!-- Start Of Back To Top -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" >
var scrolltotop={
setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
controlHTML: '<img src="http://4.bp.blogspot.com/-FF9tEBUa6Lk/UtpgnHSpEaI/AAAAAAAACVA/-CrIj2AigCQ/s1600/Back+To+Top+-+1.png"/>',
controlattrs: {offsetx:5, offsety:5},
anchorkeyword: '#top',
state: {isvisible:false, shouldvisible:false},
scrollup:function(){
if (!this.cssfixedsupport)
this.$control.css({opacity:0})
var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
if (typeof dest=="string" && jQuery('#'+dest).length==1)
dest=jQuery('#'+dest).offset().top
else
dest=0
this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
},
keepfixed:function(){
var $window=jQuery(window)
var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
this.$control.css({left:controlx+'px', top:controly+'px'})
},
togglecontrol:function(){
var scrolltop=jQuery(window).scrollTop()
if (!this.cssfixedsupport)
this.keepfixed()
this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
if (this.state.shouldvisible && !this.state.isvisible){
this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
this.state.isvisible=true
}
else if (this.state.shouldvisible==false && this.state.isvisible){
this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
this.state.isvisible=false
}
},
init:function(){
jQuery(document).ready(function($){
var mainobj=scrolltotop
var iebrws=document.all
mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" &&
window.XMLHttpRequest
mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
.css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety,
right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
.attr({title:'Scroll Back to Top'})
.click(function(){mainobj.scrollup(); return false})
.appendTo('body')
if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='')
mainobj.$control.css({width:mainobj.$control.width()})
mainobj.togglecontrol()
$('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
mainobj.scrollup()
return false
})
$(window).bind('scroll resize', function(e){
mainobj.togglecontrol()
})
})
}
}
scrolltotop.init()
</script> <!-- End Of Back To Top -->

</head>

<body>
<div class="content">

<div id="container">

<div id ="header">
<center><a href="home.php"><img src="SLSOCBannerStuReg.jpg" alt="SLSOC_Logo" width="1200px"></a></center>


<ul>
  <li><a class="active" href="home.php">Home</a></li>

 <li class="dropdown">
    <a href="#" class="dropbtn">About US</a>
    <div class="dropdown-content">
      <a href="about.php">About SLSOC</a>
      <a href="lecturerpanel.php">Lecturer Panel</a>
    </div>
  </li>

 <li class="dropdown">
    <a href="#" class="dropbtn">Units</a>
    <div class="dropdown-content">
      <a href="se.php">Software Engineering</a>
      <a href="csec.php">Computer Security</a>
      <a href="cn.php">Computer Network</a>
	  <a href="csci.php">Computer Science</a>
    </div>
  </li>

  <li><a href="stulogin.php">Student Area</a></li>

 <li><a href="contact.php">Contact</a></li>

<li><a href="academic.php">Registrtion System</a></li>

<li style="float:right"><a href="apply.php" class="button" target="_blank">Apply Now</a></li>
</ul>

<!-- End Of The Top Part Of The Page -->

<p class="about">

<div class="form">


        <form action="stureg.php" method="post">
		<strong>

            ID : <input type="number" name="id" placeholder="" value="<?php echo $id;?>"><br><br>

            First Name : <input type="text" name="fname" placeholder="" value="<?php echo $fname;?>"><br><br>

            Last Name : <input type="text" name="lname" placeholder="" value="<?php echo $lname;?>"><br><br>

			NIC : <input type="text" name="nic" placeholder="" value="<?php echo $nic;?>"><br><br>

			SLSOC ID : <input type="text" name="slsocid" placeholder="" value="<?php echo $slsocid;?>"><br><br>

			Address Line 1 : <input type="text" name="adone" placeholder="" value="<?php echo $adone;?>"><br><br>

			Address Line 2 : <input type="text" name="adtwo" placeholder="" value="<?php echo $adtwo;?>"><br><br>

			City : <input type="text" name="city" placeholder="" value="<?php echo $city;?>"><br><br>

			Country : <input type="text" name="country" placeholder="" value="<?php echo $country;?>"><br><br>

			Mobile Number : <input type="text" name="num" placeholder="" value="<?php echo $num;?>"><br><br>

            Email : <input type="text" name="email" placeholder="" value="<?php echo $email;?>"><br><br>

			Username : <input type="text" name="username" placeholder="" value="<?php echo $username;?>"><br><br>

			Password : <input type="password" name="pw" placeholder="" value="<?php echo $pw;?>"><br><br>

			Gender : <input type="text" name="gender" placeholder="" value="<?php echo $gender;?>"><br><br>

			Year : <input type="text" name="year" placeholder="" value="<?php echo $year;?>"><br><br>

			Month : <input type="text" name="month" placeholder="" value="<?php echo $month;?>"><br><br>

			Date : <input type="text" name="date" placeholder="" value="<?php echo $date;?>"><br><br>

            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="Insert">&nbsp;&nbsp;&nbsp;

                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="Update">&nbsp;&nbsp;&nbsp;

                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="Delete">&nbsp;&nbsp;&nbsp;

                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="Search">
            </div>
			</strong>
        </form></div>

</p> <!-- End Of The P Class -->
</div>
<br>
<!-- Below Part Of The Page -->

<!-- <div id ="left"></div>
<div id ="right"></div>
<div id ="center"></div> -->

<div id ="footer">

<table width="1168px">
  <tr>
    <th><h2><u>Looking For Us</u></h2></th>
    <th><h2><u>Shortcuts</u></h2></th>
    <th><h2><u>Find Us On</u></h2></th>
  </tr>
  <tr>
    <td><p class="address">442 Galle Road<br>
Colombo 03<br>
Sri Lanka<br>

Tel: <a href="tel:+(94) 112565511">+(94) 112565511</a><br>
Fax: <a href="tel:+(94) 112565594">+(94) 112565594</a><br>
Email: <a href="mailto:info@slsoc.lk">info@SLSOC.lk</a></td>

<td>
<a href="home.php">* Home</a><br>
<a href="about.php">* About SLSOC</a><br>
<a href="stulogin.php">* Student System<br></a>
<a href="contact.php">* Contact Us<br></a>
</td>

<td><a href="http://www.facebook.com" target="_blank" class="icon-button facebook"><i class="icon-facebook"></i><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facebook</a><br>

<a href="https://twitter.com" target="_blank" class="icon-button twitter"><i class="icon-twitter"></i><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Twitter</a><br>

<a href="http://www.youtube.com" target="_blank" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Youtube</a>
</td>

  </tr>
</table></p>

<hr> <p class="copyright">
Copyright &copy; 2016 National School of Business Management.
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Designed & Developed By <a href="http://allsevennet.blogspot.com/" target="_blank">Fit Swift GaNg / Seven Net</a></p>

</div> <!-- End Of The Footer -->

</div> <!-- End Of ID Container CSS / White Background -->

</div> <!--End Of Body Class Content CSS-->
</body>
</html>
