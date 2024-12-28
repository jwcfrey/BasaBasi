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
            <section class="form signup">
                <header>Basa<span id="basiSpan"></span></header>
                <form action="/src/php/signup.php" method="POST" enctype="multipart/form-data">
                    <div class="error-txt">This is an error message!</div>
                    <div class="name-details">
                        <div class="field input name-input">
                            <label>Masukkan Nama</label>
                            <input type="text" name="fname" placeholder="Nama Depan" required>
                        </div>
                        <div class="field input name-input">
                            <label>‎ </label>
                            <input type="text" name="lname" placeholder="Nama Belakang" required>
                        </div>
                    </div>
                    <div class="field input">
                        <label>Masukkan Email</label>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="field input">
                        <label>Masukkan Kata Sandi</label>
                        <input type="password" name="password" placeholder="Kata Sandi" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Pilih Gambar</label>
                        <div class="file-input-container">
                            <input type="file" name="image" id="file" required>
                            <label for="file" class="custom-file-label">Upload Profil</label>
                        </div>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Daftar">
                    </div>
                </form>
                <div class="link">Kamu sudah punya akun? <a href="login.php">Klik untuk masuk</a></div>
            </section>
        </div>
        <div class="backhome">
                <a href="index.php" class="back-icon"><i class="fas fa-arrow-left"></i><h2>Kembali ke Homepage</h2></a>
        </div>
    </div>
    <script src="./src/js/typingAnimation.js"></script>
    <script src="./src/js/circleCursor.js"></script>
    <script src="./src/js/signup.js"></script>
</body>

</html>