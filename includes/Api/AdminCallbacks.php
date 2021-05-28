<?php
/**
 * @package DuiloFramework
 */

namespace Inc\Api;

use \Inc\Controller;

class AdminCallbacks extends Controller
{
    public function adminSection()
	{
		echo 'Check this beautiful section!';
	}

	public function checkboxField( $args )
	{
		$id = $args['label_for'];
		$value = get_option( $id );
		$class = $args['class'];

		echo '<input type="checkbox" name="' . $id . '" value="1" class="' . $class . '" ' . ( $value ? 'checked' : '' ) . ' />';
	}

	public function textField( $args )
	{
		$id = $args['label_for'];
		$value = get_option( $id );
		$class = $args['class'];
		$placeholder = ( isset( $args['placeholder'] ) ? 'placeholder="' . $args['placeholder'] . '"' : '' );

		echo '<input type="text" class="' . $class . '" name="' . $id . '" value="' . $value . '" ' . $placeholder . ' />';
	}
}