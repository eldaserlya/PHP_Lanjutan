<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .identitas-diri {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body bgcolor="tan">
    <?php
    $nama = isset($_COOKIE['nama']) ? htmlspecialchars($_COOKIE['nama']) : '';
    $email = isset($_COOKIE['email']) ? htmlspecialchars($_COOKIE['email']) : '';
    $jenisKelamin = isset($_COOKIE['jenisKelamin']) ? htmlspecialchars($_COOKIE['jenisKelamin']) : '';
    ?>
    <div class="identitas-diri">
        <?php if ($nama): ?>
            <p>Halo, <strong><?php echo $nama; ?></strong>!</p>
        <?php endif; ?>
        <?php if ($email): ?>
            <p>Email Anda adalah: <?php echo $email; ?></p>
        <?php endif; ?>
        <?php if ($jenisKelamin): ?>
            <p>Jenis kelamin Anda adalah: <?php echo $jenisKelamin; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>