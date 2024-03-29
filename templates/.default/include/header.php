<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>


<?IncludeTemplateLangFile(__FILE__);?>

<div class="hd_header">
    <table>
        <tr>
            <td rowspan="2" class="hd_companyname">
                <h1>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/site_bn/include/logo.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
                </h1>
            </td>
            <td rowspan="2" class="hd_txarea">
                        <span class="tel">
                            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/site_bn/include/phone.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
                        </span>	<br/>
                <?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
            </td>
            <td style="width:232px">
                <?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"head", 
	array(
		"COMPONENT_TEMPLATE" => "head",
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N"
	),
	false
);?>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 11px;">
                <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
                    "FORGOT_PASSWORD_URL" => "/site_bn/user/",	// Страница забытого пароля
                    "PROFILE_URL" => "/site_bn/user/profile.php",	// Страница профиля
                    "REGISTER_URL" => "/site_bn/user/registration.php",	// Страница регистрации
                    "SHOW_ERRORS" => "Y",	// Показывать ошибки
                ),
                    false
                );?>
            </td>
        </tr>
    </table>
    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_multi"
	),
	false
);?>
</div>
