<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'KHCOMPANY_db' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '86|<CfxI*qyqLQgBChZOQkQ;e*_FIV4sU?Pu <#ymG5Kf*}RMz>I4TYjv#/R/EPC' );
define( 'SECURE_AUTH_KEY',  '[.AzvrnCgm!8pN#B2At/QAJETCty,yvD.n4c<(_+99^1}AXsSUA>>ZWCLv-mF^>m' );
define( 'LOGGED_IN_KEY',    'UF/baPLaDKCG@7,/{lwih9*DHZD(USG}o]WM#uH;U.zLMDFRx)Vw+rWS3D!.p:#F' );
define( 'NONCE_KEY',        '#(55*{mZ<A&}`4BV%nmv0bUv:Qp4aM+Vqt*`iHY0!<lLyhjL&-Ya_Y]}k3@fCj3>' );
define( 'AUTH_SALT',        ')lM=lY{&&65[G(Fz5-tJ*PP]W!82e27Zc;E;:*]rJhY)b:`8`^$4~rGOr-ymPY$b' );
define( 'SECURE_AUTH_SALT', 'rZ>]R oz:H-3WJHM^-dL+kmP9Q5AHV3np!P,`28$HkFF u^ZO-no(jwjRVp^<VR2' );
define( 'LOGGED_IN_SALT',   'eCEz*TIGMnqeKm8Twa@RKFn@lrgD9vi$A(IlYGF0eK;d#w}u{nq8$o[dWHw;}^rd' );
define( 'NONCE_SALT',       '`JpJ,tk&RnEu~6PN2^Vk34N-n&ye7Mk=PD6o4HCR7>G~9yNT~&!]Qhq+wHn2L.I=' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
