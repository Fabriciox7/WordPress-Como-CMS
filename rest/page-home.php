<?php
// Template Name: Menu da Semana
?>

<!-- adicionando HEADER -->
<?php get_header(); ?>

<section class="container">
			<h2 class="subtitulo"><?php the_title();?></h2>
			
			<?php if(have_rows('categoria_menu')): while(have_rows('categoria_menu')) :the_row(); ?>
		<div class="menu-prato grid-8">
				<h2><?php the_sub_field('nome_categoria'); ?> </h2>
				<ul>
					<li>
					<?php if(have_rows('prato_menu')): while(have_rows('prato_menu')) :the_row(); ?>
						<span><sup>R$</sup><?php the_sub_field('preco_prato') ?></span>
						<div>
							<h3><?php the_sub_field('nome_prato') ?></h3>
							<p><?php the_sub_field('descricao_prato') ?></p>
						</div>
						<?php endwhile; else : endif; ?> 
					</li>
				</ul>
			</div>
			<?php endwhile; else : endif; ?> 

		</section>
		<!-- adicionando FOOTER -->
		<?php get_footer(); ?>