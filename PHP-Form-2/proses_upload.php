<?php
$targetDirectory = "documents/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']) && $_FILES['files']['name'][0] != "") {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxSize = 5 * 1024 * 1024;

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['files']['name'][$i]);
        $targetFile = $targetDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $fileSize = $_FILES['files']['size'][$i];
        $tmpName = $_FILES['files']['tmp_name'][$i];

        if (in_array($fileType, $allowedExtensions)) {
            if ($fileSize <= $maxSize) {
                if (move_uploaded_file($tmpName, $targetFile)) {
                    echo "File $fileName berhasil diunggah.<br>";
                } else {
                    echo "Gagal mengunggah file $fileName.<br>";
                }
            } else {
                echo "Ukuran file $fileName melebihi batas maksimum.<br>";
            }
        } else {
            echo "Tipe file $fileName tidak diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
