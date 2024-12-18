<?php

return [
    'paths' => ['*'],
    'allowed_methods' => ['GET', 'POST', 'PUT', 'OPTIONS'],
    'allowed_origins' => ['http://192.168.1.2:3000/', 'http://192.168.1.2:3000/auth/', 'http://192.168.1.2:3000/auth/login'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['Origin', 'Content-Type', 'X-Auth-Token', 'Cookie'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];
