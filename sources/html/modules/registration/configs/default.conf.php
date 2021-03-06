<?php
  /* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | Elastix version 2.0.0-31                                               |
  | http://www.elastix.com                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2006 Palosanto Solutions S. A.                         |
  +----------------------------------------------------------------------+
  | Cdla. Nueva Kennedy Calle E 222 y 9na. Este                          |
  | Telfs. 2283-268, 2294-440, 2284-356                                  |
  | Guayaquil - Ecuador                                                  |
  | http://www.palosanto.com                                             |
  +----------------------------------------------------------------------+
  | The contents of this file are subject to the General Public License  |
  | (GPL) Version 2 (the "License"); you may not use this file except in |
  | compliance with the License. You may obtain a copy of the License at |
  | http://www.opensource.org/licenses/gpl-license.php                   |
  |                                                                      |
  | Software distributed under the License is distributed on an "AS IS"  |
  | basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See  |
  | the License for the specific language governing rights and           |
  | limitations under the License.                                       |
  +----------------------------------------------------------------------+
  | The Original Code is: Elastix Open Source.                           |
  | The Initial Developer of the Original Code is PaloSanto Solutions    |
  +----------------------------------------------------------------------+
  $Id: default.conf.php,v 1.1 2010-08-09 10:08:51 Mercy Anchundia manchundia@palosanto.com Exp $ */
    global $arrConf;
    global $arrConfModule;

    $arrConfModule['module_name']       = 'registration';
    $arrConfModule['templates_dir']     = 'themes';
    $arrConfModule['dsn_conn_database'] = "sqlite3:///$arrConf[elastix_dbdir]/register.db";
    $arrConfModule['url_webservice']    = "http://cloud.issabel.org/wsdl.php?type=wsdl&name=register";
    
    $arrCountry = array();
    $arrCountry["Afghanistan"] = "Afghanistan";
    $arrCountry["Akrotiri"] = "Akrotiri";
    $arrCountry["Albania"] = "Albania";
    $arrCountry["Algeria"] = "Algeria";
    $arrCountry["American Samoa"] = "American Samoa";
    $arrCountry["Andorra"] = "Andorra";
    $arrCountry["Angola"] = "Angola";
    $arrCountry["Anguilla"] = "Anguilla";
    $arrCountry["Antarctica"] = "Antarctica";
    $arrCountry["Antigua and Barbuda"] = "Antigua and Barbuda";
    $arrCountry["Arctic Ocean"] = "Arctic Ocean";
    $arrCountry["Argentina"] = "Argentina";
    $arrCountry["Armenia"] = "Armenia";
    $arrCountry["Aruba"] = "Aruba";
    $arrCountry["Ashmore and Cartier Islands"] = "Ashmore and Cartier Islands";
    $arrCountry["Atlantic Ocean"] = "Atlantic Ocean";
    $arrCountry["Australia"] = "Australia";
    $arrCountry["Austria"] = "Austria";
    $arrCountry["Azerbaijan"] = "Azerbaijan";
    $arrCountry["Bahamas, The"] = "Bahamas, The";
    $arrCountry["Bahrain"] = "Bahrain";
    $arrCountry["Baker Island"] = "Baker Island";
    $arrCountry["Bangladesh"] = "Bangladesh";
    $arrCountry["Barbados"] = "Barbados";
    $arrCountry["Bassas da India"] = "Bassas da India";
    $arrCountry["Belarus"] = "Belarus";
    $arrCountry["Belgium"] = "Belgium";
    $arrCountry["Belize"] = "Belize";
    $arrCountry["Benin"] = "Benin";
    $arrCountry["Bermuda"] = "Bermuda";
    $arrCountry["Bhutan"] = "Bhutan";
    $arrCountry["Bolivia"] = "Bolivia";
    $arrCountry["Bosnia and Herzegovina"] = "Bosnia and Herzegovina";
    $arrCountry["Botswana"] = "Botswana";
    $arrCountry["Bouvet Island"] = "Bouvet Island";
    $arrCountry["Brazil"] = "Brazil";
    $arrCountry["British Indian Ocean Territory"] = "British Indian Ocean Territory";
    $arrCountry["British Virgin Islands"] = "British Virgin Islands";
    $arrCountry["Brunei"] = "Brunei";
    $arrCountry["Bulgaria"] = "Bulgaria";
    $arrCountry["Burkina Faso"] = "Burkina Faso";
    $arrCountry["Burma"] = "Burma";
    $arrCountry["Burundi"] = "Burundi";
    $arrCountry["Cambodia"] = "Cambodia";
    $arrCountry["Cameroon"] = "Cameroon";
    $arrCountry["Canada"] = "Canada";
    $arrCountry["Cape Verde"] = "Cape Verde";
    $arrCountry["Cayman Islands"] = "Cayman Islands";
    $arrCountry["Central African Republic"] = "Central African Republic";
    $arrCountry["Chad"] = "Chad";
    $arrCountry["Chile"] = "Chile";
    $arrCountry["China"] = "China";
    $arrCountry["Christmas Island"] = "Christmas Island";
    $arrCountry["Clipperton Island"] = "Clipperton Island";
    $arrCountry["Cocos (Keeling) Islands"] = "Cocos (Keeling) Islands";
    $arrCountry["Colombia"] = "Colombia";
    $arrCountry["Comoros"] = "Comoros";
    $arrCountry["Democratic Republic of the Congo"] = "Democratic Republic of the Congo";
    $arrCountry["Cook Islands"] = "Cook Islands";
    $arrCountry["Coral Sea Islands"] = "Coral Sea Islands";
    $arrCountry["Costa Rica"] = "Costa Rica";
    $arrCountry["Cote d'Ivoire"] = "Cote d'Ivoire";
    $arrCountry["Croatia"] = "Croatia";
    $arrCountry["Cuba"] = "Cuba";
    $arrCountry["Cyprus"] = "Cyprus";
    $arrCountry["Czech Republic"] = "Czech Republic";
    $arrCountry["Denmark"] = "Denmark";
    $arrCountry["Dhekelia"] = "Dhekelia";
    $arrCountry["Djibouti"] = "Djibouti";
    $arrCountry["Dominica"] = "Dominica";
    $arrCountry["Dominican Republic"] = "Dominican Republic";
    $arrCountry["East Timor"] = "East Timor";
    $arrCountry["Ecuador"] = "Ecuador";
    $arrCountry["Egypt"] = "Egypt";
    $arrCountry["El Salvador"] = "El Salvador";
    $arrCountry["Equatorial Guinea"] = "Equatorial Guinea";
    $arrCountry["Eritrea"] = "Eritrea";
    $arrCountry["Estonia"] = "Estonia";
    $arrCountry["Ethiopia"] = "Ethiopia";
    $arrCountry["Europa Island"] = "Europa Island";
    $arrCountry["Falkland Islands (Islas Malvinas)"] = "Falkland Islands (Islas Malvinas)";
    $arrCountry["Faroe Islands"] = "Faroe Islands";
    $arrCountry["Fiji"] = "Fiji";
    $arrCountry["Finland"] = "Finland";
    $arrCountry["France"] = "France";
    $arrCountry["French Guiana"] = "French Guiana";
    $arrCountry["French Polynesia"] = "French Polynesia";
    $arrCountry["French Southern and Antarctic Lands"] = "French Southern and Antarctic Lands";
    $arrCountry["Gabon"] = "Gabon";
    $arrCountry["Gambia, The"] = "Gambia, The";
    $arrCountry["Gaza Strip"] = "Gaza Strip";
    $arrCountry["Georgia"] = "Georgia";
    $arrCountry["Germany"] = "Germany";
    $arrCountry["Ghana"] = "Ghana";
    $arrCountry["Gibraltar"] = "Gibraltar";
    $arrCountry["Glorioso Islands"] = "Glorioso Islands";
    $arrCountry["Greece"] = "Greece";
    $arrCountry["Greenland"] = "Greenland";
    $arrCountry["Grenada"] = "Grenada";
    $arrCountry["Guadeloupe"] = "Guadeloupe";
    $arrCountry["Guam"] = "Guam";
    $arrCountry["Guatemala"] = "Guatemala";
    $arrCountry["Guernsey"] = "Guernsey";
    $arrCountry["Guinea"] = "Guinea";
    $arrCountry["Guinea-Bissau"] = "Guinea-Bissau";
    $arrCountry["Guyana"] = "Guyana";
    $arrCountry["Haiti"] = "Haiti";
    $arrCountry["Heard Island and McDonald Islands"] = "Heard Island and McDonald Islands";
    $arrCountry["Holy See (Vatican City)"] = "Holy See (Vatican City)";
    $arrCountry["Honduras"] = "Honduras";
    $arrCountry["Hong Kong"] = "Hong Kong";
    $arrCountry["Howland Island"] = "Howland Island";
    $arrCountry["Hungary"] = "Hungary";
    $arrCountry["Iceland"] = "Iceland";
    $arrCountry["India"] = "India";
    $arrCountry["Indian Ocean"] = "Indian Ocean";
    $arrCountry["Indonesia"] = "Indonesia";
    $arrCountry["Iran"] = "Iran";
    $arrCountry["Iraq"] = "Iraq";
    $arrCountry["Ireland"] = "Ireland";
    $arrCountry["Isle of Man"] = "Isle of Man";
    $arrCountry["Israel"] = "Israel";
    $arrCountry["Italy"] = "Italy";
    $arrCountry["Jamaica"] = "Jamaica";
    $arrCountry["Jan Mayen"] = "Jan Mayen";
    $arrCountry["Japan"] = "Japan";
    $arrCountry["Jarvis Island"] = "Jarvis Island";
    $arrCountry["Jersey"] = "Jersey";
    $arrCountry["Johnston Atoll"] = "Johnston Atoll";
    $arrCountry["Jordan"] = "Jordan";
    $arrCountry["Juan de Nova Island"] = "Juan de Nova Island";
    $arrCountry["Kazakhstan"] = "Kazakhstan";
    $arrCountry["Kenya"] = "Kenya";
    $arrCountry["Kingman Reef"] = "Kingman Reef";
    $arrCountry["Kiribati"] = "Kiribati";
    $arrCountry["Korea, North"] = "Korea, North";
    $arrCountry["Korea, South"] = "Korea, South";
    $arrCountry["Kuwait"] = "Kuwait";
    $arrCountry["Kyrgyzstan"] = "Kyrgyzstan";
    $arrCountry["Laos"] = "Laos";
    $arrCountry["Latvia"] = "Latvia";
    $arrCountry["Lebanon"] = "Lebanon";
    $arrCountry["Lesotho"] = "Lesotho";
    $arrCountry["Liberia"] = "Liberia";
    $arrCountry["Libya"] = "Libya";
    $arrCountry["Liechtenstein"] = "Liechtenstein";
    $arrCountry["Lithuania"] = "Lithuania";
    $arrCountry["Luxembourg"] = "Luxembourg";
    $arrCountry["Macau"] = "Macau";
    $arrCountry["Macedonia"] = "Macedonia";
    $arrCountry["Madagascar"] = "Madagascar";
    $arrCountry["Malawi"] = "Malawi";
    $arrCountry["Malaysia"] = "Malaysia";
    $arrCountry["Maldives"] = "Maldives";
    $arrCountry["Mali"] = "Mali";
    $arrCountry["Malta"] = "Malta";
    $arrCountry["Marshall Islands"] = "Marshall Islands";
    $arrCountry["Martinique"] = "Martinique";
    $arrCountry["Mauritania"] = "Mauritania";
    $arrCountry["Mauritius"] = "Mauritius";
    $arrCountry["Mayotte"] = "Mayotte";
    $arrCountry["Mexico"] = "Mexico";
    $arrCountry["Micronesia, Federated States of"] = "Micronesia, Federated States of";
    $arrCountry["Midway Islands"] = "Midway Islands";
    $arrCountry["Moldova"] = "Moldova";
    $arrCountry["Monaco"] = "Monaco";
    $arrCountry["Mongolia"] = "Mongolia";
    $arrCountry["Montserrat"] = "Montserrat";
    $arrCountry["Morocco"] = "Morocco";
    $arrCountry["Mozambique"] = "Mozambique";
    $arrCountry["Namibia"] = "Namibia";
    $arrCountry["Nauru"] = "Nauru";
    $arrCountry["Navassa Island"] = "Navassa Island";
    $arrCountry["Nepal"] = "Nepal";
    $arrCountry["Netherlands"] = "Netherlands";
    $arrCountry["Netherlands Antilles"] = "Netherlands Antilles";
    $arrCountry["New Caledonia"] = "New Caledonia";
    $arrCountry["New Zealand"] = "New Zealand";
    $arrCountry["Nicaragua"] = "Nicaragua";
    $arrCountry["Niger"] = "Niger";
    $arrCountry["Nigeria"] = "Nigeria";
    $arrCountry["Niue"] = "Niue";
    $arrCountry["Norfolk Island"] = "Norfolk Island";
    $arrCountry["Northern Mariana Islands"] = "Northern Mariana Islands";
    $arrCountry["Norway"] = "Norway";
    $arrCountry["Oman"] = "Oman";
    $arrCountry["Pacific Ocean"] = "Pacific Ocean";
    $arrCountry["Pakistan"] = "Pakistan";
    $arrCountry["Palau"] = "Palau";
    $arrCountry["Palmyra Atoll"] = "Palmyra Atoll";
    $arrCountry["Panama"] = "Panama";
    $arrCountry["Papua New Guinea"] = "Papua New Guinea";
    $arrCountry["Paracel Islands"] = "Paracel Islands";
    $arrCountry["Paraguay"] = "Paraguay";
    $arrCountry["Peru"] = "Peru";
    $arrCountry["Philippines"] = "Philippines";
    $arrCountry["Pitcairn Islands"] = "Pitcairn Islands";
    $arrCountry["Poland"] = "Poland";
    $arrCountry["Portugal"] = "Portugal";
    $arrCountry["Puerto Rico"] = "Puerto Rico";
    $arrCountry["Qatar"] = "Qatar";
    $arrCountry["Reunion"] = "Reunion";
    $arrCountry["Romania"] = "Romania";
    $arrCountry["Russia"] = "Russia";
    $arrCountry["Rwanda"] = "Rwanda";
    $arrCountry["Saint Helena"] = "Saint Helena";
    $arrCountry["Saint Kitts and Nevis"] = "Saint Kitts and Nevis";
    $arrCountry["Saint Lucia"] = "Saint Lucia";
    $arrCountry["Saint Pierre and Miquelon"] = "Saint Pierre and Miquelon";
    $arrCountry["Saint Vincent and the Grenadines"] = "Saint Vincent and the Grenadines";
    $arrCountry["Samoa"] = "Samoa";
    $arrCountry["San Marino"] = "San Marino";
    $arrCountry["Sao Tome and Principe"] = "Sao Tome and Principe";
    $arrCountry["Saudi Arabia"] = "Saudi Arabia";
    $arrCountry["Senegal"] = "Senegal";
    $arrCountry["Serbia and Montenegro"] = "Serbia and Montenegro";
    $arrCountry["Seychelles"] = "Seychelles";
    $arrCountry["Sierra Leone"] = "Sierra Leone";
    $arrCountry["Singapore"] = "Singapore";
    $arrCountry["Slovakia"] = "Slovakia";
    $arrCountry["Slovenia"] = "Slovenia";
    $arrCountry["Solomon Islands"] = "Solomon Islands";
    $arrCountry["Somalia"] = "Somalia";
    $arrCountry["South Africa"] = "South Africa";
    $arrCountry["South Georgia and the South Sandwich Islands"] = "South Georgia and the South Sandwich Islands";
    $arrCountry["Southern Ocean"] = "Southern Ocean";
    $arrCountry["Spain"] = "Spain";
    $arrCountry["Spratly Islands"] = "Spratly Islands";
    $arrCountry["Sri Lanka"] = "Sri Lanka";
    $arrCountry["Sudan"] = "Sudan";
    $arrCountry["Suriname"] = "Suriname";
    $arrCountry["Svalbard"] = "Svalbard";
    $arrCountry["Swaziland"] = "Swaziland";
    $arrCountry["Sweden"] = "Sweden";
    $arrCountry["Switzerland"] = "Switzerland";
    $arrCountry["Syria"] = "Syria";
    $arrCountry["Taiwan"] = "Taiwan";
    $arrCountry["Tajikistan"] = "Tajikistan";
    $arrCountry["Tanzania"] = "Tanzania";
    $arrCountry["Thailand"] = "Thailand";
    $arrCountry["Togo"] = "Togo";
    $arrCountry["Tokelau"] = "Tokelau";
    $arrCountry["Tonga"] = "Tonga";
    $arrCountry["Trinidad and Tobago"] = "Trinidad and Tobago";
    $arrCountry["Tromelin Island"] = "Tromelin Island";
    $arrCountry["Tunisia"] = "Tunisia";
    $arrCountry["Turkey"] = "Turkey";
    $arrCountry["Turkmenistan"] = "Turkmenistan";
    $arrCountry["Turks and Caicos Islands"] = "Turks and Caicos Islands";
    $arrCountry["Tuvalu"] = "Tuvalu";
    $arrCountry["Uganda"] = "Uganda";
    $arrCountry["Ukraine"] = "Ukraine";
    $arrCountry["United Arab Emirates"] = "United Arab Emirates";
    $arrCountry["United Kingdom"] = "United Kingdom";
    $arrCountry["United States"] = "United States";
    $arrCountry["United States Pacific Island Wildlife Refuges"] = "United States Pacific Island Wildlife Refuges";
    $arrCountry["Uruguay"] = "Uruguay";
    $arrCountry["Uzbekistan"] = "Uzbekistan";
    $arrCountry["Vanuatu"] = "Vanuatu";
    $arrCountry["Venezuela"] = "Venezuela";
    $arrCountry["Vietnam"] = "Vietnam";
    $arrCountry["Virgin Islands"] = "Virgin Islands";
    $arrCountry["Wake Island"] = "Wake Island";
    $arrCountry["Wallis and Futuna"] = "Wallis and Futuna";
    $arrCountry["West Bank"] = "West Bank";
    $arrCountry["Western Sahara"] = "Western Sahara";
    $arrCountry["Yemen"] = "Yemen";
    $arrCountry["Zambia"] = "Zambia";
    $arrCountry["Zimbabwe"] = "Zimbabwe";
    
    $arrConfModule['countries'] = $arrCountry;
?>
