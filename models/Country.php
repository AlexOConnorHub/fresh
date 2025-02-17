<?php

namespace app\models;

/**
 * This is the model class for table "country".
 *
 * @property string $name
 * @property string $code
 *
 * @property City[] $cities
 */
class Country extends \yii\base\BaseObject {
    public $name;
    public $code;

    private static $countries = [
        'AF' => [
            'name' => "Afghanistan",
            'code' => 'AF',
        ],
        'AL' => [
            'name' => "Albania",
            'code' => 'AL',
        ],
        'DZ' => [
            'name' => "Algeria",
            'code' => 'DZ',
        ],
        'AS' => [
            'name' => "American Samoa",
            'code' => 'AS',
        ],
        'AD' => [
            'name' => "Andorra",
            'code' => 'AD',
        ],
        'AO' => [
            'name' => "Angola",
            'code' => 'AO',
        ],
        'AI' => [
            'name' => "Anguilla",
            'code' => 'AI',
        ],
        'AQ' => [
            'name' => "Antarctica",
            'code' => 'AQ',
        ],
        'AG' => [
            'name' => "Antigua and Barbuda",
            'code' => 'AG',
        ],
        'AR' => [
            'name' => "Argentina",
            'code' => 'AR',
        ],
        'AM' => [
            'name' => "Armenia",
            'code' => 'AM',
        ],
        'AW' => [
            'name' => "Aruba",
            'code' => 'AW',
        ],
        'AU' => [
            'name' => "Australia",
            'code' => 'AU',
        ],
        'AT' => [
            'name' => "Austria",
            'code' => 'AT',
        ],
        'AZ' => [
            'name' => "Azerbaijan",
            'code' => 'AZ',
        ],
        'BS' => [
            'name' => "Bahamas (the)",
            'code' => 'BS',
        ],
        'BH' => [
            'name' => "Bahrain",
            'code' => 'BH',
        ],
        'BD' => [
            'name' => "Bangladesh",
            'code' => 'BD',
        ],
        'BB' => [
            'name' => "Barbados",
            'code' => 'BB',
        ],
        'BY' => [
            'name' => "Belarus",
            'code' => 'BY',
        ],
        'BE' => [
            'name' => "Belgium",
            'code' => 'BE',
        ],
        'BZ' => [
            'name' => "Belize",
            'code' => 'BZ',
        ],
        'BJ' => [
            'name' => "Benin",
            'code' => 'BJ',
        ],
        'BM' => [
            'name' => "Bermuda",
            'code' => 'BM',
        ],
        'BT' => [
            'name' => "Bhutan",
            'code' => 'BT',
        ],
        'BO' => [
            'name' => "Bolivia (Plurinational State of)",
            'code' => 'BO',
        ],
        'BQ' => [
            'name' => "Bonaire, Sint Eustatius and Saba",
            'code' => 'BQ',
        ],
        'BA' => [
            'name' => "Bosnia and Herzegovina",
            'code' => 'BA',
        ],
        'BW' => [
            'name' => "Botswana",
            'code' => 'BW',
        ],
        'BV' => [
            'name' => "Bouvet Island",
            'code' => 'BV',
        ],
        'BR' => [
            'name' => "Brazil",
            'code' => 'BR',
        ],
        'IO' => [
            'name' => "British Indian Ocean Territory (the)",
            'code' => 'IO',
        ],
        'BN' => [
            'name' => "Brunei Darussalam",
            'code' => 'BN',
        ],
        'BG' => [
            'name' => "Bulgaria",
            'code' => 'BG',
        ],
        'BF' => [
            'name' => "Burkina Faso",
            'code' => 'BF',
        ],
        'BI' => [
            'name' => "Burundi",
            'code' => 'BI',
        ],
        'CV' => [
            'name' => "Cabo Verde",
            'code' => 'CV',
        ],
        'KH' => [
            'name' => "Cambodia",
            'code' => 'KH',
        ],
        'CM' => [
            'name' => "Cameroon",
            'code' => 'CM',
        ],
        'CA' => [
            'name' => "Canada",
            'code' => 'CA',
        ],
        'KY' => [
            'name' => "Cayman Islands (the)",
            'code' => 'KY',
        ],
        'CF' => [
            'name' => "Central African Republic (the)",
            'code' => 'CF',
        ],
        'TD' => [
            'name' => "Chad",
            'code' => 'TD',
        ],
        'CL' => [
            'name' => "Chile",
            'code' => 'CL',
        ],
        'CN' => [
            'name' => "China",
            'code' => 'CN',
        ],
        'CX' => [
            'name' => "Christmas Island",
            'code' => 'CX',
        ],
        'CC' => [
            'name' => "Cocos (Keeling) Islands (the)",
            'code' => 'CC',
        ],
        'CO' => [
            'name' => "Colombia",
            'code' => 'CO',
        ],
        'KM' => [
            'name' => "Comoros (the)",
            'code' => 'KM',
        ],
        'CD' => [
            'name' => "Congo (the Democratic Republic of the)",
            'code' => 'CD',
        ],
        'CG' => [
            'name' => "Congo (the)",
            'code' => 'CG',
        ],
        'CK' => [
            'name' => "Cook Islands (the)",
            'code' => 'CK',
        ],
        'CR' => [
            'name' => "Costa Rica",
            'code' => 'CR',
        ],
        'HR' => [
            'name' => "Croatia",
            'code' => 'HR',
        ],
        'CU' => [
            'name' => "Cuba",
            'code' => 'CU',
        ],
        'CW' => [
            'name' => "Curaçao",
            'code' => 'CW',
        ],
        'CY' => [
            'name' => "Cyprus",
            'code' => 'CY',
        ],
        'CZ' => [
            'name' => "Czechia",
            'code' => 'CZ',
        ],
        'CI' => [
            'name' => "Côte d'Ivoire",
            'code' => 'CI',
        ],
        'DK' => [
            'name' => "Denmark",
            'code' => 'DK',
        ],
        'DJ' => [
            'name' => "Djibouti",
            'code' => 'DJ',
        ],
        'DM' => [
            'name' => "Dominica",
            'code' => 'DM',
        ],
        'DO' => [
            'name' => "Dominican Republic (the)",
            'code' => 'DO',
        ],
        'EC' => [
            'name' => "Ecuador",
            'code' => 'EC',
        ],
        'EG' => [
            'name' => "Egypt",
            'code' => 'EG',
        ],
        'SV' => [
            'name' => "El Salvador",
            'code' => 'SV',
        ],
        'GQ' => [
            'name' => "Equatorial Guinea",
            'code' => 'GQ',
        ],
        'ER' => [
            'name' => "Eritrea",
            'code' => 'ER',
        ],
        'EE' => [
            'name' => "Estonia",
            'code' => 'EE',
        ],
        'SZ' => [
            'name' => "Eswatini",
            'code' => 'SZ',
        ],
        'ET' => [
            'name' => "Ethiopia",
            'code' => 'ET',
        ],
        'FK' => [
            'name' => "Falkland Islands (the) [Malvinas]",
            'code' => 'FK',
        ],
        'FO' => [
            'name' => "Faroe Islands (the)",
            'code' => 'FO',
        ],
        'FJ' => [
            'name' => "Fiji",
            'code' => 'FJ',
        ],
        'FI' => [
            'name' => "Finland",
            'code' => 'FI',
        ],
        'FR' => [
            'name' => "France",
            'code' => 'FR',
        ],
        'GF' => [
            'name' => "French Guiana",
            'code' => 'GF',
        ],
        'PF' => [
            'name' => "French Polynesia",
            'code' => 'PF',
        ],
        'TF' => [
            'name' => "French Southern Territories (the)",
            'code' => 'TF',
        ],
        'GA' => [
            'name' => "Gabon",
            'code' => 'GA',
        ],
        'GM' => [
            'name' => "Gambia (the)",
            'code' => 'GM',
        ],
        'GE' => [
            'name' => "Georgia",
            'code' => 'GE',
        ],
        'DE' => [
            'name' => "Germany",
            'code' => 'DE',
        ],
        'GH' => [
            'name' => "Ghana",
            'code' => 'GH',
        ],
        'GI' => [
            'name' => "Gibraltar",
            'code' => 'GI',
        ],
        'GR' => [
            'name' => "Greece",
            'code' => 'GR',
        ],
        'GL' => [
            'name' => "Greenland",
            'code' => 'GL',
        ],
        'GD' => [
            'name' => "Grenada",
            'code' => 'GD',
        ],
        'GP' => [
            'name' => "Guadeloupe",
            'code' => 'GP',
        ],
        'GU' => [
            'name' => "Guam",
            'code' => 'GU',
        ],
        'GT' => [
            'name' => "Guatemala",
            'code' => 'GT',
        ],
        'GG' => [
            'name' => "Guernsey",
            'code' => 'GG',
        ],
        'GN' => [
            'name' => "Guinea",
            'code' => 'GN',
        ],
        'GW' => [
            'name' => "Guinea-Bissau",
            'code' => 'GW',
        ],
        'GY' => [
            'name' => "Guyana",
            'code' => 'GY',
        ],
        'HT' => [
            'name' => "Haiti",
            'code' => 'HT',
        ],
        'HM' => [
            'name' => "Heard Island and McDonald Islands",
            'code' => 'HM',
        ],
        'VA' => [
            'name' => "Holy See (the)",
            'code' => 'VA',
        ],
        'HN' => [
            'name' => "Honduras",
            'code' => 'HN',
        ],
        'HK' => [
            'name' => "Hong Kong",
            'code' => 'HK',
        ],
        'HU' => [
            'name' => "Hungary",
            'code' => 'HU',
        ],
        'IS' => [
            'name' => "Iceland",
            'code' => 'IS',
        ],
        'IN' => [
            'name' => "India",
            'code' => 'IN',
        ],
        'ID' => [
            'name' => "Indonesia",
            'code' => 'ID',
        ],
        'IR' => [
            'name' => "Iran (Islamic Republic of)",
            'code' => 'IR',
        ],
        'IQ' => [
            'name' => "Iraq",
            'code' => 'IQ',
        ],
        'IE' => [
            'name' => "Ireland",
            'code' => 'IE',
        ],
        'IM' => [
            'name' => "Isle of Man",
            'code' => 'IM',
        ],
        'IL' => [
            'name' => "Israel",
            'code' => 'IL',
        ],
        'IT' => [
            'name' => "Italy",
            'code' => 'IT',
        ],
        'JM' => [
            'name' => "Jamaica",
            'code' => 'JM',
        ],
        'JP' => [
            'name' => "Japan",
            'code' => 'JP',
        ],
        'JE' => [
            'name' => "Jersey",
            'code' => 'JE',
        ],
        'JO' => [
            'name' => "Jordan",
            'code' => 'JO',
        ],
        'KZ' => [
            'name' => "Kazakhstan",
            'code' => 'KZ',
        ],
        'KE' => [
            'name' => "Kenya",
            'code' => 'KE',
        ],
        'KI' => [
            'name' => "Kiribati",
            'code' => 'KI',
        ],
        'KP' => [
            'name' => "Korea (the Democratic People's Republic of)",
            'code' => 'KP',
        ],
        'KR' => [
            'name' => "Korea (the Republic of)",
            'code' => 'KR',
        ],
        'KW' => [
            'name' => "Kuwait",
            'code' => 'KW',
        ],
        'KG' => [
            'name' => "Kyrgyzstan",
            'code' => 'KG',
        ],
        'LA' => [
            'name' => "Lao People's Democratic Republic (the)",
            'code' => 'LA',
        ],
        'LV' => [
            'name' => "Latvia",
            'code' => 'LV',
        ],
        'LB' => [
            'name' => "Lebanon",
            'code' => 'LB',
        ],
        'LS' => [
            'name' => "Lesotho",
            'code' => 'LS',
        ],
        'LR' => [
            'name' => "Liberia",
            'code' => 'LR',
        ],
        'LY' => [
            'name' => "Libya",
            'code' => 'LY',
        ],
        'LI' => [
            'name' => "Liechtenstein",
            'code' => 'LI',
        ],
        'LT' => [
            'name' => "Lithuania",
            'code' => 'LT',
        ],
        'LU' => [
            'name' => "Luxembourg",
            'code' => 'LU',
        ],
        'MO' => [
            'name' => "Macao",
            'code' => 'MO',
        ],
        'MG' => [
            'name' => "Madagascar",
            'code' => 'MG',
        ],
        'MW' => [
            'name' => "Malawi",
            'code' => 'MW',
        ],
        'MY' => [
            'name' => "Malaysia",
            'code' => 'MY',
        ],
        'MV' => [
            'name' => "Maldives",
            'code' => 'MV',
        ],
        'ML' => [
            'name' => "Mali",
            'code' => 'ML',
        ],
        'MT' => [
            'name' => "Malta",
            'code' => 'MT',
        ],
        'MH' => [
            'name' => "Marshall Islands (the)",
            'code' => 'MH',
        ],
        'MQ' => [
            'name' => "Martinique",
            'code' => 'MQ',
        ],
        'MR' => [
            'name' => "Mauritania",
            'code' => 'MR',
        ],
        'MU' => [
            'name' => "Mauritius",
            'code' => 'MU',
        ],
        'YT' => [
            'name' => "Mayotte",
            'code' => 'YT',
        ],
        'MX' => [
            'name' => "Mexico",
            'code' => 'MX',
        ],
        'FM' => [
            'name' => "Micronesia (Federated States of)",
            'code' => 'FM',
        ],
        'MD' => [
            'name' => "Moldova (the Republic of)",
            'code' => 'MD',
        ],
        'MC' => [
            'name' => "Monaco",
            'code' => 'MC',
        ],
        'MN' => [
            'name' => "Mongolia",
            'code' => 'MN',
        ],
        'ME' => [
            'name' => "Montenegro",
            'code' => 'ME',
        ],
        'MS' => [
            'name' => "Montserrat",
            'code' => 'MS',
        ],
        'MA' => [
            'name' => "Morocco",
            'code' => 'MA',
        ],
        'MZ' => [
            'name' => "Mozambique",
            'code' => 'MZ',
        ],
        'MM' => [
            'name' => "Myanmar",
            'code' => 'MM',
        ],
        'NA' => [
            'name' => "Namibia",
            'code' => 'NA',
        ],
        'NR' => [
            'name' => "Nauru",
            'code' => 'NR',
        ],
        'NP' => [
            'name' => "Nepal",
            'code' => 'NP',
        ],
        'NL' => [
            'name' => "Netherlands (the)",
            'code' => 'NL',
        ],
        'NC' => [
            'name' => "New Caledonia",
            'code' => 'NC',
        ],
        'NZ' => [
            'name' => "New Zealand",
            'code' => 'NZ',
        ],
        'NI' => [
            'name' => "Nicaragua",
            'code' => 'NI',
        ],
        'NE' => [
            'name' => "Niger (the)",
            'code' => 'NE',
        ],
        'NG' => [
            'name' => "Nigeria",
            'code' => 'NG',
        ],
        'NU' => [
            'name' => "Niue",
            'code' => 'NU',
        ],
        'NF' => [
            'name' => "Norfolk Island",
            'code' => 'NF',
        ],
        'MP' => [
            'name' => "Northern Mariana Islands (the)",
            'code' => 'MP',
        ],
        'NO' => [
            'name' => "Norway",
            'code' => 'NO',
        ],
        'OM' => [
            'name' => "Oman",
            'code' => 'OM',
        ],
        'PK' => [
            'name' => "Pakistan",
            'code' => 'PK',
        ],
        'PW' => [
            'name' => "Palau",
            'code' => 'PW',
        ],
        'PS' => [
            'name' => "Palestine, State of",
            'code' => 'PS',
        ],
        'PA' => [
            'name' => "Panama",
            'code' => 'PA',
        ],
        'PG' => [
            'name' => "Papua New Guinea",
            'code' => 'PG',
        ],
        'PY' => [
            'name' => "Paraguay",
            'code' => 'PY',
        ],
        'PE' => [
            'name' => "Peru",
            'code' => 'PE',
        ],
        'PH' => [
            'name' => "Philippines (the)",
            'code' => 'PH',
        ],
        'PN' => [
            'name' => "Pitcairn",
            'code' => 'PN',
        ],
        'PL' => [
            'name' => "Poland",
            'code' => 'PL',
        ],
        'PT' => [
            'name' => "Portugal",
            'code' => 'PT',
        ],
        'PR' => [
            'name' => "Puerto Rico",
            'code' => 'PR',
        ],
        'QA' => [
            'name' => "Qatar",
            'code' => 'QA',
        ],
        'MK' => [
            'name' => "Republic of North Macedonia",
            'code' => 'MK',
        ],
        'RO' => [
            'name' => "Romania",
            'code' => 'RO',
        ],
        'RU' => [
            'name' => "Russian Federation (the)",
            'code' => 'RU',
        ],
        'RW' => [
            'name' => "Rwanda",
            'code' => 'RW',
        ],
        'RE' => [
            'name' => "Réunion",
            'code' => 'RE',
        ],
        'BL' => [
            'name' => "Saint Barthélemy",
            'code' => 'BL',
        ],
        'SH' => [
            'name' => "Saint Helena, Ascension and Tristan da Cunha",
            'code' => 'SH',
        ],
        'KN' => [
            'name' => "Saint Kitts and Nevis",
            'code' => 'KN',
        ],
        'LC' => [
            'name' => "Saint Lucia",
            'code' => 'LC',
        ],
        'MF' => [
            'name' => "Saint Martin (French part)",
            'code' => 'MF',
        ],
        'PM' => [
            'name' => "Saint Pierre and Miquelon",
            'code' => 'PM',
        ],
        'VC' => [
            'name' => "Saint Vincent and the Grenadines",
            'code' => 'VC',
        ],
        'WS' => [
            'name' => "Samoa",
            'code' => 'WS',
        ],
        'SM' => [
            'name' => "San Marino",
            'code' => 'SM',
        ],
        'ST' => [
            'name' => "Sao Tome and Principe",
            'code' => 'ST',
        ],
        'SA' => [
            'name' => "Saudi Arabia",
            'code' => 'SA',
        ],
        'SN' => [
            'name' => "Senegal",
            'code' => 'SN',
        ],
        'RS' => [
            'name' => "Serbia",
            'code' => 'RS',
        ],
        'SC' => [
            'name' => "Seychelles",
            'code' => 'SC',
        ],
        'SL' => [
            'name' => "Sierra Leone",
            'code' => 'SL',
        ],
        'SG' => [
            'name' => "Singapore",
            'code' => 'SG',
        ],
        'SX' => [
            'name' => "Sint Maarten (Dutch part)",
            'code' => 'SX',
        ],
        'SK' => [
            'name' => "Slovakia",
            'code' => 'SK',
        ],
        'SI' => [
            'name' => "Slovenia",
            'code' => 'SI',
        ],
        'SB' => [
            'name' => "Solomon Islands",
            'code' => 'SB',
        ],
        'SO' => [
            'name' => "Somalia",
            'code' => 'SO',
        ],
        'ZA' => [
            'name' => "South Africa",
            'code' => 'ZA',
        ],
        'GS' => [
            'name' => "South Georgia and the South Sandwich Islands",
            'code' => 'GS',
        ],
        'SS' => [
            'name' => "South Sudan",
            'code' => 'SS',
        ],
        'ES' => [
            'name' => "Spain",
            'code' => 'ES',
        ],
        'LK' => [
            'name' => "Sri Lanka",
            'code' => 'LK',
        ],
        'SD' => [
            'name' => "Sudan (the)",
            'code' => 'SD',
        ],
        'SR' => [
            'name' => "Suriname",
            'code' => 'SR',
        ],
        'SJ' => [
            'name' => "Svalbard and Jan Mayen",
            'code' => 'SJ',
        ],
        'SE' => [
            'name' => "Sweden",
            'code' => 'SE',
        ],
        'CH' => [
            'name' => "Switzerland",
            'code' => 'CH',
        ],
        'SY' => [
            'name' => "Syrian Arab Republic",
            'code' => 'SY',
        ],
        'TW' => [
            'name' => "Taiwan (Province of China)",
            'code' => 'TW',
        ],
        'TJ' => [
            'name' => "Tajikistan",
            'code' => 'TJ',
        ],
        'TZ' => [
            'name' => "Tanzania, United Republic of",
            'code' => 'TZ',
        ],
        'TH' => [
            'name' => "Thailand",
            'code' => 'TH',
        ],
        'TL' => [
            'name' => "Timor-Leste",
            'code' => 'TL',
        ],
        'TG' => [
            'name' => "Togo",
            'code' => 'TG',
        ],
        'TK' => [
            'name' => "Tokelau",
            'code' => 'TK',
        ],
        'TO' => [
            'name' => "Tonga",
            'code' => 'TO',
        ],
        'TT' => [
            'name' => "Trinidad and Tobago",
            'code' => 'TT',
        ],
        'TN' => [
            'name' => "Tunisia",
            'code' => 'TN',
        ],
        'TR' => [
            'name' => "Turkey",
            'code' => 'TR',
        ],
        'TM' => [
            'name' => "Turkmenistan",
            'code' => 'TM',
        ],
        'TC' => [
            'name' => "Turks and Caicos Islands (the)",
            'code' => 'TC',
        ],
        'TV' => [
            'name' => "Tuvalu",
            'code' => 'TV',
        ],
        'UG' => [
            'name' => "Uganda",
            'code' => 'UG',
        ],
        'UA' => [
            'name' => "Ukraine",
            'code' => 'UA',
        ],
        'AE' => [
            'name' => "United Arab Emirates (the)",
            'code' => 'AE',
        ],
        'GB' => [
            'name' => "United Kingdom of Great Britain and Northern Ireland (the)",
            'code' => 'GB',
        ],
        'UM' => [
            'name' => "United States Minor Outlying Islands (the)",
            'code' => 'UM',
        ],
        'US' => [
            'name' => "United States of America (the)",
            'code' => 'US',
        ],
        'UY' => [
            'name' => "Uruguay",
            'code' => 'UY',
        ],
        'UZ' => [
            'name' => "Uzbekistan",
            'code' => 'UZ',
        ],
        'VU' => [
            'name' => "Vanuatu",
            'code' => 'VU',
        ],
        'VE' => [
            'name' => "Venezuela (Bolivarian Republic of)",
            'code' => 'VE',
        ],
        'VN' => [
            'name' => "Viet Nam",
            'code' => 'VN',
        ],
        'VG' => [
            'name' => "Virgin Islands (British)",
            'code' => 'VG',
        ],
        'VI' => [
            'name' => "Virgin Islands (U.S.)",
            'code' => 'VI',
        ],
        'WF' => [
            'name' => "Wallis and Futuna",
            'code' => 'WF',
        ],
        'EH' => [
            'name' => "Western Sahara",
            'code' => 'EH',
        ],
        'YE' => [
            'name' => "Yemen",
            'code' => 'YE',
        ],
        'ZM' => [
            'name' => "Zambia",
            'code' => 'ZM',
        ],
        'ZW' => [
            'name' => "Zimbabwe",
            'code' => 'ZW',
        ],
        'AX' => [
            'name' => "Åland Islands",
            'code' => 'AX',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getCountry($code = null) {
        if ($code) {
            return isset($this->countries[$code]) ? $this->countries[$code] : null;
        }
        if (isset($this->countries[$this->code])) {
            return $this->countries[$this->code];
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryName() {
        if ($country = $this->getCountry()) {
            return $country['name'];
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryCode() {
        if ($country = $this->getCountry()) {
            return $country['code'];
        }
        return null;
    }
}
