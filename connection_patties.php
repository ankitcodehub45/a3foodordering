<?php
$fullname = $_POST['fullname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$address = $_POST['address'];

// Database connection
$conn = new mysqli('localhost','root','','a3');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into patties(fullname,contact,email,address) values(?, ?, ?, ?)");
    $stmt->bind_param("siss",$fullname,$contact , $email,$address );
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>