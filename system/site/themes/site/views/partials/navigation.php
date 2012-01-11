<!-- Begin nav -->
<nav>
<ul id="head-nav">
	<li class="first current"><a href="<?php echo base_url(); ?>"><img style="width: 25px; vertical-align: middle;" src="<?php echo base_url();?>system/site/themes/site/img/home_icon.png"/></a></li>
	<li><?php echo anchor(site_url('pages'), 'Business Listings');?></li>
	<li><?php echo anchor(site_url('pages'), 'Music & Art');?></li>
	<li><?php echo anchor(site_url('pages'), 'Classifieds');?></li>
	<li><?php echo anchor(site_url('pages'), 'Online Store');?></li>
	<li><?php echo anchor(site_url('pages'), 'Payment');?></li>
	<li><?php echo anchor(site_url('contact'), 'Contact');?></li>
	<?php echo Modules::run('listings/searchlistings/searchbar'); ?>
</ul>
</nav>
<!-- End nav -->
<!-- Sub Menu
<nav>
<ul id="head-nav">
	<li>sub menu will come here</li>
</ul>
</nav>
 -->