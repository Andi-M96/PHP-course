<?php
$min = 1; 
$max = 50;
$guess = 33; //Change this value to test!
$num = 33; // Change this value to test!

// If you really want to go nuts, try this:
//$num = rand($min, $max);

if ( $guess < $min || $guess > $max ) {
    echo '<p>Guess not in range.</p>';
    exit();
}

if ( $num == $guess ) {
    echo '<p>Guess is correct!</p>';
} else if ( $num > $guess ) {
    echo '<p>Guess is too low.</p>';
} else {
    echo '<p>Guess is too high.</p>';
}


print_r( $num );