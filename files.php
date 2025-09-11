<!-- $_FILES
 ---------
 by using e superglobal variavle 4$ files [][]we can get the information of roloaded files  . it can row demecsionall arry a variable contains 6 elements. 
 each eelements is porvidingsome information avout infoemation about tploadd files.
 each elements is ptovidinng some information sabout duploaded file .
 
 if user uploasede a file from broser to server that file store in trmporaty memory location on server with uniwuee name .
 we should wcecute php scrjipt to move dtaat file ftom tempotatu memot y location to permanent menmoty location .
 $_files["f1"]["size "], contain size of the files 
    $_files["f1"]["type "], contain type of the files
    $_files["f1"]["tmp_name "], contain temp name of the files
    $_files["f1"]["error "], contain error of the files
    $_files["f1"]["name "], contain name of the files
    $_files["f1"]["full_path "], contain full_path of the files
    move_uploaded_file($_files["f1"]["tmp_name"],"uploads/".$_files["f1"]["name"]);
    it is used to move the uploaded file from temporary location to a permanent location.
    it returns true if the file is moved successfully, otherwise it returns false.
    "uploads/".$_files["f1"]["name"] is the destination path where the file will be moved.
    "uploads/" is the directory where the file will be moved.
 
 -->

<!--/* 
// print_r($_FILES["f1" ]);
?>*/

<form method="post" enctype="multipart/form-data">
    <input type="file" name="f1"><br>
    <input type="submit" name="btn" value="Click">
    -->
</form> 

<!-- 
MIME (mulipurpise intdenet mailing extenson ) 

it is a type of  extension use to upload a file from browser to serber .
ever y file contain MIME type .
.jpg - image/jpeg
.png - image/png
.pdf - application/pdf
.doc - application/msword
.txt - text/plain
.gif - image/gif
.mp4 - video/mp4
.mp3 - audio/mpeg
    .zip - application/zip
    .rar - application/x-rar-compressed
    .csv - text/csv
    .html - text/html
    .css - text/css
    .js - application/javascript
    .json - application/json
    .xml - application/xml
    .ppt - application/vnd.ms-powerpoint
    .xls - application/vnd.ms-excel
    .xlsx - application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
    .avi - video/x-msvideo
    .mov - video/quicktime
    .wmv - video/x-ms-wmv
    .flv - video/x-flv
    .mkv - video/x-matroska
    .ogg - application/ogg
    .wav - audio/wav
    .aac - audio/aac
    .flac - audio/flac
    .tiff - image/tiff
    .bmp - image/bmp
    .svg - image/svg+xml
    .webp - image/webp
    .php - application/x-httpd-php
    .exe - application/octet-stream
    .iso - application/x-iso9660-image
    .tar - application/x-tar
    .gz - application/gzip
    .7z - application/x-7z-compressed
    .epub - application/epub+zip
    .md - text/markdown
    .rtf - application/rtf
    .psd - image/vnd.adobe.photoshop
    .ai - application/postscript
    .eps - application/postscript
    .swf - application/x-shockwave-flash
    .ttf - font/ttf
    .woff - font/woff
    etc.
    mulitpart/form-data : it is atype of MIME extension can support any type of data i.e text, number, array, object etc.
    Html form tag contains enctype attribute ,using this we can specify type of file 
    .

-->
    

<?php
//  if (isset($_REQUEST['btn']))
// $name=$_FILES['f']['name'];
//  $temp_name=$_FILES['f']['tmp_name'];
//     move_uploaded_file($temp_name,"uploads/".$name);
//     echo "file uploaded successfully";  



$_ENV=getenv();
print_r($_ENV);
echo $_ENV["OS"];
echo "<br>";
echo $_ENV["USERNAME"];
echo "<br>";
echo $_ENV["COMPUTERNAME"];
echo "<br>";
echo $_ENV["HOMEPATH"];
echo "<br>";
echo $_ENV["PROCESSOR_IDENTIFIER"];
echo "<br>";
echo $_ENV["NUMBER_OF_PROCESSORS"];



print_r($_SERVER);
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["SERVER_PORT"];
echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["SCRIPT_NAME"];
echo "<br>";
echo $_SERVER["HTTP_USER_AGENT"];
echo "<br>";
echo $_SERVER["REMOTE_ADDR"];

echo "<br>";
echo $_SERVER["REQUEST_METHOD"];
$name="seeree";
function show()
{
    global $name;
    echo "the name is : $name";
}
show();



?>
<!-- // <form method="post " enctype="multipart/form-data">
//     <input type="file" name="f"><br>
//     <input type="submit" name="btn" value="Submit">



</form> -->







