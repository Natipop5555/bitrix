<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="sb_reviewed">
            <ul id="" style="list-style-type: none;">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <li >
                        <?if(is_array($arItem["PREVIEW_PICTURE"])): ?>
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="sb_rw_avatar" alt=""/>
                        <?endif;?>
                        <span class="sb_rw_name"><?echo $arItem["NAME"]?></span>
                        <span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
                        <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                        <div class="clearboth"></div>
                        <div class="sb_rw_arrow"></div>
                </li>
                <?endforeach;?>
            </ul>
</div>







