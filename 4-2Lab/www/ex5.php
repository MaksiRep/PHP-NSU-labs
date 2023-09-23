<?php
$mysqli_user = "root";
$mysqli_password = "";
$conn = mysqli_connect("localhost", $mysqli_user, $mysqli_password);
if (!$conn)
    die("Нет соединения с MySQL");

$database = "sample";
mysqli_select_db($conn, $database)
    or die("Нельзя открыть $database");
mysqli_set_charset($conn, "cp1251");

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('Иванов Иван', 'Новосибирск', 'Кирова 86', '1893-01-02', 'a@mail.ru')";
mysqli_query($conn, $query)
    or die("Нельзя добавить запись в таблицу
             notebook: " . mysqli_error($conn));

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('Петров Петр', 'Новосибирск', 'Кирова 86', '1893-02-03', 'b@mail.ru')";
mysqli_query($conn, $query)
    or die("Нельзя добавить запись в таблицу
                          notebook: " . mysqli_error($conn));

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('Сидоров С.', 'Новосибирск', 'Кирова 86', '0000-00-00', 'c@mail.ru')";
mysqli_query($conn, $query)
    or die("Нельзя добавить запись в таблицу
             notebook: " . mysqli_error($conn));
