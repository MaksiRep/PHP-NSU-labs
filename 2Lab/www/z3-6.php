<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
    <meta name="viewport" content="width=device-width" />
    <title>z3-6.php</title>
</head>

<body>
    <?php

    $cust = array(
        "cnum" => 2001,
        "cname" => "Hoffman",
        "city" => "London",
        "snum" => 1001,
        "rating" => 100
    );

    foreach ($cust as $key => $value) {
        print("$key $value<br>");
    }

    print("<br>");

    asort($cust);
    foreach ($cust as $key => $value) {
        print("$key $value<br>");
    }

    print("<br>");

    ksort($cust);
    foreach ($cust as $key => $value) {
        print("$key $value<br>");
    }

    print("<br>");

    sort($cust);
    foreach ($cust as $key => $value) {
        print("$key $value<br>");
    }

    ?>
</body>

</html>