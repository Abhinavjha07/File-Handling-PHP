<?php
$directory=$_POST['directory'];


$filename=$_POST['file'];
$re_filename=$directory.'/'.$_POST['re_file'];
$path=$directory.'/'.$filename;
if(@rename($path, $re_filename))
    echo"File has been successfully renamed!!";
else echo"Error in renaming.";
?>