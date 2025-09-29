<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$this->addExternalCss($templateFolder . "/style.css");
$bgImages = [
  $templateFolder . '/images/article-item-bg-1.jpg',
  $templateFolder . '/images/article-item-bg-2.jpg',
  $templateFolder . '/images/article-item-bg-3.jpg',
  $templateFolder . '/images/article-item-bg-4.jpg',
  $templateFolder . '/images/article-item-bg-5.jpg',
  $templateFolder . '/images/article-item-bg-6.jpg',
];
?>

<div class="services-grid">
  <?php foreach ($arResult["ITEMS"] as $key => $arItem): ?>
    <div class="service-item" style="background-image: url(<?= $bgImages[$key % count($bgImages)] ?>);">
      <div class="service-content">
        <h3><?= $arItem["NAME"] ?></h3>
        <p><?= $arItem["PREVIEW_TEXT"] ?></p>
        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
