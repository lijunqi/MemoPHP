<?php
$a = 1;
if (!$a) {
    echo "Yes\n";
}
else {
    echo "No\n";
}

$content = "asdf";
$content .= "|".$a;
echo $content."\n";

list($first, $second, $third) = explode("_", "A_B_C_D", 3);
echo "1st is - ".$first."\n";
echo "2nd is - ".$second."\n";
echo "3rd is - ".$third."\n";

?>