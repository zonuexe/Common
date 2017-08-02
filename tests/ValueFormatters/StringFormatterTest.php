<?php

namespace ValueFormatters\Test;

use DataValues\StringValue;
use ValueFormatters\FormatterOptions;
use ValueFormatters\StringFormatter;

/**
 * @covers ValueFormatters\StringFormatter
 *
 * @group ValueFormatters
 * @group DataValueExtensions
 *
 * @license GPL-2.0+
 * @author Katie Filbert < aude.wiki@gmail.com >
 */
class StringFormatterTest extends ValueFormatterTestBase {

	/**
	 * @see ValueFormatterTestBase::getInstance
	 *
	 * @param FormatterOptions|null $options
	 *
	 * @return StringFormatter
	 */
	protected function getInstance( FormatterOptions $options = null ) {
		return new StringFormatter( $options );
	}

	/**
	 * @see ValueFormatterTestBase::validProvider
	 */
	public function validProvider() {
		$strings = [
			'ice cream',
			'cake',
			'',
			' a ',
			'  ',
		];

		$argLists = [];

		foreach ( $strings as $string ) {
			$argLists[] = [ new StringValue( $string ), $string ];
		}

		return $argLists;
	}

}
