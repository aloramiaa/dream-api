<?php
header('Content-Type: application/json');
http_response_code(200);

// Always respond with a valid JSON and fake code
echo json_encode(['code' => '00000000']); // this will fail verification in the plugin
exit;
