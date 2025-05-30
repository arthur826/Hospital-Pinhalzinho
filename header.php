<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Slab:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title><?php bloginfo('name') ?><?php wp_title ('|')?></title>

    <?php wp_head(); ?>

  </head>
  <body>
    <header>
      <div class="container">
        <a href="<?php echo get_option("siteurl"); ?>" class="logo-header">
          <img src="<?php the_field("acf_logo_do_hospital", "options") ?>" alt="" />
        </a>
        <nav>
          <div class="links-de-contato-do-header">
              <?php if( have_rows('repetidor_de_links_de_contato_do_cabecalho', 'options') ): while ( have_rows('repetidor_de_links_de_contato_do_cabecalho', 'options') ) : the_row(); ?>
                <a href="<?php the_sub_field("repeate_link_de_contato_do_cabecalho", "options") ?>" class="link-de-contato">
                  <div class="icone">
                    <img src="<?php the_sub_field("repeate_icone_do_link", "options") ?>" alt="" />
                  </div>
                  <p class="texto-links-de-contato-header"><?php the_sub_field("repeate_texto_do_links_de_contato_do_cabecalho", "options") ?></p>
                </a>
              <?php endwhile; else : endif;?>
            <div class="links-redes-sociais-header">
              <p class="texto-links-de-contato-header">ahbp nas redes</p>
              <?php if( have_rows('repetidor_das_redes_socias', 'options') ): while ( have_rows('repetidor_das_redes_socias', 'options') ) : the_row(); ?>
                <a target="_blank" href="<?php the_sub_field("repeate_link_da_rede_social", 'options') ?>" class="links-do-footer"><img src="<?php the_sub_field("repeate_logo_da_rede_social", 'options') ?>" alt=""></a>
              <?php endwhile; else : endif;?>
            </div>
          </div>
          <div class="links-paginas">
            <?php
                  $args = array(
                      'menu' => 'Menu Header Links de Páginas',
                      'theme_location' => 'menu-header-links-de-paginas',
                      'container' => false,
                      'menu_class' => 'links-das-paginas'
                  );
                  wp_nav_menu( $args );
            ?>
            
            <button class="btn-search" id="searchButton"><img src="<?php echo get_template_directory_uri() ?>/assets/magnifying-glass-solid.svg" alt=""></button>
          </div>
          <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="input-de-busca">
              <input type="text" name="s" class="search-input" id="searchInput" placeholder="Buscar...">
              <button type="submit" id="confirmButton">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/icon-park_go-end.png" alt="Buscar">
              </button>
          </form>
          <button id="btnMenuMobile" class="btn-menu-mobile">
            <img src="<?php echo get_template_directory_uri() ?>/assets/menu-mobile.svg" alt="" />
          </button>
        </nav>
      </div>
    </header>
    

    <div class="menu-mobile">
      <div class="overlay js-overlay"></div>
      <aside>
        <a href="" class="logo-header">
          <img src="<?php echo get_template_directory_uri() ?>/assets/logo-hospital-pinhalzinho.svg" alt="" />
        </a>
        <nav>
          <div class="links-de-contato-do-header">
            <?php if( have_rows('repetidor_de_links_de_contato_do_cabecalho', 'options') ): while ( have_rows('repetidor_de_links_de_contato_do_cabecalho', 'options') ) : the_row(); ?>
                <a href="<?php the_sub_field("repeate_link_de_contato_do_cabecalho", "options") ?>" class="link-de-contato">
                  <div class="icone">
                    <img src="<?php the_sub_field("repeate_icone_do_link", "options") ?>" alt="" />
                  </div>
                  <p class="texto-links-de-contato-header"><?php the_sub_field("repeate_texto_do_links_de_contato_do_cabecalho", "options") ?></p>
                </a>
              <?php endwhile; else : endif;?> 
            <div class="links-redes-sociais">
              <p class="texto-links-de-contato-header">ahbp nas redes</p>
              <div class="redes">
                <?php if( have_rows('repetidor_das_redes_socias', 'options') ): while ( have_rows('repetidor_das_redes_socias', 'options') ) : the_row(); ?>
                  <a target="_blank" href="<?php the_sub_field("repeate_link_da_rede_social", 'options') ?>" class="link-de-contato"><img src="<?php the_sub_field("repeate_logo_da_rede_social", 'options') ?>" alt=""></a>
                <?php endwhile; else : endif;?>
              </div>
            </div>
          </div>
          <?php
                $args = array(
                    'menu' => 'Menu Header Links de Páginas',
                    'theme_location' => 'menu-header-links-de-paginas',
                    'container' => false,
                    'menu_class' => 'links-das-paginas'
                );
                wp_nav_menu( $args );
          ?>
        </nav>
      </aside>
    </div>

    <script>
      var btnSearchButton = document.getElementById("searchButton");
      var searchInput = document.getElementById("searchInput");
      var confirmButton = document.getElementById("confirmButton");
      var searchForm = document.querySelector(".input-de-busca"); // Seleciona o formulário

      btnSearchButton.addEventListener("click", function(event) {
          if (!searchInput.classList.contains("active")) {
              event.preventDefault(); // Evita o envio do formulário
              searchInput.classList.add("active");
              confirmButton.classList.add("active");
              searchInput.focus();
          } else if (searchInput.value.trim() === "") {
              event.preventDefault();
              searchInput.classList.remove("active");
              confirmButton.classList.remove("active");
          }
      });

      // Impede o envio do formulário caso o input esteja vazio
      searchForm.addEventListener("submit", function(event) {
          if (searchInput.value.trim() === "") {
              event.preventDefault(); // Bloqueia o envio do formulário
              alert("Digite algo antes de buscar!"); // Mensagem opcional para o usuário
          }
      });
  </script>



