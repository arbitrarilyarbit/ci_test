<!-- Begin footer -->
<div id="footerWrapper">
<footer>
	<div id="poweredby"><a href="http://y3kimaginations.com/"><img src="<?php echo base_url();?>system/site/themes/site/img/y3klogo.png" alt="Powered By Y3K Imaginations"/> Powered By Y3K Imaginations</a></div>
	<ul id="foot-nav">
		<!-- TODO: Ashley Nav footer will come here -->
		<li><a class="last" href="#top" title="back to top">Back to Top &uarr;</a></li>
		<li>&copy; 2012 YPM. All Rights Reserved</li>
	</ul>
</footer>
</div>
<!-- End footer -->

<!-- Begin scripts -->
<!-- Load JS files here -->
<script src="<?php echo base_url(); ?>system/site/themes/site/js/jquery/jquery.lazyload.min.js"></script>

<script>
$(function() {
	//Sidebar Standard Adv images lazy loading
	$("img.ads").show().lazyload({
		threshold:200,
		effect:"fadeIn"
	});

	/* Begin: Login dropdown in header*/
    $(".signin").click(function(e) {
        e.preventDefault();
        $("fieldset#signin_menu").toggle();
        $(".signin").toggleClass("menu-open");
    });
    $("fieldset#signin_menu").mouseup(function() {
        return false
    });
    $(document).mouseup(function(e) {
        if($(e.target).parent("a.signin").length==0) {
            $(".signin").removeClass("menu-open");
            $("fieldset#signin_menu").hide();
        }
    });            
    /* End: Login dropdown in header*/

    /*Add here*/

});

</script>
<!-- End scripts -->

<!-- Cufon
{{ if theme:options:cufon_enabled == 'yes' and settings:theme_default:cufon_enabled }}
	<script type="text/javascript">Cufon.now();</script>
{{ endif }}
 -->