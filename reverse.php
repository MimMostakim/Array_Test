<?php
function reverseArray($a){

    return (array_reverse($a,true));

}
$a=array(1,4,3,2);
print_r ($a);
echo "<br>";
print_r (reverseArray($a));

?>