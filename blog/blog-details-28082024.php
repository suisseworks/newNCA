<?php include 'inc/header.php'; ?>
<?php

// change url here too
$base_url = 'https://novastone-ca.com/blog/portal/api/';
$image_url = 'https://novastone-ca.com/blog/portal/uploads/blog/';

if (isset($_GET['slug'])) {
	$apiEndpoint = $base_url . 'blogwithSlug/' . $_GET['slug'];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Curl error: ' . curl_error($ch);
	}
	curl_close($ch);
	$data = json_decode($response, true);
	$blog = $data['data'];
}

?>

<style>
	.blog-footer .brk-footer__wrapper{
    background-color: #2c2c2c !important;
}
.blog-footer .brk-footer__wrapper .container{
    background: linear-gradient(90deg, rgb(186 163 133 / 0.3) 1px, transparent 1px) 1px 0 !important;
    background-size: 257px 1px !important;
    background-position: calc(13px);
}
.blog-detail-main-img{
	border-radius: 20px;
}
.blog-detail-main-img{
	max-width: 518px;
}
.social_icon.social-detail-linkdin span{
	font-size: 24px;
}
.blog-detail-linkdin{
   font-size: 24px !important;
   border-radius: 5px;	
}
@media screen and (min-width: 1599px){
 .blog-details-banner .col-md-5,.blog-banner-bottom .col-md-5{
    flex: 0 0 34.66667%;
    max-width: 34.66667%;
 }
 .blog-details-banner .col-md-6,.blog-banner-bottom .col-md-6{
 	flex: 0 0 40%;
    max-width: 40%;
 }
}
@media only screen and (max-width: 1598) and (min-width: 768px){
	.blog-details-banner .col-md-5, .blog-banner-bottom .col-md-5 {
    flex: 0 0 45.66667%;
    max-width: 45.66667%;
}
}

@media screen and (max-width: 767px){
	.blog-details-banner{
		padding-top: 105px !important;
       padding-bottom: 90px !important;
	}
	.blog-detail-main-img{
		margin-top: -60px !important;
	}
}
</style>

<section class="blog-details-banner pt-190 pb-40">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
			</div>
			<div class="col-md-6">
				<h3 class="mb-3 underline title blog-details text-white wow fadeInUp">
					<?php echo $blog['title'] ?>
				</h3>
			</div>
		</div>
	</div>
</section>
<section class="blog-banner-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<img class="blog-detail-main-img w-100" src="<?php echo $image_url . $blog['image']; ?>">
			</div>
			<div class="col-md-6">
				<div class="detail-info pt-3">
					<span class="date-categories">
						<i><?php echo date('d', strtotime($blog['created_at'])); ?> <?php echo date('M', strtotime($blog['created_at'])); ?> <?php echo date('Y', strtotime($blog['created_at'])); ?> | <?php echo implode(' / ', $blog['categories']); ?></i>
					</span>
					<p class="info-text">
						<?php echo $blog['subtitle'] ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog-details-content pt-70 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="intro-content">
					<?php echo $blog['description']; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<a href="#" class="social_icon social-detail-linkdin d-inline-flex align-items-center h-100 justify-content-center border-radius-0 py-4 text-white bg-primary-2 w-100">
	<span>Follow us on Linkedin</span><i class="blog-detail-linkdin fab fa-linkedin-in font__size-18"></i>
</a>
<?php include 'inc/footer-2.php' ?>