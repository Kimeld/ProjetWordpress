<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_projet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0hqCqBdTY`{CmYH (lGTQ$o(FtpkWFDz0k<W]6,mM K!2lbF-?u^#g>E(`e2).&t');
define('SECURE_AUTH_KEY',  'j`uRhp<6jWkFrgOCf-ZvfXm0J-tv~Mj/6ZSki~V#1~ci*^b5C$3@EEh<3mMK;sX*');
define('LOGGED_IN_KEY',    'gk;ED.,i0#AX{~Wbpo[fX[9#)/d:c5EM/qrF,sng~U6c2B71@=/9%^~k$JEgk=xG');
define('NONCE_KEY',        'lxb~K%YHeUiS:DC3A(L7C<z(PshcOftgCJr_US5h*.T6iAwgewD^L(2:]W+Qx)Ot');
define('AUTH_SALT',        'ty4>ZI=C>0I!gZ|r(64S%y(7Jy(*ti^B_(8T@ K!Verm/xzeB,F!({uisxbC8G(B');
define('SECURE_AUTH_SALT', 'm.!ESNMF{|F3;~:b{WCqMh$e[I%P;`@>-9&we6T!5-wu+~+3q{GtP@3$dvoS?cgu');
define('LOGGED_IN_SALT',   'buT,nA#N`{&hIp(^k+s8?mNQB=yP;h?eC!!=$Za/~f _C/gF2_;;- ,quEB09Xi6');
define('NONCE_SALT',       'i?i5@eqq<iL<*`l;h@OJ+`Y+PS99V:cpXi{OE>]G~qCLJ34(;%,h;S(w++xfr&9$');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'BGDLS_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');