<?php
$directory=$_POST['directory'];
$filename=$_POST['file'];
$path=$directory.'/'.$filename;
if(@unlink($path))
    echo'<strong>'.$filename.'</strong> has been successfully deleted!!';
else echo"No such file exists!!Please Check that once.";
?>