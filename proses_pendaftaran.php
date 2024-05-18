<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body bgcolor="lightpink">
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        Selamat datang <b><?php echo $_POST["nama"]; ?></b><br>
        Nim : <?php echo $_POST["nim"]; ?><br>
        Email : <?php echo $_POST["email"]; ?><br>
        Tempat, tanggal lahir : <?php echo $_POST["tempat_lahir"]; ?> <?php echo $_POST["tanggal_lahir"]; ?><br>
        Alamat : <?php echo $_POST["alamat"]; ?><br>
        Gender : <?php echo $_POST["gender"]; ?><br>
<?php } 
    ?>
</body>
</html>
