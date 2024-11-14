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
            $persona = array($chiaveCF => $valore);
            $_SESSION["registrazioni"] = $persona;
        } else {
            $persona = $_SESSION["registrazioni"];
            $persona[$chiaveCF] = $valore;
            $_SESSION["registrazioni"] = $persona;
        }
        
    ?>

    <a href="./form.html">Pagina Form</a>
</body>
</html>