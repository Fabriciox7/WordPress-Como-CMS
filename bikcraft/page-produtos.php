<?php
// Template Name: Produtos
?>
<?php get_header(); ?>
	<!-- inicio do corpo do site -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH ."/inc/introducao.php"); ?>


<?php
// usando wp query
	$args = array (
		'post_type' => 'produtos',
		'order' => 'ASC'
	);
	$the_query = new WP_Query ( $args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<section class="container produto_item animar-interno">
		<a href="<?php the_permalink();?>">	
			<div class="grid-11">
				<img src="<?php the_field('foto_produto1');?>" alt="Bikcraft <?php the_title('');?>">
				<h2><?php the_title('');?></h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto');?>" alt="Icone <?php the_title('');?>"></div>
			</a>	
</section>
<?php endwhile; else: endif; ?>
<!-- resetar loop específico -->			
<?php wp_reset_query(); wp_reset_postdata();?>
<!-- ORÇAMENTOS -->
<?php include(TEMPLATEPATH ."/inc/produtos-orcamentos.php");?>
		<!-- FIM do corpo do site -->
		<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		<?php get_footer(); ?>