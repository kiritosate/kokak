<?php 
    $s_name = "sql6.freemysqlhosting.net";
    $username = "sql6473242";
    $password = "2GQBJqmYGT";
    $db_nam = "sql6473242";

    $conn = new mysqli($s_name, $username, $password, $db_nam);

    $sql = 'SELECT * FROM member';

    $data = mysqli_query($conn, $sql);
?> 