<?php
/**
 * Content for sample post type in taxonomy archive
 *
 * @package    SPR_Core
 * @subpackage Views
 * @category   Front
 * @since      1.0.0
 */

printf(
	'<p>%s%s</p>',
	__( 'Content for taxonomy post #', 'spr-core' ),
	get_the_ID()
);
