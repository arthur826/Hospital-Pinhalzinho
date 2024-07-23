<?php
//Template name: Single Page
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section id="ReturnToTop" class="s-noticia-interna">
            <div class="container">
                <div class="post">
                    <div class="post-meta">
                        <p class="post-category"><?php the_category(', '); ?></p>
                    </div>
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="data-de-postagem">
                        <i class="fa-solid fa-calendar-days" style="color: #9dd3af;"></i>
                        <p class="post-date"><?php the_time('j F, Y'); ?></p>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; else : ?>
        <p><?php _e( 'Desculpe, nenhum post encontrado.' ); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>