<?php 
	
	$_SESSION["lan"] = "English";
?>
<?php include 'inc/header.php'; ?>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-PMVD7NQ
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section class="pt-70 co_investors_main mb-5">
        <div class="container">
				<div class="row no-gutters pt-lg-0 pt-70">
					<div class="col-12 co_strike_heading">
	                    <h2 class="stroke_text text-uppercase text-center text-lg-left text-md-left text-sm-left text-xs-left mb-10 mb-lg-0 wow fadeInLeft z-index-0">CO-INVESTORS</h2>
	                </div>
	                <div class="investors_content">
		                <div class="headline about_headline d-lg-none">
							<h3 class="mb-3 underline title tile_2 position-relative wow fadeInUp pl-80">
								Our consortium of <br>Single Family Offices<br> supports the next generation of exceptional entrepreneurial talents.
							</h3>
						</div>
					</div>	
				</div>	
				<div class="co_invester_contact">
					<div class="row no-gutters">
						<div class="col-lg-5 pr-115 form_main_col">
							<div class="co_investors_form bg-primary pl-lg-70 pr-lg-100 pt-lg-40 pb-lg-40">
								<div class="contact_text">
                                    <h2 class="text-uppercase text-white font__family-efb font__size-60 mb-2">contact</h2>
                                    <p class="text-white font__size-20 font__family-open-sans">Please complete the form below and our Investor Relations Director will be in touch shortly.</p>
								</div>  
								<div style="display: none;" id="form-alert-success" class="alert alert-success form-alert-success" role="alert">
									Information was sent successfully!
								</div>
                                <form id="co_investors_contact_form" class="pt-5 investors_contact_form needs-validation" novalidate>
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
                                		<input type="email" class="form-control bg-white px-4 border-radius-25" name="Email" id="Email" placeholder="E-mail" required>
                                		<div class="invalid-feedback">
									        Please provide your email address.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<textarea class="form-control p-4 bg-white border-radius-25" id="co_investors_text" placeholder="Message" rows="3" name="Comment"></textarea>
                                	</div>
                                	<div class="form-group ml-2">	
									<div class="">
										<p class="font__family-open-sans  text-white  pb-3  font__size-12">
										* = required
										</p>
									</div>
                                	<div class="checkbox checkbox-info checkbox-circle d-flex mb-2 line__height-16 text-white font__size-14">
							            <input id="co-investor01" type="checkbox" name="Newsletter">
							            <label for="co-investor01" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
											Subscribe to our newsletter
										</label>
							        </div>

							          <div class="checkbox checkbox-info checkbox-circle d-flex line__height-16 text-white font__size-14">
							            <input id="co-investor02" type="checkbox">
							            <label for="co-investor02" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							              By signing up to the form, you agree to our terms and privacy policy.
							          </div>
                                	</div>
									<div id="co_investors_contact_form-submit" class="submit_btn w-100 text-center">	
                                	    <button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
									</div>
									<div id="co_investors_contact_form-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
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
						<div class="col-lg-7">
							<div class="investors_content pt-lg-100 pt-50">
								<div class="headline about_headline d-xs-none">
									<h3 class="mb-3 underline title tile_2 position-relative wow fadeInUp pl-80">
										Our consortium of <br>Single Family Offices<br> supports the next generation of exceptional entrepreneurial talents.
									</h3>
								</div>
								<div class="investors_content_text bg-white pl-lg-80 pr-lg-115 pb-lg-60 pt-lg-100 p-5 p-xs-20">
									<p class="font__size-16 font__family-open-sans line__height-30">
										Investors in this asset class have historically benefited from a diversified portfolio of profitable and well-established companies. If you want to know more about our role as co-investors, please complete the contact form on this page and our Investor Relations Director will be in touch shortly. 
									</p>
								</div>	
							</div>	
						</div>	
					</div>		
			</div>
		</div>		
    </section>
</body>	
<?php include 'inc/footer.php'; ?>