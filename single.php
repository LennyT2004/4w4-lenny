
    <?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
            <div class="cours">
                <!-- Séparation des composants du sigle, titre du cours et durée -->
                <?php if (have_posts()) : the_post(); ?>
                    <div class="carte">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endif; ?>
            </div>
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
        <!-- Ajoute un lien vers l'article -->
        <?php get_template_part('gabarits/vague') ?>
    </div>
    <?php get_footer(); ?>