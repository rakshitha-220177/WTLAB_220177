<?php

echo "<h2>File Read and Write Functions</h2>";

$filename="file.txt";

$file = fopen($filename, "w");
fwrite($file, "odiyamma buntyy\n");
fwrite($file, "raktha pinjarroi\n");
fclose($file);

echo "<h3> fread()</h3>";
$file = fopen($filename, "r");
echo nl2br(fread($file, filesize($filename)));
fclose($file);

echo "<h3> file_get_contents()</h3>";
echo nl2br(file_get_contents($filename));

echo "<h3> file_put_contents()</h3>";
file_put_contents($filename,"mawa idhi rasindhi file_put_contents() use cheskoni\n", FILE_APPEND);
echo "oyamma chinna sekalu levuu<br>";

echo "<h3>read() function use cheskoni line by line</h3>";
$lines = file($filename);
foreach($lines as $line){
    echo $line."<br>";
}
echo "<h2>file info functions</h2>";
$filename = "file.txt";
file_put_contents($filename, "information functions ki sample .");
echo "<h3>1. file_exists()</h3>";
if(file_exists($filename)){
    echo"File exists<br>";
}else{
    echo"File not found<br>";
}
echo "<h3>2. filesize()</h3>";
echo "File Size:".filesize($filename)." bytes<br>";
echo "<h3>3.filetype()</h3>";
echo "File Type: ".filetype($filename)."<br>";
echo "<h3>4. fileatime()</h3>";
echo "Last Access Time:".date("Y-m-d H:i:s",fileatime($filename))."<br>";echo "<h3>5. filemtime()</h3>";
echo "Last Modified Time:".date("Y-m-d H:i:s", filemtime($filename))."<br>";
echo "<h3>6. filectime()</h3>";
echo "Creation Time: ".date("Y-m-d H:i:s",filectime($filename)) . "<br>";echo"<h3>7. fileperms()</h3>";
echo "Permissions: ".substr(sprintf('%o',fileperms($filename)), -4)."<br>";
echo "<h3>8. fileowner()</h3>";
echo "Owner ID: ".fileowner($filename) . "<br>";
echo "<h3>9. filegroup()</h3>";
echo "Group ID: ".filegroup($filename) . "<br>";
echo "<h3>10. fileinode()</h3>";
echo "Inode Number: ".fileinode($filename) . "<br>";
echo "<h1>file and folder management functions</h1>";
file_put_contents("demo.txt","Hello World");
mkdir("myFolder");
copy("file.txt","myFolder/file_copy.txt");
rename("myFolder/file_copy.txt","myFolder/renamed.txt");
if(is_file("file.txt")){
    echo"file.txt is a file<br>";
}

if(is_dir("myFolder")){
    echo"myFolder is a directory<br>";
}
unlink("myFolder/renamed.txt");
rmdir("myFolder");
echo "<h1> directory handling functions</h1>";
mkdir("demoDir");
file_put_contents("demoDir/file1.txt","File 1");
file_put_contents("demoDir/file2.txt","File 2");
echo"<h3>1. getcwd()</h3>";
echo"Current Working Directory:".getcwd()."<br>";
echo"<h3>2.scandir()</h3>";
$files=scandir("demoDir");
foreach($files as $file){
    echo $file."<br>";
}
echo"<h3>3.opendir(),readdir(),closedir()</h3>";
$dir=opendir("demoDir");
while(($file=readdir($dir))!==false){
    echo $file."<br>";
}
closedir($dir);
echo "<h3>4. chdir()</h3>";
chdir("demoDir");
echo "Changed Directory: " . getcwd() . "<br>";
chdir("..");
unlink("demoDir/file1.txt");
unlink("demoDir/file2.txt");
rmdir("demoDir");
echo"<h2>File ni dacheskundhama bigiluuu</h2>";
$filename="lockdemo.txt";
$file=fopen($filename, "a");
if(flock($file,LOCK_EX)){
    fwrite($file,"Writing with exclusive lock\n");
    echo"File locked and written successfully<br>";
    flock($file,LOCK_UN);
    echo"File unlocked<br>";
}else{
    echo"Could not lock the file<br>";
}
fclose($file);
echo"<h3>File Content:</h3>";
echo nl2br(file_get_contents($filename));
?>
