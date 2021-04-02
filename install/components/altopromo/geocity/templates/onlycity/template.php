<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult['CITY']) {
    ?>
    <div id="geocity_wrap">
        <div id="geocity_text">
            Ваш город:
            <div id="geocity_text_value"><?= $arResult['CITY'] ?></div>
        </div>
    </div>

    <?
}
?>