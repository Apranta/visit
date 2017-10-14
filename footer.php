    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <h3>Visit Palembang</h3>
                    <ul>
                        <li><a href="#" >See & Do</a></li>
                        <li><a href="#" >Events</a></li>
                        <li><a href="#" >Kuliner</a></li>
                        <li><a href="#" >Belanja</a></li>
                        <li><a href="#" >Penginapan</a></li>
                        <li><a href="#" >Perjalanan</a></li>
                        <li><a href="#" >Sarana Informasi</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+628 96 9255 7552</a>
                    <a href="mailto:hallo@visitpalembang.id" id="email_footer">hallo@visitpalembang.id</a>
                </div>
            </div><!-- End row -->
            <!-- 
            <div class="row">
                <div class="col-md-12">
                    <h3>Pernah Diliput Oleh : </h3>

                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>© Visit Palembang 2017</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->
	
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_set_1_icon-78"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->

    <!-- Common scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="js/functions.js"></script>

	<!-- Specific scripts -->
	<!-- Check and radio inputs -->
	<script src="js/icheck.js"></script>
	<script>
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-grey',
			radioClass: 'iradio_square-grey'
		});
	</script>
	<!-- Map -->

        
    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="rev-slider-files/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript">
		var tpj = jQuery;

		var revapi54;
		tpj(document).ready(function () {
			if (tpj("#rev_slider_54_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_54_1");
			} else {
				revapi54 = tpj("#rev_slider_54_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "rev-slider-files/js/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								touchOnDesktop:"off",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"uranus",
								enable:true,
								hide_onmobile:true,
								hide_under:778,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								}
							}
						},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1240, 1024, 778, 480],
					gridheight: [700, 550, 860, 480],
					lazyType: "none",
					parallax: {
						type: "mouse",
						origo: "slidercenter",
						speed: 2000,
						levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
						disable_onmobile: "on"
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "on",
					stopAfterLoops: 0,
					stopAtSlide: 1,
					shuffle: "off",
					autoHeight: "off",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/
	</script>
	
	<script src="js/notify_func.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUSK3JydXzrDD_eiBdd4sGnnZui-JYte8&callback=initMap">
    </script>
    <script src="js/icheck.js"></script>
	<script>
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-grey',
			radioClass: 'iradio_square-grey'
		});
	</script>
	<!-- Date and time pickers -->
	<script src="js/jquery.sliderPro.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function ($) {
			$('#Img_carousel').sliderPro({
				width: 960,
				height: 500,
				fade: true,
				arrows: true,
				buttons: false,
				fullScreen: false,
				smallSize: 500,
				startSlide: 0,
				mediumSize: 1000,
				largeSize: 3000,
				thumbnailArrows: true,
				autoplay: false
			});
		});
	</script>


	<!-- Date and time pickers -->
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('input.date-pick').datepicker('setDate', 'today');
	</script>
	<!-- Map -->
	<!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
	<!-- <script src="js/map.js"></script> -->
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function () {
			$(".carousel").owlCarousel({
				items: 4,
				itemsDesktop: [1199, 3],
				itemsDesktopSmall: [979, 3]
			});
		});
	</script>

	<!--Review modal validation -->
	<script src="assets/validate.js"></script>
    <!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
<script src="js/map_full_page.js"></script>

    <script type="text/javascript" src="js/map_home.js"></script>
    <script type="text/javascript" src="js/infobox.js"></script>
    <script type="text/javascript" src="ayoshare/ayoshare.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".share").ayoshare({
                button: {
                    google : true,
                    stumbleupon : false,
                    facebook : true,
                    pinterest : true,
                    bufferapp : false,
                    reddit : false,
                    vk : false,
                    pocket : false,
                    twitter : true,
                    digg : false,
                    telegram : true,
                    sms : false
                }
            });
            
        });
    </script>  
</body>

</html>