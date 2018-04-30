<?php 

  	$connect_error = 'Sorry, there was some connectivity issue!';
  	@mysql_connect('localhost','root','') or die($connect_error);
  	@mysql_select_db('smart') or die($connect_error);

  	$sql4 = "SELECT fstime, fetime FROM fan_year WHERE fsno=75";
    $res4=mysql_query($sql4);
    $row4=mysql_fetch_row($res4);
    $l41 = $row4[0];
    $l42 = $row4[1];
    $l43 = substr($l41, 0, 2);
    $l44 = substr($l42, 0, 2);
    $ldiff = $l44 - $l43;
    $l45 = floor($l43);
    $l46 = floor($l44);
    if($ldiff===0)
    {
      mysql_query("UPDATE fan_prob SET fpcount=fpcount+1 WHERE fphour=$l43");
      echo 'Query Executed';
    }
    else if($ldiff>0) 
    {
      for($i=$l45; $i<=$l46; $i++)
      {
        mysql_query("UPDATE fan_prob SET fpcount=fpcount+1 WHERE fphour='$i'");
      }
      echo 'Query Executed';
    }


?>