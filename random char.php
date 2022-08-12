
<?php
// i create the array 
$charset = range(",","|");

// I show the original array
print_r($charset);

// i put in a variable a random number from the set given
$random= array_rand($charset,1);
$deleted_character = $charset[$random];
// using the unset function, i delete the chosen number previously stored in the variable
unset($charset[$random]);

echo "After delete the element <br>";

// Display Results
print_r($charset);
//here show the number that has been deleted

echo "<br>";
echo "The deleted char is " . $deleted_character . ". It's index in the array was " . $random;

?>
}