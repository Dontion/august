<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <center><h2>Berhasil Logout</h2>kamu akan dialihkan kembali ke halaman login dalam 2 detik</center>
    <?php
} else {
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <center><h2>Gagal Logout</h2>Silahkan login terlebih dahulu<br/><br/>kamu akan dialihkan kembali ke halaman login dalam 2 detik</center>
    <?php
}
?>
</body>
</html>