<?php

/**
 * Entry point of the DataValues Common library.
 *
 * @since 0.1
 * @codeCoverageIgnore
 *
 * @license GPL-2.0+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

if ( defined( 'DATAVALUES_COMMON_VERSION' ) ) {
	// Do not initialize more than once.
	return 1;
}

define( 'DATAVALUES_COMMON_VERSION', '0.3.1' );

if ( defined( 'MEDIAWIKI' ) && function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'DataValuesCommon', __DIR__ . '/mediawiki-extension.json' );
}
