<?php
$name=$_FILES['file']['name'];

$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$tmp_name=$_FILES['file']['tmp_name'];
$maxSize=1000000;
    if(isset($name))
    {
        if(!empty($name))
        {
            $name_array=explode('.', $name);
            $extension=end($name_array);
            if(($extension=='jpg' || $extension=='jpeg') &&($type=='image/jpeg') && $size<=$maxSize)
            {
            $location='uploads';
            if(move_uploaded_file($tmp_name, $location.'/'.$name))
            echo'Uploaded';
            else 
                echo"Error";
            }
            else echo"file has to be .jpeg/jpg and less than 1 MB.";
        }
        else
            echo"Please choose a file.<br>";
    }
?>