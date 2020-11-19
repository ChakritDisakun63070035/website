<?php

include "config.inc.php";

$id = $_POST['id'];
$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "UPDATE guestbook SET Name = '$name',Comment = '$comment' WHERE ID = '$id'";


if (mysqli_query($conn, $sql)) {
  header('location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>