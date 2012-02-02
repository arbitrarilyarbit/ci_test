<div class="alpha-filter">
	<span>Filter: </span>
	<a href="/">0-9</a>
	<a href="/">A</a>
	<a href="/">B</a>
	<a href="/">C</a>
	<a href="/">D</a>
	<a href="/">E</a>
	<a href="/">F</a>
	<a href="/">G</a>
	<a href="/">H</a>
	<a href="/">I</a>
	<a href="/">J</a>
	<a href="/">K</a>
	<a href="/">L</a>
	<a href="/">M</a>
	<a href="/">N</a>
	<a href="/">O</a>
	<a href="/">P</a>
	<a href="/">Q</a>
	<a href="/">R</a>
	<a href="/">S</a>
	<a href="/">T</a>
	<a href="/">U</a>
	<a href="/">V</a>
	<a href="/">W</a>
	<a href="/">X</a>
	<a href="/">Y</a>
	<a href="/">Z</a>
</div>

<div class="categories">
	<ul>

	<?php foreach ($cat_items['listings'] as $item) { ?>
		<li>
			<a href="<?php echo base_url(), $item['href']; ?>">
				<img src="<?php echo base_url();?>system/site/themes/site/img/cat/<?php echo $item['img']; ?>"/>
				<h3><?php echo $item['title']; ?></h3>
				<p><?php echo $item['desc']; ?></p>
			</a>
		</li>
	<?php } ?>

	</ul>
</div>