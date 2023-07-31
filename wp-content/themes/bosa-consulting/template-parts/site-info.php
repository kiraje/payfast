<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Consulting
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-consulting' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa Consulting. Powered by', 'bosa-consulting' ) );
	?>
	<a href="<?php echo esc_url( __( '//bosathemes.com', 'bosa-consulting' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'Bosa Themes', 'bosa-consulting' ) );
		?>
	</a>
</div><!-- .site-info -->