<?php
    /**
     * The base configurations of the WordPress.
     *
     * This file has the following configurations: MySQL settings, Table Prefix,
     * Secret Keys, WordPress Language, and ABSPATH. You can find more information
     * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
     * wp-config.php} Codex page. You can get the MySQL settings from your web host.
     *
     * This file is used by the wp-config.php creation script during the
     * installation. You don't have to use the web site, you can just copy this file
     * to "wp-config.php" and fill in the values.
     *
     * @package WordPress
     */

    // Required for batcache use
    define('WP_CACHE', true);

    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'w0rdpress_db2');

    if (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {
        /** Live environment Cloud SQL login and SITE_URL info */
        /** Note that from App Engine, the password is not required, so leave it blank here */
        define('DB_HOST', ':/cloudsql/antiochwp-a:sql-inst4');
        define('DB_USER', 'w0rdpress_user');
        define('DB_PASSWORD', 'DppkF2lcshj_gag1s_n9X');
    } else {
        /** Local environment MySQL login info */
        define('DB_HOST', '127.0.0.1');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'password');
    }

    // Determine HTTP or HTTPS, then set WP_SITEURL and WP_HOME
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
    {
        $protocol_to_use = 'https://';
    } else {
        $protocol_to_use = 'http://';
    }
    define( 'WP_SITEURL', $protocol_to_use . $_SERVER['HTTP_HOST']);
    define( 'WP_HOME', $protocol_to_use . $_SERVER['HTTP_HOST']);

    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');

    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');

    /**#@+
     * Authentication Unique Keys and Salts.
     *
     * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
     * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
     *
     * @since 2.6.0
     */
define('AUTH_KEY',         'v&w{>|H#mD *r<_Ram`PD-(6Fvkz>m~Qm,VJXV0)NRu& 8dJ,DY758:~*(}UC0Fd');
define('SECURE_AUTH_KEY',  ' mxfJQO;:j;|v^ b<Gjl^`u}lWUD|nRt(v~Q!@Lq-.Qco{&J,hEX(C(SV9N_V{j!');
define('LOGGED_IN_KEY',    'oIf:cfo(%Yc(-N0kai,*c>n4).djuHLC7Kt`hY#rnSypM[o9Fs~.cyb3ZkV2EmS2');
define('NONCE_KEY',        'b(EXp3s?V-U^+5$T!~M]f=~KXvT]}m(gWy43].|[$U&y!3{#0pmfq*^||P_XC:3Q');
define('AUTH_SALT',        'jGFd;cv )EuE?))K`JQwt}I>$<#p~|>M2q rt*6H$BMNdqOnUZ-*n;g/8P?|ez6a');
define('SECURE_AUTH_SALT', '>lMwzs[g~sm<{$T;|XPKxW[6nRoC-{i5O<?qgqrIUBaCa}~OyJoC{I%XM}gL$_x!');
define('LOGGED_IN_SALT',   'BUpfOSP*yXm hW~OX+YjTHu?FMQ9_tTiAg@O`O-5Yawzj0j}q{[x@BzYF#W+Phb*');
define('NONCE_SALT',       ',lNm&xS}GdjHcgEPZa;YG}n?)d<hkgWz}i8|XkoI!>!WR!8zKose-9q0gFK;8|G9');

    /**#@-*/

    /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each a unique
     * prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix  = 'wp_';

    /**
     * WordPress Localized Language, defaults to English.
     *
     * Change this to localize WordPress. A corresponding MO file for the chosen
     * language must be installed to wp-content/languages. For example, install
     * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
     * language support.
     */
    define('WPLANG', '');

    /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     */
    define('WP_DEBUG', false);
    
    /**
     * Disable default wp-cron in favor of a real cron job
     */
    define('DISABLE_WP_CRON', true);
    
    // configures batcache
    $batcache = [
      'seconds'=>0,
      'max_age'=>30*60, // 30 minutes
      'debug'=>false
    ];
    /* That's all, stop editing! Happy blogging. */

    /** Absolute path to the WordPress directory. */
    if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/wordpress/');

    /** Sets up WordPress vars and included files. */
    require_once(ABSPATH . 'wp-settings.php');


