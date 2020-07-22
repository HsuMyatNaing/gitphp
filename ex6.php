<!doctype html>
<html>
<body>
<h2>Find Factorial Number</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter Number: <input type="text" name="num">
  <input type="Submit" >
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     

    $fact=1;
    $num = $_POST['num'];
    echo "Number=>$num";
    echo "<br>";
    for($i=1;$i<=$num;$i++){
        $fact*=$i;
       
    
    }
    echo "Factorial of number is =>$fact" ;

}



?>
