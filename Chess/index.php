<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div id="wrappar">
            <ul>
                <li>A</li>
                <li>B</li>
                <li>C</li>
                <li>D</li>
                <li>E</li>
                <li>F</li>
                <li>G</li>
                <li>H</li>
            </ul>

            <?php
            $startTable = '<table id = "myTable"  border = "1">';
            $startTable2 = '<table   id = "myTable2" border = "1">';
            $endTabel = '</table>';
            $td_black = '<td class="blacki"></td>';
            $td_white = '<td class = "beli"></td>';
            $td_blue = '<td id="blue"></td>';
            $td_red = '<td id="red"></td>';
            $arrTable = [
                $row1 = [
            '<tr id="1"><td>1</td>',
            'A' => $td_white, 'B' => $td_black,
            'C' => $td_white, 'D' => $td_black,
            'E' => $td_white, 'F' => $td_black,
            'G' => $td_white, 'H' => $td_black,
            '<td>1</td></tr>'
                ],
                $row2 = [
            '<tr id="2"><td>2</td>',
            'A' => $td_black, 'B' => $td_white,
            'C' => $td_black, 'D' => $td_white,
            'E' => $td_black, 'F' => $td_white,
            'G' => $td_black, 'H' => $td_white,
            '<td>2</td></tr>'
                ],
                $row3 = [
            '<tr id="3"><td>3</td>',
            'A' => $td_white, 'B' => $td_black,
            'C' => $td_white, 'D' => $td_black,
            'E' => $td_white, 'F' => $td_black,
            'G' => $td_white, 'H' => $td_black,
            '<td>3</td></tr>'
                ],
                $row4 = [
            '<tr id="4"><td>4</td>',
            'A' => $td_black, 'B' => $td_white,
            'C' => $td_black, 'D' => $td_white,
            'E' => $td_black, 'F' => $td_white,
            'G' => $td_black, 'H' => $td_white,
            '<td>4</td></tr>'
                ],
                $row5 = [
            '<tr id="5"><td>5</td>',
            'A' => $td_white, 'B' => $td_black,
            'C' => $td_white, 'D' => $td_black,
            'E' => $td_white, 'F' => $td_black,
            'G' => $td_white, 'H' => $td_black,
            '<td>5</td></tr>'
                ],
                $row6 = [
            '<tr id="6"><td>6</td>',
            'A' => $td_black, 'B' => $td_white,
            'C' => $td_black, 'D' => $td_white,
            'E' => $td_black, 'F' => $td_white,
            'G' => $td_black, 'H' => $td_white,
            '<td>6</td></tr>'
                ],
                $row7 = [
            '<tr id="7"><td>7</td>',
            'A' => $td_white, 'B' => $td_black,
            'C' => $td_white, 'D' => $td_black,
            'E' => $td_white, 'F' => $td_black,
            'G' => $td_white, 'H' => $td_black,
            '<td>7</td></tr>'
                ],
                $row8 = [
            '<tr id="8">'
            . '<td>8</td>',
            'A' => $td_black, 'B' => $td_white,
            'C' => $td_black, 'D' => $td_white,
            'E' => $td_black, 'F' => $td_white,
            'G' => $td_black, 'H' => $td_white,
            '<td>8</td></tr>'
                ],
            ];
            echo $startTable;
            foreach ($arrTable as $key => $value) {
                if (is_array($value)) {
                    foreach ($value as $value2) {
                        echo $value2;
                    }
                }
            }
            echo $endTabel;
            ?>
            <ul>
                <li>A</li>
                <li>B</li>
                <li>C</li>
                <li>D</li>
                <li>E</li>
                <li>F</li>
                <li>G</li>
                <li>H</li>
            </ul>
            <?php

            //Опит за изнасяне на повтарящият се код в switch
            function getColors($arr, $y1, $x1, $td_red1) {
                if ((array_key_exists(($y1 - 1) + 2, $arr))) {
                    if (array_key_exists(chr(ord($x1) - 1), $arr[($y1 - 1) + 2])) {
                        echo $arr[($y1 - 1) + 2][chr(ord($x1) - 1)] = $td_red1;
                    }
                }
                if ((array_key_exists(($y1 - 1) + 2, $arr))) {
                    if (array_key_exists(chr(ord($x1) + 1), $arr[($y1 - 1) + 2])) {
                        return $arr[($y1 - 1) + 2][chr(ord($x1) + 1)] = $td_red1;
                    }
                }
                if ((array_key_exists(($y1 - 1) + 1, $arr))) {
                    if (array_key_exists(chr(ord($x1) + 2), $arr[($y1 - 1) + 1])) {
                        return $arr[($y1 - 1) + 1][chr(ord($x1) + 2)] = $td_red1;
                    }
                }
                if ((array_key_exists(($y1 - 1) - 1, $arr))) {
                    if (array_key_exists(chr(ord($x1) + 2), $arr[($y1 - 1) - 1])) {
                        return $arr[($y1 - 1) - 1][chr(ord($x1) + 2)] = $td_red1;
                    }
                }
                if ((array_key_exists(($y1 - 1) - 2, $arr))) {
                    if (array_key_exists(chr(ord($x1) + 1), $arr[($y1 - 1) - 2])) {
                        return $arr[($y1 - 1) - 2][chr(ord($x1) + 1)] = $td_red1;
                    }
                }
                if ((array_key_exists(($y1 - 1) - 2, $arr))) {
                    if (array_key_exists(chr(ord($x1) - 1), $arr[($y1 - 1) - 2])) {
                        return $arr[($y1 - 1) - 2][chr(ord($x1) - 1)] = $td_red1;
                    }
                }
                if ((array_key_exists(($y1 - 1) - 1, $arr))) {
                    if (array_key_exists(chr(ord($x1) - 2), $arr[($y1 - 1) - 1])) {
                        return $arr[($y1 - 1) - 1][chr(ord($x1) - 2)] = $td_red1;
                    }
                }
                if (array_key_exists(($y1 - 1) + 1, $arr)) {
                    if (array_key_exists(chr(ord($x1) - 2), $arr[($y1 - 1) + 1])) {
                        return $arr[($y1 - 1) + 1][chr(ord($x1) - 2)] = $td_red1;
                    }
                }
            }

            if (isset($_POST['submit'])) {
                $x = strtoupper($_POST['x']);
                $y = $_POST['y'];
                if ($x && $y) {
                    if ((ord($x) >= 65 && ord($x) <= 72) && ($y > 0 && $y <= 8)) {
                        switch ($y) {
                            case $y == 1:

                                if ($x == 'B' || $x == 'D' || $x == 'F' || $x == 'H') {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                } else {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                }
                                break;
                            case $y == 2:
                                if ($x == 'B' || $x == 'D' || $x == 'F' || $x == 'H') {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                } else {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                }
                                break;
                            case $y == 3:
                                if ($x == 'B' || $x == 'D' || $x == 'F' || $x == 'H') {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                } else {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                }
                                break;
                            case $y == 4:
                                if ($x == 'B' || $x == 'D' || $x == 'F' || $x == 'H') {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                } else {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                }
                                break;
                            case $y == 5:
                                if ($x == 'B' || $x == 'D' || $x == 'F' || $x == 'H') {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                } else {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                }
                                break;
                            case $y == 6:
                                if ($x == 'B' || $x == 'D' || $x == 'F' || $x == 'H') {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                } else {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                }
                                break;
                            case $y == 7:
                                if ($x == 'B' || $x == 'D' || $x == 'F' || $x == 'H') {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                } else {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                }
                                break;
                            case $y == 8:
                                if ($x == 'B' || $x == 'D' || $x == 'F' || $x == 'H') {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                } else {
                                    $arrTable[$y - 1][$x] = $td_blue;
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) + 2])) {
                                            $arrTable[($y - 1) + 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) + 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) + 2)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) + 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) + 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 2, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 1), $arrTable[($y - 1) - 2])) {
                                            $arrTable[($y - 1) - 2][chr(ord($x) - 1)] = $td_red;
                                        }
                                    }
                                    if ((array_key_exists(($y - 1) - 1, $arrTable))) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) - 1])) {
                                            $arrTable[($y - 1) - 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                    if (array_key_exists(($y - 1) + 1, $arrTable)) {
                                        if (array_key_exists(chr(ord($x) - 2), $arrTable[($y - 1) + 1])) {
                                            $arrTable[($y - 1) + 1][chr(ord($x) - 2)] = $td_red;
                                        }
                                    }
                                }
                                break;
                        }
                        echo $startTable2;
                        foreach ($arrTable as $value) {
                            if (is_array($value)) {
                                foreach ($value as $value2) {
                                    echo $value2;
                                }
                            }
                        }
                    } else {
                        echo '<p>Грешни кординати2</p>';
                    }
                } else {
                    echo '<p>Грешни кординати</p>';
                }
            }
            ?>
            <div id="forForm">
                <form action="index.php" method="POST">
                    <input  type="text" name="x" placeholder="from A to H" maxlength="1"/><br />
                    <input  type="text" name="y" placeholder="from 1 to 8" maxlength="1"/><br />
                    <input type="submit" name="submit"  id="submit"  value="cklick"/>
                </form>
            </div>
        </div>
    </body>
</html>
