<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
    <meta name="viewport" content="width=device-width" />
    <title>z3-2.php</title>
</head>

<body>
    <?php
    $color = "blue";
    $row = 1;
    $cloumn = 1;
    print "<table border=1>\n";
    while ($row <= 10) {
        print "<tr>\n";
        while ($cloumn <= 10) {
            if ($row == 1 || $cloumn == 1) {
                if ($row == 1 && $cloumn == 1) {
                    print "\t<td style='padding:5x'>";
                    print("<font color='red'> + </font>");
                } else {
                    print "\t<td style='padding:5x; color:$color'>";
                    if ($row == 1) {
                        print($cloumn);
                    }
                    if ($cloumn == 1) {
                        print($row);
                    }
                }
            } else {
                print "\t<td style='padding:5x'>";
                print($row + $cloumn);
            }
            print "</td>\n";
            $cloumn++;
        }
        print "</tr>\n";
        $cloumn = 1;
        $row++;
    }
    print "</table>";
    ?>

</body>

</html>