<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult['CITY']) {
    ?>
    <div id="geocity_wrap">
        <div id="geocity_text">
            Ваш город:
            <div id="geocity_text_value"><?= $arResult['CITY'] ?></div>
        </div>
        <div id="geocity_popup">
            Ваш город: <?= $arResult['CITY'] ?>
            <div>
                <button id="geocity_yes">Да</button>
                <button id="geocity_no">Нет</button>
            </div>
        </div>
    </div>

    <div id="geocity_popup_window">
        <div id="geocity_popup_window_content">
            Выберите город
            <input type="text" id="realcity"/>
            <button id="realcity_agree">Выбрать</button>
        </div>
    </div>
    <?
}
?>