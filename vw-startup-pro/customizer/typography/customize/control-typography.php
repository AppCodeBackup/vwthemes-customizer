<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class VW_Startup_Pro_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'vw-startup-pro' ),
				'family'      => esc_html__( 'Font Family', 'vw-startup-pro' ),
				'size'        => esc_html__( 'Font Size',   'vw-startup-pro' ),
				'weight'      => esc_html__( 'Font Weight', 'vw-startup-pro' ),
				'style'       => esc_html__( 'Font Style',  'vw-startup-pro' ),
				'line_height' => esc_html__( 'Line Height', 'vw-startup-pro' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'vw-startup-pro' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'vw-startup-pro-ctypo-customize-controls' );
		wp_enqueue_style(  'vw-startup-pro-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'vw-startup-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-startup-pro' ),
        'Acme' => __( 'Acme', 'vw-startup-pro' ),
        'Anton' => __( 'Anton', 'vw-startup-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-startup-pro' ),
        'Arimo' => __( 'Arimo', 'vw-startup-pro' ),
        'Arsenal' => __( 'Arsenal', 'vw-startup-pro' ),
        'Arvo' => __( 'Arvo', 'vw-startup-pro' ),
        'Alegreya' => __( 'Alegreya', 'vw-startup-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-startup-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-startup-pro' ),
        'Bangers' => __( 'Bangers', 'vw-startup-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-startup-pro' ),
        'Bad Script' => __( 'Bad Script', 'vw-startup-pro' ),
        'Bitter' => __( 'Bitter', 'vw-startup-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-startup-pro' ),
        'BenchNine' => __( 'BenchNine', 'vw-startup-pro' ),
        'Cabin' => __( 'Cabin', 'vw-startup-pro' ),
        'Cardo' => __( 'Cardo', 'vw-startup-pro' ),
        'Courgette' => __( 'Courgette', 'vw-startup-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-startup-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-startup-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-startup-pro' ),
        'Cuprum' => __( 'Cuprum', 'vw-startup-pro' ),
        'Cookie' => __( 'Cookie', 'vw-startup-pro' ),
        'Chewy' => __( 'Chewy', 'vw-startup-pro' ),
        'Days One' => __( 'Days One', 'vw-startup-pro' ),
        'Dosis' => __( 'Dosis', 'vw-startup-pro' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-startup-pro' ),
        'Economica' => __( 'Economica', 'vw-startup-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-startup-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-startup-pro' ),
        'Francois One' => __( 'Francois One', 'vw-startup-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-startup-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-startup-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-startup-pro' ),
        'Handlee' => __( 'Handlee', 'vw-startup-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-startup-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-startup-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-startup-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-startup-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-startup-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-startup-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-startup-pro' ),
        'Kanit' => __( 'Kanit', 'vw-startup-pro' ),
        'Lobster' => __( 'Lobster', 'vw-startup-pro' ),
        'Lato' => __( 'Lato', 'vw-startup-pro' ),
        'Lora' => __( 'Lora', 'vw-startup-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-startup-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-startup-pro' ),
        'Merriweather' => __( 'Merriweather', 'vw-startup-pro' ),
        'Monda' => __( 'Monda', 'vw-startup-pro' ),
        'Montserrat' => __( 'Montserrat', 'vw-startup-pro' ),
        'Muli' => __( 'Muli', 'vw-startup-pro' ),
        'Marck Script' => __( 'Marck Script', 'vw-startup-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-startup-pro' ),
        'Open Sans' => __( 'Open Sans', 'vw-startup-pro' ),
        'Overpass' => __( 'Overpass', 'vw-startup-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-startup-pro' ),
        'Oxygen' => __( 'Oxygen', 'vw-startup-pro' ),
        'Orbitron' => __( 'Orbitron', 'vw-startup-pro' ),
        'Patua One' => __( 'Patua One', 'vw-startup-pro' ),
        'Pacifico' => __( 'Pacifico', 'vw-startup-pro' ),
        'Padauk' => __( 'Padauk', 'vw-startup-pro' ),
        'Playball' => __( 'Playball', 'vw-startup-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-startup-pro' ),
        'PT Sans' => __( 'PT Sans', 'vw-startup-pro' ),
        'Philosopher' => __( 'Philosopher', 'vw-startup-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-startup-pro' ),
        'Poiret One' => __( 'Poiret One', 'vw-startup-pro' ),
        'Quicksand' => __( 'Quicksand', 'vw-startup-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-startup-pro' ),
        'Raleway' => __( 'Raleway', 'vw-startup-pro' ),
        'Rubik' => __( 'Rubik', 'vw-startup-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-startup-pro' ),
        'Russo One' => __( 'Russo One', 'vw-startup-pro' ),
        'Righteous' => __( 'Righteous', 'vw-startup-pro' ),
        'Slabo' => __( 'Slabo', 'vw-startup-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-startup-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-startup-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-startup-pro' ),
        'Sacramento' => __( 'Sacramento', 'vw-startup-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-startup-pro' ),
        'Tangerine' => __( 'Tangerine', 'vw-startup-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-startup-pro' ),
        'VT323' => __( 'VT323', 'vw-startup-pro' ),
        'Varela Round' => __( 'Varela Round', 'vw-startup-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-startup-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-startup-pro' ),
        'Volkhov' => __( 'Volkhov', 'vw-startup-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-startup-pro' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'100' => esc_html__( 'Thin',       'vw-startup-pro' ),
			'300' => esc_html__( 'Light',      'vw-startup-pro' ),
			'400' => esc_html__( 'Normal',     'vw-startup-pro' ),
			'500' => esc_html__( 'Medium',     'vw-startup-pro' ),
			'700' => esc_html__( 'Bold',       'vw-startup-pro' ),
			'900' => esc_html__( 'Ultra Bold', 'vw-startup-pro' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'normal'  => esc_html__( 'Normal', 'vw-startup-pro' ),
			'italic'  => esc_html__( 'Italic', 'vw-startup-pro' ),
			'oblique' => esc_html__( 'Oblique', 'vw-startup-pro' )
		);
	}
}
