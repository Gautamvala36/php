<?php
// define ()
define("name","Gautam vala");
echo "My Name is ";
echo name;
echo "<br><br>";
// empty()
$temp = "ABC";
if(empty($temp)==true)
{
     echo "it is empty ";
}
else
     echo "it is not empty ";
echo "<br><br>";
// is_numeric()
if(is_numeric($temp))
{
     echo "temp is numeric ";
}
else
     echo"temp is not numeric ";

echo "<br><br>";

echo "This is php self : ".$_SERVER['PHP_SELF'];
echo "<br>";
echo "This is server name : ".$_SERVER['SERVER_NAME'];
echo "<br>";
echo "This is servr software : ".$_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "This is request method : ".$_SERVER['REQUEST_METHOD'];
echo "<br>";
echo "This is request time : ".$_SERVER['REQUEST_TIME'];
echo "<br>";
echo "This is query string : ".$_SERVER['QUERY_STRING'];
echo "<br>";
echo "This is document root : ".$_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo "This is http user agent : ".$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "This is remote addr : ".$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "This is script fulename : ".$_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo "This is script name : ".$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "This is request url : ".$_SERVER['REQUEST_URI'];
echo "<br>";
?>