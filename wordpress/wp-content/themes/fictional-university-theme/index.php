
<?php

function aboutMe ($name, $color){
    echo "<p>My name is $name and i like color $color.</p>";
}

aboutMe('John', 'blue');
aboutMe('Jack', 'red');


$names= array ('Kyobe', 'Ronald', 'Jodan', 'Kibilige', 'Alice');
$count = 0;

 while ($count< count($names)) {
     echo "<li>My name is $names[$count]</li>";
     $count++;
 }
?>