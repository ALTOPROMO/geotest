<?php
define("STATISTIC_SKIP_ACTIVITY_CHECK", "true");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::IncludeModule('geotest');

$geotest = new \Altopromo\GeoTest();

$action = $_REQUEST['action'];

switch ($action) {
    case('selectCity'): {
        $cityName = $_REQUEST['cityName'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $geotest = new \Altopromo\GeoTest();

        $geotest->setCity($ip, $cityName);
    }
        break;
}

die();
?>