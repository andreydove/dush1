<?php
/*
Template Name: Sections
 */
get_header(); // подключаем header.php ?>
    <div class="contact-form-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-11">
                    <div class="contact-form">
                        <?php echo do_shortcode( ' [contact-form-7 id="469" title="Запис в секцію"] '); ?>
                        
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 close-btn"><i class="fa fa-times fa-3x" title="Закрити"></i></div>
            </div>
        </div>
    </div>

<section class="section-s">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
        <?php the_content(); // контент ?>
    </article>
    <?php endwhile; // конец цикла ?>
</section>

<?php get_footer(); // подключаем footer.php ?>