<HTML>
<BODY>
<?php
// Toán tử so sánh '<=>'  khi x > y
$x= 1;
$y =2;
echo $x.'<=>'.$y,       // hiện lên 2 biến kèm ký tự <=>. || output: 1 <=> 2
     'Return' ,         // hiển thị chữ Return || Output: return
     $x <=> $y;         // hiển thị kết quả so sánh của toán tử <=> || Output: -1
echo '<br>';

// toán tử so sánh '<=>' khi x =y
$x = 10;
$y = 10;
echo  $x. '<=>'.$y, 'Return', $x <=> $y;
echo '<br>';

// toán tử so sánh '<=>' khi x < y
$x = 10;
$y = 5;
echo  $x. '<=>'.$y, 'Return', $x <=> $y;
echo '<br>';

?>
</BODY>
</HTML>