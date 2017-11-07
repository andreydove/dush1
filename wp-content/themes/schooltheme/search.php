<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
get_header(); // подключаем header.php ?> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/posts.css">
<section  class="search-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 sidebar-news">

                <div class="sidebar-info"></form><?php get_sidebar(); // подключаем sidebar.php ?></div>           
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 content-news">
	<h1><?php printf('Пошук за стрічкою: %s', get_search_query()); // заголовок поиска ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
		<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
	<?php endwhile; // конец цикла
	else: echo '<h2>Немає записів</h2>'; endif; // если записей нет, напишим "простите" ?>	 
	<?php pagination(); // пагинация, функция нах-ся в function.php ?>
</section>
<?php get_sidebar(); // подключаем sidebar.php ?>

<?php get_footer(); // подключаем footer.php ?>


