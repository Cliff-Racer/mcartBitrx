
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>
  <div class="slide-one-item home-slider owl-carousel">

<?	$GLOBALS['arrFilterBannerAds']['PROPERTY_16'] = 5;
$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"CACHE_TIME" => "0",	// Время кеширования (сек.)
	"CACHE_TYPE" => "N",	// Тип кеширования
	"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
	"DISPLAY_NAME" => "Y",	// Выводить название элемента
	"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
	"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"FIELD_CODE" => array(	// Поля
		0 => "",
		1 => "",
	),
	"FILTER_NAME" => "arrFilterBannerAds",	// Фильтр
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
	"IBLOCK_ID" => "5",	// Код информационного блока
	"IBLOCK_TYPE" => "ads",	// Тип информационного блока (используется только для проверки)
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
	"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
	"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	"NEWS_COUNT" => "1",	// Количество новостей на странице
	"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
	"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
	"PAGER_TITLE" => "Новости",	// Название категорий
	"PARENT_SECTION" => "",	// ID раздела
	"PARENT_SECTION_CODE" => "",	// Код раздела
	"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
	"PROPERTY_CODE" => array(	// Свойства
		0 => "DEAL_PRIORITY",
		1 => "",
	),
	"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
	"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
	"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
	"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
	"SET_STATUS_404" => "N",	// Устанавливать статус 404
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"SHOW_404" => "N",	// Показ специальной страницы
	"SORT_BY1" => "TIMESTAMP_X",	// Поле для первой сортировки новостей
	"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
	"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
	"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	"COMPONENT_TEMPLATE" => ".default"
),
false
);?>
</div>

<div class="py-5">
<div class="container">

  <div class="row">
	<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
	  <div class="feature d-flex align-items-start">
	  <?$APPLICATION->IncludeComponent(
		  "bitrix:main.include", 
		  ".default", 
		  array(
		  "AREA_FILE_RECURSIVE" => "Y",
			  "AREA_FILE_SHOW" => "file",
			  "AREA_FILE_SUFFIX" => "inc_area_right",
			  "COMPOSITE_FRAME_MODE" => "A",
			  "COMPOSITE_FRAME_TYPE" => "AUTO",
			  "EDIT_TEMPLATE" => "",
			  "COMPONENT_TEMPLATE" => ".default",
			  "PATH" => "include/infoblock_1.php"),
		  false);?>
		<!-- <span class="icon mr-3 flaticon-house"></span>
		<div class="text">
		  <h2 class="mt-0">Wide Range of Properties</h2>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.
		  </p>
		</div> -->
	  </div>
	</div>
	<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
	  <div class="feature d-flex align-items-start">
	  <?$APPLICATION->IncludeComponent(
		  "bitrix:main.include", 
		  ".default", 
		  array(
		  "AREA_FILE_RECURSIVE" => "Y",
			  "AREA_FILE_SHOW" => "file",
			  "AREA_FILE_SUFFIX" => "inc_area_right",
			  "COMPOSITE_FRAME_MODE" => "A",
			  "COMPOSITE_FRAME_TYPE" => "AUTO",
			  "EDIT_TEMPLATE" => "",
			  "COMPONENT_TEMPLATE" => ".default",
			  "PATH" => "include/infoblock_2.php"),
		  false);?>
		<!-- <span class="icon mr-3 flaticon-rent"></span>
		<div class="text">
		  <h2 class="mt-0">Rent or Sale</h2>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.
		  </p>
		</div> -->
	  </div>
	</div>
	<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
	  <div class="feature d-flex align-items-start">
	  <?$APPLICATION->IncludeComponent(
		  "bitrix:main.include", 
		  ".default", 
		  array(
		  "AREA_FILE_RECURSIVE" => "Y",
			  "AREA_FILE_SHOW" => "file",
			  "AREA_FILE_SUFFIX" => "inc_area_right",
			  "COMPOSITE_FRAME_MODE" => "A",
			  "COMPOSITE_FRAME_TYPE" => "AUTO",
			  "EDIT_TEMPLATE" => "",
			  "COMPONENT_TEMPLATE" => ".default",
			  "PATH" => "include/infoblock_3.php"),
		  false);?>
		<!-- <span class="icon mr-3 flaticon-location"></span>
		<div class="text">
		  <h2 class="mt-0">Property Location</h2>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.
		  </p>
		</div> -->
	  </div>
	</div>
  </div>
</div>
</div>
<div class="site-section site-section-sm bg-light">
<div class="container">

<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"advertidments", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "360",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "CODE",
			1 => "NAME",
			2 => "PREVIEW_PICTURE",
			3 => "PROPERTY_TOTAL_AREA",
			4 => "PROPERTY_FLOOR_AMOUNT",
			5 => "PROPERTY_WC_AMOUNT",
			6 => "PROPERTY_GARAGE_EXIST",
			7 => "PROPERTY_PRICE",
			8 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "advertidments"
	),
	false
);?><br>


</div>
</div>

<div class="site-section">
<div class="container">
<?$APPLICATION->IncludeComponent(
"bitrix:news.line", 
"services", 
array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"CACHE_GROUPS" => "Y",
	"CACHE_TIME" => "36000",
	"CACHE_TYPE" => "A",
	"DETAIL_URL" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"IBLOCKS" => array(
	),
	"IBLOCK_TYPE" => "service",
	"NEWS_COUNT" => "6",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_BY2" => "SORT",
	"SORT_ORDER1" => "DESC",
	"SORT_ORDER2" => "ASC",
	"COMPONENT_TEMPLATE" => "services"
),
false
);?><br>
</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"news", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "news"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>