<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname="travel";

$conn = new mysqli($server,$username,$password,$dbname);

if($conn->connect_error){
    die("server not connected");
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

//$sql="INSERT INTO 'trip' ('sr','name','age','gender','email','phone','other') VALUES (NULL,'$name','$age','$gender','$email','$phone','$desc');"
$sql="INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

if($conn->query($sql)==True)
{
    //echo "new record added";
}
else
{
    echo "ERROR";
}
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       <h1> Welcome to the trip of US</h1>
       <p> Enter your details to confirm your seat</p>
       <form action="index.php" method="post">
       <input type="text" name="name" id="name" placeholder="Enter your name">
       <input type="text" name="age" id="age" placeholder="Enter your age">
       <input type="text" name="gender" id="gender" placeholder="Enter your gender">
       <input type="email" name="email" id="email" placeholder="Enter your email">
       <input type="number" name="phone" id="phone" placeholder="Enter your phone number">
       <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your suggestion"></textarea>
       <button class="btn">Submit</button>
      
    </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>