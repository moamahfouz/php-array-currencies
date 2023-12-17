<?php
// count 168
$currency_list = array(
    "AFA" => array("id" => 1, "name" => "Afghan Afghani", "symbol" => "؋"),
    "ALL" => array("id" => 2, "name" => "Albanian Lek", "symbol" => "Lek"),
    "DZD" => array("id" => 3, "name" => "Algerian Dinar", "symbol" => "دج"),
    "AOA" => array("id" => 4, "name" => "Angolan Kwanza", "symbol" => "Kz"),
    "ARS" => array("id" => 5, "name" => "Argentine Peso", "symbol" => "$"),
    "AMD" => array("id" => 6, "name" => "Armenian Dram", "symbol" => "֏"),
    "AWG" => array("id" => 7, "name" => "Aruban Florin", "symbol" => "ƒ"),
    "AUD" => array("id" => 8, "name" => "Australian Dollar", "symbol" => "$"),
    "AZN" => array("id" => 9, "name" => "Azerbaijani Manat", "symbol" => "m"),
    "BSD" => array("id" => 10, "name" => "Bahamian Dollar", "symbol" => "B$"),
    "BHD" => array("id" => 11, "name" => "Bahraini Dinar", "symbol" => ".د.ب"),
    "BDT" => array("id" => 12, "name" => "Bangladeshi Taka", "symbol" => "৳"),
    "BBD" => array("id" => 13, "name" => "Barbadian Dollar", "symbol" => "Bds$"),
    "BYR" => array("id" => 14, "name" => "Belarusian Ruble", "symbol" => "Br"),
    "BEF" => array("id" => 15, "name" => "Belgian Franc", "symbol" => "fr"),
    "BZD" => array("id" => 16, "name" => "Belize Dollar", "symbol" => "$"),
    "BMD" => array("id" => 17, "name" => "Bermudan Dollar", "symbol" => "$"),
    "BTN" => array("id" => 18, "name" => "Bhutanese Ngultrum", "symbol" => "Nu."),
    "BTC" => array("id" => 19, "name" => "Bitcoin", "symbol" => "฿"),
    "BOB" => array("id" => 20, "name" => "Bolivian Boliviano", "symbol" => "Bs."),
    "BAM" => array("id" => 21, "name" => "Bosnia-Herzegovina Convertible Mark", "symbol" => "KM"),
    "BWP" => array("id" => 22, "name" => "Botswanan Pula", "symbol" => "P"),
    "BRL" => array("id" => 23, "name" => "Brazilian Real", "symbol" => "R$"),
    "GBP" => array("id" => 24, "name" => "British Pound Sterling", "symbol" => "£"),
    "BND" => array("id" => 25, "name" => "Brunei Dollar", "symbol" => "B$"),
    "BGN" => array("id" => 26, "name" => "Bulgarian Lev", "symbol" => "Лв."),
    "BIF" => array("id" => 27, "name" => "Burundian Franc", "symbol" => "FBu"),
    "KHR" => array("id" => 28, "name" => "Cambodian Riel", "symbol" => "KHR"),
    "CAD" => array("id" => 29, "name" => "Canadian Dollar", "symbol" => "$"),
    "CVE" => array("id" => 30, "name" => "Cape Verdean Escudo", "symbol" => "$"),
    "KYD" => array("id" => 31, "name" => "Cayman Islands Dollar", "symbol" => "$"),
    "XOF" => array("id" => 32, "name" => "CFA Franc BCEAO", "symbol" => "CFA"),
    "XAF" => array("id" => 33, "name" => "CFA Franc BEAC", "symbol" => "FCFA"),
    "XPF" => array("id" => 34, "name" => "CFP Franc", "symbol" => "₣"),
    "CLP" => array("id" => 35, "name" => "Chilean Peso", "symbol" => "$"),
    "CLF" => array("id" => 36, "name" => "Chilean Unit of Account", "symbol" => "CLF"),
    "CNY" => array("id" => 37, "name" => "Chinese Yuan", "symbol" => "¥"),
    "COP" => array("id" => 38, "name" => "Colombian Peso", "symbol" => "$"),
    "KMF" => array("id" => 39, "name" => "Comorian Franc", "symbol" => "CF"),
    "CDF" => array("id" => 40, "name" => "Congolese Franc", "symbol" => "FC"),
    "CRC" => array("id" => 41, "name" => "Costa Rican Colón", "symbol" => "₡"),
    "HRK" => array("id" => 42, "name" => "Croatian Kuna", "symbol" => "kn"),
    "CUC" => array("id" => 43, "name" => "Cuban Convertible Peso", "symbol" => "$, CUC"),
    "CZK" => array("id" => 44, "name" => "Czech Republic Koruna", "symbol" => "Kč"),
    "DKK" => array("id" => 45, "name" => "Danish Krone", "symbol" => "Kr."),
    "DJF" => array("id" => 46, "name" => "Djiboutian Franc", "symbol" => "Fdj"),
    "DOP" => array("id" => 47, "name" => "Dominican Peso", "symbol" => "$"),
    "XCD" => array("id" => 48, "name" => "East Caribbean Dollar", "symbol" => "$"),
    "EGP" => array("id" => 49, "name" => "Egyptian Pound", "symbol" => "ج.م"),
    "ERN" => array("id" => 50, "name" => "Eritrean Nakfa", "symbol" => "Nfk"),
    "EEK" => array("id" => 51, "name" => "Estonian Kroon", "symbol" => "kr"),
    "ETB" => array("id" => 52, "name" => "Ethiopian Birr", "symbol" => "Nkf"),
    "EUR" => array("id" => 53, "name" => "Euro", "symbol" => "€"),
    "FKP" => array("id" => 54, "name" => "Falkland Islands Pound", "symbol" => "£"),
    "FJD" => array("id" => 55, "name" => "Fijian Dollar", "symbol" => "FJ$"),
    "GMD" => array("id" => 56, "name" => "Gambian Dalasi", "symbol" => "D"),
    "GEL" => array("id" => 57, "name" => "Georgian Lari", "symbol" => "ლ"),
    "DEM" => array("id" => 58, "name" => "German Mark", "symbol" => "DM"),
    "GHS" => array("id" => 59, "name" => "Ghanaian Cedi", "symbol" => "GH₵"),
    "GIP" => array("id" => 60, "name" => "Gibraltar Pound", "symbol" => "£"),
    "GRD" => array("id" => 61, "name" => "Greek Drachma", "symbol" => "₯, Δρχ, Δρ"),
    "GTQ" => array("id" => 62, "name" => "Guatemalan Quetzal", "symbol" => "Q"),
    "GNF" => array("id" => 63, "name" => "Guinean Franc", "symbol" => "FG"),
    "GYD" => array("id" => 64, "name" => "Guyanaese Dollar", "symbol" => "$"),
    "HTG" => array("id" => 65, "name" => "Haitian Gourde", "symbol" => "G"),
    "HNL" => array("id" => 66, "name" => "Honduran Lempira", "symbol" => "L"),
    "HKD" => array("id" => 67, "name" => "Hong Kong Dollar", "symbol" => "$"),
    "HUF" => array("id" => 68, "name" => "Hungarian Forint", "symbol" => "Ft"),
    "ISK" => array("id" => 69, "name" => "Icelandic Króna", "symbol" => "kr"),
    "INR" => array("id" => 70, "name" => "Indian Rupee", "symbol" => "₹"),
    "IDR" => array("id" => 71, "name" => "Indonesian Rupiah", "symbol" => "Rp"),
    "IRR" => array("id" => 72, "name" => "Iranian Rial", "symbol" => "﷼"),
    "IQD" => array("id" => 73, "name" => "Iraqi Dinar", "symbol" => "د.ع"),
    "ILS" => array("id" => 74, "name" => "Israeli New Sheqel", "symbol" => "₪"),
    "ITL" => array("id" => 75, "name" => "Italian Lira", "symbol" => "L,£"),
    "JMD" => array("id" => 76, "name" => "Jamaican Dollar", "symbol" => "J$"),
    "JPY" => array("id" => 77, "name" => "Japanese Yen", "symbol" => "¥"),
    "JOD" => array("id" => 78, "name" => "Jordanian Dinar", "symbol" => "ا.د"),
    "KZT" => array("id" => 79, "name" => "Kazakhstani Tenge", "symbol" => "лв"),
    "KES" => array("id" => 80, "name" => "Kenyan Shilling", "symbol" => "KSh"),
    "KWD" => array("id" => 81, "name" => "Kuwaiti Dinar", "symbol" => "ك.د"),
    "KGS" => array("id" => 82, "name" => "Kyrgystani Som", "symbol" => "лв"),
    "LAK" => array("id" => 83, "name" => "Laotian Kip", "symbol" => "₭"),
    "LVL" => array("id" => 84, "name" => "Latvian Lats", "symbol" => "Ls"),
    "LBP" => array("id" => 85, "name" => "Lebanese Pound", "symbol" => "£"),
    "LSL" => array("id" => 86, "name" => "Lesotho Loti", "symbol" => "L"),
    "LRD" => array("id" => 87, "name" => "Liberian Dollar", "symbol" => "$"),
    "LYD" => array("id" => 88, "name" => "Libyan Dinar", "symbol" => "د.ل"),
    "LTC" => array("id" => 89, "name" => "Litecoin", "symbol" => "Ł"),
    "LTL" => array("id" => 90, "name" => "Lithuanian Litas", "symbol" => "Lt"),
    "MOP" => array("id" => 91, "name" => "Macanese Pataca", "symbol" => "$"),
    "MKD" => array("id" => 92, "name" => "Macedonian Denar", "symbol" => "ден"),
    "MGA" => array("id" => 93, "name" => "Malagasy Ariary", "symbol" => "Ar"),
    "MWK" => array("id" => 94, "name" => "Malawian Kwacha", "symbol" => "MK"),
    "MYR" => array("id" => 95, "name" => "Malaysian Ringgit", "symbol" => "RM"),
    "MVR" => array("id" => 96, "name" => "Maldivian Rufiyaa", "symbol" => "Rf"),
    "MRO" => array("id" => 97, "name" => "Mauritanian Ouguiya", "symbol" => "MRU"),
    "MUR" => array("id" => 98, "name" => "Mauritian Rupee", "symbol" => "₨"),
    "MXN" => array("id" => 99, "name" => "Mexican Peso", "symbol" => "$"),
    "MDL" => array("id" => 100, "name" => "Moldovan Leu", "symbol" => "L"),
    "MNT" => array("id" => 101, "name" => "Mongolian Tugrik", "symbol" => "₮"),
    "MAD" => array("id" => 102, "name" => "Moroccan Dirham", "symbol" => "MAD"),
    "MZM" => array("id" => 103, "name" => "Mozambican Metical", "symbol" => "MT"),
    "MMK" => array("id" => 104, "name" => "Myanmar Kyat", "symbol" => "K"),
    "NAD" => array("id" => 105, "name" => "Namibian Dollar", "symbol" => "$"),
    "NPR" => array("id" => 106, "name" => "Nepalese Rupee", "symbol" => "₨"),
    "ANG" => array("id" => 107, "name" => "Netherlands Antillean Guilder", "symbol" => "ƒ"),
    "TWD" => array("id" => 108, "name" => "New Taiwan Dollar", "symbol" => "$"),
    "NZD" => array("id" => 109, "name" => "New Zealand Dollar", "symbol" => "$"),
    "NIO" => array("id" => 110, "name" => "Nicaraguan Córdoba", "symbol" => "C$"),
    "NGN" => array("id" => 111, "name" => "Nigerian Naira", "symbol" => "₦"),
    "KPW" => array("id" => 112, "name" => "North Korean Won", "symbol" => "₩"),
    "NOK" => array("id" => 113, "name" => "Norwegian Krone", "symbol" => "kr"),
    "OMR" => array("id" => 114, "name" => "Omani Rial", "symbol" => ".ع.ر"),
    "PKR" => array("id" => 115, "name" => "Pakistani Rupee", "symbol" => "₨"),
    "PAB" => array("id" => 116, "name" => "Panamanian Balboa", "symbol" => "B/."),
    "PGK" => array("id" => 117, "name" => "Papua New Guinean Kina", "symbol" => "K"),
    "PYG" => array("id" => 118, "name" => "Paraguayan Guarani", "symbol" => "₲"),
    "PEN" => array("id" => 119, "name" => "Peruvian Nuevo Sol", "symbol" => "S/."),
    "PHP" => array("id" => 120, "name" => "Philippine Peso", "symbol" => "₱"),
    "PLN" => array("id" => 121, "name" => "Polish Zloty", "symbol" => "zł"),
    "QAR" => array("id" => 122, "name" => "Qatari Rial", "symbol" => "ق.ر"),
    "RON" => array("id" => 123, "name" => "Romanian Leu", "symbol" => "lei"),
    "RUB" => array("id" => 124, "name" => "Russian Ruble", "symbol" => "₽"),
    "RWF" => array("id" => 125, "name" => "Rwandan Franc", "symbol" => "FRw"),
    "SVC" => array("id" => 126, "name" => "Salvadoran Colón", "symbol" => "₡"),
    "WST" => array("id" => 127, "name" => "Samoan Tala", "symbol" => "SAT"),
    "STD" => array("id" => 128, "name" => "São Tomé and Príncipe Dobra", "symbol" => "Db"),
    "SAR" => array("id" => 129, "name" => "Saudi Riyal", "symbol" => "﷼"),
    "RSD" => array("id" => 130, "name" => "Serbian Dinar", "symbol" => "din"),
    "SCR" => array("id" => 131, "name" => "Seychellois Rupee", "symbol" => "SRe"),
    "SLL" => array("id" => 132, "name" => "Sierra Leonean Leone", "symbol" => "Le"),
    "SGD" => array("id" => 133, "name" => "Singapore Dollar", "symbol" => "$"),
    "SKK" => array("id" => 134, "name" => "Slovak Koruna", "symbol" => "Sk"),
    "SBD" => array("id" => 135, "name" => "Solomon Islands Dollar", "symbol" => "Si$"),
    "SOS" => array("id" => 136, "name" => "Somali Shilling", "symbol" => "Sh.so."),
    "ZAR" => array("id" => 137, "name" => "South African Rand", "symbol" => "R"),
    "KRW" => array("id" => 138, "name" => "South Korean Won", "symbol" => "₩"),
    "SSP" => array("id" => 139, "name" => "South Sudanese Pound", "symbol" => "£"),
    "XDR" => array("id" => 140, "name" => "Special Drawing Rights", "symbol" => "SDR"),
    "LKR" => array("id" => 141, "name" => "Sri Lankan Rupee", "symbol" => "Rs"),
    "SHP" => array("id" => 142, "name" => "St. Helena Pound", "symbol" => "£"),
    "SDG" => array("id" => 143, "name" => "Sudanese Pound", "symbol" => ".س.ج"),
    "SRD" => array("id" => 144, "name" => "Surinamese Dollar", "symbol" => "$"),
    "SZL" => array("id" => 145, "name" => "Swazi Lilangeni", "symbol" => "E"),
    "SEK" => array("id" => 146, "name" => "Swedish Krona", "symbol" => "kr"),
    "CHF" => array("id" => 147, "name" => "Swiss Franc", "symbol" => "CHf"),
    "SYP" => array("id" => 148, "name" => "Syrian Pound", "symbol" => "LS"),
    "TJS" => array("id" => 149, "name" => "Tajikistani Somoni", "symbol" => "SM"),
    "TZS" => array("id" => 150, "name" => "Tanzanian Shilling", "symbol" => "TSh"),
    "THB" => array("id" => 151, "name" => "Thai Baht", "symbol" => "฿"),
    "TOP" => array("id" => 152, "name" => "Tongan Pa'anga", "symbol" => "$"),
    "TTD" => array("id" => 153, "name" => "Trinidad & Tobago Dollar", "symbol" => "$"),
    "TND" => array("id" => 154, "name" => "Tunisian Dinar", "symbol" => "ت.د"),
    "TRY" => array("id" => 155, "name" => "Turkish Lira", "symbol" => "₺"),
    "TMT" => array("id" => 156, "name" => "Turkmenistani Manat", "symbol" => "T"),
    "UGX" => array("id" => 157, "name" => "Ugandan Shilling", "symbol" => "USh"),
    "UAH" => array("id" => 158, "name" => "Ukrainian Hryvnia", "symbol" => "₴"),
    "AED" => array("id" => 159, "name" => "United Arab Emirates Dirham", "symbol" => "إ.د"),
    "UYU" => array("id" => 160, "name" => "Uruguayan Peso", "symbol" => "$"),
    "USD" => array("id" => 161, "name" => "US Dollar", "symbol" => "$"),
    "UZS" => array("id" => 162, "name" => "Uzbekistan Som", "symbol" => "лв"),
    "VUV" => array("id" => 163, "name" => "Vanuatu Vatu", "symbol" => "VT"),
    "VEF" => array("id" => 164, "name" => "Venezuelan BolÃvar", "symbol" => "Bs"),
    "VND" => array("id" => 165, "name" => "Vietnamese Dong", "symbol" => "₫"),
    "YER" => array("id" => 166, "name" => "Yemeni Rial", "symbol" => "﷼"),
    "ZMK" => array("id" => 167, "name" => "Zambian Kwacha", "symbol" => "ZK"),
    "ZWL" => array("id" => 168, "name" => "Zimbabwean dollar", "symbol" => "$")
);
?>