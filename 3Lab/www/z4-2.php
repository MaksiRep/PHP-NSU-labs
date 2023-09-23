<html>

<head>
    <title> z4-2 </title>
</head>

<body>

    <?php

    $g;
    $v;

    if (!isset($_GET["g"])) {
        $g = "left";
    } else {

        $g = $_GET["g"];
    }

    if (!isset($_GET["v"])) {
        $v = "top";
    } else {

        $v = $_GET["v"];
    }

    print "<table border='1' width='100' height='100px'>\n";
    print "<tr>";
    print "<td valign='$v' align='$g'>";
    print "Текст";
    print "</td>";
    print "</tr>";
    print "</table>";

    print "<form action='{$_SERVER['PHP_SELF']}' method='GET'>";

    print "<p><b>Выберите горизонтальное расположение:</b></p>";
    print "<p><input type='radio' name='g' value='left'>слева</p>";
    print "<p><input type='radio' name='g' value='center'>по центру</p>";
    print "<p><input type='radio' name='g' value='right'>справа</p>";

    print "<p><b>Выберите вертикальное расположение:</b></p>";
    print "<p><input type='checkbox' name='v' value='top'>сверху</p>";
    print "<p><input type='checkbox' name='v' value='middle'>по середине</p>";
    print "<p><input type='checkbox' name='v' value='bottom'>внизу</p>";

    print "<p><input type='submit' value='Выполнить'></p>";
    print "</form>";
    
    ?>

</body>

</html>