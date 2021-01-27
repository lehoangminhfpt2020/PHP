<HTML>
<HEAD>
    <title>Global variables</title>
</HEAD>
<body>
<?php
$int_1 = 68;
$int_2 = 50;
function division()
{
 global $int_1, $int_2;
 $int_3 = $int_1/$int_2;
 echo "the quotient for $int_1/$int_2 = $int_3";
}
division();
?>

</body>
</HTML>
