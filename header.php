<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset= />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600,600italic,400italic,300italic,300" rel="stylesheet"> 
<link rel="stylesheet" href="style.css" type="text/css" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php if ( is_singular() && get_option( 'thread_comments' ) )	wp_enqueue_script( 'comment-reply' ); wp_head();?>

<script type="text/javascript">
$(document).ready(function() {
//Quotes rotator
var divs = $('.cbp-qtcontent');

function fade() {
var current = $('.current');
var currentIndex = divs.index(current),
nextIndex = currentIndex + 1;

if (nextIndex >= divs.length) {
nextIndex = 0;
}

var next = divs.eq(nextIndex);

next.stop().fadeIn(1500, function() {
$(this).addClass('current');
});

current.stop().fadeOut(1500, function() {
$(this).removeClass('current');
_startProgress()
setTimeout(fade, 8000);
});
}

function _startProgress(){
$(".cbp-qtprogress").removeAttr('style');
$(".cbp-qtprogress").animate({
width:"700px",
} , 8000);
}

_startProgress()
setTimeout(fade, 8000);
});
</script>

<?php wp_head(); ?>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	
<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/7264022/Flaunt_728x90_Int', [728, 90], 'div-gpt-ad-1441212117357-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
	
<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/7264022/Flaunt_bf728x90_Int', [728, 90], 'div-gpt-ad-1441281518158-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
	
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11&appId=1131019270327942';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="header">
  
<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input type="text" id="search-field" name="s" placeholder="Faça sua pesquisa..." value="<?php the_search_query(); ?>">
    <input type="submit" id="searchsubmit" value=""/>
</form>	
	
        <div id="menu">
            <li><a href="http://katemiddletonbrasil.com">Home</a></li>
            <li><a href="http://katemiddletonbrasil.com/kate-duquesa-de-cambridge">A Duquesa</a></li>
            <li><a href="http://katemiddletonbrasil.com/galeria">Galeria</a></li>
            <li><a href="http://katemiddletonbrasil.com/site">Site</a></li>
			<li><a href="http://katemiddletonbrasil.com/contato">Contato</a></li>
	</div>
	</div>

	
<div id="welcome">
Seja bem-vindo ao <b>Kate Middleton Brasil</b>, sua maior fonte em português sobre a Duquesa de Cambridge. Casada com o Príncipe William, 2º na linha de sucessão ao trono britânico, Kate é uma das mulheres mais acompanhadas e admiradas no mundo. Aqui você irá encontrar as últimas notícias, um acervo com +45.000 fotos, além de documentários e mais.
</div>			
	
<div id="anuncio">
<div class="anuncio">
<!-- /7264022/Flaunt_728x90_Int -->
<div id='div-gpt-ad-1441212117357-0' style='height:90px; width:728px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1441212117357-0'); });
</script>
</div>
</div></div>
			
<div class="conteudo">