<?php
/*
Plugin Name: Yahoo Currency
Plugin URI: http://www.smesolutions.co.za/
Description: Get a table with the exchange rates based on a base currency of your choice compared with any multiple currency you would like
Author: Mouring Kolhoff
Version: 1.10
License: GPL
Author URI: http://www.smesolutions.co.za
Min WP Version: 2.5
*/ 

// Add a new shortcode for ycurrency
add_shortcode('ycurrency', 'ycurrency_func');

// Major Currencies
define('USD', 'United States Dollar');
define('EUR', 'Euro');
define('GBP', 'British Pound');
define('CAD', 'Canadian Dollar');
define('AUD', 'Australian Dollar');
define('JPY', 'Japanese Yen');

// Other Currencies
define('AED', 'United Arab Emirates Dirhams');
define('ALL', 'Albanian Lek');
define('ARS', 'Argentinian Pesos');
define('DZD', 'Algerian Dinar');
define('AWG', 'Aruban Guilders');
define('BHD', 'Bahraini Dinar');
define('BBD', 'Barbados Dollar');
define('BZD', 'Belize Dollar');
define('BTN', 'Bhutan Ngultrum');
define('BWP', 'Botswana Pula');
define('BND', 'Brunei Dollar');
define('BIF', 'Burundi Franc');
define('BSD', 'Bahamian Dollar');
define('BDT', 'Bangladesh Taka');
define('BYR', 'Belarus Ruble');
define('BMD', 'Bermuda Dollar');
define('BMD', 'Bermuda Dollar');
define('BOB', 'Bolivian Boliviano');
define('BRL', 'Brazilian Real');
define('BGN', 'Bulgarian Lev');
define('KHR', 'Cambodia Riel');
define('KYD', 'Cayman Islands Dollar');
define('XAF', 'CFA Franc');
define('COP', 'Colombian Peso');
define('HRK', 'Croation Kuna');
define('CNY', 'Chinese Yuan');
define('CVE', 'Cape Verde Escudo');
define('XOF', 'CFA Franc');
define('CLP', 'Chilean Peso');
define('KMF', 'Comoros Franc');
define('CRC', 'Costa Rica Colon');
define('CUP', 'Cuban Peso');
define('DJF', 'Dijibouti Franc');
define('XCD', 'East Caribbean Dollar');
define('DKK', 'Danish Krone');
define('DOP', 'Dominican Peso');
define('ECS', 'Ecuador Sucre');
define('SVC', 'El Salvador Colon');
define('EEK', 'Estonian Kroon');
define('FKP', 'Falkland Islands Pound');
define('EGP', 'Egyptian Pound');
define('ERN', 'Eritrea Nakfa');
define('ETB', 'Ethiopian Birr');
define('FJD', 'Fiji Dollar');
define('HKD', 'Hong Kong Dollar');
define('INR', 'Indian Rupee');
define('GHC', 'Ghanian Cedi');
define('GNF', 'Guinea Franc');
define('HTG', 'Haiti Gourde');
define('HUF', 'Hungarian Forint');
define('IRR', 'Iran Rial');
define('IDR', 'Indonesian Rupiah');
define('GMD', 'Gambian Dalasi');
define('GIP', 'Gibraltar Pound');
define('GTQ', 'Guatemala Quetzal');
define('GYD', 'Guyana Dollar');
define('HNL', 'Honduras Lempira');
define('ISK', 'Iceland Krona');
define('IQD', 'Iraqi Dinar');
define('JOD', 'Jordanian Dinar');
define('KES', 'Kenyan Shilling');
define('KWD', 'Kuwaiti Dinar');
define('LVL', 'Latvian Lat');
define('LSL', 'Lesotho Loti');
define('LYD', 'Libyan Dinar');
define('JMD', 'Jamaican Dollar');
define('KZT', 'Kazakhstan Tenge');
define('KRW', 'Korean Won');
define('LAK', 'Lao Kip');
define('LRD', 'Liberian Dollar');
define('LTL', 'Lithuanian Lita');
define('MOP', 'Macau Pataca');
define('MWK', 'Malawi Kwacha');
define('MVR', 'Maldives Rufiyaa');
define('MRO', 'Mauritania Ougulya');
define('MXN', 'Mexican Peso');
define('MNT', 'Mongolian Tugrik');
define('MMK', 'Myanmar Kyat');
define('MKD', 'Macedonian Denar');
define('MYR', 'Malaysian Ringit');
define('MTL', 'Maltese Lira');
define('MUR', 'Mauritius Rupee');
define('MDL', 'Moldovan Leu');
define('MAD', 'Moroccan Dirham');
define('NAD', 'Namibian Dollar');
define('NIO', 'Nicaragua Cordoba');
define('KPW', 'North Korean Won');
define('OMR', 'Omani Rial');
define('NPR', 'Nepalese Rupee');
define('NZD', 'New Zealand Dollar');
define('NGN', 'Nigerian Naira');
define('ANG', 'Neth Antilles Guilder');
define('NOK', 'Norwegian Krone');
define('XPF', 'Pacific Franc');
define('PGK', 'Papua New Guinnea Kina');
define('PEN', 'Peruvian Nuevo Sol');
define('QAR', 'Qatar Rial');
define('RUB', 'Rusian Rouble');
define('PKR', 'Pakistani Rupee');
define('PAB', 'Panama Balboa');
define('PYG', 'Paraguayan Guarani');
define('PHP', 'Philippine Peso');
define('PLN', 'Polish Zloty');
define('RON', 'Romanian New Leu');
define('RWF', 'Rwanda Franc');
define('CHF', 'Swiss Franc');
define('STD', 'Sao Tome Dobra');
define('SCR', 'Seychelles Rupee');
define('SKK', 'Slovak Koruna');
define('SBD', 'Solomon Islands Dollar');
define('SHP', 'St Helena Pound');
define('SZL', 'Swaziland Lilageni');
define('SYP', 'Syrian Pound');
define('WST', 'Samoa Tala');
define('SAR', 'Saudi Arabian Riyal');
define('SSL', 'Sierra Leone Leone');
define('ZAR', 'South African Rand');
define('SGD', 'Singapore Dollar');
define('SIT', 'Slovenian Tolar');
define('SOS', 'Somali Shilling');
define('LKR', 'Sri Lanka Rupee');
define('SDG', 'Sudanese Pound');
define('SEK', 'Swedish Krona');
define('TRY', 'Turkish Lira');
define('TZS', 'Tanzanian Shilling');
define('TTD', 'Trinidad & Tobago Dollar');
define('AED', 'UAE Dirham');
define('UAH', 'Ukraine Hryvnia');
define('THB', 'Thai Baht');
define('TWD', 'Taiwan Dollar');
define('TOP', 'Tonga Paang');
define('TND', 'Tunisian Dinar');
define('UGX', 'Ugandan Shilling');
define('UYU', 'Uruguayan New Peso');
define('VUV', 'Vanautu Vatu');
define('VND', 'Vietnam Dong');
define('ZMK', 'Zambian Kwacha');
define('VEB', 'Venezuelan Bolivar');
define('YER', 'Yemen Riyal');
define('ZWD', 'Zimbabwe Dollar');
define('YURL','http://download.finance.yahoo.com/d/quotes.csv?s=');
define('YURLPARAMS','&f=l1&e=.csv');

