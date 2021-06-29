		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Contact Us I','Get In Touch With Us',10,1); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Main -->
			<div class="template-content-section template-main">

				<?php Template::includeFile('contact-us-feature-1'); ?>

				<?php Template::includeFile('contact-form-1'); ?>

			</div>

			<?php Template::includeFile('google-map-1'); ?>

		</div>