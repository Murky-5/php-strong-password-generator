<?php
session_start();
$cookie = isset($_GET["accesso"]) && !$_GET["accesso"] == "" ? $_GET["accesso"] : false;
$ripetuti = isset($_GET["ripetute"]) && !$_GET["ripetute"] == "" ? $_GET["ripetute"] : false;
$simboli = isset($_GET["simboli"]) && !$_GET["simboli"] == "" ? $_GET["simboli"] : false;
$numeri = isset($_GET["numeri"]) && !$_GET["numeri"] == "" ? $_GET["numeri"] : false;
$lettere = isset($_GET["lettere"]) && !$_GET["lettere"] == "" ? $_GET["lettere"] : false;
if ($cookie) {
    $cookie = (int)$cookie;
    if ($cookie > 50) {
        $cookie = 50;
    } elseif ($cookie < 1) {
        $cookie = 1;
    }
} else {
    $cookie = false;
};
    $_SESSION['cookie'] = $cookie;
    $_SESSION['ripetute'] = $ripetute;
    $_SESSION['simboli'] = $simboli;
    $_SESSION['numeri'] = $numeri;
    $_SESSION['lettere'] = $lettere;

            $stringMax = "Ma_che_bel_gufo_spenzola_da_quei_travi";
            $hashed = password_hash($stringMax, PASSWORD_DEFAULT);
            $hashed = substr($hashed, 7, 59);

    function password($cookie, $ripetuti, $simboli, $numeri, $lettere) {
        if ($cookie) {
            $reqLength = $_SESSION['cookie'];
            while ((int)$cookie < strlen($GLOBALS["hashed"])) {
                $GLOBALS["hashed"] = substr($GLOBALS["hashed"], 0, -1);
            };
        };
        $_SESSION['cookie'] = $GLOBALS["hashed"];
    };
        ?>