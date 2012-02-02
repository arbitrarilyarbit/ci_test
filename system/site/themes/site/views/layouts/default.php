<!DOCTYPE html>
<html>
<head>
	<?php file_partial('metadata'); ?>
</head>
<body id="top">
	<!-- Begin pageWrapper -->
	<div id="pageWrapper">
		<?php file_partial('header'); ?>
		<?php file_partial('navigation'); ?>
		<?php file_partial('banner'); ?>

		<!-- Begin contentWrapper -->
		<div id="contentWrapper">
			<?php file_partial('content'); ?>
		</div>
		<!-- End contentWrapper -->

	<?php file_partial('footer'); ?>
	</div>
	<!-- End pageWrapper -->
</body>
</html>