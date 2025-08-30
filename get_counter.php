<?php
header('Content-Type: application/json');

$filename = "counter.txt";

if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

$count = (int)file_get_contents($filename);

echo json_encode(["count" => $count]);
?>
