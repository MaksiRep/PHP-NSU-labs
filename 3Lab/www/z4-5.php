<?php
if ($_POST["site"] != '') {
    $site = $_POST["site"];
    header("Location: $site");
    exit;
} else {
?>

    <html>

    <head>
        <title> z4-5 </title>
    </head>

    <body>

        <?php

        function siteCount($list_sites)
        {
            $i = 0;
            while (isset($list_sites[$i])) {
                $i++;
            }
            return $i;
        }

        $list_sites = array(
            "https://www.yandex.ru",
            "https://www.rambler.ru",
            "https://www.google.com",
            "https://www.yahoo.com",
            "https://www.altavista.com"
        );


        $count = siteCount($list_sites) - 1;

        print "<form action='{$_SERVER['PHP_SELF']}' method='post'>";
        print "<select name='site'>";
        print "<option value=''>��������� �������:";
        while ($count >= 0) {
            print "<option value='$list_sites[$count]'>$list_sites[$count]";
            $count--;
        }
        print "</select>";
        print "<input type='submit' value='�������'>";
        print "</form>";
        ?>
    <?php
}
    ?>
    </body>

    </html>