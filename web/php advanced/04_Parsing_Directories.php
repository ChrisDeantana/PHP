<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP parsing directories</title>
</head>
<body>
    <?php
        // // CREATING NEW DIRECTORY
        // $dir = "backup";
        // if(!file_exists($dir)){
        //     if(mkdir($dir)){
        //         echo "Directory created successfully.<br>";
        //     }else{
        //         echo "ERROR: Directory could not be created.<br>";
        //     }
        // }else{
        //     echo " ERROR: Directory already exists.<br>";
        // }

        // // COPYING FILES
        // $file = "data.txt";
        // $newfile = "backup/data.txt";
        // if(file_exists($file)){
        //     if(copy($file, $newfile)){
        //         echo "File copied successfully.<br>";
        //     } else{
        //         echo "ERROR: File could not be copied.<br>";
        //     }
        // } else{
        //     echo "ERROR: File does not exist.<br>";
        // }

        // // LISTING ALL FILES IN A DIRECTORY
        // function outputFiles($path){
        //     if(file_exists($path) && is_dir($path)){
        //         $result = scandir($path);
        //         // Filter out the current (.) and parent (..) directories
        //         $files = array_diff($result,array('.','..'));
                
        //         if(count($files)>0){
        //             foreach($files as $file){
        //                 if(is_file("$path/$file")){
        //                     echo $file . "<br>";
        //                 }else if(is_dir("$path/$file")){
        //                     outputFiles("$path/$file");
        //                 }
        //             }
        //         }else{
        //             echo "ERROR: No files found in the directory.<br>";
        //         }
        //     }else{
        //         echo "ERROR: The directory does not exist.<br>";
        //     }
        // }

        // outputFiles("backup");

        // LISTING ALL FILES OF A CERTAIN TYPE
        function outputFiles($path){
            if(file_exists($path) && is_dir($path)){
                $files = glob($path ."/*php");
                if(count($files) > 0){
                    foreach($files as $file){
                        if(is_file("$file")){
                            echo basename($file) . "<br>";
                        } else if(is_dir("$file")){
                            outputFiles("$file");
                        }
                    }
                } else{
                    echo "ERROR: No such file found in the directory.";
                }
            } else {
                echo "ERROR: The directory does not exist.";
            }
        }
        outputFiles(".");
    ?>
</body>
<html>