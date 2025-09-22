<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (count($arResult["ITEMS"]) > 0):
    ?>
    <div class="news-list">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="news-item">
                <?php if ($arParams["SHOW_IMAGE"] == "Y" && $arItem["PREVIEW_PICTURE"]): ?>
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="news-image">
                <?php endif; ?>
                <h2><?= $arItem["NAME"] ?></h2>
                <p class="news-date">Дата: <?= $arItem["DISPLAY_ACTIVE_FROM"] ?></p>
                <p class="news-preview"><?= $arItem["PREVIEW_TEXT"] ?></p>
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="news-link">Подробнее</a>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
else:
    ?>
    <p class="no-news">Новостей нет.</p>
    <?php
endif;
?>
