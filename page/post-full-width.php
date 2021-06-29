		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Post Full Width','September 10, 2014'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-main template-clear-fix ">
<?php 
		global $postType,$postTypeIcon;
		$postType='image-2';
		$postTypeIcon='image';
		Template::includeFile('post-1'); 
?>	
			</div>

		</div>