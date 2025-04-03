<?php
//Template name: Página Diretoria
?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section id="ReturnToTop" class="s-hero-interna">
            <div class="container">
                <div class="titulo">
                    <div class="logo-hospital">
                        <img src="<?php the_field('acf_logo_de_fundo_1') ?>" alt="">
                    </div>
                    <h2><?php the_field("acf_titulo_da_secao_inicial_diretoria")?></h2>
                </div>
                <div class="logo-do-centro">
                <img src="<?php the_field('acf_logo_de_fundo_2') ?>" alt="">
                </div>
                <div class="imagem-logo-da-direita">
                    <img src="<?php the_field("acf_imagem_da_secao_inicial_diretoria")?>" alt="">
                </div>
            </div>
            <div class="sobreposicao">

            </div>
    </section>

    <section class="s-content-diretoria">
        <div class="container">
            <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno.php') ?>
            <div class="conteudo">
                <button class="btn-navegacao" id="js-btn-navegacao">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-navegacao.svg" alt="">
                </button>
                <h2 class="titulo-de-navegacao"><?php the_field("acf_titulo_da_secao_de_conteudo_diretoria") ?></h2>
                <p class="texto-inicial"><?php the_field("acf_texto_inicial_da_secao_de_conteudo_diretoria") ?></p>
                <ul class="diretoria-administrativa">
                    <h4 class="titulo-areas-da-diretoria"><?php the_field("acf_titulo_da_diretoria_administrativa") ?></h4>
                    <?php if( have_rows('acf_repetidor_da_diretoria_administrativa') ): while ( have_rows('acf_repetidor_da_diretoria_administrativa') ) : the_row(); ?>
                        <li>
                            <span><?php the_sub_field("repeate_cargo_do_membro") ?></span>
                            <p><?php the_sub_field("repeate_nome_do_membro") ?></p>
                        </li>
                    <?php endwhile; else : endif;?>
                </ul>
                <ul class="conselho-fiscal">
                    <h4 class="titulo-areas-da-diretoria"><?php the_field("acf_titulo_do_conselho_fiscal") ?></h4>
                    <?php if( have_rows('acf_repetidor_do_conselho_fiscal') ): while ( have_rows('acf_repetidor_do_conselho_fiscal') ) : the_row(); ?>
                        <li>
                            <p><?php the_sub_field("repeate_nome_do_membro") ?></p>
                        </li>
                    <?php endwhile; else : endif;?>
                </ul>
                <ul class="diretora-executiva">
                    <h4 class="titulo-areas-da-diretoria"><?php the_field("acf_titulo_da_diretoria_executiva") ?></h4>
                    <?php if( have_rows('acf_repetidor_da_diretoria_executiva') ): while ( have_rows('acf_repetidor_da_diretoria_executiva') ) : the_row(); ?>
                        <li>
                            <p><?php the_sub_field("repeate_nome_do_membro") ?></p>
                        </li>
                    <?php endwhile; else : endif;?>
                </ul>
                <ul class="acessoria-juridica">
                    <h4 class="titulo-areas-da-diretoria"><?php the_field("acf_titulo_da_assessoria_juridica") ?></h4>
                    <?php if( have_rows('acf_repetidor_da_assessoria_juridica') ): while ( have_rows('acf_repetidor_da_assessoria_juridica') ) : the_row(); ?>
                        <li>
                            <p><?php the_sub_field("repeate_nome_do_membro") ?></p>
                        </li>
                    <?php endwhile; else : endif;?>
                </ul>
                <ul class="coordernacao">
                    <h4 class="titulo-areas-da-diretoria"><?php the_field("acf_titulo_da_coordenacao") ?></h4>
                    <?php if( have_rows('acf_repetidor_da_coordenacao') ): while ( have_rows('acf_repetidor_da_coordenacao') ) : the_row(); ?>
                        <li>
                            <p><?php the_sub_field("repeate_nome_do_membro") ?></p>
                        </li>
                    <?php endwhile; else : endif;?>
                </ul>
            </div>
            <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno-mobile.php') ?>
        </div>
    </section>
    
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>