<?php
include 'db_connect.php';
require_once 'User.php';  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($user_name === null || $email === null || $password === null) {
        http_response_code(400);
        $data = [
            "message" => "All fields are required",
            'status' => http_response_code()
        ];
        echo json_encode($data, true);
        exit;
    }

    $user = new User($conn);
    $user->name = $user_name;
    $user->email = $email;
    $user->password = $password;

    if ($user->create()) {
        http_response_code(201);
        $data = [
            "message" => "User created successfully",
            'status' => http_response_code(),
            'user_name' => $user_name,
            'email' => $email
        ];
        echo json_encode($data, true);
    } else {
        http_response_code(400);
        $data = [
            'status' => http_response_code(),
            'message' => "User couldn't be created",
            'error' => $conn->error
        ];
        echo json_encode($data, true);
    }
}
$conn->close();
