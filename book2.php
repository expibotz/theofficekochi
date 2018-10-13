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
$frm = "Contact Page - Book Now";

$data = "INSERT INTO book (email,message,name,phone,location,interest,frm) VALUES ('$email','$message','$name','$phone','$location','$interest','$frm')";

mysql_query($data) or die("Error: ".mysql_error());


header("Location: http://theofficekochi.com/contact.php"); 
?>