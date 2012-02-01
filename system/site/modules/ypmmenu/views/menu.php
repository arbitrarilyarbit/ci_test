<ul id="head-nav">
	<li class="first current"><a href="<?php echo base_url(); ?>"><img style="width: 25px; vertical-align: middle;" src="<?php echo base_url();?>system/site/themes/site/img/home_icon.png"/></a></li>

<?php foreach ($menu_items as $item) { ?>

	<li>
	    <?php if (isset($item['href'])) { ?>
	    <?php echo anchor($item['href'], $item['title']); ?>
	    <?php } else { ?>
	    <a href="#"><?php echo $item['title']; ?></a>
	    <?php } ?>
	    <?php if (isset($item['submenu'])) { ?>
	    <ul>
	        <?php foreach ($item['submenu'] as $subitem) { ?>
	        <?php if (!isset($subitem['submenu'])) { ?>
	        <li><?php echo anchor($subitem['href'], $subitem['title']); ?></li>
	        <?php } else { ?>
	        <?php if (isset($subitem['href'])) { ?>
	        <li><?php echo anchor($subitem['href'], $subitem['title']); ?>
	        <?php } else { ?>
	        <li><a href="#"><?php echo $subitem['title']; ?></a>
	        <?php } ?>
	            <ul>
	            <?php foreach ($subitem['submenu'] as $submenu) { ?>
	            <li><?php echo anchor($submenu['href'], $submenu['title']); ?></li>
	            <?php } ?>
	            </ul>
	        </li>
	        <?php } ?>
	        <?php } ?>
	    </ul>
	    <?php } ?>
	</li>

<?php } ?>

	<?php echo Modules::run('listings/searchlistings/searchbar'); ?>
</ul>
