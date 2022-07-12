<?php 
 $DB_Server = "localhost";
 $DB_Username = "root"; 
 $DB_Password = "yourpassword"; 
 $DB_DBName = "library";
$DB_TBLName = "book_info";

$Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Couldn't connect."); 
 mysql_query("set names utf8"); 
 date_default_timezone_set("PRC");
$savename = date("YmjHis");
$file_type = "vnd.ms-excel"; 
 $file_ending = "xls"; 
 header("Content-Type: application/$file_type;charset=utf-8"); 
 header("Content-Disposition: attachment; filename=".$savename.".$file_ending"); 
header("Pragma: no-cache"); 
 $now_date = date("Y-m-j H:i:s"); 
 $title = "数据库名:$DB_DBName,数据表:$DB_TBLName,备份日期:$now_date"; 
 echo iconv("utf-8","gbk",$title)."\n"; 
 $sql = "Select book_id,name,author,publish,language,price,pubdate,class_id,pressmark from $DB_TBLName"; 
 $ALT_Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database"); 
 $result = @mysql_query($sql,$Connect) or die(mysql_error()); 
for ($i = 0; $i < mysql_num_fields($result); $i++) { 
  echo mysql_field_name($result,$i) . "\t"; 
 } 
 echo "\n";
 $sep = "\t"; 
 while($row = mysql_fetch_row($result)) { 
  $data = ""; 
   for($i=0; $i<mysql_num_fields($result);$i++) { 
    if(!isset($row[$i])) 
     $data .= "NULL".$sep;
   elseif ($row[$i] != ""){
     $datmp=iconv("utf-8", "gbk",$row[$i]);
     $data .= $datmp.$sep; 
   }
    else 
     $data .= "".$sep;
  } 
  echo $data."\n"; 
 }
 ?> 