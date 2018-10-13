<?PHP 
$host="localhost";
$sql="SELECT * FROM 'cup'";
$username="theoffice";  
$password="Expibotz@123"; 
$database="theoffice";  

$con=mysql_connect("$host", "$username", "$password");
if(! $con)
{
die('Connection failed'.mysql_error());
}
mysql_select_db($database,$con);

$cemail = $_POST['cemail'];

$cname = $_POST['cname'];

$cmessage = $_POST['cmessage'];


$frm = "Contact Page - Enquire Now";

$data = "INSERT INTO cup (cemail,cmessage,cname,frm) VALUES ('$cemail','$cmessage','$cname','$frm')";

mysql_query($data) or die("Error: ".mysql_error());


header("Location: http://theofficekochi.com/contact.php"); 
?>