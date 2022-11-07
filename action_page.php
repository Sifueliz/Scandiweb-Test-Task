<?php
session_start();
  $conn = mysqli_connect("localhost:3308", "root", "", "product add/cancel");
  


if (!$conn){
echo 'Connection error: ' .mysqli_connect_error();
}

// Taking all 5 values from the form data(input)
$pname =  $_REQUEST['pname'];
$SKU = $_REQUEST['SKU'];
$Price =  $_REQUEST['Price'];
$Size =  $_REQUEST['Size'];
$Weight =  $_REQUEST['Weight'];
$Height =  $_REQUEST['Height'];
$Width =  $_REQUEST['Width'];
$Length =  $_REQUEST['Length'];
// Performing insert query execution
// here our table name is college

$sql = "INSERT INTO DVD  VALUES ('$SKU', '$pname','$Price', '$Size')";


if(mysqli_query($conn, $sql)){
  echo "<h3>data stored in a database successfully."
      . " Please browse your localhost php my admin"
      . " to view the updated data</h3>";

  
} else{
  echo "ERROR: Hush! Sorry $sql. "
      . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>