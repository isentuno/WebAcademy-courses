<?php

$outputDir = 'examples/';
$allowedTypes = [
    'image/png',
    'image/jpeg',
    'image/jpg',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_log(print_r($_FILES, true));
    if ($_FILES['fileToUpload']) {
        $fileName = $_FILES['fileToUpload']['name'];
        $type = $_FILES['fileToUpload']['type'];
        $tmpPath = $_FILES['fileToUpload']['tmp_name'];
        $error = $_FILES['fileToUpload']['error'];
        $size = $_FILES['fileToUpload']['size'];

        if ($error) { die('Some errors occured'); }
        if (!in_array($type, $allowedTypes)) { die('Wrong file type'); }
        if ($size > 250000) { die('Too big file'); }

        // $fileName = date('Y_m_d_-_').md5(time()).".png";

        move_uploaded_file($tmpPath, $outputDir . $fileName);
    } else {
        die('File is required');
    }
}

$_FILES = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="POST">
        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
        <!-- Название элемента input определяет имя в массиве $_FILES -->
        Отправить этот файл: <br><br>
        <input name="fileToUpload" type="file" />

        <hr>
        <input type="submit" value="Send File" />
    </form>
</body>
</html>
