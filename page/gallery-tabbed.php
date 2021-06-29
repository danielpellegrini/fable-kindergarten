		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Tabbed Gallery','Different Layouts',8,1); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-padding-bottom-5 template-main">
				<?php Template::includeFile('gallery-tabbed'); ?>
			</div>

			<!-- Section -->
			<div class="template-content-section template-padding-top-reset template-padding-bottom-reset template-background-color-2">
			
				<!-- Main -->
				<div class="template-main">
					<?php Template::includeFile('call-to-action-1'); ?>
				</div>
			
			</div>

		</div>