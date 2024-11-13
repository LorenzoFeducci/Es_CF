<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $somma = 0;
        $count = 0;

        echo "<table>";
            echo "<tr>";
                echo "<th>Registrazioni</th>";
            echo "</tr>";
            echo "<tr>";
                foreach($_SESSION["registrazioni"] as $chiave => $valore){
                    echo "<td>Chiave: $chiave Valore: $valore</td>";
                    $somma = $somma + $valore;
                    $count++;
                }
            echo "</tr>";
        echo "</table>";

        echo "<br>";

        $media = $somma / $count;
        echo "<p>$media</p>";
    ?>

    <br>

    <a href="./form.html">Pagina Form</a>
</body>
</html>