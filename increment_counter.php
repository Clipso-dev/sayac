<?php
header('Content-Type: application/json');

$filename = "counter.txt";

if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

if (isset($_POST['count'])) {
    $newCount = (int)$_POST['count'];
    file_put_contents($filename, $newCount);
} else {
    $current = (int)file_get_contents($filename);
    $newCount = $current + 1;
    file_put_contents($filename, $newCount);
}

echo json_encode(["count" => $newCount]);
?>
