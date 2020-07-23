<!doctype html>
<html>
<body>
<?php
echo "Result is";
echo "<br>";
		

    for($i=1;$i<=8;$i++){
        for($j=1;$j<=8-$i;$j++){
           echo "  ";
        }
        for($j=1;$j<=$i;$j++){
            $k=$i*$j;
            echo $k." ";
        }
        
        echo "<br>";
    }
	
?>
</body>
</html>
