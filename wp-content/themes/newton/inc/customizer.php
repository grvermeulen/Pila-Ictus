<?php
/**
 * Newton Theme Customizer
 *
 * @package Newton
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function newton_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         				= 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  				= 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport 				= 'postMessage';

	/* Sidebar background color. */
	$wp_customize->add_setting('newton_sidebar_background_color', array(
		'default'			=> '#2e456d',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_sidebar_background_color', array(
		'label'				=> __('Sidebar Background Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 10,
		'settings'			=> 'newton_sidebar_background_color',
	)));

	/* Widget background color. */
	$wp_customize->add_setting('newton_widget_background_color', array(
		'default'			=> '#253757',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_widget_background_color', array(
		'label'				=> __('Widget Background Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 15,
		'settings'			=> 'newton_widget_background_color',
	)));

	/* Menu background color. */
	$wp_customize->add_setting('newton_menu_background_color', array(
		'default'			=> '#1c2a43',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_menu_background_color', array(
		'label'				=> __('Menu Background Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 20,
		'settings'			=> 'newton_menu_background_color',
	)));

	/* Sidebar text color. */
	$wp_customize->add_setting('newton_sidebar_text_color', array(
		'default'			=> '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_sidebar_text_color', array(
		'label'				=> __('Sidebar Text Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 25,
		'settings'			=> 'newton_sidebar_text_color',
	)));

	/* Sidebar link color. */
	$wp_customize->add_setting('newton_sidebar_link_color', array(
		'default'			=> '#b2cce5',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_sidebar_link_color', array(
		'label'				=> __('Sidebar Link Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 30,
		'settings'			=> 'newton_sidebar_link_color',
	)));

	/* Sidebar link hover color. */
	$wp_customize->add_setting('newton_sidebar_link_hover_color', array(
		'default'			=> '#e4f1fe',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_sidebar_link_hover_color', array(
		'label'				=> __('Sidebar Link Hover Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 35,
		'settings'			=> 'newton_sidebar_link_hover_color',
	)));

	/* Content background color. */
	$wp_customize->add_setting('newton_content_background_color', array(
		'default'			=> '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_content_background_color', array(
		'label'				=> __('Content Background Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 40,
		'settings'			=> 'newton_content_background_color',
	)));

	/* Content text color. */
	$wp_customize->add_setting('newton_content_text_color', array(
		'default'			=> '#202020',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_content_text_color', array(
		'label'				=> __('Content Text Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 45,
		'settings'			=> 'newton_content_text_color',
	)));

	/* Content link color. */
	$wp_customize->add_setting('newton_content_link_color', array(
		'default'			=> '#2a7ab0',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_content_link_color', array(
		'label'				=> __('Content Link Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 50,
		'settings'			=> 'newton_content_link_color',
	)));

	/* Content link hover color. */
	$wp_customize->add_setting('newton_content_link_hover_color', array(
		'default'			=> '#2e456d',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_content_link_hover_color', array(
		'label'				=> __('Content Link Hover Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 55,
		'settings'			=> 'newton_content_link_hover_color',
	)));

	/* Quote background color. */
	$wp_customize->add_setting('newton_quote_background_color', array(
		'default'			=> '#253757',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_quote_background_color', array(
		'label'				=> __('Quote Background Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 60,
		'settings'			=> 'newton_quote_background_color',
	)));

	/* Quote text color. */
	$wp_customize->add_setting('newton_quote_text_color', array(
		'default'			=> '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_quote_text_color', array(
		'label'				=> __('Quote Text Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 65,
		'settings'			=> 'newton_quote_text_color',
	)));

	/* Quote link color. */
	$wp_customize->add_setting('newton_quote_link_color', array(
		'default'			=> '#b2cce5',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_quote_link_color', array(
		'label'				=> __('Quote Link Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 70,
		'settings'			=> 'newton_quote_link_color',
	)));

	/* Quote link hover color. */
	$wp_customize->add_setting('newton_quote_link_hover_color', array(
		'default'			=> '#e4f1fe',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newton_quote_link_hover_color', array(
		'label'				=> __('Quote Link Hover Color', 'newton'),
		'section'			=> 'colors',
		'priority'			=> 75,
		'settings'			=> 'newton_quote_link_hover_color',
	)));

}
add_action( 'customize_register', 'newton_customize_register' );

/**
 * Add inline styles for the custom colors.
 *
 * @see wp_add_inline_style()
 */
function newton_custom_colors() {
	$css 					= '';
	$sidebar_background		= get_theme_mod( 'newton_sidebar_background_color', '#2e456d' );
	$widget_background 		= get_theme_mod( 'newton_widget_background_color', '#253757' );
	$menu_background 		= get_theme_mod( 'newton_menu_background_color', '#1c2a43' );
	$sidebar_text 			= get_theme_mod( 'newton_sidebar_text_color', '#ffffff' );
	$sidebar_link 			= get_theme_mod( 'newton_sidebar_link_color', '#b2cce5' );
	$sidebar_link_hover		= get_theme_mod( 'newton_sidebar_link_hover_color', '#e4f1fe' );
	$content_background		= get_theme_mod( 'newton_content_background_color', '#ffffff' );
	$content_text			= get_theme_mod( 'newton_content_text_color', '#202020' );
	$content_link 			= get_theme_mod( 'newton_content_link_color', '#2a7ab0' );
	$content_link_hover		= get_theme_mod( 'newton_content_link_hover_color', '#2e456d' );
	$quote_background		= get_theme_mod( 'newton_quote_background_color', '#253757' );
	$quote_text				= get_theme_mod( 'newton_quote_text_color', '#ffffff' );
	$quote_link 			= get_theme_mod( 'newton_quote_link_color', '#b2cce5' );
	$quote_link_hover		= get_theme_mod( 'newton_quote_link_hover_color', '#e4f1fe' );

	if ( ! empty( $sidebar_background ) && '#2e456d' !== $sidebar_background ) {
		$css .= '
			#masthead, #colophon { background-color: ' . $sidebar_background . '; }
			button, input[type="button"], input[type="reset"], input[type="submit"] { background-color: ' . $sidebar_background . '; }
			.dropdown-toggle:hover, .dropdown-toggle:focus { background-color: ' . $sidebar_background . '; }
			li.menu-item:not(:first-child), ul.sub-menu li.menu-item { border-top-color: ' . $sidebar_background . '; }
			.widget tbody tr:nth-child(2), .widget tbody tr:nth-child(4), .widget tbody tr:nth-child(6), .widget tbody tr:nth-child(8),
			.widget tbody tr:nth-child(10), .widget tbody tr:nth-child(12), .widget tbody tr:nth-child(14), .widget tbody tr:nth-child(16),
			.widget tbody tr:nth-child(18), .widget tbody tr:nth-child(20), .widget tbody tr:nth-child(22), .widget tbody tr:nth-child(24),
			.widget tbody tr:nth-child(26), .widget tbody tr:nth-child(28), .widget tbody tr:nth-child(30), .widget tbody tr:nth-child(32),
			.widget tbody tr:nth-child(34), .widget tbody tr:nth-child(36), .widget tbody tr:nth-child(38), .widget tbody tr:nth-child(40),
			.widget tbody tr:nth-child(42), .widget tbody tr:nth-child(44), .widget tbody tr:nth-child(46), .widget tbody tr:nth-child(48),
			.widget tbody tr:nth-child(50) { background-color: ' . $sidebar_background . '; }
			.pagination .nav-links .page-numbers { background-color: ' . $sidebar_background . '; }
		';
	}

	if ( ! empty( $widget_background ) && '#253757' !== $widget_background ) {
		$css .= '
			.widget { background-color: ' . $widget_background . '; }
			.site-logo { border-color: ' . $widget_background . '; }
		';
	}

	if ( ! empty( $menu_background ) && '#1c2a43' !== $menu_background ) {
		$css .= '
			#site-navigation, .widget thead tr, .widget tfoot tr { background-color: ' . $menu_background . '; }
			table, .site-logo:hover, #main article.post, .search .type-page, .post-navigation,
			.author-info, .comment-list, .comment-navigation, .page-header { border-color: ' . $menu_background . '; }
			button:hover, button:active, button:focus, input[type="button"]:hover,
			input[type="button"]:active, input[type="button"]:focus, input[type="reset"]:hover,
			input[type="reset"]:active, input[type="reset"]:focus, input[type="submit"]:hover,
			input[type="submit"]:active, input[type="submit"]:focus { background-color: ' . $menu_background . '; }
			.pagination .nav-links .current, .pagination .nav-links .page-numbers:hover { background-color: ' . $menu_background . '; }
		';
	}

	if ( ! empty( $sidebar_text ) && '#ffffff' !== $sidebar_text ) {
		$css .= '
			h1.site-title a, h2.site-description { color: ' . $sidebar_text . '; }
			.widget, .widget h1.widget-title, .dropdown-toggle:after, .genericon-search:before { color: ' . $sidebar_text . '; }
		';
	}

	if ( ! empty( $sidebar_link ) && '#b2cce5' !== $sidebar_link ) {
		$css .= '
			.widget-area a, .site-info a, .widget-area a:visited, .site-info a:visited  { color: ' . $sidebar_link . '; }
			.main-navigation a, .main-navigation a:visited,
			.pagination .nav-links .page-numbers { color: ' . $sidebar_link . '; }
		';
	}

	if ( ! empty( $sidebar_link_hover ) && '#e4f1fe' !== $sidebar_link_hover ) {
		$css .= '
			.widget-area a:hover, .site-info a:hover,
			.widget-area a:focus, .site-info a:focus,
			h1.site-title a:hover  { color: ' . $sidebar_link_hover . '; }
			.pagination .nav-links .current, .pagination .nav-links .page-numbers:hover { color: ' . $sidebar_link_hover . '; }
			.main-navigation a:hover, .main-navigation a:focus { color: ' . $sidebar_link_hover . '; }
			.widget.widget_recent_comments, .widget.widget_categories, .widget.widget_archive,
			.widget.widget_recent_entries, .widget.widget_rss, .widget.widget_meta, .widget.widget_pages,
			.widget.widget_links, .widget.widget_calendar, .widget.widget_search, .widget li::before { color: ' . $sidebar_link_hover . '; }
		';
	}

	if ( ! empty( $content_background ) && '#ffffff' !== $content_background ) {
		$css .= '
			#content { background-color: ' . $content_background . '; }
		';
	}

	if ( ! empty( $content_text ) && '#202020' !== $content_text ) {
		$css .= '
			body { color: ' . $content_text . '; }
		';
	}

	if ( ! empty( $content_link ) && '#2a7ab0' !== $content_link ) {
		$css .= '
			a, a:visited { color: ' . $content_link . '; }
		';
	}

	if ( ! empty( $content_link_hover ) && '#2e456d' !== $content_link_hover ) {
		$css .= '
			a:hover, a:focus, a:active { color: ' . $content_link_hover . '; }
		';
	}

	if ( ! empty( $quote_background ) && '#253757' !== $quote_background ) {
		$css .= '
			.format-quote { background-color: ' . $quote_background . '; }
		';
	}

	if ( ! empty( $quote_text ) && '#ffffff' !== $quote_text ) {
		$css .= '
			.format-quote { color: ' . $quote_text . '; }
		';
	}

	if ( ! empty( $quote_link ) && '#b2cce5' !== $quote_link ) {
		$css .= '
			.format-quote a, .format-quote a:visited { color: ' . $quote_link . '; }
		';
	}

	if ( ! empty( $quote_link_hover ) && '#e4f1fe' !== $quote_link_hover ) {
		$css .= '
			.format-quote a:focus, .format-quote a:hover { color: ' . $quote_link_hover . '; }
		';
	}

	wp_add_inline_style( 'newton-style', $css );
}
add_action( 'wp_enqueue_scripts', 'newton_custom_colors' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function newton_customize_preview_js() {
	wp_enqueue_script( 'newton_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'newton_customize_preview_js' );
