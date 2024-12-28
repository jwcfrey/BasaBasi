<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$_SESSION['unique_id']}");
    $output = "";
    if(mysqli_num_rows($sql) == 0){
        $output .= "Tidak ada pengguna yang tersedia";
    } elseif(mysqli_num_rows($sql) > 0) {
        while($row = mysqli_fetch_array($sql)) {
            // Ambil pesan terakhir
            $sql2 = "SELECT * FROM messages 
                WHERE (incoming_msg_id = {$row['unique_id']} OR outgoing_msg_id = {$row['unique_id']}) 
                AND (outgoing_msg_id = {$outgoing_id} OR incoming_msg_id = {$outgoing_id}) 
                ORDER BY msg_id DESC LIMIT 1";
            $query2 = mysqli_query($conn, $sql2);

            if (!$query2) {
                echo "Error: " . mysqli_error($conn);
                continue;
            }

            $row2 = mysqli_fetch_assoc($query2);
            $result = $row2['msg'] ?? "Pesan belum tersedia";

            // trimming message if word are more than 20
            (strlen($result) > 20) ? $msg = substr($result, 0, 20) . '...' : $msg = $result;
            // adding 'You: ' before msg if the logged-in user sent the message
            $you = ($outgoing_id == ($row2['outgoing_msg_id'] ?? '')) ? "Anda: " : "";
            // check user is online or offline
            $offline = ($row['status'] === "Offline") ? "offline" : "";

            $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                            <div class="content">
                                <img src="./src/php/images/'. $row['img'] .'" alt="">
                                <div class="details">
                                    <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                                    <p>' .$you . $msg.'</p>
                                </div>
                            </div>
                            <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                        </a>';
        }
    }
    echo $output;
?>
