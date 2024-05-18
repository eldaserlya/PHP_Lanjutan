<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{Elda}">
    <meta name="author" content="{Serly}">
</head>
<body bgcolor="LavenderBlush">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false) {
        echo "File berupa citra/gambar - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, file anda terlalu besar.";
        $uploadOk = 0;
    }

    // Filter format
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
        && $imageFileType != "gif") {
        echo "Sorry, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, File anda gagal upload.";
    } else {
        // Proses unggah file
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "file " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diunggah.";
        } else {
            echo "Sorry, ada error saat unggah file.";
        }
    }
} else {
    // Menampilkan pesan peringatan hanya pada pengiriman data
    echo "Silakan unggah file.";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <p><label>Pilih Gambar yang akan diunggah:</label><br>
    <input type="file" name="gambar" id="gambar1"></p>
    <input type="submit" value="Unggah Gambar" name="submit">
</form>
</body>
</html>
