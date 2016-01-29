<?php
echo "²âÊÔ²âÊÔ²âÊÔ¡£¡£¡£¡£¡£¡£¡£¡£¡£¡£¡£¡£¡£"
?>

<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";




echo "<BR>";

$x = 5;
$y = 10;
function myTest(){
    global  $x,$y;
    $y = $x+$y;
}
myTest();
echo $y;


echo "<BR>";

function  mytest1()
{
    static $x = 0;
    echo $x ;
    $x++;
}

mytest1();
mytest1();
mytest1();

print "test print fun";

class Car
{
    var $color;
    function  Car($color="green")
        {
            $this->color=$color;

    }
    function  what_color(){
        return $this->color;
    }
}

echo "<BR>";
echo strlen("Hello world!");
echo "<BR>";
echo strpos("Hello world","world");

define("GREETING","Welcome to W3SCHool.com.cn!");
echo GREETING;




echo "<BR>";
  $x1 = 10;
  echo $x1 ++;
  echo "<BR>";
  echo $x1;
  echo ++$x1;
  echo "<BR>";
  $y1 = 10;
  echo "<BR>";
  echo --$y1;
  echo "<BR>";
  echo $y1--;
  echo "<BR>";
  echo $y1."<BR>";
  $txt1 = "Hello ";
  $txt2=$txt1 ."world";

  echo $txt2;
  $a = "Hello";
   $b=$a;
   $b=$a." world!";
   echo $b;
$x = "Hello";
$x.=" world!";

echo $x;


$x=100;
$y = "100";
var_dump($x==$y);
echo "<BR>";
var_dump($x===$y);
echo "<BR>";
var_dump($x!=$y);
echo "<BR>";
var_dump($x!==$y);
echo "<BR>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
$x = array("a"=>"red","b"=>"gree");
$y= array("c"=>"blue","d"=>"yellow");
var_dump($x);
$z=$x+$y;
var_dump($z);
echo "<BR>";

foreach ($z as $k=>$v){
    //echo $k,':',$v,'<BR>';
    echo "$z[$k]=$v","<BR>";
}

?>




