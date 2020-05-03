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
define( 'DB_NAME', 'competence4bis' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'H`8!ou4_tA2{r4i6#F;ya6 [FGy>};2_5?3Y%=<Fd8{m*Cf6_iZnFI/vGPbs1c%w' );
define( 'SECURE_AUTH_KEY',  'k]uy_Ms[M8*!=~ct4P>iNB8Ofc?t JzfSB7/SCy0$|-J kslK&OKZlKP]P{FU^jt' );
define( 'LOGGED_IN_KEY',    'Fg}wv$XK*TwYk :;s ]s072)ijiflN&=sn(c]d}43U5>0;7UWm/R*XT8p>SLf]4T' );
define( 'NONCE_KEY',        'r`Szr3nWz[4GeAtQG0Lq_{]4scdT>6_RA5actsyIxD?a%_MC?~w>tB6:ZADOWO^s' );
define( 'AUTH_SALT',        'n<QV<E~ednQZY#NWeI71?:riOd2Fw1^wtN1&#qvOxZKey%3DNfPNZcN1m{y>2rX2' );
define( 'SECURE_AUTH_SALT', '#JfDel^EdE5v:a(LZh (ct BsqksEeq4F:.y*yG77L@Q&U,d!5tL=H+4(u8]C2:l' );
define( 'LOGGED_IN_SALT',   'cXpPD2K^mBc|z;T|6FRS[jU*Ja3- 9rWk^wz$q}k-6>jDdISosa0D]#.SV/N`vzV' );
define( 'NONCE_SALT',       '$ec7W}[GI0OfOz7`Am<*jJbX.d2~VG^DAg>*T% e7CqGA<@}I(]5~?9J_;9j-T>c' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
