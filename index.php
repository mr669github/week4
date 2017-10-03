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

   $this->html .= htmlTags::heading('Replace - with / in Date');
   $this->html .= stringFunctions::replace('-' ,'/' ,$date);
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



  static public function replace($input1, $input2, $input3)
  { 
   return str_replace($input1,$input2,$input3);
  }


}

?>

