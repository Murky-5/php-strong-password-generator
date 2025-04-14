<?php
session_start();
$cookie = isset($_GET["accesso"]) && !$_GET["accesso"] == "" ? $_GET["accesso"] : false;
if ($cookie) {
    $cookie = (int)$cookie;
    if ($cookie > 50) {
        $cookie = 50;
    } elseif ($cookie < 1) {
        $cookie = 1;
    }
} else {
    $cookie = false;
}
$_SESSION['cookie'] = $cookie;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina d'accesso</title>
</head>
<body>
    <form action="" method="GET">
        <label for="accesso">Lunghezza Desiderata  (Massimo 50)</label>
        <input min=1 max=50 id="accesso" name="accesso" type="number" placeholder="..." />
        <button type="submit">Crea</button>
        <?php
            $stringMax = "Ma_che_bel_gufo_spenzola_da_quei_travi";
            $hashed = password_hash($stringMax, PASSWORD_DEFAULT);
        if ($cookie) {
            $reqLength = $_SESSION['cookie'];
            while ((int)$cookie < strlen($GLOBALS["hashed"])) {
                $GLOBALS["hashed"] = substr($hashed, 0, -1);
            };
        };
        echo "<p>Password Generata: $hashed</p>";
        ?>
    </form>
    
</body>
</html>