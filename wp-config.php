<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'dush1');

/** Имя пользователя MySQL */
define('DB_USER', 'vtc');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '9yHKuojYM3');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KihzpIiJ`Hr8qClTZ+9k7.fGaL*bnc-OT6DVt7XQ~0g5#{Wq7{?N.|&5mZ7DTsib');
define('SECURE_AUTH_KEY',  'zYWCznk&|+Pw+Xaw|2f*DK0$)w;nUpxy?v:3!|q5-E;c~{?[+I/#q6Bac+vS$+5/');
define('LOGGED_IN_KEY',    'Kpq+#upLmzLt+=ZyrpB=hrVMC*}kE%)nt`!v7oKUn+5w0BO@d(!vytjT@+,~j-8L');
define('NONCE_KEY',        'Nh#myf>o;XLX2bUN5s%#W E AS#zES5]K+1ItBm^pNwwS|r-tsdx/]TA<N3E+*|e');
define('AUTH_SALT',        'On[MlS^B++qod3(<?yC~WmH!Nky0c`Oaq5gAY3i<QQw*BJ4K|@Z=6rKLWRnz^+[?');
define('SECURE_AUTH_SALT', 'lxY!Q?+IE3{o7(;88}{C=TMneCPi8mIKo~M+&-jXVDsHYAM^>zE`@L-da<%GI{xR');
define('LOGGED_IN_SALT',   'S/QsZ<dG0<yd<&hxoZU({RIC3J,7If9~$[=%RFu+?K^sI[o&TsAP]q}%=w(o9`IO');
define('NONCE_SALT',       '<(&nG.RV)hCN:IZ5)uBvzlgHG+h1abj?4->$GDh;`@&.AJL3$_!.uMF+-[r]2|<5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
