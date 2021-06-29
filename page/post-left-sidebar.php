		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Post Left Sidebar','September 10, 2014'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-left template-main template-clear-fix ">

				<!-- Sidebar -->
				<div class="template-content-layout-column-left">
					<?php Template::includeFile('blog-sidebar'); ?>
				</div>

				<!-- Content -->
				<div class="template-content-layout-column-right">
<?php 
		global $postType,$postTypeIcon;
		$postType='image-1';
		$postTypeIcon='image';
		Template::includeFile('post-1'); 
?>

				</div>		

			</div>

		</div>