<?php

  $connect_error = 'Sorry, there was some connectivity issue!';
  @mysql_connect('localhost','root','') or die($connect_error);
  @mysql_select_db('smart') or die($connect_error);

  $name=$_POST["name"];
  switch ($name)
  {

  case "son":
    system ('gpio mode 0 out && gpio write 0 0');
    mysql_query("INSERT INTO `fan_year` (`fstate`, `fsts`, `fsdate`, `fstime`) VALUES ('1', NOW(), CURDATE(), CURTIME())");
    echo "Appliance 1 Turned On";
    break;

  case "soff":
    system ('gpio mode 0 out && gpio write 0 1');
    $sql2="SELECT MAX(fsno) FROM fan_year";
    $res2=mysql_query($sql2);
    $row=mysql_fetch_row($res2);
    $l1 = $row[0];
    mysql_query("UPDATE fan_year SET fstate='0', fets=NOW(), fedate=CURDATE(), fetime=CURTIME() WHERE fsno='$l1'");
    $sql3="SELECT TIMESTAMPDIFF(SECOND, fsts, fets) FROM fan_year WHERE fsno='$l1'";
    $res3=mysql_query($sql3);
    $row3=mysql_fetch_row($res3);
    $l2 = $row3[0];
    mysql_query("UPDATE fan_year SET fdurs='$l2' WHERE fsno='$l1'");
    $sec = $l2 % 60;
    $min = floor($l2/60);
    $hour = floor($l2/3600);
    $ut = ($l2 * 40)/3600;
    $unit = round($ut, 2);
    mysql_query("UPDATE fan_year SET fdsec='$sec', fdmin='$min', fdhour='$hour', units='$unit' WHERE fsno='$l1'");
    echo "Appliance 1 Turned Off";

    $sql4 = "SELECT fstime, fetime FROM fan_year WHERE fsno='$l1'";
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
    else if($ldiff<0) 
    {
      for($i=$l46; $i<=$l45; $i++)
      {
        mysql_query("UPDATE fan_prob SET fpcount=fpcount+1 WHERE fphour='$i'");
      }
      echo 'Query Executed';
    }

    break;

  case "von":
    system ('gpio mode 2 out && gpio write 2 1');
    mysql_query("INSERT INTO `light_year` (`lstate`, `lsts`, `lsdate`, `lstime`) VALUES ('1', NOW(), CURDATE(), CURTIME())");
    echo "Appliance 2 Turned On";
    break;

  case "voff":
    system ('gpio mode 2 out && gpio write 2 0');
    $sql2="SELECT MAX(lsno) FROM light_year";
    $res2=mysql_query($sql2);
    $row=mysql_fetch_row($res2);
    $l1 = $row[0];
    mysql_query("UPDATE light_year SET lstate='0', lets=NOW(), ledate=CURDATE(), letime=CURTIME() WHERE lsno='$l1'");
    $sql3="SELECT TIMESTAMPDIFF(SECOND, lsts, lets) FROM light_year WHERE lsno='$l1'";
    $res3=mysql_query($sql3);
    $row3=mysql_fetch_row($res3);
    $l2 = $row3[0];
    mysql_query("UPDATE light_year SET ldurs='$l2' WHERE lsno='$l1'");
    $sec = $l2 % 60;
    $min = floor($l2/60);
    $hour = floor($l2/3600);
    $ut = ($l2 * 30)/3600;
    $unit = round($ut, 2);
    mysql_query("UPDATE light_year SET ldsec='$sec', ldmin='$min', ldhour='$hour', units='$unit' WHERE lsno='$l1'");
    echo "Appliance 2 Turned Off";

    $sql4 = "SELECT lstime, letime FROM light_year WHERE lsno='$l1'";
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
      mysql_query("UPDATE light_prob SET lpcount=lpcount+1 WHERE lphour=$l43");
      echo 'Query Executed';
    }
    else if($ldiff>0) 
    {
      for($i=$l45; $i<=$l46; $i++)
      {
        mysql_query("UPDATE light_prob SET lpcount=lpcount+1 WHERE lphour='$i'");
      }
      echo 'Query Executed';
    }
    else if($ldiff<0) 
    {
      for($i=$l46; $i<=$l45; $i++)
      {
        mysql_query("UPDATE light_prob SET lpcount=lpcount+1 WHERE lphour='$i'");
      }
      echo 'Query Executed';
    }

    break;

  case "eon":
    system ('gpio mode 3 out && gpio write 3 1');
    echo "Router Turned On";
    break;

  case "eoff":
    system ('gpio mode 3 out && gpio write 3 0');
    echo "Router Turned Off";
    break;

  case "con":
    system ('gpio mode 1 out && gpio write 1 1');
    echo "Charger Turned On";
    break;

  case "coff":
    system ('gpio mode 1 out && gpio write 1 0');
    echo "Charger Turned Off";
    break;

  default:
    echo "Wrong input";
  }

?>