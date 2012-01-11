<!-- Begin nav -->
<nav>
<ul id="head-nav">
	<li class="first current"><?php echo anchor(site_url('pages'), 'Home');?></li>
	<li><?php echo anchor(site_url('pages'), 'Business Listings');?></li>
	<li><?php echo anchor(site_url('pages'), 'Music & Art');?></li>
	<li><?php echo anchor(site_url('pages'), 'Classifieds');?></li>
	<li><?php echo anchor(site_url('pages'), 'Online Store');?></li>
	<li><?php echo anchor(site_url('pages'), 'Payment');?></li>
	<li><?php echo anchor(site_url('contact'), 'Contact');?></li>
	<!-- TODO: Ashley Have to make a search module and remove this -->
	<li id="menu-search"><input type="text" id="search" name="search" maxlength="120" placeholder="Search Business Listing" /><img style="width: 25px; vertical-align: middle;" src="<?php echo base_url();?>system/site/themes/site/img/bullet.png"/></li>
</ul>
</nav>
<!-- End nav -->
<nav>
<ul id="head-nav">
	<li>sub menu will come here</li>
</ul>
</nav>
