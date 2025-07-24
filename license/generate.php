<?php
header('Content-Type: application/json');
http_response_code(200);

$key = $_POST['key'] ?? 'unknown';
$resource = $_POST['resource'] ?? 'unknown';
$fake_code = substr(md5($key . $resource), 0, 8);

// Output to web server log / console
error_log("DREAMAPI > GENERATE | IP: {$_SERVER['REMOTE_ADDR']} | key=$key | resource=$resource");

echo json_encode([
  'code' => $fake_code,
  'key' => $key
]);
exit;
