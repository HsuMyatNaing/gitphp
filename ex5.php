<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter String: <input type="text" name="fname">
  <input type="Submit" >
</form>

<?php
echo "Result";
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  echo "current string==>".$name;
  echo "<br>";
  $result = '';
  $str=str_split($name);
  for($x=0; $x < count($str) ; $x++)
  {
    $ch = ord($str[$x]);
  
  
  if ($str[$x] >= 'a' && $str[$x] <= 'z'){
  $result .= chr($ch - 32);
  
  }else{
  $result .= $str[$x];
  }
  }
  echo "Uppercase string==>";
  echo  $result;
  
        
  
  }

?>

</body>
</html>