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
define( 'DB_NAME', 'andalousie2' );

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
define( 'AUTH_KEY',         '{[gOa`$s{A;aZ}}h-OA/:$,UBG+3=}q0VkNp`H~|oC(^7$G`c)fb/V6=Uk}(WSG2' );
define( 'SECURE_AUTH_KEY',  'xM@Br:[q.,MV(Q5sp?OF4!VyypTDA9m%v!slg(urgl]k#z.P|Hu|.-4!H498+e5h' );
define( 'LOGGED_IN_KEY',    '!AA{4PFk&]?R-1z9K=a8iO]5wWv=txEf[TCY+ 6_0X]x$:/8n3^n-pe$a21 Lk*+' );
define( 'NONCE_KEY',        'BTGvBnvk|j@ydIPoe#1X0!a.GQzO?uDr|Z/J%ia]=Z}x7j=^9#vSk)a>z6$ M(uc' );
define( 'AUTH_SALT',        ',6q5Mqs!@(SDwL?8zB)BM<~v0L0VaYNByPYA5tHjZlP5CWQ8M+MFAm;fBQolGV/u' );
define( 'SECURE_AUTH_SALT', 'gmA,WZeN(Q#^xKZRdAdFep_5q[xZPCJOzjI}Q+_~p4Wi{=c7^){16-[l*8AJqOFL' );
define( 'LOGGED_IN_SALT',   'Vtp-(k|31:>Xtrz,ImU|:Ij=+VGrm)#uSv#p8VE|rm=q#Hu<=({w8e|O3D?@=La?' );
define( 'NONCE_SALT',       'S7|T?|B|]Ec>fZ++MhD&Y3Wq3{?&2F|G=FYPSRBNJoez)LOHMD(PT:`WRF@h&zCj' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
