<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thème du groupe #1</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">

<body>
	<div id="entete" class="global">
		<header class="entete_header">
			<h1>Thème du groupe #1 (h1)</h1>
			<h2>4W4 - Conception d'interface ry développement Web</h2>
			<h3>TIM - Collège de Maisonneuve</h3>
			<button class="bouton">Bomboclat</button>
			<div class="liens">
				<a href="#evenement" class="lien-section">Évènement</a>
				<a href="#footer" class="lien-section">Footer</a>
			</div>
		</header>
		<div class="vague">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-accueil);"></path>
			</svg>
		</div>
	</div>
	<div id="accueil" class="global">
		<section>
			<h2>Accueil (h2)</h2>
			<div class="cours">
				<?php
				if (have_posts()) :

					while (have_posts()) : the_post();
						$titre = get_the_title();
						$sigle = substr($titre, 0, 7);
						$duree = substr($titre, -6, 6);
						$titreCours = trim(substr($titre, 8, -5), $duree);
						// strpos()
				?>
						<div class="carte">
							<p><?php echo $sigle; ?></p>
							<h3><?php echo $titreCours; ?></h3>
							<p><?php echo $duree; ?></p>
							<p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
						</div>
					<?php endwhile; ?>
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
		<div class="vague">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-footer);"></path>
			</svg>
		</div>
	</div>
	<div id="footer" class="global">
		<footer>
			<h2>Footer (h2)</h2>
			<p>
				Lorem ipsum dolor sit amet consectetur, adipisicing elit.
				Minima earum alias dignissimos. Amet beatae cumque vero
				repellendus totam provident? Quae deleniti autem eum tempore
				recusandae dolorum consequatur veniam facere enim.
			</p>
		</footer>
	</div>
</body>

</html>