<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'diagnos');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')e#r$lg >mlJAkM5{IN3+T;0/8F40d@`p<d9x#|X!e#/>=VGou5^W )j+^ou@h0)');
define('SECURE_AUTH_KEY',  '{C,7&41Y{G#a)59>*yuMdUYnsY05Tk>7jpM6fue@2`KOtD)+#t^0oh{+]><T1!BN');
define('LOGGED_IN_KEY',    'rh6YZjci h^BWn`Q[]<bZe}s6T<oIb|!c_yRr*c-%S$3v9BTR]?SS&@i4e#*<k0@');
define('NONCE_KEY',        '5 M-:;(Uhz%w}>S`z$zX(NV2>4={vnXh*!)7O?^RCPh|!$PR>>BeMYsM#<:0G0#|');
define('AUTH_SALT',        'eQ(C (;eX%~OF58e:H.gc+p%tA}!bNN,wv@tr5xC~tg|9{p eJ35Y8mPw3wnP6ZS');
define('SECURE_AUTH_SALT', 'K^;8~O=,,~PAZ>5X%S%minHpXVGW?LCw#X{`WNTae%AVIS %[qL+(o<E[S^Y&pAz');
define('LOGGED_IN_SALT',   'lpt2.fXWLdRO(mG }8gxxVE~$eks*vw!*1mM9e}g:C;YIu=sm0[UoqdXnDPo?U6!');
define('NONCE_SALT',       'I)=uPX^+Tuv6K#SP!#X>/_h*C@89=)yQ0n6#Lfo[!0I(k[BCvGK1Qw$d*GF)$LF~');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
