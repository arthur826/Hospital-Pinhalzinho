<?php
//Template name: Página Galeria
?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section id="ReturnToTop" class="s-hero-interna">
            <div class="container">
                <div class="titulo">
                    <div class="logo-hospital">
                        <img src="<?php the_field('acf_logo_de_fundo_1') ?>" alt="">
                    </div>
                    <h2><?php the_field('acf_titulo_da_secao_inicial_galeria') ?></h2>
                </div>
                <div class="logo-do-centro">
                    <img src="<?php the_field('acf_logo_de_fundo_2') ?>" alt="">
                </div>
                <div class="imagem-logo-da-direita">
                    <img src="<?php the_field('acf_imagem_da_secao_inicial_galeria') ?>" alt="">
                </div>
            </div>
            <div class="sobreposicao">

            </div>
    </section>

    <section class="s-content-especialidades">
        <div class="container">
            <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno.php') ?>
            <div class="conteudo">
                <button class="btn-navegacao" id="js-btn-navegacao">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-navegacao.svg" alt="">
                </button>
                <h2 class="titulo-de-navegacao"><?php the_field('acf_titulo_da_sessao_hero_galeria') ?></h2>
                <div class="cards-de-especialidade">
                   <?php the_content(); ?>
                </div>
            </div>
            <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno-mobile.php') ?>
        </div>
    </section>
    
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>