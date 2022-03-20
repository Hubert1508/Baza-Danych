<?php

    require("connect.php");

    $user = $_POST['user'];
    $pass = $_POST['password'];
    
    $sql = "INSERT INTO users(id, user, password) VALUES ('','$user','$pass')";

    $result = $connect->query($sql);

?>