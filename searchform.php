<?php get_header(); ?>

<div class="conteudo">
</div>

<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input type="text" id="search-field" name="s" placeholder="Faça sua pesquisa..." value="<?php the_search_query(); ?>">
    <input type="submit" id="searchsubmit" value=""/>
</form>

<div id="mininoticias">
<?php query_posts( 'showposts=3' ); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div id="miniaturas">
<?php if ( has_post_thumbnail() ) { ?>
<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&w=327&h=140&zc=1" alt="" /> <?php } else { ?>
<img src="<?php bloginfo('template_directory'); ?>/images/base-mini.jpg" alt=""  />
<?php } ?>
<div class="minidata"><div class="minidataa">	
<?php the_time('d') ?> <?php the_time('M') ?> <?php the_time('Y') ?>
</div></div>

<div class="minititulo"><div class="minitituloo">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</div></div>

<div id="minipost">
<div class="minipost">
	<?php $excerpt = get_the_excerpt(''); echo string_limit_words($excerpt,25);?> <a href="<?php the_permalink() ?>">(LEIA +)</a></div>
<div class="miniautor">
Publicado por: <b><?php the_author(); ?></b>
</div>
	
	
</div></div></div>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<div id="modocompleto"><div class="modocompleto">
<a href="http://meghanmarklebr.com/wp/noticias">ver em modo completo</a>
</div></div>
	

<div id="instituicoespalacio">
<div class="instituicoes">
<?php 
    echo do_shortcode("[metaslider id=22]"); 
?>
</div>
<div class="instit">Instituições e Patronagens</div>
	
<div class="palacio"><div class="palacio-titulo">O Palácio de Kensington nas Redes Sociais</div>
<a href="https://twitter.com/kensingtonroyal"><div class="palacio-twitter"></div></a>
<a href="https://www.instagram.com/kensingtonroyal/"><div class="palacio-instagram"></div></a>
	
	</div>
</div>

<div id="redes">
<div id="facebook"><div class="face"><div class="fb-like" data-href="https://facebook.com/katemiddletonbr" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></div>
<div id="facebookk">Nosso Facebook</div>	
</div>
	
<div id="instagram"><div class="insta">
<?php echo do_shortcode("[instagram-feed]"); ?></div>
<div id="instagramm">Nosso Instagram</div>
</div>
	
<div id="youtube">
<div class="yout">
<script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" style="font-family: Open Sans; font-size: 10px; color: #fff;" data-channelid="UCKra2IEkMu7fxWHnitOD53w" data-layout="full" data-count="default"></div></div>
<div id="youtubee">Nosso Canal</div>
</div>

<div id="twitter"><div class="twitter">
<?php echo do_shortcode( "[rotatingtweets screen_name='middletonbrasil' include_rts='1' show_meta_via='0' show_meta_screen_name='0' tweet_length='180' rotation_type='carousel' carousel_count='2']" ) ?><br>
<center><a href="https://twitter.com/middletonbrasil?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-lang="pt" data-show-count="false">Follow @middletonbrasil</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></center></div>
<div id="twiter">Nosso Twitter</div>	
</div>
	
<div id="agenda"><div id="agend">Agenda</div>
<div id="box">
<div id="data-agenda">01/09</div> 
<div id="evento">Visita a Place2Be</div><br>
<div id="data-agenda">06/10</div> 
<div id="evento">Visita a Norfolk com William</div>
<div id="data-agenda">14/10</div> 
<div id="evento">Visita ao Children's Hospice em Londres</div>
</div>
</div>
	
<div class="parceiros">
<?php echo do_shortcode("[metaslider id=32]"); ?><div id="parceiros">Parceiros</div>
</div>

<div id="ultimas"><div class="galeria">
Últimas da Galeria
	</div>
</div>

<div id="anuncio">
<div class="anuncio">
<!-- /7264022/Flaunt_bf728x90_Int -->
<div id='div-gpt-ad-1441281518158-0' style='height:90px; width:728px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1441281518158-0'); });
</script>
</div>
</div>
	</div></div>

<?php get_footer(); ?>