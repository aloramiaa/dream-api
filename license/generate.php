<?php
http_response_code(403); // Forbidden
header('Content-Type: application/json');

echo json_encode([
  'error' => 'Access denied',
  'status' => 403
]);
exit;
