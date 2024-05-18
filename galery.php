<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 10px;
            justify-content: center;
            padding: 10px;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <?php
        $fileList = glob('gambar/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        natsort($fileList);
        foreach ($fileList as $filename) {
            if (is_file($filename)) {
                echo '<img src="' . $filename . '" alt="' . basename($filename) . '">';
            }
        }
        ?>
    </div>
</body>
</html>
