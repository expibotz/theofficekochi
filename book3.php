<?PHP 
$host="localhost";
$sql="SELECT * FROM 'book'";
$username="theoffice";  
$password="Expibotz@123"; 
$database="theoffice";  

$con=mysql_connect("$host", "$username", "$password");
if(! $con)
{
die('Connection failed'.mysql_error());
}
mysql_select_db($database,$con);

$email = $_POST['email'];

$name = $_POST['name'];
$interest = $_POST['interest'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$frm = "Mobile App - Book Now";

$data = "INSERT INTO book (email,message,name,phone,location,interest,frm) VALUES ('$email','$message','$name','$phone','$location','$interest','$frm')";

mysql_query($data) or die("Error: ".mysql_error());

?>
<!DOCTYPE html>
<!--HTML5 doctype-->
<html style="background-color:#fff;">

<head>

   
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="shortcut icon" href="img/fav.png">
<link rel="icon" href="img/fav.png">
<TITLE>The Office - Virtual offices in kochi</TITLE>
<META NAME="author" CONTENT="Expibotz Technologies Pvt Ltd">
<META NAME="subject" CONTENT="Virtual offices in kochi">
<META NAME="Description" CONTENT="This Business centre in Cochin offers you an access to a wide array of facilities ">
<META NAME="Classification" CONTENT="This Business centre in Cochin offers you an access to a wide array of facilities and privileges designed to help you enhance your business efficiency">
<META NAME="Keywords" CONTENT="Business centre in kochi,Furnished offices in kochi,Furnished spaces in kochi,Virtual offices in kochi">
<META NAME="Geography" CONTENT=" Jos Annexe, Jos Junction, Opp. Bhima Jewellery, M. G. Road, Cochin ">
<META NAME="Language" CONTENT="English">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="PUBLIC">
<META NAME="Designer" CONTENT="Expibotz Technologies Pvt Ltd">
<META NAME="Publisher" CONTENT="Expibotz">
<META NAME="distribution" CONTENT="Global">
<META NAME="Robots" CONTENT="INDEX,FOLLOW">
<META NAME="city" CONTENT="Kochi">
<META NAME="country" CONTENT="India">

	<!-- Facebook Share Components -->
	
<meta property="og:image"       content="http://theofficekochi.com/img/logo.png"/>
<meta property="og:title"       content="THE OFFICE - Business Centre in Kochi"/>
<meta property="og:description" content="This Business centre in Cochin offers you an access to a wide array of facilities and privileges designed to help you enhance your business efficiency and image in the most cost-effective manner by providing you with the best Serviced Office in Kerala, India."/>
<meta property="og:url"         content="http://theofficekochi.com"/>
<meta property="og:site_name"   content="THE OFFICE"/>
<meta property="og:type"        content="website"/>
<script src="js/modernizr.custom.65274.js"></script>
	
<style>.kiddd{color:#fff;font-weight:700;}</style>
	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href='css/bootstrap.css' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet" type='text/css'>
	<link href="css/dl-menu.css" rel="stylesheet" type='text/css'>
	<link href="css/magnific-popup.css" rel="stylesheet" type='text/css'>
	<link href="css/superfish.css" rel="stylesheet" type='text/css'>

	<link href="css/metcreative.audio/nouislider.fox.css" rel="stylesheet" type="text/css">
	<link href="css/metcreative.audio/nouislider.space.css" rel="stylesheet" type="text/css">

	<!--[if IE 7]><link type='text/css' rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
	<link href='css/custom.css' rel='stylesheet' type='text/css'>
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700" />
	<![endif]-->
	<!--[if lte IE 8]><script src="js/lte-ie9.js"></script><![endif]-->


	<!-- Scripts -->
	<script src="js/jquery.js"></script>

	<!--[if (gte IE 6)&(lte IE 8)]><script src="js/selectivizr-min.js"></script><![endif]-->
	<script src="js/retina.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/caroufredsel.js"></script>
	<script src="js/fullscreenr.js"></script>

	<script src="js/jquery.nouislider.min.js"></script>
	<script src="js/metcreative.html5audio.js"></script>

	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/nicescroll.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/jquery.knob.js"></script>
	<script src="js/mobile_detector.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/custom.js"></script>
    <style>.nase{color:black}</style>
	<style id="colorChanges" type="text/css"></style>

    <link rel="stylesheet" type="text/css" href="../www/appframework/build/icons.css" />
    <link rel="stylesheet" type="text/css" href="../www/appframework/build/af.ui.css" />


     <script type="text/javascript" charset="utf-8" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.3/fastclick.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../www/appframework/build/appframework.ui.js"></script>

</head>


<body class="" data-smooth-scrolling="1" align="center" style="background-color:#fff;margin-top:10px;">

  <div class="view" id="mainview">
        

        <div class="pages">
        <strong align="center" style="margin-top:200px;>Booking Successful! We will connect you soon!!</strong>
</div></div>
         <!--Tab View Pages-->
        <div class="panel" data-title="Home" id="main" data-selected="true" style="background: ##663300;
background-image: url('http://www.theofficekochi.com/img/bgtxt.png');">

    </div>
  

</body>

</html>