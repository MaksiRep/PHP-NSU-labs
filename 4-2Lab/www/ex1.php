<?php
$mysqli_user = "root";
$mysqli_password = "";
$conn = mysqli_connect("localhost", $mysqli_user, $mysqli_password);
if (!$conn)
    die("��� ���������� � MySQL");

$database = "sample";
mysqli_select_db($conn, $database)
    or die("������ ������� $database");
mysqli_set_charset($conn, "cp1251");

$query = "DROP TABLE IF EXISTS notebook";
mysqli_query($conn, $query)
    or die("������ ������� �������
             notebook: " . mysqli_error($conn));

$query = "CREATE TABLE notebook (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50),
        city VARCHAR(50),
        address VARCHAR(50),
        birthday DATE,
        mail VARCHAR(20) NOT NULL)";

mysqli_query($conn, $query)
    or die("������ ������� �������
             notebook: " . mysqli_error($conn));
