<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

\Bitrix\Main\Loader::IncludeModule('geotest');

$geotest = new \Altopromo\GeoTest();

$arResult['CITY'] = $geotest->findCity();

$this->IncludeComponentTemplate();
?>