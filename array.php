<?php /*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food
(at least 4 array elements). Name the array food.
*/
$food = ["pizza", "pasta", "cakes", "poutine"];
/*
Print every array element in a new line.
*/
echo $food[0] . "<br>" .$food[0]. "<br>" . $food[0]. "<br>" .$food[0]. "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "
<ul>
  <li>$food[0]</li>
  <li>$food[1]</li>
  <li>$food[2]</li>
  <li>$food[3]</li>
</ul>
";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc.
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food = array(
 "fast" => "foodpizza",
 "italian"=> "foodpasta",
 "sweets"=> "cakes",
 "canadian"=> "poutine"
);

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse
cheesesake | desert
*/

foreach ($food as $foodType => $food){
  echo $food ." | " . $foodType . "<br>";
}





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...)
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake:
    type:desert
    origin: Greece

So, food_assoc is still going to be an associative array.
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself
and carries the information about the type and origin
*/
$pizza = array(
  "Type"=>"main",
  "origin"=>"Italy"
);
$pasta = array(
  "Type"=>"secondary",
  "origin"=>"Rome"
);
$cakes = array(
  "Type"=>"dessert",
  "origin"=>"Everywhere"
);
$poutine = array(
  "Type"=>"main",
  "origin"=>"Canada"
);
$food = [
  "pizza" => ["Type"=>"main",
  "origin"=>"Italy"],
  "pasta" =>["Type"=>"secondary",
  "origin"=>"Rome"],
  "cakes" =>["Type"=>"dessert",
  "origin"=>"Everywhere"],
  "poutine" =>["Type"=>"main",
  "origin"=>"Canada"]
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

foreach ($food as $x=>$a){
  echo $x;
  foreach ($food[$x] as $key => $value) {
    echo  " | " .$value ;
  }
  echo "<br>";
};


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:


  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>

*/
echo "<table>";
foreach ($food as $x=>$a){
  echo "<tr><th>$x</th>";
  foreach ($food[$x] as $key => $value) {
    echo "<th>$value</th>" ;
  }
  echo "</tr><br>";
};
echo "</table>";
 ?>
