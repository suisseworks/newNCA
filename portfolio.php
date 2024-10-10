<?php include 'inc/header.php'; ?>

<style>
.portfolio-main-cls .container{
	background-size: 0px !important;
}
.counter-section{
    background-color: #0E2336;
    padding: 30px 0px;
}
.counter-section .strike_heading_2 .portfolio-heading.stroke_text{
    font-size: 82.8px !important;
    line-height: 104.99px !important;
    font-weight: 700 !important;
    -webkit-text-stroke: 1px #ffffff;
    -webkit-text-fill-color: transparent;
    color: #ffffff;
}
.counter-section .mini-heading{
    font-size: 28.49px;
    font-weight: 400;
    line-height: 36.12px;
}
.counter-div .count-up p,.counter-div .count-up p span.counter-count{
    font-size: 83.08px;
   font-weight: 700;
   line-height: 105.35px;
}
.counter-div .count-up .counter-name{
	font-size: 28.49px;
	font-weight: 400;
	line-height: 36.12px;
	color: #ffffff;
}
.counter-div{
	max-width: 616.55px;
	margin: 0 auto;
}
.counter-div .count-up{
	width: 33.33%;
	text-align: center;
}
.partners-headline{
	max-width: 757px;
    font-size: 18px;
    font-weight: 400;
    line-height: 22.82px;
    color: #0E2336;
    margin: 0 auto;
}
.our-partners-sec .where_invest_heading .stroke_text.talents_stroke_text{
    font-size: 85.77px !important;
    font-weight: 700;
    line-height: 108.76px !important;
}
.logos-row-container{
	max-width: 1120px;
	margin: 0 auto;
}
.iar-img,.fo-seng-img{
	max-width: 120px !important;
}
.adex-img{
	max-width: 200px !important;
}
.for-med-img{
	max-width: 244px !important;
}
.ffco-img{
	max-width: 197.94px !important;
}
.water-runner-img{
	max-width: 186.86px !important;
}
.stlcom-img{
	max-width: 250px !important;
}
.ch-1-img{
	max-width: 154px !important;
}
.green-logistics-img{
	max-width: 182.86px !important;
}
.img-bg{
    width: 284px;
    box-shadow: 0px 0px 4px 0px #00000040;
    border-radius: 30px;
    padding: 30px 0px;
}


.portfolio-img{
	max-width: 200px;
	 
}



.portfolio-img:hover {
    box-shadow: 0 4px 8px white; /* Adds a shadow on hover */
    cursor: pointer;
    transform: scale(1.05); /* Slightly enlarges the image on hover */
}
 


@media only screen and (min-width: 768px){
	.desktop-display{
		display: block;
	}
	.mobile-display{
		display: none;
	}
	.mobile-logos{
		display: none;
	}
}

@media only screen and (max-width: 991px){
	.counter-section .strike_heading_2 .portfolio-heading.stroke_text{
		font-size: 40px !important;
	}
	.desktop-logos img {
      max-width: 100px;
    }
    .img-bg{
    	width: 165px;
    }
}

@media only screen and (max-width: 767px){
	.desktop-display{
		display: none;
	}
	.mobile-display{
		display: block;
	}
	.counter-div{
		flex-wrap: wrap;
	}
	.counter-div .count-up{
		width: 33.33%;
		text-align: center;
	}
	.desktop-logos{
		display: none;
	}
	.mobile-logos{
		display: block;
		margin-top: 30px;
	}
	.mobile-adex-img{
		max-width: 131px;
	}
	.mobile-forza{
		max-width: 135px;
	}
	.grupo-mobile{
		max-width: 111.55px;
	}
	.feme-mobile{
		max-width: 155px;
	}
	.iar-img-mobile{
		max-width: 92px;
	}
	.fo-seng-mobile{
		max-width: 80px;
	}
	.for-med-mobile{
		max-width: 142px;
	}
	.mobile-seyses{
		max-width: 136px;
	}
	.mobile-hide{
		display: none;
	}
	.counter-section .mini-heading{
		font-size: 32px !important;
		font-weight: 400;
		line-height: 40.58px !important;
	}
    .counter-section .strike_heading_2 .portfolio-heading.stroke_text{
		font-size: 55px !important;
		font-weight: 700;
		line-height: 69.74px !important;
	}
	.counter-div .count-up p,.counter-div .count-up p span.counter-count{
		font-size: 62.49px;
		font-weight: 700;
		line-height: 79.24px;
	}
	.counter-div .count-up .counter-name{
		font-size: 21.43px;
        line-height: 27.17px;
	}
	.our-partners-sec .where_invest_heading .stroke_text.talents_stroke_text{
		font-size: 45.77px !important;
		font-weight: 700;
		line-height: 58.04px !important;
	}
	.talents_headline.partners-headline .responsive_bottom_text{
		font-size: 16px;
		font-weight: 400;
		line-height: 20.29px !important;
		padding: 0px 35px;
	}
}
</style>
<main class="portfolio-main-cls">
  <section class="portfolio-banner">
	<div class="map-img-div">
		<img class="w-100 desktop-display" src="img/portfolio/porfolio-background.jpg">
		<img class="w-100 mobile-display" src="img/portfolio/porfolio-background.jpg">
	</div>	
