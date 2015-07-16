<?php

define( 'ACTUAL_PATH', dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'snippets' );
require_once ACTUAL_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'settings.php';

session_start();

echo $_SESSION[ 'email' ];

if ( array_key_exists( 'id', $_SESSION ) && !empty( $_SESSION[ 'id' ] ) )
{
    header( 'Location: ' . SITE_URL );
}
else
{
    $_SESSION[ 'id' ] = $_SESSION[ 'email' ];

    $file   = 'gracias.tpl';
    $codes  = array(
                  'mty' => '4677CPKHEKP1CDE',
                  'cui' => '419A2PNHOEO124A',
                  'sfe' => 'DC219PNHZQO1A2D'
            );
    $tpl    = ParserTemplate::parseTemplate( $file, $codes );
    echo $tpl;

}
session_write_close();