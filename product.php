<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PRODUCT</h1>
    <form action="product.php" method="post">
name:<input type="text" name="name"><br>
quantity:<input type="text" name="quantity"><br>
price:<input type="text" name="price"><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$database="Stock";
//connect to database
$db_connect=new mysqli($servername,$username,$password,$database);
if($db_connect){
    echo "database connected successfully" ."<br>";
}
else{
    echo " database failed to be connected "."<br>";
}
if(isset($_POST['submit'])){
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
    //inserting data into database
    $query="INSERT INTO `product`( `product_name`, `product-quantity`, `product_price`) VALUES ('$name','$quantity','$price')";
    $result=mysqli_query($db_connect,$query);
    if($result){
        echo"product recorded to database successfully"."<br>";
    }
    else{
        echo "product failed to be recorded to database"."<br>";
    }
}

?>
