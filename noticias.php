<?php 
/* Template Name: Noticias*/ 
?>

<?php get_header(); ?>
</div>

<div class="conteudo">
</div>

<div id="postsesidebar">
<?php get_sidebar(); ?>
	
<div class="posts">
<?php query_posts("paged=$paged"); if (have_posts()) : while (have_posts()) : the_post(); ?>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
<div class="postsimg">
<?php if ( has_post_thumbnail() ) { ?>
<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&w=690&h=400&zc=1" alt="" /> <?php } else { ?>
<img src="<?php bloginfo('template_directory'); ?>/images/base.jpg" alt=""  />
<?php } ?></div>
	
<div class="post-title"></div><div class="titulo">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>	
	
<div class="datapost"><div class="data">
<?php the_time('d') ?> <?php the_time('M') ?> <?php the_time('Y') ?>
</div></div>
	
	
<div id="conteudopost"> <div class="texto">
<?php the_content('Continue lendo &nbsp;&raquo;'); ?>
</div></div>

<div id="footerpost">
<div id="autor"><div id="autorr">
Publicado por: <b><?php the_author(); ?></b>
</div></div>
	</div>	
	
<div id="intervalo"></div></div>	
		
	
<?php endwhile; ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php else : ?>
<?php endif; ?>

</div></div>	

<?php get_footer(); ?>