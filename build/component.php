<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
  "GROUPS" => array(),
  "PARAMETERS" => array(
    "IBLOCK_ID" => array(
      "PARENT" => "BASE",
      "NAME" => "ID инфоблока",
      "TYPE" => "STRING",
      "DEFAULT" => "",
    ),
    "NEWS_COUNT" => array(
      "PARENT" => "BASE",
      "NAME" => "Количество элементов",
      "TYPE" => "STRING",
      "DEFAULT" => "6",
    ),
  ),
);
