		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Blog Search Result Page','Browse News From Our Kindergarten'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">
					<?php Template::includeFile('blog-1'); ?>
				</div>

				<!-- Sidebar -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('blog-sidebar'); ?>
				</div>						

			</div>

		</div>