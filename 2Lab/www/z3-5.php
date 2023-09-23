<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
    <meta name="viewport" content="width=device-width" />
    <title>z3-5.php</title>
</head>

<body>
    <?php

    $treug = array();
    $treugN = 10;
    for ($i = 0; $i < $treugN; $i++) {
        $treug[] = ($i + 1) * ($i + 2) / 2;
        print("$treug[$i]  ");
    }

    print("<br>");

    $kvd = array();
    $kvdN = 10;
    for ($i = 0; $i < $kvdN; $i++) {
        $kvd[] = $i * $i + 2 * $i + 1; // (i+1)*(i+1) = i^2 +2i + 1
        print("$kvd[$i]  ");
    }

    print("<br>");

    $res = array_merge($treug, $kvd);
    foreach ($res as $val) {
        print "$val ";
    }

    print("<br>");

    array_shift($res);
    foreach ($res as $val) {
        print "$val  ";
    }

    print("<br>");

    $res1 = array_unique($res);
    foreach ($res1 as $val) {
        print "$val ";
    }

    ?>
</body>

</html>