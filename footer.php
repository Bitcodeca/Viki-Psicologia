<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package activello
 */
?>
				</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			</div>
			</div><!-- close .row -->
		</div><!-- close .container -->
	</div><!-- close .site-content -->


	<div class="container">
	<div id="footer-area">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php if( !get_theme_mod('footer_social') ) activello_social_icons(); ?>
					<div class="col-md-12">
                        <p class="copyright text-center small">&copy; 2016 Siso's Travel C.A. | RIF: J-40408271-9 |  Desarrollado por <a href="http://bitcodeweb.com/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/logomini.png"></a></p>
                    </div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>