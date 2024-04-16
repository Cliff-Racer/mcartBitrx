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



  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/aos.css");?>
  
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/css/style.css");?>

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
		"PATH" => "/include/company_contacts.php"
	),
	false
);?>
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
		"PATH" => "/include/social_media.php"
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
		"PATH" => "/include/company_logo.php"
	),
	false
);?>
              </h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">


                  <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "top_menu",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>



        </div>
      </div>
    </div>
  </div>
