<!doctype html>
<html>

<body>
<h2>between 1 to 20 without divided by 3<h2>

<?php
for($i=1;$i<=20;$i++){
    if($i%3!=0){
        echo " ".$i;
        continue;
        
    }
}

?>