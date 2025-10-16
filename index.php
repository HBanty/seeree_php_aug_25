<!-- 

// echo print'a';
// print'x';

// echo printf("hello I am %s and           %d years" ,"seeree",23);
// br

// $arr=[10,20,30,40,50,60];
//  echo print_r($arr);

// $a=10;

// var_dump($a);
// echo '<br>';


// $b=(integer),'100';
// var_dump($b);
// echo '<br>';
// $c=12;
// var_dump($c);
// echo '<br>';

// echo PHP_INT_MAX;

// echo '<br>';
// echo PHP_INT_MAX;
// echo '<br>';
// echo PHP_INT_SIZE;
// echo '<br>';

$a=9.3;
var_dump($a);
echo '<br>';


$b=(float),'10.7';
var_dump($b);
echo '<br>';


$c=(float),'10.7';
if (is_float($c)) {
	// code...
	echo"float"
} else {
	// code...
	echo "not float";
}

echo '<br>';


echo PHP_FLOAT_MAX;
echo '<br>';

echo PHP_FLOAT_MAX;
echo '<br>';
$d=1.00000000000023E+3004;
if (is_finite($d)) {
  echo"finitevalue"
  	// code...
} else {
	echo"infinitevalue"

	// code...
}






echo '<br>';


super global variable 
 these are the pre defined variabele 
 in php are avalable all scope throught a sccript .

 2 there is no need to declare them in global $variable from to acess them within function or methods .
 3 these are speciallu =defiened array variable in php rhat make it easy for you to get information avlut a request .
 4.these are specially defiened array variables in php that make it easy for you to get information about a request.
 5. the superglobals are avaliable throught the script .
 6. the variable can be asccesd from any function ,class or any files without doing any special task such as declaring them as global.
 7.they are mainaly used to store and dget informmation from one page to anouther page in an application 
 8. super dglobal variable are built in variable that are always avalavble  in all scope 



 $_GET
 $_POST
 $_REQUEST
 $_SERVER
 $_SESSION
 $_COOKIE
 $GLOBALS



 $_GET
 it is super global variable 
 intialy it is empty array
 $_GET containt key and value send by form using get method when slick submit button .\
 $Get can also collect data sent in the url .
 the ddata ( key and values ) is visivle to dthe user , send ovser theurl 
 only 4096 characters of data can be send by thids get ethod 
 data can be modify by client so it does not proviedsecurty 
 its very faster 
 send only text.
  


 <a href="home.php? a=10&b=20">home</a>
 ?> -->
<!--  -->




 <!-- php
print_r($_GET);
 


<form>
	<input type="text" name="fno"><br>
	<input type="text" name="sno"><br>
	<input type="submit" name="btn" value="add">
</form> -->



<!-- $_POST
----------------
it is also a super global variable
initially it is empty array
$_POST contain key and value send by form using post method when slick submit button .
it contain key and value send by form using post method when slick submit button .
we can send any type of data i.e text, number, array, object etc.
the data is not visible in the URL and has a higher limit (up to 8MB).
it is more secure than GET method as data is not exposed in the URL.
client cant modify it 
thats why provied security
it is slower than GET method.




-->
<!-- 

/*if (isset($_POST['btn'])){
	$fno=$_POST['fno'];
	$sno=$_POST['sno'];
	$res=$fno+$sno;
	echo "the sum is : $res";
   }
	*/


?>


<form  method="post">
	<input type="text" name="fno" placeholder="enter first number "><br>
	<input type="text" name="sno" placeholder="enter second  number "><br>
	<input type="submit" name="btn" value="add">
</form> -->


<!-- $_REQUEST
 --------------
 this variable cotains the values of both $_GET and $_POST.
 this can get values passed from both get and post methods.
 PHP $_REQUEST is php  super global variable which is use  to collect form data after submitting an HTML form.
 $_REQUEST is not used mostely ,because $_POST and $_GET are more commonly used.
  -->

<!-- 
// if (isset($_REQUEST['btn'])) {
// 	$fno=$_REQUEST['fno'];
// 	$sno=$_REQUEST['sno'];
// 	$res=$fno+$sno;
// 	echo "the sum is : $res";
//    }
// 	?>

  <form  method="get">
	<input type="text" name="fno" placeholder="enter first number "><br>
	<input type="text" name="sno" placeholder="enter second  number "><br>
	<input type="submit" name="btn" value="add">
</form> -->



<!-- 
// class  Student {
// 	public $stdname="bunty babu";
// 	function __construct(){
// 		echo"this is parent class constructor  <br>


// 	}
// }

// class MyStudent extends Student{
// 	public $stdname="sai kiran	";
// 	function __construct(){
// 		parent::__construct();
// 		echo "this is child class constructor <br>";	
< // 		function __destruct(){
// 			echo"this is child class destructor <br>";
// 		}	
// 	}

	
// }}
// $obj=new MyStudent();
// echo $obj->stdname; -->
 

<!-- 
// abstract class
// abstract class myabStractClass{
// 	abstract function show();
// 	abstract function display();
// }


// abstract class myclass extends myabStractClass{
// 	abstract function show(): void{
// 		echo"this is show method";
		
// 	}
// }
// class myclass2 extends myclass {
	
// 	abstract function display(): void{
// 		echo"this is show method";
		
// 	}
// } -->

<?php
// interface myNewInterface{
// 	function show();

// }
// interface myInterface extends myNewInterface{
// 	function display();
// }

// abstract class mynewAbstractClass implements myInterface{
// 	abstract function show(): void;
// 	abstract function display(): void;
// }

// abstract class myclass extends mynewAbstractClass{
// 	 function show(): void;{
// 		echo"this is show method";

// 	}
// }	


// abstract class myclass2 extends myclass {
	
// 	 function display(): void{
// 		echo"this is display method";

// 	}
// }
// $obj=new myclass2();
// $obj->show();
// $obj->display();


$img=imagecreate(200,200);

imagefilter($img,IMG_FILTER_GRAYSCALE);
imagejpeg($img,'demo.jpeg');





?>


<img src="./demo.jpeg" alt="" height="200" width="200">

