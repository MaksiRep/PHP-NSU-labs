 <html>

 <head>
     <meta charset="utf-8">
     <title> ex4-help </title>
 </head>

 <body>
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

        $new_value = $_POST["value"];
        $id = $_POST["id"];

        switch ($_POST["res"][0]) {
            case "name":
                $query = "UPDATE notebook SET name = '$new_value' WHERE id = $id";
                break;
            case "city":
                $query = "UPDATE notebook SET city = '$new_value' WHERE id = $id";
                break;
            case "address":
                $query = "UPDATE notebook SET address = '$new_value' WHERE id = $id";
                break;
            case "birthday":
                $query = "UPDATE notebook SET birthday = '$new_value' WHERE id = $id";
                break;
            case "mail":
                $query = "UPDATE notebook SET mail = '$new_value' WHERE id = $id";
                break;
        }
        print "<p>Запись изменена";
        print "<p><a href='ex3.php'>Переход на главную</a>";

        mysqli_query($conn, $query)
            or die("Недопустимые значения " . mysqli_error($conn));

        ?>

 </body>

 </html>