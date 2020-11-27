<?php

include "config.inc.php";

$id = $_GET['id'];
$sql = "DELETE  FROM testbmi WHERE ID = '$id'";


if (mysqli_query($conn, $sql)) {
header('location: index.php');
 } else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
