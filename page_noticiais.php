<?php
//Template name: Página de Notícias
?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section  id="ReturnToTop" class="s-hero-interna">
            <div class="container">
                <div class="titulo">
                    <div class="logo-hospital">
                        <img src="<?php the_field('acf_logo_de_fundo_1') ?>" alt="">
                    </div>
                    <h2><?php the_field('acf_titulo_da_secao_inicial_das_noticias') ?></h2>
                </div>
                <div class="logo-do-centro">
                    <img src="<?php the_field('acf_logo_de_fundo_2') ?>" alt="">
                </div>
                <div class="imagem-logo-da-direita">
                    <img src="<?php the_field('acf_imagem_da_secao_inicial_das_noticias') ?>" alt="">
                </div>
            </div>
            <div class="sobreposicao">

            </div>
    </section>

    <div class="s-content-noticias">
        <div class="container">
            <ul class="noticias">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                    );
                    $category_query = new WP_Query( $args );
                    if ($category_query->have_posts()): while ($category_query->have_posts()) : $category_query->the_post(); ?>
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
				<?php endwhile; ?><?php wp_reset_postdata(); ?> <?php else : ?>
				<p><?php _e( 'Desculpe, essa categoria não tem notícias.' ); ?></p>
				<?php endif; ?>  
            </ul>
        </div>
    </div>
    
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>