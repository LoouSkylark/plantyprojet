<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'plantyprojet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',-vqE*H*@X Xn?rBl]vDu7uzBC<b9ZNm@MG (jq&*~.`5%N?nZAFZr,amOXM##= ' );
define( 'SECURE_AUTH_KEY',  '{(FT/a<I7@=?V]IHawFyyb~5#+)LYGsRbs>h,Z>l{w3DC?4~,nOLQ+^L[ttC||sZ' );
define( 'LOGGED_IN_KEY',    'nVLTeI2SFLz8s}Z-pP8D?%?6=5z`XorS9IJG%wi}2-8}b#wV[o0|579ZUY<.X@ ]' );
define( 'NONCE_KEY',        'RG>Ng&jf}I+0uc+gaIo}1mAc*K&!V(zbY`Ss>h=NcYFZl~mM>caKuLexa+[L[s@a' );
define( 'AUTH_SALT',        '/+?odL*`(Ej:D!bk+6?UdiFZ`ysEOT90_u@dD{{%p?L1 d2.ocKL1.h Ze$mKjRC' );
define( 'SECURE_AUTH_SALT', 'Tw06USY~^7nKN)lqwCSbQ<jfE/C/!ED-w#@A.zU7/sNc6~kAi>,u!:dd5B}{awJp' );
define( 'LOGGED_IN_SALT',   '*n!iu,&Y&`L7BBaZE+F~!=0N/G[) %ZC Ki.s$gqJk*FqM~/!~UVa#6jaW13D!2^' );
define( 'NONCE_SALT',       '7pu=D $W{3B~wkm3Z#6;?pvn6x5+pz?v#xtKP!rJJ7{==t2jS4l+8S@|h)i+NOM1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
