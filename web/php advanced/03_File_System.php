<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP file system</title>
</head>
<body>
    <?php
        $file = "data.txt";
        // READING THE FILE
        if(file_exists($file)){
            // read with fread()
            $handle = fopen($file,"r") or die("ERROR: Cannot open file.");
            $content = fread($handle,filesize($file));
            echo "$content<br>";

            // readfile() can read without opening the file
            readfile($file);
            echo "<br>";

            // file_get_contents() can also read without opening the file
            $content = file_get_contents($file);
            echo "$content<br>";

            // read with fread()
            $handle = fopen($file,"r") or die("ERROR: Cannot open file.");
            $content = fread($handle,filesize($file));
            echo "$content<br>";

            // file() -> return the file contents as an array of lines.
            // Reading the entire file into an array
            $arr = file($file);
            foreach($arr as $line){
                echo "$line<br>";
            }
        }else{
            echo "ERROR: File does not exist.";
        }

        // WRITING THE FILE
        $file = "note.txt";
        $data = "I really love badminton.";

        // write with fwrite()
        $handle = fopen($file,"w");
        fwrite($handle,$data);

        // file_put_contents() can write without opening the file
        file_put_contents($file,$data,FILE_APPEND);
        // Closing the file
        fclose($handle);

        // RENAMING FILES
        $file = "note.txt";
        if(file_exists($file)){
            if(rename($file,'newfile.txt')){
                echo " File renamed successfully.";
            }else{
                echo "ERROR: File cannot be renamed.";
            }
        }else{
            echo "ERROR: File does not exist.";
        }

        // REMOVING FILES
        $file = "newfile.txt";
        if(file_exists($file)){
            if(unlink($file)){
                echo "File removed successfully.";
            }else{
                echo "ERROR: File cannot be removed.";
            }
        }else{
            echo "ERROR: File does not exist.";
        }
    ?>
</body>
</html>

<!-- NOTE
fgetc()	Reads a single character at a time.
fgets()	Reads a single line at a time.
fgetcsv()	Reads a line of comma-separated values.
filetype()	Returns the type of the file.
feof()	Checks whether the end of the file has been reached.
is_file()	Checks whether the file is a regular file.
is_dir()	Checks whether the file is a directory.
is_executable()	Checks whether the file is executable.
realpath()	Returns canonicalized absolute pathname.
rmdir()	Removes an empty directory. -->