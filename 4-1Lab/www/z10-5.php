<html>

<head>
    <title> z10-5 </title>
</head>

<body>
    <?php

    $GLOBALS['mysql_data_type_hash'] = array(
        1 => 'tinyint',
        2 => 'smallint',
        3 => 'int',
        4 => 'float',
        5 => 'double',
        7 => 'timestamp',
        8 => 'bigint',
        9 => 'mediumint',
        10 => 'date',
        11 => 'time',
        12 => 'datetime',
        13 => 'year',
        16 => 'bit',
        253 => 'varchar',
        254 => 'char',
        246 => 'decimal'
    );

    $GLOBALS['mysql_data_flag_hash'] = array(
        1 => 'not null',
        2 => 'primary key',
        4 => 'unique key',
    );

    $GLOBALS['rus_name'] = array(
        'snum' => 'номер продавца',
        'sname' => 'имя продавца',
        'city' => 'город',
        'comm' => 'комиссионные продацва',
        'cnum' => 'номер покупателя',
        'cname' => 'имя покупателя',
        'rating' => 'рейтинг покупателя',
        'onum' => 'ермеп заказа',
        'amt' => 'сумма заказа',
        'odate' => 'дата заказа'
    );

    function vid_structure($conn, $table_name)
    {
        $tab_res = mysqli_query($conn, "SHOW TABLES");
        print "<dl><dd>\n";
        while ($tab_rows = mysqli_fetch_row($tab_res)) {
            if ($tab_rows[0] == $table_name) {
                print "<h4>Структура таблицы $table_name</h4>";
                $query_res = mysqli_query($conn, "SELECT * from $tab_rows[0]");
                $num_fields = mysqli_num_fields($query_res);
                print "<dl><dd>\n";
                for ($x = 0; $x < $num_fields; $x++) {
                    $properties = mysqli_fetch_field_direct($query_res, $x);
                    print "<i>";
                    print $GLOBALS['mysql_data_type_hash'][$properties->type];
                    print "</i> <i>";
                    print $properties->length;
                    print "</i> <b>";
                    print $properties->name;
                    print "</b> <i>";
                    $secondary = decbin($properties->flags);
                    $str_length = strlen($secondary);
                    $deg = 0;
                    for ($i = $str_length - 1; $i >= 0; $i--) {
                        $res = $secondary[$i] * pow(2, $deg);
                        print $GLOBALS['mysql_data_flag_hash'][$res];
                        print " ";
                        $deg++;
                    }
                    print "</i><br>\n";
                }
                print "</dl>\n";
            }
        }
        print "</dl>\n";
    }

    function vid_content($conn, $table_name)
    {
        $tab_res = mysqli_query($conn, "SHOW TABLES");
        print "<dl><dd>\n";
        while ($tab_rows = mysqli_fetch_row($tab_res)) {
            if ($tab_rows[0] == $table_name) {
                print "<h4>Содержимое таблицы $table_name</h4>";
                print "<table border='1'>";
                $query_res = mysqli_query($conn, "SELECT * from $tab_rows[0]");
                $num_fields = mysqli_num_fields($query_res);
                print "<tr>";
                for ($x = 0; $x < $num_fields; $x++) {
                    $properties = mysqli_fetch_field_direct($query_res, $x);
                    print "<th>";
                    print $GLOBALS['rus_name'][$properties->name];
                    print "<br>";
                    print $properties->name;
                    print "</br>";
                    print "</th>";
                }
                print "</tr>";
                while ($a_row = mysqli_fetch_row($query_res)) {
                    print "<tr>\n";
                    foreach ($a_row as $field)
                        print "\t<td>$field</td>\n";
                    print "</tr>\n";
                }

                print "</table>";
            }
        }
    }
    print "</dl>\n";

    if (!isset($_GET["str"]) || !isset($_GET["cont"])) {
        print "choose the table";
    } else {
        $str = $_GET["str"];
        vid_structure($conn, $str);
        $cont = $_GET["cont"];
        vid_content($conn, $cont);
    }

    print "<p style='text-align: left'><a href='z10-1.html'>Возврат к выбору таблицы</a>";

    ?>
</body>

</html>