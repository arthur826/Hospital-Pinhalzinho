    <footer>
      <div class="container">
        <div class="top">
          <div class="endereco-e-contato">
              <a href="<?php echo get_option("siteurl"); ?>" class="logo-footer">
                <img src="<?php the_field("acf_logo_do_hospital", "options") ?>" alt="">
              </a>
                <a href="mailto:<?php the_field('acf_nosso_email', 'options') ?>" class="links-do-footer"><?php the_field('acf_nosso_email', 'options') ?></a>
                <a href="tel:+<?php the_field('acf_link_do_telefone', 'options') ?>" class="links-do-footer"><?php the_field('acf_nosso_telefone', 'options') ?></a>
                <a target="blank" href="<?php the_field('acf_link_da_nossa_localizacao', 'options') ?>" class="links-do-footer"><?php the_field('acf_nossa_localizacao', 'options') ?></a>
          </div>
          <div class="links-institucionais">
            <h4>Institucional</h4>
            <?php
                $args = array(
                    'menu' => 'Menu Footer Links de Páginas',
                    'theme_location' => 'menu-footer-links-de-paginas',
                    'container' => false,
                );
                wp_nav_menu( $args );
          ?>
          </div>
          <div class="links-uteis">
            <h4>Links úteis</h4>
            <?php
                $args = array(
                    'menu' => 'Menu Footer Links Úteis',
                    'theme_location' => 'menu-footer-links-uteis',
                    'container' => false,
                );
                wp_nav_menu( $args );
          ?>
          </div>
          <div class="links-redes-sociais-footer">
            <h4>Siga nossas redes sociais</h4>
            <div class="logos-redes-sociais">
              <?php if( have_rows('repetidor_das_redes_socias', 'options') ): while ( have_rows('repetidor_das_redes_socias', 'options') ) : the_row(); ?>
                <a target="_blank" href="<?php the_sub_field("repeate_link_da_rede_social", 'options') ?>" class="links-do-footer"><img src="<?php the_sub_field("repeate_logo_da_rede_social", 'options') ?>" alt=""></a>
              <?php endwhile; else : endif;?>
            </div>
          </div>
        </div>
        <div class="bottom">
          <p class="texto-copyright"><?php the_field("acf_texto_de_copyright", "options") ?></p>
          <a href="#ReturnToTop"><button class="btn-return-to-top"><img src="<?php echo get_template_directory_uri() ?>/Assets/arrow-top.svg" alt=""></button></a>
          <div class="link-do-dev">
            <a href="<?php the_field("acf_link_do_desenvolvedor", "options") ?>" class="texto-desenvolvedor">Desenvolvido por </a>
            <a href="<?php the_field("acf_link_do_desenvolvedor", "options") ?>"><div class="logo-jpx"><img src="<?php the_field("acf_logo_jotapix", "options") ?>" alt=""></div></a>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/04ace31e72.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
      AOS.init({
      duration: 1000,
      once: true,
      });
    </script>

    <script>
      var swiper = new Swiper(".conveniosSlides", {
        slidesPerView: 5,
        spaceBetween: 10,
        loop: true,
        autoplay: {
          delay: 1500,
          disableOnInteraction: false,
        },
        breakpoints: {
            300: {
            slidesPerView: 2,
            spaceBetween: 10,
            },
            600: {
            slidesPerView: 5,
            spaceBetween: 10,
            },
        }
      });
    </script>

    <script>
        var swiper = new Swiper(".especialidadesSlides", {
          slidesPerView: 3,
          spaceBetween: 30,
          loop: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            300: {
            slidesPerView: 1,
            spaceBetween: 30,
            },
            600: {
            slidesPerView: 2,
            spaceBetween: 30,
            },
            1200: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
        }
        });
    </script>

    <script>
        var swiper = new Swiper(".nossaHistoriaSlides", {
          slidesPerView: 2.2,
          spaceBetween: 22,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            300: {
            slidesPerView: 1.2,
            spaceBetween: 22,
            },
            600: {
            slidesPerView: 2.2,
            spaceBetween: 22,
        }
      }
      });
    </script>

    <?php wp_footer() ?>
  </body>
</html>
