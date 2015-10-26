<?php

   $result = 0;
  if(isset($_GET["multiply_numbers"])){
	  
	  $result = multiply($_GET["var_one"], $_GET["var_two"]);
	  
  }
  function multiply($x,$y){
	  $answer= $x * $y;
	  
	  return $answer;
  }
  
// get tähendab, et lähevad aadressireale
?>

<form method="get" >

	<input name="var_one"> * <input name="var_two">
	<input name="multiply_numbers" type="submit">
<form>
<p>Answer is <?=$result;?> </p>

