<?php

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DB_NAME' );
define( 'DB_USER', 'DB_USER' );
define( 'DB_PASSWORD', 'DB_PASSWORD' );
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '7kPgr~<=@87Z|fFhTq!AWcCnyT2O-[FEw}D&<GmONe,TQ?Q8XilK+hwkq4x)0#_?' );
define( 'SECURE_AUTH_KEY',   'ltQ+lna,}cckH10+6S:GA_(AqsU6tN.I@(Unqh;2,9z0$.xbPrC6 m9IP#`7TG|8' );
define( 'LOGGED_IN_KEY',     'Lh]8x#4nI[t;E`]E;cW_4$8We*F+KZ=.FcQY>kgc W2Sa2-l?kXPR/1!F6EWb~%k' );
define( 'NONCE_KEY',         'i:HyWp0YSfYd$gv{xwK43xftcH)MAVTORU62i[)wf@+]nn>>@-LN  Wn7M`I&t#Y' );
define( 'AUTH_SALT',         ':8Uh]oOyr4sA(7z=tyyh;&&/}*7%|3kjPUl;K$%yGvwXzE1i&fcr$qIb_fH9Dl4{' );
define( 'SECURE_AUTH_SALT',  '=bLd]_r-LcXe8M*(#]O#_cyrCWiXR(xEk~YGS#*y^LOEdEdO*2,Md<o23wyJlC1p' );
define( 'LOGGED_IN_SALT',    'b]D$lirN Y[c#on6Wqgz%hiBMAdn9p S5>-9{[d[!)S/v+Zxh)wn#gI?T{Xcm|1>' );
define( 'NONCE_SALT',        'xm/f<r5o)yw/}Av46^eUh6Vq9W]dEmdi{{zA}ob+9w!1$p#f~`]q2)Gu~:Ps`T>K' );
define( 'WP_CACHE_KEY_SALT', 'd|aT*a*>kmQxk&&,Y6Yukq$qPGjJmqCZ[`bQA7Q8y<?:KRjz7<N!L.reIhBOh7ZH' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'WP_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */
/*Custom Content Directory*/
define( 'WP_CONTENT_DIR', dirname( dirname(__FILE__) ) . '/app' );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/app' );
/*WP-SES-Mail configuration*/
define( 'AWS_SES_WP_MAIL_REGION', '' );
define( 'AWS_SES_WP_MAIL_KEY', '' );
define( 'AWS_SES_WP_MAIL_SECRET', '' );
define('WP_HOME', '');
define('WP_SITEURL', '');

define('AUTOMATIC_UPDATER_DISABLED', true);


define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */
