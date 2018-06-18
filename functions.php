<?php 
function exc_qry($qry)
	{
		//echo $qry;
		global $dblink;
        $resultArray=array();

		$resultQueryFinal=mysqli_query($dblink,$qry);
		if(mysqli_num_rows($resultQueryFinal)>0)
		{
			while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal))
			{
				array_push($resultArray,$RwGtAlSbmsn);
			}
		}
  
 //	echo count($resultArray);
		return array($resultArray);
	} 
?>