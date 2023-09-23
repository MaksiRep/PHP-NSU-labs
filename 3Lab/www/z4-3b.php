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

    print "<p>$user, количество правильных ответов: $answerCount\n";

    switch ($answerCount) {
        case 0:
            print "<p>вообще не знаете географию";
            break;
        case 1:
            print "<p>вообще не знаете географию";
            break;
        case 2:
            print "<p>очень плохо знаете географию";
            break;
        case 3:
            print "<p>плохо знаете географию";
            break;
        case 4:
            print "<p>терпимо знаете географию";
            break;
        case 5:
            print "<p>удовлетворительно знаете географию";
            break;
        case 6:
            print "<p>хорошо знаете географию";
            break;
        case 7:
            print "<p>очень хорошо знаете географию";
            break;
        case 8:
            print "<p>отлично знаете географию";
            break;
        case 9:
            print "<p>великолепно знаете географию";
            break;
    }

    ?>
</body>

</html>