</section> 

<section class="counter-section pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="strike_heading_2 text-white">
				    <div class="row no-gutters">
				    	<div class="col-12">
		                    <h2 class="stroke_text text-uppercase text-md-center text-left mb-10 mb-lg-0 portfolio-heading">Our Portfolio</h2>
		                </div>          
				    </div>            
			    </div>

                <div class="counter-div d-flex justify-content-space-between text-white">
				    <div class="count-up">
	                    <p><span class="counter-count">20</span></p>
	                    <h3 class="counter-name">Companies</h3>
                    </div>
					<div class="count-up">
	                    <p><span class="counter-count">10</span></p>
	                    <h3 class="counter-name">Countries</h3>
                    </div>
					<div class="count-up">
	                    <p><span class="counter-count">7</span></p>
	                    <h3 class="counter-name">Industries</h3>
                    </div>
				</div>

			</div>
				
		</div>	
	</div>	
</section>

<section class="our-partners-sec pt-70 pb-70 bg-white">
	<div class="container">
        <div class="row">
        	<div class="col-lg-12">
	        	<div class="where_invest_heading mb-3">
					<h2 class="stroke_text talents_stroke_text  text-center talents_strok_cls_2 stroke_text_noposition text-uppercase pl-lg-0 px-xs-50 pl-sm-30 mb-10 mb-lg-0">Meet our partners</h2>
				</div>
			</div>	
			<div class="col-lg-12">
				<div class="talents_headline partners-headline text-center">
					<p class="responsive_bottom_text pl-lg-0 pl-sm-30 px-xs-50">
					Novastone Capital Advisors boasts a diverse portfolio of companies across the US, Canada, and the EU, reflecting our commitment to supporting SMEs in their growth while preserving their unique legacies.
					</p>
				</div>
			</div>
        </div>	

        <div class="desktop-logos logos-row-container pt-60">
	      
		<div class="row align-items-center">

	        	
			<div class="col-md-3 text-center">
					<a href="iar-group.php" target="_blank">
						<img class="portfolio-img iar-img" src="img/portfolio/IAR-Dark-Desktop.png">
					</a>
	        	</div>

				<div class="col-md-3 text-center">
				<a href="green-logistics.php" target="_blank">
                    <img class="portfolio-img green-logistics-img" src="img/portfolio/green-logistics.png">
				</a>
	        	</div>
			
					
	        	<div class="col-md-3 text-center">
				<a href="formeds.php" target="_blank">
	        		<img class="portfolio-img for-med-img" src="img/portfolio/Formeds_Logo__dark_blue_bez_tla 1.png">
				</a>
	        	</div>

				<div class="col-md-3 text-center">			 					 
					<a href="forza-doors.php" target="_blank">
						<img class="portfolio-img" src="img/portfolio/forza-logo.png" alt="Forza Logo">
					</a>
	        	</div>
			
	        	
	        	

	        

	        
	        </div>	




	        <div class="row align-items-center mb-30">


				<div class="col-md-3 text-center">
					<a href="seyses.php" target="_blank">
						<img class="portfolio-img" src="img/portfolio/logo-seyses.png">
					</a>
	        	</div>	

				<div class="col-md-3 text-center">
					<a href="chapter-one.php" target="_blank">
						<img class="portfolio-img ch-1-img" src="img/portfolio/ch-1.png">
					</a>
	        	</div>	

					
	        	<div class="col-md-3 text-center">
					<a href="stl-communications.php" target="_blank">
						<img class="portfolio-img stlcom-img" src="img/portfolio/stllogo.png">
					</a>
	        	</div>

				
	        	<div class="col-md-3 text-center">
				<a href="water-runner.php" target="_blank">
	        		<img class="portfolio-img water-runner-img" src="img/portfolio/water-runner-logo.png">
				</a>
	        	</div>	

				<div class="col-md-3 text-center">
					<a href="fooseng.php" target="_blank">
	        			<img class="portfolio-img fo-seng-img" src="img/portfolio/foo-seng.png">
					</a>
	        	</div>

				<div class="col-md-3 text-center">
				<a href="#"  >
                    <img class="portfolio-img adex-img" src="img/portfolio/med-systeme.jpg">
				</a>
	        	</div>

	        	<div class="col-md-3 text-center">
				<a href="adex.php" target="_blank">
                    <img class="portfolio-img adex-img" src="img/portfolio/adex.png">
				</a>
	        	</div>

				<div class="col-md-3 text-center">
					<a href="stockton-truss" target="_blank">
						<img class="portfolio-img " src="img/portfolio/stockton-truss-logo.png">
					</a>
	        	</div>	

				<div class="col-md-3 text-center">
					<a href="sor4life.php" target="_blank">
						<img class="portfolio-img" src="img/portfolio/stewards-of-recovery-logo.png">
					</a>
	        	</div>
	        

				<div class="col-md-3 text-center">
				<a href="#" >
	        		<img class="portfolio-img ffco-img" src="img/portfolio/mecavit.png">
				</a>
	        	</div>
			


	        	<div class="col-md-3 text-center">
				<a href="formeds.php" target="_blank">
	        		<img class="portfolio-img ffco-img" src="img/portfolio/FF_CO_LTD.png">
				</a>
	        	</div>

				<div class="col-md-3 text-center">
				<a href="#"  >
	        		<img class="portfolio-img ffco-img" src="img/portfolio/Garner-Osborne.svg">
				</a>
	        	</div>

				<div class="col-md-3 text-center">
				<a href="#"  >
	        		<img class="portfolio-img ffco-img" src="img/portfolio/Extended-Power-Logo.png">
				</a>
	        	</div>
				<div class="col-md-3 text-center">
				<a href="#"  >
	        		<img class="portfolio-img ffco-img" src="img/portfolio/keystone-pharmacy.png">
				</a>
	        	</div>

				<div class="col-md-3 text-center">
				<a href="#"  >
	        		<img class="portfolio-img ffco-img" src="img/portfolio/Showroom-Marcona3.png">
				</a>
	        	</div>

				<div class="col-md-3 text-center">
				<a href="#"  >
	        		<img class="portfolio-img ffco-img" src="img/portfolio/logo-umecc.png">
				</a>
	        	</div>

	        </div>	

	        <div class="row align-items-center ">

	        

			 

	        </div>	

	        <div class="row align-items-center">
 
	        	<div class="col-md-3">
	        		
	        	</div>

	        	<div class="col-md-3">
	        		
	        	</div>	

	        </div>

	    </div>


	    <div class="mobile-logos logos-row-container">
	        <div class="row align-items-center">

                <div class="col-6 text-center">
                    <img class="mobile-adex-img mb-5" src="img/portfolio/adex.png">
	        	</div>

	        	<div class="col-6 text-center">
                       <img class="mobile-forza mb-5" src="img/portfolio/forza-logo.png">
	        	</div>

	        	<div class="col-6 text-center">
                    <img class="grupo-mobile mb-5" src="img/portfolio/mobile-green.png">
	        	</div>

	        	<div class="col-6 text-center">
	        		<img class="feme-mobile mb-5" src="img/portfolio/feme-logo.png">
	        	</div>
	        	
	        	<div class="col-6 text-center">
	        		
	        		<img class="iar-img-mobile mb-5" src="img/portfolio/IAR-Dark-Desktop.png">
	        	</div>

	        	<div class="col-6 text-center">
	        		<img class="fo-seng-mobile mb-5" src="img/portfolio/foo-seng.png">
	        	</div>

	        	<div class="col-6 text-center">	
	        		<img class="for-med-mobile" src="img/portfolio/formed-mobile-logo.png">
	        	</div>

	        	<div class="col-6 text-center">
	        		<img class="mobile-seyses" src="img/portfolio/logo-seyses-mobile.png">
	        	</div>	

	        </div>	
	    </div>    

	</div>	
</section>
</main>

<?php include 'inc/footer.php' ?>