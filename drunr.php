<?php
header("Content-Type: application/json");
header("Drunr-Version: 1.0 ~ Iconcia Elixia");

function mysql_fetch_full_result_array($result)
{
    $table_result=array();
    $r=0;
    while($row = mysql_fetch_assoc($result)){
        $arr_row=array();
        $c=0;
        while ($c < mysql_num_fields($result)) {        
            $col = mysql_fetch_field($result, $c);    
            $arr_row[$col -> name] = $row[$col -> name];            
            $c++;
        }    
        $table_result[$r] = $arr_row;
        $r++;
    }    
    return $table_result;
}

	if(empty($_POST))
	{
		die("[{'Error':'No Input Data'}]");
	}
	$db_host = $_REQUEST['DBHOST'];
	$db_name = $_REQUEST['DBNAME'];
	$db_port = $_REQUEST['DBPORT'];
	$db_uname = $_REQUEST['DBUNAME'];
	$db_passw = $_REQUEST['DBPASSW'];
	$db_query = stripslashes($_REQUEST['DBQUERY']);
	$db_con = mysql_connect($db_host,$db_uname,$db_passw) or die("[{'Error':'". mysql_error()."'}]");
	if($db_con)
	{
		
		mysql_selectdb($db_name,$db_con);
		$result = mysql_query($db_query);
		if(is_bool($result)==FALSE)
		{
			$arr_table_result=mysql_fetch_full_result_array($result);
			echo json_encode($arr_table_result);
		}
		else
		{
			if($result)
			{
				echo"[{'Affected_Rows':'".mysql_affected_rows()."'}]";
			}
			else
			{
				echo"[{'Error':'". mysql_error()."'}]";
			}
		}
	}
	else
	{
		die("[{'Error':'". mysql_error()."'}]");
	}
	
?>