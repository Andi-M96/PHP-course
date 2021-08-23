<?php 
$name= "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";
?>

<h1> <?php echo "Hello " . $name; ?> </h1>
<p> <?php echo " Im going to " . $city . " to watch a movie.\n" ?> </p>
<p> <?php echo "I am going to watch <i>$movie</i> with my friend <b>$friend</b>" ?> </p>
<p> <?php echo "We will buy some $candy for $30, which is cheap for cinema prices." ?> </p>