<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
    <meta name="viewport" content="width=device-width" />
    <title>z2-5.php</title>
</head>

<body>

    <?php

    $lang = $_GET['lang'];

    if ($lang == "ru") {
        print "Русский";
    } elseif ($lang == "en") {
        print "Английский";
    } elseif ($lang == "fr") {
        print "Французский";
    } elseif ($lang == "de") {
        print "Немемцкий";
    } else {
        print "Язык неизвестен";
    }

    ?>
    
</body>

</html>