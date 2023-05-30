<?php
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'GET':
            header('Content-Type: application/json');
            $response = array('message' => 'Hello, World!');
            echo json_encode($response);
            break;
        default:
            http_response_code(405);
            echo "Method not allowed.";
            break;
    }
?>