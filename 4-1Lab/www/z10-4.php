<?php
$mysqli_user = "root";
$mysqli_password = "";
$conn = mysqli_connect("localhost", $mysqli_user, $mysqli_password);
if (!$conn)
    die("��� ���������� � MySQL");

$database = "sample";

mysqli_select_db($conn, $database)
    or die("������ ������� $database");
