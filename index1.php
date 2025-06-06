<?php
$filename = "podaci.txt";

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        echo $line . "<br>";
    }
} else {
    echo "Fajl ne postoji";
}
