<?php
function multiply($num) {
    for($i=1;$i<=$num;$i++) {
        for($j=1;$j<=$num;$j++) {
            echo $i."x".$j."=".$i*$j."、";
        }
        echo "<br>";
    }
}
multiply(9);
?>