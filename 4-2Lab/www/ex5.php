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

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('������ ����', '�����������', '������ 86', '1893-01-02', 'a@mail.ru')";
mysqli_query($conn, $query)
    or die("������ �������� ������ � �������
             notebook: " . mysqli_error($conn));

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('������ ����', '�����������', '������ 86', '1893-02-03', 'b@mail.ru')";
mysqli_query($conn, $query)
    or die("������ �������� ������ � �������
                          notebook: " . mysqli_error($conn));

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('������� �.', '�����������', '������ 86', '0000-00-00', 'c@mail.ru')";
mysqli_query($conn, $query)
    or die("������ �������� ������ � �������
             notebook: " . mysqli_error($conn));
