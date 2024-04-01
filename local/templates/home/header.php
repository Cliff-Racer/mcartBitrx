<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?$APPLICATION->ShowHead();?>
  <title><?$APPLICATION->ShowTitle()?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/fonts/icomoon/style.css");?>
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
  <link rel="stylesheet" href="fonts/icomoon/style.css"> -->

  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/bootstrap.min.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/magnific-popup.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/jquery-ui.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/owl.carousel.min.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/owl.theme.default.min.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/bootstrap-datepicker.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/mediaelementplayer.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/css/animate.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/fonts/flaticon/font/flaticon.css");?>
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/fl-bigmug-line.css");?>
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/mediaelementplayer.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/fl-bigmug-line.css"> -->


  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/aos.css");?>
  
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/style.css");?>
  <!-- <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css"> -->

</head>

<body>
<?$APPLICATION->ShowPanel();?>
  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
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
		          "PATH" => "include/company_contacts.php"),
              false);?>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
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
		"PATH" => "include/social_media.php"
	),
	false
);?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
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
		          "PATH" => "include/company_logo.php"),
              false);?>
              </h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">

          <nav class="site-navigation text-right text-md-right" role="navigation">
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                  <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
              <!-- <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>
                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul> -->
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="slide-one-item home-slider owl-carousel">
    <!-- <div class="site-blocks-cover" style="background-image: url(/local/templates/home/images/hero_bg_1.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>853 S Lucerne Blvd</h2>
        <p class="location"><span class="property-icon icon-room"></span> Los Angeles, CA 90005</p>
        <p class="mb-2"><strong>$2,250,500</strong></p>


        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

      </div>
    </div> -->

    <!-- <div class="site-blocks-cover" style="background-image: url(/local/templates/home/images/hero_bg_3.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>625 S. Berendo St</h2>
        <p class="location"><span class="property-icon icon-room"></span>607 Los Angeles, CA 90005</p>
        <p class="mb-2"><strong>$2,250,500</strong></p>


        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

      </div>

    </div> -->

    <?	$GLOBALS['arrFilterBannerAds']['PROPERTY_16'] = 5;
    $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilterBannerAds",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "DEAL_PRIORITY",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
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
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "service",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>


    </div>
  </div>

  <div class="site-section">
    <div class="container">
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
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
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
    </div>
  </div>