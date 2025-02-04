<?php
$link = false;

function openDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "portfolio");
    mysqli_query($link, "SET NAMES UTF8");
}

function closeDB()
{
    global $link;
    $link = false;
}

function getContacts()
{
    global $link;
    openDB();
    $result = mysqli_query($link, "SELECT * FROM contacts");

    closeDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


function getSkills()
{
    global $link;
    openDB();
    $result = mysqli_query($link, "SELECT * FROM skills");

    closeDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}



function getAboutMe()
{
    global $link;
    openDB();
    $result = mysqli_query($link, "SELECT * FROM about_me");
    $finfo = finfo_open(FILEINFO_MIME_TYPE); // Инициализация функции для определения MIME-типа
    $about_me = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Определяем MIME-тип изображения
    $imageType = finfo_buffer($finfo, $about_me[0]['photo'], FILEINFO_MIME_TYPE);

    // Преобразуем BLOB в Base64 и сохраняем в массив
    $imageBase64 = base64_encode($about_me[0]['photo']);
    $about_me[0]['photo'] = [
        'id' => $about_me[0]['id'],
        'src' => 'data:' . $imageType . ';base64,' . $imageBase64, // Формируем строку для src
        'type' => $imageType // Сохраняем тип изображения (опционально)
    ];
    closeDB();
    return $about_me;
}
?>