?php

$servername = "localhost";
$username = "root";
$password  = "";
$dbname = "test1";

$con = new mysqli($servername,$username,$password,$dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['phone'];
$add = $_POST['address'];

$sql = "insert into trip(name,email,phone,address)values('$name','$email','$pass','$add')";

if($con->query($sql))
echo "success";



?>