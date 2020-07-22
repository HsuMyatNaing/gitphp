<html>
<body>
<h2>Exchange First and Last Char</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter name: <input type="text" name="fname">
  <input type="Submit" OnClick="addChar()">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  echo $name;
  echo "<br>";
  echo "<br>";
  $lastChar=substr($name,strlen($name)-1);

  $firstChar=substr($name,0,1);
  $s=substr($name,1,strlen($name)-2);
  
  $exString=$lastChar.$s.$firstChar;
  echo "new String";
  echo "<br>";
  echo $exString;

}
  ?>
  </body>
  </html>
