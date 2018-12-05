<?php
    $directory=$_POST['dir_name'];
    if($handle=opendir($directory.'/'))
    {
        echo'<h3>The files inside the <strong><u>'.$directory.'</u></strong> are:<br></h3>';
        while($file=readdir($handle))
        {
            if($file!='.' &&  $file!='..')
            {
                echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
            }
        }
    }
    else
    {
        echo'<h3>There is no such directory!!Please check that once again.</h3';
    }
?>