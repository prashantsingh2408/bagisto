<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'code' => 'AF',
                'id' => 1,
                'name' => 'Afghanistan',
            ),
            1 => 
            array (
                'code' => 'AX',
                'id' => 2,
                'name' => 'Åland Islands',
            ),
            2 => 
            array (
                'code' => 'AL',
                'id' => 3,
                'name' => 'Albania',
            ),
            3 => 
            array (
                'code' => 'DZ',
                'id' => 4,
                'name' => 'Algeria',
            ),
            4 => 
            array (
                'code' => 'AS',
                'id' => 5,
                'name' => 'American Samoa',
            ),
            5 => 
            array (
                'code' => 'AD',
                'id' => 6,
                'name' => 'Andorra',
            ),
            6 => 
            array (
                'code' => 'AO',
                'id' => 7,
                'name' => 'Angola',
            ),
            7 => 
            array (
                'code' => 'AI',
                'id' => 8,
                'name' => 'Anguilla',
            ),
            8 => 
            array (
                'code' => 'AQ',
                'id' => 9,
                'name' => 'Antarctica',
            ),
            9 => 
            array (
                'code' => 'AG',
                'id' => 10,
                'name' => 'Antigua & Barbuda',
            ),
            10 => 
            array (
                'code' => 'AR',
                'id' => 11,
                'name' => 'Argentina',
            ),
            11 => 
            array (
                'code' => 'AM',
                'id' => 12,
                'name' => 'Armenia',
            ),
            12 => 
            array (
                'code' => 'AW',
                'id' => 13,
                'name' => 'Aruba',
            ),
            13 => 
            array (
                'code' => 'AC',
                'id' => 14,
                'name' => 'Ascension Island',
            ),
            14 => 
            array (
                'code' => 'AU',
                'id' => 15,
                'name' => 'Australia',
            ),
            15 => 
            array (
                'code' => 'AT',
                'id' => 16,
                'name' => 'Austria',
            ),
            16 => 
            array (
                'code' => 'AZ',
                'id' => 17,
                'name' => 'Azerbaijan',
            ),
            17 => 
            array (
                'code' => 'BS',
                'id' => 18,
                'name' => 'Bahamas',
            ),
            18 => 
            array (
                'code' => 'BH',
                'id' => 19,
                'name' => 'Bahrain',
            ),
            19 => 
            array (
                'code' => 'BD',
                'id' => 20,
                'name' => 'Bangladesh',
            ),
            20 => 
            array (
                'code' => 'BB',
                'id' => 21,
                'name' => 'Barbados',
            ),
            21 => 
            array (
                'code' => 'BY',
                'id' => 22,
                'name' => 'Belarus',
            ),
            22 => 
            array (
                'code' => 'BE',
                'id' => 23,
                'name' => 'Belgium',
            ),
            23 => 
            array (
                'code' => 'BZ',
                'id' => 24,
                'name' => 'Belize',
            ),
            24 => 
            array (
                'code' => 'BJ',
                'id' => 25,
                'name' => 'Benin',
            ),
            25 => 
            array (
                'code' => 'BM',
                'id' => 26,
                'name' => 'Bermuda',
            ),
            26 => 
            array (
                'code' => 'BT',
                'id' => 27,
                'name' => 'Bhutan',
            ),
            27 => 
            array (
                'code' => 'BO',
                'id' => 28,
                'name' => 'Bolivia',
            ),
            28 => 
            array (
                'code' => 'BA',
                'id' => 29,
                'name' => 'Bosnia & Herzegovina',
            ),
            29 => 
            array (
                'code' => 'BW',
                'id' => 30,
                'name' => 'Botswana',
            ),
            30 => 
            array (
                'code' => 'BR',
                'id' => 31,
                'name' => 'Brazil',
            ),
            31 => 
            array (
                'code' => 'IO',
                'id' => 32,
                'name' => 'British Indian Ocean Territory',
            ),
            32 => 
            array (
                'code' => 'VG',
                'id' => 33,
                'name' => 'British Virgin Islands',
            ),
            33 => 
            array (
                'code' => 'BN',
                'id' => 34,
                'name' => 'Brunei',
            ),
            34 => 
            array (
                'code' => 'BG',
                'id' => 35,
                'name' => 'Bulgaria',
            ),
            35 => 
            array (
                'code' => 'BF',
                'id' => 36,
                'name' => 'Burkina Faso',
            ),
            36 => 
            array (
                'code' => 'BI',
                'id' => 37,
                'name' => 'Burundi',
            ),
            37 => 
            array (
                'code' => 'KH',
                'id' => 38,
                'name' => 'Cambodia',
            ),
            38 => 
            array (
                'code' => 'CM',
                'id' => 39,
                'name' => 'Cameroon',
            ),
            39 => 
            array (
                'code' => 'CA',
                'id' => 40,
                'name' => 'Canada',
            ),
            40 => 
            array (
                'code' => 'IC',
                'id' => 41,
                'name' => 'Canary Islands',
            ),
            41 => 
            array (
                'code' => 'CV',
                'id' => 42,
                'name' => 'Cape Verde',
            ),
            42 => 
            array (
                'code' => 'BQ',
                'id' => 43,
                'name' => 'Caribbean Netherlands',
            ),
            43 => 
            array (
                'code' => 'KY',
                'id' => 44,
                'name' => 'Cayman Islands',
            ),
            44 => 
            array (
                'code' => 'CF',
                'id' => 45,
                'name' => 'Central African Republic',
            ),
            45 => 
            array (
                'code' => 'EA',
                'id' => 46,
                'name' => 'Ceuta & Melilla',
            ),
            46 => 
            array (
                'code' => 'TD',
                'id' => 47,
                'name' => 'Chad',
            ),
            47 => 
            array (
                'code' => 'CL',
                'id' => 48,
                'name' => 'Chile',
            ),
            48 => 
            array (
                'code' => 'CN',
                'id' => 49,
                'name' => 'China',
            ),
            49 => 
            array (
                'code' => 'CX',
                'id' => 50,
                'name' => 'Christmas Island',
            ),
            50 => 
            array (
                'code' => 'CC',
                'id' => 51,
            'name' => 'Cocos (Keeling) Islands',
            ),
            51 => 
            array (
                'code' => 'CO',
                'id' => 52,
                'name' => 'Colombia',
            ),
            52 => 
            array (
                'code' => 'KM',
                'id' => 53,
                'name' => 'Comoros',
            ),
            53 => 
            array (
                'code' => 'CG',
                'id' => 54,
                'name' => 'Congo - Brazzaville',
            ),
            54 => 
            array (
                'code' => 'CD',
                'id' => 55,
                'name' => 'Congo - Kinshasa',
            ),
            55 => 
            array (
                'code' => 'CK',
                'id' => 56,
                'name' => 'Cook Islands',
            ),
            56 => 
            array (
                'code' => 'CR',
                'id' => 57,
                'name' => 'Costa Rica',
            ),
            57 => 
            array (
                'code' => 'CI',
                'id' => 58,
                'name' => 'Côte d’Ivoire',
            ),
            58 => 
            array (
                'code' => 'HR',
                'id' => 59,
                'name' => 'Croatia',
            ),
            59 => 
            array (
                'code' => 'CU',
                'id' => 60,
                'name' => 'Cuba',
            ),
            60 => 
            array (
                'code' => 'CW',
                'id' => 61,
                'name' => 'Curaçao',
            ),
            61 => 
            array (
                'code' => 'CY',
                'id' => 62,
                'name' => 'Cyprus',
            ),
            62 => 
            array (
                'code' => 'CZ',
                'id' => 63,
                'name' => 'Czechia',
            ),
            63 => 
            array (
                'code' => 'DK',
                'id' => 64,
                'name' => 'Denmark',
            ),
            64 => 
            array (
                'code' => 'DG',
                'id' => 65,
                'name' => 'Diego Garcia',
            ),
            65 => 
            array (
                'code' => 'DJ',
                'id' => 66,
                'name' => 'Djibouti',
            ),
            66 => 
            array (
                'code' => 'DM',
                'id' => 67,
                'name' => 'Dominica',
            ),
            67 => 
            array (
                'code' => 'DO',
                'id' => 68,
                'name' => 'Dominican Republic',
            ),
            68 => 
            array (
                'code' => 'EC',
                'id' => 69,
                'name' => 'Ecuador',
            ),
            69 => 
            array (
                'code' => 'EG',
                'id' => 70,
                'name' => 'Egypt',
            ),
            70 => 
            array (
                'code' => 'SV',
                'id' => 71,
                'name' => 'El Salvador',
            ),
            71 => 
            array (
                'code' => 'GQ',
                'id' => 72,
                'name' => 'Equatorial Guinea',
            ),
            72 => 
            array (
                'code' => 'ER',
                'id' => 73,
                'name' => 'Eritrea',
            ),
            73 => 
            array (
                'code' => 'EE',
                'id' => 74,
                'name' => 'Estonia',
            ),
            74 => 
            array (
                'code' => 'ET',
                'id' => 75,
                'name' => 'Ethiopia',
            ),
            75 => 
            array (
                'code' => 'EZ',
                'id' => 76,
                'name' => 'Eurozone',
            ),
            76 => 
            array (
                'code' => 'FK',
                'id' => 77,
                'name' => 'Falkland Islands',
            ),
            77 => 
            array (
                'code' => 'FO',
                'id' => 78,
                'name' => 'Faroe Islands',
            ),
            78 => 
            array (
                'code' => 'FJ',
                'id' => 79,
                'name' => 'Fiji',
            ),
            79 => 
            array (
                'code' => 'FI',
                'id' => 80,
                'name' => 'Finland',
            ),
            80 => 
            array (
                'code' => 'FR',
                'id' => 81,
                'name' => 'France',
            ),
            81 => 
            array (
                'code' => 'GF',
                'id' => 82,
                'name' => 'French Guiana',
            ),
            82 => 
            array (
                'code' => 'PF',
                'id' => 83,
                'name' => 'French Polynesia',
            ),
            83 => 
            array (
                'code' => 'TF',
                'id' => 84,
                'name' => 'French Southern Territories',
            ),
            84 => 
            array (
                'code' => 'GA',
                'id' => 85,
                'name' => 'Gabon',
            ),
            85 => 
            array (
                'code' => 'GM',
                'id' => 86,
                'name' => 'Gambia',
            ),
            86 => 
            array (
                'code' => 'GE',
                'id' => 87,
                'name' => 'Georgia',
            ),
            87 => 
            array (
                'code' => 'DE',
                'id' => 88,
                'name' => 'Germany',
            ),
            88 => 
            array (
                'code' => 'GH',
                'id' => 89,
                'name' => 'Ghana',
            ),
            89 => 
            array (
                'code' => 'GI',
                'id' => 90,
                'name' => 'Gibraltar',
            ),
            90 => 
            array (
                'code' => 'GR',
                'id' => 91,
                'name' => 'Greece',
            ),
            91 => 
            array (
                'code' => 'GL',
                'id' => 92,
                'name' => 'Greenland',
            ),
            92 => 
            array (
                'code' => 'GD',
                'id' => 93,
                'name' => 'Grenada',
            ),
            93 => 
            array (
                'code' => 'GP',
                'id' => 94,
                'name' => 'Guadeloupe',
            ),
            94 => 
            array (
                'code' => 'GU',
                'id' => 95,
                'name' => 'Guam',
            ),
            95 => 
            array (
                'code' => 'GT',
                'id' => 96,
                'name' => 'Guatemala',
            ),
            96 => 
            array (
                'code' => 'GG',
                'id' => 97,
                'name' => 'Guernsey',
            ),
            97 => 
            array (
                'code' => 'GN',
                'id' => 98,
                'name' => 'Guinea',
            ),
            98 => 
            array (
                'code' => 'GW',
                'id' => 99,
                'name' => 'Guinea-Bissau',
            ),
            99 => 
            array (
                'code' => 'GY',
                'id' => 100,
                'name' => 'Guyana',
            ),
            100 => 
            array (
                'code' => 'HT',
                'id' => 101,
                'name' => 'Haiti',
            ),
            101 => 
            array (
                'code' => 'HN',
                'id' => 102,
                'name' => 'Honduras',
            ),
            102 => 
            array (
                'code' => 'HK',
                'id' => 103,
                'name' => 'Hong Kong SAR China',
            ),
            103 => 
            array (
                'code' => 'HU',
                'id' => 104,
                'name' => 'Hungary',
            ),
            104 => 
            array (
                'code' => 'IS',
                'id' => 105,
                'name' => 'Iceland',
            ),
            105 => 
            array (
                'code' => 'IN',
                'id' => 106,
                'name' => 'India',
            ),
            106 => 
            array (
                'code' => 'ID',
                'id' => 107,
                'name' => 'Indonesia',
            ),
            107 => 
            array (
                'code' => 'IR',
                'id' => 108,
                'name' => 'Iran',
            ),
            108 => 
            array (
                'code' => 'IQ',
                'id' => 109,
                'name' => 'Iraq',
            ),
            109 => 
            array (
                'code' => 'IE',
                'id' => 110,
                'name' => 'Ireland',
            ),
            110 => 
            array (
                'code' => 'IM',
                'id' => 111,
                'name' => 'Isle of Man',
            ),
            111 => 
            array (
                'code' => 'IL',
                'id' => 112,
                'name' => 'Israel',
            ),
            112 => 
            array (
                'code' => 'IT',
                'id' => 113,
                'name' => 'Italy',
            ),
            113 => 
            array (
                'code' => 'JM',
                'id' => 114,
                'name' => 'Jamaica',
            ),
            114 => 
            array (
                'code' => 'JP',
                'id' => 115,
                'name' => 'Japan',
            ),
            115 => 
            array (
                'code' => 'JE',
                'id' => 116,
                'name' => 'Jersey',
            ),
            116 => 
            array (
                'code' => 'JO',
                'id' => 117,
                'name' => 'Jordan',
            ),
            117 => 
            array (
                'code' => 'KZ',
                'id' => 118,
                'name' => 'Kazakhstan',
            ),
            118 => 
            array (
                'code' => 'KE',
                'id' => 119,
                'name' => 'Kenya',
            ),
            119 => 
            array (
                'code' => 'KI',
                'id' => 120,
                'name' => 'Kiribati',
            ),
            120 => 
            array (
                'code' => 'XK',
                'id' => 121,
                'name' => 'Kosovo',
            ),
            121 => 
            array (
                'code' => 'KW',
                'id' => 122,
                'name' => 'Kuwait',
            ),
            122 => 
            array (
                'code' => 'KG',
                'id' => 123,
                'name' => 'Kyrgyzstan',
            ),
            123 => 
            array (
                'code' => 'LA',
                'id' => 124,
                'name' => 'Laos',
            ),
            124 => 
            array (
                'code' => 'LV',
                'id' => 125,
                'name' => 'Latvia',
            ),
            125 => 
            array (
                'code' => 'LB',
                'id' => 126,
                'name' => 'Lebanon',
            ),
            126 => 
            array (
                'code' => 'LS',
                'id' => 127,
                'name' => 'Lesotho',
            ),
            127 => 
            array (
                'code' => 'LR',
                'id' => 128,
                'name' => 'Liberia',
            ),
            128 => 
            array (
                'code' => 'LY',
                'id' => 129,
                'name' => 'Libya',
            ),
            129 => 
            array (
                'code' => 'LI',
                'id' => 130,
                'name' => 'Liechtenstein',
            ),
            130 => 
            array (
                'code' => 'LT',
                'id' => 131,
                'name' => 'Lithuania',
            ),
            131 => 
            array (
                'code' => 'LU',
                'id' => 132,
                'name' => 'Luxembourg',
            ),
            132 => 
            array (
                'code' => 'MO',
                'id' => 133,
                'name' => 'Macau SAR China',
            ),
            133 => 
            array (
                'code' => 'MK',
                'id' => 134,
                'name' => 'Macedonia',
            ),
            134 => 
            array (
                'code' => 'MG',
                'id' => 135,
                'name' => 'Madagascar',
            ),
            135 => 
            array (
                'code' => 'MW',
                'id' => 136,
                'name' => 'Malawi',
            ),
            136 => 
            array (
                'code' => 'MY',
                'id' => 137,
                'name' => 'Malaysia',
            ),
            137 => 
            array (
                'code' => 'MV',
                'id' => 138,
                'name' => 'Maldives',
            ),
            138 => 
            array (
                'code' => 'ML',
                'id' => 139,
                'name' => 'Mali',
            ),
            139 => 
            array (
                'code' => 'MT',
                'id' => 140,
                'name' => 'Malta',
            ),
            140 => 
            array (
                'code' => 'MH',
                'id' => 141,
                'name' => 'Marshall Islands',
            ),
            141 => 
            array (
                'code' => 'MQ',
                'id' => 142,
                'name' => 'Martinique',
            ),
            142 => 
            array (
                'code' => 'MR',
                'id' => 143,
                'name' => 'Mauritania',
            ),
            143 => 
            array (
                'code' => 'MU',
                'id' => 144,
                'name' => 'Mauritius',
            ),
            144 => 
            array (
                'code' => 'YT',
                'id' => 145,
                'name' => 'Mayotte',
            ),
            145 => 
            array (
                'code' => 'MX',
                'id' => 146,
                'name' => 'Mexico',
            ),
            146 => 
            array (
                'code' => 'FM',
                'id' => 147,
                'name' => 'Micronesia',
            ),
            147 => 
            array (
                'code' => 'MD',
                'id' => 148,
                'name' => 'Moldova',
            ),
            148 => 
            array (
                'code' => 'MC',
                'id' => 149,
                'name' => 'Monaco',
            ),
            149 => 
            array (
                'code' => 'MN',
                'id' => 150,
                'name' => 'Mongolia',
            ),
            150 => 
            array (
                'code' => 'ME',
                'id' => 151,
                'name' => 'Montenegro',
            ),
            151 => 
            array (
                'code' => 'MS',
                'id' => 152,
                'name' => 'Montserrat',
            ),
            152 => 
            array (
                'code' => 'MA',
                'id' => 153,
                'name' => 'Morocco',
            ),
            153 => 
            array (
                'code' => 'MZ',
                'id' => 154,
                'name' => 'Mozambique',
            ),
            154 => 
            array (
                'code' => 'MM',
                'id' => 155,
            'name' => 'Myanmar (Burma)',
            ),
            155 => 
            array (
                'code' => 'NA',
                'id' => 156,
                'name' => 'Namibia',
            ),
            156 => 
            array (
                'code' => 'NR',
                'id' => 157,
                'name' => 'Nauru',
            ),
            157 => 
            array (
                'code' => 'NP',
                'id' => 158,
                'name' => 'Nepal',
            ),
            158 => 
            array (
                'code' => 'NL',
                'id' => 159,
                'name' => 'Netherlands',
            ),
            159 => 
            array (
                'code' => 'NC',
                'id' => 160,
                'name' => 'New Caledonia',
            ),
            160 => 
            array (
                'code' => 'NZ',
                'id' => 161,
                'name' => 'New Zealand',
            ),
            161 => 
            array (
                'code' => 'NI',
                'id' => 162,
                'name' => 'Nicaragua',
            ),
            162 => 
            array (
                'code' => 'NE',
                'id' => 163,
                'name' => 'Niger',
            ),
            163 => 
            array (
                'code' => 'NG',
                'id' => 164,
                'name' => 'Nigeria',
            ),
            164 => 
            array (
                'code' => 'NU',
                'id' => 165,
                'name' => 'Niue',
            ),
            165 => 
            array (
                'code' => 'NF',
                'id' => 166,
                'name' => 'Norfolk Island',
            ),
            166 => 
            array (
                'code' => 'KP',
                'id' => 167,
                'name' => 'North Korea',
            ),
            167 => 
            array (
                'code' => 'MP',
                'id' => 168,
                'name' => 'Northern Mariana Islands',
            ),
            168 => 
            array (
                'code' => 'NO',
                'id' => 169,
                'name' => 'Norway',
            ),
            169 => 
            array (
                'code' => 'OM',
                'id' => 170,
                'name' => 'Oman',
            ),
            170 => 
            array (
                'code' => 'PK',
                'id' => 171,
                'name' => 'Pakistan',
            ),
            171 => 
            array (
                'code' => 'PW',
                'id' => 172,
                'name' => 'Palau',
            ),
            172 => 
            array (
                'code' => 'PS',
                'id' => 173,
                'name' => 'Palestinian Territories',
            ),
            173 => 
            array (
                'code' => 'PA',
                'id' => 174,
                'name' => 'Panama',
            ),
            174 => 
            array (
                'code' => 'PG',
                'id' => 175,
                'name' => 'Papua New Guinea',
            ),
            175 => 
            array (
                'code' => 'PY',
                'id' => 176,
                'name' => 'Paraguay',
            ),
            176 => 
            array (
                'code' => 'PE',
                'id' => 177,
                'name' => 'Peru',
            ),
            177 => 
            array (
                'code' => 'PH',
                'id' => 178,
                'name' => 'Philippines',
            ),
            178 => 
            array (
                'code' => 'PN',
                'id' => 179,
                'name' => 'Pitcairn Islands',
            ),
            179 => 
            array (
                'code' => 'PL',
                'id' => 180,
                'name' => 'Poland',
            ),
            180 => 
            array (
                'code' => 'PT',
                'id' => 181,
                'name' => 'Portugal',
            ),
            181 => 
            array (
                'code' => 'PR',
                'id' => 182,
                'name' => 'Puerto Rico',
            ),
            182 => 
            array (
                'code' => 'QA',
                'id' => 183,
                'name' => 'Qatar',
            ),
            183 => 
            array (
                'code' => 'RE',
                'id' => 184,
                'name' => 'Réunion',
            ),
            184 => 
            array (
                'code' => 'RO',
                'id' => 185,
                'name' => 'Romania',
            ),
            185 => 
            array (
                'code' => 'RU',
                'id' => 186,
                'name' => 'Russia',
            ),
            186 => 
            array (
                'code' => 'RW',
                'id' => 187,
                'name' => 'Rwanda',
            ),
            187 => 
            array (
                'code' => 'WS',
                'id' => 188,
                'name' => 'Samoa',
            ),
            188 => 
            array (
                'code' => 'SM',
                'id' => 189,
                'name' => 'San Marino',
            ),
            189 => 
            array (
                'code' => 'ST',
                'id' => 190,
                'name' => 'São Tomé & Príncipe',
            ),
            190 => 
            array (
                'code' => 'SA',
                'id' => 191,
                'name' => 'Saudi Arabia',
            ),
            191 => 
            array (
                'code' => 'SN',
                'id' => 192,
                'name' => 'Senegal',
            ),
            192 => 
            array (
                'code' => 'RS',
                'id' => 193,
                'name' => 'Serbia',
            ),
            193 => 
            array (
                'code' => 'SC',
                'id' => 194,
                'name' => 'Seychelles',
            ),
            194 => 
            array (
                'code' => 'SL',
                'id' => 195,
                'name' => 'Sierra Leone',
            ),
            195 => 
            array (
                'code' => 'SG',
                'id' => 196,
                'name' => 'Singapore',
            ),
            196 => 
            array (
                'code' => 'SX',
                'id' => 197,
                'name' => 'Sint Maarten',
            ),
            197 => 
            array (
                'code' => 'SK',
                'id' => 198,
                'name' => 'Slovakia',
            ),
            198 => 
            array (
                'code' => 'SI',
                'id' => 199,
                'name' => 'Slovenia',
            ),
            199 => 
            array (
                'code' => 'SB',
                'id' => 200,
                'name' => 'Solomon Islands',
            ),
            200 => 
            array (
                'code' => 'SO',
                'id' => 201,
                'name' => 'Somalia',
            ),
            201 => 
            array (
                'code' => 'ZA',
                'id' => 202,
                'name' => 'South Africa',
            ),
            202 => 
            array (
                'code' => 'GS',
                'id' => 203,
                'name' => 'South Georgia & South Sandwich Islands',
            ),
            203 => 
            array (
                'code' => 'KR',
                'id' => 204,
                'name' => 'South Korea',
            ),
            204 => 
            array (
                'code' => 'SS',
                'id' => 205,
                'name' => 'South Sudan',
            ),
            205 => 
            array (
                'code' => 'ES',
                'id' => 206,
                'name' => 'Spain',
            ),
            206 => 
            array (
                'code' => 'LK',
                'id' => 207,
                'name' => 'Sri Lanka',
            ),
            207 => 
            array (
                'code' => 'BL',
                'id' => 208,
                'name' => 'St. Barthélemy',
            ),
            208 => 
            array (
                'code' => 'SH',
                'id' => 209,
                'name' => 'St. Helena',
            ),
            209 => 
            array (
                'code' => 'KN',
                'id' => 210,
                'name' => 'St. Kitts & Nevis',
            ),
            210 => 
            array (
                'code' => 'LC',
                'id' => 211,
                'name' => 'St. Lucia',
            ),
            211 => 
            array (
                'code' => 'MF',
                'id' => 212,
                'name' => 'St. Martin',
            ),
            212 => 
            array (
                'code' => 'PM',
                'id' => 213,
                'name' => 'St. Pierre & Miquelon',
            ),
            213 => 
            array (
                'code' => 'VC',
                'id' => 214,
                'name' => 'St. Vincent & Grenadines',
            ),
            214 => 
            array (
                'code' => 'SD',
                'id' => 215,
                'name' => 'Sudan',
            ),
            215 => 
            array (
                'code' => 'SR',
                'id' => 216,
                'name' => 'Suriname',
            ),
            216 => 
            array (
                'code' => 'SJ',
                'id' => 217,
                'name' => 'Svalbard & Jan Mayen',
            ),
            217 => 
            array (
                'code' => 'SZ',
                'id' => 218,
                'name' => 'Swaziland',
            ),
            218 => 
            array (
                'code' => 'SE',
                'id' => 219,
                'name' => 'Sweden',
            ),
            219 => 
            array (
                'code' => 'CH',
                'id' => 220,
                'name' => 'Switzerland',
            ),
            220 => 
            array (
                'code' => 'SY',
                'id' => 221,
                'name' => 'Syria',
            ),
            221 => 
            array (
                'code' => 'TW',
                'id' => 222,
                'name' => 'Taiwan',
            ),
            222 => 
            array (
                'code' => 'TJ',
                'id' => 223,
                'name' => 'Tajikistan',
            ),
            223 => 
            array (
                'code' => 'TZ',
                'id' => 224,
                'name' => 'Tanzania',
            ),
            224 => 
            array (
                'code' => 'TH',
                'id' => 225,
                'name' => 'Thailand',
            ),
            225 => 
            array (
                'code' => 'TL',
                'id' => 226,
                'name' => 'Timor-Leste',
            ),
            226 => 
            array (
                'code' => 'TG',
                'id' => 227,
                'name' => 'Togo',
            ),
            227 => 
            array (
                'code' => 'TK',
                'id' => 228,
                'name' => 'Tokelau',
            ),
            228 => 
            array (
                'code' => 'TO',
                'id' => 229,
                'name' => 'Tonga',
            ),
            229 => 
            array (
                'code' => 'TT',
                'id' => 230,
                'name' => 'Trinidad & Tobago',
            ),
            230 => 
            array (
                'code' => 'TA',
                'id' => 231,
                'name' => 'Tristan da Cunha',
            ),
            231 => 
            array (
                'code' => 'TN',
                'id' => 232,
                'name' => 'Tunisia',
            ),
            232 => 
            array (
                'code' => 'TR',
                'id' => 233,
                'name' => 'Turkey',
            ),
            233 => 
            array (
                'code' => 'TM',
                'id' => 234,
                'name' => 'Turkmenistan',
            ),
            234 => 
            array (
                'code' => 'TC',
                'id' => 235,
                'name' => 'Turks & Caicos Islands',
            ),
            235 => 
            array (
                'code' => 'TV',
                'id' => 236,
                'name' => 'Tuvalu',
            ),
            236 => 
            array (
                'code' => 'UM',
                'id' => 237,
                'name' => 'U.S. Outlying Islands',
            ),
            237 => 
            array (
                'code' => 'VI',
                'id' => 238,
                'name' => 'U.S. Virgin Islands',
            ),
            238 => 
            array (
                'code' => 'UG',
                'id' => 239,
                'name' => 'Uganda',
            ),
            239 => 
            array (
                'code' => 'UA',
                'id' => 240,
                'name' => 'Ukraine',
            ),
            240 => 
            array (
                'code' => 'AE',
                'id' => 241,
                'name' => 'United Arab Emirates',
            ),
            241 => 
            array (
                'code' => 'GB',
                'id' => 242,
                'name' => 'United Kingdom',
            ),
            242 => 
            array (
                'code' => 'UN',
                'id' => 243,
                'name' => 'United Nations',
            ),
            243 => 
            array (
                'code' => 'US',
                'id' => 244,
                'name' => 'United States',
            ),
            244 => 
            array (
                'code' => 'UY',
                'id' => 245,
                'name' => 'Uruguay',
            ),
            245 => 
            array (
                'code' => 'UZ',
                'id' => 246,
                'name' => 'Uzbekistan',
            ),
            246 => 
            array (
                'code' => 'VU',
                'id' => 247,
                'name' => 'Vanuatu',
            ),
            247 => 
            array (
                'code' => 'VA',
                'id' => 248,
                'name' => 'Vatican City',
            ),
            248 => 
            array (
                'code' => 'VE',
                'id' => 249,
                'name' => 'Venezuela',
            ),
            249 => 
            array (
                'code' => 'VN',
                'id' => 250,
                'name' => 'Vietnam',
            ),
            250 => 
            array (
                'code' => 'WF',
                'id' => 251,
                'name' => 'Wallis & Futuna',
            ),
            251 => 
            array (
                'code' => 'EH',
                'id' => 252,
                'name' => 'Western Sahara',
            ),
            252 => 
            array (
                'code' => 'YE',
                'id' => 253,
                'name' => 'Yemen',
            ),
            253 => 
            array (
                'code' => 'ZM',
                'id' => 254,
                'name' => 'Zambia',
            ),
            254 => 
            array (
                'code' => 'ZW',
                'id' => 255,
                'name' => 'Zimbabwe',
            ),
        ));
        
        
    }
}