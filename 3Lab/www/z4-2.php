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
    print "�����";
    print "</td>";
    print "</tr>";
    print "</table>";

    print "<form action='{$_SERVER['PHP_SELF']}' method='GET'>";

    print "<p><b>�������� �������������� ������������:</b></p>";
    print "<p><input type='radio' name='g' value='left'>�����</p>";
    print "<p><input type='radio' name='g' value='center'>�� ������</p>";
    print "<p><input type='radio' name='g' value='right'>������</p>";

    print "<p><b>�������� ������������ ������������:</b></p>";
    print "<p><input type='checkbox' name='v' value='top'>������</p>";
    print "<p><input type='checkbox' name='v' value='middle'>�� ��������</p>";
    print "<p><input type='checkbox' name='v' value='bottom'>�����</p>";

    print "<p><input type='submit' value='���������'></p>";
    print "</form>";
    
    ?>

</body>

</html>