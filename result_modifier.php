<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["ITEMS"] as &$arItem) {
    $arItem["DISPLAY_ACTIVE_FROM"] = $arItem["ACTIVE_FROM"] ? FormatDate("d.m.Y", MakeTimeStamp($arItem["ACTIVE_FROM"])) : "";
}
unset($arItem);