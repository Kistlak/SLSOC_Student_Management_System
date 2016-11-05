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

.lec{
	font-family: arial, sans-serif;
	line-height: 180%;
	font-size:105%;
	text-align: left;
	font-weight: 0;
	color:#002147;
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
<center><a href="home.php"><img src="SLSOCBannerBox.jpg" alt="SLSOC_Logo" width="1200px"></a></center>
</div>

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

<li style="float:right"><a href="apply.php" class="button" target="_blank">Apply Now</a></li>
</ul>

<!-- End Of The Top Part Of The Page -->

<p class="about">
<br>

<img src="SOC Woman.jpg" width="250px" height="250px" style="float:left"></img>
<h1 style="Font-Family:Times New Roman">&nbsp;&nbsp;&nbsp; Mrs. Shiyani Kahandagamage</h1>
<p class="about">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Professor of Software Engineering<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email - <a href="mailto:info@pro_se_slsoc.lk" style="color:blue">info@pro_se_slsoc.lk</a>
<br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="lecturerpanel.php" class="lec"> <-- Back To Lecturer Panel -- </a> 

</p> <!-- End Of The About Class -->
<br><br>

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
Copyright &copy; 2016 Sri Lanka School Of Computing - SLSOC.
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Designed & Developed By <a href="http://allsevennet.blogspot.com/" target="_blank">Fit Swift GaNg / Seven Net</a></p>

</div> <!-- End Of The Footer -->

</div> <!-- End Of ID Container CSS / White Background -->

</div> <!--End Of Body Class Content CSS-->
</body>
</html>