<?php
function redirect($PgNm)
{   
    header("Location:$PgNm");
}
function isValidUser()
{
    global $dblink;
    $sess=session_id();
    $query_sel="select * from admin where session_id='".$sess."' and status=0";
    $result_sel=mysqli_query($dblink,$query_sel);
    if(mysqli_num_rows($result_sel)>0) return 1;
    else    return 0;
}

function exc_qry($qry)
	{
		//echo "this get called";
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

function get_photo_cat_name($id)
    {
        global $dblink;
        $sl_qry = "select * from category where id = $id";
        $result=mysqli_query($dblink,$sl_qry);
       while ($row = mysqli_fetch_assoc($result)){
            $title = $row['title'];
       }
       return $title;
    } 

	function LgnChk($username,$password)
{
    global $dblink;
    $sess=session_id();
    $md5_pwd=md5($password);
    $query_sel="select * from admin where username='".$username."' and password='".$md5_pwd."' and status = 0";
  // echo $query_sel;
    $result_sel=mysqli_query($dblink,$query_sel);
    if(mysqli_num_rows($result_sel)>0)
    {
       //echo "This function get called";
        $row=mysqli_fetch_array($result_sel);
        //echo count($row);
        $adminid=$row["id"];
        $_SESSION['id']=$row["id"];
        $_SESSION['sessnm']=$row["username"];
        $_SESSION['us_type']=$row["type"];
        $_SESSION['email']=$row['email'];
        $_SESSION['access']=$row['cng_acc'];
        $query_up="update admin set session_id='".$sess."' where id=".$adminid;
        //echo $query_up;
        $result_up=mysqli_query($dblink,$query_up);
        if($result_up)  { echo  $err="";    }
        else { echo $err="Error in updating the admin details.";    }
    }
    else    {   $err="Invalid Username/Pasword.Please check";   }
    return $err;
}
?>
