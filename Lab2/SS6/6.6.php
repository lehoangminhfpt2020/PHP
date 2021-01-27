<HTML>
<head>
    <title>Static Variables</title>
</head>
<BODY>
<?php
function decrement()
{
 static $static_int1 = 99;
 $static_int1 --;
 echo "The decrement value is $static_int1";
}
decrement();
?>
</BODY>
</HTML>
