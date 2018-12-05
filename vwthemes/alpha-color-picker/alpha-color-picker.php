<?php
/**
 * Alpha Color Picker.
 * @package VW Themes
 */
if ( ! class_exists( 'WP_Customize_Control' ) ){
	return;
}

/**
	 * Alpha Color Picker Custom Control
	 */
class VW_Themes_Customize_Alpha_Color_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'alpha-color';
	/**
	 * Add support for palettes to be passed in.
	 *
	 * Supported palette values are true, false, or an array of RGBa and Hex colors.
	 */
	public $palette;
	/**
	 * Add support for showing the opacity value on the slider handle.
	 */
	public $show_opacity;
	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {
		wp_enqueue_script( 'vwthemes-alpha-color-picker-script', VWTHEMES_CUSTOMIZER_PLUGIN_URL . 'vwthemes/alpha-color-picker/js/alpha-color-picker.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_style( 'vwthemes-alpha-color-picker-style', VWTHEMES_CUSTOMIZER_PLUGIN_URL. 'vwthemes/alpha-color-picker/css/alpha-color-picker.css', null, '1.0.0' );
	}
	/**
	 * Render the control in the customizer
	 */
	public function render_content() {

		// Process the palette
		if ( is_array( $this->palette ) ) {
			$palette = implode( '|', $this->palette );
		} else {
			// Default to true.
			$palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
		}

		// Support passing show_opacity as string or boolean. Default to true.
		$show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';

		?>
			<label>
				<?php // Output the label and description if they were passed in.
				if ( isset( $this->label ) && '' !== $this->label ) {
					echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
				}
				if ( isset( $this->description ) && '' !== $this->description ) {
					echo '<span class="description customize-control-description">' . esc_html( $this->description ) . '</span>';
				} ?>
			</label>
			<input class="alpha-color-control" type="text" data-show-opacity="<?php echo esc_attr($show_opacity); ?>" data-palette="<?php echo esc_attr( $palette ); ?>" data-default-color="<?php echo esc_attr( $this->settings['default']->default ); ?>" <?php $this->link(); ?>  />
		<?php
	}
}