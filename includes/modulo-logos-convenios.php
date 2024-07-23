<section id="convenios" class="s-convenios">
      <div class="container">
          <p><?php the_field("acf_titulo_da_secao", "options") ?></p>
          <div class="slide-convenios">
              <div class="swiper conveniosSlides">
                  <div class="swiper-wrapper">
                    <?php if( have_rows('repetidor_das_logos_dos_convenios','options') ): while ( have_rows('repetidor_das_logos_dos_convenios','options') ) : the_row(); ?>
                      <div class="swiper-slide">
                            <div class="logo-do-convenio">
                                <img src="<?php the_sub_field("repeate_logo_do_convenio",'options') ?>" alt="">
                            </div>
                      </div>
                    <?php endwhile; else : endif;?>
                  </div>
              </div>
          </div>
      </div>
</section>