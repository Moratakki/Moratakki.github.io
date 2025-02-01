<?php
$year = date("Y");

// Подключение к базе данных
$conn = new mysqli("localhost", "root", "", "portfolio");

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение контактов
$contacts = [];
$result = $conn->query("SELECT * FROM contacts");
if ($result->num_rows > 0) {
    $contacts = $result->fetch_assoc();
}

// Получение навыков
$skills = [];
$result = $conn->query("SELECT * FROM skills");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $skills[] = $row;
    }
}

// Получение текстов
$about_me = [];
$result = $conn->query("SELECT * FROM about_me");
if ($result->num_rows > 0) {
    $about_me = $result->fetch_assoc();
}

$conn->close();
?>