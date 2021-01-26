<HTML>
<BODY>
<?php
function e() {
    echo "this is e() \n";
};

function f() {
    echo "this is f() \n ";
    return e();
};

function g(){
    echo "this is g() \n";
    return f();
};

g();
echo "***********\n";
echo '<br>';


echo "***********\n";
echo '<br>';
g()()();
?>

</BODY>
</HTML>