<?php
$obj = new main();
class main
{
   private $html;

   public function __construct()
   {
   //1 Initial cloned content
   $date = date('Y-m-d', time());
   echo "The value of \$date: ".$date."<br>";
   $tar = "2017/05/24";
   echo "The value of \$tar: ".$tar."<br>";
   $year = array("2012", "396", "300", "2000", "1100", "1089");
   echo  "The value of \$year:";
   print_r($year);

   $chdate = str_replace('-','/',$date);
   //2
   $this->html .= htmlTags::heading('2.Replace - with / in Date');
   $this->html .= stringFunctions::replace('-' ,'/' ,$date);
   $this->html .= htmlTags::hrline();
   //3
   $this->html .= htmlTags::heading("3.Compare $chdate with $tar");
   $this->html .= stringFunctions::compare($chdate,$tar);
   $this->html .= stringFunctions::printthisarr($input,true);
   $this->html .= htmlTags::hrline();
   //4
   $this->html .= htmlTags::heading("4.Search for / in $chdate and return position");
   $this->html .= stringFunctions::search($chdate);
   $this->html .= stringFunctions::printthisarr($input,true);
   $this->html .= htmlTags::hrline();
   //5
   $this->html .= htmlTags::heading("5.Count of words in $chdate");
   $this->html .= stringFunctions::count($chdate);
   $this->html .= stringFunctions::printthisarr($input,true);
   $this->html .= htmlTags::hrline();
   //6
    $this->html .= htmlTags::heading("6.Length of string $chdate");
    $this->html .= stringFunctions::length($chdate);
    $this->html .= htmlTags::hrline();
   //7
   $this->html .= htmlTags::heading("7.ASCII value of first character of $chdate");
   $this->html .= stringFunctions::asc($chdate);
   $this->html .= htmlTags::hrline();
   //8
   $this->html .= htmlTags::heading("8.Last Two character of $chdate");
   $this->html .= stringFunctions::lasttwo($chdate);
   $this->html .= htmlTags::hrline();
   //9
    $this->html .= htmlTags::heading("9.Break $chdate into an array, delimit with space");
    $this->html .= stringFunctions::bstrarr($chdate);
    $this->html .= stringFunctions::printthisarr($input,true);
    $this->html .= htmlTags::hrline();
  //10
      $this->html .= htmlTags::heading("10a.Leap Year with foreach and switch");
      $this->html .= loop::leapyear($year);
      $this->html .= stringFunctions::printthisarr($input,true);
      $this->html .= htmlTags::hrline();
  //11
       $this->html .= htmlTags::heading("10b.Leap Year with for and switch");
       $this->html .= loop::leapyear2($year);
       $this->html .= stringFunctions::printthisarr($input,true);
       $this->html .= htmlTags::hrline();

   }

   public function __destruct()
   {
    $this->html .= stringFunctions::printthis($this->html);
   }
}
class htmlTags
{
  static public function hrline()
  {
  return "</br><hr>";
  } 
  static public function heading($text)
  {
  return "<h1> $text </h1>";
  }
}

class stringFunctions
{

  static public function printthis($input)
  {
  return print_r($input);
  }
  static public function printthisarr($input1, $input2)
  {
  return print_r($input1, $input2);
  }
//2
  static public function replace($input1, $input2, $input3)
  { 
   return str_replace($input1,$input2,$input3);
  }
//3
  static public function compare($input1, $input2)
  {
  $res = strcmp($input1,$input2);
  	if($res > 0)
	return "The future<br>";
	else if($res < 0)
	return "The Past<br>";
	else 
	return "Oops";
  }
//4
  static public function search($input)
  {
  $char="/";
  $positions = array();
  $pos = -1;
  while (($pos = strpos($input, $char, $pos+1)) !== false) {
      $positions[] = $pos;
      }

      $result = implode(' ', $positions);

      return $result;
  }
//5
  static public function count($input)
  {
    $nofw= explode("/",$input);
    return sizeof($nofw);
    //list words
    foreach($nofw as $word)
    return $word;
  }
//6
  static public function length($input)
  {
   return strlen($input);
  }
//7
  static public function asc($input)
  {
   return ord($input);
  }
//8
  static public function lasttwo($input)
   {
     return substr($input,-2);
    }
//9
  static public function bstrarr($input)
  {
   $arr= explode("/",$input);
   $res= implode(" ",$arr);
   return $res;
  }}
//10
class loop{
   static public function leapyear($input)
  {      
         $res1="";
         foreach ($input as $y )
         { 
          switch((($y % 4) == 0) && ((($y % 100) != 0) || (($y % 400) == 0)))
	 { 
	 case 1: $res1.= $y . " TRUE ";
	 break;
         default: $res1.=  $y . " FALSE ";
	 
       	}
	}
	return $res1;
	}
	static public function leapyear2($input)
	{
	$res1=""; 
	 for($i=0; $i< sizeof($input); $i++) 
	 {
	 switch((($input[$i] % 4) == 0) && ((($input[$i] % 100) !=0) || (($input[$i] % 400) == 0)))
	 {	
	  case True:$res1.= $input[$i] . " TRUE ";
	  break;
	  default:$res1.= $input[$i] . " FALSE ";
		                            
	}}return $res1;
	}}			            


?>

