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
?>




