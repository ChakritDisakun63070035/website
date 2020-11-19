<?php
    $host = "izaac2.mysql.database.azure.com";
    $host_username = "izaac@izaac2";
    $host_password = "ZixZak1234";
    $host_db_name = "itflab";
    $conn = mysqli_init(); // 
    mysqli_real_connect($conn, $host, $host_username, $host_password, $host_db_name, 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    ?>