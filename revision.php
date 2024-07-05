<?php
//string 
$name="uwineza gloria" ."<br>";//<br> break
echo $name;

//adding 2 numbers
$num1=23;
$num2=45;
$sum=$num1+$num2;
echo "sum of 2 number is " ,$sum."<br>";
//conditons
$marks=67;
if($marks>50){
    print "passsed" ."<br>";
}
else if($marks<50){
    print "failed";
}
else{
    echo "tried";
}
//loops
//while loop printing even numbers below 100
$num=0;
while($num<100):
    if($num % 2==0){

        echo $num ."<br>";
    }
    $num++;
endwhile;
//or
$num=0;
echo "even number below 100 are ";

while($num<100){
    if($num % 2==0){
        echo $num."<br>";
    }
    $num++;
}
//for loop "printing right triangle"
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
// do ..while loop calculating sum of numbers between 1 and 100
$num=100;
$sum=0;
echo " all numbers between 1 and 100 is ";
do{
echo $num," ";
    $num--;
    
}
while($num>1)
//functions in php
//function calcuting product of 2 numbers
function product($num1,$num2){
$prod=$num1*$num2;
 return echo "product of ",$num1, "and ",$num2," is ",$prod ."<br>";
}
product(2,3);
?>
