<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $target_dir = "uploads/";
            $target_file = $target_dir.basename($_FILES["file"]["name"]);

            if ($_FILES["file"]["size"] > 1000000) {
                echo "Heavy file \n";
            } else {
                if (move_uploaded_file($_FILES["file"]["temp_name"], $target_file)) {
                    echo "File uploaded! \n";
                } else {
                    echo "File not uploaded! \n";
                }
            }
        }
    } else {
        echo "No file uploaded or an error occurred.";
    }
?>