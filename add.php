<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	die("<h3>Connection failed :</h3>" . mysqli_connect_error());
}
echo "<h3>Connected successfully</h3>";
$product_name = $_POST['product_name'];
$product_ID = $_POST['product_ID'];
$stock_available = $_POST['stock_available'];
$cost_per_unit = $_POST['cost_per_unit'];

//inserting values
$sql = "INSERT INTO items (product_name, product_ID, stock_available, cost_per_unit) VALUES ('$product_name', '$product_ID', '$stock_available', '$cost_per_unit')";
echo "<br>"."Product ID:";
echo $product_ID;
echo "<br>"."Product Name :";
echo $product_name;
echo "<br>"."Unit Price : ₹";
echo $cost_per_unit;
echo "<br>"."Stocks Available :";
echo $stock_available;


if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored successfully.
                </h3>";

            
        } else{
            echo "No Product found for the given Product ID "
                . mysqli_error($conn);
        }
mysqli_close($conn);
?>