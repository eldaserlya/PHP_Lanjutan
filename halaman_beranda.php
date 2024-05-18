<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login_session.php");
        exit;
}
    echo "Selamat datang, " . $_SESSION['username'] . "!";

    echo '<a href="logout.php">Logout</a>';
    echo '<body style="background-color: papayawhip;">';
?>