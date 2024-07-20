<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 4; $i++) {
            DB::table('binh_luans')->insert([
                'id_tin' => rand(1, 11),
                'id_user' => $i,
                'noi_dung' => 'Nội dung bình luận của user ' . $i,
                'ngay_binh_luan' => Carbon::now()->subDays($i),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
