<?php
namespace App;
class Pr {
	static public function _( $value ) {
		info( json_encode( $value ) );
		return $value;
	}
}
