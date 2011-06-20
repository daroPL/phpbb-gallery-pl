<?php
/**
*
* gallery_ucp [Polish]
*
* @package phpBB Gallery
* @version $Id: gallery_ucp.php 139 2009-06-19 09:34:02Z daroPL $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 1007 2009-06-15 10:32:25 Zespół Olympus.pl $
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
	'ALBUMS'			=> 'Albumy',
	'ALBUM_DESC'			=> 'Opis',
	'ALBUM_NAME'			=> 'Nazwa',
	'ALBUM_PARENT'			=> 'Album macierzysty',
	'ATTACHED_SUBALBUMS'		=> 'Dołączone subalbumy',

	'CREATE_PERSONAL_ALBUM'		=> 'Utwórz album osobisty',
	'CREATE_SUBALBUM'		=> 'Utwórz subalbum',
	'CREATE_SUBALBUM_EXP'		=> 'Możesz dodać nowy subalbum do swojej galerii osobistej.',
	'CREATED_SUBALBUM'		=> 'Subalbum został utworzony',

	'DELETE_ALBUM'			=> 'Usuń album',
	'DELETE_ALBUM_CONFIRM'		=> 'Usunąć album z wszystkimi dołączonymi subalbumami i zdjęciami?',
	'DELETED_ALBUMS'		=> 'Albumy zostały usunięte',

	'EDIT'				=> 'Edytuj',
	'EDIT_ALBUM'			=> 'Edytuj ten album',
	'EDIT_SUBALBUM'			=> 'Edytuj subalbum',
	'EDIT_SUBALBUM_EXP'		=> 'Tutaj możesz edytować swój album.',
	'EDITED_SUBALBUM'		=> 'Album został zmieniony',

	'GOTO'				=> 'Przejdź do',

	'MANAGE_SUBALBUMS'		=> 'Zarządzaj swoimi subalbumami',
	'MISSING_ALBUM_NAME'		=> 'Wprowadź nazwę dla albumu',

	'NEED_INITIALISE'		=> 'Nie masz jeszcze albumu osobistego.',
	'NO_ALBUM_STEALING'		=> 'Nie masz uprawnień do zarządzania albumami innych użytkowników.',
	'NO_FAVORITES'			=> 'Nie masz żadnych ulubionych zdjęć',
	'NO_MORE_SUBALBUMS_ALLOWED'	=> 'Dodano już maksymalną liczbę subalbumów do Twojego albumu osobistego',
	'NO_PARENT_ALBUM'		=> '&laquo;-- Bez macierzystego',
	'NO_PERSALBUM_ALLOWED'		=> 'Nie masz uprawnień do utworzenia albumu osobistego',
	'NO_PERSONAL_ALBUM'		=> 'Nie masz jeszcze swojego albumu osobistego. Tutaj możesz utworzyć swój album osobisty razem z subalbumami.<br />Tylko właściciele albumów mogą zamieszczać zdjęcia w albumach osobistych.',
	'NO_SUBALBUMS'			=> 'Nie ma subalbumów',
	'NO_SUBSCRIPTIONS'		=> 'Nie obserwujesz żadnego zdjęcia',

	'PARSE_BBCODE'			=> 'Włącz BBCode',
	'PARSE_SMILIES'			=> 'Włącz emotikony',
	'PARSE_URLS'			=> 'Włącz przetwarzanie odnośników',
	'PERSONAL_ALBUM'		=> 'Album osobisty',

	'REMOVE_FROM_FAVORITES'		=> 'Usuń z ulubionych',

	'UNSUBSCRIBE'			=> 'Przestań obserwować',

	'YOUR_FAVORITE_IMAGES'		=> 'Tutaj możesz zobaczyć swoje ulubione zdjęcia. Możesz je usunąć, jeżeli już Ci się nie podobają.',
	'YOUR_SUBSCRIPTIONS'		=> 'Tutaj możesz zobaczyć obserwowane przez Ciebie albumy i zdjęcia.',

	'VIEWEXIFS_DEFAULT'				=> 'Wyświetlaj dane Exif domyślnie',

	'WATCH_CHANGED'			=> 'Ustawienia zostały zapisane',
	'WATCH_COM'			=> 'Domyślnie obserwuj skomentowane zdjęcia',
	'WATCH_FAVO'			=> 'Domyślnie obserwuj ulubione zdjęcia',
	'WATCH_NOTE'			=> 'Te funkcje będą oddziaływały tylko na nowo zamieszczane zdjęcia. Dla wszystkich innych zdjęć, należy użyć opcji „Obserwuj zdjęcie”.',
	'WATCH_OWN'			=> 'Domyślnie obserwuj własne zdjęcia',
));

?>