function ycurrency_func($atts) {
	extract(shortcode_atts(array(
	  'base' => 'ZAR',
	  'xcur' => 'USD',
	  'zone' => 'Africa/Johannesburg'
	), $atts));
	$currencies=(explode(',', $xcur));
	foreach ($currencies as $value => $label) {
    $url_addon.="$base$label=X,$label$base=X,";  
	}
	$url_addon=trim($url_addon,",");
	$data = file_get_contents(YURL.$url_addon.YURLPARAMS);
	$data=explode(chr(13), $data);
	$x1="One ".constant($base)." equals";
	$now=date_at_timezone("Y/m/d, G:i e",$zone,time());
	//$x2="One Currency equals ".constant($base);
	$return="<table class='ycurrency'><tr><td width='220px'><b>$x1</b></td><td class='flags sp-".strtolower(substr($base,0,2))."'>&nbsp;</td><td>Last Update @ <b>$now</b></td></tr>";
	foreach ($currencies as $value => $label) {
	$value=$value*2;
	$return.="<tr><td width='220px'>".round($data[$value],3)." ".constant($label)."</td><td class='flags sp-".strtolower(substr($label,0,2))."'></td><td>One ".constant($label)." equals ".round($data[$value+1],2)." ".$base."</td></tr>";
	}
	$return.="<tr><td colspan='3'>Brought to you by <a href=\"http://www.exchange-rates.co.za\">Exchange Rates South Africa</a></td></tr>";
	$return.="</table>";
	return $return;
}

function mycss_header() {
	echo '<link rel="stylesheet" type="text/css" media="screen" href="' . trailingslashit(get_settings('siteurl')) . 'wp-content/plugins/ycurrency/ycurrency1.css" />';
	echo "\n";
}

add_action('wp_head', 'mycss_header');	

function date_at_timezone($format, $locale, $timestamp=null){
    
    if(is_null($timestamp)) $timestamp = time();
    
    //Prepare to calculate the time zone offset
    $current = time();
    
    //Switch to new time zone locale
    $tz = date_default_timezone_get();
    date_default_timezone_set($locale);
    
    //Calculate the offset
    $offset = time() - $current;
    
    //Get the date in the new locale
    $output = date($format, $timestamp - $offset);
    
    //Restore the previous time zone
    date_default_timezone_set($tz);
    
    return $output;
}					
?>