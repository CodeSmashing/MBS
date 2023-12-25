<?php
ini_set('session.cookie_samesite', 'Lax');
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once $_SERVER['DOCUMENT_ROOT'] . "/php/sqlquerys.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["data"])) {
        $image = $_FILES['image']['tmp_name'];
        $img_name = $_FILES["image"]["name"];

        if (sqlCompareImage($pdo, $img_name) === true) {
            echo "The image already exists in the database, please insert a new image.";
        } else {
            if (!empty($image) && is_uploaded_file($image)) {
                $check = getimagesize($image);

                if ($check !== false) {
                    $img_data = file_get_contents($image);
                    $fileSize = $_FILES['image']['size'];

                    // Set your desired file size limit (e.g., 5MB)
                    $maxFileSize = 5 * 1024 * 1024; // 5MB

                    if ($fileSize <= $maxFileSize) {
                        sqlInsertImages($pdo, $img_name, $img_data);
                        echo "Image uploaded successfully.";
                    } else {
                        echo "File size exceeds the limit. Please select a smaller image.";
                    }
                } else {
                    echo "Please select a valid image to upload.";
                }
            } else {
                echo "Please select an image to upload.";
            }
        }
    } else {
        echo "Your post is empty.";
        var_dump($_POST);
    }
}
