<?php
/**
 * Utwórz tabelę mnożenia 10x10, która będzie wyświetlała wynik mnożenia => Tabliczka mnożenia
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabliczka mnożenia</title>
    <style>
        table {
            width: 400px;
        }
        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
        <th></th>
        <?php
            $wiersz = 10;
            $kolumna = 10;
            for ($i = 1; $i <= $kolumna ; $i++) { 
                echo "<th>" . $i . "</th>"; 
            }
        ?>
        </tr>
        <?php
            for ($i=1; $i <=$wiersz; $i++) { 
                echo "<tr>";
                echo "<th>" . $i . "</th>";
                for ($j=1; $j <=$kolumna; $j++) { 
                    echo "<td>";
                        echo $i * $j;
                    echo "</td>";
                }

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>