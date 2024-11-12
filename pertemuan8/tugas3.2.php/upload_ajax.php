<?php
if (isset($_FILES['file'])) {
    $errors = array();

    if ($_FILES['file']['name'][0]) {
        $totalFiles = count($_FILES['file']['name']);

        for ($i = 0; $i < $totalFiles; $i++) { 
            $file_name = $_FILES['file']['name'][$i];
            $file_size = $_FILES['file']['size'][$i];
            $file_tmp = $_FILES['file']['tmp_name'][$i];
            $file_type = $_FILES['file']['type'][$i];
            $file_parts = explode('.', $_FILES['file']['name'][$i]);
            $file_ext = strtolower(end($file_parts));
            $extensions = array("jpg", "png", "jpeg");

            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "Ekstensi file yang diizinkan adalah jpg, png, jpeg";
            }

            if ($file_size > 2097152) {
                $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../uploads/".$file_name);
                echo $file_name . "File berhasil diunggah.<br>";
            } else {
                echo implode("", $errors);
            }
        }
    }
}