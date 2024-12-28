<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }
?>

<?php include_once "./src/php/header.php"; ?> 
<body>
    <div class="cursor-target">
    <div class="wrapper">
        <section class="users">
            <header>
                <?php 
                    include_once "./src/php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <img src="./src/php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="./src/php/logout.php?user_id=<?php echo $row['unique_id']; ?>" class="logout">
                    <i class="fa-solid fa-power-off"></i>
                </a>
                </header>
            <div class="search">
                <span class="text">Klik tombol search untuk mencari akun</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <div class="contact">

                </div>
            </div>
        </section>
    </div>
    </div>
    <script src="./src/js/typingAnimation.js"></script>
    <script src="./src/js/circleCursor.js"></script>
    <script src="./src/js/users.js"></script>
</body>

</html>