<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
body{
    font-family: 'Courier New';
}
    </style>
</head>
<body>
<?php
function stars($n) {
    for($i=1;$i<=$n;$i++) {
        for($j=1;$j<=($n-$i);$j++) {
            echo "&nbsp;";
        }
        for($k=1;$k<=(2*$i-1);$k++) {
            echo "*";
        }
        echo "<br>";
    }
}

stars(5);
?>
</body>
</html>
