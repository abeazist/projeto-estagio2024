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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'gpsbqmbanco' );

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
define( 'AUTH_KEY',         'zyt$ZF_QVsl@BEMs9IJVRK32Vb#GA2.3<~E$Jq5,{$=>] ?G;Lo}1]Eb$C)h(JcR' );
define( 'SECURE_AUTH_KEY',  '#uX7-4nl2ay;k1Cu6qBs];(,i8Zp3MCr}i>h m x+c_BeUe&O6rydPEM{7FUz&4l' );
define( 'LOGGED_IN_KEY',    'WyX&omsiF#V<v#5d^0-bVz<r4t,e^I_S!T1Lu(/i<=Yh|W<Z}.A(;QT=)(dJ~3|=' );
define( 'NONCE_KEY',        'Qd( #d_Pkxx9EWPsPNqn@fWth}N{[./=:.pI931$EDdN;YdYyaxVYe?wx}@,T< i' );
define( 'AUTH_SALT',        '=4DK,eyW[n82u Q8fpUr7nZ37T/[1_FT%{Qm0Qpb LdgF))#<qo1{x}OxVab`L_ ' );
define( 'SECURE_AUTH_SALT', 'YS^8ishNW/|(wGKk-eu+?8t<tT[.bc/46F3TAC#FmuGkGG!ogikQH{.@&1(G}frq' );
define( 'LOGGED_IN_SALT',   'oS?ThX6^y*A}QIUGGF1T%yL(LKN6TSpOJsQ&sY?)3o.5)ih_z4Y>7tnRSJ!nzx<n' );
define( 'NONCE_SALT',       '.R!adr,9CNaRDrd $,/U#I+YA0#$H-Mia~#pkpOP&N7dU^hvL)>[_kekoNVC(BK+' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
