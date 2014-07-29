<?php

    function getDirs() {
        $dir = opendir("templates");
        while (false !== ($filename = readdir($dir))) {
            if ($filename !== "." && $filename !== "..") {
                $dirs[] = $filename;
            }
        }

        if (isset($dirs)) return $dirs;
    }

    if ($_GET['dir']) {
        include "form.php";
    } else {
        foreach (getDirs() as $dirs) {
            echo "<a href='index.php?dir={$dirs}'>$dirs</a><br>";
        }

    }

    if ($_GET['convert']) {

        $dir = $_GET['convert'];

        function convertToJson($dir, $name, $subject, $gamma, $gallery, $slider) {
            $jsonData = json_encode(array('name'=>"{$name}", 'subject'=>"{$subject}", 'gamma'=>"{$gamma}", 'gallery'=>"{$gallery}", 'slider'=>"{$slider}"));

            // Check for already file exist
            if (file_exists("templates/{$dir}/data.json")) {
                echo "Already have data file.";
            } else {
                $file = fopen("templates/{$dir}/data.json", "w");
                fwrite($file, $jsonData);
            }
        }

        convertToJson($dir, $_POST['color1'], $_POST['color2'], $_POST['color3'], $_POST['subject'], $_POST['subsubject']);

    }
