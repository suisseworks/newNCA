$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	dots: true,
	asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	dots: false,
	focusOnSelect: true,
	centerMode: true,
	responsive: [
	{
		breakpoint: 2660,
		settings: {
			slidesToShow: 5,
		}
	},
	{
		breakpoint: 1200,
		settings: {
			slidesToShow: 4,
		}
	},
	{
		breakpoint: 958,
		settings: {
			slidesToShow: 3,
		}
	},
	{
		breakpoint: 733,
		settings: {
			slidesToShow: 2,
		}
	},
	{
		breakpoint: 463,
		settings: {
			slidesToShow: 1,
		}
	}
	]
});
