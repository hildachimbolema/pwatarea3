<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Galería de Imágenes</h1>

    <div class="gallery" id="imageGallery">
        <?php
        $directory = "img/";
        $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);

        foreach ($images as $image) {
            echo "<img src='$image' alt='Imagen'>";
        }
        ?>
    </div>

    <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" accept=".jpg, .png, .gif" />
        <input type="submit" value="Subir Imagen" name="submit">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/gallery.js"></script>
</body>
</html>