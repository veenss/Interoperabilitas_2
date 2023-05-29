<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $response = array('message' => 'Hello, World!');
        header('Content-Type: application/json');
        echo json_encode($response);
    }
?>