<?php
//Template name: Página de Trabalho Conosco
?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section id="ReturnToTop" class="s-hero-interna">
            <div class="container">
                <div class="titulo">
                    <div class="logo-hospital">
                        <img src="<?php the_field("acf_logo_de_fundo_1") ?>" alt="">
                    </div>
                    <h2><?php the_field("acf_titulo_da_secao_inicial_de_contato") ?></h2>
                </div>
                <div class="logo-do-centro">
                    <img src="<?php the_field("acf_logo_de_fundo_2") ?>" alt="">
                </div>
                <div class="imagem-logo-da-direita">
                    <img src="<?php the_field("acf_imagem_da_secao_inicial_de_contato") ?>" alt="">
                </div>
            </div>
            <div class="sobreposicao">

            </div>
    </section>

    <section class="s-content-contato">
        <div class="container">
            <div class="left">
                <h2><?php the_field("acf_titulo_da_secao_de_conteudo_contatos") ?></h2>
                <p class="texto-infos-contato"><?php the_field("acf_texto_da_secao_de_conteudo_contatos") ?></p>

                <a target="_blank" href="<?php the_field("acf_link_do_endereco") ?>" class="endereco"><?php the_field("acf_informacoes_do_endereco") ?></a>

                <ul class="formas-de-contato">
                    <li>
                        <div class="icone">
                            <img src="<?php the_field('acf_icone_do_numero_de_contato') ?>" alt="">
                        </div>
                        <div class="informacao">
                            <h4>Telefone: </h4>
                            <a href="tel:+<?php the_field("acf_link_do_numero_de_contato") ?>"><?php the_field("acf_numero_de_contato") ?></a>
                        </div>
                    </li>
                    <li>
                        <div class="icone">
                            <img src="<?php the_field('acf_Icone_do_Email_de_Contato') ?>" alt="">
                        </div>
                        <div class="informacao">
                            <h4>E-mail:</h4>
                            <a href="mailto:<?php the_field("acf_email_de_contato") ?>"><?php the_field("acf_email_de_contato") ?></a>
                        </div>
                    </li>
                    <li>
                        <div class="icone">
                            <img src="<?php the_field('acf_icone_dos_horarios_de_visita') ?>" alt="">
                        </div>
                        <div class="informacao">
                            <h4><?php the_field("acf_titulo_horarios_de_visita") ?></h5>
                            <p class="texto-dias-de-visita"><?php the_field("acf_dias_de_atendimento") ?></p>
                            <p class="texto-horarios-de-visita"><?php the_field("acf_horarios_de_atendimento") ?></p>
                            <p class="texto-dias-de-visita"><?php the_field("acf_dias_de_atendimento_fim_de_semana") ?></p>
                            <p class="texto-horarios-de-visita"><?php the_field("acf_horarios_de_atendimento_no_fim_de_semana") ?></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right">
                <div class="formulario-de-contato">
                <?php echo do_shortcode( '[contact-form-7 id="3497c74" title="Formulário de contato"]' ); ?> 
                </div>
            </div>  
        </div>
    </section>

    
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>