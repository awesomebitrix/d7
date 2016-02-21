<?php 
echo $_SERVER['DOCUMENT_ROOT'];

$_SERVER['DOCUMENT_ROOT']  = '/newpath';



echo '<br> ' . $_SERVER['DOCUMENT_ROOT'];


?>