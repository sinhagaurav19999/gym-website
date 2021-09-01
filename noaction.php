<?php
$Name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$locality = $_POST['locality'];
$email = $_POST['email'];
$number = $_POST['number'];

// Database Connection
$server= "localhost";
$username="root";
$password= "";
$db="gym";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
$sql = 'select * from costumer details';
if($con->connect_error){
    die('connection failed : '.$conn->connect_error);
    else{
        $stmt = $con->prepare("select * from costumer details where name=?, age=?, gender=?, locality=? email=?, phone=?");
        $stmt->bind_param("sisssi", $name, $age, $gender, $locality, $email, $phone);
        $stmt->execute();
        echo "Form Submitted";
        $stmt->close();
        $conn->close();
    }

?>