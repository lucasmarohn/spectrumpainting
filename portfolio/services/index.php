<?php
$page_type = "portfolio-service";
$page_title = "Portfolio of Paint Services | Spectrum Painting & Fine Finishes";
include('../../parts/header.php'); 
?>

<body class="portfolio portfolio-service">
	<header>
		<?php include('../../parts/nav.php'); ?>
	</header>

	<div id="tabs" class="container">
		<?php include('../../parts/nav-portfolio.php'); ?>
		<div class="med-content">
			<h1 class="page-title">Portfolio of Services</h1>

			<h2>Residential</h2>

			<p>Spectrum Painting provides both interior and exterior painting services to residential homeowners, realtors &amp; property management companies from San Luis Obispo to Solvang who seek competitive pricing and painters who are professional, reliable and courteous.</p>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/1.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/2.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/3.jpg"></a>

			<a class="button secondary t-white big" href="<?php echo $home_url ?>portfolio/services/residential">View Residential Photos</a>

			<h2>New Construction</h2>
			<p>Spectrum Painting performs residential and custom new construction painting at a high level. Spectrum Painting has painted many large projects all around the central coast of california, notably some of the new construction in Santa Maria, San Luis Obispo, and Pismo Beach.</p>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/1.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/2.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/new_construction/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/new_construction/3.jpg"></a>

			<a class="button secondary t-white big" href="<?php echo $home_url ?>portfolio/services/residential">View New Construction Photos</a>

			<h2>Custom Cabinetry</h2>
			<p>Spectrum Painting can expertly paint or finish cabinetry using the highest quality materials and techniques. Spectrum Painting has its own cabinet refinishing shop located in San Luis Obispo county and can conveniently paint and finish the work off-site to avoid the stress of displacement from ones home, kitchen or garage space.</p>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/1.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/2.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/3.jpg"></a>

			<a class="button secondary t-white big" href="<?php echo $home_url ?>portfolio/services/residential">View Custom Cabinetry Photos</a>

			<h2>Commercial</h2>
			<p>Spectrum Painting has the knowledge and experience to work with the various surfaces, products &amp; equipment needed to perform commercial jobs with skill and ease including office buildings, hotels, churches, shopping centers, warehouses and multi-family rental housing.</p>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/1.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/2.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/3.jpg"></a>

			<a class="button secondary t-white big" href="<?php echo $home_url ?>portfolio/services/residential">View Commercial Photos</a>
				
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


<?php include('../../parts/footer.php'); ?>