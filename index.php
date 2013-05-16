<?php
/**
* Prime number generator contest
* Version 3
*
* Generate as many prime numbers within one minute of execution time.
* 
* Definition:
* Prime numbers are the numbers that are bigger than one and cannot be divided
* evenly by any other number except 1 and itself.
*
* Conditions:
* (1): If a number can be divided evenly by any number except 1 and itself, it is not prime.
* (2): Prime numbers are whole numbers greater than 1.
* (3): 0 and 1 are not prime numbers.
* (4): 2 is a prime number.
*/

// Set our execution time limit to one minute
set_time_limit(60);

// Create an array to store our prime numbers
$prime_numbers = array();

// Let's loop through some numbers to generate prime numbers on the fly.
// This will loop forever until the script times out.
for($counter = 2; $counter > 0; $counter++)
{
	// We'll create a variable to store the square root of our number
	$square_root = sqrt($counter);

	// We'll set this to FALSE below if our test fails
	$prime = TRUE;

	// Here is where we loop through our previously generated prime numbers
	foreach($prime_numbers as $divisor)
	{
		if($counter % $divisor == 0)
		{
			// Uh oh! Looks like this is not a prime number
			$prime = FALSE;
			break;
		}

		// Break the foreach loop if our prime number is larger than the
		// number's square root
		if($divisor > $square_root)
		{
			break;
		}
	}

	if($prime)
	{
		// Hooray! It's a prime number. Let's add it to our prime numbers
		// array and spit the number out
		$prime_numbers[] = $counter;
		echo $counter."\n";
		flush();
        ob_flush();
	}
}