<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/P>{s$YT:Hsa:>m]DHL>[Y~P>]|{YN)9%0ViNCOo^F=m+>6~J)9DUlrjVBF<V9Sf' );
define( 'SECURE_AUTH_KEY',  '_XcSj1d.7{:1;B*2yQ}Ku:Nh_P)IXMyh*,4*LqFeTeZWM+{Hbebp5_HLTbO=FReD' );
define( 'LOGGED_IN_KEY',    ',0iSw|gtSj&DEK:IN4(n=gWz%dk*5E&]L<ar4tkM(ha%&yuVFbO4i`I|1D`#BB M' );
define( 'NONCE_KEY',        ' Z3tVDfO]] (fpdR<MCk5(H:m1Tv9,W%&`7Eq]8i*p::E)XHG*aJBHc3nk&L{sYQ' );
define( 'AUTH_SALT',        'e^1/8;CxwLEyG_#PF;oS+CK+@rUsW-!rGtGp?cM-6Z=X:xXpTjZaof5$RQ0U:oI[' );
define( 'SECURE_AUTH_SALT', '/9V:vu-I!,*OCBXM_+|4dCyjK#qX)RqInnse5+mIo;68}tj.$+p%<*up@=Y2iL?D' );
define( 'LOGGED_IN_SALT',   '>Dzr|6$%[k@/b^:fzq##Hlpe xDl`&WI]gZ(ynKd>{oo@y$LBe7f8yF,%Xv|n@{u' );
define( 'NONCE_SALT',       'V;>-xA;hKC]dxt}grz.Qd-xmA<1%pB>?G<hf,;]%BWWm<46hdQa5zs4 )HL)%FyA' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
