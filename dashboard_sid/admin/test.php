<?php 
$count=11;//no of data present in database;
$round = ceil($count/4);
$d =0;
for ($i=1; $i <= $round; $i++) { 
	echo 'this is my div <br>';
	for ($a=$d; $a < 4*$i ; $a++) { 
		if($a<$count){
		echo "This is my data ".$a."<br>";
		}
	}
	$d = 4*$i;
}
?>
<form>
	<input type="text" pattern="[0-9]{1,3}\[0-9]{1,3}[-,][0-9]{1,3}" required="">
	<button type="submit">submit</button>
</form>