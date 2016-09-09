<meta charset ="UTF-8">
<?php //тег пчп
	$aq = "Получится - ";//переменная
		$a = 150;//переменная
		$b = 100;//переменная
	$sum = $a+$b;//в переменной складываются 2 переменные
 echo $aq, $sum;// вывод переменной

 echo "</br>"; //выполняет переход на другую строку

 $sergey = 33;//переменная
	if(isset($sergey)); //проверяет существует ли переменная
 echo "переменная существует";// вывод переменной

 echo "</br>";//выполняет переход на другую строку

 $varby = "test";//переменная
 if (isset($varby)) //проверяет существует ли переменная
	{
	echo "good";// вывод переменной
	}
 else//или
	{
	echo "bad";// вывод переменной
	}

 echo "</br>";//выполняет переход на другую строку

	$array = array ("food", "bar", "hello", "world"); //массив
	var_export($array); //может генерировать любой php код

 echo "</br>";//выполняет переход на другую строку
 
 $whatis ="Пример";//заполнение переменной
 unset($whatis ); //уничтожение переменной
 echo $whatis ;//вывод переменной
 $whatis ="test"; //переменная
 $random=43;//переменная
 $result=$whatis .$random; //объеденение 2-ух переменных в одну
 echo $result //вывод переменной
 
 //доработать
//$q1 = array_fill (1,5, "two", "four"); //массив
//$q2 = array_fill (6,10, "one", "six"); //массив
	//print_r($q1);
	//print_r($q2);
	
 //доработать
 //$logik=true;
 //if(is_));
 //$number = 7,8;
 
 
//is_numeric ($whatis,$random);

	//$varone = "73";
	//$vartwo = "27";
	//$result = $varone+$vartwo;
 //echo $result;
 
///////////////////////////////
//9september//

// $logik = true;
// $number = 7.8;
//	if(is_double($logik))
//	if(is_bool($logik))
// print_r($logik.$number)


 //$int = 10;
 //$str = "10";
//	if($int==$str);
//		echo "они равны";
	//else
		//echo "они не равны";

 ?>