<?php

if (isset($_GET['lang']) && ($_GET['lang'] == "lv" || $_GET['lang'] == "en")) {
    $locale = $_GET['lang'];
    setcookie('lang', $locale, strtotime("+1 year"));
    include "components/locale/" . $locale . ".php";
}
else if (isset($_COOKIE["lang"]) && ($_COOKIE['lang'] == "lv" || $_COOKIE['lang'] == "en")) {
    $locale = $_COOKIE['lang'];
    include "components/locale/" . $locale . ".php";
}
else {
    $locale = "lv";
    include "components/locale/lv.php";
}
?>