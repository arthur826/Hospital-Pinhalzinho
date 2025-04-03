<?php
//Template name: Página Estrutura
?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section id="ReturnToTop" class="s-hero-interna">
            <div class="container">
                <div class="titulo">
                    <div class="logo-hospital">
                        <img src="<?php the_field('acf_logo_de_fundo_1') ?>" alt="">
                    </div>
                    <h2><?php the_field('acf_titulo_da_secao_inicial_especialidades') ?></h2>
                </div>
                <div class="logo-do-centro">
                    <img src="<?php the_field('acf_logo_de_fundo_2') ?>" alt="">
                </div>
                <div class="imagem-logo-da-direita">
                    <img src="<?php the_field('acf_imagem_da_secao_inicial_especialidades') ?>" alt="">
                </div>
            </div>
            <div class="sobreposicao">

            </div>
    </section>

    <section class="s-content-estrutura">
        <div class="container">
            <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno.php') ?>
            <div class="conteudo">
                <button class="btn-navegacao" id="js-btn-navegacao">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-navegacao.svg" alt="">
                </button>
                <h2 class="titulo-de-navegacao"><?php the_field('acf_titulo_da_secao_de_conteudo_especialidades') ?></h2>
                <div class="cards-de-especialidade">
                <?php if (have_rows('acf_repetidor_de_cards_de_especialidades')): 
                    $index = 0; // Variável para contar os itens
                    while (have_rows('acf_repetidor_de_cards_de_especialidades')): 
                        the_row(); 
                ?>
                    <div class="card-especialidades" style="flex-direction: <?php echo $index % 2 !== 0 ? 'row-reverse;' : 'flex-direction: column;';?>">
                        <div class="informacoes">
                            <h3><?php the_sub_field('repeate_nome_da_especialidade') ?></h3>
                            <p><?php the_sub_field('repeate_texto_da_especialidade') ?></p>
                        </div>
                        <div class="imagem">
                            <img src="<?php the_sub_field('repeate_imagem_da_especialidade') ?>" alt="">
                        </div>
                    </div>
                <?php 
                    $index++; // Incrementa o contador
                    endwhile; 
                endif; 
                ?>
                </div>
            </div>
            <?php include (TEMPLATEPATH . '/includes/modulo-navegacao-interno-mobile.php') ?>
        </div>
    </section>
    
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>