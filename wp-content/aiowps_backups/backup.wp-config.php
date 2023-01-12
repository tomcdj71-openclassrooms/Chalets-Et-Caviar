<?php

define( 'ITSEC_ENCRYPTION_KEY', 'cyQxPyxrQE9wPmJbWkM4VnROcXVmPzlnSGlZWmlya1M3cHY4ZEFpTlt6ZTA9QiE6Q3w7IWEkaDVqWjVjLVZRVg==' );

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
define( 'DB_NAME', 'cec_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'mariedubois' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '9OPYhkcwjCy5' );

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
define( 'AUTH_KEY',         'A]#H4UF%!>|.U}o|`YNZzv|qrakL6KfALJ:GqbrOTtt-&oi`Renve6*oGx IA^eD' );
define( 'SECURE_AUTH_KEY',  'rnf1_paxo.FD;<+rsd2oQ-DvfK0eNIQghCYi%>yHf!5Zsan&jx+pL5v=H7}nsqcF' );
define( 'LOGGED_IN_KEY',    ',Hd+*Hs^=uvDnF~E,w#p9>(&y/IPP!sy)qM/>7f8]xG:nFzbj):3P,25])?($vDE' );
define( 'NONCE_KEY',        '~1?2}EpyV,^?R`T30st<}-p?I-iU)9dxQMknUf<y7ftXv0~k~7O`AvV7a@bX=%wN' );
define( 'AUTH_SALT',        'vTZ+^<_?<V:m!Z4#j-g6j*|+oKzDk3metYm&jrL?b8YLa0S1u,6B*Zj6k5l8;3[4' );
define( 'SECURE_AUTH_SALT', '&rR{iA2-w=WRQiO<IUx-uSb^CBB<_)}E3ogiWgqw%dVY;o.Tls*KG5Q32OHb@YBi' );
define( 'LOGGED_IN_SALT',   '-QMdCl nsHt~Uxc`TS}aTl)xYhO.<5g{8p$`fL|KRt+cvgdD$|}r/Sqd+Puvxjv]' );
define( 'NONCE_SALT',       '.hV*ZVYNk/;DHERou$>m*vq4B9i]98{z$ooheIr!Lz1Y.z]`oG`A70XW[~ `?;iR' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'yahru_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);