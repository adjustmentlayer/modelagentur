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
define( 'DB_NAME', 'modelagentur' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WGQki?#^qoi<xYj[h[*,H{4NiEfQW0qUkY~D/:)r@+3J[}J|Rqc*<8//rBujg1We' );
define( 'SECURE_AUTH_KEY',  '_10^reT28$3zaGad9mwNdMQN&*y|w99dAQ,Rw{1Oi-yL$j_Y?:?snr6ANw$9]naI' );
define( 'LOGGED_IN_KEY',    'zA*:XzuMo9Bg<Ae4QM3*?%vq>;RRHR7]rP*.0W|7W(nHIIDj$[LY@by^hZ79w{yY' );
define( 'NONCE_KEY',        'q!5#1sl1RIk({$>E~9gmb@GcN#H(r8QthDBVIh1DbU+1:WL_c)mrp5?&FgG.4}3 ' );
define( 'AUTH_SALT',        'kCP]4UO|H=Bnp7F3g*<dSHXvHg+Lz>06Xa`z3M<5Ej:/|IK2^&RYYJ~<}:ElPU2?' );
define( 'SECURE_AUTH_SALT', 'M|mU{LaQ%5i[3`-aWT{hhp|%UzYER;:z6/.IJEbDv?js$3.6YddPyB27W(cwzjQ_' );
define( 'LOGGED_IN_SALT',   '>3ea>RNH[t!]Lwfh]PA7V|1ej~}Af8->]:iDvEPx]`~=q,u.%8v><,Ty=}@;(_3T' );
define( 'NONCE_SALT',       'Q|KRWmtL6m5 Ub(!O{S`8Ug6zP-p<pEDk&Pj*90cB(7=o1kpr8BWNFg>p`sRU]t)' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
