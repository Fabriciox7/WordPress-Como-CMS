<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
	<!-- inicio do corpo do site -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH ."/inc/introducao.php"); ?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno">História, Missão e Visão</h2>
				<p><?php the_field('missao') ?></p>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno">Valores</h2>
				<p><?php the_field('valores') ?></p>
			</div>
			<div class="grid-16 foto-equipe">
				<img src="<?php the_field('imagem_equipe')?>" alt="Equipe Bikcraft">
			</div>

		</section>

	<!-- qualidade -->
	<?php include(TEMPLATEPATH . "/inc/qualidade.php")?>

		<!-- FIM do corpo do site -->
		<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		<?php get_footer(); ?>