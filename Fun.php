<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Functions</title>
</head>
<style>
body {background-image: linear-gradient(120deg,#e05297, #fceef5, #f3bad6, #ea86b6);}
h1   {color: #8b5e83}
tr {font-size :30px}

</style>

<body>
   <center> <h1>The Third Task PHP-Functions</h1> </center> 
 
    <table style="width:100%" border="10px">
  <tr>
    <th>Num of Question</th>
    <th>The Solution</th>
  
  </tr>
  <tr>
    <td>Q1</td>
    <td><?php 
   
    function factoril_num($x)
    {
      if($x ==0) {
         return 1;
        }else{	
          return $x * factoril_num($x-1);
        } }
         echo (factoril_num(5));
    ?></td>
      </tr>


  <tr>
    <td>Q2</td>
    <td><?php
    //copy
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(10);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
?>

</tr>


  <tr>
    <td>Q3</td>
    <td>
    <?php
echo strrev("Hello My Class");
?>
    </td>
  </tr>


  <tr>
    <td>Q4</td>
    <td><?php
$Alpha = array("-V-", "-B-", "-A-","-M-", "-H-", "-C-");
sort($Alpha);

$clength = count($Alpha);
for($x = 0; $x < $clength; $x++) {
  echo $Alpha[$x];
 
}
?>
    </td>
  </tr>



  <tr>
    <td>Q5</td>
    <!-- i didnt get the ord fun -->
    <td><?php
function lowercase($str1){
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) 
          {return false; }
         } return true; }
var_dump(lowercase('abc def ghi'));
var_dump(lowercase('hiG dJG ghHJi'));
?>
  </tr>



  <tr>
    <td>Q6</td>
    <td><?php
function palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
echo palindrome('nurses')."\n";
?></td>
  </tr>



  <tr>
    <td>Q7</td>
    <td><?php
 
 function three_Num($arr, $target)
 {
 $count = count($arr) - 2;
 $result=[];
 for ($x = 0; $x < $count; $x++) {
     if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $target) {
         array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $target");
     }
 }
 return $result;
 }
 $my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
 print_r(three_Num($my_array, 16));
 print_r(three_Num($my_array, 11));
 print_r(three_Num($my_array, 12));

    ?></td>
  </tr>
  
</table>


</body>
</html>