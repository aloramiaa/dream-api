<?php
header('Content-Type: application/json');
http_response_code(200);

$key = $_POST['key'] ?? 'unknown';
$resource = $_POST['resource'] ?? 'unknown';

// Output to console
error_log("DREAMAPI > GET_CODE | IP: {$_SERVER['REMOTE_ADDR']} | key=$key | resource=$resource");

echo json_encode([
  'code' => 'deadbeef',
  'key' => $key
]);
exit;
