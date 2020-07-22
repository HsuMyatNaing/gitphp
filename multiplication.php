<html>
<body>
<h2>Multiplication</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter num: <input type="text" name="str">
  <input type="Submit" >
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $num = $_POST['str'];

    for($i=1;$i<=12;$i++){
        echo $num."*".$i."=".$num*$i;
        echo "<br>";

    }
    }

?>