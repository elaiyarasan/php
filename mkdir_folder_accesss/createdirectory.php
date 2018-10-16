<?php 
$date=$_POST['date'];
if($date!=NULL)
{
mkdir($date,0700);
chmod($date, 0777);
// while()
$source='image/';
$dest=$date;

function xcopy($source, $dest, $permissions = 0755)
{
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }

    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest, $permissions);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        xcopy("$source/$entry", "$dest/$entry", $permissions);
    }

    // Clean up
    $dir->close();
    return true;
}

xcopy($source, $dest);















    // if(is_dir($source)) {
    //     $dir_handle=opendir($source);
    //     $sourcefolder = basename($source);
    //     mkdir($dest."/".$sourcefolder);
    //     while($file=readdir($dir_handle)){
    //         if($file!="." && $file!=".."){
    //             if(is_dir($source."/".$file)){
    //                 self::chmod(copy($source."/".$file, $dest."/".$sourcefolder),0777);
    //             } else {
    //                 chmod(copy($source."/".$file, $dest."/".$file),0777);
    //             }
    //         }
    //     }
    //     closedir($dir_handle);
    // } else {
    //     // can also handle simple copy commands
    //     chmod(copy($source, $dest),0777);
    // }
}

?>