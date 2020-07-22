<!doctype html>
<html>
<body>
<table border="1" cellpadding="4" cellspcing="0">
<h2> 1 to 100 in table format</h2>
<?php


    $res=1;
    for($i=1;$i<=10;$i++){
        echo "<tr>";
        for($j=1;$j<=10;$j++){
            $res=$i*$j;
            echo "<td>$res</td>";
            
        }
        
        echo "</tr>";



    }
    
     

?>
</body>
</html>