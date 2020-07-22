<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter name: <input type="text" name="fname"><br><br>
  Enter position num: <input type="text" name="num"><br><br>
  <input type="Submit" value="submit">
  
  
</form>
<?php
 
echo "Result";
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  $num=$_POST['num'];
 

echo "current String=>".$name;
echo "<br>";
echo "New String=>";

$p=substr($name,0,$num);
$pos=substr($name,$num+1,strlen($name)-$num);
echo $p.$pos;


  }

?>

</body>
</html>
