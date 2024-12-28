<?php 
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if($conn) {
        echo "" . mysqli_connect_error();
    }

?>