<?php
/**
*
* info_acp_gallery [Polish]
*
* @package phpBB Gallery
* @version $Id: info_acp_gallery.php 181 2009-09-12 06:29:32Z daroPL $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 1108 2009-06-15 10:32:25 Zespół Olympus.pl $
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
	'ACP_GALLERY_ALBUM_MANAGEMENT'		=> 'Zarządzanie albumem',
	'ACP_GALLERY_ALBUM_PERMISSIONS'		=> 'Uprawnienia albumu',
	'ACP_GALLERY_CLEANUP'			=> 'Porządkowanie galerii',
	'ACP_GALLERY_CONFIGURE_GALLERY'		=> 'Ustawienia galerii',
	'ACP_GALLERY_LOGS'			=> 'Dziennik galerii',
	'ACP_GALLERY_LOGS_EXPLAIN'		=> 'Tutaj są wyświetlone wszystkie czynności (akceptowanie, odrzucanie, blokowanie, odblokowywanie, zamykanie zgłoszeń, usuwanie zdjęć) jakie wykonywali moderatorzy w galerii.',
	'ACP_GALLERY_MANAGE_ALBUMS'		=> 'Zarządzanie albumami',
	'ACP_GALLERY_OVERVIEW'			=> 'Przegląd',
	'ACP_IMPORT_ALBUMS'			=> 'Importowanie zdjęć',
	'ACP_GALLERY_ALBUM_PERMISSIONS_COPY'=> 'Kopiuj uprawnienia',

	'GALLERY_TRANSLATION_INFO'         => 'Angielska wersja "phpBB Gallery" dzięki <a href="http://www.flying-bits.org/">nickvergessen</a>',

   
	'GALLERY'				=> 'Galeria',
	'GALLERY_EXPLAIN'			=> 'Galeria zdjęć',
	'GALLERY_HELPLINE_ALBUM'		=> 'Galeria zdjęć: [album]identyfikator_zdjęcia[/album], za pomocą tego kodu można dodać zdjęcie z galerii do swojego postu.',

	'IMAGES'				=> 'Zdjęcia',
	'IMG_BUTTON_UPLOAD_IMAGE'			=> 'Zamieść zdjęcie',

	'PERSONAL_ALBUM'			=> 'Album osobisty',
	'PHPBB_GALLERY'				=> 'phpBB Gallery',

	'TOTAL_IMAGES_OTHER'			=> 'Liczba zdjęć: <strong>%d</strong>',
	'TOTAL_IMAGES_ZERO'			=> 'Liczba zdjęć: <strong>0</strong>',
));

?>
