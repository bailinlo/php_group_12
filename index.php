<?php
$someNumber = 123; //integer
$someFloat = 3.14; // float
$someText = 'foo bar
bar
baz' // string
$someText2 = "foo bar baz";
$someTrue = true; //bool
$someNothing = null;
$someNumber = 321;

$someCars = ['zaz', 'gaz', 'uza', 'vaz', 'maz', 'bmw']; // array
//$someCras = array(1, 2, 3); kadreiz rakstija sadi, bet tagad taa nedara.
echo $someCars[2]. '<br>';
echo $someCars[2]. '<br>';

$person = [
'name' => 'Johna',
'surname' => 'Doe',
'age' => 21,
];
echo $person['surname'];