<html>
<body>
<h2>Added the first 3 char at both the front and last</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter String: <input type="text" name="str">
  <input type="Submit" >
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $str = $_POST['str'];
  echo "current String=>$str";
  echo "<br>";
    
     echo "<br>"; 
     $conStr=substr($str,0,3);
    
      
      echo "New String";
      echo "<br>";
     if(strlen($str)>=3){
         echo $conStr.$str.$conStr;
         

     } else
     echo $str;
    
      
  }

?>

</body>
</html>