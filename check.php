<?php
$option=$_POST['option'];
$redirect_page=NULL;
if($option=='Listing')
    $redirect_page='http://localhost/PHP_Practice/File Handling/list.php';
if ($option=='Delete')
    $redirect_page='http://localhost/PHP_Practice/File Handling/delete.php';
if ($option=='Uploading')
    $redirect_page='http://localhost/PHP_Practice/File Handling/upload.php';
if($option=='Rename')
    $redirect_page='http://localhost/PHP_Practice/File Handling/rename.php';

header('Location:'.$redirect_page);  


    
?>