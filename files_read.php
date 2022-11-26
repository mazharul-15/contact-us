<!-- Files Reading Program -->

<?php
    /*
        // File system processing function in PHP
        1. scandir()
        2. opendir()
        3. readdir()
        process
        files address in a string
        scandir(file_address)
    
    function printArray($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    //$file_address = 'D:\xampp\htdocs\contact-us';
    //$files = array();
    //$files = scandir($file_address);

    // array_diff checks between two array and returns unique values of first array.s
    //$files = array_diff($files, array('.', '..'));

    // reset the index from 0 to n of the array values
    //$files = array_values($files);
    
    // One line
    //$files = array();
   // $files = array_values(array_diff(scandir($file_address), array('.', '..')));
    //printArray($files);

    // By function
    function getAllFileName($dir) {
        return array_values(array_diff(scandir($dir), array('.', '..')));
    }

    $files = array();
    $dir = 'D:\xampp\htdocs\contact-us';
    $files = getAllFileName($dir);
    printArray($files);

    /*---------------------------------------------------------------------------------------------- 
                                        opendir() & readdir()
    -----------------------------------------------------------------------------------------------*/

    // using function
    /*function openAndreadDir($dir) {
        $new_file = array();
        if(is_dir($dir)) {
            if($hd = opendir($dir)) {
                while(($file = readdir($hd)) !== false) {
                    if($file != '.' && $file != '..') {
                        $new_file[] = $file;
                    }
                }
                closedir($hd);
            }
            return $new_file;
        }
    }

    $dir = 'D:\entertainment\pic\farewell';
    $files = array();
    $files = openAndreadDir($dir);
    printArray($files); */
    
    
?>

<?php 
    // printing array
    function printArray($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    // scan directory
    function scanfFile($dir) {
        return array_values(array_diff(scandir($dir), array('.', '..')));
    }

    $dir = 'D:\entertainment\pic\farewell';
    $files =array();
    $files = scanfFile($dir);
    echo '<h1>'+  +'</h1>';
    //printArray($files);
?>