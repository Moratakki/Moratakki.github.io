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
// Запрос для получения данных, включая фото
$sql = "SELECT photo FROM about_me";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $photo = $row['photo']; // BLOB-данные
} else {
    $photo = null; // Если фото нет
}
if ($photo) {
    $photoBase64 = base64_encode($photo); // Преобразуем BLOB в Base64
    $photoSrc = 'data:image/jpeg;base64,' . $photoBase64; // Формируем строку для src
} else {
    $photoSrc = 'images/me.jpg'; // Если фото нет, используем изображение по умолчанию
}

$conn->close();
?>