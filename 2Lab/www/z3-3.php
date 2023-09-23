<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
    <meta name="viewport" content="width=device-width" />
    <title>z3-3.php</title>
</head>

<body>
    <?php

    function Russian()
    {
        return "<p>Здравствуйте!";
    }

    function English()
    {
        return "<p>Hello!";
    }

    function France()
    {
        return "<p>Bonjour!";
    }

    function Deutschland()
    {
        return "<p>Guten Tag!";
    }

    $lang = $_GET['lang'];
    $color = $_GET['color'];

    if ($lang == "Ru" || $lang == "En" || $lang == "Fr" || $lang == "De") {
        if ($lang == "Ru") {
            $lang = "Russian";
        } elseif ($lang == "En") {
            $lang = "English";
        } elseif ($lang == "Fr") {
            $lang = "France";
        } elseif ($lang == "De") {
            $lang = "Deutschland";
        }
        $res = $lang();
        print "<font color='$color'> $res </font>";
    } else {
        print "Язык неизвестен";
    }

    ?>
</body>

</html>