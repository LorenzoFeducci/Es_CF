<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $chiaveCF = $_GET["cf"];
        $valore = $_GET["eta"];

        if(!isset($_SESSION["registrazioni"])){
            $_SESSION["registrazioni"] = array($chiaveCF => $valore);
        } else {
            array_push($_SESSION["registrazioni"], $chiaveCF => $valore);
        }
        
    ?>

    <a href="./form.html">Pagina Form</a>
</body>
</html>