<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package shopstar
 */

?>

		</div>
	</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	
	<div class="widgets">
        <div class="container">
        	<div class="padder">
        	<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
				
	            <?php if ( is_active_sidebar( 'footer' ) ) : ?>
	            <ul>
	                <?php dynamic_sidebar( 'footer' ); ?>
	            </ul>
	    		<?php endif; ?>
	            
	            <div class="clearboth"></div>
			
			</div>
        </div>
    </div>
	
	<div class="bottom-bar">
	
		<div class="container">
			<div class="padder">
				<?php printf( __( '© Sandra Álvarez- Home&Textil 2019 ', 'shopstar' ), '<a href="'. esc_url( '' ) .'" rel="nofollow"></a>' ); ?>
			</div>
		</div>
		
        <div class="clearboth"></div>
	</div>
	
</footer><!-- #colophon -->

<?php wp_footer(); ?>
	
</body>
</html>