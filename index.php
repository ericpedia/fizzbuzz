<?php 

/**
 * Make numbers fizz and buzz
 *
 * @author  Eric
 * 
 * @link http://en.wikipedia.org/wiki/Fizz_buzz
 * @link http://lmgtfy.com/?q=fizz+buzz
 *       
 * @todo Make good impression
 * 
 * @param  integer $min     The number at which to start
 * @param  integer $max     The number at which to stop
 * @param  array   $options Exciting options hitherto unknown!
 * 
 * @return Nothing to see here.
 * 
 */
function fizzbuzz( $options = array() ) {

	$defaults = array(
		'min' => 1,
		'max' => 100,
		'fizznumber' => 3,
		'buzznumber' => 5,
		'fizz' => 'Fizz',
		'buzz' => 'Buzz',
		'delimiter' => ', '
	);

	$options = array_merge( $defaults, (array) $options );

	extract( $options );

	$results = array();
	$count = $min;

	while ( $count <= $max ) {

		$output = "";

		if ( ($count % $fizznumber) === 0 ) 
			$output .= $fizz;

		if ( ($count % $buzznumber) === 0 ) 
			$output .= $buzz;

		$results[] = $output ? $output : $count;

		$count++;
		
	}

	$results = implode( $delimiter, $results );

	return $results;

}

echo fizzbuzz();