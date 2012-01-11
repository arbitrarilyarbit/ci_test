<!-- Begin header -->
<header>
	<!-- Begin logo -->
	<div id="logo">
		<h1><?php echo anchor(site_url(), 'YPM', 'title="Home"');?></h1>
		<h2 class="slogan">Your Directory Listings</h2>
	</div>
	<!-- End logo -->

	<!-- Begin user meta -->
	<div id="header-right">
		<div id="user-meta">
			<form action="<?php echo site_url('users/login');?>" method="post" accept-charset="utf-8" id="login-small">
				<input type="hidden" name="redirect_to" value="<?php echo current_url();?>" />
				<ul>
					<li class="email">
						<input type="text" id="email" name="email" maxlength="120" placeholder="Email" />
					</li>
					<li class="pword">
						<input type="password" id="password" name="password" maxlength="20" placeholder="Password" />
					</li>
					<li class="form-buttons">
						<input type="submit" value="Login" name="btnLogin" /> | &nbsp;<?php echo anchor(site_url('register'), 'Register');?>
						<label><input type="checkbox" id="remember-checksidebar" name="remember" value="1"  /> Remember</label>
					</li>
				</ul>
			</form>
		</div>
		<div id="header-actions">
			<ul>
				<li class="header-link">
					<?php echo anchor(site_url('add-listing'), 'Add Your Business');?>
				</li>
				<li class="header-link">
					<?php echo anchor(site_url('advertise'), 'Advertise With Us');?>
				</li>
				<li class="header-link">
					<?php echo anchor(site_url('post-event'), 'Post An Event');?>
				</li>
			</ul>		
		</div>
	</div>
	<!-- End user meta -->
</header>
<!-- End header -->