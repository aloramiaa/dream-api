<?php
header('Content-Type: application/json');
http_response_code(200);

$key = $_POST['key'] ?? 'unknown';
$resource = $_POST['resource'] ?? 'unknown';

// Log attempt
$log = date('c') . " | GET_CODE | IP: {$_SERVER['REMOTE_ADDR']} | key: $key | resource: $resource\n";
file_put_contents(__DIR__ . '/../../piracy.log', $log, FILE_APPEND);

echo json_encode([
  'code' => 'deadbeef',
  'key' => $key
]);
