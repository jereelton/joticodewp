<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'joticodewp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'devel' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123mudar' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kEXKB0x) ;z iuoM$`BM&^5hCo%^nHyU3VXWal@pm]`;B<rvKMeP;b!Pqx].a^t`' );
define( 'SECURE_AUTH_KEY',  'c*vGJxov3bO;2@LG9N}dq2Jw((=R)#V91z7zKfP!41eAck!)}m~U0,ag:0zIDk;`' );
define( 'LOGGED_IN_KEY',    'tIk_]`;fS}{@L@]rn;)0DQnz~7E55C$_Y@U5.DO59Od1<bnbfFQ@PB,dsEFj{<M ' );
define( 'NONCE_KEY',        '?h-t*@w?hhEJh!3>55}Bz+2~;T@hY_QOi_*nt3j?$,9RC;HLcAqvG+UZFXf`d7@d' );
define( 'AUTH_SALT',        '!wp@$#VvywGC9!8x}>9dsSr#zUzy:CeX|@19z*WW+d[h&c{[.6!&#a6n:<]UiAic' );
define( 'SECURE_AUTH_SALT', '~o*R_W`qqP5.@dbf-7t(NEr}98)(z%g=xR|J*,ga8%YTs,;9yTXnTxJUa_WOPg{>' );
define( 'LOGGED_IN_SALT',   'V!fW1yh#Y[sY?s?F&1)49Y8s;/)e C{#~u1c3LuN[PDl<<X$>1/:avRxM1HSOAmF' );
define( 'NONCE_SALT',       '@j6uAFS&i_bkVPTZy*ICI&+$HQB2G.LY<0dGaR1cW?vF3Be ;!nXEQNa_oG59Alo' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'tb_joticode_wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
