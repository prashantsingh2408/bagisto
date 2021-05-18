<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryStateTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country_state_translations')->delete();
        
        \DB::table('country_state_translations')->insert(array (
            0 => 
            array (
                'country_state_id' => 1,
                'default_name' => 'ألاباما',
                'id' => 1,
                'locale' => 'ar',
            ),
            1 => 
            array (
                'country_state_id' => 2,
                'default_name' => 'ألاسكا',
                'id' => 2,
                'locale' => 'ar',
            ),
            2 => 
            array (
                'country_state_id' => 3,
                'default_name' => 'ساموا الأمريكية',
                'id' => 3,
                'locale' => 'ar',
            ),
            3 => 
            array (
                'country_state_id' => 4,
                'default_name' => 'أريزونا',
                'id' => 4,
                'locale' => 'ar',
            ),
            4 => 
            array (
                'country_state_id' => 5,
                'default_name' => 'أركنساس',
                'id' => 5,
                'locale' => 'ar',
            ),
            5 => 
            array (
                'country_state_id' => 6,
                'default_name' => 'القوات المسلحة أفريقيا',
                'id' => 6,
                'locale' => 'ar',
            ),
            6 => 
            array (
                'country_state_id' => 7,
                'default_name' => 'القوات المسلحة الأمريكية',
                'id' => 7,
                'locale' => 'ar',
            ),
            7 => 
            array (
                'country_state_id' => 8,
                'default_name' => 'القوات المسلحة الكندية',
                'id' => 8,
                'locale' => 'ar',
            ),
            8 => 
            array (
                'country_state_id' => 9,
                'default_name' => 'القوات المسلحة أوروبا',
                'id' => 9,
                'locale' => 'ar',
            ),
            9 => 
            array (
                'country_state_id' => 10,
                'default_name' => 'القوات المسلحة الشرق الأوسط',
                'id' => 10,
                'locale' => 'ar',
            ),
            10 => 
            array (
                'country_state_id' => 11,
                'default_name' => 'القوات المسلحة في المحيط الهادئ',
                'id' => 11,
                'locale' => 'ar',
            ),
            11 => 
            array (
                'country_state_id' => 12,
                'default_name' => 'كاليفورنيا',
                'id' => 12,
                'locale' => 'ar',
            ),
            12 => 
            array (
                'country_state_id' => 13,
                'default_name' => 'كولورادو',
                'id' => 13,
                'locale' => 'ar',
            ),
            13 => 
            array (
                'country_state_id' => 14,
                'default_name' => 'كونيتيكت',
                'id' => 14,
                'locale' => 'ar',
            ),
            14 => 
            array (
                'country_state_id' => 15,
                'default_name' => 'ديلاوير',
                'id' => 15,
                'locale' => 'ar',
            ),
            15 => 
            array (
                'country_state_id' => 16,
                'default_name' => 'مقاطعة كولومبيا',
                'id' => 16,
                'locale' => 'ar',
            ),
            16 => 
            array (
                'country_state_id' => 17,
                'default_name' => 'ولايات ميكرونيزيا الموحدة',
                'id' => 17,
                'locale' => 'ar',
            ),
            17 => 
            array (
                'country_state_id' => 18,
                'default_name' => 'فلوريدا',
                'id' => 18,
                'locale' => 'ar',
            ),
            18 => 
            array (
                'country_state_id' => 19,
                'default_name' => 'جورجيا',
                'id' => 19,
                'locale' => 'ar',
            ),
            19 => 
            array (
                'country_state_id' => 20,
                'default_name' => 'غوام',
                'id' => 20,
                'locale' => 'ar',
            ),
            20 => 
            array (
                'country_state_id' => 21,
                'default_name' => 'هاواي',
                'id' => 21,
                'locale' => 'ar',
            ),
            21 => 
            array (
                'country_state_id' => 22,
                'default_name' => 'ايداهو',
                'id' => 22,
                'locale' => 'ar',
            ),
            22 => 
            array (
                'country_state_id' => 23,
                'default_name' => 'إلينوي',
                'id' => 23,
                'locale' => 'ar',
            ),
            23 => 
            array (
                'country_state_id' => 24,
                'default_name' => 'إنديانا',
                'id' => 24,
                'locale' => 'ar',
            ),
            24 => 
            array (
                'country_state_id' => 25,
                'default_name' => 'أيوا',
                'id' => 25,
                'locale' => 'ar',
            ),
            25 => 
            array (
                'country_state_id' => 26,
                'default_name' => 'كانساس',
                'id' => 26,
                'locale' => 'ar',
            ),
            26 => 
            array (
                'country_state_id' => 27,
                'default_name' => 'كنتاكي',
                'id' => 27,
                'locale' => 'ar',
            ),
            27 => 
            array (
                'country_state_id' => 28,
                'default_name' => 'لويزيانا',
                'id' => 28,
                'locale' => 'ar',
            ),
            28 => 
            array (
                'country_state_id' => 29,
                'default_name' => 'مين',
                'id' => 29,
                'locale' => 'ar',
            ),
            29 => 
            array (
                'country_state_id' => 30,
                'default_name' => 'جزر مارشال',
                'id' => 30,
                'locale' => 'ar',
            ),
            30 => 
            array (
                'country_state_id' => 31,
                'default_name' => 'ماريلاند',
                'id' => 31,
                'locale' => 'ar',
            ),
            31 => 
            array (
                'country_state_id' => 32,
                'default_name' => 'ماساتشوستس',
                'id' => 32,
                'locale' => 'ar',
            ),
            32 => 
            array (
                'country_state_id' => 33,
                'default_name' => 'ميشيغان',
                'id' => 33,
                'locale' => 'ar',
            ),
            33 => 
            array (
                'country_state_id' => 34,
                'default_name' => 'مينيسوتا',
                'id' => 34,
                'locale' => 'ar',
            ),
            34 => 
            array (
                'country_state_id' => 35,
                'default_name' => 'ميسيسيبي',
                'id' => 35,
                'locale' => 'ar',
            ),
            35 => 
            array (
                'country_state_id' => 36,
                'default_name' => 'ميسوري',
                'id' => 36,
                'locale' => 'ar',
            ),
            36 => 
            array (
                'country_state_id' => 37,
                'default_name' => 'مونتانا',
                'id' => 37,
                'locale' => 'ar',
            ),
            37 => 
            array (
                'country_state_id' => 38,
                'default_name' => 'نبراسكا',
                'id' => 38,
                'locale' => 'ar',
            ),
            38 => 
            array (
                'country_state_id' => 39,
                'default_name' => 'نيفادا',
                'id' => 39,
                'locale' => 'ar',
            ),
            39 => 
            array (
                'country_state_id' => 40,
                'default_name' => 'نيو هامبشاير',
                'id' => 40,
                'locale' => 'ar',
            ),
            40 => 
            array (
                'country_state_id' => 41,
                'default_name' => 'نيو جيرسي',
                'id' => 41,
                'locale' => 'ar',
            ),
            41 => 
            array (
                'country_state_id' => 42,
                'default_name' => 'المكسيك جديدة',
                'id' => 42,
                'locale' => 'ar',
            ),
            42 => 
            array (
                'country_state_id' => 43,
                'default_name' => 'نيويورك',
                'id' => 43,
                'locale' => 'ar',
            ),
            43 => 
            array (
                'country_state_id' => 44,
                'default_name' => 'شمال كارولينا',
                'id' => 44,
                'locale' => 'ar',
            ),
            44 => 
            array (
                'country_state_id' => 45,
                'default_name' => 'شمال داكوتا',
                'id' => 45,
                'locale' => 'ar',
            ),
            45 => 
            array (
                'country_state_id' => 46,
                'default_name' => 'جزر مريانا الشمالية',
                'id' => 46,
                'locale' => 'ar',
            ),
            46 => 
            array (
                'country_state_id' => 47,
                'default_name' => 'أوهايو',
                'id' => 47,
                'locale' => 'ar',
            ),
            47 => 
            array (
                'country_state_id' => 48,
                'default_name' => 'أوكلاهوما',
                'id' => 48,
                'locale' => 'ar',
            ),
            48 => 
            array (
                'country_state_id' => 49,
                'default_name' => 'ولاية أوريغون',
                'id' => 49,
                'locale' => 'ar',
            ),
            49 => 
            array (
                'country_state_id' => 50,
                'default_name' => 'بالاو',
                'id' => 50,
                'locale' => 'ar',
            ),
            50 => 
            array (
                'country_state_id' => 51,
                'default_name' => 'بنسلفانيا',
                'id' => 51,
                'locale' => 'ar',
            ),
            51 => 
            array (
                'country_state_id' => 52,
                'default_name' => 'بورتوريكو',
                'id' => 52,
                'locale' => 'ar',
            ),
            52 => 
            array (
                'country_state_id' => 53,
                'default_name' => 'جزيرة رود',
                'id' => 53,
                'locale' => 'ar',
            ),
            53 => 
            array (
                'country_state_id' => 54,
                'default_name' => 'كارولينا الجنوبية',
                'id' => 54,
                'locale' => 'ar',
            ),
            54 => 
            array (
                'country_state_id' => 55,
                'default_name' => 'جنوب داكوتا',
                'id' => 55,
                'locale' => 'ar',
            ),
            55 => 
            array (
                'country_state_id' => 56,
                'default_name' => 'تينيسي',
                'id' => 56,
                'locale' => 'ar',
            ),
            56 => 
            array (
                'country_state_id' => 57,
                'default_name' => 'تكساس',
                'id' => 57,
                'locale' => 'ar',
            ),
            57 => 
            array (
                'country_state_id' => 58,
                'default_name' => 'يوتا',
                'id' => 58,
                'locale' => 'ar',
            ),
            58 => 
            array (
                'country_state_id' => 59,
                'default_name' => 'فيرمونت',
                'id' => 59,
                'locale' => 'ar',
            ),
            59 => 
            array (
                'country_state_id' => 60,
                'default_name' => 'جزر فيرجن',
                'id' => 60,
                'locale' => 'ar',
            ),
            60 => 
            array (
                'country_state_id' => 61,
                'default_name' => 'فرجينيا',
                'id' => 61,
                'locale' => 'ar',
            ),
            61 => 
            array (
                'country_state_id' => 62,
                'default_name' => 'واشنطن',
                'id' => 62,
                'locale' => 'ar',
            ),
            62 => 
            array (
                'country_state_id' => 63,
                'default_name' => 'فرجينيا الغربية',
                'id' => 63,
                'locale' => 'ar',
            ),
            63 => 
            array (
                'country_state_id' => 64,
                'default_name' => 'ولاية ويسكونسن',
                'id' => 64,
                'locale' => 'ar',
            ),
            64 => 
            array (
                'country_state_id' => 65,
                'default_name' => 'وايومنغ',
                'id' => 65,
                'locale' => 'ar',
            ),
            65 => 
            array (
                'country_state_id' => 66,
                'default_name' => 'ألبرتا',
                'id' => 66,
                'locale' => 'ar',
            ),
            66 => 
            array (
                'country_state_id' => 67,
                'default_name' => 'كولومبيا البريطانية',
                'id' => 67,
                'locale' => 'ar',
            ),
            67 => 
            array (
                'country_state_id' => 68,
                'default_name' => 'مانيتوبا',
                'id' => 68,
                'locale' => 'ar',
            ),
            68 => 
            array (
                'country_state_id' => 69,
                'default_name' => 'نيوفاوندلاند ولابرادور',
                'id' => 69,
                'locale' => 'ar',
            ),
            69 => 
            array (
                'country_state_id' => 70,
                'default_name' => 'برونزيك جديد',
                'id' => 70,
                'locale' => 'ar',
            ),
            70 => 
            array (
                'country_state_id' => 71,
                'default_name' => 'مقاطعة نفوفا سكوشيا',
                'id' => 71,
                'locale' => 'ar',
            ),
            71 => 
            array (
                'country_state_id' => 72,
                'default_name' => 'الاقاليم الشمالية الغربية',
                'id' => 72,
                'locale' => 'ar',
            ),
            72 => 
            array (
                'country_state_id' => 73,
                'default_name' => 'نونافوت',
                'id' => 73,
                'locale' => 'ar',
            ),
            73 => 
            array (
                'country_state_id' => 74,
                'default_name' => 'أونتاريو',
                'id' => 74,
                'locale' => 'ar',
            ),
            74 => 
            array (
                'country_state_id' => 75,
                'default_name' => 'جزيرة الأمير ادوارد',
                'id' => 75,
                'locale' => 'ar',
            ),
            75 => 
            array (
                'country_state_id' => 76,
                'default_name' => 'كيبيك',
                'id' => 76,
                'locale' => 'ar',
            ),
            76 => 
            array (
                'country_state_id' => 77,
                'default_name' => 'ساسكاتشوان',
                'id' => 77,
                'locale' => 'ar',
            ),
            77 => 
            array (
                'country_state_id' => 78,
                'default_name' => 'إقليم يوكون',
                'id' => 78,
                'locale' => 'ar',
            ),
            78 => 
            array (
                'country_state_id' => 79,
                'default_name' => 'Niedersachsen',
                'id' => 79,
                'locale' => 'ar',
            ),
            79 => 
            array (
                'country_state_id' => 80,
                'default_name' => 'بادن فورتمبيرغ',
                'id' => 80,
                'locale' => 'ar',
            ),
            80 => 
            array (
                'country_state_id' => 81,
                'default_name' => 'بايرن ميونيخ',
                'id' => 81,
                'locale' => 'ar',
            ),
            81 => 
            array (
                'country_state_id' => 82,
                'default_name' => 'برلين',
                'id' => 82,
                'locale' => 'ar',
            ),
            82 => 
            array (
                'country_state_id' => 83,
                'default_name' => 'براندنبورغ',
                'id' => 83,
                'locale' => 'ar',
            ),
            83 => 
            array (
                'country_state_id' => 84,
                'default_name' => 'بريمن',
                'id' => 84,
                'locale' => 'ar',
            ),
            84 => 
            array (
                'country_state_id' => 85,
                'default_name' => 'هامبورغ',
                'id' => 85,
                'locale' => 'ar',
            ),
            85 => 
            array (
                'country_state_id' => 86,
                'default_name' => 'هيسن',
                'id' => 86,
                'locale' => 'ar',
            ),
            86 => 
            array (
                'country_state_id' => 87,
                'default_name' => 'مكلنبورغ-فوربومرن',
                'id' => 87,
                'locale' => 'ar',
            ),
            87 => 
            array (
                'country_state_id' => 88,
                'default_name' => 'نوردراين فيستفالن',
                'id' => 88,
                'locale' => 'ar',
            ),
            88 => 
            array (
                'country_state_id' => 89,
                'default_name' => 'راينلاند-بفالز',
                'id' => 89,
                'locale' => 'ar',
            ),
            89 => 
            array (
                'country_state_id' => 90,
                'default_name' => 'سارلاند',
                'id' => 90,
                'locale' => 'ar',
            ),
            90 => 
            array (
                'country_state_id' => 91,
                'default_name' => 'ساكسن',
                'id' => 91,
                'locale' => 'ar',
            ),
            91 => 
            array (
                'country_state_id' => 92,
                'default_name' => 'سكسونيا أنهالت',
                'id' => 92,
                'locale' => 'ar',
            ),
            92 => 
            array (
                'country_state_id' => 93,
                'default_name' => 'شليسفيغ هولشتاين',
                'id' => 93,
                'locale' => 'ar',
            ),
            93 => 
            array (
                'country_state_id' => 94,
                'default_name' => 'تورنغن',
                'id' => 94,
                'locale' => 'ar',
            ),
            94 => 
            array (
                'country_state_id' => 95,
                'default_name' => 'فيينا',
                'id' => 95,
                'locale' => 'ar',
            ),
            95 => 
            array (
                'country_state_id' => 96,
                'default_name' => 'النمسا السفلى',
                'id' => 96,
                'locale' => 'ar',
            ),
            96 => 
            array (
                'country_state_id' => 97,
                'default_name' => 'النمسا العليا',
                'id' => 97,
                'locale' => 'ar',
            ),
            97 => 
            array (
                'country_state_id' => 98,
                'default_name' => 'سالزبورغ',
                'id' => 98,
                'locale' => 'ar',
            ),
            98 => 
            array (
                'country_state_id' => 99,
                'default_name' => 'Каринтия',
                'id' => 99,
                'locale' => 'ar',
            ),
            99 => 
            array (
                'country_state_id' => 100,
                'default_name' => 'STEIERMARK',
                'id' => 100,
                'locale' => 'ar',
            ),
            100 => 
            array (
                'country_state_id' => 101,
                'default_name' => 'تيرول',
                'id' => 101,
                'locale' => 'ar',
            ),
            101 => 
            array (
                'country_state_id' => 102,
                'default_name' => 'بورغنلاند',
                'id' => 102,
                'locale' => 'ar',
            ),
            102 => 
            array (
                'country_state_id' => 103,
                'default_name' => 'فورارلبرغ',
                'id' => 103,
                'locale' => 'ar',
            ),
            103 => 
            array (
                'country_state_id' => 104,
                'default_name' => 'أرجاو',
                'id' => 104,
                'locale' => 'ar',
            ),
            104 => 
            array (
                'country_state_id' => 105,
                'default_name' => 'Appenzell Innerrhoden',
                'id' => 105,
                'locale' => 'ar',
            ),
            105 => 
            array (
                'country_state_id' => 106,
                'default_name' => 'أبنزل أوسيرهودن',
                'id' => 106,
                'locale' => 'ar',
            ),
            106 => 
            array (
                'country_state_id' => 107,
                'default_name' => 'برن',
                'id' => 107,
                'locale' => 'ar',
            ),
            107 => 
            array (
                'country_state_id' => 108,
                'default_name' => 'كانتون ريف بازل',
                'id' => 108,
                'locale' => 'ar',
            ),
            108 => 
            array (
                'country_state_id' => 109,
                'default_name' => 'بازل شتات',
                'id' => 109,
                'locale' => 'ar',
            ),
            109 => 
            array (
                'country_state_id' => 110,
                'default_name' => 'فرايبورغ',
                'id' => 110,
                'locale' => 'ar',
            ),
            110 => 
            array (
                'country_state_id' => 111,
                'default_name' => 'Genf',
                'id' => 111,
                'locale' => 'ar',
            ),
            111 => 
            array (
                'country_state_id' => 112,
                'default_name' => 'جلاروس',
                'id' => 112,
                'locale' => 'ar',
            ),
            112 => 
            array (
                'country_state_id' => 113,
                'default_name' => 'غراوبوندن',
                'id' => 113,
                'locale' => 'ar',
            ),
            113 => 
            array (
                'country_state_id' => 114,
                'default_name' => 'العصر الجوارسي أو الجوري',
                'id' => 114,
                'locale' => 'ar',
            ),
            114 => 
            array (
                'country_state_id' => 115,
                'default_name' => 'لوزيرن',
                'id' => 115,
                'locale' => 'ar',
            ),
            115 => 
            array (
                'country_state_id' => 116,
                'default_name' => 'في Neuenburg',
                'id' => 116,
                'locale' => 'ar',
            ),
            116 => 
            array (
                'country_state_id' => 117,
                'default_name' => 'نيدوالدن',
                'id' => 117,
                'locale' => 'ar',
            ),
            117 => 
            array (
                'country_state_id' => 118,
                'default_name' => 'أوبوالدن',
                'id' => 118,
                'locale' => 'ar',
            ),
            118 => 
            array (
                'country_state_id' => 119,
                'default_name' => 'سانت غالن',
                'id' => 119,
                'locale' => 'ar',
            ),
            119 => 
            array (
                'country_state_id' => 120,
                'default_name' => 'شافهاوزن',
                'id' => 120,
                'locale' => 'ar',
            ),
            120 => 
            array (
                'country_state_id' => 121,
                'default_name' => 'سولوتورن',
                'id' => 121,
                'locale' => 'ar',
            ),
            121 => 
            array (
                'country_state_id' => 122,
                'default_name' => 'شفيتس',
                'id' => 122,
                'locale' => 'ar',
            ),
            122 => 
            array (
                'country_state_id' => 123,
                'default_name' => 'ثورجو',
                'id' => 123,
                'locale' => 'ar',
            ),
            123 => 
            array (
                'country_state_id' => 124,
                'default_name' => 'تيتشينو',
                'id' => 124,
                'locale' => 'ar',
            ),
            124 => 
            array (
                'country_state_id' => 125,
                'default_name' => 'أوري',
                'id' => 125,
                'locale' => 'ar',
            ),
            125 => 
            array (
                'country_state_id' => 126,
                'default_name' => 'وادت',
                'id' => 126,
                'locale' => 'ar',
            ),
            126 => 
            array (
                'country_state_id' => 127,
                'default_name' => 'اليس',
                'id' => 127,
                'locale' => 'ar',
            ),
            127 => 
            array (
                'country_state_id' => 128,
                'default_name' => 'زوغ',
                'id' => 128,
                'locale' => 'ar',
            ),
            128 => 
            array (
                'country_state_id' => 129,
                'default_name' => 'زيورخ',
                'id' => 129,
                'locale' => 'ar',
            ),
            129 => 
            array (
                'country_state_id' => 130,
                'default_name' => 'Corunha',
                'id' => 130,
                'locale' => 'ar',
            ),
            130 => 
            array (
                'country_state_id' => 131,
                'default_name' => 'ألافا',
                'id' => 131,
                'locale' => 'ar',
            ),
            131 => 
            array (
                'country_state_id' => 132,
                'default_name' => 'الباسيتي',
                'id' => 132,
                'locale' => 'ar',
            ),
            132 => 
            array (
                'country_state_id' => 133,
                'default_name' => 'اليكانتي',
                'id' => 133,
                'locale' => 'ar',
            ),
            133 => 
            array (
                'country_state_id' => 134,
                'default_name' => 'الميريا',
                'id' => 134,
                'locale' => 'ar',
            ),
            134 => 
            array (
                'country_state_id' => 135,
                'default_name' => 'أستورياس',
                'id' => 135,
                'locale' => 'ar',
            ),
            135 => 
            array (
                'country_state_id' => 136,
                'default_name' => 'أفيلا',
                'id' => 136,
                'locale' => 'ar',
            ),
            136 => 
            array (
                'country_state_id' => 137,
                'default_name' => 'بطليوس',
                'id' => 137,
                'locale' => 'ar',
            ),
            137 => 
            array (
                'country_state_id' => 138,
                'default_name' => 'البليار',
                'id' => 138,
                'locale' => 'ar',
            ),
            138 => 
            array (
                'country_state_id' => 139,
                'default_name' => 'برشلونة',
                'id' => 139,
                'locale' => 'ar',
            ),
            139 => 
            array (
                'country_state_id' => 140,
                'default_name' => 'برغش',
                'id' => 140,
                'locale' => 'ar',
            ),
            140 => 
            array (
                'country_state_id' => 141,
                'default_name' => 'كاسيريس',
                'id' => 141,
                'locale' => 'ar',
            ),
            141 => 
            array (
                'country_state_id' => 142,
                'default_name' => 'كاديز',
                'id' => 142,
                'locale' => 'ar',
            ),
            142 => 
            array (
                'country_state_id' => 143,
                'default_name' => 'كانتابريا',
                'id' => 143,
                'locale' => 'ar',
            ),
            143 => 
            array (
                'country_state_id' => 144,
                'default_name' => 'كاستيلون',
                'id' => 144,
                'locale' => 'ar',
            ),
            144 => 
            array (
                'country_state_id' => 145,
                'default_name' => 'سبتة',
                'id' => 145,
                'locale' => 'ar',
            ),
            145 => 
            array (
                'country_state_id' => 146,
                'default_name' => 'سيوداد ريال',
                'id' => 146,
                'locale' => 'ar',
            ),
            146 => 
            array (
                'country_state_id' => 147,
                'default_name' => 'قرطبة',
                'id' => 147,
                'locale' => 'ar',
            ),
            147 => 
            array (
                'country_state_id' => 148,
                'default_name' => 'كوينكا',
                'id' => 148,
                'locale' => 'ar',
            ),
            148 => 
            array (
                'country_state_id' => 149,
                'default_name' => 'جيرونا',
                'id' => 149,
                'locale' => 'ar',
            ),
            149 => 
            array (
                'country_state_id' => 150,
                'default_name' => 'غرناطة',
                'id' => 150,
                'locale' => 'ar',
            ),
            150 => 
            array (
                'country_state_id' => 151,
                'default_name' => 'غوادالاخارا',
                'id' => 151,
                'locale' => 'ar',
            ),
            151 => 
            array (
                'country_state_id' => 152,
                'default_name' => 'بجويبوزكوا',
                'id' => 152,
                'locale' => 'ar',
            ),
            152 => 
            array (
                'country_state_id' => 153,
                'default_name' => 'هويلفا',
                'id' => 153,
                'locale' => 'ar',
            ),
            153 => 
            array (
                'country_state_id' => 154,
                'default_name' => 'هويسكا',
                'id' => 154,
                'locale' => 'ar',
            ),
            154 => 
            array (
                'country_state_id' => 155,
                'default_name' => 'خاين',
                'id' => 155,
                'locale' => 'ar',
            ),
            155 => 
            array (
                'country_state_id' => 156,
                'default_name' => 'لاريوخا',
                'id' => 156,
                'locale' => 'ar',
            ),
            156 => 
            array (
                'country_state_id' => 157,
                'default_name' => 'لاس بالماس',
                'id' => 157,
                'locale' => 'ar',
            ),
            157 => 
            array (
                'country_state_id' => 158,
                'default_name' => 'ليون',
                'id' => 158,
                'locale' => 'ar',
            ),
            158 => 
            array (
                'country_state_id' => 159,
                'default_name' => 'يدا',
                'id' => 159,
                'locale' => 'ar',
            ),
            159 => 
            array (
                'country_state_id' => 160,
                'default_name' => 'لوغو',
                'id' => 160,
                'locale' => 'ar',
            ),
            160 => 
            array (
                'country_state_id' => 161,
                'default_name' => 'مدريد',
                'id' => 161,
                'locale' => 'ar',
            ),
            161 => 
            array (
                'country_state_id' => 162,
                'default_name' => 'ملقة',
                'id' => 162,
                'locale' => 'ar',
            ),
            162 => 
            array (
                'country_state_id' => 163,
                'default_name' => 'مليلية',
                'id' => 163,
                'locale' => 'ar',
            ),
            163 => 
            array (
                'country_state_id' => 164,
                'default_name' => 'مورسيا',
                'id' => 164,
                'locale' => 'ar',
            ),
            164 => 
            array (
                'country_state_id' => 165,
                'default_name' => 'نافارا',
                'id' => 165,
                'locale' => 'ar',
            ),
            165 => 
            array (
                'country_state_id' => 166,
                'default_name' => 'أورينس',
                'id' => 166,
                'locale' => 'ar',
            ),
            166 => 
            array (
                'country_state_id' => 167,
                'default_name' => 'بلنسية',
                'id' => 167,
                'locale' => 'ar',
            ),
            167 => 
            array (
                'country_state_id' => 168,
                'default_name' => 'بونتيفيدرا',
                'id' => 168,
                'locale' => 'ar',
            ),
            168 => 
            array (
                'country_state_id' => 169,
                'default_name' => 'سالامانكا',
                'id' => 169,
                'locale' => 'ar',
            ),
            169 => 
            array (
                'country_state_id' => 170,
                'default_name' => 'سانتا كروز دي تينيريفي',
                'id' => 170,
                'locale' => 'ar',
            ),
            170 => 
            array (
                'country_state_id' => 171,
                'default_name' => 'سيغوفيا',
                'id' => 171,
                'locale' => 'ar',
            ),
            171 => 
            array (
                'country_state_id' => 172,
                'default_name' => 'اشبيلية',
                'id' => 172,
                'locale' => 'ar',
            ),
            172 => 
            array (
                'country_state_id' => 173,
                'default_name' => 'سوريا',
                'id' => 173,
                'locale' => 'ar',
            ),
            173 => 
            array (
                'country_state_id' => 174,
                'default_name' => 'تاراغونا',
                'id' => 174,
                'locale' => 'ar',
            ),
            174 => 
            array (
                'country_state_id' => 175,
                'default_name' => 'تيرويل',
                'id' => 175,
                'locale' => 'ar',
            ),
            175 => 
            array (
                'country_state_id' => 176,
                'default_name' => 'توليدو',
                'id' => 176,
                'locale' => 'ar',
            ),
            176 => 
            array (
                'country_state_id' => 177,
                'default_name' => 'فالنسيا',
                'id' => 177,
                'locale' => 'ar',
            ),
            177 => 
            array (
                'country_state_id' => 178,
                'default_name' => 'بلد الوليد',
                'id' => 178,
                'locale' => 'ar',
            ),
            178 => 
            array (
                'country_state_id' => 179,
                'default_name' => 'فيزكايا',
                'id' => 179,
                'locale' => 'ar',
            ),
            179 => 
            array (
                'country_state_id' => 180,
                'default_name' => 'زامورا',
                'id' => 180,
                'locale' => 'ar',
            ),
            180 => 
            array (
                'country_state_id' => 181,
                'default_name' => 'سرقسطة',
                'id' => 181,
                'locale' => 'ar',
            ),
            181 => 
            array (
                'country_state_id' => 182,
                'default_name' => 'عين',
                'id' => 182,
                'locale' => 'ar',
            ),
            182 => 
            array (
                'country_state_id' => 183,
                'default_name' => 'أيسن',
                'id' => 183,
                'locale' => 'ar',
            ),
            183 => 
            array (
                'country_state_id' => 184,
                'default_name' => 'اليي',
                'id' => 184,
                'locale' => 'ar',
            ),
            184 => 
            array (
                'country_state_id' => 185,
                'default_name' => 'ألب البروفنس العليا',
                'id' => 185,
                'locale' => 'ar',
            ),
            185 => 
            array (
                'country_state_id' => 186,
                'default_name' => 'أوتس ألب',
                'id' => 186,
                'locale' => 'ar',
            ),
            186 => 
            array (
                'country_state_id' => 187,
                'default_name' => 'ألب ماريتيم',
                'id' => 187,
                'locale' => 'ar',
            ),
            187 => 
            array (
                'country_state_id' => 188,
                'default_name' => 'ARDECHE',
                'id' => 188,
                'locale' => 'ar',
            ),
            188 => 
            array (
                'country_state_id' => 189,
                'default_name' => 'Ardennes',
                'id' => 189,
                'locale' => 'ar',
            ),
            189 => 
            array (
                'country_state_id' => 190,
                'default_name' => 'آردن',
                'id' => 190,
                'locale' => 'ar',
            ),
            190 => 
            array (
                'country_state_id' => 191,
                'default_name' => 'أوب',
                'id' => 191,
                'locale' => 'ar',
            ),
            191 => 
            array (
                'country_state_id' => 192,
                'default_name' => 'اود',
                'id' => 192,
                'locale' => 'ar',
            ),
            192 => 
            array (
                'country_state_id' => 193,
                'default_name' => 'أفيرون',
                'id' => 193,
                'locale' => 'ar',
            ),
            193 => 
            array (
                'country_state_id' => 194,
                'default_name' => 'بوكاس دو رون',
                'id' => 194,
                'locale' => 'ar',
            ),
            194 => 
            array (
                'country_state_id' => 195,
                'default_name' => 'كالفادوس',
                'id' => 195,
                'locale' => 'ar',
            ),
            195 => 
            array (
                'country_state_id' => 196,
                'default_name' => 'كانتال',
                'id' => 196,
                'locale' => 'ar',
            ),
            196 => 
            array (
                'country_state_id' => 197,
                'default_name' => 'شارانت',
                'id' => 197,
                'locale' => 'ar',
            ),
            197 => 
            array (
                'country_state_id' => 198,
                'default_name' => 'سيين إت مارن',
                'id' => 198,
                'locale' => 'ar',
            ),
            198 => 
            array (
                'country_state_id' => 199,
                'default_name' => 'شير',
                'id' => 199,
                'locale' => 'ar',
            ),
            199 => 
            array (
                'country_state_id' => 200,
                'default_name' => 'كوريز',
                'id' => 200,
                'locale' => 'ar',
            ),
            200 => 
            array (
                'country_state_id' => 201,
                'default_name' => 'سود كورس-دو-',
                'id' => 201,
                'locale' => 'ar',
            ),
            201 => 
            array (
                'country_state_id' => 202,
                'default_name' => 'هوت كورس',
                'id' => 202,
                'locale' => 'ar',
            ),
            202 => 
            array (
                'country_state_id' => 203,
                'default_name' => 'كوستا دوركوريز',
                'id' => 203,
                'locale' => 'ar',
            ),
            203 => 
            array (
                'country_state_id' => 204,
                'default_name' => 'كوتس دورمور',
                'id' => 204,
                'locale' => 'ar',
            ),
            204 => 
            array (
                'country_state_id' => 205,
                'default_name' => 'كروز',
                'id' => 205,
                'locale' => 'ar',
            ),
            205 => 
            array (
                'country_state_id' => 206,
                'default_name' => 'دوردوني',
                'id' => 206,
                'locale' => 'ar',
            ),
            206 => 
            array (
                'country_state_id' => 207,
                'default_name' => 'دوبس',
                'id' => 207,
                'locale' => 'ar',
            ),
            207 => 
            array (
                'country_state_id' => 208,
                'default_name' => 'DrômeFinistère',
                'id' => 208,
                'locale' => 'ar',
            ),
            208 => 
            array (
                'country_state_id' => 209,
                'default_name' => 'أور',
                'id' => 209,
                'locale' => 'ar',
            ),
            209 => 
            array (
                'country_state_id' => 210,
                'default_name' => 'أور ولوار',
                'id' => 210,
                'locale' => 'ar',
            ),
            210 => 
            array (
                'country_state_id' => 211,
                'default_name' => 'فينيستير',
                'id' => 211,
                'locale' => 'ar',
            ),
            211 => 
            array (
                'country_state_id' => 212,
                'default_name' => 'جارد',
                'id' => 212,
                'locale' => 'ar',
            ),
            212 => 
            array (
                'country_state_id' => 213,
                'default_name' => 'هوت غارون',
                'id' => 213,
                'locale' => 'ar',
            ),
            213 => 
            array (
                'country_state_id' => 214,
                'default_name' => 'الخيام',
                'id' => 214,
                'locale' => 'ar',
            ),
            214 => 
            array (
                'country_state_id' => 215,
                'default_name' => 'جيروند',
                'id' => 215,
                'locale' => 'ar',
            ),
            215 => 
            array (
                'country_state_id' => 216,
                'default_name' => 'هيرولت',
                'id' => 216,
                'locale' => 'ar',
            ),
            216 => 
            array (
                'country_state_id' => 217,
                'default_name' => 'إيل وفيلان',
                'id' => 217,
                'locale' => 'ar',
            ),
            217 => 
            array (
                'country_state_id' => 218,
                'default_name' => 'إندر',
                'id' => 218,
                'locale' => 'ar',
            ),
            218 => 
            array (
                'country_state_id' => 219,
                'default_name' => 'أندر ولوار',
                'id' => 219,
                'locale' => 'ar',
            ),
            219 => 
            array (
                'country_state_id' => 220,
                'default_name' => 'إيسر',
                'id' => 220,
                'locale' => 'ar',
            ),
            220 => 
            array (
                'country_state_id' => 221,
                'default_name' => 'العصر الجوارسي أو الجوري',
                'id' => 221,
                'locale' => 'ar',
            ),
            221 => 
            array (
                'country_state_id' => 222,
                'default_name' => 'اندز',
                'id' => 222,
                'locale' => 'ar',
            ),
            222 => 
            array (
                'country_state_id' => 223,
                'default_name' => 'لوار وشير',
                'id' => 223,
                'locale' => 'ar',
            ),
            223 => 
            array (
                'country_state_id' => 224,
                'default_name' => 'لوار',
                'id' => 224,
                'locale' => 'ar',
            ),
            224 => 
            array (
                'country_state_id' => 225,
                'default_name' => 'هوت-لوار',
                'id' => 225,
                'locale' => 'ar',
            ),
            225 => 
            array (
                'country_state_id' => 226,
                'default_name' => 'وار أتلانتيك',
                'id' => 226,
                'locale' => 'ar',
            ),
            226 => 
            array (
                'country_state_id' => 227,
                'default_name' => 'لورا',
                'id' => 227,
                'locale' => 'ar',
            ),
            227 => 
            array (
                'country_state_id' => 228,
                'default_name' => 'كثيرا',
                'id' => 228,
                'locale' => 'ar',
            ),
            228 => 
            array (
                'country_state_id' => 229,
                'default_name' => 'الكثير غارون',
                'id' => 229,
                'locale' => 'ar',
            ),
            229 => 
            array (
                'country_state_id' => 230,
                'default_name' => 'لوزر',
                'id' => 230,
                'locale' => 'ar',
            ),
            230 => 
            array (
                'country_state_id' => 231,
                'default_name' => 'مين-إي-لوار',
                'id' => 231,
                'locale' => 'ar',
            ),
            231 => 
            array (
                'country_state_id' => 232,
                'default_name' => 'المانش',
                'id' => 232,
                'locale' => 'ar',
            ),
            232 => 
            array (
                'country_state_id' => 233,
                'default_name' => 'مارن',
                'id' => 233,
                'locale' => 'ar',
            ),
            233 => 
            array (
                'country_state_id' => 234,
                'default_name' => 'هوت مارن',
                'id' => 234,
                'locale' => 'ar',
            ),
            234 => 
            array (
                'country_state_id' => 235,
                'default_name' => 'مايين',
                'id' => 235,
                'locale' => 'ar',
            ),
            235 => 
            array (
                'country_state_id' => 236,
                'default_name' => 'مورت وموزيل',
                'id' => 236,
                'locale' => 'ar',
            ),
            236 => 
            array (
                'country_state_id' => 237,
                'default_name' => 'ميوز',
                'id' => 237,
                'locale' => 'ar',
            ),
            237 => 
            array (
                'country_state_id' => 238,
                'default_name' => 'موربيهان',
                'id' => 238,
                'locale' => 'ar',
            ),
            238 => 
            array (
                'country_state_id' => 239,
                'default_name' => 'موسيل',
                'id' => 239,
                'locale' => 'ar',
            ),
            239 => 
            array (
                'country_state_id' => 240,
                'default_name' => 'نيفر',
                'id' => 240,
                'locale' => 'ar',
            ),
            240 => 
            array (
                'country_state_id' => 241,
                'default_name' => 'نورد',
                'id' => 241,
                'locale' => 'ar',
            ),
            241 => 
            array (
                'country_state_id' => 242,
                'default_name' => 'إيل دو فرانس',
                'id' => 242,
                'locale' => 'ar',
            ),
            242 => 
            array (
                'country_state_id' => 243,
                'default_name' => 'أورن',
                'id' => 243,
                'locale' => 'ar',
            ),
            243 => 
            array (
                'country_state_id' => 244,
                'default_name' => 'با-دو-كاليه',
                'id' => 244,
                'locale' => 'ar',
            ),
            244 => 
            array (
                'country_state_id' => 245,
                'default_name' => 'بوي دي دوم',
                'id' => 245,
                'locale' => 'ar',
            ),
            245 => 
            array (
                'country_state_id' => 246,
                'default_name' => 'البرانيس ​​الأطلسية',
                'id' => 246,
                'locale' => 'ar',
            ),
            246 => 
            array (
                'country_state_id' => 247,
                'default_name' => 'أوتس-بيرينيهs',
                'id' => 247,
                'locale' => 'ar',
            ),
            247 => 
            array (
                'country_state_id' => 248,
                'default_name' => 'بيرينيه-أورينتال',
                'id' => 248,
                'locale' => 'ar',
            ),
            248 => 
            array (
                'country_state_id' => 249,
                'default_name' => 'بس رين',
                'id' => 249,
                'locale' => 'ar',
            ),
            249 => 
            array (
                'country_state_id' => 250,
                'default_name' => 'أوت رين',
                'id' => 250,
                'locale' => 'ar',
            ),
            250 => 
            array (
                'country_state_id' => 251,
                'default_name' => 'رون [3]',
                'id' => 251,
                'locale' => 'ar',
            ),
            251 => 
            array (
                'country_state_id' => 252,
                'default_name' => 'هوت-سون',
                'id' => 252,
                'locale' => 'ar',
            ),
            252 => 
            array (
                'country_state_id' => 253,
                'default_name' => 'سون ولوار',
                'id' => 253,
                'locale' => 'ar',
            ),
            253 => 
            array (
                'country_state_id' => 254,
                'default_name' => 'سارت',
                'id' => 254,
                'locale' => 'ar',
            ),
            254 => 
            array (
                'country_state_id' => 255,
                'default_name' => 'سافوا',
                'id' => 255,
                'locale' => 'ar',
            ),
            255 => 
            array (
                'country_state_id' => 256,
                'default_name' => 'هاوت سافوي',
                'id' => 256,
                'locale' => 'ar',
            ),
            256 => 
            array (
                'country_state_id' => 257,
                'default_name' => 'باريس',
                'id' => 257,
                'locale' => 'ar',
            ),
            257 => 
            array (
                'country_state_id' => 258,
                'default_name' => 'سين البحرية',
                'id' => 258,
                'locale' => 'ar',
            ),
            258 => 
            array (
                'country_state_id' => 259,
                'default_name' => 'سيين إت مارن',
                'id' => 259,
                'locale' => 'ar',
            ),
            259 => 
            array (
                'country_state_id' => 260,
                'default_name' => 'إيفلين',
                'id' => 260,
                'locale' => 'ar',
            ),
            260 => 
            array (
                'country_state_id' => 261,
                'default_name' => 'دوكس سفرس',
                'id' => 261,
                'locale' => 'ar',
            ),
            261 => 
            array (
                'country_state_id' => 262,
                'default_name' => 'السوم',
                'id' => 262,
                'locale' => 'ar',
            ),
            262 => 
            array (
                'country_state_id' => 263,
                'default_name' => 'تارن',
                'id' => 263,
                'locale' => 'ar',
            ),
            263 => 
            array (
                'country_state_id' => 264,
                'default_name' => 'تارن وغارون',
                'id' => 264,
                'locale' => 'ar',
            ),
            264 => 
            array (
                'country_state_id' => 265,
                'default_name' => 'فار',
                'id' => 265,
                'locale' => 'ar',
            ),
            265 => 
            array (
                'country_state_id' => 266,
                'default_name' => 'فوكلوز',
                'id' => 266,
                'locale' => 'ar',
            ),
            266 => 
            array (
                'country_state_id' => 267,
                'default_name' => 'تارن',
                'id' => 267,
                'locale' => 'ar',
            ),
            267 => 
            array (
                'country_state_id' => 268,
                'default_name' => 'فيين',
                'id' => 268,
                'locale' => 'ar',
            ),
            268 => 
            array (
                'country_state_id' => 269,
                'default_name' => 'هوت فيين',
                'id' => 269,
                'locale' => 'ar',
            ),
            269 => 
            array (
                'country_state_id' => 270,
                'default_name' => 'الفوج',
                'id' => 270,
                'locale' => 'ar',
            ),
            270 => 
            array (
                'country_state_id' => 271,
                'default_name' => 'يون',
                'id' => 271,
                'locale' => 'ar',
            ),
            271 => 
            array (
                'country_state_id' => 272,
                'default_name' => 'تيريتوير-دي-بلفور',
                'id' => 272,
                'locale' => 'ar',
            ),
            272 => 
            array (
                'country_state_id' => 273,
                'default_name' => 'إيسون',
                'id' => 273,
                'locale' => 'ar',
            ),
            273 => 
            array (
                'country_state_id' => 274,
                'default_name' => 'هوت دو سين',
                'id' => 274,
                'locale' => 'ar',
            ),
            274 => 
            array (
                'country_state_id' => 275,
                'default_name' => 'سين سان دوني',
                'id' => 275,
                'locale' => 'ar',
            ),
            275 => 
            array (
                'country_state_id' => 276,
                'default_name' => 'فال دو مارن',
                'id' => 276,
                'locale' => 'ar',
            ),
            276 => 
            array (
                'country_state_id' => 277,
                'default_name' => 'فال دواز',
                'id' => 277,
                'locale' => 'ar',
            ),
            277 => 
            array (
                'country_state_id' => 278,
                'default_name' => 'ألبا',
                'id' => 278,
                'locale' => 'ar',
            ),
            278 => 
            array (
                'country_state_id' => 279,
                'default_name' => 'اراد',
                'id' => 279,
                'locale' => 'ar',
            ),
            279 => 
            array (
                'country_state_id' => 280,
                'default_name' => 'ARGES',
                'id' => 280,
                'locale' => 'ar',
            ),
            280 => 
            array (
                'country_state_id' => 281,
                'default_name' => 'باكاو',
                'id' => 281,
                'locale' => 'ar',
            ),
            281 => 
            array (
                'country_state_id' => 282,
                'default_name' => 'بيهور',
                'id' => 282,
                'locale' => 'ar',
            ),
            282 => 
            array (
                'country_state_id' => 283,
                'default_name' => 'بيستريتا ناسود',
                'id' => 283,
                'locale' => 'ar',
            ),
            283 => 
            array (
                'country_state_id' => 284,
                'default_name' => 'بوتوساني',
                'id' => 284,
                'locale' => 'ar',
            ),
            284 => 
            array (
                'country_state_id' => 285,
                'default_name' => 'براشوف',
                'id' => 285,
                'locale' => 'ar',
            ),
            285 => 
            array (
                'country_state_id' => 286,
                'default_name' => 'برايلا',
                'id' => 286,
                'locale' => 'ar',
            ),
            286 => 
            array (
                'country_state_id' => 287,
                'default_name' => 'بوخارست',
                'id' => 287,
                'locale' => 'ar',
            ),
            287 => 
            array (
                'country_state_id' => 288,
                'default_name' => 'بوزاو',
                'id' => 288,
                'locale' => 'ar',
            ),
            288 => 
            array (
                'country_state_id' => 289,
                'default_name' => 'كاراس سيفيرين',
                'id' => 289,
                'locale' => 'ar',
            ),
            289 => 
            array (
                'country_state_id' => 290,
                'default_name' => 'كالاراسي',
                'id' => 290,
                'locale' => 'ar',
            ),
            290 => 
            array (
                'country_state_id' => 291,
                'default_name' => 'كلوج',
                'id' => 291,
                'locale' => 'ar',
            ),
            291 => 
            array (
                'country_state_id' => 292,
                'default_name' => 'كونستانتا',
                'id' => 292,
                'locale' => 'ar',
            ),
            292 => 
            array (
                'country_state_id' => 293,
                'default_name' => 'كوفاسنا',
                'id' => 293,
                'locale' => 'ar',
            ),
            293 => 
            array (
                'country_state_id' => 294,
                'default_name' => 'دامبوفيتا',
                'id' => 294,
                'locale' => 'ar',
            ),
            294 => 
            array (
                'country_state_id' => 295,
                'default_name' => 'دولج',
                'id' => 295,
                'locale' => 'ar',
            ),
            295 => 
            array (
                'country_state_id' => 296,
                'default_name' => 'جالاتي',
                'id' => 296,
                'locale' => 'ar',
            ),
            296 => 
            array (
                'country_state_id' => 297,
                'default_name' => 'Giurgiu',
                'id' => 297,
                'locale' => 'ar',
            ),
            297 => 
            array (
                'country_state_id' => 298,
                'default_name' => 'غيورغيو',
                'id' => 298,
                'locale' => 'ar',
            ),
            298 => 
            array (
                'country_state_id' => 299,
                'default_name' => 'هارغيتا',
                'id' => 299,
                'locale' => 'ar',
            ),
            299 => 
            array (
                'country_state_id' => 300,
                'default_name' => 'هونيدوارا',
                'id' => 300,
                'locale' => 'ar',
            ),
            300 => 
            array (
                'country_state_id' => 301,
                'default_name' => 'ايالوميتا',
                'id' => 301,
                'locale' => 'ar',
            ),
            301 => 
            array (
                'country_state_id' => 302,
                'default_name' => 'ياشي',
                'id' => 302,
                'locale' => 'ar',
            ),
            302 => 
            array (
                'country_state_id' => 303,
                'default_name' => 'إيلفوف',
                'id' => 303,
                'locale' => 'ar',
            ),
            303 => 
            array (
                'country_state_id' => 304,
                'default_name' => 'مارامريس',
                'id' => 304,
                'locale' => 'ar',
            ),
            304 => 
            array (
                'country_state_id' => 305,
                'default_name' => 'MEHEDINTI',
                'id' => 305,
                'locale' => 'ar',
            ),
            305 => 
            array (
                'country_state_id' => 306,
                'default_name' => 'موريس',
                'id' => 306,
                'locale' => 'ar',
            ),
            306 => 
            array (
                'country_state_id' => 307,
                'default_name' => 'نيامتس',
                'id' => 307,
                'locale' => 'ar',
            ),
            307 => 
            array (
                'country_state_id' => 308,
                'default_name' => 'أولت',
                'id' => 308,
                'locale' => 'ar',
            ),
            308 => 
            array (
                'country_state_id' => 309,
                'default_name' => 'براهوفا',
                'id' => 309,
                'locale' => 'ar',
            ),
            309 => 
            array (
                'country_state_id' => 310,
                'default_name' => 'ساتو ماري',
                'id' => 310,
                'locale' => 'ar',
            ),
            310 => 
            array (
                'country_state_id' => 311,
                'default_name' => 'سالاج',
                'id' => 311,
                'locale' => 'ar',
            ),
            311 => 
            array (
                'country_state_id' => 312,
                'default_name' => 'سيبيو',
                'id' => 312,
                'locale' => 'ar',
            ),
            312 => 
            array (
                'country_state_id' => 313,
                'default_name' => 'سوسيفا',
                'id' => 313,
                'locale' => 'ar',
            ),
            313 => 
            array (
                'country_state_id' => 314,
                'default_name' => 'تيليورمان',
                'id' => 314,
                'locale' => 'ar',
            ),
            314 => 
            array (
                'country_state_id' => 315,
                'default_name' => 'تيم هو',
                'id' => 315,
                'locale' => 'ar',
            ),
            315 => 
            array (
                'country_state_id' => 316,
                'default_name' => 'تولسيا',
                'id' => 316,
                'locale' => 'ar',
            ),
            316 => 
            array (
                'country_state_id' => 317,
                'default_name' => 'فاسلوي',
                'id' => 317,
                'locale' => 'ar',
            ),
            317 => 
            array (
                'country_state_id' => 318,
                'default_name' => 'فالسيا',
                'id' => 318,
                'locale' => 'ar',
            ),
            318 => 
            array (
                'country_state_id' => 319,
                'default_name' => 'فرانتشا',
                'id' => 319,
                'locale' => 'ar',
            ),
            319 => 
            array (
                'country_state_id' => 320,
                'default_name' => 'Lappi',
                'id' => 320,
                'locale' => 'ar',
            ),
            320 => 
            array (
                'country_state_id' => 321,
                'default_name' => 'Pohjois-Pohjanmaa',
                'id' => 321,
                'locale' => 'ar',
            ),
            321 => 
            array (
                'country_state_id' => 322,
                'default_name' => 'كاينو',
                'id' => 322,
                'locale' => 'ar',
            ),
            322 => 
            array (
                'country_state_id' => 323,
                'default_name' => 'Pohjois-كارجالا',
                'id' => 323,
                'locale' => 'ar',
            ),
            323 => 
            array (
                'country_state_id' => 324,
                'default_name' => 'Pohjois-سافو',
                'id' => 324,
                'locale' => 'ar',
            ),
            324 => 
            array (
                'country_state_id' => 325,
                'default_name' => 'Etelä-سافو',
                'id' => 325,
                'locale' => 'ar',
            ),
            325 => 
            array (
                'country_state_id' => 326,
                'default_name' => 'Etelä-Pohjanmaa',
                'id' => 326,
                'locale' => 'ar',
            ),
            326 => 
            array (
                'country_state_id' => 327,
                'default_name' => 'Pohjanmaa',
                'id' => 327,
                'locale' => 'ar',
            ),
            327 => 
            array (
                'country_state_id' => 328,
                'default_name' => 'بيركنما',
                'id' => 328,
                'locale' => 'ar',
            ),
            328 => 
            array (
                'country_state_id' => 329,
                'default_name' => 'ساتا كونتا',
                'id' => 329,
                'locale' => 'ar',
            ),
            329 => 
            array (
                'country_state_id' => 330,
                'default_name' => 'كسكي-Pohjanmaa',
                'id' => 330,
                'locale' => 'ar',
            ),
            330 => 
            array (
                'country_state_id' => 331,
                'default_name' => 'كسكي-سومي',
                'id' => 331,
                'locale' => 'ar',
            ),
            331 => 
            array (
                'country_state_id' => 332,
                'default_name' => 'Varsinais-سومي',
                'id' => 332,
                'locale' => 'ar',
            ),
            332 => 
            array (
                'country_state_id' => 333,
                'default_name' => 'Etelä-كارجالا',
                'id' => 333,
                'locale' => 'ar',
            ),
            333 => 
            array (
                'country_state_id' => 334,
                'default_name' => 'Päijät-Häme',
                'id' => 334,
                'locale' => 'ar',
            ),
            334 => 
            array (
                'country_state_id' => 335,
                'default_name' => 'كانتا-HAME',
                'id' => 335,
                'locale' => 'ar',
            ),
            335 => 
            array (
                'country_state_id' => 336,
                'default_name' => 'أوسيما',
                'id' => 336,
                'locale' => 'ar',
            ),
            336 => 
            array (
                'country_state_id' => 337,
                'default_name' => 'أوسيما',
                'id' => 337,
                'locale' => 'ar',
            ),
            337 => 
            array (
                'country_state_id' => 338,
                'default_name' => 'كومنلاكسو',
                'id' => 338,
                'locale' => 'ar',
            ),
            338 => 
            array (
                'country_state_id' => 339,
                'default_name' => 'Ahvenanmaa',
                'id' => 339,
                'locale' => 'ar',
            ),
            339 => 
            array (
                'country_state_id' => 340,
                'default_name' => 'Harjumaa',
                'id' => 340,
                'locale' => 'ar',
            ),
            340 => 
            array (
                'country_state_id' => 341,
                'default_name' => 'هيوما',
                'id' => 341,
                'locale' => 'ar',
            ),
            341 => 
            array (
                'country_state_id' => 342,
                'default_name' => 'المؤسسة الدولية للتنمية فيروما',
                'id' => 342,
                'locale' => 'ar',
            ),
            342 => 
            array (
                'country_state_id' => 343,
                'default_name' => 'جوغفما',
                'id' => 343,
                'locale' => 'ar',
            ),
            343 => 
            array (
                'country_state_id' => 344,
                'default_name' => 'يارفا',
                'id' => 344,
                'locale' => 'ar',
            ),
            344 => 
            array (
                'country_state_id' => 345,
                'default_name' => 'انيما',
                'id' => 345,
                'locale' => 'ar',
            ),
            345 => 
            array (
                'country_state_id' => 346,
                'default_name' => 'اني فيريوما',
                'id' => 346,
                'locale' => 'ar',
            ),
            346 => 
            array (
                'country_state_id' => 347,
                'default_name' => 'بولفاما',
                'id' => 347,
                'locale' => 'ar',
            ),
            347 => 
            array (
                'country_state_id' => 348,
                'default_name' => 'بارنوما',
                'id' => 348,
                'locale' => 'ar',
            ),
            348 => 
            array (
                'country_state_id' => 349,
                'default_name' => 'Raplamaa',
                'id' => 349,
                'locale' => 'ar',
            ),
            349 => 
            array (
                'country_state_id' => 350,
                'default_name' => 'Saaremaa',
                'id' => 350,
                'locale' => 'ar',
            ),
            350 => 
            array (
                'country_state_id' => 351,
                'default_name' => 'Tartumaa',
                'id' => 351,
                'locale' => 'ar',
            ),
            351 => 
            array (
                'country_state_id' => 352,
                'default_name' => 'Valgamaa',
                'id' => 352,
                'locale' => 'ar',
            ),
            352 => 
            array (
                'country_state_id' => 353,
                'default_name' => 'Viljandimaa',
                'id' => 353,
                'locale' => 'ar',
            ),
            353 => 
            array (
                'country_state_id' => 354,
                'default_name' => 'روايات Salacgr novvas',
                'id' => 354,
                'locale' => 'ar',
            ),
            354 => 
            array (
                'country_state_id' => 355,
                'default_name' => 'داوجافبيلس',
                'id' => 355,
                'locale' => 'ar',
            ),
            355 => 
            array (
                'country_state_id' => 356,
                'default_name' => 'يلغافا',
                'id' => 356,
                'locale' => 'ar',
            ),
            356 => 
            array (
                'country_state_id' => 357,
                'default_name' => 'يكاب',
                'id' => 357,
                'locale' => 'ar',
            ),
            357 => 
            array (
                'country_state_id' => 358,
                'default_name' => 'يورمال',
                'id' => 358,
                'locale' => 'ar',
            ),
            358 => 
            array (
                'country_state_id' => 359,
                'default_name' => 'يابايا',
                'id' => 359,
                'locale' => 'ar',
            ),
            359 => 
            array (
                'country_state_id' => 360,
                'default_name' => 'ليباج أبريس',
                'id' => 360,
                'locale' => 'ar',
            ),
            360 => 
            array (
                'country_state_id' => 361,
                'default_name' => 'ريزكن',
                'id' => 361,
                'locale' => 'ar',
            ),
            361 => 
            array (
                'country_state_id' => 362,
                'default_name' => 'ريغا',
                'id' => 362,
                'locale' => 'ar',
            ),
            362 => 
            array (
                'country_state_id' => 363,
                'default_name' => 'مقاطعة ريغا',
                'id' => 363,
                'locale' => 'ar',
            ),
            363 => 
            array (
                'country_state_id' => 364,
                'default_name' => 'فالميرا',
                'id' => 364,
                'locale' => 'ar',
            ),
            364 => 
            array (
                'country_state_id' => 365,
                'default_name' => 'فنتسبيلز',
                'id' => 365,
                'locale' => 'ar',
            ),
            365 => 
            array (
                'country_state_id' => 366,
                'default_name' => 'روايات Aglonas',
                'id' => 366,
                'locale' => 'ar',
            ),
            366 => 
            array (
                'country_state_id' => 367,
                'default_name' => 'Aizkraukles novads',
                'id' => 367,
                'locale' => 'ar',
            ),
            367 => 
            array (
                'country_state_id' => 368,
                'default_name' => 'Aizkraukles novads',
                'id' => 368,
                'locale' => 'ar',
            ),
            368 => 
            array (
                'country_state_id' => 369,
                'default_name' => 'Aknīstes novads',
                'id' => 369,
                'locale' => 'ar',
            ),
            369 => 
            array (
                'country_state_id' => 370,
                'default_name' => 'Alojas novads',
                'id' => 370,
                'locale' => 'ar',
            ),
            370 => 
            array (
                'country_state_id' => 371,
                'default_name' => 'روايات Alsungas',
                'id' => 371,
                'locale' => 'ar',
            ),
            371 => 
            array (
                'country_state_id' => 372,
                'default_name' => 'ألكسنس أبريز',
                'id' => 372,
                'locale' => 'ar',
            ),
            372 => 
            array (
                'country_state_id' => 373,
                'default_name' => 'روايات أماتاس',
                'id' => 373,
                'locale' => 'ar',
            ),
            373 => 
            array (
                'country_state_id' => 374,
                'default_name' => 'قرود الروايات',
                'id' => 374,
                'locale' => 'ar',
            ),
            374 => 
            array (
                'country_state_id' => 375,
                'default_name' => 'روايات أوسيس',
                'id' => 375,
                'locale' => 'ar',
            ),
            375 => 
            array (
                'country_state_id' => 376,
                'default_name' => 'بابيت الروايات',
                'id' => 376,
                'locale' => 'ar',
            ),
            376 => 
            array (
                'country_state_id' => 377,
                'default_name' => 'Baldones الروايات',
                'id' => 377,
                'locale' => 'ar',
            ),
            377 => 
            array (
                'country_state_id' => 378,
                'default_name' => 'بالتينافاس الروايات',
                'id' => 378,
                'locale' => 'ar',
            ),
            378 => 
            array (
                'country_state_id' => 379,
                'default_name' => 'روايات بالفو',
                'id' => 379,
                'locale' => 'ar',
            ),
            379 => 
            array (
                'country_state_id' => 380,
                'default_name' => 'Bauskas الروايات',
                'id' => 380,
                'locale' => 'ar',
            ),
            380 => 
            array (
                'country_state_id' => 381,
                'default_name' => 'Beverīnas novads',
                'id' => 381,
                'locale' => 'ar',
            ),
            381 => 
            array (
                'country_state_id' => 382,
                'default_name' => 'Novads Brocēnu',
                'id' => 382,
                'locale' => 'ar',
            ),
            382 => 
            array (
                'country_state_id' => 383,
                'default_name' => 'Novads Burtnieku',
                'id' => 383,
                'locale' => 'ar',
            ),
            383 => 
            array (
                'country_state_id' => 384,
                'default_name' => 'Carnikavas novads',
                'id' => 384,
                'locale' => 'ar',
            ),
            384 => 
            array (
                'country_state_id' => 385,
                'default_name' => 'Cesvaines novads',
                'id' => 385,
                'locale' => 'ar',
            ),
            385 => 
            array (
                'country_state_id' => 386,
                'default_name' => 'Ciblas novads',
                'id' => 386,
                'locale' => 'ar',
            ),
            386 => 
            array (
                'country_state_id' => 387,
                'default_name' => 'تسو أبريس',
                'id' => 387,
                'locale' => 'ar',
            ),
            387 => 
            array (
                'country_state_id' => 388,
                'default_name' => 'Dagdas novads',
                'id' => 388,
                'locale' => 'ar',
            ),
            388 => 
            array (
                'country_state_id' => 389,
                'default_name' => 'Daugavpils novads',
                'id' => 389,
                'locale' => 'ar',
            ),
            389 => 
            array (
                'country_state_id' => 390,
                'default_name' => 'روايات دوبيليس',
                'id' => 390,
                'locale' => 'ar',
            ),
            390 => 
            array (
                'country_state_id' => 391,
                'default_name' => 'ديربيس الروايات',
                'id' => 391,
                'locale' => 'ar',
            ),
            391 => 
            array (
                'country_state_id' => 392,
                'default_name' => 'ديربيس الروايات',
                'id' => 392,
                'locale' => 'ar',
            ),
            392 => 
            array (
                'country_state_id' => 393,
                'default_name' => 'يشرك الروايات',
                'id' => 393,
                'locale' => 'ar',
            ),
            393 => 
            array (
                'country_state_id' => 394,
                'default_name' => 'Garkalnes novads',
                'id' => 394,
                'locale' => 'ar',
            ),
            394 => 
            array (
                'country_state_id' => 395,
                'default_name' => 'Grobiņas novads',
                'id' => 395,
                'locale' => 'ar',
            ),
            395 => 
            array (
                'country_state_id' => 396,
                'default_name' => 'غولبينيس الروايات',
                'id' => 396,
                'locale' => 'ar',
            ),
            396 => 
            array (
                'country_state_id' => 397,
                'default_name' => 'إيكافاس روايات',
                'id' => 397,
                'locale' => 'ar',
            ),
            397 => 
            array (
                'country_state_id' => 398,
                'default_name' => 'Ikškiles novads',
                'id' => 398,
                'locale' => 'ar',
            ),
            398 => 
            array (
                'country_state_id' => 399,
                'default_name' => 'Ilūkstes novads',
                'id' => 399,
                'locale' => 'ar',
            ),
            399 => 
            array (
                'country_state_id' => 400,
                'default_name' => 'روايات Inčukalna',
                'id' => 400,
                'locale' => 'ar',
            ),
            400 => 
            array (
                'country_state_id' => 401,
                'default_name' => 'Jaunjelgavas novads',
                'id' => 401,
                'locale' => 'ar',
            ),
            401 => 
            array (
                'country_state_id' => 402,
                'default_name' => 'Jaunpiebalgas novads',
                'id' => 402,
                'locale' => 'ar',
            ),
            402 => 
            array (
                'country_state_id' => 403,
                'default_name' => 'روايات Jaunpiebalgas',
                'id' => 403,
                'locale' => 'ar',
            ),
            403 => 
            array (
                'country_state_id' => 404,
                'default_name' => 'Jelgavas novads',
                'id' => 404,
                'locale' => 'ar',
            ),
            404 => 
            array (
                'country_state_id' => 405,
                'default_name' => 'جيكابيلس أبريز',
                'id' => 405,
                'locale' => 'ar',
            ),
            405 => 
            array (
                'country_state_id' => 406,
                'default_name' => 'روايات كاندافاس',
                'id' => 406,
                'locale' => 'ar',
            ),
            406 => 
            array (
                'country_state_id' => 407,
                'default_name' => 'Kokneses الروايات',
                'id' => 407,
                'locale' => 'ar',
            ),
            407 => 
            array (
                'country_state_id' => 408,
                'default_name' => 'Krimuldas novads',
                'id' => 408,
                'locale' => 'ar',
            ),
            408 => 
            array (
                'country_state_id' => 409,
                'default_name' => 'Krustpils الروايات',
                'id' => 409,
                'locale' => 'ar',
            ),
            409 => 
            array (
                'country_state_id' => 410,
                'default_name' => 'Krāslavas Apriņķis',
                'id' => 410,
                'locale' => 'ar',
            ),
            410 => 
            array (
                'country_state_id' => 411,
                'default_name' => 'كولدوغاس أبريز',
                'id' => 411,
                'locale' => 'ar',
            ),
            411 => 
            array (
                'country_state_id' => 412,
                'default_name' => 'Kārsavas novads',
                'id' => 412,
                'locale' => 'ar',
            ),
            412 => 
            array (
                'country_state_id' => 413,
                'default_name' => 'روايات ييلفاريس',
                'id' => 413,
                'locale' => 'ar',
            ),
            413 => 
            array (
                'country_state_id' => 414,
                'default_name' => 'ليمباو أبريز',
                'id' => 414,
                'locale' => 'ar',
            ),
            414 => 
            array (
                'country_state_id' => 415,
                'default_name' => 'روايات لباناس',
                'id' => 415,
                'locale' => 'ar',
            ),
            415 => 
            array (
                'country_state_id' => 416,
                'default_name' => 'روايات لودزاس',
                'id' => 416,
                'locale' => 'ar',
            ),
            416 => 
            array (
                'country_state_id' => 417,
                'default_name' => 'مقاطعة ليجاتني',
                'id' => 417,
                'locale' => 'ar',
            ),
            417 => 
            array (
                'country_state_id' => 418,
                'default_name' => 'مقاطعة ليفاني',
                'id' => 418,
                'locale' => 'ar',
            ),
            418 => 
            array (
                'country_state_id' => 419,
                'default_name' => 'مادونا روايات',
                'id' => 419,
                'locale' => 'ar',
            ),
            419 => 
            array (
                'country_state_id' => 420,
                'default_name' => 'Mazsalacas novads',
                'id' => 420,
                'locale' => 'ar',
            ),
            420 => 
            array (
                'country_state_id' => 421,
                'default_name' => 'روايات مالبلز',
                'id' => 421,
                'locale' => 'ar',
            ),
            421 => 
            array (
                'country_state_id' => 422,
                'default_name' => 'Mārupes novads',
                'id' => 422,
                'locale' => 'ar',
            ),
            422 => 
            array (
                'country_state_id' => 423,
                'default_name' => 'نوفاو نوكشنو',
                'id' => 423,
                'locale' => 'ar',
            ),
            423 => 
            array (
                'country_state_id' => 424,
                'default_name' => 'روايات نيريتاس',
                'id' => 424,
                'locale' => 'ar',
            ),
            424 => 
            array (
                'country_state_id' => 425,
                'default_name' => 'روايات نيكاس',
                'id' => 425,
                'locale' => 'ar',
            ),
            425 => 
            array (
                'country_state_id' => 426,
                'default_name' => 'أغنام الروايات',
                'id' => 426,
                'locale' => 'ar',
            ),
            426 => 
            array (
                'country_state_id' => 427,
                'default_name' => 'أولينيس الروايات',
                'id' => 427,
                'locale' => 'ar',
            ),
            427 => 
            array (
                'country_state_id' => 428,
                'default_name' => 'روايات Ozolnieku',
                'id' => 428,
                'locale' => 'ar',
            ),
            428 => 
            array (
                'country_state_id' => 429,
                'default_name' => 'بريسيو أبرييس',
                'id' => 429,
                'locale' => 'ar',
            ),
            429 => 
            array (
                'country_state_id' => 430,
                'default_name' => 'Priekules الروايات',
                'id' => 430,
                'locale' => 'ar',
            ),
            430 => 
            array (
                'country_state_id' => 431,
                'default_name' => 'كوندادو دي بريكوي',
                'id' => 431,
                'locale' => 'ar',
            ),
            431 => 
            array (
                'country_state_id' => 432,
                'default_name' => 'Pärgaujas novads',
                'id' => 432,
                'locale' => 'ar',
            ),
            432 => 
            array (
                'country_state_id' => 433,
                'default_name' => 'روايات بافيلوستاس',
                'id' => 433,
                'locale' => 'ar',
            ),
            433 => 
            array (
                'country_state_id' => 434,
                'default_name' => 'بلافيناس مقاطعة',
                'id' => 434,
                'locale' => 'ar',
            ),
            434 => 
            array (
                'country_state_id' => 435,
                'default_name' => 'روناس روايات',
                'id' => 435,
                'locale' => 'ar',
            ),
            435 => 
            array (
                'country_state_id' => 436,
                'default_name' => 'Riebiņu novads',
                'id' => 436,
                'locale' => 'ar',
            ),
            436 => 
            array (
                'country_state_id' => 437,
                'default_name' => 'روجاس روايات',
                'id' => 437,
                'locale' => 'ar',
            ),
            437 => 
            array (
                'country_state_id' => 438,
                'default_name' => 'Novads روباو',
                'id' => 438,
                'locale' => 'ar',
            ),
            438 => 
            array (
                'country_state_id' => 439,
                'default_name' => 'روكافاس روايات',
                'id' => 439,
                'locale' => 'ar',
            ),
            439 => 
            array (
                'country_state_id' => 440,
                'default_name' => 'روغاجو روايات',
                'id' => 440,
                'locale' => 'ar',
            ),
            440 => 
            array (
                'country_state_id' => 441,
                'default_name' => 'رندلس الروايات',
                'id' => 441,
                'locale' => 'ar',
            ),
            441 => 
            array (
                'country_state_id' => 442,
                'default_name' => 'Radzeknes novads',
                'id' => 442,
                'locale' => 'ar',
            ),
            442 => 
            array (
                'country_state_id' => 443,
                'default_name' => 'Rūjienas novads',
                'id' => 443,
                'locale' => 'ar',
            ),
            443 => 
            array (
                'country_state_id' => 444,
                'default_name' => 'بلدية سالاسغريفا',
                'id' => 444,
                'locale' => 'ar',
            ),
            444 => 
            array (
                'country_state_id' => 445,
                'default_name' => 'روايات سالاس',
                'id' => 445,
                'locale' => 'ar',
            ),
            445 => 
            array (
                'country_state_id' => 446,
                'default_name' => 'Salaspils novads',
                'id' => 446,
                'locale' => 'ar',
            ),
            446 => 
            array (
                'country_state_id' => 447,
                'default_name' => 'روايات سالدوس',
                'id' => 447,
                'locale' => 'ar',
            ),
            447 => 
            array (
                'country_state_id' => 448,
                'default_name' => 'Novuls Saulkrastu',
                'id' => 448,
                'locale' => 'ar',
            ),
            448 => 
            array (
                'country_state_id' => 449,
                'default_name' => 'سيغولداس روايات',
                'id' => 449,
                'locale' => 'ar',
            ),
            449 => 
            array (
                'country_state_id' => 450,
                'default_name' => 'Skrundas novads',
                'id' => 450,
                'locale' => 'ar',
            ),
            450 => 
            array (
                'country_state_id' => 451,
                'default_name' => 'مقاطعة Skrīveri',
                'id' => 451,
                'locale' => 'ar',
            ),
            451 => 
            array (
                'country_state_id' => 452,
                'default_name' => 'يبتسم الروايات',
                'id' => 452,
                'locale' => 'ar',
            ),
            452 => 
            array (
                'country_state_id' => 453,
                'default_name' => 'روايات Stopiņu',
                'id' => 453,
                'locale' => 'ar',
            ),
            453 => 
            array (
                'country_state_id' => 454,
                'default_name' => 'روايات Stren novu',
                'id' => 454,
                'locale' => 'ar',
            ),
            454 => 
            array (
                'country_state_id' => 455,
                'default_name' => 'سجاس روايات',
                'id' => 455,
                'locale' => 'ar',
            ),
            455 => 
            array (
                'country_state_id' => 456,
                'default_name' => 'روايات تالسو',
                'id' => 456,
                'locale' => 'ar',
            ),
            456 => 
            array (
                'country_state_id' => 457,
                'default_name' => 'توكوما الروايات',
                'id' => 457,
                'locale' => 'ar',
            ),
            457 => 
            array (
                'country_state_id' => 458,
                'default_name' => 'Tērvetes novads',
                'id' => 458,
                'locale' => 'ar',
            ),
            458 => 
            array (
                'country_state_id' => 459,
                'default_name' => 'Vaiņodes novads',
                'id' => 459,
                'locale' => 'ar',
            ),
            459 => 
            array (
                'country_state_id' => 460,
                'default_name' => 'فالكاس الروايات',
                'id' => 460,
                'locale' => 'ar',
            ),
            460 => 
            array (
                'country_state_id' => 461,
                'default_name' => 'فالميراس الروايات',
                'id' => 461,
                'locale' => 'ar',
            ),
            461 => 
            array (
                'country_state_id' => 462,
                'default_name' => 'مقاطعة فاكلاني',
                'id' => 462,
                'locale' => 'ar',
            ),
            462 => 
            array (
                'country_state_id' => 463,
                'default_name' => 'Vecpiebalgas novads',
                'id' => 463,
                'locale' => 'ar',
            ),
            463 => 
            array (
                'country_state_id' => 464,
                'default_name' => 'روايات Vecumnieku',
                'id' => 464,
                'locale' => 'ar',
            ),
            464 => 
            array (
                'country_state_id' => 465,
                'default_name' => 'فنتسبيلس الروايات',
                'id' => 465,
                'locale' => 'ar',
            ),
            465 => 
            array (
                'country_state_id' => 466,
                'default_name' => 'Viesītes Novads',
                'id' => 466,
                'locale' => 'ar',
            ),
            466 => 
            array (
                'country_state_id' => 467,
                'default_name' => 'Viļakas novads',
                'id' => 467,
                'locale' => 'ar',
            ),
            467 => 
            array (
                'country_state_id' => 468,
                'default_name' => 'روايات فيناو',
                'id' => 468,
                'locale' => 'ar',
            ),
            468 => 
            array (
                'country_state_id' => 469,
                'default_name' => 'Vārkavas novads',
                'id' => 469,
                'locale' => 'ar',
            ),
            469 => 
            array (
                'country_state_id' => 470,
                'default_name' => 'روايات زيلوبس',
                'id' => 470,
                'locale' => 'ar',
            ),
            470 => 
            array (
                'country_state_id' => 471,
                'default_name' => 'مقاطعة أدازي',
                'id' => 471,
                'locale' => 'ar',
            ),
            471 => 
            array (
                'country_state_id' => 472,
                'default_name' => 'مقاطعة Erglu',
                'id' => 472,
                'locale' => 'ar',
            ),
            472 => 
            array (
                'country_state_id' => 473,
                'default_name' => 'مقاطعة كيغمس',
                'id' => 473,
                'locale' => 'ar',
            ),
            473 => 
            array (
                'country_state_id' => 474,
                'default_name' => 'مقاطعة كيكافا',
                'id' => 474,
                'locale' => 'ar',
            ),
            474 => 
            array (
                'country_state_id' => 475,
                'default_name' => 'Alytaus Apskritis',
                'id' => 475,
                'locale' => 'ar',
            ),
            475 => 
            array (
                'country_state_id' => 476,
                'default_name' => 'كاونو ابكريتيس',
                'id' => 476,
                'locale' => 'ar',
            ),
            476 => 
            array (
                'country_state_id' => 477,
                'default_name' => 'Klaipėdos apskritis',
                'id' => 477,
                'locale' => 'ar',
            ),
            477 => 
            array (
                'country_state_id' => 478,
                'default_name' => 'Marijampol\'s apskritis',
                'id' => 478,
                'locale' => 'ar',
            ),
            478 => 
            array (
                'country_state_id' => 479,
                'default_name' => 'Panevėžio apskritis',
                'id' => 479,
                'locale' => 'ar',
            ),
            479 => 
            array (
                'country_state_id' => 480,
                'default_name' => 'uliaulių apskritis',
                'id' => 480,
                'locale' => 'ar',
            ),
            480 => 
            array (
                'country_state_id' => 481,
                'default_name' => 'Taurag\'s apskritis',
                'id' => 481,
                'locale' => 'ar',
            ),
            481 => 
            array (
                'country_state_id' => 482,
                'default_name' => 'Telšių apskritis',
                'id' => 482,
                'locale' => 'ar',
            ),
            482 => 
            array (
                'country_state_id' => 483,
                'default_name' => 'Utenos apskritis',
                'id' => 483,
                'locale' => 'ar',
            ),
            483 => 
            array (
                'country_state_id' => 484,
                'default_name' => 'فيلنياوس ابكريتيس',
                'id' => 484,
                'locale' => 'ar',
            ),
            484 => 
            array (
                'country_state_id' => 485,
                'default_name' => 'فدان',
                'id' => 485,
                'locale' => 'ar',
            ),
            485 => 
            array (
                'country_state_id' => 486,
                'default_name' => 'ألاغواس',
                'id' => 486,
                'locale' => 'ar',
            ),
            486 => 
            array (
                'country_state_id' => 487,
                'default_name' => 'أمابا',
                'id' => 487,
                'locale' => 'ar',
            ),
            487 => 
            array (
                'country_state_id' => 488,
                'default_name' => 'أمازوناس',
                'id' => 488,
                'locale' => 'ar',
            ),
            488 => 
            array (
                'country_state_id' => 489,
                'default_name' => 'باهيا',
                'id' => 489,
                'locale' => 'ar',
            ),
            489 => 
            array (
                'country_state_id' => 490,
                'default_name' => 'سيارا',
                'id' => 490,
                'locale' => 'ar',
            ),
            490 => 
            array (
                'country_state_id' => 491,
                'default_name' => 'إسبيريتو سانتو',
                'id' => 491,
                'locale' => 'ar',
            ),
            491 => 
            array (
                'country_state_id' => 492,
                'default_name' => 'غوياس',
                'id' => 492,
                'locale' => 'ar',
            ),
            492 => 
            array (
                'country_state_id' => 493,
                'default_name' => 'مارانهاو',
                'id' => 493,
                'locale' => 'ar',
            ),
            493 => 
            array (
                'country_state_id' => 494,
                'default_name' => 'ماتو جروسو',
                'id' => 494,
                'locale' => 'ar',
            ),
            494 => 
            array (
                'country_state_id' => 495,
                'default_name' => 'ماتو جروسو دو سول',
                'id' => 495,
                'locale' => 'ar',
            ),
            495 => 
            array (
                'country_state_id' => 496,
                'default_name' => 'ميناس جريس',
                'id' => 496,
                'locale' => 'ar',
            ),
            496 => 
            array (
                'country_state_id' => 497,
                'default_name' => 'بارا',
                'id' => 497,
                'locale' => 'ar',
            ),
            497 => 
            array (
                'country_state_id' => 498,
                'default_name' => 'بارايبا',
                'id' => 498,
                'locale' => 'ar',
            ),
            498 => 
            array (
                'country_state_id' => 499,
                'default_name' => 'بارانا',
                'id' => 499,
                'locale' => 'ar',
            ),
            499 => 
            array (
                'country_state_id' => 500,
                'default_name' => 'بيرنامبوكو',
                'id' => 500,
                'locale' => 'ar',
            ),
        ));
        \DB::table('country_state_translations')->insert(array (
            0 => 
            array (
                'country_state_id' => 501,
                'default_name' => 'بياوي',
                'id' => 501,
                'locale' => 'ar',
            ),
            1 => 
            array (
                'country_state_id' => 502,
                'default_name' => 'ريو دي جانيرو',
                'id' => 502,
                'locale' => 'ar',
            ),
            2 => 
            array (
                'country_state_id' => 503,
                'default_name' => 'ريو غراندي دو نورتي',
                'id' => 503,
                'locale' => 'ar',
            ),
            3 => 
            array (
                'country_state_id' => 504,
                'default_name' => 'ريو غراندي دو سول',
                'id' => 504,
                'locale' => 'ar',
            ),
            4 => 
            array (
                'country_state_id' => 505,
                'default_name' => 'روندونيا',
                'id' => 505,
                'locale' => 'ar',
            ),
            5 => 
            array (
                'country_state_id' => 506,
                'default_name' => 'رورايما',
                'id' => 506,
                'locale' => 'ar',
            ),
            6 => 
            array (
                'country_state_id' => 507,
                'default_name' => 'سانتا كاتارينا',
                'id' => 507,
                'locale' => 'ar',
            ),
            7 => 
            array (
                'country_state_id' => 508,
                'default_name' => 'ساو باولو',
                'id' => 508,
                'locale' => 'ar',
            ),
            8 => 
            array (
                'country_state_id' => 509,
                'default_name' => 'سيرغيبي',
                'id' => 509,
                'locale' => 'ar',
            ),
            9 => 
            array (
                'country_state_id' => 510,
                'default_name' => 'توكانتينز',
                'id' => 510,
                'locale' => 'ar',
            ),
            10 => 
            array (
                'country_state_id' => 511,
                'default_name' => 'وفي مقاطعة الاتحادية',
                'id' => 511,
                'locale' => 'ar',
            ),
            11 => 
            array (
                'country_state_id' => 512,
                'default_name' => 'Zagrebačka زوبانيا',
                'id' => 512,
                'locale' => 'ar',
            ),
            12 => 
            array (
                'country_state_id' => 513,
                'default_name' => 'Krapinsko-zagorska زوبانيا',
                'id' => 513,
                'locale' => 'ar',
            ),
            13 => 
            array (
                'country_state_id' => 514,
                'default_name' => 'Sisačko-moslavačka زوبانيا',
                'id' => 514,
                'locale' => 'ar',
            ),
            14 => 
            array (
                'country_state_id' => 515,
                'default_name' => 'كارلوفيتش شوبانيا',
                'id' => 515,
                'locale' => 'ar',
            ),
            15 => 
            array (
                'country_state_id' => 516,
                'default_name' => 'فارادينسكا زوبانيجا',
                'id' => 516,
                'locale' => 'ar',
            ),
            16 => 
            array (
                'country_state_id' => 517,
                'default_name' => 'Koprivničko-križevačka زوبانيجا',
                'id' => 517,
                'locale' => 'ar',
            ),
            17 => 
            array (
                'country_state_id' => 518,
                'default_name' => 'بيلوفارسكو-بيلوجورسكا',
                'id' => 518,
                'locale' => 'ar',
            ),
            18 => 
            array (
                'country_state_id' => 519,
                'default_name' => 'بريمورسكو غورانسكا سوبانيا',
                'id' => 519,
                'locale' => 'ar',
            ),
            19 => 
            array (
                'country_state_id' => 520,
                'default_name' => 'ليكو سينيسكا زوبانيا',
                'id' => 520,
                'locale' => 'ar',
            ),
            20 => 
            array (
                'country_state_id' => 521,
                'default_name' => 'Virovitičko-podravska زوبانيا',
                'id' => 521,
                'locale' => 'ar',
            ),
            21 => 
            array (
                'country_state_id' => 522,
                'default_name' => 'Požeško-slavonska županija',
                'id' => 522,
                'locale' => 'ar',
            ),
            22 => 
            array (
                'country_state_id' => 523,
                'default_name' => 'Brodsko-posavska županija',
                'id' => 523,
                'locale' => 'ar',
            ),
            23 => 
            array (
                'country_state_id' => 524,
                'default_name' => 'زادارسكا زوبانيجا',
                'id' => 524,
                'locale' => 'ar',
            ),
            24 => 
            array (
                'country_state_id' => 525,
                'default_name' => 'Osječko-baranjska županija',
                'id' => 525,
                'locale' => 'ar',
            ),
            25 => 
            array (
                'country_state_id' => 526,
                'default_name' => 'شيبنسكو-كنينسكا سوبانيا',
                'id' => 526,
                'locale' => 'ar',
            ),
            26 => 
            array (
                'country_state_id' => 527,
                'default_name' => 'Virovitičko-podravska زوبانيا',
                'id' => 527,
                'locale' => 'ar',
            ),
            27 => 
            array (
                'country_state_id' => 528,
                'default_name' => 'Splitsko-dalmatinska زوبانيا',
                'id' => 528,
                'locale' => 'ar',
            ),
            28 => 
            array (
                'country_state_id' => 529,
                'default_name' => 'Istarska زوبانيا',
                'id' => 529,
                'locale' => 'ar',
            ),
            29 => 
            array (
                'country_state_id' => 530,
                'default_name' => 'Dubrovačko-neretvanska زوبانيا',
                'id' => 530,
                'locale' => 'ar',
            ),
            30 => 
            array (
                'country_state_id' => 531,
                'default_name' => 'Međimurska زوبانيا',
                'id' => 531,
                'locale' => 'ar',
            ),
            31 => 
            array (
                'country_state_id' => 532,
                'default_name' => 'غراد زغرب',
                'id' => 532,
                'locale' => 'ar',
            ),
            32 => 
            array (
                'country_state_id' => 533,
                'default_name' => 'جزر أندامان ونيكوبار',
                'id' => 533,
                'locale' => 'ar',
            ),
            33 => 
            array (
                'country_state_id' => 534,
                'default_name' => 'ولاية اندرا براديش',
                'id' => 534,
                'locale' => 'ar',
            ),
            34 => 
            array (
                'country_state_id' => 535,
                'default_name' => 'اروناتشال براديش',
                'id' => 535,
                'locale' => 'ar',
            ),
            35 => 
            array (
                'country_state_id' => 536,
                'default_name' => 'أسام',
                'id' => 536,
                'locale' => 'ar',
            ),
            36 => 
            array (
                'country_state_id' => 537,
                'default_name' => 'بيهار',
                'id' => 537,
                'locale' => 'ar',
            ),
            37 => 
            array (
                'country_state_id' => 538,
                'default_name' => 'شانديغار',
                'id' => 538,
                'locale' => 'ar',
            ),
            38 => 
            array (
                'country_state_id' => 539,
                'default_name' => 'تشهاتيسجاره',
                'id' => 539,
                'locale' => 'ar',
            ),
            39 => 
            array (
                'country_state_id' => 540,
                'default_name' => 'دادرا ونجار هافيلي',
                'id' => 540,
                'locale' => 'ar',
            ),
            40 => 
            array (
                'country_state_id' => 541,
                'default_name' => 'دامان وديو',
                'id' => 541,
                'locale' => 'ar',
            ),
            41 => 
            array (
                'country_state_id' => 542,
                'default_name' => 'دلهي',
                'id' => 542,
                'locale' => 'ar',
            ),
            42 => 
            array (
                'country_state_id' => 543,
                'default_name' => 'غوا',
                'id' => 543,
                'locale' => 'ar',
            ),
            43 => 
            array (
                'country_state_id' => 544,
                'default_name' => 'غوجارات',
                'id' => 544,
                'locale' => 'ar',
            ),
            44 => 
            array (
                'country_state_id' => 545,
                'default_name' => 'هاريانا',
                'id' => 545,
                'locale' => 'ar',
            ),
            45 => 
            array (
                'country_state_id' => 546,
                'default_name' => 'هيماشال براديش',
                'id' => 546,
                'locale' => 'ar',
            ),
            46 => 
            array (
                'country_state_id' => 547,
                'default_name' => 'جامو وكشمير',
                'id' => 547,
                'locale' => 'ar',
            ),
            47 => 
            array (
                'country_state_id' => 548,
                'default_name' => 'جهارخاند',
                'id' => 548,
                'locale' => 'ar',
            ),
            48 => 
            array (
                'country_state_id' => 549,
                'default_name' => 'كارناتاكا',
                'id' => 549,
                'locale' => 'ar',
            ),
            49 => 
            array (
                'country_state_id' => 550,
                'default_name' => 'ولاية كيرالا',
                'id' => 550,
                'locale' => 'ar',
            ),
            50 => 
            array (
                'country_state_id' => 551,
                'default_name' => 'اكشادويب',
                'id' => 551,
                'locale' => 'ar',
            ),
            51 => 
            array (
                'country_state_id' => 552,
                'default_name' => 'ماديا براديش',
                'id' => 552,
                'locale' => 'ar',
            ),
            52 => 
            array (
                'country_state_id' => 553,
                'default_name' => 'ماهاراشترا',
                'id' => 553,
                'locale' => 'ar',
            ),
            53 => 
            array (
                'country_state_id' => 554,
                'default_name' => 'مانيبور',
                'id' => 554,
                'locale' => 'ar',
            ),
            54 => 
            array (
                'country_state_id' => 555,
                'default_name' => 'ميغالايا',
                'id' => 555,
                'locale' => 'ar',
            ),
            55 => 
            array (
                'country_state_id' => 556,
                'default_name' => 'ميزورام',
                'id' => 556,
                'locale' => 'ar',
            ),
            56 => 
            array (
                'country_state_id' => 557,
                'default_name' => 'ناجالاند',
                'id' => 557,
                'locale' => 'ar',
            ),
            57 => 
            array (
                'country_state_id' => 558,
                'default_name' => 'أوديشا',
                'id' => 558,
                'locale' => 'ar',
            ),
            58 => 
            array (
                'country_state_id' => 559,
                'default_name' => 'بودوتشيري',
                'id' => 559,
                'locale' => 'ar',
            ),
            59 => 
            array (
                'country_state_id' => 560,
                'default_name' => 'البنجاب',
                'id' => 560,
                'locale' => 'ar',
            ),
            60 => 
            array (
                'country_state_id' => 561,
                'default_name' => 'راجستان',
                'id' => 561,
                'locale' => 'ar',
            ),
            61 => 
            array (
                'country_state_id' => 562,
                'default_name' => 'سيكيم',
                'id' => 562,
                'locale' => 'ar',
            ),
            62 => 
            array (
                'country_state_id' => 563,
                'default_name' => 'تاميل نادو',
                'id' => 563,
                'locale' => 'ar',
            ),
            63 => 
            array (
                'country_state_id' => 564,
                'default_name' => 'تيلانجانا',
                'id' => 564,
                'locale' => 'ar',
            ),
            64 => 
            array (
                'country_state_id' => 565,
                'default_name' => 'تريبورا',
                'id' => 565,
                'locale' => 'ar',
            ),
            65 => 
            array (
                'country_state_id' => 566,
                'default_name' => 'ولاية اوتار براديش',
                'id' => 566,
                'locale' => 'ar',
            ),
            66 => 
            array (
                'country_state_id' => 567,
                'default_name' => 'أوتارانتشال',
                'id' => 567,
                'locale' => 'ar',
            ),
            67 => 
            array (
                'country_state_id' => 568,
                'default_name' => 'البنغال الغربية',
                'id' => 568,
                'locale' => 'ar',
            ),
            68 => 
            array (
                'country_state_id' => 1,
                'default_name' => 'Alabama',
                'id' => 569,
                'locale' => 'es',
            ),
            69 => 
            array (
                'country_state_id' => 2,
                'default_name' => 'Alaska',
                'id' => 570,
                'locale' => 'es',
            ),
            70 => 
            array (
                'country_state_id' => 3,
                'default_name' => 'American Samoa',
                'id' => 571,
                'locale' => 'es',
            ),
            71 => 
            array (
                'country_state_id' => 4,
                'default_name' => 'Arizona',
                'id' => 572,
                'locale' => 'es',
            ),
            72 => 
            array (
                'country_state_id' => 5,
                'default_name' => 'Arkansas',
                'id' => 573,
                'locale' => 'es',
            ),
            73 => 
            array (
                'country_state_id' => 6,
                'default_name' => 'Armed Forces Africa',
                'id' => 574,
                'locale' => 'es',
            ),
            74 => 
            array (
                'country_state_id' => 7,
                'default_name' => 'Armed Forces Americas',
                'id' => 575,
                'locale' => 'es',
            ),
            75 => 
            array (
                'country_state_id' => 8,
                'default_name' => 'Armed Forces Canada',
                'id' => 576,
                'locale' => 'es',
            ),
            76 => 
            array (
                'country_state_id' => 9,
                'default_name' => 'Armed Forces Europe',
                'id' => 577,
                'locale' => 'es',
            ),
            77 => 
            array (
                'country_state_id' => 10,
                'default_name' => 'Armed Forces Middle East',
                'id' => 578,
                'locale' => 'es',
            ),
            78 => 
            array (
                'country_state_id' => 11,
                'default_name' => 'Armed Forces Pacific',
                'id' => 579,
                'locale' => 'es',
            ),
            79 => 
            array (
                'country_state_id' => 12,
                'default_name' => 'California',
                'id' => 580,
                'locale' => 'es',
            ),
            80 => 
            array (
                'country_state_id' => 13,
                'default_name' => 'Colorado',
                'id' => 581,
                'locale' => 'es',
            ),
            81 => 
            array (
                'country_state_id' => 14,
                'default_name' => 'Connecticut',
                'id' => 582,
                'locale' => 'es',
            ),
            82 => 
            array (
                'country_state_id' => 15,
                'default_name' => 'Delaware',
                'id' => 583,
                'locale' => 'es',
            ),
            83 => 
            array (
                'country_state_id' => 16,
                'default_name' => 'District of Columbia',
                'id' => 584,
                'locale' => 'es',
            ),
            84 => 
            array (
                'country_state_id' => 17,
                'default_name' => 'Federated States Of Micronesia',
                'id' => 585,
                'locale' => 'es',
            ),
            85 => 
            array (
                'country_state_id' => 18,
                'default_name' => 'Florida',
                'id' => 586,
                'locale' => 'es',
            ),
            86 => 
            array (
                'country_state_id' => 19,
                'default_name' => 'Georgia',
                'id' => 587,
                'locale' => 'es',
            ),
            87 => 
            array (
                'country_state_id' => 20,
                'default_name' => 'Guam',
                'id' => 588,
                'locale' => 'es',
            ),
            88 => 
            array (
                'country_state_id' => 21,
                'default_name' => 'Hawaii',
                'id' => 589,
                'locale' => 'es',
            ),
            89 => 
            array (
                'country_state_id' => 22,
                'default_name' => 'Idaho',
                'id' => 590,
                'locale' => 'es',
            ),
            90 => 
            array (
                'country_state_id' => 23,
                'default_name' => 'Illinois',
                'id' => 591,
                'locale' => 'es',
            ),
            91 => 
            array (
                'country_state_id' => 24,
                'default_name' => 'Indiana',
                'id' => 592,
                'locale' => 'es',
            ),
            92 => 
            array (
                'country_state_id' => 25,
                'default_name' => 'Iowa',
                'id' => 593,
                'locale' => 'es',
            ),
            93 => 
            array (
                'country_state_id' => 26,
                'default_name' => 'Kansas',
                'id' => 594,
                'locale' => 'es',
            ),
            94 => 
            array (
                'country_state_id' => 27,
                'default_name' => 'Kentucky',
                'id' => 595,
                'locale' => 'es',
            ),
            95 => 
            array (
                'country_state_id' => 28,
                'default_name' => 'Louisiana',
                'id' => 596,
                'locale' => 'es',
            ),
            96 => 
            array (
                'country_state_id' => 29,
                'default_name' => 'Maine',
                'id' => 597,
                'locale' => 'es',
            ),
            97 => 
            array (
                'country_state_id' => 30,
                'default_name' => 'Marshall Islands',
                'id' => 598,
                'locale' => 'es',
            ),
            98 => 
            array (
                'country_state_id' => 31,
                'default_name' => 'Maryland',
                'id' => 599,
                'locale' => 'es',
            ),
            99 => 
            array (
                'country_state_id' => 32,
                'default_name' => 'Massachusetts',
                'id' => 600,
                'locale' => 'es',
            ),
            100 => 
            array (
                'country_state_id' => 33,
                'default_name' => 'Michigan',
                'id' => 601,
                'locale' => 'es',
            ),
            101 => 
            array (
                'country_state_id' => 34,
                'default_name' => 'Minnesota',
                'id' => 602,
                'locale' => 'es',
            ),
            102 => 
            array (
                'country_state_id' => 35,
                'default_name' => 'Mississippi',
                'id' => 603,
                'locale' => 'es',
            ),
            103 => 
            array (
                'country_state_id' => 36,
                'default_name' => 'Missouri',
                'id' => 604,
                'locale' => 'es',
            ),
            104 => 
            array (
                'country_state_id' => 37,
                'default_name' => 'Montana',
                'id' => 605,
                'locale' => 'es',
            ),
            105 => 
            array (
                'country_state_id' => 38,
                'default_name' => 'Nebraska',
                'id' => 606,
                'locale' => 'es',
            ),
            106 => 
            array (
                'country_state_id' => 39,
                'default_name' => 'Nevada',
                'id' => 607,
                'locale' => 'es',
            ),
            107 => 
            array (
                'country_state_id' => 40,
                'default_name' => 'New Hampshire',
                'id' => 608,
                'locale' => 'es',
            ),
            108 => 
            array (
                'country_state_id' => 41,
                'default_name' => 'New Jersey',
                'id' => 609,
                'locale' => 'es',
            ),
            109 => 
            array (
                'country_state_id' => 42,
                'default_name' => 'New Mexico',
                'id' => 610,
                'locale' => 'es',
            ),
            110 => 
            array (
                'country_state_id' => 43,
                'default_name' => 'New York',
                'id' => 611,
                'locale' => 'es',
            ),
            111 => 
            array (
                'country_state_id' => 44,
                'default_name' => 'North Carolina',
                'id' => 612,
                'locale' => 'es',
            ),
            112 => 
            array (
                'country_state_id' => 45,
                'default_name' => 'North Dakota',
                'id' => 613,
                'locale' => 'es',
            ),
            113 => 
            array (
                'country_state_id' => 46,
                'default_name' => 'Northern Mariana Islands',
                'id' => 614,
                'locale' => 'es',
            ),
            114 => 
            array (
                'country_state_id' => 47,
                'default_name' => 'Ohio',
                'id' => 615,
                'locale' => 'es',
            ),
            115 => 
            array (
                'country_state_id' => 48,
                'default_name' => 'Oklahoma',
                'id' => 616,
                'locale' => 'es',
            ),
            116 => 
            array (
                'country_state_id' => 49,
                'default_name' => 'Oregon',
                'id' => 617,
                'locale' => 'es',
            ),
            117 => 
            array (
                'country_state_id' => 50,
                'default_name' => 'Palau',
                'id' => 618,
                'locale' => 'es',
            ),
            118 => 
            array (
                'country_state_id' => 51,
                'default_name' => 'Pennsylvania',
                'id' => 619,
                'locale' => 'es',
            ),
            119 => 
            array (
                'country_state_id' => 52,
                'default_name' => 'Puerto Rico',
                'id' => 620,
                'locale' => 'es',
            ),
            120 => 
            array (
                'country_state_id' => 53,
                'default_name' => 'Rhode Island',
                'id' => 621,
                'locale' => 'es',
            ),
            121 => 
            array (
                'country_state_id' => 54,
                'default_name' => 'South Carolina',
                'id' => 622,
                'locale' => 'es',
            ),
            122 => 
            array (
                'country_state_id' => 55,
                'default_name' => 'South Dakota',
                'id' => 623,
                'locale' => 'es',
            ),
            123 => 
            array (
                'country_state_id' => 56,
                'default_name' => 'Tennessee',
                'id' => 624,
                'locale' => 'es',
            ),
            124 => 
            array (
                'country_state_id' => 57,
                'default_name' => 'Texas',
                'id' => 625,
                'locale' => 'es',
            ),
            125 => 
            array (
                'country_state_id' => 58,
                'default_name' => 'Utah',
                'id' => 626,
                'locale' => 'es',
            ),
            126 => 
            array (
                'country_state_id' => 59,
                'default_name' => 'Vermont',
                'id' => 627,
                'locale' => 'es',
            ),
            127 => 
            array (
                'country_state_id' => 60,
                'default_name' => 'Virgin Islands',
                'id' => 628,
                'locale' => 'es',
            ),
            128 => 
            array (
                'country_state_id' => 61,
                'default_name' => 'Virginia',
                'id' => 629,
                'locale' => 'es',
            ),
            129 => 
            array (
                'country_state_id' => 62,
                'default_name' => 'Washington',
                'id' => 630,
                'locale' => 'es',
            ),
            130 => 
            array (
                'country_state_id' => 63,
                'default_name' => 'West Virginia',
                'id' => 631,
                'locale' => 'es',
            ),
            131 => 
            array (
                'country_state_id' => 64,
                'default_name' => 'Wisconsin',
                'id' => 632,
                'locale' => 'es',
            ),
            132 => 
            array (
                'country_state_id' => 65,
                'default_name' => 'Wyoming',
                'id' => 633,
                'locale' => 'es',
            ),
            133 => 
            array (
                'country_state_id' => 66,
                'default_name' => 'Alberta',
                'id' => 634,
                'locale' => 'es',
            ),
            134 => 
            array (
                'country_state_id' => 67,
                'default_name' => 'British Columbia',
                'id' => 635,
                'locale' => 'es',
            ),
            135 => 
            array (
                'country_state_id' => 68,
                'default_name' => 'Manitoba',
                'id' => 636,
                'locale' => 'es',
            ),
            136 => 
            array (
                'country_state_id' => 69,
                'default_name' => 'Newfoundland and Labrador',
                'id' => 637,
                'locale' => 'es',
            ),
            137 => 
            array (
                'country_state_id' => 70,
                'default_name' => 'New Brunswick',
                'id' => 638,
                'locale' => 'es',
            ),
            138 => 
            array (
                'country_state_id' => 71,
                'default_name' => 'Nova Scotia',
                'id' => 639,
                'locale' => 'es',
            ),
            139 => 
            array (
                'country_state_id' => 72,
                'default_name' => 'Northwest Territories',
                'id' => 640,
                'locale' => 'es',
            ),
            140 => 
            array (
                'country_state_id' => 73,
                'default_name' => 'Nunavut',
                'id' => 641,
                'locale' => 'es',
            ),
            141 => 
            array (
                'country_state_id' => 74,
                'default_name' => 'Ontario',
                'id' => 642,
                'locale' => 'es',
            ),
            142 => 
            array (
                'country_state_id' => 75,
                'default_name' => 'Prince Edward Island',
                'id' => 643,
                'locale' => 'es',
            ),
            143 => 
            array (
                'country_state_id' => 76,
                'default_name' => 'Quebec',
                'id' => 644,
                'locale' => 'es',
            ),
            144 => 
            array (
                'country_state_id' => 77,
                'default_name' => 'Saskatchewan',
                'id' => 645,
                'locale' => 'es',
            ),
            145 => 
            array (
                'country_state_id' => 78,
                'default_name' => 'Yukon Territory',
                'id' => 646,
                'locale' => 'es',
            ),
            146 => 
            array (
                'country_state_id' => 79,
                'default_name' => 'Niedersachsen',
                'id' => 647,
                'locale' => 'es',
            ),
            147 => 
            array (
                'country_state_id' => 80,
                'default_name' => 'Baden-Württemberg',
                'id' => 648,
                'locale' => 'es',
            ),
            148 => 
            array (
                'country_state_id' => 81,
                'default_name' => 'Bayern',
                'id' => 649,
                'locale' => 'es',
            ),
            149 => 
            array (
                'country_state_id' => 82,
                'default_name' => 'Berlin',
                'id' => 650,
                'locale' => 'es',
            ),
            150 => 
            array (
                'country_state_id' => 83,
                'default_name' => 'Brandenburg',
                'id' => 651,
                'locale' => 'es',
            ),
            151 => 
            array (
                'country_state_id' => 84,
                'default_name' => 'Bremen',
                'id' => 652,
                'locale' => 'es',
            ),
            152 => 
            array (
                'country_state_id' => 85,
                'default_name' => 'Hamburg',
                'id' => 653,
                'locale' => 'es',
            ),
            153 => 
            array (
                'country_state_id' => 86,
                'default_name' => 'Hessen',
                'id' => 654,
                'locale' => 'es',
            ),
            154 => 
            array (
                'country_state_id' => 87,
                'default_name' => 'Mecklenburg-Vorpommern',
                'id' => 655,
                'locale' => 'es',
            ),
            155 => 
            array (
                'country_state_id' => 88,
                'default_name' => 'Nordrhein-Westfalen',
                'id' => 656,
                'locale' => 'es',
            ),
            156 => 
            array (
                'country_state_id' => 89,
                'default_name' => 'Rheinland-Pfalz',
                'id' => 657,
                'locale' => 'es',
            ),
            157 => 
            array (
                'country_state_id' => 90,
                'default_name' => 'Saarland',
                'id' => 658,
                'locale' => 'es',
            ),
            158 => 
            array (
                'country_state_id' => 91,
                'default_name' => 'Sachsen',
                'id' => 659,
                'locale' => 'es',
            ),
            159 => 
            array (
                'country_state_id' => 92,
                'default_name' => 'Sachsen-Anhalt',
                'id' => 660,
                'locale' => 'es',
            ),
            160 => 
            array (
                'country_state_id' => 93,
                'default_name' => 'Schleswig-Holstein',
                'id' => 661,
                'locale' => 'es',
            ),
            161 => 
            array (
                'country_state_id' => 94,
                'default_name' => 'Thüringen',
                'id' => 662,
                'locale' => 'es',
            ),
            162 => 
            array (
                'country_state_id' => 95,
                'default_name' => 'Wien',
                'id' => 663,
                'locale' => 'es',
            ),
            163 => 
            array (
                'country_state_id' => 96,
                'default_name' => 'Niederösterreich',
                'id' => 664,
                'locale' => 'es',
            ),
            164 => 
            array (
                'country_state_id' => 97,
                'default_name' => 'Oberösterreich',
                'id' => 665,
                'locale' => 'es',
            ),
            165 => 
            array (
                'country_state_id' => 98,
                'default_name' => 'Salzburg',
                'id' => 666,
                'locale' => 'es',
            ),
            166 => 
            array (
                'country_state_id' => 99,
                'default_name' => 'Kärnten',
                'id' => 667,
                'locale' => 'es',
            ),
            167 => 
            array (
                'country_state_id' => 100,
                'default_name' => 'Steiermark',
                'id' => 668,
                'locale' => 'es',
            ),
            168 => 
            array (
                'country_state_id' => 101,
                'default_name' => 'Tirol',
                'id' => 669,
                'locale' => 'es',
            ),
            169 => 
            array (
                'country_state_id' => 102,
                'default_name' => 'Burgenland',
                'id' => 670,
                'locale' => 'es',
            ),
            170 => 
            array (
                'country_state_id' => 103,
                'default_name' => 'Vorarlberg',
                'id' => 671,
                'locale' => 'es',
            ),
            171 => 
            array (
                'country_state_id' => 104,
                'default_name' => 'Aargau',
                'id' => 672,
                'locale' => 'es',
            ),
            172 => 
            array (
                'country_state_id' => 105,
                'default_name' => 'Appenzell Innerrhoden',
                'id' => 673,
                'locale' => 'es',
            ),
            173 => 
            array (
                'country_state_id' => 106,
                'default_name' => 'Appenzell Ausserrhoden',
                'id' => 674,
                'locale' => 'es',
            ),
            174 => 
            array (
                'country_state_id' => 107,
                'default_name' => 'Bern',
                'id' => 675,
                'locale' => 'es',
            ),
            175 => 
            array (
                'country_state_id' => 108,
                'default_name' => 'Basel-Landschaft',
                'id' => 676,
                'locale' => 'es',
            ),
            176 => 
            array (
                'country_state_id' => 109,
                'default_name' => 'Basel-Stadt',
                'id' => 677,
                'locale' => 'es',
            ),
            177 => 
            array (
                'country_state_id' => 110,
                'default_name' => 'Freiburg',
                'id' => 678,
                'locale' => 'es',
            ),
            178 => 
            array (
                'country_state_id' => 111,
                'default_name' => 'Genf',
                'id' => 679,
                'locale' => 'es',
            ),
            179 => 
            array (
                'country_state_id' => 112,
                'default_name' => 'Glarus',
                'id' => 680,
                'locale' => 'es',
            ),
            180 => 
            array (
                'country_state_id' => 113,
                'default_name' => 'Graubünden',
                'id' => 681,
                'locale' => 'es',
            ),
            181 => 
            array (
                'country_state_id' => 114,
                'default_name' => 'Jura',
                'id' => 682,
                'locale' => 'es',
            ),
            182 => 
            array (
                'country_state_id' => 115,
                'default_name' => 'Luzern',
                'id' => 683,
                'locale' => 'es',
            ),
            183 => 
            array (
                'country_state_id' => 116,
                'default_name' => 'Neuenburg',
                'id' => 684,
                'locale' => 'es',
            ),
            184 => 
            array (
                'country_state_id' => 117,
                'default_name' => 'Nidwalden',
                'id' => 685,
                'locale' => 'es',
            ),
            185 => 
            array (
                'country_state_id' => 118,
                'default_name' => 'Obwalden',
                'id' => 686,
                'locale' => 'es',
            ),
            186 => 
            array (
                'country_state_id' => 119,
                'default_name' => 'St. Gallen',
                'id' => 687,
                'locale' => 'es',
            ),
            187 => 
            array (
                'country_state_id' => 120,
                'default_name' => 'Schaffhausen',
                'id' => 688,
                'locale' => 'es',
            ),
            188 => 
            array (
                'country_state_id' => 121,
                'default_name' => 'Solothurn',
                'id' => 689,
                'locale' => 'es',
            ),
            189 => 
            array (
                'country_state_id' => 122,
                'default_name' => 'Schwyz',
                'id' => 690,
                'locale' => 'es',
            ),
            190 => 
            array (
                'country_state_id' => 123,
                'default_name' => 'Thurgau',
                'id' => 691,
                'locale' => 'es',
            ),
            191 => 
            array (
                'country_state_id' => 124,
                'default_name' => 'Tessin',
                'id' => 692,
                'locale' => 'es',
            ),
            192 => 
            array (
                'country_state_id' => 125,
                'default_name' => 'Uri',
                'id' => 693,
                'locale' => 'es',
            ),
            193 => 
            array (
                'country_state_id' => 126,
                'default_name' => 'Waadt',
                'id' => 694,
                'locale' => 'es',
            ),
            194 => 
            array (
                'country_state_id' => 127,
                'default_name' => 'Wallis',
                'id' => 695,
                'locale' => 'es',
            ),
            195 => 
            array (
                'country_state_id' => 128,
                'default_name' => 'Zug',
                'id' => 696,
                'locale' => 'es',
            ),
            196 => 
            array (
                'country_state_id' => 129,
                'default_name' => 'Zürich',
                'id' => 697,
                'locale' => 'es',
            ),
            197 => 
            array (
                'country_state_id' => 130,
                'default_name' => 'La Coruña',
                'id' => 698,
                'locale' => 'es',
            ),
            198 => 
            array (
                'country_state_id' => 131,
                'default_name' => 'Álava',
                'id' => 699,
                'locale' => 'es',
            ),
            199 => 
            array (
                'country_state_id' => 132,
                'default_name' => 'Albacete',
                'id' => 700,
                'locale' => 'es',
            ),
            200 => 
            array (
                'country_state_id' => 133,
                'default_name' => 'Alicante',
                'id' => 701,
                'locale' => 'es',
            ),
            201 => 
            array (
                'country_state_id' => 134,
                'default_name' => 'Almería',
                'id' => 702,
                'locale' => 'es',
            ),
            202 => 
            array (
                'country_state_id' => 135,
                'default_name' => 'Asturias',
                'id' => 703,
                'locale' => 'es',
            ),
            203 => 
            array (
                'country_state_id' => 136,
                'default_name' => 'Ávila',
                'id' => 704,
                'locale' => 'es',
            ),
            204 => 
            array (
                'country_state_id' => 137,
                'default_name' => 'Badajoz',
                'id' => 705,
                'locale' => 'es',
            ),
            205 => 
            array (
                'country_state_id' => 138,
                'default_name' => 'Baleares',
                'id' => 706,
                'locale' => 'es',
            ),
            206 => 
            array (
                'country_state_id' => 139,
                'default_name' => 'Barcelona',
                'id' => 707,
                'locale' => 'es',
            ),
            207 => 
            array (
                'country_state_id' => 140,
                'default_name' => 'Burgos',
                'id' => 708,
                'locale' => 'es',
            ),
            208 => 
            array (
                'country_state_id' => 141,
                'default_name' => 'Cáceres',
                'id' => 709,
                'locale' => 'es',
            ),
            209 => 
            array (
                'country_state_id' => 142,
                'default_name' => 'Cádiz',
                'id' => 710,
                'locale' => 'es',
            ),
            210 => 
            array (
                'country_state_id' => 143,
                'default_name' => 'Cantabria',
                'id' => 711,
                'locale' => 'es',
            ),
            211 => 
            array (
                'country_state_id' => 144,
                'default_name' => 'Castellón',
                'id' => 712,
                'locale' => 'es',
            ),
            212 => 
            array (
                'country_state_id' => 145,
                'default_name' => 'Ceuta',
                'id' => 713,
                'locale' => 'es',
            ),
            213 => 
            array (
                'country_state_id' => 146,
                'default_name' => 'Ciudad Real',
                'id' => 714,
                'locale' => 'es',
            ),
            214 => 
            array (
                'country_state_id' => 147,
                'default_name' => 'Córdoba',
                'id' => 715,
                'locale' => 'es',
            ),
            215 => 
            array (
                'country_state_id' => 148,
                'default_name' => 'Cuenca',
                'id' => 716,
                'locale' => 'es',
            ),
            216 => 
            array (
                'country_state_id' => 149,
                'default_name' => 'Gerona',
                'id' => 717,
                'locale' => 'es',
            ),
            217 => 
            array (
                'country_state_id' => 150,
                'default_name' => 'Granada',
                'id' => 718,
                'locale' => 'es',
            ),
            218 => 
            array (
                'country_state_id' => 151,
                'default_name' => 'Guadalajara',
                'id' => 719,
                'locale' => 'es',
            ),
            219 => 
            array (
                'country_state_id' => 152,
                'default_name' => 'Guipúzcoa',
                'id' => 720,
                'locale' => 'es',
            ),
            220 => 
            array (
                'country_state_id' => 153,
                'default_name' => 'Huelva',
                'id' => 721,
                'locale' => 'es',
            ),
            221 => 
            array (
                'country_state_id' => 154,
                'default_name' => 'Huesca',
                'id' => 722,
                'locale' => 'es',
            ),
            222 => 
            array (
                'country_state_id' => 155,
                'default_name' => 'Jaén',
                'id' => 723,
                'locale' => 'es',
            ),
            223 => 
            array (
                'country_state_id' => 156,
                'default_name' => 'La Rioja',
                'id' => 724,
                'locale' => 'es',
            ),
            224 => 
            array (
                'country_state_id' => 157,
                'default_name' => 'Las Palmas',
                'id' => 725,
                'locale' => 'es',
            ),
            225 => 
            array (
                'country_state_id' => 158,
                'default_name' => 'León',
                'id' => 726,
                'locale' => 'es',
            ),
            226 => 
            array (
                'country_state_id' => 159,
                'default_name' => 'Lérida',
                'id' => 727,
                'locale' => 'es',
            ),
            227 => 
            array (
                'country_state_id' => 160,
                'default_name' => 'Lugo',
                'id' => 728,
                'locale' => 'es',
            ),
            228 => 
            array (
                'country_state_id' => 161,
                'default_name' => 'Madrid',
                'id' => 729,
                'locale' => 'es',
            ),
            229 => 
            array (
                'country_state_id' => 162,
                'default_name' => 'Málaga',
                'id' => 730,
                'locale' => 'es',
            ),
            230 => 
            array (
                'country_state_id' => 163,
                'default_name' => 'Melilla',
                'id' => 731,
                'locale' => 'es',
            ),
            231 => 
            array (
                'country_state_id' => 164,
                'default_name' => 'Murcia',
                'id' => 732,
                'locale' => 'es',
            ),
            232 => 
            array (
                'country_state_id' => 165,
                'default_name' => 'Navarra',
                'id' => 733,
                'locale' => 'es',
            ),
            233 => 
            array (
                'country_state_id' => 166,
                'default_name' => 'Orense',
                'id' => 734,
                'locale' => 'es',
            ),
            234 => 
            array (
                'country_state_id' => 167,
                'default_name' => 'Palencia',
                'id' => 735,
                'locale' => 'es',
            ),
            235 => 
            array (
                'country_state_id' => 168,
                'default_name' => 'Pontevedra',
                'id' => 736,
                'locale' => 'es',
            ),
            236 => 
            array (
                'country_state_id' => 169,
                'default_name' => 'Salamanca',
                'id' => 737,
                'locale' => 'es',
            ),
            237 => 
            array (
                'country_state_id' => 170,
                'default_name' => 'Santa Cruz de Tenerife',
                'id' => 738,
                'locale' => 'es',
            ),
            238 => 
            array (
                'country_state_id' => 171,
                'default_name' => 'Segovia',
                'id' => 739,
                'locale' => 'es',
            ),
            239 => 
            array (
                'country_state_id' => 172,
                'default_name' => 'Sevilla',
                'id' => 740,
                'locale' => 'es',
            ),
            240 => 
            array (
                'country_state_id' => 173,
                'default_name' => 'Soria',
                'id' => 741,
                'locale' => 'es',
            ),
            241 => 
            array (
                'country_state_id' => 174,
                'default_name' => 'Tarragona',
                'id' => 742,
                'locale' => 'es',
            ),
            242 => 
            array (
                'country_state_id' => 175,
                'default_name' => 'Teruel',
                'id' => 743,
                'locale' => 'es',
            ),
            243 => 
            array (
                'country_state_id' => 176,
                'default_name' => 'Toledo',
                'id' => 744,
                'locale' => 'es',
            ),
            244 => 
            array (
                'country_state_id' => 177,
                'default_name' => 'Valencia',
                'id' => 745,
                'locale' => 'es',
            ),
            245 => 
            array (
                'country_state_id' => 178,
                'default_name' => 'Valladolid',
                'id' => 746,
                'locale' => 'es',
            ),
            246 => 
            array (
                'country_state_id' => 179,
                'default_name' => 'Vizcaya',
                'id' => 747,
                'locale' => 'es',
            ),
            247 => 
            array (
                'country_state_id' => 180,
                'default_name' => 'Zamora',
                'id' => 748,
                'locale' => 'es',
            ),
            248 => 
            array (
                'country_state_id' => 181,
                'default_name' => 'Zaragoza',
                'id' => 749,
                'locale' => 'es',
            ),
            249 => 
            array (
                'country_state_id' => 182,
                'default_name' => 'Ain',
                'id' => 750,
                'locale' => 'es',
            ),
            250 => 
            array (
                'country_state_id' => 183,
                'default_name' => 'Aisne',
                'id' => 751,
                'locale' => 'es',
            ),
            251 => 
            array (
                'country_state_id' => 184,
                'default_name' => 'Allier',
                'id' => 752,
                'locale' => 'es',
            ),
            252 => 
            array (
                'country_state_id' => 185,
                'default_name' => 'Alpes-de-Haute-Provence',
                'id' => 753,
                'locale' => 'es',
            ),
            253 => 
            array (
                'country_state_id' => 186,
                'default_name' => 'Hautes-Alpes',
                'id' => 754,
                'locale' => 'es',
            ),
            254 => 
            array (
                'country_state_id' => 187,
                'default_name' => 'Alpes-Maritimes',
                'id' => 755,
                'locale' => 'es',
            ),
            255 => 
            array (
                'country_state_id' => 188,
                'default_name' => 'Ardèche',
                'id' => 756,
                'locale' => 'es',
            ),
            256 => 
            array (
                'country_state_id' => 189,
                'default_name' => 'Ardennes',
                'id' => 757,
                'locale' => 'es',
            ),
            257 => 
            array (
                'country_state_id' => 190,
                'default_name' => 'Ariège',
                'id' => 758,
                'locale' => 'es',
            ),
            258 => 
            array (
                'country_state_id' => 191,
                'default_name' => 'Aube',
                'id' => 759,
                'locale' => 'es',
            ),
            259 => 
            array (
                'country_state_id' => 192,
                'default_name' => 'Aude',
                'id' => 760,
                'locale' => 'es',
            ),
            260 => 
            array (
                'country_state_id' => 193,
                'default_name' => 'Aveyron',
                'id' => 761,
                'locale' => 'es',
            ),
            261 => 
            array (
                'country_state_id' => 194,
                'default_name' => 'Bouches-du-Rhône',
                'id' => 762,
                'locale' => 'es',
            ),
            262 => 
            array (
                'country_state_id' => 195,
                'default_name' => 'Calvados',
                'id' => 763,
                'locale' => 'es',
            ),
            263 => 
            array (
                'country_state_id' => 196,
                'default_name' => 'Cantal',
                'id' => 764,
                'locale' => 'es',
            ),
            264 => 
            array (
                'country_state_id' => 197,
                'default_name' => 'Charente',
                'id' => 765,
                'locale' => 'es',
            ),
            265 => 
            array (
                'country_state_id' => 198,
                'default_name' => 'Charente-Maritime',
                'id' => 766,
                'locale' => 'es',
            ),
            266 => 
            array (
                'country_state_id' => 199,
                'default_name' => 'Cher',
                'id' => 767,
                'locale' => 'es',
            ),
            267 => 
            array (
                'country_state_id' => 200,
                'default_name' => 'Corrèze',
                'id' => 768,
                'locale' => 'es',
            ),
            268 => 
            array (
                'country_state_id' => 201,
                'default_name' => 'Corse-du-Sud',
                'id' => 769,
                'locale' => 'es',
            ),
            269 => 
            array (
                'country_state_id' => 202,
                'default_name' => 'Haute-Corse',
                'id' => 770,
                'locale' => 'es',
            ),
            270 => 
            array (
                'country_state_id' => 203,
                'default_name' => 'Côte-d\'Or',
                'id' => 771,
                'locale' => 'es',
            ),
            271 => 
            array (
                'country_state_id' => 204,
                'default_name' => 'Côtes-d\'Armor',
                'id' => 772,
                'locale' => 'es',
            ),
            272 => 
            array (
                'country_state_id' => 205,
                'default_name' => 'Creuse',
                'id' => 773,
                'locale' => 'es',
            ),
            273 => 
            array (
                'country_state_id' => 206,
                'default_name' => 'Dordogne',
                'id' => 774,
                'locale' => 'es',
            ),
            274 => 
            array (
                'country_state_id' => 207,
                'default_name' => 'Doubs',
                'id' => 775,
                'locale' => 'es',
            ),
            275 => 
            array (
                'country_state_id' => 208,
                'default_name' => 'Drôme',
                'id' => 776,
                'locale' => 'es',
            ),
            276 => 
            array (
                'country_state_id' => 209,
                'default_name' => 'Eure',
                'id' => 777,
                'locale' => 'es',
            ),
            277 => 
            array (
                'country_state_id' => 210,
                'default_name' => 'Eure-et-Loir',
                'id' => 778,
                'locale' => 'es',
            ),
            278 => 
            array (
                'country_state_id' => 211,
                'default_name' => 'Finistère',
                'id' => 779,
                'locale' => 'es',
            ),
            279 => 
            array (
                'country_state_id' => 212,
                'default_name' => 'Gard',
                'id' => 780,
                'locale' => 'es',
            ),
            280 => 
            array (
                'country_state_id' => 213,
                'default_name' => 'Haute-Garonne',
                'id' => 781,
                'locale' => 'es',
            ),
            281 => 
            array (
                'country_state_id' => 214,
                'default_name' => 'Gers',
                'id' => 782,
                'locale' => 'es',
            ),
            282 => 
            array (
                'country_state_id' => 215,
                'default_name' => 'Gironde',
                'id' => 783,
                'locale' => 'es',
            ),
            283 => 
            array (
                'country_state_id' => 216,
                'default_name' => 'Hérault',
                'id' => 784,
                'locale' => 'es',
            ),
            284 => 
            array (
                'country_state_id' => 217,
                'default_name' => 'Ille-et-Vilaine',
                'id' => 785,
                'locale' => 'es',
            ),
            285 => 
            array (
                'country_state_id' => 218,
                'default_name' => 'Indre',
                'id' => 786,
                'locale' => 'es',
            ),
            286 => 
            array (
                'country_state_id' => 219,
                'default_name' => 'Indre-et-Loire',
                'id' => 787,
                'locale' => 'es',
            ),
            287 => 
            array (
                'country_state_id' => 220,
                'default_name' => 'Isère',
                'id' => 788,
                'locale' => 'es',
            ),
            288 => 
            array (
                'country_state_id' => 221,
                'default_name' => 'Jura',
                'id' => 789,
                'locale' => 'es',
            ),
            289 => 
            array (
                'country_state_id' => 222,
                'default_name' => 'Landes',
                'id' => 790,
                'locale' => 'es',
            ),
            290 => 
            array (
                'country_state_id' => 223,
                'default_name' => 'Loir-et-Cher',
                'id' => 791,
                'locale' => 'es',
            ),
            291 => 
            array (
                'country_state_id' => 224,
                'default_name' => 'Loire',
                'id' => 792,
                'locale' => 'es',
            ),
            292 => 
            array (
                'country_state_id' => 225,
                'default_name' => 'Haute-Loire',
                'id' => 793,
                'locale' => 'es',
            ),
            293 => 
            array (
                'country_state_id' => 226,
                'default_name' => 'Loire-Atlantique',
                'id' => 794,
                'locale' => 'es',
            ),
            294 => 
            array (
                'country_state_id' => 227,
                'default_name' => 'Loiret',
                'id' => 795,
                'locale' => 'es',
            ),
            295 => 
            array (
                'country_state_id' => 228,
                'default_name' => 'Lot',
                'id' => 796,
                'locale' => 'es',
            ),
            296 => 
            array (
                'country_state_id' => 229,
                'default_name' => 'Lot-et-Garonne',
                'id' => 797,
                'locale' => 'es',
            ),
            297 => 
            array (
                'country_state_id' => 230,
                'default_name' => 'Lozère',
                'id' => 798,
                'locale' => 'es',
            ),
            298 => 
            array (
                'country_state_id' => 231,
                'default_name' => 'Maine-et-Loire',
                'id' => 799,
                'locale' => 'es',
            ),
            299 => 
            array (
                'country_state_id' => 232,
                'default_name' => 'Manche',
                'id' => 800,
                'locale' => 'es',
            ),
            300 => 
            array (
                'country_state_id' => 233,
                'default_name' => 'Marne',
                'id' => 801,
                'locale' => 'es',
            ),
            301 => 
            array (
                'country_state_id' => 234,
                'default_name' => 'Haute-Marne',
                'id' => 802,
                'locale' => 'es',
            ),
            302 => 
            array (
                'country_state_id' => 235,
                'default_name' => 'Mayenne',
                'id' => 803,
                'locale' => 'es',
            ),
            303 => 
            array (
                'country_state_id' => 236,
                'default_name' => 'Meurthe-et-Moselle',
                'id' => 804,
                'locale' => 'es',
            ),
            304 => 
            array (
                'country_state_id' => 237,
                'default_name' => 'Meuse',
                'id' => 805,
                'locale' => 'es',
            ),
            305 => 
            array (
                'country_state_id' => 238,
                'default_name' => 'Morbihan',
                'id' => 806,
                'locale' => 'es',
            ),
            306 => 
            array (
                'country_state_id' => 239,
                'default_name' => 'Moselle',
                'id' => 807,
                'locale' => 'es',
            ),
            307 => 
            array (
                'country_state_id' => 240,
                'default_name' => 'Nièvre',
                'id' => 808,
                'locale' => 'es',
            ),
            308 => 
            array (
                'country_state_id' => 241,
                'default_name' => 'Nord',
                'id' => 809,
                'locale' => 'es',
            ),
            309 => 
            array (
                'country_state_id' => 242,
                'default_name' => 'Oise',
                'id' => 810,
                'locale' => 'es',
            ),
            310 => 
            array (
                'country_state_id' => 243,
                'default_name' => 'Orne',
                'id' => 811,
                'locale' => 'es',
            ),
            311 => 
            array (
                'country_state_id' => 244,
                'default_name' => 'Pas-de-Calais',
                'id' => 812,
                'locale' => 'es',
            ),
            312 => 
            array (
                'country_state_id' => 245,
                'default_name' => 'Puy-de-Dôme',
                'id' => 813,
                'locale' => 'es',
            ),
            313 => 
            array (
                'country_state_id' => 246,
                'default_name' => 'Pyrénées-Atlantiques',
                'id' => 814,
                'locale' => 'es',
            ),
            314 => 
            array (
                'country_state_id' => 247,
                'default_name' => 'Hautes-Pyrénées',
                'id' => 815,
                'locale' => 'es',
            ),
            315 => 
            array (
                'country_state_id' => 248,
                'default_name' => 'Pyrénées-Orientales',
                'id' => 816,
                'locale' => 'es',
            ),
            316 => 
            array (
                'country_state_id' => 249,
                'default_name' => 'Bas-Rhin',
                'id' => 817,
                'locale' => 'es',
            ),
            317 => 
            array (
                'country_state_id' => 250,
                'default_name' => 'Haut-Rhin',
                'id' => 818,
                'locale' => 'es',
            ),
            318 => 
            array (
                'country_state_id' => 251,
                'default_name' => 'Rhône',
                'id' => 819,
                'locale' => 'es',
            ),
            319 => 
            array (
                'country_state_id' => 252,
                'default_name' => 'Haute-Saône',
                'id' => 820,
                'locale' => 'es',
            ),
            320 => 
            array (
                'country_state_id' => 253,
                'default_name' => 'Saône-et-Loire',
                'id' => 821,
                'locale' => 'es',
            ),
            321 => 
            array (
                'country_state_id' => 254,
                'default_name' => 'Sarthe',
                'id' => 822,
                'locale' => 'es',
            ),
            322 => 
            array (
                'country_state_id' => 255,
                'default_name' => 'Savoie',
                'id' => 823,
                'locale' => 'es',
            ),
            323 => 
            array (
                'country_state_id' => 256,
                'default_name' => 'Haute-Savoie',
                'id' => 824,
                'locale' => 'es',
            ),
            324 => 
            array (
                'country_state_id' => 257,
                'default_name' => 'Paris',
                'id' => 825,
                'locale' => 'es',
            ),
            325 => 
            array (
                'country_state_id' => 258,
                'default_name' => 'Seine-Maritime',
                'id' => 826,
                'locale' => 'es',
            ),
            326 => 
            array (
                'country_state_id' => 259,
                'default_name' => 'Seine-et-Marne',
                'id' => 827,
                'locale' => 'es',
            ),
            327 => 
            array (
                'country_state_id' => 260,
                'default_name' => 'Yvelines',
                'id' => 828,
                'locale' => 'es',
            ),
            328 => 
            array (
                'country_state_id' => 261,
                'default_name' => 'Deux-Sèvres',
                'id' => 829,
                'locale' => 'es',
            ),
            329 => 
            array (
                'country_state_id' => 262,
                'default_name' => 'Somme',
                'id' => 830,
                'locale' => 'es',
            ),
            330 => 
            array (
                'country_state_id' => 263,
                'default_name' => 'Tarn',
                'id' => 831,
                'locale' => 'es',
            ),
            331 => 
            array (
                'country_state_id' => 264,
                'default_name' => 'Tarn-et-Garonne',
                'id' => 832,
                'locale' => 'es',
            ),
            332 => 
            array (
                'country_state_id' => 265,
                'default_name' => 'Var',
                'id' => 833,
                'locale' => 'es',
            ),
            333 => 
            array (
                'country_state_id' => 266,
                'default_name' => 'Vaucluse',
                'id' => 834,
                'locale' => 'es',
            ),
            334 => 
            array (
                'country_state_id' => 267,
                'default_name' => 'Vendée',
                'id' => 835,
                'locale' => 'es',
            ),
            335 => 
            array (
                'country_state_id' => 268,
                'default_name' => 'Vienne',
                'id' => 836,
                'locale' => 'es',
            ),
            336 => 
            array (
                'country_state_id' => 269,
                'default_name' => 'Haute-Vienne',
                'id' => 837,
                'locale' => 'es',
            ),
            337 => 
            array (
                'country_state_id' => 270,
                'default_name' => 'Vosges',
                'id' => 838,
                'locale' => 'es',
            ),
            338 => 
            array (
                'country_state_id' => 271,
                'default_name' => 'Yonne',
                'id' => 839,
                'locale' => 'es',
            ),
            339 => 
            array (
                'country_state_id' => 272,
                'default_name' => 'Territoire-de-Belfort',
                'id' => 840,
                'locale' => 'es',
            ),
            340 => 
            array (
                'country_state_id' => 273,
                'default_name' => 'Essonne',
                'id' => 841,
                'locale' => 'es',
            ),
            341 => 
            array (
                'country_state_id' => 274,
                'default_name' => 'Hauts-de-Seine',
                'id' => 842,
                'locale' => 'es',
            ),
            342 => 
            array (
                'country_state_id' => 275,
                'default_name' => 'Seine-Saint-Denis',
                'id' => 843,
                'locale' => 'es',
            ),
            343 => 
            array (
                'country_state_id' => 276,
                'default_name' => 'Val-de-Marne',
                'id' => 844,
                'locale' => 'es',
            ),
            344 => 
            array (
                'country_state_id' => 277,
                'default_name' => 'Val-d\'Oise',
                'id' => 845,
                'locale' => 'es',
            ),
            345 => 
            array (
                'country_state_id' => 278,
                'default_name' => 'Alba',
                'id' => 846,
                'locale' => 'es',
            ),
            346 => 
            array (
                'country_state_id' => 279,
                'default_name' => 'Arad',
                'id' => 847,
                'locale' => 'es',
            ),
            347 => 
            array (
                'country_state_id' => 280,
                'default_name' => 'Argeş',
                'id' => 848,
                'locale' => 'es',
            ),
            348 => 
            array (
                'country_state_id' => 281,
                'default_name' => 'Bacău',
                'id' => 849,
                'locale' => 'es',
            ),
            349 => 
            array (
                'country_state_id' => 282,
                'default_name' => 'Bihor',
                'id' => 850,
                'locale' => 'es',
            ),
            350 => 
            array (
                'country_state_id' => 283,
                'default_name' => 'Bistriţa-Năsăud',
                'id' => 851,
                'locale' => 'es',
            ),
            351 => 
            array (
                'country_state_id' => 284,
                'default_name' => 'Botoşani',
                'id' => 852,
                'locale' => 'es',
            ),
            352 => 
            array (
                'country_state_id' => 285,
                'default_name' => 'Braşov',
                'id' => 853,
                'locale' => 'es',
            ),
            353 => 
            array (
                'country_state_id' => 286,
                'default_name' => 'Brăila',
                'id' => 854,
                'locale' => 'es',
            ),
            354 => 
            array (
                'country_state_id' => 287,
                'default_name' => 'Bucureşti',
                'id' => 855,
                'locale' => 'es',
            ),
            355 => 
            array (
                'country_state_id' => 288,
                'default_name' => 'Buzău',
                'id' => 856,
                'locale' => 'es',
            ),
            356 => 
            array (
                'country_state_id' => 289,
                'default_name' => 'Caraş-Severin',
                'id' => 857,
                'locale' => 'es',
            ),
            357 => 
            array (
                'country_state_id' => 290,
                'default_name' => 'Călăraşi',
                'id' => 858,
                'locale' => 'es',
            ),
            358 => 
            array (
                'country_state_id' => 291,
                'default_name' => 'Cluj',
                'id' => 859,
                'locale' => 'es',
            ),
            359 => 
            array (
                'country_state_id' => 292,
                'default_name' => 'Constanţa',
                'id' => 860,
                'locale' => 'es',
            ),
            360 => 
            array (
                'country_state_id' => 293,
                'default_name' => 'Covasna',
                'id' => 861,
                'locale' => 'es',
            ),
            361 => 
            array (
                'country_state_id' => 294,
                'default_name' => 'Dâmboviţa',
                'id' => 862,
                'locale' => 'es',
            ),
            362 => 
            array (
                'country_state_id' => 295,
                'default_name' => 'Dolj',
                'id' => 863,
                'locale' => 'es',
            ),
            363 => 
            array (
                'country_state_id' => 296,
                'default_name' => 'Galaţi',
                'id' => 864,
                'locale' => 'es',
            ),
            364 => 
            array (
                'country_state_id' => 297,
                'default_name' => 'Giurgiu',
                'id' => 865,
                'locale' => 'es',
            ),
            365 => 
            array (
                'country_state_id' => 298,
                'default_name' => 'Gorj',
                'id' => 866,
                'locale' => 'es',
            ),
            366 => 
            array (
                'country_state_id' => 299,
                'default_name' => 'Harghita',
                'id' => 867,
                'locale' => 'es',
            ),
            367 => 
            array (
                'country_state_id' => 300,
                'default_name' => 'Hunedoara',
                'id' => 868,
                'locale' => 'es',
            ),
            368 => 
            array (
                'country_state_id' => 301,
                'default_name' => 'Ialomiţa',
                'id' => 869,
                'locale' => 'es',
            ),
            369 => 
            array (
                'country_state_id' => 302,
                'default_name' => 'Iaşi',
                'id' => 870,
                'locale' => 'es',
            ),
            370 => 
            array (
                'country_state_id' => 303,
                'default_name' => 'Ilfov',
                'id' => 871,
                'locale' => 'es',
            ),
            371 => 
            array (
                'country_state_id' => 304,
                'default_name' => 'Maramureş',
                'id' => 872,
                'locale' => 'es',
            ),
            372 => 
            array (
                'country_state_id' => 305,
                'default_name' => 'Mehedinţi',
                'id' => 873,
                'locale' => 'es',
            ),
            373 => 
            array (
                'country_state_id' => 306,
                'default_name' => 'Mureş',
                'id' => 874,
                'locale' => 'es',
            ),
            374 => 
            array (
                'country_state_id' => 307,
                'default_name' => 'Neamţ',
                'id' => 875,
                'locale' => 'es',
            ),
            375 => 
            array (
                'country_state_id' => 308,
                'default_name' => 'Olt',
                'id' => 876,
                'locale' => 'es',
            ),
            376 => 
            array (
                'country_state_id' => 309,
                'default_name' => 'Prahova',
                'id' => 877,
                'locale' => 'es',
            ),
            377 => 
            array (
                'country_state_id' => 310,
                'default_name' => 'Satu-Mare',
                'id' => 878,
                'locale' => 'es',
            ),
            378 => 
            array (
                'country_state_id' => 311,
                'default_name' => 'Sălaj',
                'id' => 879,
                'locale' => 'es',
            ),
            379 => 
            array (
                'country_state_id' => 312,
                'default_name' => 'Sibiu',
                'id' => 880,
                'locale' => 'es',
            ),
            380 => 
            array (
                'country_state_id' => 313,
                'default_name' => 'Suceava',
                'id' => 881,
                'locale' => 'es',
            ),
            381 => 
            array (
                'country_state_id' => 314,
                'default_name' => 'Teleorman',
                'id' => 882,
                'locale' => 'es',
            ),
            382 => 
            array (
                'country_state_id' => 315,
                'default_name' => 'Timiş',
                'id' => 883,
                'locale' => 'es',
            ),
            383 => 
            array (
                'country_state_id' => 316,
                'default_name' => 'Tulcea',
                'id' => 884,
                'locale' => 'es',
            ),
            384 => 
            array (
                'country_state_id' => 317,
                'default_name' => 'Vaslui',
                'id' => 885,
                'locale' => 'es',
            ),
            385 => 
            array (
                'country_state_id' => 318,
                'default_name' => 'Vâlcea',
                'id' => 886,
                'locale' => 'es',
            ),
            386 => 
            array (
                'country_state_id' => 319,
                'default_name' => 'Vrancea',
                'id' => 887,
                'locale' => 'es',
            ),
            387 => 
            array (
                'country_state_id' => 320,
                'default_name' => 'Lappi',
                'id' => 888,
                'locale' => 'es',
            ),
            388 => 
            array (
                'country_state_id' => 321,
                'default_name' => 'Pohjois-Pohjanmaa',
                'id' => 889,
                'locale' => 'es',
            ),
            389 => 
            array (
                'country_state_id' => 322,
                'default_name' => 'Kainuu',
                'id' => 890,
                'locale' => 'es',
            ),
            390 => 
            array (
                'country_state_id' => 323,
                'default_name' => 'Pohjois-Karjala',
                'id' => 891,
                'locale' => 'es',
            ),
            391 => 
            array (
                'country_state_id' => 324,
                'default_name' => 'Pohjois-Savo',
                'id' => 892,
                'locale' => 'es',
            ),
            392 => 
            array (
                'country_state_id' => 325,
                'default_name' => 'Etelä-Savo',
                'id' => 893,
                'locale' => 'es',
            ),
            393 => 
            array (
                'country_state_id' => 326,
                'default_name' => 'Etelä-Pohjanmaa',
                'id' => 894,
                'locale' => 'es',
            ),
            394 => 
            array (
                'country_state_id' => 327,
                'default_name' => 'Pohjanmaa',
                'id' => 895,
                'locale' => 'es',
            ),
            395 => 
            array (
                'country_state_id' => 328,
                'default_name' => 'Pirkanmaa',
                'id' => 896,
                'locale' => 'es',
            ),
            396 => 
            array (
                'country_state_id' => 329,
                'default_name' => 'Satakunta',
                'id' => 897,
                'locale' => 'es',
            ),
            397 => 
            array (
                'country_state_id' => 330,
                'default_name' => 'Keski-Pohjanmaa',
                'id' => 898,
                'locale' => 'es',
            ),
            398 => 
            array (
                'country_state_id' => 331,
                'default_name' => 'Keski-Suomi',
                'id' => 899,
                'locale' => 'es',
            ),
            399 => 
            array (
                'country_state_id' => 332,
                'default_name' => 'Varsinais-Suomi',
                'id' => 900,
                'locale' => 'es',
            ),
            400 => 
            array (
                'country_state_id' => 333,
                'default_name' => 'Etelä-Karjala',
                'id' => 901,
                'locale' => 'es',
            ),
            401 => 
            array (
                'country_state_id' => 334,
                'default_name' => 'Päijät-Häme',
                'id' => 902,
                'locale' => 'es',
            ),
            402 => 
            array (
                'country_state_id' => 335,
                'default_name' => 'Kanta-Häme',
                'id' => 903,
                'locale' => 'es',
            ),
            403 => 
            array (
                'country_state_id' => 336,
                'default_name' => 'Uusimaa',
                'id' => 904,
                'locale' => 'es',
            ),
            404 => 
            array (
                'country_state_id' => 337,
                'default_name' => 'Itä-Uusimaa',
                'id' => 905,
                'locale' => 'es',
            ),
            405 => 
            array (
                'country_state_id' => 338,
                'default_name' => 'Kymenlaakso',
                'id' => 906,
                'locale' => 'es',
            ),
            406 => 
            array (
                'country_state_id' => 339,
                'default_name' => 'Ahvenanmaa',
                'id' => 907,
                'locale' => 'es',
            ),
            407 => 
            array (
                'country_state_id' => 340,
                'default_name' => 'Harjumaa',
                'id' => 908,
                'locale' => 'es',
            ),
            408 => 
            array (
                'country_state_id' => 341,
                'default_name' => 'Hiiumaa',
                'id' => 909,
                'locale' => 'es',
            ),
            409 => 
            array (
                'country_state_id' => 342,
                'default_name' => 'country_state_ida-Virumaa',
                'id' => 910,
                'locale' => 'es',
            ),
            410 => 
            array (
                'country_state_id' => 343,
                'default_name' => 'Jõgevamaa',
                'id' => 911,
                'locale' => 'es',
            ),
            411 => 
            array (
                'country_state_id' => 344,
                'default_name' => 'Järvamaa',
                'id' => 912,
                'locale' => 'es',
            ),
            412 => 
            array (
                'country_state_id' => 345,
                'default_name' => 'Läänemaa',
                'id' => 913,
                'locale' => 'es',
            ),
            413 => 
            array (
                'country_state_id' => 346,
                'default_name' => 'Lääne-Virumaa',
                'id' => 914,
                'locale' => 'es',
            ),
            414 => 
            array (
                'country_state_id' => 347,
                'default_name' => 'Põlvamaa',
                'id' => 915,
                'locale' => 'es',
            ),
            415 => 
            array (
                'country_state_id' => 348,
                'default_name' => 'Pärnumaa',
                'id' => 916,
                'locale' => 'es',
            ),
            416 => 
            array (
                'country_state_id' => 349,
                'default_name' => 'Raplamaa',
                'id' => 917,
                'locale' => 'es',
            ),
            417 => 
            array (
                'country_state_id' => 350,
                'default_name' => 'Saaremaa',
                'id' => 918,
                'locale' => 'es',
            ),
            418 => 
            array (
                'country_state_id' => 351,
                'default_name' => 'Tartumaa',
                'id' => 919,
                'locale' => 'es',
            ),
            419 => 
            array (
                'country_state_id' => 352,
                'default_name' => 'Valgamaa',
                'id' => 920,
                'locale' => 'es',
            ),
            420 => 
            array (
                'country_state_id' => 353,
                'default_name' => 'Viljandimaa',
                'id' => 921,
                'locale' => 'es',
            ),
            421 => 
            array (
                'country_state_id' => 354,
                'default_name' => 'Võrumaa',
                'id' => 922,
                'locale' => 'es',
            ),
            422 => 
            array (
                'country_state_id' => 355,
                'default_name' => 'Daugavpils',
                'id' => 923,
                'locale' => 'es',
            ),
            423 => 
            array (
                'country_state_id' => 356,
                'default_name' => 'Jelgava',
                'id' => 924,
                'locale' => 'es',
            ),
            424 => 
            array (
                'country_state_id' => 357,
                'default_name' => 'Jēkabpils',
                'id' => 925,
                'locale' => 'es',
            ),
            425 => 
            array (
                'country_state_id' => 358,
                'default_name' => 'Jūrmala',
                'id' => 926,
                'locale' => 'es',
            ),
            426 => 
            array (
                'country_state_id' => 359,
                'default_name' => 'Liepāja',
                'id' => 927,
                'locale' => 'es',
            ),
            427 => 
            array (
                'country_state_id' => 360,
                'default_name' => 'Liepājas novads',
                'id' => 928,
                'locale' => 'es',
            ),
            428 => 
            array (
                'country_state_id' => 361,
                'default_name' => 'Rēzekne',
                'id' => 929,
                'locale' => 'es',
            ),
            429 => 
            array (
                'country_state_id' => 362,
                'default_name' => 'Rīga',
                'id' => 930,
                'locale' => 'es',
            ),
            430 => 
            array (
                'country_state_id' => 363,
                'default_name' => 'Rīgas novads',
                'id' => 931,
                'locale' => 'es',
            ),
            431 => 
            array (
                'country_state_id' => 364,
                'default_name' => 'Valmiera',
                'id' => 932,
                'locale' => 'es',
            ),
            432 => 
            array (
                'country_state_id' => 365,
                'default_name' => 'Ventspils',
                'id' => 933,
                'locale' => 'es',
            ),
            433 => 
            array (
                'country_state_id' => 366,
                'default_name' => 'Aglonas novads',
                'id' => 934,
                'locale' => 'es',
            ),
            434 => 
            array (
                'country_state_id' => 367,
                'default_name' => 'Aizkraukles novads',
                'id' => 935,
                'locale' => 'es',
            ),
            435 => 
            array (
                'country_state_id' => 368,
                'default_name' => 'Aizputes novads',
                'id' => 936,
                'locale' => 'es',
            ),
            436 => 
            array (
                'country_state_id' => 369,
                'default_name' => 'Aknīstes novads',
                'id' => 937,
                'locale' => 'es',
            ),
            437 => 
            array (
                'country_state_id' => 370,
                'default_name' => 'Alojas novads',
                'id' => 938,
                'locale' => 'es',
            ),
            438 => 
            array (
                'country_state_id' => 371,
                'default_name' => 'Alsungas novads',
                'id' => 939,
                'locale' => 'es',
            ),
            439 => 
            array (
                'country_state_id' => 372,
                'default_name' => 'Alūksnes novads',
                'id' => 940,
                'locale' => 'es',
            ),
            440 => 
            array (
                'country_state_id' => 373,
                'default_name' => 'Amatas novads',
                'id' => 941,
                'locale' => 'es',
            ),
            441 => 
            array (
                'country_state_id' => 374,
                'default_name' => 'Apes novads',
                'id' => 942,
                'locale' => 'es',
            ),
            442 => 
            array (
                'country_state_id' => 375,
                'default_name' => 'Auces novads',
                'id' => 943,
                'locale' => 'es',
            ),
            443 => 
            array (
                'country_state_id' => 376,
                'default_name' => 'Babītes novads',
                'id' => 944,
                'locale' => 'es',
            ),
            444 => 
            array (
                'country_state_id' => 377,
                'default_name' => 'Baldones novads',
                'id' => 945,
                'locale' => 'es',
            ),
            445 => 
            array (
                'country_state_id' => 378,
                'default_name' => 'Baltinavas novads',
                'id' => 946,
                'locale' => 'es',
            ),
            446 => 
            array (
                'country_state_id' => 379,
                'default_name' => 'Balvu novads',
                'id' => 947,
                'locale' => 'es',
            ),
            447 => 
            array (
                'country_state_id' => 380,
                'default_name' => 'Bauskas novads',
                'id' => 948,
                'locale' => 'es',
            ),
            448 => 
            array (
                'country_state_id' => 381,
                'default_name' => 'Beverīnas novads',
                'id' => 949,
                'locale' => 'es',
            ),
            449 => 
            array (
                'country_state_id' => 382,
                'default_name' => 'Brocēnu novads',
                'id' => 950,
                'locale' => 'es',
            ),
            450 => 
            array (
                'country_state_id' => 383,
                'default_name' => 'Burtnieku novads',
                'id' => 951,
                'locale' => 'es',
            ),
            451 => 
            array (
                'country_state_id' => 384,
                'default_name' => 'Carnikavas novads',
                'id' => 952,
                'locale' => 'es',
            ),
            452 => 
            array (
                'country_state_id' => 385,
                'default_name' => 'Cesvaines novads',
                'id' => 953,
                'locale' => 'es',
            ),
            453 => 
            array (
                'country_state_id' => 386,
                'default_name' => 'Ciblas novads',
                'id' => 954,
                'locale' => 'es',
            ),
            454 => 
            array (
                'country_state_id' => 387,
                'default_name' => 'Cēsu novads',
                'id' => 955,
                'locale' => 'es',
            ),
            455 => 
            array (
                'country_state_id' => 388,
                'default_name' => 'Dagdas novads',
                'id' => 956,
                'locale' => 'es',
            ),
            456 => 
            array (
                'country_state_id' => 389,
                'default_name' => 'Daugavpils novads',
                'id' => 957,
                'locale' => 'es',
            ),
            457 => 
            array (
                'country_state_id' => 390,
                'default_name' => 'Dobeles novads',
                'id' => 958,
                'locale' => 'es',
            ),
            458 => 
            array (
                'country_state_id' => 391,
                'default_name' => 'Dundagas novads',
                'id' => 959,
                'locale' => 'es',
            ),
            459 => 
            array (
                'country_state_id' => 392,
                'default_name' => 'Durbes novads',
                'id' => 960,
                'locale' => 'es',
            ),
            460 => 
            array (
                'country_state_id' => 393,
                'default_name' => 'Engures novads',
                'id' => 961,
                'locale' => 'es',
            ),
            461 => 
            array (
                'country_state_id' => 394,
                'default_name' => 'Garkalnes novads',
                'id' => 962,
                'locale' => 'es',
            ),
            462 => 
            array (
                'country_state_id' => 395,
                'default_name' => 'Grobiņas novads',
                'id' => 963,
                'locale' => 'es',
            ),
            463 => 
            array (
                'country_state_id' => 396,
                'default_name' => 'Gulbenes novads',
                'id' => 964,
                'locale' => 'es',
            ),
            464 => 
            array (
                'country_state_id' => 397,
                'default_name' => 'Iecavas novads',
                'id' => 965,
                'locale' => 'es',
            ),
            465 => 
            array (
                'country_state_id' => 398,
                'default_name' => 'Ikšķiles novads',
                'id' => 966,
                'locale' => 'es',
            ),
            466 => 
            array (
                'country_state_id' => 399,
                'default_name' => 'Ilūkstes novads',
                'id' => 967,
                'locale' => 'es',
            ),
            467 => 
            array (
                'country_state_id' => 400,
                'default_name' => 'Inčukalna novads',
                'id' => 968,
                'locale' => 'es',
            ),
            468 => 
            array (
                'country_state_id' => 401,
                'default_name' => 'Jaunjelgavas novads',
                'id' => 969,
                'locale' => 'es',
            ),
            469 => 
            array (
                'country_state_id' => 402,
                'default_name' => 'Jaunpiebalgas novads',
                'id' => 970,
                'locale' => 'es',
            ),
            470 => 
            array (
                'country_state_id' => 403,
                'default_name' => 'Jaunpils novads',
                'id' => 971,
                'locale' => 'es',
            ),
            471 => 
            array (
                'country_state_id' => 404,
                'default_name' => 'Jelgavas novads',
                'id' => 972,
                'locale' => 'es',
            ),
            472 => 
            array (
                'country_state_id' => 405,
                'default_name' => 'Jēkabpils novads',
                'id' => 973,
                'locale' => 'es',
            ),
            473 => 
            array (
                'country_state_id' => 406,
                'default_name' => 'Kandavas novads',
                'id' => 974,
                'locale' => 'es',
            ),
            474 => 
            array (
                'country_state_id' => 407,
                'default_name' => 'Kokneses novads',
                'id' => 975,
                'locale' => 'es',
            ),
            475 => 
            array (
                'country_state_id' => 408,
                'default_name' => 'Krimuldas novads',
                'id' => 976,
                'locale' => 'es',
            ),
            476 => 
            array (
                'country_state_id' => 409,
                'default_name' => 'Krustpils novads',
                'id' => 977,
                'locale' => 'es',
            ),
            477 => 
            array (
                'country_state_id' => 410,
                'default_name' => 'Krāslavas novads',
                'id' => 978,
                'locale' => 'es',
            ),
            478 => 
            array (
                'country_state_id' => 411,
                'default_name' => 'Kuldīgas novads',
                'id' => 979,
                'locale' => 'es',
            ),
            479 => 
            array (
                'country_state_id' => 412,
                'default_name' => 'Kārsavas novads',
                'id' => 980,
                'locale' => 'es',
            ),
            480 => 
            array (
                'country_state_id' => 413,
                'default_name' => 'Lielvārdes novads',
                'id' => 981,
                'locale' => 'es',
            ),
            481 => 
            array (
                'country_state_id' => 414,
                'default_name' => 'Limbažu novads',
                'id' => 982,
                'locale' => 'es',
            ),
            482 => 
            array (
                'country_state_id' => 415,
                'default_name' => 'Lubānas novads',
                'id' => 983,
                'locale' => 'es',
            ),
            483 => 
            array (
                'country_state_id' => 416,
                'default_name' => 'Ludzas novads',
                'id' => 984,
                'locale' => 'es',
            ),
            484 => 
            array (
                'country_state_id' => 417,
                'default_name' => 'Līgatnes novads',
                'id' => 985,
                'locale' => 'es',
            ),
            485 => 
            array (
                'country_state_id' => 418,
                'default_name' => 'Līvānu novads',
                'id' => 986,
                'locale' => 'es',
            ),
            486 => 
            array (
                'country_state_id' => 419,
                'default_name' => 'Madonas novads',
                'id' => 987,
                'locale' => 'es',
            ),
            487 => 
            array (
                'country_state_id' => 420,
                'default_name' => 'Mazsalacas novads',
                'id' => 988,
                'locale' => 'es',
            ),
            488 => 
            array (
                'country_state_id' => 421,
                'default_name' => 'Mālpils novads',
                'id' => 989,
                'locale' => 'es',
            ),
            489 => 
            array (
                'country_state_id' => 422,
                'default_name' => 'Mārupes novads',
                'id' => 990,
                'locale' => 'es',
            ),
            490 => 
            array (
                'country_state_id' => 423,
                'default_name' => 'Naukšēnu novads',
                'id' => 991,
                'locale' => 'es',
            ),
            491 => 
            array (
                'country_state_id' => 424,
                'default_name' => 'Neretas novads',
                'id' => 992,
                'locale' => 'es',
            ),
            492 => 
            array (
                'country_state_id' => 425,
                'default_name' => 'Nīcas novads',
                'id' => 993,
                'locale' => 'es',
            ),
            493 => 
            array (
                'country_state_id' => 426,
                'default_name' => 'Ogres novads',
                'id' => 994,
                'locale' => 'es',
            ),
            494 => 
            array (
                'country_state_id' => 427,
                'default_name' => 'Olaines novads',
                'id' => 995,
                'locale' => 'es',
            ),
            495 => 
            array (
                'country_state_id' => 428,
                'default_name' => 'Ozolnieku novads',
                'id' => 996,
                'locale' => 'es',
            ),
            496 => 
            array (
                'country_state_id' => 429,
                'default_name' => 'Preiļu novads',
                'id' => 997,
                'locale' => 'es',
            ),
            497 => 
            array (
                'country_state_id' => 430,
                'default_name' => 'Priekules novads',
                'id' => 998,
                'locale' => 'es',
            ),
            498 => 
            array (
                'country_state_id' => 431,
                'default_name' => 'Priekuļu novads',
                'id' => 999,
                'locale' => 'es',
            ),
            499 => 
            array (
                'country_state_id' => 432,
                'default_name' => 'Pārgaujas novads',
                'id' => 1000,
                'locale' => 'es',
            ),
        ));
        \DB::table('country_state_translations')->insert(array (
            0 => 
            array (
                'country_state_id' => 433,
                'default_name' => 'Pāvilostas novads',
                'id' => 1001,
                'locale' => 'es',
            ),
            1 => 
            array (
                'country_state_id' => 434,
                'default_name' => 'Pļaviņu novads',
                'id' => 1002,
                'locale' => 'es',
            ),
            2 => 
            array (
                'country_state_id' => 435,
                'default_name' => 'Raunas novads',
                'id' => 1003,
                'locale' => 'es',
            ),
            3 => 
            array (
                'country_state_id' => 436,
                'default_name' => 'Riebiņu novads',
                'id' => 1004,
                'locale' => 'es',
            ),
            4 => 
            array (
                'country_state_id' => 437,
                'default_name' => 'Rojas novads',
                'id' => 1005,
                'locale' => 'es',
            ),
            5 => 
            array (
                'country_state_id' => 438,
                'default_name' => 'Ropažu novads',
                'id' => 1006,
                'locale' => 'es',
            ),
            6 => 
            array (
                'country_state_id' => 439,
                'default_name' => 'Rucavas novads',
                'id' => 1007,
                'locale' => 'es',
            ),
            7 => 
            array (
                'country_state_id' => 440,
                'default_name' => 'Rugāju novads',
                'id' => 1008,
                'locale' => 'es',
            ),
            8 => 
            array (
                'country_state_id' => 441,
                'default_name' => 'Rundāles novads',
                'id' => 1009,
                'locale' => 'es',
            ),
            9 => 
            array (
                'country_state_id' => 442,
                'default_name' => 'Rēzeknes novads',
                'id' => 1010,
                'locale' => 'es',
            ),
            10 => 
            array (
                'country_state_id' => 443,
                'default_name' => 'Rūjienas novads',
                'id' => 1011,
                'locale' => 'es',
            ),
            11 => 
            array (
                'country_state_id' => 444,
                'default_name' => 'Salacgrīvas novads',
                'id' => 1012,
                'locale' => 'es',
            ),
            12 => 
            array (
                'country_state_id' => 445,
                'default_name' => 'Salas novads',
                'id' => 1013,
                'locale' => 'es',
            ),
            13 => 
            array (
                'country_state_id' => 446,
                'default_name' => 'Salaspils novads',
                'id' => 1014,
                'locale' => 'es',
            ),
            14 => 
            array (
                'country_state_id' => 447,
                'default_name' => 'Saldus novads',
                'id' => 1015,
                'locale' => 'es',
            ),
            15 => 
            array (
                'country_state_id' => 448,
                'default_name' => 'Saulkrastu novads',
                'id' => 1016,
                'locale' => 'es',
            ),
            16 => 
            array (
                'country_state_id' => 449,
                'default_name' => 'Siguldas novads',
                'id' => 1017,
                'locale' => 'es',
            ),
            17 => 
            array (
                'country_state_id' => 450,
                'default_name' => 'Skrundas novads',
                'id' => 1018,
                'locale' => 'es',
            ),
            18 => 
            array (
                'country_state_id' => 451,
                'default_name' => 'Skrīveru novads',
                'id' => 1019,
                'locale' => 'es',
            ),
            19 => 
            array (
                'country_state_id' => 452,
                'default_name' => 'Smiltenes novads',
                'id' => 1020,
                'locale' => 'es',
            ),
            20 => 
            array (
                'country_state_id' => 453,
                'default_name' => 'Stopiņu novads',
                'id' => 1021,
                'locale' => 'es',
            ),
            21 => 
            array (
                'country_state_id' => 454,
                'default_name' => 'Strenču novads',
                'id' => 1022,
                'locale' => 'es',
            ),
            22 => 
            array (
                'country_state_id' => 455,
                'default_name' => 'Sējas novads',
                'id' => 1023,
                'locale' => 'es',
            ),
            23 => 
            array (
                'country_state_id' => 456,
                'default_name' => 'Talsu novads',
                'id' => 1024,
                'locale' => 'es',
            ),
            24 => 
            array (
                'country_state_id' => 457,
                'default_name' => 'Tukuma novads',
                'id' => 1025,
                'locale' => 'es',
            ),
            25 => 
            array (
                'country_state_id' => 458,
                'default_name' => 'Tērvetes novads',
                'id' => 1026,
                'locale' => 'es',
            ),
            26 => 
            array (
                'country_state_id' => 459,
                'default_name' => 'Vaiņodes novads',
                'id' => 1027,
                'locale' => 'es',
            ),
            27 => 
            array (
                'country_state_id' => 460,
                'default_name' => 'Valkas novads',
                'id' => 1028,
                'locale' => 'es',
            ),
            28 => 
            array (
                'country_state_id' => 461,
                'default_name' => 'Valmieras novads',
                'id' => 1029,
                'locale' => 'es',
            ),
            29 => 
            array (
                'country_state_id' => 462,
                'default_name' => 'Varakļānu novads',
                'id' => 1030,
                'locale' => 'es',
            ),
            30 => 
            array (
                'country_state_id' => 463,
                'default_name' => 'Vecpiebalgas novads',
                'id' => 1031,
                'locale' => 'es',
            ),
            31 => 
            array (
                'country_state_id' => 464,
                'default_name' => 'Vecumnieku novads',
                'id' => 1032,
                'locale' => 'es',
            ),
            32 => 
            array (
                'country_state_id' => 465,
                'default_name' => 'Ventspils novads',
                'id' => 1033,
                'locale' => 'es',
            ),
            33 => 
            array (
                'country_state_id' => 466,
                'default_name' => 'Viesītes novads',
                'id' => 1034,
                'locale' => 'es',
            ),
            34 => 
            array (
                'country_state_id' => 467,
                'default_name' => 'Viļakas novads',
                'id' => 1035,
                'locale' => 'es',
            ),
            35 => 
            array (
                'country_state_id' => 468,
                'default_name' => 'Viļānu novads',
                'id' => 1036,
                'locale' => 'es',
            ),
            36 => 
            array (
                'country_state_id' => 469,
                'default_name' => 'Vārkavas novads',
                'id' => 1037,
                'locale' => 'es',
            ),
            37 => 
            array (
                'country_state_id' => 470,
                'default_name' => 'Zilupes novads',
                'id' => 1038,
                'locale' => 'es',
            ),
            38 => 
            array (
                'country_state_id' => 471,
                'default_name' => 'Ādažu novads',
                'id' => 1039,
                'locale' => 'es',
            ),
            39 => 
            array (
                'country_state_id' => 472,
                'default_name' => 'Ērgļu novads',
                'id' => 1040,
                'locale' => 'es',
            ),
            40 => 
            array (
                'country_state_id' => 473,
                'default_name' => 'Ķeguma novads',
                'id' => 1041,
                'locale' => 'es',
            ),
            41 => 
            array (
                'country_state_id' => 474,
                'default_name' => 'Ķekavas novads',
                'id' => 1042,
                'locale' => 'es',
            ),
            42 => 
            array (
                'country_state_id' => 475,
                'default_name' => 'Alytaus Apskritis',
                'id' => 1043,
                'locale' => 'es',
            ),
            43 => 
            array (
                'country_state_id' => 476,
                'default_name' => 'Kauno Apskritis',
                'id' => 1044,
                'locale' => 'es',
            ),
            44 => 
            array (
                'country_state_id' => 477,
                'default_name' => 'Klaipėdos Apskritis',
                'id' => 1045,
                'locale' => 'es',
            ),
            45 => 
            array (
                'country_state_id' => 478,
                'default_name' => 'Marijampolės Apskritis',
                'id' => 1046,
                'locale' => 'es',
            ),
            46 => 
            array (
                'country_state_id' => 479,
                'default_name' => 'Panevėžio Apskritis',
                'id' => 1047,
                'locale' => 'es',
            ),
            47 => 
            array (
                'country_state_id' => 480,
                'default_name' => 'Šiaulių Apskritis',
                'id' => 1048,
                'locale' => 'es',
            ),
            48 => 
            array (
                'country_state_id' => 481,
                'default_name' => 'Tauragės Apskritis',
                'id' => 1049,
                'locale' => 'es',
            ),
            49 => 
            array (
                'country_state_id' => 482,
                'default_name' => 'Telšių Apskritis',
                'id' => 1050,
                'locale' => 'es',
            ),
            50 => 
            array (
                'country_state_id' => 483,
                'default_name' => 'Utenos Apskritis',
                'id' => 1051,
                'locale' => 'es',
            ),
            51 => 
            array (
                'country_state_id' => 484,
                'default_name' => 'Vilniaus Apskritis',
                'id' => 1052,
                'locale' => 'es',
            ),
            52 => 
            array (
                'country_state_id' => 485,
                'default_name' => 'Acre',
                'id' => 1053,
                'locale' => 'es',
            ),
            53 => 
            array (
                'country_state_id' => 486,
                'default_name' => 'Alagoas',
                'id' => 1054,
                'locale' => 'es',
            ),
            54 => 
            array (
                'country_state_id' => 487,
                'default_name' => 'Amapá',
                'id' => 1055,
                'locale' => 'es',
            ),
            55 => 
            array (
                'country_state_id' => 488,
                'default_name' => 'Amazonas',
                'id' => 1056,
                'locale' => 'es',
            ),
            56 => 
            array (
                'country_state_id' => 489,
                'default_name' => 'Bahía',
                'id' => 1057,
                'locale' => 'es',
            ),
            57 => 
            array (
                'country_state_id' => 490,
                'default_name' => 'Ceará',
                'id' => 1058,
                'locale' => 'es',
            ),
            58 => 
            array (
                'country_state_id' => 491,
                'default_name' => 'Espíritu Santo',
                'id' => 1059,
                'locale' => 'es',
            ),
            59 => 
            array (
                'country_state_id' => 492,
                'default_name' => 'Goiás',
                'id' => 1060,
                'locale' => 'es',
            ),
            60 => 
            array (
                'country_state_id' => 493,
                'default_name' => 'Maranhão',
                'id' => 1061,
                'locale' => 'es',
            ),
            61 => 
            array (
                'country_state_id' => 494,
                'default_name' => 'Mato Grosso',
                'id' => 1062,
                'locale' => 'es',
            ),
            62 => 
            array (
                'country_state_id' => 495,
                'default_name' => 'Mato Grosso del Sur',
                'id' => 1063,
                'locale' => 'es',
            ),
            63 => 
            array (
                'country_state_id' => 496,
                'default_name' => 'Minas Gerais',
                'id' => 1064,
                'locale' => 'es',
            ),
            64 => 
            array (
                'country_state_id' => 497,
                'default_name' => 'Pará',
                'id' => 1065,
                'locale' => 'es',
            ),
            65 => 
            array (
                'country_state_id' => 498,
                'default_name' => 'Paraíba',
                'id' => 1066,
                'locale' => 'es',
            ),
            66 => 
            array (
                'country_state_id' => 499,
                'default_name' => 'Paraná',
                'id' => 1067,
                'locale' => 'es',
            ),
            67 => 
            array (
                'country_state_id' => 500,
                'default_name' => 'Pernambuco',
                'id' => 1068,
                'locale' => 'es',
            ),
            68 => 
            array (
                'country_state_id' => 501,
                'default_name' => 'Piauí',
                'id' => 1069,
                'locale' => 'es',
            ),
            69 => 
            array (
                'country_state_id' => 502,
                'default_name' => 'Río de Janeiro',
                'id' => 1070,
                'locale' => 'es',
            ),
            70 => 
            array (
                'country_state_id' => 503,
                'default_name' => 'Río Grande del Norte',
                'id' => 1071,
                'locale' => 'es',
            ),
            71 => 
            array (
                'country_state_id' => 504,
                'default_name' => 'Río Grande del Sur',
                'id' => 1072,
                'locale' => 'es',
            ),
            72 => 
            array (
                'country_state_id' => 505,
                'default_name' => 'Rondônia',
                'id' => 1073,
                'locale' => 'es',
            ),
            73 => 
            array (
                'country_state_id' => 506,
                'default_name' => 'Roraima',
                'id' => 1074,
                'locale' => 'es',
            ),
            74 => 
            array (
                'country_state_id' => 507,
                'default_name' => 'Santa Catarina',
                'id' => 1075,
                'locale' => 'es',
            ),
            75 => 
            array (
                'country_state_id' => 508,
                'default_name' => 'São Paulo',
                'id' => 1076,
                'locale' => 'es',
            ),
            76 => 
            array (
                'country_state_id' => 509,
                'default_name' => 'Sergipe',
                'id' => 1077,
                'locale' => 'es',
            ),
            77 => 
            array (
                'country_state_id' => 510,
                'default_name' => 'Tocantins',
                'id' => 1078,
                'locale' => 'es',
            ),
            78 => 
            array (
                'country_state_id' => 511,
                'default_name' => 'Distrito Federal',
                'id' => 1079,
                'locale' => 'es',
            ),
            79 => 
            array (
                'country_state_id' => 512,
                'default_name' => 'Zagrebačka županija',
                'id' => 1080,
                'locale' => 'es',
            ),
            80 => 
            array (
                'country_state_id' => 513,
                'default_name' => 'Krapinsko-zagorska županija',
                'id' => 1081,
                'locale' => 'es',
            ),
            81 => 
            array (
                'country_state_id' => 514,
                'default_name' => 'Sisačko-moslavačka županija',
                'id' => 1082,
                'locale' => 'es',
            ),
            82 => 
            array (
                'country_state_id' => 515,
                'default_name' => 'Karlovačka županija',
                'id' => 1083,
                'locale' => 'es',
            ),
            83 => 
            array (
                'country_state_id' => 516,
                'default_name' => 'Varaždinska županija',
                'id' => 1084,
                'locale' => 'es',
            ),
            84 => 
            array (
                'country_state_id' => 517,
                'default_name' => 'Koprivničko-križevačka županija',
                'id' => 1085,
                'locale' => 'es',
            ),
            85 => 
            array (
                'country_state_id' => 518,
                'default_name' => 'Bjelovarsko-bilogorska županija',
                'id' => 1086,
                'locale' => 'es',
            ),
            86 => 
            array (
                'country_state_id' => 519,
                'default_name' => 'Primorsko-goranska županija',
                'id' => 1087,
                'locale' => 'es',
            ),
            87 => 
            array (
                'country_state_id' => 520,
                'default_name' => 'Ličko-senjska županija',
                'id' => 1088,
                'locale' => 'es',
            ),
            88 => 
            array (
                'country_state_id' => 521,
                'default_name' => 'Virovitičko-podravska županija',
                'id' => 1089,
                'locale' => 'es',
            ),
            89 => 
            array (
                'country_state_id' => 522,
                'default_name' => 'Požeško-slavonska županija',
                'id' => 1090,
                'locale' => 'es',
            ),
            90 => 
            array (
                'country_state_id' => 523,
                'default_name' => 'Brodsko-posavska županija',
                'id' => 1091,
                'locale' => 'es',
            ),
            91 => 
            array (
                'country_state_id' => 524,
                'default_name' => 'Zadarska županija',
                'id' => 1092,
                'locale' => 'es',
            ),
            92 => 
            array (
                'country_state_id' => 525,
                'default_name' => 'Osječko-baranjska županija',
                'id' => 1093,
                'locale' => 'es',
            ),
            93 => 
            array (
                'country_state_id' => 526,
                'default_name' => 'Šibensko-kninska županija',
                'id' => 1094,
                'locale' => 'es',
            ),
            94 => 
            array (
                'country_state_id' => 527,
                'default_name' => 'Vukovarsko-srijemska županija',
                'id' => 1095,
                'locale' => 'es',
            ),
            95 => 
            array (
                'country_state_id' => 528,
                'default_name' => 'Splitsko-dalmatinska županija',
                'id' => 1096,
                'locale' => 'es',
            ),
            96 => 
            array (
                'country_state_id' => 529,
                'default_name' => 'Istarska županija',
                'id' => 1097,
                'locale' => 'es',
            ),
            97 => 
            array (
                'country_state_id' => 530,
                'default_name' => 'Dubrovačko-neretvanska županija',
                'id' => 1098,
                'locale' => 'es',
            ),
            98 => 
            array (
                'country_state_id' => 531,
                'default_name' => 'Međimurska županija',
                'id' => 1099,
                'locale' => 'es',
            ),
            99 => 
            array (
                'country_state_id' => 532,
                'default_name' => 'Grad Zagreb',
                'id' => 1100,
                'locale' => 'es',
            ),
            100 => 
            array (
                'country_state_id' => 533,
                'default_name' => 'Andaman and Nicobar Islands',
                'id' => 1101,
                'locale' => 'es',
            ),
            101 => 
            array (
                'country_state_id' => 534,
                'default_name' => 'Andhra Pradesh',
                'id' => 1102,
                'locale' => 'es',
            ),
            102 => 
            array (
                'country_state_id' => 535,
                'default_name' => 'Arunachal Pradesh',
                'id' => 1103,
                'locale' => 'es',
            ),
            103 => 
            array (
                'country_state_id' => 536,
                'default_name' => 'Assam',
                'id' => 1104,
                'locale' => 'es',
            ),
            104 => 
            array (
                'country_state_id' => 537,
                'default_name' => 'Bihar',
                'id' => 1105,
                'locale' => 'es',
            ),
            105 => 
            array (
                'country_state_id' => 538,
                'default_name' => 'Chandigarh',
                'id' => 1106,
                'locale' => 'es',
            ),
            106 => 
            array (
                'country_state_id' => 539,
                'default_name' => 'Chhattisgarh',
                'id' => 1107,
                'locale' => 'es',
            ),
            107 => 
            array (
                'country_state_id' => 540,
                'default_name' => 'Dadra and Nagar Haveli',
                'id' => 1108,
                'locale' => 'es',
            ),
            108 => 
            array (
                'country_state_id' => 541,
                'default_name' => 'Daman and Diu',
                'id' => 1109,
                'locale' => 'es',
            ),
            109 => 
            array (
                'country_state_id' => 542,
                'default_name' => 'Delhi',
                'id' => 1110,
                'locale' => 'es',
            ),
            110 => 
            array (
                'country_state_id' => 543,
                'default_name' => 'Goa',
                'id' => 1111,
                'locale' => 'es',
            ),
            111 => 
            array (
                'country_state_id' => 544,
                'default_name' => 'Gujarat',
                'id' => 1112,
                'locale' => 'es',
            ),
            112 => 
            array (
                'country_state_id' => 545,
                'default_name' => 'Haryana',
                'id' => 1113,
                'locale' => 'es',
            ),
            113 => 
            array (
                'country_state_id' => 546,
                'default_name' => 'Himachal Pradesh',
                'id' => 1114,
                'locale' => 'es',
            ),
            114 => 
            array (
                'country_state_id' => 547,
                'default_name' => 'Jammu and Kashmir',
                'id' => 1115,
                'locale' => 'es',
            ),
            115 => 
            array (
                'country_state_id' => 548,
                'default_name' => 'Jharkhand',
                'id' => 1116,
                'locale' => 'es',
            ),
            116 => 
            array (
                'country_state_id' => 549,
                'default_name' => 'Karnataka',
                'id' => 1117,
                'locale' => 'es',
            ),
            117 => 
            array (
                'country_state_id' => 550,
                'default_name' => 'Kerala',
                'id' => 1118,
                'locale' => 'es',
            ),
            118 => 
            array (
                'country_state_id' => 551,
                'default_name' => 'Lakshadweep',
                'id' => 1119,
                'locale' => 'es',
            ),
            119 => 
            array (
                'country_state_id' => 552,
                'default_name' => 'Madhya Pradesh',
                'id' => 1120,
                'locale' => 'es',
            ),
            120 => 
            array (
                'country_state_id' => 553,
                'default_name' => 'Maharashtra',
                'id' => 1121,
                'locale' => 'es',
            ),
            121 => 
            array (
                'country_state_id' => 554,
                'default_name' => 'Manipur',
                'id' => 1122,
                'locale' => 'es',
            ),
            122 => 
            array (
                'country_state_id' => 555,
                'default_name' => 'Meghalaya',
                'id' => 1123,
                'locale' => 'es',
            ),
            123 => 
            array (
                'country_state_id' => 556,
                'default_name' => 'Mizoram',
                'id' => 1124,
                'locale' => 'es',
            ),
            124 => 
            array (
                'country_state_id' => 557,
                'default_name' => 'Nagaland',
                'id' => 1125,
                'locale' => 'es',
            ),
            125 => 
            array (
                'country_state_id' => 558,
                'default_name' => 'Odisha',
                'id' => 1126,
                'locale' => 'es',
            ),
            126 => 
            array (
                'country_state_id' => 559,
                'default_name' => 'Puducherry',
                'id' => 1127,
                'locale' => 'es',
            ),
            127 => 
            array (
                'country_state_id' => 560,
                'default_name' => 'Punjab',
                'id' => 1128,
                'locale' => 'es',
            ),
            128 => 
            array (
                'country_state_id' => 561,
                'default_name' => 'Rajasthan',
                'id' => 1129,
                'locale' => 'es',
            ),
            129 => 
            array (
                'country_state_id' => 562,
                'default_name' => 'Sikkim',
                'id' => 1130,
                'locale' => 'es',
            ),
            130 => 
            array (
                'country_state_id' => 563,
                'default_name' => 'Tamil Nadu',
                'id' => 1131,
                'locale' => 'es',
            ),
            131 => 
            array (
                'country_state_id' => 564,
                'default_name' => 'Telangana',
                'id' => 1132,
                'locale' => 'es',
            ),
            132 => 
            array (
                'country_state_id' => 565,
                'default_name' => 'Tripura',
                'id' => 1133,
                'locale' => 'es',
            ),
            133 => 
            array (
                'country_state_id' => 566,
                'default_name' => 'Uttar Pradesh',
                'id' => 1134,
                'locale' => 'es',
            ),
            134 => 
            array (
                'country_state_id' => 567,
                'default_name' => 'Uttarakhand',
                'id' => 1135,
                'locale' => 'es',
            ),
            135 => 
            array (
                'country_state_id' => 568,
                'default_name' => 'West Bengal',
                'id' => 1136,
                'locale' => 'es',
            ),
            136 => 
            array (
                'country_state_id' => 569,
                'default_name' => 'Alto Paraguay',
                'id' => 1137,
                'locale' => 'es',
            ),
            137 => 
            array (
                'country_state_id' => 570,
                'default_name' => 'Alto Paraná',
                'id' => 1138,
                'locale' => 'es',
            ),
            138 => 
            array (
                'country_state_id' => 571,
                'default_name' => 'Amambay',
                'id' => 1139,
                'locale' => 'es',
            ),
            139 => 
            array (
                'country_state_id' => 572,
                'default_name' => 'Asunción',
                'id' => 1140,
                'locale' => 'es',
            ),
            140 => 
            array (
                'country_state_id' => 573,
                'default_name' => 'Boquerón',
                'id' => 1141,
                'locale' => 'es',
            ),
            141 => 
            array (
                'country_state_id' => 574,
                'default_name' => 'Caaguazú',
                'id' => 1142,
                'locale' => 'es',
            ),
            142 => 
            array (
                'country_state_id' => 575,
                'default_name' => 'Caazapá',
                'id' => 1143,
                'locale' => 'es',
            ),
            143 => 
            array (
                'country_state_id' => 576,
                'default_name' => 'Canindeyú',
                'id' => 1144,
                'locale' => 'es',
            ),
            144 => 
            array (
                'country_state_id' => 577,
                'default_name' => 'Central',
                'id' => 1145,
                'locale' => 'es',
            ),
            145 => 
            array (
                'country_state_id' => 578,
                'default_name' => 'Concepción',
                'id' => 1146,
                'locale' => 'es',
            ),
            146 => 
            array (
                'country_state_id' => 579,
                'default_name' => 'Cordillera',
                'id' => 1147,
                'locale' => 'es',
            ),
            147 => 
            array (
                'country_state_id' => 580,
                'default_name' => 'Guairá',
                'id' => 1148,
                'locale' => 'es',
            ),
            148 => 
            array (
                'country_state_id' => 581,
                'default_name' => 'Itapúa',
                'id' => 1149,
                'locale' => 'es',
            ),
            149 => 
            array (
                'country_state_id' => 582,
                'default_name' => 'Misiones',
                'id' => 1150,
                'locale' => 'es',
            ),
            150 => 
            array (
                'country_state_id' => 583,
                'default_name' => 'Paraguarí',
                'id' => 1151,
                'locale' => 'es',
            ),
            151 => 
            array (
                'country_state_id' => 584,
                'default_name' => 'Presidente Hayes',
                'id' => 1152,
                'locale' => 'es',
            ),
            152 => 
            array (
                'country_state_id' => 585,
                'default_name' => 'San Pedro',
                'id' => 1153,
                'locale' => 'es',
            ),
            153 => 
            array (
                'country_state_id' => 586,
                'default_name' => 'Ñeembucú',
                'id' => 1154,
                'locale' => 'es',
            ),
            154 => 
            array (
                'country_state_id' => 1,
                'default_name' => 'آلاباما',
                'id' => 1155,
                'locale' => 'fa',
            ),
            155 => 
            array (
                'country_state_id' => 2,
                'default_name' => 'آلاسکا',
                'id' => 1156,
                'locale' => 'fa',
            ),
            156 => 
            array (
                'country_state_id' => 3,
                'default_name' => 'ساموآ آمریکایی',
                'id' => 1157,
                'locale' => 'fa',
            ),
            157 => 
            array (
                'country_state_id' => 4,
                'default_name' => 'آریزونا',
                'id' => 1158,
                'locale' => 'fa',
            ),
            158 => 
            array (
                'country_state_id' => 5,
                'default_name' => 'آرکانزاس',
                'id' => 1159,
                'locale' => 'fa',
            ),
            159 => 
            array (
                'country_state_id' => 6,
                'default_name' => 'نیروهای مسلح آفریقا',
                'id' => 1160,
                'locale' => 'fa',
            ),
            160 => 
            array (
                'country_state_id' => 7,
                'default_name' => 'Armed Forces America',
                'id' => 1161,
                'locale' => 'fa',
            ),
            161 => 
            array (
                'country_state_id' => 8,
                'default_name' => 'نیروهای مسلح کانادا',
                'id' => 1162,
                'locale' => 'fa',
            ),
            162 => 
            array (
                'country_state_id' => 9,
                'default_name' => 'نیروهای مسلح اروپا',
                'id' => 1163,
                'locale' => 'fa',
            ),
            163 => 
            array (
                'country_state_id' => 10,
                'default_name' => 'نیروهای مسلح خاورمیانه',
                'id' => 1164,
                'locale' => 'fa',
            ),
            164 => 
            array (
                'country_state_id' => 11,
                'default_name' => 'نیروهای مسلح اقیانوس آرام',
                'id' => 1165,
                'locale' => 'fa',
            ),
            165 => 
            array (
                'country_state_id' => 12,
                'default_name' => 'کالیفرنیا',
                'id' => 1166,
                'locale' => 'fa',
            ),
            166 => 
            array (
                'country_state_id' => 13,
                'default_name' => 'کلرادو',
                'id' => 1167,
                'locale' => 'fa',
            ),
            167 => 
            array (
                'country_state_id' => 14,
                'default_name' => 'کانکتیکات',
                'id' => 1168,
                'locale' => 'fa',
            ),
            168 => 
            array (
                'country_state_id' => 15,
                'default_name' => 'دلاور',
                'id' => 1169,
                'locale' => 'fa',
            ),
            169 => 
            array (
                'country_state_id' => 16,
                'default_name' => 'منطقه کلمبیا',
                'id' => 1170,
                'locale' => 'fa',
            ),
            170 => 
            array (
                'country_state_id' => 17,
                'default_name' => 'ایالات فدرال میکرونزی',
                'id' => 1171,
                'locale' => 'fa',
            ),
            171 => 
            array (
                'country_state_id' => 18,
                'default_name' => 'فلوریدا',
                'id' => 1172,
                'locale' => 'fa',
            ),
            172 => 
            array (
                'country_state_id' => 19,
                'default_name' => 'جورجیا',
                'id' => 1173,
                'locale' => 'fa',
            ),
            173 => 
            array (
                'country_state_id' => 20,
                'default_name' => 'گوام',
                'id' => 1174,
                'locale' => 'fa',
            ),
            174 => 
            array (
                'country_state_id' => 21,
                'default_name' => 'هاوایی',
                'id' => 1175,
                'locale' => 'fa',
            ),
            175 => 
            array (
                'country_state_id' => 22,
                'default_name' => 'آیداهو',
                'id' => 1176,
                'locale' => 'fa',
            ),
            176 => 
            array (
                'country_state_id' => 23,
                'default_name' => 'ایلینویز',
                'id' => 1177,
                'locale' => 'fa',
            ),
            177 => 
            array (
                'country_state_id' => 24,
                'default_name' => 'ایندیانا',
                'id' => 1178,
                'locale' => 'fa',
            ),
            178 => 
            array (
                'country_state_id' => 25,
                'default_name' => 'آیووا',
                'id' => 1179,
                'locale' => 'fa',
            ),
            179 => 
            array (
                'country_state_id' => 26,
                'default_name' => 'کانزاس',
                'id' => 1180,
                'locale' => 'fa',
            ),
            180 => 
            array (
                'country_state_id' => 27,
                'default_name' => 'کنتاکی',
                'id' => 1181,
                'locale' => 'fa',
            ),
            181 => 
            array (
                'country_state_id' => 28,
                'default_name' => 'لوئیزیانا',
                'id' => 1182,
                'locale' => 'fa',
            ),
            182 => 
            array (
                'country_state_id' => 29,
                'default_name' => 'ماین',
                'id' => 1183,
                'locale' => 'fa',
            ),
            183 => 
            array (
                'country_state_id' => 30,
                'default_name' => 'مای',
                'id' => 1184,
                'locale' => 'fa',
            ),
            184 => 
            array (
                'country_state_id' => 31,
                'default_name' => 'مریلند',
                'id' => 1185,
                'locale' => 'fa',
            ),
            185 => 
            array (
                'country_state_id' => 32,
                'default_name' => ' ',
                'id' => 1186,
                'locale' => 'fa',
            ),
            186 => 
            array (
                'country_state_id' => 33,
                'default_name' => 'میشیگان',
                'id' => 1187,
                'locale' => 'fa',
            ),
            187 => 
            array (
                'country_state_id' => 34,
                'default_name' => 'مینه سوتا',
                'id' => 1188,
                'locale' => 'fa',
            ),
            188 => 
            array (
                'country_state_id' => 35,
                'default_name' => 'می سی سی پی',
                'id' => 1189,
                'locale' => 'fa',
            ),
            189 => 
            array (
                'country_state_id' => 36,
                'default_name' => 'میسوری',
                'id' => 1190,
                'locale' => 'fa',
            ),
            190 => 
            array (
                'country_state_id' => 37,
                'default_name' => 'مونتانا',
                'id' => 1191,
                'locale' => 'fa',
            ),
            191 => 
            array (
                'country_state_id' => 38,
                'default_name' => 'نبراسکا',
                'id' => 1192,
                'locale' => 'fa',
            ),
            192 => 
            array (
                'country_state_id' => 39,
                'default_name' => 'نواد',
                'id' => 1193,
                'locale' => 'fa',
            ),
            193 => 
            array (
                'country_state_id' => 40,
                'default_name' => 'نیوهمپشایر',
                'id' => 1194,
                'locale' => 'fa',
            ),
            194 => 
            array (
                'country_state_id' => 41,
                'default_name' => 'نیوجرسی',
                'id' => 1195,
                'locale' => 'fa',
            ),
            195 => 
            array (
                'country_state_id' => 42,
                'default_name' => 'نیومکزیکو',
                'id' => 1196,
                'locale' => 'fa',
            ),
            196 => 
            array (
                'country_state_id' => 43,
                'default_name' => 'نیویورک',
                'id' => 1197,
                'locale' => 'fa',
            ),
            197 => 
            array (
                'country_state_id' => 44,
                'default_name' => 'کارولینای شمالی',
                'id' => 1198,
                'locale' => 'fa',
            ),
            198 => 
            array (
                'country_state_id' => 45,
                'default_name' => 'داکوتای شمالی',
                'id' => 1199,
                'locale' => 'fa',
            ),
            199 => 
            array (
                'country_state_id' => 46,
                'default_name' => 'جزایر ماریانای شمالی',
                'id' => 1200,
                'locale' => 'fa',
            ),
            200 => 
            array (
                'country_state_id' => 47,
                'default_name' => 'اوهایو',
                'id' => 1201,
                'locale' => 'fa',
            ),
            201 => 
            array (
                'country_state_id' => 48,
                'default_name' => 'اوکلاهما',
                'id' => 1202,
                'locale' => 'fa',
            ),
            202 => 
            array (
                'country_state_id' => 49,
                'default_name' => 'اورگان',
                'id' => 1203,
                'locale' => 'fa',
            ),
            203 => 
            array (
                'country_state_id' => 50,
                'default_name' => 'پالائو',
                'id' => 1204,
                'locale' => 'fa',
            ),
            204 => 
            array (
                'country_state_id' => 51,
                'default_name' => 'پنسیلوانیا',
                'id' => 1205,
                'locale' => 'fa',
            ),
            205 => 
            array (
                'country_state_id' => 52,
                'default_name' => 'پورتوریکو',
                'id' => 1206,
                'locale' => 'fa',
            ),
            206 => 
            array (
                'country_state_id' => 53,
                'default_name' => 'رود آیلند',
                'id' => 1207,
                'locale' => 'fa',
            ),
            207 => 
            array (
                'country_state_id' => 54,
                'default_name' => 'کارولینای جنوبی',
                'id' => 1208,
                'locale' => 'fa',
            ),
            208 => 
            array (
                'country_state_id' => 55,
                'default_name' => 'داکوتای جنوبی',
                'id' => 1209,
                'locale' => 'fa',
            ),
            209 => 
            array (
                'country_state_id' => 56,
                'default_name' => 'تنسی',
                'id' => 1210,
                'locale' => 'fa',
            ),
            210 => 
            array (
                'country_state_id' => 57,
                'default_name' => 'تگزاس',
                'id' => 1211,
                'locale' => 'fa',
            ),
            211 => 
            array (
                'country_state_id' => 58,
                'default_name' => 'یوتا',
                'id' => 1212,
                'locale' => 'fa',
            ),
            212 => 
            array (
                'country_state_id' => 59,
                'default_name' => 'ورمونت',
                'id' => 1213,
                'locale' => 'fa',
            ),
            213 => 
            array (
                'country_state_id' => 60,
                'default_name' => 'جزایر ویرجین',
                'id' => 1214,
                'locale' => 'fa',
            ),
            214 => 
            array (
                'country_state_id' => 61,
                'default_name' => 'ویرجینیا',
                'id' => 1215,
                'locale' => 'fa',
            ),
            215 => 
            array (
                'country_state_id' => 62,
                'default_name' => 'واشنگتن',
                'id' => 1216,
                'locale' => 'fa',
            ),
            216 => 
            array (
                'country_state_id' => 63,
                'default_name' => 'ویرجینیای غربی',
                'id' => 1217,
                'locale' => 'fa',
            ),
            217 => 
            array (
                'country_state_id' => 64,
                'default_name' => 'ویسکانسین',
                'id' => 1218,
                'locale' => 'fa',
            ),
            218 => 
            array (
                'country_state_id' => 65,
                'default_name' => 'وایومینگ',
                'id' => 1219,
                'locale' => 'fa',
            ),
            219 => 
            array (
                'country_state_id' => 66,
                'default_name' => 'آلبرتا',
                'id' => 1220,
                'locale' => 'fa',
            ),
            220 => 
            array (
                'country_state_id' => 67,
                'default_name' => 'بریتیش کلمبیا',
                'id' => 1221,
                'locale' => 'fa',
            ),
            221 => 
            array (
                'country_state_id' => 68,
                'default_name' => 'مانیتوبا',
                'id' => 1222,
                'locale' => 'fa',
            ),
            222 => 
            array (
                'country_state_id' => 69,
                'default_name' => 'نیوفاندلند و لابرادور',
                'id' => 1223,
                'locale' => 'fa',
            ),
            223 => 
            array (
                'country_state_id' => 70,
                'default_name' => 'نیوبرانزویک',
                'id' => 1224,
                'locale' => 'fa',
            ),
            224 => 
            array (
                'country_state_id' => 71,
                'default_name' => 'نوا اسکوشیا',
                'id' => 1225,
                'locale' => 'fa',
            ),
            225 => 
            array (
                'country_state_id' => 72,
                'default_name' => 'سرزمینهای شمال غربی',
                'id' => 1226,
                'locale' => 'fa',
            ),
            226 => 
            array (
                'country_state_id' => 73,
                'default_name' => 'نوناووت',
                'id' => 1227,
                'locale' => 'fa',
            ),
            227 => 
            array (
                'country_state_id' => 74,
                'default_name' => 'انتاریو',
                'id' => 1228,
                'locale' => 'fa',
            ),
            228 => 
            array (
                'country_state_id' => 75,
                'default_name' => 'جزیره پرنس ادوارد',
                'id' => 1229,
                'locale' => 'fa',
            ),
            229 => 
            array (
                'country_state_id' => 76,
                'default_name' => 'کبک',
                'id' => 1230,
                'locale' => 'fa',
            ),
            230 => 
            array (
                'country_state_id' => 77,
                'default_name' => 'ساسکاتچوان',
                'id' => 1231,
                'locale' => 'fa',
            ),
            231 => 
            array (
                'country_state_id' => 78,
                'default_name' => 'قلمرو یوکان',
                'id' => 1232,
                'locale' => 'fa',
            ),
            232 => 
            array (
                'country_state_id' => 79,
                'default_name' => 'نیدرزاکسن',
                'id' => 1233,
                'locale' => 'fa',
            ),
            233 => 
            array (
                'country_state_id' => 80,
                'default_name' => 'بادن-وورتمبرگ',
                'id' => 1234,
                'locale' => 'fa',
            ),
            234 => 
            array (
                'country_state_id' => 81,
                'default_name' => 'بایرن',
                'id' => 1235,
                'locale' => 'fa',
            ),
            235 => 
            array (
                'country_state_id' => 82,
                'default_name' => 'برلین',
                'id' => 1236,
                'locale' => 'fa',
            ),
            236 => 
            array (
                'country_state_id' => 83,
                'default_name' => 'براندنبورگ',
                'id' => 1237,
                'locale' => 'fa',
            ),
            237 => 
            array (
                'country_state_id' => 84,
                'default_name' => 'برمن',
                'id' => 1238,
                'locale' => 'fa',
            ),
            238 => 
            array (
                'country_state_id' => 85,
                'default_name' => 'هامبور',
                'id' => 1239,
                'locale' => 'fa',
            ),
            239 => 
            array (
                'country_state_id' => 86,
                'default_name' => 'هسن',
                'id' => 1240,
                'locale' => 'fa',
            ),
            240 => 
            array (
                'country_state_id' => 87,
                'default_name' => 'مکلنبورگ-وورپومرن',
                'id' => 1241,
                'locale' => 'fa',
            ),
            241 => 
            array (
                'country_state_id' => 88,
                'default_name' => 'نوردراین-وستفالن',
                'id' => 1242,
                'locale' => 'fa',
            ),
            242 => 
            array (
                'country_state_id' => 89,
                'default_name' => 'راینلاند-پلاتینات',
                'id' => 1243,
                'locale' => 'fa',
            ),
            243 => 
            array (
                'country_state_id' => 90,
                'default_name' => 'سارلند',
                'id' => 1244,
                'locale' => 'fa',
            ),
            244 => 
            array (
                'country_state_id' => 91,
                'default_name' => 'ساچسن',
                'id' => 1245,
                'locale' => 'fa',
            ),
            245 => 
            array (
                'country_state_id' => 92,
                'default_name' => 'ساچسن-آنهالت',
                'id' => 1246,
                'locale' => 'fa',
            ),
            246 => 
            array (
                'country_state_id' => 93,
                'default_name' => 'شلسویگ-هولشتاین',
                'id' => 1247,
                'locale' => 'fa',
            ),
            247 => 
            array (
                'country_state_id' => 94,
                'default_name' => 'تورینگی',
                'id' => 1248,
                'locale' => 'fa',
            ),
            248 => 
            array (
                'country_state_id' => 95,
                'default_name' => 'وین',
                'id' => 1249,
                'locale' => 'fa',
            ),
            249 => 
            array (
                'country_state_id' => 96,
                'default_name' => 'اتریش پایین',
                'id' => 1250,
                'locale' => 'fa',
            ),
            250 => 
            array (
                'country_state_id' => 97,
                'default_name' => 'اتریش فوقانی',
                'id' => 1251,
                'locale' => 'fa',
            ),
            251 => 
            array (
                'country_state_id' => 98,
                'default_name' => 'سالزبورگ',
                'id' => 1252,
                'locale' => 'fa',
            ),
            252 => 
            array (
                'country_state_id' => 99,
                'default_name' => 'کارنتا',
                'id' => 1253,
                'locale' => 'fa',
            ),
            253 => 
            array (
                'country_state_id' => 100,
                'default_name' => 'Steiermar',
                'id' => 1254,
                'locale' => 'fa',
            ),
            254 => 
            array (
                'country_state_id' => 101,
                'default_name' => 'تیرول',
                'id' => 1255,
                'locale' => 'fa',
            ),
            255 => 
            array (
                'country_state_id' => 102,
                'default_name' => 'بورگنلن',
                'id' => 1256,
                'locale' => 'fa',
            ),
            256 => 
            array (
                'country_state_id' => 103,
                'default_name' => 'Vorarlber',
                'id' => 1257,
                'locale' => 'fa',
            ),
            257 => 
            array (
                'country_state_id' => 104,
                'default_name' => 'آرگ',
                'id' => 1258,
                'locale' => 'fa',
            ),
            258 => 
            array (
                'country_state_id' => 105,
                'default_name' => '',
                'id' => 1259,
                'locale' => 'fa',
            ),
            259 => 
            array (
                'country_state_id' => 106,
                'default_name' => 'اپنزلسرهودن',
                'id' => 1260,
                'locale' => 'fa',
            ),
            260 => 
            array (
                'country_state_id' => 107,
                'default_name' => 'بر',
                'id' => 1261,
                'locale' => 'fa',
            ),
            261 => 
            array (
                'country_state_id' => 108,
                'default_name' => 'بازل-لندشفت',
                'id' => 1262,
                'locale' => 'fa',
            ),
            262 => 
            array (
                'country_state_id' => 109,
                'default_name' => 'بازل استاد',
                'id' => 1263,
                'locale' => 'fa',
            ),
            263 => 
            array (
                'country_state_id' => 110,
                'default_name' => 'فرایبورگ',
                'id' => 1264,
                'locale' => 'fa',
            ),
            264 => 
            array (
                'country_state_id' => 111,
                'default_name' => 'گنف',
                'id' => 1265,
                'locale' => 'fa',
            ),
            265 => 
            array (
                'country_state_id' => 112,
                'default_name' => 'گلاروس',
                'id' => 1266,
                'locale' => 'fa',
            ),
            266 => 
            array (
                'country_state_id' => 113,
                'default_name' => 'Graubünde',
                'id' => 1267,
                'locale' => 'fa',
            ),
            267 => 
            array (
                'country_state_id' => 114,
                'default_name' => 'ژورا',
                'id' => 1268,
                'locale' => 'fa',
            ),
            268 => 
            array (
                'country_state_id' => 115,
                'default_name' => 'لوزرن',
                'id' => 1269,
                'locale' => 'fa',
            ),
            269 => 
            array (
                'country_state_id' => 116,
                'default_name' => 'نوینبور',
                'id' => 1270,
                'locale' => 'fa',
            ),
            270 => 
            array (
                'country_state_id' => 117,
                'default_name' => 'نیدالد',
                'id' => 1271,
                'locale' => 'fa',
            ),
            271 => 
            array (
                'country_state_id' => 118,
                'default_name' => 'اوبولدن',
                'id' => 1272,
                'locale' => 'fa',
            ),
            272 => 
            array (
                'country_state_id' => 119,
                'default_name' => 'سنت گالن',
                'id' => 1273,
                'locale' => 'fa',
            ),
            273 => 
            array (
                'country_state_id' => 120,
                'default_name' => 'شافهاوز',
                'id' => 1274,
                'locale' => 'fa',
            ),
            274 => 
            array (
                'country_state_id' => 121,
                'default_name' => 'سولوتور',
                'id' => 1275,
                'locale' => 'fa',
            ),
            275 => 
            array (
                'country_state_id' => 122,
                'default_name' => 'شووی',
                'id' => 1276,
                'locale' => 'fa',
            ),
            276 => 
            array (
                'country_state_id' => 123,
                'default_name' => 'تورگاو',
                'id' => 1277,
                'locale' => 'fa',
            ),
            277 => 
            array (
                'country_state_id' => 124,
                'default_name' => 'تسسی',
                'id' => 1278,
                'locale' => 'fa',
            ),
            278 => 
            array (
                'country_state_id' => 125,
                'default_name' => 'اوری',
                'id' => 1279,
                'locale' => 'fa',
            ),
            279 => 
            array (
                'country_state_id' => 126,
                'default_name' => 'وادت',
                'id' => 1280,
                'locale' => 'fa',
            ),
            280 => 
            array (
                'country_state_id' => 127,
                'default_name' => 'والی',
                'id' => 1281,
                'locale' => 'fa',
            ),
            281 => 
            array (
                'country_state_id' => 128,
                'default_name' => 'ز',
                'id' => 1282,
                'locale' => 'fa',
            ),
            282 => 
            array (
                'country_state_id' => 129,
                'default_name' => 'زوریخ',
                'id' => 1283,
                'locale' => 'fa',
            ),
            283 => 
            array (
                'country_state_id' => 130,
                'default_name' => 'کورونا',
                'id' => 1284,
                'locale' => 'fa',
            ),
            284 => 
            array (
                'country_state_id' => 131,
                'default_name' => 'آلاوا',
                'id' => 1285,
                'locale' => 'fa',
            ),
            285 => 
            array (
                'country_state_id' => 132,
                'default_name' => 'آلبوم',
                'id' => 1286,
                'locale' => 'fa',
            ),
            286 => 
            array (
                'country_state_id' => 133,
                'default_name' => 'آلیکانت',
                'id' => 1287,
                'locale' => 'fa',
            ),
            287 => 
            array (
                'country_state_id' => 134,
                'default_name' => 'آلمریا',
                'id' => 1288,
                'locale' => 'fa',
            ),
            288 => 
            array (
                'country_state_id' => 135,
                'default_name' => 'آستوریا',
                'id' => 1289,
                'locale' => 'fa',
            ),
            289 => 
            array (
                'country_state_id' => 136,
                'default_name' => 'آویلا',
                'id' => 1290,
                'locale' => 'fa',
            ),
            290 => 
            array (
                'country_state_id' => 137,
                'default_name' => 'باداژوز',
                'id' => 1291,
                'locale' => 'fa',
            ),
            291 => 
            array (
                'country_state_id' => 138,
                'default_name' => 'ضرب و شتم',
                'id' => 1292,
                'locale' => 'fa',
            ),
            292 => 
            array (
                'country_state_id' => 139,
                'default_name' => 'بارسلون',
                'id' => 1293,
                'locale' => 'fa',
            ),
            293 => 
            array (
                'country_state_id' => 140,
                'default_name' => 'بورگو',
                'id' => 1294,
                'locale' => 'fa',
            ),
            294 => 
            array (
                'country_state_id' => 141,
                'default_name' => 'کاسر',
                'id' => 1295,
                'locale' => 'fa',
            ),
            295 => 
            array (
                'country_state_id' => 142,
                'default_name' => 'کادی',
                'id' => 1296,
                'locale' => 'fa',
            ),
            296 => 
            array (
                'country_state_id' => 143,
                'default_name' => 'کانتابریا',
                'id' => 1297,
                'locale' => 'fa',
            ),
            297 => 
            array (
                'country_state_id' => 144,
                'default_name' => 'کاستلون',
                'id' => 1298,
                'locale' => 'fa',
            ),
            298 => 
            array (
                'country_state_id' => 145,
                'default_name' => 'سوت',
                'id' => 1299,
                'locale' => 'fa',
            ),
            299 => 
            array (
                'country_state_id' => 146,
                'default_name' => 'سیوداد واقعی',
                'id' => 1300,
                'locale' => 'fa',
            ),
            300 => 
            array (
                'country_state_id' => 147,
                'default_name' => 'کوردوب',
                'id' => 1301,
                'locale' => 'fa',
            ),
            301 => 
            array (
                'country_state_id' => 148,
                'default_name' => 'Cuenc',
                'id' => 1302,
                'locale' => 'fa',
            ),
            302 => 
            array (
                'country_state_id' => 149,
                'default_name' => 'جیرون',
                'id' => 1303,
                'locale' => 'fa',
            ),
            303 => 
            array (
                'country_state_id' => 150,
                'default_name' => 'گراناد',
                'id' => 1304,
                'locale' => 'fa',
            ),
            304 => 
            array (
                'country_state_id' => 151,
                'default_name' => 'گوادالاجار',
                'id' => 1305,
                'locale' => 'fa',
            ),
            305 => 
            array (
                'country_state_id' => 152,
                'default_name' => 'Guipuzcoa',
                'id' => 1306,
                'locale' => 'fa',
            ),
            306 => 
            array (
                'country_state_id' => 153,
                'default_name' => 'هولوا',
                'id' => 1307,
                'locale' => 'fa',
            ),
            307 => 
            array (
                'country_state_id' => 154,
                'default_name' => 'هوسک',
                'id' => 1308,
                'locale' => 'fa',
            ),
            308 => 
            array (
                'country_state_id' => 155,
                'default_name' => 'جی',
                'id' => 1309,
                'locale' => 'fa',
            ),
            309 => 
            array (
                'country_state_id' => 156,
                'default_name' => 'لا ریوجا',
                'id' => 1310,
                'locale' => 'fa',
            ),
            310 => 
            array (
                'country_state_id' => 157,
                'default_name' => 'لاس پالماس',
                'id' => 1311,
                'locale' => 'fa',
            ),
            311 => 
            array (
                'country_state_id' => 158,
                'default_name' => 'لئو',
                'id' => 1312,
                'locale' => 'fa',
            ),
            312 => 
            array (
                'country_state_id' => 159,
                'default_name' => 'Lleid',
                'id' => 1313,
                'locale' => 'fa',
            ),
            313 => 
            array (
                'country_state_id' => 160,
                'default_name' => 'لوگ',
                'id' => 1314,
                'locale' => 'fa',
            ),
            314 => 
            array (
                'country_state_id' => 161,
                'default_name' => 'مادری',
                'id' => 1315,
                'locale' => 'fa',
            ),
            315 => 
            array (
                'country_state_id' => 162,
                'default_name' => 'مالاگ',
                'id' => 1316,
                'locale' => 'fa',
            ),
            316 => 
            array (
                'country_state_id' => 163,
                'default_name' => 'ملیلی',
                'id' => 1317,
                'locale' => 'fa',
            ),
            317 => 
            array (
                'country_state_id' => 164,
                'default_name' => 'مورسیا',
                'id' => 1318,
                'locale' => 'fa',
            ),
            318 => 
            array (
                'country_state_id' => 165,
                'default_name' => 'ناوار',
                'id' => 1319,
                'locale' => 'fa',
            ),
            319 => 
            array (
                'country_state_id' => 166,
                'default_name' => 'اورنس',
                'id' => 1320,
                'locale' => 'fa',
            ),
            320 => 
            array (
                'country_state_id' => 167,
                'default_name' => 'پالنسی',
                'id' => 1321,
                'locale' => 'fa',
            ),
            321 => 
            array (
                'country_state_id' => 168,
                'default_name' => 'پونتوودر',
                'id' => 1322,
                'locale' => 'fa',
            ),
            322 => 
            array (
                'country_state_id' => 169,
                'default_name' => 'سالامانک',
                'id' => 1323,
                'locale' => 'fa',
            ),
            323 => 
            array (
                'country_state_id' => 170,
                'default_name' => 'سانتا کروز د تنریفه',
                'id' => 1324,
                'locale' => 'fa',
            ),
            324 => 
            array (
                'country_state_id' => 171,
                'default_name' => 'سوگویا',
                'id' => 1325,
                'locale' => 'fa',
            ),
            325 => 
            array (
                'country_state_id' => 172,
                'default_name' => 'سوی',
                'id' => 1326,
                'locale' => 'fa',
            ),
            326 => 
            array (
                'country_state_id' => 173,
                'default_name' => 'سوریا',
                'id' => 1327,
                'locale' => 'fa',
            ),
            327 => 
            array (
                'country_state_id' => 174,
                'default_name' => 'تاراگونا',
                'id' => 1328,
                'locale' => 'fa',
            ),
            328 => 
            array (
                'country_state_id' => 175,
                'default_name' => 'ترئو',
                'id' => 1329,
                'locale' => 'fa',
            ),
            329 => 
            array (
                'country_state_id' => 176,
                'default_name' => 'تولدو',
                'id' => 1330,
                'locale' => 'fa',
            ),
            330 => 
            array (
                'country_state_id' => 177,
                'default_name' => 'والنسیا',
                'id' => 1331,
                'locale' => 'fa',
            ),
            331 => 
            array (
                'country_state_id' => 178,
                'default_name' => 'والادولی',
                'id' => 1332,
                'locale' => 'fa',
            ),
            332 => 
            array (
                'country_state_id' => 179,
                'default_name' => 'ویزکایا',
                'id' => 1333,
                'locale' => 'fa',
            ),
            333 => 
            array (
                'country_state_id' => 180,
                'default_name' => 'زامور',
                'id' => 1334,
                'locale' => 'fa',
            ),
            334 => 
            array (
                'country_state_id' => 181,
                'default_name' => 'ساراگوز',
                'id' => 1335,
                'locale' => 'fa',
            ),
            335 => 
            array (
                'country_state_id' => 182,
                'default_name' => 'عی',
                'id' => 1336,
                'locale' => 'fa',
            ),
            336 => 
            array (
                'country_state_id' => 183,
                'default_name' => 'آیز',
                'id' => 1337,
                'locale' => 'fa',
            ),
            337 => 
            array (
                'country_state_id' => 184,
                'default_name' => 'آلی',
                'id' => 1338,
                'locale' => 'fa',
            ),
            338 => 
            array (
                'country_state_id' => 185,
                'default_name' => 'آلپ-دو-هاوت-پرووانس',
                'id' => 1339,
                'locale' => 'fa',
            ),
            339 => 
            array (
                'country_state_id' => 186,
                'default_name' => 'هاوتس آلپ',
                'id' => 1340,
                'locale' => 'fa',
            ),
            340 => 
            array (
                'country_state_id' => 187,
                'default_name' => 'Alpes-Maritime',
                'id' => 1341,
                'locale' => 'fa',
            ),
            341 => 
            array (
                'country_state_id' => 188,
                'default_name' => 'اردچه',
                'id' => 1342,
                'locale' => 'fa',
            ),
            342 => 
            array (
                'country_state_id' => 189,
                'default_name' => 'آرد',
                'id' => 1343,
                'locale' => 'fa',
            ),
            343 => 
            array (
                'country_state_id' => 190,
                'default_name' => 'محاصر',
                'id' => 1344,
                'locale' => 'fa',
            ),
            344 => 
            array (
                'country_state_id' => 191,
                'default_name' => 'آبه',
                'id' => 1345,
                'locale' => 'fa',
            ),
            345 => 
            array (
                'country_state_id' => 192,
                'default_name' => 'Aud',
                'id' => 1346,
                'locale' => 'fa',
            ),
            346 => 
            array (
                'country_state_id' => 193,
                'default_name' => 'آویرون',
                'id' => 1347,
                'locale' => 'fa',
            ),
            347 => 
            array (
                'country_state_id' => 194,
                'default_name' => 'BOCAS DO Rhône',
                'id' => 1348,
                'locale' => 'fa',
            ),
            348 => 
            array (
                'country_state_id' => 195,
                'default_name' => 'نوعی عرق',
                'id' => 1349,
                'locale' => 'fa',
            ),
            349 => 
            array (
                'country_state_id' => 196,
                'default_name' => 'کانتینال',
                'id' => 1350,
                'locale' => 'fa',
            ),
            350 => 
            array (
                'country_state_id' => 197,
                'default_name' => 'چارنت',
                'id' => 1351,
                'locale' => 'fa',
            ),
            351 => 
            array (
                'country_state_id' => 198,
                'default_name' => 'چارنت-دریایی',
                'id' => 1352,
                'locale' => 'fa',
            ),
            352 => 
            array (
                'country_state_id' => 199,
                'default_name' => 'چ',
                'id' => 1353,
                'locale' => 'fa',
            ),
            353 => 
            array (
                'country_state_id' => 200,
                'default_name' => 'کور',
                'id' => 1354,
                'locale' => 'fa',
            ),
            354 => 
            array (
                'country_state_id' => 201,
                'default_name' => 'کرس دو ساد',
                'id' => 1355,
                'locale' => 'fa',
            ),
            355 => 
            array (
                'country_state_id' => 202,
                'default_name' => 'هاوت کورس',
                'id' => 1356,
                'locale' => 'fa',
            ),
            356 => 
            array (
                'country_state_id' => 203,
                'default_name' => 'کوستا دورکرز',
                'id' => 1357,
                'locale' => 'fa',
            ),
            357 => 
            array (
                'country_state_id' => 204,
                'default_name' => 'تخت دارمور',
                'id' => 1358,
                'locale' => 'fa',
            ),
            358 => 
            array (
                'country_state_id' => 205,
                'default_name' => 'درهم',
                'id' => 1359,
                'locale' => 'fa',
            ),
            359 => 
            array (
                'country_state_id' => 206,
                'default_name' => 'دوردگن',
                'id' => 1360,
                'locale' => 'fa',
            ),
            360 => 
            array (
                'country_state_id' => 207,
                'default_name' => 'دوب',
                'id' => 1361,
                'locale' => 'fa',
            ),
            361 => 
            array (
                'country_state_id' => 208,
                'default_name' => 'تعریف اول',
                'id' => 1362,
                'locale' => 'fa',
            ),
            362 => 
            array (
                'country_state_id' => 209,
                'default_name' => 'یور',
                'id' => 1363,
                'locale' => 'fa',
            ),
            363 => 
            array (
                'country_state_id' => 210,
                'default_name' => 'Eure-et-Loi',
                'id' => 1364,
                'locale' => 'fa',
            ),
            364 => 
            array (
                'country_state_id' => 211,
                'default_name' => 'فمینیست',
                'id' => 1365,
                'locale' => 'fa',
            ),
            365 => 
            array (
                'country_state_id' => 212,
                'default_name' => 'باغ',
                'id' => 1366,
                'locale' => 'fa',
            ),
            366 => 
            array (
                'country_state_id' => 213,
                'default_name' => 'اوت-گارون',
                'id' => 1367,
                'locale' => 'fa',
            ),
            367 => 
            array (
                'country_state_id' => 214,
                'default_name' => 'گر',
                'id' => 1368,
                'locale' => 'fa',
            ),
            368 => 
            array (
                'country_state_id' => 215,
                'default_name' => 'جیروند',
                'id' => 1369,
                'locale' => 'fa',
            ),
            369 => 
            array (
                'country_state_id' => 216,
                'default_name' => 'هیر',
                'id' => 1370,
                'locale' => 'fa',
            ),
            370 => 
            array (
                'country_state_id' => 217,
                'default_name' => 'هشدار داده می شود',
                'id' => 1371,
                'locale' => 'fa',
            ),
            371 => 
            array (
                'country_state_id' => 218,
                'default_name' => 'ایندور',
                'id' => 1372,
                'locale' => 'fa',
            ),
            372 => 
            array (
                'country_state_id' => 219,
                'default_name' => 'Indre-et-Loir',
                'id' => 1373,
                'locale' => 'fa',
            ),
            373 => 
            array (
                'country_state_id' => 220,
                'default_name' => 'ایزر',
                'id' => 1374,
                'locale' => 'fa',
            ),
            374 => 
            array (
                'country_state_id' => 221,
                'default_name' => 'یور',
                'id' => 1375,
                'locale' => 'fa',
            ),
            375 => 
            array (
                'country_state_id' => 222,
                'default_name' => 'لندز',
                'id' => 1376,
                'locale' => 'fa',
            ),
            376 => 
            array (
                'country_state_id' => 223,
                'default_name' => 'Loir-et-Che',
                'id' => 1377,
                'locale' => 'fa',
            ),
            377 => 
            array (
                'country_state_id' => 224,
                'default_name' => 'وام گرفتن',
                'id' => 1378,
                'locale' => 'fa',
            ),
            378 => 
            array (
                'country_state_id' => 225,
                'default_name' => 'Haute-Loir',
                'id' => 1379,
                'locale' => 'fa',
            ),
            379 => 
            array (
                'country_state_id' => 226,
                'default_name' => 'Loire-Atlantiqu',
                'id' => 1380,
                'locale' => 'fa',
            ),
            380 => 
            array (
                'country_state_id' => 227,
                'default_name' => 'لیرت',
                'id' => 1381,
                'locale' => 'fa',
            ),
            381 => 
            array (
                'country_state_id' => 228,
                'default_name' => 'لوط',
                'id' => 1382,
                'locale' => 'fa',
            ),
            382 => 
            array (
                'country_state_id' => 229,
                'default_name' => 'لوت و گارون',
                'id' => 1383,
                'locale' => 'fa',
            ),
            383 => 
            array (
                'country_state_id' => 230,
                'default_name' => 'لوزر',
                'id' => 1384,
                'locale' => 'fa',
            ),
            384 => 
            array (
                'country_state_id' => 231,
                'default_name' => 'ماین et-Loire',
                'id' => 1385,
                'locale' => 'fa',
            ),
            385 => 
            array (
                'country_state_id' => 232,
                'default_name' => 'مانچ',
                'id' => 1386,
                'locale' => 'fa',
            ),
            386 => 
            array (
                'country_state_id' => 233,
                'default_name' => 'مارن',
                'id' => 1387,
                'locale' => 'fa',
            ),
            387 => 
            array (
                'country_state_id' => 234,
                'default_name' => 'هاوت-مارن',
                'id' => 1388,
                'locale' => 'fa',
            ),
            388 => 
            array (
                'country_state_id' => 235,
                'default_name' => 'مایین',
                'id' => 1389,
                'locale' => 'fa',
            ),
            389 => 
            array (
                'country_state_id' => 236,
                'default_name' => 'مورته-et-Moselle',
                'id' => 1390,
                'locale' => 'fa',
            ),
            390 => 
            array (
                'country_state_id' => 237,
                'default_name' => 'مسخره کردن',
                'id' => 1391,
                'locale' => 'fa',
            ),
            391 => 
            array (
                'country_state_id' => 238,
                'default_name' => 'موربیان',
                'id' => 1392,
                'locale' => 'fa',
            ),
            392 => 
            array (
                'country_state_id' => 239,
                'default_name' => 'موزل',
                'id' => 1393,
                'locale' => 'fa',
            ),
            393 => 
            array (
                'country_state_id' => 240,
                'default_name' => 'Nièvr',
                'id' => 1394,
                'locale' => 'fa',
            ),
            394 => 
            array (
                'country_state_id' => 241,
                'default_name' => 'نورد',
                'id' => 1395,
                'locale' => 'fa',
            ),
            395 => 
            array (
                'country_state_id' => 242,
                'default_name' => 'اوی',
                'id' => 1396,
                'locale' => 'fa',
            ),
            396 => 
            array (
                'country_state_id' => 243,
                'default_name' => 'ارن',
                'id' => 1397,
                'locale' => 'fa',
            ),
            397 => 
            array (
                'country_state_id' => 244,
                'default_name' => 'پاس-کاله',
                'id' => 1398,
                'locale' => 'fa',
            ),
            398 => 
            array (
                'country_state_id' => 245,
                'default_name' => 'Puy-de-Dôm',
                'id' => 1399,
                'locale' => 'fa',
            ),
            399 => 
            array (
                'country_state_id' => 246,
                'default_name' => 'Pyrénées-Atlantiques',
                'id' => 1400,
                'locale' => 'fa',
            ),
            400 => 
            array (
                'country_state_id' => 247,
                'default_name' => 'Hautes-Pyrénée',
                'id' => 1401,
                'locale' => 'fa',
            ),
            401 => 
            array (
                'country_state_id' => 248,
                'default_name' => 'Pyrénées-Orientales',
                'id' => 1402,
                'locale' => 'fa',
            ),
            402 => 
            array (
                'country_state_id' => 249,
                'default_name' => 'بس راین',
                'id' => 1403,
                'locale' => 'fa',
            ),
            403 => 
            array (
                'country_state_id' => 250,
                'default_name' => 'هاوت-رین',
                'id' => 1404,
                'locale' => 'fa',
            ),
            404 => 
            array (
                'country_state_id' => 251,
                'default_name' => 'رو',
                'id' => 1405,
                'locale' => 'fa',
            ),
            405 => 
            array (
                'country_state_id' => 252,
                'default_name' => 'Haute-Saône',
                'id' => 1406,
                'locale' => 'fa',
            ),
            406 => 
            array (
                'country_state_id' => 253,
                'default_name' => 'Saône-et-Loire',
                'id' => 1407,
                'locale' => 'fa',
            ),
            407 => 
            array (
                'country_state_id' => 254,
                'default_name' => 'سارته',
                'id' => 1408,
                'locale' => 'fa',
            ),
            408 => 
            array (
                'country_state_id' => 255,
                'default_name' => 'ساووی',
                'id' => 1409,
                'locale' => 'fa',
            ),
            409 => 
            array (
                'country_state_id' => 256,
                'default_name' => 'هاو-ساووی',
                'id' => 1410,
                'locale' => 'fa',
            ),
            410 => 
            array (
                'country_state_id' => 257,
                'default_name' => 'پاری',
                'id' => 1411,
                'locale' => 'fa',
            ),
            411 => 
            array (
                'country_state_id' => 258,
                'default_name' => 'Seine-Maritime',
                'id' => 1412,
                'locale' => 'fa',
            ),
            412 => 
            array (
                'country_state_id' => 259,
                'default_name' => 'Seine-et-Marn',
                'id' => 1413,
                'locale' => 'fa',
            ),
            413 => 
            array (
                'country_state_id' => 260,
                'default_name' => 'ایولینز',
                'id' => 1414,
                'locale' => 'fa',
            ),
            414 => 
            array (
                'country_state_id' => 261,
                'default_name' => 'Deux-Sèvres',
                'id' => 1415,
                'locale' => 'fa',
            ),
            415 => 
            array (
                'country_state_id' => 262,
                'default_name' => 'سمی',
                'id' => 1416,
                'locale' => 'fa',
            ),
            416 => 
            array (
                'country_state_id' => 263,
                'default_name' => 'ضعف',
                'id' => 1417,
                'locale' => 'fa',
            ),
            417 => 
            array (
                'country_state_id' => 264,
                'default_name' => 'Tarn-et-Garonne',
                'id' => 1418,
                'locale' => 'fa',
            ),
            418 => 
            array (
                'country_state_id' => 265,
                'default_name' => 'وار',
                'id' => 1419,
                'locale' => 'fa',
            ),
            419 => 
            array (
                'country_state_id' => 266,
                'default_name' => 'ووکلوز',
                'id' => 1420,
                'locale' => 'fa',
            ),
            420 => 
            array (
                'country_state_id' => 267,
                'default_name' => 'وندیه',
                'id' => 1421,
                'locale' => 'fa',
            ),
            421 => 
            array (
                'country_state_id' => 268,
                'default_name' => 'وین',
                'id' => 1422,
                'locale' => 'fa',
            ),
            422 => 
            array (
                'country_state_id' => 269,
                'default_name' => 'هاوت-وین',
                'id' => 1423,
                'locale' => 'fa',
            ),
            423 => 
            array (
                'country_state_id' => 270,
                'default_name' => 'رأی دادن',
                'id' => 1424,
                'locale' => 'fa',
            ),
            424 => 
            array (
                'country_state_id' => 271,
                'default_name' => 'یون',
                'id' => 1425,
                'locale' => 'fa',
            ),
            425 => 
            array (
                'country_state_id' => 272,
                'default_name' => 'سرزمین-دو-بلفورت',
                'id' => 1426,
                'locale' => 'fa',
            ),
            426 => 
            array (
                'country_state_id' => 273,
                'default_name' => 'اسون',
                'id' => 1427,
                'locale' => 'fa',
            ),
            427 => 
            array (
                'country_state_id' => 274,
                'default_name' => 'هاوتز دی سی',
                'id' => 1428,
                'locale' => 'fa',
            ),
            428 => 
            array (
                'country_state_id' => 275,
                'default_name' => 'Seine-Saint-Deni',
                'id' => 1429,
                'locale' => 'fa',
            ),
            429 => 
            array (
                'country_state_id' => 276,
                'default_name' => 'والد مارن',
                'id' => 1430,
                'locale' => 'fa',
            ),
            430 => 
            array (
                'country_state_id' => 277,
                'default_name' => 'Val-d\'Ois',
                'id' => 1431,
                'locale' => 'fa',
            ),
            431 => 
            array (
                'country_state_id' => 278,
                'default_name' => 'آلبا',
                'id' => 1432,
                'locale' => 'fa',
            ),
            432 => 
            array (
                'country_state_id' => 279,
                'default_name' => 'آرا',
                'id' => 1433,
                'locale' => 'fa',
            ),
            433 => 
            array (
                'country_state_id' => 280,
                'default_name' => 'Argeș',
                'id' => 1434,
                'locale' => 'fa',
            ),
            434 => 
            array (
                'country_state_id' => 281,
                'default_name' => 'باکو',
                'id' => 1435,
                'locale' => 'fa',
            ),
            435 => 
            array (
                'country_state_id' => 282,
                'default_name' => 'بیهور',
                'id' => 1436,
                'locale' => 'fa',
            ),
            436 => 
            array (
                'country_state_id' => 283,
                'default_name' => 'بیستریا-نسوود',
                'id' => 1437,
                'locale' => 'fa',
            ),
            437 => 
            array (
                'country_state_id' => 284,
                'default_name' => 'بوتانی',
                'id' => 1438,
                'locale' => 'fa',
            ),
            438 => 
            array (
                'country_state_id' => 285,
                'default_name' => 'برازوف',
                'id' => 1439,
                'locale' => 'fa',
            ),
            439 => 
            array (
                'country_state_id' => 286,
                'default_name' => 'Brăila',
                'id' => 1440,
                'locale' => 'fa',
            ),
            440 => 
            array (
                'country_state_id' => 287,
                'default_name' => 'București',
                'id' => 1441,
                'locale' => 'fa',
            ),
            441 => 
            array (
                'country_state_id' => 288,
                'default_name' => 'بوز',
                'id' => 1442,
                'locale' => 'fa',
            ),
            442 => 
            array (
                'country_state_id' => 289,
                'default_name' => 'کارا- Severin',
                'id' => 1443,
                'locale' => 'fa',
            ),
            443 => 
            array (
                'country_state_id' => 290,
                'default_name' => 'کالیراسی',
                'id' => 1444,
                'locale' => 'fa',
            ),
            444 => 
            array (
                'country_state_id' => 291,
                'default_name' => 'كلوژ',
                'id' => 1445,
                'locale' => 'fa',
            ),
            445 => 
            array (
                'country_state_id' => 292,
                'default_name' => 'کنستانس',
                'id' => 1446,
                'locale' => 'fa',
            ),
            446 => 
            array (
                'country_state_id' => 293,
                'default_name' => 'کواسنا',
                'id' => 1447,
                'locale' => 'fa',
            ),
            447 => 
            array (
                'country_state_id' => 294,
                'default_name' => 'Dâmbovița',
                'id' => 1448,
                'locale' => 'fa',
            ),
            448 => 
            array (
                'country_state_id' => 295,
                'default_name' => 'دال',
                'id' => 1449,
                'locale' => 'fa',
            ),
            449 => 
            array (
                'country_state_id' => 296,
                'default_name' => 'گالشی',
                'id' => 1450,
                'locale' => 'fa',
            ),
            450 => 
            array (
                'country_state_id' => 297,
                'default_name' => 'جورجیو',
                'id' => 1451,
                'locale' => 'fa',
            ),
            451 => 
            array (
                'country_state_id' => 298,
                'default_name' => 'گور',
                'id' => 1452,
                'locale' => 'fa',
            ),
            452 => 
            array (
                'country_state_id' => 299,
                'default_name' => 'هارگیتا',
                'id' => 1453,
                'locale' => 'fa',
            ),
            453 => 
            array (
                'country_state_id' => 300,
                'default_name' => 'هوندهار',
                'id' => 1454,
                'locale' => 'fa',
            ),
            454 => 
            array (
                'country_state_id' => 301,
                'default_name' => 'ایالومیشا',
                'id' => 1455,
                'locale' => 'fa',
            ),
            455 => 
            array (
                'country_state_id' => 302,
                'default_name' => 'Iași',
                'id' => 1456,
                'locale' => 'fa',
            ),
            456 => 
            array (
                'country_state_id' => 303,
                'default_name' => 'Ilfo',
                'id' => 1457,
                'locale' => 'fa',
            ),
            457 => 
            array (
                'country_state_id' => 304,
                'default_name' => 'Maramureș',
                'id' => 1458,
                'locale' => 'fa',
            ),
            458 => 
            array (
                'country_state_id' => 305,
                'default_name' => 'Mehedinți',
                'id' => 1459,
                'locale' => 'fa',
            ),
            459 => 
            array (
                'country_state_id' => 306,
                'default_name' => 'Mureș',
                'id' => 1460,
                'locale' => 'fa',
            ),
            460 => 
            array (
                'country_state_id' => 307,
                'default_name' => 'Neamț',
                'id' => 1461,
                'locale' => 'fa',
            ),
            461 => 
            array (
                'country_state_id' => 308,
                'default_name' => 'اولت',
                'id' => 1462,
                'locale' => 'fa',
            ),
            462 => 
            array (
                'country_state_id' => 309,
                'default_name' => 'پرهوا',
                'id' => 1463,
                'locale' => 'fa',
            ),
            463 => 
            array (
                'country_state_id' => 310,
                'default_name' => 'ستو ماره',
                'id' => 1464,
                'locale' => 'fa',
            ),
            464 => 
            array (
                'country_state_id' => 311,
                'default_name' => 'سلاج',
                'id' => 1465,
                'locale' => 'fa',
            ),
            465 => 
            array (
                'country_state_id' => 312,
                'default_name' => 'سیبیو',
                'id' => 1466,
                'locale' => 'fa',
            ),
            466 => 
            array (
                'country_state_id' => 313,
                'default_name' => 'سوساو',
                'id' => 1467,
                'locale' => 'fa',
            ),
            467 => 
            array (
                'country_state_id' => 314,
                'default_name' => 'تلورمان',
                'id' => 1468,
                'locale' => 'fa',
            ),
            468 => 
            array (
                'country_state_id' => 315,
                'default_name' => 'تیمیچ',
                'id' => 1469,
                'locale' => 'fa',
            ),
            469 => 
            array (
                'country_state_id' => 316,
                'default_name' => 'تولسا',
                'id' => 1470,
                'locale' => 'fa',
            ),
            470 => 
            array (
                'country_state_id' => 317,
                'default_name' => 'واسلوئی',
                'id' => 1471,
                'locale' => 'fa',
            ),
            471 => 
            array (
                'country_state_id' => 318,
                'default_name' => 'Vâlcea',
                'id' => 1472,
                'locale' => 'fa',
            ),
            472 => 
            array (
                'country_state_id' => 319,
                'default_name' => 'ورانسا',
                'id' => 1473,
                'locale' => 'fa',
            ),
            473 => 
            array (
                'country_state_id' => 320,
                'default_name' => 'لاپی',
                'id' => 1474,
                'locale' => 'fa',
            ),
            474 => 
            array (
                'country_state_id' => 321,
                'default_name' => 'Pohjois-Pohjanmaa',
                'id' => 1475,
                'locale' => 'fa',
            ),
            475 => 
            array (
                'country_state_id' => 322,
                'default_name' => 'کائینو',
                'id' => 1476,
                'locale' => 'fa',
            ),
            476 => 
            array (
                'country_state_id' => 323,
                'default_name' => 'Pohjois-Karjala',
                'id' => 1477,
                'locale' => 'fa',
            ),
            477 => 
            array (
                'country_state_id' => 324,
                'default_name' => 'Pohjois-Savo',
                'id' => 1478,
                'locale' => 'fa',
            ),
            478 => 
            array (
                'country_state_id' => 325,
                'default_name' => 'اتل-ساوو',
                'id' => 1479,
                'locale' => 'fa',
            ),
            479 => 
            array (
                'country_state_id' => 326,
                'default_name' => 'کسکی-پوهانما',
                'id' => 1480,
                'locale' => 'fa',
            ),
            480 => 
            array (
                'country_state_id' => 327,
                'default_name' => 'Pohjanmaa',
                'id' => 1481,
                'locale' => 'fa',
            ),
            481 => 
            array (
                'country_state_id' => 328,
                'default_name' => 'پیرکانما',
                'id' => 1482,
                'locale' => 'fa',
            ),
            482 => 
            array (
                'country_state_id' => 329,
                'default_name' => 'ساتاکونتا',
                'id' => 1483,
                'locale' => 'fa',
            ),
            483 => 
            array (
                'country_state_id' => 330,
                'default_name' => 'کسکی-پوهانما',
                'id' => 1484,
                'locale' => 'fa',
            ),
            484 => 
            array (
                'country_state_id' => 331,
                'default_name' => 'کسکی-سوومی',
                'id' => 1485,
                'locale' => 'fa',
            ),
            485 => 
            array (
                'country_state_id' => 332,
                'default_name' => 'Varsinais-Suomi',
                'id' => 1486,
                'locale' => 'fa',
            ),
            486 => 
            array (
                'country_state_id' => 333,
                'default_name' => 'اتلی کرجالا',
                'id' => 1487,
                'locale' => 'fa',
            ),
            487 => 
            array (
                'country_state_id' => 334,
                'default_name' => 'Päijät-HAM',
                'id' => 1488,
                'locale' => 'fa',
            ),
            488 => 
            array (
                'country_state_id' => 335,
                'default_name' => 'کانتا-هوم',
                'id' => 1489,
                'locale' => 'fa',
            ),
            489 => 
            array (
                'country_state_id' => 336,
                'default_name' => 'یوسیما',
                'id' => 1490,
                'locale' => 'fa',
            ),
            490 => 
            array (
                'country_state_id' => 337,
                'default_name' => 'اوسیم',
                'id' => 1491,
                'locale' => 'fa',
            ),
            491 => 
            array (
                'country_state_id' => 338,
                'default_name' => 'کیمنلاکو',
                'id' => 1492,
                'locale' => 'fa',
            ),
            492 => 
            array (
                'country_state_id' => 339,
                'default_name' => 'آونوانما',
                'id' => 1493,
                'locale' => 'fa',
            ),
            493 => 
            array (
                'country_state_id' => 340,
                'default_name' => 'هارژوم',
                'id' => 1494,
                'locale' => 'fa',
            ),
            494 => 
            array (
                'country_state_id' => 341,
                'default_name' => 'سلا',
                'id' => 1495,
                'locale' => 'fa',
            ),
            495 => 
            array (
                'country_state_id' => 342,
                'default_name' => 'آیدا-ویروما',
                'id' => 1496,
                'locale' => 'fa',
            ),
            496 => 
            array (
                'country_state_id' => 343,
                'default_name' => 'Jõgevamaa',
                'id' => 1497,
                'locale' => 'fa',
            ),
            497 => 
            array (
                'country_state_id' => 344,
                'default_name' => 'جوروماا',
                'id' => 1498,
                'locale' => 'fa',
            ),
            498 => 
            array (
                'country_state_id' => 345,
                'default_name' => 'لونما',
                'id' => 1499,
                'locale' => 'fa',
            ),
            499 => 
            array (
                'country_state_id' => 346,
                'default_name' => 'لون-ویروما',
                'id' => 1500,
                'locale' => 'fa',
            ),
        ));
        \DB::table('country_state_translations')->insert(array (
            0 => 
            array (
                'country_state_id' => 347,
                'default_name' => 'پالوماا',
                'id' => 1501,
                'locale' => 'fa',
            ),
            1 => 
            array (
                'country_state_id' => 348,
                'default_name' => 'پورنوما',
                'id' => 1502,
                'locale' => 'fa',
            ),
            2 => 
            array (
                'country_state_id' => 349,
                'default_name' => 'Raplama',
                'id' => 1503,
                'locale' => 'fa',
            ),
            3 => 
            array (
                'country_state_id' => 350,
                'default_name' => 'ساارما',
                'id' => 1504,
                'locale' => 'fa',
            ),
            4 => 
            array (
                'country_state_id' => 351,
                'default_name' => 'تارتوما',
                'id' => 1505,
                'locale' => 'fa',
            ),
            5 => 
            array (
                'country_state_id' => 352,
                'default_name' => 'والگام',
                'id' => 1506,
                'locale' => 'fa',
            ),
            6 => 
            array (
                'country_state_id' => 353,
                'default_name' => 'ویلجاندیم',
                'id' => 1507,
                'locale' => 'fa',
            ),
            7 => 
            array (
                'country_state_id' => 354,
                'default_name' => 'Võrumaa',
                'id' => 1508,
                'locale' => 'fa',
            ),
            8 => 
            array (
                'country_state_id' => 355,
                'default_name' => 'داگاوپیل',
                'id' => 1509,
                'locale' => 'fa',
            ),
            9 => 
            array (
                'country_state_id' => 356,
                'default_name' => 'جلگاو',
                'id' => 1510,
                'locale' => 'fa',
            ),
            10 => 
            array (
                'country_state_id' => 357,
                'default_name' => 'جکابیل',
                'id' => 1511,
                'locale' => 'fa',
            ),
            11 => 
            array (
                'country_state_id' => 358,
                'default_name' => 'جرمل',
                'id' => 1512,
                'locale' => 'fa',
            ),
            12 => 
            array (
                'country_state_id' => 359,
                'default_name' => 'لیپجا',
                'id' => 1513,
                'locale' => 'fa',
            ),
            13 => 
            array (
                'country_state_id' => 360,
                'default_name' => 'شهرستان لیپاج',
                'id' => 1514,
                'locale' => 'fa',
            ),
            14 => 
            array (
                'country_state_id' => 361,
                'default_name' => 'روژن',
                'id' => 1515,
                'locale' => 'fa',
            ),
            15 => 
            array (
                'country_state_id' => 362,
                'default_name' => 'راگ',
                'id' => 1516,
                'locale' => 'fa',
            ),
            16 => 
            array (
                'country_state_id' => 363,
                'default_name' => 'شهرستان ریگ',
                'id' => 1517,
                'locale' => 'fa',
            ),
            17 => 
            array (
                'country_state_id' => 364,
                'default_name' => 'والمییرا',
                'id' => 1518,
                'locale' => 'fa',
            ),
            18 => 
            array (
                'country_state_id' => 365,
                'default_name' => 'Ventspils',
                'id' => 1519,
                'locale' => 'fa',
            ),
            19 => 
            array (
                'country_state_id' => 366,
                'default_name' => 'آگلوناس نوادا',
                'id' => 1520,
                'locale' => 'fa',
            ),
            20 => 
            array (
                'country_state_id' => 367,
                'default_name' => 'تازه کاران آیزکرایکلس',
                'id' => 1521,
                'locale' => 'fa',
            ),
            21 => 
            array (
                'country_state_id' => 368,
                'default_name' => 'تازه واردان',
                'id' => 1522,
                'locale' => 'fa',
            ),
            22 => 
            array (
                'country_state_id' => 369,
                'default_name' => 'شهرستا',
                'id' => 1523,
                'locale' => 'fa',
            ),
            23 => 
            array (
                'country_state_id' => 370,
                'default_name' => 'نوازندگان آلوجاس',
                'id' => 1524,
                'locale' => 'fa',
            ),
            24 => 
            array (
                'country_state_id' => 371,
                'default_name' => 'تازه های آلسونگاس',
                'id' => 1525,
                'locale' => 'fa',
            ),
            25 => 
            array (
                'country_state_id' => 372,
                'default_name' => 'شهرستان آلوکس',
                'id' => 1526,
                'locale' => 'fa',
            ),
            26 => 
            array (
                'country_state_id' => 373,
                'default_name' => 'تازه کاران آماتاس',
                'id' => 1527,
                'locale' => 'fa',
            ),
            27 => 
            array (
                'country_state_id' => 374,
                'default_name' => 'میمون های تازه',
                'id' => 1528,
                'locale' => 'fa',
            ),
            28 => 
            array (
                'country_state_id' => 375,
                'default_name' => 'نوادا را آویز می کند',
                'id' => 1529,
                'locale' => 'fa',
            ),
            29 => 
            array (
                'country_state_id' => 376,
                'default_name' => 'شهرستان بابی',
                'id' => 1530,
                'locale' => 'fa',
            ),
            30 => 
            array (
                'country_state_id' => 377,
                'default_name' => 'Baldones novad',
                'id' => 1531,
                'locale' => 'fa',
            ),
            31 => 
            array (
                'country_state_id' => 378,
                'default_name' => 'نوین های بالتیناوا',
                'id' => 1532,
                'locale' => 'fa',
            ),
            32 => 
            array (
                'country_state_id' => 379,
                'default_name' => 'Balvu novad',
                'id' => 1533,
                'locale' => 'fa',
            ),
            33 => 
            array (
                'country_state_id' => 380,
                'default_name' => 'نوازندگان باسکاس',
                'id' => 1534,
                'locale' => 'fa',
            ),
            34 => 
            array (
                'country_state_id' => 381,
                'default_name' => 'شهرستان بورین',
                'id' => 1535,
                'locale' => 'fa',
            ),
            35 => 
            array (
                'country_state_id' => 382,
                'default_name' => 'شهرستان بروچن',
                'id' => 1536,
                'locale' => 'fa',
            ),
            36 => 
            array (
                'country_state_id' => 383,
                'default_name' => 'بوردنیکو نوآوران',
                'id' => 1537,
                'locale' => 'fa',
            ),
            37 => 
            array (
                'country_state_id' => 384,
                'default_name' => 'تازه کارنیکاوا',
                'id' => 1538,
                'locale' => 'fa',
            ),
            38 => 
            array (
                'country_state_id' => 385,
                'default_name' => 'نوازان سزوینس',
                'id' => 1539,
                'locale' => 'fa',
            ),
            39 => 
            array (
                'country_state_id' => 386,
                'default_name' => 'نوادگان Cibla',
                'id' => 1540,
                'locale' => 'fa',
            ),
            40 => 
            array (
                'country_state_id' => 387,
                'default_name' => 'شهرستان Cesis',
                'id' => 1541,
                'locale' => 'fa',
            ),
            41 => 
            array (
                'country_state_id' => 388,
                'default_name' => 'تازه های داگدا',
                'id' => 1542,
                'locale' => 'fa',
            ),
            42 => 
            array (
                'country_state_id' => 389,
                'default_name' => 'داوگاوپیلز نوادا',
                'id' => 1543,
                'locale' => 'fa',
            ),
            43 => 
            array (
                'country_state_id' => 390,
                'default_name' => 'دابل نوادی',
                'id' => 1544,
                'locale' => 'fa',
            ),
            44 => 
            array (
                'country_state_id' => 391,
                'default_name' => 'تازه کارهای دنداگاس',
                'id' => 1545,
                'locale' => 'fa',
            ),
            45 => 
            array (
                'country_state_id' => 392,
                'default_name' => 'نوباد دوربس',
                'id' => 1546,
                'locale' => 'fa',
            ),
            46 => 
            array (
                'country_state_id' => 393,
                'default_name' => 'مشغول تازه کارها است',
                'id' => 1547,
                'locale' => 'fa',
            ),
            47 => 
            array (
                'country_state_id' => 394,
                'default_name' => 'گرکالنس نواد',
                'id' => 1548,
                'locale' => 'fa',
            ),
            48 => 
            array (
                'country_state_id' => 395,
                'default_name' => 'یا شهرستان گروبی',
                'id' => 1549,
                'locale' => 'fa',
            ),
            49 => 
            array (
                'country_state_id' => 396,
                'default_name' => 'تازه های گلبنس',
                'id' => 1550,
                'locale' => 'fa',
            ),
            50 => 
            array (
                'country_state_id' => 397,
                'default_name' => 'Iecavas novads',
                'id' => 1551,
                'locale' => 'fa',
            ),
            51 => 
            array (
                'country_state_id' => 398,
                'default_name' => 'شهرستان ایسکل',
                'id' => 1552,
                'locale' => 'fa',
            ),
            52 => 
            array (
                'country_state_id' => 399,
                'default_name' => 'ایالت ایلکست',
                'id' => 1553,
                'locale' => 'fa',
            ),
            53 => 
            array (
                'country_state_id' => 400,
                'default_name' => 'کنددو د اینچوکالن',
                'id' => 1554,
                'locale' => 'fa',
            ),
            54 => 
            array (
                'country_state_id' => 401,
                'default_name' => 'نوجواد Jaunjelgavas',
                'id' => 1555,
                'locale' => 'fa',
            ),
            55 => 
            array (
                'country_state_id' => 402,
                'default_name' => 'تازه های Jaunpiebalgas',
                'id' => 1556,
                'locale' => 'fa',
            ),
            56 => 
            array (
                'country_state_id' => 403,
                'default_name' => 'شهرستان جونپیلس',
                'id' => 1557,
                'locale' => 'fa',
            ),
            57 => 
            array (
                'country_state_id' => 404,
                'default_name' => 'شهرستان جگلو',
                'id' => 1558,
                'locale' => 'fa',
            ),
            58 => 
            array (
                'country_state_id' => 405,
                'default_name' => 'شهرستان جکابیل',
                'id' => 1559,
                'locale' => 'fa',
            ),
            59 => 
            array (
                'country_state_id' => 406,
                'default_name' => 'شهرستان کنداوا',
                'id' => 1560,
                'locale' => 'fa',
            ),
            60 => 
            array (
                'country_state_id' => 407,
                'default_name' => 'شهرستان کوکنز',
                'id' => 1561,
                'locale' => 'fa',
            ),
            61 => 
            array (
                'country_state_id' => 408,
                'default_name' => 'شهرستان کریمولد',
                'id' => 1562,
                'locale' => 'fa',
            ),
            62 => 
            array (
                'country_state_id' => 409,
                'default_name' => 'شهرستان کرستپیل',
                'id' => 1563,
                'locale' => 'fa',
            ),
            63 => 
            array (
                'country_state_id' => 410,
                'default_name' => 'شهرستان کراسلاو',
                'id' => 1564,
                'locale' => 'fa',
            ),
            64 => 
            array (
                'country_state_id' => 411,
                'default_name' => 'کاندادو د کلدیگا',
                'id' => 1565,
                'locale' => 'fa',
            ),
            65 => 
            array (
                'country_state_id' => 412,
                'default_name' => 'کاندادو د کارساوا',
                'id' => 1566,
                'locale' => 'fa',
            ),
            66 => 
            array (
                'country_state_id' => 413,
                'default_name' => 'شهرستان لیولوارد',
                'id' => 1567,
                'locale' => 'fa',
            ),
            67 => 
            array (
                'country_state_id' => 414,
                'default_name' => 'شهرستان لیمباشی',
                'id' => 1568,
                'locale' => 'fa',
            ),
            68 => 
            array (
                'country_state_id' => 415,
                'default_name' => 'ای ولسوالی لوبون',
                'id' => 1569,
                'locale' => 'fa',
            ),
            69 => 
            array (
                'country_state_id' => 416,
                'default_name' => 'شهرستان لودزا',
                'id' => 1570,
                'locale' => 'fa',
            ),
            70 => 
            array (
                'country_state_id' => 417,
                'default_name' => 'شهرستان لیگات',
                'id' => 1571,
                'locale' => 'fa',
            ),
            71 => 
            array (
                'country_state_id' => 418,
                'default_name' => 'شهرستان لیوانی',
                'id' => 1572,
                'locale' => 'fa',
            ),
            72 => 
            array (
                'country_state_id' => 419,
                'default_name' => 'شهرستان مادونا',
                'id' => 1573,
                'locale' => 'fa',
            ),
            73 => 
            array (
                'country_state_id' => 420,
                'default_name' => 'شهرستان مازسال',
                'id' => 1574,
                'locale' => 'fa',
            ),
            74 => 
            array (
                'country_state_id' => 421,
                'default_name' => 'شهرستان مالپیلس',
                'id' => 1575,
                'locale' => 'fa',
            ),
            75 => 
            array (
                'country_state_id' => 422,
                'default_name' => 'شهرستان Mārupe',
                'id' => 1576,
                'locale' => 'fa',
            ),
            76 => 
            array (
                'country_state_id' => 423,
                'default_name' => 'ا کنددو د نوکشنی',
                'id' => 1577,
                'locale' => 'fa',
            ),
            77 => 
            array (
                'country_state_id' => 424,
                'default_name' => 'کاملاً یک شهرستان',
                'id' => 1578,
                'locale' => 'fa',
            ),
            78 => 
            array (
                'country_state_id' => 425,
                'default_name' => 'شهرستان نیکا',
                'id' => 1579,
                'locale' => 'fa',
            ),
            79 => 
            array (
                'country_state_id' => 426,
                'default_name' => 'شهرستان اوگر',
                'id' => 1580,
                'locale' => 'fa',
            ),
            80 => 
            array (
                'country_state_id' => 427,
                'default_name' => 'شهرستان اولین',
                'id' => 1581,
                'locale' => 'fa',
            ),
            81 => 
            array (
                'country_state_id' => 428,
                'default_name' => 'شهرستان اوزولنیکی',
                'id' => 1582,
                'locale' => 'fa',
            ),
            82 => 
            array (
                'country_state_id' => 429,
                'default_name' => 'شهرستان پرلیلی',
                'id' => 1583,
                'locale' => 'fa',
            ),
            83 => 
            array (
                'country_state_id' => 430,
                'default_name' => 'شهرستان Priekule',
                'id' => 1584,
                'locale' => 'fa',
            ),
            84 => 
            array (
                'country_state_id' => 431,
                'default_name' => 'Condado de Priekuļi',
                'id' => 1585,
                'locale' => 'fa',
            ),
            85 => 
            array (
                'country_state_id' => 432,
                'default_name' => 'شهرستان در حال حرکت',
                'id' => 1586,
                'locale' => 'fa',
            ),
            86 => 
            array (
                'country_state_id' => 433,
                'default_name' => 'شهرستان پاویلوستا',
                'id' => 1587,
                'locale' => 'fa',
            ),
            87 => 
            array (
                'country_state_id' => 4,
                'default_name' => 'شهرستان Plavinas',
                'id' => 1588,
                'locale' => 'fa',
            ),
            88 => 
            array (
                'country_state_id' => 435,
                'default_name' => 'شهرستان راونا',
                'id' => 1589,
                'locale' => 'fa',
            ),
            89 => 
            array (
                'country_state_id' => 436,
                'default_name' => 'شهرستان ریبیشی',
                'id' => 1590,
                'locale' => 'fa',
            ),
            90 => 
            array (
                'country_state_id' => 437,
                'default_name' => 'شهرستان روجا',
                'id' => 1591,
                'locale' => 'fa',
            ),
            91 => 
            array (
                'country_state_id' => 438,
                'default_name' => 'شهرستان روپازی',
                'id' => 1592,
                'locale' => 'fa',
            ),
            92 => 
            array (
                'country_state_id' => 439,
                'default_name' => 'شهرستان روساوا',
                'id' => 1593,
                'locale' => 'fa',
            ),
            93 => 
            array (
                'country_state_id' => 440,
                'default_name' => 'شهرستان روگی',
                'id' => 1594,
                'locale' => 'fa',
            ),
            94 => 
            array (
                'country_state_id' => 441,
                'default_name' => 'شهرستان راندل',
                'id' => 1595,
                'locale' => 'fa',
            ),
            95 => 
            array (
                'country_state_id' => 442,
                'default_name' => 'شهرستان ریزکن',
                'id' => 1596,
                'locale' => 'fa',
            ),
            96 => 
            array (
                'country_state_id' => 443,
                'default_name' => 'شهرستان روژینا',
                'id' => 1597,
                'locale' => 'fa',
            ),
            97 => 
            array (
                'country_state_id' => 444,
                'default_name' => 'شهرداری Salacgriva',
                'id' => 1598,
                'locale' => 'fa',
            ),
            98 => 
            array (
                'country_state_id' => 445,
                'default_name' => 'منطقه جزیره',
                'id' => 1599,
                'locale' => 'fa',
            ),
            99 => 
            array (
                'country_state_id' => 446,
                'default_name' => 'شهرستان Salaspils',
                'id' => 1600,
                'locale' => 'fa',
            ),
            100 => 
            array (
                'country_state_id' => 447,
                'default_name' => 'شهرستان سالدوس',
                'id' => 1601,
                'locale' => 'fa',
            ),
            101 => 
            array (
                'country_state_id' => 448,
                'default_name' => 'شهرستان ساولکرستی',
                'id' => 1602,
                'locale' => 'fa',
            ),
            102 => 
            array (
                'country_state_id' => 449,
                'default_name' => 'شهرستان سیگولدا',
                'id' => 1603,
                'locale' => 'fa',
            ),
            103 => 
            array (
                'country_state_id' => 450,
                'default_name' => 'شهرستان Skrunda',
                'id' => 1604,
                'locale' => 'fa',
            ),
            104 => 
            array (
                'country_state_id' => 451,
                'default_name' => 'شهرستان Skrīveri',
                'id' => 1605,
                'locale' => 'fa',
            ),
            105 => 
            array (
                'country_state_id' => 452,
                'default_name' => 'شهرستان Smiltene',
                'id' => 1606,
                'locale' => 'fa',
            ),
            106 => 
            array (
                'country_state_id' => 453,
                'default_name' => 'شهرستان ایستینی',
                'id' => 1607,
                'locale' => 'fa',
            ),
            107 => 
            array (
                'country_state_id' => 454,
                'default_name' => 'شهرستان استرنشی',
                'id' => 1608,
                'locale' => 'fa',
            ),
            108 => 
            array (
                'country_state_id' => 455,
                'default_name' => 'منطقه کاشت',
                'id' => 1609,
                'locale' => 'fa',
            ),
            109 => 
            array (
                'country_state_id' => 456,
                'default_name' => 'شهرستان تالسی',
                'id' => 1610,
                'locale' => 'fa',
            ),
            110 => 
            array (
                'country_state_id' => 457,
                'default_name' => 'توکومس',
                'id' => 1611,
                'locale' => 'fa',
            ),
            111 => 
            array (
                'country_state_id' => 458,
                'default_name' => 'شهرستان تورت',
                'id' => 1612,
                'locale' => 'fa',
            ),
            112 => 
            array (
                'country_state_id' => 459,
                'default_name' => 'یا شهرستان وایودود',
                'id' => 1613,
                'locale' => 'fa',
            ),
            113 => 
            array (
                'country_state_id' => 460,
                'default_name' => 'شهرستان والکا',
                'id' => 1614,
                'locale' => 'fa',
            ),
            114 => 
            array (
                'country_state_id' => 461,
                'default_name' => 'شهرستان Valmiera',
                'id' => 1615,
                'locale' => 'fa',
            ),
            115 => 
            array (
                'country_state_id' => 462,
                'default_name' => 'شهرستان وارکانی',
                'id' => 1616,
                'locale' => 'fa',
            ),
            116 => 
            array (
                'country_state_id' => 463,
                'default_name' => 'شهرستان Vecpiebalga',
                'id' => 1617,
                'locale' => 'fa',
            ),
            117 => 
            array (
                'country_state_id' => 464,
                'default_name' => 'شهرستان وکومنیکی',
                'id' => 1618,
                'locale' => 'fa',
            ),
            118 => 
            array (
                'country_state_id' => 465,
                'default_name' => 'شهرستان ونتسپیل',
                'id' => 1619,
                'locale' => 'fa',
            ),
            119 => 
            array (
                'country_state_id' => 466,
                'default_name' => 'کنددو د بازدید',
                'id' => 1620,
                'locale' => 'fa',
            ),
            120 => 
            array (
                'country_state_id' => 467,
                'default_name' => 'شهرستان ویلاکا',
                'id' => 1621,
                'locale' => 'fa',
            ),
            121 => 
            array (
                'country_state_id' => 468,
                'default_name' => 'شهرستان ویلانی',
                'id' => 1622,
                'locale' => 'fa',
            ),
            122 => 
            array (
                'country_state_id' => 469,
                'default_name' => 'شهرستان واركاوا',
                'id' => 1623,
                'locale' => 'fa',
            ),
            123 => 
            array (
                'country_state_id' => 470,
                'default_name' => 'شهرستان زیلوپ',
                'id' => 1624,
                'locale' => 'fa',
            ),
            124 => 
            array (
                'country_state_id' => 471,
                'default_name' => 'شهرستان آدازی',
                'id' => 1625,
                'locale' => 'fa',
            ),
            125 => 
            array (
                'country_state_id' => 472,
                'default_name' => 'شهرستان ارگلو',
                'id' => 1626,
                'locale' => 'fa',
            ),
            126 => 
            array (
                'country_state_id' => 473,
                'default_name' => 'شهرستان کگومس',
                'id' => 1627,
                'locale' => 'fa',
            ),
            127 => 
            array (
                'country_state_id' => 474,
                'default_name' => 'شهرستان ککاوا',
                'id' => 1628,
                'locale' => 'fa',
            ),
            128 => 
            array (
                'country_state_id' => 475,
                'default_name' => 'شهرستان Alytus',
                'id' => 1629,
                'locale' => 'fa',
            ),
            129 => 
            array (
                'country_state_id' => 476,
                'default_name' => 'شهرستان Kaunas',
                'id' => 1630,
                'locale' => 'fa',
            ),
            130 => 
            array (
                'country_state_id' => 477,
                'default_name' => 'شهرستان کلایپدا',
                'id' => 1631,
                'locale' => 'fa',
            ),
            131 => 
            array (
                'country_state_id' => 478,
                'default_name' => 'شهرستان ماریجامپولی',
                'id' => 1632,
                'locale' => 'fa',
            ),
            132 => 
            array (
                'country_state_id' => 479,
                'default_name' => 'شهرستان پانویسیز',
                'id' => 1633,
                'locale' => 'fa',
            ),
            133 => 
            array (
                'country_state_id' => 480,
                'default_name' => 'شهرستان سیاولیا',
                'id' => 1634,
                'locale' => 'fa',
            ),
            134 => 
            array (
                'country_state_id' => 481,
                'default_name' => 'شهرستان تاجیج',
                'id' => 1635,
                'locale' => 'fa',
            ),
            135 => 
            array (
                'country_state_id' => 482,
                'default_name' => 'شهرستان تلشیا',
                'id' => 1636,
                'locale' => 'fa',
            ),
            136 => 
            array (
                'country_state_id' => 483,
                'default_name' => 'شهرستان اوتنا',
                'id' => 1637,
                'locale' => 'fa',
            ),
            137 => 
            array (
                'country_state_id' => 484,
                'default_name' => 'شهرستان ویلنیوس',
                'id' => 1638,
                'locale' => 'fa',
            ),
            138 => 
            array (
                'country_state_id' => 485,
                'default_name' => 'جریب',
                'id' => 1639,
                'locale' => 'fa',
            ),
            139 => 
            array (
                'country_state_id' => 486,
                'default_name' => 'حالت',
                'id' => 1640,
                'locale' => 'fa',
            ),
            140 => 
            array (
                'country_state_id' => 487,
                'default_name' => 'آمپá',
                'id' => 1641,
                'locale' => 'fa',
            ),
            141 => 
            array (
                'country_state_id' => 488,
                'default_name' => 'آمازون',
                'id' => 1642,
                'locale' => 'fa',
            ),
            142 => 
            array (
                'country_state_id' => 489,
                'default_name' => 'باهی',
                'id' => 1643,
                'locale' => 'fa',
            ),
            143 => 
            array (
                'country_state_id' => 490,
                'default_name' => 'سارا',
                'id' => 1644,
                'locale' => 'fa',
            ),
            144 => 
            array (
                'country_state_id' => 491,
                'default_name' => 'روح القدس',
                'id' => 1645,
                'locale' => 'fa',
            ),
            145 => 
            array (
                'country_state_id' => 492,
                'default_name' => 'برو',
                'id' => 1646,
                'locale' => 'fa',
            ),
            146 => 
            array (
                'country_state_id' => 493,
                'default_name' => 'مارانهائ',
                'id' => 1647,
                'locale' => 'fa',
            ),
            147 => 
            array (
                'country_state_id' => 494,
                'default_name' => 'ماتو گروسو',
                'id' => 1648,
                'locale' => 'fa',
            ),
            148 => 
            array (
                'country_state_id' => 495,
                'default_name' => 'Mato Grosso do Sul',
                'id' => 1649,
                'locale' => 'fa',
            ),
            149 => 
            array (
                'country_state_id' => 496,
                'default_name' => 'ایالت میناس گرایس',
                'id' => 1650,
                'locale' => 'fa',
            ),
            150 => 
            array (
                'country_state_id' => 497,
                'default_name' => 'پار',
                'id' => 1651,
                'locale' => 'fa',
            ),
            151 => 
            array (
                'country_state_id' => 498,
                'default_name' => 'حالت',
                'id' => 1652,
                'locale' => 'fa',
            ),
            152 => 
            array (
                'country_state_id' => 499,
                'default_name' => 'پارانا',
                'id' => 1653,
                'locale' => 'fa',
            ),
            153 => 
            array (
                'country_state_id' => 500,
                'default_name' => 'حال',
                'id' => 1654,
                'locale' => 'fa',
            ),
            154 => 
            array (
                'country_state_id' => 501,
                'default_name' => 'پیازو',
                'id' => 1655,
                'locale' => 'fa',
            ),
            155 => 
            array (
                'country_state_id' => 502,
                'default_name' => 'ریو دوژانیرو',
                'id' => 1656,
                'locale' => 'fa',
            ),
            156 => 
            array (
                'country_state_id' => 503,
                'default_name' => 'ریو گراند دو نورته',
                'id' => 1657,
                'locale' => 'fa',
            ),
            157 => 
            array (
                'country_state_id' => 504,
                'default_name' => 'ریو گراند دو سول',
                'id' => 1658,
                'locale' => 'fa',
            ),
            158 => 
            array (
                'country_state_id' => 505,
                'default_name' => 'Rondôni',
                'id' => 1659,
                'locale' => 'fa',
            ),
            159 => 
            array (
                'country_state_id' => 506,
                'default_name' => 'Roraim',
                'id' => 1660,
                'locale' => 'fa',
            ),
            160 => 
            array (
                'country_state_id' => 507,
                'default_name' => 'سانتا کاتارینا',
                'id' => 1661,
                'locale' => 'fa',
            ),
            161 => 
            array (
                'country_state_id' => 508,
                'default_name' => 'پ',
                'id' => 1662,
                'locale' => 'fa',
            ),
            162 => 
            array (
                'country_state_id' => 509,
                'default_name' => 'Sergip',
                'id' => 1663,
                'locale' => 'fa',
            ),
            163 => 
            array (
                'country_state_id' => 510,
                'default_name' => 'توکانتین',
                'id' => 1664,
                'locale' => 'fa',
            ),
            164 => 
            array (
                'country_state_id' => 511,
                'default_name' => 'منطقه فدرال',
                'id' => 1665,
                'locale' => 'fa',
            ),
            165 => 
            array (
                'country_state_id' => 512,
                'default_name' => 'شهرستان زاگرب',
                'id' => 1666,
                'locale' => 'fa',
            ),
            166 => 
            array (
                'country_state_id' => 513,
                'default_name' => 'Condado de Krapina-Zagorj',
                'id' => 1667,
                'locale' => 'fa',
            ),
            167 => 
            array (
                'country_state_id' => 514,
                'default_name' => 'شهرستان سیساک-موسلاوینا',
                'id' => 1668,
                'locale' => 'fa',
            ),
            168 => 
            array (
                'country_state_id' => 515,
                'default_name' => 'شهرستان کارلوواک',
                'id' => 1669,
                'locale' => 'fa',
            ),
            169 => 
            array (
                'country_state_id' => 516,
                'default_name' => 'شهرداری واراžدین',
                'id' => 1670,
                'locale' => 'fa',
            ),
            170 => 
            array (
                'country_state_id' => 517,
                'default_name' => 'Condo de Koprivnica-Križevci',
                'id' => 1671,
                'locale' => 'fa',
            ),
            171 => 
            array (
                'country_state_id' => 518,
                'default_name' => 'محل سکونت د بیلوار-بلوگورا',
                'id' => 1672,
                'locale' => 'fa',
            ),
            172 => 
            array (
                'country_state_id' => 519,
                'default_name' => 'Condado de Primorje-Gorski kotar',
                'id' => 1673,
                'locale' => 'fa',
            ),
            173 => 
            array (
                'country_state_id' => 520,
                'default_name' => 'شهرستان لیکا-سنج',
                'id' => 1674,
                'locale' => 'fa',
            ),
            174 => 
            array (
                'country_state_id' => 521,
                'default_name' => 'Condado de Virovitica-Podravina',
                'id' => 1675,
                'locale' => 'fa',
            ),
            175 => 
            array (
                'country_state_id' => 522,
                'default_name' => 'شهرستان پوژگا-اسلاونیا',
                'id' => 1676,
                'locale' => 'fa',
            ),
            176 => 
            array (
                'country_state_id' => 523,
                'default_name' => 'Condado de Brod-Posavina',
                'id' => 1677,
                'locale' => 'fa',
            ),
            177 => 
            array (
                'country_state_id' => 524,
                'default_name' => 'شهرستان زجر',
                'id' => 1678,
                'locale' => 'fa',
            ),
            178 => 
            array (
                'country_state_id' => 525,
                'default_name' => 'Condado de Osijek-Baranja',
                'id' => 1679,
                'locale' => 'fa',
            ),
            179 => 
            array (
                'country_state_id' => 526,
                'default_name' => 'Condo de Sibenik-Knin',
                'id' => 1680,
                'locale' => 'fa',
            ),
            180 => 
            array (
                'country_state_id' => 527,
                'default_name' => 'Condado de Vukovar-Srijem',
                'id' => 1681,
                'locale' => 'fa',
            ),
            181 => 
            array (
                'country_state_id' => 528,
                'default_name' => 'شهرستان اسپلیت-Dalmatia',
                'id' => 1682,
                'locale' => 'fa',
            ),
            182 => 
            array (
                'country_state_id' => 529,
                'default_name' => 'شهرستان ایستیا',
                'id' => 1683,
                'locale' => 'fa',
            ),
            183 => 
            array (
                'country_state_id' => 530,
                'default_name' => 'Condado de Dubrovnik-Neretva',
                'id' => 1684,
                'locale' => 'fa',
            ),
            184 => 
            array (
                'country_state_id' => 531,
                'default_name' => 'شهرستان Međimurje',
                'id' => 1685,
                'locale' => 'fa',
            ),
            185 => 
            array (
                'country_state_id' => 532,
                'default_name' => 'شهر زاگرب',
                'id' => 1686,
                'locale' => 'fa',
            ),
            186 => 
            array (
                'country_state_id' => 533,
                'default_name' => 'جزایر آندامان و نیکوبار',
                'id' => 1687,
                'locale' => 'fa',
            ),
            187 => 
            array (
                'country_state_id' => 534,
                'default_name' => 'آندرا پرادش',
                'id' => 1688,
                'locale' => 'fa',
            ),
            188 => 
            array (
                'country_state_id' => 535,
                'default_name' => 'آروناچال پرادش',
                'id' => 1689,
                'locale' => 'fa',
            ),
            189 => 
            array (
                'country_state_id' => 536,
                'default_name' => 'آسام',
                'id' => 1690,
                'locale' => 'fa',
            ),
            190 => 
            array (
                'country_state_id' => 537,
                'default_name' => 'Biha',
                'id' => 1691,
                'locale' => 'fa',
            ),
            191 => 
            array (
                'country_state_id' => 538,
                'default_name' => 'چاندیگار',
                'id' => 1692,
                'locale' => 'fa',
            ),
            192 => 
            array (
                'country_state_id' => 539,
                'default_name' => 'چاتیسگار',
                'id' => 1693,
                'locale' => 'fa',
            ),
            193 => 
            array (
                'country_state_id' => 540,
                'default_name' => 'دادرا و نگار هاولی',
                'id' => 1694,
                'locale' => 'fa',
            ),
            194 => 
            array (
                'country_state_id' => 541,
                'default_name' => 'دامان و دیو',
                'id' => 1695,
                'locale' => 'fa',
            ),
            195 => 
            array (
                'country_state_id' => 542,
                'default_name' => 'دهلی',
                'id' => 1696,
                'locale' => 'fa',
            ),
            196 => 
            array (
                'country_state_id' => 543,
                'default_name' => 'گوا',
                'id' => 1697,
                'locale' => 'fa',
            ),
            197 => 
            array (
                'country_state_id' => 544,
                'default_name' => 'گجرات',
                'id' => 1698,
                'locale' => 'fa',
            ),
            198 => 
            array (
                'country_state_id' => 545,
                'default_name' => 'هاریانا',
                'id' => 1699,
                'locale' => 'fa',
            ),
            199 => 
            array (
                'country_state_id' => 546,
                'default_name' => 'هیماچال پرادش',
                'id' => 1700,
                'locale' => 'fa',
            ),
            200 => 
            array (
                'country_state_id' => 547,
                'default_name' => 'جامو و کشمیر',
                'id' => 1701,
                'locale' => 'fa',
            ),
            201 => 
            array (
                'country_state_id' => 548,
                'default_name' => 'جهخند',
                'id' => 1702,
                'locale' => 'fa',
            ),
            202 => 
            array (
                'country_state_id' => 549,
                'default_name' => 'کارناتاکا',
                'id' => 1703,
                'locale' => 'fa',
            ),
            203 => 
            array (
                'country_state_id' => 550,
                'default_name' => 'کرال',
                'id' => 1704,
                'locale' => 'fa',
            ),
            204 => 
            array (
                'country_state_id' => 551,
                'default_name' => 'لاکشادوپ',
                'id' => 1705,
                'locale' => 'fa',
            ),
            205 => 
            array (
                'country_state_id' => 552,
                'default_name' => 'مادیا پرادش',
                'id' => 1706,
                'locale' => 'fa',
            ),
            206 => 
            array (
                'country_state_id' => 553,
                'default_name' => 'ماهاراشترا',
                'id' => 1707,
                'locale' => 'fa',
            ),
            207 => 
            array (
                'country_state_id' => 554,
                'default_name' => 'مانی پور',
                'id' => 1708,
                'locale' => 'fa',
            ),
            208 => 
            array (
                'country_state_id' => 555,
                'default_name' => 'مگالایا',
                'id' => 1709,
                'locale' => 'fa',
            ),
            209 => 
            array (
                'country_state_id' => 556,
                'default_name' => 'مزورام',
                'id' => 1710,
                'locale' => 'fa',
            ),
            210 => 
            array (
                'country_state_id' => 557,
                'default_name' => 'ناگلند',
                'id' => 1711,
                'locale' => 'fa',
            ),
            211 => 
            array (
                'country_state_id' => 558,
                'default_name' => 'ادیشا',
                'id' => 1712,
                'locale' => 'fa',
            ),
            212 => 
            array (
                'country_state_id' => 559,
                'default_name' => 'میناکاری',
                'id' => 1713,
                'locale' => 'fa',
            ),
            213 => 
            array (
                'country_state_id' => 560,
                'default_name' => 'پنجا',
                'id' => 1714,
                'locale' => 'fa',
            ),
            214 => 
            array (
                'country_state_id' => 561,
                'default_name' => 'راجستان',
                'id' => 1715,
                'locale' => 'fa',
            ),
            215 => 
            array (
                'country_state_id' => 562,
                'default_name' => 'سیکیم',
                'id' => 1716,
                'locale' => 'fa',
            ),
            216 => 
            array (
                'country_state_id' => 563,
                'default_name' => 'تامیل نادو',
                'id' => 1717,
                'locale' => 'fa',
            ),
            217 => 
            array (
                'country_state_id' => 564,
                'default_name' => 'تلنگانا',
                'id' => 1718,
                'locale' => 'fa',
            ),
            218 => 
            array (
                'country_state_id' => 565,
                'default_name' => 'تریپورا',
                'id' => 1719,
                'locale' => 'fa',
            ),
            219 => 
            array (
                'country_state_id' => 566,
                'default_name' => 'اوتار پرادش',
                'id' => 1720,
                'locale' => 'fa',
            ),
            220 => 
            array (
                'country_state_id' => 567,
                'default_name' => 'اوتاراکند',
                'id' => 1721,
                'locale' => 'fa',
            ),
            221 => 
            array (
                'country_state_id' => 568,
                'default_name' => 'بنگال غرب',
                'id' => 1722,
                'locale' => 'fa',
            ),
            222 => 
            array (
                'country_state_id' => 1,
                'default_name' => 'Alabama',
                'id' => 1723,
                'locale' => 'pt_BR',
            ),
            223 => 
            array (
                'country_state_id' => 2,
                'default_name' => 'Alaska',
                'id' => 1724,
                'locale' => 'pt_BR',
            ),
            224 => 
            array (
                'country_state_id' => 3,
                'default_name' => 'Samoa Americana',
                'id' => 1725,
                'locale' => 'pt_BR',
            ),
            225 => 
            array (
                'country_state_id' => 4,
                'default_name' => 'Arizona',
                'id' => 1726,
                'locale' => 'pt_BR',
            ),
            226 => 
            array (
                'country_state_id' => 5,
                'default_name' => 'Arkansas',
                'id' => 1727,
                'locale' => 'pt_BR',
            ),
            227 => 
            array (
                'country_state_id' => 6,
                'default_name' => 'Forças Armadas da África',
                'id' => 1728,
                'locale' => 'pt_BR',
            ),
            228 => 
            array (
                'country_state_id' => 7,
                'default_name' => 'Forças Armadas das Américas',
                'id' => 1729,
                'locale' => 'pt_BR',
            ),
            229 => 
            array (
                'country_state_id' => 8,
                'default_name' => 'Forças Armadas do Canadá',
                'id' => 1730,
                'locale' => 'pt_BR',
            ),
            230 => 
            array (
                'country_state_id' => 9,
                'default_name' => 'Forças Armadas da Europa',
                'id' => 1731,
                'locale' => 'pt_BR',
            ),
            231 => 
            array (
                'country_state_id' => 10,
                'default_name' => 'Forças Armadas do Oriente Médio',
                'id' => 1732,
                'locale' => 'pt_BR',
            ),
            232 => 
            array (
                'country_state_id' => 11,
                'default_name' => 'Forças Armadas do Pacífico',
                'id' => 1733,
                'locale' => 'pt_BR',
            ),
            233 => 
            array (
                'country_state_id' => 12,
                'default_name' => 'California',
                'id' => 1734,
                'locale' => 'pt_BR',
            ),
            234 => 
            array (
                'country_state_id' => 13,
                'default_name' => 'Colorado',
                'id' => 1735,
                'locale' => 'pt_BR',
            ),
            235 => 
            array (
                'country_state_id' => 14,
                'default_name' => 'Connecticut',
                'id' => 1736,
                'locale' => 'pt_BR',
            ),
            236 => 
            array (
                'country_state_id' => 15,
                'default_name' => 'Delaware',
                'id' => 1737,
                'locale' => 'pt_BR',
            ),
            237 => 
            array (
                'country_state_id' => 16,
                'default_name' => 'Distrito de Columbia',
                'id' => 1738,
                'locale' => 'pt_BR',
            ),
            238 => 
            array (
                'country_state_id' => 17,
                'default_name' => 'Estados Federados da Micronésia',
                'id' => 1739,
                'locale' => 'pt_BR',
            ),
            239 => 
            array (
                'country_state_id' => 18,
                'default_name' => 'Florida',
                'id' => 1740,
                'locale' => 'pt_BR',
            ),
            240 => 
            array (
                'country_state_id' => 19,
                'default_name' => 'Geórgia',
                'id' => 1741,
                'locale' => 'pt_BR',
            ),
            241 => 
            array (
                'country_state_id' => 20,
                'default_name' => 'Guam',
                'id' => 1742,
                'locale' => 'pt_BR',
            ),
            242 => 
            array (
                'country_state_id' => 21,
                'default_name' => 'Havaí',
                'id' => 1743,
                'locale' => 'pt_BR',
            ),
            243 => 
            array (
                'country_state_id' => 22,
                'default_name' => 'Idaho',
                'id' => 1744,
                'locale' => 'pt_BR',
            ),
            244 => 
            array (
                'country_state_id' => 23,
                'default_name' => 'Illinois',
                'id' => 1745,
                'locale' => 'pt_BR',
            ),
            245 => 
            array (
                'country_state_id' => 24,
                'default_name' => 'Indiana',
                'id' => 1746,
                'locale' => 'pt_BR',
            ),
            246 => 
            array (
                'country_state_id' => 25,
                'default_name' => 'Iowa',
                'id' => 1747,
                'locale' => 'pt_BR',
            ),
            247 => 
            array (
                'country_state_id' => 26,
                'default_name' => 'Kansas',
                'id' => 1748,
                'locale' => 'pt_BR',
            ),
            248 => 
            array (
                'country_state_id' => 27,
                'default_name' => 'Kentucky',
                'id' => 1749,
                'locale' => 'pt_BR',
            ),
            249 => 
            array (
                'country_state_id' => 28,
                'default_name' => 'Louisiana',
                'id' => 1750,
                'locale' => 'pt_BR',
            ),
            250 => 
            array (
                'country_state_id' => 29,
                'default_name' => 'Maine',
                'id' => 1751,
                'locale' => 'pt_BR',
            ),
            251 => 
            array (
                'country_state_id' => 30,
                'default_name' => 'Ilhas Marshall',
                'id' => 1752,
                'locale' => 'pt_BR',
            ),
            252 => 
            array (
                'country_state_id' => 31,
                'default_name' => 'Maryland',
                'id' => 1753,
                'locale' => 'pt_BR',
            ),
            253 => 
            array (
                'country_state_id' => 32,
                'default_name' => 'Massachusetts',
                'id' => 1754,
                'locale' => 'pt_BR',
            ),
            254 => 
            array (
                'country_state_id' => 33,
                'default_name' => 'Michigan',
                'id' => 1755,
                'locale' => 'pt_BR',
            ),
            255 => 
            array (
                'country_state_id' => 34,
                'default_name' => 'Minnesota',
                'id' => 1756,
                'locale' => 'pt_BR',
            ),
            256 => 
            array (
                'country_state_id' => 35,
                'default_name' => 'Mississippi',
                'id' => 1757,
                'locale' => 'pt_BR',
            ),
            257 => 
            array (
                'country_state_id' => 36,
                'default_name' => 'Missouri',
                'id' => 1758,
                'locale' => 'pt_BR',
            ),
            258 => 
            array (
                'country_state_id' => 37,
                'default_name' => 'Montana',
                'id' => 1759,
                'locale' => 'pt_BR',
            ),
            259 => 
            array (
                'country_state_id' => 38,
                'default_name' => 'Nebraska',
                'id' => 1760,
                'locale' => 'pt_BR',
            ),
            260 => 
            array (
                'country_state_id' => 39,
                'default_name' => 'Nevada',
                'id' => 1761,
                'locale' => 'pt_BR',
            ),
            261 => 
            array (
                'country_state_id' => 40,
                'default_name' => 'New Hampshire',
                'id' => 1762,
                'locale' => 'pt_BR',
            ),
            262 => 
            array (
                'country_state_id' => 41,
                'default_name' => 'Nova Jersey',
                'id' => 1763,
                'locale' => 'pt_BR',
            ),
            263 => 
            array (
                'country_state_id' => 42,
                'default_name' => 'Novo México',
                'id' => 1764,
                'locale' => 'pt_BR',
            ),
            264 => 
            array (
                'country_state_id' => 43,
                'default_name' => 'Nova York',
                'id' => 1765,
                'locale' => 'pt_BR',
            ),
            265 => 
            array (
                'country_state_id' => 44,
                'default_name' => 'Carolina do Norte',
                'id' => 1766,
                'locale' => 'pt_BR',
            ),
            266 => 
            array (
                'country_state_id' => 45,
                'default_name' => 'Dakota do Norte',
                'id' => 1767,
                'locale' => 'pt_BR',
            ),
            267 => 
            array (
                'country_state_id' => 46,
                'default_name' => 'Ilhas Marianas do Norte',
                'id' => 1768,
                'locale' => 'pt_BR',
            ),
            268 => 
            array (
                'country_state_id' => 47,
                'default_name' => 'Ohio',
                'id' => 1769,
                'locale' => 'pt_BR',
            ),
            269 => 
            array (
                'country_state_id' => 48,
                'default_name' => 'Oklahoma',
                'id' => 1770,
                'locale' => 'pt_BR',
            ),
            270 => 
            array (
                'country_state_id' => 4,
                'default_name' => 'Oregon',
                'id' => 1771,
                'locale' => 'pt_BR',
            ),
            271 => 
            array (
                'country_state_id' => 50,
                'default_name' => 'Palau',
                'id' => 1772,
                'locale' => 'pt_BR',
            ),
            272 => 
            array (
                'country_state_id' => 51,
                'default_name' => 'Pensilvânia',
                'id' => 1773,
                'locale' => 'pt_BR',
            ),
            273 => 
            array (
                'country_state_id' => 52,
                'default_name' => 'Porto Rico',
                'id' => 1774,
                'locale' => 'pt_BR',
            ),
            274 => 
            array (
                'country_state_id' => 53,
                'default_name' => 'Rhode Island',
                'id' => 1775,
                'locale' => 'pt_BR',
            ),
            275 => 
            array (
                'country_state_id' => 54,
                'default_name' => 'Carolina do Sul',
                'id' => 1776,
                'locale' => 'pt_BR',
            ),
            276 => 
            array (
                'country_state_id' => 55,
                'default_name' => 'Dakota do Sul',
                'id' => 1777,
                'locale' => 'pt_BR',
            ),
            277 => 
            array (
                'country_state_id' => 56,
                'default_name' => 'Tennessee',
                'id' => 1778,
                'locale' => 'pt_BR',
            ),
            278 => 
            array (
                'country_state_id' => 57,
                'default_name' => 'Texas',
                'id' => 1779,
                'locale' => 'pt_BR',
            ),
            279 => 
            array (
                'country_state_id' => 58,
                'default_name' => 'Utah',
                'id' => 1780,
                'locale' => 'pt_BR',
            ),
            280 => 
            array (
                'country_state_id' => 59,
                'default_name' => 'Vermont',
                'id' => 1781,
                'locale' => 'pt_BR',
            ),
            281 => 
            array (
                'country_state_id' => 60,
                'default_name' => 'Ilhas Virgens',
                'id' => 1782,
                'locale' => 'pt_BR',
            ),
            282 => 
            array (
                'country_state_id' => 61,
                'default_name' => 'Virginia',
                'id' => 1783,
                'locale' => 'pt_BR',
            ),
            283 => 
            array (
                'country_state_id' => 62,
                'default_name' => 'Washington',
                'id' => 1784,
                'locale' => 'pt_BR',
            ),
            284 => 
            array (
                'country_state_id' => 63,
                'default_name' => 'West Virginia',
                'id' => 1785,
                'locale' => 'pt_BR',
            ),
            285 => 
            array (
                'country_state_id' => 64,
                'default_name' => 'Wisconsin',
                'id' => 1786,
                'locale' => 'pt_BR',
            ),
            286 => 
            array (
                'country_state_id' => 65,
                'default_name' => 'Wyoming',
                'id' => 1787,
                'locale' => 'pt_BR',
            ),
            287 => 
            array (
                'country_state_id' => 66,
                'default_name' => 'Alberta',
                'id' => 1788,
                'locale' => 'pt_BR',
            ),
            288 => 
            array (
                'country_state_id' => 67,
                'default_name' => 'Colúmbia Britânica',
                'id' => 1789,
                'locale' => 'pt_BR',
            ),
            289 => 
            array (
                'country_state_id' => 68,
                'default_name' => 'Manitoba',
                'id' => 1790,
                'locale' => 'pt_BR',
            ),
            290 => 
            array (
                'country_state_id' => 69,
                'default_name' => 'Terra Nova e Labrador',
                'id' => 1791,
                'locale' => 'pt_BR',
            ),
            291 => 
            array (
                'country_state_id' => 70,
                'default_name' => 'New Brunswick',
                'id' => 1792,
                'locale' => 'pt_BR',
            ),
            292 => 
            array (
                'country_state_id' => 7,
                'default_name' => 'Nova Escócia',
                'id' => 1793,
                'locale' => 'pt_BR',
            ),
            293 => 
            array (
                'country_state_id' => 72,
                'default_name' => 'Territórios do Noroeste',
                'id' => 1794,
                'locale' => 'pt_BR',
            ),
            294 => 
            array (
                'country_state_id' => 73,
                'default_name' => 'Nunavut',
                'id' => 1795,
                'locale' => 'pt_BR',
            ),
            295 => 
            array (
                'country_state_id' => 74,
                'default_name' => 'Ontario',
                'id' => 1796,
                'locale' => 'pt_BR',
            ),
            296 => 
            array (
                'country_state_id' => 75,
                'default_name' => 'Ilha do Príncipe Eduardo',
                'id' => 1797,
                'locale' => 'pt_BR',
            ),
            297 => 
            array (
                'country_state_id' => 76,
                'default_name' => 'Quebec',
                'id' => 1798,
                'locale' => 'pt_BR',
            ),
            298 => 
            array (
                'country_state_id' => 77,
                'default_name' => 'Saskatchewan',
                'id' => 1799,
                'locale' => 'pt_BR',
            ),
            299 => 
            array (
                'country_state_id' => 78,
                'default_name' => 'Território yukon',
                'id' => 1800,
                'locale' => 'pt_BR',
            ),
            300 => 
            array (
                'country_state_id' => 79,
                'default_name' => 'Niedersachsen',
                'id' => 1801,
                'locale' => 'pt_BR',
            ),
            301 => 
            array (
                'country_state_id' => 80,
                'default_name' => 'Baden-Wurttemberg',
                'id' => 1802,
                'locale' => 'pt_BR',
            ),
            302 => 
            array (
                'country_state_id' => 81,
                'default_name' => 'Bayern',
                'id' => 1803,
                'locale' => 'pt_BR',
            ),
            303 => 
            array (
                'country_state_id' => 82,
                'default_name' => 'Berlim',
                'id' => 1804,
                'locale' => 'pt_BR',
            ),
            304 => 
            array (
                'country_state_id' => 83,
                'default_name' => 'Brandenburg',
                'id' => 1805,
                'locale' => 'pt_BR',
            ),
            305 => 
            array (
                'country_state_id' => 84,
                'default_name' => 'Bremen',
                'id' => 1806,
                'locale' => 'pt_BR',
            ),
            306 => 
            array (
                'country_state_id' => 85,
                'default_name' => 'Hamburgo',
                'id' => 1807,
                'locale' => 'pt_BR',
            ),
            307 => 
            array (
                'country_state_id' => 86,
                'default_name' => 'Hessen',
                'id' => 1808,
                'locale' => 'pt_BR',
            ),
            308 => 
            array (
                'country_state_id' => 87,
                'default_name' => 'Mecklenburg-Vorpommern',
                'id' => 1809,
                'locale' => 'pt_BR',
            ),
            309 => 
            array (
                'country_state_id' => 88,
                'default_name' => 'Nordrhein-Westfalen',
                'id' => 1810,
                'locale' => 'pt_BR',
            ),
            310 => 
            array (
                'country_state_id' => 8,
                'default_name' => 'Renânia-Palatinado',
                'id' => 1811,
                'locale' => 'pt_BR',
            ),
            311 => 
            array (
                'country_state_id' => 90,
                'default_name' => 'Sarre',
                'id' => 1812,
                'locale' => 'pt_BR',
            ),
            312 => 
            array (
                'country_state_id' => 91,
                'default_name' => 'Sachsen',
                'id' => 1813,
                'locale' => 'pt_BR',
            ),
            313 => 
            array (
                'country_state_id' => 92,
                'default_name' => 'Sachsen-Anhalt',
                'id' => 1814,
                'locale' => 'pt_BR',
            ),
            314 => 
            array (
                'country_state_id' => 93,
                'default_name' => 'Schleswig-Holstein',
                'id' => 1815,
                'locale' => 'pt_BR',
            ),
            315 => 
            array (
                'country_state_id' => 94,
                'default_name' => 'Turíngia',
                'id' => 1816,
                'locale' => 'pt_BR',
            ),
            316 => 
            array (
                'country_state_id' => 95,
                'default_name' => 'Viena',
                'id' => 1817,
                'locale' => 'pt_BR',
            ),
            317 => 
            array (
                'country_state_id' => 96,
                'default_name' => 'Baixa Áustria',
                'id' => 1818,
                'locale' => 'pt_BR',
            ),
            318 => 
            array (
                'country_state_id' => 97,
                'default_name' => 'Oberösterreich',
                'id' => 1819,
                'locale' => 'pt_BR',
            ),
            319 => 
            array (
                'country_state_id' => 98,
                'default_name' => 'Salzburg',
                'id' => 1820,
                'locale' => 'pt_BR',
            ),
            320 => 
            array (
                'country_state_id' => 99,
                'default_name' => 'Caríntia',
                'id' => 1821,
                'locale' => 'pt_BR',
            ),
            321 => 
            array (
                'country_state_id' => 100,
                'default_name' => 'Steiermark',
                'id' => 1822,
                'locale' => 'pt_BR',
            ),
            322 => 
            array (
                'country_state_id' => 101,
                'default_name' => 'Tirol',
                'id' => 1823,
                'locale' => 'pt_BR',
            ),
            323 => 
            array (
                'country_state_id' => 102,
                'default_name' => 'Burgenland',
                'id' => 1824,
                'locale' => 'pt_BR',
            ),
            324 => 
            array (
                'country_state_id' => 103,
                'default_name' => 'Vorarlberg',
                'id' => 1825,
                'locale' => 'pt_BR',
            ),
            325 => 
            array (
                'country_state_id' => 104,
                'default_name' => 'Aargau',
                'id' => 1826,
                'locale' => 'pt_BR',
            ),
            326 => 
            array (
                'country_state_id' => 105,
                'default_name' => 'Appenzell Innerrhoden',
                'id' => 1827,
                'locale' => 'pt_BR',
            ),
            327 => 
            array (
                'country_state_id' => 106,
                'default_name' => 'Appenzell Ausserrhoden',
                'id' => 1828,
                'locale' => 'pt_BR',
            ),
            328 => 
            array (
                'country_state_id' => 107,
                'default_name' => 'Bern',
                'id' => 1829,
                'locale' => 'pt_BR',
            ),
            329 => 
            array (
                'country_state_id' => 108,
                'default_name' => 'Basel-Landschaft',
                'id' => 1830,
                'locale' => 'pt_BR',
            ),
            330 => 
            array (
                'country_state_id' => 109,
                'default_name' => 'Basel-Stadt',
                'id' => 1831,
                'locale' => 'pt_BR',
            ),
            331 => 
            array (
                'country_state_id' => 110,
                'default_name' => 'Freiburg',
                'id' => 1832,
                'locale' => 'pt_BR',
            ),
            332 => 
            array (
                'country_state_id' => 111,
                'default_name' => 'Genf',
                'id' => 1833,
                'locale' => 'pt_BR',
            ),
            333 => 
            array (
                'country_state_id' => 112,
                'default_name' => 'Glarus',
                'id' => 1834,
                'locale' => 'pt_BR',
            ),
            334 => 
            array (
                'country_state_id' => 113,
                'default_name' => 'Grisons',
                'id' => 1835,
                'locale' => 'pt_BR',
            ),
            335 => 
            array (
                'country_state_id' => 114,
                'default_name' => 'Jura',
                'id' => 1836,
                'locale' => 'pt_BR',
            ),
            336 => 
            array (
                'country_state_id' => 115,
                'default_name' => 'Luzern',
                'id' => 1837,
                'locale' => 'pt_BR',
            ),
            337 => 
            array (
                'country_state_id' => 116,
                'default_name' => 'Neuenburg',
                'id' => 1838,
                'locale' => 'pt_BR',
            ),
            338 => 
            array (
                'country_state_id' => 117,
                'default_name' => 'Nidwalden',
                'id' => 1839,
                'locale' => 'pt_BR',
            ),
            339 => 
            array (
                'country_state_id' => 118,
                'default_name' => 'Obwalden',
                'id' => 1840,
                'locale' => 'pt_BR',
            ),
            340 => 
            array (
                'country_state_id' => 119,
                'default_name' => 'St. Gallen',
                'id' => 1841,
                'locale' => 'pt_BR',
            ),
            341 => 
            array (
                'country_state_id' => 120,
                'default_name' => 'Schaffhausen',
                'id' => 1842,
                'locale' => 'pt_BR',
            ),
            342 => 
            array (
                'country_state_id' => 121,
                'default_name' => 'Solothurn',
                'id' => 1843,
                'locale' => 'pt_BR',
            ),
            343 => 
            array (
                'country_state_id' => 122,
                'default_name' => 'Schwyz',
                'id' => 1844,
                'locale' => 'pt_BR',
            ),
            344 => 
            array (
                'country_state_id' => 123,
                'default_name' => 'Thurgau',
                'id' => 1845,
                'locale' => 'pt_BR',
            ),
            345 => 
            array (
                'country_state_id' => 124,
                'default_name' => 'Tessin',
                'id' => 1846,
                'locale' => 'pt_BR',
            ),
            346 => 
            array (
                'country_state_id' => 125,
                'default_name' => 'Uri',
                'id' => 1847,
                'locale' => 'pt_BR',
            ),
            347 => 
            array (
                'country_state_id' => 126,
                'default_name' => 'Waadt',
                'id' => 1848,
                'locale' => 'pt_BR',
            ),
            348 => 
            array (
                'country_state_id' => 127,
                'default_name' => 'Wallis',
                'id' => 1849,
                'locale' => 'pt_BR',
            ),
            349 => 
            array (
                'country_state_id' => 128,
                'default_name' => 'Zug',
                'id' => 1850,
                'locale' => 'pt_BR',
            ),
            350 => 
            array (
                'country_state_id' => 129,
                'default_name' => 'Zurique',
                'id' => 1851,
                'locale' => 'pt_BR',
            ),
            351 => 
            array (
                'country_state_id' => 130,
                'default_name' => 'Corunha',
                'id' => 1852,
                'locale' => 'pt_BR',
            ),
            352 => 
            array (
                'country_state_id' => 131,
                'default_name' => 'Álava',
                'id' => 1853,
                'locale' => 'pt_BR',
            ),
            353 => 
            array (
                'country_state_id' => 132,
                'default_name' => 'Albacete',
                'id' => 1854,
                'locale' => 'pt_BR',
            ),
            354 => 
            array (
                'country_state_id' => 133,
                'default_name' => 'Alicante',
                'id' => 1855,
                'locale' => 'pt_BR',
            ),
            355 => 
            array (
                'country_state_id' => 134,
                'default_name' => 'Almeria',
                'id' => 1856,
                'locale' => 'pt_BR',
            ),
            356 => 
            array (
                'country_state_id' => 135,
                'default_name' => 'Astúrias',
                'id' => 1857,
                'locale' => 'pt_BR',
            ),
            357 => 
            array (
                'country_state_id' => 136,
                'default_name' => 'Avila',
                'id' => 1858,
                'locale' => 'pt_BR',
            ),
            358 => 
            array (
                'country_state_id' => 137,
                'default_name' => 'Badajoz',
                'id' => 1859,
                'locale' => 'pt_BR',
            ),
            359 => 
            array (
                'country_state_id' => 138,
                'default_name' => 'Baleares',
                'id' => 1860,
                'locale' => 'pt_BR',
            ),
            360 => 
            array (
                'country_state_id' => 139,
                'default_name' => 'Barcelona',
                'id' => 1861,
                'locale' => 'pt_BR',
            ),
            361 => 
            array (
                'country_state_id' => 140,
                'default_name' => 'Burgos',
                'id' => 1862,
                'locale' => 'pt_BR',
            ),
            362 => 
            array (
                'country_state_id' => 141,
                'default_name' => 'Caceres',
                'id' => 1863,
                'locale' => 'pt_BR',
            ),
            363 => 
            array (
                'country_state_id' => 142,
                'default_name' => 'Cadiz',
                'id' => 1864,
                'locale' => 'pt_BR',
            ),
            364 => 
            array (
                'country_state_id' => 143,
                'default_name' => 'Cantábria',
                'id' => 1865,
                'locale' => 'pt_BR',
            ),
            365 => 
            array (
                'country_state_id' => 144,
                'default_name' => 'Castellon',
                'id' => 1866,
                'locale' => 'pt_BR',
            ),
            366 => 
            array (
                'country_state_id' => 145,
                'default_name' => 'Ceuta',
                'id' => 1867,
                'locale' => 'pt_BR',
            ),
            367 => 
            array (
                'country_state_id' => 146,
                'default_name' => 'Ciudad Real',
                'id' => 1868,
                'locale' => 'pt_BR',
            ),
            368 => 
            array (
                'country_state_id' => 147,
                'default_name' => 'Cordoba',
                'id' => 1869,
                'locale' => 'pt_BR',
            ),
            369 => 
            array (
                'country_state_id' => 148,
                'default_name' => 'Cuenca',
                'id' => 1870,
                'locale' => 'pt_BR',
            ),
            370 => 
            array (
                'country_state_id' => 149,
                'default_name' => 'Girona',
                'id' => 1871,
                'locale' => 'pt_BR',
            ),
            371 => 
            array (
                'country_state_id' => 150,
                'default_name' => 'Granada',
                'id' => 1872,
                'locale' => 'pt_BR',
            ),
            372 => 
            array (
                'country_state_id' => 151,
                'default_name' => 'Guadalajara',
                'id' => 1873,
                'locale' => 'pt_BR',
            ),
            373 => 
            array (
                'country_state_id' => 152,
                'default_name' => 'Guipuzcoa',
                'id' => 1874,
                'locale' => 'pt_BR',
            ),
            374 => 
            array (
                'country_state_id' => 153,
                'default_name' => 'Huelva',
                'id' => 1875,
                'locale' => 'pt_BR',
            ),
            375 => 
            array (
                'country_state_id' => 154,
                'default_name' => 'Huesca',
                'id' => 1876,
                'locale' => 'pt_BR',
            ),
            376 => 
            array (
                'country_state_id' => 155,
                'default_name' => 'Jaen',
                'id' => 1877,
                'locale' => 'pt_BR',
            ),
            377 => 
            array (
                'country_state_id' => 156,
                'default_name' => 'La Rioja',
                'id' => 1878,
                'locale' => 'pt_BR',
            ),
            378 => 
            array (
                'country_state_id' => 157,
                'default_name' => 'Las Palmas',
                'id' => 1879,
                'locale' => 'pt_BR',
            ),
            379 => 
            array (
                'country_state_id' => 158,
                'default_name' => 'Leon',
                'id' => 1880,
                'locale' => 'pt_BR',
            ),
            380 => 
            array (
                'country_state_id' => 159,
                'default_name' => 'Lleida',
                'id' => 1881,
                'locale' => 'pt_BR',
            ),
            381 => 
            array (
                'country_state_id' => 160,
                'default_name' => 'Lugo',
                'id' => 1882,
                'locale' => 'pt_BR',
            ),
            382 => 
            array (
                'country_state_id' => 161,
                'default_name' => 'Madri',
                'id' => 1883,
                'locale' => 'pt_BR',
            ),
            383 => 
            array (
                'country_state_id' => 162,
                'default_name' => 'Málaga',
                'id' => 1884,
                'locale' => 'pt_BR',
            ),
            384 => 
            array (
                'country_state_id' => 163,
                'default_name' => 'Melilla',
                'id' => 1885,
                'locale' => 'pt_BR',
            ),
            385 => 
            array (
                'country_state_id' => 164,
                'default_name' => 'Murcia',
                'id' => 1886,
                'locale' => 'pt_BR',
            ),
            386 => 
            array (
                'country_state_id' => 165,
                'default_name' => 'Navarra',
                'id' => 1887,
                'locale' => 'pt_BR',
            ),
            387 => 
            array (
                'country_state_id' => 166,
                'default_name' => 'Ourense',
                'id' => 1888,
                'locale' => 'pt_BR',
            ),
            388 => 
            array (
                'country_state_id' => 167,
                'default_name' => 'Palencia',
                'id' => 1889,
                'locale' => 'pt_BR',
            ),
            389 => 
            array (
                'country_state_id' => 168,
                'default_name' => 'Pontevedra',
                'id' => 1890,
                'locale' => 'pt_BR',
            ),
            390 => 
            array (
                'country_state_id' => 169,
                'default_name' => 'Salamanca',
                'id' => 1891,
                'locale' => 'pt_BR',
            ),
            391 => 
            array (
                'country_state_id' => 170,
                'default_name' => 'Santa Cruz de Tenerife',
                'id' => 1892,
                'locale' => 'pt_BR',
            ),
            392 => 
            array (
                'country_state_id' => 171,
                'default_name' => 'Segovia',
                'id' => 1893,
                'locale' => 'pt_BR',
            ),
            393 => 
            array (
                'country_state_id' => 172,
                'default_name' => 'Sevilla',
                'id' => 1894,
                'locale' => 'pt_BR',
            ),
            394 => 
            array (
                'country_state_id' => 173,
                'default_name' => 'Soria',
                'id' => 1895,
                'locale' => 'pt_BR',
            ),
            395 => 
            array (
                'country_state_id' => 174,
                'default_name' => 'Tarragona',
                'id' => 1896,
                'locale' => 'pt_BR',
            ),
            396 => 
            array (
                'country_state_id' => 175,
                'default_name' => 'Teruel',
                'id' => 1897,
                'locale' => 'pt_BR',
            ),
            397 => 
            array (
                'country_state_id' => 176,
                'default_name' => 'Toledo',
                'id' => 1898,
                'locale' => 'pt_BR',
            ),
            398 => 
            array (
                'country_state_id' => 177,
                'default_name' => 'Valencia',
                'id' => 1899,
                'locale' => 'pt_BR',
            ),
            399 => 
            array (
                'country_state_id' => 178,
                'default_name' => 'Valladolid',
                'id' => 1900,
                'locale' => 'pt_BR',
            ),
            400 => 
            array (
                'country_state_id' => 179,
                'default_name' => 'Vizcaya',
                'id' => 1901,
                'locale' => 'pt_BR',
            ),
            401 => 
            array (
                'country_state_id' => 180,
                'default_name' => 'Zamora',
                'id' => 1902,
                'locale' => 'pt_BR',
            ),
            402 => 
            array (
                'country_state_id' => 181,
                'default_name' => 'Zaragoza',
                'id' => 1903,
                'locale' => 'pt_BR',
            ),
            403 => 
            array (
                'country_state_id' => 182,
                'default_name' => 'Ain',
                'id' => 1904,
                'locale' => 'pt_BR',
            ),
            404 => 
            array (
                'country_state_id' => 183,
                'default_name' => 'Aisne',
                'id' => 1905,
                'locale' => 'pt_BR',
            ),
            405 => 
            array (
                'country_state_id' => 184,
                'default_name' => 'Allier',
                'id' => 1906,
                'locale' => 'pt_BR',
            ),
            406 => 
            array (
                'country_state_id' => 185,
                'default_name' => 'Alpes da Alta Provença',
                'id' => 1907,
                'locale' => 'pt_BR',
            ),
            407 => 
            array (
                'country_state_id' => 186,
                'default_name' => 'Altos Alpes',
                'id' => 1908,
                'locale' => 'pt_BR',
            ),
            408 => 
            array (
                'country_state_id' => 187,
                'default_name' => 'Alpes-Maritimes',
                'id' => 1909,
                'locale' => 'pt_BR',
            ),
            409 => 
            array (
                'country_state_id' => 188,
                'default_name' => 'Ardèche',
                'id' => 1910,
                'locale' => 'pt_BR',
            ),
            410 => 
            array (
                'country_state_id' => 189,
                'default_name' => 'Ardennes',
                'id' => 1911,
                'locale' => 'pt_BR',
            ),
            411 => 
            array (
                'country_state_id' => 190,
                'default_name' => 'Ariege',
                'id' => 1912,
                'locale' => 'pt_BR',
            ),
            412 => 
            array (
                'country_state_id' => 191,
                'default_name' => 'Aube',
                'id' => 1913,
                'locale' => 'pt_BR',
            ),
            413 => 
            array (
                'country_state_id' => 192,
                'default_name' => 'Aude',
                'id' => 1914,
                'locale' => 'pt_BR',
            ),
            414 => 
            array (
                'country_state_id' => 193,
                'default_name' => 'Aveyron',
                'id' => 1915,
                'locale' => 'pt_BR',
            ),
            415 => 
            array (
                'country_state_id' => 194,
                'default_name' => 'BOCAS DO Rhône',
                'id' => 1916,
                'locale' => 'pt_BR',
            ),
            416 => 
            array (
                'country_state_id' => 195,
                'default_name' => 'Calvados',
                'id' => 1917,
                'locale' => 'pt_BR',
            ),
            417 => 
            array (
                'country_state_id' => 196,
                'default_name' => 'Cantal',
                'id' => 1918,
                'locale' => 'pt_BR',
            ),
            418 => 
            array (
                'country_state_id' => 197,
                'default_name' => 'Charente',
                'id' => 1919,
                'locale' => 'pt_BR',
            ),
            419 => 
            array (
                'country_state_id' => 198,
                'default_name' => 'Charente-Maritime',
                'id' => 1920,
                'locale' => 'pt_BR',
            ),
            420 => 
            array (
                'country_state_id' => 199,
                'default_name' => 'Cher',
                'id' => 1921,
                'locale' => 'pt_BR',
            ),
            421 => 
            array (
                'country_state_id' => 200,
                'default_name' => 'Corrèze',
                'id' => 1922,
                'locale' => 'pt_BR',
            ),
            422 => 
            array (
                'country_state_id' => 201,
                'default_name' => 'Corse-du-Sud',
                'id' => 1923,
                'locale' => 'pt_BR',
            ),
            423 => 
            array (
                'country_state_id' => 202,
                'default_name' => 'Alta Córsega',
                'id' => 1924,
                'locale' => 'pt_BR',
            ),
            424 => 
            array (
                'country_state_id' => 203,
                'default_name' => 'Costa d\'OrCorrèze',
                'id' => 1925,
                'locale' => 'pt_BR',
            ),
            425 => 
            array (
                'country_state_id' => 204,
                'default_name' => 'Cotes d\'Armor',
                'id' => 1926,
                'locale' => 'pt_BR',
            ),
            426 => 
            array (
                'country_state_id' => 205,
                'default_name' => 'Creuse',
                'id' => 1927,
                'locale' => 'pt_BR',
            ),
            427 => 
            array (
                'country_state_id' => 206,
                'default_name' => 'Dordogne',
                'id' => 1928,
                'locale' => 'pt_BR',
            ),
            428 => 
            array (
                'country_state_id' => 207,
                'default_name' => 'Doubs',
                'id' => 1929,
                'locale' => 'pt_BR',
            ),
            429 => 
            array (
                'country_state_id' => 208,
                'default_name' => 'DrômeFinistère',
                'id' => 1930,
                'locale' => 'pt_BR',
            ),
            430 => 
            array (
                'country_state_id' => 209,
                'default_name' => 'Eure',
                'id' => 1931,
                'locale' => 'pt_BR',
            ),
            431 => 
            array (
                'country_state_id' => 210,
                'default_name' => 'Eure-et-Loir',
                'id' => 1932,
                'locale' => 'pt_BR',
            ),
            432 => 
            array (
                'country_state_id' => 211,
                'default_name' => 'Finistère',
                'id' => 1933,
                'locale' => 'pt_BR',
            ),
            433 => 
            array (
                'country_state_id' => 212,
                'default_name' => 'Gard',
                'id' => 1934,
                'locale' => 'pt_BR',
            ),
            434 => 
            array (
                'country_state_id' => 213,
                'default_name' => 'Haute-Garonne',
                'id' => 1935,
                'locale' => 'pt_BR',
            ),
            435 => 
            array (
                'country_state_id' => 214,
                'default_name' => 'Gers',
                'id' => 1936,
                'locale' => 'pt_BR',
            ),
            436 => 
            array (
                'country_state_id' => 215,
                'default_name' => 'Gironde',
                'id' => 1937,
                'locale' => 'pt_BR',
            ),
            437 => 
            array (
                'country_state_id' => 216,
                'default_name' => 'Hérault',
                'id' => 1938,
                'locale' => 'pt_BR',
            ),
            438 => 
            array (
                'country_state_id' => 217,
                'default_name' => 'Ille-et-Vilaine',
                'id' => 1939,
                'locale' => 'pt_BR',
            ),
            439 => 
            array (
                'country_state_id' => 218,
                'default_name' => 'Indre',
                'id' => 1940,
                'locale' => 'pt_BR',
            ),
            440 => 
            array (
                'country_state_id' => 219,
                'default_name' => 'Indre-et-Loire',
                'id' => 1941,
                'locale' => 'pt_BR',
            ),
            441 => 
            array (
                'country_state_id' => 220,
                'default_name' => 'Isère',
                'id' => 1942,
                'locale' => 'pt_BR',
            ),
            442 => 
            array (
                'country_state_id' => 221,
                'default_name' => 'Jura',
                'id' => 1943,
                'locale' => 'pt_BR',
            ),
            443 => 
            array (
                'country_state_id' => 222,
                'default_name' => 'Landes',
                'id' => 1944,
                'locale' => 'pt_BR',
            ),
            444 => 
            array (
                'country_state_id' => 223,
                'default_name' => 'Loir-et-Cher',
                'id' => 1945,
                'locale' => 'pt_BR',
            ),
            445 => 
            array (
                'country_state_id' => 224,
                'default_name' => 'Loire',
                'id' => 1946,
                'locale' => 'pt_BR',
            ),
            446 => 
            array (
                'country_state_id' => 22,
                'default_name' => 'Haute-Loire',
                'id' => 1947,
                'locale' => 'pt_BR',
            ),
            447 => 
            array (
                'country_state_id' => 226,
                'default_name' => 'Loire-Atlantique',
                'id' => 1948,
                'locale' => 'pt_BR',
            ),
            448 => 
            array (
                'country_state_id' => 227,
                'default_name' => 'Loiret',
                'id' => 1949,
                'locale' => 'pt_BR',
            ),
            449 => 
            array (
                'country_state_id' => 228,
                'default_name' => 'Lot',
                'id' => 1950,
                'locale' => 'pt_BR',
            ),
            450 => 
            array (
                'country_state_id' => 229,
                'default_name' => 'Lot e Garona',
                'id' => 1951,
                'locale' => 'pt_BR',
            ),
            451 => 
            array (
                'country_state_id' => 230,
                'default_name' => 'Lozère',
                'id' => 1952,
                'locale' => 'pt_BR',
            ),
            452 => 
            array (
                'country_state_id' => 231,
                'default_name' => 'Maine-et-Loire',
                'id' => 1953,
                'locale' => 'pt_BR',
            ),
            453 => 
            array (
                'country_state_id' => 232,
                'default_name' => 'Manche',
                'id' => 1954,
                'locale' => 'pt_BR',
            ),
            454 => 
            array (
                'country_state_id' => 233,
                'default_name' => 'Marne',
                'id' => 1955,
                'locale' => 'pt_BR',
            ),
            455 => 
            array (
                'country_state_id' => 234,
                'default_name' => 'Haute-Marne',
                'id' => 1956,
                'locale' => 'pt_BR',
            ),
            456 => 
            array (
                'country_state_id' => 235,
                'default_name' => 'Mayenne',
                'id' => 1957,
                'locale' => 'pt_BR',
            ),
            457 => 
            array (
                'country_state_id' => 236,
                'default_name' => 'Meurthe-et-Moselle',
                'id' => 1958,
                'locale' => 'pt_BR',
            ),
            458 => 
            array (
                'country_state_id' => 237,
                'default_name' => 'Meuse',
                'id' => 1959,
                'locale' => 'pt_BR',
            ),
            459 => 
            array (
                'country_state_id' => 238,
                'default_name' => 'Morbihan',
                'id' => 1960,
                'locale' => 'pt_BR',
            ),
            460 => 
            array (
                'country_state_id' => 239,
                'default_name' => 'Moselle',
                'id' => 1961,
                'locale' => 'pt_BR',
            ),
            461 => 
            array (
                'country_state_id' => 240,
                'default_name' => 'Nièvre',
                'id' => 1962,
                'locale' => 'pt_BR',
            ),
            462 => 
            array (
                'country_state_id' => 241,
                'default_name' => 'Nord',
                'id' => 1963,
                'locale' => 'pt_BR',
            ),
            463 => 
            array (
                'country_state_id' => 242,
                'default_name' => 'Oise',
                'id' => 1964,
                'locale' => 'pt_BR',
            ),
            464 => 
            array (
                'country_state_id' => 243,
                'default_name' => 'Orne',
                'id' => 1965,
                'locale' => 'pt_BR',
            ),
            465 => 
            array (
                'country_state_id' => 244,
                'default_name' => 'Pas-de-Calais',
                'id' => 1966,
                'locale' => 'pt_BR',
            ),
            466 => 
            array (
                'country_state_id' => 24,
                'default_name' => 'Puy-de-Dôme',
                'id' => 1967,
                'locale' => 'pt_BR',
            ),
            467 => 
            array (
                'country_state_id' => 246,
                'default_name' => 'Pirineus Atlânticos',
                'id' => 1968,
                'locale' => 'pt_BR',
            ),
            468 => 
            array (
                'country_state_id' => 247,
                'default_name' => 'Hautes-Pyrénées',
                'id' => 1969,
                'locale' => 'pt_BR',
            ),
            469 => 
            array (
                'country_state_id' => 248,
                'default_name' => 'Pirineus Orientais',
                'id' => 1970,
                'locale' => 'pt_BR',
            ),
            470 => 
            array (
                'country_state_id' => 249,
                'default_name' => 'Bas-Rhin',
                'id' => 1971,
                'locale' => 'pt_BR',
            ),
            471 => 
            array (
                'country_state_id' => 250,
                'default_name' => 'Alto Reno',
                'id' => 1972,
                'locale' => 'pt_BR',
            ),
            472 => 
            array (
                'country_state_id' => 251,
                'default_name' => 'Rhône',
                'id' => 1973,
                'locale' => 'pt_BR',
            ),
            473 => 
            array (
                'country_state_id' => 252,
                'default_name' => 'Haute-Saône',
                'id' => 1974,
                'locale' => 'pt_BR',
            ),
            474 => 
            array (
                'country_state_id' => 253,
                'default_name' => 'Saône-et-Loire',
                'id' => 1975,
                'locale' => 'pt_BR',
            ),
            475 => 
            array (
                'country_state_id' => 25,
                'default_name' => 'Sarthe',
                'id' => 1976,
                'locale' => 'pt_BR',
            ),
            476 => 
            array (
                'country_state_id' => 255,
                'default_name' => 'Savoie',
                'id' => 1977,
                'locale' => 'pt_BR',
            ),
            477 => 
            array (
                'country_state_id' => 256,
                'default_name' => 'Alta Sabóia',
                'id' => 1978,
                'locale' => 'pt_BR',
            ),
            478 => 
            array (
                'country_state_id' => 257,
                'default_name' => 'Paris',
                'id' => 1979,
                'locale' => 'pt_BR',
            ),
            479 => 
            array (
                'country_state_id' => 258,
                'default_name' => 'Seine-Maritime',
                'id' => 1980,
                'locale' => 'pt_BR',
            ),
            480 => 
            array (
                'country_state_id' => 259,
                'default_name' => 'Seine-et-Marne',
                'id' => 1981,
                'locale' => 'pt_BR',
            ),
            481 => 
            array (
                'country_state_id' => 260,
                'default_name' => 'Yvelines',
                'id' => 1982,
                'locale' => 'pt_BR',
            ),
            482 => 
            array (
                'country_state_id' => 261,
                'default_name' => 'Deux-Sèvres',
                'id' => 1983,
                'locale' => 'pt_BR',
            ),
            483 => 
            array (
                'country_state_id' => 262,
                'default_name' => 'Somme',
                'id' => 1984,
                'locale' => 'pt_BR',
            ),
            484 => 
            array (
                'country_state_id' => 263,
                'default_name' => 'Tarn',
                'id' => 1985,
                'locale' => 'pt_BR',
            ),
            485 => 
            array (
                'country_state_id' => 264,
                'default_name' => 'Tarn-et-Garonne',
                'id' => 1986,
                'locale' => 'pt_BR',
            ),
            486 => 
            array (
                'country_state_id' => 265,
                'default_name' => 'Var',
                'id' => 1987,
                'locale' => 'pt_BR',
            ),
            487 => 
            array (
                'country_state_id' => 266,
                'default_name' => 'Vaucluse',
                'id' => 1988,
                'locale' => 'pt_BR',
            ),
            488 => 
            array (
                'country_state_id' => 267,
                'default_name' => 'Compradora',
                'id' => 1989,
                'locale' => 'pt_BR',
            ),
            489 => 
            array (
                'country_state_id' => 268,
                'default_name' => 'Vienne',
                'id' => 1990,
                'locale' => 'pt_BR',
            ),
            490 => 
            array (
                'country_state_id' => 269,
                'default_name' => 'Haute-Vienne',
                'id' => 1991,
                'locale' => 'pt_BR',
            ),
            491 => 
            array (
                'country_state_id' => 270,
                'default_name' => 'Vosges',
                'id' => 1992,
                'locale' => 'pt_BR',
            ),
            492 => 
            array (
                'country_state_id' => 271,
                'default_name' => 'Yonne',
                'id' => 1993,
                'locale' => 'pt_BR',
            ),
            493 => 
            array (
                'country_state_id' => 272,
                'default_name' => 'Território de Belfort',
                'id' => 1994,
                'locale' => 'pt_BR',
            ),
            494 => 
            array (
                'country_state_id' => 273,
                'default_name' => 'Essonne',
                'id' => 1995,
                'locale' => 'pt_BR',
            ),
            495 => 
            array (
                'country_state_id' => 274,
                'default_name' => 'Altos do Sena',
                'id' => 1996,
                'locale' => 'pt_BR',
            ),
            496 => 
            array (
                'country_state_id' => 275,
                'default_name' => 'Seine-Saint-Denis',
                'id' => 1997,
                'locale' => 'pt_BR',
            ),
            497 => 
            array (
                'country_state_id' => 276,
                'default_name' => 'Val-de-Marne',
                'id' => 1998,
                'locale' => 'pt_BR',
            ),
            498 => 
            array (
                'country_state_id' => 277,
                'default_name' => 'Val-d\'Oise',
                'id' => 1999,
                'locale' => 'pt_BR',
            ),
            499 => 
            array (
                'country_state_id' => 278,
                'default_name' => 'Alba',
                'id' => 2000,
                'locale' => 'pt_BR',
            ),
        ));
        \DB::table('country_state_translations')->insert(array (
            0 => 
            array (
                'country_state_id' => 279,
                'default_name' => 'Arad',
                'id' => 2001,
                'locale' => 'pt_BR',
            ),
            1 => 
            array (
                'country_state_id' => 280,
                'default_name' => 'Arges',
                'id' => 2002,
                'locale' => 'pt_BR',
            ),
            2 => 
            array (
                'country_state_id' => 281,
                'default_name' => 'Bacau',
                'id' => 2003,
                'locale' => 'pt_BR',
            ),
            3 => 
            array (
                'country_state_id' => 282,
                'default_name' => 'Bihor',
                'id' => 2004,
                'locale' => 'pt_BR',
            ),
            4 => 
            array (
                'country_state_id' => 283,
                'default_name' => 'Bistrita-Nasaud',
                'id' => 2005,
                'locale' => 'pt_BR',
            ),
            5 => 
            array (
                'country_state_id' => 284,
                'default_name' => 'Botosani',
                'id' => 2006,
                'locale' => 'pt_BR',
            ),
            6 => 
            array (
                'country_state_id' => 285,
                'default_name' => 'Brașov',
                'id' => 2007,
                'locale' => 'pt_BR',
            ),
            7 => 
            array (
                'country_state_id' => 286,
                'default_name' => 'Braila',
                'id' => 2008,
                'locale' => 'pt_BR',
            ),
            8 => 
            array (
                'country_state_id' => 287,
                'default_name' => 'Bucareste',
                'id' => 2009,
                'locale' => 'pt_BR',
            ),
            9 => 
            array (
                'country_state_id' => 288,
                'default_name' => 'Buzau',
                'id' => 2010,
                'locale' => 'pt_BR',
            ),
            10 => 
            array (
                'country_state_id' => 289,
                'default_name' => 'Caras-Severin',
                'id' => 2011,
                'locale' => 'pt_BR',
            ),
            11 => 
            array (
                'country_state_id' => 290,
                'default_name' => 'Călărași',
                'id' => 2012,
                'locale' => 'pt_BR',
            ),
            12 => 
            array (
                'country_state_id' => 291,
                'default_name' => 'Cluj',
                'id' => 2013,
                'locale' => 'pt_BR',
            ),
            13 => 
            array (
                'country_state_id' => 292,
                'default_name' => 'Constanta',
                'id' => 2014,
                'locale' => 'pt_BR',
            ),
            14 => 
            array (
                'country_state_id' => 29,
                'default_name' => 'Covasna',
                'id' => 2015,
                'locale' => 'pt_BR',
            ),
            15 => 
            array (
                'country_state_id' => 294,
                'default_name' => 'Dambovita',
                'id' => 2016,
                'locale' => 'pt_BR',
            ),
            16 => 
            array (
                'country_state_id' => 295,
                'default_name' => 'Dolj',
                'id' => 2017,
                'locale' => 'pt_BR',
            ),
            17 => 
            array (
                'country_state_id' => 296,
                'default_name' => 'Galati',
                'id' => 2018,
                'locale' => 'pt_BR',
            ),
            18 => 
            array (
                'country_state_id' => 297,
                'default_name' => 'Giurgiu',
                'id' => 2019,
                'locale' => 'pt_BR',
            ),
            19 => 
            array (
                'country_state_id' => 298,
                'default_name' => 'Gorj',
                'id' => 2020,
                'locale' => 'pt_BR',
            ),
            20 => 
            array (
                'country_state_id' => 299,
                'default_name' => 'Harghita',
                'id' => 2021,
                'locale' => 'pt_BR',
            ),
            21 => 
            array (
                'country_state_id' => 300,
                'default_name' => 'Hunedoara',
                'id' => 2022,
                'locale' => 'pt_BR',
            ),
            22 => 
            array (
                'country_state_id' => 301,
                'default_name' => 'Ialomita',
                'id' => 2023,
                'locale' => 'pt_BR',
            ),
            23 => 
            array (
                'country_state_id' => 302,
                'default_name' => 'Iasi',
                'id' => 2024,
                'locale' => 'pt_BR',
            ),
            24 => 
            array (
                'country_state_id' => 303,
                'default_name' => 'Ilfov',
                'id' => 2025,
                'locale' => 'pt_BR',
            ),
            25 => 
            array (
                'country_state_id' => 304,
                'default_name' => 'Maramures',
                'id' => 2026,
                'locale' => 'pt_BR',
            ),
            26 => 
            array (
                'country_state_id' => 305,
                'default_name' => 'Maramures',
                'id' => 2027,
                'locale' => 'pt_BR',
            ),
            27 => 
            array (
                'country_state_id' => 306,
                'default_name' => 'Mures',
                'id' => 2028,
                'locale' => 'pt_BR',
            ),
            28 => 
            array (
                'country_state_id' => 307,
                'default_name' => 'alemão',
                'id' => 2029,
                'locale' => 'pt_BR',
            ),
            29 => 
            array (
                'country_state_id' => 308,
                'default_name' => 'Olt',
                'id' => 2030,
                'locale' => 'pt_BR',
            ),
            30 => 
            array (
                'country_state_id' => 309,
                'default_name' => 'Prahova',
                'id' => 2031,
                'locale' => 'pt_BR',
            ),
            31 => 
            array (
                'country_state_id' => 310,
                'default_name' => 'Satu-Mare',
                'id' => 2032,
                'locale' => 'pt_BR',
            ),
            32 => 
            array (
                'country_state_id' => 311,
                'default_name' => 'Salaj',
                'id' => 2033,
                'locale' => 'pt_BR',
            ),
            33 => 
            array (
                'country_state_id' => 312,
                'default_name' => 'Sibiu',
                'id' => 2034,
                'locale' => 'pt_BR',
            ),
            34 => 
            array (
                'country_state_id' => 313,
                'default_name' => 'Suceava',
                'id' => 2035,
                'locale' => 'pt_BR',
            ),
            35 => 
            array (
                'country_state_id' => 314,
                'default_name' => 'Teleorman',
                'id' => 2036,
                'locale' => 'pt_BR',
            ),
            36 => 
            array (
                'country_state_id' => 315,
                'default_name' => 'Timis',
                'id' => 2037,
                'locale' => 'pt_BR',
            ),
            37 => 
            array (
                'country_state_id' => 316,
                'default_name' => 'Tulcea',
                'id' => 2038,
                'locale' => 'pt_BR',
            ),
            38 => 
            array (
                'country_state_id' => 317,
                'default_name' => 'Vaslui',
                'id' => 2039,
                'locale' => 'pt_BR',
            ),
            39 => 
            array (
                'country_state_id' => 318,
                'default_name' => 'dale',
                'id' => 2040,
                'locale' => 'pt_BR',
            ),
            40 => 
            array (
                'country_state_id' => 319,
                'default_name' => 'Vrancea',
                'id' => 2041,
                'locale' => 'pt_BR',
            ),
            41 => 
            array (
                'country_state_id' => 320,
                'default_name' => 'Lappi',
                'id' => 2042,
                'locale' => 'pt_BR',
            ),
            42 => 
            array (
                'country_state_id' => 321,
                'default_name' => 'Pohjois-Pohjanmaa',
                'id' => 2043,
                'locale' => 'pt_BR',
            ),
            43 => 
            array (
                'country_state_id' => 322,
                'default_name' => 'Kainuu',
                'id' => 2044,
                'locale' => 'pt_BR',
            ),
            44 => 
            array (
                'country_state_id' => 323,
                'default_name' => 'Pohjois-Karjala',
                'id' => 2045,
                'locale' => 'pt_BR',
            ),
            45 => 
            array (
                'country_state_id' => 324,
                'default_name' => 'Pohjois-Savo',
                'id' => 2046,
                'locale' => 'pt_BR',
            ),
            46 => 
            array (
                'country_state_id' => 325,
                'default_name' => 'Sul Savo',
                'id' => 2047,
                'locale' => 'pt_BR',
            ),
            47 => 
            array (
                'country_state_id' => 326,
                'default_name' => 'Ostrobothnia do sul',
                'id' => 2048,
                'locale' => 'pt_BR',
            ),
            48 => 
            array (
                'country_state_id' => 327,
                'default_name' => 'Pohjanmaa',
                'id' => 2049,
                'locale' => 'pt_BR',
            ),
            49 => 
            array (
                'country_state_id' => 328,
                'default_name' => 'Pirkanmaa',
                'id' => 2050,
                'locale' => 'pt_BR',
            ),
            50 => 
            array (
                'country_state_id' => 329,
                'default_name' => 'Satakunta',
                'id' => 2051,
                'locale' => 'pt_BR',
            ),
            51 => 
            array (
                'country_state_id' => 330,
                'default_name' => 'Keski-Pohjanmaa',
                'id' => 2052,
                'locale' => 'pt_BR',
            ),
            52 => 
            array (
                'country_state_id' => 331,
                'default_name' => 'Keski-Suomi',
                'id' => 2053,
                'locale' => 'pt_BR',
            ),
            53 => 
            array (
                'country_state_id' => 332,
                'default_name' => 'Varsinais-Suomi',
                'id' => 2054,
                'locale' => 'pt_BR',
            ),
            54 => 
            array (
                'country_state_id' => 333,
                'default_name' => 'Carélia do Sul',
                'id' => 2055,
                'locale' => 'pt_BR',
            ),
            55 => 
            array (
                'country_state_id' => 334,
                'default_name' => 'Päijät-Häme',
                'id' => 2056,
                'locale' => 'pt_BR',
            ),
            56 => 
            array (
                'country_state_id' => 335,
                'default_name' => 'Kanta-Häme',
                'id' => 2057,
                'locale' => 'pt_BR',
            ),
            57 => 
            array (
                'country_state_id' => 336,
                'default_name' => 'Uusimaa',
                'id' => 2058,
                'locale' => 'pt_BR',
            ),
            58 => 
            array (
                'country_state_id' => 337,
                'default_name' => 'Uusimaa',
                'id' => 2059,
                'locale' => 'pt_BR',
            ),
            59 => 
            array (
                'country_state_id' => 338,
                'default_name' => 'Kymenlaakso',
                'id' => 2060,
                'locale' => 'pt_BR',
            ),
            60 => 
            array (
                'country_state_id' => 339,
                'default_name' => 'Ahvenanmaa',
                'id' => 2061,
                'locale' => 'pt_BR',
            ),
            61 => 
            array (
                'country_state_id' => 340,
                'default_name' => 'Harjumaa',
                'id' => 2062,
                'locale' => 'pt_BR',
            ),
            62 => 
            array (
                'country_state_id' => 341,
                'default_name' => 'Hiiumaa',
                'id' => 2063,
                'locale' => 'pt_BR',
            ),
            63 => 
            array (
                'country_state_id' => 342,
                'default_name' => 'Ida-Virumaa',
                'id' => 2064,
                'locale' => 'pt_BR',
            ),
            64 => 
            array (
                'country_state_id' => 343,
                'default_name' => 'Condado de Jõgeva',
                'id' => 2065,
                'locale' => 'pt_BR',
            ),
            65 => 
            array (
                'country_state_id' => 344,
                'default_name' => 'Condado de Järva',
                'id' => 2066,
                'locale' => 'pt_BR',
            ),
            66 => 
            array (
                'country_state_id' => 345,
                'default_name' => 'Läänemaa',
                'id' => 2067,
                'locale' => 'pt_BR',
            ),
            67 => 
            array (
                'country_state_id' => 346,
                'default_name' => 'Condado de Lääne-Viru',
                'id' => 2068,
                'locale' => 'pt_BR',
            ),
            68 => 
            array (
                'country_state_id' => 347,
                'default_name' => 'Condado de Põlva',
                'id' => 2069,
                'locale' => 'pt_BR',
            ),
            69 => 
            array (
                'country_state_id' => 348,
                'default_name' => 'Condado de Pärnu',
                'id' => 2070,
                'locale' => 'pt_BR',
            ),
            70 => 
            array (
                'country_state_id' => 349,
                'default_name' => 'Raplamaa',
                'id' => 2071,
                'locale' => 'pt_BR',
            ),
            71 => 
            array (
                'country_state_id' => 350,
                'default_name' => 'Saaremaa',
                'id' => 2072,
                'locale' => 'pt_BR',
            ),
            72 => 
            array (
                'country_state_id' => 351,
                'default_name' => 'Tartumaa',
                'id' => 2073,
                'locale' => 'pt_BR',
            ),
            73 => 
            array (
                'country_state_id' => 352,
                'default_name' => 'Valgamaa',
                'id' => 2074,
                'locale' => 'pt_BR',
            ),
            74 => 
            array (
                'country_state_id' => 353,
                'default_name' => 'Viljandimaa',
                'id' => 2075,
                'locale' => 'pt_BR',
            ),
            75 => 
            array (
                'country_state_id' => 354,
                'default_name' => 'Võrumaa',
                'id' => 2076,
                'locale' => 'pt_BR',
            ),
            76 => 
            array (
                'country_state_id' => 355,
                'default_name' => 'Daugavpils',
                'id' => 2077,
                'locale' => 'pt_BR',
            ),
            77 => 
            array (
                'country_state_id' => 356,
                'default_name' => 'Jelgava',
                'id' => 2078,
                'locale' => 'pt_BR',
            ),
            78 => 
            array (
                'country_state_id' => 357,
                'default_name' => 'Jekabpils',
                'id' => 2079,
                'locale' => 'pt_BR',
            ),
            79 => 
            array (
                'country_state_id' => 358,
                'default_name' => 'Jurmala',
                'id' => 2080,
                'locale' => 'pt_BR',
            ),
            80 => 
            array (
                'country_state_id' => 359,
                'default_name' => 'Liepaja',
                'id' => 2081,
                'locale' => 'pt_BR',
            ),
            81 => 
            array (
                'country_state_id' => 360,
                'default_name' => 'Liepaja County',
                'id' => 2082,
                'locale' => 'pt_BR',
            ),
            82 => 
            array (
                'country_state_id' => 361,
                'default_name' => 'Rezekne',
                'id' => 2083,
                'locale' => 'pt_BR',
            ),
            83 => 
            array (
                'country_state_id' => 362,
                'default_name' => 'Riga',
                'id' => 2084,
                'locale' => 'pt_BR',
            ),
            84 => 
            array (
                'country_state_id' => 363,
                'default_name' => 'Condado de Riga',
                'id' => 2085,
                'locale' => 'pt_BR',
            ),
            85 => 
            array (
                'country_state_id' => 364,
                'default_name' => 'Valmiera',
                'id' => 2086,
                'locale' => 'pt_BR',
            ),
            86 => 
            array (
                'country_state_id' => 365,
                'default_name' => 'Ventspils',
                'id' => 2087,
                'locale' => 'pt_BR',
            ),
            87 => 
            array (
                'country_state_id' => 366,
                'default_name' => 'Aglonas novads',
                'id' => 2088,
                'locale' => 'pt_BR',
            ),
            88 => 
            array (
                'country_state_id' => 367,
                'default_name' => 'Aizkraukles novads',
                'id' => 2089,
                'locale' => 'pt_BR',
            ),
            89 => 
            array (
                'country_state_id' => 368,
                'default_name' => 'Aizputes novads',
                'id' => 2090,
                'locale' => 'pt_BR',
            ),
            90 => 
            array (
                'country_state_id' => 369,
                'default_name' => 'Condado de Akniste',
                'id' => 2091,
                'locale' => 'pt_BR',
            ),
            91 => 
            array (
                'country_state_id' => 370,
                'default_name' => 'Alojas novads',
                'id' => 2092,
                'locale' => 'pt_BR',
            ),
            92 => 
            array (
                'country_state_id' => 371,
                'default_name' => 'Alsungas novads',
                'id' => 2093,
                'locale' => 'pt_BR',
            ),
            93 => 
            array (
                'country_state_id' => 372,
                'default_name' => 'Aluksne County',
                'id' => 2094,
                'locale' => 'pt_BR',
            ),
            94 => 
            array (
                'country_state_id' => 373,
                'default_name' => 'Amatas novads',
                'id' => 2095,
                'locale' => 'pt_BR',
            ),
            95 => 
            array (
                'country_state_id' => 374,
                'default_name' => 'Macacos novads',
                'id' => 2096,
                'locale' => 'pt_BR',
            ),
            96 => 
            array (
                'country_state_id' => 375,
                'default_name' => 'Auces novads',
                'id' => 2097,
                'locale' => 'pt_BR',
            ),
            97 => 
            array (
                'country_state_id' => 376,
                'default_name' => 'Babītes novads',
                'id' => 2098,
                'locale' => 'pt_BR',
            ),
            98 => 
            array (
                'country_state_id' => 377,
                'default_name' => 'Baldones novads',
                'id' => 2099,
                'locale' => 'pt_BR',
            ),
            99 => 
            array (
                'country_state_id' => 378,
                'default_name' => 'Baltinavas novads',
                'id' => 2100,
                'locale' => 'pt_BR',
            ),
            100 => 
            array (
                'country_state_id' => 379,
                'default_name' => 'Balvu novads',
                'id' => 2101,
                'locale' => 'pt_BR',
            ),
            101 => 
            array (
                'country_state_id' => 380,
                'default_name' => 'Bauskas novads',
                'id' => 2102,
                'locale' => 'pt_BR',
            ),
            102 => 
            array (
                'country_state_id' => 381,
                'default_name' => 'Condado de Beverina',
                'id' => 2103,
                'locale' => 'pt_BR',
            ),
            103 => 
            array (
                'country_state_id' => 382,
                'default_name' => 'Condado de Broceni',
                'id' => 2104,
                'locale' => 'pt_BR',
            ),
            104 => 
            array (
                'country_state_id' => 383,
                'default_name' => 'Burtnieku novads',
                'id' => 2105,
                'locale' => 'pt_BR',
            ),
            105 => 
            array (
                'country_state_id' => 384,
                'default_name' => 'Carnikavas novads',
                'id' => 2106,
                'locale' => 'pt_BR',
            ),
            106 => 
            array (
                'country_state_id' => 385,
                'default_name' => 'Cesvaines novads',
                'id' => 2107,
                'locale' => 'pt_BR',
            ),
            107 => 
            array (
                'country_state_id' => 386,
                'default_name' => 'Ciblas novads',
                'id' => 2108,
                'locale' => 'pt_BR',
            ),
            108 => 
            array (
                'country_state_id' => 387,
                'default_name' => 'Cesis county',
                'id' => 2109,
                'locale' => 'pt_BR',
            ),
            109 => 
            array (
                'country_state_id' => 388,
                'default_name' => 'Dagdas novads',
                'id' => 2110,
                'locale' => 'pt_BR',
            ),
            110 => 
            array (
                'country_state_id' => 389,
                'default_name' => 'Daugavpils novads',
                'id' => 2111,
                'locale' => 'pt_BR',
            ),
            111 => 
            array (
                'country_state_id' => 390,
                'default_name' => 'Dobeles novads',
                'id' => 2112,
                'locale' => 'pt_BR',
            ),
            112 => 
            array (
                'country_state_id' => 391,
                'default_name' => 'Dundagas novads',
                'id' => 2113,
                'locale' => 'pt_BR',
            ),
            113 => 
            array (
                'country_state_id' => 392,
                'default_name' => 'Durbes novads',
                'id' => 2114,
                'locale' => 'pt_BR',
            ),
            114 => 
            array (
                'country_state_id' => 393,
                'default_name' => 'Engad novads',
                'id' => 2115,
                'locale' => 'pt_BR',
            ),
            115 => 
            array (
                'country_state_id' => 394,
                'default_name' => 'Garkalnes novads',
                'id' => 2116,
                'locale' => 'pt_BR',
            ),
            116 => 
            array (
                'country_state_id' => 395,
                'default_name' => 'O condado de Grobiņa',
                'id' => 2117,
                'locale' => 'pt_BR',
            ),
            117 => 
            array (
                'country_state_id' => 396,
                'default_name' => 'Gulbenes novads',
                'id' => 2118,
                'locale' => 'pt_BR',
            ),
            118 => 
            array (
                'country_state_id' => 397,
                'default_name' => 'Iecavas novads',
                'id' => 2119,
                'locale' => 'pt_BR',
            ),
            119 => 
            array (
                'country_state_id' => 398,
                'default_name' => 'Ikskile county',
                'id' => 2120,
                'locale' => 'pt_BR',
            ),
            120 => 
            array (
                'country_state_id' => 399,
                'default_name' => 'Ilūkste county',
                'id' => 2121,
                'locale' => 'pt_BR',
            ),
            121 => 
            array (
                'country_state_id' => 400,
                'default_name' => 'Condado de Inčukalns',
                'id' => 2122,
                'locale' => 'pt_BR',
            ),
            122 => 
            array (
                'country_state_id' => 401,
                'default_name' => 'Jaunjelgavas novads',
                'id' => 2123,
                'locale' => 'pt_BR',
            ),
            123 => 
            array (
                'country_state_id' => 402,
                'default_name' => 'Jaunpiebalgas novads',
                'id' => 2124,
                'locale' => 'pt_BR',
            ),
            124 => 
            array (
                'country_state_id' => 403,
                'default_name' => 'Jaunpils novads',
                'id' => 2125,
                'locale' => 'pt_BR',
            ),
            125 => 
            array (
                'country_state_id' => 404,
                'default_name' => 'Jelgavas novads',
                'id' => 2126,
                'locale' => 'pt_BR',
            ),
            126 => 
            array (
                'country_state_id' => 405,
                'default_name' => 'Jekabpils county',
                'id' => 2127,
                'locale' => 'pt_BR',
            ),
            127 => 
            array (
                'country_state_id' => 406,
                'default_name' => 'Kandavas novads',
                'id' => 2128,
                'locale' => 'pt_BR',
            ),
            128 => 
            array (
                'country_state_id' => 407,
                'default_name' => 'Kokneses novads',
                'id' => 2129,
                'locale' => 'pt_BR',
            ),
            129 => 
            array (
                'country_state_id' => 408,
                'default_name' => 'Krimuldas novads',
                'id' => 2130,
                'locale' => 'pt_BR',
            ),
            130 => 
            array (
                'country_state_id' => 409,
                'default_name' => 'Krustpils novads',
                'id' => 2131,
                'locale' => 'pt_BR',
            ),
            131 => 
            array (
                'country_state_id' => 410,
                'default_name' => 'Condado de Kraslava',
                'id' => 2132,
                'locale' => 'pt_BR',
            ),
            132 => 
            array (
                'country_state_id' => 411,
                'default_name' => 'Condado de Kuldīga',
                'id' => 2133,
                'locale' => 'pt_BR',
            ),
            133 => 
            array (
                'country_state_id' => 412,
                'default_name' => 'Condado de Kārsava',
                'id' => 2134,
                'locale' => 'pt_BR',
            ),
            134 => 
            array (
                'country_state_id' => 413,
                'default_name' => 'Condado de Lielvarde',
                'id' => 2135,
                'locale' => 'pt_BR',
            ),
            135 => 
            array (
                'country_state_id' => 414,
                'default_name' => 'Condado de Limbaži',
                'id' => 2136,
                'locale' => 'pt_BR',
            ),
            136 => 
            array (
                'country_state_id' => 415,
                'default_name' => 'O distrito de Lubāna',
                'id' => 2137,
                'locale' => 'pt_BR',
            ),
            137 => 
            array (
                'country_state_id' => 416,
                'default_name' => 'Ludzas novads',
                'id' => 2138,
                'locale' => 'pt_BR',
            ),
            138 => 
            array (
                'country_state_id' => 417,
                'default_name' => 'Ligatne county',
                'id' => 2139,
                'locale' => 'pt_BR',
            ),
            139 => 
            array (
                'country_state_id' => 418,
                'default_name' => 'Livani county',
                'id' => 2140,
                'locale' => 'pt_BR',
            ),
            140 => 
            array (
                'country_state_id' => 419,
                'default_name' => 'Madonas novads',
                'id' => 2141,
                'locale' => 'pt_BR',
            ),
            141 => 
            array (
                'country_state_id' => 420,
                'default_name' => 'Mazsalacas novads',
                'id' => 2142,
                'locale' => 'pt_BR',
            ),
            142 => 
            array (
                'country_state_id' => 421,
                'default_name' => 'Mālpils county',
                'id' => 2143,
                'locale' => 'pt_BR',
            ),
            143 => 
            array (
                'country_state_id' => 422,
                'default_name' => 'Mārupe county',
                'id' => 2144,
                'locale' => 'pt_BR',
            ),
            144 => 
            array (
                'country_state_id' => 423,
                'default_name' => 'O condado de Naukšēni',
                'id' => 2145,
                'locale' => 'pt_BR',
            ),
            145 => 
            array (
                'country_state_id' => 424,
                'default_name' => 'Neretas novads',
                'id' => 2146,
                'locale' => 'pt_BR',
            ),
            146 => 
            array (
                'country_state_id' => 425,
                'default_name' => 'Nīca county',
                'id' => 2147,
                'locale' => 'pt_BR',
            ),
            147 => 
            array (
                'country_state_id' => 426,
                'default_name' => 'Ogres novads',
                'id' => 2148,
                'locale' => 'pt_BR',
            ),
            148 => 
            array (
                'country_state_id' => 427,
                'default_name' => 'Olaines novads',
                'id' => 2149,
                'locale' => 'pt_BR',
            ),
            149 => 
            array (
                'country_state_id' => 428,
                'default_name' => 'Ozolnieku novads',
                'id' => 2150,
                'locale' => 'pt_BR',
            ),
            150 => 
            array (
                'country_state_id' => 429,
                'default_name' => 'Preiļi county',
                'id' => 2151,
                'locale' => 'pt_BR',
            ),
            151 => 
            array (
                'country_state_id' => 430,
                'default_name' => 'Priekules novads',
                'id' => 2152,
                'locale' => 'pt_BR',
            ),
            152 => 
            array (
                'country_state_id' => 431,
                'default_name' => 'Condado de Priekuļi',
                'id' => 2153,
                'locale' => 'pt_BR',
            ),
            153 => 
            array (
                'country_state_id' => 432,
                'default_name' => 'Moving county',
                'id' => 2154,
                'locale' => 'pt_BR',
            ),
            154 => 
            array (
                'country_state_id' => 433,
                'default_name' => 'Condado de Pavilosta',
                'id' => 2155,
                'locale' => 'pt_BR',
            ),
            155 => 
            array (
                'country_state_id' => 434,
                'default_name' => 'Condado de Plavinas',
                'id' => 2156,
                'locale' => 'pt_BR',
            ),
            156 => 
            array (
                'country_state_id' => 435,
                'default_name' => 'Raunas novads',
                'id' => 2157,
                'locale' => 'pt_BR',
            ),
            157 => 
            array (
                'country_state_id' => 436,
                'default_name' => 'Condado de Riebiņi',
                'id' => 2158,
                'locale' => 'pt_BR',
            ),
            158 => 
            array (
                'country_state_id' => 437,
                'default_name' => 'Rojas novads',
                'id' => 2159,
                'locale' => 'pt_BR',
            ),
            159 => 
            array (
                'country_state_id' => 438,
                'default_name' => 'Ropazi county',
                'id' => 2160,
                'locale' => 'pt_BR',
            ),
            160 => 
            array (
                'country_state_id' => 439,
                'default_name' => 'Rucavas novads',
                'id' => 2161,
                'locale' => 'pt_BR',
            ),
            161 => 
            array (
                'country_state_id' => 440,
                'default_name' => 'Rugāji county',
                'id' => 2162,
                'locale' => 'pt_BR',
            ),
            162 => 
            array (
                'country_state_id' => 441,
                'default_name' => 'Rundāle county',
                'id' => 2163,
                'locale' => 'pt_BR',
            ),
            163 => 
            array (
                'country_state_id' => 442,
                'default_name' => 'Rezekne county',
                'id' => 2164,
                'locale' => 'pt_BR',
            ),
            164 => 
            array (
                'country_state_id' => 443,
                'default_name' => 'Rūjiena county',
                'id' => 2165,
                'locale' => 'pt_BR',
            ),
            165 => 
            array (
                'country_state_id' => 444,
                'default_name' => 'O município de Salacgriva',
                'id' => 2166,
                'locale' => 'pt_BR',
            ),
            166 => 
            array (
                'country_state_id' => 445,
                'default_name' => 'Salas novads',
                'id' => 2167,
                'locale' => 'pt_BR',
            ),
            167 => 
            array (
                'country_state_id' => 446,
                'default_name' => 'Salaspils novads',
                'id' => 2168,
                'locale' => 'pt_BR',
            ),
            168 => 
            array (
                'country_state_id' => 447,
                'default_name' => 'Saldus novads',
                'id' => 2169,
                'locale' => 'pt_BR',
            ),
            169 => 
            array (
                'country_state_id' => 448,
                'default_name' => 'Saulkrastu novads',
                'id' => 2170,
                'locale' => 'pt_BR',
            ),
            170 => 
            array (
                'country_state_id' => 449,
                'default_name' => 'Siguldas novads',
                'id' => 2171,
                'locale' => 'pt_BR',
            ),
            171 => 
            array (
                'country_state_id' => 450,
                'default_name' => 'Skrundas novads',
                'id' => 2172,
                'locale' => 'pt_BR',
            ),
            172 => 
            array (
                'country_state_id' => 451,
                'default_name' => 'Skrīveri county',
                'id' => 2173,
                'locale' => 'pt_BR',
            ),
            173 => 
            array (
                'country_state_id' => 452,
                'default_name' => 'Smiltenes novads',
                'id' => 2174,
                'locale' => 'pt_BR',
            ),
            174 => 
            array (
                'country_state_id' => 453,
                'default_name' => 'Condado de Stopini',
                'id' => 2175,
                'locale' => 'pt_BR',
            ),
            175 => 
            array (
                'country_state_id' => 454,
                'default_name' => 'Condado de Strenči',
                'id' => 2176,
                'locale' => 'pt_BR',
            ),
            176 => 
            array (
                'country_state_id' => 455,
                'default_name' => 'Região de semeadura',
                'id' => 2177,
                'locale' => 'pt_BR',
            ),
            177 => 
            array (
                'country_state_id' => 456,
                'default_name' => 'Talsu novads',
                'id' => 2178,
                'locale' => 'pt_BR',
            ),
            178 => 
            array (
                'country_state_id' => 457,
                'default_name' => 'Tukuma novads',
                'id' => 2179,
                'locale' => 'pt_BR',
            ),
            179 => 
            array (
                'country_state_id' => 458,
                'default_name' => 'Condado de Tērvete',
                'id' => 2180,
                'locale' => 'pt_BR',
            ),
            180 => 
            array (
                'country_state_id' => 459,
                'default_name' => 'O condado de Vaiņode',
                'id' => 2181,
                'locale' => 'pt_BR',
            ),
            181 => 
            array (
                'country_state_id' => 460,
                'default_name' => 'Valkas novads',
                'id' => 2182,
                'locale' => 'pt_BR',
            ),
            182 => 
            array (
                'country_state_id' => 461,
                'default_name' => 'Valmieras novads',
                'id' => 2183,
                'locale' => 'pt_BR',
            ),
            183 => 
            array (
                'country_state_id' => 462,
                'default_name' => 'Varaklani county',
                'id' => 2184,
                'locale' => 'pt_BR',
            ),
            184 => 
            array (
                'country_state_id' => 463,
                'default_name' => 'Vecpiebalgas novads',
                'id' => 2185,
                'locale' => 'pt_BR',
            ),
            185 => 
            array (
                'country_state_id' => 464,
                'default_name' => 'Vecumnieku novads',
                'id' => 2186,
                'locale' => 'pt_BR',
            ),
            186 => 
            array (
                'country_state_id' => 465,
                'default_name' => 'Ventspils novads',
                'id' => 2187,
                'locale' => 'pt_BR',
            ),
            187 => 
            array (
                'country_state_id' => 466,
                'default_name' => 'Condado de Viesite',
                'id' => 2188,
                'locale' => 'pt_BR',
            ),
            188 => 
            array (
                'country_state_id' => 467,
                'default_name' => 'Condado de Vilaka',
                'id' => 2189,
                'locale' => 'pt_BR',
            ),
            189 => 
            array (
                'country_state_id' => 468,
                'default_name' => 'Vilani county',
                'id' => 2190,
                'locale' => 'pt_BR',
            ),
            190 => 
            array (
                'country_state_id' => 469,
                'default_name' => 'Condado de Varkava',
                'id' => 2191,
                'locale' => 'pt_BR',
            ),
            191 => 
            array (
                'country_state_id' => 470,
                'default_name' => 'Zilupes novads',
                'id' => 2192,
                'locale' => 'pt_BR',
            ),
            192 => 
            array (
                'country_state_id' => 471,
                'default_name' => 'Adazi county',
                'id' => 2193,
                'locale' => 'pt_BR',
            ),
            193 => 
            array (
                'country_state_id' => 472,
                'default_name' => 'Erglu county',
                'id' => 2194,
                'locale' => 'pt_BR',
            ),
            194 => 
            array (
                'country_state_id' => 473,
                'default_name' => 'Kegums county',
                'id' => 2195,
                'locale' => 'pt_BR',
            ),
            195 => 
            array (
                'country_state_id' => 474,
                'default_name' => 'Kekava county',
                'id' => 2196,
                'locale' => 'pt_BR',
            ),
            196 => 
            array (
                'country_state_id' => 475,
                'default_name' => 'Alytaus Apskritis',
                'id' => 2197,
                'locale' => 'pt_BR',
            ),
            197 => 
            array (
                'country_state_id' => 476,
                'default_name' => 'Kauno Apskritis',
                'id' => 2198,
                'locale' => 'pt_BR',
            ),
            198 => 
            array (
                'country_state_id' => 477,
                'default_name' => 'Condado de Klaipeda',
                'id' => 2199,
                'locale' => 'pt_BR',
            ),
            199 => 
            array (
                'country_state_id' => 478,
                'default_name' => 'Marijampolė county',
                'id' => 2200,
                'locale' => 'pt_BR',
            ),
            200 => 
            array (
                'country_state_id' => 479,
                'default_name' => 'Panevezys county',
                'id' => 2201,
                'locale' => 'pt_BR',
            ),
            201 => 
            array (
                'country_state_id' => 480,
                'default_name' => 'Siauliai county',
                'id' => 2202,
                'locale' => 'pt_BR',
            ),
            202 => 
            array (
                'country_state_id' => 481,
                'default_name' => 'Taurage county',
                'id' => 2203,
                'locale' => 'pt_BR',
            ),
            203 => 
            array (
                'country_state_id' => 482,
                'default_name' => 'Telšiai county',
                'id' => 2204,
                'locale' => 'pt_BR',
            ),
            204 => 
            array (
                'country_state_id' => 483,
                'default_name' => 'Utenos Apskritis',
                'id' => 2205,
                'locale' => 'pt_BR',
            ),
            205 => 
            array (
                'country_state_id' => 484,
                'default_name' => 'Vilniaus Apskritis',
                'id' => 2206,
                'locale' => 'pt_BR',
            ),
            206 => 
            array (
                'country_state_id' => 485,
                'default_name' => 'Acre',
                'id' => 2207,
                'locale' => 'pt_BR',
            ),
            207 => 
            array (
                'country_state_id' => 486,
                'default_name' => 'Alagoas',
                'id' => 2208,
                'locale' => 'pt_BR',
            ),
            208 => 
            array (
                'country_state_id' => 487,
                'default_name' => 'Amapá',
                'id' => 2209,
                'locale' => 'pt_BR',
            ),
            209 => 
            array (
                'country_state_id' => 488,
                'default_name' => 'Amazonas',
                'id' => 2210,
                'locale' => 'pt_BR',
            ),
            210 => 
            array (
                'country_state_id' => 489,
                'default_name' => 'Bahia',
                'id' => 2211,
                'locale' => 'pt_BR',
            ),
            211 => 
            array (
                'country_state_id' => 490,
                'default_name' => 'Ceará',
                'id' => 2212,
                'locale' => 'pt_BR',
            ),
            212 => 
            array (
                'country_state_id' => 491,
                'default_name' => 'Espírito Santo',
                'id' => 2213,
                'locale' => 'pt_BR',
            ),
            213 => 
            array (
                'country_state_id' => 492,
                'default_name' => 'Goiás',
                'id' => 2214,
                'locale' => 'pt_BR',
            ),
            214 => 
            array (
                'country_state_id' => 493,
                'default_name' => 'Maranhão',
                'id' => 2215,
                'locale' => 'pt_BR',
            ),
            215 => 
            array (
                'country_state_id' => 494,
                'default_name' => 'Mato Grosso',
                'id' => 2216,
                'locale' => 'pt_BR',
            ),
            216 => 
            array (
                'country_state_id' => 495,
                'default_name' => 'Mato Grosso do Sul',
                'id' => 2217,
                'locale' => 'pt_BR',
            ),
            217 => 
            array (
                'country_state_id' => 496,
                'default_name' => 'Minas Gerais',
                'id' => 2218,
                'locale' => 'pt_BR',
            ),
            218 => 
            array (
                'country_state_id' => 497,
                'default_name' => 'Pará',
                'id' => 2219,
                'locale' => 'pt_BR',
            ),
            219 => 
            array (
                'country_state_id' => 498,
                'default_name' => 'Paraíba',
                'id' => 2220,
                'locale' => 'pt_BR',
            ),
            220 => 
            array (
                'country_state_id' => 499,
                'default_name' => 'Paraná',
                'id' => 2221,
                'locale' => 'pt_BR',
            ),
            221 => 
            array (
                'country_state_id' => 500,
                'default_name' => 'Pernambuco',
                'id' => 2222,
                'locale' => 'pt_BR',
            ),
            222 => 
            array (
                'country_state_id' => 501,
                'default_name' => 'Piauí',
                'id' => 2223,
                'locale' => 'pt_BR',
            ),
            223 => 
            array (
                'country_state_id' => 502,
                'default_name' => 'Rio de Janeiro',
                'id' => 2224,
                'locale' => 'pt_BR',
            ),
            224 => 
            array (
                'country_state_id' => 503,
                'default_name' => 'Rio Grande do Norte',
                'id' => 2225,
                'locale' => 'pt_BR',
            ),
            225 => 
            array (
                'country_state_id' => 504,
                'default_name' => 'Rio Grande do Sul',
                'id' => 2226,
                'locale' => 'pt_BR',
            ),
            226 => 
            array (
                'country_state_id' => 505,
                'default_name' => 'Rondônia',
                'id' => 2227,
                'locale' => 'pt_BR',
            ),
            227 => 
            array (
                'country_state_id' => 506,
                'default_name' => 'Roraima',
                'id' => 2228,
                'locale' => 'pt_BR',
            ),
            228 => 
            array (
                'country_state_id' => 507,
                'default_name' => 'Santa Catarina',
                'id' => 2229,
                'locale' => 'pt_BR',
            ),
            229 => 
            array (
                'country_state_id' => 508,
                'default_name' => 'São Paulo',
                'id' => 2230,
                'locale' => 'pt_BR',
            ),
            230 => 
            array (
                'country_state_id' => 509,
                'default_name' => 'Sergipe',
                'id' => 2231,
                'locale' => 'pt_BR',
            ),
            231 => 
            array (
                'country_state_id' => 510,
                'default_name' => 'Tocantins',
                'id' => 2232,
                'locale' => 'pt_BR',
            ),
            232 => 
            array (
                'country_state_id' => 511,
                'default_name' => 'Distrito Federal',
                'id' => 2233,
                'locale' => 'pt_BR',
            ),
            233 => 
            array (
                'country_state_id' => 512,
                'default_name' => 'Condado de Zagreb',
                'id' => 2234,
                'locale' => 'pt_BR',
            ),
            234 => 
            array (
                'country_state_id' => 513,
                'default_name' => 'Condado de Krapina-Zagorje',
                'id' => 2235,
                'locale' => 'pt_BR',
            ),
            235 => 
            array (
                'country_state_id' => 514,
                'default_name' => 'Condado de Sisak-Moslavina',
                'id' => 2236,
                'locale' => 'pt_BR',
            ),
            236 => 
            array (
                'country_state_id' => 515,
                'default_name' => 'Condado de Karlovac',
                'id' => 2237,
                'locale' => 'pt_BR',
            ),
            237 => 
            array (
                'country_state_id' => 516,
                'default_name' => 'Concelho de Varaždin',
                'id' => 2238,
                'locale' => 'pt_BR',
            ),
            238 => 
            array (
                'country_state_id' => 517,
                'default_name' => 'Condado de Koprivnica-Križevci',
                'id' => 2239,
                'locale' => 'pt_BR',
            ),
            239 => 
            array (
                'country_state_id' => 518,
                'default_name' => 'Condado de Bjelovar-Bilogora',
                'id' => 2240,
                'locale' => 'pt_BR',
            ),
            240 => 
            array (
                'country_state_id' => 519,
                'default_name' => 'Condado de Primorje-Gorski kotar',
                'id' => 2241,
                'locale' => 'pt_BR',
            ),
            241 => 
            array (
                'country_state_id' => 520,
                'default_name' => 'Condado de Lika-Senj',
                'id' => 2242,
                'locale' => 'pt_BR',
            ),
            242 => 
            array (
                'country_state_id' => 521,
                'default_name' => 'Condado de Virovitica-Podravina',
                'id' => 2243,
                'locale' => 'pt_BR',
            ),
            243 => 
            array (
                'country_state_id' => 522,
                'default_name' => 'Condado de Požega-Slavonia',
                'id' => 2244,
                'locale' => 'pt_BR',
            ),
            244 => 
            array (
                'country_state_id' => 523,
                'default_name' => 'Condado de Brod-Posavina',
                'id' => 2245,
                'locale' => 'pt_BR',
            ),
            245 => 
            array (
                'country_state_id' => 524,
                'default_name' => 'Condado de Zadar',
                'id' => 2246,
                'locale' => 'pt_BR',
            ),
            246 => 
            array (
                'country_state_id' => 525,
                'default_name' => 'Condado de Osijek-Baranja',
                'id' => 2247,
                'locale' => 'pt_BR',
            ),
            247 => 
            array (
                'country_state_id' => 526,
                'default_name' => 'Condado de Šibenik-Knin',
                'id' => 2248,
                'locale' => 'pt_BR',
            ),
            248 => 
            array (
                'country_state_id' => 527,
                'default_name' => 'Condado de Vukovar-Srijem',
                'id' => 2249,
                'locale' => 'pt_BR',
            ),
            249 => 
            array (
                'country_state_id' => 528,
                'default_name' => 'Condado de Split-Dalmácia',
                'id' => 2250,
                'locale' => 'pt_BR',
            ),
            250 => 
            array (
                'country_state_id' => 529,
                'default_name' => 'Condado de Ístria',
                'id' => 2251,
                'locale' => 'pt_BR',
            ),
            251 => 
            array (
                'country_state_id' => 530,
                'default_name' => 'Condado de Dubrovnik-Neretva',
                'id' => 2252,
                'locale' => 'pt_BR',
            ),
            252 => 
            array (
                'country_state_id' => 531,
                'default_name' => 'Međimurska županija',
                'id' => 2253,
                'locale' => 'pt_BR',
            ),
            253 => 
            array (
                'country_state_id' => 532,
                'default_name' => 'Grad Zagreb',
                'id' => 2254,
                'locale' => 'pt_BR',
            ),
            254 => 
            array (
                'country_state_id' => 533,
                'default_name' => 'Ilhas Andaman e Nicobar',
                'id' => 2255,
                'locale' => 'pt_BR',
            ),
            255 => 
            array (
                'country_state_id' => 534,
                'default_name' => 'Andhra Pradesh',
                'id' => 2256,
                'locale' => 'pt_BR',
            ),
            256 => 
            array (
                'country_state_id' => 535,
                'default_name' => 'Arunachal Pradesh',
                'id' => 2257,
                'locale' => 'pt_BR',
            ),
            257 => 
            array (
                'country_state_id' => 536,
                'default_name' => 'Assam',
                'id' => 2258,
                'locale' => 'pt_BR',
            ),
            258 => 
            array (
                'country_state_id' => 537,
                'default_name' => 'Bihar',
                'id' => 2259,
                'locale' => 'pt_BR',
            ),
            259 => 
            array (
                'country_state_id' => 538,
                'default_name' => 'Chandigarh',
                'id' => 2260,
                'locale' => 'pt_BR',
            ),
            260 => 
            array (
                'country_state_id' => 539,
                'default_name' => 'Chhattisgarh',
                'id' => 2261,
                'locale' => 'pt_BR',
            ),
            261 => 
            array (
                'country_state_id' => 540,
                'default_name' => 'Dadra e Nagar Haveli',
                'id' => 2262,
                'locale' => 'pt_BR',
            ),
            262 => 
            array (
                'country_state_id' => 541,
                'default_name' => 'Daman e Diu',
                'id' => 2263,
                'locale' => 'pt_BR',
            ),
            263 => 
            array (
                'country_state_id' => 542,
                'default_name' => 'Delhi',
                'id' => 2264,
                'locale' => 'pt_BR',
            ),
            264 => 
            array (
                'country_state_id' => 543,
                'default_name' => 'Goa',
                'id' => 2265,
                'locale' => 'pt_BR',
            ),
            265 => 
            array (
                'country_state_id' => 544,
                'default_name' => 'Gujarat',
                'id' => 2266,
                'locale' => 'pt_BR',
            ),
            266 => 
            array (
                'country_state_id' => 545,
                'default_name' => 'Haryana',
                'id' => 2267,
                'locale' => 'pt_BR',
            ),
            267 => 
            array (
                'country_state_id' => 546,
                'default_name' => 'Himachal Pradesh',
                'id' => 2268,
                'locale' => 'pt_BR',
            ),
            268 => 
            array (
                'country_state_id' => 547,
                'default_name' => 'Jammu e Caxemira',
                'id' => 2269,
                'locale' => 'pt_BR',
            ),
            269 => 
            array (
                'country_state_id' => 548,
                'default_name' => 'Jharkhand',
                'id' => 2270,
                'locale' => 'pt_BR',
            ),
            270 => 
            array (
                'country_state_id' => 549,
                'default_name' => 'Karnataka',
                'id' => 2271,
                'locale' => 'pt_BR',
            ),
            271 => 
            array (
                'country_state_id' => 550,
                'default_name' => 'Kerala',
                'id' => 2272,
                'locale' => 'pt_BR',
            ),
            272 => 
            array (
                'country_state_id' => 551,
                'default_name' => 'Lakshadweep',
                'id' => 2273,
                'locale' => 'pt_BR',
            ),
            273 => 
            array (
                'country_state_id' => 552,
                'default_name' => 'Madhya Pradesh',
                'id' => 2274,
                'locale' => 'pt_BR',
            ),
            274 => 
            array (
                'country_state_id' => 553,
                'default_name' => 'Maharashtra',
                'id' => 2275,
                'locale' => 'pt_BR',
            ),
            275 => 
            array (
                'country_state_id' => 554,
                'default_name' => 'Manipur',
                'id' => 2276,
                'locale' => 'pt_BR',
            ),
            276 => 
            array (
                'country_state_id' => 555,
                'default_name' => 'Meghalaya',
                'id' => 2277,
                'locale' => 'pt_BR',
            ),
            277 => 
            array (
                'country_state_id' => 556,
                'default_name' => 'Mizoram',
                'id' => 2278,
                'locale' => 'pt_BR',
            ),
            278 => 
            array (
                'country_state_id' => 557,
                'default_name' => 'Nagaland',
                'id' => 2279,
                'locale' => 'pt_BR',
            ),
            279 => 
            array (
                'country_state_id' => 558,
                'default_name' => 'Odisha',
                'id' => 2280,
                'locale' => 'pt_BR',
            ),
            280 => 
            array (
                'country_state_id' => 559,
                'default_name' => 'Puducherry',
                'id' => 2281,
                'locale' => 'pt_BR',
            ),
            281 => 
            array (
                'country_state_id' => 560,
                'default_name' => 'Punjab',
                'id' => 2282,
                'locale' => 'pt_BR',
            ),
            282 => 
            array (
                'country_state_id' => 561,
                'default_name' => 'Rajasthan',
                'id' => 2283,
                'locale' => 'pt_BR',
            ),
            283 => 
            array (
                'country_state_id' => 562,
                'default_name' => 'Sikkim',
                'id' => 2284,
                'locale' => 'pt_BR',
            ),
            284 => 
            array (
                'country_state_id' => 563,
                'default_name' => 'Tamil Nadu',
                'id' => 2285,
                'locale' => 'pt_BR',
            ),
            285 => 
            array (
                'country_state_id' => 564,
                'default_name' => 'Telangana',
                'id' => 2286,
                'locale' => 'pt_BR',
            ),
            286 => 
            array (
                'country_state_id' => 565,
                'default_name' => 'Tripura',
                'id' => 2287,
                'locale' => 'pt_BR',
            ),
            287 => 
            array (
                'country_state_id' => 566,
                'default_name' => 'Uttar Pradesh',
                'id' => 2288,
                'locale' => 'pt_BR',
            ),
            288 => 
            array (
                'country_state_id' => 567,
                'default_name' => 'Uttarakhand',
                'id' => 2289,
                'locale' => 'pt_BR',
            ),
            289 => 
            array (
                'country_state_id' => 568,
                'default_name' => 'Bengala Ocidental',
                'id' => 2290,
                'locale' => 'pt_BR',
            ),
        ));
        
        
    }
}