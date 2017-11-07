<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
get_header(); // подключаем header.php ?>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/posts.css">

<section  class="single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 sidebar-news">

                <div class="sidebar-info"><?php get_sidebar(); // подключаем sidebar.php ?></div>           
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 content-news">
            
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
        <?php edit_post_link(__('Редагувати')); ?>
		<h1><?php the_title(); // заголовок поста ?></h1>
		<div class="meta">
			<p><?php the_time('G:i'); ?>|<?php the_time('d.m.y'); ?></p> <?php // дата и время создания ?>
			<p>Категорія: <?php the_category(',') ?></p> <?php // ссылки на категории в которых опубликован пост, через зпт ?>
			<?php the_tags('<p>Теги: ', ',', '</p>'); // ссылки на тэги поста ?>
		</div>
		<?php the_content(); // контент ?>
	</article>
<?php endwhile; // конец цикла ?>

                <?php previous_post_link('%link', '<- Попередня новина', TRUE); // ссылка на предыдущий пост ?> 
                <?php next_post_link('%link', 'Наступна новина ->', TRUE); // ссылка на следующий пост ?> 
            </div>
        </div>
</section>
<?php get_footer(); // подключаем footer.php ?>
