<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
        <link rel="stylesheet" href="css/themes/novica.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
        <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
        <script src="http://vjs.zencdn.net/4.11/video.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
            $(function(){
                $('#menu1').slicknav({
                    prependTo:'#navigation-menu1'
                });
            });
            $(function(){
                $('#menu2').slicknav({
                    prependTo:'#navigation-menu2'
                });
            });
            $(function(){
                $('#menu3').slicknav({
                    prependTo:'#navigation-menu3'
                });
            });
            $(function(){
                $('#menu4').slicknav({
                    prependTo:'#navigation-menu4'
                });
            });
            $(function(){
                $('#menu5').slicknav({
                    prependTo:'#navigation-menu5'
                });
            });
            $(function(){
                $('#menu6').slicknav({
                    prependTo:'#navigation-menu6'
                });
            });
            $(function(){
                $('#menu7').slicknav({
                    prependTo:'#navigation-menu7'
                });
            });
            $(function(){
                $('#menu8').slicknav({
                    prependTo:'#navigation-menu8'
                });
            });
            $(function(){
                $('#menu9').slicknav({
                    prependTo:'#navigation-menu9'
                });
            });
            $(function(){
                $('#menu10').slicknav({
                    prependTo:'#navigation-menu10'
                });
            });
            $(function(){
                $('#menu11').slicknav({
                    prependTo:'#navigation-menu11'
                });
            });
            $(function(){
                $('#menu12').slicknav({
                    prependTo:'#navigation-menu12'
                });
            });
            $(function(){
                $('#menu13').slicknav({
                    prependTo:'#navigation-menu13'
                });
            });
            $(function(){
                $('#menu14').slicknav({
                    prependTo:'#navigation-menu14'
                });
            });
            $(function(){
                $('#menu15').slicknav({
                    prependTo:'#navigation-menu15'
                });
            });
            $(function(){
                $('#menu16').slicknav({
                    prependTo:'#navigation-menu16'
                });
            });
            $(function(){
                $('#menu17').slicknav({
                    prependTo:'#navigation-menu17'
                });
            });
            $(function(){
                $('#menu18').slicknav({
                    prependTo:'#navigation-menu18'
                });
            });
            $(function(){
                $('#menu19').slicknav({
                    prependTo:'#navigation-menu19'
                });
            });
            $(function(){
                $('#menu20').slicknav({
                    prependTo:'#navigation-menu20'
                });
            });
            $(function(){
                $('#menu21').slicknav({
                    prependTo:'#navigation-menu21'
                });
            });
            $(function(){
                $('#menu22').slicknav({
                    prependTo:'#navigation-menu22'
                });
            });
            $(function(){
                $('#menu23').slicknav({
                    prependTo:'#navigation-menu23'
                });
            });
            $(function(){
                $('#menu24').slicknav({
                    prependTo:'#navigation-menu24'
                });
            });
            $(function(){
                $('#menu25').slicknav({
                    prependTo:'#navigation-menu25'
                });
            });
            $(function(){
                $('#menu26').slicknav({
                    prependTo:'#navigation-menu26'
                });
            });
            $(function(){
                $('#menu27').slicknav({
                    prependTo:'#navigation-menu27'
                });
            });
            $(function(){
                $('#menu28').slicknav({
                    prependTo:'#navigation-menu28'
                });
            });
            $(function(){
                $('#menu-contact').slicknav({
                    prependTo:'#navigation-menu-contact'
                });
            });

			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function () {

		      // Slideshow 4

                // slideshow test from novica

		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		});
			// 	}
			// });

    	</script>

	</head>
	<body>

		<?php
			include 'settings.php';

			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logoo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Powered by <a href="http://www.mobilegrows.com" rel="external">MOBILEGROWS</a><a href="http://www.smilemoredental.com/" rel="external"> | Classic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">


		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider01.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider02.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider03.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->

				      </li>
                        <li>
                            <img src="img/slider-images/slider04.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->

                        </li>
                        <li>
                            <img src="img/slider-images/slider5.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->

                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">CALL US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="FIND US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="FIND US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{

									     console.log("Blakberu je prosao ");
									   <!--k,cvj bsdj kb vjklbvj,.x-->
									}

									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="FIND US";
									// prostordugme.appendChild(dugme);
									// }
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="FIND US";
								prostordugme.appendChild(dugme);
							}



							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>



					</div>
				</fieldset>
				
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></div>
				</div>
		  </div>


		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


     <!--dugmad za about us -->
        <div data-role="page" id="about" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu1">
                        <ul id="menu1" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#our" data-transition="<?php echo $transitionefect ?>">OUR MISSION</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#patient" data-transition="<?php echo $transitionefect ?>">PATIENT REVIEWS & TESTIMONIALS</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#card" data-transition="<?php echo $transitionefect ?>">SMILES CARD</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#office" data-transition="<?php echo $transitionefect ?>">OFFICE TOUR</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#contact" data-transition="<?php echo $transitionefect ?>">HOURS AND LOCATION</a></div>
                    </div>


                </div>

            </div>


        </div>
        <!--  DUGME contact us -->
        <div data-role="page" id="contact" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu2">
                        <ul id="menu2" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    
                    <h1>Contact Us</h1>
                    <p><strong>Smile More Dental Lombard</strong></p>
                    <p>432 East Roosevelt Road</p>
                    <p>Lombard, IL 60148</p>
                    <p>Phone: 630.629.4100 CALL NOW!</p>
                    <p> OR </p>
                    <p>REQUEST AN APPOINTMENT ONLINE</p>
                    <p>Office Hours (7 Days A Week!)</p>
                    <p>Monday-Friday: 10AM to 6PM</p>
                    <p>Saturday: 9AM to 5PM</p>
                    <p>Sunday: 11PM to 4PM</p>
                    <p><strong>Smile More Dental Wheaton</strong></p>
                    <p>225 Rice Lake Sq.</p>
                    <p>Wheaton, IL 60189</p>
                    <p>Phone: 630.343.7002 CALL NOW!</p>
                    <p>OR</p>
                    <p>REQUEST AN APPOINTMENT ONLINE</p>
                    <p>Office Hours</p>
                    <p>Monday-Friday: 10AM to 6PM</p>
                    <p>Saturday: 9AM to 5PM</p>


                </div>

            </div>


        </div>

        <!--  DUGME OUR MISION -->

        <div data-role="page" id="our" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu3">
                        <ul id="menu3" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section
                          <section>

                        <h2><strong>Our Mission</strong></h2>
                        <p>Smile More Dental cares about oral health! Our facilities are all-digital and our doctor’s skill and honesty will surpass your expectations. Come in and see for yourself.</p>
                        <p>Our mission</p>
                        <ul>
                            <li>To enhance each patient’s quality of life in a professional and compassionate manner.</li>
                            <li>To accomplish optimal results using the latest technologies and techniques.</li>
                            <li>To obtain improved oral health and maintain it through preventive care.</li>
                            <li>To provide affordable care that exceeds today’s standards.</li>
                            <li>To help YOU find the SMILE that you want so that you can Smile More.</li>
                    </ul>

                        </section>
                </div>

            </div>


        </div>



        <!--dugmad za services -->
        <div data-role="page" id="services" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu4">
                        <ul id="menu4" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#exam" data-transition="<?php echo $transitionefect ?>">EXAMS AND CLEANING</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#deep" data-transition="<?php echo $transitionefect ?>">DEEP CLEANINGS</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#clear" data-transition="<?php echo $transitionefect ?>">CLEAR BRACES/ORTHO</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#laser" data-transition="<?php echo $transitionefect ?>">LASER TEETH WHITENING</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">HOME TEETH WHITENING</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#filling" data-transition="<?php echo $transitionefect ?>">FILLING</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Veeners" data-transition="<?php echo $transitionefect ?>">VENEERS</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#crowns" data-transition="<?php echo $transitionefect ?>">CROWNS</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#bridges" data-transition="<?php echo $transitionefect ?>">BRIDGES</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#implant" data-transition="<?php echo $transitionefect ?>">IMPLANT CROWNS</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#root" data-transition="<?php echo $transitionefect ?>">ROOT CANALS</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#fuul" data-transition="<?php echo $transitionefect ?>">FULL DENTURES</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#partial" data-transition="<?php echo $transitionefect ?>">PARTIAL DENTURES</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#overdentures" data-transition="<?php echo $transitionefect ?>">IMPLANT OVERDENTURES</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#tooth" data-transition="<?php echo $transitionefect ?>">TOOTH EXTRACTIONS</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#wisdom" data-transition="<?php echo $transitionefect ?>">WISDOM TEETH</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#extraction" data-transition="<?php echo $transitionefect ?>">EXTRACTION POST-OP</a></div>
                    </div>


                </div>

            </div>


        </div>

        <!--dugmad za become -->
        <div data-role="page" id="become" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu5">
                        <ul id="menu5" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.smilemoredental.com/our-mission/contact-us/request-an-appointment-in-lombard/" data-transition="<?php echo $transitionefect ?>">REQUEST AN APPOINTMENT IN LOMBARD</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.smilemoredental.com/our-mission/contact-us/request-an-appointment-in-wheaton/" data-transition="<?php echo $transitionefect ?>">REQUEST AN APPOINTMENT IN WHEATON</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#payment" data-transition="<?php echo $transitionefect ?>">PAYMENT PLANS&INSURANCE</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.smilemoredental.com/wp-content/uploads/2011/08/SMD-Registration-and-Medical-History.pdf" data-transition="<?php echo $transitionefect ?>">ENROOLMENT FORMS</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#card" data-transition="<?php echo $transitionefect ?>">SMILES CARD</a></div>
                    </div>


                </div>

            </div>


        </div>

        <!--dugmad zA login-->

        <div data-role="page" id="login" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu6">
                        <ul id="menu6" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="https://www.patientconnect365.com/Auth/PracticeLoginLocal/3202" data-transition="<?php echo $transitionefect ?>">LOMBARD LOGIN</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="https://www.patientconnect365.com/Auth/PracticeLoginLocal/4011" data-transition="<?php echo $transitionefect ?>">WHEATON LOGIN</a></div>
                    </div>


                </div>

            </div>


        </div>


        <!--our mission //////////-->
        <div data-role="page" id="our_us" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu7">
                        <ul id="menu7" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <h2>Our Mission</h2>
                    <p>"Smile More Dental cares about oral health! Our facilities are all-digital and our doctor’s skill and honesty will surpass your expectations. Come in and see for yourself."</p>
                    <p>Our Mission</p>
                    <ul>
                        <li>To enhance each patient’s quality of life in a professional and compassionate manner.</li>
                        <li>To accomplish optimal results using the latest technologies and techniques.</li>
                        <li>To obtain improved oral health and maintain it through preventive care.</li>
                        <li>To provide affordable care that exceeds today’s standards.</li>
                        <li>To help YOU find the SMILE that you want so that you can Smile More.</li>
                    </ul>



                </div>

            </div>


        </div>
        <!--PATTIENT REWWIEVS //////////-->
        <div data-role="page" id="patient" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu27">
                        <ul id="menu27" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section
                    <iframe width="350" height="300" src="https://www.youtube.com/embed/gXakld1Ewtg" frameborder="0" allowfullscreen></iframe>
                    <iframe width="350" height="300" src="https://www.youtube.com/embed/toX2VrzWfgA" frameborder="0" allowfullscreen></iframe>
                    <iframe width="350" height="300" src="https://www.youtube.com/embed/k45nA9qnZGo" frameborder="0" allowfullscreen></iframe>
                    <iframe width="350" height="300" src="https://www.youtube.com/embed/pMdgMaAEdGM" frameborder="0" allowfullscreen></iframe>
                    <iframe width="350" height="300" src="https://www.youtube.com/embed/4up-Rg8iqJw" frameborder="0" allowfullscreen></iframe>


                </div>

            </div>


        </div>
        <!--SMILES CARD////////////////////-->
        <div data-role="page" id="card" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu8">
                        <ul id="menu8" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>

                        </ul>
                    </section>

                            <h2>Smiles Card</h2>
                            <p>"Healthcare has entered a new era, the era of managed care.Â  Insurance companies have taken control of healthcare and can make invaluable care less accessible.Â  Smile More Dental wants to do something to help change that.Â  We now offer our in-house club card, the Smiles Card."</p>
                            <p>Though the Smiles Card is not the same thing as insurance, it acts very similar in many ways.</p>

                            <div class="cf">
                                <h4 class="heading-left"> Smiles Card Gold</h4>
                                <h4 class="heading-right">Smiles Card Platinum</h4>
                                <ul class="left-list">
                                    <li>$99 annually</li>
                                    <li>No waiting periods</li>
                                    <li>Includes 1 yearly exam and xrays</li>
                                    <li>20% discount off our regular prices</li>
                                    <li>All benefits expire 1 year after sign up date</li>
                                    <li>Card must be presented at time of services</li>
                                </ul>
                                <ul class="right-list">
                                    <li>$195 annually</li>
                                    <li>No waiting periods</li>
                                    <li>Includes 2 yearly exams, xrays, and basic cleaning</li>
                                    <li>Cleanings are only in the absence of gum disease</li>
                                    <li>20% discount off our regular prices</li>
                                    <li>All benefits expire 1 year after sign up date</li>
                                    <li>Card must be presented at time of services</li>
                                </ul>
                            </div>
                            <p>Discounts, exams, xrays, and cleanings only apply to services that are not covered by patientâ€™s insurance.Â  Some exclusions and restrictions apply (but not many), call for details.Â  An estimate will always be given prior to any services being performed.</p>


                </div>

            </div>


        </div>
        <!--office tour////////////////////-->
        <div data-role="page" id="office" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu9">
                        <ul id="menu9" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <h1>Office Tour</h1>
                    <img src="img/web-design/pic01.jpg" alt="SLider" class="images-mobile">
                    <img src="img/web-design/pic02.jpg" alt="SLider" class="images-mobile">
                    <img src="img/web-design/pic03.jpg" alt="SLider" class="images-mobile">
                    <img src="img/web-design/pic04.jpg" alt="SLider" class="images-mobile">
                    <img src="img/web-design/pic05.jpg" alt="SLider" class="images-mobile">
                    <img src="img/web-design/pic06.jpg" alt="SLider" class="images-mobile">


                </div>

            </div>


        </div>
        <!--dugme exams u services////////////////////-->
        <div data-role="page" id="exam" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu10">
                        <ul id="menu10" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform"" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                    <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                           preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                           data-setup="{}">
                        <source src="video/crm.mp4" type='video/mp4'>
                        <source src="video/crm.webm" type='video/webm'>
                        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                    </video>
                        <h1><strong>Exams and Cleanings</strong></h1>
                    <p>This may be your first visit to the dentist or just your first visit in awhile. Either way you may not know what to expect and you may even be a little nervous. So sit back, relax and let us explain to you what weâ€™ll be doing during this visit.</p>
                    <p>The first thing we will check during the exam is your face and neck. Checking visually we will look for any abnormalities such as lumps, bumps, or swelling. Checking inside your mouth is next on the agenda. During this part of the checkup we will be looking for any abnormalities in the soft tissue, such as discolorations or ulcers on your lips, gums, tongue, palette, and cheeks.</p>
                    <p>We will also perform an oral cancer screening and weâ€™ll check your bite and your jaw joints for any problems.</p>
                    <p>Next, we will check your gums and jawbone as they are the foundation for your teeth. We will check them for any signs of gingivitis, gum disease, and bone disease. Checking your teeth comes next. We will be checking them for any cavities or other problems.</p>
                    <p>Finally, we will be sure to look specifically at any areas where you may have symptoms or concerns.</p>
                    <p>In most cases a clinical exam by itself is not sufficient to completely diagnose all potential problems with your mouth. In fact, the majority of problems with your teeth and the jaw bone are not visible to the naked eye, thatâ€™s why x-rays play a key role in allowing a better and more accurate look at what is really going on inside your mouth and below your teeth and gums.</p>
                    <p>A good example of this would be the use of x-rays to better diagnose the destructive periodontal disease. By using x-rays your dentist can check for any bone loss and determine the severity of the gum disease. Based on the diagnosis from the x-ray, your dentist can then determine the proper cleaning or treatment you may require.</p>
                    <p>In addition to revealing any problems that were not visible during the clinical exam, these initial x-rays will also provide your dentist with a benchmark with which to compare against during your future visits.</p>
                    <p>If you have any additional questions, please consult your dentist.</p>
                    </section>
                </div>

            </div>


        </div>
        <!--dugme deep u services////////////////////-->
        <div data-role="page" id="deep" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu11">
                        <ul id="menu11" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/deep cleanings.mp4" type='video/mp4'>
                            <source src="video/deep cleanings.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Deep Cleanings</h1>
                        <p>Scaling and Root Planing is frequently referred to as, Deep Cleaning. Deep cleaning is the treatment of choice for an infectious disease called periodontal disease.</p>
                        <p>So what is periodontal disease?</p>
                        <p>Periodontal disease mainly starts with the formation of plaque around the teeth. Plaque is the yellow film on your teeth caused by food and bacteria in your mouth. When plaque buildup mixes with the saliva it hardens over time and turns into tarter. Tarter containing bacteria will irritate the gums around the teeth by attaching to the outer surface of the teeth and roots and releases poisonous toxins. These toxins cause an infection and an inflammation of the gums. Worse, if left untreated, they can ultimately cause bone loss and eventually tooth loss. Keep in mind, the lost bone will never grow back.</p>
                        <p>Fortunately, deep cleaning can help. Deep cleaning is a procedure that treats the infected area by meticulously cleaning the tarter and bacteria from the teeth and their roots.</p>
                        <p>Deep Cleaning or Scaling and Root Planing is normally performed by your dentist or dental hygienist in a couple of visits. The exact number of visits, however, depends on your dentist and the amount of tarter buildup. Often your dentist will choose to administer a local anesthetic to make the procedure virtually painless.</p>
                        <p>The deep cleaning is either done manually or with an ultrasonic instrument called a Cavitron or sometimes a combination of the two. Both techniques loosen and remove plaque and tarter buildup.</p>
                        <p>In addition, antibacterial irrigants or local antibiotics, such as Arestin, may be used in conjunction with the cleaning procedure to further reduce the number of bacteria around the gums.</p>
                        <p>Also keep in mind, although rare, one or more of the following symptoms can occur after treatment:</p>
                        <ul>
                            <li>Bleeding of the gum</li>
                            <li>Inadvertent removal or irritation of the gum</li>
                            <li>Teeth discomfort, such as sensitivity to hot and cold or sweets</li>
                            <li>Swelling and inflammation of the gum</li>
                            <li>Allergies to some of the materials used during the procedure</li>
                        </ul>
                        <p>You may ask yourself, can I get a regular cleaning instead?</p>
                        <p>The answer is no. As the name deep cleaning implies, the main difference is that deep cleaning goes below the gum to remove plaque or tarter buildup from the toothâ€™s root where the bone is affected by the infection, whereas, regular cleaning only removes the plaque or tarter above the gum.</p>
                        <p>Periodontal disease can not currently be cured, it can only be controlled so itâ€™s important to follow your dentistâ€™s recommendations for follow-up maintenance and treatment.</p>
                        <p>In addition to routine checkups, performing proper dental hygiene at home is, of course, also important to help prevent the reoccurrence of this destructive disease.</p>
                        <p>Please check with your dentist or dental hygienist if you have any additional questions.</p>
                    </section>
                </div>

            </div>


        </div>

        <!--dugme clear u services////////////////////-->
        <div data-role="page" id="clear" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu12">
                        <ul id="menu12" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform"" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>

                        <h1>Clear Braces/Orto</h1>
                        <p>We offer two different types of ortho to make your smile into the beautiful straight smile that you want.Â Currently, we only offer ortho for adults (18 years old and older)</p>
                        <h2>6 Month Clear Braces or 6 Month Metal Braces</h2>
                        <iframe width="362" height="244" src="https://www.youtube.com/embed/0u1pyrOsEWE" frameborder="0" allowfullscreen></iframe>
                        <p>â€˜Ever since I was a kid I had had crooked teeth.â€™ â€“ Debra Friedhaber</p>
                        <p>â€˜And it was something I was always embarrassed about.â€™ â€“ Carrie Starr</p>
                        <p>â€˜Because it was right there in the front and Iâ€™m a teacher.â€™ â€“ Mindy Johnston</p>
                        <p>â€˜Thatâ€™s probably why I didnâ€™t smile in the past because youâ€™re always you know, hiding behind your smile or not laughing when everybody else is.â€™ â€“ Melissa Piecuch</p>
                        <p>â€˜And thatâ€™s what I grew up with, was thinking about what do I look like right now, how do other people see what my smile looks like.â€™ â€“ Kate Poda</p>
                        <p>â€˜And it made me feel bad.â€™ â€“ Debra Friedhaber</p>
                        <p>Millions of adults and teenagers live with unsightly or embarrassing smiles because they donâ€™t know there is an option that is right for them. Porcelain veneers are expensive and traditional orthodontics take years. These are not reasonable options for most and many people feel stuck, living their lives with an embarrassing smile.</p>
                        <p>But you can get the smile youâ€™ve always wanted. Let me introduce you to the most effective solution for crooked teeth, Six Month Smiles. Itâ€™s a safe and comfortable solution that transfers your smile from unsightly to sexy. Youâ€™ll feel confident about showing off your smile and youâ€™ll be able to do that in just six months.</p>
                        <p>â€˜It has changed my life. It really has.â€™ â€“ Carrie Starr</p>
                        <p>â€˜I feel like I can lift my chin up a little higher.â€™ â€“ Brennan Dooling</p>
                        <p>â€˜And I feel more confident when Iâ€™m talking to my students.â€™ â€“ Mindy Johnston</p>
                        <p>â€˜And itâ€™s amazing what nice, straight teeth can do for you.â€™ â€“ Melissa Piecuch</p>
                        <p>â€˜Iâ€™m happy to smile now.â€™ â€“ Debra Friedhaber</p>
                        <p>Most people can chew comfortably which usually means they donâ€™t need a major bite change. They simply want to improve the appearance of their smile and thatâ€™s what Six Month Smiles is all about.</p>
                        <p>We focus on the teeth that show when you smile. In fact, the two biggest obstacles for people considering orthodontics are the length of treatment and appearance of the braces. Six Month Smiles addresses both of these concerns while still achieving the desired results.</p>
                        <p>We use clear braces and tooth colored wires while gently straightening your teeth in a reasonable amount of time.</p>
                        <p>â€˜It was a fraction of the time and half the cost so it was really a no brainer for me.â€™ â€“ Melissa Piecuch</p>
                        <p>â€˜I did not want traditional braces cause I did not want to spend two to three years of my life with braces.â€™ – Debra Friedhaber</p>
                        <p>â€˜When I was wearing the braces people had no idea.â€™ – Brennan Dooling</p>
                        <p>â€˜I also sing in a choir at church and they put you up on the big screen and that always terrifies me but you canâ€™t tell. You canâ€™t tell from long distance. Some people canâ€™t even tell up close.â€™ â€“ Mindy Johnston</p>
                        <p>How does it work?</p>
                        <p>The process is simple. First, you need to talk to your dentist and make sure that you are a candidate for Six Month Smiles. Once itâ€™s determined that Six Month Smiles will work for you, molds of your teeth are taken and sent to the Six Month Smiles laboratory. Here our specially trained lab technicians fabricate custom bonding trays just for you.</p>
                        <p>In only two weeks, your dentist will receive your complete orthodontic kit and can quickly and comfortably apply your braces. After your braces are on, youâ€™ll visit your dentist once a month for adjustments.</p>
                        <p>Treatment times range approximately four to nine months, but most patients complete their treatment in only six months. Just think, between now and your next cleaning appointment you can achieve the smile youâ€™ve always wanted. Youâ€™ll leave feeling confident and ready to enjoy life with your new smile. Your Six Month Smile.</p>
                        <p>â€˜When people think about having their teeth straightened, they want to know which is going to be the least expensive option and which is going to be the fastest option. Compared to Invisalign we find, in our practice, that patients want Six Month Smiles because itâ€™s less expensive and the tooth movement is much more predictable. Things happen between two and three times faster.â€™ â€“ Ryan Swain, DMD</p>
                        <p>â€˜I thought thatâ€™s not possible. Thereâ€™s no way you could get your teeth fixed in just six months. â€™ â€“ Carrie Starr</p>
                        <p>â€˜Actually it only took five and a half months. â€˜â€“ Debra Friedhaber</p>
                        <p>â€˜Looking back on it. Being done now. It was so quick. It was quicker than I thought it would be.â€™ â€“ Mindy Johnston</p>
                        <p>â€˜Everything about it, itâ€™s geared for adults and you feel like an adult. Youâ€™re treated like an adult. Youâ€™re treated with respect and I really enjoyed the whole process.â€™ â€“ Carrie Starr</p>
                        <p>Donâ€™t wait. Tell your certified Six Month Smiles dentist that you want to get started. Your new beautiful smile is just six months away.</p>
                        <h3>ClearCorrect Invisible Aligners</h3>
                        <p>ClearCorrect is the latest in invisible clear aligners.Â  NO more brackets, NO more wires, and NO more braces.Â  ClearCorrect clear aligners are a series of invisible trays that are worn throughout the day.Â  You can smile, talk, laugh, and even sleep with them on.</p>
                    </section>
                </div>

            </div>


        </div>
        <!--dugme laser u services////////////////////-->
        <div data-role="page" id="laser" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu13">
                        <ul id="menu13" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/laser teeth whitening.mp4" type='video/mp4'>
                            <source src="video/laser teeth whitening.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Laser Teeth Whitening</h1>
                        <p>When you look in the mirror, what color are your teeth? White? Yellow? Brown?</p>
                        <p>You may or may not be aware that over time teeth naturally become darker and stained. In addition to natural aging there are some other factors, like cigarette smoking and certain types of foods and drinks, such as coffee and tea, also darken your teeth. Some prescription and over the counter drugs can have the same effect as well.</p>
                        <p>A bright, white smile can be achieved by bleaching your teeth. There are several ways in which this can be done but the most commonly recommended technique by dentists is an in office bleaching. Hands down this is the quickest and most effective way to whiten your teeth.</p>
                        <p>So hereâ€™s how it works.</p>
                        <p>In office whitening uses a concentrated hydrogen peroxide gel to bleach your teeth to a brighter, whiter smile. To help accelerate the process for better results, a special light, or with some bleaching systems, a laser is used in conjunction with the gel. Whatâ€™s great is that the whitening procedure generally only takes one office visit.</p>
                        <p>The first step is to make sure that the teeth are free of any plaque or tarter.</p>
                        <p>The next step is to apply a protective layer of cream to your lips so they stay moist during the process.</p>
                        <p>Next, your dentist will place a protection on your gums. Now that the lips and gums have been protected, your dentist will apply the bleaching gel to the teeth.</p>
                        <p>Finally, the entire process is accelerated by shining a special light on your teeth. The entire process takes roughly one to two hours and unlike other whitening techniques that may take weeks to show results you will see results almost instantly.</p>
                        <p>In office whitening can last anywhere from a few months to a few years and the degree of whitening changes from person to another. This in part depends on the original condition of your teeth, specifically how stained they were, as well as the strength of the bleaching gel used. Also, in large part, it depends on your eating, drinking, and smoking habits as no teeth whitening solution will result in a permanent color change in your teeth and it wonâ€™t prevent future staining. However, you can maintain this whitening effect with the use of a home whitening kit. Some whitening involves wearing a custom fit mouth guard that contains a less concentrated hydrogen peroxide gel to help preserve your new brighter and whiter smile.</p>
                        <p>There are some minor risks associated with whitening. The most common side effect is teeth sensitivity. Teeth sensitivity is generally mild and often subsides in a few days. Brushing your teeth with a highly concentrated, fluoride toothpaste or desensitizing toothpaste, such as Sensodyne, will also help reduce the discomfort. Your dentist can also prescribe you a fluoride gel to use which will also help reduce the sensitivity. Gum irritation or discoloration is another possible side effect. This will subside and the gum will go back to normal condition in about a few days.</p>
                        <p>If you have any additional questions, please consult with your dentist.</p>
                    </section>
                </div>

            </div>


        </div>
        <!--dugme home u services////////////////////-->
        <div data-role="page" id="home" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu14">
                        <ul id="menu14" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/home teeth whitening.mp4" type='video/mp4'>
                            <source src="video/home teeth whitening.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Home Teeth Whiteening</h1>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme fillings u services////////////////////-->
        <div data-role="page" id="filling" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu15">
                        <ul id="menu15" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/fillings.mp4" type='video/mp4'>
                            <source src="video/fillings.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Fillings</h1>
                        <p>After your tooth is prepared and ready to be filled it is important to pick the right filling material. Your dentist would best advise you on this.</p>
                        <p>The first filling type of Amalgam, commonly referred to as, silver fillings. Amalgams are a mixture of metals, such as, mercury, silver, copper, and tin.</p>
                        <p>The second type is a composite filling which consists of plastic and glass particles and closely matches your tooth color.</p>
                        <p>There is no one right filling for everyone. In most cases, your best bet is to follow your dentistâ€™s recommendation but in order to make an informed decision here is what you should know about each type of filling.</p>
                        <p>An Amalgam filling may have sensitivity to cold foods and drinks after placement for a few days or even longer, in addition, these silver fillings often discolor the tooth and surrounding gum. You should consult with your dentist before choosing Amalgam fillings.</p>
                        <p>Composite is the filling of choice when it comes to matching your tooth color. Composite filings consist of plastic and glass particles. They have become the most popular filling material because in addition to closely resembling your existing tooth color they also solidly bond or glue to the tooth. Also they donâ€™t contain mercury or any other metal like silver fillings and there is less likelihood of sensitivity to cold food and drinks.</p>
                        <p>If you have any additional questions, please consult your dentist.</p>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme veeners u services////////////////////-->
        <div data-role="page" id="Veeners" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu16">
                        <ul id="menu16" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/veneers.mp4" type='video/mp4'>
                            <source src="video/veneers.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Veneers</h1>
                        <p>Veneers are custom made tooth colored gels that are bonded to your teeth with dental cement or bonding adhesive. They cover the front surfaces of your teeth and can help improve your appearance and smile by covering up the tooth that is discolored, misshaped, or worn down. Veneers can also close gaps between teeth or repair a chipped tooth.</p>
                        <p>Veneers can be made from several different types of materials. Generally, your dentist will help you decide what type is best for you.</p>
                        <ul>
                            <li>Porcelain Veneers</li>
                            <li>Lumineers</li>
                            <li>Composite Veneers</li>
                        </ul>
                        <p>Porcelain Veneers are the most common type of veneers. Porcelain has a very shiny surface that closely resembles your enamel and will give you a more natural and translucent appearance. In addition, porcelain is stain resistant and it is also very friendly to your gums.</p>
                        <p>It normally takes two visits for your dentist to complete your veneers. If preparation is necessary, on the first visit your dentist will use a dental hand piece to shape and prepare the teeth so the veneer s will properly fit over them.</p>
                        <p>Next, an impression of your teeth is taken and temporary veneers may be placed to protect the prepared teeth. The impression of your teeth is then sent to a dental laboratory where custom fit veneers are made.</p>
                        <p>During this first visit, your dentist will also help you choose the proper shade for color of your veneers.</p>
                        <p>In most cases, on your second visit the veneers are placed and if necessary adjusted to created a proper fit. If the fit, shape, and color of the veneers are satisfactory your dentist will proceed with permanently cementing them into place.</p>
                        <p>Keep in mind that in some incidences the veneer received back from the laboratory may not fit as expected. In these cases, your dentist may have to take second impression or readjust the tooth in order to fabricate a veneer that fits just right and creates the beautiful smile you want.</p>
                        <p>Even though rare, during the first few days with your new veneers, you may feel some discomfort or sensitivity to temperature changes. As advised by your dentist, you can take over the counter pain medicine to alleviate the discomfort. If your symptoms persist more than a few days, visit your dentist.</p>
                        <p>Sometimes your newly cemented veneers may feel too tall. In this case, you should also contact your dentist for further adjustment of the veneers. Porcelain veneers are usually not repairable should they chip or crack so you should attempt to avoid biting directly on small, hard items, such as, hard candies, your fingernails, or pens. You should never chew on anything cold or hard, such as, ice.</p>
                        <p>If you grind your teeth during the day or night, your dentist might recommend a night guard to protect your veneers from this grinding force. A night guard is a plastic cover that fits over your teeth to deflect hard forces. Night guards will also increase the longevity of your veneers.</p>
                        <p>Finally, it is important to keep up with your daily brushing or flossing to avoid getting cavities in your teeth with veneers as well as your other teeth.</p>
                        <p>I f you have any additional questions, please consult your dentist.</p>


                    </section>
                </div>

            </div>


        </div>
        <!--dugme crowns u services////////////////////-->
        <div data-role="page" id="crowns" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu17">
                        <ul id="menu17" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/crowns.mp4" type='video/mp4'>
                            <source src="video/crowns.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Crowns</h1>
                        <p>As you age, your teeth age too. Decay, fillings, trauma, or even just normal chewing habits can make your teeth break down over time. A dental crown, or a cap, is a cover that is placed over a tooth to protect a weakened tooth from further fracturing or deteriorating. A crown can also be used to replace a discolored or badly shaped tooth or protect a tooth that has had a root canal. Lastly, a new crown is necessary to simply replace an old, worn down, or defective crown.</p>
                        <p>It normally takes two visits for your dentist to complete your crown. On your first visit a local anesthetic is administered to make the procedure more comfortable. During this visit, your dentist will use a dental hand piece to shape and prepare the tooth so the crown can properly fit over it. In some instances, the tooth may need an additional procedure to replace areas of decay or old fillings to better support the crown.</p>
                        <p>Next, an impression of the tooth is taken and a temporary crown is inserted to protect the prepared tooth. This impression is then sent to a dental laboratory where a custom fit permanent crown is made.</p>
                        <p>In some cases, on your second visit the permanent crown is placed and if necessary, adjusted to create a proper fit. If the fit, shape, and color of the crown are satisfactory your dentist will proceed with permanently cementing it into place. Keep in mind that in some instances the crown received back from the laboratory may not fit as expected. In these cases, your dentist may need to take a second impression or readjust the tooth in order to fabricate a crown that fits just right.</p>
                        <p>After the successful completion of the crown it is not uncommon to feel some discomfort, mild pain when you chew or sensitivity to temperature changes for a few days. As advised by your dentist, you can take over the counter pain medicine to alleviate the discomfort. If these symptoms persist more than a few days, visit your dentist.</p>
                        <p>Finally, if your newly cemented crown feels to tall or your bite doesnâ€™t feel right you should contact your dentist for further adjustment of the crown.</p>
                        <p>You may ask yourself, canâ€™t I just get a filling instead?</p>
                        <p>The answer is usually no. When a tooth requires a crown it has already been weakened to the point that it may not be strong enough to support a filling. Using an unsupported filling instead of a crown often causes the tooth to fracture beyond the point of repair.</p>
                        <p>Please keep in mind that the longevity of your crown depends in large part on the materials in the crown as well as your oral hygiene, diet, and the health of the supporting tooth and gums. It is important to maintain all of your teeth with proper brushing and flossing.</p>
                        <p>If you have any additional questions, please consult your dentist</p>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme bridges u services////////////////////-->
        <div data-role="page" id="bridges" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu18">
                        <ul id="menu18" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/bridges.mp4" type='video/mp4'>
                            <source src="video/bridges.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Bridges</h1>
                        <p>A bridge is used to replace one or more missing teeth in your mouth. Bridges are fixed, in that they are cemented on the supporting teeth or in some cases, fixed on an implant that has been placed next to the missing teeth.</p>
                        <p>Replacing the missing teeth will restore your ability to properly chew and speak besides its cosmetic advantages. In addition, the space caused by the missing teeth may allow the surrounding teeth to shift into that space. This shifting could cause a misalignment in your bite that can result in problems with your jaw joint. These shifted teeth are harder to clean making them more susceptible to gum disease, decay or even additional tooth loss.</p>
                        <p>It normally takes two or more visits for your dentist to complete the bridge.</p>
                        <p>On your first visit, a local anesthetic is administered to make the procedure more comfortable. During this visit, the supporting teeth, which are typically the ones on either side of the missing tooth are prepared by shaping and reducing their size. This is done to make room for the crowns that will slide over each of the supporting teeth. These crowns also serve as holders of the pontic, which is the missing toothâ€™s replacement.</p>
                        <p>Next, an impression of the abutments or the supporting teeth is made so a dental laboratory can custom fit the bridge.</p>
                        <p>Finally, a temporary bridge is inserted to protect the abutments as well as the space between them. In most cases, on your second visit the permanent bridge is placed and adjusted to insure proper fit and function. If the fit of the bridge is satisfactory your dentist will proceed with permanently cementing it into place.</p>
                        <p>Keep in mind in some instances, the bridge received back from the laboratory may not fit as expected. In these cases, your dentist may have to take a second impression or readjust the supporting teeth in order to fabricate a bridge that fits just right.</p>
                        <p>After the successful completion of the bridge, you may feel some discomfort, mild pain on biting, or sensitivity to temperature changes for a few days. As advised by your dentist, you can take an over the counter pain medicine to alleviate the discomfort. If these symptoms persist more than a few days, visit your dentist.</p>
                        <p>Please keep in mind that the longevity of your bridge depends in large part on your oral hygiene, diet and the health of the supporting teeth and gums, as well as the quality of the material in the bridge. Please ask your dentist for proper brushing and flossing techniques.</p>
                        <p>So letâ€™s take a look at different options</p>
                        <p>Even though rare, a full metal bridge is more suitable for replacing a missing tooth in the back of your mouth. Metal bridges are often the best option for people who have worn their teeth excessively. Note, there are different metals to choose from but as a rule the more precious metal or gold content in the metal the better the fit of the bridge and the better the health of the gums around it.</p>
                        <p>Keep in mind, fit is an important factor in sealing out the bacteria that tries to get between the bridge and the tooth possibly causing decay and premature failure of the bridge. In addition, gold tends to limit sensitivity or discoloration of the teeth or gums around the bridge compared to non-precious metals.</p>
                        <p>All porcelain bridges are generally considered the most aesthetic choice since they closely resemble the color and appearance of your teeth. However, all porcelain bridges tend to be more fragile compared to other brides. Porcelain bridges are most widely used to replace missing teeth in the front of the mouth. Porcelain continues to improve and in fact there are newly developed porcelain materials, such as Zirconium and Empress too, that better withstand the forces of chewing. Porcelain bridges can give you the Hollywood smile that youâ€™re looking for.</p>
                        <p>The third kind of bridge has a porcelain exterior with a metal framework supporting it underneath. The porcelain gives you the desired aesthetic and the metal framework provides better structural support making the porcelain much stronger. This type of porcelain metal hybrid bridge can be used to replace missing teeth in any area of the mouth, front or back. Again, as a rule the more precious metal or gold content in the metal the better the fit of the bridge and the better the health of the gums around it.</p>
                        <p>Your dentist will recommend the bridge type that will be best for you, both in terms of quality and aesthetics.</p>
                        <p>If you have any additional questions, please consult your dentist.</p>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme implant u services////////////////////-->
        <div data-role="page" id="implant" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu19">
                        <ul id="menu19" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/implant crowns.mp4" type='video/mp4'>
                            <source src="video/implant crowns.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Implant Crowns</h1>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme root u services////////////////////-->
        <div data-role="page" id="root" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu20">
                        <ul id="menu20" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform"" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/root canals.mp4" type='video/mp4'>
                            <source src="video/root canals.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Root Canals</h1>
                        <p>Root Canal Therapy refers to a treatment in which your dentist removes the bacteria infection that has entered your toothâ€™s pulp or nerve chamber.</p>
                        <p>Why would you need a root canal?</p>
                        <p>There are several reasons why your tooth may become irritated and inflamed, such as, deep decay, big fillings, trauma to the tooth, a chipped tooth, or even repeated dental work.</p>
                        <p>So hereâ€™s how it works.</p>
                        <p>Root canal treatment is routinely performed in one or more visits.</p>
                        <p>First, a local anesthetic is administered to numb the tooth so that the procedure is more comfortable.</p>
                        <p>Next, your dentist will place a protective shield or rubber dam to keep the tooth clean and saliva free.</p>
                        <p>Once numbness sets in, an opening is made through the top part of the tooth. Root canal files are used to clean and shape the inside of the canals and prepare the root canal for a final filling material.</p>
                        <p>During the process, a cleansing solution is used to help clean out any remaining bacteria or tooth debris. X-rays may also be taken periodically during the procedure to inform your dentist of the ongoing process.</p>
                        <p>Once the bacteria is successfully removed, your dentist will make the decision whether to continue with the root canal filling procedure or to postpone it for the next visit. This decision depends on the degree of your infection and the professional judgment of your dentist.</p>
                        <p>When the root canal filling is performed it is generally done by placing a rubber like material with a sealer that fills the entire length of the root canal. A temporary filling is then placed on the tooth.</p>
                        <p>Please keep in mind that root canal therapy treats the diseased pulp of the tooth but the treatment is not complete until the tooth is restored to a functional stage. This means a crown or similar type of dental work is necessary to make the tooth operational again.</p>
                        <p>After completion of root canal therapy you might feel some discomfort for a few days following the treatment. To alleviate the discomfort you can follow your dentist recommendation on taking an over the counter pain medication. In more extreme cases, your dentist may prescribe an antibiotic and prescription strength pain reliever to help reduce any remaining infection.</p>
                        <p>Following root canal therapy, you should never chew directly on the repaired tooth until its final restoration has occurred or your tooth may crack. Also keep in mind that the longer you wait to complete the final restoration, the more likely bacteria will reinfect the treated canal requiring the therapy to be performed all over again.</p>
                        <p>Root canal therapy, like every other treatment, is not free of unknowns and complications. There is a possibility that during the procedure a shaping file could break and get stuck in the root canal or that the root of the tooth fractures. In other cases, itâ€™s possible to miss a hidden root or an extra canal thatâ€™s in need of treatment.</p>
                        <p>Lastly, a good seal may not be achieved due to the shape of the root. Of course, these complications are the exceptions not the norm.</p>
                        <p>In the event that root canal therapy is unsuccessful your dentist can discuss alternative options, including, repeating the treatment or extracting the infected tooth.</p>
                        <p>Please keep in mind that the longevity of your tooth and its root canal depends in large part on your oral hygiene and diet. So be sure to maintain your teeth with proper brushing and flossing.</p>
                        <p>If you have any additional questions, please consult your dentist.</p>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme full u services////////////////////-->
        <div data-role="page" id="fuul" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu21">
                        <ul id="menu21" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform"" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/full dentures.mp4" type='video/mp4'>
                            <source src="video/full dentures.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Full Dentures</h1>
                        <p>Like many things in life, the importance of something is never truly appreciated until it is gone. If you have lost your teeth whether by injury, tooth decay, or gum disease you surely understand. The good news is that you have options to replace them.</p>
                        <p>Dentures can help restore you way of life by helping you with day to day functions, such as eating and speaking, as well as help restore your confidence by improving your appearance and smile.</p>
                        <p>Making a denture is a process that usually takes about six to twelve weeks, however this can vary from one patient to another. It also depends on the type of the denture and the technique your dentist or the laboratory technician uses to make the denture.</p>
                        <p>Complete dentures are made using your mouth as a model.</p>
                        <p>First, your dentist will take an accurate impression of the upper and lower arches of your mouth. This impression is then sent to the dental laboratory.</p>
                        <p>At the next visit, the dentist will record the relationship of the arches that best resembles your original bite and helps you select the shape and color of the denture teeth and gums. Keep in mind the color of everyoneâ€™s gums varies. To make a more natural denture your dentist will help you choose the shade that best matches your mouth.</p>
                        <p>In the subsequent visits, your dentist will adjust your bite, test your speech, and check the appearance and functionality of the denture teeth and gums. After a satisfactory fit and appearance are achieved the denture is then sent back to the laboratory for fabrication.</p>
                        <p>While every effort is made to make a good and functional denture please keep in mind that there is no such thing as a perfect denture. After delivery of the denture it may require a few adjustment visits and some time for you and your new denture to adapt to each other. The most important point to remember is that adjusting to your new dentures is a process. It sometimes it takes a little time to get used to.</p>
                        <p>A new denture can also alter your eating and speaking habits and it make require a bit of practicing before you get comfortable.</p>
                        <p>Finally, due to the differences in the shapes of the jaws and the strong muscle movement of the tongue and cheek, a lower denture may be harder to keep in the mouth compared to an upper denture. There are new advances in making dentures. One such advance is an implant supported denture that stabilizes the denture. This kind of denture requires the placement of implants in your mouth before making the dental appliance.</p>
                        <p>If you have any additional questions, please consult your dentist.</p>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme partial u services////////////////////-->
        <div data-role="page" id="partial" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu22">
                        <ul id="menu22" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform"" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/partial dentures.mp4" type='video/mp4'>
                            <source src="video/partial dentures.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Partial Dentures</h1>
                        <p>Partial dentures are replacement teeth for people who have lost one or more of their teeth. Partial dentures can be taken in and out of the mouth and consist of a denture base which closely resembles the color of your gums and denture teeth, which are attached to a supporting framework. The partial denture then attaches to the existing teeth via a clasp or some other retentive device.</p>
                        <p>Making a partial denture requires about six weeks to eight weeks; however, this can vary from one patient to another. It also could depend on the type of denture and the technique your dentist or the laboratory technician uses.</p>
                        <p>The first step in making a partial denture is preparation of the teeth. During this phase, your dentist may prepare the teeth that the partial denture will use for support.</p>
                        <p>Next, your dentist will take an accurate impression of the upper and lower arches of your mouth and records your bite. The impressions are then sent to the dental laboratory.</p>
                        <p>One or two more visits may be necessary before you partial denture is delivered to you. At the subsequent visits, your dentist will evaluate your bite, test your speech, and check the appearance and function of the partial denture teeth and gums. After the final satisfactory fit and appearance are achieved, the denture is then sent back to the laboratory for final fabrication.</p>
                        <p>While every effort is made to make a good and functional partial denture it may require a few adjustment visits and a little time for you and your partial denture to adapt to each other. The most important point to remember is that adjusting to your partial denture is a process. In some cases it takes weeks to get used to a partial denture. A new partial denture can also alter your eating and speaking habits and it may require a bit of practicing before you get comfortable.</p>
                        <p>There are newly developed techniques in making partial dentures. One such advance is a partial denture that uses special material called Valplast and is more aesthetically pleasing to the eye. This kind of partial does not use metal as its base and has hooks that are made of a flexible, plastic material.</p>
                        <p>If you are scheduled to have a tooth pulled before getting your partial denture then your dentist may advise you to get a temporary partial denture or a stayplate while your gums and their supporting bone are healing. A stayplate is a temporary replacement until another form of treatment, such as, an implant, bridge, or a partial denture can be made. A stayplate will replace the missing tooth or teeth and can help you with your chewing and speaking until a more permanent solution is achieved. A stayplate will also help maintain your appearance when in public and keep your existing teeth from shifting in your mouth and creating bigger problems.</p>
                        <p>If you have any additional questions, please consult your dentist.</p>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme overdentures u services////////////////////-->
        <div data-role="page" id="overdentures" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu23">
                        <ul id="menu23" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/implant overdentures.mp4" type='video/mp4'>
                            <source src="video/implant overdentures.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Implant Overdenturess</h1>
                        <p>While every effort is made to make a good and functional denture it is sometimes hard to achieve a stable and retentive denture. This is mainly due to the jaw bone constantly shrinking with age, smoking, or some systemic diseases, such as, diabetes or even chewing pressure on the existing denture.</p>
                        <p>However, there are new advances in making dentures. One such advance is an implant supported denture that increases the stability of the denture. This kind of dental appliance requires the placement of implants in your mouth before making the denture.</p>
                        <p>Dental implants are used to replace one or more missing teeth in your mouth. Implants are made of titanium or similar materials that are well suited to the human body. They are artificial replacements for teeth roots that support a restoration or a dental appliance.</p>
                        <p>Before we start, itâ€™s important that you notify your dentist of your medical condition, such as, whether you have any artificial joints, diabetes, or a history of heart and valve conditions. You should also inform your dentist of any medications you are currently or have previously taken, such as, Redux, Phen Fen, blood thinners, or importantly, medications that contain Biphosphonates, like Fosamax.</p>
                        <p>It normally takes a few phases and several months for your dentist to complete the treatment.</p>
                        <p>In the first phase, your dentist will place the implants in your jawbone. It requires three to six months for the bone to fuse to the implants.</p>
                        <p>In the second phase, your dentist will place an extension or a post to extend the implants above the gum line. This process can also be performed during the first phase depending on the technique chosen by your dentist.</p>
                        <p>After your gums are healed itâ€™s time for an impression to be made and a final restoration or appliance to be fabricated by the dental laboratory. In most cases, on your final visit the restoration or the dental appliance is placed and adjusted to ensure proper fit and function.</p>
                        <p>While every effort is made to place a successful and functional implant it is not uncommon for implants to fail. This is mainly due to lack of proper attachment between the implant and the jaw bone during the bone fusing phase.</p>
                        <p>Other potential problems or rare possibilities:</p>
                        <ul>
                            <li>Breakage of the implants</li>
                            <li>Breakage or loosening of its restoration or appliance</li>
                            <li>Infection of the surrounding gum></li>
                        </ul>
                        <p>Finally, due to differences in the shapes of the jaws and the bone density, the back area of upper jaw may require an additional procedure, such as, a sinus lifting, to increase the predictability and long term success.</p>
                        <p>If you have any additional questions, please consult your dentist.</p>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme tooth u services////////////////////-->
        <div data-role="page" id="tooth" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu24">
                        <ul id="menu24" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/tooth extractions.mp4" type='video/mp4'>
                            <source src="video/tooth extractions.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Tooth Extractions</h1>
                        <p>A tooth extraction refers the procedure of removing a tooth from its socket.</p>
                        <p>Before we start, itâ€™s important that you notify your dentist of your medical condition, such as, whether you have any artificial joints, diabetes, or a history of heart and valve conditions. You should also inform your dentist of any medications you are currently or have previously taken, such as, Redux, Phen Fen, blood thinners, or importantly medications that contain Biphosphonates, like Fosamax.</p>
                        <p>So hereâ€™s how an extraction is done.</p>
                        <p>First, a local anesthetic is applied to make the procedure more comfortable. In some cases, your dentist will elect to use nitrous oxide gas in addition to the anesthetic. Once the area is numb, the extraction begins. A dental instrument, called an elevator, is used to wiggle the tooth in its socket. After the tooth is loosened it is removed using forceps or in some more complicated cases a surgical hand piece is also used to assist with the removal of the tooth.</p>
                        <p>Like most other procedures, tooth extraction is not free of possible complications, you should be aware that there is a slight chance of:</p>
                        <ul>
                            <li>Infection</li>
                            <li>Tenderness</li>
                            <li>Prolonged bleeding and Hematoma</li>
                            <li>Dry Socket</li>
                            <li>Loosening of neighboring teeth, or their fillings or crowns</li>
                            <li>Another rare possibility is a tooth being displaced into the sinus during an extraction of an upper tooth.</li>
                            <li>Lastly, jaw fracture is also a very rare possibility.</li>
                        </ul>
                        <p>You need to be aware of the importance of replacing the missing tooth. Why?</p>
                        <p>Once a tooth is removed the space created by the missing tooth will allow the surrounding teeth to shift into that space. This shift could cause a misalignment in your mouth that can result in chewing or jaw joint problems. These shifted teeth are harder to clean making them more susceptible to gum disease, decay, or even additional tooth loss. For these reasons, itâ€™s important to replace the tooth with a dental appliance, such as, a bridge, a removable partial denture, or an implant.</p>
                        <p>In some instances, you may be considering the option of pulling a tooth rather than simply repairing it. While it may be less expensive in the short run, in the long run it may cost you more. As you just heard, once a tooth is pulled you still need to fill the space with a dental appliance to avoid future complications. If you add the cost of extraction plus the replacement of the tooth you may simply be better off repairing it.</p>
                        <p>Please be sure to ask your dentist for proper home care and post operative instruction care.</p>

                    </section>
                </div>

            </div>


        </div>   <!--dugme wisdom u services////////////////////-->
        <div data-role="page" id="wisdom" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu25">
                        <ul id="menu25" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/wisdom teeth.mp4" type='video/mp4'>
                            <source src="video/wisdom teeth.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Wisdom Teeth</h1>
                        <p>Your third molars, commonly known as your wisdom teeth are typically the last teeth to erupt in your mouth. If healthy and functional, your wisdom teeth can be useful; however, there are also reasons behind why you may need to consider removing your wisdom teeth. In some cases, your wisdom teeth are in fact healthy but because of orthodontic treatment they need to be removed anyway. In other cases your wisdom teeth can become impacted or only partially erupt through the gum in a misalignment. When impacted or partially impacted your wisdom teeth can cause swelling, pain, and even infection of the surrounding gum.</p>
                        <p>They can also put pressure on the adjacent teeth which can result in permanent damage to these otherwise healthy teeth and their surrounding bones. Sometimes impacted or partially impacted wisdom teeth can also lead to the formation of cysts and in worst case scenarios, even tumors which could potentially destroy an entire section of your jaw.</p>
                        <p>Lastly, a fully erupted wisdom tooth needs to be removed because they are very hard to clean and can cause severe tooth decay. So for these reasons, sometimes the smart move is to have your wisdom teeth removed.</p>
                        <p>Before we start, itâ€™s important that you notify your dentist of your medical condition, such as, whether you have any artificial joints, diabetes, or a history of heart and valve conditions. You should also inform your dentist of any medications you are currently or previously have taken, such as, Redux, Phen Fen, blood thinners, or importantly medications that contain Biphosphonates, like Fosamax.</p>
                        <p>Whether your dentist or specialist is performing your extraction the procedure is the same.</p>
                        <p>First, a local anesthetic is given to make the procedure more comfortable. In some cases, your doctor may elect to administer nitrous oxide gas in addition to the anesthetic or use a general anesthetic to put you under entirely.</p>
                        <p>Once the area is numb the extraction begins. A dental instrument, called an elevator, is used to wiggle the tooth in its socket. After the tooth is loosened, it is removed using forceps or in some more complicated cases a surgical hand piece is also used to assist with the removal of the tooth.</p>
                        <p>Like most other procedures, tooth extraction is not free of possible complications, you should be aware that there is a slight chance of:</p>
                        <ul>
                            <li>Infection</li>
                            <li>Tenderness</li>
                            <li>Prolonged bleeding and Hematoma</li>
                            <li>Dry Socket</li>
                            <li>Loosening of neighboring teeth, or their fillings or crowns</li>
                            <li>Another rare possibility is a tooth being displaced into the sinus during an extraction of an upper tooth.</li>
                            <li>Lastly, jaw fracture is also a very rare possibility.</li>
                        </ul>
                        <p>When should you have your wisdom teeth removed?</p>
                        <p>There is no single, right answer for everyone, however, if your dentist has advised that your wisdom teeth look potentially problematic itâ€™s generally best to remove them sooner rather than later. This advice is based on the fact that the younger you are the faster you heal.</p>
                        <p>The likelihood of lingering numbness, jaw fracture or other complications also increases with age.
                            Lastly, the longer you keep the troublesome wisdom tooth in your mouth the longer it has to cause further problems in the future. So listen to your dentist and donâ€™t delay the removal of your wisdom teeth when advised.</p>
                        <p>Be sure to ask your dentist for proper home care and post operative instruction care.</p>
                        <p>If you have any additional questions, please consult your dentist.</p>

                    </section>
                </div>

            </div>


        </div>   <!--dugme extraction u services////////////////////-->
        <div data-role="page" id="extraction" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu26">
                        <ul id="menu26" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                               preload="auto" width="360px" height="150px" poster="MY_VIDEO_POSTER.jpg"
                               data-setup="{}">
                            <source src="video/extractions post-op.mp4" type='video/mp4'>
                            <source src="video/extractions post-op.webm" type='video/webm'>
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                        </video>
                        <h1>Extractions Post-Op</h1>
                        <p>Now that the extraction is completed here are some advices to help you with the healing process.</p>
                        <ol>
                            <li>Do put pressure on the wound. First, to control any bleeding put constant pressure on the wound by biting on the gauze. Also change the gauze every few minutes for about a couple of hours. A cold compress or ice packs can also help this process.</li>
                            <li>Do stay on a soft diet. For the first few days after the extraction you should stay on a soft diet. This decreases the chances that you will disturb the site of the surgery. After a few days, it is generally ok to resume your normal diet.</li>
                            <li>Do take the pain medicine. Following the extraction it is very common to experience some discomfort, normally at the site of the aestethic or the extraction site itself. To alleviate the discomfort you should follow your dentists recommendation on taking an over the counter pain medication. When necessary your dentist may decide to prescribe a stronger pain medication to manage higher levels of pain.</li>
                            <li>Do not disturb the site of the extraction. Make sure that you do not disturb the extraction site. This means donâ€™t chew, rinse, or brush directly on the site for at least 24-48 hours.</li>
                            <li>Do not spit or suck through a straw. This is important because using a straw often causes suction that can remove the blood clot. Loss of the blood clot causes bleeding or a painful condition called, dry socket.</li>
                            <li>Do not smoke. It is important that you do not smoke for at least 24 hours following the extraction as smoking promotes the likelihood of bleeding and further delays the healing. Smoking may also cause the dry socket.</li>
                            <p>Sometimes you may experience discomfort when opening your mouth. This is due to muscle spasm or trismus which usually heals on its own in a few days. A little bleeding, swelling and discomfort is normal after a tooth extraction, however, if you have any unusual bleeding beyond 4-6 hours post operation it is important that you contact you dentist immediately or seek assistance at your local emergency room if you are unable to reach your dentist.</p>
                            <p>If everything seems normal you can start to rinse with warm salt water 24 hours post operation and be sure to keep the area as clean as possible.</p>
                            <p>Visit your dentist for a checkup one week after the surgery so your dentist can remove any suture and examine the wound to make sure it is healing properly, unless you have complications in which case you need to visit your dentist sooner.</p>
                            <p>If you have any additional questions, please consult your dentist.</p>

                        </ol>

                    </section>
                </div>

            </div>


        </div>
        <!--dugme payment u become////////////////////-->
        <div data-role="page" id="payment" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu28">
                        <ul id="menu28" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                            <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                            <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
                        </ul>
                    </section>
                    <section>
                        <h2><strong>Payment Plans & Insurance</strong></h2>
                        <p>We want to make going to the dentist accessible to everyone.Â  Dental treatment is an excellent investment in your medical and psychological well being.Â  Financial considerations should not be an obstacle to obtaining a beautiful healthy smile.Â  After your complete exam and consult, we will present you a written treatment plan so you will know your expected expenses before you do any treatment.</p>
                        <h2><strong>Insurance</strong></h2>
                        <p>We accept a variety of PPO insurances.  Insurances include, but are not limited to, Delta Dental, Blue Cross Blue Shield, Carrington, Assurant, Metlife, Cigna, Aetna, Guardian, CompBenefits, Humana, and First Common Wealth. We will try to work with your insurance provider to give you the most coverage.  Prior to your visit we will gather your insurance information and compile a complete breakdown of benefits for you</p>
                        <h2>No Insurance? No problem!</h2>
                        <p>Come in and ask about our Smiles Card.
                            This program can help make dental care more affordable and give you the protection and peace of mind you deserve.</p>
                        <h2><strong>Payment Plans</strong></h2>
                        <p>With our convenient payment plan administered by CareCredit, you can have the smile of your dreams today.  CareCredit, the nation’s leading patient payment program enables you to finance 100% of your dental care with NO money down, NO interest, no upfront costs, no annual fees, and no pre-payment penalties. So, begin your treatment TODAY!</p>
                        <h2><strong>Payments</strong></h2>
                        <p> We Accept Visa, Master Card, Discover, and Cash. Unfortunately, we do not accept checks or American Express.</p>
                        <p><strong>Be informed.  Call our staff and let them answer any of your questions, all at no cost or obligation to you.</strong></p>

                    </section>
                </div>

            </div>


        </div>
        <!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact" class="naziv">
                                <li><a href="#about" data-transition="<?php echo $transitionefect ?>">ABOUT US</a></li>
                                <li><a href="#services" data-transition="<?php echo $transitionefect ?>">SERVICES</a></li>
                                <li><a href="#become" data-transition="<?php echo $transitionefect ?>">BECOME A PATIENT</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">CONTACT US</a></li>
                                <li><a href="#login" data-transition="<?php echo $transitionefect ?>">PATIENT LOGIN</a></li>
							</ul>
					</section>
					<div>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn">
						</form>
					</div>
				</div>
			</div>

		</div>
<!--page 3///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">

			<div data-role="main" class="ui-content" >
			 <p>The contact form was sent succesful!</p>

			</div>

		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">

			<div data-role="main" class="ui-content" >
				<p>The contact form was sent because of an error!</p>
			</div>

		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->

		<script type="text/javascript" src="js/responsiveslides.js"></script>


		<!-- Slajder se zavrsava -->
	</body>
</html>
