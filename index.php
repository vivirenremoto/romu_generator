<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';

$path = 'mp4/' . $id . '.mp4';

$default = 'mp4/spam-de-valor.mp4';

if (strstr($id, './')) {
    $path = $default;
}

if (!file_exists($path)) {
    $path = $default;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Romuald Fons Generator</title>

<?php if (isset($_GET['id'])): ?>
<meta name="robots" content="noindex" />
<?php endif?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Inventa una nueva técnica de marketing">


<meta property="og:image" content="https://vivirenremoto.com/romu_generator/captura.png">
<meta property="og:image:secure_url" content="https://vivirenremoto.com/romu_generator/captura.png">
<meta property="og:image:alt" content="Romuald Fons Generator">
<meta property="og:image:type" content="image/png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Romuald Fons Generator">
<meta name="twitter:image" content="https://vivirenremoto.com/romu_generator/captura.png">



</head>
<body>

<style>
*{font-family:arial;}
BODY{text-align:center;}
INPUT, BUTTON{font-size:30px;text-align:center;}
video{background:black;}

@media only screen and (max-width: 480px){
	img{max-width:100%;}
	BODY{padding:10px;}
	h1{font-size:20px;}
	video{max-width:100%;height:320px;background:black;}
	input,button{width:90%;margin:auto;}
	button{margin-bottom:20px;}
	.share span{display:none;}
	.share a{display:block;margin-bottom:10px;padding:10px 0;background:#fafafa;}
}
</style>



<h1>Romuald Fons Generator</h1>


<?php if (isset($_GET['id'])): ?>
	<p>Aquí tienes el vídeo, dale al play y compartelo 👇👇👇</p>
<?php endif?>



 <video width="640" height="440" controls id="vid">
  <source src="<?=$path?>" type="video/mp4">
Your browser does not support the video tag.
</video>


<!--<iframe src="<?=$path?>" width="640" height="360" style="border:1px black solid;"></iframe>

<br>

<p><b>Compartir</b></p>

<p class="share">
<a href="#" onclick="return share(this)">Twitter</a>
<span> · </span>
<a href="#" onclick="return share(this)">Facebook</a>
<span> · </span>
<a href="#" onclick="return share(this)">Linkedin</a>
<span> · </span>
<a href="#" onclick="return share(this)">Whatsapp</a>
<span> · </span>
<a href="#" onclick="return share(this)">Telegram</a>
</p>-->

<br>
<br>

<p><b>Inventa una nueva estrategia</b></p>

<form method="post" action="generate.php">
	<input required="required" type="text" name="text" id="text" placeholder="Texto - max 23 chars" maxlength="23" size="25" value=""><br><br>
	<button type="submit" >Generar</button>

	<?php if (isset($_GET['id'])): ?>
	 <button type="button" onclick="window.open('https://vivirenremoto.com/romu_generator/<?=$path?>')" >Descargar</button>
	<?php endif?>

</form>

<br>

<h2 style="color:green">¿Eres Romuald Fons?</h2>
<p>he pensado que sería una forma original de llamar tu atención para que conozcas mi plugin de afiliados <a href="https://vivirenremoto.com/wpcomparator/" target="_blank">wpcomparator</a><br>
si te ha gustado mi estrategia sería genial si lo pudieras compartir con todos los furiosos del marketing.</p>
<p style="font-size:10px">p.d. espero que no te moleste y no me denuncies por esto</p>

<br>

<h2>¿No eres Romuald Fons?</h2>
<p>espero que inventes nuevas estrategias de marketing y me ayudes a compartir esto hasta que lo vea Romuald Fons</p>


<p class="share">
<a href="#" onclick="return share(this)">Twitter</a>
<span> · </span>
<a href="#" onclick="return share(this)">Facebook</a>
<span> · </span>
<a href="#" onclick="return share(this)">Linkedin</a>
<span> · </span>
<a href="#" onclick="return share(this)">Whatsapp</a>
<span> · </span>
<a href="#" onclick="return share(this)">Telegram</a>
</p>


<br>

<h2>✓ Reto desbloqueado</h2>

<p><img src="dance.gif"></p>

<p>
<a href="https://twitter.com/RomualdFons/status/1264971431638700040" target="_blank"><img src="tweet.png" style="border:5px black solid;padding:10px;"></a>
</p>



<br><br>

<p>💡 Otra idea absurda de <a href="https://twitter.com/vivirenremoto/" target="_blank">@vivirenremoto</a></p>


<p>👉 ¿Más absurdeces? <a href="https://vivirenremoto.com/5minuteschallenge/" target="_blank">5 Minutes Challenge</a></p>

<br><br><br>


<script>
document.getElementById('vid').play();

function share(obj){
	var via = obj.textContent;

	var text = '🔴 Inventa una nueva estrategia de marketing con... ¡Romuald Fons Generator! cc @romualdfons 👇👇👇 ';
	var url = document.location.href;

	var open_url;

	if( via == 'Twitter' ){
		open_url = 'https://twitter.com/intent/tweet?text=' + encodeURIComponent(text+url);
	}else if( via == 'Facebook' ){
		open_url = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url) + '&t=' + encodeURIComponent(text);
	}else if( via == 'Linkedin' ){
		open_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(url);
	}else if( via == 'Whatsapp' ){
		open_url = 'whatsapp://send?text=' + encodeURIComponent(text + url);
	}else if( via == 'Telegram' ){
		open_url = 'https://telegram.me/share/url?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text);
	}

	if( open_url ) window.open(open_url);

	return false;
}
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114321266-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114321266-1');
</script>

</body>
</html>
