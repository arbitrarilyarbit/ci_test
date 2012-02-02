<!-- Begin header -->
<header>

	<div id="titlebar">
    	<div style="width:1000px; margin:0px auto;">
			<!-- Begin logo -->
			<div id="logo">
				<h1><?php echo anchor(site_url(), 'YPM', 'title="Home"');?></h1>
			</div>
			<!-- End logo -->

			<div id="user-meta" class="cartin" style="position: relative;">
				<img class="cart" src="<?php echo base_url();?>system/site/themes/site/img/location.png" width="19" height="31" />
				<div class="go-cart">
					<a href="#">Cart</a><br/>
					<span class="cart-view">New Here? <a href="#">View Cart</a></span>
				</div>
				<div class="clr"></div>
				
				<!-- Cart drop down -->
				<fieldset id="cart_menu">
					<form method="post" id="cart" action="">
						<p>
							<a id="cart_continue" href="#">Continue Shopping</a>
							<input id="cart_checkout" value="Checkout" type="submit">
						</p>
					</form>
				</fieldset>
				
			</div>
         
			<div id="user-meta" class="signin" style="position: relative;">
				<img class="avatar" src="<?php echo base_url();?>system/site/themes/site/img/location.png" width="19" height="31" />
				<div class="avatar-name">
					<a href="#">Sign In</a><br/>
					<span class="avatar-more">New Here? <a href="#">Register</a></span>
				</div>
				<div class="clr"></div>

				<!-- Sign in drop down -->
				<fieldset id="signin_menu">
					<form method="post" id="signin" action="">
						<p><label for="username">Username or email</label>
						<input id="username" name="username" value="" title="username" tabindex="4" type="text"></p>
						<p><label for="password">Password</label>
						<input id="password" name="password" value="" title="password" tabindex="5" type="password"></p>
						<p class="remember"><input id="signin_submit" value="Sign in" tabindex="6" type="submit">
						<input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
						<label for="remember">Remember me</label></p>
						<p class="forgot"><a href="#" id="resend_password_link">Forgot your password?</a></p>
						<p class="forgot-username"><a id=forgot_username_link title="If you remember your password, try logging in with your email" href="#">Forgot your username?</a></p>
					</form>
				</fieldset>

			</div>
			<div class="clr"></div>
		
		</div>
    </div>
    <div class="clr"></div>

	<div id="header-right">
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

</header>
<!-- End header -->