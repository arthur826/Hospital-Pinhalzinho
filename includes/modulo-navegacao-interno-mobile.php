<div class="menu-de-navegacao-mobile">
    <div class="overlay overlay-nav-js"></div>
    <aside>
        <h3>Navegue aqui:</h3>
        <ul class="links-de-navegacao">
            <?php if( have_rows('repetidor_dos_links_internos', 'options') ): while ( have_rows('repetidor_dos_links_internos', 'options') ) : the_row(); ?>
                <li>
                    <a href="<?php the_sub_field("repeate_link_da_pagina") ?>" class="link-nav-interno"><?php the_sub_field("repeate_texto_do_link_da_pagina") ?></a>
                </li>
            <?php endwhile; else : endif;?>
        </ul>
    </aside>
</div>