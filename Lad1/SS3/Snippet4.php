<HTML>
<BODY>
// toán tử so sánh khi dùng với chuỗi Aray
<?php
// so sánh 2 chuỗi rỗng giống nhau sẽ trả về 0
echo '<br>';
$x = array();
$y = array();
echo 'array()'.'<=>'.'array()'.'Return', $x <=> $y;

// so sánh nhiều chuỗi
echo '<br>';
$m = array(1,2,3);
$n = array(1,2,3);
$p = array(1,2,1);
$q = array(1,2,4);

echo 'array(1,2,3)'.'<=>'.'array(1,2,3)'.'Return', $m <=> $n;
echo '<br>';
echo 'array(1,2,3)'.'<=>'.'array()'.'Return', $m <=> $x;
echo '<br>';
echo 'array(1,2,3)'.'<=>'.'array(1,2,4)'.'Return', $m <=> $q;


?>

</BODY>
</HTML>