<?php get_header(); ?>
<div id="entete" class="global">
	<section class="entete_header">
		<h1><?php echo get_bloginfo("name"); ?></h1>
		<h2><?php echo get_bloginfo("description"); ?></h2>
		<h3>TIM - Collège de Maisonneuve</h3>
		<button class="bouton">Bomboclat</button>
		<div class="liens">
			<a href="#evenement" class="lien-section">Évènement</a>
			<a href="#footer" class="lien-section">Footer</a>
		</div>
	</section>
	<!-- <div class="vague">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-accueil);"></path>
			</svg>
		</div> -->
	<?php get_template_part('gabarits/vague') ?>
</div>
<div id="accueil" class="global">
	<section>
		<h2>Accueil (h2)</h2>
		<div class="destinations">
			<!-- Séparation des composants du sigle, titre du cours et durée -->
			<?php
			$args = array(
				'category_name' => 'Populaire'
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
					<div class="carte">
						<h3><?php the_title(); ?></h3>
						<p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
						<?php the_category(); ?>
						<a href="<?php the_permalink() ?>">Suite</a>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query 
				?>
			<?php endif; ?>
		</div>
	</section>
</div>
<div id="evenement" class="global diagonale">
	<section>
		<h2>Évènement (h2)</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			Perferendis illum numquam quibusdam quas accusamus obcaecati
			ullam perspiciatis minima soluta, ipsam quae rerum alias
			delectus accusantium nobis error. Facere, obcaecati rem.
		</p>
	</section>
</div>
<div id="galerie" class="global">
	<section>
		<h2>Galerie (h2)</h2>
		<p>
			Lorem ipsum dolor sit amet consectetur, adipisicing elit.
			Eum, adipisci eius omnis tempore vel alias, quasi excepturi
			praesentium eligendi deserunt dolor temporibus enim, ex
			architecto nesciunt odit quos recusandae distinctio?
		</p>
	</section>
	<!-- Vague -->
	<?php get_template_part('gabarits/vague') ?>
</div>
<?php get_footer(); ?>