<html>

<head>

    <title> z4-1b </title>

</head>

<body>

    <?php

    $g = $_GET["g"];
    $v = $_GET["v"];

    print "<table border='1' width='100' height='100px'>\n";
    print "<tr>";
    print "<td valign='$v' align='$g'>";
    print "Текст";
    print "</td>";
    print "</tr>";
    print "</table>";

    print "<p style='text-align: center'><a href='z4-1a.html'>назад</a>";

    ?>

</body>

</html>