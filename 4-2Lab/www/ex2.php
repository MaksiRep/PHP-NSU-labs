<?php
if ($_POST["user_name"] != '' && $_POST["mail"] != '') {
    $name = $_POST["user_name"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $birthday = $_POST["birthday"];
    $mail = $_POST["mail"];


    $mysqli_user = "root";
    $mysqli_password = "";
    $conn = mysqli_connect("localhost", $mysqli_user, $mysqli_password);
    if (!$conn)
        die("��� ���������� � MySQL");
    $database = "sample";
    mysqli_select_db($conn, $database)
        or die("������ ������� $database");
        mysqli_set_charset($conn, "cp1251");

    
    $query = "INSERT INTO notebook (name, city, address, birthday, mail)  VALUES ('$name', '$city', '$address', '$birthday', '$mail')";
    mysqli_query($conn, $query)
        or die("������������ �������� " . mysqli_error($conn));
    print '<p>������ ���������';
    print "<p><a href='ex3.php'>������� �� �������</a>";
} else {
?>

    <html >

    <head>
        <meta charset="utf-8">
        <title> ex2 </title>
    </head>

    <body>
        <?php
        print "<p>�������� ������";
        print "<form action='{$_SERVER['PHP_SELF']}' method='post'>";
        print "<p> ������� ������� � ���[*]: <input type='text' name='user_name'>";
        print "<p> ������� �����: <input type='text' name='city'>";
        print "<p> ������� �����: <input type='text' name='address'>";
        print "<p> ������� ���� �������� � ������� ����-��-��: <input type='text' name='birthday'>";
        print "<p> ������� e-mail[*]: <input type='text' name='mail'>";
        print "<p><input type='submit' value='��������!'>";
        print "<p>����, ���������� [*], �������� ������������� ��� ����������!";
        print "</form>";
        print "<p><a href='ex3.php'>������� �� �������</a>";

        ?>
    <?php
}
    ?>
    </body>

    </html>