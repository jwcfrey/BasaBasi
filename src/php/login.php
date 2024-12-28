<?php
    session_start();
    include_once "config.php";

    // Check if email and password are set in the POST request
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if(!empty($email) && !empty($password)) {
            // let's check if user entered email & password match to the database
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
            if (mysqli_num_rows($sql) > 0) { // if user credentials match
                $row = mysqli_fetch_assoc($sql);
                $status = "Online";
                // updating user status to active now if user login successfully
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2) {
                    $_SESSION['unique_id'] = $row['unique_id']; // using this session we use user unique_id in other PHP files
                    echo "success";
                }
            } else {
                echo "Email atau Password salah";
            }
        } else {
            echo "Maaf email atau password harus diisi";
        }
    } else {
        echo "Email dan Password harus diisi ya";
    } 
?>
