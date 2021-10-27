<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'sitebd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*vBUwCC2:?@g30gvoUD3m0v3hPRyHFny,rin/Vtjgmeic#Gi9f{Mi2G>w9-xw>>w' );
define( 'SECURE_AUTH_KEY',  'u;Bd~npvw$D%c1nSW0ud</k(dy6OH2FRsZSwV!ukP5gfF!NVE/jkWk9Rl7nuZ es' );
define( 'LOGGED_IN_KEY',    'vqet^q#pe&_ZE1?^9WT*ElhM5C<yq{D=kbW|kflIo*)/z`ic+nJwIL&rl[(iP(XT' );
define( 'NONCE_KEY',        'N)J*rFgMc@0:&9`&mx%,;Hl+#cC)FSXq-~#o*;]a^l.HY_;Eq]VfI*i|-ecPr&P0' );
define( 'AUTH_SALT',        'iS2!Nc:d.YR:w6k~]G|z~ccLL#WUI#FUC_w;k(l]b5 wBP`}VUl?()Ue;mM0!V<?' );
define( 'SECURE_AUTH_SALT', 'I5 ]E)Cm+lQ`z1K7USZ}+?VI60{F,W`lLo68$t@CgG;&?J>B/0!^[pd|wMT<u:cT' );
define( 'LOGGED_IN_SALT',   'bg`oYI)!>-%vY`l_rH]PoRaWD,8O>*CUML=5T|B[=RyUZ^}8U|YDaGNT_6/+dxkB' );
define( 'NONCE_SALT',       'yoD91]}?SkX)tBRgQ@2L^Lv_7|-fBzLG~HQ!?lE.ZqM7;J+F{aXaam9Huu,GEFKn' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
