<?php
/**
*
* info_acp_gallery_logs [Polish]
*
* @package phpBB Gallery
* @version $Id: info_acp_gallery_logs.php 1004 2009-03-03 23:04:13Z nickvergessen $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 1004 2009-06-15 10:32:25 Zespół Olympus.pl $
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
	'LOG_ALBUM_ADD'				=> '<strong>Utworzono nowy album</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUM'			=> '<strong>Usunięto album</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUMS'			=> '<strong>Usunięto album i jego subalbumy</strong><br />» %s',
	'LOG_ALBUM_DEL_MOVE_ALBUMS'		=> '<strong>Usunięto album i przeniesiono subalbumy</strong> do %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES'		=> '<strong>Usunięto album i przeniesiono zdjęcia</strong> do %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_ALBUMS'	=> '<strong>Usunięto album i jego subalbumy; zdjęcia przeniesiono</strong> do %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_MOVE_ALBUMS'	=> '<strong>Usunięto album; zdjęcia przeniesiono</strong> do %1$s <strong>i subalbumy</strong> do %2$s<br />» %3$s',
	'LOG_ALBUM_DEL_IMAGES'			=> '<strong>Usunięto album i jego zdjęcia</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_ALBUMS'		=> '<strong>Usunięto album i jego zdjęcia oraz subalbumy</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_MOVE_ALBUMS'	=> '<strong>Usunięto album i jego zdjęcia; subalbumy przeniesiono</strong> do %1$s<br />» %2$s',
	'LOG_ALBUM_EDIT'			=> '<strong>Zmieniono szczegóły albumu</strong><br />» %s',
	'LOG_ALBUM_MOVE_DOWN'			=> '<strong>Przeniesiono album</strong> %1$s <strong>pod</strong> %2$s',
	'LOG_ALBUM_MOVE_UP'			=> '<strong>Przeniesiono album</strong> %1$s <strong>nad</strong> %2$s',
	'LOG_ALBUM_SYNC'			=> '<strong>Zsynchronizowano album</strong><br />» %s',

	'LOG_CLEAR_GALLERY'			=> 'Dziennik galerii wyczyszczony',

	'LOG_GALLERY_APPROVED'			=> '<strong>Zaakceptowano zdjęcie</strong><br />» %s',
	'LOG_GALLERY_COMMENT_DELETED'		=> '<strong>Usunięto komentarz</strong><br />» %s',
	'LOG_GALLERY_COMMENT_EDITED'		=> '<strong>Zmieniono komentarz</strong><br />» %s',
	'LOG_GALLERY_DELETED'			=> '<strong>Usunięto zdjęcie</strong><br />» %s',
	'LOG_GALLERY_EDITED'			=> '<strong>Zmieniono zdjęcie</strong><br />» %s',
	'LOG_GALLERY_LOCKED'			=> '<strong>Zablokowano zdjęcie</strong><br />» %s',
	'LOG_GALLERY_MOVED'			=> '<strong>Przeniesiono zdjęcie</strong><br />» z %1$s do %2$s',
	'LOG_GALLERY_REPORT_CLOSED'		=> '<strong>Zamknięto zgłoszenie</strong><br />» %s',
	'LOG_GALLERY_REPORT_DELETED'		=> '<strong>Usunięto zgłoszenie</strong><br />» %s',
	'LOG_GALLERY_REPORT_OPENED'		=> '<strong>Ponownie otwarto zgłoszenie</strong><br />» %s',
	'LOG_GALLERY_UNAPPROVED'		=> '<strong>Cofnięto akceptację zdjęcia</strong><br />» %s',

	'LOGVIEW_VIEWALBUM'			=> 'Zobacz album',
	'LOGVIEW_VIEWIMAGE'			=> 'Zobacz zdjęcie',
));

?>