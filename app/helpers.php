<?php

use App\user;
use Carbon\Carbon;

function getCountries()
{
	$countries = [
		["name" => "Afghanistan", "code" => "AF"],
		["name" => "Åland Islands", "code" => "AX"],
		["name" => "Albania", "code" => "AL"],
		["name" => "Algeria", "code" => "DZ"],
		["name" => "American Samoa", "code" => "AS"],
		["name" => "AndorrA", "code" => "AD"],
		["name" => "Angola", "code" => "AO"],
		["name" => "Anguilla", "code" => "AI"],
		["name" => "Antarctica", "code" => "AQ"],
		["name" => "Antigua and Barbuda", "code" => "AG"],
		["name" => "Argentina", "code" => "AR"],
		["name" => "Armenia", "code" => "AM"],
		["name" => "Aruba", "code" => "AW"],
		["name" => "Australia", "code" => "AU"],
		["name" => "Austria", "code" => "AT"],
		["name" => "Azerbaijan", "code" => "AZ"],
		["name" => "Bahamas", "code" => "BS"],
		["name" => "Bahrain", "code" => "BH"],
		["name" => "Bangladesh", "code" => "BD"],
		["name" => "Barbados", "code" => "BB"],
		["name" => "Belarus", "code" => "BY"],
		["name" => "Belgium", "code" => "BE"],
		["name" => "Belize", "code" => "BZ"],
		["name" => "Benin", "code" => "BJ"],
		["name" => "Bermuda", "code" => "BM"],
		["name" => "Bhutan", "code" => "BT"],
		["name" => "Bolivia", "code" => "BO"],
		["name" => "Bosnia and Herzegovina", "code" => "BA"],
		["name" => "Botswana", "code" => "BW"],
		["name" => "Bouvet Island", "code" => "BV"],
		["name" => "Brazil", "code" => "BR"],
		["name" => "British Indian Ocean Territory", "code" => "IO"],
		["name" => "Brunei Darussalam", "code" => "BN"],
		["name" => "Bulgaria", "code" => "BG"],
		["name" => "Burkina Faso", "code" => "BF"],
		["name" => "Burundi", "code" => "BI"],
		["name" => "Cambodia", "code" => "KH"],
		["name" => "Cameroon", "code" => "CM"],
		["name" => "Canada", "code" => "CA"],
		["name" => "Cape Verde", "code" => "CV"],
		["name" => "Cayman Islands", "code" => "KY"],
		["name" => "Central African Republic", "code" => "CF"],
		["name" => "Chad", "code" => "TD"],
		["name" => "Chile", "code" => "CL"],
		["name" => "China", "code" => "CN"],
		["name" => "Christmas Island", "code" => "CX"],
		["name" => "Cocos (Keeling) Islands", "code" => "CC"],
		["name" => "Colombia", "code" => "CO"],
		["name" => "Comoros", "code" => "KM"],
		["name" => "Congo", "code" => "CG"],
		["name" => "Congo, The Democratic Republic of the", "code" => "CD"],
		["name" => "Cook Islands", "code" => "CK"],
		["name" => "Costa Rica", "code" => "CR"],
		["name" => "Cote DIvoire", "code" => "CI"],
		["name" => "Croatia", "code" => "HR"],
		["name" => "Cuba", "code" => "CU"],
		["name" => "Cyprus", "code" => "CY"],
		["name" => "Czech Republic", "code" => "CZ"],
		["name" => "Denmark", "code" => "DK"],
		["name" => "Djibouti", "code" => "DJ"],
		["name" => "Dominica", "code" => "DM"],
		["name" => "Dominican Republic", "code" => "DO"],
		["name" => "Ecuador", "code" => "EC"],
		["name" => "Egypt", "code" => "EG"],
		["name" => "El Salvador", "code" => "SV"],
		["name" => "Equatorial Guinea", "code" => "GQ"],
		["name" => "Eritrea", "code" => "ER"],
		["name" => "Estonia", "code" => "EE"],
		["name" => "Ethiopia", "code" => "ET"],
		["name" => "Falkland Islands (Malvinas)", "code" => "FK"],
		["name" => "Faroe Islands", "code" => "FO"],
		["name" => "Fiji", "code" => "FJ"],
		["name" => "Finland", "code" => "FI"],
		["name" => "France", "code" => "FR"],
		["name" => "French Guiana", "code" => "GF"],
		["name" => "French Polynesia", "code" => "PF"],
		["name" => "French Southern Territories", "code" => "TF"],
		["name" => "Gabon", "code" => "GA"],
		["name" => "Gambia", "code" => "GM"],
		["name" => "Georgia", "code" => "GE"],
		["name" => "Germany", "code" => "DE"],
		["name" => "Ghana", "code" => "GH"],
		["name" => "Gibraltar", "code" => "GI"],
		["name" => "Greece", "code" => "GR"],
		["name" => "Greenland", "code" => "GL"],
		["name" => "Grenada", "code" => "GD"],
		["name" => "Guadeloupe", "code" => "GP"],
		["name" => "Guam", "code" => "GU"],
		["name" => "Guatemala", "code" => "GT"],
		["name" => "Guernsey", "code" => "GG"],
		["name" => "Guinea", "code" => "GN"],
		["name" => "Guinea-Bissau", "code" => "GW"],
		["name" => "Guyana", "code" => "GY"],
		["name" => "Haiti", "code" => "HT"],
		["name" => "Heard Island and Mcdonald Islands", "code" => "HM"],
		["name" => "Holy See (Vatican City State)", "code" => "VA"],
		["name" => "Honduras", "code" => "HN"],
		["name" => "Hong Kong", "code" => "HK"],
		["name" => "Hungary", "code" => "HU"],
		["name" => "Iceland", "code" => "IS"],
		["name" => "India", "code" => "IN"],
		["name" => "Indonesia", "code" => "ID"],
		["name" => "Iran, Islamic Republic Of", "code" => "IR"],
		["name" => "Iraq", "code" => "IQ"],
		["name" => "Ireland", "code" => "IE"],
		["name" => "Isle of Man", "code" => "IM"],
		["name" => "Israel", "code" => "IL"],
		["name" => "Italy", "code" => "IT"],
		["name" => "Jamaica", "code" => "JM"],
		["name" => "Japan", "code" => "JP"],
		["name" => "Jersey", "code" => "JE"],
		["name" => "Jordan", "code" => "JO"],
		["name" => "Kazakhstan", "code" => "KZ"],
		["name" => "Kenya", "code" => "KE"],
		["name" => "Kiribati", "code" => "KI"],
		["name" => "Korea, Democratic PeopleS Republic of", "code" => "KP"],
		["name" => "Korea, Republic of", "code" => "KR"],
		["name" => "Kuwait", "code" => "KW"],
		["name" => "Kyrgyzstan", "code" => "KG"],
		["name" => "Lao PeopleS Democratic Republic", "code" => "LA"],
		["name" => "Latvia", "code" => "LV"],
		["name" => "Lebanon", "code" => "LB"],
		["name" => "Lesotho", "code" => "LS"],
		["name" => "Liberia", "code" => "LR"],
		["name" => "Libyan Arab Jamahiriya", "code" => "LY"],
		["name" => "Liechtenstein", "code" => "LI"],
		["name" => "Lithuania", "code" => "LT"],
		["name" => "Luxembourg", "code" => "LU"],
		["name" => "Macao", "code" => "MO"],
		["name" => "Macedonia, The Former Yugoslav Republic of", "code" => "MK"],
		["name" => "Madagascar", "code" => "MG"],
		["name" => "Malawi", "code" => "MW"],
		["name" => "Malaysia", "code" => "MY"],
		["name" => "Maldives", "code" => "MV"],
		["name" => "Mali", "code" => "ML"],
		["name" => "Malta", "code" => "MT"],
		["name" => "Marshall Islands", "code" => "MH"],
		["name" => "Martinique", "code" => "MQ"],
		["name" => "Mauritania", "code" => "MR"],
		["name" => "Mauritius", "code" => "MU"],
		["name" => "Mayotte", "code" => "YT"],
		["name" => "Mexico", "code" => "MX"],
		["name" => "Micronesia, Federated States of", "code" => "FM"],
		["name" => "Moldova, Republic of", "code" => "MD"],
		["name" => "Monaco", "code" => "MC"],
		["name" => "Mongolia", "code" => "MN"],
		["name" => "Montserrat", "code" => "MS"],
		["name" => "Morocco", "code" => "MA"],
		["name" => "Mozambique", "code" => "MZ"],
		["name" => "Myanmar", "code" => "MM"],
		["name" => "Namibia", "code" => "NA"],
		["name" => "Nauru", "code" => "NR"],
		["name" => "Nepal", "code" => "NP"],
		["name" => "Netherlands", "code" => "NL"],
		["name" => "Netherlands Antilles", "code" => "AN"],
		["name" => "New Caledonia", "code" => "NC"],
		["name" => "New Zealand", "code" => "NZ"],
		["name" => "Nicaragua", "code" => "NI"],
		["name" => "Niger", "code" => "NE"],
		["name" => "Nigeria", "code" => "NG"],
		["name" => "Niue", "code" => "NU"],
		["name" => "Norfolk Island", "code" => "NF"],
		["name" => "Northern Mariana Islands", "code" => "MP"],
		["name" => "Norway", "code" => "NO"],
		["name" => "Oman", "code" => "OM"],
		["name" => "Pakistan", "code" => "PK"],
		["name" => "Palau", "code" => "PW"],
		["name" => "Palestinian Territory, Occupied", "code" => "PS"],
		["name" => "Panama", "code" => "PA"],
		["name" => "Papua New Guinea", "code" => "PG"],
		["name" => "Paraguay", "code" => "PY"],
		["name" => "Peru", "code" => "PE"],
		["name" => "Philippines", "code" => "PH"],
		["name" => "Pitcairn", "code" => "PN"],
		["name" => "Poland", "code" => "PL"],
		["name" => "Portugal", "code" => "PT"],
		["name" => "Puerto Rico", "code" => "PR"],
		["name" => "Qatar", "code" => "QA"],
		["name" => "Reunion", "code" => "RE"],
		["name" => "Romania", "code" => "RO"],
		["name" => "Russian Federation", "code" => "RU"],
		["name" => "RWANDA", "code" => "RW"],
		["name" => "Saint Helena", "code" => "SH"],
		["name" => "Saint Kitts and Nevis", "code" => "KN"],
		["name" => "Saint Lucia", "code" => "LC"],
		["name" => "Saint Pierre and Miquelon", "code" => "PM"],
		["name" => "Saint Vincent and the Grenadines", "code" => "VC"],
		["name" => "Samoa", "code" => "WS"],
		["name" => "San Marino", "code" => "SM"],
		["name" => "Sao Tome and Principe", "code" => "ST"],
		["name" => "Saudi Arabia", "code" => "SA"],
		["name" => "Senegal", "code" => "SN"],
		["name" => "Serbia and Montenegro", "code" => "CS"],
		["name" => "Seychelles", "code" => "SC"],
		["name" => "Sierra Leone", "code" => "SL"],
		["name" => "Singapore", "code" => "SG"],
		["name" => "Slovakia", "code" => "SK"],
		["name" => "Slovenia", "code" => "SI"],
		["name" => "Solomon Islands", "code" => "SB"],
		["name" => "Somalia", "code" => "SO"],
		["name" => "South Africa", "code" => "ZA"],
		["name" => "South Georgia and the South Sandwich Islands", "code" => "GS"],
		["name" => "Spain", "code" => "ES"],
		["name" => "Sri Lanka", "code" => "LK"],
		["name" => "Sudan", "code" => "SD"],
		["name" => "Suriname", "code" => "SR"],
		["name" => "Svalbard and Jan Mayen", "code" => "SJ"],
		["name" => "Swaziland", "code" => "SZ"],
		["name" => "Sweden", "code" => "SE"],
		["name" => "Switzerland", "code" => "CH"],
		["name" => "Syrian Arab Republic", "code" => "SY"],
		["name" => "Taiwan, Province of China", "code" => "TW"],
		["name" => "Tajikistan", "code" => "TJ"],
		["name" => "Tanzania, United Republic of", "code" => "TZ"],
		["name" => "Thailand", "code" => "TH"],
		["name" => "Timor-Leste", "code" => "TL"],
		["name" => "Togo", "code" => "TG"],
		["name" => "Tokelau", "code" => "TK"],
		["name" => "Tonga", "code" => "TO"],
		["name" => "Trinidad and Tobago", "code" => "TT"],
		["name" => "Tunisia", "code" => "TN"],
		["name" => "Turkey", "code" => "TR"],
		["name" => "Turkmenistan", "code" => "TM"],
		["name" => "Turks and Caicos Islands", "code" => "TC"],
		["name" => "Tuvalu", "code" => "TV"],
		["name" => "Uganda", "code" => "UG"],
		["name" => "Ukraine", "code" => "UA"],
		["name" => "United Arab Emirates", "code" => "AE"],
		["name" => "United Kingdom", "code" => "GB"],
		["name" => "United States", "code" => "US"],
		["name" => "United States Minor Outlying Islands", "code" => "UM"],
		["name" => "Uruguay", "code" => "UY"],
		["name" => "Uzbekistan", "code" => "UZ"],
		["name" => "Vanuatu", "code" => "VU"],
		["name" => "Venezuela", "code" => "VE"],
		["name" => "Viet Nam", "code" => "VN"],
		["name" => "Virgin Islands, British", "code" => "VG"],
		["name" => "Virgin Islands, U.S.", "code" => "VI"],
		["name" => "Wallis and Futuna", "code" => "WF"],
		["name" => "Western Sahara", "code" => "EH"],
		["name" => "Yemen", "code" => "YE"],
		["name" => "Zambia", "code" => "ZM"],
		["name" => "Zimbabwe", "code" => "ZW"],
	];

	return $countries;
}


