<?php  // Associative arrays are arrays that use named keys that we assign to them

$age = array("NADEEM" => "23", "SpiderMan" => "24", "IronMan" => "43"); //this is a array where i am storing the values

foreach ($age as $name => $x_age) { //using forEach loop to print the values
    echo "Key=" . $name . ", Value=" . $x_age;
    echo "\n";
}
