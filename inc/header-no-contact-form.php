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
					<?php include 'inc/nav.php'; ?>
				</div>

				<!-- <div class="col-lg-2 align-self-lg-stretch text-lg-right header_third_part">
					<div class="brk-header__item h-100 d-flex align-items-center justify-content-center">						
						<div class="footer_btns">
							<a href="https://www.linkedin.com/company/novastone-capital-advisors/" target="_blank" class="social_icon d-inline-flex align-items-center justify-content-center border-radius-5 p-1 font__family-avenir"><i class="fab fa-linkedin-in font__size-18"></i></a>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</div>
</header>


<style>
	#profile-styler {
		background-color: var(--brk-secondary-1);
		border-radius: 10px;
		color: rgb(113, 122, 130);
		line-height: 50px;
		padding: 0px 15px 0px 29px;
		width: 100%;
		z-index: 10;
	}

	.jq-selectbox__dropdown {
		background: white;
		width: 60%;
		color: black;
		padding-left: 20px;
	}

	#contact-form {
		margin-top: 15px;
	}

	.form-container {
		/*background: #e5720a;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);*/
		max-width: 900px;
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		align-items: stretch;
		border-radius: 10px;
		overflow: hidden;
		/*        margin-bottom: 20px;*/
	}

	.form-content {
		flex: 1 1 50%;
		box-sizing: border-box;
		color: white;
		padding-left: 20px;
		padding-right: 20px;
		text-align: left;
	}

	.form-group select {
		width: 100%;
		padding: 12px 20px;
		border: 1px solid #ddd;
		border-radius: 10px;
		background-color: #e7ebec;
		font-size: 16px;
		color: #666;
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
	}

	.form-group input,
	.form-group textarea {
		border-radius: 10px !important;
	}

	.form-group select:focus {
		border-color: #bfbfbf;
		outline: none;
	}

	.form-group label {
		display: block;
		margin-bottom: 8px;
		color: black;
		font-weight: bold;
	}

	.form-group input,
	.form-group textarea {
		width: 100%;
		padding: 12px;
		border: 1px solid #ddd;
		border-radius: 24px;
		box-sizing: border-box;
		background-color: #e7ebec;
		color: black;
		outline: none;
	}

	.form-group textarea {
		resize: none;
	}

	.form-group button {
		background-color: white;
		color: #e5720a;
		padding: 12px;
		border: none;
		border-radius: 10px;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
	}

	.form-image {
		flex: 1 1 50%;
		background-color: #fff;
	}

	.form-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	footer {
		width: 100%;
		background-color: #333;
		color: white;
		padding: 10px 0;
		text-align: center;
		position: fixed;
		bottom: 0;
		left: 0;
	}


	.form-group input[type="checkbox"] {
		width: auto;
	}

	.form-group.checkbox-group {
		display: flex;
		align-items: center;
		gap: 10px;
	}

	.form-group.checkbox-group input[type="checkbox"] {
		margin: 0;
	}

	.form-group.checkbox-group label {
		margin: 0;
		font-weight: normal;
	}

	@media (max-width: 768px) {
		.form-container {
			flex-direction: column;
			max-width: 100%;
			height: auto;
		}

		.form-content {
			padding: 20px;
		}

		.form-group input,
		.form-group select,
		.form-group textarea {
			font-size: 14px;
		}

		.form-group button {
			font-size: 16px;
		}
	}

	/* specific styles for aligning the checkbox and label */
	.form-group .checkbox-group {
		display: flex;
		align-items: center;
	}

	.form-group .checkbox-group input[type="checkbox"] {
		margin-right: 10px;
		width: auto;
	}

    .form-container {
        /*background: #e5720a;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);*/
        max-width: 900px;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        border-radius: 10px;
        overflow: hidden;
/*        margin-bottom: 20px;*/
    }

    .form-content {
        flex: 1 1 50%;
        box-sizing: border-box;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
        text-align: left;
    }

    .form-group select {
        width: 100%;
        padding: 12px 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #e7ebec;
        font-size: 16px;
        color: #666;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .form-group input, .form-group textarea {
    	border-radius: 10px !important;
    }

    .form-group select:focus {
        border-color: #bfbfbf;
        outline: none;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: black;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 24px;
        box-sizing: border-box;
        background-color: #e7ebec;
        color: black;
        outline: none;
    }

    .form-group textarea {
        resize: none;
    }

    .form-group button {
        background-color: white;
        color: #e5720a;
        padding: 12px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .form-image {
        flex: 1 1 50%;
        background-color: #fff;
    }

    .form-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    footer {
        width: 100%;
        background-color: #333;
        color: white;
        padding: 10px 0;
        text-align: center;
        position: fixed;
        bottom: 0;
        left: 0;
    }


    .form-group input[type="checkbox"] {
    width: auto; /* You can specify auto or a specific width */
}


/* Specific styles for aligning the checkbox and label */
    .form-group.checkbox-group {
        display: flex;
        align-items: center; /* Aligns the checkbox and label vertically */
        gap: 10px; /* Adds space between the checkbox and the label */
    }

    .form-group.checkbox-group input[type="checkbox"] {
        margin: 0; /* Removes any margin around the checkbox */
    }

    .form-group.checkbox-group label {
        margin: 0; /* Removes default margin */
        font-weight: normal; /* Optional: Adjust label text style */
    }



    @media (max-width: 768px) {
        .form-container {
            flex-direction: column;
            max-width: 100%;
            height: auto;
        }

        .form-content {
            padding: 20px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 14px;
        }

        .form-group button {
            font-size: 16px;
        }
    }

    /* Specific styles for aligning the checkbox and label */
    .form-group .checkbox-group {
        display: flex;
        align-items: center;
    }

    .form-group .checkbox-group input[type="checkbox"] {
        margin-right: 10px; /* Add space between checkbox and label */
        width: auto; /* Ensure checkbox doesn't take full width */
    }

 
 
</style>