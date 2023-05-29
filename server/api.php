<?php
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'GET':
            header('Content-Type: application/json');
            $response = 'Hello, World!';
            echo $response;
            break;
        default:
            http_response_code(405);
            echo "Method not allowed.";
            break;
    }
?>