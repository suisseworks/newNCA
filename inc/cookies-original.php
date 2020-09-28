
<script type="text/javascript">
	jQuery(document).ready(function($)  {
      const hasCookieConsent = getCookie('cookies-nca');

      const cookieBanner = $('.cookies_section');

      
      if (!hasCookieConsent) {
        $(document).on('click','.accept_cookies',function() {
          cookieBanner.addClass('d-none');
          setCookie('cookies-nca', 1, 365);
        });
      } else {
        cookieBanner.addClass('d-none');
      }
    });
    function getCookie(name) {
      const decodedCookie = decodeURIComponent(document.cookie);
      const ca = decodedCookie.split(';');
      name = name + "=";

      for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
          return c.substring(name.length, c.length);
        }
      }
    }
    function setCookie(name, value, days) {
      const date = new Date();
      date.setTime(date.getTime() + (days*24*60*60*1000));
      const expires = "expires=" + date.toUTCString();
      document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }
</script>
<style type="text/css">
    	section.cookies_section {
		    position: fixed;
		    bottom: 0;
		    left: 0;
		    right: 0;
		    z-index: 99999999;
		}
		.cookies_section .close {
		    right: 15px;
		    font-size: 35px;
		    opacity: 1;
		}
		.cookies_section .close:hover {
		    color: #e57200;
		    opacity: 1;
		}
		.cookies_section .cookies_box {
		    border-radius: 7px;
		    margin-bottom: 55px !important;
		    /* padding: 36.339px 100px 37px; */
		    padding: 36.339px 8.3% 37px;
		}
		.cookies_section .cookie-wrap {
		    flex: 0 0 1232px;
		    margin: 0 auto;
		}
		.cookies_section .cookies_box .accept_cookies {
		    line-height: 34px;
		    border-radius: 60px;
		    padding: 0 12.9377px !important;
		}
		.cookies_section .cookies_box .accept_cookies:hover {
		    background: #2c2c2c !important;
		}
		.cookies_section .cookies_box .setting_cookies {
		    color: #2c2c2c;
		    padding: 6px 0 !important;
		}
		.cookies_section .cookies_box .setting_cookies:hover {
		    color: var(--brand-primary)!important;
		    background: none !important;
		}
		.cookies_section .cookies_box p {
		    line-height: 22px;
		    color: #2c2c2c !important;
		}
		@media only screen and (max-width: 1200px){
			.cookies_section .cookie-wrap {
			    padding: 0 20px;
			}
		}
		@media only screen and (max-width: 767px){
			.cookies_section .cookies_box {
			    margin-bottom: 20px !important;
			}
			.cookies_section .cookies_box .setting_cookies {
			    margin-right: 0 !important;
			}
			.cookies_section .cookies_box .setting_cookies {
			    margin-bottom: 0;
			}
			.cookies_section .cookies_box .accept_cookies {
			    margin-bottom: 0;
			}
			.cookies_section .cookies_box {
			    padding: 30px 5% 30px;
			}
		}
    </style>
<section class="cookies_section alert alert-dismissible fade show p-0 m-0 wow fadeInUpBig"  data-wow-duration="0.5s" data-wow-delay="2s" role="alert">
	<div class="">
		<div class="row justify-content-end">
			<!-- <div class="col-1"></div> -->
			<div class="col-12 cookie-wrap">
				<div class="cookies_box mb-5 bg-white position-relative">
					<!-- <div class="close_button d-flex justify-content-end position-absolute">
						<a href="#"><i class="fa fa-times font__size-20"></i></a>
					</div> -->
					<div class="row d-flex align-items-center">
						<div class="col-md-8 text-lg-left text-md-left text-sm-center text-center">
							<h2 class="font__size-20 mb-2 font__family-efb color-primary">Cookies & Privacy</h2>
							<p class="font__size-14 font__family-sspr">This website uses cookies. We use cookies to personalise content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media, advertising and analytics partners who may combine it  ith other information that you’ve provided to them or that they’ve collected from your use of their services. You consent to our cookies if you continue to use our website.</p>
						</div>
						<div class="col-md-4 mt-lg-0 mt-md-0 mt-4 mt-sm-4">
							<div class="cookies_buttons text-lg-right text-md-right text-sm-center text-center">
								<div>
									<button type="button" class="btn font__size-16 bg-primary text-white font__family-sspb px-4 mx-0 accept_cookies">Accept cookies</button>
								</div> 
								<div>
									<a href="#" type="button" class="btn font__size-16 font__family-sspb px-4 mx-0 setting_cookies mr-4">cookie Setting</a>
								</div> 
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
			</div>
			<!-- <div class="col-1"></div> -->
		</div> 
	</div> 
</section>

