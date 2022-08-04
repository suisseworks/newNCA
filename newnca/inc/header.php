<?php include 'inc/header-scripts.php'; ?>

		<div class="brk-header-mobile">
			<div class="brk-header-mobile__open"><span></span></div>
			<div class="brk-header-mobile__logo"><a href="index.php"><img class="brk-header-mobile__logo-1 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"> <img class="brk-header-mobile__logo-2 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"></a></div>
		</div>
		<header class="brk-header brk-header_style-1 brk-header_skin-1 position-fixed d-lg-flex flex-column brk-header_color-dark position-fixed bg-white" style="display: none;" data-logo-src="img/logo.png" data-brk-library="component__header">
			<div class="brk-header__main-bar brk-header_border-top-dark order-lg-2 order-1" style="height: 72px;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-1 align-self-lg-center d-none d-lg-flex">
							<a href="index.php" class="brk-header__logo brk-header__item @@modifier"><img class="brk-header__logo-1 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"> <img class="brk-header__logo-2 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"></a>
						</div>
						<div class="col-lg align-self-lg-stretch text-lg-right">
							<nav class="brk-nav brk-header__item">
								<ul class="brk-nav__menu">
									<li class="home-menu d-xs-none"><a href="index.php"><div>Home</div></a></li>
									<li><a href="about-us.php"><div>About Us</div></a></li>
									<li><a href="talents.php"><div><span class="d-lg-none menu_for">For</span> Talents</div></a></li>
									<li><a href="entrepreneurs.php"><div><span class="d-lg-none menu_for">For</span> Entrepreneurs </div></a></li>
									<li><a href="co-investors.php"><div><span class="d-lg-none menu_for">For</span> Co-investors</div></a></li>
									<li><a href="business-owners.php"><div><span class="d-lg-none menu_for">For</span> Business owners</div></a></li>
									<li><a href="news-resources.php"><div>Resources</div></a></li>
									<li><a href="insights.php"><div>Insights</div></a></li>
								</ul>
							</nav>
						</div>						
						<div class="col-lg-2 align-self-lg-stretch text-lg-right header_third_part">
						<div class="brk-header__item h-100 d-flex align-items-center justify-content-center">
							<a href="<?php echo $_SESSION['page'] ?>" class="bg-transparent font_family-arial language_btn btn btn-prime btn-sm border-radius-25 font__weight-bold shadow-none header_btn" data-brk-library="component__button"><?php echo $_SESSION['lan']?></a>
							
							

							<div class="footer_btns">
							<a href="https://www.linkedin.com/company/novastone-capital-advisors/" target="_blank" class="social_icon d-inline-flex align-items-center justify-content-center border-radius-5 p-1 font__family-avenir"><i class="fab fa-linkedin-in font__size-18"></i></a></div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="brk-theme-options form_side_bar bg-primary" data-brk-library="brk-customizer">
		    <div class="brk-theme-options__panel panel-open shadow-none">
			    <a href="#" class="brk-theme-options__panel-link border-0">CONTACT <i class="fa fa-arrow-down mr-2"></i></a>
		    </div>
			<div class="brk-theme-options__control shadow-none bg-primary get_touch_main">
				<!-- <div class="brk-theme-options__header get_title">
					<h2 class="text-white font__family-efb font__size-60 text-uppercase">Get<br> In touch</h2>
					<div class="brk-theme-options__close panel-close function_btn" id="info0"></div>
				</div> -->
				<!-- <div class="row">
					<div style="display: none;" id="form-alert-success form-alert-success" class="alert alert-success" role="alert">
                    	Information was sent successfully!
					</div>
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div current" id="info0content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2">
									Select your profile
								</p>
							</div>	
							<div class="links_buttons pt-40">
								<ul class="pl-0">
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered mr-1" id="info1">Talent</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1" id="info2">Business Owner</button>
									</li><br>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered mr-1" id="info3">Co-investor</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1 mr-1" id="info4">Intermediary</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1" id="info5">Other</button>
									</li>
								</ul>
							</div>	
						</div>	
					</div>	
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info1content">
							<a href="talents.php" class="h-100">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 border-bottom pb-3 talent_text pr-30">
										Please visit our Talents page and apply.
									</p>
								</div>
								<div class="text-right arrow_link position-static pt-100">
									<img src="img/arrow.png" alt="arrow" />
								</div>
						    </a>
						</div>	
					</div>
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info2content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
									Please complete the form below and we will be in touch.
								</p>
							</div>
							<div class="resources_form resources_form_side">  
                                <form id="business_owner_contact_form" class="investors_contact_form needs-validation" novalidate>
									<input value="Business Owner" type="hidden" name="Type">
									<div class="d-inline brk-form-round mr-30 selection_div s_side">
										<select name="Title">
											<option value="Title" selected disabled>Title</option>
											<option value="Mr.">Mr.</option>
											<option value="Ms.">Ms.</option>
											<option value="Dr.">Dr.</option>
										</select>
									</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
                                		<div class="invalid-feedback">
									        Please provide your name.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Surname" required>
                                		<div class="invalid-feedback">
									        Please provide your surname.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="email" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="E-mail" required>
                                		<div class="invalid-feedback">
									        Please provide your email address.
									      </div>
                                	</div>
                                	
                                	<div class="form-group ml-2">	
									<div class="">
										<p class="font__family-open-sans  text-white  pb-3  font__size-12">
										* = required
										</p>
									</div>

                                	<div class="checkbox checkbox-info checkbox-circle d-flex mb-2 line__height-16 text-white font__size-14">
							            <input id="bussiness01" type="checkbox" name="Newsletter">
							            <label for="bussiness01" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							             Subscribe to our newsletter
							          </div>

							          <div class="checkbox checkbox-info checkbox-circle d-flex line__height-16 text-white font__size-14">
							            <input id="bussiness02" type="checkbox">
							            <label for="bussiness02" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							              By signing up to the form, you agree to our terms and privacy policy.
							          </div>
                                	</div>
                                	<div id="business_owner_contact_form-submit" class="submit_btn w-100 text-center">	
                                	    <button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
									</div>
									<div id="business_owner_contact_form-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
										<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
											<span>Sending...</span><span class="border-btn submit_border"></span>
										</button>
									</div>       
                                </form>
                                <div class="privacy_policy_link text-center mt-20">
                                	<a href="img/Terms-and-Conditions-Legal Notice.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms</a><span class="font__size-12 font__family-open-sans text-white underline"> & </span><a href="img/NCA-Privacy-Policy.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">privacy policy</a>
                                </div>	
							</div>
						</div>	
					</div>
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info3content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
									Please complete the form below and our Investor Relations Director will be in touch shortly.
								</p>
							</div>
							<div class="co_investors_form">  
                                <form id="header_co_investors_contact_form" class="investors_contact_form needs-validation" novalidate>
									<input value="Co-Investor" type="hidden" name="Type" >
									<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
                                		<div class="invalid-feedback">
									        Please provide your name.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Surname" required>
                                		<div class="invalid-feedback">
									        Please provide your surname.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="email" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="E-mail" required>
                                		<div class="invalid-feedback">
									        Please provide your email address.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<textarea class="form-control p-4 bg-white border-radius-25" id="co_investors_text" name="Comment" placeholder="Message" rows="3"></textarea>
                                	</div>
                                	<div class="form-group ml-2">	
									<div class="">
										<p class="font__family-open-sans  text-white  pb-3  font__size-12">
										* = required
										</p>
									</div>
                                	<div class="checkbox checkbox-info checkbox-circle d-flex mb-2 line__height-16 text-white font__size-14">
										<input id="co-investor03" type="checkbox" name="Newsletter">
										<label for="co-investor03" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
										</label>
										Subscribe to our newsletter
									</div>

							          <div class="checkbox checkbox-info checkbox-circle d-flex line__height-16 text-white font__size-14">
							            <input id="co-investor04" type="checkbox">
							            <label for="co-investor04" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							              By signing up to the form, you agree to our terms and privacy policy.
							          </div>
                                	</div>	
                                	
                                	<div id="header_co_investors_contact_form-submit" class="submit_btn w-100 text-center">	
                                	    <button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
									</div>  
									<div id="header_co_investors_contact_form-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
										<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
											<span>Sending...</span><span class="border-btn submit_border"></span>
										</button>
									</div>   
                                </form>
                                <div class="privacy_policy_link text-center mt-20">
                                	<a href="img/Terms-and-Conditions-Legal Notice.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms</a><span class="font__size-12 font__family-open-sans text-white underline"> & </span><a href="img/NCA-Privacy-Policy.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">privacy policy</a>
                                </div>	
							</div>
						</div>	
					</div>	
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info4content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
									Please complete the form below and we will be in touch.
								</p>
							</div>
							<div class="resources_form resources_form_side">  
                                <form id="intermediatry_contact_form" class="investors_contact_form needs-validation" novalidate>
									<input value="Intermediary" type="hidden" name="Type" >
									<div class="d-inline brk-form-round mr-30 selection_div s_side ">
										<select name="Title">
											<option value="Title" selected disabled>Title</option>
											<option value="Mr.">Mr.</option>
											<option value="Ms.">Ms.</option>
											<option value="Dr.">Dr.</option>
										</select>
									</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
                                		<div class="invalid-feedback">
									        Please provide your name.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Surname" required>
                                		<div class="invalid-feedback">
									        Please provide your surname.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="email" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="E-mail" required>
                                		<div class="invalid-feedback">
									        Please provide your email address.
									      </div>
                                	</div>
                                	<div class="form-group ml-2">	
									<div class="">
										<p class="font__family-open-sans  text-white  pb-3  font__size-12">
										* = required
										</p>
									</div>
                                	<div class="checkbox checkbox-info checkbox-circle d-flex mb-2 line__height-16 text-white font__size-14">
							            <input id="Intermediary01" type="checkbox" name="Newsletter">
							            <label for="Intermediary01" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							             Subscribe to our newsletter
							          </div>

							          <div class="checkbox checkbox-info checkbox-circle d-flex line__height-16 text-white font__size-14">
							            <input id="Intermediary02" type="checkbox">
							            <label for="Intermediary02" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							              By signing up to the form, you agree to our terms and privacy policy.
							          </div>
                                	</div>
                                	<div id="intermediatry_contact_form-submit" class="submit_btn w-100 text-center">	
                                	    <button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
									</div>    
									<div id="intermediatry_contact_form-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
										<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
											<span>Sending...</span><span class="border-btn submit_border"></span>
										</button>
									</div>   
                                </form>
                                <div class="privacy_policy_link text-center mt-20">
                                	<a href="img/Terms-and-Conditions-Legal Notice.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms</a><span class="font__size-12 font__family-open-sans text-white underline"> & </span><a href="img/NCA-Privacy-Policy.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">privacy policy</a>
                                </div>	
							</div>
						</div>	
					</div>
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info5content">
							<a href="talents.php" class="h-100">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 border-bottom pb-3 talent_text pr-30">
										Please visit our Talents page and apply.
									</p>
								</div>
								<div class="text-right arrow_link position-static pt-100">
									<img src="img/arrow.png" alt="arrow" />
								</div>
						    </a>
						</div>	
					</div>
				</div> -->
                <!-- <div class="zoho_candidate_contact_form">
                <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"> <script type="text/javascript" src="https://atds.maillist-manage.eu/js/optin.min.js" onload="setupSF('sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61','ZCFORMVIEW',false,'acc',false,'2')"></script> <script type="text/javascript"> function runOnFormSubmit_sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61(th){ /*Before submit, if you want to trigger your event, "include your code here"*/ }; </script> <style> #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #customForm *:not(.dateClass){ -webkit-box-sizing: border-box !important; -moz-box-sizing: border-box !important; box-sizing: border-box !important; word-break:break-word; overflow-wrap: break-word; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .dateClass{ -webkit-box-sizing: unset!important; -moz-box-sizing: unset !important; box-sizing: unset !important; word-break:break-word; overflow-wrap: break-word; } /*** RESPONSIVE START */ @media only screen and (max-width: 319px){ #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{ width:220px !important; min-width:220px !important; margin: 0px auto !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #SIGNUP_PAGE{ padding:0px !important } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 [changeitem="SIGNUP_FORM_FIELD"]{ width:94% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .zcinputbox{ width:100% !important; max-width:100% !important; float:none !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaDiv{ width:69.5% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #relCaptcha{ margin-right:11px !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{ transform:scale(0.55);-webkit-transform:scale(0.55);transform-origin:0 0;-webkit-transform-origin:0 0;} } /*Major Mobiles*/ @media screen and (min-width: 320px) and (max-width: 580px){ #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{ width:280px !important; min-width:280px !important; margin: 0px auto !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .zcinputbox{ width:100% !important; max-width:100% !important; float:none !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 [changeitem="SIGNUP_FORM_FIELD"]{ width:95% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaDiv{ width:72% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaText{ width:96% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #relCaptcha{ margin-right:6px !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #capRequired{ margin-right: -10px !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{ transform:scale(0.72);-webkit-transform:scale(0.75);transform-origin:0 0;-webkit-transform-origin:0 0;} } @media screen and (min-width:581px) and (max-width: 767px){ #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{ width:440px !important; min-width:440px !important; margin: 0px auto !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .zcinputbox{ width:100% !important; max-width:100% !important; float:none !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 [changeitem="SIGNUP_FORM_FIELD"]{ width:95% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaDiv{ width:84.4% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaText{ width:96% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #relCaptcha{ margin-right:14px !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #capRequired{ margin-right: -10px !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{ transform:scale(1.13);-webkit-transform:scale(1.0);margin-bottom:40px;transform-origin:0 0;-webkit-transform-origin:0 0;} } /* Desktops and laptops ----------- */ @media only screen and (min-width : 1025px) { #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{ width:600px !important; min-width:600px !important; margin: 0px auto !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{ transform:scale(1.03);-webkit-transform:scale(1.08);transform-origin:0 0;-webkit-transform-origin:0 0;} } /* Large Screens */ @media only screen and (min-width : 1824px) { #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{ width:600px !important; min-width:600px !important; margin: 0px auto !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{ transform:scale(1.03);-webkit-transform:scale(1.08);transform-origin:0 0;-webkit-transform-origin:0 0;} } @media only screen and (min-device-width: 1200px) and (max-device-width:1200px){ #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{ width:600px !important; min-width:600px !important; margin: 0px auto !important; } } /* iPads*/ @media only screen and (min-width : 768px) and (max-width : 1024px){ #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{ width:500px !important; min-width:240px !important; margin: 0px auto !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaDiv{ width:86.8% !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #relCaptcha{ margin-right:12px !important; } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{ transform:scale(0.90);-webkit-transform:scale(0.90);transform-origin:50% 50%;-webkit-transform-origin:0 0;} } /*** RESPONSIVE END */ #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .bdr_btm_hover{background-color:#f9f9f9; padding:10px;} #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .bdr_btm{padding:10px } #sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .f14{font-size:14px} @font-face {font-family: "Open Sans";font-style: normal;font-weight: 400; src: url("https://webfonts.zohostatic.eu/opensans/font.woff") format("woff");} @font-face {font-family: "Open Sans";font-style: normal;font-weight: 600; src: url("https://webfonts.zohostatic.eu/opensanssemibold/font.woff") format("woff");} @font-face {font-family: "Open Sans";font-style: normal;font-weight: 300; src: url("https://webfonts.zohostatic.eu/opensanslight/font.woff") format("woff");} @font-face {font-family: "Open Sans";font-style: normal;font-weight: 700; src: url("https://webfonts.zohostatic.eu/opensansbold/font.woff") format("woff");} </style> <!--Zoho Campaigns Web-Optin Form's Header Code Ends Here--><!--Zoho Campaigns Web-Optin Form Starts Here--> <div id="sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61" data-type="signupform"> <div id="customForm"> <input type="hidden" id="recapTheme" value="2"> <input type="hidden" id="isRecapIntegDone" value="false"> <input type="hidden" id="recapMode" value="103402000011283005"> <input type="hidden" id="signupFormType" value="LargeForm_Vertical"> <div name="SIGNUP_PAGE" id="SIGNUP_PAGE" class="SIGNUP_PAGE large_form_10_css" style="background-color: rgb(229, 114, 0); color: rgb(255, 255, 255); padding: 30px; font-family: &quot;Open Sans&quot;; text-align: center; background-image: url(&quot;https://campaign-image.com/zohocampaigns/12c1a124d_parallax_logo_min.png&quot;); min-width: 240px; background-size: 100% 100%; font-size: 14px; background-position: 50% 50%; background-repeat: no-repeat;"> <div> <div name="" changeid="" changename="" style="margin:0px auto"> <div id="imgBlock" name="LOGO_DIV" logo="true" style="width: 600px; margin: 0px auto; font-family: Arial, Helvetica, sans-serif; padding-bottom: 10px; color: rgb(68, 68, 68); text-align: center; padding-right: 10px; font-size: 12px; padding-top: 10px; font-weight: bold;"> <img valign="middle" src="https://campaign-image.eu/zohocampaigns/14acf01986_nca_logo.png" name="LOGO" id="iframeImg" style="width: 341px; max-width: 100%; height: auto;"> </div> </div> <br> <div id="signupMainDiv" style="margin: 0px auto; width: 100%; min-width: 230px; max-width: 600px;" name="SIGNUPFORM" changeid="SIGNUPFORM" changename="SIGNUPFORM"> <div> <div style="position:relative;"> <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154); margin-top: 10px;margin-bottom:10px;word-break:break-all"> <table width="100%" cellpadding="0" cellspacing="0" border="0"> <tbody> <tr> <td width="10%"> <img class="successicon" src="https://atds.maillist-manage.eu/images/challangeiconenable.jpg" align="absmiddle"> </td> <td> <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span> </td> </tr> </tbody> </table> </div> </div> <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://atds.maillist-manage.eu/weboptin.zc" target="_zcSignup"> <div id="SIGNUP_BODY_ALL" name="SIGNUP_BODY_ALL" style="border: none; padding: 0px;"> <h1 style="color: rgb(255, 255, 255); background-color: rgb(229, 114, 0); border: 1px none rgb(229, 114, 0); overflow-wrap: break-word; word-break: break-all; padding: 20px; margin: 0px; font-family: &quot;Open Sans&quot;; text-align: center; font-size: 28px; font-weight: 100;" id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER">GET IN TOUCH</h1> <div style="color: rgb(229, 114, 0); padding: 30px; font-family: &quot;Open Sans&quot;; border-radius: 30px; text-align: center; font-size: 14px; opacity: 1;" id="SIGNUP_BODY" name="SIGNUP_BODY"> <div style="margin:0px auto;text-align:left;"> <div style="line-height:1.6; color:#ffffff;" class="" changeid="SIGNUP_MSG" id="SIGNUP_DESCRIPTION" changetype="SIGNUP_DESCRIPTION">Please complete the form below to stay in touch via our quarterly newsletter. If you would like a member of our team to contact you, please leave a brief note so that we can forward you correctly.</div> <div style="display:none;background-color:#FFEBE8;padding:10px 10px; color:#d20000; font-size:11px; margin:10px 0px;border:solid 1px #ffd9d3; margin-top:20px;" id="errorMsgDiv">&nbsp;&nbsp;Please correct the marked field(s) below.</div> <div> <div style="font-size:12px; margin-top:10px;" name="fieldsdivSf" class="zcsffieldsdiv"> <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000011283041"> <div style=""> <div style="position:relative"> <div style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Select your profile&nbsp; <span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span> </div> <select name="CONTACT_CF1" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; background-position: 98% 50%; background-repeat: no-repeat; height: 42px;" zc_display_name="Select your profile"> <option value="Business Owner">Business Owner</option> <option value="Co-Investor">Co-Investor</option> <option value="Intermediary">Intermediary</option> <option value="Other">Other</option> </select>&nbsp; <span style="display:none" id="dt_CONTACT_CF1">1,true,3,Select your profile,2</span> </div> </div> <div style="clear:both"></div> </div> <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000000015"> <div style=""> <div style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">E-mail&nbsp;<span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span></div> <div style="width:100%; min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required --> <input name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; background-position: 98% 50%; background-repeat: no-repeat; height: 42px;" maxlength="100" type="email" required="true" value=""> <span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,Contact Email,2</span> </div> </div><div style="clear:both"></div></div> <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000000019"> <div style=""> <div style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">First Name&nbsp;<span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span></div> <div style="width:100%; min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required --> <input name="FIRSTNAME" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; background-position: 98% 50%; background-repeat: no-repeat; height: 42px;" maxlength="100" type="text" required="true" value=""> <span style="display:none" id="dt_FIRSTNAME">1,true,1,First Name,2</span> </div> </div><div style="clear:both"></div></div> <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000000021"> <div style=""> <div style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Last Name&nbsp;<span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span></div> <div style="width:100%; min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required --> <input name="LASTNAME" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; background-position: 98% 50%; background-repeat: no-repeat; height: 42px;" maxlength="100" type="text" required="true" value=""> <span style="display:none" id="dt_LASTNAME">1,true,1,Last Name,2</span> </div> </div><div style="clear:both"></div></div> <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000401621"> <div style=""> <div> <div style="float: left; margin-top: 5px; margin-right: 20px; font-family: Arial, Helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 12px;" name="SIGNUP_FORM_LABEL">Newsletter&nbsp;<span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span></div> <div style="padding-left:10px;min-width:170px; max-width:70%; display:flex; align-items:center;"> <input name="CONTACT_CF37" type="checkbox" zc_display_name="Newsletter" value="" style="padding-left:10px;padding-right:10px; margin-top:5px;"> <label for="CONTACT_CF37"></label> <span style="display:none" id="dt_CONTACT_CF37">4,true,4,Newsletter,2</span> </div><div style="clear:both"></div></div> </div><div style="clear:both"></div></div> <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000000025"> <div style=""> <div style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Company Name&nbsp;</div> <div style="width:100%; min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required --> <input name="COMPANYNAME" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; background-position: 98% 50%; background-repeat: no-repeat; height: 42px;" maxlength="100" type="text" value=""> <span style="display:none" id="dt_COMPANYNAME">1,false,1,Company Name,2</span> </div> </div><div style="clear:both"></div></div> <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000011284001"> <div style=""> <div style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Reason for contact&nbsp;</div> <div style="width:100%; min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required --> <input name="CONTACT_CF2" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; background-position: 98% 50%; background-repeat: no-repeat; height: 42px;" maxlength="100" type="text" value=""> <span style="display:none" id="dt_CONTACT_CF2">1,false,1,Reason for contact,2</span> </div> </div><div style="clear:both"></div></div> <div style="display:none" ishidden="true"> <div> <div style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Other Contact Type&nbsp;</div> <div style="width:100%; min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required --> <input name="CONTACT_CF4" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; background-position: 98% 50%; background-repeat: no-repeat; height: 42px;" maxlength="100" type="text" value="Website "> <span style="display:none" id="dt_CONTACT_CF4">1,false,1,Other Contact Type,2</span> </div> </div><div style="clear:both"></div></div> </div><!-- Captcha for Signup --> <div class="recaptcha" style="padding: 10px 0px 10px 10px;display:none " id="captchaOld" name="captchaContainer"> <div style=""> <div style="width: 59%; float: left; min-width: 170px; max-width: 70%;" id="captchaParent"> <img src="//campaigns.zoho.eu/images/refresh_icon.png" style="cursor: pointer;float:right;margin-right:4px" onclick="loadCaptcha('https://campaigns.zoho.eu/campaigns/CaptchaVerify.zc?mode=generate',this,'#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61');" id="relCaptcha"> <div id="captchaDiv" captcha="true" name="" style="padding: 20px;background:#fff;border: 1px solid rgb(222, 222, 222);box-sizing: border-box;width:98.8%"></div> <input placeholder="Captcha" id="captchaText" name="captchaText" changeitem="SIGNUP_FORM_FIELD" style="margin-top: 5px; width: 98.7%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; background-position: 98% 50%; background-repeat: no-repeat; height: 42px;" maxlength="100" type="text"> <span name="SIGNUP_REQUIRED" id="capRequired" style="color: rgb(180, 0, 0); margin-top: -16px; margin-right: -2px; float: right; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span> </div> </div> <div style="clear: both"></div> </div> <input type="hidden" id="secretid" value="6LdNeDUUAAAAAG5l7cJfv1AA5OKLslkrOa_xXxLs"><!-- Captcha for Signup End--><!-- Other Lists Subscription Start--><!-- Other Lists Subscription End--> <div style=" border-bottom:#ebebeb dotted 1px; margin-top:10px; clear:both;"></div> <div id="REQUIRED_FIELD_TEXT" changetype="REQUIRED_FIELD_TEXT" name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); padding: 10px 10px 10px 0px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*Required Fields</div> <div name="privacyPolicy" style=" padding:10px;width:100%;position:relative"> <input type="checkbox" style="vertical-align:middle; left:20px; top:1px;" name="PRIVACY_POLICY" value="PRIVACY_AGREED"> <label for="PRIVACY_POLICY"></label> <span style="vertical-align:middle;margin-left:5px; color:#ffffff">I agree to the&nbsp; <a href="https://www.novastone-ca.com/img/NCA-Privacy-Policy.pdf" class="privacy_anchor" target="_blank" style="text-decoration:none">Privacy Policy</a>&nbsp;&nbsp;&nbsp;</span> </div> <div class="btn-side-form" style="padding:10px; text-align:center;"> <input type="button" class="border-btn submit_border" action="Save" id="zcWebOptin" name="SIGNUP_SUBMIT_BUTTON" changetype="SIGNUP_SUBMIT_BUTTON_TEXT" style="cursor: pointer; color: rgb(255, 255, 255); background-color: rgb(229, 114, 0); border: 1px none rgb(49, 121, 206); padding: 9px 28px; text-align: center; outline: none medium; appearance: none; font-family: &quot;Open Sans&quot;; border-radius: 24px; width: 100%; font-size: 20px; background-position: center bottom; background-repeat: repeat-x;" value="SEND NOW!"> </div><!-- Do not edit the below Zoho Campaigns hidden tags --> <input type="hidden" id="fieldBorder" value="rgb(229, 114, 0)"> <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="ZCFORMVIEW" onload=""> <input type="hidden" name="viewFrom" id="viewFrom" value="URL_ACTION"> <input type="hidden" id="submitType" name="submitType" value="optinCustomView"> <input type="hidden" id="lD" name="lD" value="116f5b92371260a2"> <input type="hidden" name="emailReportId" id="emailReportId" value=""> <input type="hidden" name="zx" id="cmpZuid" value="14acf01986"> <input type="hidden" name="zcvers" value="2.0"> <input type="hidden" name="oldListIds" id="allCheckedListIds" value=""> <input type="hidden" id="mode" name="mode" value="OptinCreateView"> <input type="hidden" id="zcld" name="zcld" value="116f5b92371260a2"> <input type="hidden" id="zctd" name="zctd" value="116f5b923710fdc1"> <input type="hidden" id="document_domain" value="campaigns.zoho.eu"> <input type="hidden" id="zc_Url" value="atds.maillist-manage.eu"> <input type="hidden" id="new_optin_response_in" value="1"> <input type="hidden" id="duplicate_optin_response_in" value="1"> <input type="hidden" id="zc_formIx" name="zc_formIx" value="3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61"><!-- End of the campaigns hidden tags --></div> </div> <input type="hidden" id="isCaptchaNeeded" value="false"> <input type="hidden" id="superAdminCap" value="0"> <img src="https://atds.maillist-manage.eu/images/spacer.gif" onload="referenceSetter(this)" id="refImage" style="display:none;"> </div> <div style="margin: 0px auto;margin-top:20px;text-align:left;height:76px;" id="privacyNotes" identity="privacyNotes"> <span>Note: It is our responsibility to protect your privacy and we guarantee that your data will be completely confidential.</span> </div> </div> </form> </div> </div> </div> </div> </div> </div> <div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div> <div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px; box-shadow: 0 1px 10px #424242;padding: 35px;"> <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess"> <img src="https://atds.maillist-manage.eu/images/videoclose.png"> </span> <div id="zcOptinSuccessPanel"></div> </div>
            </div> -->

            <div class="zoho_form">
            	<!--Zoho Campaigns Web-Optin Form's Header Code Starts Here-->

<meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<script type="text/javascript" src="https://atds.maillist-manage.eu/js/optin.min.js" onload="setupSF('sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61','ZCFORMVIEW',false,'acc',false,'2')"></script>
<script type="text/javascript">
        function runOnFormSubmit_sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61(th){
                /*Before submit, if you want to trigger your event, "include your code here"*/
        };
</script>

<style>
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #customForm *:not(.dateClass){
-webkit-box-sizing: border-box !important;
-moz-box-sizing: border-box !important;
box-sizing: border-box !important;
word-break:break-word;
overflow-wrap: break-word;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .dateClass{
-webkit-box-sizing: unset!important;
-moz-box-sizing: unset !important;
box-sizing: unset !important;
word-break:break-word;
overflow-wrap: break-word;
}
/*** RESPONSIVE START */
@media only screen and (max-width: 319px){
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{
width:220px !important;
min-width:220px !important;
margin: 0px auto !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #SIGNUP_PAGE{
padding:0px !important        
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 [changeitem="SIGNUP_FORM_FIELD"]{
width:94% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .zcinputbox{
width:100% !important;
max-width:100% !important;
float:none !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaDiv{
width:69.5% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #relCaptcha{
margin-right:11px !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{
transform:scale(0.55);-webkit-transform:scale(0.55);transform-origin:0 0;-webkit-transform-origin:0 0;}
}
/*Major Mobiles*/
@media screen and (min-width: 320px) and (max-width: 580px){
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{
width:280px !important;
min-width:280px !important;
margin: 0px auto !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .zcinputbox{
width:100% !important;
max-width:100% !important;
float:none !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 [changeitem="SIGNUP_FORM_FIELD"]{
width:95% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaDiv{
width:72% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaText{
width:96% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #relCaptcha{
margin-right:6px !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #capRequired{
margin-right: -10px !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{
transform:scale(0.72);-webkit-transform:scale(0.75);transform-origin:0 0;-webkit-transform-origin:0 0;}
}
@media screen and (min-width:581px) and (max-width: 767px){
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{
width:440px !important;
min-width:440px !important;
margin: 0px auto !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .zcinputbox{
width:100% !important;
max-width:100% !important;
float:none !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 [changeitem="SIGNUP_FORM_FIELD"]{
width:95% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaDiv{
width:84.4% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaText{
width:96% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #relCaptcha{
margin-right:14px !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #capRequired{
margin-right: -10px !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{
transform:scale(1.13);-webkit-transform:scale(1.0);margin-bottom:40px;transform-origin:0 0;-webkit-transform-origin:0 0;}
}
/* Desktops and laptops ----------- */
@media only screen  and (min-width : 1025px) {
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{
width:600px !important;
min-width:600px !important;
margin: 0px auto !important;        
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{
transform:scale(1.03);-webkit-transform:scale(1.08);transform-origin:0 0;-webkit-transform-origin:0 0;}
}
/* Large Screens */
@media only screen  and (min-width : 1824px) {
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{
width:600px !important;
min-width:600px !important;
margin: 0px auto !important;        
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{
transform:scale(1.03);-webkit-transform:scale(1.08);transform-origin:0 0;-webkit-transform-origin:0 0;}
}
@media only screen and (min-device-width: 1200px) and (max-device-width:1200px){
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{
width:600px !important;
min-width:600px !important;
margin: 0px auto !important;
}
}
/* iPads*/
@media only screen and (min-width : 768px) and (max-width : 1024px){
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #signupMainDiv{
width:500px !important;
min-width:240px !important;
margin: 0px auto !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #captchaDiv{
width:86.8% !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 #relCaptcha{
margin-right:12px !important;
}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .recaptcha{
transform:scale(0.90);-webkit-transform:scale(0.90);transform-origin:50% 50%;-webkit-transform-origin:0 0;}
}
/*** RESPONSIVE END */
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .bdr_btm_hover{background-color:#f9f9f9; padding:10px;}
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .bdr_btm{padding:10px }
#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61 .f14{font-size:14px}

</style>

<!--Zoho Campaigns Web-Optin Form's Header Code Ends Here--><!--Zoho Campaigns Web-Optin Form Starts Here-->

<div id="sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61" data-type="signupform">
    <div id="customForm">
        <input type="hidden" id="recapTheme" value="2">
        <input type="hidden" id="isRecapIntegDone" value="false">
        <input type="hidden" id="recapMode" value="103402000011283005">
        <input type="hidden" id="signupFormType" value="LargeForm_Vertical">
        <div name="SIGNUP_PAGE" id="SIGNUP_PAGE" class="SIGNUP_PAGE large_form_10_css" style="background-color: rgb(229, 114, 0); color: rgb(255, 255, 255); padding: 30px; font-family: &quot;Open Sans&quot;; text-align: center; background-image: url(&quot;https://campaign-image.com/zohocampaigns/12c1a124d_parallax_logo_min.png&quot;); min-width: 240px; background-size: 100% 100%; font-size: 14px; background-position: 50% 50%; background-repeat: no-repeat no-repeat;">
            <div>
            <div name="" changeid="" changename="" style="margin:0px auto">
                    <div id="imgBlock" name="LOGO_DIV" logo="true" style="width: 600px; margin: 0px auto; font-family: Arial, Helvetica, sans-serif; padding-bottom: 10px; color: rgb(68, 68, 68); text-align: center; padding-right: 10px; font-size: 12px; padding-top: 10px; font-weight: bold;">
                            <img valign="middle" src="https://campaign-image.eu/zohocampaigns/14acf01986_nca_logo.png" name="LOGO" id="iframeImg" style="width: 341px; max-width: 100%; height: auto;">
                    </div>
            </div>
            <br>
            <div id="signupMainDiv" style="margin: 0px auto; width: 100%; min-width: 230px; max-width: 600px;" name="SIGNUPFORM" changeid="SIGNUPFORM" changename="SIGNUPFORM">
                <div>
                    <div style="position:relative;">
                        <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="10%">
                                            <img class="successicon" src="https://atds.maillist-manage.eu/images/challangeiconenable.jpg" align="absmiddle">
                                        </td>
                                        <td>
                                            <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://atds.maillist-manage.eu/weboptin.zc" target="_zcSignup" class="zoho_candidate_contact_form">
                        <div id="SIGNUP_BODY_ALL" name="SIGNUP_BODY_ALL" style="border: none; padding: 0px;">
                            <h1 style="color: rgb(255, 255, 255); background-color: rgb(229, 114, 0); border: 1px none rgb(229, 114, 0); overflow-wrap: break-word; word-break: break-all; padding: 20px; margin: 0px; font-family: &quot;Open Sans&quot;; text-align: center; font-size: 28px; font-weight: 100;" id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER">GET IN TOUCH</h1>
                            <div style="background-color: rgb(255, 255, 255); color: rgb(229, 114, 0); padding: 30px; font-family: &quot;Open Sans&quot;; border-radius: 30px; text-align: center; font-size: 14px; opacity: 1;" id="SIGNUP_BODY" name="SIGNUP_BODY">
                                <div style="margin:0px auto;text-align:left;">
                                    <div style="line-height:1.6;" class="" changeid="SIGNUP_MSG" id="SIGNUP_DESCRIPTION" changetype="SIGNUP_DESCRIPTION">Please complete the form below to stay in touch via our quarterly newsletter. If you would like a member of our team to contact you, please leave a brief note so that we can forward you correctly.</div>
                                    <div style="display:none;background-color:#FFEBE8;padding:10px 10px; color:#d20000; font-size:11px; margin:10px 0px;border:solid 1px #ffd9d3; margin-top:20px;" id="errorMsgDiv">&nbsp;&nbsp;Please correct the marked field(s) below.</div>
                                    <div>
                                        <div style="font-size:12px;  margin-top:10px;" name="fieldsdivSf" class="zcsffieldsdiv">
                                            <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000011283041">
                                                <div style="">
                                                    <div style="position:relative">
                                                        <div style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Select your profile&nbsp;
                                                            
                                                            <span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span>
                                                        
                                                        </div>
                                                            <select name="CONTACT_CF1" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; height: 42px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;" zc_display_name="Select your profile">
                                                                    <option value="Candidate">Candidate</option>
                                                                    <option value="Co-Investor">Co-Investor</option>
                                                                    <option value="Business Owner">Business Owner</option>
                                                                    <option value="Intermediary">Intermediary</option>
                                                                    <option value="Other">Other</option>
                                                            </select>&nbsp;
                                                            <span style="display:none" id="dt_CONTACT_CF1">1,true,3,Select your profile,2</span>
                                                    </div>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                                <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000000015">
                                                        <div style="">
                                                                <div style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">E-mail&nbsp;<span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span></div>
                                                                <div style="width:100%;  min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                        <input name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; height: 42px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;" maxlength="100" type="email" required="true" value="">
                                                                        <span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,Contact Email,2</span>
                                                                </div>
                                                        </div><div style="clear:both"></div></div>
                                                <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000000019">
                                                        <div style="">
                                                                <div style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">First Name&nbsp;<span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span></div>
                                                                <div style="width:100%;  min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                        <input name="FIRSTNAME" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; height: 42px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;" maxlength="100" type="text" required="true" value="">
                                                                        <span style="display:none" id="dt_FIRSTNAME">1,true,1,First Name,2</span>
                                                                </div>
                                                        </div><div style="clear:both"></div></div>
                                                <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000000021">
                                                        <div style="">
                                                                <div style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Last Name&nbsp;<span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span></div>
                                                                <div style="width:100%;  min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                        <input name="LASTNAME" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; height: 42px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;" maxlength="100" type="text" required="true" value="">
                                                                        <span style="display:none" id="dt_LASTNAME">1,true,1,Last Name,2</span>
                                                                </div>
                                                        </div><div style="clear:both"></div></div>
                                                <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000401621">
                                                        <div>
                                                                <div style="display: inline-flex;">
                                                                        <div style="float: left; margin-top: 5px; margin-right: 20px; font-family: Arial, Helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 12px;" name="SIGNUP_FORM_LABEL">Newsletter&nbsp;<span name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span></div>
                                                                        <div style="padding-left:10px;min-width:170px;  max-width:70%;">
                                                                                <input name="CONTACT_CF37" type="checkbox" zc_display_name="Newsletter" value="" style="padding-left:10px;padding-right:10px; margin-top:5px;">
                                                                                <label for="CONTACT_CF37"></label>
                                                                                <span style="display:none" id="dt_CONTACT_CF37">4,true,4,Newsletter,2</span>
                                                                        </div><div style="clear:both"></div></div>
                                                        </div><div style="clear:both"></div></div>
                                                <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000000000025">
                                                        <div style="">
                                                                <div style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Company Name&nbsp;</div>
                                                                <div style="width:100%;  min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                        <input name="COMPANYNAME" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; height: 42px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;" maxlength="100" type="text" value="">
                                                                        <span style="display:none" id="dt_COMPANYNAME">1,false,1,Company Name,2</span>
                                                                </div>
                                                        </div><div style="clear:both"></div></div>
                                                <div style="padding:10px 0px 10px 0px;" class="zcsffield " fieldid="103402000011284001">
                                                        <div style="">
                                                                <div style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Reason for contact&nbsp;</div>
                                                                <div style="width:100%;  min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                        <input name="CONTACT_CF2" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; height: 42px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;" maxlength="100" type="text" value="">
                                                                        <span style="display:none" id="dt_CONTACT_CF2">1,false,1,Reason for contact,2</span>
                                                                </div>
                                                        </div><div style="clear:both"></div></div>
                                                <div style="display:none" ishidden="true">
                                                        <div>
                                                                <div style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" name="SIGNUP_FORM_LABEL">Other Contact Type&nbsp;</div>
                                                                <div style="width:100%;  min-width:170px; margin-top:5px;"><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                        <input name="CONTACT_CF4" changeitem="SIGNUP_FORM_FIELD" style="width: 97%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; height: 42px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;" maxlength="100" type="text" value="Website ">
                                                                        <span style="display:none" id="dt_CONTACT_CF4">1,false,1,Other Contact Type,2</span>
                                                                </div>
                                                        </div><div style="clear:both"></div></div>
                                        </div><!-- Captcha for Signup -->
                                            <div class="recaptcha" style="padding: 10px 0px 10px 10px;display:none " id="captchaOld" name="captchaContainer">
                                                    <div style="">
                                                            <div style="width: 59%; float: left; min-width: 170px; max-width: 70%;" id="captchaParent">
                                                                    <img src="//campaigns.zoho.eu/images/refresh_icon.png" style="cursor: pointer;float:right;margin-right:4px" onclick="loadCaptcha('https://campaigns.zoho.eu/campaigns/CaptchaVerify.zc?mode=generate',this,'#sf3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61');" id="relCaptcha">
                                                                    <div id="captchaDiv" captcha="true" name="" style="padding: 20px;background:#fff;border: 1px solid rgb(222, 222, 222);box-sizing: border-box;width:98.8%"></div>
                                                                    <input placeholder="Captcha" id="captchaText" name="captchaText" changeitem="SIGNUP_FORM_FIELD" style="margin-top: 5px; width: 98.7%; color: rgb(229, 114, 0); background-color: rgb(235, 235, 235); border: 2px solid rgb(229, 114, 0); padding: 3px; background-attachment: scroll; background-image: url(&quot;data:image/png&quot;); box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: &quot;Open Sans&quot;; border-radius: 24px; background-size: 16px 18px; font-size: 14px; height: 42px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;" maxlength="100" type="text">
                                                                    <span name="SIGNUP_REQUIRED" id="capRequired" style="color: rgb(180, 0, 0); margin-top: -16px; margin-right: -2px; float: right; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*</span>
                                                            </div>
                                                    </div>
                                                    <div style="clear: both"></div>
                                            </div>
                                            <input type="hidden" id="secretid" value="6LdNeDUUAAAAAG5l7cJfv1AA5OKLslkrOa_xXxLs"><!-- Captcha for Signup End--><!-- Other Lists Subscription Start--><!-- Other Lists Subscription End-->
                                            <div style=" border-bottom:#ebebeb dotted 1px; margin-top:10px; clear:both;"></div>
                                            <div id="REQUIRED_FIELD_TEXT" changetype="REQUIRED_FIELD_TEXT" name="SIGNUP_REQUIRED" style="color: rgb(180, 0, 0); padding: 10px 10px 10px 0px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*Required Fields</div>
                                            <div name="privacyPolicy" style=" padding:10px;width:100%;position:relative;display: inline-flex;">
                                                    <input type="checkbox" style="vertical-align:middle" name="PRIVACY_POLICY" value="PRIVACY_AGREED">
                                                    <label for="PRIVACY_POLICY"></label>
                                                    <span style="vertical-align:middle;margin-left:5px">I agree to the&nbsp;
                                                            <a href="https://www.novastone-ca.com/img/NCA-Privacy-Policy.pdf" target="_blank" style="text-decoration:none">Privacy Policy</a>&nbsp;&nbsp;&nbsp;</span>
                                            </div>
                                            <div style="padding:10px; text-align:center;">
                                                    <input type="button" action="Save" id="zcWebOptin" name="SIGNUP_SUBMIT_BUTTON" changetype="SIGNUP_SUBMIT_BUTTON_TEXT" style="cursor: pointer; color: rgb(255, 255, 255); background-color: rgb(229, 114, 0); white-space: normal; border: 1px none rgb(49, 121, 206); padding: 9px 28px; text-align: center; outline: none medium; appearance: none; font-family: &quot;Open Sans&quot;; border-radius: 24px; width: 100%; font-size: 20px; background-position: center bottom; background-repeat: repeat no-repeat;" value="SEND NOW!">
                                            </div><!-- Do not edit the below Zoho Campaigns hidden tags -->
                                            <input type="hidden" id="fieldBorder" value="">
                                            <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="ZCFORMVIEW" onload="">
                                            <input type="hidden" name="viewFrom" id="viewFrom" value="URL_ACTION">
                                            <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
                                            <input type="hidden" id="lD" name="lD" value="116f5b9237bdd4c9">
                                            <input type="hidden" name="emailReportId" id="emailReportId" value="">
                                            <input type="hidden" name="zx" id="cmpZuid" value="14acf01986">
                                            <input type="hidden" name="zcvers" value="2.0">
                                            <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
                                            <input type="hidden" id="mode" name="mode" value="OptinCreateView">
                                            <input type="hidden" id="zcld" name="zcld" value="116f5b9237bdd4c9">
                                            <input type="hidden" id="zctd" name="zctd" value="116f5b923710fdc1">
                                            <input type="hidden" id="document_domain" value="">
                                            <input type="hidden" id="zc_Url" value="atds.maillist-manage.eu">
                                            <input type="hidden" id="new_optin_response_in" value="1">
                                            <input type="hidden" id="duplicate_optin_response_in" value="1">
                                            <input type="hidden" id="zc_formIx" name="zc_formIx" value="3z91324461e41f85b2f2303104634b5e29a8802aaa964c96c3702fdb248ad76b61"><!-- End of the campaigns hidden tags --> </div>
                                </div>
                                    <input type="hidden" id="isCaptchaNeeded" value="false">
                                    <input type="hidden" id="superAdminCap" value="0">
                                    <img src="https://atds.maillist-manage.eu/images/spacer.gif" onload="referenceSetter(this)" id="refImage" style="display:none;">
                            </div>
                                <div style="margin: 0px auto;margin-top:20px;text-align:left;height:76px;" id="privacyNotes" identity="privacyNotes">
                                        <span>Note: It is our responsibility to protect your privacy and we guarantee that your data will be completely confidential.</span>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
                </div>
            </div>
    </div>
</div>
<div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
<div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
        <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
                <img src="https://atds.maillist-manage.eu/images/videoclose.png">
        </span>
        <div id="zcOptinSuccessPanel"></div>
</div>

<!--Zoho Campaigns Web-Optin Form Ends Here-->
            </div>	

			</div>
	    </div>
		