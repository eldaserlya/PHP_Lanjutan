<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Komentar</title>
</head>
<body bgcolor="AliceBlue">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama : <input type="text" name="name"> <br>
    E-mail : <input type="email" name="email"> <br>
    Komentar : <textarea name="comment" rows="5" cols="40"></textarea> <br>
    <input type="submit" value="simpan">
    <input type="reset" value="bersihkan">
</form>
<?php 
    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $name = $email = $comment = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = bersihkan_input($_POST["name"]);
        $email = bersihkan_input($_POST["email"]);
        $comment = bersihkan_input($_POST["comment"]);
        echo("Nama :" . htmlspecialchars($name) . "<br>");
        echo("Email :" . htmlspecialchars($email) . "<br>");
        echo("Komentar :" . htmlspecialchars($comment) . "<br>");
        echo("<hr>");
    }

?>
</body>
</html>
