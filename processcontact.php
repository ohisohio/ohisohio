<?php 
$filename=$_POST['first_name'];
$myfile = fopen("$filename.txt", "w");
$txt = $_POST['first_name']."\n";
fwrite($myfile, $txt);
$txt = $_POST['last_name']."\n";
fwrite($myfile, $txt);
$txt = $_POST['email']."\n";
fwrite($myfile, $txt);
$txt = $_POST['gender']."\n";
fwrite($myfile, $txt);
$txt = $_POST['department']."\n";
fwrite($myfile, $txt);
$txt = $_POST['subject']."\n";
fwrite($myfile, $txt);
$txt = $_POST['maininfo']."\n";
fwrite($myfile, $txt);
$txt = $_POST['agreement']."\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "Form Successfully Submitted and File Created";
?>