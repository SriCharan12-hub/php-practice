
<?php
//Hello world
 echo "Hello World"?>


<?php 
//acessing variables
$name = "John";
echo "My name is $name";
echo "<br>";
echo "Hello $name";
?>

<?php 
//concatenation and division
echo "<br>";
echo "Hello" . " kaise " . "bruda";
echo "<br>";
echo 25/10;
?>

<?php 
//checking true or false
$num1 = 23;
$num2 = 35;
echo "<br>";
var_dump($num1>$num2);
?>

<?php 
//loops
echo "<br>";
for ($i=0; $i<=5; $i++){
    
    echo $i . " ";
}

echo "<br>";
$i = 1;
while ($i<=2){
    echo $i . " ";
    $i++;
}
?>

<?php 
//array and accessing array elements
$fruits = ["mango",1,"Apple",2];
echo "<br>";
echo $fruits[0];

foreach($fruits as $fruit){
    echo "<br>";
    echo $fruit;
}
?>

<?php 
$var = null;
echo "<br>";
// using . we can concatinate strings
$name = "Charan";
echo "Hello, " . $name;
// we can access a variable inside only double quotes not in single quotes
echo "<br>";
echo "Hello, $name";
echo "<br>";
echo 'Hi, $name';

?>

<!-- <?php -->
// $value = trim(fgets(STDIN));
// stdin used to take user input
// if we run this code i am facing an error like how to give input 
// echo "<br>";
// echo $value;
// ?>












