<?php

class JPIBFI_Advanced_Settings extends JPIBFI_Settings_Base {

	function __construct() {
		parent::__construct( 'advanced', new JPIBFI_Advanced_Options() );
	}

	function get_settings_i18n() {
		$parent                      = parent::get_settings_i18n();
		$i18n                        = array();
		$i18n['title']               = __( 'Advanced settings', 'jquery-pin-it-button-for-images' );
		$i18n['filters_label']       = __( 'Filters', 'jquery-pin-it-button-for-images' );
		$i18n['filters_description'] =
			sprintf(
				__( 'You can enabled or disable if the plugin should use a certain filter and change the priority setting. Read more about filters <a href="%s" target="_blank">here</a>. By default all 3 filters are active with the priority of 10.', 'jquery-pin-it-button-for-images' ),
				'https://codex.wordpress.org/Plugin_API'
			);
		$i18n['filter_template']     = __( '%name% <label>with priority of</label> %priority%', 'jquery-pin-it-button-for-images' );

		return array_merge( $parent, $i18n );
	}

	function get_module_settings() {
		return array(
			'slug' => 'advanced',
			'name' => __( 'Advanced', 'jquery-pin-it-button-for-images' ),
		);
	}

	function get_settings_configuration() {

		$option_value = $this->options->get();
		$res          = array();

		$res['filter_the_content_on'] = array(
			'key'  => 'filter_the_content_on',
			'text' => 'the_content',
			'type' => 'boolean'
		);

		$res['filter_the_content_priority'] = array(
			'key'         => 'filter_the_content_priority',
			'type'        => 'int',
			'error_label' => __( 'the_content priority', 'jquery-pin-it-button-for-images' )
		);

		$res['filter_the_excerpt_on'] = array(
			'key'  => 'filter_the_excerpt_on',
			'text' => 'the_excerpt',
			'type' => 'boolean'
		);

		$res['filter_the_excerpt_priority'] = array(
			'key'         => 'filter_the_excerpt_priority',
			'type'        => 'int',
			'error_label' => __( 'the_excerpt priority', 'jquery-pin-it-button-for-images' )
		);

		$res['filter_post_thumbnail_html_on'] = array(
			'key'  => 'filter_post_thumbnail_html_on',
			'text' => 'post_thumbnail_html',
			'type' => 'boolean'
		);

		$res['filter_post_thumbnail_html_priority'] = array(
			'key'         => 'filter_post_thumbnail_html_priority',
			'type'        => 'int',
			'error_label' => __( 'post_thumbnail_html priority', 'jquery-pin-it-button-for-images' )
		);

		$res['scroll_selector'] = array(
			'key'   => 'scroll_selector',
			'type'  => 'string',
			'label' => __( 'Scroll selector', 'jquery-pin-it-button-for-images' ),
			'desc'  => __( 'Additional scroll selector for "Always" and "Always on touch devices" Show Button settings.', 'jquery-pin-it-button-for-images' )
		);

		foreach ( $res as $key => $setting ) {
			$res[ $key ]['value'] = $option_value[ $key ];
		}

		return $res;
	}
}