<?php
// Проверяем была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем те самые данные
    $photo = $_FILES["photo"];
    $type = $_POST["type"];
    $kw = $_POST["kw"];
    $rpm = $_POST["rpm"];
    $phases = $_POST["phases"];
    $count_section = $_POST["count_section"];
    $number_of = $_POST["number_of"];
    $w = $_POST["w"];
    $empty_cell = $_POST["empty_cell"];
    $a = $_POST["a"];
    $in_kg = $_POST["in_kg"];
    $out_kg = $_POST["out_kg"];
    $triangle_star = $_POST["triangle_star"];
    $info = $_POST["info"];

    // Подключаемся к бд
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Engine";

    // Создаем соединение
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверяем его
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Запрос для самой лучшей бд
    $sql = "INSERT INTO Engine (Photo, Type, kw, rpm, Phases, Count_section, W, A, Empty_cell, in_kg, Out_kg, Triangle_Star, number_of_conductors, Info) 
            VALUES ('$photo', '$type', '$kw', '$rpm', '$phases', '$count_section', '$w', '$a', '$empty_cell', '$in_kg', '$out_kg', '$triangle_star', '$number_of','$info')";
    // Проверка для самой лучшей бд
    if ($conn->query($sql) === TRUE) {
        echo "Данные успешно добавлены в базу данных.";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

    // Закрываем соединение с бд
    $conn->close();
}
?>
