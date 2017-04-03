<?php

spl_autoload_register( function ( $class )
{
	$class = str_replace( 'Sentric\\Workforce\\', '', $class );

	if ( file_exists( __DIR__ . '/Workforce/' . $class . '.php' ) )
	{
		require_once( __DIR__ . '/Workforce/' . $class . '.php' );
	}
} );