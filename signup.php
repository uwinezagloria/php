<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SignUp</h1>
    <form action="signup.php" method="post"> 
FirstName:<input type="text" name="fname" placeholder="enter your firstname"><br>
LastName:<input type="text" name="lname"  placeholder="enter your last name"><br>
Email:<input type="text" name="Email" placeholder="enter your offical email"><br>
Password:<input type="text" name="password" placeholder="set strong password"><br>
Role:<select name="role">
    <option>admin</option>
    <option>stockManager</option>
    <option>client</option>
</select><br>
<input type="submit" name="signup" value="Sign Up">
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$database="stock";
//connecting to database
$database=new mysqli($servername,$username,$password,$database);
if($database){
    echo "database connected"."<br>";
}
else{
    echo "database not connected"."<br>";
}
//inserting data to database
if(isset($_POST['signup'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['Email'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);//hashing password
    $role=$_POST['role'];
    $query="INSERT INTO `user`(`First_Name`, `Last_Name`, `Email`, `Password`, `Role`) VALUES ('$fname','$lname','$email','$password','$role')";
$result=mysqli_query($database,$query);
if($result){
    echo "user created successfully"."<br>";
}
else{
    echo "failed to record user to database"."<br>";
}
}
?>