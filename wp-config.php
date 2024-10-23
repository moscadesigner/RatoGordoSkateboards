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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ratogordo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'ratogordo' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Novidade@01' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'ratogordo.mysql.dbaas.com.br' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '7xFEWhVfxI[kMt7dOF}9$h-MF;xKv3`S^r T$f#8r$sK4Hop1i-^rIfVMVC$crBG' );
define( 'SECURE_AUTH_KEY',  '?0fXn&P/t016bL]AatN12>)WX.,*K2w>K*3kK/#Mwq`j{b:0ACNnaL`rb>0BH!Lu' );
define( 'LOGGED_IN_KEY',    '%] *aw4y^&L&t=n|&{1>dNid90lY,LTLO{I=B5V4fdpC~_HDU8K[|K:J&%N4J3UR' );
define( 'NONCE_KEY',        'Q+cY~W*=0(f5<g`v*yH{S:G |s/Z>lpm}B4XC|q_}wlAcr#.SB{UQ)qCq)|HRh(#' );
define( 'AUTH_SALT',        'yg?Qj6=b# V /@gQF(X*qZ^T#W;3:`a3W31I!hG]75p3XOq8+r<*oa#MlCcG;&y6' );
define( 'SECURE_AUTH_SALT', 'rXkm=B(sJCD;/j6=V,YdMqsVEyVzfba:7.}EWm)RJ_c!D8D0z}TIK_N(e!>mK<7M' );
define( 'LOGGED_IN_SALT',   'TBC{ld_yUJfg4!^IJeVn3OVuo8)2$w3!6mBK#J1]45.|9B_J!;.T3}.ut6[PS^j#' );
define( 'NONCE_SALT',       'Y>_k:<g=zh]qtSzHQ!ZoiBRe6@0p.d];j%`uZ+RVRO:%*pIsh{w23DD90rq&PbW*' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
