<?php
//Template name: Página Corpo Clínico
?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section id="ReturnToTop" class="s-hero-interna">
            <div class="container">
                <div class="titulo">
                    <div class="logo-hospital">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/logo-hospital-cruz.svg" alt="">
                    </div>
                    <h2><?php the_field("acf_titulo_da_secao_inicial_corpo_clinico") ?></h2>
                </div>
                <div class="logo-do-centro">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/logo-hospital-cruz-grande.svg" alt="">
                </div>
                <div class="imagem-logo-da-direita">
                    <img src="<?php the_field("acf_imagem_da_secao_inicial_corpo_clinico") ?>" alt="">
                </div>
            </div>
            <div class="sobreposicao">

            </div>
    </section>

    <section class="s-content-corpo-clinico">
        <div class="container">
            <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno.php') ?>
            <div class="conteudo">
                <button class="btn-navegacao" id="js-btn-navegacao">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-navegacao.svg" alt="">
                </button>
                <h2 class="titulo-de-navegacao"><?php the_field("acf_titulo_da_secao_de_conteudo_corpo_clinico") ?></h2>
                <ul class="cards-do-corpo-clinico">
                    <?php if( have_rows('acf_repetidor_do_corpo_clinico') ): while ( have_rows('acf_repetidor_do_corpo_clinico') ) : the_row(); ?>
                        <li class="card-corpo-clinico">
                            <div class="foto-do-profissional">
                                <img src="<?php the_sub_field("repeate_foto_do_profissional") ?>" alt="">
                            </div>
                            <h4 class="nome-do-profissional"><?php the_sub_field("repeate_nome_do_profissional") ?></h4>
                            <p class="area-medica"><?php the_sub_field("repeate_area_medica_do_profissional") ?></p>
                        </li>
                    <?php endwhile; else : endif;?>
                </ul>
            </div>
            <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno-mobile.php') ?>
        </div>
    </section>
    
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>