
<?php
class Greetings{
    private $word = "hello";
}
$closure = function ($whom){
    echo "$this -> word $whom";
};

$obj = new Greetings();
$closure->call($obj,'John');
$closure->call($obj,'kevin');
?>

