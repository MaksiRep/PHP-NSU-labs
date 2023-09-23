<html>

<head>
    <title> z4-46 </title>
</head>

<body>

    <?php


    $user = $_POST["user"];

    $hobby = $_POST["hobby"];

    print "<p>$user, оказывается, вы предпочитаете";

    print "<ul>\n";
    foreach ($_POST as $key => $value) {
        if (gettype($value) == "array") {
            print "$key = <br>\n";
            foreach ($value as $v) {

                print "$v<br>";
            }
        } else {
            print "$key = $value<br>\n";
        }
    }
    print "</ul>\n";

    ?>
</body>

</html>