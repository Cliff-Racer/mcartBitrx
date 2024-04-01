<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
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
		"PATH" => "include/about_company.php"
	),
	false
);?>
          <!-- <div class="mb-5">
            <h3 class="footer-heading mb-4">About HomeSpace</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque,
              consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima
              minus odio!</p>
          </div> -->



        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	".default", 
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
		"COMPONENT_TEMPLATE" => ".default",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
            <!-- <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li>
                <li><a href="#">Properties</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms</a></li>
              </ul>
            </div> -->
          </div>


        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
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
		          "PATH" => "include/footer_social.php"),
              false);?>




        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
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
		          "PATH" => "include/colorlib_copyright.php"),
              false);?>
           
          </p>
        </div>

      </div>
    </div>
  </footer>

  </div>

  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-3.3.1.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-migrate-3.0.1.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-ui.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/popper.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/owl.carousel.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/mediaelement-and-player.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.stellar.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.countdown.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.magnific-popup.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap-datepicker.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/aos.js');?>

  <?$APPLICATION->AddHeadScript('/local/templates/home/js/main.js');?>

  <!-- <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script> -->

</body>

</html>