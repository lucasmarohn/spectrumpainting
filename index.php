<?php
	$page_title = "Spectrum Painting & Fine Finishes | Expert Residential and New Construction Painting from San Luis Obispo to Solvang"
?>
<?php include('parts/header.php'); ?>


<script src='https://www.google.com/recaptcha/api.js'></script>
<body class="home">

<header>
	<?php include('parts/nav.php'); ?>

	<div class="hero-banner">
		<div class="container">
			<section class="cta">Color consulting, cabinet refinishing, and expert painting for the finest homes &amp; businesses on the central coast.</section>
			<section class="buttons">
				<a href="<?php echo $home_url; ?>portfolio/services/residential-house-painting" class="button transparent t-white">View our Portfolio</a>
				<a href="<?php echo $home_url; ?>contact" class="button secondary t-white big">Get your Free Quote</a>
			</section>
		</div>
	</div>
</header>

<section class="container home-intro">
	<img src="images/home-image.png">
	<h1>Spectrum Painting and Fine Finishes has been serving homeowners on the central coast for over 20 years.</h1>
	<p>Owned and operated by long time central coast resident and Cal Poly graduate Doug Marohn, Spectrum Painting provides only the highest quality service to our customers.</p>
	<a href="<?php echo $home_url; ?>about/" class="button secondary t-white">Learn About Spectrum Painting</a>
</section>

<section class="feature-yelp">
	<div class="container">
		<div class="rating-title">
			<img src="images/star-rating.svg" class="yelp-rating">
			<h2>4.5 Stars &amp; Over 30+ Reviews on Yelp!</h2>
		</div>

		<div class="testimonials">
			<aside class="testimonial">
			<blockquote>"We are grateful for Doug Marohn, owner of Spectrum Painting & Fine Finishes for quickly getting to our painting project. The crew was one of the most pleasant groups of men to work with. They couldn’t do enough for us and were so flexible." </blockquote>
			<span class="author">—Tinker Andrews, Director, Solvang Senior Center</span>
			</aside>
			<aside class="testimonial">
			<blockquote>"Doug and his crew finished painting our house today. The paint Job looks great. I have to say Doug and crew were very professional and completed the job on time and on budget. I will definitely be using and recommending Spectrum Painting in the future. Thank you Spectrum!!"</blockquote>
			<span class="author">—Erik S. on Yelp</span>
			</aside>
		</div><!-- testimonials -->
	</div><!-- container -->
</section>

<div class="white-bg">
	<section class="container">
		<section class="alignleft home-services-text">
			<h3>Spectrum Painting offers a wide variety of services, performed by punctual, responsible, and highly skilled painters.</h3>
			<ul class="service-list">
				<li>Color Consulting</li>
				<li>Wood Repair</li>
				<li>Interior Painting</li>
				<li>Stucco Repair</li>
				<li>Exterior Painting</li>
				<li>Drywall Repair</li>
				<li>Cabinet Painting</li>
				<li>Rust Remediation</li>
				<li>Cabinet Finishing</li>
				<li>Deck Finishing</li>
				<li>Designer Interiors</li>
				<li>Expert Preparation</li>
				<li>Elastomeric Coatings</li>
				<li>Powerwashing</li>
				<li>Wallpaper Removal</li>
				<li>WaterProofing</li>
			</ul>
		</section>
		<section class="alignright home-services-images">
			<a href="<?php echo $home_url; ?>portfolio/services/residential-house-painting">
				<img src="images/portfolio/residential/1.jpg">
				<span class="button secondary t-white">Residential</span>
			</a>
			<a href="<?php echo $home_url; ?>portfolio/services/new-construction-painting">
				<img src="images/portfolio/new_construction/1.jpg">
				<span class="button secondary t-white">New Construction</span>
			</a>
			<a href="<?php echo $home_url; ?>portfolio/services/custom-cabinet-painting">
				<img src="images/portfolio/cabinetry/3.jpg">
				<span class="button secondary t-white">Cabinetry</span>
			</a>
			<a href="<?php echo $home_url; ?>portfolio/services/commercial-painting">
				<img src="images/portfolio/commercial/1.jpg">
				<span class="button secondary t-white">Commercial</span>
			</a>
		</section>
	</section>
</div><!-- white-bg -->

<section class="home-quote" id="homeQuote">
	<h1 class="t-white">Get a Free Quote</h1>
	<p class="t-white">To receive a free estimate on your paint work, please contact us through the form below or give us a call at <a href="tel:+18055444195">(805) 544-4195</a>.</p>
   
    <?php if(isset($_GET['FormSubmit'])){ ?>
      <span style="background:#558134;border-radius:5px;display:block;padding:10px;text-align:center;margin-bottom:30px;color:white;text-shadow: 1px 1px 2px rgba(0,0,0,.3);">Your email has been sent, we look forward to speaking with you.</span>
    <?php	} ?>
    <?php if(isset($_GET['FormFail'])){ ?>
      <span style="background:#ce304a;color:white;border-radius:5px;display:block;padding:10px;text-align:center;margin-bottom:30px;">The contact form did not send! Make sure you filled out the captcha and try again, or give us a call.</span>
    <?php	} ?>

	<form action="mail-home.php" method="POST">
		<div class="alignleft">
			<input required name="name" type="text" placeholder="Your Name:" autocomplete="on" >  
			<input required name="email" type="email" placeholder="Your Email:" autocomplete="on" >
			<input name="phone" type="text" placeholder="Phone Number:" class="phone_us" maxlength="14" >
		</div>
		<div class="alignright">
			<textarea required name="message" placeholder="Message:" ></textarea>
		</div>

		<div class="alignright" style="width: 100%;text-align:right;">
			<div class="g-recaptcha" data-sitekey="6LcrAh4UAAAAAHBO6gWOV5jG29uNCTxm-V_ykcMn" style="display:inline-block;margin-right: 20px;margin-bottom:20px;"></div>
			<input type="submit" name="ContactButton" class="button secondary t-white big" value="Send Email" id="ContactButton">
		</div>
	</form>
</section>



<?php include('parts/footer.php'); ?>