
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
//checking trur or false
$num1 = 23;
$num2 = 35;
echo "<br>";
var_dump($num1>$num2);
?>

<?php 
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
$fruits = ["mango",1,"Apple",2];
echo "<br>";
echo $fruits[0];

foreach($fruits as $fruit){
    echo "<br>";
    echo $fruit;
}
?>








