<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'Bateismo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[5co81S|y~1crl0LA=nK)S$*uhihX Dj-*]?>J`]VfwW|_WcC-mFD;Jj|5TBKM4{' );
define( 'SECURE_AUTH_KEY',  'x!0vbF[r*zw8D:BzXrRv;$`v~srkraD:WIW,s%QubJ_~7iXMmcN{CIb>)$Or5Uf`' );
define( 'LOGGED_IN_KEY',    '>>.&0?-2xOVn_EqREf3kpu:~yJ|9BX3}n._ldeep$OMAyIeX~_G=ow(s3iX>pAjG' );
define( 'NONCE_KEY',        '>?l(i*%X-WP>%POQwC>|lu5@E~Tyl7y@guY_Kt>TMm$KoT=^494pp%_J|xx+4_4<' );
define( 'AUTH_SALT',        '>o8vecVI)|XOJ498#guiao^kSC0 :=RlM_i!r:$kh1,b2|XIrTWkR|V_9xP`U,zb' );
define( 'SECURE_AUTH_SALT', 'b-3j@lne>`,l5=snznQ([m,V~]O})Ia~>|KY_bg@%sPkQ~<2g!@LtqEain4BA7</' );
define( 'LOGGED_IN_SALT',   'tLmCV-!03ypxy4gwq%TafnLRcK(sD~;~_TKd[^+oS%)D2]6a0q3FD.J;q,c?rrR,' );
define( 'NONCE_SALT',       '3iN`as~&L{EQ_I*QXP59-[$^g!rx-9Oi}{}O!`sHR(l:u``?].Os{5b#h_w_Rfs(' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
