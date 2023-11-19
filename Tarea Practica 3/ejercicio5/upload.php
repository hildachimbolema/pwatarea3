<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Verifica si el archivo es una imagen real o una imagen falsa
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Verifica si el archivo ya existe
if (file_exists($target_file)) {
    $uploadOk = 0;
}

// Verifica el tamaño del archivo
if ($_FILES["file"]["size"] > 50000000) {
    $uploadOk = 0;
}

// Permitir ciertos formatos de archivo
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" ) {
    $uploadOk = 0;
}

// Verifica si $uploadOk está configurado en 0 por un error
if ($uploadOk == 0) {
    echo "Archivo no cumple con los requisitos que pueden ser, muy grande, existente, o extencion no permitida.";
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "El archivo ". basename( $_FILES["file"]["name"]). " ha sido subido.";
        echo "<br><br><a href='index.php'>Volver a la galería</a>";  // Enlace para volver a la galería
    } else {
        echo "Error al subir el archivo.";
    }
}