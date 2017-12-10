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
	'MCHAT_TITLE'					=> 'mChat',
    'MCHAT_TITLE_COUNT'				=> 'mChat [<strong>%1$d</strong>]', 
	
	// Who is chatting
	'MCHAT_WHO_IS_CHATTING'			=> 'Quem está conversando',
	'MCHAT_ONLINE_USERS_TOTAL'		=> array(
		0 => 'Ninguém está conversando',
		1 => '<strong>%1$d</strong> usuário está conversando',
		2 => '<strong>%1$d</strong> usuários estão conversando',
	),
	'MCHAT_ONLINE_EXPLAIN'			=> 'baseado em usuários ativos nos últimos %1$s',
	'MCHAT_HOURS'					=> array(
		1 => '%1$d hora',
		2 => '%1$d horas',
	),
	'MCHAT_MINUTES'					=> array(
		1 => '%1$d minuto',
		2 => '%1$d minutos',
	),
	'MCHAT_SECONDS'					=> array(
		1 => '%1$d segundo',
		2 => '%1$d segundos',
	),

	// Post notification messages (%1$s is replaced with a link to the new/edited post, %2$s is replaced with a link to the forum)
	'MCHAT_NEW_POST'				=> 'postou um tópico novo: %1$s em %2$s',
	'MCHAT_NEW_POST_DELETED'		=> 'postou um novo tópico que foi excluído',
	'MCHAT_NEW_REPLY'				=> 'postou uma resposta : %1$s em %2$s',
	'MCHAT_NEW_REPLY_DELETED'		=> 'postou uma resposta que foi excluída',
	'MCHAT_NEW_QUOTE'				=> 'respondeu com uma citação : %1$s em %2$s',
	'MCHAT_NEW_QUOTE_DELETED'		=> 'postou uma resposta que foi excluída',
	'MCHAT_NEW_EDIT'				=> 'editou um post: %1$s em %2$s',
	'MCHAT_NEW_EDIT_DELETED'		=> 'editou um post que foi excluído',
	'MCHAT_NEW_LOGIN'			    => 'Somente logou',
));
