<?php
//Template name: Página Nossa História
?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <section id="ReturnToTop" class="s-hero-interna">
                <div class="container">
                    <div class="titulo">
                        <div class="logo-hospital">
                            <img src="<?php the_field("acf_logo_de_fundo_1") ?>" alt="">
                        </div>
                        <h2><?php the_field("acf_titulo_da_secao_inicial_nossa_historia") ?></h2>
                    </div>
                    <div class="logo-do-centro">
                        <img src="<?php the_field("acf_logo_de_fundo_2") ?>" alt="">
                    </div>
                    <div class="imagem-logo-da-direita">
                        <img src="<?php the_field("acf_imagem_da_secao_inicial_nossa_historia") ?>" alt="">
                    </div>
                </div>
                <div class="sobreposicao">

                </div>
        </section>

        <section class="s-content-nossa-historia">
            <div class="container">
                <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno.php') ?>
                <div class="conteudo">
                    <button class="btn-navegacao" id="js-btn-navegacao">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icon-navegacao.svg" alt="">
                    </button>
                    <h2 class="titulo-de-navegacao"><?php the_field("acf_titulo_do_texto_da_nossa_historia") ?></h2>
                    <p><?php the_field("acf_texto_sobre_a_nossa_historia") ?></p>
                    <div class="slides-nossa-historia">
                        <div class="slides nossaHistoriaSlides">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('acf_repetidor_de_slides_das_imagens')):
                                    while (have_rows('acf_repetidor_de_slides_das_imagens')):
                                        the_row(); ?>
                                        <div class="swiper-slide">
                                            <div class="imagem-historia">
                                                <img src="<?php the_sub_field("repeate_imagem_da_nossa_historia") ?>" alt="">
                                            </div>
                                        </div>
                                <?php endwhile; else: endif; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno-mobile.php') ?>
            </div>
        </section>

    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>