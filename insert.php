<?php

include "config.inc.php";

$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "INSERT INTO guestbook (Name , Comment) VALUES ('$name', '$comment')";


if (mysqli_query($conn, $sql)) {
  header('location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>