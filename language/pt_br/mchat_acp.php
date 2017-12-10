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
	// ACP Configuration sections
	'MCHAT_SETTINGS_INDEX'							=> 'Configurações da página ínicial',
	'MCHAT_SETTINGS_CUSTOM'							=> 'Configurações da página personalizada',
	'MCHAT_SETTINGS_ARCHIVE'						=> 'Configurações da página de arquivo',
	'MCHAT_SETTINGS_POSTS'							=> 'Configurações de novas postagens',
	'MCHAT_SETTINGS_MESSAGES'						=> 'Configurações de mensagem',
	'MCHAT_SETTINGS_PRUNE'							=> 'Configurações de limpeza (ajustável apenas para fundadores)',
	'MCHAT_SETTINGS_STATS'							=> 'Configurações de Quem está conversando',

	'MCHAT_GLOBALUSERSETTINGS_EXPLAIN'				=> 'As configurações para as quais um usuário <strong>não</strong> tem permissão para personalizar são aplicadas conforme configurado abaixo.<br /> Novas contas de usuário terão as configurações iniciais conforme configurado abaixo.<br /><br /> Vá para a aba <em>mChat em UCP</em> da seção de permissões do usuário para ajustar as permissões de personalização.<br /> Vá para o formulário <em>Preferências</em> na seção de <em>gerenciamento de usuários</em> para ver o status das configurações de cada usuário.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE'			=> 'Substituir configurações para todos os usuários',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_EXPLAIN'	=> 'Aplica as configurações conforme definido acima para <em>todas</em> as contas de usuário.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_CONFIRM'	=> 'Confirme a substituição das configurações mChat para todos os usuários',

	'MCHAT_ACP_USER_PREFS_EXPLAIN'					=> 'Abaixo estão listadas todas as preferências mChat do usuário selecionado. As configurações para as quais o usuário selecionado não tem permissão para personalizar estão desabilitadas. Essas configurações podem ser alteradas na seção <em>Configurações do usuário global</em> mChat seção de configuração.',

	// ACP settings
	'MCHAT_ACP_CHARACTERS'							=> 'caracteres',
	'MCHAT_ACP_MESSAGES'							=> 'mensagens',
	'MCHAT_ACP_SECONDS'								=> 'segundos',
	'MCHAT_ACP_HOURS'								=> 'horas',
	'MCHAT_ACP_DAYS'								=> 'dias',
	'MCHAT_ACP_WEEKS'								=> 'semanas',
	'MCHAT_ACP_GLOBALSETTINGS_TITLE'				=> 'mChat configurações globais',
	'MCHAT_ACP_GLOBALUSERSETTINGS_TITLE'			=> 'mChat configurações globais do usuário',
	'MCHAT_VERSION'									=> 'Versão',
	'MCHAT_RULES'									=> 'Regras',
	'MCHAT_RULES_EXPLAIN'							=> 'Digite as regras aqui. O código HTML é permitido.<em>Você está limitado a 255 caracteres.</em><br />Esta mensagem pode ser traduzida: edite a chave de idioma MCHAT_RULES_MESSAGE em /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_CONFIG_SAVED'							=> 'Configurações do mChat atualizadas',
	'MCHAT_AVATARS'									=> 'Mostrar avatares',
	'MCHAT_AVATARS_EXPLAIN'							=> 'Se configurado para sim, os avatares de usuário redimensionados serão exibidos',
	'MCHAT_INDEX'									=> 'Exibir mChat na página ínicial',
	'MCHAT_INDEX_HEIGHT'							=> 'Altura na página ínicial',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'					=> 'A altura da caixa do chat em pixels na página ínicial.<br /><em>Você está limitado de 50 a 1000. O padrão é 250.</em>',
	'MCHAT_TOP_OF_FORUM'							=> 'Superior',
	'MCHAT_BOTTOM_OF_FORUM'							=> 'Inferior',
	'MCHAT_REFRESH'									=> 'Intervalo de atualização',
	'MCHAT_REFRESH_EXPLAIN'							=> 'Número de segundos antes do chat atualizar.<br /><em>Você está limitado de 5 a 60 segundos. O padrão é 10.</em>',
	'MCHAT_LIVE_UPDATES'							=> 'Atualizações ao vivo de mensagens editadas e deletadas',
	'MCHAT_LIVE_UPDATES_EXPLAIN'					=> 'Quando um usuário edita ou deletar mensagens, as mudanças são atualizadas ao vivo para todos os outros, sem que eles tenham que atualizar a página. Desative isso se você tiver problemas de desempenho.',
	'MCHAT_PRUNE'									=> 'Ativar limpeza de mensagens',
	'MCHAT_PRUNE_GC'								=> 'Intervalo da tarefa para limpeza de mensagem',
	'MCHAT_PRUNE_GC_EXPLAIN'						=> 'O tempo em segundos que precisa passar antes da próxima limpeza de mensagem ser desencadeada. Nota: esta configuração controla <em>quando</em> as mensagens são verificadas se elas podem ser deletadas. <em>Não</em> controla <em>quais mensagens</em> são deletadas. <em>O padrão é 86400 = 24 horas.</em>',
	'MCHAT_PRUNE_NUM'								=> 'Mensagens para reter quando limpando',
	'MCHAT_PRUNE_NUM_EXPLAIN'						=> 'Ao usar "mensagens", um número fixo de mensagens será mantido. Ao usar "horas", "dias" ou "semanas", todas as mensagens anteriores ao período de tempo especificado no momento da poda serão deletadas.',
	'MCHAT_PRUNE_NOW'								=> 'Limpar mensagens agora',
	'MCHAT_PRUNE_NOW_CONFIRM'						=> 'Confirmar limpeza de mensagens',
	'MCHAT_PRUNED'									=> '%1$d mensagens do mChat foram deletadas',
	'MCHAT_NAVBAR_LINK'								=> 'Exibir link para a página personalizada na barra de navegação',
	'MCHAT_NAVBAR_LINK_COUNT'						=> 'Exibir número de sessões do chat ativas no link da barra de navegação',
	'MCHAT_MESSAGE_NUM_CUSTOM'						=> 'Número inicial de mensagens a serem exibidas na página personalizada',
	'MCHAT_MESSAGE_NUM_CUSTOM_EXPLAIN'				=> '<em>Você é limitado de 5 a 50. O padrão é 10.</em>',
	'MCHAT_MESSAGE_NUM_INDEX'						=> 'Número inicial de mensagens a serem exibidas na página ínicial',
	'MCHAT_MESSAGE_NUM_INDEX_EXPLAIN'				=> '<em>Você é limitado de 5 a 50. O padrão é 10.</em>',
	'MCHAT_MESSAGE_NUM_ARCHIVE'						=> 'Número de mensagens a serem exibidas na página do arquivo',
	'MCHAT_MESSAGE_NUM_ARCHIVE_EXPLAIN'				=> 'O número máximo de mensagens a serem exibidas por página na página de arquivo.<br /><em>Você está limitado de 10 a 100. O padrão é 25.</em>',
	'MCHAT_ARCHIVE_SORT'							=> 'Ordenar mensagens',
	'MCHAT_ARCHIVE_SORT_TOP_BOTTOM'					=> 'Sempre ordenar as mensagens mais antigas para as mais novas',
	'MCHAT_ARCHIVE_SORT_BOTTOM_TOP'					=> 'Sempre ordenar as mensagens mais recentes para as mais antigas',
	'MCHAT_ARCHIVE_SORT_USER'						=> 'Ordenar mensagens dependendo da preferência de <em>Localização de novas mensagens</em> do usuário',
	'MCHAT_FLOOD_TIME'								=> 'Tempo de Flood',
	'MCHAT_FLOOD_TIME_EXPLAIN'						=> 'O número de segundos que um usuário deve aguardar antes de publicar outra mensagem no bate-papo. <br /> <em> Você está limitado de 0 a 60 segundos. O padrão é 0. Defina para 0 para desativar. </ Em>',
	'MCHAT_EDIT_DELETE_LIMIT'						=> 'Limite de tempo para edição e exclusão de mensagens',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'				=> 'As mensagens mais antigas do que o número de segundos especificado não podem ser editadas ou deletadas pelo autor.<br /> Os usuários que têm <em>editar/deletar permissão, bem como a permissão do moderador estão isentos</em> desse limite de tempo. < br /> Defina para 0 para permitir edição e exclusão ilimitadas.',
	'MCHAT_MAX_MESSAGE_LENGTH'						=> 'Comprimento máximo da mensagem',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'				=> 'Máximo número de caracteres permitidos por mensagem postada.<br /><em>Você está limitado de 0 a 1000. O padrão é 500. Defina como 0 para desativar.</em>',
	'MCHAT_CUSTOM_PAGE'								=> 'Ativar página personalizada',
	'MCHAT_CUSTOM_HEIGHT'							=> 'Altura da página personalizada',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'					=> 'A altura da caixa do chat em pixels na página personalizada.<br /><em>Você está limitado de 50 a 1000. O padrão é 350.</em>',
	'MCHAT_BBCODES_DISALLOWED'						=> 'bbcodes não permitido',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'				=> 'Aqui você pode inserir os bbcodes que <strong>não</strong> é para serem usados em uma mensagem.<br />Separar códigos bb com uma barra vertical, por exemplo:<br />b|i|u|code|list|lista=|flash|quote e/ou um %1$s nome da tag de um bbcode personalizado %2$s',
	'MCHAT_STATIC_MESSAGE'							=> 'Mensagem estática',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'					=> 'Aqui você pode definir uma mensagem estática para exibir aos usuários do chat. O código HTML é permitido.<br />Defina para esvaziar para desativar a exibição.<em>Você está limitado a 255 caracteres.</em><br /> Esta mensagem pode ser traduzida: edite a chave de idioma MCHAT_STATIC_MESSAGE em /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_TIMEOUT'									=> 'Sessão expirada',
	'MCHAT_TIMEOUT_EXPLAIN'							=> 'Defina o número de segundos até uma sessão no chat terminar.<br />Defina para 0 sem tempo limite. Cuidado, a sessão de um usuário que lê mChat nunca expirará!<br /><em>Você está limitado à %1$sconfiguração do fórum para configurações de carga%2$s que está atualmente definida como %3$d segundos</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'					=> 'Substituir o limite smilie',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'			=> 'Defina para sim para substituir a configuração do limite smilie dos fóruns para mensagens do chat',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'					=> 'Substituir limite mínimo de caracteres',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'			=> 'Defina para sim para substituir a configuração de caracteres mínimos dos fóruns para mensagens de chat',

	'MCHAT_POSTS_AUTH_CHECK'						=> 'Exigir permissão de usuário',
	'MCHAT_POSTS_AUTH_CHECK_EXPLAIN'				=> 'Se configurado para sim, os usuários que não podem usar o mChat não gerarão nenhuma mensagem de notificação de postagem/login.',

	'MCHAT_WHOIS_REFRESH'							=> 'Intervalo de atualização do quem está conversando',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'					=> 'Número de segundos antes do quem está conversando atualizar.<br /><em>Você está limitado de 10 a 300 segundos. O padrão é 60.</em>',
	'MCHAT_SOUND'									=> 'Reproduzir sons para mensagens novas, editadas e deletadas',
	'MCHAT_PURGE'									=> 'Delete todas as mensagens agora',
	'MCHAT_PURGE_CONFIRM'							=> 'Confirme a exclusão de todas as mensagens',
	'MCHAT_PURGED'									=> 'Todas as mensagens do mChat foram deletadas com sucesso',

	// '%1$s' contains 'Retain posts' and 'Delete posts' respectively
	'MCHAT_RETAIN_MESSAGES'							=> '%1$s e retem mensagens do mChat',
	'MCHAT_DELETE_MESSAGES'							=> '%1$s e deleta mensagens do mChat',

	// Error reporting
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'				=> 'O valor dos BBcodes não permitido é muito longo.',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'					=> 'O valor de altura personalizada é muito pequeno.',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'					=> 'O valor de altura personalizada é muito grande.',
	'TOO_LONG_MCHAT_DATE'							=> 'O formato de data que você digitou é muito longo.',
	'TOO_SHORT_MCHAT_DATE'							=> 'O formato de data que você digitou é muito curto.',
	'TOO_SMALL_MCHAT_FLOOD_TIME'					=> 'O valor do tempo de flood é muito pequeno.',
	'TOO_LARGE_MCHAT_FLOOD_TIME'					=> 'O valor do tempo de flood é muito grande.',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'					=> 'O valor de altura do índice é muito pequeno.',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'					=> 'O valor de altura do índice é muito grande.',
	'TOO_SMALL_MCHAT_MAX_MESSAGE_LNGTH'				=> 'O valor máximo do comprimento da mensagem é muito pequeno.',
	'TOO_LARGE_MCHAT_MAX_MESSAGE_LNGTH'				=> 'O valor máximo do comprimento da mensagem é muito grande.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_CUSTOM'			=> 'O número de mensagens a serem exibidas na página personalizada é muito pequeno.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_CUSTOM'			=> 'O número de mensagens a serem exibidas na página personalizada é muito grande.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_INDEX'				=> 'O número de mensagens a serem exibidas na página de índice é muito pequeno.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_INDEX'				=> 'O número de mensagens a serem exibidas na página de índice é muito grande.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_ARCHIVE'			=> 'O número de mensagens a serem exibidas na página de arquivo é muito pequeno.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_ARCHIVE'			=> 'O número de mensagens a serem exibidas na página de arquivo é muito grande.',
	'TOO_SMALL_MCHAT_REFRESH'						=> 'O valor de atualização é muito pequeno.',
	'TOO_LARGE_MCHAT_REFRESH'						=> 'O valor de atualização é muito grande.',
	'TOO_LONG_MCHAT_STATIC_MESSAGE'					=> 'O valor da mensagem estática é muito longo.',
	'TOO_SMALL_MCHAT_TIMEOUT'						=> 'O valor de tempo limite do usuário é muito pequeno.',
	'TOO_LARGE_MCHAT_TIMEOUT'						=> 'O valor de tempo limite do usuário é muito grande.',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'					=> 'O valor de atualização do quem está conversando é muito pequeno.',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'					=> 'O valor de atualização do quem está conversando é muito grande.',

	'MCHAT_30X_REMNANTS'							=> 'A instalação foi abortada.<br /> Existem módulos remanescentes do mChat MOD para phpBB 3.0.x no banco de dados. A extensão mChat não funciona corretamente com estes módulos presentes.<br /> Você precisa desinstalar completamente o mChat MOD antes de poder instalar a extensão mChat. Especificamente, os módulos com as seguintes IDs precisam ser excluídos da tabela %1$s modules: %2$s',
));
