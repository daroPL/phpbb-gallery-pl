<?php
/**
*
* install_gallery [Polish]
*
* @package phpBB Gallery
* @version $Id: install_gallery.php 181 2009-09-12 06:29:32Z daroPL $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 1141 2009-06-15 10:32:25 Zespół Olympus.pl $
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
	'BBCODES_NEEDS_REPARSE'		=> 'BBCode musi być przebudowany.',

	'CAT_CONVERT'			=> 'Konwersja phpBB2',
	'CAT_CONVERT_TS'		=> 'Konwersja TS Gallery',
	'CAT_UNINSTALL'				=> 'Deinstalacja phpBB Gallery',

	'CHECK_TABLES'			=> 'Sprawdź tabele',
	'CHECK_TABLES_EXPLAIN'		=> 'Poniższe tabele muszą istnieć, aby mogły być skonwertowane.',

	'CONVERT_SMARTOR_INTRO'		=> 'Konwersja z „Album-MOD by smartor” do „phpBB Gallery”',
	'CONVERT_SMARTOR_INTRO_BODY'	=> 'Za pomocą tego konwertera można skonwertować albumy, zdjęcia, oceny i komentarze z <a href="http://www.phpbb.com/community/viewtopic.php?f=16&t=74772">Album-MOD</a> autorstwa Smartora (testowano wersję 2.0.56) oraz <a href="http://www.phpbbhacks.com/download/5028">Full Album Pack</a> (testowano wersję 1.4.1) do phpBB Gallery.<br /><br /><strong>Uwaga:</strong> Uprawnienia <strong>nie zostaną</strong> skopiowane.',
	'CONVERT_TS_INTRO'		=> 'Konwersja z „TS Gallery“ do „phpBB Gallery“',
	'CONVERT_TS_INTRO_BODY'		=> 'Za pomocą tego konwertera można skonwertować albumy, zdjęcia, oceny i komentarze z <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=610509">TS Gallery</a> (testowano wersję 0.2.1) do phpBB Gallery.<br /><br /><strong>Uwaga:</strong> Uprawnienia <strong>nie zostaną</strong> skopiowane.',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Konwersja Twojej galerii do phpBB Gallery w wersji %s została zakończona.<br />Ustawienia zostaną poprawnie pobrane dopiero po usunięciu katalogu install/.<br /><br /><strong>Uwaga! Uprawnienia nie zostały skopiowane.</strong><br /><br />Należy wyczyścić bazę danych ze starych wpisów, gdzie znajdują się zagubione zdjęcia. Można to wykonać z poziomu Panel administracji » Moduły » phpBB Galllery » Porządkowanie galerii.',

	'CONVERTED_ALBUMS'		=> 'Albumy zostały skopiowane.',
	'CONVERTED_COMMENTS'		=> 'Komentarze zostały skopiowane.',
	'CONVERTED_IMAGES'		=> 'Zdjęcia zostały skopiowane.',
	'CONVERTED_MISC'		=> 'Różne elementy zostały skopiowane.',
	'CONVERTED_PERSONALS'		=> 'Albumy osobiste zostały skopiowane.',
	'CONVERTED_RATES'		=> 'Oceny zostały skopiowane.',
	'CONVERTED_RESYNC_ALBUMS'	=> 'Synchronizuj statystyki albumu.',
	'CONVERTED_RESYNC_COMMENTS'	=> 'Synchronizuj komentarze.',
	'CONVERTED_RESYNC_COUNTS'	=> 'Synchronizuj liczniki zdjęć.',
	'CONVERTED_RESYNC_RATES'	=> 'Synchronizuj oceny.',

	'FILE_DELETE_FAIL'		=> 'Nie można usunąć pliku. Proszę usunąć go ręcznie.',
	'FILE_STILL_EXISTS'		=> 'Istniejące pliki',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Wymagane</strong> Aby prawidłowo funkcjonować, phpBB Gallery musi mieć możliwość odczytu lub zapisu do pewnych plików, czy katalogów. Informacja „Tylko do odczytu” oznacza, że trzeba zmienić atrybuty odpowiedniego pliku lub katalogu, tak aby umożliwić phpBB w nich zapis.',
	'FILES_DELETE_OUTDATED'		=> 'Usuń nieaktualne pliki',
	'FILES_DELETE_OUTDATED_EXPLAIN'	=> 'Po usunięciu nieaktualnych plików nie będzie ich można już przywrócić!<br /><br />Uwaga:<br />Jeżeli są zainstalowane inne style i języki, należy usunąć te pliki ręcznie.',
	'FILES_OUTDATED'		=> 'Nieaktualne pliki',
	'FILES_OUTDATED_EXPLAIN'	=> '<strong>Nieaktualne pliki</strong> - Aby zabezpieczyć się przed włamaniami do systemu, proszę usunąć następujące pliki.',
	'FOUND_INSTALL'					=> 'Podwójna instalacja',
	'FOUND_INSTALL_EXPLAIN'			=> '<strong>Podwójna instalacja</strong> - znaleziono już instalację phpBB Gallery! Kontynuacja nadpisze wszystkie istniejące dane. Wszystkie albumy, zdjęcia i komentarze zostaną usunięte! <strong>Zalecamy %1$saktualizację%2$s.</strong>',
	'FOUND_VERSION'					=> 'Znaleziono następującą wersję',
	'FOUNDER_CHECK'					=> 'Jesteś „Założycielem” tego forum',
	'FOUNDER_NEEDED'				=> 'Musisz być „Założycielem” tego forum!',

	'INSTALL_CONGRATS_EXPLAIN'	=> 'Galeria phpBB Gallery w wersji %s została zainstalowana.<br/><br/><strong>Przed przejściem do witryny, proszę usunąć, przenieść lub zmienić nazwę katalogu „install/”. Jeśli żadna z tych czynności nie zostanie wykonana, będzie dostępny tylko panel administracji (PA).</strong>',
	'INSTALL_INTRO_BODY'		=> 'Za pomocą tej funkcji masz możliwość zainstalowania phpBB Gallery na swojej witrynie.',

	'GOTO_GALLERY'			=> 'Przejdź do phpBB Gallery',
	'GOTO_INDEX'				=> 'Przejdź do strony głównej forum',

	'MISSING_CONSTANTS'		=> 'Przed uruchomieniem skryptu instalacyjnego, należy zamieścić na serwerze edytowane pliki, a w szczególności plik includes/constants.php.',
	'MODULES_CREATE_PARENT'		=> 'Utwórz standardowy moduł macierzysty',
	'MODULES_PARENT_SELECT'		=> 'Wybierz moduł macierzysty',
	'MODULES_SELECT_4ACP'		=> 'Wybierz moduł macierzysty dla panelu administracji',
	'MODULES_SELECT_4LOG'		=> 'Wybierz moduł macierzysty dla dziennika galerii',
	'MODULES_SELECT_4MCP'		=> 'Wybierz moduł macierzysty dla panelu moderacji',
	'MODULES_SELECT_4UCP'		=> 'Wybierz moduł macierzysty dla „Mojego konta”',
	'MODULES_SELECT_NONE'		=> 'Brak modułu macierzystego',

	'NO_INSTALL_FOUND'			=> 'Nie znaleziono żadnej instalacji!',

	'REQ_GD_LIBRARY'		=> 'Biblioteka GD jest zainstalowana',
	'REQUIREMENTS_EXPLAIN'		=> 'Przed rozpoczęciem procesu instalacji, muszą zostać przeprowadzone testy konfiguracji serwera i plików, aby sprawdzić czy istnieje możliwość zainstalowania i uruchomienia phpBB Gallery. Proszę zapoznać się z wynikami i nie przechodzić dalej, dopóki wszystkie testy nie zostaną zaliczone.',

	'STAGE_ADVANCED_EXPLAIN'	=> 'Wybierz moduł macierzysty dla modułów galerii. Zazwyczaj nie należy niczego zmieniać.',
	'STAGE_COPY_TABLE'		=> 'Kopiowanie tabel bazy danych',
	'STAGE_COPY_TABLE_EXPLAIN'	=> 'Tabele bazy danych dla albumów i danych użytkowników w TS Gallery i phpBB Gallery mają taką samą nazwę. Aby móc skonwertować dane, musi zostać wykonana ich kopia.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Tabele bazy danych używane przez phpBB Gallery zostały utworzone i wypełnione wartościami początkowymi. Przejdź do następnej strony, aby zakończyć instalację phpBB Gallery.',
	'STAGE_DELETE_TABLES'			=> 'Wyczyść bazę danych',
	'STAGE_DELETE_TABLES_EXPLAIN'	=> 'Zawartość phpBB Gallery została usunięta z bazy danych. Przejdź do następnej strony, aby zakończyć deinstalację moda.',
	'SUPPORT_BODY'			=> 'Pełne wsparcie techniczne dla obecnego, stabilnego wydania phpBB Gallery jest udzielane za darmo. Wsparcie to obejmuje:</p><ul><li>instalację</li><li>konfigurację</li><li>pytania techniczne</li><li>problemy z potencjalnymi błędami w oprogramowaniu</li><li>aktualizację z wersji Release Candidate (RC) do ostatniego, stabilnego wydania</li><li>konwersję z Smartor Album-MOD dla phpBB 2.0.x do phpBB Gallery dla phpBB3</li><li>konwersję z TS Gallery do phpBB Gallery</li></ul><p>Nie zalecane jest używanie wersji beta. Jeżeli pojawią się aktualizacje, zalecamy szybkie ich zainstalowanie.</p><p>Wsparcie jest udzielane na poniższych forach</p><ul><li><a href="http://www.flying-bits.org/">flying-bits.org - forum autora moda - nickvergessen</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li></ul><p>',

	'TABLE_ALBUM'			=> 'tabela zawierająca zdjęcia',
	'TABLE_ALBUM_CAT'		=> 'tabela zawierająca albumy',
	'TABLE_ALBUM_COMMENT'		=> 'tabela zawierająca komentarze',
	'TABLE_ALBUM_CONFIG'		=> 'tabela zawierająca konfigurację',
	'TABLE_ALBUM_RATE'		=> 'tabela zawierająca oceny',
	'TABLE_EXISTS'			=> 'istniejące',
	'TABLE_MISSING'			=> 'opuszczone',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefiks instalacji phpBB2',

	'UNINSTALL_INTRO'					=> 'Witaj w deinstalacji',
	'UNINSTALL_INTRO_BODY'				=> 'Dzięki tej opcji masz możliwość deinstalacji phpBB Gallery ze swojego forum.<br /><br /><strong>UWAGA: wszystkie albumy, zdjęcia i komentarze zostaną bezpowrotnie usunięte!</strong>',
	'UNINSTALL_REQUIREMENTS'			=> 'Wymagania',
	'UNINSTALL_REQUIREMENTS_EXPLAIN'	=> 'Przed przeprowadzeniem pełnej deinstalacji, phpBB wykona kilka testów, aby przekonać się czy możesz deinstalować phpBB Gallery.',
	'UNINSTALL_START'					=> 'Deinstaluj',
	'UNINSTALL_FINISHED'				=> 'Deinstalacja prawie zakończona',
	'UNINSTALL_FINISHED_EXPLAIN'		=> 'phpBB Gallery została deinstalowana.<br/><br/><strong>Teraz musisz tylko cofnąć kroki zawarte w install.xml i usunąć pliki galerii.</strong>',

	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Tutaj możesz zaktualizować wersję swojej Galerii phpBB.',

	'VERSION_NOT_SUPPORTED'		=> 'Przepraszamy, ale aktualizacje z < 0.2.0 nie są wspierane przez tę wersję instalatora.',
	
	'OPTIONAL_EXIFDATA'            => 'Funkcja "exif_read_data" jest dostępna',
	'OPTIONAL_EXIFDATA_EXP'         => 'Moduł exif nie jest włączony lub zainstalowany.',
	'OPTIONAL_EXIFDATA_EXPLAIN'      => 'Jeżeli ta funkcja jest włączona, dane exif będę pokazywane na stronie zdjęcia.',
	'OPTIONAL_IMAGEROTATE'         => 'Funkcja "imagerotate" jest dostępna',
	'OPTIONAL_IMAGEROTATE_EXP'      => 'Powinieneś zaktualizować bibliotekę GD. Obecna wersja "%s".',
	'OPTIONAL_IMAGEROTATE_EXPLAIN'   => 'Jeżeli ta funkcja jest dostępna, będziesz mógł obracać zdjęcia podczas ich wgrywania i edytowania.',

	'PAYPAL_DEV_SUPPORT'				=> '</p><div class="errorbox">
	<h3>Uwagi autora</h3>
	<p>Tworzenie, zarządzanie i aktualizowanie tego moda wymagało/wymaga wiele czasu i wysiłku, więc jeżeli podoba Ci się ten mod i chcesz wyrazić swoje podziękowanie poprzez dotację to byłoby to mile widziane. Mój identyfikator Paypal to <strong>nickvergessen@gmx.de</strong>, lub skontaktuj się ze mną poprzez adres e-mail.<br /><br />Sugerowana kwota dotacji dla tego moda to 25,00â‚¬ (jednak każda suma będzie pomocna).</p><br />
	<a href="http://www.flying-bits.org/go/paypal"><input type="submit" value="Make PayPal-Donation" name="paypal" id="paypal" class="button1" /></a>
</div><p>',

	'PHP_SETTINGS'            => 'Ustawienia PHP',
	'PHP_SETTINGS_EXP'         => 'Te ustawienia i konfiguracje PHP są wymagane do zainstalowania i uruchomienia galerii.',
	'PHP_SETTINGS_OPTIONAL'      => 'Opcjonalne ustawienia PHP',
	'PHP_SETTINGS_OPTIONAL_EXP'   => 'Te ustawienia PHP <strong>nie są</strong> wymagane, ale pozwolą na użycie kilku dodatkowych właściwości.',
));

?>
