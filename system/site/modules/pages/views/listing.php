<div id="srch-box">
	<?php echo $searchbox;?>
</div>

<div class="srch-listing">
	<ul>

	<?php foreach ($listingResults as $key => $item) { ?>
		<li>
			<a href="<?php echo base_url(); ?>pages/listing/<?php echo $key;?>">
				<img src="<?php echo base_url();?>uploads/listings/<?php echo $key; ?>/img/logo.jpg"/>
				<h3><?php echo $item['title']; ?></h3>
				<p><?php echo $item['desc']; ?></p>
			</a>
		</li>
	<?php } ?>

	</ul>
</div>