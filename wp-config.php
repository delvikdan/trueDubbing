<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'ouspen_td');

/** Имя пользователя MySQL */
define('DB_USER', 'ouspen_td');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '8*L68C8L');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'x:;M0R4,?+nUp^Kugk$>G(|4nN`?b$:zr/7e<~Kc!+XrX-AjnS8xLn&FEj**u{B2');
define('SECURE_AUTH_KEY',  'DFF(K$#~JvOKuy#cAD<N3I&L9jv@m[jYAdWYqC{!!yW!j1QeB-U%U=)b9$t%5[r2');
define('LOGGED_IN_KEY',    '=&H# ]t1;)DO]B&2r#&)MS5bt~5k3gX)WWj)KG3G[mRU@lOtu=JFu3nwKSdz^qyA');
define('NONCE_KEY',        ':KWbgG3,=e4995ao7*g7_|hN5}K+Vc5pw7PzDMK3V:s#J@:eI{Z0;[{{|p8Au{qX');
define('AUTH_SALT',        '>uS$n&X+qN{s3}%kv*2RITJ-CJ;!LFQu<0gvL_;^TnRG=NjcYH+`9U_9ZT)&T2wM');
define('SECURE_AUTH_SALT', '/[]43ESgFgDvc@ao?}]~OiXH3Q9G:a]}Kj8,s.4AjVL;]drrBkNcA3mZ{Cv*X>rV');
define('LOGGED_IN_SALT',   ',)5Xjm~u_Z88iC$Fp?QfGAw& KF@d{7xe!p-IW.[/d)f3a$0/{+;SwL;Zm0kE%u ');
define('NONCE_SALT',       'Lu}d^tlsq{]`*l:7A4&6NzmJi}8K%r X!>)D2RH6x`B%G~ecBI22{=J!8Ym,p]*4');

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
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
