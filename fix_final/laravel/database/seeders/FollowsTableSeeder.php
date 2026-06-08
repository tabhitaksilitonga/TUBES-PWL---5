<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('follows')->delete();
        
        \DB::table('follows')->insert(array (
            0 => 
            array (
                'follower_id' => 3,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            1 => 
            array (
                'follower_id' => 3,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            2 => 
            array (
                'follower_id' => 3,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:46:13',
            ),
            3 => 
            array (
                'follower_id' => 3,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            4 => 
            array (
                'follower_id' => 3,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            5 => 
            array (
                'follower_id' => 3,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            6 => 
            array (
                'follower_id' => 3,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            7 => 
            array (
                'follower_id' => 3,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:40:29',
            ),
            8 => 
            array (
                'follower_id' => 3,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            9 => 
            array (
                'follower_id' => 3,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            10 => 
            array (
                'follower_id' => 3,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            11 => 
            array (
                'follower_id' => 3,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            12 => 
            array (
                'follower_id' => 3,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            13 => 
            array (
                'follower_id' => 3,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            14 => 
            array (
                'follower_id' => 3,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            15 => 
            array (
                'follower_id' => 3,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            16 => 
            array (
                'follower_id' => 3,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:40:29',
            ),
            17 => 
            array (
                'follower_id' => 3,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            18 => 
            array (
                'follower_id' => 3,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:46:13',
            ),
            19 => 
            array (
                'follower_id' => 5,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            20 => 
            array (
                'follower_id' => 5,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            21 => 
            array (
                'follower_id' => 5,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            22 => 
            array (
                'follower_id' => 5,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            23 => 
            array (
                'follower_id' => 5,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            24 => 
            array (
                'follower_id' => 5,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            25 => 
            array (
                'follower_id' => 5,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            26 => 
            array (
                'follower_id' => 5,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:46:13',
            ),
            27 => 
            array (
                'follower_id' => 5,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            28 => 
            array (
                'follower_id' => 5,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            29 => 
            array (
                'follower_id' => 5,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            30 => 
            array (
                'follower_id' => 5,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:40:29',
            ),
            31 => 
            array (
                'follower_id' => 5,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            32 => 
            array (
                'follower_id' => 5,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:46:13',
            ),
            33 => 
            array (
                'follower_id' => 5,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            34 => 
            array (
                'follower_id' => 5,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:40:29',
            ),
            35 => 
            array (
                'follower_id' => 5,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            36 => 
            array (
                'follower_id' => 5,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            37 => 
            array (
                'follower_id' => 5,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            38 => 
            array (
                'follower_id' => 6,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            39 => 
            array (
                'follower_id' => 6,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:46:13',
            ),
            40 => 
            array (
                'follower_id' => 6,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            41 => 
            array (
                'follower_id' => 6,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:46:13',
            ),
            42 => 
            array (
                'follower_id' => 6,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            43 => 
            array (
                'follower_id' => 6,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            44 => 
            array (
                'follower_id' => 6,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            45 => 
            array (
                'follower_id' => 6,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            46 => 
            array (
                'follower_id' => 6,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            47 => 
            array (
                'follower_id' => 6,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            48 => 
            array (
                'follower_id' => 6,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            49 => 
            array (
                'follower_id' => 6,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            50 => 
            array (
                'follower_id' => 6,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            51 => 
            array (
                'follower_id' => 6,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            52 => 
            array (
                'follower_id' => 6,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:46:13',
            ),
            53 => 
            array (
                'follower_id' => 6,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            54 => 
            array (
                'follower_id' => 6,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            55 => 
            array (
                'follower_id' => 6,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            56 => 
            array (
                'follower_id' => 6,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            57 => 
            array (
                'follower_id' => 6,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            58 => 
            array (
                'follower_id' => 7,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            59 => 
            array (
                'follower_id' => 7,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            60 => 
            array (
                'follower_id' => 7,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:46:13',
            ),
            61 => 
            array (
                'follower_id' => 7,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            62 => 
            array (
                'follower_id' => 7,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:40:29',
            ),
            63 => 
            array (
                'follower_id' => 7,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            64 => 
            array (
                'follower_id' => 7,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            65 => 
            array (
                'follower_id' => 7,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            66 => 
            array (
                'follower_id' => 7,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:40:29',
            ),
            67 => 
            array (
                'follower_id' => 7,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            68 => 
            array (
                'follower_id' => 7,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:46:13',
            ),
            69 => 
            array (
                'follower_id' => 7,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            70 => 
            array (
                'follower_id' => 7,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            71 => 
            array (
                'follower_id' => 7,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            72 => 
            array (
                'follower_id' => 7,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            73 => 
            array (
                'follower_id' => 7,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:46:13',
            ),
            74 => 
            array (
                'follower_id' => 7,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:46:13',
            ),
            75 => 
            array (
                'follower_id' => 7,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            76 => 
            array (
                'follower_id' => 7,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            77 => 
            array (
                'follower_id' => 8,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            78 => 
            array (
                'follower_id' => 8,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            79 => 
            array (
                'follower_id' => 8,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:40:29',
            ),
            80 => 
            array (
                'follower_id' => 8,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:46:13',
            ),
            81 => 
            array (
                'follower_id' => 8,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            82 => 
            array (
                'follower_id' => 8,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            83 => 
            array (
                'follower_id' => 8,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            84 => 
            array (
                'follower_id' => 8,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:40:29',
            ),
            85 => 
            array (
                'follower_id' => 8,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            86 => 
            array (
                'follower_id' => 8,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:46:13',
            ),
            87 => 
            array (
                'follower_id' => 8,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            88 => 
            array (
                'follower_id' => 8,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            89 => 
            array (
                'follower_id' => 8,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            90 => 
            array (
                'follower_id' => 8,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:46:13',
            ),
            91 => 
            array (
                'follower_id' => 8,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            92 => 
            array (
                'follower_id' => 8,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            93 => 
            array (
                'follower_id' => 8,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            94 => 
            array (
                'follower_id' => 8,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            95 => 
            array (
                'follower_id' => 8,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            96 => 
            array (
                'follower_id' => 8,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            97 => 
            array (
                'follower_id' => 9,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            98 => 
            array (
                'follower_id' => 9,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:40:29',
            ),
            99 => 
            array (
                'follower_id' => 9,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            100 => 
            array (
                'follower_id' => 9,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            101 => 
            array (
                'follower_id' => 9,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:46:13',
            ),
            102 => 
            array (
                'follower_id' => 9,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:40:29',
            ),
            103 => 
            array (
                'follower_id' => 9,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            104 => 
            array (
                'follower_id' => 9,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:40:29',
            ),
            105 => 
            array (
                'follower_id' => 9,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            106 => 
            array (
                'follower_id' => 9,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            107 => 
            array (
                'follower_id' => 9,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            108 => 
            array (
                'follower_id' => 9,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            109 => 
            array (
                'follower_id' => 9,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            110 => 
            array (
                'follower_id' => 9,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            111 => 
            array (
                'follower_id' => 9,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            112 => 
            array (
                'follower_id' => 9,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            113 => 
            array (
                'follower_id' => 9,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            114 => 
            array (
                'follower_id' => 9,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            115 => 
            array (
                'follower_id' => 9,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            116 => 
            array (
                'follower_id' => 10,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            117 => 
            array (
                'follower_id' => 10,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            118 => 
            array (
                'follower_id' => 10,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            119 => 
            array (
                'follower_id' => 10,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            120 => 
            array (
                'follower_id' => 10,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:40:29',
            ),
            121 => 
            array (
                'follower_id' => 10,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:40:29',
            ),
            122 => 
            array (
                'follower_id' => 10,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            123 => 
            array (
                'follower_id' => 10,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            124 => 
            array (
                'follower_id' => 10,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            125 => 
            array (
                'follower_id' => 10,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            126 => 
            array (
                'follower_id' => 10,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            127 => 
            array (
                'follower_id' => 10,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:46:13',
            ),
            128 => 
            array (
                'follower_id' => 10,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            129 => 
            array (
                'follower_id' => 10,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            130 => 
            array (
                'follower_id' => 10,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            131 => 
            array (
                'follower_id' => 10,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:46:13',
            ),
            132 => 
            array (
                'follower_id' => 10,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:46:13',
            ),
            133 => 
            array (
                'follower_id' => 10,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:40:29',
            ),
            134 => 
            array (
                'follower_id' => 10,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            135 => 
            array (
                'follower_id' => 11,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            136 => 
            array (
                'follower_id' => 11,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:46:13',
            ),
            137 => 
            array (
                'follower_id' => 11,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:46:13',
            ),
            138 => 
            array (
                'follower_id' => 11,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:46:13',
            ),
            139 => 
            array (
                'follower_id' => 11,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            140 => 
            array (
                'follower_id' => 11,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            141 => 
            array (
                'follower_id' => 11,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            142 => 
            array (
                'follower_id' => 11,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            143 => 
            array (
                'follower_id' => 11,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            144 => 
            array (
                'follower_id' => 11,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            145 => 
            array (
                'follower_id' => 11,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            146 => 
            array (
                'follower_id' => 11,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:46:13',
            ),
            147 => 
            array (
                'follower_id' => 11,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:40:29',
            ),
            148 => 
            array (
                'follower_id' => 11,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            149 => 
            array (
                'follower_id' => 11,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            150 => 
            array (
                'follower_id' => 11,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            151 => 
            array (
                'follower_id' => 11,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            152 => 
            array (
                'follower_id' => 12,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            153 => 
            array (
                'follower_id' => 12,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            154 => 
            array (
                'follower_id' => 12,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:46:13',
            ),
            155 => 
            array (
                'follower_id' => 12,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            156 => 
            array (
                'follower_id' => 12,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            157 => 
            array (
                'follower_id' => 12,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            158 => 
            array (
                'follower_id' => 12,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:46:13',
            ),
            159 => 
            array (
                'follower_id' => 12,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            160 => 
            array (
                'follower_id' => 12,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            161 => 
            array (
                'follower_id' => 12,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            162 => 
            array (
                'follower_id' => 12,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            163 => 
            array (
                'follower_id' => 12,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:40:29',
            ),
            164 => 
            array (
                'follower_id' => 12,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            165 => 
            array (
                'follower_id' => 12,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            166 => 
            array (
                'follower_id' => 12,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:46:13',
            ),
            167 => 
            array (
                'follower_id' => 12,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:40:29',
            ),
            168 => 
            array (
                'follower_id' => 12,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:40:29',
            ),
            169 => 
            array (
                'follower_id' => 12,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            170 => 
            array (
                'follower_id' => 12,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:46:13',
            ),
            171 => 
            array (
                'follower_id' => 13,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            172 => 
            array (
                'follower_id' => 13,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            173 => 
            array (
                'follower_id' => 13,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            174 => 
            array (
                'follower_id' => 13,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            175 => 
            array (
                'follower_id' => 13,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            176 => 
            array (
                'follower_id' => 13,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            177 => 
            array (
                'follower_id' => 13,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            178 => 
            array (
                'follower_id' => 13,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            179 => 
            array (
                'follower_id' => 13,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            180 => 
            array (
                'follower_id' => 13,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            181 => 
            array (
                'follower_id' => 13,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            182 => 
            array (
                'follower_id' => 13,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            183 => 
            array (
                'follower_id' => 13,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            184 => 
            array (
                'follower_id' => 13,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            185 => 
            array (
                'follower_id' => 13,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            186 => 
            array (
                'follower_id' => 13,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            187 => 
            array (
                'follower_id' => 13,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            188 => 
            array (
                'follower_id' => 13,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            189 => 
            array (
                'follower_id' => 13,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            190 => 
            array (
                'follower_id' => 14,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            191 => 
            array (
                'follower_id' => 14,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            192 => 
            array (
                'follower_id' => 14,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:40:29',
            ),
            193 => 
            array (
                'follower_id' => 14,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            194 => 
            array (
                'follower_id' => 14,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            195 => 
            array (
                'follower_id' => 14,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:40:29',
            ),
            196 => 
            array (
                'follower_id' => 14,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            197 => 
            array (
                'follower_id' => 14,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            198 => 
            array (
                'follower_id' => 14,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            199 => 
            array (
                'follower_id' => 14,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            200 => 
            array (
                'follower_id' => 14,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            201 => 
            array (
                'follower_id' => 14,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            202 => 
            array (
                'follower_id' => 14,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:46:13',
            ),
            203 => 
            array (
                'follower_id' => 14,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            204 => 
            array (
                'follower_id' => 14,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            205 => 
            array (
                'follower_id' => 14,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            206 => 
            array (
                'follower_id' => 14,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:40:29',
            ),
            207 => 
            array (
                'follower_id' => 14,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:46:13',
            ),
            208 => 
            array (
                'follower_id' => 15,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            209 => 
            array (
                'follower_id' => 15,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            210 => 
            array (
                'follower_id' => 15,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            211 => 
            array (
                'follower_id' => 15,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            212 => 
            array (
                'follower_id' => 15,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            213 => 
            array (
                'follower_id' => 15,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            214 => 
            array (
                'follower_id' => 15,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            215 => 
            array (
                'follower_id' => 15,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            216 => 
            array (
                'follower_id' => 15,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:46:13',
            ),
            217 => 
            array (
                'follower_id' => 15,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            218 => 
            array (
                'follower_id' => 15,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            219 => 
            array (
                'follower_id' => 15,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            220 => 
            array (
                'follower_id' => 15,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:40:29',
            ),
            221 => 
            array (
                'follower_id' => 15,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            222 => 
            array (
                'follower_id' => 15,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            223 => 
            array (
                'follower_id' => 15,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            224 => 
            array (
                'follower_id' => 15,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:40:29',
            ),
            225 => 
            array (
                'follower_id' => 15,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            226 => 
            array (
                'follower_id' => 15,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            227 => 
            array (
                'follower_id' => 15,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            228 => 
            array (
                'follower_id' => 16,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            229 => 
            array (
                'follower_id' => 16,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:46:13',
            ),
            230 => 
            array (
                'follower_id' => 16,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            231 => 
            array (
                'follower_id' => 16,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            232 => 
            array (
                'follower_id' => 16,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            233 => 
            array (
                'follower_id' => 16,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            234 => 
            array (
                'follower_id' => 16,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            235 => 
            array (
                'follower_id' => 16,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            236 => 
            array (
                'follower_id' => 16,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:46:13',
            ),
            237 => 
            array (
                'follower_id' => 16,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            238 => 
            array (
                'follower_id' => 16,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            239 => 
            array (
                'follower_id' => 16,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:40:29',
            ),
            240 => 
            array (
                'follower_id' => 16,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            241 => 
            array (
                'follower_id' => 16,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            242 => 
            array (
                'follower_id' => 16,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            243 => 
            array (
                'follower_id' => 16,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            244 => 
            array (
                'follower_id' => 16,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:46:13',
            ),
            245 => 
            array (
                'follower_id' => 16,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            246 => 
            array (
                'follower_id' => 17,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:40:29',
            ),
            247 => 
            array (
                'follower_id' => 17,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            248 => 
            array (
                'follower_id' => 17,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            249 => 
            array (
                'follower_id' => 17,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            250 => 
            array (
                'follower_id' => 17,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:40:29',
            ),
            251 => 
            array (
                'follower_id' => 17,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            252 => 
            array (
                'follower_id' => 17,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            253 => 
            array (
                'follower_id' => 17,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            254 => 
            array (
                'follower_id' => 17,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            255 => 
            array (
                'follower_id' => 17,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            256 => 
            array (
                'follower_id' => 17,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            257 => 
            array (
                'follower_id' => 17,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            258 => 
            array (
                'follower_id' => 17,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            259 => 
            array (
                'follower_id' => 17,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            260 => 
            array (
                'follower_id' => 17,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:46:13',
            ),
            261 => 
            array (
                'follower_id' => 17,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            262 => 
            array (
                'follower_id' => 17,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:46:13',
            ),
            263 => 
            array (
                'follower_id' => 17,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            264 => 
            array (
                'follower_id' => 17,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            265 => 
            array (
                'follower_id' => 18,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            266 => 
            array (
                'follower_id' => 18,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            267 => 
            array (
                'follower_id' => 18,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            268 => 
            array (
                'follower_id' => 18,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            269 => 
            array (
                'follower_id' => 18,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            270 => 
            array (
                'follower_id' => 18,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:40:29',
            ),
            271 => 
            array (
                'follower_id' => 18,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            272 => 
            array (
                'follower_id' => 18,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            273 => 
            array (
                'follower_id' => 18,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:40:29',
            ),
            274 => 
            array (
                'follower_id' => 18,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:46:13',
            ),
            275 => 
            array (
                'follower_id' => 18,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            276 => 
            array (
                'follower_id' => 18,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:46:13',
            ),
            277 => 
            array (
                'follower_id' => 18,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            278 => 
            array (
                'follower_id' => 18,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            279 => 
            array (
                'follower_id' => 18,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            280 => 
            array (
                'follower_id' => 18,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:46:13',
            ),
            281 => 
            array (
                'follower_id' => 18,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:46:13',
            ),
            282 => 
            array (
                'follower_id' => 18,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            283 => 
            array (
                'follower_id' => 18,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            284 => 
            array (
                'follower_id' => 19,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:46:13',
            ),
            285 => 
            array (
                'follower_id' => 19,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            286 => 
            array (
                'follower_id' => 19,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            287 => 
            array (
                'follower_id' => 19,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:40:29',
            ),
            288 => 
            array (
                'follower_id' => 19,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:46:13',
            ),
            289 => 
            array (
                'follower_id' => 19,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            290 => 
            array (
                'follower_id' => 19,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:46:13',
            ),
            291 => 
            array (
                'follower_id' => 19,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            292 => 
            array (
                'follower_id' => 19,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            293 => 
            array (
                'follower_id' => 19,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            294 => 
            array (
                'follower_id' => 19,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            295 => 
            array (
                'follower_id' => 19,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:46:13',
            ),
            296 => 
            array (
                'follower_id' => 19,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            297 => 
            array (
                'follower_id' => 19,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            298 => 
            array (
                'follower_id' => 19,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:40:29',
            ),
            299 => 
            array (
                'follower_id' => 19,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            300 => 
            array (
                'follower_id' => 19,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:46:13',
            ),
            301 => 
            array (
                'follower_id' => 19,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            302 => 
            array (
                'follower_id' => 19,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            303 => 
            array (
                'follower_id' => 20,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            304 => 
            array (
                'follower_id' => 20,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:40:29',
            ),
            305 => 
            array (
                'follower_id' => 20,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            306 => 
            array (
                'follower_id' => 20,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            307 => 
            array (
                'follower_id' => 20,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            308 => 
            array (
                'follower_id' => 20,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            309 => 
            array (
                'follower_id' => 20,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            310 => 
            array (
                'follower_id' => 20,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            311 => 
            array (
                'follower_id' => 20,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            312 => 
            array (
                'follower_id' => 20,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            313 => 
            array (
                'follower_id' => 20,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            314 => 
            array (
                'follower_id' => 20,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            315 => 
            array (
                'follower_id' => 20,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            316 => 
            array (
                'follower_id' => 20,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            317 => 
            array (
                'follower_id' => 20,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            318 => 
            array (
                'follower_id' => 20,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            319 => 
            array (
                'follower_id' => 20,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:40:29',
            ),
            320 => 
            array (
                'follower_id' => 20,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            321 => 
            array (
                'follower_id' => 20,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            322 => 
            array (
                'follower_id' => 21,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            323 => 
            array (
                'follower_id' => 21,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            324 => 
            array (
                'follower_id' => 21,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            325 => 
            array (
                'follower_id' => 21,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:46:13',
            ),
            326 => 
            array (
                'follower_id' => 21,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:46:13',
            ),
            327 => 
            array (
                'follower_id' => 21,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            328 => 
            array (
                'follower_id' => 21,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            329 => 
            array (
                'follower_id' => 21,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            330 => 
            array (
                'follower_id' => 21,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            331 => 
            array (
                'follower_id' => 21,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            332 => 
            array (
                'follower_id' => 21,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:40:29',
            ),
            333 => 
            array (
                'follower_id' => 21,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            334 => 
            array (
                'follower_id' => 21,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            335 => 
            array (
                'follower_id' => 21,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            336 => 
            array (
                'follower_id' => 21,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:40:29',
            ),
            337 => 
            array (
                'follower_id' => 21,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            338 => 
            array (
                'follower_id' => 21,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            339 => 
            array (
                'follower_id' => 21,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            340 => 
            array (
                'follower_id' => 22,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            341 => 
            array (
                'follower_id' => 22,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            342 => 
            array (
                'follower_id' => 22,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            343 => 
            array (
                'follower_id' => 22,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            344 => 
            array (
                'follower_id' => 22,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            345 => 
            array (
                'follower_id' => 22,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            346 => 
            array (
                'follower_id' => 22,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            347 => 
            array (
                'follower_id' => 22,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            348 => 
            array (
                'follower_id' => 22,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            349 => 
            array (
                'follower_id' => 22,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:46:13',
            ),
            350 => 
            array (
                'follower_id' => 22,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:40:29',
            ),
            351 => 
            array (
                'follower_id' => 22,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:46:13',
            ),
            352 => 
            array (
                'follower_id' => 22,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            353 => 
            array (
                'follower_id' => 22,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:46:13',
            ),
            354 => 
            array (
                'follower_id' => 22,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            355 => 
            array (
                'follower_id' => 22,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            356 => 
            array (
                'follower_id' => 22,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            357 => 
            array (
                'follower_id' => 22,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            358 => 
            array (
                'follower_id' => 22,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            359 => 
            array (
                'follower_id' => 23,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            360 => 
            array (
                'follower_id' => 23,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            361 => 
            array (
                'follower_id' => 23,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:40:29',
            ),
            362 => 
            array (
                'follower_id' => 23,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            363 => 
            array (
                'follower_id' => 23,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:40:29',
            ),
            364 => 
            array (
                'follower_id' => 23,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            365 => 
            array (
                'follower_id' => 23,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:46:13',
            ),
            366 => 
            array (
                'follower_id' => 23,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            367 => 
            array (
                'follower_id' => 23,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:46:13',
            ),
            368 => 
            array (
                'follower_id' => 23,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            369 => 
            array (
                'follower_id' => 23,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            370 => 
            array (
                'follower_id' => 23,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            371 => 
            array (
                'follower_id' => 23,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            372 => 
            array (
                'follower_id' => 23,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            373 => 
            array (
                'follower_id' => 23,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            374 => 
            array (
                'follower_id' => 23,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:40:29',
            ),
            375 => 
            array (
                'follower_id' => 23,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            376 => 
            array (
                'follower_id' => 23,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:40:29',
            ),
            377 => 
            array (
                'follower_id' => 23,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            378 => 
            array (
                'follower_id' => 24,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            379 => 
            array (
                'follower_id' => 24,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            380 => 
            array (
                'follower_id' => 24,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            381 => 
            array (
                'follower_id' => 24,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:46:13',
            ),
            382 => 
            array (
                'follower_id' => 24,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            383 => 
            array (
                'follower_id' => 24,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            384 => 
            array (
                'follower_id' => 24,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            385 => 
            array (
                'follower_id' => 24,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            386 => 
            array (
                'follower_id' => 24,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            387 => 
            array (
                'follower_id' => 24,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            388 => 
            array (
                'follower_id' => 24,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:46:13',
            ),
            389 => 
            array (
                'follower_id' => 24,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            390 => 
            array (
                'follower_id' => 24,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:40:29',
            ),
            391 => 
            array (
                'follower_id' => 24,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            392 => 
            array (
                'follower_id' => 24,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            393 => 
            array (
                'follower_id' => 24,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            394 => 
            array (
                'follower_id' => 24,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            395 => 
            array (
                'follower_id' => 24,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            396 => 
            array (
                'follower_id' => 24,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            397 => 
            array (
                'follower_id' => 24,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:46:13',
            ),
            398 => 
            array (
                'follower_id' => 25,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            399 => 
            array (
                'follower_id' => 25,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            400 => 
            array (
                'follower_id' => 25,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            401 => 
            array (
                'follower_id' => 25,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            402 => 
            array (
                'follower_id' => 25,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            403 => 
            array (
                'follower_id' => 25,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            404 => 
            array (
                'follower_id' => 25,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            405 => 
            array (
                'follower_id' => 25,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            406 => 
            array (
                'follower_id' => 25,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            407 => 
            array (
                'follower_id' => 25,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            408 => 
            array (
                'follower_id' => 25,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            409 => 
            array (
                'follower_id' => 25,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            410 => 
            array (
                'follower_id' => 25,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            411 => 
            array (
                'follower_id' => 25,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            412 => 
            array (
                'follower_id' => 25,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            413 => 
            array (
                'follower_id' => 25,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:46:13',
            ),
            414 => 
            array (
                'follower_id' => 25,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            415 => 
            array (
                'follower_id' => 25,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            416 => 
            array (
                'follower_id' => 25,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            417 => 
            array (
                'follower_id' => 26,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            418 => 
            array (
                'follower_id' => 26,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            419 => 
            array (
                'follower_id' => 26,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:40:29',
            ),
            420 => 
            array (
                'follower_id' => 26,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            421 => 
            array (
                'follower_id' => 26,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            422 => 
            array (
                'follower_id' => 26,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            423 => 
            array (
                'follower_id' => 26,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:46:13',
            ),
            424 => 
            array (
                'follower_id' => 26,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            425 => 
            array (
                'follower_id' => 26,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:46:13',
            ),
            426 => 
            array (
                'follower_id' => 26,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            427 => 
            array (
                'follower_id' => 26,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:46:13',
            ),
            428 => 
            array (
                'follower_id' => 26,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            429 => 
            array (
                'follower_id' => 26,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            430 => 
            array (
                'follower_id' => 26,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            431 => 
            array (
                'follower_id' => 26,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            432 => 
            array (
                'follower_id' => 26,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:46:13',
            ),
            433 => 
            array (
                'follower_id' => 26,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            434 => 
            array (
                'follower_id' => 26,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            435 => 
            array (
                'follower_id' => 26,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            436 => 
            array (
                'follower_id' => 27,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            437 => 
            array (
                'follower_id' => 27,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            438 => 
            array (
                'follower_id' => 27,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:46:13',
            ),
            439 => 
            array (
                'follower_id' => 27,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            440 => 
            array (
                'follower_id' => 27,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            441 => 
            array (
                'follower_id' => 27,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            442 => 
            array (
                'follower_id' => 27,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:40:29',
            ),
            443 => 
            array (
                'follower_id' => 27,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            444 => 
            array (
                'follower_id' => 27,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            445 => 
            array (
                'follower_id' => 27,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:40:29',
            ),
            446 => 
            array (
                'follower_id' => 27,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            447 => 
            array (
                'follower_id' => 27,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            448 => 
            array (
                'follower_id' => 27,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            449 => 
            array (
                'follower_id' => 27,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            450 => 
            array (
                'follower_id' => 27,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            451 => 
            array (
                'follower_id' => 27,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            452 => 
            array (
                'follower_id' => 27,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:46:13',
            ),
            453 => 
            array (
                'follower_id' => 27,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            454 => 
            array (
                'follower_id' => 28,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            455 => 
            array (
                'follower_id' => 28,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:40:29',
            ),
            456 => 
            array (
                'follower_id' => 28,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            457 => 
            array (
                'follower_id' => 28,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            458 => 
            array (
                'follower_id' => 28,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            459 => 
            array (
                'follower_id' => 28,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            460 => 
            array (
                'follower_id' => 28,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            461 => 
            array (
                'follower_id' => 28,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:46:13',
            ),
            462 => 
            array (
                'follower_id' => 28,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            463 => 
            array (
                'follower_id' => 28,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            464 => 
            array (
                'follower_id' => 28,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            465 => 
            array (
                'follower_id' => 28,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            466 => 
            array (
                'follower_id' => 28,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            467 => 
            array (
                'follower_id' => 28,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            468 => 
            array (
                'follower_id' => 28,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            469 => 
            array (
                'follower_id' => 28,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:46:13',
            ),
            470 => 
            array (
                'follower_id' => 28,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            471 => 
            array (
                'follower_id' => 28,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            472 => 
            array (
                'follower_id' => 29,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            473 => 
            array (
                'follower_id' => 29,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            474 => 
            array (
                'follower_id' => 29,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            475 => 
            array (
                'follower_id' => 29,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            476 => 
            array (
                'follower_id' => 29,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            477 => 
            array (
                'follower_id' => 29,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            478 => 
            array (
                'follower_id' => 29,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            479 => 
            array (
                'follower_id' => 29,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            480 => 
            array (
                'follower_id' => 29,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            481 => 
            array (
                'follower_id' => 29,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            482 => 
            array (
                'follower_id' => 29,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            483 => 
            array (
                'follower_id' => 29,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            484 => 
            array (
                'follower_id' => 29,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            485 => 
            array (
                'follower_id' => 29,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            486 => 
            array (
                'follower_id' => 29,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            487 => 
            array (
                'follower_id' => 29,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            488 => 
            array (
                'follower_id' => 29,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            489 => 
            array (
                'follower_id' => 29,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            490 => 
            array (
                'follower_id' => 29,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            491 => 
            array (
                'follower_id' => 29,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            492 => 
            array (
                'follower_id' => 30,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            493 => 
            array (
                'follower_id' => 30,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            494 => 
            array (
                'follower_id' => 30,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:40:29',
            ),
            495 => 
            array (
                'follower_id' => 30,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            496 => 
            array (
                'follower_id' => 30,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:46:13',
            ),
            497 => 
            array (
                'follower_id' => 30,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            498 => 
            array (
                'follower_id' => 30,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            499 => 
            array (
                'follower_id' => 30,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
        ));
        \DB::table('follows')->insert(array (
            0 => 
            array (
                'follower_id' => 30,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            1 => 
            array (
                'follower_id' => 30,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            2 => 
            array (
                'follower_id' => 30,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            3 => 
            array (
                'follower_id' => 30,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            4 => 
            array (
                'follower_id' => 30,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            5 => 
            array (
                'follower_id' => 30,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:46:13',
            ),
            6 => 
            array (
                'follower_id' => 30,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            7 => 
            array (
                'follower_id' => 30,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:40:29',
            ),
            8 => 
            array (
                'follower_id' => 30,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            9 => 
            array (
                'follower_id' => 30,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            10 => 
            array (
                'follower_id' => 30,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            11 => 
            array (
                'follower_id' => 31,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            12 => 
            array (
                'follower_id' => 31,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            13 => 
            array (
                'follower_id' => 31,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:46:13',
            ),
            14 => 
            array (
                'follower_id' => 31,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            15 => 
            array (
                'follower_id' => 31,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:40:29',
            ),
            16 => 
            array (
                'follower_id' => 31,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            17 => 
            array (
                'follower_id' => 31,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            18 => 
            array (
                'follower_id' => 31,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:46:13',
            ),
            19 => 
            array (
                'follower_id' => 31,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            20 => 
            array (
                'follower_id' => 31,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            21 => 
            array (
                'follower_id' => 31,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            22 => 
            array (
                'follower_id' => 31,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            23 => 
            array (
                'follower_id' => 31,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            24 => 
            array (
                'follower_id' => 31,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            25 => 
            array (
                'follower_id' => 31,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            26 => 
            array (
                'follower_id' => 31,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:46:13',
            ),
            27 => 
            array (
                'follower_id' => 31,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            28 => 
            array (
                'follower_id' => 31,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            29 => 
            array (
                'follower_id' => 31,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:46:13',
            ),
            30 => 
            array (
                'follower_id' => 31,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            31 => 
            array (
                'follower_id' => 32,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            32 => 
            array (
                'follower_id' => 32,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            33 => 
            array (
                'follower_id' => 32,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:40:29',
            ),
            34 => 
            array (
                'follower_id' => 32,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:40:29',
            ),
            35 => 
            array (
                'follower_id' => 32,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            36 => 
            array (
                'follower_id' => 32,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            37 => 
            array (
                'follower_id' => 32,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:46:13',
            ),
            38 => 
            array (
                'follower_id' => 32,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            39 => 
            array (
                'follower_id' => 32,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            40 => 
            array (
                'follower_id' => 32,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:46:13',
            ),
            41 => 
            array (
                'follower_id' => 32,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            42 => 
            array (
                'follower_id' => 32,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:40:29',
            ),
            43 => 
            array (
                'follower_id' => 32,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:46:13',
            ),
            44 => 
            array (
                'follower_id' => 32,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            45 => 
            array (
                'follower_id' => 32,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            46 => 
            array (
                'follower_id' => 32,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            47 => 
            array (
                'follower_id' => 32,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            48 => 
            array (
                'follower_id' => 33,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            49 => 
            array (
                'follower_id' => 33,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:46:13',
            ),
            50 => 
            array (
                'follower_id' => 33,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            51 => 
            array (
                'follower_id' => 33,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            52 => 
            array (
                'follower_id' => 33,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            53 => 
            array (
                'follower_id' => 33,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            54 => 
            array (
                'follower_id' => 33,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            55 => 
            array (
                'follower_id' => 33,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:46:13',
            ),
            56 => 
            array (
                'follower_id' => 33,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            57 => 
            array (
                'follower_id' => 33,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            58 => 
            array (
                'follower_id' => 33,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            59 => 
            array (
                'follower_id' => 33,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            60 => 
            array (
                'follower_id' => 33,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            61 => 
            array (
                'follower_id' => 33,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            62 => 
            array (
                'follower_id' => 33,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            63 => 
            array (
                'follower_id' => 33,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            64 => 
            array (
                'follower_id' => 33,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:46:13',
            ),
            65 => 
            array (
                'follower_id' => 33,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:46:13',
            ),
            66 => 
            array (
                'follower_id' => 33,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:40:29',
            ),
            67 => 
            array (
                'follower_id' => 34,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            68 => 
            array (
                'follower_id' => 34,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            69 => 
            array (
                'follower_id' => 34,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            70 => 
            array (
                'follower_id' => 34,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:46:13',
            ),
            71 => 
            array (
                'follower_id' => 34,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            72 => 
            array (
                'follower_id' => 34,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            73 => 
            array (
                'follower_id' => 34,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            74 => 
            array (
                'follower_id' => 34,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            75 => 
            array (
                'follower_id' => 34,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:40:29',
            ),
            76 => 
            array (
                'follower_id' => 34,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:46:13',
            ),
            77 => 
            array (
                'follower_id' => 34,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            78 => 
            array (
                'follower_id' => 34,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:46:13',
            ),
            79 => 
            array (
                'follower_id' => 34,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            80 => 
            array (
                'follower_id' => 34,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:40:29',
            ),
            81 => 
            array (
                'follower_id' => 34,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            82 => 
            array (
                'follower_id' => 34,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:46:13',
            ),
            83 => 
            array (
                'follower_id' => 34,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            84 => 
            array (
                'follower_id' => 34,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            85 => 
            array (
                'follower_id' => 34,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:46:13',
            ),
            86 => 
            array (
                'follower_id' => 34,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            87 => 
            array (
                'follower_id' => 35,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            88 => 
            array (
                'follower_id' => 35,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            89 => 
            array (
                'follower_id' => 35,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            90 => 
            array (
                'follower_id' => 35,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:46:13',
            ),
            91 => 
            array (
                'follower_id' => 35,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            92 => 
            array (
                'follower_id' => 35,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:46:13',
            ),
            93 => 
            array (
                'follower_id' => 35,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            94 => 
            array (
                'follower_id' => 35,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            95 => 
            array (
                'follower_id' => 35,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            96 => 
            array (
                'follower_id' => 35,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            97 => 
            array (
                'follower_id' => 35,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:40:29',
            ),
            98 => 
            array (
                'follower_id' => 35,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            99 => 
            array (
                'follower_id' => 35,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            100 => 
            array (
                'follower_id' => 35,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            101 => 
            array (
                'follower_id' => 35,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            102 => 
            array (
                'follower_id' => 35,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            103 => 
            array (
                'follower_id' => 35,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:40:29',
            ),
            104 => 
            array (
                'follower_id' => 35,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            105 => 
            array (
                'follower_id' => 35,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            106 => 
            array (
                'follower_id' => 35,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            107 => 
            array (
                'follower_id' => 36,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            108 => 
            array (
                'follower_id' => 36,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            109 => 
            array (
                'follower_id' => 36,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            110 => 
            array (
                'follower_id' => 36,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            111 => 
            array (
                'follower_id' => 36,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:46:13',
            ),
            112 => 
            array (
                'follower_id' => 36,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            113 => 
            array (
                'follower_id' => 36,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            114 => 
            array (
                'follower_id' => 36,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            115 => 
            array (
                'follower_id' => 36,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            116 => 
            array (
                'follower_id' => 36,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            117 => 
            array (
                'follower_id' => 36,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            118 => 
            array (
                'follower_id' => 36,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            119 => 
            array (
                'follower_id' => 36,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:46:13',
            ),
            120 => 
            array (
                'follower_id' => 36,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            121 => 
            array (
                'follower_id' => 36,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            122 => 
            array (
                'follower_id' => 36,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            123 => 
            array (
                'follower_id' => 36,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            124 => 
            array (
                'follower_id' => 36,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            125 => 
            array (
                'follower_id' => 36,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            126 => 
            array (
                'follower_id' => 37,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            127 => 
            array (
                'follower_id' => 37,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            128 => 
            array (
                'follower_id' => 37,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            129 => 
            array (
                'follower_id' => 37,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            130 => 
            array (
                'follower_id' => 37,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            131 => 
            array (
                'follower_id' => 37,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            132 => 
            array (
                'follower_id' => 37,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            133 => 
            array (
                'follower_id' => 37,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            134 => 
            array (
                'follower_id' => 37,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            135 => 
            array (
                'follower_id' => 37,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:46:13',
            ),
            136 => 
            array (
                'follower_id' => 37,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            137 => 
            array (
                'follower_id' => 37,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            138 => 
            array (
                'follower_id' => 37,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:46:13',
            ),
            139 => 
            array (
                'follower_id' => 37,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            140 => 
            array (
                'follower_id' => 37,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            141 => 
            array (
                'follower_id' => 37,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            142 => 
            array (
                'follower_id' => 37,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            143 => 
            array (
                'follower_id' => 37,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            144 => 
            array (
                'follower_id' => 37,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            145 => 
            array (
                'follower_id' => 38,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:46:13',
            ),
            146 => 
            array (
                'follower_id' => 38,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            147 => 
            array (
                'follower_id' => 38,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:46:13',
            ),
            148 => 
            array (
                'follower_id' => 38,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            149 => 
            array (
                'follower_id' => 38,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:40:29',
            ),
            150 => 
            array (
                'follower_id' => 38,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            151 => 
            array (
                'follower_id' => 38,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            152 => 
            array (
                'follower_id' => 38,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            153 => 
            array (
                'follower_id' => 38,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            154 => 
            array (
                'follower_id' => 38,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            155 => 
            array (
                'follower_id' => 38,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:40:29',
            ),
            156 => 
            array (
                'follower_id' => 38,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            157 => 
            array (
                'follower_id' => 38,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            158 => 
            array (
                'follower_id' => 38,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            159 => 
            array (
                'follower_id' => 38,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            160 => 
            array (
                'follower_id' => 38,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            161 => 
            array (
                'follower_id' => 38,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:40:29',
            ),
            162 => 
            array (
                'follower_id' => 38,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            163 => 
            array (
                'follower_id' => 39,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            164 => 
            array (
                'follower_id' => 39,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            165 => 
            array (
                'follower_id' => 39,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:46:13',
            ),
            166 => 
            array (
                'follower_id' => 39,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:46:13',
            ),
            167 => 
            array (
                'follower_id' => 39,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            168 => 
            array (
                'follower_id' => 39,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            169 => 
            array (
                'follower_id' => 39,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            170 => 
            array (
                'follower_id' => 39,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:40:29',
            ),
            171 => 
            array (
                'follower_id' => 39,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:46:13',
            ),
            172 => 
            array (
                'follower_id' => 39,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            173 => 
            array (
                'follower_id' => 39,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            174 => 
            array (
                'follower_id' => 39,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            175 => 
            array (
                'follower_id' => 39,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            176 => 
            array (
                'follower_id' => 39,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            177 => 
            array (
                'follower_id' => 39,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            178 => 
            array (
                'follower_id' => 39,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:46:13',
            ),
            179 => 
            array (
                'follower_id' => 39,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            180 => 
            array (
                'follower_id' => 39,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            181 => 
            array (
                'follower_id' => 39,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:46:13',
            ),
            182 => 
            array (
                'follower_id' => 39,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            183 => 
            array (
                'follower_id' => 40,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            184 => 
            array (
                'follower_id' => 40,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:40:29',
            ),
            185 => 
            array (
                'follower_id' => 40,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            186 => 
            array (
                'follower_id' => 40,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            187 => 
            array (
                'follower_id' => 40,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            188 => 
            array (
                'follower_id' => 40,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:46:13',
            ),
            189 => 
            array (
                'follower_id' => 40,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            190 => 
            array (
                'follower_id' => 40,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            191 => 
            array (
                'follower_id' => 40,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            192 => 
            array (
                'follower_id' => 40,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            193 => 
            array (
                'follower_id' => 40,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            194 => 
            array (
                'follower_id' => 40,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            195 => 
            array (
                'follower_id' => 40,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:46:13',
            ),
            196 => 
            array (
                'follower_id' => 40,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            197 => 
            array (
                'follower_id' => 40,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            198 => 
            array (
                'follower_id' => 40,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            199 => 
            array (
                'follower_id' => 40,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            200 => 
            array (
                'follower_id' => 40,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            201 => 
            array (
                'follower_id' => 40,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:46:13',
            ),
            202 => 
            array (
                'follower_id' => 40,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            203 => 
            array (
                'follower_id' => 41,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            204 => 
            array (
                'follower_id' => 41,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            205 => 
            array (
                'follower_id' => 41,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:40:29',
            ),
            206 => 
            array (
                'follower_id' => 41,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:46:13',
            ),
            207 => 
            array (
                'follower_id' => 41,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:46:13',
            ),
            208 => 
            array (
                'follower_id' => 41,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            209 => 
            array (
                'follower_id' => 41,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            210 => 
            array (
                'follower_id' => 41,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            211 => 
            array (
                'follower_id' => 41,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            212 => 
            array (
                'follower_id' => 41,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            213 => 
            array (
                'follower_id' => 41,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            214 => 
            array (
                'follower_id' => 41,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            215 => 
            array (
                'follower_id' => 41,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:40:29',
            ),
            216 => 
            array (
                'follower_id' => 41,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            217 => 
            array (
                'follower_id' => 41,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            218 => 
            array (
                'follower_id' => 41,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            219 => 
            array (
                'follower_id' => 41,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            220 => 
            array (
                'follower_id' => 41,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            221 => 
            array (
                'follower_id' => 41,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            222 => 
            array (
                'follower_id' => 41,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:40:29',
            ),
            223 => 
            array (
                'follower_id' => 42,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            224 => 
            array (
                'follower_id' => 42,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            225 => 
            array (
                'follower_id' => 42,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:46:13',
            ),
            226 => 
            array (
                'follower_id' => 42,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            227 => 
            array (
                'follower_id' => 42,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            228 => 
            array (
                'follower_id' => 42,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            229 => 
            array (
                'follower_id' => 42,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            230 => 
            array (
                'follower_id' => 42,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            231 => 
            array (
                'follower_id' => 42,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            232 => 
            array (
                'follower_id' => 42,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            233 => 
            array (
                'follower_id' => 42,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            234 => 
            array (
                'follower_id' => 42,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            235 => 
            array (
                'follower_id' => 42,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            236 => 
            array (
                'follower_id' => 42,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            237 => 
            array (
                'follower_id' => 42,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            238 => 
            array (
                'follower_id' => 42,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            239 => 
            array (
                'follower_id' => 42,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            240 => 
            array (
                'follower_id' => 42,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            241 => 
            array (
                'follower_id' => 43,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:46:13',
            ),
            242 => 
            array (
                'follower_id' => 43,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            243 => 
            array (
                'follower_id' => 43,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            244 => 
            array (
                'follower_id' => 43,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            245 => 
            array (
                'follower_id' => 43,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            246 => 
            array (
                'follower_id' => 43,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            247 => 
            array (
                'follower_id' => 43,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            248 => 
            array (
                'follower_id' => 43,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            249 => 
            array (
                'follower_id' => 43,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:46:13',
            ),
            250 => 
            array (
                'follower_id' => 43,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:46:13',
            ),
            251 => 
            array (
                'follower_id' => 43,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            252 => 
            array (
                'follower_id' => 43,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            253 => 
            array (
                'follower_id' => 43,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:40:29',
            ),
            254 => 
            array (
                'follower_id' => 43,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            255 => 
            array (
                'follower_id' => 43,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:46:13',
            ),
            256 => 
            array (
                'follower_id' => 43,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            257 => 
            array (
                'follower_id' => 43,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            258 => 
            array (
                'follower_id' => 43,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            259 => 
            array (
                'follower_id' => 43,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:46:13',
            ),
            260 => 
            array (
                'follower_id' => 44,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:40:29',
            ),
            261 => 
            array (
                'follower_id' => 44,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            262 => 
            array (
                'follower_id' => 44,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            263 => 
            array (
                'follower_id' => 44,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            264 => 
            array (
                'follower_id' => 44,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            265 => 
            array (
                'follower_id' => 44,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            266 => 
            array (
                'follower_id' => 44,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            267 => 
            array (
                'follower_id' => 44,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            268 => 
            array (
                'follower_id' => 44,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            269 => 
            array (
                'follower_id' => 44,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            270 => 
            array (
                'follower_id' => 44,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            271 => 
            array (
                'follower_id' => 44,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            272 => 
            array (
                'follower_id' => 44,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:46:13',
            ),
            273 => 
            array (
                'follower_id' => 44,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            274 => 
            array (
                'follower_id' => 44,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            275 => 
            array (
                'follower_id' => 44,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            276 => 
            array (
                'follower_id' => 44,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            277 => 
            array (
                'follower_id' => 44,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            278 => 
            array (
                'follower_id' => 44,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            279 => 
            array (
                'follower_id' => 44,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            280 => 
            array (
                'follower_id' => 45,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            281 => 
            array (
                'follower_id' => 45,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            282 => 
            array (
                'follower_id' => 45,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            283 => 
            array (
                'follower_id' => 45,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            284 => 
            array (
                'follower_id' => 45,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:46:13',
            ),
            285 => 
            array (
                'follower_id' => 45,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:46:13',
            ),
            286 => 
            array (
                'follower_id' => 45,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            287 => 
            array (
                'follower_id' => 45,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:46:13',
            ),
            288 => 
            array (
                'follower_id' => 45,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            289 => 
            array (
                'follower_id' => 45,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            290 => 
            array (
                'follower_id' => 45,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            291 => 
            array (
                'follower_id' => 45,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            292 => 
            array (
                'follower_id' => 45,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            293 => 
            array (
                'follower_id' => 45,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            294 => 
            array (
                'follower_id' => 45,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            295 => 
            array (
                'follower_id' => 45,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            296 => 
            array (
                'follower_id' => 45,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            297 => 
            array (
                'follower_id' => 45,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:46:13',
            ),
            298 => 
            array (
                'follower_id' => 45,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            299 => 
            array (
                'follower_id' => 45,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            300 => 
            array (
                'follower_id' => 46,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            301 => 
            array (
                'follower_id' => 46,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            302 => 
            array (
                'follower_id' => 46,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            303 => 
            array (
                'follower_id' => 46,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            304 => 
            array (
                'follower_id' => 46,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            305 => 
            array (
                'follower_id' => 46,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:46:13',
            ),
            306 => 
            array (
                'follower_id' => 46,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:40:29',
            ),
            307 => 
            array (
                'follower_id' => 46,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            308 => 
            array (
                'follower_id' => 46,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            309 => 
            array (
                'follower_id' => 46,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:46:13',
            ),
            310 => 
            array (
                'follower_id' => 46,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            311 => 
            array (
                'follower_id' => 46,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:46:13',
            ),
            312 => 
            array (
                'follower_id' => 46,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            313 => 
            array (
                'follower_id' => 46,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            314 => 
            array (
                'follower_id' => 46,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            315 => 
            array (
                'follower_id' => 46,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:40:29',
            ),
            316 => 
            array (
                'follower_id' => 46,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            317 => 
            array (
                'follower_id' => 46,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            318 => 
            array (
                'follower_id' => 46,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            319 => 
            array (
                'follower_id' => 46,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            320 => 
            array (
                'follower_id' => 47,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            321 => 
            array (
                'follower_id' => 47,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            322 => 
            array (
                'follower_id' => 47,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            323 => 
            array (
                'follower_id' => 47,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            324 => 
            array (
                'follower_id' => 47,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            325 => 
            array (
                'follower_id' => 47,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            326 => 
            array (
                'follower_id' => 47,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            327 => 
            array (
                'follower_id' => 47,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            328 => 
            array (
                'follower_id' => 47,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            329 => 
            array (
                'follower_id' => 47,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:46:13',
            ),
            330 => 
            array (
                'follower_id' => 47,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            331 => 
            array (
                'follower_id' => 47,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            332 => 
            array (
                'follower_id' => 47,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            333 => 
            array (
                'follower_id' => 47,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:46:13',
            ),
            334 => 
            array (
                'follower_id' => 47,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            335 => 
            array (
                'follower_id' => 47,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            336 => 
            array (
                'follower_id' => 47,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:46:13',
            ),
            337 => 
            array (
                'follower_id' => 47,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            338 => 
            array (
                'follower_id' => 47,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:46:13',
            ),
            339 => 
            array (
                'follower_id' => 47,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:40:29',
            ),
            340 => 
            array (
                'follower_id' => 48,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:46:13',
            ),
            341 => 
            array (
                'follower_id' => 48,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            342 => 
            array (
                'follower_id' => 48,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            343 => 
            array (
                'follower_id' => 48,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            344 => 
            array (
                'follower_id' => 48,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            345 => 
            array (
                'follower_id' => 48,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:46:13',
            ),
            346 => 
            array (
                'follower_id' => 48,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:46:13',
            ),
            347 => 
            array (
                'follower_id' => 48,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            348 => 
            array (
                'follower_id' => 48,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            349 => 
            array (
                'follower_id' => 48,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            350 => 
            array (
                'follower_id' => 48,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            351 => 
            array (
                'follower_id' => 48,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            352 => 
            array (
                'follower_id' => 48,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            353 => 
            array (
                'follower_id' => 48,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            354 => 
            array (
                'follower_id' => 48,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            355 => 
            array (
                'follower_id' => 48,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:40:29',
            ),
            356 => 
            array (
                'follower_id' => 48,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            357 => 
            array (
                'follower_id' => 49,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            358 => 
            array (
                'follower_id' => 49,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            359 => 
            array (
                'follower_id' => 49,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            360 => 
            array (
                'follower_id' => 49,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:40:29',
            ),
            361 => 
            array (
                'follower_id' => 49,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            362 => 
            array (
                'follower_id' => 49,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            363 => 
            array (
                'follower_id' => 49,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:40:29',
            ),
            364 => 
            array (
                'follower_id' => 49,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            365 => 
            array (
                'follower_id' => 49,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:46:13',
            ),
            366 => 
            array (
                'follower_id' => 49,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:46:13',
            ),
            367 => 
            array (
                'follower_id' => 49,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:40:29',
            ),
            368 => 
            array (
                'follower_id' => 49,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            369 => 
            array (
                'follower_id' => 49,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:46:13',
            ),
            370 => 
            array (
                'follower_id' => 49,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            371 => 
            array (
                'follower_id' => 49,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            372 => 
            array (
                'follower_id' => 49,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:46:13',
            ),
            373 => 
            array (
                'follower_id' => 49,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            374 => 
            array (
                'follower_id' => 50,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            375 => 
            array (
                'follower_id' => 50,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:40:29',
            ),
            376 => 
            array (
                'follower_id' => 50,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            377 => 
            array (
                'follower_id' => 50,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            378 => 
            array (
                'follower_id' => 50,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            379 => 
            array (
                'follower_id' => 50,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            380 => 
            array (
                'follower_id' => 50,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            381 => 
            array (
                'follower_id' => 50,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            382 => 
            array (
                'follower_id' => 50,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            383 => 
            array (
                'follower_id' => 50,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            384 => 
            array (
                'follower_id' => 50,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:46:13',
            ),
            385 => 
            array (
                'follower_id' => 50,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            386 => 
            array (
                'follower_id' => 50,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:46:13',
            ),
            387 => 
            array (
                'follower_id' => 50,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:40:29',
            ),
            388 => 
            array (
                'follower_id' => 50,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            389 => 
            array (
                'follower_id' => 50,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            390 => 
            array (
                'follower_id' => 50,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:46:13',
            ),
            391 => 
            array (
                'follower_id' => 50,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            392 => 
            array (
                'follower_id' => 50,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            393 => 
            array (
                'follower_id' => 50,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            394 => 
            array (
                'follower_id' => 51,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:46:13',
            ),
            395 => 
            array (
                'follower_id' => 51,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            396 => 
            array (
                'follower_id' => 51,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:46:13',
            ),
            397 => 
            array (
                'follower_id' => 51,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:46:13',
            ),
            398 => 
            array (
                'follower_id' => 51,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:40:29',
            ),
            399 => 
            array (
                'follower_id' => 51,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:40:29',
            ),
            400 => 
            array (
                'follower_id' => 51,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            401 => 
            array (
                'follower_id' => 51,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            402 => 
            array (
                'follower_id' => 51,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            403 => 
            array (
                'follower_id' => 51,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            404 => 
            array (
                'follower_id' => 51,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            405 => 
            array (
                'follower_id' => 51,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            406 => 
            array (
                'follower_id' => 51,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            407 => 
            array (
                'follower_id' => 51,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            408 => 
            array (
                'follower_id' => 51,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:40:29',
            ),
            409 => 
            array (
                'follower_id' => 51,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:46:13',
            ),
            410 => 
            array (
                'follower_id' => 51,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            411 => 
            array (
                'follower_id' => 51,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            412 => 
            array (
                'follower_id' => 51,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            413 => 
            array (
                'follower_id' => 52,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            414 => 
            array (
                'follower_id' => 52,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            415 => 
            array (
                'follower_id' => 52,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            416 => 
            array (
                'follower_id' => 52,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:46:13',
            ),
            417 => 
            array (
                'follower_id' => 52,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            418 => 
            array (
                'follower_id' => 52,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            419 => 
            array (
                'follower_id' => 52,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:40:29',
            ),
            420 => 
            array (
                'follower_id' => 52,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            421 => 
            array (
                'follower_id' => 52,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:46:13',
            ),
            422 => 
            array (
                'follower_id' => 52,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            423 => 
            array (
                'follower_id' => 52,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            424 => 
            array (
                'follower_id' => 52,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:46:13',
            ),
            425 => 
            array (
                'follower_id' => 52,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            426 => 
            array (
                'follower_id' => 52,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:46:13',
            ),
            427 => 
            array (
                'follower_id' => 52,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:40:29',
            ),
            428 => 
            array (
                'follower_id' => 52,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:40:29',
            ),
            429 => 
            array (
                'follower_id' => 52,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            430 => 
            array (
                'follower_id' => 52,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            431 => 
            array (
                'follower_id' => 52,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            432 => 
            array (
                'follower_id' => 52,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            433 => 
            array (
                'follower_id' => 53,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            434 => 
            array (
                'follower_id' => 53,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            435 => 
            array (
                'follower_id' => 53,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:46:13',
            ),
            436 => 
            array (
                'follower_id' => 53,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            437 => 
            array (
                'follower_id' => 53,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            438 => 
            array (
                'follower_id' => 53,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            439 => 
            array (
                'follower_id' => 53,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            440 => 
            array (
                'follower_id' => 53,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            441 => 
            array (
                'follower_id' => 53,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            442 => 
            array (
                'follower_id' => 53,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:40:29',
            ),
            443 => 
            array (
                'follower_id' => 53,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:40:29',
            ),
            444 => 
            array (
                'follower_id' => 53,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            445 => 
            array (
                'follower_id' => 53,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            446 => 
            array (
                'follower_id' => 53,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            447 => 
            array (
                'follower_id' => 53,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            448 => 
            array (
                'follower_id' => 53,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            449 => 
            array (
                'follower_id' => 53,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            450 => 
            array (
                'follower_id' => 53,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:46:13',
            ),
            451 => 
            array (
                'follower_id' => 54,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            452 => 
            array (
                'follower_id' => 54,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            453 => 
            array (
                'follower_id' => 54,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            454 => 
            array (
                'follower_id' => 54,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            455 => 
            array (
                'follower_id' => 54,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            456 => 
            array (
                'follower_id' => 54,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:40:29',
            ),
            457 => 
            array (
                'follower_id' => 54,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            458 => 
            array (
                'follower_id' => 54,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            459 => 
            array (
                'follower_id' => 54,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            460 => 
            array (
                'follower_id' => 54,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            461 => 
            array (
                'follower_id' => 54,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            462 => 
            array (
                'follower_id' => 54,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            463 => 
            array (
                'follower_id' => 54,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            464 => 
            array (
                'follower_id' => 54,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            465 => 
            array (
                'follower_id' => 54,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            466 => 
            array (
                'follower_id' => 54,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:46:13',
            ),
            467 => 
            array (
                'follower_id' => 54,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:46:13',
            ),
            468 => 
            array (
                'follower_id' => 54,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            469 => 
            array (
                'follower_id' => 54,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            470 => 
            array (
                'follower_id' => 55,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:40:29',
            ),
            471 => 
            array (
                'follower_id' => 55,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            472 => 
            array (
                'follower_id' => 55,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:46:13',
            ),
            473 => 
            array (
                'follower_id' => 55,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:40:29',
            ),
            474 => 
            array (
                'follower_id' => 55,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            475 => 
            array (
                'follower_id' => 55,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            476 => 
            array (
                'follower_id' => 55,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            477 => 
            array (
                'follower_id' => 55,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            478 => 
            array (
                'follower_id' => 55,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            479 => 
            array (
                'follower_id' => 55,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            480 => 
            array (
                'follower_id' => 55,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            481 => 
            array (
                'follower_id' => 55,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            482 => 
            array (
                'follower_id' => 55,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            483 => 
            array (
                'follower_id' => 55,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            484 => 
            array (
                'follower_id' => 55,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            485 => 
            array (
                'follower_id' => 55,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            486 => 
            array (
                'follower_id' => 55,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            487 => 
            array (
                'follower_id' => 55,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            488 => 
            array (
                'follower_id' => 55,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            489 => 
            array (
                'follower_id' => 55,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            490 => 
            array (
                'follower_id' => 56,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            491 => 
            array (
                'follower_id' => 56,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            492 => 
            array (
                'follower_id' => 56,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            493 => 
            array (
                'follower_id' => 56,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:40:29',
            ),
            494 => 
            array (
                'follower_id' => 56,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            495 => 
            array (
                'follower_id' => 56,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            496 => 
            array (
                'follower_id' => 56,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            497 => 
            array (
                'follower_id' => 56,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:46:13',
            ),
            498 => 
            array (
                'follower_id' => 56,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            499 => 
            array (
                'follower_id' => 56,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
        ));
        \DB::table('follows')->insert(array (
            0 => 
            array (
                'follower_id' => 56,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:40:29',
            ),
            1 => 
            array (
                'follower_id' => 56,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:46:13',
            ),
            2 => 
            array (
                'follower_id' => 56,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:40:29',
            ),
            3 => 
            array (
                'follower_id' => 56,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:46:13',
            ),
            4 => 
            array (
                'follower_id' => 56,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:46:13',
            ),
            5 => 
            array (
                'follower_id' => 56,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:46:13',
            ),
            6 => 
            array (
                'follower_id' => 56,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            7 => 
            array (
                'follower_id' => 56,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            8 => 
            array (
                'follower_id' => 56,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            9 => 
            array (
                'follower_id' => 57,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            10 => 
            array (
                'follower_id' => 57,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:46:13',
            ),
            11 => 
            array (
                'follower_id' => 57,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            12 => 
            array (
                'follower_id' => 57,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:40:29',
            ),
            13 => 
            array (
                'follower_id' => 57,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            14 => 
            array (
                'follower_id' => 57,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            15 => 
            array (
                'follower_id' => 57,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            16 => 
            array (
                'follower_id' => 57,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            17 => 
            array (
                'follower_id' => 57,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            18 => 
            array (
                'follower_id' => 57,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            19 => 
            array (
                'follower_id' => 57,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            20 => 
            array (
                'follower_id' => 57,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:46:13',
            ),
            21 => 
            array (
                'follower_id' => 57,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            22 => 
            array (
                'follower_id' => 57,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:46:13',
            ),
            23 => 
            array (
                'follower_id' => 57,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            24 => 
            array (
                'follower_id' => 57,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            25 => 
            array (
                'follower_id' => 57,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            26 => 
            array (
                'follower_id' => 57,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            27 => 
            array (
                'follower_id' => 57,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            28 => 
            array (
                'follower_id' => 58,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            29 => 
            array (
                'follower_id' => 58,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            30 => 
            array (
                'follower_id' => 58,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:46:13',
            ),
            31 => 
            array (
                'follower_id' => 58,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            32 => 
            array (
                'follower_id' => 58,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            33 => 
            array (
                'follower_id' => 58,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            34 => 
            array (
                'follower_id' => 58,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            35 => 
            array (
                'follower_id' => 58,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            36 => 
            array (
                'follower_id' => 58,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            37 => 
            array (
                'follower_id' => 58,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            38 => 
            array (
                'follower_id' => 58,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            39 => 
            array (
                'follower_id' => 58,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            40 => 
            array (
                'follower_id' => 58,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:46:13',
            ),
            41 => 
            array (
                'follower_id' => 58,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            42 => 
            array (
                'follower_id' => 58,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            43 => 
            array (
                'follower_id' => 58,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            44 => 
            array (
                'follower_id' => 58,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            45 => 
            array (
                'follower_id' => 58,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            46 => 
            array (
                'follower_id' => 58,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            47 => 
            array (
                'follower_id' => 59,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:40:29',
            ),
            48 => 
            array (
                'follower_id' => 59,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            49 => 
            array (
                'follower_id' => 59,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:46:13',
            ),
            50 => 
            array (
                'follower_id' => 59,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:40:29',
            ),
            51 => 
            array (
                'follower_id' => 59,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            52 => 
            array (
                'follower_id' => 59,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            53 => 
            array (
                'follower_id' => 59,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            54 => 
            array (
                'follower_id' => 59,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:46:13',
            ),
            55 => 
            array (
                'follower_id' => 59,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:46:13',
            ),
            56 => 
            array (
                'follower_id' => 59,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            57 => 
            array (
                'follower_id' => 59,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:40:29',
            ),
            58 => 
            array (
                'follower_id' => 59,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            59 => 
            array (
                'follower_id' => 59,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            60 => 
            array (
                'follower_id' => 59,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            61 => 
            array (
                'follower_id' => 59,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            62 => 
            array (
                'follower_id' => 59,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:46:13',
            ),
            63 => 
            array (
                'follower_id' => 59,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            64 => 
            array (
                'follower_id' => 59,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:46:13',
            ),
            65 => 
            array (
                'follower_id' => 59,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            66 => 
            array (
                'follower_id' => 59,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            67 => 
            array (
                'follower_id' => 60,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            68 => 
            array (
                'follower_id' => 60,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            69 => 
            array (
                'follower_id' => 60,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            70 => 
            array (
                'follower_id' => 60,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            71 => 
            array (
                'follower_id' => 60,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            72 => 
            array (
                'follower_id' => 60,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:40:29',
            ),
            73 => 
            array (
                'follower_id' => 60,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            74 => 
            array (
                'follower_id' => 60,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:40:29',
            ),
            75 => 
            array (
                'follower_id' => 60,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            76 => 
            array (
                'follower_id' => 60,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            77 => 
            array (
                'follower_id' => 60,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            78 => 
            array (
                'follower_id' => 60,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            79 => 
            array (
                'follower_id' => 60,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            80 => 
            array (
                'follower_id' => 60,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            81 => 
            array (
                'follower_id' => 60,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            82 => 
            array (
                'follower_id' => 60,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:46:13',
            ),
            83 => 
            array (
                'follower_id' => 60,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            84 => 
            array (
                'follower_id' => 60,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            85 => 
            array (
                'follower_id' => 60,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            86 => 
            array (
                'follower_id' => 61,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            87 => 
            array (
                'follower_id' => 61,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            88 => 
            array (
                'follower_id' => 61,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            89 => 
            array (
                'follower_id' => 61,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            90 => 
            array (
                'follower_id' => 61,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:46:13',
            ),
            91 => 
            array (
                'follower_id' => 61,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            92 => 
            array (
                'follower_id' => 61,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:46:13',
            ),
            93 => 
            array (
                'follower_id' => 61,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            94 => 
            array (
                'follower_id' => 61,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            95 => 
            array (
                'follower_id' => 61,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            96 => 
            array (
                'follower_id' => 61,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            97 => 
            array (
                'follower_id' => 61,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            98 => 
            array (
                'follower_id' => 61,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:40:29',
            ),
            99 => 
            array (
                'follower_id' => 61,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            100 => 
            array (
                'follower_id' => 61,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            101 => 
            array (
                'follower_id' => 61,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:46:13',
            ),
            102 => 
            array (
                'follower_id' => 61,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:40:29',
            ),
            103 => 
            array (
                'follower_id' => 61,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            104 => 
            array (
                'follower_id' => 61,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            105 => 
            array (
                'follower_id' => 62,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            106 => 
            array (
                'follower_id' => 62,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:40:29',
            ),
            107 => 
            array (
                'follower_id' => 62,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            108 => 
            array (
                'follower_id' => 62,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            109 => 
            array (
                'follower_id' => 62,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:46:13',
            ),
            110 => 
            array (
                'follower_id' => 62,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            111 => 
            array (
                'follower_id' => 62,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            112 => 
            array (
                'follower_id' => 62,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            113 => 
            array (
                'follower_id' => 62,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            114 => 
            array (
                'follower_id' => 62,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            115 => 
            array (
                'follower_id' => 62,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            116 => 
            array (
                'follower_id' => 62,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            117 => 
            array (
                'follower_id' => 62,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            118 => 
            array (
                'follower_id' => 62,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            119 => 
            array (
                'follower_id' => 62,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:46:13',
            ),
            120 => 
            array (
                'follower_id' => 62,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            121 => 
            array (
                'follower_id' => 62,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            122 => 
            array (
                'follower_id' => 62,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:46:13',
            ),
            123 => 
            array (
                'follower_id' => 62,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            124 => 
            array (
                'follower_id' => 63,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            125 => 
            array (
                'follower_id' => 63,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            126 => 
            array (
                'follower_id' => 63,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            127 => 
            array (
                'follower_id' => 63,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:46:13',
            ),
            128 => 
            array (
                'follower_id' => 63,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            129 => 
            array (
                'follower_id' => 63,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:46:13',
            ),
            130 => 
            array (
                'follower_id' => 63,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            131 => 
            array (
                'follower_id' => 63,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            132 => 
            array (
                'follower_id' => 63,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:40:29',
            ),
            133 => 
            array (
                'follower_id' => 63,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            134 => 
            array (
                'follower_id' => 63,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            135 => 
            array (
                'follower_id' => 63,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            136 => 
            array (
                'follower_id' => 63,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            137 => 
            array (
                'follower_id' => 63,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            138 => 
            array (
                'follower_id' => 63,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:40:29',
            ),
            139 => 
            array (
                'follower_id' => 63,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:40:29',
            ),
            140 => 
            array (
                'follower_id' => 63,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            141 => 
            array (
                'follower_id' => 63,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            142 => 
            array (
                'follower_id' => 63,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            143 => 
            array (
                'follower_id' => 64,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            144 => 
            array (
                'follower_id' => 64,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            145 => 
            array (
                'follower_id' => 64,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            146 => 
            array (
                'follower_id' => 64,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:46:13',
            ),
            147 => 
            array (
                'follower_id' => 64,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            148 => 
            array (
                'follower_id' => 64,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            149 => 
            array (
                'follower_id' => 64,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:40:29',
            ),
            150 => 
            array (
                'follower_id' => 64,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:40:29',
            ),
            151 => 
            array (
                'follower_id' => 64,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            152 => 
            array (
                'follower_id' => 64,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:40:29',
            ),
            153 => 
            array (
                'follower_id' => 64,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            154 => 
            array (
                'follower_id' => 64,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            155 => 
            array (
                'follower_id' => 64,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            156 => 
            array (
                'follower_id' => 64,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:40:29',
            ),
            157 => 
            array (
                'follower_id' => 64,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            158 => 
            array (
                'follower_id' => 64,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            159 => 
            array (
                'follower_id' => 64,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            160 => 
            array (
                'follower_id' => 64,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:46:13',
            ),
            161 => 
            array (
                'follower_id' => 65,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:46:13',
            ),
            162 => 
            array (
                'follower_id' => 65,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            163 => 
            array (
                'follower_id' => 65,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            164 => 
            array (
                'follower_id' => 65,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:46:13',
            ),
            165 => 
            array (
                'follower_id' => 65,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            166 => 
            array (
                'follower_id' => 65,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            167 => 
            array (
                'follower_id' => 65,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            168 => 
            array (
                'follower_id' => 65,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            169 => 
            array (
                'follower_id' => 65,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:46:13',
            ),
            170 => 
            array (
                'follower_id' => 65,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            171 => 
            array (
                'follower_id' => 65,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            172 => 
            array (
                'follower_id' => 65,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            173 => 
            array (
                'follower_id' => 65,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            174 => 
            array (
                'follower_id' => 65,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:40:29',
            ),
            175 => 
            array (
                'follower_id' => 65,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            176 => 
            array (
                'follower_id' => 65,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:46:13',
            ),
            177 => 
            array (
                'follower_id' => 65,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            178 => 
            array (
                'follower_id' => 65,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            179 => 
            array (
                'follower_id' => 66,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            180 => 
            array (
                'follower_id' => 66,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            181 => 
            array (
                'follower_id' => 66,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            182 => 
            array (
                'follower_id' => 66,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:46:13',
            ),
            183 => 
            array (
                'follower_id' => 66,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            184 => 
            array (
                'follower_id' => 66,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:40:29',
            ),
            185 => 
            array (
                'follower_id' => 66,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            186 => 
            array (
                'follower_id' => 66,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            187 => 
            array (
                'follower_id' => 66,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:46:13',
            ),
            188 => 
            array (
                'follower_id' => 66,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            189 => 
            array (
                'follower_id' => 66,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            190 => 
            array (
                'follower_id' => 66,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            191 => 
            array (
                'follower_id' => 66,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            192 => 
            array (
                'follower_id' => 66,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            193 => 
            array (
                'follower_id' => 66,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            194 => 
            array (
                'follower_id' => 66,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            195 => 
            array (
                'follower_id' => 66,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            196 => 
            array (
                'follower_id' => 66,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            197 => 
            array (
                'follower_id' => 67,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            198 => 
            array (
                'follower_id' => 67,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            199 => 
            array (
                'follower_id' => 67,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:46:13',
            ),
            200 => 
            array (
                'follower_id' => 67,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            201 => 
            array (
                'follower_id' => 67,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            202 => 
            array (
                'follower_id' => 67,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            203 => 
            array (
                'follower_id' => 67,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            204 => 
            array (
                'follower_id' => 67,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            205 => 
            array (
                'follower_id' => 67,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            206 => 
            array (
                'follower_id' => 67,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            207 => 
            array (
                'follower_id' => 67,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            208 => 
            array (
                'follower_id' => 67,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            209 => 
            array (
                'follower_id' => 67,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:40:29',
            ),
            210 => 
            array (
                'follower_id' => 67,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            211 => 
            array (
                'follower_id' => 67,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            212 => 
            array (
                'follower_id' => 67,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            213 => 
            array (
                'follower_id' => 67,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            214 => 
            array (
                'follower_id' => 68,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            215 => 
            array (
                'follower_id' => 68,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            216 => 
            array (
                'follower_id' => 68,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:46:13',
            ),
            217 => 
            array (
                'follower_id' => 68,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            218 => 
            array (
                'follower_id' => 68,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:40:29',
            ),
            219 => 
            array (
                'follower_id' => 68,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:40:29',
            ),
            220 => 
            array (
                'follower_id' => 68,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            221 => 
            array (
                'follower_id' => 68,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            222 => 
            array (
                'follower_id' => 68,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:46:13',
            ),
            223 => 
            array (
                'follower_id' => 68,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            224 => 
            array (
                'follower_id' => 68,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            225 => 
            array (
                'follower_id' => 68,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            226 => 
            array (
                'follower_id' => 68,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            227 => 
            array (
                'follower_id' => 68,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            228 => 
            array (
                'follower_id' => 68,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            229 => 
            array (
                'follower_id' => 68,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            230 => 
            array (
                'follower_id' => 68,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:40:29',
            ),
            231 => 
            array (
                'follower_id' => 68,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            232 => 
            array (
                'follower_id' => 68,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            233 => 
            array (
                'follower_id' => 69,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            234 => 
            array (
                'follower_id' => 69,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            235 => 
            array (
                'follower_id' => 69,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            236 => 
            array (
                'follower_id' => 69,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            237 => 
            array (
                'follower_id' => 69,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            238 => 
            array (
                'follower_id' => 69,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:46:13',
            ),
            239 => 
            array (
                'follower_id' => 69,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            240 => 
            array (
                'follower_id' => 69,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:46:13',
            ),
            241 => 
            array (
                'follower_id' => 69,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            242 => 
            array (
                'follower_id' => 69,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            243 => 
            array (
                'follower_id' => 69,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            244 => 
            array (
                'follower_id' => 69,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            245 => 
            array (
                'follower_id' => 69,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            246 => 
            array (
                'follower_id' => 69,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            247 => 
            array (
                'follower_id' => 69,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:40:29',
            ),
            248 => 
            array (
                'follower_id' => 69,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            249 => 
            array (
                'follower_id' => 69,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:40:29',
            ),
            250 => 
            array (
                'follower_id' => 69,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            251 => 
            array (
                'follower_id' => 70,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:40:29',
            ),
            252 => 
            array (
                'follower_id' => 70,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            253 => 
            array (
                'follower_id' => 70,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            254 => 
            array (
                'follower_id' => 70,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            255 => 
            array (
                'follower_id' => 70,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            256 => 
            array (
                'follower_id' => 70,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            257 => 
            array (
                'follower_id' => 70,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            258 => 
            array (
                'follower_id' => 70,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            259 => 
            array (
                'follower_id' => 70,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            260 => 
            array (
                'follower_id' => 70,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            261 => 
            array (
                'follower_id' => 70,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            262 => 
            array (
                'follower_id' => 70,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:46:13',
            ),
            263 => 
            array (
                'follower_id' => 70,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            264 => 
            array (
                'follower_id' => 70,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            265 => 
            array (
                'follower_id' => 70,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            266 => 
            array (
                'follower_id' => 70,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            267 => 
            array (
                'follower_id' => 70,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:40:29',
            ),
            268 => 
            array (
                'follower_id' => 70,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            269 => 
            array (
                'follower_id' => 70,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            270 => 
            array (
                'follower_id' => 70,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            271 => 
            array (
                'follower_id' => 71,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            272 => 
            array (
                'follower_id' => 71,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            273 => 
            array (
                'follower_id' => 71,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            274 => 
            array (
                'follower_id' => 71,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:46:13',
            ),
            275 => 
            array (
                'follower_id' => 71,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            276 => 
            array (
                'follower_id' => 71,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            277 => 
            array (
                'follower_id' => 71,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            278 => 
            array (
                'follower_id' => 71,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            279 => 
            array (
                'follower_id' => 71,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:46:13',
            ),
            280 => 
            array (
                'follower_id' => 71,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            281 => 
            array (
                'follower_id' => 71,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            282 => 
            array (
                'follower_id' => 71,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            283 => 
            array (
                'follower_id' => 71,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:46:13',
            ),
            284 => 
            array (
                'follower_id' => 71,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            285 => 
            array (
                'follower_id' => 71,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            286 => 
            array (
                'follower_id' => 71,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            287 => 
            array (
                'follower_id' => 71,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            288 => 
            array (
                'follower_id' => 71,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            289 => 
            array (
                'follower_id' => 71,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:46:13',
            ),
            290 => 
            array (
                'follower_id' => 72,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:40:29',
            ),
            291 => 
            array (
                'follower_id' => 72,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            292 => 
            array (
                'follower_id' => 72,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            293 => 
            array (
                'follower_id' => 72,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:40:29',
            ),
            294 => 
            array (
                'follower_id' => 72,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            295 => 
            array (
                'follower_id' => 72,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:46:13',
            ),
            296 => 
            array (
                'follower_id' => 72,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            297 => 
            array (
                'follower_id' => 72,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            298 => 
            array (
                'follower_id' => 72,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            299 => 
            array (
                'follower_id' => 72,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            300 => 
            array (
                'follower_id' => 72,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            301 => 
            array (
                'follower_id' => 72,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            302 => 
            array (
                'follower_id' => 72,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            303 => 
            array (
                'follower_id' => 72,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            304 => 
            array (
                'follower_id' => 72,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:40:29',
            ),
            305 => 
            array (
                'follower_id' => 72,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            306 => 
            array (
                'follower_id' => 72,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            307 => 
            array (
                'follower_id' => 72,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:46:13',
            ),
            308 => 
            array (
                'follower_id' => 72,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            309 => 
            array (
                'follower_id' => 72,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            310 => 
            array (
                'follower_id' => 73,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            311 => 
            array (
                'follower_id' => 73,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:46:13',
            ),
            312 => 
            array (
                'follower_id' => 73,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            313 => 
            array (
                'follower_id' => 73,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            314 => 
            array (
                'follower_id' => 73,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            315 => 
            array (
                'follower_id' => 73,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            316 => 
            array (
                'follower_id' => 73,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:40:29',
            ),
            317 => 
            array (
                'follower_id' => 73,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            318 => 
            array (
                'follower_id' => 73,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            319 => 
            array (
                'follower_id' => 73,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:40:29',
            ),
            320 => 
            array (
                'follower_id' => 73,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            321 => 
            array (
                'follower_id' => 73,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:46:13',
            ),
            322 => 
            array (
                'follower_id' => 73,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:40:29',
            ),
            323 => 
            array (
                'follower_id' => 73,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            324 => 
            array (
                'follower_id' => 73,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            325 => 
            array (
                'follower_id' => 73,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            326 => 
            array (
                'follower_id' => 73,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            327 => 
            array (
                'follower_id' => 73,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            328 => 
            array (
                'follower_id' => 73,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            329 => 
            array (
                'follower_id' => 74,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            330 => 
            array (
                'follower_id' => 74,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            331 => 
            array (
                'follower_id' => 74,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            332 => 
            array (
                'follower_id' => 74,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            333 => 
            array (
                'follower_id' => 74,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:40:29',
            ),
            334 => 
            array (
                'follower_id' => 74,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            335 => 
            array (
                'follower_id' => 74,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            336 => 
            array (
                'follower_id' => 74,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            337 => 
            array (
                'follower_id' => 74,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            338 => 
            array (
                'follower_id' => 74,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            339 => 
            array (
                'follower_id' => 74,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            340 => 
            array (
                'follower_id' => 74,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:46:13',
            ),
            341 => 
            array (
                'follower_id' => 74,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:46:13',
            ),
            342 => 
            array (
                'follower_id' => 74,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:46:13',
            ),
            343 => 
            array (
                'follower_id' => 74,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            344 => 
            array (
                'follower_id' => 74,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:46:13',
            ),
            345 => 
            array (
                'follower_id' => 74,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            346 => 
            array (
                'follower_id' => 74,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            347 => 
            array (
                'follower_id' => 74,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            348 => 
            array (
                'follower_id' => 75,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            349 => 
            array (
                'follower_id' => 75,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            350 => 
            array (
                'follower_id' => 75,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:46:13',
            ),
            351 => 
            array (
                'follower_id' => 75,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            352 => 
            array (
                'follower_id' => 75,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:46:13',
            ),
            353 => 
            array (
                'follower_id' => 75,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:40:29',
            ),
            354 => 
            array (
                'follower_id' => 75,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:46:13',
            ),
            355 => 
            array (
                'follower_id' => 75,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:40:29',
            ),
            356 => 
            array (
                'follower_id' => 75,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            357 => 
            array (
                'follower_id' => 75,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            358 => 
            array (
                'follower_id' => 75,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:46:13',
            ),
            359 => 
            array (
                'follower_id' => 75,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            360 => 
            array (
                'follower_id' => 75,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            361 => 
            array (
                'follower_id' => 75,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:40:29',
            ),
            362 => 
            array (
                'follower_id' => 75,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            363 => 
            array (
                'follower_id' => 75,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:40:29',
            ),
            364 => 
            array (
                'follower_id' => 75,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:46:13',
            ),
            365 => 
            array (
                'follower_id' => 75,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            366 => 
            array (
                'follower_id' => 75,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            367 => 
            array (
                'follower_id' => 75,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:46:13',
            ),
            368 => 
            array (
                'follower_id' => 76,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            369 => 
            array (
                'follower_id' => 76,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:46:13',
            ),
            370 => 
            array (
                'follower_id' => 76,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            371 => 
            array (
                'follower_id' => 76,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            372 => 
            array (
                'follower_id' => 76,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            373 => 
            array (
                'follower_id' => 76,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:46:13',
            ),
            374 => 
            array (
                'follower_id' => 76,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            375 => 
            array (
                'follower_id' => 76,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            376 => 
            array (
                'follower_id' => 76,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            377 => 
            array (
                'follower_id' => 76,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            378 => 
            array (
                'follower_id' => 76,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            379 => 
            array (
                'follower_id' => 76,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            380 => 
            array (
                'follower_id' => 76,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:46:13',
            ),
            381 => 
            array (
                'follower_id' => 76,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            382 => 
            array (
                'follower_id' => 76,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            383 => 
            array (
                'follower_id' => 76,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            384 => 
            array (
                'follower_id' => 76,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            385 => 
            array (
                'follower_id' => 77,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            386 => 
            array (
                'follower_id' => 77,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            387 => 
            array (
                'follower_id' => 77,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:40:29',
            ),
            388 => 
            array (
                'follower_id' => 77,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:40:29',
            ),
            389 => 
            array (
                'follower_id' => 77,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            390 => 
            array (
                'follower_id' => 77,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            391 => 
            array (
                'follower_id' => 77,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:46:13',
            ),
            392 => 
            array (
                'follower_id' => 77,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            393 => 
            array (
                'follower_id' => 77,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:46:13',
            ),
            394 => 
            array (
                'follower_id' => 77,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            395 => 
            array (
                'follower_id' => 77,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            396 => 
            array (
                'follower_id' => 77,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            397 => 
            array (
                'follower_id' => 77,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:46:13',
            ),
            398 => 
            array (
                'follower_id' => 77,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            399 => 
            array (
                'follower_id' => 77,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:46:13',
            ),
            400 => 
            array (
                'follower_id' => 77,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:46:13',
            ),
            401 => 
            array (
                'follower_id' => 77,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            402 => 
            array (
                'follower_id' => 77,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            403 => 
            array (
                'follower_id' => 78,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:46:13',
            ),
            404 => 
            array (
                'follower_id' => 78,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            405 => 
            array (
                'follower_id' => 78,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:46:13',
            ),
            406 => 
            array (
                'follower_id' => 78,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:40:29',
            ),
            407 => 
            array (
                'follower_id' => 78,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            408 => 
            array (
                'follower_id' => 78,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            409 => 
            array (
                'follower_id' => 78,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            410 => 
            array (
                'follower_id' => 78,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            411 => 
            array (
                'follower_id' => 78,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:40:29',
            ),
            412 => 
            array (
                'follower_id' => 78,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:46:13',
            ),
            413 => 
            array (
                'follower_id' => 78,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:46:13',
            ),
            414 => 
            array (
                'follower_id' => 78,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:46:13',
            ),
            415 => 
            array (
                'follower_id' => 78,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:40:29',
            ),
            416 => 
            array (
                'follower_id' => 78,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            417 => 
            array (
                'follower_id' => 78,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            418 => 
            array (
                'follower_id' => 78,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:46:13',
            ),
            419 => 
            array (
                'follower_id' => 78,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            420 => 
            array (
                'follower_id' => 78,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:40:29',
            ),
            421 => 
            array (
                'follower_id' => 78,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            422 => 
            array (
                'follower_id' => 78,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            423 => 
            array (
                'follower_id' => 79,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:40:29',
            ),
            424 => 
            array (
                'follower_id' => 79,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            425 => 
            array (
                'follower_id' => 79,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            426 => 
            array (
                'follower_id' => 79,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:40:29',
            ),
            427 => 
            array (
                'follower_id' => 79,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:40:29',
            ),
            428 => 
            array (
                'follower_id' => 79,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:46:13',
            ),
            429 => 
            array (
                'follower_id' => 79,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            430 => 
            array (
                'follower_id' => 79,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            431 => 
            array (
                'follower_id' => 79,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            432 => 
            array (
                'follower_id' => 79,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            433 => 
            array (
                'follower_id' => 79,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            434 => 
            array (
                'follower_id' => 79,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            435 => 
            array (
                'follower_id' => 79,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            436 => 
            array (
                'follower_id' => 79,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            437 => 
            array (
                'follower_id' => 79,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            438 => 
            array (
                'follower_id' => 79,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            439 => 
            array (
                'follower_id' => 79,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:46:13',
            ),
            440 => 
            array (
                'follower_id' => 79,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:46:13',
            ),
            441 => 
            array (
                'follower_id' => 79,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            442 => 
            array (
                'follower_id' => 80,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            443 => 
            array (
                'follower_id' => 80,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            444 => 
            array (
                'follower_id' => 80,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            445 => 
            array (
                'follower_id' => 80,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:46:13',
            ),
            446 => 
            array (
                'follower_id' => 80,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:40:29',
            ),
            447 => 
            array (
                'follower_id' => 80,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            448 => 
            array (
                'follower_id' => 80,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            449 => 
            array (
                'follower_id' => 80,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            450 => 
            array (
                'follower_id' => 80,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            451 => 
            array (
                'follower_id' => 80,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            452 => 
            array (
                'follower_id' => 80,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:46:13',
            ),
            453 => 
            array (
                'follower_id' => 80,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:46:13',
            ),
            454 => 
            array (
                'follower_id' => 80,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:40:29',
            ),
            455 => 
            array (
                'follower_id' => 80,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            456 => 
            array (
                'follower_id' => 80,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:46:13',
            ),
            457 => 
            array (
                'follower_id' => 80,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            458 => 
            array (
                'follower_id' => 80,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            459 => 
            array (
                'follower_id' => 81,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:46:13',
            ),
            460 => 
            array (
                'follower_id' => 81,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            461 => 
            array (
                'follower_id' => 81,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            462 => 
            array (
                'follower_id' => 81,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            463 => 
            array (
                'follower_id' => 81,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:46:13',
            ),
            464 => 
            array (
                'follower_id' => 81,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            465 => 
            array (
                'follower_id' => 81,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            466 => 
            array (
                'follower_id' => 81,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            467 => 
            array (
                'follower_id' => 81,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            468 => 
            array (
                'follower_id' => 81,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:46:13',
            ),
            469 => 
            array (
                'follower_id' => 81,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:40:29',
            ),
            470 => 
            array (
                'follower_id' => 81,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:46:13',
            ),
            471 => 
            array (
                'follower_id' => 81,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            472 => 
            array (
                'follower_id' => 81,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:40:29',
            ),
            473 => 
            array (
                'follower_id' => 81,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            474 => 
            array (
                'follower_id' => 81,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            475 => 
            array (
                'follower_id' => 81,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            476 => 
            array (
                'follower_id' => 82,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:40:29',
            ),
            477 => 
            array (
                'follower_id' => 82,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:46:13',
            ),
            478 => 
            array (
                'follower_id' => 82,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            479 => 
            array (
                'follower_id' => 82,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            480 => 
            array (
                'follower_id' => 82,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            481 => 
            array (
                'follower_id' => 82,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            482 => 
            array (
                'follower_id' => 82,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            483 => 
            array (
                'follower_id' => 82,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            484 => 
            array (
                'follower_id' => 82,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            485 => 
            array (
                'follower_id' => 82,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:40:29',
            ),
            486 => 
            array (
                'follower_id' => 82,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            487 => 
            array (
                'follower_id' => 82,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:46:13',
            ),
            488 => 
            array (
                'follower_id' => 82,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            489 => 
            array (
                'follower_id' => 82,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            490 => 
            array (
                'follower_id' => 82,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            491 => 
            array (
                'follower_id' => 82,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:40:29',
            ),
            492 => 
            array (
                'follower_id' => 82,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            493 => 
            array (
                'follower_id' => 82,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:46:13',
            ),
            494 => 
            array (
                'follower_id' => 82,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:46:13',
            ),
            495 => 
            array (
                'follower_id' => 83,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:40:29',
            ),
            496 => 
            array (
                'follower_id' => 83,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            497 => 
            array (
                'follower_id' => 83,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            498 => 
            array (
                'follower_id' => 83,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:40:29',
            ),
            499 => 
            array (
                'follower_id' => 83,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:46:13',
            ),
        ));
        \DB::table('follows')->insert(array (
            0 => 
            array (
                'follower_id' => 83,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:40:29',
            ),
            1 => 
            array (
                'follower_id' => 83,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            2 => 
            array (
                'follower_id' => 83,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:40:29',
            ),
            3 => 
            array (
                'follower_id' => 83,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            4 => 
            array (
                'follower_id' => 83,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            5 => 
            array (
                'follower_id' => 83,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            6 => 
            array (
                'follower_id' => 83,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:46:13',
            ),
            7 => 
            array (
                'follower_id' => 83,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            8 => 
            array (
                'follower_id' => 83,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:46:13',
            ),
            9 => 
            array (
                'follower_id' => 83,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            10 => 
            array (
                'follower_id' => 83,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:46:13',
            ),
            11 => 
            array (
                'follower_id' => 83,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:40:29',
            ),
            12 => 
            array (
                'follower_id' => 84,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:46:13',
            ),
            13 => 
            array (
                'follower_id' => 84,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            14 => 
            array (
                'follower_id' => 84,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            15 => 
            array (
                'follower_id' => 84,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            16 => 
            array (
                'follower_id' => 84,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            17 => 
            array (
                'follower_id' => 84,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:46:13',
            ),
            18 => 
            array (
                'follower_id' => 84,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            19 => 
            array (
                'follower_id' => 84,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            20 => 
            array (
                'follower_id' => 84,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            21 => 
            array (
                'follower_id' => 84,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:40:29',
            ),
            22 => 
            array (
                'follower_id' => 84,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            23 => 
            array (
                'follower_id' => 84,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            24 => 
            array (
                'follower_id' => 84,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            25 => 
            array (
                'follower_id' => 84,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            26 => 
            array (
                'follower_id' => 84,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:40:29',
            ),
            27 => 
            array (
                'follower_id' => 84,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:46:13',
            ),
            28 => 
            array (
                'follower_id' => 84,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:46:13',
            ),
            29 => 
            array (
                'follower_id' => 84,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            30 => 
            array (
                'follower_id' => 84,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            31 => 
            array (
                'follower_id' => 84,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            32 => 
            array (
                'follower_id' => 85,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            33 => 
            array (
                'follower_id' => 85,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:46:13',
            ),
            34 => 
            array (
                'follower_id' => 85,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:40:29',
            ),
            35 => 
            array (
                'follower_id' => 85,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            36 => 
            array (
                'follower_id' => 85,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            37 => 
            array (
                'follower_id' => 85,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            38 => 
            array (
                'follower_id' => 85,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:40:29',
            ),
            39 => 
            array (
                'follower_id' => 85,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            40 => 
            array (
                'follower_id' => 85,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            41 => 
            array (
                'follower_id' => 85,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            42 => 
            array (
                'follower_id' => 85,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:46:13',
            ),
            43 => 
            array (
                'follower_id' => 85,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:46:13',
            ),
            44 => 
            array (
                'follower_id' => 85,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            45 => 
            array (
                'follower_id' => 85,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            46 => 
            array (
                'follower_id' => 85,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            47 => 
            array (
                'follower_id' => 85,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:46:13',
            ),
            48 => 
            array (
                'follower_id' => 85,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            49 => 
            array (
                'follower_id' => 85,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:46:13',
            ),
            50 => 
            array (
                'follower_id' => 85,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            51 => 
            array (
                'follower_id' => 85,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:40:29',
            ),
            52 => 
            array (
                'follower_id' => 86,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:40:29',
            ),
            53 => 
            array (
                'follower_id' => 86,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            54 => 
            array (
                'follower_id' => 86,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:40:29',
            ),
            55 => 
            array (
                'follower_id' => 86,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            56 => 
            array (
                'follower_id' => 86,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:40:29',
            ),
            57 => 
            array (
                'follower_id' => 86,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:46:13',
            ),
            58 => 
            array (
                'follower_id' => 86,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            59 => 
            array (
                'follower_id' => 86,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            60 => 
            array (
                'follower_id' => 86,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            61 => 
            array (
                'follower_id' => 86,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            62 => 
            array (
                'follower_id' => 86,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            63 => 
            array (
                'follower_id' => 86,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:46:13',
            ),
            64 => 
            array (
                'follower_id' => 86,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            65 => 
            array (
                'follower_id' => 86,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:46:13',
            ),
            66 => 
            array (
                'follower_id' => 86,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            67 => 
            array (
                'follower_id' => 86,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:46:13',
            ),
            68 => 
            array (
                'follower_id' => 86,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            69 => 
            array (
                'follower_id' => 86,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:46:13',
            ),
            70 => 
            array (
                'follower_id' => 86,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:40:29',
            ),
            71 => 
            array (
                'follower_id' => 86,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            72 => 
            array (
                'follower_id' => 87,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            73 => 
            array (
                'follower_id' => 87,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            74 => 
            array (
                'follower_id' => 87,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:40:29',
            ),
            75 => 
            array (
                'follower_id' => 87,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            76 => 
            array (
                'follower_id' => 87,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            77 => 
            array (
                'follower_id' => 87,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:46:13',
            ),
            78 => 
            array (
                'follower_id' => 87,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:46:13',
            ),
            79 => 
            array (
                'follower_id' => 87,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            80 => 
            array (
                'follower_id' => 87,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            81 => 
            array (
                'follower_id' => 87,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            82 => 
            array (
                'follower_id' => 87,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            83 => 
            array (
                'follower_id' => 87,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            84 => 
            array (
                'follower_id' => 87,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:46:13',
            ),
            85 => 
            array (
                'follower_id' => 87,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            86 => 
            array (
                'follower_id' => 87,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            87 => 
            array (
                'follower_id' => 87,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:46:13',
            ),
            88 => 
            array (
                'follower_id' => 87,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            89 => 
            array (
                'follower_id' => 87,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:40:29',
            ),
            90 => 
            array (
                'follower_id' => 87,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:40:29',
            ),
            91 => 
            array (
                'follower_id' => 87,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            92 => 
            array (
                'follower_id' => 88,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            93 => 
            array (
                'follower_id' => 88,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            94 => 
            array (
                'follower_id' => 88,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:46:13',
            ),
            95 => 
            array (
                'follower_id' => 88,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            96 => 
            array (
                'follower_id' => 88,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:46:13',
            ),
            97 => 
            array (
                'follower_id' => 88,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            98 => 
            array (
                'follower_id' => 88,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:46:13',
            ),
            99 => 
            array (
                'follower_id' => 88,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            100 => 
            array (
                'follower_id' => 88,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            101 => 
            array (
                'follower_id' => 88,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:40:29',
            ),
            102 => 
            array (
                'follower_id' => 88,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:46:13',
            ),
            103 => 
            array (
                'follower_id' => 88,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            104 => 
            array (
                'follower_id' => 88,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            105 => 
            array (
                'follower_id' => 88,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            106 => 
            array (
                'follower_id' => 88,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            107 => 
            array (
                'follower_id' => 88,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            108 => 
            array (
                'follower_id' => 88,
                'following_id' => 86,
                'created_at' => '2026-05-18 13:46:13',
            ),
            109 => 
            array (
                'follower_id' => 88,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            110 => 
            array (
                'follower_id' => 88,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            111 => 
            array (
                'follower_id' => 88,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:46:13',
            ),
            112 => 
            array (
                'follower_id' => 89,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            113 => 
            array (
                'follower_id' => 89,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:40:29',
            ),
            114 => 
            array (
                'follower_id' => 89,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            115 => 
            array (
                'follower_id' => 89,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            116 => 
            array (
                'follower_id' => 89,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            117 => 
            array (
                'follower_id' => 89,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:40:29',
            ),
            118 => 
            array (
                'follower_id' => 89,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            119 => 
            array (
                'follower_id' => 89,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:40:29',
            ),
            120 => 
            array (
                'follower_id' => 89,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            121 => 
            array (
                'follower_id' => 89,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            122 => 
            array (
                'follower_id' => 89,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            123 => 
            array (
                'follower_id' => 89,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            124 => 
            array (
                'follower_id' => 89,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:46:13',
            ),
            125 => 
            array (
                'follower_id' => 89,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            126 => 
            array (
                'follower_id' => 89,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            127 => 
            array (
                'follower_id' => 89,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            128 => 
            array (
                'follower_id' => 89,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            129 => 
            array (
                'follower_id' => 89,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:40:29',
            ),
            130 => 
            array (
                'follower_id' => 89,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:46:13',
            ),
            131 => 
            array (
                'follower_id' => 89,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            132 => 
            array (
                'follower_id' => 90,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:46:13',
            ),
            133 => 
            array (
                'follower_id' => 90,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            134 => 
            array (
                'follower_id' => 90,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:46:13',
            ),
            135 => 
            array (
                'follower_id' => 90,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            136 => 
            array (
                'follower_id' => 90,
                'following_id' => 23,
                'created_at' => '2026-05-18 13:46:13',
            ),
            137 => 
            array (
                'follower_id' => 90,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            138 => 
            array (
                'follower_id' => 90,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            139 => 
            array (
                'follower_id' => 90,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:46:13',
            ),
            140 => 
            array (
                'follower_id' => 90,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            141 => 
            array (
                'follower_id' => 90,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            142 => 
            array (
                'follower_id' => 90,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:46:13',
            ),
            143 => 
            array (
                'follower_id' => 90,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            144 => 
            array (
                'follower_id' => 90,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            145 => 
            array (
                'follower_id' => 90,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:40:29',
            ),
            146 => 
            array (
                'follower_id' => 90,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:40:29',
            ),
            147 => 
            array (
                'follower_id' => 90,
                'following_id' => 84,
                'created_at' => '2026-05-18 13:40:29',
            ),
            148 => 
            array (
                'follower_id' => 90,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:46:13',
            ),
            149 => 
            array (
                'follower_id' => 90,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            150 => 
            array (
                'follower_id' => 90,
                'following_id' => 89,
                'created_at' => '2026-05-18 13:40:29',
            ),
            151 => 
            array (
                'follower_id' => 90,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:40:29',
            ),
            152 => 
            array (
                'follower_id' => 91,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            153 => 
            array (
                'follower_id' => 91,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            154 => 
            array (
                'follower_id' => 91,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            155 => 
            array (
                'follower_id' => 91,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:40:29',
            ),
            156 => 
            array (
                'follower_id' => 91,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:46:13',
            ),
            157 => 
            array (
                'follower_id' => 91,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            158 => 
            array (
                'follower_id' => 91,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:46:13',
            ),
            159 => 
            array (
                'follower_id' => 91,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            160 => 
            array (
                'follower_id' => 91,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:46:13',
            ),
            161 => 
            array (
                'follower_id' => 91,
                'following_id' => 41,
                'created_at' => '2026-05-18 13:40:29',
            ),
            162 => 
            array (
                'follower_id' => 91,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            163 => 
            array (
                'follower_id' => 91,
                'following_id' => 60,
                'created_at' => '2026-05-18 13:40:29',
            ),
            164 => 
            array (
                'follower_id' => 91,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:46:13',
            ),
            165 => 
            array (
                'follower_id' => 91,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            166 => 
            array (
                'follower_id' => 91,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            167 => 
            array (
                'follower_id' => 91,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:40:29',
            ),
            168 => 
            array (
                'follower_id' => 91,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            169 => 
            array (
                'follower_id' => 91,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            170 => 
            array (
                'follower_id' => 91,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
            171 => 
            array (
                'follower_id' => 91,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:46:13',
            ),
            172 => 
            array (
                'follower_id' => 92,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            173 => 
            array (
                'follower_id' => 92,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:40:29',
            ),
            174 => 
            array (
                'follower_id' => 92,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            175 => 
            array (
                'follower_id' => 92,
                'following_id' => 14,
                'created_at' => '2026-05-18 13:40:29',
            ),
            176 => 
            array (
                'follower_id' => 92,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            177 => 
            array (
                'follower_id' => 92,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            178 => 
            array (
                'follower_id' => 92,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            179 => 
            array (
                'follower_id' => 92,
                'following_id' => 34,
                'created_at' => '2026-05-18 13:40:29',
            ),
            180 => 
            array (
                'follower_id' => 92,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            181 => 
            array (
                'follower_id' => 92,
                'following_id' => 39,
                'created_at' => '2026-05-18 13:40:29',
            ),
            182 => 
            array (
                'follower_id' => 92,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            183 => 
            array (
                'follower_id' => 92,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            184 => 
            array (
                'follower_id' => 92,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            185 => 
            array (
                'follower_id' => 92,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            186 => 
            array (
                'follower_id' => 92,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            187 => 
            array (
                'follower_id' => 92,
                'following_id' => 67,
                'created_at' => '2026-05-18 13:46:13',
            ),
            188 => 
            array (
                'follower_id' => 92,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            189 => 
            array (
                'follower_id' => 92,
                'following_id' => 79,
                'created_at' => '2026-05-18 13:46:13',
            ),
            190 => 
            array (
                'follower_id' => 92,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            191 => 
            array (
                'follower_id' => 92,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:46:13',
            ),
            192 => 
            array (
                'follower_id' => 93,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            193 => 
            array (
                'follower_id' => 93,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:40:29',
            ),
            194 => 
            array (
                'follower_id' => 93,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            195 => 
            array (
                'follower_id' => 93,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:40:29',
            ),
            196 => 
            array (
                'follower_id' => 93,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:40:29',
            ),
            197 => 
            array (
                'follower_id' => 93,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            198 => 
            array (
                'follower_id' => 93,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            199 => 
            array (
                'follower_id' => 93,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            200 => 
            array (
                'follower_id' => 93,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:40:29',
            ),
            201 => 
            array (
                'follower_id' => 93,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:40:29',
            ),
            202 => 
            array (
                'follower_id' => 93,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            203 => 
            array (
                'follower_id' => 93,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:46:13',
            ),
            204 => 
            array (
                'follower_id' => 93,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:46:13',
            ),
            205 => 
            array (
                'follower_id' => 93,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            206 => 
            array (
                'follower_id' => 93,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:40:29',
            ),
            207 => 
            array (
                'follower_id' => 93,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            208 => 
            array (
                'follower_id' => 93,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:46:13',
            ),
            209 => 
            array (
                'follower_id' => 93,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:40:29',
            ),
            210 => 
            array (
                'follower_id' => 94,
                'following_id' => 3,
                'created_at' => '2026-05-18 13:46:13',
            ),
            211 => 
            array (
                'follower_id' => 94,
                'following_id' => 7,
                'created_at' => '2026-05-18 13:46:13',
            ),
            212 => 
            array (
                'follower_id' => 94,
                'following_id' => 12,
                'created_at' => '2026-05-18 13:46:13',
            ),
            213 => 
            array (
                'follower_id' => 94,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:40:29',
            ),
            214 => 
            array (
                'follower_id' => 94,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            215 => 
            array (
                'follower_id' => 94,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:40:29',
            ),
            216 => 
            array (
                'follower_id' => 94,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            217 => 
            array (
                'follower_id' => 94,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            218 => 
            array (
                'follower_id' => 94,
                'following_id' => 38,
                'created_at' => '2026-05-18 13:46:13',
            ),
            219 => 
            array (
                'follower_id' => 94,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:46:13',
            ),
            220 => 
            array (
                'follower_id' => 94,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            221 => 
            array (
                'follower_id' => 94,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            222 => 
            array (
                'follower_id' => 94,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:40:29',
            ),
            223 => 
            array (
                'follower_id' => 94,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            224 => 
            array (
                'follower_id' => 94,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            225 => 
            array (
                'follower_id' => 94,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            226 => 
            array (
                'follower_id' => 94,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            227 => 
            array (
                'follower_id' => 94,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            228 => 
            array (
                'follower_id' => 94,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            229 => 
            array (
                'follower_id' => 95,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            230 => 
            array (
                'follower_id' => 95,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:40:29',
            ),
            231 => 
            array (
                'follower_id' => 95,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            232 => 
            array (
                'follower_id' => 95,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:40:29',
            ),
            233 => 
            array (
                'follower_id' => 95,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:40:29',
            ),
            234 => 
            array (
                'follower_id' => 95,
                'following_id' => 33,
                'created_at' => '2026-05-18 13:46:13',
            ),
            235 => 
            array (
                'follower_id' => 95,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            236 => 
            array (
                'follower_id' => 95,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            237 => 
            array (
                'follower_id' => 95,
                'following_id' => 53,
                'created_at' => '2026-05-18 13:46:13',
            ),
            238 => 
            array (
                'follower_id' => 95,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:40:29',
            ),
            239 => 
            array (
                'follower_id' => 95,
                'following_id' => 62,
                'created_at' => '2026-05-18 13:40:29',
            ),
            240 => 
            array (
                'follower_id' => 95,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            241 => 
            array (
                'follower_id' => 95,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:46:13',
            ),
            242 => 
            array (
                'follower_id' => 95,
                'following_id' => 73,
                'created_at' => '2026-05-18 13:40:29',
            ),
            243 => 
            array (
                'follower_id' => 95,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:46:13',
            ),
            244 => 
            array (
                'follower_id' => 95,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            245 => 
            array (
                'follower_id' => 95,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            246 => 
            array (
                'follower_id' => 95,
                'following_id' => 98,
                'created_at' => '2026-05-18 13:46:13',
            ),
            247 => 
            array (
                'follower_id' => 95,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:46:13',
            ),
            248 => 
            array (
                'follower_id' => 96,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:46:13',
            ),
            249 => 
            array (
                'follower_id' => 96,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            250 => 
            array (
                'follower_id' => 96,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:40:29',
            ),
            251 => 
            array (
                'follower_id' => 96,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:40:29',
            ),
            252 => 
            array (
                'follower_id' => 96,
                'following_id' => 28,
                'created_at' => '2026-05-18 13:40:29',
            ),
            253 => 
            array (
                'follower_id' => 96,
                'following_id' => 31,
                'created_at' => '2026-05-18 13:40:29',
            ),
            254 => 
            array (
                'follower_id' => 96,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:40:29',
            ),
            255 => 
            array (
                'follower_id' => 96,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            256 => 
            array (
                'follower_id' => 96,
                'following_id' => 37,
                'created_at' => '2026-05-18 13:40:29',
            ),
            257 => 
            array (
                'follower_id' => 96,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            258 => 
            array (
                'follower_id' => 96,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:46:13',
            ),
            259 => 
            array (
                'follower_id' => 96,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:40:29',
            ),
            260 => 
            array (
                'follower_id' => 96,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            261 => 
            array (
                'follower_id' => 96,
                'following_id' => 71,
                'created_at' => '2026-05-18 13:40:29',
            ),
            262 => 
            array (
                'follower_id' => 96,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            263 => 
            array (
                'follower_id' => 96,
                'following_id' => 83,
                'created_at' => '2026-05-18 13:46:13',
            ),
            264 => 
            array (
                'follower_id' => 96,
                'following_id' => 87,
                'created_at' => '2026-05-18 13:46:13',
            ),
            265 => 
            array (
                'follower_id' => 96,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            266 => 
            array (
                'follower_id' => 96,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            267 => 
            array (
                'follower_id' => 97,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:46:13',
            ),
            268 => 
            array (
                'follower_id' => 97,
                'following_id' => 11,
                'created_at' => '2026-05-18 13:40:29',
            ),
            269 => 
            array (
                'follower_id' => 97,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:40:29',
            ),
            270 => 
            array (
                'follower_id' => 97,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:40:29',
            ),
            271 => 
            array (
                'follower_id' => 97,
                'following_id' => 27,
                'created_at' => '2026-05-18 13:40:29',
            ),
            272 => 
            array (
                'follower_id' => 97,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:46:13',
            ),
            273 => 
            array (
                'follower_id' => 97,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:46:13',
            ),
            274 => 
            array (
                'follower_id' => 97,
                'following_id' => 40,
                'created_at' => '2026-05-18 13:46:13',
            ),
            275 => 
            array (
                'follower_id' => 97,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            276 => 
            array (
                'follower_id' => 97,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:40:29',
            ),
            277 => 
            array (
                'follower_id' => 97,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:46:13',
            ),
            278 => 
            array (
                'follower_id' => 97,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            279 => 
            array (
                'follower_id' => 97,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:46:13',
            ),
            280 => 
            array (
                'follower_id' => 97,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:40:29',
            ),
            281 => 
            array (
                'follower_id' => 97,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            282 => 
            array (
                'follower_id' => 97,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            283 => 
            array (
                'follower_id' => 97,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            284 => 
            array (
                'follower_id' => 97,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:40:29',
            ),
            285 => 
            array (
                'follower_id' => 97,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:46:13',
            ),
            286 => 
            array (
                'follower_id' => 98,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            287 => 
            array (
                'follower_id' => 98,
                'following_id' => 15,
                'created_at' => '2026-05-18 13:40:29',
            ),
            288 => 
            array (
                'follower_id' => 98,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:40:29',
            ),
            289 => 
            array (
                'follower_id' => 98,
                'following_id' => 32,
                'created_at' => '2026-05-18 13:46:13',
            ),
            290 => 
            array (
                'follower_id' => 98,
                'following_id' => 43,
                'created_at' => '2026-05-18 13:40:29',
            ),
            291 => 
            array (
                'follower_id' => 98,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            292 => 
            array (
                'follower_id' => 98,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            293 => 
            array (
                'follower_id' => 98,
                'following_id' => 55,
                'created_at' => '2026-05-18 13:46:13',
            ),
            294 => 
            array (
                'follower_id' => 98,
                'following_id' => 58,
                'created_at' => '2026-05-18 13:40:29',
            ),
            295 => 
            array (
                'follower_id' => 98,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            296 => 
            array (
                'follower_id' => 98,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            297 => 
            array (
                'follower_id' => 98,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            298 => 
            array (
                'follower_id' => 98,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:46:13',
            ),
            299 => 
            array (
                'follower_id' => 98,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            300 => 
            array (
                'follower_id' => 98,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:46:13',
            ),
            301 => 
            array (
                'follower_id' => 98,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            302 => 
            array (
                'follower_id' => 98,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            303 => 
            array (
                'follower_id' => 98,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            304 => 
            array (
                'follower_id' => 99,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            305 => 
            array (
                'follower_id' => 99,
                'following_id' => 19,
                'created_at' => '2026-05-18 13:46:13',
            ),
            306 => 
            array (
                'follower_id' => 99,
                'following_id' => 20,
                'created_at' => '2026-05-18 13:46:13',
            ),
            307 => 
            array (
                'follower_id' => 99,
                'following_id' => 22,
                'created_at' => '2026-05-18 13:46:13',
            ),
            308 => 
            array (
                'follower_id' => 99,
                'following_id' => 29,
                'created_at' => '2026-05-18 13:46:13',
            ),
            309 => 
            array (
                'follower_id' => 99,
                'following_id' => 36,
                'created_at' => '2026-05-18 13:40:29',
            ),
            310 => 
            array (
                'follower_id' => 99,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            311 => 
            array (
                'follower_id' => 99,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            312 => 
            array (
                'follower_id' => 99,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:40:29',
            ),
            313 => 
            array (
                'follower_id' => 99,
                'following_id' => 56,
                'created_at' => '2026-05-18 13:46:13',
            ),
            314 => 
            array (
                'follower_id' => 99,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:40:29',
            ),
            315 => 
            array (
                'follower_id' => 99,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            316 => 
            array (
                'follower_id' => 99,
                'following_id' => 65,
                'created_at' => '2026-05-18 13:46:13',
            ),
            317 => 
            array (
                'follower_id' => 99,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            318 => 
            array (
                'follower_id' => 99,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            319 => 
            array (
                'follower_id' => 99,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            320 => 
            array (
                'follower_id' => 99,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            321 => 
            array (
                'follower_id' => 99,
                'following_id' => 95,
                'created_at' => '2026-05-18 13:40:29',
            ),
            322 => 
            array (
                'follower_id' => 99,
                'following_id' => 101,
                'created_at' => '2026-05-18 13:40:29',
            ),
            323 => 
            array (
                'follower_id' => 100,
                'following_id' => 6,
                'created_at' => '2026-05-18 13:46:13',
            ),
            324 => 
            array (
                'follower_id' => 100,
                'following_id' => 16,
                'created_at' => '2026-05-18 13:46:13',
            ),
            325 => 
            array (
                'follower_id' => 100,
                'following_id' => 18,
                'created_at' => '2026-05-18 13:40:29',
            ),
            326 => 
            array (
                'follower_id' => 100,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            327 => 
            array (
                'follower_id' => 100,
                'following_id' => 24,
                'created_at' => '2026-05-18 13:46:13',
            ),
            328 => 
            array (
                'follower_id' => 100,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:46:13',
            ),
            329 => 
            array (
                'follower_id' => 100,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            330 => 
            array (
                'follower_id' => 100,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:40:29',
            ),
            331 => 
            array (
                'follower_id' => 100,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:40:29',
            ),
            332 => 
            array (
                'follower_id' => 100,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:40:29',
            ),
            333 => 
            array (
                'follower_id' => 100,
                'following_id' => 63,
                'created_at' => '2026-05-18 13:46:13',
            ),
            334 => 
            array (
                'follower_id' => 100,
                'following_id' => 69,
                'created_at' => '2026-05-18 13:46:13',
            ),
            335 => 
            array (
                'follower_id' => 100,
                'following_id' => 72,
                'created_at' => '2026-05-18 13:40:29',
            ),
            336 => 
            array (
                'follower_id' => 100,
                'following_id' => 76,
                'created_at' => '2026-05-18 13:46:13',
            ),
            337 => 
            array (
                'follower_id' => 100,
                'following_id' => 81,
                'created_at' => '2026-05-18 13:40:29',
            ),
            338 => 
            array (
                'follower_id' => 100,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            339 => 
            array (
                'follower_id' => 100,
                'following_id' => 94,
                'created_at' => '2026-05-18 13:46:13',
            ),
            340 => 
            array (
                'follower_id' => 100,
                'following_id' => 96,
                'created_at' => '2026-05-18 13:46:13',
            ),
            341 => 
            array (
                'follower_id' => 100,
                'following_id' => 103,
                'created_at' => '2026-05-18 13:40:29',
            ),
            342 => 
            array (
                'follower_id' => 101,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            343 => 
            array (
                'follower_id' => 101,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            344 => 
            array (
                'follower_id' => 101,
                'following_id' => 30,
                'created_at' => '2026-05-18 13:46:13',
            ),
            345 => 
            array (
                'follower_id' => 101,
                'following_id' => 35,
                'created_at' => '2026-05-18 13:40:29',
            ),
            346 => 
            array (
                'follower_id' => 101,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:40:29',
            ),
            347 => 
            array (
                'follower_id' => 101,
                'following_id' => 44,
                'created_at' => '2026-05-18 13:40:29',
            ),
            348 => 
            array (
                'follower_id' => 101,
                'following_id' => 46,
                'created_at' => '2026-05-18 13:46:13',
            ),
            349 => 
            array (
                'follower_id' => 101,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:46:13',
            ),
            350 => 
            array (
                'follower_id' => 101,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            351 => 
            array (
                'follower_id' => 101,
                'following_id' => 52,
                'created_at' => '2026-05-18 13:40:29',
            ),
            352 => 
            array (
                'follower_id' => 101,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:40:29',
            ),
            353 => 
            array (
                'follower_id' => 101,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:46:13',
            ),
            354 => 
            array (
                'follower_id' => 101,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:46:13',
            ),
            355 => 
            array (
                'follower_id' => 101,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:46:13',
            ),
            356 => 
            array (
                'follower_id' => 101,
                'following_id' => 70,
                'created_at' => '2026-05-18 13:40:29',
            ),
            357 => 
            array (
                'follower_id' => 101,
                'following_id' => 80,
                'created_at' => '2026-05-18 13:40:29',
            ),
            358 => 
            array (
                'follower_id' => 101,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:46:13',
            ),
            359 => 
            array (
                'follower_id' => 101,
                'following_id' => 88,
                'created_at' => '2026-05-18 13:40:29',
            ),
            360 => 
            array (
                'follower_id' => 101,
                'following_id' => 91,
                'created_at' => '2026-05-18 13:46:13',
            ),
            361 => 
            array (
                'follower_id' => 101,
                'following_id' => 92,
                'created_at' => '2026-05-18 13:40:29',
            ),
            362 => 
            array (
                'follower_id' => 102,
                'following_id' => 8,
                'created_at' => '2026-05-18 13:40:29',
            ),
            363 => 
            array (
                'follower_id' => 102,
                'following_id' => 10,
                'created_at' => '2026-05-18 13:40:29',
            ),
            364 => 
            array (
                'follower_id' => 102,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            365 => 
            array (
                'follower_id' => 102,
                'following_id' => 21,
                'created_at' => '2026-05-18 13:40:29',
            ),
            366 => 
            array (
                'follower_id' => 102,
                'following_id' => 45,
                'created_at' => '2026-05-18 13:40:29',
            ),
            367 => 
            array (
                'follower_id' => 102,
                'following_id' => 47,
                'created_at' => '2026-05-18 13:46:13',
            ),
            368 => 
            array (
                'follower_id' => 102,
                'following_id' => 49,
                'created_at' => '2026-05-18 13:46:13',
            ),
            369 => 
            array (
                'follower_id' => 102,
                'following_id' => 50,
                'created_at' => '2026-05-18 13:40:29',
            ),
            370 => 
            array (
                'follower_id' => 102,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:46:13',
            ),
            371 => 
            array (
                'follower_id' => 102,
                'following_id' => 54,
                'created_at' => '2026-05-18 13:46:13',
            ),
            372 => 
            array (
                'follower_id' => 102,
                'following_id' => 59,
                'created_at' => '2026-05-18 13:40:29',
            ),
            373 => 
            array (
                'follower_id' => 102,
                'following_id' => 61,
                'created_at' => '2026-05-18 13:46:13',
            ),
            374 => 
            array (
                'follower_id' => 102,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:46:13',
            ),
            375 => 
            array (
                'follower_id' => 102,
                'following_id' => 68,
                'created_at' => '2026-05-18 13:46:13',
            ),
            376 => 
            array (
                'follower_id' => 102,
                'following_id' => 74,
                'created_at' => '2026-05-18 13:46:13',
            ),
            377 => 
            array (
                'follower_id' => 102,
                'following_id' => 75,
                'created_at' => '2026-05-18 13:40:29',
            ),
            378 => 
            array (
                'follower_id' => 102,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            379 => 
            array (
                'follower_id' => 102,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:40:29',
            ),
            380 => 
            array (
                'follower_id' => 102,
                'following_id' => 99,
                'created_at' => '2026-05-18 13:40:29',
            ),
            381 => 
            array (
                'follower_id' => 102,
                'following_id' => 100,
                'created_at' => '2026-05-18 13:46:13',
            ),
            382 => 
            array (
                'follower_id' => 103,
                'following_id' => 5,
                'created_at' => '2026-05-18 13:46:13',
            ),
            383 => 
            array (
                'follower_id' => 103,
                'following_id' => 9,
                'created_at' => '2026-05-18 13:40:29',
            ),
            384 => 
            array (
                'follower_id' => 103,
                'following_id' => 13,
                'created_at' => '2026-05-18 13:46:13',
            ),
            385 => 
            array (
                'follower_id' => 103,
                'following_id' => 15,
                'created_at' => '2026-05-20 07:45:34',
            ),
            386 => 
            array (
                'follower_id' => 103,
                'following_id' => 17,
                'created_at' => '2026-05-18 13:46:13',
            ),
            387 => 
            array (
                'follower_id' => 103,
                'following_id' => 21,
                'created_at' => '2026-05-21 22:50:50',
            ),
            388 => 
            array (
                'follower_id' => 103,
                'following_id' => 25,
                'created_at' => '2026-05-18 13:46:13',
            ),
            389 => 
            array (
                'follower_id' => 103,
                'following_id' => 26,
                'created_at' => '2026-05-18 13:40:29',
            ),
            390 => 
            array (
                'follower_id' => 103,
                'following_id' => 28,
                'created_at' => '2026-05-20 12:51:55',
            ),
            391 => 
            array (
                'follower_id' => 103,
                'following_id' => 32,
                'created_at' => '2026-05-21 22:30:56',
            ),
            392 => 
            array (
                'follower_id' => 103,
                'following_id' => 42,
                'created_at' => '2026-05-18 13:46:13',
            ),
            393 => 
            array (
                'follower_id' => 103,
                'following_id' => 48,
                'created_at' => '2026-05-18 13:40:29',
            ),
            394 => 
            array (
                'follower_id' => 103,
                'following_id' => 51,
                'created_at' => '2026-05-18 13:46:13',
            ),
            395 => 
            array (
                'follower_id' => 103,
                'following_id' => 57,
                'created_at' => '2026-05-18 13:46:13',
            ),
            396 => 
            array (
                'follower_id' => 103,
                'following_id' => 64,
                'created_at' => '2026-05-18 13:40:29',
            ),
            397 => 
            array (
                'follower_id' => 103,
                'following_id' => 66,
                'created_at' => '2026-05-18 13:40:29',
            ),
            398 => 
            array (
                'follower_id' => 103,
                'following_id' => 77,
                'created_at' => '2026-05-18 13:40:29',
            ),
            399 => 
            array (
                'follower_id' => 103,
                'following_id' => 78,
                'created_at' => '2026-05-18 13:40:29',
            ),
            400 => 
            array (
                'follower_id' => 103,
                'following_id' => 82,
                'created_at' => '2026-05-18 13:46:13',
            ),
            401 => 
            array (
                'follower_id' => 103,
                'following_id' => 85,
                'created_at' => '2026-05-18 13:40:29',
            ),
            402 => 
            array (
                'follower_id' => 103,
                'following_id' => 90,
                'created_at' => '2026-05-18 13:40:29',
            ),
            403 => 
            array (
                'follower_id' => 103,
                'following_id' => 93,
                'created_at' => '2026-05-18 13:46:13',
            ),
            404 => 
            array (
                'follower_id' => 103,
                'following_id' => 95,
                'created_at' => '2026-05-20 12:10:42',
            ),
            405 => 
            array (
                'follower_id' => 103,
                'following_id' => 97,
                'created_at' => '2026-05-18 13:46:13',
            ),
            406 => 
            array (
                'follower_id' => 103,
                'following_id' => 102,
                'created_at' => '2026-05-18 13:40:29',
            ),
        ));
        
        
    }
}