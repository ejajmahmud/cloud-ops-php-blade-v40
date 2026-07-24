<?php
declare(strict_types=1);

header('Content-Type: application/json');
echo json_encode([
    'app' => 'cloud-ops-php-blade-v40',
    'category' => 'Cloud Resource & Infrastructure Portal',
    'stack' => 'PHP / Modular Blade',
    'status' => 'operational'
]);
