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
        print "�������";
    } elseif ($lang == "en") {
        print "����������";
    } elseif ($lang == "fr") {
        print "�����������";
    } elseif ($lang == "de") {
        print "���������";
    } else {
        print "���� ����������";
    }

    ?>
    
</body>

</html>