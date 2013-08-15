<!-- http://coursesweb.net/html/html5-quick-tutorial_t -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang=”pt-br” class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang=”pt-br” class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang=”pt-br” class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang=”pt-br” class="no-js"> <!--<![endif]-->
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width">
	<meta name="author" content="Arthur VML - @art_vieira">
	<title>Arthur Vieira</title>
	
	<link rel="stylesheet" type="text/css" href="/css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="/css/cslider/frame.css">
	<link rel="stylesheet" type="text/css" href="/css/cslider/animations.css">
	<link rel="stylesheet" type="text/css" href="/fonts/Bariol-Regular/font.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	
	<script type="text/javascript" src="/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">Seu navegador está desatualizado! Por favor atualize <a href="http://browsehappy.com/">AQUI</a> seu navegador ou <a href="http://www.google.com/chromeframe/?redirect=true">ative Google Chrome Frame</a> para melhorar sua experiencia de navegação neste site.<p>
<![endif]-->
    
<div id="wrapper">
<section id="side">
	<nav>
		<a href="/home/">
			<div id="xm-bt-home" class="xm-bt">
			    <img class="xm-bt-img" src="/images/home.png" /> 
			    <div class="xm-bt-sub">arthur</div>
			</div>
		</a>
		
		<a href="/contact/">
			<div id="xm-bt-contact" class="xm-bt">
			    <img class="xm-bt-img" src="/images/contact.png" />    
			    <div class="xm-bt-sub">contact</div>
			</div>
		</a>
		
		<a href="/work/">
			<div id="xm-bt-work" class="xm-bt">
			    <img class="xm-bt-img" src="/images/work.png" /> 
			    <div class="xm-bt-sub">work</div>
			</div>
		</a>
		
		<a href="/bio/">
			<div id="xm-bt-bio" class="xm-bt">
			    <img class="xm-bt-img" src="/images/bio.png" />    
			    <div class="xm-bt-sub">bio</div>
			</div>
		</a>
	</nav>
	
	<aside style="clear:both; margin-left: 5px; display:none;">
		<span id="bt-es" class="multi-lang"><img src="/images/lang/es.png" height="28px" width="46" /></span>
		<span id="bt-ptbr" class="multi-lang"><img src="/images/lang/ptbr.png" height="28px" width="46" /></span>
		<span id="bt-en" class="multi-lang"><img src="/images/lang/en.png" height="28px" width="46" /></span>
	</aside>
</section>

<article id="content">
    <?php 
		if (isset($_GET['page'])) {
			include 'pages/'.$_GET['page'].'.php';
		} else {
			include 'pages/home.php';
		}
	?>
</article>        
    
<footer id="footer">
	<a href="http://art-vieira.deviantart.com" target="_blank">
		<img class="social-bt" src="/images/social/deviantart.png" />    
	</a>
	<a href="https://www.facebook.com/AVMLU" target="_blank">
		<img class="social-bt" src="/images/social/facebook.png" />
	</a>
	<a href="https://github.com/artvieira" target="_blank">    
		<img class="social-bt" src="/images/social/github.png" />  
	</a> 
	<a href="http://www.linkedin.com/pub/arthur-vieira/28/995/3b4" target="_blank"> 
		<img class="social-bt" src="/images/social/linkedin.png" />
	</a> 
	<a href="https://twitter.com/art_vieira" target="_blank">  
		<img class="social-bt" src="/images/social/twitter.png" /> 
	</a> 
	<a href="skype:arthurvmx5?call">  
		<img class="social-bt" src="/images/social/skype.png" /> 
	</a>   
	
	<span style="float:right; margin-top:8px; margin-right:5px; color:black;">
		arthur vieira m. lucena, 2013
	</span>
</footer>
</div>
    
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script type="text/javascript" src="/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script type="text/javascript" src="/js/vendor/jquery.cslider.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38393794-1']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>