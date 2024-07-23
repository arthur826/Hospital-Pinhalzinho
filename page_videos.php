<?php
//Template name: Página de Vídeos
?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section id="ReturnToTop" class="s-hero-interna">
            <div class="container">
                <div class="titulo">
                    <div class="logo-hospital">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/logo-hospital-cruz.svg" alt="">
                    </div>
                    <h2><?php the_field("acf_titulo_da_secao_inicial_dos_videos") ?></h2>
                </div>
                <div class="logo-do-centro">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/logo-hospital-cruz-grande.svg" alt="">
                </div>
                <div class="imagem-logo-da-direita">
                    <img src="<?php the_field("acf_imagem_da_secao_inicial_dos_videos") ?>" alt="">
                </div>
            </div>
            <div class="sobreposicao">

            </div>
    </section>

    <section class="s-content-videos">
        <div class="container">
            <ul class="videos">
                <?php if( have_rows('acf_repetidor_dos_videos') ): while ( have_rows('acf_repetidor_dos_videos') ) : the_row(); ?>
                    <li class="card-videos">
                            <div class="modal-video">
                                <div class="overlay js-overlay-video"></div>
                                <div class="video-interno">
                                    <iframe width="560" height="315" src="<?php the_sub_field("repeate_link_do_video") ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="capa-do-video">
                                <img class="imagem-do-video" src="<?php the_sub_field("repeate_capa_do_video") ?>" alt="" />
                                <button class="btn-click-video"><img src="<?php echo get_template_directory_uri() ?>/Assets/icone-click-video.svg" alt=""></button>
                            </div>
                            <h3><?php the_sub_field("repeate_titulo_do_video") ?></h3>
                            <p><?php the_sub_field("repeate_texto_do_video") ?></p>
                    </li>
                <?php endwhile; else : endif;?>
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
        </div>
    </section>
    
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>