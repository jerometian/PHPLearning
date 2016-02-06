<?php
echo "测试测试测试。。。。。。。。。。。。。"
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
    echo "\"$z[$k]\"=$v"."<BR>";
}


$t = date("H");
if ( $t<20)
{
    echo "have a good day!<BR>";

}
else {

    echo "have a good night!<BR>";
}

$z = 1;
echo ++$z ."<BR>";
echo $z ."<BR>";
$x=1;

while($x<=5) {
    echo "这个数字是：$x <br>";
    $x++;
}

echo "<BR>";

$x=1;

do {
    echo "这个数字是：$x <br>";
    $x++;
} while ($x<=5);



echo "<BR>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<BR>";
echo $_SERVER['REMOTE_PORT'];





?>



<?php
$name ="";
$tErr = "";
function  validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}
echo "<BR>";
if (!empty($_POST["t"]))
{
    $name = validate($_POST["t"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $tErr = "只允许字母和空格！";
    }

}

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="t" value="<?php echo $name;?>">
<input type="submit" >
<div ><?php echo $tErr?></div>
</form>


<?php
date_default_timezone_set("Asia/Shanghai");
echo "当前时间是 " . date("h:i:sa");

echo "<BR>";

$d = mktime(17,23,59,02,03,2016);
echo "creation time is :".date("Y-m-d H:i:sa",$d);
?>


<?php
    echo "<BR>";
    echo readfile("test.txt");
    echo "<BR>";
    echo "fopen start.....<BR>";
    $myfile = fopen("test.txt","r") or die("unable top open the file");
    echo fread($myfile,filesize("test.txt"));
    fclose($myfile);

    echo "<BR><BR>";

    $myfile = fopen("test.txt","r") or die("unable top open the file");
    echo "fgets start...读取单行demo<BR>";
    while (!feof($myfile)){

        echo fgets($myfile)."<BR>";
    }


    fclose($myfile);


   $myfile =fopen("test1.txt", "w") or
    die("Unable to open file!");

    $txt = "Bill Gates \n";
    fwrite($myfile, $txt);
    $txt = "Steve Jobs\n";
    fwrite($myfile, $txt);
    fclose($myfile);

?>



<?php
 include 'footer.php';
 echo $text;
?>

