<?php
$page_type = "portfolio-service";
$page_title = "Residential House Painter | Spectrum Painting & Fine Finishes";
include('../../../parts/header.php'); 
?>

<body class="portfolio portfolio-service residential">
<header>
	<?php include('../../../parts/nav.php'); ?>
</header>

<div id="tabs" class="container">
	
	<?php include('../../../parts/nav-portfolio.php'); ?>

	<div class="med-content">
		<div id="residential">

			<h1 class="page-title">Residential</h1>

			<p>Spectrum Painting provides both interior and exterior painting services to residential homeowners, realtors &amp; property management companies from San Luis Obispo to Solvang who seek competitive pricing and painters who are professional, reliable and courteous. Our experienced personnel can paint a wide variety of surfaces with competence; from a simple single color interior to the most elaborate multi-color “designer” interior or Victorian exterior.</p>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/1.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/2.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/3.jpg"></a>
			
			<aside class="testimonial">
				“From start to finish your service was impeccable. There is no question in my mind, you will be the only person I call next time. I will recommend your service to anyone who needs painting."
				<span>—Gail West, Homeowner</span>
			</aside>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/4.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/5.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/6.jpg"></a>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/7.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential7.png"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/8.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential8.png"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/9.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential3.png"></a>

			<aside class="testimonial">
				"Thank you for our beautiful paint job. It was a pleasure to have your terrific crew working at our home. They are very professional, clean and highly skilled. Spectrum Painting is the best!"
				<span>—Donna Yaw, Homeowner</span>
			</aside>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/100_1680.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/100_1680.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/10.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/10.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/residential/full_size/100_0140.jpg"><img src="<?php echo $home_url ?>images/portfolio/residential/100_0140.jpg"></a>
		</div>
	</div>
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