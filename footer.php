	</div>
	<!-- Main Row -->
	
	<!-- Footer -->
	<footer class="row">
	
		<div class="twelve columns"></div>
	
			<div class="row">
			
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
					<h4>Hey! You!</h4>
					<p>You should like, so test out this dynamic footer sidebar. Check it out in Appearance > Widgets!</p>
					<?php endif; ?>
				
			</div>
	
	</footer>
	<!-- Footer -->

	</div>
	<!-- container -->

	<!-- Included JS Files -->	
	<script src="<?php bloginfo('template_url'); ?>/javascripts/foundation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/orbit-1.3.0.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/app.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.fitvids.js"></script>
	<script>
		$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
	    $(".container").fitVids();
	});
	</script>
	<?php wp_footer(); ?>
	
</body>
</html>