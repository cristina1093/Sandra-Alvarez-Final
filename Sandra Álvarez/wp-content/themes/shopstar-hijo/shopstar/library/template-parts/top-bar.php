
<div class="top-bar">
	<div class="container">
        
		<div class="padder">
            
			<div class="left">
            
				<?php get_template_part( 'library/template-parts/social-links' ); ?>
                
            </div>
            
            <div class="right">
				
                <?php
                if ( shopstar_is_woocommerce_activated() && get_theme_mod( 'shopstar-header-shop-links', customizer_library_get_default( 'shopstar-header-shop-links' ) ) ) {
				?>
                
                	<div class="account-link">
		            <?php if ( is_user_logged_in() ) { ?>
		            	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php esc_attr_e('Mi Cuenta','shopstar'); ?>"><?php esc_attr_e('Mi Cuenta','shopstar'); ?></a>
		            <?php } else { ?>
		            	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php esc_attr_e('Login','shopstar'); ?>"><?php esc_attr_e('Iniciar Sesión | Regístrate','shopstar'); ?></a>
		            <?php } ?>
		            </div>
		            
                    <div class="header-cart">
                        <a class="header-cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e('Ver cesta', 'shopstar'); ?>">
                            <span class="header-cart-amount">
                                <?php echo sprintf( _n('%d Artículo', '%d Artículos', WC()->cart->get_cart_contents_count(), 'shopstar'), WC()->cart->get_cart_contents_count() );?> - <?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?>
                            </span>
                            <span class="header-cart-checkout <?php echo ( WC()->cart->get_cart_contents_count() > 0 ) ? sanitize_html_class( 'cart-has-items' ) : ''; ?>">
                                <span><?php esc_attr_e('Cesta', 'shopstar'); ?></span> <i class="otb-fa otb-fa-shopping-cart"></i>
                            </span>
                        </a>
                    </div>
                    
                <?php
                } else {
                ?>
                	<div class="info-text"><?php echo wp_kses_post( pll__( get_theme_mod( 'shopstar-header-info-text', customizer_library_get_default( 'shopstar-header-info-text' ) ) ) ) ?></div>
                <?php 
                }
                ?>
            </div>
            
            <div class="clearboth"></div>
            
		</div>
            
	</div>
</div>
