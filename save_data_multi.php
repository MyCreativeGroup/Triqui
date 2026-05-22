<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
if ($data && isset($data['user'])) {
    $user = preg_replace('/[^a-zA-Z0-9]/', '', $data['user']);
    $filename = "data_" . $user . ".json";
    file_put_contents($filename, json_encode($data));
    echo json_encode(["status" => "ok"]);
}
?>