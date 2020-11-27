<?php

include "config.inc.php";

$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$sum = [$weight/(($height/100)**2)];

$sql = "INSERT INTO testbmi (name , height , weight , bmi) VALUES ('$name', '$height', '$weight' , '$sum')";


if (mysqli_query($conn, $sql)) {
  header('location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
