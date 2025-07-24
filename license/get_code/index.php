<?php
header('Content-Type: application/json');

// Again, fake it. This is supposed to return a license "code"
echo json_encode(['code' => 'deadbeef']); // clearly invalid
http_response_code(200);
exit;
