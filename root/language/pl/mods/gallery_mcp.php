<?php
/**
*
* gallery_mcp [Polish]
*
* @package phpBB Gallery
* @version $Id: gallery_mcp.php 139 2009-06-19 09:34:02Z daroPL $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 915 2009-06-15 10:32:25 Zespół Olympus.pl $
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'CHOOSE_ACTION'			=> 'Wybierz działanie',

	'GALLERY_MCP_MAIN'		=> 'Strona główna',
	'GALLERY_MCP_QUEUE'		=> 'Kolejka',
	'GALLERY_MCP_QUEUE_DETAIL'	=> 'Szczegóły zdjęcia',
	'GALLERY_MCP_REPORTED'		=> 'Zgłoszone zdjęcia',
	'GALLERY_MCP_REPO_DONE'		=> 'Zamknięte zgłoszenia',
	'GALLERY_MCP_REPO_OPEN'		=> 'Otwarte zgłoszenia',
	'GALLERY_MCP_REPO_DETAIL'	=> 'Szczegóły zgłoszenia',
	'GALLERY_MCP_UNAPPROVED'	=> 'Zdjęcia oczekujące na akceptację',
	'GALLERY_MCP_APPROVED'		=> 'Zdjęcia zaakceptowane',
	'GALLERY_MCP_LOCKED'		=> 'Zdjęcia zablokowane',
	'GALLERY_MCP_VIEWALBUM'		=> 'Zobacz album',

	'IMAGE_REPORTED'		=> 'To zdjęcie zostało już zgłoszone.',
	'IMAGE_UNAPPROVED'		=> 'To zdjęcie oczekuje na akceptację.',

	'MODERATE_ALBUM'		=> 'Moderuj album',

	'QUEUE_A_APPROVE'		=> 'Zaakceptuj zdjęcie',
	'QUEUE_A_APPROVE2'		=> 'Zaakceptować zdjęcie?',
	'QUEUE_A_APPROVE2_CONFIRM'	=> 'Czy na pewno chcesz zaakceptować to zdjęcie?',
	'QUEUE_A_DELETE'		=> 'Usuń zdjęcie',
	'QUEUE_A_DELETE2'		=> 'Usunąć zdjęcie?',
	'QUEUE_A_DELETE2_CONFIRM'	=> 'Czy na pewno chcesz usunąć to zdjęcie?',
	'QUEUE_A_LOCK'			=> 'Zablokuj zdjęcie',
	'QUEUE_A_LOCK2'			=> 'Zablokować zdjęcie?',
	'QUEUE_A_LOCK2_CONFIRM'		=> 'Czy na pewno chcesz zablokować to zdjęcie?',
	'QUEUE_A_MOVE'			=> 'Przenieś zdjęcie',
	'QUEUE_A_UNAPPROVE'		=> 'Wycofaj akceptację zdjęcia',
	'QUEUE_A_UNAPPROVE2'		=> 'Wycofać akceptację zdjęcia?',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Czy na pewno chcesz wycofać akceptację tego zdjęcia?',

	'QUEUE_STATUS_0'		=> 'To zdjęcie oczekuje na akceptację.',
	'QUEUE_STATUS_1'		=> 'To zdjęcie zostało zaakceptowane.',
	'QUEUE_STATUS_2'		=> 'To zdjęcie jest zablokowane.',

	'QUEUES_A_APPROVE'		=> 'Zaakceptuj zdjęcia',
	'QUEUES_A_APPROVE2'		=> 'Zaakceptować zdjęcia?',
	'QUEUES_A_APPROVE2_CONFIRM'	=> 'Czy na pewno chcesz zaakceptować te zdjęcia?',
	'QUEUES_A_DELETE'		=> 'Usuń zdjęcia',
	'QUEUES_A_DELETE2'		=> 'Usunąć zdjęcia?',
	'QUEUES_A_DELETE2_CONFIRM'	=> 'Czy na pewno chcesz usunąć te zdjęcia?',
	'QUEUES_A_LOCK'			=> 'Zablokuj zdjęcia',
	'QUEUES_A_LOCK2'		=> 'Zablokować zdjęcia?',
	'QUEUES_A_LOCK2_CONFIRM'	=> 'Czy na pewno chcesz zablokować te zdjęcia?',
	'QUEUES_A_MOVE'			=> 'Przenieś zdjęcia',
	'QUEUES_A_UNAPPROVE'		=> 'Nie akceptuj zdjęć',
	'QUEUES_A_UNAPPROVE2'		=> 'Nie zaakceptować zdjęć?',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Czy na pewno nie chcesz zaakceptować tych zdjęć?',

	'REPORT_A_CLOSE'		=> 'Zamknij zgłoszenie',
	'REPORT_A_CLOSE2'		=> 'Zamknąć zgłoszenie?',
	'REPORT_A_CLOSE2_CONFIRM'	=> 'Czy na pewno chcesz zamknąć to zgłoszenie?',
	'REPORT_A_DELETE'		=> 'Usuń zgłoszenie',
	'REPORT_A_DELETE2'		=> 'Usunąć zgłoszenie?',
	'REPORT_A_DELETE2_CONFIRM'	=> 'Czy na pewno chcesz usunąć to zgłoszenie?',
	'REPORT_A_OPEN'			=> 'Otwórz zgłoszenie',
	'REPORT_A_OPEN2'		=> 'Otworzyć zgłoszenie?',
	'REPORT_A_OPEN2_CONFIRM'	=> 'Czy na pewno chcesz otworzyć to zgłoszenie?',

	'REPORT_STATUS_1'		=> 'To zgłoszenie wymaga przejrzenia.',
	'REPORT_STATUS_2'		=> 'To zgłoszenie jest zamknięte.',

	'REPORTS_A_CLOSE'		=> 'Zamknij zgłoszenia',
	'REPORTS_A_CLOSE2'		=> 'Zamknąć zgłoszenia?',
	'REPORTS_A_CLOSE2_CONFIRM'	=> 'Czy na pewno chcesz zamknąć te zgłoszenia?',
	'REPORTS_A_DELETE'		=> 'Usuń zgłoszenia',
	'REPORTS_A_DELETE2'		=> 'Usunąć zgłoszenia?',
	'REPORTS_A_DELETE2_CONFIRM'	=> 'Czy na pewno chcesz usunąć te zgłoszenia?',
	'REPORTS_A_OPEN'		=> 'Otwórz zgłoszenia',
	'REPORTS_A_OPEN2'		=> 'Otworzyć zgłoszenia?',
	'REPORTS_A_OPEN2_CONFIRM'	=> 'Czy na pewno chcesz otworzyć te zgłoszenia?',

	'REPORT_MOD'			=> 'Edytowane przez',
	'REPORTED_IMAGES'		=> 'Zgłoszone zdjęcia',
	'REPORTER'			=> 'Użytkownik zgłaszający',
	'REPORTER_AND_ALBUM'		=> 'Zgłaszający i Album',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> 'Nie ma zaakceptowanych zdjęć.',
		1			=> 'Zdjęcia zaakceptowane: <span style="font-weight: bold;">1</span>.',
		2			=> 'Zdjęcia zaakceptowane: <span style="font-weight: bold;">%s</span>.',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> 'Nie ma zablokowanych zdjęć.',
		1			=> 'Zdjęcia zablokowane: <span style="font-weight: bold;">1</span>.',
		2			=> 'Zdjęcia zablokowane: <span style="font-weight: bold;">%s</span>.',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> 'Nie ma przejrzanych zgłoszeń.',
		1			=> 'Zgłoszenia przejrzane: <span style="font-weight: bold;">1</span>.',
		2			=> 'Zgłoszenia przejrzane: <span style="font-weight: bold;">%s</span>.',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> 'Nie ma zgłoszeń do przejrzenia.',
		1			=> 'Zgłoszenia do przejrzenia: <span style="font-weight: bold;">1</span>.',
		2			=> 'Zgłoszenia do przejrzenia: <span style="font-weight: bold;">%s</span>.',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> 'Nie ma zdjęć oczekujących na akceptację.',
		1			=> 'Zdjęcia oczekujące na akceptację: <span style="font-weight: bold;">1</span>.',
		2			=> 'Zdjęcia oczekujące na akceptację: <span style="font-weight: bold;">%s</span>.',
	),
));

?>
