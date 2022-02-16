<?php 
    require_once "conn.php";
    $result = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_REQUEST['username'])){
            $username = stripcslashes($_REQUEST['username']);
            $link = stripslashes($_REQUEST['link']);
            $query = "INSERT into `member` (username, link) VALUES ('$username', '$link')";

            $result = mysqli_query($conn, $query);
            header("Location: home.php");
        }
    }
?>