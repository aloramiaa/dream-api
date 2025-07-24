<?php
// Simulate "valid" API behavior, but return incorrect hash
header('Content-Type: application/json');

// Plugin expects this format
echo json_encode(['code' => '00000000']); // fake hash
http_response_code(200); // respond OK so it doesn't think server is dead
exit;
