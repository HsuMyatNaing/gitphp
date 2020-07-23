<!doctype html>
<html>
<body>
<h2>Table color exercise</h2>
<table border="1" cellpadding="5" cellspacing="0">
<?php

for($i=1;$i<=8;$i++){
    echo "<tr>";
    for($j=1;$j<=8;$j++){
        $add=$i+$j;

        if($add%2==0){
        echo "<td style=background-color:#000000 width=30px height=30px;>
        </td>";
        }
        else{
            echo  "<td style=background-color:#ffffff width=30px height=30px;>
            </td>";

        }

        
        }
        echo "</tr>";

    }
    

?>
</table>
</body>
</html>
