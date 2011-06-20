<?php
/**
*
* info_ucp_gallery [Polish]
*
* @package phpBB Gallery
* @version $Id: info_ucp_gallery.php 139 2009-06-19 09:34:02Z daroPL $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 849 2009-06-15 10:32:25 Zespół Olympus.pl $
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
	'UCP_GALLERY'				=> 'Galeria',
	'UCP_GALLERY_FAVORITES'			=> 'Ulubione',
	'UCP_GALLERY_PERSONAL_ALBUMS'		=> 'Albumy osobiste',
	'UCP_GALLERY_SETTINGS'			=> 'Ustawienia osobiste',
	'UCP_GALLERY_WATCH'			=> 'Obserwowane',
));

?>