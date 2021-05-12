<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country_states')->delete();
        
        \DB::table('country_states')->insert(array (
            0 => 
            array (
                'code' => 'AL',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Alabama',
                'id' => 1,
            ),
            1 => 
            array (
                'code' => 'AK',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Alaska',
                'id' => 2,
            ),
            2 => 
            array (
                'code' => 'AS',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'American Samoa',
                'id' => 3,
            ),
            3 => 
            array (
                'code' => 'AZ',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Arizona',
                'id' => 4,
            ),
            4 => 
            array (
                'code' => 'AR',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Arkansas',
                'id' => 5,
            ),
            5 => 
            array (
                'code' => 'AE',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Armed Forces Africa',
                'id' => 6,
            ),
            6 => 
            array (
                'code' => 'AA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Armed Forces Americas',
                'id' => 7,
            ),
            7 => 
            array (
                'code' => 'AE',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Armed Forces Canada',
                'id' => 8,
            ),
            8 => 
            array (
                'code' => 'AE',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Armed Forces Europe',
                'id' => 9,
            ),
            9 => 
            array (
                'code' => 'AE',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Armed Forces Middle East',
                'id' => 10,
            ),
            10 => 
            array (
                'code' => 'AP',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Armed Forces Pacific',
                'id' => 11,
            ),
            11 => 
            array (
                'code' => 'CA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'California',
                'id' => 12,
            ),
            12 => 
            array (
                'code' => 'CO',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Colorado',
                'id' => 13,
            ),
            13 => 
            array (
                'code' => 'CT',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Connecticut',
                'id' => 14,
            ),
            14 => 
            array (
                'code' => 'DE',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Delaware',
                'id' => 15,
            ),
            15 => 
            array (
                'code' => 'DC',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'District of Columbia',
                'id' => 16,
            ),
            16 => 
            array (
                'code' => 'FM',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Federated States Of Micronesia',
                'id' => 17,
            ),
            17 => 
            array (
                'code' => 'FL',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Florida',
                'id' => 18,
            ),
            18 => 
            array (
                'code' => 'GA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Georgia',
                'id' => 19,
            ),
            19 => 
            array (
                'code' => 'GU',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Guam',
                'id' => 20,
            ),
            20 => 
            array (
                'code' => 'HI',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Hawaii',
                'id' => 21,
            ),
            21 => 
            array (
                'code' => 'ID',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Idaho',
                'id' => 22,
            ),
            22 => 
            array (
                'code' => 'IL',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Illinois',
                'id' => 23,
            ),
            23 => 
            array (
                'code' => 'IN',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Indiana',
                'id' => 24,
            ),
            24 => 
            array (
                'code' => 'IA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Iowa',
                'id' => 25,
            ),
            25 => 
            array (
                'code' => 'KS',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Kansas',
                'id' => 26,
            ),
            26 => 
            array (
                'code' => 'KY',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Kentucky',
                'id' => 27,
            ),
            27 => 
            array (
                'code' => 'LA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Louisiana',
                'id' => 28,
            ),
            28 => 
            array (
                'code' => 'ME',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Maine',
                'id' => 29,
            ),
            29 => 
            array (
                'code' => 'MH',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Marshall Islands',
                'id' => 30,
            ),
            30 => 
            array (
                'code' => 'MD',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Maryland',
                'id' => 31,
            ),
            31 => 
            array (
                'code' => 'MA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Massachusetts',
                'id' => 32,
            ),
            32 => 
            array (
                'code' => 'MI',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Michigan',
                'id' => 33,
            ),
            33 => 
            array (
                'code' => 'MN',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Minnesota',
                'id' => 34,
            ),
            34 => 
            array (
                'code' => 'MS',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Mississippi',
                'id' => 35,
            ),
            35 => 
            array (
                'code' => 'MO',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Missouri',
                'id' => 36,
            ),
            36 => 
            array (
                'code' => 'MT',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Montana',
                'id' => 37,
            ),
            37 => 
            array (
                'code' => 'NE',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Nebraska',
                'id' => 38,
            ),
            38 => 
            array (
                'code' => 'NV',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Nevada',
                'id' => 39,
            ),
            39 => 
            array (
                'code' => 'NH',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'New Hampshire',
                'id' => 40,
            ),
            40 => 
            array (
                'code' => 'NJ',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'New Jersey',
                'id' => 41,
            ),
            41 => 
            array (
                'code' => 'NM',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'New Mexico',
                'id' => 42,
            ),
            42 => 
            array (
                'code' => 'NY',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'New York',
                'id' => 43,
            ),
            43 => 
            array (
                'code' => 'NC',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'North Carolina',
                'id' => 44,
            ),
            44 => 
            array (
                'code' => 'ND',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'North Dakota',
                'id' => 45,
            ),
            45 => 
            array (
                'code' => 'MP',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Northern Mariana Islands',
                'id' => 46,
            ),
            46 => 
            array (
                'code' => 'OH',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Ohio',
                'id' => 47,
            ),
            47 => 
            array (
                'code' => 'OK',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Oklahoma',
                'id' => 48,
            ),
            48 => 
            array (
                'code' => 'OR',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Oregon',
                'id' => 49,
            ),
            49 => 
            array (
                'code' => 'PW',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Palau',
                'id' => 50,
            ),
            50 => 
            array (
                'code' => 'PA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Pennsylvania',
                'id' => 51,
            ),
            51 => 
            array (
                'code' => 'PR',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Puerto Rico',
                'id' => 52,
            ),
            52 => 
            array (
                'code' => 'RI',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Rhode Island',
                'id' => 53,
            ),
            53 => 
            array (
                'code' => 'SC',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'South Carolina',
                'id' => 54,
            ),
            54 => 
            array (
                'code' => 'SD',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'South Dakota',
                'id' => 55,
            ),
            55 => 
            array (
                'code' => 'TN',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Tennessee',
                'id' => 56,
            ),
            56 => 
            array (
                'code' => 'TX',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Texas',
                'id' => 57,
            ),
            57 => 
            array (
                'code' => 'UT',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Utah',
                'id' => 58,
            ),
            58 => 
            array (
                'code' => 'VT',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Vermont',
                'id' => 59,
            ),
            59 => 
            array (
                'code' => 'VI',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Virgin Islands',
                'id' => 60,
            ),
            60 => 
            array (
                'code' => 'VA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Virginia',
                'id' => 61,
            ),
            61 => 
            array (
                'code' => 'WA',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Washington',
                'id' => 62,
            ),
            62 => 
            array (
                'code' => 'WV',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'West Virginia',
                'id' => 63,
            ),
            63 => 
            array (
                'code' => 'WI',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Wisconsin',
                'id' => 64,
            ),
            64 => 
            array (
                'code' => 'WY',
                'country_code' => 'US',
                'country_id' => 244,
                'default_name' => 'Wyoming',
                'id' => 65,
            ),
            65 => 
            array (
                'code' => 'AB',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Alberta',
                'id' => 66,
            ),
            66 => 
            array (
                'code' => 'BC',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'British Columbia',
                'id' => 67,
            ),
            67 => 
            array (
                'code' => 'MB',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Manitoba',
                'id' => 68,
            ),
            68 => 
            array (
                'code' => 'NL',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Newfoundland and Labrador',
                'id' => 69,
            ),
            69 => 
            array (
                'code' => 'NB',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'New Brunswick',
                'id' => 70,
            ),
            70 => 
            array (
                'code' => 'NS',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Nova Scotia',
                'id' => 71,
            ),
            71 => 
            array (
                'code' => 'NT',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Northwest Territories',
                'id' => 72,
            ),
            72 => 
            array (
                'code' => 'NU',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Nunavut',
                'id' => 73,
            ),
            73 => 
            array (
                'code' => 'ON',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Ontario',
                'id' => 74,
            ),
            74 => 
            array (
                'code' => 'PE',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Prince Edward Island',
                'id' => 75,
            ),
            75 => 
            array (
                'code' => 'QC',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Quebec',
                'id' => 76,
            ),
            76 => 
            array (
                'code' => 'SK',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Saskatchewan',
                'id' => 77,
            ),
            77 => 
            array (
                'code' => 'YT',
                'country_code' => 'CA',
                'country_id' => 40,
                'default_name' => 'Yukon Territory',
                'id' => 78,
            ),
            78 => 
            array (
                'code' => 'NDS',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Niedersachsen',
                'id' => 79,
            ),
            79 => 
            array (
                'code' => 'BAW',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Baden-Württemberg',
                'id' => 80,
            ),
            80 => 
            array (
                'code' => 'BAY',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Bayern',
                'id' => 81,
            ),
            81 => 
            array (
                'code' => 'BER',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Berlin',
                'id' => 82,
            ),
            82 => 
            array (
                'code' => 'BRG',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Brandenburg',
                'id' => 83,
            ),
            83 => 
            array (
                'code' => 'BRE',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Bremen',
                'id' => 84,
            ),
            84 => 
            array (
                'code' => 'HAM',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Hamburg',
                'id' => 85,
            ),
            85 => 
            array (
                'code' => 'HES',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Hessen',
                'id' => 86,
            ),
            86 => 
            array (
                'code' => 'MEC',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Mecklenburg-Vorpommern',
                'id' => 87,
            ),
            87 => 
            array (
                'code' => 'NRW',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Nordrhein-Westfalen',
                'id' => 88,
            ),
            88 => 
            array (
                'code' => 'RHE',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Rheinland-Pfalz',
                'id' => 89,
            ),
            89 => 
            array (
                'code' => 'SAR',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Saarland',
                'id' => 90,
            ),
            90 => 
            array (
                'code' => 'SAS',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Sachsen',
                'id' => 91,
            ),
            91 => 
            array (
                'code' => 'SAC',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Sachsen-Anhalt',
                'id' => 92,
            ),
            92 => 
            array (
                'code' => 'SCN',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Schleswig-Holstein',
                'id' => 93,
            ),
            93 => 
            array (
                'code' => 'THE',
                'country_code' => 'DE',
                'country_id' => 88,
                'default_name' => 'Thüringen',
                'id' => 94,
            ),
            94 => 
            array (
                'code' => 'WI',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Wien',
                'id' => 95,
            ),
            95 => 
            array (
                'code' => 'NO',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Niederösterreich',
                'id' => 96,
            ),
            96 => 
            array (
                'code' => 'OO',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Oberösterreich',
                'id' => 97,
            ),
            97 => 
            array (
                'code' => 'SB',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Salzburg',
                'id' => 98,
            ),
            98 => 
            array (
                'code' => 'KN',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Kärnten',
                'id' => 99,
            ),
            99 => 
            array (
                'code' => 'ST',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Steiermark',
                'id' => 100,
            ),
            100 => 
            array (
                'code' => 'TI',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Tirol',
                'id' => 101,
            ),
            101 => 
            array (
                'code' => 'BL',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Burgenland',
                'id' => 102,
            ),
            102 => 
            array (
                'code' => 'VB',
                'country_code' => 'AT',
                'country_id' => 16,
                'default_name' => 'Vorarlberg',
                'id' => 103,
            ),
            103 => 
            array (
                'code' => 'AG',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Aargau',
                'id' => 104,
            ),
            104 => 
            array (
                'code' => 'AI',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Appenzell Innerrhoden',
                'id' => 105,
            ),
            105 => 
            array (
                'code' => 'AR',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Appenzell Ausserrhoden',
                'id' => 106,
            ),
            106 => 
            array (
                'code' => 'BE',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Bern',
                'id' => 107,
            ),
            107 => 
            array (
                'code' => 'BL',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Basel-Landschaft',
                'id' => 108,
            ),
            108 => 
            array (
                'code' => 'BS',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Basel-Stadt',
                'id' => 109,
            ),
            109 => 
            array (
                'code' => 'FR',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Freiburg',
                'id' => 110,
            ),
            110 => 
            array (
                'code' => 'GE',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Genf',
                'id' => 111,
            ),
            111 => 
            array (
                'code' => 'GL',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Glarus',
                'id' => 112,
            ),
            112 => 
            array (
                'code' => 'GR',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Graubünden',
                'id' => 113,
            ),
            113 => 
            array (
                'code' => 'JU',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Jura',
                'id' => 114,
            ),
            114 => 
            array (
                'code' => 'LU',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Luzern',
                'id' => 115,
            ),
            115 => 
            array (
                'code' => 'NE',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Neuenburg',
                'id' => 116,
            ),
            116 => 
            array (
                'code' => 'NW',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Nidwalden',
                'id' => 117,
            ),
            117 => 
            array (
                'code' => 'OW',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Obwalden',
                'id' => 118,
            ),
            118 => 
            array (
                'code' => 'SG',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'St. Gallen',
                'id' => 119,
            ),
            119 => 
            array (
                'code' => 'SH',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Schaffhausen',
                'id' => 120,
            ),
            120 => 
            array (
                'code' => 'SO',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Solothurn',
                'id' => 121,
            ),
            121 => 
            array (
                'code' => 'SZ',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Schwyz',
                'id' => 122,
            ),
            122 => 
            array (
                'code' => 'TG',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Thurgau',
                'id' => 123,
            ),
            123 => 
            array (
                'code' => 'TI',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Tessin',
                'id' => 124,
            ),
            124 => 
            array (
                'code' => 'UR',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Uri',
                'id' => 125,
            ),
            125 => 
            array (
                'code' => 'VD',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Waadt',
                'id' => 126,
            ),
            126 => 
            array (
                'code' => 'VS',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Wallis',
                'id' => 127,
            ),
            127 => 
            array (
                'code' => 'ZG',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Zug',
                'id' => 128,
            ),
            128 => 
            array (
                'code' => 'ZH',
                'country_code' => 'CH',
                'country_id' => 220,
                'default_name' => 'Zürich',
                'id' => 129,
            ),
            129 => 
            array (
                'code' => 'A Coruсa',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'A Coruña',
                'id' => 130,
            ),
            130 => 
            array (
                'code' => 'Alava',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Alava',
                'id' => 131,
            ),
            131 => 
            array (
                'code' => 'Albacete',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Albacete',
                'id' => 132,
            ),
            132 => 
            array (
                'code' => 'Alicante',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Alicante',
                'id' => 133,
            ),
            133 => 
            array (
                'code' => 'Almeria',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Almeria',
                'id' => 134,
            ),
            134 => 
            array (
                'code' => 'Asturias',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Asturias',
                'id' => 135,
            ),
            135 => 
            array (
                'code' => 'Avila',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Avila',
                'id' => 136,
            ),
            136 => 
            array (
                'code' => 'Badajoz',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Badajoz',
                'id' => 137,
            ),
            137 => 
            array (
                'code' => 'Baleares',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Baleares',
                'id' => 138,
            ),
            138 => 
            array (
                'code' => 'Barcelona',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Barcelona',
                'id' => 139,
            ),
            139 => 
            array (
                'code' => 'Burgos',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Burgos',
                'id' => 140,
            ),
            140 => 
            array (
                'code' => 'Caceres',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Caceres',
                'id' => 141,
            ),
            141 => 
            array (
                'code' => 'Cadiz',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Cadiz',
                'id' => 142,
            ),
            142 => 
            array (
                'code' => 'Cantabria',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Cantabria',
                'id' => 143,
            ),
            143 => 
            array (
                'code' => 'Castellon',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Castellon',
                'id' => 144,
            ),
            144 => 
            array (
                'code' => 'Ceuta',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Ceuta',
                'id' => 145,
            ),
            145 => 
            array (
                'code' => 'Ciudad Real',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Ciudad Real',
                'id' => 146,
            ),
            146 => 
            array (
                'code' => 'Cordoba',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Cordoba',
                'id' => 147,
            ),
            147 => 
            array (
                'code' => 'Cuenca',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Cuenca',
                'id' => 148,
            ),
            148 => 
            array (
                'code' => 'Girona',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Girona',
                'id' => 149,
            ),
            149 => 
            array (
                'code' => 'Granada',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Granada',
                'id' => 150,
            ),
            150 => 
            array (
                'code' => 'Guadalajara',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Guadalajara',
                'id' => 151,
            ),
            151 => 
            array (
                'code' => 'Guipuzcoa',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Guipuzcoa',
                'id' => 152,
            ),
            152 => 
            array (
                'code' => 'Huelva',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Huelva',
                'id' => 153,
            ),
            153 => 
            array (
                'code' => 'Huesca',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Huesca',
                'id' => 154,
            ),
            154 => 
            array (
                'code' => 'Jaen',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Jaen',
                'id' => 155,
            ),
            155 => 
            array (
                'code' => 'La Rioja',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'La Rioja',
                'id' => 156,
            ),
            156 => 
            array (
                'code' => 'Las Palmas',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Las Palmas',
                'id' => 157,
            ),
            157 => 
            array (
                'code' => 'Leon',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Leon',
                'id' => 158,
            ),
            158 => 
            array (
                'code' => 'Lleida',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Lleida',
                'id' => 159,
            ),
            159 => 
            array (
                'code' => 'Lugo',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Lugo',
                'id' => 160,
            ),
            160 => 
            array (
                'code' => 'Madrid',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Madrid',
                'id' => 161,
            ),
            161 => 
            array (
                'code' => 'Malaga',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Malaga',
                'id' => 162,
            ),
            162 => 
            array (
                'code' => 'Melilla',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Melilla',
                'id' => 163,
            ),
            163 => 
            array (
                'code' => 'Murcia',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Murcia',
                'id' => 164,
            ),
            164 => 
            array (
                'code' => 'Navarra',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Navarra',
                'id' => 165,
            ),
            165 => 
            array (
                'code' => 'Ourense',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Ourense',
                'id' => 166,
            ),
            166 => 
            array (
                'code' => 'Palencia',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Palencia',
                'id' => 167,
            ),
            167 => 
            array (
                'code' => 'Pontevedra',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Pontevedra',
                'id' => 168,
            ),
            168 => 
            array (
                'code' => 'Salamanca',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Salamanca',
                'id' => 169,
            ),
            169 => 
            array (
                'code' => 'Santa Cruz de Tenerife',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Santa Cruz de Tenerife',
                'id' => 170,
            ),
            170 => 
            array (
                'code' => 'Segovia',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Segovia',
                'id' => 171,
            ),
            171 => 
            array (
                'code' => 'Sevilla',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Sevilla',
                'id' => 172,
            ),
            172 => 
            array (
                'code' => 'Soria',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Soria',
                'id' => 173,
            ),
            173 => 
            array (
                'code' => 'Tarragona',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Tarragona',
                'id' => 174,
            ),
            174 => 
            array (
                'code' => 'Teruel',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Teruel',
                'id' => 175,
            ),
            175 => 
            array (
                'code' => 'Toledo',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Toledo',
                'id' => 176,
            ),
            176 => 
            array (
                'code' => 'Valencia',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Valencia',
                'id' => 177,
            ),
            177 => 
            array (
                'code' => 'Valladolid',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Valladolid',
                'id' => 178,
            ),
            178 => 
            array (
                'code' => 'Vizcaya',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Vizcaya',
                'id' => 179,
            ),
            179 => 
            array (
                'code' => 'Zamora',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Zamora',
                'id' => 180,
            ),
            180 => 
            array (
                'code' => 'Zaragoza',
                'country_code' => 'ES',
                'country_id' => 206,
                'default_name' => 'Zaragoza',
                'id' => 181,
            ),
            181 => 
            array (
                'code' => '1',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Ain',
                'id' => 182,
            ),
            182 => 
            array (
                'code' => '2',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Aisne',
                'id' => 183,
            ),
            183 => 
            array (
                'code' => '3',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Allier',
                'id' => 184,
            ),
            184 => 
            array (
                'code' => '4',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Alpes-de-Haute-Provence',
                'id' => 185,
            ),
            185 => 
            array (
                'code' => '5',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Hautes-Alpes',
                'id' => 186,
            ),
            186 => 
            array (
                'code' => '6',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Alpes-Maritimes',
                'id' => 187,
            ),
            187 => 
            array (
                'code' => '7',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Ardèche',
                'id' => 188,
            ),
            188 => 
            array (
                'code' => '8',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Ardennes',
                'id' => 189,
            ),
            189 => 
            array (
                'code' => '9',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Ariège',
                'id' => 190,
            ),
            190 => 
            array (
                'code' => '10',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Aube',
                'id' => 191,
            ),
            191 => 
            array (
                'code' => '11',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Aude',
                'id' => 192,
            ),
            192 => 
            array (
                'code' => '12',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Aveyron',
                'id' => 193,
            ),
            193 => 
            array (
                'code' => '13',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Bouches-du-Rhône',
                'id' => 194,
            ),
            194 => 
            array (
                'code' => '14',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Calvados',
                'id' => 195,
            ),
            195 => 
            array (
                'code' => '15',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Cantal',
                'id' => 196,
            ),
            196 => 
            array (
                'code' => '16',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Charente',
                'id' => 197,
            ),
            197 => 
            array (
                'code' => '17',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Charente-Maritime',
                'id' => 198,
            ),
            198 => 
            array (
                'code' => '18',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Cher',
                'id' => 199,
            ),
            199 => 
            array (
                'code' => '19',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Corrèze',
                'id' => 200,
            ),
            200 => 
            array (
                'code' => '2A',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Corse-du-Sud',
                'id' => 201,
            ),
            201 => 
            array (
                'code' => '2B',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Haute-Corse',
                'id' => 202,
            ),
            202 => 
            array (
                'code' => '21',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Côte-d\'Or',
                'id' => 203,
            ),
            203 => 
            array (
                'code' => '22',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Côtes-d\'Armor',
                'id' => 204,
            ),
            204 => 
            array (
                'code' => '23',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Creuse',
                'id' => 205,
            ),
            205 => 
            array (
                'code' => '24',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Dordogne',
                'id' => 206,
            ),
            206 => 
            array (
                'code' => '25',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Doubs',
                'id' => 207,
            ),
            207 => 
            array (
                'code' => '26',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Drôme',
                'id' => 208,
            ),
            208 => 
            array (
                'code' => '27',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Eure',
                'id' => 209,
            ),
            209 => 
            array (
                'code' => '28',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Eure-et-Loir',
                'id' => 210,
            ),
            210 => 
            array (
                'code' => '29',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Finistère',
                'id' => 211,
            ),
            211 => 
            array (
                'code' => '30',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Gard',
                'id' => 212,
            ),
            212 => 
            array (
                'code' => '31',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Haute-Garonne',
                'id' => 213,
            ),
            213 => 
            array (
                'code' => '32',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Gers',
                'id' => 214,
            ),
            214 => 
            array (
                'code' => '33',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Gironde',
                'id' => 215,
            ),
            215 => 
            array (
                'code' => '34',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Hérault',
                'id' => 216,
            ),
            216 => 
            array (
                'code' => '35',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Ille-et-Vilaine',
                'id' => 217,
            ),
            217 => 
            array (
                'code' => '36',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Indre',
                'id' => 218,
            ),
            218 => 
            array (
                'code' => '37',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Indre-et-Loire',
                'id' => 219,
            ),
            219 => 
            array (
                'code' => '38',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Isère',
                'id' => 220,
            ),
            220 => 
            array (
                'code' => '39',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Jura',
                'id' => 221,
            ),
            221 => 
            array (
                'code' => '40',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Landes',
                'id' => 222,
            ),
            222 => 
            array (
                'code' => '41',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Loir-et-Cher',
                'id' => 223,
            ),
            223 => 
            array (
                'code' => '42',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Loire',
                'id' => 224,
            ),
            224 => 
            array (
                'code' => '43',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Haute-Loire',
                'id' => 225,
            ),
            225 => 
            array (
                'code' => '44',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Loire-Atlantique',
                'id' => 226,
            ),
            226 => 
            array (
                'code' => '45',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Loiret',
                'id' => 227,
            ),
            227 => 
            array (
                'code' => '46',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Lot',
                'id' => 228,
            ),
            228 => 
            array (
                'code' => '47',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Lot-et-Garonne',
                'id' => 229,
            ),
            229 => 
            array (
                'code' => '48',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Lozère',
                'id' => 230,
            ),
            230 => 
            array (
                'code' => '49',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Maine-et-Loire',
                'id' => 231,
            ),
            231 => 
            array (
                'code' => '50',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Manche',
                'id' => 232,
            ),
            232 => 
            array (
                'code' => '51',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Marne',
                'id' => 233,
            ),
            233 => 
            array (
                'code' => '52',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Haute-Marne',
                'id' => 234,
            ),
            234 => 
            array (
                'code' => '53',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Mayenne',
                'id' => 235,
            ),
            235 => 
            array (
                'code' => '54',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Meurthe-et-Moselle',
                'id' => 236,
            ),
            236 => 
            array (
                'code' => '55',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Meuse',
                'id' => 237,
            ),
            237 => 
            array (
                'code' => '56',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Morbihan',
                'id' => 238,
            ),
            238 => 
            array (
                'code' => '57',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Moselle',
                'id' => 239,
            ),
            239 => 
            array (
                'code' => '58',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Nièvre',
                'id' => 240,
            ),
            240 => 
            array (
                'code' => '59',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Nord',
                'id' => 241,
            ),
            241 => 
            array (
                'code' => '60',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Oise',
                'id' => 242,
            ),
            242 => 
            array (
                'code' => '61',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Orne',
                'id' => 243,
            ),
            243 => 
            array (
                'code' => '62',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Pas-de-Calais',
                'id' => 244,
            ),
            244 => 
            array (
                'code' => '63',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Puy-de-Dôme',
                'id' => 245,
            ),
            245 => 
            array (
                'code' => '64',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Pyrénées-Atlantiques',
                'id' => 246,
            ),
            246 => 
            array (
                'code' => '65',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Hautes-Pyrénées',
                'id' => 247,
            ),
            247 => 
            array (
                'code' => '66',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Pyrénées-Orientales',
                'id' => 248,
            ),
            248 => 
            array (
                'code' => '67',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Bas-Rhin',
                'id' => 249,
            ),
            249 => 
            array (
                'code' => '68',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Haut-Rhin',
                'id' => 250,
            ),
            250 => 
            array (
                'code' => '69',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Rhône',
                'id' => 251,
            ),
            251 => 
            array (
                'code' => '70',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Haute-Saône',
                'id' => 252,
            ),
            252 => 
            array (
                'code' => '71',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Saône-et-Loire',
                'id' => 253,
            ),
            253 => 
            array (
                'code' => '72',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Sarthe',
                'id' => 254,
            ),
            254 => 
            array (
                'code' => '73',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Savoie',
                'id' => 255,
            ),
            255 => 
            array (
                'code' => '74',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Haute-Savoie',
                'id' => 256,
            ),
            256 => 
            array (
                'code' => '75',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Paris',
                'id' => 257,
            ),
            257 => 
            array (
                'code' => '76',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Seine-Maritime',
                'id' => 258,
            ),
            258 => 
            array (
                'code' => '77',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Seine-et-Marne',
                'id' => 259,
            ),
            259 => 
            array (
                'code' => '78',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Yvelines',
                'id' => 260,
            ),
            260 => 
            array (
                'code' => '79',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Deux-Sèvres',
                'id' => 261,
            ),
            261 => 
            array (
                'code' => '80',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Somme',
                'id' => 262,
            ),
            262 => 
            array (
                'code' => '81',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Tarn',
                'id' => 263,
            ),
            263 => 
            array (
                'code' => '82',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Tarn-et-Garonne',
                'id' => 264,
            ),
            264 => 
            array (
                'code' => '83',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Var',
                'id' => 265,
            ),
            265 => 
            array (
                'code' => '84',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Vaucluse',
                'id' => 266,
            ),
            266 => 
            array (
                'code' => '85',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Vendée',
                'id' => 267,
            ),
            267 => 
            array (
                'code' => '86',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Vienne',
                'id' => 268,
            ),
            268 => 
            array (
                'code' => '87',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Haute-Vienne',
                'id' => 269,
            ),
            269 => 
            array (
                'code' => '88',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Vosges',
                'id' => 270,
            ),
            270 => 
            array (
                'code' => '89',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Yonne',
                'id' => 271,
            ),
            271 => 
            array (
                'code' => '90',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Territoire-de-Belfort',
                'id' => 272,
            ),
            272 => 
            array (
                'code' => '91',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Essonne',
                'id' => 273,
            ),
            273 => 
            array (
                'code' => '92',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Hauts-de-Seine',
                'id' => 274,
            ),
            274 => 
            array (
                'code' => '93',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Seine-Saint-Denis',
                'id' => 275,
            ),
            275 => 
            array (
                'code' => '94',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Val-de-Marne',
                'id' => 276,
            ),
            276 => 
            array (
                'code' => '95',
                'country_code' => 'FR',
                'country_id' => 81,
                'default_name' => 'Val-d\'Oise',
                'id' => 277,
            ),
            277 => 
            array (
                'code' => 'AB',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Alba',
                'id' => 278,
            ),
            278 => 
            array (
                'code' => 'AR',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Arad',
                'id' => 279,
            ),
            279 => 
            array (
                'code' => 'AG',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Argeş',
                'id' => 280,
            ),
            280 => 
            array (
                'code' => 'BC',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Bacău',
                'id' => 281,
            ),
            281 => 
            array (
                'code' => 'BH',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Bihor',
                'id' => 282,
            ),
            282 => 
            array (
                'code' => 'BN',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Bistriţa-Năsăud',
                'id' => 283,
            ),
            283 => 
            array (
                'code' => 'BT',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Botoşani',
                'id' => 284,
            ),
            284 => 
            array (
                'code' => 'BV',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Braşov',
                'id' => 285,
            ),
            285 => 
            array (
                'code' => 'BR',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Brăila',
                'id' => 286,
            ),
            286 => 
            array (
                'code' => 'B',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Bucureşti',
                'id' => 287,
            ),
            287 => 
            array (
                'code' => 'BZ',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Buzău',
                'id' => 288,
            ),
            288 => 
            array (
                'code' => 'CS',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Caraş-Severin',
                'id' => 289,
            ),
            289 => 
            array (
                'code' => 'CL',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Călăraşi',
                'id' => 290,
            ),
            290 => 
            array (
                'code' => 'CJ',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Cluj',
                'id' => 291,
            ),
            291 => 
            array (
                'code' => 'CT',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Constanţa',
                'id' => 292,
            ),
            292 => 
            array (
                'code' => 'CV',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Covasna',
                'id' => 293,
            ),
            293 => 
            array (
                'code' => 'DB',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Dâmboviţa',
                'id' => 294,
            ),
            294 => 
            array (
                'code' => 'DJ',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Dolj',
                'id' => 295,
            ),
            295 => 
            array (
                'code' => 'GL',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Galaţi',
                'id' => 296,
            ),
            296 => 
            array (
                'code' => 'GR',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Giurgiu',
                'id' => 297,
            ),
            297 => 
            array (
                'code' => 'GJ',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Gorj',
                'id' => 298,
            ),
            298 => 
            array (
                'code' => 'HR',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Harghita',
                'id' => 299,
            ),
            299 => 
            array (
                'code' => 'HD',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Hunedoara',
                'id' => 300,
            ),
            300 => 
            array (
                'code' => 'IL',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Ialomiţa',
                'id' => 301,
            ),
            301 => 
            array (
                'code' => 'IS',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Iaşi',
                'id' => 302,
            ),
            302 => 
            array (
                'code' => 'IF',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Ilfov',
                'id' => 303,
            ),
            303 => 
            array (
                'code' => 'MM',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Maramureş',
                'id' => 304,
            ),
            304 => 
            array (
                'code' => 'MH',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Mehedinţi',
                'id' => 305,
            ),
            305 => 
            array (
                'code' => 'MS',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Mureş',
                'id' => 306,
            ),
            306 => 
            array (
                'code' => 'NT',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Neamţ',
                'id' => 307,
            ),
            307 => 
            array (
                'code' => 'OT',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Olt',
                'id' => 308,
            ),
            308 => 
            array (
                'code' => 'PH',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Prahova',
                'id' => 309,
            ),
            309 => 
            array (
                'code' => 'SM',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Satu-Mare',
                'id' => 310,
            ),
            310 => 
            array (
                'code' => 'SJ',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Sălaj',
                'id' => 311,
            ),
            311 => 
            array (
                'code' => 'SB',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Sibiu',
                'id' => 312,
            ),
            312 => 
            array (
                'code' => 'SV',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Suceava',
                'id' => 313,
            ),
            313 => 
            array (
                'code' => 'TR',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Teleorman',
                'id' => 314,
            ),
            314 => 
            array (
                'code' => 'TM',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Timiş',
                'id' => 315,
            ),
            315 => 
            array (
                'code' => 'TL',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Tulcea',
                'id' => 316,
            ),
            316 => 
            array (
                'code' => 'VS',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Vaslui',
                'id' => 317,
            ),
            317 => 
            array (
                'code' => 'VL',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Vâlcea',
                'id' => 318,
            ),
            318 => 
            array (
                'code' => 'VN',
                'country_code' => 'RO',
                'country_id' => 185,
                'default_name' => 'Vrancea',
                'id' => 319,
            ),
            319 => 
            array (
                'code' => 'Lappi',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Lappi',
                'id' => 320,
            ),
            320 => 
            array (
                'code' => 'Pohjois-Pohjanmaa',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Pohjois-Pohjanmaa',
                'id' => 321,
            ),
            321 => 
            array (
                'code' => 'Kainuu',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Kainuu',
                'id' => 322,
            ),
            322 => 
            array (
                'code' => 'Pohjois-Karjala',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Pohjois-Karjala',
                'id' => 323,
            ),
            323 => 
            array (
                'code' => 'Pohjois-Savo',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Pohjois-Savo',
                'id' => 324,
            ),
            324 => 
            array (
                'code' => 'Etelä-Savo',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Etelä-Savo',
                'id' => 325,
            ),
            325 => 
            array (
                'code' => 'Etelä-Pohjanmaa',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Etelä-Pohjanmaa',
                'id' => 326,
            ),
            326 => 
            array (
                'code' => 'Pohjanmaa',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Pohjanmaa',
                'id' => 327,
            ),
            327 => 
            array (
                'code' => 'Pirkanmaa',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Pirkanmaa',
                'id' => 328,
            ),
            328 => 
            array (
                'code' => 'Satakunta',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Satakunta',
                'id' => 329,
            ),
            329 => 
            array (
                'code' => 'Keski-Pohjanmaa',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Keski-Pohjanmaa',
                'id' => 330,
            ),
            330 => 
            array (
                'code' => 'Keski-Suomi',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Keski-Suomi',
                'id' => 331,
            ),
            331 => 
            array (
                'code' => 'Varsinais-Suomi',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Varsinais-Suomi',
                'id' => 332,
            ),
            332 => 
            array (
                'code' => 'Etelä-Karjala',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Etelä-Karjala',
                'id' => 333,
            ),
            333 => 
            array (
                'code' => 'Päijät-Häme',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Päijät-Häme',
                'id' => 334,
            ),
            334 => 
            array (
                'code' => 'Kanta-Häme',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Kanta-Häme',
                'id' => 335,
            ),
            335 => 
            array (
                'code' => 'Uusimaa',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Uusimaa',
                'id' => 336,
            ),
            336 => 
            array (
                'code' => 'Itä-Uusimaa',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Itä-Uusimaa',
                'id' => 337,
            ),
            337 => 
            array (
                'code' => 'Kymenlaakso',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Kymenlaakso',
                'id' => 338,
            ),
            338 => 
            array (
                'code' => 'Ahvenanmaa',
                'country_code' => 'FI',
                'country_id' => 80,
                'default_name' => 'Ahvenanmaa',
                'id' => 339,
            ),
            339 => 
            array (
                'code' => 'EE-37',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Harjumaa',
                'id' => 340,
            ),
            340 => 
            array (
                'code' => 'EE-39',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Hiiumaa',
                'id' => 341,
            ),
            341 => 
            array (
                'code' => 'EE-44',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Ida-Virumaa',
                'id' => 342,
            ),
            342 => 
            array (
                'code' => 'EE-49',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Jõgevamaa',
                'id' => 343,
            ),
            343 => 
            array (
                'code' => 'EE-51',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Järvamaa',
                'id' => 344,
            ),
            344 => 
            array (
                'code' => 'EE-57',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Läänemaa',
                'id' => 345,
            ),
            345 => 
            array (
                'code' => 'EE-59',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Lääne-Virumaa',
                'id' => 346,
            ),
            346 => 
            array (
                'code' => 'EE-65',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Põlvamaa',
                'id' => 347,
            ),
            347 => 
            array (
                'code' => 'EE-67',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Pärnumaa',
                'id' => 348,
            ),
            348 => 
            array (
                'code' => 'EE-70',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Raplamaa',
                'id' => 349,
            ),
            349 => 
            array (
                'code' => 'EE-74',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Saaremaa',
                'id' => 350,
            ),
            350 => 
            array (
                'code' => 'EE-78',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Tartumaa',
                'id' => 351,
            ),
            351 => 
            array (
                'code' => 'EE-82',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Valgamaa',
                'id' => 352,
            ),
            352 => 
            array (
                'code' => 'EE-84',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Viljandimaa',
                'id' => 353,
            ),
            353 => 
            array (
                'code' => 'EE-86',
                'country_code' => 'EE',
                'country_id' => 74,
                'default_name' => 'Võrumaa',
                'id' => 354,
            ),
            354 => 
            array (
                'code' => 'LV-DGV',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Daugavpils',
                'id' => 355,
            ),
            355 => 
            array (
                'code' => 'LV-JEL',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Jelgava',
                'id' => 356,
            ),
            356 => 
            array (
                'code' => 'Jēkabpils',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Jēkabpils',
                'id' => 357,
            ),
            357 => 
            array (
                'code' => 'LV-JUR',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Jūrmala',
                'id' => 358,
            ),
            358 => 
            array (
                'code' => 'LV-LPX',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Liepāja',
                'id' => 359,
            ),
            359 => 
            array (
                'code' => 'LV-LE',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Liepājas novads',
                'id' => 360,
            ),
            360 => 
            array (
                'code' => 'LV-REZ',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rēzekne',
                'id' => 361,
            ),
            361 => 
            array (
                'code' => 'LV-RIX',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rīga',
                'id' => 362,
            ),
            362 => 
            array (
                'code' => 'LV-RI',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rīgas novads',
                'id' => 363,
            ),
            363 => 
            array (
                'code' => 'Valmiera',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Valmiera',
                'id' => 364,
            ),
            364 => 
            array (
                'code' => 'LV-VEN',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ventspils',
                'id' => 365,
            ),
            365 => 
            array (
                'code' => 'Aglonas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Aglonas novads',
                'id' => 366,
            ),
            366 => 
            array (
                'code' => 'LV-AI',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Aizkraukles novads',
                'id' => 367,
            ),
            367 => 
            array (
                'code' => 'Aizputes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Aizputes novads',
                'id' => 368,
            ),
            368 => 
            array (
                'code' => 'Aknīstes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Aknīstes novads',
                'id' => 369,
            ),
            369 => 
            array (
                'code' => 'Alojas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Alojas novads',
                'id' => 370,
            ),
            370 => 
            array (
                'code' => 'Alsungas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Alsungas novads',
                'id' => 371,
            ),
            371 => 
            array (
                'code' => 'LV-AL',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Alūksnes novads',
                'id' => 372,
            ),
            372 => 
            array (
                'code' => 'Amatas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Amatas novads',
                'id' => 373,
            ),
            373 => 
            array (
                'code' => 'Apes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Apes novads',
                'id' => 374,
            ),
            374 => 
            array (
                'code' => 'Auces novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Auces novads',
                'id' => 375,
            ),
            375 => 
            array (
                'code' => 'Babītes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Babītes novads',
                'id' => 376,
            ),
            376 => 
            array (
                'code' => 'Baldones novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Baldones novads',
                'id' => 377,
            ),
            377 => 
            array (
                'code' => 'Baltinavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Baltinavas novads',
                'id' => 378,
            ),
            378 => 
            array (
                'code' => 'LV-BL',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Balvu novads',
                'id' => 379,
            ),
            379 => 
            array (
                'code' => 'LV-BU',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Bauskas novads',
                'id' => 380,
            ),
            380 => 
            array (
                'code' => 'Beverīnas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Beverīnas novads',
                'id' => 381,
            ),
            381 => 
            array (
                'code' => 'Brocēnu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Brocēnu novads',
                'id' => 382,
            ),
            382 => 
            array (
                'code' => 'Burtnieku novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Burtnieku novads',
                'id' => 383,
            ),
            383 => 
            array (
                'code' => 'Carnikavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Carnikavas novads',
                'id' => 384,
            ),
            384 => 
            array (
                'code' => 'Cesvaines novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Cesvaines novads',
                'id' => 385,
            ),
            385 => 
            array (
                'code' => 'Ciblas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ciblas novads',
                'id' => 386,
            ),
            386 => 
            array (
                'code' => 'LV-CE',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Cēsu novads',
                'id' => 387,
            ),
            387 => 
            array (
                'code' => 'Dagdas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Dagdas novads',
                'id' => 388,
            ),
            388 => 
            array (
                'code' => 'LV-DA',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Daugavpils novads',
                'id' => 389,
            ),
            389 => 
            array (
                'code' => 'LV-DO',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Dobeles novads',
                'id' => 390,
            ),
            390 => 
            array (
                'code' => 'Dundagas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Dundagas novads',
                'id' => 391,
            ),
            391 => 
            array (
                'code' => 'Durbes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Durbes novads',
                'id' => 392,
            ),
            392 => 
            array (
                'code' => 'Engures novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Engures novads',
                'id' => 393,
            ),
            393 => 
            array (
                'code' => 'Garkalnes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Garkalnes novads',
                'id' => 394,
            ),
            394 => 
            array (
                'code' => 'Grobiņas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Grobiņas novads',
                'id' => 395,
            ),
            395 => 
            array (
                'code' => 'LV-GU',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Gulbenes novads',
                'id' => 396,
            ),
            396 => 
            array (
                'code' => 'Iecavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Iecavas novads',
                'id' => 397,
            ),
            397 => 
            array (
                'code' => 'Ikšķiles novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ikšķiles novads',
                'id' => 398,
            ),
            398 => 
            array (
                'code' => 'Ilūkstes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ilūkstes novads',
                'id' => 399,
            ),
            399 => 
            array (
                'code' => 'Inčukalna novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Inčukalna novads',
                'id' => 400,
            ),
            400 => 
            array (
                'code' => 'Jaunjelgavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Jaunjelgavas novads',
                'id' => 401,
            ),
            401 => 
            array (
                'code' => 'Jaunpiebalgas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Jaunpiebalgas novads',
                'id' => 402,
            ),
            402 => 
            array (
                'code' => 'Jaunpils novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Jaunpils novads',
                'id' => 403,
            ),
            403 => 
            array (
                'code' => 'LV-JL',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Jelgavas novads',
                'id' => 404,
            ),
            404 => 
            array (
                'code' => 'LV-JK',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Jēkabpils novads',
                'id' => 405,
            ),
            405 => 
            array (
                'code' => 'Kandavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Kandavas novads',
                'id' => 406,
            ),
            406 => 
            array (
                'code' => 'Kokneses novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Kokneses novads',
                'id' => 407,
            ),
            407 => 
            array (
                'code' => 'Krimuldas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Krimuldas novads',
                'id' => 408,
            ),
            408 => 
            array (
                'code' => 'Krustpils novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Krustpils novads',
                'id' => 409,
            ),
            409 => 
            array (
                'code' => 'LV-KR',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Krāslavas novads',
                'id' => 410,
            ),
            410 => 
            array (
                'code' => 'LV-KU',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Kuldīgas novads',
                'id' => 411,
            ),
            411 => 
            array (
                'code' => 'Kārsavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Kārsavas novads',
                'id' => 412,
            ),
            412 => 
            array (
                'code' => 'Lielvārdes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Lielvārdes novads',
                'id' => 413,
            ),
            413 => 
            array (
                'code' => 'LV-LM',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Limbažu novads',
                'id' => 414,
            ),
            414 => 
            array (
                'code' => 'Lubānas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Lubānas novads',
                'id' => 415,
            ),
            415 => 
            array (
                'code' => 'LV-LU',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ludzas novads',
                'id' => 416,
            ),
            416 => 
            array (
                'code' => 'Līgatnes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Līgatnes novads',
                'id' => 417,
            ),
            417 => 
            array (
                'code' => 'Līvānu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Līvānu novads',
                'id' => 418,
            ),
            418 => 
            array (
                'code' => 'LV-MA',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Madonas novads',
                'id' => 419,
            ),
            419 => 
            array (
                'code' => 'Mazsalacas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Mazsalacas novads',
                'id' => 420,
            ),
            420 => 
            array (
                'code' => 'Mālpils novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Mālpils novads',
                'id' => 421,
            ),
            421 => 
            array (
                'code' => 'Mārupes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Mārupes novads',
                'id' => 422,
            ),
            422 => 
            array (
                'code' => 'Naukšēnu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Naukšēnu novads',
                'id' => 423,
            ),
            423 => 
            array (
                'code' => 'Neretas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Neretas novads',
                'id' => 424,
            ),
            424 => 
            array (
                'code' => 'Nīcas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Nīcas novads',
                'id' => 425,
            ),
            425 => 
            array (
                'code' => 'LV-OG',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ogres novads',
                'id' => 426,
            ),
            426 => 
            array (
                'code' => 'Olaines novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Olaines novads',
                'id' => 427,
            ),
            427 => 
            array (
                'code' => 'Ozolnieku novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ozolnieku novads',
                'id' => 428,
            ),
            428 => 
            array (
                'code' => 'LV-PR',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Preiļu novads',
                'id' => 429,
            ),
            429 => 
            array (
                'code' => 'Priekules novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Priekules novads',
                'id' => 430,
            ),
            430 => 
            array (
                'code' => 'Priekuļu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Priekuļu novads',
                'id' => 431,
            ),
            431 => 
            array (
                'code' => 'Pārgaujas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Pārgaujas novads',
                'id' => 432,
            ),
            432 => 
            array (
                'code' => 'Pāvilostas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Pāvilostas novads',
                'id' => 433,
            ),
            433 => 
            array (
                'code' => 'Pļaviņu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Pļaviņu novads',
                'id' => 434,
            ),
            434 => 
            array (
                'code' => 'Raunas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Raunas novads',
                'id' => 435,
            ),
            435 => 
            array (
                'code' => 'Riebiņu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Riebiņu novads',
                'id' => 436,
            ),
            436 => 
            array (
                'code' => 'Rojas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rojas novads',
                'id' => 437,
            ),
            437 => 
            array (
                'code' => 'Ropažu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ropažu novads',
                'id' => 438,
            ),
            438 => 
            array (
                'code' => 'Rucavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rucavas novads',
                'id' => 439,
            ),
            439 => 
            array (
                'code' => 'Rugāju novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rugāju novads',
                'id' => 440,
            ),
            440 => 
            array (
                'code' => 'Rundāles novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rundāles novads',
                'id' => 441,
            ),
            441 => 
            array (
                'code' => 'LV-RE',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rēzeknes novads',
                'id' => 442,
            ),
            442 => 
            array (
                'code' => 'Rūjienas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Rūjienas novads',
                'id' => 443,
            ),
            443 => 
            array (
                'code' => 'Salacgrīvas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Salacgrīvas novads',
                'id' => 444,
            ),
            444 => 
            array (
                'code' => 'Salas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Salas novads',
                'id' => 445,
            ),
            445 => 
            array (
                'code' => 'Salaspils novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Salaspils novads',
                'id' => 446,
            ),
            446 => 
            array (
                'code' => 'LV-SA',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Saldus novads',
                'id' => 447,
            ),
            447 => 
            array (
                'code' => 'Saulkrastu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Saulkrastu novads',
                'id' => 448,
            ),
            448 => 
            array (
                'code' => 'Siguldas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Siguldas novads',
                'id' => 449,
            ),
            449 => 
            array (
                'code' => 'Skrundas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Skrundas novads',
                'id' => 450,
            ),
            450 => 
            array (
                'code' => 'Skrīveru novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Skrīveru novads',
                'id' => 451,
            ),
            451 => 
            array (
                'code' => 'Smiltenes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Smiltenes novads',
                'id' => 452,
            ),
            452 => 
            array (
                'code' => 'Stopiņu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Stopiņu novads',
                'id' => 453,
            ),
            453 => 
            array (
                'code' => 'Strenču novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Strenču novads',
                'id' => 454,
            ),
            454 => 
            array (
                'code' => 'Sējas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Sējas novads',
                'id' => 455,
            ),
            455 => 
            array (
                'code' => 'LV-TA',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Talsu novads',
                'id' => 456,
            ),
            456 => 
            array (
                'code' => 'LV-TU',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Tukuma novads',
                'id' => 457,
            ),
            457 => 
            array (
                'code' => 'Tērvetes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Tērvetes novads',
                'id' => 458,
            ),
            458 => 
            array (
                'code' => 'Vaiņodes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Vaiņodes novads',
                'id' => 459,
            ),
            459 => 
            array (
                'code' => 'LV-VK',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Valkas novads',
                'id' => 460,
            ),
            460 => 
            array (
                'code' => 'LV-VM',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Valmieras novads',
                'id' => 461,
            ),
            461 => 
            array (
                'code' => 'Varakļānu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Varakļānu novads',
                'id' => 462,
            ),
            462 => 
            array (
                'code' => 'Vecpiebalgas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Vecpiebalgas novads',
                'id' => 463,
            ),
            463 => 
            array (
                'code' => 'Vecumnieku novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Vecumnieku novads',
                'id' => 464,
            ),
            464 => 
            array (
                'code' => 'LV-VE',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ventspils novads',
                'id' => 465,
            ),
            465 => 
            array (
                'code' => 'Viesītes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Viesītes novads',
                'id' => 466,
            ),
            466 => 
            array (
                'code' => 'Viļakas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Viļakas novads',
                'id' => 467,
            ),
            467 => 
            array (
                'code' => 'Viļānu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Viļānu novads',
                'id' => 468,
            ),
            468 => 
            array (
                'code' => 'Vārkavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Vārkavas novads',
                'id' => 469,
            ),
            469 => 
            array (
                'code' => 'Zilupes novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Zilupes novads',
                'id' => 470,
            ),
            470 => 
            array (
                'code' => 'Ādažu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ādažu novads',
                'id' => 471,
            ),
            471 => 
            array (
                'code' => 'Ērgļu novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ērgļu novads',
                'id' => 472,
            ),
            472 => 
            array (
                'code' => 'Ķeguma novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ķeguma novads',
                'id' => 473,
            ),
            473 => 
            array (
                'code' => 'Ķekavas novads',
                'country_code' => 'LV',
                'country_id' => 125,
                'default_name' => 'Ķekavas novads',
                'id' => 474,
            ),
            474 => 
            array (
                'code' => 'LT-AL',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Alytaus Apskritis',
                'id' => 475,
            ),
            475 => 
            array (
                'code' => 'LT-KU',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Kauno Apskritis',
                'id' => 476,
            ),
            476 => 
            array (
                'code' => 'LT-KL',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Klaipėdos Apskritis',
                'id' => 477,
            ),
            477 => 
            array (
                'code' => 'LT-MR',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Marijampolės Apskritis',
                'id' => 478,
            ),
            478 => 
            array (
                'code' => 'LT-PN',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Panevėžio Apskritis',
                'id' => 479,
            ),
            479 => 
            array (
                'code' => 'LT-SA',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Šiaulių Apskritis',
                'id' => 480,
            ),
            480 => 
            array (
                'code' => 'LT-TA',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Tauragės Apskritis',
                'id' => 481,
            ),
            481 => 
            array (
                'code' => 'LT-TE',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Telšių Apskritis',
                'id' => 482,
            ),
            482 => 
            array (
                'code' => 'LT-UT',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Utenos Apskritis',
                'id' => 483,
            ),
            483 => 
            array (
                'code' => 'LT-VL',
                'country_code' => 'LT',
                'country_id' => 131,
                'default_name' => 'Vilniaus Apskritis',
                'id' => 484,
            ),
            484 => 
            array (
                'code' => 'AC',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Acre',
                'id' => 485,
            ),
            485 => 
            array (
                'code' => 'AL',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Alagoas',
                'id' => 486,
            ),
            486 => 
            array (
                'code' => 'AP',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Amapá',
                'id' => 487,
            ),
            487 => 
            array (
                'code' => 'AM',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Amazonas',
                'id' => 488,
            ),
            488 => 
            array (
                'code' => 'BA',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Bahia',
                'id' => 489,
            ),
            489 => 
            array (
                'code' => 'CE',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Ceará',
                'id' => 490,
            ),
            490 => 
            array (
                'code' => 'ES',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Espírito Santo',
                'id' => 491,
            ),
            491 => 
            array (
                'code' => 'GO',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Goiás',
                'id' => 492,
            ),
            492 => 
            array (
                'code' => 'MA',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Maranhão',
                'id' => 493,
            ),
            493 => 
            array (
                'code' => 'MT',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Mato Grosso',
                'id' => 494,
            ),
            494 => 
            array (
                'code' => 'MS',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Mato Grosso do Sul',
                'id' => 495,
            ),
            495 => 
            array (
                'code' => 'MG',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Minas Gerais',
                'id' => 496,
            ),
            496 => 
            array (
                'code' => 'PA',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Pará',
                'id' => 497,
            ),
            497 => 
            array (
                'code' => 'PB',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Paraíba',
                'id' => 498,
            ),
            498 => 
            array (
                'code' => 'PR',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Paraná',
                'id' => 499,
            ),
            499 => 
            array (
                'code' => 'PE',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Pernambuco',
                'id' => 500,
            ),
        ));
        \DB::table('country_states')->insert(array (
            0 => 
            array (
                'code' => 'PI',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Piauí',
                'id' => 501,
            ),
            1 => 
            array (
                'code' => 'RJ',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Rio de Janeiro',
                'id' => 502,
            ),
            2 => 
            array (
                'code' => 'RN',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Rio Grande do Norte',
                'id' => 503,
            ),
            3 => 
            array (
                'code' => 'RS',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Rio Grande do Sul',
                'id' => 504,
            ),
            4 => 
            array (
                'code' => 'RO',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Rondônia',
                'id' => 505,
            ),
            5 => 
            array (
                'code' => 'RR',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Roraima',
                'id' => 506,
            ),
            6 => 
            array (
                'code' => 'SC',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Santa Catarina',
                'id' => 507,
            ),
            7 => 
            array (
                'code' => 'SP',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'São Paulo',
                'id' => 508,
            ),
            8 => 
            array (
                'code' => 'SE',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Sergipe',
                'id' => 509,
            ),
            9 => 
            array (
                'code' => 'TO',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Tocantins',
                'id' => 510,
            ),
            10 => 
            array (
                'code' => 'DF',
                'country_code' => 'BR',
                'country_id' => 31,
                'default_name' => 'Distrito Federal',
                'id' => 511,
            ),
            11 => 
            array (
                'code' => 'HR-01',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Zagrebačka županija',
                'id' => 512,
            ),
            12 => 
            array (
                'code' => 'HR-02',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Krapinsko-zagorska županija',
                'id' => 513,
            ),
            13 => 
            array (
                'code' => 'HR-03',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Sisačko-moslavačka županija',
                'id' => 514,
            ),
            14 => 
            array (
                'code' => 'HR-04',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Karlovačka županija',
                'id' => 515,
            ),
            15 => 
            array (
                'code' => 'HR-05',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Varaždinska županija',
                'id' => 516,
            ),
            16 => 
            array (
                'code' => 'HR-06',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Koprivničko-križevačka županija',
                'id' => 517,
            ),
            17 => 
            array (
                'code' => 'HR-07',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Bjelovarsko-bilogorska županija',
                'id' => 518,
            ),
            18 => 
            array (
                'code' => 'HR-08',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Primorsko-goranska županija',
                'id' => 519,
            ),
            19 => 
            array (
                'code' => 'HR-09',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Ličko-senjska županija',
                'id' => 520,
            ),
            20 => 
            array (
                'code' => 'HR-10',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Virovitičko-podravska županija',
                'id' => 521,
            ),
            21 => 
            array (
                'code' => 'HR-11',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Požeško-slavonska županija',
                'id' => 522,
            ),
            22 => 
            array (
                'code' => 'HR-12',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Brodsko-posavska županija',
                'id' => 523,
            ),
            23 => 
            array (
                'code' => 'HR-13',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Zadarska županija',
                'id' => 524,
            ),
            24 => 
            array (
                'code' => 'HR-14',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Osječko-baranjska županija',
                'id' => 525,
            ),
            25 => 
            array (
                'code' => 'HR-15',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Šibensko-kninska županija',
                'id' => 526,
            ),
            26 => 
            array (
                'code' => 'HR-16',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Vukovarsko-srijemska županija',
                'id' => 527,
            ),
            27 => 
            array (
                'code' => 'HR-17',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Splitsko-dalmatinska županija',
                'id' => 528,
            ),
            28 => 
            array (
                'code' => 'HR-18',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Istarska županija',
                'id' => 529,
            ),
            29 => 
            array (
                'code' => 'HR-19',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Dubrovačko-neretvanska županija',
                'id' => 530,
            ),
            30 => 
            array (
                'code' => 'HR-20',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Međimurska županija',
                'id' => 531,
            ),
            31 => 
            array (
                'code' => 'HR-21',
                'country_code' => 'HR',
                'country_id' => 59,
                'default_name' => 'Grad Zagreb',
                'id' => 532,
            ),
            32 => 
            array (
                'code' => 'AN',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Andaman and Nicobar Islands',
                'id' => 533,
            ),
            33 => 
            array (
                'code' => 'AP',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Andhra Pradesh',
                'id' => 534,
            ),
            34 => 
            array (
                'code' => 'AR',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Arunachal Pradesh',
                'id' => 535,
            ),
            35 => 
            array (
                'code' => 'AS',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Assam',
                'id' => 536,
            ),
            36 => 
            array (
                'code' => 'BR',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Bihar',
                'id' => 537,
            ),
            37 => 
            array (
                'code' => 'CH',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Chandigarh',
                'id' => 538,
            ),
            38 => 
            array (
                'code' => 'CT',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Chhattisgarh',
                'id' => 539,
            ),
            39 => 
            array (
                'code' => 'DN',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Dadra and Nagar Haveli',
                'id' => 540,
            ),
            40 => 
            array (
                'code' => 'DD',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Daman and Diu',
                'id' => 541,
            ),
            41 => 
            array (
                'code' => 'DL',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Delhi',
                'id' => 542,
            ),
            42 => 
            array (
                'code' => 'GA',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Goa',
                'id' => 543,
            ),
            43 => 
            array (
                'code' => 'GJ',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Gujarat',
                'id' => 544,
            ),
            44 => 
            array (
                'code' => 'HR',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Haryana',
                'id' => 545,
            ),
            45 => 
            array (
                'code' => 'HP',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Himachal Pradesh',
                'id' => 546,
            ),
            46 => 
            array (
                'code' => 'JK',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Jammu and Kashmir',
                'id' => 547,
            ),
            47 => 
            array (
                'code' => 'JH',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Jharkhand',
                'id' => 548,
            ),
            48 => 
            array (
                'code' => 'KA',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Karnataka',
                'id' => 549,
            ),
            49 => 
            array (
                'code' => 'KL',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Kerala',
                'id' => 550,
            ),
            50 => 
            array (
                'code' => 'LD',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Lakshadweep',
                'id' => 551,
            ),
            51 => 
            array (
                'code' => 'MP',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Madhya Pradesh',
                'id' => 552,
            ),
            52 => 
            array (
                'code' => 'MH',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Maharashtra',
                'id' => 553,
            ),
            53 => 
            array (
                'code' => 'MN',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Manipur',
                'id' => 554,
            ),
            54 => 
            array (
                'code' => 'ML',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Meghalaya',
                'id' => 555,
            ),
            55 => 
            array (
                'code' => 'MZ',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Mizoram',
                'id' => 556,
            ),
            56 => 
            array (
                'code' => 'NL',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Nagaland',
                'id' => 557,
            ),
            57 => 
            array (
                'code' => 'OR',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Odisha',
                'id' => 558,
            ),
            58 => 
            array (
                'code' => 'PY',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Puducherry',
                'id' => 559,
            ),
            59 => 
            array (
                'code' => 'PB',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Punjab',
                'id' => 560,
            ),
            60 => 
            array (
                'code' => 'RJ',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Rajasthan',
                'id' => 561,
            ),
            61 => 
            array (
                'code' => 'SK',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Sikkim',
                'id' => 562,
            ),
            62 => 
            array (
                'code' => 'TN',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Tamil Nadu',
                'id' => 563,
            ),
            63 => 
            array (
                'code' => 'TG',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Telangana',
                'id' => 564,
            ),
            64 => 
            array (
                'code' => 'TR',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Tripura',
                'id' => 565,
            ),
            65 => 
            array (
                'code' => 'UP',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Uttar Pradesh',
                'id' => 566,
            ),
            66 => 
            array (
                'code' => 'UT',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'Uttarakhand',
                'id' => 567,
            ),
            67 => 
            array (
                'code' => 'WB',
                'country_code' => 'IN',
                'country_id' => 106,
                'default_name' => 'West Bengal',
                'id' => 568,
            ),
            68 => 
            array (
                'code' => 'PY-16',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Alto Paraguay',
                'id' => 569,
            ),
            69 => 
            array (
                'code' => 'PY-10',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Alto Paraná',
                'id' => 570,
            ),
            70 => 
            array (
                'code' => 'PY-13',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Amambay',
                'id' => 571,
            ),
            71 => 
            array (
                'code' => 'PY-ASU',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Asunción',
                'id' => 572,
            ),
            72 => 
            array (
                'code' => 'PY-19',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Boquerón',
                'id' => 573,
            ),
            73 => 
            array (
                'code' => 'PY-5',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Caaguazú',
                'id' => 574,
            ),
            74 => 
            array (
                'code' => 'PY-6',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Caazapá',
                'id' => 575,
            ),
            75 => 
            array (
                'code' => 'PY-14',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Canindeyú',
                'id' => 576,
            ),
            76 => 
            array (
                'code' => 'PY-11',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Central',
                'id' => 577,
            ),
            77 => 
            array (
                'code' => 'PY-1',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Concepción',
                'id' => 578,
            ),
            78 => 
            array (
                'code' => 'PY-3',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Cordillera',
                'id' => 579,
            ),
            79 => 
            array (
                'code' => 'PY-4',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Guairá',
                'id' => 580,
            ),
            80 => 
            array (
                'code' => 'PY-7',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Itapúa',
                'id' => 581,
            ),
            81 => 
            array (
                'code' => 'PY-8',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Misiones',
                'id' => 582,
            ),
            82 => 
            array (
                'code' => 'PY-9',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Paraguarí',
                'id' => 583,
            ),
            83 => 
            array (
                'code' => 'PY-15',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Presidente Hayes',
                'id' => 584,
            ),
            84 => 
            array (
                'code' => 'PY-2',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'San Pedro',
                'id' => 585,
            ),
            85 => 
            array (
                'code' => 'PY-12',
                'country_code' => 'PY',
                'country_id' => 176,
                'default_name' => 'Ñeembucú',
                'id' => 586,
            ),
        ));
        
        
    }
}