<?php  
    include "config.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color the table, table rows or table cells. The classes that can be used are: .table-primary, .table-success, .table-info, .table-warning, .table-danger, .table-active, .table-secondary, .table-light and .table-dark:</p>
    <table border="1" style="width: 100%;">
        <tr>
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
            <td> <a href="delete.php?id=<?=$Result['ID'];?>"><button>ลบ</button></a>
            <a href="form_edit.php?id=<?=$Result['ID'];?>"><button>แก้ไข</button></a></td>
        </tr>
    <?php 
    }
    ?>
    
    </table>
    <a href="form.php"><button>เพิ่ม</button></a>
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