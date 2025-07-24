<?php
// Return valid timestamp to keep plugin believing server is live
echo time();
http_response_code(200);
