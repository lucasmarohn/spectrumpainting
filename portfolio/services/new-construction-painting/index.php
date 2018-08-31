<?php
$page_type = "portfolio-service";
$page_title = "New Construction Painter | Spectrum Painting & Fine Finishes";
include('../../../parts/header.php'); 
?>

<body class="portfolio portfolio-service new-construction">

<header>
	<?php include('../../../parts/nav.php'); ?>
</header>

<div id="tabs" class="container">
	<?php include('../../../parts/nav-portfolio.php'); ?>
	<div class="med-content">

	<div id="new-construction">
		<h1 class="page-title">New Construction</h1>
		<p>Spectrum Painting performs residential and custom new construction painting at a high level. Spectrum Painting has painted many large projects all around the central coast of california, notably some of the new construction in Santa Maria, San Luis Obispo, and Pismo Beach.</p>

		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/1.jpg"></a>
		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/2.jpg"></a>
		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/3.jpg"></a>

		<aside class="testimonial">
			"Thanks for doing such a great and thorough job in such a timely manner. We appreciate your innovative attention to detail, also. We will gladly recommend you to anyone we know that needs a painter."
			<span>—Kristy Judd, Homeowner</span>
		</aside>
		
		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/4.jpg"></a>
		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/5.jpg"></a>
		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/6.jpg"></a>
		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/7.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/7.jpg"></a>
		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/100_0016.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/100_0016.jpg"></a>
		<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/yellow.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/yellow.jpg"></a>

		<aside class="testimonial">
			"Doug I thank you for a job well done. Our home is special to us and your crew was respectful, efficient and did a great job."
			<span>—Tom Duncan, Homeowner</span>
		</aside>
		
	</div><!-- new-construction -->
	</div><!-- med content -->
</div>
    
<script src="<?php echo $home_url ?>js/jquery-1.10.2.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $home_url ?>js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $home_url ?>js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
			openEffect : 'elastic',
			closeEffect : 'elastic',
			nextEffect : 'elastic',
			nextEffect : 'elastic',
			helpers : {
				overlay : {
					css : {
						'background' : 'rgba(27, 32, 46, 0.95)'
					}
				}
			}
	});
});
</script>


<?php include('../../../parts/footer.php'); ?>