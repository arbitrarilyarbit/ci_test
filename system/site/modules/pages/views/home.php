<div class="categories">
	<ul>

	<?php foreach ($cat_items['listings'] as $item) { ?>
		<li>
			<a href="<?php echo base_url(), $item['href']; ?>">
				<h3><?php echo $item['title']; ?></h3>
				<p><?php echo $item['desc']; ?></p>
			</a>
		</li>
	<?php } ?>

	</ul>
</div>