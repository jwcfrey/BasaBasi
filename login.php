<?php
session_start();
if (isset($_SESSION['unique_id'])) { //if user is logged in
    header("location: users.php");
}
?>
<?php include_once "./src/php/header.php"; ?>

<body>
    <div class="cursor-target">
    <div class="wrapper">
        <section class="form login">
        <header>Basa<span id="basiSpan"></span></header>
            <form action="login.php">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Masukkan Email</label>
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="field input">
                    <label>Masukkan Kata Sandi</label>
                    <input type="password" name="password" placeholder="Kata Sandi" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Masuk">
                </div>
            </form>
            <div class="link">Kamu belum punya akun? <a href="signup.php">Yuk daftar disini</a></div>
        </section>
    </div>
        <div class="backhome">
                <a href="index.php" class="back-icon"><i class="fas fa-arrow-left"></i><h2>Kembali ke Homepage</h2></a>
        </div>
    </div>
    <script src="./src/js/login.js"></script>
    <script src="./src/js/typingAnimation.js"></script>
    <script src="./src/js/circleCursor.js"></script>
</body>

</html>