<?php  
    include "config.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <table class="table">
    <table border="1" style="width: 100%;">
        <tr>
           <table class="table table-dark table-hover">
           <th>Name</th>
           <th>Comment</th>
           <th>Action</th>
        </tr>
     <?php    
    $res = mysqli_query($conn, 'SELECT * FROM guestbook');
    while($Result = mysqli_fetch_array($res)){
    ?>
        <tr>
            <td><?=$Result['Name'];?></td>
            <td><?=$Result['Comment'];?></td>
            <td> <a href="delete.php?id=<?=$Result['ID'];?>"><button style=“backgroud-color: red;”>ลบ</button></a>
            <a href="form_edit.php?id=<?=$Result['ID'];?>"><button style=“backgroud-color: red;">แก้ไข</button></a></td>
        </tr>
    <?php 
    }
    ?>
    
    </table>
    <center>
        <a href="form.php"><button center>เพิ่ม</button></a>
    </center>
    <!-- <hr>
    <form action="insert.php" method="post" id="CommentForm">
        Name:<br>
        <input type="text" name="name" id="idName" placeholder="Enter Name"> <br>
        Comment:<br>
        <textarea rows="10" cols="20" name="comment" id="idComment" placeholder="Enter Comment"></textarea><br>
        Link:<br>
        <input type="text" name="limk" id="idLink" placeholder="Enter Link"> <br><br>
        <input type="submit" id="commentBtn">
    </form> -->
    
</body>
</html>
