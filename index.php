<?php
function RandomColour(){
while ($x<10) {
$color=dechex(rand( 0,16777215));
echo "<font color='$color'>Hello</font><br>";
$x++;
}
}

function AllColours(){
    while ($count < 16777215) {
    $color=dechex($count);
    echo "<font color='$color'>$color</font><br>";
        $count++;
    }
}

function RandomColourBackground(){
$color=dechex(rand( 0,16777215));
echo "<meta http-equiv='refresh' content='1'>";
echo "<body bgcolor='$color'></body>";
}
RandomColourBackground();
?>