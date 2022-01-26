<?php
$val = $_GET["data"];
$fileContent=$val."\n";
$fileStatus=file_put_contents("datastorage.txt",$fileContent,FILE_APPEND);
if($fileStatus == true)
{
 echo "SUCCESS. Data written in file.";
} 7
8
else
{
 echo "FAIL. Could not connect to file.";
}
?>