function getProvices()
{
	$provinces = [
		["name" => "Punjab", "code" => "PU"],
		["name" => "Sindh", "code" => "SI"],
		["name" => "Khyber Pakhtunkhwa", "code" => "KPK"],
		["name" => "Balochistan", "code" => "BL"],
		["name" => "Gilgit-Baltistan", "code" => "GB"],
		["name" => "Jammu-Kashmir", "code" => "JK"],
	];

	return $provinces;
}

function getMartialStatus()
{
	$maritalStatus = [
		["name" => "Married", "code" => "Md"],
		["name" => "Unmarried", "code" => "Un"],
		["name" => "Divorced", "code" => "Dv"],
		["name" => "Widowed", "code" => "Wd"],
	];

	return $maritalStatus;
}


function getCities()
{
	$cities = [
	    [
	        "city" => "Karachi", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "11624219", 
	        "iso2" => "PK", 
	        "capital" => "admin", 
	        "lat" => "24.9056", 
	        "lng" => "67.0822", 
	        "population" => "12130000"
	    ], 
	    [
	        "city" => "Lahore", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "6310888", 
	        "iso2" => "PK", 
	        "capital" => "admin", 
	        "lat" => "31.549722", 
	        "lng" => "74.343611", 
	        "population" => "6577000"
	    ], 
	    [
	        "city" => "Faisalabad", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "2506595", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.416667", 
	        "lng" => "73.083333", 
	        "population" => "2617000"
	    ], 
	    [
	        "city" => "Serai", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "1860310", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "34.73933", 
	        "lng" => "72.335655", 
	        "population" => "1860310"
	    ], 
	    [
	        "city" => "Rawalpindi", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "1743101", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.597331", 
	        "lng" => "73.047904", 
	        "population" => "1858000"
	    ], 
	    [
	        "city" => "Multan", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "1437230", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.196789", 
	        "lng" => "71.478241", 
	        "population" => "1522000"
	    ], 
	    [
	        "city" => "Gujranwala", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "1384471", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.155667", 
	        "lng" => "74.187052", 
	        "population" => "1513000"
	    ], 
	    [
	        "city" => "Hyderabad City", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "1386330", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.396891", 
	        "lng" => "68.377183", 
	        "population" => "1459000"
	    ], 
	    [
	        "city" => "Peshawar", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "1218773", 
	        "iso2" => "PK", 
	        "capital" => "admin", 
	        "lat" => "34.008", 
	        "lng" => "71.578488", 
	        "population" => "1303000"
	    ], 
	    [
	        "city" => "Abbottabad", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "881000", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.1463", 
	        "lng" => "73.211684", 
	        "population" => "1183647"
	    ], 
	    [
	        "city" => "Islamabad", 
	        "admin" => "Islamabad", 
	        "country" => "Pakistan", 
	        "population_proper" => "601600", 
	        "iso2" => "PK", 
	        "capital" => "primary", 
	        "lat" => "33.69", 
	        "lng" => "73.0551", 
	        "population" => "780000"
	    ], 
	    [
	        "city" => "Quetta", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "733675", 
	        "iso2" => "PK", 
	        "capital" => "admin", 
	        "lat" => "30.184138", 
	        "lng" => "67.00141", 
	        "population" => "768000"
	    ], 
	    [
	        "city" => "Bannu", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "550000", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.985414", 
	        "lng" => "70.602701", 
	        "population" => "622419"
	    ], 
	    [
	        "city" => "Bahawalpur", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "552607", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.4", 
	        "lng" => "71.683333", 
	        "population" => "552607"
	    ], 
	    [
	        "city" => "Sargodha", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "542603", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.083611", 
	        "lng" => "72.671111", 
	        "population" => "542603"
	    ], 
	    [
	        "city" => "Sialkot City", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "477396", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.499101", 
	        "lng" => "74.52502", 
	        "population" => "477396"
	    ], 
	    [
	        "city" => "Sukkur", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "417767", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "27.705164", 
	        "lng" => "68.857383", 
	        "population" => "417767"
	    ], 
	    [
	        "city" => "Larkana", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "364033", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "27.558985", 
	        "lng" => "68.212035", 
	        "population" => "364033"
	    ], 
	    [
	        "city" => "Sheikhupura", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "361303", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.713056", 
	        "lng" => "73.978333", 
	        "population" => "361303"
	    ], 
	    [
	        "city" => "Mirpur Khas", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "215657", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.5251", 
	        "lng" => "69.0159", 
	        "population" => "356435"
	    ], 
	    [
	        "city" => "Rahimyar Khan", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "353203", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "28.419482", 
	        "lng" => "70.302386", 
	        "population" => "353203"
	    ], 
	    [
	        "city" => "Kohat", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "151427", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.581958", 
	        "lng" => "71.449291", 
	        "population" => "343027"
	    ], 
	    [
	        "city" => "Jhang Sadr", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "341210", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "31.269811", 
	        "lng" => "72.316867", 
	        "population" => "341210"
	    ], 
	    [
	        "city" => "Gujrat", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "301506", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.574204", 
	        "lng" => "74.075423", 
	        "population" => "301506"
	    ], 
	    [
	        "city" => "Bardar", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "300424", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "34.163737", 
	        "lng" => "72.011571", 
	        "population" => "300424"
	    ], 
	    [
	        "city" => "Kasur", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "290643", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.115556", 
	        "lng" => "74.446667", 
	        "population" => "290643"
	    ], 
	    [
	        "city" => "Dera Ghazi Khan", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "236093", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.056142", 
	        "lng" => "70.634766", 
	        "population" => "236093"
	    ], 
	    [
	        "city" => "Masiwala", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "235695", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "30.683333", 
	        "lng" => "73.066667", 
	        "population" => "235695"
	    ], 
	    [
	        "city" => "Nawabshah", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "229504", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "26.248334", 
	        "lng" => "68.409554", 
	        "population" => "229504"
	    ], 
	    [
	        "city" => "Okara", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "223648", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.808056", 
	        "lng" => "73.445833", 
	        "population" => "223648"
	    ], 
	    [
	        "city" => "Gilgit", 
	        "admin" => "Gilgit-Baltistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "31633", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "35.920007", 
	        "lng" => "74.313656", 
	        "population" => "216760"
	    ], 
	    [
	        "city" => "Chiniot", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "201781", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.72", 
	        "lng" => "72.978889", 
	        "population" => "201781"
	    ], 
	    [
	        "city" => "Sadiqabad", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "189876", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "28.30623", 
	        "lng" => "70.130646", 
	        "population" => "189876"
	    ], 
	    [
	        "city" => "Turbat", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "75694", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "26.001224", 
	        "lng" => "63.048491", 
	        "population" => "147791"
	    ], 
	    [
	        "city" => "Dera Ismail Khan", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "31737", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.832691", 
	        "lng" => "70.902398", 
	        "population" => "101616"
	    ], 
	    [
	        "city" => "Chaman", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "88568", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "30.917689", 
	        "lng" => "66.45259", 
	        "population" => "88568"
	    ], 
	    [
	        "city" => "Zhob", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "50537", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.340817", 
	        "lng" => "69.449304", 
	        "population" => "88356"
	    ], 
	    [
	        "city" => "Mehra", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "66486", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "34.312817", 
	        "lng" => "73.220525", 
	        "population" => "66486"
	    ], 
	    [
	        "city" => "Parachinar", 
	        "admin" => "Federally Administered Tribal Areas", 
	        "country" => "Pakistan", 
	        "population_proper" => "55685", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "33.895672", 
	        "lng" => "70.098875", 
	        "population" => "55685"
	    ], 
	    [
	        "city" => "Gwadar", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "23364", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.12163", 
	        "lng" => "62.325411", 
	        "population" => "51901"
	    ], 
	    [
	        "city" => "Kundian", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "35406", 
	        "iso2" => "PK", 
	        "capital" => "", 
	        "lat" => "32.457747", 
	        "lng" => "71.478918", 
	        "population" => "35406"
	    ], 
	    [
	        "city" => "Shahdad Kot", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "27.847263", 
	        "lng" => "67.906789", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Haripur", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.999967", 
	        "lng" => "72.934093", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Matiari", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.59709", 
	        "lng" => "68.4467", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Dera Allahyar", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "28.373529", 
	        "lng" => "68.350778", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Lodhran", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.540507", 
	        "lng" => "71.63357", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Batgram", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.679637", 
	        "lng" => "73.026299", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Thatta", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "24.747449", 
	        "lng" => "67.923528", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Bagh", 
	        "admin" => "Azad Kashmir", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.981106", 
	        "lng" => "73.776084", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Badin", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "24.655995", 
	        "lng" => "68.836997", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Mansehra", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.330232", 
	        "lng" => "73.196788", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Ziarat", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.382444", 
	        "lng" => "67.725624", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Muzaffargarh", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.072576", 
	        "lng" => "71.193788", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Tando Allahyar", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.462626", 
	        "lng" => "68.719233", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Dera Murad Jamali", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "28.546568", 
	        "lng" => "68.223081", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Karak", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.116334", 
	        "lng" => "71.093536", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Mardan", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.197943", 
	        "lng" => "72.04965", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Uthal", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.807222", 
	        "lng" => "66.621944", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Nankana Sahib", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.4475", 
	        "lng" => "73.697222", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Barkhan", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.897727", 
	        "lng" => "69.525584", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Hafizabad", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.067857", 
	        "lng" => "73.685449", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Kotli", 
	        "admin" => "Azad Kashmir", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.518362", 
	        "lng" => "73.902203", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Loralai", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.370512", 
	        "lng" => "68.597949", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Dera Bugti", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.036188", 
	        "lng" => "69.158493", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Jhang City", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.305684", 
	        "lng" => "72.325941", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Sahiwal", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.666667", 
	        "lng" => "73.1", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Sanghar", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "26.046558", 
	        "lng" => "68.9481", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Pakpattan", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.341044", 
	        "lng" => "73.386642", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Chakwal", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.933376", 
	        "lng" => "72.858531", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Khushab", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.296667", 
	        "lng" => "72.3525", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Ghotki", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "28.00604", 
	        "lng" => "69.316077", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Kohlu", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.896505", 
	        "lng" => "69.253235", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Khuzdar", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "27.738385", 
	        "lng" => "66.643365", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Awaran", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "26.456768", 
	        "lng" => "65.231436", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Nowshera", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.015828", 
	        "lng" => "71.981232", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Charsadda", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.148221", 
	        "lng" => "71.740604", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Qila Abdullah", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.728035", 
	        "lng" => "66.661174", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Bahawalnagar", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.998659", 
	        "lng" => "73.253604", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Dadu", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "26.730334", 
	        "lng" => "67.776896", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Aliabad", 
	        "admin" => "Gilgit-Baltistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "36.307028", 
	        "lng" => "74.615449", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Lakki Marwat", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.607953", 
	        "lng" => "70.911416", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Chilas", 
	        "admin" => "Gilgit-Baltistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "35.412867", 
	        "lng" => "74.104068", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Pishin", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.581762", 
	        "lng" => "66.994061", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Tank", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.217071", 
	        "lng" => "70.383154", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Chitral", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "35.851802", 
	        "lng" => "71.786358", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Qila Saifullah", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.700766", 
	        "lng" => "68.359843", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Shikarpur", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "27.957057", 
	        "lng" => "68.637886", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Panjgur", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "26.971861", 
	        "lng" => "64.094594", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Mastung", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.799656", 
	        "lng" => "66.845527", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Kalat", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.026629", 
	        "lng" => "66.593607", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Gandava", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "28.613207", 
	        "lng" => "67.485643", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Khanewal", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.301731", 
	        "lng" => "71.932124", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Narowal", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.1", 
	        "lng" => "74.883333", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Khairpur", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "27.529483", 
	        "lng" => "68.761698", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Malakand", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.565609", 
	        "lng" => "71.930432", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Vihari", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.033333", 
	        "lng" => "72.35", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Saidu Sharif", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.746548", 
	        "lng" => "72.355675", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Jhelum", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.934484", 
	        "lng" => "73.731018", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Mandi Bahauddin", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.587037", 
	        "lng" => "73.491231", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Bhakkar", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "31.625247", 
	        "lng" => "71.06574", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Toba Tek Singh", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.974326", 
	        "lng" => "72.482694", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Jamshoro", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.436078", 
	        "lng" => "68.280172", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Kharan", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "28.584585", 
	        "lng" => "65.415007", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Umarkot", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.36157", 
	        "lng" => "69.736241", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Hangu", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.53198", 
	        "lng" => "71.059499", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Timargara", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.826595", 
	        "lng" => "71.844226", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Gakuch", 
	        "admin" => "Gilgit-Baltistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "36.176826", 
	        "lng" => "73.763834", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Jacobabad", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "28.281873", 
	        "lng" => "68.437613", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Alpurai", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.920577", 
	        "lng" => "72.632556", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Mianwali", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "32.574095", 
	        "lng" => "71.526386", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Musa Khel Bazar", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.859443", 
	        "lng" => "69.82208", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Naushahro Firoz", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "26.840104", 
	        "lng" => "68.122651", 
	        "population" => ""
	    ], 
	    [
	        "city" => "New Mirpur", 
	        "admin" => "Azad Kashmir", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.147815", 
	        "lng" => "73.751867", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Daggar", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.511059", 
	        "lng" => "72.484375", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Eidgah", 
	        "admin" => "Gilgit-Baltistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "35.347115", 
	        "lng" => "74.856317", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Sibi", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.542989", 
	        "lng" => "67.87726", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Dalbandin", 
	        "admin" => "Balochistan", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "28.888456", 
	        "lng" => "64.406156", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Rajanpur", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "29.103513", 
	        "lng" => "70.325038", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Leiah", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "30.961279", 
	        "lng" => "70.939043", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Upper Dir", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "35.207398", 
	        "lng" => "71.876801", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Tando Muhammad Khan", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "25.123007", 
	        "lng" => "68.535773", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Attock City", 
	        "admin" => "Punjab", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.76671", 
	        "lng" => "72.359766", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Rawala Kot", 
	        "admin" => "Azad Kashmir", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "33.857816", 
	        "lng" => "73.760426", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Swabi", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.120181", 
	        "lng" => "72.46982", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Kandhkot", 
	        "admin" => "Sindh", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "28.243963", 
	        "lng" => "69.182354", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Dasu", 
	        "admin" => "Khyber Pakhtunkhwa", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "35.291687", 
	        "lng" => "73.290602", 
	        "population" => ""
	    ], 
	    [
	        "city" => "Athmuqam", 
	        "admin" => "Azad Kashmir", 
	        "country" => "Pakistan", 
	        "population_proper" => "", 
	        "iso2" => "PK", 
	        "capital" => "minor", 
	        "lat" => "34.571733", 
	        "lng" => "73.897236", 
	        "population" => ""
	    ]
	];

	return $cities;
}

