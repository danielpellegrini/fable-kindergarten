		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Page Left Sidebar','Left Sidebar Layout',5,1); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-left template-main template-clear-fix ">

				<!-- Sidebar -->
				<div class="template-content-layout-column-left">
					<?php Template::includeFile('page-sidebar'); ?>
				</div>

				<!-- Content -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('page-1'); ?>
				</div>

			</div>

		</div>