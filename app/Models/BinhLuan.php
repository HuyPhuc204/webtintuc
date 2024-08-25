<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table = 'binh_luans';

    protected $fillable = [
        'id_tin',
        'id_user',
        'noi_dung',
        'ngay_binh_luan',
    ];

    protected $attributes = [];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes['ngay_binh_luan'] = Carbon::now();
    }


}
