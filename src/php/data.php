<?php

while($row = mysqli_fetch_assoc($sql)) {
    $sql2 = "SELECT * FROM messages 
        WHERE (incoming_msg_id = {$row['unique_id']} OR outgoing_msg_id = {$row['unique_id']}) 
        AND (outgoing_msg_id = {$outgoing_id} OR incoming_msg_id = {$outgoing_id}) 
        ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);

    if (!$query2) {
        echo "Error in query: " . mysqli_error($conn);
        continue;
    }

    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0) {
        $result = $row2['msg'];
    } else {
        $result = "Chat kontak belum tersedia";
    }

    // trimming message if word are more than 28
    (strlen($result) > 20) ? $msg = substr($result, 0, 20) . '...' : $msg = $result;
    // adding you: text before msg if login id send msg
    $you = ($outgoing_id == ($row2['outgoing_msg_id'] ?? '')) ? "You: " : "";
    //check user is online or offline
    ($row['status'] == "Offline") ? $offline = "offline" : $offline = "";

    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                        <img src="./src/php/images/' . $row['img'] .'" alt="">
                        <div class="details">
                            <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                            <p>' .$you . $msg.'</p>
                        </div>
                    </div>
                    <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
                </a>';
}

?>