function serializeThisThing($thing)
{
	return encrypt(serialize($thing));
}

function unserializeThisThing($thing)
{
	return unserialize(decrypt($thing));
}

function create_slug($string)
{
	return strtolower(str_replace(" ", "-", $string)."-".mt_rand(100,10000));
}

function get_user_notifications()
{
	return Auth::user()->unreadnotifications->take(5);
}

function get_all_user_notifications()
{
	return Auth::user()->unreadnotifications;
}

function getstudents_teacher(){
   $student_list =[];
   $classes= Auth::user()->learning_classes;
   foreach ($classes as $key => $class) {
       $students=$class->students;
       foreach ($students as $key => $student) {
            array_push($student_list, $student->id);
       }
   }

   $students_array = array();

   $unique_students = array_unique($student_list);
   foreach ($unique_students as $key => $unique_student) {
       $this_student = User::find($unique_student);
       array_push($students_array, $this_student);
   }

   return $students_array;
}

function update_last_seen()
{
	$user = Auth::user();
	$user->last_seen = Carbon::now();
	$user->save();
}

function get_all_users_student(){
    $students_array = [];
    $classes = Auth::user()->student_learning_classes;
    foreach ($classes as $key => $class){
        $students=$class->students;
        foreach ($students as $key => $student) {
            array_push($students_array, $student->id);
        }
    }
    $user_array = array();
    $unique_users = array_unique($students_array);
    foreach ($unique_users as $unique_user) {
        if(Auth::user()->id != $unique_user){
             $this_student = User::find($unique_users);
              array_push($user_array, $this_student);
        }
    }
    return $user_array;
}

function get_all_teachers(){
  $teachers_array = [];
  $unique_teachers_array = [];
  $classes = Auth::user()->student_learning_classes;
 
  foreach ($classes as $key => $class){
      $teacher = $class->user;
      array_push($teachers_array, $teacher->id);
  }

  $unique_teachers = array_unique($teachers_array);

  foreach ($unique_teachers as $key => $this_teacher) {
  	  $current_teacher = User::find($this_teacher);
  	  array_push($unique_teachers_array, $current_teacher);
  }

  return $unique_teachers_array;
}