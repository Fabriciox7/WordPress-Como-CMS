<?php
// Template Name: Single Produtos

$contato = get_page_by_title('contato');
?>

<?php get_header(); ?>
	<!-- inicio do corpo do site -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<section class="container produto_item animar-interno">
			<div class="grid-11">
				<img src="<?php the_field('foto_produto1');?>" alt="Bikcraft <?php the_title('');?>">
				<h2><?php the_title('');?></h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto');?>" alt="Icone <?php the_title('');?>"></div>
			<div class="grid-8"><img src="<?php the_field('foto_produto2');?>" alt="Bikcraft <?php the_title('');?>"></div>
			<div class="grid-8 produto_info">
				<?php the_content();?>
			</div>
		</section>

		<!-- ORÇAMENTOS -->
<?php include(TEMPLATEPATH ."/inc/produtos-orcamentos.php");?>
		<!-- FIM do corpo do site -->
		<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		<?php get_footer(); ?>