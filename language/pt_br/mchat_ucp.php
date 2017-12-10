<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.0.2] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'MCHAT_PREFERENCES'				=> 'Preferências no mChat',
	'MCHAT_NO_SETTINGS'				=> 'Você não está autorizado a personalizar as configurações.',

	'MCHAT_INDEX'					=> 'Exibir na página inicial',
	'MCHAT_SOUND'					=> 'Ativar som',
	'MCHAT_WHOIS_INDEX'				=> 'Exibir <em>Quem está conversando</em> abaixo do chat',
	'MCHAT_STATS_INDEX'				=> 'Exibir <em>Quem está conversando</em> na seção de estatísticas',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Exibe quem está conversando abaixo do <em>Quem está on-line</em> seção da página inicial.',
	'MCHAT_AVATARS'					=> 'Exibe avatares',
	'MCHAT_CAPITAL_LETTER'			=> 'Primeira letra capital em suas mensagens',
	'MCHAT_CHAT_AREA'				=> 'Tipo de entrada',
	'MCHAT_INPUT_AREA'				=> 'Campo de entrada',
	'MCHAT_TEXT_AREA'				=> 'Área de texto',
	'MCHAT_POSTS'					=> 'Mostrar novas mensagens (atualmente todos desativados, pode ser ativado na seção mChat configurações globais no ACP)',
	'MCHAT_DISPLAY_CHARACTER_COUNT'			=> 'Mostrar número de caracteres quando escrever uma mensagem',
	'MCHAT_RELATIVE_TIME'			=> 'Exibir o tempo relativo de novas mensagens',
	'MCHAT_RELATIVE_TIME_EXPLAIN'	=> 'Exibe “Agora”, “1 minuto atrás” e assim por diante para cada mensagem . Definido como <em>Não</em> para exibir sempre a data completa.',
	'MCHAT_PAUSE_ON_INPUT'			=> 'Pausa na entrada',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'	=> 'Não atualizar mChat ao entrar uma mensagem',
	'MCHAT_MESSAGE_TOP'				=> 'Localização de novas mensagens do chat',
	'MCHAT_MESSAGE_TOP_EXPLAIN'		=> 'As novas mensagens aparece na parte superior ou na parte inferior do chat.',
	'MCHAT_LOCATION'				=> 'Localização na página inicial',
	'MCHAT_BOTTOM'					=> 'Inferior',
	'MCHAT_TOP'						=> 'Superior',

	'MCHAT_POSTS_TOPIC'				=> 'Mostrar novos tópicos',
	'MCHAT_POSTS_REPLY'				=> 'Mostrar novos respostas',
	'MCHAT_POSTS_EDIT'				=> 'Mostrar mensagens editadas',
	'MCHAT_POSTS_QUOTE'				=> 'Mostrar mensagens citadas',
	'MCHAT_POSTS_LOGIN'				=> 'Mostrar logins de usuário',

	'MCHAT_DATE_FORMAT'				=> 'Formato de data',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'A sintaxe usada é idêntica à função PHP <a href="http://www.php.net/date">date()</a>.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Personalizadas…',
));
