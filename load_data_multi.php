<?php
header('Content-Type: application/json');
$user = preg_replace('/[^a-zA-Z0-9]/', '', $_GET['user'] ?? '');
$filename = "data_" . $user . ".json";
if (file_exists($filename)) {
    echo file_get_contents($filename);
} else {
    echo json_encode(["items" => []]);
}
?>