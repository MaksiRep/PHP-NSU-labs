<html>

<head>
    <title> z4-3b </title>
</head>

<body>

    <?php

    $user = $_POST["user"];

    $otv = $_POST["otv"];

    $answer = array("6", "9", "4", "1", "3", "2", "5", "8", "7");

    $answerCount = 0;

    for ($i = 0; $i < 9; $i++) {
        if ($otv[$i] == $answer[$i])
            $answerCount++;
    }

    print "<p>$user, ���������� ���������� �������: $answerCount\n";

    switch ($answerCount) {
        case 0:
            print "<p>������ �� ������ ���������";
            break;
        case 1:
            print "<p>������ �� ������ ���������";
            break;
        case 2:
            print "<p>����� ����� ������ ���������";
            break;
        case 3:
            print "<p>����� ������ ���������";
            break;
        case 4:
            print "<p>������� ������ ���������";
            break;
        case 5:
            print "<p>����������������� ������ ���������";
            break;
        case 6:
            print "<p>������ ������ ���������";
            break;
        case 7:
            print "<p>����� ������ ������ ���������";
            break;
        case 8:
            print "<p>������� ������ ���������";
            break;
        case 9:
            print "<p>����������� ������ ���������";
            break;
    }

    ?>
</body>

</html>