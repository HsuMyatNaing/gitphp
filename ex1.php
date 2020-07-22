<html>
<body>
<h2>Added the last char at both the front and last</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter Char: <input type="text" name="fname">
  <input type="Submit" >
</form>

<?php
echo "Result";
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
     echo $name;
     echo "<br>"; 
    
      
  
  }

?>

</body>
</html>