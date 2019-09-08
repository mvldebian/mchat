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
	'MCHAT_ADD'						=> 'Enviar',
	'MCHAT_ARCHIVE'					=> 'Arquivo',
	'MCHAT_ARCHIVE_PAGE'			=> 'Arquivo do mChat',
	'MCHAT_CUSTOM_PAGE'				=> 'mChat',
	'MCHAT_BBCODES'					=> 'BBCodes',
	'MCHAT_CUSTOM_BBCODES'			=> 'BBCodes personalizados',
	'MCHAT_DELCONFIRM'				=> 'Você tem certeza que deseja deletar essa mensagem?',
	'MCHAT_EDIT'					=> 'Editar',
	'MCHAT_EDITINFO'				=> 'Edite a mensagem abaixo',
	'MCHAT_NEW_CHAT'				=> 'Nova mensagem no chat!',
	'MCHAT_SEND_PM'					=> 'Enviar mensagem privada',
	'MCHAT_LIKE'					=> 'Curtir esta mensagem?',
	'MCHAT_LIKES'					=> 'Curtiu esta mensagem',
	'MCHAT_FLOOD'					=> 'Você não pode postar outra mensagem logo após a sua última.',
	'MCHAT_FOE'						=> 'Esta mensagem foi feita por <strong> %1$s </ strong> que atualmente está em sua lista de ignorados .',
	'MCHAT_RULES'					=> 'Regras',
	'MCHAT_WHOIS_USER'				=> 'IP whois for %1$s',
	'MCHAT_MESS_LONG'				=> 'A sua mensagem é grande. Por favor, limitá-lo a %1$d caracteres',
	'MCHAT_NO_CUSTOM_PAGE'			=> 'A página personalizada do mChat não esta ativado no momento!',
	'MCHAT_NO_RULES'				=> 'A página regras mChat não está ativada neste momento!',
	'MCHAT_NOACCESS_ARCHIVE'		=> 'Você não tem permissão para visualizar o arquivo',
	'MCHAT_NOJAVASCRIPT'			=> 'Por favor habilite JavaScript para usar mChat.',
	'MCHAT_NOMESSAGE'				=> 'Nenhuma mensagem',
	'MCHAT_NOMESSAGEINPUT'			=> 'Você não inseriu uma mensagem',
	'MCHAT_MESSAGE_DELETED'			=> 'Essa menssagem foi deletada.',
	'MCHAT_OK'						=> 'OK',
	'MCHAT_PAUSE'					=> 'Pausado',
	'MCHAT_PERMISSIONS'				=> 'Alterar permissões de usuário',
	'MCHAT_REFRESHING'				=> 'Atualizando…',
	'MCHAT_REFRESH_NO'				=> 'Atualização está desligado',
	'MCHAT_REFRESH_YES'				=> 'Atualizações a cada <strong>%1$d</strong> segundos',
	'MCHAT_RESPOND'					=> 'Responder ao usuário',
	'MCHAT_SESSION_ENDS'			=> 'Sessão do chat termina em %1$s',
	'MCHAT_SESSION_OUT'				=> 'Sessão do chat expirou',
	'MCHAT_SMILES'					=> 'Smilies',
	'MCHAT_TOTALMESSAGES'			=> 'Total de mensagens: <strong>%1$d</strong>',
	'MCHAT_SOUND_ON'				=> 'Tocar som',
	'MCHAT_ENTER_LINEBREAK'			=> 'ENTER envia mensagem'
	'MCHAT_NAVBAR_ARCHIVE'			=> 'Arquivo de mensagens'
	'MCHAT_NAVBAR_CUSTOM_PAGE'		=> 'Página do mChat'
	'MCHAT_COLLAPSE_TITLE'			=> 'Alterne a visibilidade mChat',
	'MCHAT_WHO_IS_REFRESH_EXPLAIN'	=> 'Atualiza a cada <strong>%1$d</strong> segundos',
	'MCHAT_MINUTES_AGO'				=> array(
		0 => 'Agora mesmo',
		1 => '%1$d minuto atrás',
		2 => '%1$d minutos atrás',
	),

	// These messages are formatted with JavaScript, hence {} and no $d
	'MCHAT_CHARACTER_COUNT'			=> '<strong>{current}</strong> caracteres',
	'MCHAT_CHARACTER_COUNT_LIMIT'	=> '<strong>{current}</strong> fora de {max} caracteres',
	'MCHAT_SESSION_ENDS_JS'			=> 'Sessão do chat termina em {timeleft}',
	'MCHAT_MENTION'					=> ' @{username} ',

	// Custom translations for administrators
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',
));
