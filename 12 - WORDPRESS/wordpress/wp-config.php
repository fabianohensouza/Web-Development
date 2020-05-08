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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'n_}ky/Bo$<Q+Lg399pUBo}Kc6a+XCS1:[W[udso_*P:N3BkRo3^&?|LFze K>^:5' );
define( 'SECURE_AUTH_KEY',  'L,0o5vtMu6XAUD*9}Q.RR^6Xhe:]%k2V;,rXV+f$O F/#-&>)T2jlaTJ2xjJ V!_' );
define( 'LOGGED_IN_KEY',    'YwDL#`;YBOv_Oz};}^7<5Z>loAq]$&KQHf,-O+Xc}X~ZK5$KNKL7p:r#b(h48~~0' );
define( 'NONCE_KEY',        'hy0l>,SfuKj,<pJUykCO|sl[;tcYy?j<+~lT[j?N] n)VHR8R]KqbRuG+[$z%TJ*' );
define( 'AUTH_SALT',        'u>zSm2$#*|Ht64a][%;DT%T[b7,s.< :Kq=FJ2z3_x4VZvdhAEd7Cl5.@b]f^~A+' );
define( 'SECURE_AUTH_SALT', 'N3L|^{H<P/(%[/(kRYD[yt7dI&pjVy}K~Z$Pw$o5{f.tesXD7uHeMYXKy&Mn3I#6' );
define( 'LOGGED_IN_SALT',   'eO@TA+KHKAQSq{1K<fo1*2.y(ZWXyL*GRpQ[A*&1BRp_-r4(E5Gqf/B{C,>Fmsz2' );
define( 'NONCE_SALT',       'wV] _A%&:0#Y^xaHKP#J6kZavC,/hv|E1)+_>vC8}X6?ILo!1`>:>X/SQeJ5v.)~' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
