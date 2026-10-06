<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <title>Nessun Valore</title>
        <style>
            table {
                border: 1px solid;
                border-collapse: collapse;
            }
            td {
                border: 1px solid;
                height: 25px;
                width: 25px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
            $valore = $_GET['valore'];

            if (!$valore) {
                echo "<h1>Nessun Valore</h1>";
                echo "<p> È necessario fornire un input per visualizzare una tabellina.";
            }
            else {
                echo "<h1>Tabellina del $valore</h1>";

                echo "<table>";
                for ($i = 0; $i <= 10; $i++) {
                    $mult = $valore * $i;
                    echo "<tr>";
                    echo "<td>$mult</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            echo "<br>";
            echo "<a href='tavola-pitagorica.php'>Torna alla tavola pitagorica</a>"
        ?>
    </body>
</html>
