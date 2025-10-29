<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    $max_size = 5 * 1024 * 1024;
    $target_dir = "documents/";

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $total_files = count($_FILES['files']['name']);
    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Tipe file $file_name tidak diizinkan.";
            continue;
        }

        if ($file_size > $max_size) {
            $errors[] = "Ukuran file $file_name melebihi 5MB.";
            continue;
        }

        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($file_tmp, $target_file)) {
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            $errors[] = "Gagal mengunggah file $file_name.";
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>
