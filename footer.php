			<!-- footer -->
			<footer class="footer" role="contentinfo">
			<div class="wrap">
				<div class="span-columns-6">
				            <div class="search-wrapper">
                <?php include("searchform.php"); ?>
            </div>
					<div class="two-column-never-1">
					<?php mobile_nav(); ?>
					<?php service_nav(); ?>
					</div>

				</div>
				<div class="span-columns-6">
					<div class="span-columns-6 fix">
						<p class="gefoerdert">Gefördert durch die Europäische Union, Europäischer Fonds für regionale Entwicklung (EFRE),den Bund und das Land Schleswig-Holstein</p>
						<img class="sponsor-logo" src="<?php $url = content_url(); echo $url; ?>/uploads/2015/01/zukunftsprogramm.png" alt="">
					</div>
					<div class="span-columns-6 fix">
						<p class="gefoerdert">Gefördert durch die:</p>
						<img class="sponsor-logo" src="<?php $url = content_url(); echo $url; ?>/uploads/2015/01/possehl.png" alt="">
					</div>
				</div>
			</div>
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-round.svg"  class="footer-logo" alt="Logo" >
        </a>
							<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->
 </div>  <!-- end content wrapper -->


		<?php wp_footer(); ?>


		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>