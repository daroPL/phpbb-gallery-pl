<?php
/**
*
* permissions_gallery [Polish]
*
* @package phpBB Gallery
* @version $Id: permissions_gallery.php 139 2009-06-19 09:34:02Z daroPL $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 847 2009-06-15 10:32:25 Zespół Olympus.pl $
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

$lang['permission_cat']['gallery'] = 'phpBB Gallery';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_gallery_manage'		=> array('lang' => 'Może zarządzać ustawieniami galerii', 'cat' => 'gallery'),
	'acl_a_gallery_albums'		=> array('lang' => 'Może dodawać/edytować albumy i uprawnienia', 'cat' => 'gallery'),
	'acl_a_gallery_import'		=> array('lang' => 'Może używać funkcji importowania', 'cat' => 'gallery'),
	'acl_a_gallery_cleanup'		=> array('lang' => 'Może porządkować galerię', 'cat' => 'gallery'),
));
?>