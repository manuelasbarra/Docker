<?php echo "Hello world!";
$host='database';
$user='test_user';
$password='test_password';
$database='my_test_database';
$conn= new mysqli($host,$user,$password,$database);
if ($conn->connect_error){
  die("connection error". $conn->connect_error);
}else{
  echo "connected";
}
?>
