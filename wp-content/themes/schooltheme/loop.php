<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template
 */ 
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
		<span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>
        <?php edit_post_link(__('Редагувати')); ?>
           <div class="meta">
               <p><?php the_time('G:i'); ?> | <?php the_time('d.m.y'); ?></p> <?php // дата и время создания ?>
			<p>Категорія: <?php the_category(',') ?></p> <?php // ссылки на категории в которых опубликован пост, через зпт ?>
			<?php the_tags('<p>Теги: ', ',', '</p>'); // ссылки на тэги поста ?>
		</div>
		<div class="post-content">
		<div class="post-img"><?php if ( has_post_thumbnail() ) the_post_thumbnail(); // выводим миниатюру поста, если есть ?></div>
		<?php the_content(''); // пост превью, до more ?>
</div>
	</article>