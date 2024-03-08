<?php get_header(); ?>
</div>

<div class="conteudo">
</div>

<div id="postsesidebar">
<?php get_sidebar(); ?>
	
<div class="posts">
<?php if (have_posts()) : ?>

<h1> Resultados da Pesquisa: <em>


<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e

(''); echo $count . ' '; _e

('resultados para'); _e

('&#8220;'); echo $key; _e('&#8221;'); 

 wp_reset_query(); ?></em>

</h1>



<?php query_posts($query_string.'&posts_per_page=10'); while (have_posts()) : the_post(); ?>	

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
	
<div id="intervalo"></div>	
	

<?php endwhile; ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php else : ?>
	
<h1> Nenhum resultado. </h1>

<?php endif; ?>
	
</div></div>
<?php get_footer(); ?>