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
	'ACL_U_MCHAT_USE'						=> 'Pode usar mChat',
	'ACL_U_MCHAT_VIEW'						=> 'Pode ver o mChat',
	'ACL_U_MCHAT_EDIT'						=> 'Pode editar suas próprias mensagens',
	'ACL_U_MCHAT_DELETE'					=> 'Pode deletar suas próprias mensagens',
	'ACL_U_MCHAT_MODERATOR_EDIT'			=> 'Pode editar as mensagens de alguém',
	'ACL_U_MCHAT_MODERATOR_DELETE'			=> 'Pode deletar as mensagens de alguém',
	'ACL_U_MCHAT_IP'						=> 'Pode ver endereços IP ',
	'ACL_U_MCHAT_PM'						=> 'Pode usar mensagem privada',
	'ACL_U_MCHAT_LIKE'						=> 'Pode dar like em mensagens',
	'ACL_U_MCHAT_QUOTE'						=> 'Pode citar mensagens',
	'ACL_U_MCHAT_FLOOD_IGNORE'				=> 'Pode ignorar o limite de flood',
	'ACL_U_MCHAT_ARCHIVE'					=> 'Pode ver o arquivo',
	'ACL_U_MCHAT_BBCODE'					=> 'Pode usar BBCodes',
	'ACL_U_MCHAT_SMILIES'					=> 'Pode usar smilies',
	'ACL_U_MCHAT_URLS'						=> 'Pode postar automaticamente URLs analisadas',

	'ACL_U_MCHAT_AVATARS'					=> 'Pode personalizar <em>Mostrar avatares</em>',
	'ACL_U_MCHAT_CAPITAL_LETTER'			=> 'Pode personalizar <em>Primeira letra do capital</em>',
	'ACL_U_MCHAT_CHARACTER_COUNT'			=> 'Pode personalizar <em>Mostrar o número de caracteres</em>',
	'ACL_U_MCHAT_DATE'						=> 'Pode personalizar <em>Formato de data</em>',
	'ACL_U_MCHAT_INDEX'						=> 'Pode personalizar <em>Mostrar no índice</em>',
	'ACL_U_MCHAT_INPUT_AREA'				=> 'Pode personalizar <em>Tipo de entrada</em>',
	'ACL_U_MCHAT_LOCATION'					=> 'Pode personalizar <em>Localização do mChat na página de ínicial</em>',
	'ACL_U_MCHAT_MESSAGE_TOP'				=> 'Pode personalizar <em>Localização das novas mensagens do chat</em>',
	'ACL_U_MCHAT_PAUSE_ON_INPUT'			=> 'Pode personalizar <em>Pausa na entrada</em>',
	'ACL_U_MCHAT_POSTS'						=> 'Pode personalizar <em>Mostrar novas postagens</em>',
	'ACL_U_MCHAT_RELATIVE_TIME'				=> 'Pode personalizar <em>Mostrar tempo relativo</em>',
	'ACL_U_MCHAT_SOUND'						=> 'Pode personalizar <em>Reproduzir sons</em>',
	'ACL_U_MCHAT_WHOIS_INDEX'				=> 'Pode personalizar <em>Mostrar quem está conversando abaixo do chat</em>',
	'ACL_U_MCHAT_STATS_INDEX'				=> 'Pode personalizar <em>Mostrar quem conversa na seção de estatísticas</em>',

	'ACL_A_MCHAT'							=> 'Pode gerenciar as configurações do mChat',
));
