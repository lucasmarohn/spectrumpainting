<?php include('../parts/header.php'); ?>

<script src='https://www.google.com/recaptcha/api.js'></script>

<body class="contact">
	<header>
	<?php include('../parts/nav.php'); ?>

	</header>
	<div class="container large-content">
		<div class="contact-content">
			<h1 class="page-title">Contact Spectrum Painting</h1>
			<?php if(isset($_GET['FormSubmit'])){ ?>
				<span style="background:#558134;border-radius:5px;display:block;padding:10px;text-align:center;margin-bottom:30px;color:white;text-shadow: 1px 1px 2px rgba(0,0,0,.3);">Thank you for your inquiry, we will be contacting you shortly to set up your consultation.</span>
			<?php	} ?>

			<?php if(isset($_GET['FormFail'])){ ?>
				<span style="background:#ce304a;color:white;border-radius:5px;display:block;padding:10px;text-align:center;margin-bottom:30px;">Failed to send. Please make sure you filled out the captcha and try again, or give us a call.</span>
			<?php	} ?>

			<div class="contact-top">
				<aside class="contact-blurb">	
					<p>To receive a free estimate on paint work, please fill out the form with your name, contact information, and basic description of work.</p>
				</aside>

					<section class="contact-form">
					<form action="../mail-contact.php" method="POST">
						<div class="form-fields">
							<label for="name">Name: *</label>
							<input required name="name" type="text" autocomplete="on">

							<label for="name">Email: *</label>
							<input required name="email" type="email" autocomplete="on">

							<label for="name">Phone Number: *</label>
							<input name="phone" type="tel" class="phone_us" maxlength="14">

							<label for="name">Message: </label>
							<textarea required name="message"></textarea>
						</div><!-- form fields -->
						<div class="g-recaptcha" data-sitekey="6LcrAh4UAAAAAHBO6gWOV5jG29uNCTxm-V_ykcMn" style="display:inline-block;margin-right: 20px;margin-bottom:20px;"></div>
						<input type="submit" name="ContactButton" class="button secondary t-white big" value="Send Email" id="ContactButton">
					</form>
					</section>
				</div>
		</div><!-- contact content -->

		<div class="contact-sidebar">
			<div class="contact-sidebar">
				<aside>
					<h3>License #744357</h3>
				</aside>
				<aside>
					<h2><img src="<?php echo $home_url; ?>/images/icons/clock.svg" width="24" style="float:left;vertical-align:baseline;margin-right: 10px;">Hours</h2>
					<p>Mon-Fri: 9:00 am - 5:00 pm</p>
				</aside>
				<aside>
					<h2><img src="<?php echo $home_url; ?>/images/icons/credit-card.svg" width="32" style="float:left;vertical-align:baseline;margin-top: -5px;margin-right: 10px;">More Ways to Pay</h2>
					<p>We accept all major credit cards.</p>
				</aside>
				<aside>
					<h2><img src="<?php echo $home_url; ?>/images/icons/lock.svg" width="32" style="float:left;vertical-align:baseline;margin-top: -5px;margin-right: 10px;">We Care About Your Privacy</h2>
					<p>Information you send to us is stored on a password-protected, firewalled server that utilizes Secure Socket Layers (SSL) encryption. We will never share or sell information we collect with third parties.</p>
				</aside>
				<a class="employment" href="<?php echo $home_url ?>employment">
					Employment Opportunities
				</a>
			</div>
		</div><!-- contact-sidebar -->
	</div><!-- container -->





</script>

<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php include('../parts/footer.php'); ?>

