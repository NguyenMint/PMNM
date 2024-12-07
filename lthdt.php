
<pre><?php
require('./model.php');

$o1 = new A();
$o2 = new A;

print_r($o1);
echo '<hr>';

print_r($o2);

$o1->a1 = 5;
$o1->F1();
echo '<hr>';
$o2->F1();
$x = A::PI;
echo '<hr>';
echo $x;
echo '<hr>';
echo '<hr>';

$b1 = new B(3,6); 
echo 'f1: '; $b1->f();//3
echo '<br>';
$b1=null;//9
$b2 = new B(2); 
$b2->b2=14;
echo '<br>';
$b2->f();//14
echo '<br>';
echo B::n;//100
echo '<br>';//2 + 14 = 16
//Output: 391410016
$b2=null;//9

echo '<hr>';
echo '<hr>';

$c1 = new C();
$c2 = $c1->F1();

$c2->F();
echo "giang ne";
?>