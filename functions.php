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
};
    $_SESSION['cookie'] = $cookie;

            $stringMax = "Ma_che_bel_gufo_spenzola_da_quei_travi";
            $hashed = password_hash($stringMax, PASSWORD_DEFAULT);
            $hashed = substr($hashed, 7, 59);
        if ($cookie) {
            $reqLength = $_SESSION['cookie'];
            while ((int)$cookie < strlen($GLOBALS["hashed"])) {
                $GLOBALS["hashed"] = substr($hashed, 0, -1);
            };
        };
        $_SESSION['cookie'] = $GLOBALS["hashed"];
        ?>