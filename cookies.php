<?php
    echo '<body style="background-color: tan;">';

    $nama = 'Elda Serlya Dwi Seviana';
    $email = 'eldaserly@gmail.com';
    $jenisKelamin = 'Perempuan'; 

    $expire = time() + 60 * 60 * 24 * 365; // 1 tahun dalam detik

    setcookie('nama', $nama, $expire);
    setcookie('email', $email, $expire);
    setcookie('jenisKelamin', $jenisKelamin, $expire);
    header('Location: cookies_lanjut.php');
    exit;
?>