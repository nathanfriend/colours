<?php
$colour = '0';

while ($colourval<200) {
    $colourval ++;
    $colour = "#".$colourval.$colourval.$colourval;
echo "<font color='$colour'>Hello<br></font>\r\n";
}
exit;  


?>