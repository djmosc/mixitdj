<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package mixitdj
 * @since mixitdj 1.0
 */
?>
	</div><!-- #main .site-main -->
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="top">
			<div class="inner container">
				<div class="contact-info clearfix">
					<div class="span five">
						<p><span class="uppercase">London</span><br /><a href="mailto:info@mixitdj.co.uk">info@mixitdj.co.uk</a><br />+ 074 4756 6126</p>
					</div>
					<div class="span five">
						<p><span class="uppercase">New Zealand</span><br /><a href="mailto:info@mixitdj.co.uk">info@mixitdj.co.uk</a><br />+ 64 21 0245 0147</p>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="container inner">
				<div class="break-on-tablet span three alpha">
					<ul class="social-links">
						<li>
							<a class="facebook-btn" href="<?php echo get_field('facebook_url', 'options');?>" target="_blank"></a>
						</li>
						<li>
							<a class="twitter-btn" href="<?php echo get_field('twitter_url', 'options');?>" target="_blank"></a>
						</li>
					</ul>
				</div>
				<div class="break-on-tablet span seven alpha omega">
					<p class="small text-right">
						<?php echo '&copy; '. date('Y').' '; _e("Mix it DJ | All Rights Reserved | Site by", THEME_NAME);?>
						<a href="http://www.mindblownmedia.com" target="_blank">Mind Blown Media</a>
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #footer .site-footer -->
</div><!-- #wrap -->

<?php wp_footer(); ?>

<script>
  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  // ga('create', 'UA-9989995-2', 'charlie-may.co.uk');
  // ga('send', 'pageview');

</script>
<script src="//s7.addthis.com/js/300/addthis_widget.js"></script>

</body>
</html>