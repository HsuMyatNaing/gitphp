<!doctype html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter Number (or) Stringss: <input type="text" name="num">
  <input type="Submit" >
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num=$_POST['num'];
    echo chunk_split($num,2,",");

     
}
?>
</body>
</html>