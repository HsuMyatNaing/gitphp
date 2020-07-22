<!doctype html>
<html>
<body>
<h2>Two min values and two max values</h2>

<?php
$sum=0;
$arr=array(1,3,5,4,8,6,9,7,12,45,32,16,14,13,19,70,15);
echo "Array =";
foreach($arr as $value){
    echo " ".$value;
}

echo "<br>";
$arrCount=count($arr);
foreach($arr as $val)
{
    $sum+=$val;
    
    }
    $avg=$sum/$arrCount;
echo "the average is=>$avg";
echo "<br>";


   $max[]=max($arr);
   $max[]=max(array_diff($arr,$max));
   echo "Max values is=>";

   foreach($max as $value){
    echo " ".$value;
   }
   echo("<br>");
    
   $min[]=min($arr);
   $min[]=min(array_diff($arr,$min));
   echo "min values is ==>";

   foreach($min as $value){
    echo " ".$value;
   }
   
   


?>
</body>
</html>
