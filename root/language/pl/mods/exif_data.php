<?php
/**
*
* exif_data [Polish]
*
* @package phpBB Gallery / NV Exif Data
* @version $Id: exif_data.php 139 2009-06-19 09:34:02Z daroPL $
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
	'EXIF-DATA'			=> 'Dane EXIF',
	'EXIF_APERTURE'			=> 'Wartość przysłony',
	'EXIF_CAM_MODEL'		=> 'Model aparatu',
	'EXIF_DATE'			=> 'Zdjęcie zrobione dnia',
	'EXIF_EXPOSURE'			=> 'Prędkość migawki',
	'EXIF_EXPOSURE_EXP'		=> '%s s',// 'EXIF_EXPOSURE' unit
	'EXIF_EXPOSURE_BIAS'		=> 'Korekta ekspozycji',
	'EXIF_EXPOSURE_BIAS_EXP'	=> '%s EV',// 'EXIF_EXPOSURE_BIAS' unit
	'EXIF_EXPOSURE_PROG'		=> 'Program ekspozycji',
	'EXIF_EXPOSURE_PROG_0'		=> 'Niezdefiniowany',
	'EXIF_EXPOSURE_PROG_1'		=> 'Ręczny',
	'EXIF_EXPOSURE_PROG_2'		=> 'Program normalny',
	'EXIF_EXPOSURE_PROG_3'		=> 'Preselekcja przesłony',
	'EXIF_EXPOSURE_PROG_4'		=> 'Priorytet migawki',
	'EXIF_EXPOSURE_PROG_5'		=> 'Program kreatywny (duża głębia ostrości)',
	'EXIF_EXPOSURE_PROG_6'		=> 'Program aktywny (duża szybkość migawki)',
	'EXIF_EXPOSURE_PROG_7'		=> 'Tryb portretowy (dla zdjęć z bliska, z nieostrym tłem)',
	'EXIF_EXPOSURE_PROG_8'		=> 'Tryb krajobrazowy (dla dalekich zdjęć z ostrym tłem)',
	'EXIF_FLASH'			=> 'Lampa błyskowa',
	'EXIF_FLASH_CASE_0'		=> 'Wyłączona lampa błyskowa',
	'EXIF_FLASH_CASE_1'		=> 'Włączona lampa błyskowa',
	'EXIF_FLASH_CASE_5'		=> 'Nie wykryto światła odbitego',
	'EXIF_FLASH_CASE_7'		=> 'Wykryto światło odbite',
	'EXIF_FLASH_CASE_8'		=> 'Włączona, wyłączona lampa błyskowa',
	'EXIF_FLASH_CASE_9'		=> 'Włączona lampa błyskowa, tryb obowiązkowej lampy błyskowej',
	'EXIF_FLASH_CASE_13'		=> 'Włączona lampa błyskowa, tryb obowiązkowej lampy błyskowej, nie wykryto światła odbitego',
	'EXIF_FLASH_CASE_15'		=> 'Włączona lampa błyskowa, tryb obowiązkowej lampy błyskowej, wykryto światło odbite',
	'EXIF_FLASH_CASE_16'		=> 'Wyłączona lampa błyskowa, tryb obowiązkowej lampy błyskowej',
	'EXIF_FLASH_CASE_20'		=> 'Wyłączona, wyłączona lampa błyskowa, nie wykryto światła odbitego',
	'EXIF_FLASH_CASE_24'		=> 'Wyłączona lampa błyskowa, tryb automatyczny',
	'EXIF_FLASH_CASE_25'		=> 'Włączona lampa błyskowa, tryb automatyczny',
	'EXIF_FLASH_CASE_29'		=> 'Włączona lampa błyskowa, tryb automatyczny, nie wykryto światła odbitego',
	'EXIF_FLASH_CASE_31'		=> 'Włączona lampa błyskowa, tryb automatyczny, wykryto światło odbite',
	'EXIF_FLASH_CASE_32'		=> 'Brak funkcji lampy błyskowej',
	'EXIF_FLASH_CASE_48'		=> 'Wyłączona, brak funkcji lampy błyskowej',
	'EXIF_FLASH_CASE_65'		=> 'Włączona lampa błyskowa, tryb redukcji czerwonych oczu',
	'EXIF_FLASH_CASE_69'		=> 'Włączona lampa błyskowa, tryb redukcji czerwonych oczu, nie wykryto światła odbitego',
	'EXIF_FLASH_CASE_71'		=> 'Włączona lampa błyskowa, tryb redukcji czerwonych oczu, wykryto światło odbite',
	'EXIF_FLASH_CASE_73'		=> 'Włączona lampa błyskowa, tryb obowiązkowej lampy błyskowej, tryb redukcji czerwonych oczu',
	'EXIF_FLASH_CASE_77'		=> 'Włączona lampa błyskowa, tryb obowiązkowej lampy błyskowej, tryb redukcji czerwonych oczu, nie wykryto światła odbitego',
	'EXIF_FLASH_CASE_79'		=> 'Włączona lampa błyskowa, tryb obowiązkowej lampy błyskowej, tryb redukcji czerwonych oczu, wykryto światło odbite',
	'EXIF_FLASH_CASE_80'		=> 'Wyłączona, redukcja czerwonych oczu',
	'EXIF_FLASH_CASE_88'		=> 'Automatyczna, włączona lampa błyskowa, tryb redukcji czerwonych oczu',
	'EXIF_FLASH_CASE_89'		=> 'Włączona lampa błyskowa, tryb automatyczny, tryb redukcji czerwonych oczu',
	'EXIF_FLASH_CASE_93'		=> 'Włączona lampa błyskowa, tryb automatyczny, nie wykryto światła odbitego, tryb redukcji czerwonych oczu',
	'EXIF_FLASH_CASE_95'		=> 'Włączona lampa błyskowa, tryb automatyczny, wykryto światło odbite, tryb redukcji czerwonych oczu',
	'EXIF_FOCAL'			=> 'Długość ogniskowej',
	'EXIF_FOCAL_EXP'		=> '%s mm',// 'EXIF_FOCAL' unit
	'EXIF_ISO'			=> 'Czułość',
	'EXIF_METERING_MODE'		=> 'Tryb pomiaru światła',
	'EXIF_METERING_MODE_0'		=> 'Nieznany',
	'EXIF_METERING_MODE_1'		=> 'Uśredniony',
	'EXIF_METERING_MODE_2'		=> 'Centralnie ważony',
	'EXIF_METERING_MODE_3'		=> 'Punktowy',
	'EXIF_METERING_MODE_4'		=> 'Wielopunktowy',
	'EXIF_METERING_MODE_5'		=> 'Wzorcowy',
	'EXIF_METERING_MODE_6'		=> 'Częściowy',
	'EXIF_METERING_MODE_255'	=> 'Inny',
	'EXIF_NOT_AVAILABLE'		=> 'niedostępne',
	'EXIF_WHITEB'			=> 'Balans bieli',
	'EXIF_WHITEB_AUTO'		=> 'Automatyczny',
	'EXIF_WHITEB_MANU'		=> 'Ręczny',

	'SHOW_EXIF'			=> 'pokaż/ukryj',
));

?>
