<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'Cargo-columns-overlap',
				'label' => esc_html__( 'Overlap', 'Cargo' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'Cargo-border',
				'label' => esc_html__( 'Borders', 'Cargo' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'Cargo-border',
				'label' => esc_html__( 'Borders', 'Cargo' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'Cargo-border',
				'label' => esc_html__( 'Borders', 'Cargo' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'Cargo-image-frame',
				'label' => esc_html__( 'Frame', 'Cargo' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'Cargo-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'Cargo' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'Cargo-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'Cargo' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'Cargo-border',
				'label' => esc_html__( 'Borders', 'Cargo' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'Cargo-separator-thick',
				'label' => esc_html__( 'Thick', 'Cargo' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'Cargo-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'Cargo' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
