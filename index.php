<?php
/*
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar:".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo  "The value of \$year:";
print_r($year)
echo '</br>';
*/


$obj = new main();
class main
{
   private $html;

   public function __construct()
   {
   $date = date('Y-m-d', time());
   $tar = "2017/05/24";
   $year = array("2012", "396", "300", "2000", "1100", "1089");
   $chdate = str_replace('-','/',$date);
   //1
   $this->html .= htmlTags::heading('Replace - with / in Date');
   $this->html .= stringFunctions::replace('-' ,'/' ,$date);
   $this->html .= htmlTags::hrline();
   //2
   $this->html .= htmlTags::heading("Compare $chdate with $tar");
   $this->html .= stringFunctions::compare($chdate,$tar);
   $this->html .= stringFunctions::printthisarr($input,true);
   $this->html .= htmlTags::hrline();
   //3
   $this->html .= htmlTags::heading("Search for / and return position");
   $this->html .= stringFunctions::search($chdate);
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
//1
  static public function replace($input1, $input2, $input3)
  { 
   return str_replace($input1,$input2,$input3);
  }
//2
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
//3
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
 
 
}

?>

