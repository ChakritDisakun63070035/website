<?php
    include "config.inc.php";
    $id = $_GET['id'];
    $res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID = '$id'");
    $Result = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<center>
<body>
    <style>
          body {
              background-color: #000;
              color: #eb8c4a;
               }   
     </style>
<form action = "edit.php" method = "post" id="CommentForm" >
    <input type="hidden" value="<?=$id;?>" name="id">
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name" value="<?=$Result['Name'];?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"><?=$Result['Comment'];?></textarea><br>  
    <input type="submit" id="commentBtn">
 </form>
</body>
</center>
</html>
