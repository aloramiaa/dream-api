<?php
header('Content-Type: application/json');
http_response_code(200);

$key = $_POST['key'] ?? 'unknown';
$resource = $_POST['resource'] ?? 'unknown';
$fake_code = substr(md5($key . $resource), 0, 8);

// Log attempt
$log = date('c') . " | GENERATE | IP: {$_SERVER['REMOTE_ADDR']} | key: $key | resource: $resource\n";
file_put_contents(__DIR__ . '/../../piracy.log', $log, FILE_APPEND);

echo json_encode([
  'code' => $fake_code, // looks valid, always wrong
  'key' => $key
]);
