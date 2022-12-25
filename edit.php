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
$product_ID = $_POST['product_ID'];
$data = $_POST['data'];
$new_data = $_POST['new_data'];
echo "Changing ".$data." ";
echo "to                        ".$new_data;
$sql = "UPDATE `items` SET `$data` = '$new_data' WHERE `items`.`product_ID` = '$product_ID'";
if(mysqli_query($conn, $sql)){
            echo "<h3>Data Changed successfully.
                </h3>";

            
        } else{
            echo "No Product found for the given Product ID"
                . mysqli_error($conn);
        }
mysqli_close($conn);
?>