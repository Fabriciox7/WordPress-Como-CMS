
		<footer>
			<nav class="nav-footer">
			<?php 
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu($args);
					?>
			</nav>

			<p>Rest © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
		</footer>
  <!-- footer wordpress -->
  <?php wp_footer();?>
    <!-- Fecha footer wordpress -->

	</body>
</html>