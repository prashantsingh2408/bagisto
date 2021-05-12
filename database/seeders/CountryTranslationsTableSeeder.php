<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country_translations')->delete();
        
        \DB::table('country_translations')->insert(array (
            0 => 
            array (
                'country_id' => 1,
                'id' => 1,
                'locale' => 'ar',
                'name' => 'أفغانستان',
            ),
            1 => 
            array (
                'country_id' => 2,
                'id' => 2,
                'locale' => 'ar',
                'name' => 'جزر آلاند',
            ),
            2 => 
            array (
                'country_id' => 3,
                'id' => 3,
                'locale' => 'ar',
                'name' => 'ألبانيا',
            ),
            3 => 
            array (
                'country_id' => 4,
                'id' => 4,
                'locale' => 'ar',
                'name' => 'الجزائر',
            ),
            4 => 
            array (
                'country_id' => 5,
                'id' => 5,
                'locale' => 'ar',
                'name' => 'ساموا الأمريكية',
            ),
            5 => 
            array (
                'country_id' => 6,
                'id' => 6,
                'locale' => 'ar',
                'name' => 'أندورا',
            ),
            6 => 
            array (
                'country_id' => 7,
                'id' => 7,
                'locale' => 'ar',
                'name' => 'أنغولا',
            ),
            7 => 
            array (
                'country_id' => 8,
                'id' => 8,
                'locale' => 'ar',
                'name' => 'أنغيلا',
            ),
            8 => 
            array (
                'country_id' => 9,
                'id' => 9,
                'locale' => 'ar',
                'name' => 'القارة القطبية الجنوبية',
            ),
            9 => 
            array (
                'country_id' => 10,
                'id' => 10,
                'locale' => 'ar',
                'name' => 'أنتيغوا وبربودا',
            ),
            10 => 
            array (
                'country_id' => 11,
                'id' => 11,
                'locale' => 'ar',
                'name' => 'الأرجنتين',
            ),
            11 => 
            array (
                'country_id' => 12,
                'id' => 12,
                'locale' => 'ar',
                'name' => 'أرمينيا',
            ),
            12 => 
            array (
                'country_id' => 13,
                'id' => 13,
                'locale' => 'ar',
                'name' => 'أروبا',
            ),
            13 => 
            array (
                'country_id' => 14,
                'id' => 14,
                'locale' => 'ar',
                'name' => 'جزيرة الصعود',
            ),
            14 => 
            array (
                'country_id' => 15,
                'id' => 15,
                'locale' => 'ar',
                'name' => 'أستراليا',
            ),
            15 => 
            array (
                'country_id' => 16,
                'id' => 16,
                'locale' => 'ar',
                'name' => 'النمسا',
            ),
            16 => 
            array (
                'country_id' => 17,
                'id' => 17,
                'locale' => 'ar',
                'name' => 'أذربيجان',
            ),
            17 => 
            array (
                'country_id' => 18,
                'id' => 18,
                'locale' => 'ar',
                'name' => 'الباهاما',
            ),
            18 => 
            array (
                'country_id' => 19,
                'id' => 19,
                'locale' => 'ar',
                'name' => 'البحرين',
            ),
            19 => 
            array (
                'country_id' => 20,
                'id' => 20,
                'locale' => 'ar',
                'name' => 'بنغلاديش',
            ),
            20 => 
            array (
                'country_id' => 21,
                'id' => 21,
                'locale' => 'ar',
                'name' => 'بربادوس',
            ),
            21 => 
            array (
                'country_id' => 22,
                'id' => 22,
                'locale' => 'ar',
                'name' => 'روسيا البيضاء',
            ),
            22 => 
            array (
                'country_id' => 23,
                'id' => 23,
                'locale' => 'ar',
                'name' => 'بلجيكا',
            ),
            23 => 
            array (
                'country_id' => 24,
                'id' => 24,
                'locale' => 'ar',
                'name' => 'بليز',
            ),
            24 => 
            array (
                'country_id' => 25,
                'id' => 25,
                'locale' => 'ar',
                'name' => 'بنين',
            ),
            25 => 
            array (
                'country_id' => 26,
                'id' => 26,
                'locale' => 'ar',
                'name' => 'برمودا',
            ),
            26 => 
            array (
                'country_id' => 27,
                'id' => 27,
                'locale' => 'ar',
                'name' => 'بوتان',
            ),
            27 => 
            array (
                'country_id' => 28,
                'id' => 28,
                'locale' => 'ar',
                'name' => 'بوليفيا',
            ),
            28 => 
            array (
                'country_id' => 29,
                'id' => 29,
                'locale' => 'ar',
                'name' => 'البوسنة والهرسك',
            ),
            29 => 
            array (
                'country_id' => 30,
                'id' => 30,
                'locale' => 'ar',
                'name' => 'بوتسوانا',
            ),
            30 => 
            array (
                'country_id' => 31,
                'id' => 31,
                'locale' => 'ar',
                'name' => 'البرازيل',
            ),
            31 => 
            array (
                'country_id' => 32,
                'id' => 32,
                'locale' => 'ar',
                'name' => 'إقليم المحيط البريطاني الهندي',
            ),
            32 => 
            array (
                'country_id' => 33,
                'id' => 33,
                'locale' => 'ar',
                'name' => 'جزر فيرجن البريطانية',
            ),
            33 => 
            array (
                'country_id' => 34,
                'id' => 34,
                'locale' => 'ar',
                'name' => 'بروناي',
            ),
            34 => 
            array (
                'country_id' => 35,
                'id' => 35,
                'locale' => 'ar',
                'name' => 'بلغاريا',
            ),
            35 => 
            array (
                'country_id' => 36,
                'id' => 36,
                'locale' => 'ar',
                'name' => 'بوركينا فاسو',
            ),
            36 => 
            array (
                'country_id' => 37,
                'id' => 37,
                'locale' => 'ar',
                'name' => 'بوروندي',
            ),
            37 => 
            array (
                'country_id' => 38,
                'id' => 38,
                'locale' => 'ar',
                'name' => 'كمبوديا',
            ),
            38 => 
            array (
                'country_id' => 39,
                'id' => 39,
                'locale' => 'ar',
                'name' => 'الكاميرون',
            ),
            39 => 
            array (
                'country_id' => 40,
                'id' => 40,
                'locale' => 'ar',
                'name' => 'كندا',
            ),
            40 => 
            array (
                'country_id' => 41,
                'id' => 41,
                'locale' => 'ar',
                'name' => 'جزر الكناري',
            ),
            41 => 
            array (
                'country_id' => 42,
                'id' => 42,
                'locale' => 'ar',
                'name' => 'الرأس الأخضر',
            ),
            42 => 
            array (
                'country_id' => 43,
                'id' => 43,
                'locale' => 'ar',
                'name' => 'الكاريبي هولندا',
            ),
            43 => 
            array (
                'country_id' => 44,
                'id' => 44,
                'locale' => 'ar',
                'name' => 'جزر كايمان',
            ),
            44 => 
            array (
                'country_id' => 45,
                'id' => 45,
                'locale' => 'ar',
                'name' => 'جمهورية افريقيا الوسطى',
            ),
            45 => 
            array (
                'country_id' => 46,
                'id' => 46,
                'locale' => 'ar',
                'name' => 'سبتة ومليلية',
            ),
            46 => 
            array (
                'country_id' => 47,
                'id' => 47,
                'locale' => 'ar',
                'name' => 'تشاد',
            ),
            47 => 
            array (
                'country_id' => 48,
                'id' => 48,
                'locale' => 'ar',
                'name' => 'تشيلي',
            ),
            48 => 
            array (
                'country_id' => 49,
                'id' => 49,
                'locale' => 'ar',
                'name' => 'الصين',
            ),
            49 => 
            array (
                'country_id' => 50,
                'id' => 50,
                'locale' => 'ar',
                'name' => 'جزيرة الكريسماس',
            ),
            50 => 
            array (
                'country_id' => 51,
                'id' => 51,
                'locale' => 'ar',
            'name' => 'جزر كوكوس (كيلينغ)',
            ),
            51 => 
            array (
                'country_id' => 52,
                'id' => 52,
                'locale' => 'ar',
                'name' => 'كولومبيا',
            ),
            52 => 
            array (
                'country_id' => 53,
                'id' => 53,
                'locale' => 'ar',
                'name' => 'جزر القمر',
            ),
            53 => 
            array (
                'country_id' => 54,
                'id' => 54,
                'locale' => 'ar',
                'name' => 'الكونغو - برازافيل',
            ),
            54 => 
            array (
                'country_id' => 55,
                'id' => 55,
                'locale' => 'ar',
                'name' => 'الكونغو - كينشاسا',
            ),
            55 => 
            array (
                'country_id' => 56,
                'id' => 56,
                'locale' => 'ar',
                'name' => 'جزر كوك',
            ),
            56 => 
            array (
                'country_id' => 57,
                'id' => 57,
                'locale' => 'ar',
                'name' => 'كوستاريكا',
            ),
            57 => 
            array (
                'country_id' => 58,
                'id' => 58,
                'locale' => 'ar',
                'name' => 'ساحل العاج',
            ),
            58 => 
            array (
                'country_id' => 59,
                'id' => 59,
                'locale' => 'ar',
                'name' => 'كرواتيا',
            ),
            59 => 
            array (
                'country_id' => 60,
                'id' => 60,
                'locale' => 'ar',
                'name' => 'كوبا',
            ),
            60 => 
            array (
                'country_id' => 61,
                'id' => 61,
                'locale' => 'ar',
                'name' => 'كوراساو',
            ),
            61 => 
            array (
                'country_id' => 62,
                'id' => 62,
                'locale' => 'ar',
                'name' => 'قبرص',
            ),
            62 => 
            array (
                'country_id' => 63,
                'id' => 63,
                'locale' => 'ar',
                'name' => 'التشيك',
            ),
            63 => 
            array (
                'country_id' => 64,
                'id' => 64,
                'locale' => 'ar',
                'name' => 'الدنمارك',
            ),
            64 => 
            array (
                'country_id' => 65,
                'id' => 65,
                'locale' => 'ar',
                'name' => 'دييغو غارسيا',
            ),
            65 => 
            array (
                'country_id' => 66,
                'id' => 66,
                'locale' => 'ar',
                'name' => 'جيبوتي',
            ),
            66 => 
            array (
                'country_id' => 67,
                'id' => 67,
                'locale' => 'ar',
                'name' => 'دومينيكا',
            ),
            67 => 
            array (
                'country_id' => 68,
                'id' => 68,
                'locale' => 'ar',
                'name' => 'جمهورية الدومنيكان',
            ),
            68 => 
            array (
                'country_id' => 69,
                'id' => 69,
                'locale' => 'ar',
                'name' => 'الإكوادور',
            ),
            69 => 
            array (
                'country_id' => 70,
                'id' => 70,
                'locale' => 'ar',
                'name' => 'مصر',
            ),
            70 => 
            array (
                'country_id' => 71,
                'id' => 71,
                'locale' => 'ar',
                'name' => 'السلفادور',
            ),
            71 => 
            array (
                'country_id' => 72,
                'id' => 72,
                'locale' => 'ar',
                'name' => 'غينيا الإستوائية',
            ),
            72 => 
            array (
                'country_id' => 73,
                'id' => 73,
                'locale' => 'ar',
                'name' => 'إريتريا',
            ),
            73 => 
            array (
                'country_id' => 74,
                'id' => 74,
                'locale' => 'ar',
                'name' => 'استونيا',
            ),
            74 => 
            array (
                'country_id' => 75,
                'id' => 75,
                'locale' => 'ar',
                'name' => 'أثيوبيا',
            ),
            75 => 
            array (
                'country_id' => 76,
                'id' => 76,
                'locale' => 'ar',
                'name' => 'منطقة اليورو',
            ),
            76 => 
            array (
                'country_id' => 77,
                'id' => 77,
                'locale' => 'ar',
                'name' => 'جزر فوكلاند',
            ),
            77 => 
            array (
                'country_id' => 78,
                'id' => 78,
                'locale' => 'ar',
                'name' => 'جزر فاروس',
            ),
            78 => 
            array (
                'country_id' => 79,
                'id' => 79,
                'locale' => 'ar',
                'name' => 'فيجي',
            ),
            79 => 
            array (
                'country_id' => 80,
                'id' => 80,
                'locale' => 'ar',
                'name' => 'فنلندا',
            ),
            80 => 
            array (
                'country_id' => 81,
                'id' => 81,
                'locale' => 'ar',
                'name' => 'فرنسا',
            ),
            81 => 
            array (
                'country_id' => 82,
                'id' => 82,
                'locale' => 'ar',
                'name' => 'غيانا الفرنسية',
            ),
            82 => 
            array (
                'country_id' => 83,
                'id' => 83,
                'locale' => 'ar',
                'name' => 'بولينيزيا الفرنسية',
            ),
            83 => 
            array (
                'country_id' => 84,
                'id' => 84,
                'locale' => 'ar',
                'name' => 'المناطق الجنوبية لفرنسا',
            ),
            84 => 
            array (
                'country_id' => 85,
                'id' => 85,
                'locale' => 'ar',
                'name' => 'الغابون',
            ),
            85 => 
            array (
                'country_id' => 86,
                'id' => 86,
                'locale' => 'ar',
                'name' => 'غامبيا',
            ),
            86 => 
            array (
                'country_id' => 87,
                'id' => 87,
                'locale' => 'ar',
                'name' => 'جورجيا',
            ),
            87 => 
            array (
                'country_id' => 88,
                'id' => 88,
                'locale' => 'ar',
                'name' => 'ألمانيا',
            ),
            88 => 
            array (
                'country_id' => 89,
                'id' => 89,
                'locale' => 'ar',
                'name' => 'غانا',
            ),
            89 => 
            array (
                'country_id' => 90,
                'id' => 90,
                'locale' => 'ar',
                'name' => 'جبل طارق',
            ),
            90 => 
            array (
                'country_id' => 91,
                'id' => 91,
                'locale' => 'ar',
                'name' => 'اليونان',
            ),
            91 => 
            array (
                'country_id' => 92,
                'id' => 92,
                'locale' => 'ar',
                'name' => 'الأرض الخضراء',
            ),
            92 => 
            array (
                'country_id' => 93,
                'id' => 93,
                'locale' => 'ar',
                'name' => 'غرينادا',
            ),
            93 => 
            array (
                'country_id' => 94,
                'id' => 94,
                'locale' => 'ar',
                'name' => 'جوادلوب',
            ),
            94 => 
            array (
                'country_id' => 95,
                'id' => 95,
                'locale' => 'ar',
                'name' => 'غوام',
            ),
            95 => 
            array (
                'country_id' => 96,
                'id' => 96,
                'locale' => 'ar',
                'name' => 'غواتيمالا',
            ),
            96 => 
            array (
                'country_id' => 97,
                'id' => 97,
                'locale' => 'ar',
                'name' => 'غيرنسي',
            ),
            97 => 
            array (
                'country_id' => 98,
                'id' => 98,
                'locale' => 'ar',
                'name' => 'غينيا',
            ),
            98 => 
            array (
                'country_id' => 99,
                'id' => 99,
                'locale' => 'ar',
                'name' => 'غينيا بيساو',
            ),
            99 => 
            array (
                'country_id' => 100,
                'id' => 100,
                'locale' => 'ar',
                'name' => 'غيانا',
            ),
            100 => 
            array (
                'country_id' => 101,
                'id' => 101,
                'locale' => 'ar',
                'name' => 'هايتي',
            ),
            101 => 
            array (
                'country_id' => 102,
                'id' => 102,
                'locale' => 'ar',
                'name' => 'هندوراس',
            ),
            102 => 
            array (
                'country_id' => 103,
                'id' => 103,
                'locale' => 'ar',
                'name' => 'هونج كونج SAR الصين',
            ),
            103 => 
            array (
                'country_id' => 104,
                'id' => 104,
                'locale' => 'ar',
                'name' => 'هنغاريا',
            ),
            104 => 
            array (
                'country_id' => 105,
                'id' => 105,
                'locale' => 'ar',
                'name' => 'أيسلندا',
            ),
            105 => 
            array (
                'country_id' => 106,
                'id' => 106,
                'locale' => 'ar',
                'name' => 'الهند',
            ),
            106 => 
            array (
                'country_id' => 107,
                'id' => 107,
                'locale' => 'ar',
                'name' => 'إندونيسيا',
            ),
            107 => 
            array (
                'country_id' => 108,
                'id' => 108,
                'locale' => 'ar',
                'name' => 'إيران',
            ),
            108 => 
            array (
                'country_id' => 109,
                'id' => 109,
                'locale' => 'ar',
                'name' => 'العراق',
            ),
            109 => 
            array (
                'country_id' => 110,
                'id' => 110,
                'locale' => 'ar',
                'name' => 'أيرلندا',
            ),
            110 => 
            array (
                'country_id' => 111,
                'id' => 111,
                'locale' => 'ar',
                'name' => 'جزيرة آيل أوف مان',
            ),
            111 => 
            array (
                'country_id' => 112,
                'id' => 112,
                'locale' => 'ar',
                'name' => 'إسرائيل',
            ),
            112 => 
            array (
                'country_id' => 113,
                'id' => 113,
                'locale' => 'ar',
                'name' => 'إيطاليا',
            ),
            113 => 
            array (
                'country_id' => 114,
                'id' => 114,
                'locale' => 'ar',
                'name' => 'جامايكا',
            ),
            114 => 
            array (
                'country_id' => 115,
                'id' => 115,
                'locale' => 'ar',
                'name' => 'اليابان',
            ),
            115 => 
            array (
                'country_id' => 116,
                'id' => 116,
                'locale' => 'ar',
                'name' => 'جيرسي',
            ),
            116 => 
            array (
                'country_id' => 117,
                'id' => 117,
                'locale' => 'ar',
                'name' => 'الأردن',
            ),
            117 => 
            array (
                'country_id' => 118,
                'id' => 118,
                'locale' => 'ar',
                'name' => 'كازاخستان',
            ),
            118 => 
            array (
                'country_id' => 119,
                'id' => 119,
                'locale' => 'ar',
                'name' => 'كينيا',
            ),
            119 => 
            array (
                'country_id' => 120,
                'id' => 120,
                'locale' => 'ar',
                'name' => 'كيريباس',
            ),
            120 => 
            array (
                'country_id' => 121,
                'id' => 121,
                'locale' => 'ar',
                'name' => 'كوسوفو',
            ),
            121 => 
            array (
                'country_id' => 122,
                'id' => 122,
                'locale' => 'ar',
                'name' => 'الكويت',
            ),
            122 => 
            array (
                'country_id' => 123,
                'id' => 123,
                'locale' => 'ar',
                'name' => 'قرغيزستان',
            ),
            123 => 
            array (
                'country_id' => 124,
                'id' => 124,
                'locale' => 'ar',
                'name' => 'لاوس',
            ),
            124 => 
            array (
                'country_id' => 125,
                'id' => 125,
                'locale' => 'ar',
                'name' => 'لاتفيا',
            ),
            125 => 
            array (
                'country_id' => 126,
                'id' => 126,
                'locale' => 'ar',
                'name' => 'لبنان',
            ),
            126 => 
            array (
                'country_id' => 127,
                'id' => 127,
                'locale' => 'ar',
                'name' => 'ليسوتو',
            ),
            127 => 
            array (
                'country_id' => 128,
                'id' => 128,
                'locale' => 'ar',
                'name' => 'ليبيريا',
            ),
            128 => 
            array (
                'country_id' => 129,
                'id' => 129,
                'locale' => 'ar',
                'name' => 'ليبيا',
            ),
            129 => 
            array (
                'country_id' => 130,
                'id' => 130,
                'locale' => 'ar',
                'name' => 'ليختنشتاين',
            ),
            130 => 
            array (
                'country_id' => 131,
                'id' => 131,
                'locale' => 'ar',
                'name' => 'ليتوانيا',
            ),
            131 => 
            array (
                'country_id' => 132,
                'id' => 132,
                'locale' => 'ar',
                'name' => 'لوكسمبورغ',
            ),
            132 => 
            array (
                'country_id' => 133,
                'id' => 133,
                'locale' => 'ar',
                'name' => 'ماكاو SAR الصين',
            ),
            133 => 
            array (
                'country_id' => 134,
                'id' => 134,
                'locale' => 'ar',
                'name' => 'مقدونيا',
            ),
            134 => 
            array (
                'country_id' => 135,
                'id' => 135,
                'locale' => 'ar',
                'name' => 'مدغشقر',
            ),
            135 => 
            array (
                'country_id' => 136,
                'id' => 136,
                'locale' => 'ar',
                'name' => 'مالاوي',
            ),
            136 => 
            array (
                'country_id' => 137,
                'id' => 137,
                'locale' => 'ar',
                'name' => 'ماليزيا',
            ),
            137 => 
            array (
                'country_id' => 138,
                'id' => 138,
                'locale' => 'ar',
                'name' => 'جزر المالديف',
            ),
            138 => 
            array (
                'country_id' => 139,
                'id' => 139,
                'locale' => 'ar',
                'name' => 'مالي',
            ),
            139 => 
            array (
                'country_id' => 140,
                'id' => 140,
                'locale' => 'ar',
                'name' => 'مالطا',
            ),
            140 => 
            array (
                'country_id' => 141,
                'id' => 141,
                'locale' => 'ar',
                'name' => 'جزر مارشال',
            ),
            141 => 
            array (
                'country_id' => 142,
                'id' => 142,
                'locale' => 'ar',
                'name' => 'مارتينيك',
            ),
            142 => 
            array (
                'country_id' => 143,
                'id' => 143,
                'locale' => 'ar',
                'name' => 'موريتانيا',
            ),
            143 => 
            array (
                'country_id' => 144,
                'id' => 144,
                'locale' => 'ar',
                'name' => 'موريشيوس',
            ),
            144 => 
            array (
                'country_id' => 145,
                'id' => 145,
                'locale' => 'ar',
                'name' => 'ضائع',
            ),
            145 => 
            array (
                'country_id' => 146,
                'id' => 146,
                'locale' => 'ar',
                'name' => 'المكسيك',
            ),
            146 => 
            array (
                'country_id' => 147,
                'id' => 147,
                'locale' => 'ar',
                'name' => 'ميكرونيزيا',
            ),
            147 => 
            array (
                'country_id' => 148,
                'id' => 148,
                'locale' => 'ar',
                'name' => 'مولدوفا',
            ),
            148 => 
            array (
                'country_id' => 149,
                'id' => 149,
                'locale' => 'ar',
                'name' => 'موناكو',
            ),
            149 => 
            array (
                'country_id' => 150,
                'id' => 150,
                'locale' => 'ar',
                'name' => 'منغوليا',
            ),
            150 => 
            array (
                'country_id' => 151,
                'id' => 151,
                'locale' => 'ar',
                'name' => 'الجبل الأسود',
            ),
            151 => 
            array (
                'country_id' => 152,
                'id' => 152,
                'locale' => 'ar',
                'name' => 'مونتسيرات',
            ),
            152 => 
            array (
                'country_id' => 153,
                'id' => 153,
                'locale' => 'ar',
                'name' => 'المغرب',
            ),
            153 => 
            array (
                'country_id' => 154,
                'id' => 154,
                'locale' => 'ar',
                'name' => 'موزمبيق',
            ),
            154 => 
            array (
                'country_id' => 155,
                'id' => 155,
                'locale' => 'ar',
            'name' => 'ميانمار (بورما)',
            ),
            155 => 
            array (
                'country_id' => 156,
                'id' => 156,
                'locale' => 'ar',
                'name' => 'ناميبيا',
            ),
            156 => 
            array (
                'country_id' => 157,
                'id' => 157,
                'locale' => 'ar',
                'name' => 'ناورو',
            ),
            157 => 
            array (
                'country_id' => 158,
                'id' => 158,
                'locale' => 'ar',
                'name' => 'نيبال',
            ),
            158 => 
            array (
                'country_id' => 159,
                'id' => 159,
                'locale' => 'ar',
                'name' => 'نيبال',
            ),
            159 => 
            array (
                'country_id' => 160,
                'id' => 160,
                'locale' => 'ar',
                'name' => 'كاليدونيا الجديدة',
            ),
            160 => 
            array (
                'country_id' => 161,
                'id' => 161,
                'locale' => 'ar',
                'name' => 'نيوزيلاندا',
            ),
            161 => 
            array (
                'country_id' => 162,
                'id' => 162,
                'locale' => 'ar',
                'name' => 'نيكاراغوا',
            ),
            162 => 
            array (
                'country_id' => 163,
                'id' => 163,
                'locale' => 'ar',
                'name' => 'النيجر',
            ),
            163 => 
            array (
                'country_id' => 164,
                'id' => 164,
                'locale' => 'ar',
                'name' => 'نيجيريا',
            ),
            164 => 
            array (
                'country_id' => 165,
                'id' => 165,
                'locale' => 'ar',
                'name' => 'نيوي',
            ),
            165 => 
            array (
                'country_id' => 166,
                'id' => 166,
                'locale' => 'ar',
                'name' => 'جزيرة نورفولك',
            ),
            166 => 
            array (
                'country_id' => 167,
                'id' => 167,
                'locale' => 'ar',
                'name' => 'كوريا الشماليه',
            ),
            167 => 
            array (
                'country_id' => 168,
                'id' => 168,
                'locale' => 'ar',
                'name' => 'جزر مريانا الشمالية',
            ),
            168 => 
            array (
                'country_id' => 169,
                'id' => 169,
                'locale' => 'ar',
                'name' => 'النرويج',
            ),
            169 => 
            array (
                'country_id' => 170,
                'id' => 170,
                'locale' => 'ar',
                'name' => 'سلطنة عمان',
            ),
            170 => 
            array (
                'country_id' => 171,
                'id' => 171,
                'locale' => 'ar',
                'name' => 'باكستان',
            ),
            171 => 
            array (
                'country_id' => 172,
                'id' => 172,
                'locale' => 'ar',
                'name' => 'بالاو',
            ),
            172 => 
            array (
                'country_id' => 173,
                'id' => 173,
                'locale' => 'ar',
                'name' => 'الاراضي الفلسطينية',
            ),
            173 => 
            array (
                'country_id' => 174,
                'id' => 174,
                'locale' => 'ar',
                'name' => 'بناما',
            ),
            174 => 
            array (
                'country_id' => 175,
                'id' => 175,
                'locale' => 'ar',
                'name' => 'بابوا غينيا الجديدة',
            ),
            175 => 
            array (
                'country_id' => 176,
                'id' => 176,
                'locale' => 'ar',
                'name' => 'باراغواي',
            ),
            176 => 
            array (
                'country_id' => 177,
                'id' => 177,
                'locale' => 'ar',
                'name' => 'بيرو',
            ),
            177 => 
            array (
                'country_id' => 178,
                'id' => 178,
                'locale' => 'ar',
                'name' => 'الفلبين',
            ),
            178 => 
            array (
                'country_id' => 179,
                'id' => 179,
                'locale' => 'ar',
                'name' => 'جزر بيتكيرن',
            ),
            179 => 
            array (
                'country_id' => 180,
                'id' => 180,
                'locale' => 'ar',
                'name' => 'بولندا',
            ),
            180 => 
            array (
                'country_id' => 181,
                'id' => 181,
                'locale' => 'ar',
                'name' => 'البرتغال',
            ),
            181 => 
            array (
                'country_id' => 182,
                'id' => 182,
                'locale' => 'ar',
                'name' => 'بورتوريكو',
            ),
            182 => 
            array (
                'country_id' => 183,
                'id' => 183,
                'locale' => 'ar',
                'name' => 'دولة قطر',
            ),
            183 => 
            array (
                'country_id' => 184,
                'id' => 184,
                'locale' => 'ar',
                'name' => 'جمع شمل',
            ),
            184 => 
            array (
                'country_id' => 185,
                'id' => 185,
                'locale' => 'ar',
                'name' => 'رومانيا',
            ),
            185 => 
            array (
                'country_id' => 186,
                'id' => 186,
                'locale' => 'ar',
                'name' => 'روسيا',
            ),
            186 => 
            array (
                'country_id' => 187,
                'id' => 187,
                'locale' => 'ar',
                'name' => 'رواندا',
            ),
            187 => 
            array (
                'country_id' => 188,
                'id' => 188,
                'locale' => 'ar',
                'name' => 'ساموا',
            ),
            188 => 
            array (
                'country_id' => 189,
                'id' => 189,
                'locale' => 'ar',
                'name' => 'سان مارينو',
            ),
            189 => 
            array (
                'country_id' => 190,
                'id' => 190,
                'locale' => 'ar',
                'name' => 'سانت كيتس ونيفيس',
            ),
            190 => 
            array (
                'country_id' => 191,
                'id' => 191,
                'locale' => 'ar',
                'name' => 'المملكة العربية السعودية',
            ),
            191 => 
            array (
                'country_id' => 192,
                'id' => 192,
                'locale' => 'ar',
                'name' => 'السنغال',
            ),
            192 => 
            array (
                'country_id' => 193,
                'id' => 193,
                'locale' => 'ar',
                'name' => 'صربيا',
            ),
            193 => 
            array (
                'country_id' => 194,
                'id' => 194,
                'locale' => 'ar',
                'name' => 'سيشيل',
            ),
            194 => 
            array (
                'country_id' => 195,
                'id' => 195,
                'locale' => 'ar',
                'name' => 'سيراليون',
            ),
            195 => 
            array (
                'country_id' => 196,
                'id' => 196,
                'locale' => 'ar',
                'name' => 'سنغافورة',
            ),
            196 => 
            array (
                'country_id' => 197,
                'id' => 197,
                'locale' => 'ar',
                'name' => 'سينت مارتن',
            ),
            197 => 
            array (
                'country_id' => 198,
                'id' => 198,
                'locale' => 'ar',
                'name' => 'سلوفاكيا',
            ),
            198 => 
            array (
                'country_id' => 199,
                'id' => 199,
                'locale' => 'ar',
                'name' => 'سلوفينيا',
            ),
            199 => 
            array (
                'country_id' => 200,
                'id' => 200,
                'locale' => 'ar',
                'name' => 'جزر سليمان',
            ),
            200 => 
            array (
                'country_id' => 201,
                'id' => 201,
                'locale' => 'ar',
                'name' => 'الصومال',
            ),
            201 => 
            array (
                'country_id' => 202,
                'id' => 202,
                'locale' => 'ar',
                'name' => 'جنوب أفريقيا',
            ),
            202 => 
            array (
                'country_id' => 203,
                'id' => 203,
                'locale' => 'ar',
                'name' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
            ),
            203 => 
            array (
                'country_id' => 204,
                'id' => 204,
                'locale' => 'ar',
                'name' => 'كوريا الجنوبية',
            ),
            204 => 
            array (
                'country_id' => 205,
                'id' => 205,
                'locale' => 'ar',
                'name' => 'جنوب السودان',
            ),
            205 => 
            array (
                'country_id' => 206,
                'id' => 206,
                'locale' => 'ar',
                'name' => 'إسبانيا',
            ),
            206 => 
            array (
                'country_id' => 207,
                'id' => 207,
                'locale' => 'ar',
                'name' => 'سيريلانكا',
            ),
            207 => 
            array (
                'country_id' => 208,
                'id' => 208,
                'locale' => 'ar',
                'name' => 'سانت بارتيليمي',
            ),
            208 => 
            array (
                'country_id' => 209,
                'id' => 209,
                'locale' => 'ar',
                'name' => 'سانت هيلانة',
            ),
            209 => 
            array (
                'country_id' => 210,
                'id' => 210,
                'locale' => 'ar',
                'name' => 'سانت كيتس ونيفيس',
            ),
            210 => 
            array (
                'country_id' => 211,
                'id' => 211,
                'locale' => 'ar',
                'name' => 'شارع لوسيا',
            ),
            211 => 
            array (
                'country_id' => 212,
                'id' => 212,
                'locale' => 'ar',
                'name' => 'سانت مارتن',
            ),
            212 => 
            array (
                'country_id' => 213,
                'id' => 213,
                'locale' => 'ar',
                'name' => 'سانت بيير وميكلون',
            ),
            213 => 
            array (
                'country_id' => 214,
                'id' => 214,
                'locale' => 'ar',
                'name' => 'سانت فنسنت وجزر غرينادين',
            ),
            214 => 
            array (
                'country_id' => 215,
                'id' => 215,
                'locale' => 'ar',
                'name' => 'السودان',
            ),
            215 => 
            array (
                'country_id' => 216,
                'id' => 216,
                'locale' => 'ar',
                'name' => 'سورينام',
            ),
            216 => 
            array (
                'country_id' => 217,
                'id' => 217,
                'locale' => 'ar',
                'name' => 'سفالبارد وجان ماين',
            ),
            217 => 
            array (
                'country_id' => 218,
                'id' => 218,
                'locale' => 'ar',
                'name' => 'سوازيلاند',
            ),
            218 => 
            array (
                'country_id' => 219,
                'id' => 219,
                'locale' => 'ar',
                'name' => 'السويد',
            ),
            219 => 
            array (
                'country_id' => 220,
                'id' => 220,
                'locale' => 'ar',
                'name' => 'سويسرا',
            ),
            220 => 
            array (
                'country_id' => 221,
                'id' => 221,
                'locale' => 'ar',
                'name' => 'سوريا',
            ),
            221 => 
            array (
                'country_id' => 222,
                'id' => 222,
                'locale' => 'ar',
                'name' => 'تايوان',
            ),
            222 => 
            array (
                'country_id' => 223,
                'id' => 223,
                'locale' => 'ar',
                'name' => 'طاجيكستان',
            ),
            223 => 
            array (
                'country_id' => 224,
                'id' => 224,
                'locale' => 'ar',
                'name' => 'تنزانيا',
            ),
            224 => 
            array (
                'country_id' => 225,
                'id' => 225,
                'locale' => 'ar',
                'name' => 'تايلاند',
            ),
            225 => 
            array (
                'country_id' => 226,
                'id' => 226,
                'locale' => 'ar',
                'name' => 'تيمور',
            ),
            226 => 
            array (
                'country_id' => 227,
                'id' => 227,
                'locale' => 'ar',
                'name' => 'توجو',
            ),
            227 => 
            array (
                'country_id' => 228,
                'id' => 228,
                'locale' => 'ar',
                'name' => 'توكيلاو',
            ),
            228 => 
            array (
                'country_id' => 229,
                'id' => 229,
                'locale' => 'ar',
                'name' => 'تونغا',
            ),
            229 => 
            array (
                'country_id' => 230,
                'id' => 230,
                'locale' => 'ar',
                'name' => 'ترينيداد وتوباغو',
            ),
            230 => 
            array (
                'country_id' => 231,
                'id' => 231,
                'locale' => 'ar',
                'name' => 'تريستان دا كونها',
            ),
            231 => 
            array (
                'country_id' => 232,
                'id' => 232,
                'locale' => 'ar',
                'name' => 'تونس',
            ),
            232 => 
            array (
                'country_id' => 233,
                'id' => 233,
                'locale' => 'ar',
                'name' => 'ديك رومي',
            ),
            233 => 
            array (
                'country_id' => 234,
                'id' => 234,
                'locale' => 'ar',
                'name' => 'تركمانستان',
            ),
            234 => 
            array (
                'country_id' => 235,
                'id' => 235,
                'locale' => 'ar',
                'name' => 'جزر تركس وكايكوس',
            ),
            235 => 
            array (
                'country_id' => 236,
                'id' => 236,
                'locale' => 'ar',
                'name' => 'توفالو',
            ),
            236 => 
            array (
                'country_id' => 237,
                'id' => 237,
                'locale' => 'ar',
                'name' => 'جزر الولايات المتحدة البعيدة',
            ),
            237 => 
            array (
                'country_id' => 238,
                'id' => 238,
                'locale' => 'ar',
                'name' => 'جزر فيرجن الأمريكية',
            ),
            238 => 
            array (
                'country_id' => 239,
                'id' => 239,
                'locale' => 'ar',
                'name' => 'أوغندا',
            ),
            239 => 
            array (
                'country_id' => 240,
                'id' => 240,
                'locale' => 'ar',
                'name' => 'أوكرانيا',
            ),
            240 => 
            array (
                'country_id' => 241,
                'id' => 241,
                'locale' => 'ar',
                'name' => 'الإمارات العربية المتحدة',
            ),
            241 => 
            array (
                'country_id' => 242,
                'id' => 242,
                'locale' => 'ar',
                'name' => 'المملكة المتحدة',
            ),
            242 => 
            array (
                'country_id' => 243,
                'id' => 243,
                'locale' => 'ar',
                'name' => 'الأمم المتحدة',
            ),
            243 => 
            array (
                'country_id' => 244,
                'id' => 244,
                'locale' => 'ar',
                'name' => 'الولايات المتحدة الأمريكية',
            ),
            244 => 
            array (
                'country_id' => 245,
                'id' => 245,
                'locale' => 'ar',
                'name' => 'أوروغواي',
            ),
            245 => 
            array (
                'country_id' => 246,
                'id' => 246,
                'locale' => 'ar',
                'name' => 'أوزبكستان',
            ),
            246 => 
            array (
                'country_id' => 247,
                'id' => 247,
                'locale' => 'ar',
                'name' => 'فانواتو',
            ),
            247 => 
            array (
                'country_id' => 248,
                'id' => 248,
                'locale' => 'ar',
                'name' => 'مدينة الفاتيكان',
            ),
            248 => 
            array (
                'country_id' => 249,
                'id' => 249,
                'locale' => 'ar',
                'name' => 'فنزويلا',
            ),
            249 => 
            array (
                'country_id' => 250,
                'id' => 250,
                'locale' => 'ar',
                'name' => 'فيتنام',
            ),
            250 => 
            array (
                'country_id' => 251,
                'id' => 251,
                'locale' => 'ar',
                'name' => 'واليس وفوتونا',
            ),
            251 => 
            array (
                'country_id' => 252,
                'id' => 252,
                'locale' => 'ar',
                'name' => 'الصحراء الغربية',
            ),
            252 => 
            array (
                'country_id' => 253,
                'id' => 253,
                'locale' => 'ar',
                'name' => 'اليمن',
            ),
            253 => 
            array (
                'country_id' => 254,
                'id' => 254,
                'locale' => 'ar',
                'name' => 'زامبيا',
            ),
            254 => 
            array (
                'country_id' => 255,
                'id' => 255,
                'locale' => 'ar',
                'name' => 'زيمبابوي',
            ),
            255 => 
            array (
                'country_id' => 1,
                'id' => 256,
                'locale' => 'es',
                'name' => 'Afganistán',
            ),
            256 => 
            array (
                'country_id' => 2,
                'id' => 257,
                'locale' => 'es',
                'name' => 'Islas Åland',
            ),
            257 => 
            array (
                'country_id' => 3,
                'id' => 258,
                'locale' => 'es',
                'name' => 'Albania',
            ),
            258 => 
            array (
                'country_id' => 4,
                'id' => 259,
                'locale' => 'es',
                'name' => 'Argelia',
            ),
            259 => 
            array (
                'country_id' => 5,
                'id' => 260,
                'locale' => 'es',
                'name' => 'Samoa Americana',
            ),
            260 => 
            array (
                'country_id' => 6,
                'id' => 261,
                'locale' => 'es',
                'name' => 'Andorra',
            ),
            261 => 
            array (
                'country_id' => 7,
                'id' => 262,
                'locale' => 'es',
                'name' => 'Angola',
            ),
            262 => 
            array (
                'country_id' => 8,
                'id' => 263,
                'locale' => 'es',
                'name' => 'Anguila',
            ),
            263 => 
            array (
                'country_id' => 9,
                'id' => 264,
                'locale' => 'es',
                'name' => 'Antártida',
            ),
            264 => 
            array (
                'country_id' => 10,
                'id' => 265,
                'locale' => 'es',
                'name' => 'Antigua y Barbuda',
            ),
            265 => 
            array (
                'country_id' => 11,
                'id' => 266,
                'locale' => 'es',
                'name' => 'Argentina',
            ),
            266 => 
            array (
                'country_id' => 12,
                'id' => 267,
                'locale' => 'es',
                'name' => 'Armenia',
            ),
            267 => 
            array (
                'country_id' => 13,
                'id' => 268,
                'locale' => 'es',
                'name' => 'Aruba',
            ),
            268 => 
            array (
                'country_id' => 14,
                'id' => 269,
                'locale' => 'es',
                'name' => 'Isla Ascensión',
            ),
            269 => 
            array (
                'country_id' => 15,
                'id' => 270,
                'locale' => 'es',
                'name' => 'Australia',
            ),
            270 => 
            array (
                'country_id' => 16,
                'id' => 271,
                'locale' => 'es',
                'name' => 'Austria',
            ),
            271 => 
            array (
                'country_id' => 17,
                'id' => 272,
                'locale' => 'es',
                'name' => 'Azerbaiyán',
            ),
            272 => 
            array (
                'country_id' => 18,
                'id' => 273,
                'locale' => 'es',
                'name' => 'Bahamas',
            ),
            273 => 
            array (
                'country_id' => 19,
                'id' => 274,
                'locale' => 'es',
                'name' => 'Bahrein',
            ),
            274 => 
            array (
                'country_id' => 20,
                'id' => 275,
                'locale' => 'es',
                'name' => 'Bangladesh',
            ),
            275 => 
            array (
                'country_id' => 21,
                'id' => 276,
                'locale' => 'es',
                'name' => 'Barbados',
            ),
            276 => 
            array (
                'country_id' => 22,
                'id' => 277,
                'locale' => 'es',
                'name' => 'Bielorrusia',
            ),
            277 => 
            array (
                'country_id' => 23,
                'id' => 278,
                'locale' => 'es',
                'name' => 'Bélgica',
            ),
            278 => 
            array (
                'country_id' => 24,
                'id' => 279,
                'locale' => 'es',
                'name' => 'Belice',
            ),
            279 => 
            array (
                'country_id' => 25,
                'id' => 280,
                'locale' => 'es',
                'name' => 'Benín',
            ),
            280 => 
            array (
                'country_id' => 26,
                'id' => 281,
                'locale' => 'es',
                'name' => 'Islas Bermudas',
            ),
            281 => 
            array (
                'country_id' => 27,
                'id' => 282,
                'locale' => 'es',
                'name' => 'Bhután',
            ),
            282 => 
            array (
                'country_id' => 28,
                'id' => 283,
                'locale' => 'es',
                'name' => 'Bolivia',
            ),
            283 => 
            array (
                'country_id' => 29,
                'id' => 284,
                'locale' => 'es',
                'name' => 'Bosnia y Herzegovina',
            ),
            284 => 
            array (
                'country_id' => 30,
                'id' => 285,
                'locale' => 'es',
                'name' => 'Botsuana',
            ),
            285 => 
            array (
                'country_id' => 31,
                'id' => 286,
                'locale' => 'es',
                'name' => 'Brasil',
            ),
            286 => 
            array (
                'country_id' => 32,
                'id' => 287,
                'locale' => 'es',
                'name' => 'Territorio Británico del Océano índico',
            ),
            287 => 
            array (
                'country_id' => 33,
                'id' => 288,
                'locale' => 'es',
                'name' => 'Islas Vírgenes Británicas',
            ),
            288 => 
            array (
                'country_id' => 34,
                'id' => 289,
                'locale' => 'es',
                'name' => 'Brunéi',
            ),
            289 => 
            array (
                'country_id' => 35,
                'id' => 290,
                'locale' => 'es',
                'name' => 'Bulgaria',
            ),
            290 => 
            array (
                'country_id' => 36,
                'id' => 291,
                'locale' => 'es',
                'name' => 'Burkina Faso',
            ),
            291 => 
            array (
                'country_id' => 37,
                'id' => 292,
                'locale' => 'es',
                'name' => 'Burundi',
            ),
            292 => 
            array (
                'country_id' => 38,
                'id' => 293,
                'locale' => 'es',
                'name' => 'Camboya',
            ),
            293 => 
            array (
                'country_id' => 39,
                'id' => 294,
                'locale' => 'es',
                'name' => 'Camerún',
            ),
            294 => 
            array (
                'country_id' => 40,
                'id' => 295,
                'locale' => 'es',
                'name' => 'Canadá',
            ),
            295 => 
            array (
                'country_id' => 41,
                'id' => 296,
                'locale' => 'es',
                'name' => 'Islas Canarias',
            ),
            296 => 
            array (
                'country_id' => 42,
                'id' => 297,
                'locale' => 'es',
                'name' => 'Cabo Verde',
            ),
            297 => 
            array (
                'country_id' => 43,
                'id' => 298,
                'locale' => 'es',
                'name' => 'Caribe Neerlandés',
            ),
            298 => 
            array (
                'country_id' => 44,
                'id' => 299,
                'locale' => 'es',
                'name' => 'Islas Caimán',
            ),
            299 => 
            array (
                'country_id' => 45,
                'id' => 300,
                'locale' => 'es',
                'name' => 'República Centroafricana',
            ),
            300 => 
            array (
                'country_id' => 46,
                'id' => 301,
                'locale' => 'es',
                'name' => 'Ceuta y Melilla',
            ),
            301 => 
            array (
                'country_id' => 47,
                'id' => 302,
                'locale' => 'es',
                'name' => 'Chad',
            ),
            302 => 
            array (
                'country_id' => 48,
                'id' => 303,
                'locale' => 'es',
                'name' => 'Chile',
            ),
            303 => 
            array (
                'country_id' => 49,
                'id' => 304,
                'locale' => 'es',
                'name' => 'China',
            ),
            304 => 
            array (
                'country_id' => 50,
                'id' => 305,
                'locale' => 'es',
                'name' => 'Isla de Navidad',
            ),
            305 => 
            array (
                'country_id' => 51,
                'id' => 306,
                'locale' => 'es',
                'name' => 'Islas Cocos',
            ),
            306 => 
            array (
                'country_id' => 52,
                'id' => 307,
                'locale' => 'es',
                'name' => 'Colombia',
            ),
            307 => 
            array (
                'country_id' => 53,
                'id' => 308,
                'locale' => 'es',
                'name' => 'Comoras',
            ),
            308 => 
            array (
                'country_id' => 54,
                'id' => 309,
                'locale' => 'es',
                'name' => 'República del Congo',
            ),
            309 => 
            array (
                'country_id' => 55,
                'id' => 310,
                'locale' => 'es',
                'name' => 'República Democrática del Congo',
            ),
            310 => 
            array (
                'country_id' => 56,
                'id' => 311,
                'locale' => 'es',
                'name' => 'Islas Cook',
            ),
            311 => 
            array (
                'country_id' => 57,
                'id' => 312,
                'locale' => 'es',
                'name' => 'Costa Rica',
            ),
            312 => 
            array (
                'country_id' => 58,
                'id' => 313,
                'locale' => 'es',
                'name' => 'Costa de Marfil',
            ),
            313 => 
            array (
                'country_id' => 59,
                'id' => 314,
                'locale' => 'es',
                'name' => 'Croacia',
            ),
            314 => 
            array (
                'country_id' => 60,
                'id' => 315,
                'locale' => 'es',
                'name' => 'Cuba',
            ),
            315 => 
            array (
                'country_id' => 61,
                'id' => 316,
                'locale' => 'es',
                'name' => 'Curazao',
            ),
            316 => 
            array (
                'country_id' => 62,
                'id' => 317,
                'locale' => 'es',
                'name' => 'Chipre',
            ),
            317 => 
            array (
                'country_id' => 63,
                'id' => 318,
                'locale' => 'es',
                'name' => 'República Checa',
            ),
            318 => 
            array (
                'country_id' => 64,
                'id' => 319,
                'locale' => 'es',
                'name' => 'Dinamarca',
            ),
            319 => 
            array (
                'country_id' => 65,
                'id' => 320,
                'locale' => 'es',
                'name' => 'Diego García',
            ),
            320 => 
            array (
                'country_id' => 66,
                'id' => 321,
                'locale' => 'es',
                'name' => 'Yibuti',
            ),
            321 => 
            array (
                'country_id' => 67,
                'id' => 322,
                'locale' => 'es',
                'name' => 'Dominica',
            ),
            322 => 
            array (
                'country_id' => 68,
                'id' => 323,
                'locale' => 'es',
                'name' => 'República Dominicana',
            ),
            323 => 
            array (
                'country_id' => 69,
                'id' => 324,
                'locale' => 'es',
                'name' => 'Ecuador',
            ),
            324 => 
            array (
                'country_id' => 70,
                'id' => 325,
                'locale' => 'es',
                'name' => 'Egipto',
            ),
            325 => 
            array (
                'country_id' => 71,
                'id' => 326,
                'locale' => 'es',
                'name' => 'El Salvador',
            ),
            326 => 
            array (
                'country_id' => 72,
                'id' => 327,
                'locale' => 'es',
                'name' => 'Guinea Ecuatorial',
            ),
            327 => 
            array (
                'country_id' => 73,
                'id' => 328,
                'locale' => 'es',
                'name' => 'Eritrea',
            ),
            328 => 
            array (
                'country_id' => 74,
                'id' => 329,
                'locale' => 'es',
                'name' => 'Estonia',
            ),
            329 => 
            array (
                'country_id' => 75,
                'id' => 330,
                'locale' => 'es',
                'name' => 'Etiopía',
            ),
            330 => 
            array (
                'country_id' => 76,
                'id' => 331,
                'locale' => 'es',
                'name' => 'Europa',
            ),
            331 => 
            array (
                'country_id' => 77,
                'id' => 332,
                'locale' => 'es',
                'name' => 'Islas Malvinas',
            ),
            332 => 
            array (
                'country_id' => 78,
                'id' => 333,
                'locale' => 'es',
                'name' => 'Islas Feroe',
            ),
            333 => 
            array (
                'country_id' => 79,
                'id' => 334,
                'locale' => 'es',
                'name' => 'Fiyi',
            ),
            334 => 
            array (
                'country_id' => 80,
                'id' => 335,
                'locale' => 'es',
                'name' => 'Finlandia',
            ),
            335 => 
            array (
                'country_id' => 81,
                'id' => 336,
                'locale' => 'es',
                'name' => 'Francia',
            ),
            336 => 
            array (
                'country_id' => 82,
                'id' => 337,
                'locale' => 'es',
                'name' => 'Guayana Francesa',
            ),
            337 => 
            array (
                'country_id' => 83,
                'id' => 338,
                'locale' => 'es',
                'name' => 'Polinesia Francesa',
            ),
            338 => 
            array (
                'country_id' => 84,
                'id' => 339,
                'locale' => 'es',
                'name' => 'Territorios Australes y Antárticas Franceses',
            ),
            339 => 
            array (
                'country_id' => 85,
                'id' => 340,
                'locale' => 'es',
                'name' => 'Gabón',
            ),
            340 => 
            array (
                'country_id' => 86,
                'id' => 341,
                'locale' => 'es',
                'name' => 'Gambia',
            ),
            341 => 
            array (
                'country_id' => 87,
                'id' => 342,
                'locale' => 'es',
                'name' => 'Georgia',
            ),
            342 => 
            array (
                'country_id' => 88,
                'id' => 343,
                'locale' => 'es',
                'name' => 'Alemania',
            ),
            343 => 
            array (
                'country_id' => 89,
                'id' => 344,
                'locale' => 'es',
                'name' => 'Ghana',
            ),
            344 => 
            array (
                'country_id' => 90,
                'id' => 345,
                'locale' => 'es',
                'name' => 'Gibraltar',
            ),
            345 => 
            array (
                'country_id' => 91,
                'id' => 346,
                'locale' => 'es',
                'name' => 'Grecia',
            ),
            346 => 
            array (
                'country_id' => 92,
                'id' => 347,
                'locale' => 'es',
                'name' => 'Groenlandia',
            ),
            347 => 
            array (
                'country_id' => 93,
                'id' => 348,
                'locale' => 'es',
                'name' => 'Granada',
            ),
            348 => 
            array (
                'country_id' => 94,
                'id' => 349,
                'locale' => 'es',
                'name' => 'Guadalupe',
            ),
            349 => 
            array (
                'country_id' => 95,
                'id' => 350,
                'locale' => 'es',
                'name' => 'Guam',
            ),
            350 => 
            array (
                'country_id' => 96,
                'id' => 351,
                'locale' => 'es',
                'name' => 'Guatemala',
            ),
            351 => 
            array (
                'country_id' => 97,
                'id' => 352,
                'locale' => 'es',
                'name' => 'Guernsey',
            ),
            352 => 
            array (
                'country_id' => 98,
                'id' => 353,
                'locale' => 'es',
                'name' => 'Guinea',
            ),
            353 => 
            array (
                'country_id' => 99,
                'id' => 354,
                'locale' => 'es',
                'name' => 'Guinea-Bisáu',
            ),
            354 => 
            array (
                'country_id' => 100,
                'id' => 355,
                'locale' => 'es',
                'name' => 'Guyana',
            ),
            355 => 
            array (
                'country_id' => 101,
                'id' => 356,
                'locale' => 'es',
                'name' => 'Haití',
            ),
            356 => 
            array (
                'country_id' => 102,
                'id' => 357,
                'locale' => 'es',
                'name' => 'Honduras',
            ),
            357 => 
            array (
                'country_id' => 103,
                'id' => 358,
                'locale' => 'es',
                'name' => 'Hong Kong',
            ),
            358 => 
            array (
                'country_id' => 104,
                'id' => 359,
                'locale' => 'es',
                'name' => 'Hungría',
            ),
            359 => 
            array (
                'country_id' => 105,
                'id' => 360,
                'locale' => 'es',
                'name' => 'Islandia',
            ),
            360 => 
            array (
                'country_id' => 106,
                'id' => 361,
                'locale' => 'es',
                'name' => 'India',
            ),
            361 => 
            array (
                'country_id' => 107,
                'id' => 362,
                'locale' => 'es',
                'name' => 'Indonesia',
            ),
            362 => 
            array (
                'country_id' => 108,
                'id' => 363,
                'locale' => 'es',
                'name' => 'Irán',
            ),
            363 => 
            array (
                'country_id' => 109,
                'id' => 364,
                'locale' => 'es',
                'name' => 'Irak',
            ),
            364 => 
            array (
                'country_id' => 110,
                'id' => 365,
                'locale' => 'es',
                'name' => 'Irlanda',
            ),
            365 => 
            array (
                'country_id' => 111,
                'id' => 366,
                'locale' => 'es',
                'name' => 'Isla de Man',
            ),
            366 => 
            array (
                'country_id' => 112,
                'id' => 367,
                'locale' => 'es',
                'name' => 'Israel',
            ),
            367 => 
            array (
                'country_id' => 113,
                'id' => 368,
                'locale' => 'es',
                'name' => 'Italia',
            ),
            368 => 
            array (
                'country_id' => 114,
                'id' => 369,
                'locale' => 'es',
                'name' => 'Jamaica',
            ),
            369 => 
            array (
                'country_id' => 115,
                'id' => 370,
                'locale' => 'es',
                'name' => 'Japón',
            ),
            370 => 
            array (
                'country_id' => 116,
                'id' => 371,
                'locale' => 'es',
                'name' => 'Jersey',
            ),
            371 => 
            array (
                'country_id' => 117,
                'id' => 372,
                'locale' => 'es',
                'name' => 'Jordania',
            ),
            372 => 
            array (
                'country_id' => 118,
                'id' => 373,
                'locale' => 'es',
                'name' => 'Kazajistán',
            ),
            373 => 
            array (
                'country_id' => 119,
                'id' => 374,
                'locale' => 'es',
                'name' => 'Kenia',
            ),
            374 => 
            array (
                'country_id' => 120,
                'id' => 375,
                'locale' => 'es',
                'name' => 'Kiribati',
            ),
            375 => 
            array (
                'country_id' => 121,
                'id' => 376,
                'locale' => 'es',
                'name' => 'Kosovo',
            ),
            376 => 
            array (
                'country_id' => 122,
                'id' => 377,
                'locale' => 'es',
                'name' => 'Kuwait',
            ),
            377 => 
            array (
                'country_id' => 123,
                'id' => 378,
                'locale' => 'es',
                'name' => 'Kirguistán',
            ),
            378 => 
            array (
                'country_id' => 124,
                'id' => 379,
                'locale' => 'es',
                'name' => 'Laos',
            ),
            379 => 
            array (
                'country_id' => 125,
                'id' => 380,
                'locale' => 'es',
                'name' => 'Letonia',
            ),
            380 => 
            array (
                'country_id' => 126,
                'id' => 381,
                'locale' => 'es',
                'name' => 'Líbano',
            ),
            381 => 
            array (
                'country_id' => 127,
                'id' => 382,
                'locale' => 'es',
                'name' => 'Lesoto',
            ),
            382 => 
            array (
                'country_id' => 128,
                'id' => 383,
                'locale' => 'es',
                'name' => 'Liberia',
            ),
            383 => 
            array (
                'country_id' => 129,
                'id' => 384,
                'locale' => 'es',
                'name' => 'Libia',
            ),
            384 => 
            array (
                'country_id' => 130,
                'id' => 385,
                'locale' => 'es',
                'name' => 'Liechtenstein',
            ),
            385 => 
            array (
                'country_id' => 131,
                'id' => 386,
                'locale' => 'es',
                'name' => 'Lituania',
            ),
            386 => 
            array (
                'country_id' => 132,
                'id' => 387,
                'locale' => 'es',
                'name' => 'Luxemburgo',
            ),
            387 => 
            array (
                'country_id' => 133,
                'id' => 388,
                'locale' => 'es',
                'name' => 'Macao',
            ),
            388 => 
            array (
                'country_id' => 134,
                'id' => 389,
                'locale' => 'es',
                'name' => 'Macedonia',
            ),
            389 => 
            array (
                'country_id' => 135,
                'id' => 390,
                'locale' => 'es',
                'name' => 'Madagascar',
            ),
            390 => 
            array (
                'country_id' => 136,
                'id' => 391,
                'locale' => 'es',
                'name' => 'Malaui',
            ),
            391 => 
            array (
                'country_id' => 137,
                'id' => 392,
                'locale' => 'es',
                'name' => 'Malasia',
            ),
            392 => 
            array (
                'country_id' => 138,
                'id' => 393,
                'locale' => 'es',
                'name' => 'Maldivas',
            ),
            393 => 
            array (
                'country_id' => 139,
                'id' => 394,
                'locale' => 'es',
                'name' => 'Malí',
            ),
            394 => 
            array (
                'country_id' => 140,
                'id' => 395,
                'locale' => 'es',
                'name' => 'Malta',
            ),
            395 => 
            array (
                'country_id' => 141,
                'id' => 396,
                'locale' => 'es',
                'name' => 'Islas Marshall',
            ),
            396 => 
            array (
                'country_id' => 142,
                'id' => 397,
                'locale' => 'es',
                'name' => 'Martinica',
            ),
            397 => 
            array (
                'country_id' => 143,
                'id' => 398,
                'locale' => 'es',
                'name' => 'Mauritania',
            ),
            398 => 
            array (
                'country_id' => 144,
                'id' => 399,
                'locale' => 'es',
                'name' => 'Mauricio',
            ),
            399 => 
            array (
                'country_id' => 145,
                'id' => 400,
                'locale' => 'es',
                'name' => 'Mayotte',
            ),
            400 => 
            array (
                'country_id' => 146,
                'id' => 401,
                'locale' => 'es',
                'name' => 'México',
            ),
            401 => 
            array (
                'country_id' => 147,
                'id' => 402,
                'locale' => 'es',
                'name' => 'Micronesia',
            ),
            402 => 
            array (
                'country_id' => 148,
                'id' => 403,
                'locale' => 'es',
                'name' => 'Moldavia',
            ),
            403 => 
            array (
                'country_id' => 149,
                'id' => 404,
                'locale' => 'es',
                'name' => 'Mónaco',
            ),
            404 => 
            array (
                'country_id' => 150,
                'id' => 405,
                'locale' => 'es',
                'name' => 'Mongolia',
            ),
            405 => 
            array (
                'country_id' => 151,
                'id' => 406,
                'locale' => 'es',
                'name' => 'Montenegro',
            ),
            406 => 
            array (
                'country_id' => 152,
                'id' => 407,
                'locale' => 'es',
                'name' => 'Montserrat',
            ),
            407 => 
            array (
                'country_id' => 153,
                'id' => 408,
                'locale' => 'es',
                'name' => 'Marruecos',
            ),
            408 => 
            array (
                'country_id' => 154,
                'id' => 409,
                'locale' => 'es',
                'name' => 'Mozambique',
            ),
            409 => 
            array (
                'country_id' => 155,
                'id' => 410,
                'locale' => 'es',
                'name' => 'Birmania',
            ),
            410 => 
            array (
                'country_id' => 156,
                'id' => 411,
                'locale' => 'es',
                'name' => 'Namibia',
            ),
            411 => 
            array (
                'country_id' => 157,
                'id' => 412,
                'locale' => 'es',
                'name' => 'Nauru',
            ),
            412 => 
            array (
                'country_id' => 158,
                'id' => 413,
                'locale' => 'es',
                'name' => 'Nepal',
            ),
            413 => 
            array (
                'country_id' => 159,
                'id' => 414,
                'locale' => 'es',
                'name' => 'Holanda',
            ),
            414 => 
            array (
                'country_id' => 160,
                'id' => 415,
                'locale' => 'es',
                'name' => 'Nueva Caledonia',
            ),
            415 => 
            array (
                'country_id' => 161,
                'id' => 416,
                'locale' => 'es',
                'name' => 'Nueva Zelanda',
            ),
            416 => 
            array (
                'country_id' => 162,
                'id' => 417,
                'locale' => 'es',
                'name' => 'Nicaragua',
            ),
            417 => 
            array (
                'country_id' => 163,
                'id' => 418,
                'locale' => 'es',
                'name' => 'Níger',
            ),
            418 => 
            array (
                'country_id' => 164,
                'id' => 419,
                'locale' => 'es',
                'name' => 'Nigeria',
            ),
            419 => 
            array (
                'country_id' => 165,
                'id' => 420,
                'locale' => 'es',
                'name' => 'Niue',
            ),
            420 => 
            array (
                'country_id' => 166,
                'id' => 421,
                'locale' => 'es',
                'name' => 'Isla Norfolk',
            ),
            421 => 
            array (
                'country_id' => 167,
                'id' => 422,
                'locale' => 'es',
                'name' => 'Corea del Norte',
            ),
            422 => 
            array (
                'country_id' => 168,
                'id' => 423,
                'locale' => 'es',
                'name' => 'Islas Marianas del Norte',
            ),
            423 => 
            array (
                'country_id' => 169,
                'id' => 424,
                'locale' => 'es',
                'name' => 'Noruega',
            ),
            424 => 
            array (
                'country_id' => 170,
                'id' => 425,
                'locale' => 'es',
                'name' => 'Omán',
            ),
            425 => 
            array (
                'country_id' => 171,
                'id' => 426,
                'locale' => 'es',
                'name' => 'Pakistán',
            ),
            426 => 
            array (
                'country_id' => 172,
                'id' => 427,
                'locale' => 'es',
                'name' => 'Palaos',
            ),
            427 => 
            array (
                'country_id' => 173,
                'id' => 428,
                'locale' => 'es',
                'name' => 'Palestina',
            ),
            428 => 
            array (
                'country_id' => 174,
                'id' => 429,
                'locale' => 'es',
                'name' => 'Panamá',
            ),
            429 => 
            array (
                'country_id' => 175,
                'id' => 430,
                'locale' => 'es',
                'name' => 'Papúa Nueva Guinea',
            ),
            430 => 
            array (
                'country_id' => 176,
                'id' => 431,
                'locale' => 'es',
                'name' => 'Paraguay',
            ),
            431 => 
            array (
                'country_id' => 177,
                'id' => 432,
                'locale' => 'es',
                'name' => 'Perú',
            ),
            432 => 
            array (
                'country_id' => 178,
                'id' => 433,
                'locale' => 'es',
                'name' => 'Filipinas',
            ),
            433 => 
            array (
                'country_id' => 179,
                'id' => 434,
                'locale' => 'es',
                'name' => 'Islas Pitcairn',
            ),
            434 => 
            array (
                'country_id' => 180,
                'id' => 435,
                'locale' => 'es',
                'name' => 'Polonia',
            ),
            435 => 
            array (
                'country_id' => 181,
                'id' => 436,
                'locale' => 'es',
                'name' => 'Portugal',
            ),
            436 => 
            array (
                'country_id' => 182,
                'id' => 437,
                'locale' => 'es',
                'name' => 'Puerto Rico',
            ),
            437 => 
            array (
                'country_id' => 183,
                'id' => 438,
                'locale' => 'es',
                'name' => 'Catar',
            ),
            438 => 
            array (
                'country_id' => 184,
                'id' => 439,
                'locale' => 'es',
                'name' => 'Reunión',
            ),
            439 => 
            array (
                'country_id' => 185,
                'id' => 440,
                'locale' => 'es',
                'name' => 'Rumania',
            ),
            440 => 
            array (
                'country_id' => 186,
                'id' => 441,
                'locale' => 'es',
                'name' => 'Rusia',
            ),
            441 => 
            array (
                'country_id' => 187,
                'id' => 442,
                'locale' => 'es',
                'name' => 'Ruanda',
            ),
            442 => 
            array (
                'country_id' => 188,
                'id' => 443,
                'locale' => 'es',
                'name' => 'Samoa',
            ),
            443 => 
            array (
                'country_id' => 189,
                'id' => 444,
                'locale' => 'es',
                'name' => 'San Marino',
            ),
            444 => 
            array (
                'country_id' => 190,
                'id' => 445,
                'locale' => 'es',
                'name' => 'Santo Tomé y Príncipe',
            ),
            445 => 
            array (
                'country_id' => 191,
                'id' => 446,
                'locale' => 'es',
                'name' => 'Arabia Saudita',
            ),
            446 => 
            array (
                'country_id' => 192,
                'id' => 447,
                'locale' => 'es',
                'name' => 'Senegal',
            ),
            447 => 
            array (
                'country_id' => 193,
                'id' => 448,
                'locale' => 'es',
                'name' => 'Serbia',
            ),
            448 => 
            array (
                'country_id' => 194,
                'id' => 449,
                'locale' => 'es',
                'name' => 'Seychelles',
            ),
            449 => 
            array (
                'country_id' => 195,
                'id' => 450,
                'locale' => 'es',
                'name' => 'Sierra Leona',
            ),
            450 => 
            array (
                'country_id' => 196,
                'id' => 451,
                'locale' => 'es',
                'name' => 'Singapur',
            ),
            451 => 
            array (
                'country_id' => 197,
                'id' => 452,
                'locale' => 'es',
                'name' => 'San Martín',
            ),
            452 => 
            array (
                'country_id' => 198,
                'id' => 453,
                'locale' => 'es',
                'name' => 'Eslovaquia',
            ),
            453 => 
            array (
                'country_id' => 199,
                'id' => 454,
                'locale' => 'es',
                'name' => 'Eslovenia',
            ),
            454 => 
            array (
                'country_id' => 200,
                'id' => 455,
                'locale' => 'es',
                'name' => 'Islas Salomón',
            ),
            455 => 
            array (
                'country_id' => 201,
                'id' => 456,
                'locale' => 'es',
                'name' => 'Somalia',
            ),
            456 => 
            array (
                'country_id' => 202,
                'id' => 457,
                'locale' => 'es',
                'name' => 'Sudáfrica',
            ),
            457 => 
            array (
                'country_id' => 203,
                'id' => 458,
                'locale' => 'es',
                'name' => 'Islas Georgias del Sur y Sandwich del Sur',
            ),
            458 => 
            array (
                'country_id' => 204,
                'id' => 459,
                'locale' => 'es',
                'name' => 'Corea del Sur',
            ),
            459 => 
            array (
                'country_id' => 205,
                'id' => 460,
                'locale' => 'es',
                'name' => 'Sudán del Sur',
            ),
            460 => 
            array (
                'country_id' => 206,
                'id' => 461,
                'locale' => 'es',
                'name' => 'España',
            ),
            461 => 
            array (
                'country_id' => 207,
                'id' => 462,
                'locale' => 'es',
                'name' => 'Sri Lanka',
            ),
            462 => 
            array (
                'country_id' => 208,
                'id' => 463,
                'locale' => 'es',
                'name' => 'San Bartolomé',
            ),
            463 => 
            array (
                'country_id' => 209,
                'id' => 464,
                'locale' => 'es',
                'name' => 'Santa Elena',
            ),
            464 => 
            array (
                'country_id' => 210,
                'id' => 465,
                'locale' => 'es',
                'name' => 'San Cristóbal y Nieves',
            ),
            465 => 
            array (
                'country_id' => 211,
                'id' => 466,
                'locale' => 'es',
                'name' => 'Santa Lucía',
            ),
            466 => 
            array (
                'country_id' => 212,
                'id' => 467,
                'locale' => 'es',
                'name' => 'San Martín',
            ),
            467 => 
            array (
                'country_id' => 213,
                'id' => 468,
                'locale' => 'es',
                'name' => 'San Pedro y Miquelón',
            ),
            468 => 
            array (
                'country_id' => 214,
                'id' => 469,
                'locale' => 'es',
                'name' => 'San Vicente y las Granadinas',
            ),
            469 => 
            array (
                'country_id' => 215,
                'id' => 470,
                'locale' => 'es',
                'name' => 'Sudán',
            ),
            470 => 
            array (
                'country_id' => 216,
                'id' => 471,
                'locale' => 'es',
                'name' => 'Surinam',
            ),
            471 => 
            array (
                'country_id' => 217,
                'id' => 472,
                'locale' => 'es',
                'name' => 'Svalbard y Jan Mayen',
            ),
            472 => 
            array (
                'country_id' => 218,
                'id' => 473,
                'locale' => 'es',
                'name' => 'Suazilandia',
            ),
            473 => 
            array (
                'country_id' => 219,
                'id' => 474,
                'locale' => 'es',
                'name' => 'Suecia',
            ),
            474 => 
            array (
                'country_id' => 220,
                'id' => 475,
                'locale' => 'es',
                'name' => 'Suiza',
            ),
            475 => 
            array (
                'country_id' => 221,
                'id' => 476,
                'locale' => 'es',
                'name' => 'Siri',
            ),
            476 => 
            array (
                'country_id' => 222,
                'id' => 477,
                'locale' => 'es',
                'name' => 'Taiwán',
            ),
            477 => 
            array (
                'country_id' => 223,
                'id' => 478,
                'locale' => 'es',
                'name' => 'Tayikistán',
            ),
            478 => 
            array (
                'country_id' => 224,
                'id' => 479,
                'locale' => 'es',
                'name' => 'Tanzania',
            ),
            479 => 
            array (
                'country_id' => 225,
                'id' => 480,
                'locale' => 'es',
                'name' => 'Tailandia',
            ),
            480 => 
            array (
                'country_id' => 226,
                'id' => 481,
                'locale' => 'es',
                'name' => 'Timor Oriental',
            ),
            481 => 
            array (
                'country_id' => 227,
                'id' => 482,
                'locale' => 'es',
                'name' => 'Togo',
            ),
            482 => 
            array (
                'country_id' => 228,
                'id' => 483,
                'locale' => 'es',
                'name' => 'Tokelau',
            ),
            483 => 
            array (
                'country_id' => 229,
                'id' => 484,
                'locale' => 'es',
                'name' => 'Tonga',
            ),
            484 => 
            array (
                'country_id' => 230,
                'id' => 485,
                'locale' => 'es',
                'name' => 'Trinidad y Tobago',
            ),
            485 => 
            array (
                'country_id' => 231,
                'id' => 486,
                'locale' => 'es',
                'name' => 'Tristán de Acuña',
            ),
            486 => 
            array (
                'country_id' => 232,
                'id' => 487,
                'locale' => 'es',
                'name' => 'Túnez',
            ),
            487 => 
            array (
                'country_id' => 233,
                'id' => 488,
                'locale' => 'es',
                'name' => 'Turquía',
            ),
            488 => 
            array (
                'country_id' => 234,
                'id' => 489,
                'locale' => 'es',
                'name' => 'Turkmenistán',
            ),
            489 => 
            array (
                'country_id' => 235,
                'id' => 490,
                'locale' => 'es',
                'name' => 'Islas Turcas y Caicos',
            ),
            490 => 
            array (
                'country_id' => 236,
                'id' => 491,
                'locale' => 'es',
                'name' => 'Tuvalu',
            ),
            491 => 
            array (
                'country_id' => 237,
                'id' => 492,
                'locale' => 'es',
                'name' => 'Islas Ultramarinas Menores de los Estados Unidos',
            ),
            492 => 
            array (
                'country_id' => 238,
                'id' => 493,
                'locale' => 'es',
                'name' => 'Islas Vírgenes de los Estados Unidos',
            ),
            493 => 
            array (
                'country_id' => 239,
                'id' => 494,
                'locale' => 'es',
                'name' => 'Uganda',
            ),
            494 => 
            array (
                'country_id' => 240,
                'id' => 495,
                'locale' => 'es',
                'name' => 'Ucrania',
            ),
            495 => 
            array (
                'country_id' => 241,
                'id' => 496,
                'locale' => 'es',
                'name' => 'Emiratos árabes Unidos',
            ),
            496 => 
            array (
                'country_id' => 242,
                'id' => 497,
                'locale' => 'es',
                'name' => 'Reino Unido',
            ),
            497 => 
            array (
                'country_id' => 243,
                'id' => 498,
                'locale' => 'es',
                'name' => 'Naciones Unidas',
            ),
            498 => 
            array (
                'country_id' => 244,
                'id' => 499,
                'locale' => 'es',
                'name' => 'Estados Unidos',
            ),
            499 => 
            array (
                'country_id' => 245,
                'id' => 500,
                'locale' => 'es',
                'name' => 'Uruguay',
            ),
        ));
        \DB::table('country_translations')->insert(array (
            0 => 
            array (
                'country_id' => 246,
                'id' => 501,
                'locale' => 'es',
                'name' => 'Uzbekistán',
            ),
            1 => 
            array (
                'country_id' => 247,
                'id' => 502,
                'locale' => 'es',
                'name' => 'Vanuatu',
            ),
            2 => 
            array (
                'country_id' => 248,
                'id' => 503,
                'locale' => 'es',
                'name' => 'Ciudad del Vaticano',
            ),
            3 => 
            array (
                'country_id' => 249,
                'id' => 504,
                'locale' => 'es',
                'name' => 'Venezuela',
            ),
            4 => 
            array (
                'country_id' => 250,
                'id' => 505,
                'locale' => 'es',
                'name' => 'Vietnam',
            ),
            5 => 
            array (
                'country_id' => 251,
                'id' => 506,
                'locale' => 'es',
                'name' => 'Wallis y Futuna',
            ),
            6 => 
            array (
                'country_id' => 252,
                'id' => 507,
                'locale' => 'es',
                'name' => 'Sahara Occidental',
            ),
            7 => 
            array (
                'country_id' => 253,
                'id' => 508,
                'locale' => 'es',
                'name' => 'Yemen',
            ),
            8 => 
            array (
                'country_id' => 254,
                'id' => 509,
                'locale' => 'es',
                'name' => 'Zambia',
            ),
            9 => 
            array (
                'country_id' => 255,
                'id' => 510,
                'locale' => 'es',
                'name' => 'Zimbabue',
            ),
            10 => 
            array (
                'country_id' => 1,
                'id' => 511,
                'locale' => 'fa',
                'name' => 'افغانستان',
            ),
            11 => 
            array (
                'country_id' => 2,
                'id' => 512,
                'locale' => 'fa',
                'name' => 'جزایر الند',
            ),
            12 => 
            array (
                'country_id' => 3,
                'id' => 513,
                'locale' => 'fa',
                'name' => 'آلبانی',
            ),
            13 => 
            array (
                'country_id' => 4,
                'id' => 514,
                'locale' => 'fa',
                'name' => 'الجزایر',
            ),
            14 => 
            array (
                'country_id' => 5,
                'id' => 515,
                'locale' => 'fa',
                'name' => 'ساموآ آمریکایی',
            ),
            15 => 
            array (
                'country_id' => 6,
                'id' => 516,
                'locale' => 'fa',
                'name' => 'آندورا',
            ),
            16 => 
            array (
                'country_id' => 7,
                'id' => 517,
                'locale' => 'fa',
                'name' => 'آنگولا',
            ),
            17 => 
            array (
                'country_id' => 8,
                'id' => 518,
                'locale' => 'fa',
                'name' => 'آنگولا',
            ),
            18 => 
            array (
                'country_id' => 9,
                'id' => 519,
                'locale' => 'fa',
                'name' => 'جنوبگان',
            ),
            19 => 
            array (
                'country_id' => 10,
                'id' => 520,
                'locale' => 'fa',
                'name' => 'آنتیگوا و باربودا',
            ),
            20 => 
            array (
                'country_id' => 11,
                'id' => 521,
                'locale' => 'fa',
                'name' => 'آرژانتین',
            ),
            21 => 
            array (
                'country_id' => 12,
                'id' => 522,
                'locale' => 'fa',
                'name' => 'ارمنستان',
            ),
            22 => 
            array (
                'country_id' => 13,
                'id' => 523,
                'locale' => 'fa',
                'name' => 'آروبا',
            ),
            23 => 
            array (
                'country_id' => 14,
                'id' => 524,
                'locale' => 'fa',
                'name' => 'جزیره صعود',
            ),
            24 => 
            array (
                'country_id' => 15,
                'id' => 525,
                'locale' => 'fa',
                'name' => 'استرالیا',
            ),
            25 => 
            array (
                'country_id' => 16,
                'id' => 526,
                'locale' => 'fa',
                'name' => 'اتریش',
            ),
            26 => 
            array (
                'country_id' => 17,
                'id' => 527,
                'locale' => 'fa',
                'name' => 'آذربایجان',
            ),
            27 => 
            array (
                'country_id' => 18,
                'id' => 528,
                'locale' => 'fa',
                'name' => 'باهاما',
            ),
            28 => 
            array (
                'country_id' => 19,
                'id' => 529,
                'locale' => 'fa',
                'name' => 'بحرین',
            ),
            29 => 
            array (
                'country_id' => 20,
                'id' => 530,
                'locale' => 'fa',
                'name' => 'بنگلادش',
            ),
            30 => 
            array (
                'country_id' => 21,
                'id' => 531,
                'locale' => 'fa',
                'name' => 'باربادوس',
            ),
            31 => 
            array (
                'country_id' => 22,
                'id' => 532,
                'locale' => 'fa',
                'name' => 'بلاروس',
            ),
            32 => 
            array (
                'country_id' => 23,
                'id' => 533,
                'locale' => 'fa',
                'name' => 'بلژیک',
            ),
            33 => 
            array (
                'country_id' => 24,
                'id' => 534,
                'locale' => 'fa',
                'name' => 'بلژیک',
            ),
            34 => 
            array (
                'country_id' => 25,
                'id' => 535,
                'locale' => 'fa',
                'name' => 'بنین',
            ),
            35 => 
            array (
                'country_id' => 26,
                'id' => 536,
                'locale' => 'fa',
                'name' => 'برمودا',
            ),
            36 => 
            array (
                'country_id' => 27,
                'id' => 537,
                'locale' => 'fa',
                'name' => 'بوتان',
            ),
            37 => 
            array (
                'country_id' => 28,
                'id' => 538,
                'locale' => 'fa',
                'name' => 'بولیوی',
            ),
            38 => 
            array (
                'country_id' => 29,
                'id' => 539,
                'locale' => 'fa',
                'name' => 'بوسنی و هرزگوین',
            ),
            39 => 
            array (
                'country_id' => 30,
                'id' => 540,
                'locale' => 'fa',
                'name' => 'بوتسوانا',
            ),
            40 => 
            array (
                'country_id' => 31,
                'id' => 541,
                'locale' => 'fa',
                'name' => 'برزیل',
            ),
            41 => 
            array (
                'country_id' => 32,
                'id' => 542,
                'locale' => 'fa',
                'name' => 'قلمرو اقیانوس هند انگلیس',
            ),
            42 => 
            array (
                'country_id' => 33,
                'id' => 543,
                'locale' => 'fa',
                'name' => 'جزایر ویرجین انگلیس',
            ),
            43 => 
            array (
                'country_id' => 34,
                'id' => 544,
                'locale' => 'fa',
                'name' => 'برونئی',
            ),
            44 => 
            array (
                'country_id' => 35,
                'id' => 545,
                'locale' => 'fa',
                'name' => 'بلغارستان',
            ),
            45 => 
            array (
                'country_id' => 36,
                'id' => 546,
                'locale' => 'fa',
                'name' => 'بورکینا فاسو',
            ),
            46 => 
            array (
                'country_id' => 37,
                'id' => 547,
                'locale' => 'fa',
                'name' => 'بوروندی',
            ),
            47 => 
            array (
                'country_id' => 38,
                'id' => 548,
                'locale' => 'fa',
                'name' => 'کامبوج',
            ),
            48 => 
            array (
                'country_id' => 39,
                'id' => 549,
                'locale' => 'fa',
                'name' => 'کامرون',
            ),
            49 => 
            array (
                'country_id' => 40,
                'id' => 550,
                'locale' => 'fa',
                'name' => 'کانادا',
            ),
            50 => 
            array (
                'country_id' => 41,
                'id' => 551,
                'locale' => 'fa',
                'name' => 'جزایر قناری',
            ),
            51 => 
            array (
                'country_id' => 42,
                'id' => 552,
                'locale' => 'fa',
                'name' => 'کیپ ورد',
            ),
            52 => 
            array (
                'country_id' => 43,
                'id' => 553,
                'locale' => 'fa',
                'name' => 'کارائیب هلند',
            ),
            53 => 
            array (
                'country_id' => 44,
                'id' => 554,
                'locale' => 'fa',
                'name' => 'Cayman Islands',
            ),
            54 => 
            array (
                'country_id' => 45,
                'id' => 555,
                'locale' => 'fa',
                'name' => 'جمهوری آفریقای مرکزی',
            ),
            55 => 
            array (
                'country_id' => 46,
                'id' => 556,
                'locale' => 'fa',
                'name' => 'سوتا و ملیلا',
            ),
            56 => 
            array (
                'country_id' => 47,
                'id' => 557,
                'locale' => 'fa',
                'name' => 'چاد',
            ),
            57 => 
            array (
                'country_id' => 48,
                'id' => 558,
                'locale' => 'fa',
                'name' => 'شیلی',
            ),
            58 => 
            array (
                'country_id' => 49,
                'id' => 559,
                'locale' => 'fa',
                'name' => 'چین',
            ),
            59 => 
            array (
                'country_id' => 50,
                'id' => 560,
                'locale' => 'fa',
                'name' => 'جزیره کریسمس',
            ),
            60 => 
            array (
                'country_id' => 51,
                'id' => 561,
                'locale' => 'fa',
            'name' => 'جزایر کوکو (Keeling)',
            ),
            61 => 
            array (
                'country_id' => 52,
                'id' => 562,
                'locale' => 'fa',
                'name' => 'کلمبیا',
            ),
            62 => 
            array (
                'country_id' => 53,
                'id' => 563,
                'locale' => 'fa',
                'name' => 'کومور',
            ),
            63 => 
            array (
                'country_id' => 54,
                'id' => 564,
                'locale' => 'fa',
                'name' => 'کنگو - برزاویل',
            ),
            64 => 
            array (
                'country_id' => 55,
                'id' => 565,
                'locale' => 'fa',
                'name' => 'کنگو - کینشاسا',
            ),
            65 => 
            array (
                'country_id' => 56,
                'id' => 566,
                'locale' => 'fa',
                'name' => 'جزایر کوک',
            ),
            66 => 
            array (
                'country_id' => 57,
                'id' => 567,
                'locale' => 'fa',
                'name' => 'کاستاریکا',
            ),
            67 => 
            array (
                'country_id' => 58,
                'id' => 568,
                'locale' => 'fa',
                'name' => 'ساحل عاج',
            ),
            68 => 
            array (
                'country_id' => 59,
                'id' => 569,
                'locale' => 'fa',
                'name' => 'کرواسی',
            ),
            69 => 
            array (
                'country_id' => 60,
                'id' => 570,
                'locale' => 'fa',
                'name' => 'کوبا',
            ),
            70 => 
            array (
                'country_id' => 61,
                'id' => 571,
                'locale' => 'fa',
                'name' => 'کوراسائو',
            ),
            71 => 
            array (
                'country_id' => 62,
                'id' => 572,
                'locale' => 'fa',
                'name' => 'قبرس',
            ),
            72 => 
            array (
                'country_id' => 63,
                'id' => 573,
                'locale' => 'fa',
                'name' => 'چک',
            ),
            73 => 
            array (
                'country_id' => 64,
                'id' => 574,
                'locale' => 'fa',
                'name' => 'دانمارک',
            ),
            74 => 
            array (
                'country_id' => 65,
                'id' => 575,
                'locale' => 'fa',
                'name' => 'دیگو گارسیا',
            ),
            75 => 
            array (
                'country_id' => 66,
                'id' => 576,
                'locale' => 'fa',
                'name' => 'جیبوتی',
            ),
            76 => 
            array (
                'country_id' => 67,
                'id' => 577,
                'locale' => 'fa',
                'name' => 'دومینیکا',
            ),
            77 => 
            array (
                'country_id' => 68,
                'id' => 578,
                'locale' => 'fa',
                'name' => 'جمهوری دومینیکن',
            ),
            78 => 
            array (
                'country_id' => 69,
                'id' => 579,
                'locale' => 'fa',
                'name' => 'اکوادور',
            ),
            79 => 
            array (
                'country_id' => 70,
                'id' => 580,
                'locale' => 'fa',
                'name' => 'مصر',
            ),
            80 => 
            array (
                'country_id' => 71,
                'id' => 581,
                'locale' => 'fa',
                'name' => 'السالوادور',
            ),
            81 => 
            array (
                'country_id' => 72,
                'id' => 582,
                'locale' => 'fa',
                'name' => 'گینه استوایی',
            ),
            82 => 
            array (
                'country_id' => 73,
                'id' => 583,
                'locale' => 'fa',
                'name' => 'اریتره',
            ),
            83 => 
            array (
                'country_id' => 74,
                'id' => 584,
                'locale' => 'fa',
                'name' => 'استونی',
            ),
            84 => 
            array (
                'country_id' => 75,
                'id' => 585,
                'locale' => 'fa',
                'name' => 'اتیوپی',
            ),
            85 => 
            array (
                'country_id' => 76,
                'id' => 586,
                'locale' => 'fa',
                'name' => 'منطقه یورو',
            ),
            86 => 
            array (
                'country_id' => 77,
                'id' => 587,
                'locale' => 'fa',
                'name' => 'جزایر فالکلند',
            ),
            87 => 
            array (
                'country_id' => 78,
                'id' => 588,
                'locale' => 'fa',
                'name' => 'جزایر فارو',
            ),
            88 => 
            array (
                'country_id' => 79,
                'id' => 589,
                'locale' => 'fa',
                'name' => 'فیجی',
            ),
            89 => 
            array (
                'country_id' => 80,
                'id' => 590,
                'locale' => 'fa',
                'name' => 'فنلاند',
            ),
            90 => 
            array (
                'country_id' => 81,
                'id' => 591,
                'locale' => 'fa',
                'name' => 'فرانسه',
            ),
            91 => 
            array (
                'country_id' => 82,
                'id' => 592,
                'locale' => 'fa',
                'name' => 'گویان فرانسه',
            ),
            92 => 
            array (
                'country_id' => 83,
                'id' => 593,
                'locale' => 'fa',
                'name' => 'پلی‌نزی فرانسه',
            ),
            93 => 
            array (
                'country_id' => 84,
                'id' => 594,
                'locale' => 'fa',
                'name' => 'سرزمین های جنوبی فرانسه',
            ),
            94 => 
            array (
                'country_id' => 85,
                'id' => 595,
                'locale' => 'fa',
                'name' => 'گابن',
            ),
            95 => 
            array (
                'country_id' => 86,
                'id' => 596,
                'locale' => 'fa',
                'name' => 'گامبیا',
            ),
            96 => 
            array (
                'country_id' => 87,
                'id' => 597,
                'locale' => 'fa',
                'name' => 'جورجیا',
            ),
            97 => 
            array (
                'country_id' => 88,
                'id' => 598,
                'locale' => 'fa',
                'name' => 'آلمان',
            ),
            98 => 
            array (
                'country_id' => 89,
                'id' => 599,
                'locale' => 'fa',
                'name' => 'غنا',
            ),
            99 => 
            array (
                'country_id' => 90,
                'id' => 600,
                'locale' => 'fa',
                'name' => 'جبل الطارق',
            ),
            100 => 
            array (
                'country_id' => 91,
                'id' => 601,
                'locale' => 'fa',
                'name' => 'یونان',
            ),
            101 => 
            array (
                'country_id' => 92,
                'id' => 602,
                'locale' => 'fa',
                'name' => 'گرینلند',
            ),
            102 => 
            array (
                'country_id' => 93,
                'id' => 603,
                'locale' => 'fa',
                'name' => 'گرنادا',
            ),
            103 => 
            array (
                'country_id' => 94,
                'id' => 604,
                'locale' => 'fa',
                'name' => 'گوادلوپ',
            ),
            104 => 
            array (
                'country_id' => 95,
                'id' => 605,
                'locale' => 'fa',
                'name' => 'گوام',
            ),
            105 => 
            array (
                'country_id' => 96,
                'id' => 606,
                'locale' => 'fa',
                'name' => 'گواتمالا',
            ),
            106 => 
            array (
                'country_id' => 97,
                'id' => 607,
                'locale' => 'fa',
                'name' => 'گورنسی',
            ),
            107 => 
            array (
                'country_id' => 98,
                'id' => 608,
                'locale' => 'fa',
                'name' => 'گینه',
            ),
            108 => 
            array (
                'country_id' => 99,
                'id' => 609,
                'locale' => 'fa',
                'name' => 'گینه بیسائو',
            ),
            109 => 
            array (
                'country_id' => 100,
                'id' => 610,
                'locale' => 'fa',
                'name' => 'گویان',
            ),
            110 => 
            array (
                'country_id' => 101,
                'id' => 611,
                'locale' => 'fa',
                'name' => 'هائیتی',
            ),
            111 => 
            array (
                'country_id' => 102,
                'id' => 612,
                'locale' => 'fa',
                'name' => 'هندوراس',
            ),
            112 => 
            array (
                'country_id' => 103,
                'id' => 613,
                'locale' => 'fa',
                'name' => 'هنگ کنگ SAR چین',
            ),
            113 => 
            array (
                'country_id' => 104,
                'id' => 614,
                'locale' => 'fa',
                'name' => 'مجارستان',
            ),
            114 => 
            array (
                'country_id' => 105,
                'id' => 615,
                'locale' => 'fa',
                'name' => 'ایسلند',
            ),
            115 => 
            array (
                'country_id' => 106,
                'id' => 616,
                'locale' => 'fa',
                'name' => 'هند',
            ),
            116 => 
            array (
                'country_id' => 107,
                'id' => 617,
                'locale' => 'fa',
                'name' => 'اندونزی',
            ),
            117 => 
            array (
                'country_id' => 108,
                'id' => 618,
                'locale' => 'fa',
                'name' => 'ایران',
            ),
            118 => 
            array (
                'country_id' => 109,
                'id' => 619,
                'locale' => 'fa',
                'name' => 'عراق',
            ),
            119 => 
            array (
                'country_id' => 110,
                'id' => 620,
                'locale' => 'fa',
                'name' => 'ایرلند',
            ),
            120 => 
            array (
                'country_id' => 111,
                'id' => 621,
                'locale' => 'fa',
                'name' => 'جزیره من',
            ),
            121 => 
            array (
                'country_id' => 112,
                'id' => 622,
                'locale' => 'fa',
                'name' => 'اسرائيل',
            ),
            122 => 
            array (
                'country_id' => 113,
                'id' => 623,
                'locale' => 'fa',
                'name' => 'ایتالیا',
            ),
            123 => 
            array (
                'country_id' => 114,
                'id' => 624,
                'locale' => 'fa',
                'name' => 'جامائیکا',
            ),
            124 => 
            array (
                'country_id' => 115,
                'id' => 625,
                'locale' => 'fa',
                'name' => 'ژاپن',
            ),
            125 => 
            array (
                'country_id' => 116,
                'id' => 626,
                'locale' => 'fa',
                'name' => 'پیراهن ورزشی',
            ),
            126 => 
            array (
                'country_id' => 117,
                'id' => 627,
                'locale' => 'fa',
                'name' => 'اردن',
            ),
            127 => 
            array (
                'country_id' => 118,
                'id' => 628,
                'locale' => 'fa',
                'name' => 'قزاقستان',
            ),
            128 => 
            array (
                'country_id' => 119,
                'id' => 629,
                'locale' => 'fa',
                'name' => 'کنیا',
            ),
            129 => 
            array (
                'country_id' => 120,
                'id' => 630,
                'locale' => 'fa',
                'name' => 'کیریباتی',
            ),
            130 => 
            array (
                'country_id' => 121,
                'id' => 631,
                'locale' => 'fa',
                'name' => 'کوزوو',
            ),
            131 => 
            array (
                'country_id' => 122,
                'id' => 632,
                'locale' => 'fa',
                'name' => 'کویت',
            ),
            132 => 
            array (
                'country_id' => 123,
                'id' => 633,
                'locale' => 'fa',
                'name' => 'قرقیزستان',
            ),
            133 => 
            array (
                'country_id' => 124,
                'id' => 634,
                'locale' => 'fa',
                'name' => 'لائوس',
            ),
            134 => 
            array (
                'country_id' => 125,
                'id' => 635,
                'locale' => 'fa',
                'name' => 'لتونی',
            ),
            135 => 
            array (
                'country_id' => 126,
                'id' => 636,
                'locale' => 'fa',
                'name' => 'لبنان',
            ),
            136 => 
            array (
                'country_id' => 127,
                'id' => 637,
                'locale' => 'fa',
                'name' => 'لسوتو',
            ),
            137 => 
            array (
                'country_id' => 128,
                'id' => 638,
                'locale' => 'fa',
                'name' => 'لیبریا',
            ),
            138 => 
            array (
                'country_id' => 129,
                'id' => 639,
                'locale' => 'fa',
                'name' => 'لیبی',
            ),
            139 => 
            array (
                'country_id' => 130,
                'id' => 640,
                'locale' => 'fa',
                'name' => 'لیختن اشتاین',
            ),
            140 => 
            array (
                'country_id' => 131,
                'id' => 641,
                'locale' => 'fa',
                'name' => 'لیتوانی',
            ),
            141 => 
            array (
                'country_id' => 132,
                'id' => 642,
                'locale' => 'fa',
                'name' => 'لوکزامبورگ',
            ),
            142 => 
            array (
                'country_id' => 133,
                'id' => 643,
                'locale' => 'fa',
                'name' => 'ماکائو SAR چین',
            ),
            143 => 
            array (
                'country_id' => 134,
                'id' => 644,
                'locale' => 'fa',
                'name' => 'مقدونیه',
            ),
            144 => 
            array (
                'country_id' => 135,
                'id' => 645,
                'locale' => 'fa',
                'name' => 'ماداگاسکار',
            ),
            145 => 
            array (
                'country_id' => 136,
                'id' => 646,
                'locale' => 'fa',
                'name' => 'مالاوی',
            ),
            146 => 
            array (
                'country_id' => 137,
                'id' => 647,
                'locale' => 'fa',
                'name' => 'مالزی',
            ),
            147 => 
            array (
                'country_id' => 138,
                'id' => 648,
                'locale' => 'fa',
                'name' => 'مالدیو',
            ),
            148 => 
            array (
                'country_id' => 139,
                'id' => 649,
                'locale' => 'fa',
                'name' => 'مالی',
            ),
            149 => 
            array (
                'country_id' => 140,
                'id' => 650,
                'locale' => 'fa',
                'name' => 'مالت',
            ),
            150 => 
            array (
                'country_id' => 141,
                'id' => 651,
                'locale' => 'fa',
                'name' => 'جزایر مارشال',
            ),
            151 => 
            array (
                'country_id' => 142,
                'id' => 652,
                'locale' => 'fa',
                'name' => 'مارتینیک',
            ),
            152 => 
            array (
                'country_id' => 143,
                'id' => 653,
                'locale' => 'fa',
                'name' => 'موریتانی',
            ),
            153 => 
            array (
                'country_id' => 144,
                'id' => 654,
                'locale' => 'fa',
                'name' => 'موریس',
            ),
            154 => 
            array (
                'country_id' => 145,
                'id' => 655,
                'locale' => 'fa',
                'name' => 'گمشده',
            ),
            155 => 
            array (
                'country_id' => 146,
                'id' => 656,
                'locale' => 'fa',
                'name' => 'مکزیک',
            ),
            156 => 
            array (
                'country_id' => 147,
                'id' => 657,
                'locale' => 'fa',
                'name' => 'میکرونزی',
            ),
            157 => 
            array (
                'country_id' => 148,
                'id' => 658,
                'locale' => 'fa',
                'name' => 'مولداوی',
            ),
            158 => 
            array (
                'country_id' => 149,
                'id' => 659,
                'locale' => 'fa',
                'name' => 'موناکو',
            ),
            159 => 
            array (
                'country_id' => 150,
                'id' => 660,
                'locale' => 'fa',
                'name' => 'مغولستان',
            ),
            160 => 
            array (
                'country_id' => 151,
                'id' => 661,
                'locale' => 'fa',
                'name' => 'مونته نگرو',
            ),
            161 => 
            array (
                'country_id' => 152,
                'id' => 662,
                'locale' => 'fa',
                'name' => 'مونتسرات',
            ),
            162 => 
            array (
                'country_id' => 153,
                'id' => 663,
                'locale' => 'fa',
                'name' => 'مراکش',
            ),
            163 => 
            array (
                'country_id' => 154,
                'id' => 664,
                'locale' => 'fa',
                'name' => 'موزامبیک',
            ),
            164 => 
            array (
                'country_id' => 155,
                'id' => 665,
                'locale' => 'fa',
            'name' => 'میانمار (برمه)',
            ),
            165 => 
            array (
                'country_id' => 156,
                'id' => 666,
                'locale' => 'fa',
                'name' => 'ناميبيا',
            ),
            166 => 
            array (
                'country_id' => 157,
                'id' => 667,
                'locale' => 'fa',
                'name' => 'نائورو',
            ),
            167 => 
            array (
                'country_id' => 158,
                'id' => 668,
                'locale' => 'fa',
                'name' => 'نپال',
            ),
            168 => 
            array (
                'country_id' => 159,
                'id' => 669,
                'locale' => 'fa',
                'name' => 'هلند',
            ),
            169 => 
            array (
                'country_id' => 160,
                'id' => 670,
                'locale' => 'fa',
                'name' => 'کالدونیای جدید',
            ),
            170 => 
            array (
                'country_id' => 161,
                'id' => 671,
                'locale' => 'fa',
                'name' => 'نیوزلند',
            ),
            171 => 
            array (
                'country_id' => 162,
                'id' => 672,
                'locale' => 'fa',
                'name' => 'نیکاراگوئه',
            ),
            172 => 
            array (
                'country_id' => 163,
                'id' => 673,
                'locale' => 'fa',
                'name' => 'نیجر',
            ),
            173 => 
            array (
                'country_id' => 164,
                'id' => 674,
                'locale' => 'fa',
                'name' => 'نیجریه',
            ),
            174 => 
            array (
                'country_id' => 165,
                'id' => 675,
                'locale' => 'fa',
                'name' => 'نیو',
            ),
            175 => 
            array (
                'country_id' => 166,
                'id' => 676,
                'locale' => 'fa',
                'name' => 'جزیره نورفولک',
            ),
            176 => 
            array (
                'country_id' => 167,
                'id' => 677,
                'locale' => 'fa',
                'name' => 'کره شمالی',
            ),
            177 => 
            array (
                'country_id' => 168,
                'id' => 678,
                'locale' => 'fa',
                'name' => 'جزایر ماریانای شمالی',
            ),
            178 => 
            array (
                'country_id' => 169,
                'id' => 679,
                'locale' => 'fa',
                'name' => 'نروژ',
            ),
            179 => 
            array (
                'country_id' => 170,
                'id' => 680,
                'locale' => 'fa',
                'name' => 'عمان',
            ),
            180 => 
            array (
                'country_id' => 171,
                'id' => 681,
                'locale' => 'fa',
                'name' => 'پاکستان',
            ),
            181 => 
            array (
                'country_id' => 172,
                'id' => 682,
                'locale' => 'fa',
                'name' => 'پالائو',
            ),
            182 => 
            array (
                'country_id' => 173,
                'id' => 683,
                'locale' => 'fa',
                'name' => 'سرزمین های فلسطینی',
            ),
            183 => 
            array (
                'country_id' => 174,
                'id' => 684,
                'locale' => 'fa',
                'name' => 'پاناما',
            ),
            184 => 
            array (
                'country_id' => 175,
                'id' => 685,
                'locale' => 'fa',
                'name' => 'پاپوا گینه نو',
            ),
            185 => 
            array (
                'country_id' => 176,
                'id' => 686,
                'locale' => 'fa',
                'name' => 'پاراگوئه',
            ),
            186 => 
            array (
                'country_id' => 177,
                'id' => 687,
                'locale' => 'fa',
                'name' => 'پرو',
            ),
            187 => 
            array (
                'country_id' => 178,
                'id' => 688,
                'locale' => 'fa',
                'name' => 'فیلیپین',
            ),
            188 => 
            array (
                'country_id' => 179,
                'id' => 689,
                'locale' => 'fa',
                'name' => 'جزایر پیکریرن',
            ),
            189 => 
            array (
                'country_id' => 180,
                'id' => 690,
                'locale' => 'fa',
                'name' => 'لهستان',
            ),
            190 => 
            array (
                'country_id' => 181,
                'id' => 691,
                'locale' => 'fa',
                'name' => 'کشور پرتغال',
            ),
            191 => 
            array (
                'country_id' => 182,
                'id' => 692,
                'locale' => 'fa',
                'name' => 'پورتوریکو',
            ),
            192 => 
            array (
                'country_id' => 183,
                'id' => 693,
                'locale' => 'fa',
                'name' => 'قطر',
            ),
            193 => 
            array (
                'country_id' => 184,
                'id' => 694,
                'locale' => 'fa',
                'name' => 'تجدید دیدار',
            ),
            194 => 
            array (
                'country_id' => 185,
                'id' => 695,
                'locale' => 'fa',
                'name' => 'رومانی',
            ),
            195 => 
            array (
                'country_id' => 186,
                'id' => 696,
                'locale' => 'fa',
                'name' => 'روسیه',
            ),
            196 => 
            array (
                'country_id' => 187,
                'id' => 697,
                'locale' => 'fa',
                'name' => 'رواندا',
            ),
            197 => 
            array (
                'country_id' => 188,
                'id' => 698,
                'locale' => 'fa',
                'name' => 'ساموآ',
            ),
            198 => 
            array (
                'country_id' => 189,
                'id' => 699,
                'locale' => 'fa',
                'name' => 'سان مارینو',
            ),
            199 => 
            array (
                'country_id' => 190,
                'id' => 700,
                'locale' => 'fa',
                'name' => 'سنت کیتس و نوویس',
            ),
            200 => 
            array (
                'country_id' => 191,
                'id' => 701,
                'locale' => 'fa',
                'name' => 'عربستان سعودی',
            ),
            201 => 
            array (
                'country_id' => 192,
                'id' => 702,
                'locale' => 'fa',
                'name' => 'سنگال',
            ),
            202 => 
            array (
                'country_id' => 193,
                'id' => 703,
                'locale' => 'fa',
                'name' => 'صربستان',
            ),
            203 => 
            array (
                'country_id' => 194,
                'id' => 704,
                'locale' => 'fa',
                'name' => 'سیشل',
            ),
            204 => 
            array (
                'country_id' => 195,
                'id' => 705,
                'locale' => 'fa',
                'name' => 'سیرالئون',
            ),
            205 => 
            array (
                'country_id' => 196,
                'id' => 706,
                'locale' => 'fa',
                'name' => 'سنگاپور',
            ),
            206 => 
            array (
                'country_id' => 197,
                'id' => 707,
                'locale' => 'fa',
                'name' => 'سینت ماارتن',
            ),
            207 => 
            array (
                'country_id' => 198,
                'id' => 708,
                'locale' => 'fa',
                'name' => 'اسلواکی',
            ),
            208 => 
            array (
                'country_id' => 199,
                'id' => 709,
                'locale' => 'fa',
                'name' => 'اسلوونی',
            ),
            209 => 
            array (
                'country_id' => 200,
                'id' => 710,
                'locale' => 'fa',
                'name' => 'جزایر سلیمان',
            ),
            210 => 
            array (
                'country_id' => 201,
                'id' => 711,
                'locale' => 'fa',
                'name' => 'سومالی',
            ),
            211 => 
            array (
                'country_id' => 202,
                'id' => 712,
                'locale' => 'fa',
                'name' => 'آفریقای جنوبی',
            ),
            212 => 
            array (
                'country_id' => 203,
                'id' => 713,
                'locale' => 'fa',
                'name' => 'جزایر جورجیا جنوبی و جزایر ساندویچ جنوبی',
            ),
            213 => 
            array (
                'country_id' => 204,
                'id' => 714,
                'locale' => 'fa',
                'name' => 'کره جنوبی',
            ),
            214 => 
            array (
                'country_id' => 205,
                'id' => 715,
                'locale' => 'fa',
                'name' => 'سودان جنوبی',
            ),
            215 => 
            array (
                'country_id' => 206,
                'id' => 716,
                'locale' => 'fa',
                'name' => 'اسپانیا',
            ),
            216 => 
            array (
                'country_id' => 207,
                'id' => 717,
                'locale' => 'fa',
                'name' => 'سری لانکا',
            ),
            217 => 
            array (
                'country_id' => 208,
                'id' => 718,
                'locale' => 'fa',
                'name' => 'سنت بارتلی',
            ),
            218 => 
            array (
                'country_id' => 209,
                'id' => 719,
                'locale' => 'fa',
                'name' => 'سنت هلنا',
            ),
            219 => 
            array (
                'country_id' => 210,
                'id' => 720,
                'locale' => 'fa',
                'name' => 'سنت کیتز و نوویس',
            ),
            220 => 
            array (
                'country_id' => 211,
                'id' => 721,
                'locale' => 'fa',
                'name' => 'سنت لوسیا',
            ),
            221 => 
            array (
                'country_id' => 212,
                'id' => 722,
                'locale' => 'fa',
                'name' => 'سنت مارتین',
            ),
            222 => 
            array (
                'country_id' => 213,
                'id' => 723,
                'locale' => 'fa',
                'name' => 'سنت پیر و میکلون',
            ),
            223 => 
            array (
                'country_id' => 214,
                'id' => 724,
                'locale' => 'fa',
                'name' => 'سنت وینسنت و گرنادینها',
            ),
            224 => 
            array (
                'country_id' => 215,
                'id' => 725,
                'locale' => 'fa',
                'name' => 'سودان',
            ),
            225 => 
            array (
                'country_id' => 216,
                'id' => 726,
                'locale' => 'fa',
                'name' => 'سورینام',
            ),
            226 => 
            array (
                'country_id' => 217,
                'id' => 727,
                'locale' => 'fa',
                'name' => 'اسوالبارد و جان ماین',
            ),
            227 => 
            array (
                'country_id' => 218,
                'id' => 728,
                'locale' => 'fa',
                'name' => 'سوازیلند',
            ),
            228 => 
            array (
                'country_id' => 219,
                'id' => 729,
                'locale' => 'fa',
                'name' => 'سوئد',
            ),
            229 => 
            array (
                'country_id' => 220,
                'id' => 730,
                'locale' => 'fa',
                'name' => 'سوئیس',
            ),
            230 => 
            array (
                'country_id' => 221,
                'id' => 731,
                'locale' => 'fa',
                'name' => 'سوریه',
            ),
            231 => 
            array (
                'country_id' => 222,
                'id' => 732,
                'locale' => 'fa',
                'name' => 'تایوان',
            ),
            232 => 
            array (
                'country_id' => 223,
                'id' => 733,
                'locale' => 'fa',
                'name' => 'تاجیکستان',
            ),
            233 => 
            array (
                'country_id' => 224,
                'id' => 734,
                'locale' => 'fa',
                'name' => 'تانزانیا',
            ),
            234 => 
            array (
                'country_id' => 225,
                'id' => 735,
                'locale' => 'fa',
                'name' => 'تایلند',
            ),
            235 => 
            array (
                'country_id' => 226,
                'id' => 736,
                'locale' => 'fa',
                'name' => 'تیمور-لست',
            ),
            236 => 
            array (
                'country_id' => 227,
                'id' => 737,
                'locale' => 'fa',
                'name' => 'رفتن',
            ),
            237 => 
            array (
                'country_id' => 228,
                'id' => 738,
                'locale' => 'fa',
                'name' => 'توکلو',
            ),
            238 => 
            array (
                'country_id' => 229,
                'id' => 739,
                'locale' => 'fa',
                'name' => 'تونگا',
            ),
            239 => 
            array (
                'country_id' => 230,
                'id' => 740,
                'locale' => 'fa',
                'name' => 'ترینیداد و توباگو',
            ),
            240 => 
            array (
                'country_id' => 231,
                'id' => 741,
                'locale' => 'fa',
                'name' => 'تریستان دا کانونا',
            ),
            241 => 
            array (
                'country_id' => 232,
                'id' => 742,
                'locale' => 'fa',
                'name' => 'تونس',
            ),
            242 => 
            array (
                'country_id' => 233,
                'id' => 743,
                'locale' => 'fa',
                'name' => 'بوقلمون',
            ),
            243 => 
            array (
                'country_id' => 234,
                'id' => 744,
                'locale' => 'fa',
                'name' => 'ترکمنستان',
            ),
            244 => 
            array (
                'country_id' => 235,
                'id' => 745,
                'locale' => 'fa',
                'name' => 'جزایر تورکس و کایکوس',
            ),
            245 => 
            array (
                'country_id' => 236,
                'id' => 746,
                'locale' => 'fa',
                'name' => 'تووالو',
            ),
            246 => 
            array (
                'country_id' => 237,
                'id' => 747,
                'locale' => 'fa',
                'name' => 'جزایر دور افتاده ایالات متحده آمریکا',
            ),
            247 => 
            array (
                'country_id' => 238,
                'id' => 748,
                'locale' => 'fa',
                'name' => 'جزایر ویرجین ایالات متحده',
            ),
            248 => 
            array (
                'country_id' => 239,
                'id' => 749,
                'locale' => 'fa',
                'name' => 'اوگاندا',
            ),
            249 => 
            array (
                'country_id' => 240,
                'id' => 750,
                'locale' => 'fa',
                'name' => 'اوکراین',
            ),
            250 => 
            array (
                'country_id' => 241,
                'id' => 751,
                'locale' => 'fa',
                'name' => 'امارات متحده عربی',
            ),
            251 => 
            array (
                'country_id' => 242,
                'id' => 752,
                'locale' => 'fa',
                'name' => 'انگلستان',
            ),
            252 => 
            array (
                'country_id' => 243,
                'id' => 753,
                'locale' => 'fa',
                'name' => 'سازمان ملل',
            ),
            253 => 
            array (
                'country_id' => 244,
                'id' => 754,
                'locale' => 'fa',
                'name' => 'ایالات متحده',
            ),
            254 => 
            array (
                'country_id' => 245,
                'id' => 755,
                'locale' => 'fa',
                'name' => 'اروگوئه',
            ),
            255 => 
            array (
                'country_id' => 246,
                'id' => 756,
                'locale' => 'fa',
                'name' => 'ازبکستان',
            ),
            256 => 
            array (
                'country_id' => 247,
                'id' => 757,
                'locale' => 'fa',
                'name' => 'وانواتو',
            ),
            257 => 
            array (
                'country_id' => 248,
                'id' => 758,
                'locale' => 'fa',
                'name' => 'شهر واتیکان',
            ),
            258 => 
            array (
                'country_id' => 249,
                'id' => 759,
                'locale' => 'fa',
                'name' => 'ونزوئلا',
            ),
            259 => 
            array (
                'country_id' => 250,
                'id' => 760,
                'locale' => 'fa',
                'name' => 'ویتنام',
            ),
            260 => 
            array (
                'country_id' => 251,
                'id' => 761,
                'locale' => 'fa',
                'name' => 'والیس و فوتونا',
            ),
            261 => 
            array (
                'country_id' => 252,
                'id' => 762,
                'locale' => 'fa',
                'name' => 'صحرای غربی',
            ),
            262 => 
            array (
                'country_id' => 253,
                'id' => 763,
                'locale' => 'fa',
                'name' => 'یمن',
            ),
            263 => 
            array (
                'country_id' => 254,
                'id' => 764,
                'locale' => 'fa',
                'name' => 'زامبیا',
            ),
            264 => 
            array (
                'country_id' => 255,
                'id' => 765,
                'locale' => 'fa',
                'name' => 'زیمبابوه',
            ),
            265 => 
            array (
                'country_id' => 1,
                'id' => 766,
                'locale' => 'pt_BR',
                'name' => 'Afeganistão',
            ),
            266 => 
            array (
                'country_id' => 2,
                'id' => 767,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Åland',
            ),
            267 => 
            array (
                'country_id' => 3,
                'id' => 768,
                'locale' => 'pt_BR',
                'name' => 'Albânia',
            ),
            268 => 
            array (
                'country_id' => 4,
                'id' => 769,
                'locale' => 'pt_BR',
                'name' => 'Argélia',
            ),
            269 => 
            array (
                'country_id' => 5,
                'id' => 770,
                'locale' => 'pt_BR',
                'name' => 'Samoa Americana',
            ),
            270 => 
            array (
                'country_id' => 6,
                'id' => 771,
                'locale' => 'pt_BR',
                'name' => 'Andorra',
            ),
            271 => 
            array (
                'country_id' => 7,
                'id' => 772,
                'locale' => 'pt_BR',
                'name' => 'Angola',
            ),
            272 => 
            array (
                'country_id' => 8,
                'id' => 773,
                'locale' => 'pt_BR',
                'name' => 'Angola',
            ),
            273 => 
            array (
                'country_id' => 9,
                'id' => 774,
                'locale' => 'pt_BR',
                'name' => 'Antártico',
            ),
            274 => 
            array (
                'country_id' => 10,
                'id' => 775,
                'locale' => 'pt_BR',
                'name' => 'Antígua e Barbuda',
            ),
            275 => 
            array (
                'country_id' => 11,
                'id' => 776,
                'locale' => 'pt_BR',
                'name' => 'Argentina',
            ),
            276 => 
            array (
                'country_id' => 12,
                'id' => 777,
                'locale' => 'pt_BR',
                'name' => 'Armênia',
            ),
            277 => 
            array (
                'country_id' => 13,
                'id' => 778,
                'locale' => 'pt_BR',
                'name' => 'Aruba',
            ),
            278 => 
            array (
                'country_id' => 14,
                'id' => 779,
                'locale' => 'pt_BR',
                'name' => 'Ilha de escalada',
            ),
            279 => 
            array (
                'country_id' => 15,
                'id' => 780,
                'locale' => 'pt_BR',
                'name' => 'Austrália',
            ),
            280 => 
            array (
                'country_id' => 16,
                'id' => 781,
                'locale' => 'pt_BR',
                'name' => 'Áustria',
            ),
            281 => 
            array (
                'country_id' => 17,
                'id' => 782,
                'locale' => 'pt_BR',
                'name' => 'Azerbaijão',
            ),
            282 => 
            array (
                'country_id' => 18,
                'id' => 783,
                'locale' => 'pt_BR',
                'name' => 'Bahamas',
            ),
            283 => 
            array (
                'country_id' => 19,
                'id' => 784,
                'locale' => 'pt_BR',
                'name' => 'Bahrain',
            ),
            284 => 
            array (
                'country_id' => 20,
                'id' => 785,
                'locale' => 'pt_BR',
                'name' => 'Bangladesh',
            ),
            285 => 
            array (
                'country_id' => 21,
                'id' => 786,
                'locale' => 'pt_BR',
                'name' => 'Barbados',
            ),
            286 => 
            array (
                'country_id' => 22,
                'id' => 787,
                'locale' => 'pt_BR',
                'name' => 'Bielorrússia',
            ),
            287 => 
            array (
                'country_id' => 23,
                'id' => 788,
                'locale' => 'pt_BR',
                'name' => 'Bélgica',
            ),
            288 => 
            array (
                'country_id' => 24,
                'id' => 789,
                'locale' => 'pt_BR',
                'name' => 'Bélgica',
            ),
            289 => 
            array (
                'country_id' => 25,
                'id' => 790,
                'locale' => 'pt_BR',
                'name' => 'Benin',
            ),
            290 => 
            array (
                'country_id' => 26,
                'id' => 791,
                'locale' => 'pt_BR',
                'name' => 'Bermuda',
            ),
            291 => 
            array (
                'country_id' => 27,
                'id' => 792,
                'locale' => 'pt_BR',
                'name' => 'Butão',
            ),
            292 => 
            array (
                'country_id' => 28,
                'id' => 793,
                'locale' => 'pt_BR',
                'name' => 'Bolívia',
            ),
            293 => 
            array (
                'country_id' => 29,
                'id' => 794,
                'locale' => 'pt_BR',
                'name' => 'Bósnia e Herzegovina',
            ),
            294 => 
            array (
                'country_id' => 30,
                'id' => 795,
                'locale' => 'pt_BR',
                'name' => 'Botsuana',
            ),
            295 => 
            array (
                'country_id' => 31,
                'id' => 796,
                'locale' => 'pt_BR',
                'name' => 'Brasil',
            ),
            296 => 
            array (
                'country_id' => 32,
                'id' => 797,
                'locale' => 'pt_BR',
                'name' => 'Território Britânico do Oceano Índico',
            ),
            297 => 
            array (
                'country_id' => 33,
                'id' => 798,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Virgens Britânicas',
            ),
            298 => 
            array (
                'country_id' => 34,
                'id' => 799,
                'locale' => 'pt_BR',
                'name' => 'Brunei',
            ),
            299 => 
            array (
                'country_id' => 35,
                'id' => 800,
                'locale' => 'pt_BR',
                'name' => 'Bulgária',
            ),
            300 => 
            array (
                'country_id' => 36,
                'id' => 801,
                'locale' => 'pt_BR',
                'name' => 'Burkina Faso',
            ),
            301 => 
            array (
                'country_id' => 37,
                'id' => 802,
                'locale' => 'pt_BR',
                'name' => 'Burundi',
            ),
            302 => 
            array (
                'country_id' => 38,
                'id' => 803,
                'locale' => 'pt_BR',
                'name' => 'Camboja',
            ),
            303 => 
            array (
                'country_id' => 39,
                'id' => 804,
                'locale' => 'pt_BR',
                'name' => 'Camarões',
            ),
            304 => 
            array (
                'country_id' => 40,
                'id' => 805,
                'locale' => 'pt_BR',
                'name' => 'Canadá',
            ),
            305 => 
            array (
                'country_id' => 41,
                'id' => 806,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Canárias',
            ),
            306 => 
            array (
                'country_id' => 42,
                'id' => 807,
                'locale' => 'pt_BR',
                'name' => 'Cabo Verde',
            ),
            307 => 
            array (
                'country_id' => 43,
                'id' => 808,
                'locale' => 'pt_BR',
                'name' => 'Holanda do Caribe',
            ),
            308 => 
            array (
                'country_id' => 44,
                'id' => 809,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Cayman',
            ),
            309 => 
            array (
                'country_id' => 45,
                'id' => 810,
                'locale' => 'pt_BR',
                'name' => 'República Centro-Africana',
            ),
            310 => 
            array (
                'country_id' => 46,
                'id' => 811,
                'locale' => 'pt_BR',
                'name' => 'Ceuta e Melilla',
            ),
            311 => 
            array (
                'country_id' => 47,
                'id' => 812,
                'locale' => 'pt_BR',
                'name' => 'Chade',
            ),
            312 => 
            array (
                'country_id' => 48,
                'id' => 813,
                'locale' => 'pt_BR',
                'name' => 'Chile',
            ),
            313 => 
            array (
                'country_id' => 49,
                'id' => 814,
                'locale' => 'pt_BR',
                'name' => 'China',
            ),
            314 => 
            array (
                'country_id' => 50,
                'id' => 815,
                'locale' => 'pt_BR',
                'name' => 'Ilha Christmas',
            ),
            315 => 
            array (
                'country_id' => 51,
                'id' => 816,
                'locale' => 'pt_BR',
            'name' => 'Ilhas Cocos (Keeling)',
            ),
            316 => 
            array (
                'country_id' => 52,
                'id' => 817,
                'locale' => 'pt_BR',
                'name' => 'Colômbia',
            ),
            317 => 
            array (
                'country_id' => 53,
                'id' => 818,
                'locale' => 'pt_BR',
                'name' => 'Comores',
            ),
            318 => 
            array (
                'country_id' => 54,
                'id' => 819,
                'locale' => 'pt_BR',
                'name' => 'Congo - Brazzaville',
            ),
            319 => 
            array (
                'country_id' => 55,
                'id' => 820,
                'locale' => 'pt_BR',
                'name' => 'Congo - Kinshasa',
            ),
            320 => 
            array (
                'country_id' => 56,
                'id' => 821,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Cook',
            ),
            321 => 
            array (
                'country_id' => 57,
                'id' => 822,
                'locale' => 'pt_BR',
                'name' => 'Costa Rica',
            ),
            322 => 
            array (
                'country_id' => 58,
                'id' => 823,
                'locale' => 'pt_BR',
                'name' => 'Costa do Marfim',
            ),
            323 => 
            array (
                'country_id' => 59,
                'id' => 824,
                'locale' => 'pt_BR',
                'name' => 'Croácia',
            ),
            324 => 
            array (
                'country_id' => 60,
                'id' => 825,
                'locale' => 'pt_BR',
                'name' => 'Cuba',
            ),
            325 => 
            array (
                'country_id' => 61,
                'id' => 826,
                'locale' => 'pt_BR',
                'name' => 'Curaçao',
            ),
            326 => 
            array (
                'country_id' => 62,
                'id' => 827,
                'locale' => 'pt_BR',
                'name' => 'Chipre',
            ),
            327 => 
            array (
                'country_id' => 63,
                'id' => 828,
                'locale' => 'pt_BR',
                'name' => 'Czechia',
            ),
            328 => 
            array (
                'country_id' => 64,
                'id' => 829,
                'locale' => 'pt_BR',
                'name' => 'Dinamarca',
            ),
            329 => 
            array (
                'country_id' => 65,
                'id' => 830,
                'locale' => 'pt_BR',
                'name' => 'Diego Garcia',
            ),
            330 => 
            array (
                'country_id' => 66,
                'id' => 831,
                'locale' => 'pt_BR',
                'name' => 'Djibuti',
            ),
            331 => 
            array (
                'country_id' => 67,
                'id' => 832,
                'locale' => 'pt_BR',
                'name' => 'Dominica',
            ),
            332 => 
            array (
                'country_id' => 68,
                'id' => 833,
                'locale' => 'pt_BR',
                'name' => 'República Dominicana',
            ),
            333 => 
            array (
                'country_id' => 69,
                'id' => 834,
                'locale' => 'pt_BR',
                'name' => 'Equador',
            ),
            334 => 
            array (
                'country_id' => 70,
                'id' => 835,
                'locale' => 'pt_BR',
                'name' => 'Egito',
            ),
            335 => 
            array (
                'country_id' => 71,
                'id' => 836,
                'locale' => 'pt_BR',
                'name' => 'El Salvador',
            ),
            336 => 
            array (
                'country_id' => 72,
                'id' => 837,
                'locale' => 'pt_BR',
                'name' => 'Guiné Equatorial',
            ),
            337 => 
            array (
                'country_id' => 73,
                'id' => 838,
                'locale' => 'pt_BR',
                'name' => 'Eritreia',
            ),
            338 => 
            array (
                'country_id' => 74,
                'id' => 839,
                'locale' => 'pt_BR',
                'name' => 'Estônia',
            ),
            339 => 
            array (
                'country_id' => 75,
                'id' => 840,
                'locale' => 'pt_BR',
                'name' => 'Etiópia',
            ),
            340 => 
            array (
                'country_id' => 76,
                'id' => 841,
                'locale' => 'pt_BR',
                'name' => 'Zona Euro',
            ),
            341 => 
            array (
                'country_id' => 77,
                'id' => 842,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Malvinas',
            ),
            342 => 
            array (
                'country_id' => 78,
                'id' => 843,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Faroe',
            ),
            343 => 
            array (
                'country_id' => 79,
                'id' => 844,
                'locale' => 'pt_BR',
                'name' => 'Fiji',
            ),
            344 => 
            array (
                'country_id' => 80,
                'id' => 845,
                'locale' => 'pt_BR',
                'name' => 'Finlândia',
            ),
            345 => 
            array (
                'country_id' => 81,
                'id' => 846,
                'locale' => 'pt_BR',
                'name' => 'França',
            ),
            346 => 
            array (
                'country_id' => 82,
                'id' => 847,
                'locale' => 'pt_BR',
                'name' => 'Guiana Francesa',
            ),
            347 => 
            array (
                'country_id' => 83,
                'id' => 848,
                'locale' => 'pt_BR',
                'name' => 'Polinésia Francesa',
            ),
            348 => 
            array (
                'country_id' => 84,
                'id' => 849,
                'locale' => 'pt_BR',
                'name' => 'Territórios Franceses do Sul',
            ),
            349 => 
            array (
                'country_id' => 85,
                'id' => 850,
                'locale' => 'pt_BR',
                'name' => 'Gabão',
            ),
            350 => 
            array (
                'country_id' => 86,
                'id' => 851,
                'locale' => 'pt_BR',
                'name' => 'Gâmbia',
            ),
            351 => 
            array (
                'country_id' => 87,
                'id' => 852,
                'locale' => 'pt_BR',
                'name' => 'Geórgia',
            ),
            352 => 
            array (
                'country_id' => 88,
                'id' => 853,
                'locale' => 'pt_BR',
                'name' => 'Alemanha',
            ),
            353 => 
            array (
                'country_id' => 89,
                'id' => 854,
                'locale' => 'pt_BR',
                'name' => 'Gana',
            ),
            354 => 
            array (
                'country_id' => 90,
                'id' => 855,
                'locale' => 'pt_BR',
                'name' => 'Gibraltar',
            ),
            355 => 
            array (
                'country_id' => 91,
                'id' => 856,
                'locale' => 'pt_BR',
                'name' => 'Grécia',
            ),
            356 => 
            array (
                'country_id' => 92,
                'id' => 857,
                'locale' => 'pt_BR',
                'name' => 'Gronelândia',
            ),
            357 => 
            array (
                'country_id' => 93,
                'id' => 858,
                'locale' => 'pt_BR',
                'name' => 'Granada',
            ),
            358 => 
            array (
                'country_id' => 94,
                'id' => 859,
                'locale' => 'pt_BR',
                'name' => 'Guadalupe',
            ),
            359 => 
            array (
                'country_id' => 95,
                'id' => 860,
                'locale' => 'pt_BR',
                'name' => 'Guam',
            ),
            360 => 
            array (
                'country_id' => 96,
                'id' => 861,
                'locale' => 'pt_BR',
                'name' => 'Guatemala',
            ),
            361 => 
            array (
                'country_id' => 97,
                'id' => 862,
                'locale' => 'pt_BR',
                'name' => 'Guernsey',
            ),
            362 => 
            array (
                'country_id' => 98,
                'id' => 863,
                'locale' => 'pt_BR',
                'name' => 'Guiné',
            ),
            363 => 
            array (
                'country_id' => 99,
                'id' => 864,
                'locale' => 'pt_BR',
                'name' => 'Guiné-Bissau',
            ),
            364 => 
            array (
                'country_id' => 100,
                'id' => 865,
                'locale' => 'pt_BR',
                'name' => 'Guiana',
            ),
            365 => 
            array (
                'country_id' => 101,
                'id' => 866,
                'locale' => 'pt_BR',
                'name' => 'Haiti',
            ),
            366 => 
            array (
                'country_id' => 102,
                'id' => 867,
                'locale' => 'pt_BR',
                'name' => 'Honduras',
            ),
            367 => 
            array (
                'country_id' => 103,
                'id' => 868,
                'locale' => 'pt_BR',
                'name' => 'Região Administrativa Especial de Hong Kong, China',
            ),
            368 => 
            array (
                'country_id' => 104,
                'id' => 869,
                'locale' => 'pt_BR',
                'name' => 'Hungria',
            ),
            369 => 
            array (
                'country_id' => 105,
                'id' => 870,
                'locale' => 'pt_BR',
                'name' => 'Islândia',
            ),
            370 => 
            array (
                'country_id' => 106,
                'id' => 871,
                'locale' => 'pt_BR',
                'name' => 'Índia',
            ),
            371 => 
            array (
                'country_id' => 107,
                'id' => 872,
                'locale' => 'pt_BR',
                'name' => 'Indonésia',
            ),
            372 => 
            array (
                'country_id' => 108,
                'id' => 873,
                'locale' => 'pt_BR',
                'name' => 'Irã',
            ),
            373 => 
            array (
                'country_id' => 109,
                'id' => 874,
                'locale' => 'pt_BR',
                'name' => 'Iraque',
            ),
            374 => 
            array (
                'country_id' => 110,
                'id' => 875,
                'locale' => 'pt_BR',
                'name' => 'Irlanda',
            ),
            375 => 
            array (
                'country_id' => 111,
                'id' => 876,
                'locale' => 'pt_BR',
                'name' => 'Ilha de Man',
            ),
            376 => 
            array (
                'country_id' => 112,
                'id' => 877,
                'locale' => 'pt_BR',
                'name' => 'Israel',
            ),
            377 => 
            array (
                'country_id' => 113,
                'id' => 878,
                'locale' => 'pt_BR',
                'name' => 'Itália',
            ),
            378 => 
            array (
                'country_id' => 114,
                'id' => 879,
                'locale' => 'pt_BR',
                'name' => 'Jamaica',
            ),
            379 => 
            array (
                'country_id' => 115,
                'id' => 880,
                'locale' => 'pt_BR',
                'name' => 'Japão',
            ),
            380 => 
            array (
                'country_id' => 116,
                'id' => 881,
                'locale' => 'pt_BR',
                'name' => 'Jersey',
            ),
            381 => 
            array (
                'country_id' => 117,
                'id' => 882,
                'locale' => 'pt_BR',
                'name' => 'Jordânia',
            ),
            382 => 
            array (
                'country_id' => 118,
                'id' => 883,
                'locale' => 'pt_BR',
                'name' => 'Cazaquistão',
            ),
            383 => 
            array (
                'country_id' => 119,
                'id' => 884,
                'locale' => 'pt_BR',
                'name' => 'Quênia',
            ),
            384 => 
            array (
                'country_id' => 120,
                'id' => 885,
                'locale' => 'pt_BR',
                'name' => 'Quiribati',
            ),
            385 => 
            array (
                'country_id' => 121,
                'id' => 886,
                'locale' => 'pt_BR',
                'name' => 'Kosovo',
            ),
            386 => 
            array (
                'country_id' => 122,
                'id' => 887,
                'locale' => 'pt_BR',
                'name' => 'Kuwait',
            ),
            387 => 
            array (
                'country_id' => 123,
                'id' => 888,
                'locale' => 'pt_BR',
                'name' => 'Quirguistão',
            ),
            388 => 
            array (
                'country_id' => 124,
                'id' => 889,
                'locale' => 'pt_BR',
                'name' => 'Laos',
            ),
            389 => 
            array (
                'country_id' => 125,
                'id' => 890,
                'locale' => 'pt_BR',
                'name' => 'Letônia',
            ),
            390 => 
            array (
                'country_id' => 126,
                'id' => 891,
                'locale' => 'pt_BR',
                'name' => 'Líbano',
            ),
            391 => 
            array (
                'country_id' => 127,
                'id' => 892,
                'locale' => 'pt_BR',
                'name' => 'Lesoto',
            ),
            392 => 
            array (
                'country_id' => 128,
                'id' => 893,
                'locale' => 'pt_BR',
                'name' => 'Libéria',
            ),
            393 => 
            array (
                'country_id' => 129,
                'id' => 894,
                'locale' => 'pt_BR',
                'name' => 'Líbia',
            ),
            394 => 
            array (
                'country_id' => 130,
                'id' => 895,
                'locale' => 'pt_BR',
                'name' => 'Liechtenstein',
            ),
            395 => 
            array (
                'country_id' => 131,
                'id' => 896,
                'locale' => 'pt_BR',
                'name' => 'Lituânia',
            ),
            396 => 
            array (
                'country_id' => 132,
                'id' => 897,
                'locale' => 'pt_BR',
                'name' => 'Luxemburgo',
            ),
            397 => 
            array (
                'country_id' => 133,
                'id' => 898,
                'locale' => 'pt_BR',
                'name' => 'Macau SAR China',
            ),
            398 => 
            array (
                'country_id' => 134,
                'id' => 899,
                'locale' => 'pt_BR',
                'name' => 'Macedônia',
            ),
            399 => 
            array (
                'country_id' => 135,
                'id' => 900,
                'locale' => 'pt_BR',
                'name' => 'Madagascar',
            ),
            400 => 
            array (
                'country_id' => 136,
                'id' => 901,
                'locale' => 'pt_BR',
                'name' => 'Malawi',
            ),
            401 => 
            array (
                'country_id' => 137,
                'id' => 902,
                'locale' => 'pt_BR',
                'name' => 'Malásia',
            ),
            402 => 
            array (
                'country_id' => 138,
                'id' => 903,
                'locale' => 'pt_BR',
                'name' => 'Maldivas',
            ),
            403 => 
            array (
                'country_id' => 139,
                'id' => 904,
                'locale' => 'pt_BR',
                'name' => 'Mali',
            ),
            404 => 
            array (
                'country_id' => 140,
                'id' => 905,
                'locale' => 'pt_BR',
                'name' => 'Malta',
            ),
            405 => 
            array (
                'country_id' => 141,
                'id' => 906,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Marshall',
            ),
            406 => 
            array (
                'country_id' => 142,
                'id' => 907,
                'locale' => 'pt_BR',
                'name' => 'Martinica',
            ),
            407 => 
            array (
                'country_id' => 143,
                'id' => 908,
                'locale' => 'pt_BR',
                'name' => 'Mauritânia',
            ),
            408 => 
            array (
                'country_id' => 144,
                'id' => 909,
                'locale' => 'pt_BR',
                'name' => 'Maurício',
            ),
            409 => 
            array (
                'country_id' => 145,
                'id' => 910,
                'locale' => 'pt_BR',
                'name' => 'Maiote',
            ),
            410 => 
            array (
                'country_id' => 146,
                'id' => 911,
                'locale' => 'pt_BR',
                'name' => 'México',
            ),
            411 => 
            array (
                'country_id' => 147,
                'id' => 912,
                'locale' => 'pt_BR',
                'name' => 'Micronésia',
            ),
            412 => 
            array (
                'country_id' => 148,
                'id' => 913,
                'locale' => 'pt_BR',
                'name' => 'Moldávia',
            ),
            413 => 
            array (
                'country_id' => 149,
                'id' => 914,
                'locale' => 'pt_BR',
                'name' => 'Mônaco',
            ),
            414 => 
            array (
                'country_id' => 150,
                'id' => 915,
                'locale' => 'pt_BR',
                'name' => 'Mongólia',
            ),
            415 => 
            array (
                'country_id' => 151,
                'id' => 916,
                'locale' => 'pt_BR',
                'name' => 'Montenegro',
            ),
            416 => 
            array (
                'country_id' => 152,
                'id' => 917,
                'locale' => 'pt_BR',
                'name' => 'Montserrat',
            ),
            417 => 
            array (
                'country_id' => 153,
                'id' => 918,
                'locale' => 'pt_BR',
                'name' => 'Marrocos',
            ),
            418 => 
            array (
                'country_id' => 154,
                'id' => 919,
                'locale' => 'pt_BR',
                'name' => 'Moçambique',
            ),
            419 => 
            array (
                'country_id' => 155,
                'id' => 920,
                'locale' => 'pt_BR',
            'name' => 'Mianmar (Birmânia)',
            ),
            420 => 
            array (
                'country_id' => 156,
                'id' => 921,
                'locale' => 'pt_BR',
                'name' => 'Namíbia',
            ),
            421 => 
            array (
                'country_id' => 157,
                'id' => 922,
                'locale' => 'pt_BR',
                'name' => 'Nauru',
            ),
            422 => 
            array (
                'country_id' => 158,
                'id' => 923,
                'locale' => 'pt_BR',
                'name' => 'Nepal',
            ),
            423 => 
            array (
                'country_id' => 159,
                'id' => 924,
                'locale' => 'pt_BR',
                'name' => 'Holanda',
            ),
            424 => 
            array (
                'country_id' => 160,
                'id' => 925,
                'locale' => 'pt_BR',
                'name' => 'Nova Caledônia',
            ),
            425 => 
            array (
                'country_id' => 161,
                'id' => 926,
                'locale' => 'pt_BR',
                'name' => 'Nova Zelândia',
            ),
            426 => 
            array (
                'country_id' => 162,
                'id' => 927,
                'locale' => 'pt_BR',
                'name' => 'Nicarágua',
            ),
            427 => 
            array (
                'country_id' => 163,
                'id' => 928,
                'locale' => 'pt_BR',
                'name' => 'Níger',
            ),
            428 => 
            array (
                'country_id' => 164,
                'id' => 929,
                'locale' => 'pt_BR',
                'name' => 'Nigéria',
            ),
            429 => 
            array (
                'country_id' => 165,
                'id' => 930,
                'locale' => 'pt_BR',
                'name' => 'Niue',
            ),
            430 => 
            array (
                'country_id' => 166,
                'id' => 931,
                'locale' => 'pt_BR',
                'name' => 'Ilha Norfolk',
            ),
            431 => 
            array (
                'country_id' => 167,
                'id' => 932,
                'locale' => 'pt_BR',
                'name' => 'Coréia do Norte',
            ),
            432 => 
            array (
                'country_id' => 168,
                'id' => 933,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Marianas do Norte',
            ),
            433 => 
            array (
                'country_id' => 169,
                'id' => 934,
                'locale' => 'pt_BR',
                'name' => 'Noruega',
            ),
            434 => 
            array (
                'country_id' => 170,
                'id' => 935,
                'locale' => 'pt_BR',
                'name' => 'Omã',
            ),
            435 => 
            array (
                'country_id' => 171,
                'id' => 936,
                'locale' => 'pt_BR',
                'name' => 'Paquistão',
            ),
            436 => 
            array (
                'country_id' => 172,
                'id' => 937,
                'locale' => 'pt_BR',
                'name' => 'Palau',
            ),
            437 => 
            array (
                'country_id' => 173,
                'id' => 938,
                'locale' => 'pt_BR',
                'name' => 'Territórios Palestinos',
            ),
            438 => 
            array (
                'country_id' => 174,
                'id' => 939,
                'locale' => 'pt_BR',
                'name' => 'Panamá',
            ),
            439 => 
            array (
                'country_id' => 175,
                'id' => 940,
                'locale' => 'pt_BR',
                'name' => 'Papua Nova Guiné',
            ),
            440 => 
            array (
                'country_id' => 176,
                'id' => 941,
                'locale' => 'pt_BR',
                'name' => 'Paraguai',
            ),
            441 => 
            array (
                'country_id' => 177,
                'id' => 942,
                'locale' => 'pt_BR',
                'name' => 'Peru',
            ),
            442 => 
            array (
                'country_id' => 178,
                'id' => 943,
                'locale' => 'pt_BR',
                'name' => 'Filipinas',
            ),
            443 => 
            array (
                'country_id' => 179,
                'id' => 944,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Pitcairn',
            ),
            444 => 
            array (
                'country_id' => 180,
                'id' => 945,
                'locale' => 'pt_BR',
                'name' => 'Polônia',
            ),
            445 => 
            array (
                'country_id' => 181,
                'id' => 946,
                'locale' => 'pt_BR',
                'name' => 'Portugal',
            ),
            446 => 
            array (
                'country_id' => 182,
                'id' => 947,
                'locale' => 'pt_BR',
                'name' => 'Porto Rico',
            ),
            447 => 
            array (
                'country_id' => 183,
                'id' => 948,
                'locale' => 'pt_BR',
                'name' => 'Catar',
            ),
            448 => 
            array (
                'country_id' => 184,
                'id' => 949,
                'locale' => 'pt_BR',
                'name' => 'Reunião',
            ),
            449 => 
            array (
                'country_id' => 185,
                'id' => 950,
                'locale' => 'pt_BR',
                'name' => 'Romênia',
            ),
            450 => 
            array (
                'country_id' => 186,
                'id' => 951,
                'locale' => 'pt_BR',
                'name' => 'Rússia',
            ),
            451 => 
            array (
                'country_id' => 187,
                'id' => 952,
                'locale' => 'pt_BR',
                'name' => 'Ruanda',
            ),
            452 => 
            array (
                'country_id' => 188,
                'id' => 953,
                'locale' => 'pt_BR',
                'name' => 'Samoa',
            ),
            453 => 
            array (
                'country_id' => 189,
                'id' => 954,
                'locale' => 'pt_BR',
                'name' => 'São Marinho',
            ),
            454 => 
            array (
                'country_id' => 190,
                'id' => 955,
                'locale' => 'pt_BR',
                'name' => 'São Cristóvão e Nevis',
            ),
            455 => 
            array (
                'country_id' => 191,
                'id' => 956,
                'locale' => 'pt_BR',
                'name' => 'Arábia Saudita',
            ),
            456 => 
            array (
                'country_id' => 192,
                'id' => 957,
                'locale' => 'pt_BR',
                'name' => 'Senegal',
            ),
            457 => 
            array (
                'country_id' => 193,
                'id' => 958,
                'locale' => 'pt_BR',
                'name' => 'Sérvia',
            ),
            458 => 
            array (
                'country_id' => 194,
                'id' => 959,
                'locale' => 'pt_BR',
                'name' => 'Seychelles',
            ),
            459 => 
            array (
                'country_id' => 195,
                'id' => 960,
                'locale' => 'pt_BR',
                'name' => 'Serra Leoa',
            ),
            460 => 
            array (
                'country_id' => 196,
                'id' => 961,
                'locale' => 'pt_BR',
                'name' => 'Cingapura',
            ),
            461 => 
            array (
                'country_id' => 197,
                'id' => 962,
                'locale' => 'pt_BR',
                'name' => 'São Martinho',
            ),
            462 => 
            array (
                'country_id' => 198,
                'id' => 963,
                'locale' => 'pt_BR',
                'name' => 'Eslováquia',
            ),
            463 => 
            array (
                'country_id' => 199,
                'id' => 964,
                'locale' => 'pt_BR',
                'name' => 'Eslovênia',
            ),
            464 => 
            array (
                'country_id' => 200,
                'id' => 965,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Salomão',
            ),
            465 => 
            array (
                'country_id' => 201,
                'id' => 966,
                'locale' => 'pt_BR',
                'name' => 'Somália',
            ),
            466 => 
            array (
                'country_id' => 202,
                'id' => 967,
                'locale' => 'pt_BR',
                'name' => 'África do Sul',
            ),
            467 => 
            array (
                'country_id' => 203,
                'id' => 968,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Geórgia do Sul e Sandwich do Sul',
            ),
            468 => 
            array (
                'country_id' => 204,
                'id' => 969,
                'locale' => 'pt_BR',
                'name' => 'Coréia do Sul',
            ),
            469 => 
            array (
                'country_id' => 205,
                'id' => 970,
                'locale' => 'pt_BR',
                'name' => 'Sudão do Sul',
            ),
            470 => 
            array (
                'country_id' => 206,
                'id' => 971,
                'locale' => 'pt_BR',
                'name' => 'Espanha',
            ),
            471 => 
            array (
                'country_id' => 207,
                'id' => 972,
                'locale' => 'pt_BR',
                'name' => 'Sri Lanka',
            ),
            472 => 
            array (
                'country_id' => 208,
                'id' => 973,
                'locale' => 'pt_BR',
                'name' => 'São Bartolomeu',
            ),
            473 => 
            array (
                'country_id' => 209,
                'id' => 974,
                'locale' => 'pt_BR',
                'name' => 'Santa Helena',
            ),
            474 => 
            array (
                'country_id' => 210,
                'id' => 975,
                'locale' => 'pt_BR',
                'name' => 'São Cristóvão e Nevis',
            ),
            475 => 
            array (
                'country_id' => 211,
                'id' => 976,
                'locale' => 'pt_BR',
                'name' => 'Santa Lúcia',
            ),
            476 => 
            array (
                'country_id' => 212,
                'id' => 977,
                'locale' => 'pt_BR',
                'name' => 'São Martinho',
            ),
            477 => 
            array (
                'country_id' => 213,
                'id' => 978,
                'locale' => 'pt_BR',
                'name' => 'São Pedro e Miquelon',
            ),
            478 => 
            array (
                'country_id' => 214,
                'id' => 979,
                'locale' => 'pt_BR',
                'name' => 'São Vicente e Granadinas',
            ),
            479 => 
            array (
                'country_id' => 215,
                'id' => 980,
                'locale' => 'pt_BR',
                'name' => 'Sudão',
            ),
            480 => 
            array (
                'country_id' => 216,
                'id' => 981,
                'locale' => 'pt_BR',
                'name' => 'Suriname',
            ),
            481 => 
            array (
                'country_id' => 217,
                'id' => 982,
                'locale' => 'pt_BR',
                'name' => 'Svalbard e Jan Mayen',
            ),
            482 => 
            array (
                'country_id' => 218,
                'id' => 983,
                'locale' => 'pt_BR',
                'name' => 'Suazilândia',
            ),
            483 => 
            array (
                'country_id' => 219,
                'id' => 984,
                'locale' => 'pt_BR',
                'name' => 'Suécia',
            ),
            484 => 
            array (
                'country_id' => 220,
                'id' => 985,
                'locale' => 'pt_BR',
                'name' => 'Suíça',
            ),
            485 => 
            array (
                'country_id' => 221,
                'id' => 986,
                'locale' => 'pt_BR',
                'name' => 'Síria',
            ),
            486 => 
            array (
                'country_id' => 222,
                'id' => 987,
                'locale' => 'pt_BR',
                'name' => 'Taiwan',
            ),
            487 => 
            array (
                'country_id' => 223,
                'id' => 988,
                'locale' => 'pt_BR',
                'name' => 'Tajiquistão',
            ),
            488 => 
            array (
                'country_id' => 224,
                'id' => 989,
                'locale' => 'pt_BR',
                'name' => 'Tanzânia',
            ),
            489 => 
            array (
                'country_id' => 225,
                'id' => 990,
                'locale' => 'pt_BR',
                'name' => 'Tailândia',
            ),
            490 => 
            array (
                'country_id' => 226,
                'id' => 991,
                'locale' => 'pt_BR',
                'name' => 'Timor-Leste',
            ),
            491 => 
            array (
                'country_id' => 227,
                'id' => 992,
                'locale' => 'pt_BR',
                'name' => 'Togo',
            ),
            492 => 
            array (
                'country_id' => 228,
                'id' => 993,
                'locale' => 'pt_BR',
                'name' => 'Tokelau',
            ),
            493 => 
            array (
                'country_id' => 229,
                'id' => 994,
                'locale' => 'pt_BR',
                'name' => 'Tonga',
            ),
            494 => 
            array (
                'country_id' => 230,
                'id' => 995,
                'locale' => 'pt_BR',
                'name' => 'Trinidad e Tobago',
            ),
            495 => 
            array (
                'country_id' => 231,
                'id' => 996,
                'locale' => 'pt_BR',
                'name' => 'Tristan da Cunha',
            ),
            496 => 
            array (
                'country_id' => 232,
                'id' => 997,
                'locale' => 'pt_BR',
                'name' => 'Tunísia',
            ),
            497 => 
            array (
                'country_id' => 233,
                'id' => 998,
                'locale' => 'pt_BR',
                'name' => 'Turquia',
            ),
            498 => 
            array (
                'country_id' => 234,
                'id' => 999,
                'locale' => 'pt_BR',
                'name' => 'Turquemenistão',
            ),
            499 => 
            array (
                'country_id' => 235,
                'id' => 1000,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Turks e Caicos',
            ),
        ));
        \DB::table('country_translations')->insert(array (
            0 => 
            array (
                'country_id' => 236,
                'id' => 1001,
                'locale' => 'pt_BR',
                'name' => 'Tuvalu',
            ),
            1 => 
            array (
                'country_id' => 237,
                'id' => 1002,
                'locale' => 'pt_BR',
                'name' => 'Ilhas periféricas dos EUA',
            ),
            2 => 
            array (
                'country_id' => 238,
                'id' => 1003,
                'locale' => 'pt_BR',
                'name' => 'Ilhas Virgens dos EUA',
            ),
            3 => 
            array (
                'country_id' => 239,
                'id' => 1004,
                'locale' => 'pt_BR',
                'name' => 'Uganda',
            ),
            4 => 
            array (
                'country_id' => 240,
                'id' => 1005,
                'locale' => 'pt_BR',
                'name' => 'Ucrânia',
            ),
            5 => 
            array (
                'country_id' => 241,
                'id' => 1006,
                'locale' => 'pt_BR',
                'name' => 'Emirados Árabes Unidos',
            ),
            6 => 
            array (
                'country_id' => 242,
                'id' => 1007,
                'locale' => 'pt_BR',
                'name' => 'Reino Unido',
            ),
            7 => 
            array (
                'country_id' => 243,
                'id' => 1008,
                'locale' => 'pt_BR',
                'name' => 'Nações Unidas',
            ),
            8 => 
            array (
                'country_id' => 244,
                'id' => 1009,
                'locale' => 'pt_BR',
                'name' => 'Estados Unidos',
            ),
            9 => 
            array (
                'country_id' => 245,
                'id' => 1010,
                'locale' => 'pt_BR',
                'name' => 'Uruguai',
            ),
            10 => 
            array (
                'country_id' => 246,
                'id' => 1011,
                'locale' => 'pt_BR',
                'name' => 'Uzbequistão',
            ),
            11 => 
            array (
                'country_id' => 247,
                'id' => 1012,
                'locale' => 'pt_BR',
                'name' => 'Vanuatu',
            ),
            12 => 
            array (
                'country_id' => 248,
                'id' => 1013,
                'locale' => 'pt_BR',
                'name' => 'Cidade do Vaticano',
            ),
            13 => 
            array (
                'country_id' => 249,
                'id' => 1014,
                'locale' => 'pt_BR',
                'name' => 'Venezuela',
            ),
            14 => 
            array (
                'country_id' => 250,
                'id' => 1015,
                'locale' => 'pt_BR',
                'name' => 'Vietnã',
            ),
            15 => 
            array (
                'country_id' => 251,
                'id' => 1016,
                'locale' => 'pt_BR',
                'name' => 'Wallis e Futuna',
            ),
            16 => 
            array (
                'country_id' => 252,
                'id' => 1017,
                'locale' => 'pt_BR',
                'name' => 'Saara Ocidental',
            ),
            17 => 
            array (
                'country_id' => 253,
                'id' => 1018,
                'locale' => 'pt_BR',
                'name' => 'Iêmen',
            ),
            18 => 
            array (
                'country_id' => 254,
                'id' => 1019,
                'locale' => 'pt_BR',
                'name' => 'Zâmbia',
            ),
            19 => 
            array (
                'country_id' => 255,
                'id' => 1020,
                'locale' => 'pt_BR',
                'name' => 'Zimbábue',
            ),
        ));
        
        
    }
}