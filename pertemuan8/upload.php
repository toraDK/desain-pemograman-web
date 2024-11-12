<?php



// if (isset($_POST["submit"])) {
//     $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
//     $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
//     $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("txt", "pdf", "doc", "docx");

//     $maxFileSize = 10 * 1024 * 1024;

//     if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
//         if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
//             echo "Dokumen berhasil diunggah.";
//         } else {
//             echo "Gagal mengunggah dokumen.";
//         }
//     } else {
//         echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }



if (isset($_POST["submit"])) {

    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        // Cek apakah file sudah ada, jika ya, tambahkan timestamp pada nama file
        if (file_exists($targetFile)) {
            $fileBaseName = pathinfo($targetFile, PATHINFO_FILENAME);
            $targetFile = $targetDirectory . $fileBaseName . "_" . time() . "." . $fileType;
        }

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.<br>";

            // Membuat thumbnail jika file adalah gambar
            if (in_array($fileType, array("jpg", "jpeg", "png"))) {
                if ($fileType == "jpg" || $fileType == "jpeg") {
                    $sourceImage = imagecreatefromjpeg($targetFile);
                } elseif ($fileType == "png") {
                    $sourceImage = imagecreatefrompng($targetFile);
                }

                $sourceWidth = imagesx($sourceImage);
                $sourceHeight = imagesy($sourceImage);

                $thumbnailWidth = 200;
                $thumbnailHeight = round(($thumbnailWidth / $sourceWidth) * $sourceHeight);

                $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
                imagecopyresampled($thumbnailImage, $sourceImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $sourceWidth, $sourceHeight);


                // Simpan thumbnail berdasarkan tipe file asli
                if ($fileType == "jpg" || $fileType == "jpeg") {
                    $thumbnailFile = $targetDirectory . "thumb_" . basename($targetFile);
                    imagejpeg($thumbnailImage, $thumbnailFile);
                } elseif ($fileType == "png") {
                    $thumbnailFile = $targetDirectory . "thumb_" . basename($targetFile);
                    imagepng($thumbnailImage, $thumbnailFile);
                }

                imagedestroy($sourceImage);
                imagedestroy($thumbnailImage);

                echo "Thumbnail berhasil dibuat.<br>";
            }
        } else {
            echo "Gagal mengunggah file.<br>";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.<br>";
    }
}
