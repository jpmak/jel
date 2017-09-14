<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'jiaoerle');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
/** 正式服务器的这里添加密码就可以了 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/** 禁用文章修订版 */
define('WP_POST_REVISIONS', false);

define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#;R(:~udRhA|y+i3{>3=5WbgKFoqqZ962Br$(2g|P9g[WH2te4i?n%RV)+KO)x)h');
define('SECURE_AUTH_KEY',  'e(5~33fr6#cqr9c*ZSSltVS91^OS{|;(gIDJ_< .H:.wscU!/&4W+)-B8RG|zxQ/');
define('LOGGED_IN_KEY',    'S.fpwjv!.?&y&*Gnal=4`7oZ}1yWqE#KkQ]+IHq el1%_d2*C}o5bEAcn*u[<o+t');
define('NONCE_KEY',        'RllTibxMj0ID_r]__toe!Gj0+CyLAk^xsbHD=hTmrSoycP@/AywDe_JgPz 8:Oup');
define('AUTH_SALT',        '*aVC% S,wSJXJtIVjJ7FjNIAANmCK&Tbr$aqI~>k]q6WDw5u_o_Pukj(?9uX;We|');
define('SECURE_AUTH_SALT', 'S7:%kSYWDqW,EYJTRigGOi-6|nTLvOhl2)P2X.F9cxdcNov^n{GmM{B-}sr{M*-Q');
define('LOGGED_IN_SALT',   'Cg)[.%Z_9z%GqIsuTN1zdF+pd%E.?n(rIgL1yCC8-glyxP(*X>dJ/1m*k0u_w[wy');
define('NONCE_SALT',       'fI$P,>=U-pJej6DSzfTQdM]8b^Y9Xy?N$OQO3]>a>UF|k%pvuLaN..AU-qv;e<-7');


/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'jiaoerle_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
define('CONCATENATE_SCRIPTS', false);
require_once(ABSPATH . 'wp-settings.php');

