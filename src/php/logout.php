<?php 
    session_start();
    if (isset($_SESSION['unique_id'])) {
        include_once "config.php";
        
        // Get user_id from URL parameter and sanitize it
        if (isset($_GET['user_id']) && !empty($_GET['user_id'])) {
            $logout_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            
            $status = "Offline";
            // Update status user to offline 
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = '{$logout_id}'");

            if ($sql) {
                // Delete session and redirect to login.php
                session_unset();
                session_destroy();
                header("Location: /BasaBasi/login.php");
                exit();
            } else {
                echo "Sepertinya ada masalah, silahkan refresh halaman";
            }
        } else {
            header("Location: ./users.php");
            exit();
        }
    } else {
        header("Location: /Basi/login.php");
        exit();
    }
?>
