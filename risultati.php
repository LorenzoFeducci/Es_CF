<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        th, td{
            border: solid black 2px;
        }

        table{
            border-collapse: collapse;
        }

    </style>
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
                foreach ($_SESSION["registrazioni"] as $cf => $eta) {
                    echo "<td>Codice Fiscale: $cf, Età: $eta</td>";
                    $somma = $somma + $eta;
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
        
        

