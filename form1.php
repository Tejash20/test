<?php
$conn = new mysqli("localhost", "root", "", "d2");
if ($conn->connect_errno) {
    die("error");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $sql = $conn->query("INSERT INTO `users` (id, name, email, password) VALUES (NULL, '$name', '$email', '$password')");
} else {
    echo "Invalid request method.";
}
