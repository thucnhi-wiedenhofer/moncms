<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'moncms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tZc+7Hn5@S_z+W2GeVBM?(ge^Gu&^W:~Q(/}3h@{GD(:|3h cd@b<RGvaSV!gS39' );
define( 'SECURE_AUTH_KEY',  'LS9Z3+->Q$?/v.zy81*7ivZcjU1wtFjqtzuo>/l|/p,SxE+t<&eC9=Qm%+dl.e6n' );
define( 'LOGGED_IN_KEY',    '*/%?A8@5}4&i US%2wM^y2(4@(35^ EpNZb=0?_AD^M$^xu}tk6L::1=:ch.dw98' );
define( 'NONCE_KEY',        'o)2b_Nkt~_iKVFyj%d;aAlY$H6-7E @:gC=;JWP+3|{=&wM2$MPkBVD=r4V[l0?h' );
define( 'AUTH_SALT',        'q #.r9,3/gSH4wg3M JIT|Qa {v*e;)}y8yxruk.a#b(RHWsvfS[S[07ku ;rG9e' );
define( 'SECURE_AUTH_SALT', '6m}MFZq/?|OSx.,&>p]cBE:<H9sLTjM_DE*%ly ;4$=B5J3W2{|lM=dd0CIs=m:I' );
define( 'LOGGED_IN_SALT',   'AR_pS=-zy*N?%.=3n:nIC;BU<1>vybooz3WX-J.XDu[S7r{c |)I *x%oZFJ2xke' );
define( 'NONCE_SALT',       '2!]&G6!s.G^eCS?fHNWlb($z5*Bu7z[h.`j_woT|*,KGs61v(7E5kPk%tvMPmJJ{' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cms_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true ); // Enregistrées dans un fichier
define( 'WP_DEBUG_DISPLAY', true ); // Affichée à l'écran

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
