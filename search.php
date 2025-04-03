<?php get_header(); ?>

<section id="ReturnToTop" class="s-resultados-inicio">
    <div class="container">
        <p class="subtitulo">BLOG</p>
        <h2>Nossas Notícias</h2>     
    </div>
</section>

<section class="s-resultados">
    <div class="container">
        <h2>Resultados para: <span><?php echo get_search_query(); ?></span></h2>

        <?php if ( have_posts() ) : ?>
            <div class="results-container">
                <?php while ( have_posts() ) : the_post(); ?>
                    <li class="card-noticia">
                            <a href="<?php the_permalink(); ?>">
                                <div class="top">
                                    <div class="capa-da-noticia">
                                        <?php the_post_thumbnail('post-default');?>
                                    </div>
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_excerpt();?></p>
                                </div>
                                <div class="bottom">
                                    <div class="icon-relogio">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/icone-relogio.svg" alt="">
                                    </div>
                                    <p class="text-data"><?php the_time( 'j F, Y' )?></p>
                                </div>
                            </a>
                    </li>
                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p>Nenhum resultado encontrado para sua pesquisa.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
