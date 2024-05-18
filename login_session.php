<?php
session_start();

// Fungsi untuk membersihkan input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = $password = "";
$usernameErr = $passwordErr = "";
$loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["u"])) {
            $usernameErr = "Masukkan username";
        } else {
            $username = bersihkan_input($_POST["u"]);
        }
        if (empty($_POST["p"])) {
            $passwordErr = "Masukkan password";
        } else {
            $password = bersihkan_input($_POST["p"]);
        }

        // Ganti dengan kode otentikasi sesungguhnya
        if ($username === 'eldaa' && $password === '24') {
            $_SESSION['username'] = $username;
            header("Location: halaman_beranda.php");
            exit;
        } else {
            throw new Exception("Username atau password salah");
        }
    } catch (Exception $e) {
        $loginErr = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-size: smaller;
        }
    </style>
</head>
<body bgcolor="PapayaWhip">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u">
        <span class="error"><?php echo $usernameErr;?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error"><?php echo $passwordErr;?></span>
        <br><br>
        
        <span class="error"><?php echo $loginErr;?></span>
        <br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
