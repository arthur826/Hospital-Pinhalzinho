<?php
    //Template name: Page Home
?>

<?php get_header(); ?>

    <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>

    
    <section id="ReturnToTop" class="s-hero">
          <div class="container">
            <div class="left">
              <div class="logo-cruz">
                <img src="<?php echo get_template_directory_uri() ?>/Assets/logo-hospital-cruz.svg" alt="">
              </div>
              <h1><?php the_field('acf_titulo_da_sessao_inicial') ?></h1>
              <p><?php the_field('acf_texto_da_sessao_inicial') ?></p>
              <div class="logo-cruz-2">
                <img src="<?php echo get_template_directory_uri() ?>/Assets/logo-hospital-cruz.svg" alt="">
              </div>
            </div>
            <div class="right">
              <div class="logo-cruz-fundo">
                <img src="<?php echo get_template_directory_uri() ?>/Assets/logo-hospital-cruz-grande.svg" alt="">
              </div>
              <div class="logo-cruz-pequena">
                <img src="<?php echo get_template_directory_uri() ?>/Assets/logo-hospital-cruz.svg" alt="">
              </div>
            </div>
            <div class="imagem-sessao-hero">
              <img src="<?php the_field('acf_imagem_da_sessao_inicial') ?>" alt="">
            </div>
          </div>
    </section>
    
    <section class="s-sobre-nos">
      <div class="container">
        <div class="left">
          <div class="crosses-up">
            <div class="logo-girando">
              <div class="logo-centro">
                <img src="<?php echo get_template_directory_uri() ?>/Assets/logo-hospital-2.svg" alt="">
              </div>
              <div class="texto-circular">
                <img src="<?php echo get_template_directory_uri() ?>/Assets/texto-circular.svg" alt="">
              </div>
              <div class="eclipse">
                <img src="<?php echo get_template_directory_uri() ?>/Assets/eclipse.svg" alt="">
              </div>
            </div>
            <div class="cross-up" style="background-image: url(<?php the_field('acf_imagem_da_logo_pequena_01') ?>);">

            </div>
          </div>
          <div class="cross-center" style="background-image: url(<?php the_field('acf_imagem_da_logo_grande') ?>);">   
          </div>
          <div class="crosses-down">
              <div class="first-cross" style="background-image: url(<?php the_field('acf_imagem_da_logo_pequena_02') ?>);">

              </div>
              <div class="second-cross" style="background-image: url(<?php the_field('acf_imagem_da_logo_pequena_03') ?>);">

              </div>
          </div>
        </div>
        <div class="right">
          <span class="subtitulo"><?php the_field('acf_subtitulo_da_sessao_sobre_nos') ?></span>
          <h2><?php the_field('acf_titulo_da_sessao_sobre_nos') ?></h2>
          <p><?php the_field('acf_texto_da_sessao_sobre_nos') ?></p>
          <button class="btn-primary"><a href="<?php the_field('acf_link_do_botao_da_sessao_sobre_nos') ?>"><?php the_field('acf_texto_do_botao_da_sessao_sobre_nos') ?></a></button>
        </div>
      </div>
    </section>

    <?php include(TEMPLATEPATH .'/includes/modulo-logos-convenios.php') ?>

    <section class="s-especialidades">
      <div class="container">
        <div class="left">
          <div class="mini-logo">
            <img src="<?php the_field('acf_logo_do_hospital_pequena') ?>" alt="">
          </div>
          <span class="subtitulo"><?php the_field('acf_subtitulo_da_sessao_de_especialidades') ?></span>
          <h2><?php the_field('acf_titulo_da_sessao_de_especialidades') ?></h2>
          <p><?php the_field('acf_texto_da_sessao_de_especialidades') ?></p>
        </div>
        <div class="slides-especialidade">
          <div class="slide especialidadesSlides">
              <div class="swiper-wrapper">
                <?php if( have_rows('acf_repetidor_de_slides_de_especialidade') ): while ( have_rows('acf_repetidor_de_slides_de_especialidade') ) : the_row(); ?>
                  <div class="swiper-slide">
                    <div class="card-especialidade">
                      <div class="icone-card">
                          <img src="<?php the_sub_field('acf_repeate_icone_da_especialidade') ?>" alt="">
                      </div>
                      <h3><?php the_sub_field('acf_repeate_titulo_da_especialidade') ?></h3>
                      <p><?php the_sub_field('acf_repeate_texto_da_especialidade') ?></p>
                    </div>
                  </div>
                <?php endwhile; else : endif;?>
              </div>
              <div class="navegacao">
                <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() ?>/Assets/button-slide-right.svg" alt=""></div>
                <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() ?>/Assets/button-slide-left.svg" alt=""></div>
              </div>
          </div>
        </div>
      </div>
      <div class="sobreposicao">
        
      </div>
    </section>

    <section class="s-noticias">
      <div class="container">
        <div class="topo">
          <div class="titulos">
            <span class="subtitulo"><?php the_field('acf_subtitulo_da_sessao_de_noticias')?></span>
            <h2><?php the_field('acf_titulo_da_sessao_de_noticias')?></h2>
          </div>
          <p><?php the_field('acf_texto_da_sessao_de_noticias')?></p>
         <button class="btn-primary"><a href="<?php the_field('acf_link_do_botao_ver_mais_noticias')?>"><?php the_field('acf_texto_do_botao_ver_mais_noticias')?></a></button>
        </div>
        <ul class="lista-de-noticias">
          <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
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
                                    <img src="<?php echo get_template_directory_uri() ?>/Assets/icone-relogio.svg" alt="">
                                </div>
                                <p class="text-data"><?php the_time( 'j F, Y' )?></p>
                            </div>
                        </a>
         </li>
              
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
					<p><?php _e( 'Desculpe, essa categoria não tem notícias.' ); ?></p>
					<?php endif; ?>
        </ul>
      </div>
    </section>

    <section class="s-corpo-clinico">
      <div class="container">
        <div class="text">
          <div class="titulos">
            <span class="subtitulo"><?php the_field('acf_subtitulo_da_sessao_corpo_clinico') ?></span>
            <h2><?php the_field('acf_titulo_da_sessao_corpo_clinico') ?></h2>
          </div>
          <p><?php the_field('acf_texto_da_sessao_corpo_clinico') ?></p>
          <button class="btn-primary"><a href="<?php the_field('acf_link_do_botao_da_sessao_corpo_clinico')?>"><?php the_field('acf_texto_do_botao_da_sessao_corpo_clinico')?></a></button>
        </div>
      </div>
      <div class="sobreposicao">

      </div>
    </section>

    <section class="s-videos-destaque">
      <div class="container">
        <div class="titles">
          <div class="icone-video">
            <img src="<?php the_field('acf_icone_de_video') ?>" alt="">
          </div>
          <h2><?php the_field('acf_titulo_da_sessao_videos_em_destaque') ?></h2>
        </div>
        <ul class="lista-de-videos-destaque">
            <?php if (have_rows('acf_repetidor_dos_videos_em_destaque')): while (have_rows('acf_repetidor_dos_videos_em_destaque')): the_row(); ?>
                  <li class="card-videos">
                            <div class="modal-video">
                                <div class="overlay js-overlay-video"></div>
                                <div class="video-interno">
                                    <iframe  width="560" height="315" src="<?php the_sub_field("repeate_link_do_video_destacado") ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="capa-do-video">
                                <img class="imagem-do-video" src="<?php the_sub_field("repeate_capa_do_video_destaque") ?>" alt="" />
                                <button class="btn-click-video"><img src="<?php echo get_template_directory_uri() ?>/Assets/icone-click-video.svg" alt=""></button>
                            </div>
                            <h3><?php the_sub_field("repeate_titulo_do_video_destacado") ?></h3>
                            <p><?php the_sub_field("repeate_texto_do_video_destacado") ?></p>
                    </li>          
            <?php endwhile; else: endif; ?>
                  <script>
                   const btnClickVideo = document.querySelectorAll(".btn-click-video");
                    const overlayVideo = document.querySelectorAll(".js-overlay-video");

                    btnClickVideo.forEach((buttonVideo, index) => {
                        buttonVideo.addEventListener("click", () => {
                            const modalVideo = document.querySelectorAll(".modal-video")[index];
                            modalVideo.classList.add("open-modal-video");
                        });
                    });

                    overlayVideo.forEach((overlayVideoJs, index) => {
                        overlayVideoJs.addEventListener("click", () => {
                            const modalVideo = document.querySelectorAll(".modal-video")[index];
                            modalVideo.classList.remove("open-modal-video");

                            const iframe = modalVideo.querySelector("iframe");
                            const src = iframe.src;
                            iframe.src = ''; // Redefine o src para parar o vídeo
                            iframe.src = src; // Reatribui o src original para que o vídeo possa ser reiniciado no futuro
                        });
                    });
                  </script>
        </ul>
        <button class="btn-primary"><a href="<?php the_field('acf_link_do_botao_da_sessao_videos_em_destaque')?>"><?php the_field('acf_texto_do_botao_da_sessao_videos_em_destaque')?></a></button>
      </div>
    </section>


    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>
