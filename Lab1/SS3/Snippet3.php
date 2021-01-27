<HTML>
<BODY>
// toán tử so sánh khi dùng với chuỗi ký tự string ( Chữ cái)
<?php

echo '<br>';
// so sánh thì C sẽ có giá trị nhỏ hơn D nên sẽ ra -1
$x = "Cat";
$y = "Dog";
echo $x. '<=>'. $y, 'Return', $x <=> $y;
echo '<br>';

// so sánh thì x và y  có giá trị giống nhau nên sẽ ra 0

$x = "PHP";
$y = "PHP";
echo $x. '<=>'. $y, 'Return', $x <=> $y;
echo '<br>';

// so sánh thì C sẽ có giá trị lớn hơn A nên sẽ ra 1
$x = "Computer";
$y = "Apple";
echo $x. '<=>'. $y, 'Return', $x <=> $y;
echo '<br>';
?>

</BODY>
</HTML>